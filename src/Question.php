<?php

namespace App;

final class Question
{
    /**
     * @param array<string, string> $answers
     */
    public function __construct(
        private string $text,
        private array $answers,
        private string $correctAnswer,
        private bool $isSkipped = false
    )
    {
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
        return $this->correctAnswer;
    }

    public function isCorrect(string $answer): bool
    {
        return $answer === $this->correctAnswer;
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