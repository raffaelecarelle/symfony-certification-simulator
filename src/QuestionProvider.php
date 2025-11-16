<?php

namespace App;

class QuestionProvider
{
    /**
     * @return array{ text: string, answers: array<string, string>, correctAnswers: string }
     */
    public function getSymfonyQuestions(): array
    {
        return require __DIR__.'/../data/sf-questions.php';
    }

    /**
     * @return array{ text: string, answers: array<string, string>, correctAnswers: string }
     */
    public function getPhpQuestions(): array
    {
        return require __DIR__.'/../data/php-questions.php';
    }
}
