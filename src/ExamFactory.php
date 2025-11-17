<?php

namespace App;

final readonly class ExamFactory
{
    public const QUESTIONS_COUNT = 50;

    public function __construct(
        private QuestionProvider $questionProvider = new QuestionProvider(),
    ) {
    }

    /**
     * @param array{symfonyOnly?: bool, phpOnly?: bool, phpQuestionCap?: int, sfQuestionCap?: int} $options
     */
    public function make(array $options = []): Exam
    {
        $finalQuestions = [];

        if (!\array_key_exists('symfonyOnly', $options) || true === $options['symfonyOnly']) {
            $sfQuestions = $this->questionProvider->getSymfonyQuestions();
            $sfIndexes = array_rand($sfQuestions, $options['sfQuestionCap'] ?? self::QUESTIONS_COUNT);
            $this->createRandomQuestionSet($sfIndexes, $sfQuestions, $finalQuestions);
        }

        if (!\array_key_exists('phpOnly', $options) || true === $options['phpOnly']) {
            $phpQuestions = $this->questionProvider->getPhpQuestions();
            $phpIndexes = array_rand($phpQuestions, $options['phpQuestionCap'] ?? self::QUESTIONS_COUNT);
            $this->createRandomQuestionSet($phpIndexes, $phpQuestions, $finalQuestions);
        }

        shuffle($finalQuestions);

        return new Exam($finalQuestions);
    }

    /**
     * @param array<int, int>                                                                                                             $indexes
     * @param array<array{text: string, answers: array<string, string>, correctAnswers: array<string>, linkAtDocumentation: string|null}> $questions
     * @param Question[]                                                                                                                  $finalQuestions
     */
    public function createRandomQuestionSet(array|int|string $indexes, array $questions, array &$finalQuestions = []): void
    {
        foreach ($indexes as $index) {
            $question = $questions[$index];

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
    }
}
