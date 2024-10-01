<?php
namespace Coyote\Domain;

use Coyote\User;

readonly class UserRegistrations
{
    private UniformDates $uniformDates;

    public function __construct()
    {
        $this->uniformDates = new UniformDates();
    }

    public function inRange(HistoryRange $range): array
    {
        return $this->fillEmptyWeekDates(
            $range->startDate(),
            $range->endDate(),
            $this->fetchRegistrationsByWeekDates($range->startDate(), $range->endDate()));
    }

    private function fetchRegistrationsByWeekDates(string $from, string $to): array
    {
        return User::withTrashed()
            ->where('created_at', '>=', "$from 00:00:00")
            ->where('created_at', '<', "$to 24:00:00")
            ->selectRaw("date_trunc('week', created_at)::date as created_at_group, Count(*) AS count")
            ->groupByRaw("date_trunc('week', created_at)")
            ->get()
            ->pluck(key:'created_at_group', value:'count')
            ->toArray();
    }

    private function fillEmptyWeekDates(string $startDate, string $endDate, array $registrationWeekDates): array
    {
        return \array_merge(
            $this->emptyWeekDates($startDate, $endDate),
            $registrationWeekDates,
        );
    }

    private function emptyWeekDates(string $from, string $to): array
    {
        return $this->createArray(
            keys:$this->uniformDates->uniformWeeks($from, $to),
            value:0);
    }

    private function createArray(array $keys, int $value): array
    {
        $values = \array_fill(0, \count($keys), $value);
        return \array_combine($keys, $values);
    }
}