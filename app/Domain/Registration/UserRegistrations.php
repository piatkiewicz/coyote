<?php
namespace Coyote\Domain\Registration;

use Coyote\Domain\UniformDates;
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
        return \array_merge(
            $this->arrayFrom(
                keys:$this->uniformDates($range),
                value:0),
            $this->fetchRegistrationsByPeriod($range->startDate(), $range->endDate(), $range->period),
        );
    }

    private function fetchRegistrationsByPeriod(string $from, string $to, Period $period): array
    {
        $dateTruncSqlField = $this->dateTruncSqlField($period);
        return User::withTrashed()
            ->where('created_at', '>=', "$from 00:00:00")
            ->where('created_at', '<', "$to 24:00:00")
            ->selectRaw("$dateTruncSqlField as created_at_group, Count(*) AS count")
            ->groupByRaw($dateTruncSqlField)
            ->get()
            ->pluck(key:'created_at_group', value:'count')
            ->toArray();
    }

    private function dateTruncSqlField(Period $period): string
    {
        return match ($period) {
            Period::Week => "date_trunc('week', created_at)::date",
            Period::Month => "date_trunc('month', created_at)::date",
            Period::Year => "date_trunc('year', created_at)::date",
        };
    }

    private function uniformDates(HistoryRange $range): array
    {
        return match ($range->period) {
            Period::Week => $this->uniformDates->uniformWeeks($range->startDate(), $range->endDate()),
            Period::Month => $this->uniformDates->uniformMonths($range->startDate(), $range->endDate()),
            Period::Year => $this->uniformDates->uniformYears($range->startDate(), $range->endDate()),
        };
    }

    private function arrayFrom(array $keys, int $value): array
    {
        $values = \array_fill(0, \count($keys), $value);
        return \array_combine($keys, $values);
    }
}
