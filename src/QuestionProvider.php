<?php

namespace App;

class QuestionProvider
{
    /**
     * @return array{ text: string, answers: array<string, string>, correctAnswers: string }
     */
    public function get(): array
    {
        return require __DIR__.'/../data/questions.php';
    }
}
