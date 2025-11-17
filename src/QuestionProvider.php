<?php

namespace App;

class QuestionProvider
{
    /**
     * @return list<array{ text: string, answers: array<string, string>, correctAnswers: array<string>, linkAtDocumentation: string|null}>
     */
    public function getSymfonyQuestions(): array
    {
        return require __DIR__.'/../data/sf-questions.php';
    }

    /**
     * @return list<array{ text: string, answers: array<string, string>, correctAnswers: array<string>, linkAtDocumentation: string|null}>
     */
    public function getPhpQuestions(): array
    {
        return require __DIR__.'/../data/php-questions.php';
    }
}
