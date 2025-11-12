<?php

namespace App;

final class Exam
{
    public function __construct(
        private array $questions
    )
    {
    }

    public function getQuestions(): array
    {
        return $this->questions;
    }

    public function getNumberOfQuestions(): int
    {
        return count($this->questions);
    }

    public function getCorrectAnswers(): int
    {
        return count(array_filter($this->questions, fn(Question $question) => $question->isCorrect($question->getCorrectAnswer())));
    }

    public function getPoints(): int
    {
        return $this->getCorrectAnswers() * 10;
    }

    public function getPercentage(): float
    {
        return $this->getCorrectAnswers() / $this->getNumberOfQuestions() * 100;
    }

    public function isFinished(): bool
    {
        return $this->getNumberOfQuestions() === $this->getCorrectAnswers();
    }

    public function getRemainingQuestions(): array
    {
        return array_filter($this->questions, fn(Question $question) => !$question->isSkipped());
    }

    public function getSkippedQuestions(): array
    {
        return array_filter($this->questions, fn(Question $question) => $question->isSkipped());
    }

    public function getSkippedCount(): int
    {
        return count($this->getSkippedQuestions());
    }

    public function getCorrectCount(): int
    {
        return $this->getCorrectAnswers();
    }

    public function getIncorrectCount(): int
    {
        return $this->getNumberOfQuestions() - $this->getCorrectCount();
    }

    public function getPercentageCorrect(): float
    {
        return $this->getCorrectCount() / $this->getNumberOfQuestions() * 100;
    }

    public function getPercentageIncorrect(): float
    {
        return $this->getIncorrectCount() / $this->getNumberOfQuestions() * 100;
    }

    public function getPercentageSkipped(): float
    {
        return $this->getSkippedCount() / $this->getNumberOfQuestions() * 100;
    }

    public function getPercentageRemaining(): float
    {
        return 100 - $this->getPercentageSkipped() - $this->getPercentageCorrect() - $this->getPercentageIncorrect();
    }
}