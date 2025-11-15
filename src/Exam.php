<?php

namespace App;

final readonly class Exam
{
    /**
     * @param Question[] $questions
     */
    public function __construct(
        private array $questions,
    ) {
    }

    /**
     * @return Question[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    public function getNumberOfQuestions(): int
    {
        return \count($this->questions);
    }

    public function getCorrectAnswers(): int
    {
        return \count(array_filter($this->questions, fn (Question $question) => $question->isAnsweredCorrectly()));
    }

    public function getPercentage(): float
    {
        if (0 === $this->getNumberOfQuestions()) {
            return 0;
        }

        return $this->getCorrectAnswers() / $this->getNumberOfQuestions() * 100;
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
        if (0 === $this->getNumberOfQuestions()) {
            return 0;
        }

        return $this->getCorrectCount() / $this->getNumberOfQuestions() * 100;
    }

    public function getPercentageIncorrect(): float
    {
        if (0 === $this->getNumberOfQuestions()) {
            return 0;
        }

        return $this->getIncorrectCount() / $this->getNumberOfQuestions() * 100;
    }
}
