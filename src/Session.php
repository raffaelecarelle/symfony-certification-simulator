<?php

namespace App;

final class Session
{
    public function start(): void
    {
        if(!session_id()) {
            session_start();
        }
    }

    public function proceed(string $answer, Question $question): void
    {
        $this->start();

        $session = $_SESSION['exam'] ?? [
            'exam' => [
                'points' => 0,
                'questions' => []
            ]
        ];

        $session['exam']['questions'][$question->getText()] =
            $question->isSkipped() ? 'skipped' : $question->isCorrect($answer);

        $session['exam']['points'] += $question->isCorrect($answer) ? 1 : 0;

        $_SESSION['exam'] = $session;
    }

    public function close(): void
    {
        if(session_id()) {
            session_destroy();
        }
    }
}