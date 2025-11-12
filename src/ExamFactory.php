<?php

namespace App;

final readonly class ExamFactory
{
    private const QUESTIONS_COUNT = 75;

    public function __construct(
        private QuestionProvider $questionProvider = new QuestionProvider()
    ) {
    }

    /**
     * @return array<Question>
     */
    public function make(): Exam
    {
        $questions = $this->questionProvider->get();
        shuffle($questions);
        $indexes = array_rand($questions, self::QUESTIONS_COUNT);

        $finalQuestions = [];
        foreach ($indexes as $index) {
            $question = $questions[$index];
            $finalQuestions[] = new Question(
                $question['text'],
                $question['answers'],
                $question['correctAnswers']
            );
        }

        return new Exam($finalQuestions);
    }
}
