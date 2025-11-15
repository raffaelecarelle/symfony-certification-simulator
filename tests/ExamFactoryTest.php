<?php

namespace App\Tests;

use App\Exam;
use App\ExamFactory;
use App\Question;
use App\QuestionProvider;
use PHPUnit\Framework\TestCase;

class ExamFactoryTest extends TestCase
{
    public function testMakeReturnsExamWithCorrectNumberOfQuestions(): void
    {
        $mockQuestionProvider = $this->createMock(QuestionProvider::class);
        $questions = $this->generateMockQuestions(100);
        $mockQuestionProvider->expects(self::once())
            ->method('get')
            ->willReturn($questions);

        $examFactory = new ExamFactory($mockQuestionProvider);
        $exam = $examFactory->make();

        self::assertInstanceOf(Exam::class, $exam);
        self::assertCount(75, $exam->getQuestions());
    }

    public function testMakeShufflesQuestions(): void
    {
        $mockQuestionProvider = $this->createMock(QuestionProvider::class);
        $questions = $this->generateMockQuestions(75);
        $mockQuestionProvider->expects(self::once())
            ->method('get')
            ->willReturn($questions);

        $examFactory = new ExamFactory($mockQuestionProvider);
        $exam = $examFactory->make();

        // Extracting question texts for comparison
        $originalTexts = array_column($questions, 'text');
        $shuffledTexts = array_map(fn (Question $q) => $q->getText(), $exam->getQuestions());

        self::assertNotSame($originalTexts, $shuffledTexts);
        self::assertCount(75, $shuffledTexts);
    }

    /**
     * @return list<array<string, list<string>|string>>
     */
    private function generateMockQuestions(int $count): array
    {
        $questions = [];
        for ($i = 0; $i < $count; ++$i) {
            $questions[] = [
                'text' => "Question $i",
                'answers' => [
                    0 => "Answer A$i",
                    1 => "Answer B$i",
                    2 => "Answer C$i",
                    3 => "Answer D$i",
                ],
                'correctAnswers' => ['2'],
            ];
        }

        return $questions;
    }
}
