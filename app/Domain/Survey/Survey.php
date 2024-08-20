<?php
namespace Coyote\Domain\Survey;

use Coyote\Services\Guest;

readonly class Survey
{
    public function __construct(private Guest $guest)
    {
    }

    public function setState(string $state): void
    {
        $this->guest->setSetting('surveyState', $state);
    }

    public function setChoice(string $choice): void
    {
        $this->guest->setSetting('postCommentStyle', $choice);
    }

    public function state(): string
    {
        return $this->normalizedState($this->guest->getSetting('surveyState'));
    }

    public function choice(): string
    {
        return $this->normalizedChoice($this->guest->getSetting('postCommentStyle'));
    }

    private function normalizedState(?string $state): string
    {
        if ($this->isState($state)) {
            return $state;
        }
        return 'survey-none';
    }

    private function isState(?string $state): bool
    {
        return \in_array($state, [
            'survey-none',
            'survey-invited',
            'survey-declined',
            'survey-accepted',
            'survey-instructed',
            'survey-gone',
        ]);
    }

    private function normalizedChoice(?string $style): string
    {
        if (\in_array($style, ['modern', 'legacy'])) {
            return $style;
        }
        return 'none';
    }
}
