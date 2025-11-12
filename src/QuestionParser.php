<?php

namespace App;

final class QuestionParser
{
    /**
     * @return array<Question>
     */
    public function parse(): Exam
    {
        $questions = require __DIR__ . '/../data/questions.php';

        $randomizedQuestions = array_rand($questions, 75);

        $finalQuestions = [];
        foreach ($randomizedQuestions as $question) {
            $finalQuestions[] = new Question(
                $question['text'],
                $question['answers'],
                $question['correctAnswer']
            );
        }

        return new Exam($finalQuestions);
    }
}