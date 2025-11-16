<?php

namespace App;

final readonly class ExamFactory
{
    public const QUESTIONS_COUNT = 50;

    public function __construct(
        private QuestionProvider $questionProvider = new QuestionProvider(),
    ) {
    }

    public function make(): Exam
    {
        $sfQuestions = $this->questionProvider->getSymfonyQuestions();
        $phpQuestions = $this->questionProvider->getPhpQuestions();

        $sfIndexes = array_rand($sfQuestions, self::QUESTIONS_COUNT);
        $phpIndexes = array_rand($phpQuestions, 25 /* For now */);

        $finalQuestions = [];
        foreach ($sfIndexes as $index) {
            $question = $sfQuestions[$index];

            // Original answers and original correct indexes
            /** @var array<string, string> $originalAnswers */
            $originalAnswers = $question['answers'];
            /** @var array<string> $originalCorrectIndexes */
            $originalCorrectIndexes = $question['correctAnswers'];

            // 1. Attach the original index to each answer
            $answersWithIndex = [];
            foreach ($originalAnswers as $i => $answerText) {
                $answersWithIndex[] = [
                    'originalIndex' => $i,
                    'text' => $answerText,
                ];
            }

            // 2. Shuffle the answers
            shuffle($answersWithIndex);

            // 3. Rebuild the answers array and the new correct indexes
            $shuffledAnswers = [];
            $shuffledCorrectIndexes = [];

            foreach ($answersWithIndex as $newIndex => $item) {
                // Map 0 => 'A', 1 => 'B', 2 => 'C', ...
                $label = \chr(65 + $newIndex);
                $shuffledAnswers[$label] = $item['text'];

                // if the original index was correct, the new index is correct
                if (\in_array($item['originalIndex'], $originalCorrectIndexes, true)) {
                    $shuffledCorrectIndexes[] = $label;
                }
            }

            $finalQuestions[] = new Question(
                $question['text'],
                $shuffledAnswers,
                $shuffledCorrectIndexes,
                $question['linkAtDocumentation'] ?? null,
            );
        }

        foreach ($phpIndexes as $index) {
            $question = $phpQuestions[$index];

            // Original answers and original correct indexes
            /** @var array<string, string> $originalAnswers */
            $originalAnswers = $question['answers'];
            /** @var array<string> $originalCorrectIndexes */
            $originalCorrectIndexes = $question['correctAnswers'];

            // 1. Attach the original index to each answer
            $answersWithIndex = [];
            foreach ($originalAnswers as $i => $answerText) {
                $answersWithIndex[] = [
                    'originalIndex' => $i,
                    'text' => $answerText,
                ];
            }

            // 2. Shuffle the answers
            shuffle($answersWithIndex);

            // 3. Rebuild the answers array and the new correct indexes
            $shuffledAnswers = [];
            $shuffledCorrectIndexes = [];

            foreach ($answersWithIndex as $newIndex => $item) {
                // Map 0 => 'A', 1 => 'B', 2 => 'C', ...
                $label = \chr(65 + $newIndex);
                $shuffledAnswers[$label] = $item['text'];

                // if the original index was correct, the new index is correct
                if (\in_array($item['originalIndex'], $originalCorrectIndexes, true)) {
                    $shuffledCorrectIndexes[] = $label;
                }
            }

            $finalQuestions[] = new Question(
                $question['text'],
                $shuffledAnswers,
                $shuffledCorrectIndexes,
                $question['linkAtDocumentation'] ?? null,
            );
        }

        shuffle($finalQuestions);

        return new Exam($finalQuestions);
    }
}
