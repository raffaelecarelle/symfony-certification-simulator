<?php

namespace App;

final class Question
{
    /**
     * @param array<string, string> $answers
     */
    public function __construct(
        private readonly string $text,
        private readonly array $answers,
        private readonly string $correctAnswers,
        private bool $isSkipped = false
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return array<string, string>
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function getCorrectAnswer(): string
    {
        return $this->correctAnswers;
    }

    public function isCorrect(string $answer): bool
    {
        return strtolower($this->correctAnswers) === strtolower($answer);
    }

    public function skip(): void
    {
        $this->isSkipped = true;
    }

    public function isSkipped(): bool
    {
        return $this->isSkipped;
    }
}
