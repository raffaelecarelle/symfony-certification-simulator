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

            // Original answers and original correct indexes
            $originalAnswers       = $question['answers'];
            $originalCorrectIndexes = explode(',', $question['correctAnswers']);

            // 1. Attach the original index to each answer
            $answersWithIndex = [];
            foreach ($originalAnswers as $i => $answerText) {
                $answersWithIndex[] = [
                    'originalIndex' => $i,
                    'text'          => $answerText,
                ];
            }

            // 2. Shuffle the answers
            shuffle($answersWithIndex);

            // 3. Rebuild the answers array and the new correct indexes
            $shuffledAnswers        = [];
            $shuffledCorrectIndexes = [];

            foreach ($answersWithIndex as $newIndex => $item) {
                // Map 0 => 'A', 1 => 'B', 2 => 'C', ...
                $label = chr(65 + $newIndex);
                $shuffledAnswers[$label] = $item['text'];

                // if the original index was correct, the new index is correct
                if (in_array($item['originalIndex'], $originalCorrectIndexes, true)) {
                    $shuffledCorrectIndexes[] = $label;
                }
            }

            $finalQuestions[] = new Question(
                $question['text'],
                $shuffledAnswers,
                implode(',', $shuffledCorrectIndexes),
                $question['linkAtDocumentation'] ?? null,
            );
        }

        return new Exam($finalQuestions);
    }
}
