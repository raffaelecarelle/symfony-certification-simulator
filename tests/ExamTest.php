<?php

namespace App\Tests;

use App\Exam;
use App\Question;
use PHPUnit\Framework\TestCase;

class ExamTest extends TestCase
{
    /**
     * Test that `getPercentageIncorrect` returns the correct percentage.
     */
    public function testGetPercentageIncorrectReturnsCorrectValue(): void
    {
        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);

        $correctQuestion->isCorrect(['a']);
        $incorrectQuestion->isCorrect(['b']);

        $questions = [
            $correctQuestion,
            $incorrectQuestion,
            $incorrectQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(66.67, round($exam->getPercentageIncorrect(), 2));
    }

    /**
     * Test that `getPercentageIncorrect` returns 0.0 when all answers are correct.
     */
    public function testGetPercentageIncorrectReturnsZeroWhenAllCorrect(): void
    {
        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $correctQuestion->isCorrect(['a']);

        $questions = [
            $correctQuestion,
            $correctQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(0.0, $exam->getPercentageIncorrect());
    }

    /**
     * Test that `getPercentageIncorrect` returns 100.0 when all answers are incorrect.
     */
    public function testGetPercentageIncorrectReturnsHundredWhenAllIncorrect(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $questions = [
            $incorrectQuestion,
            $incorrectQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(100.0, $exam->getPercentageIncorrect());
    }

    /**
     * Test that `getPercentageIncorrect` returns 0.0 when there are no questions.
     */
    public function testGetPercentageIncorrectReturnsZeroWhenNoQuestions(): void
    {
        $exam = new Exam([]);

        self::assertSame(0.0, $exam->getPercentageIncorrect());
    }

    /**
     * Test that `getQuestions` returns the correct list of questions.
     */
    public function testGetQuestionsReturnsCorrectQuestions(): void
    {
        $questions = [
            new Question('Question 1', [], ['a']),
            new Question('Question 2', [], ['b']),
        ];

        $exam = new Exam($questions);

        self::assertSame($questions, $exam->getQuestions());
    }

    /**
     * Test that `getNumberOfQuestions` returns the correct count of questions.
     */
    public function testGetNumberOfQuestionsReturnsCorrectCount(): void
    {
        $questions = [
            new Question('Question 1', [], ['a']),
            new Question('Question 2', [], ['b']),
            new Question('Question 3', [], ['c']),
        ];

        $exam = new Exam($questions);

        self::assertSame(3, $exam->getNumberOfQuestions());
    }

    /**
     * Test that `getNumberOfQuestions` returns zero if there are no questions.
     */
    public function testGetNumberOfQuestionsReturnsZeroWhenNoQuestions(): void
    {
        $exam = new Exam([]);

        self::assertSame(0, $exam->getNumberOfQuestions());
    }

    /**
     * Test that `getQuestions` returns an empty array if there are no questions.
     */
    public function testGetQuestionsReturnsEmptyArrayIfNoQuestions(): void
    {
        $exam = new Exam([]);

        self::assertSame([], $exam->getQuestions());
    }

    /**
     * Test that `getCorrectAnswers` returns the correct count of correctly answered questions.
     */
    public function testGetCorrectAnswersReturnsCorrectCount(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $correctQuestion->isCorrect(['a']);

        $questions = [
            $correctQuestion,
            $incorrectQuestion,
            $correctQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(2, $exam->getCorrectAnswers());
        self::assertSame(2, $exam->getCorrectCount());
    }

    /**
     * Test that `getPercentage` returns the correct percentage.
     */
    public function testGetPercentageReturnsCorrectValue(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $correctQuestion->isCorrect(['a']);

        $questions = [
            $correctQuestion,
            $incorrectQuestion,
            $correctQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(66.67, round($exam->getPercentage(), 2));
    }

    /**
     * Test that `getPercentage` returns 0 when there are no questions.
     */
    public function testGetPercentageReturnsZeroWhenNoQuestions(): void
    {
        $exam = new Exam([]);

        self::assertSame(0.0, $exam->getPercentage());
    }

    /**
     * Test that `getPercentage` handles cases with 0 correct answers gracefully.
     */
    public function testGetPercentageHandlesZeroCorrectAnswers(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $questions = [
            $incorrectQuestion,
            $incorrectQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(0.0, $exam->getPercentage());
    }

    /**
     * Test that `getCorrectAnswers` returns 0 when no questions are answered correctly.
     */
    public function testGetCorrectAnswersReturnsZeroWhenNoCorrectAnswers(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $questions = [
            $incorrectQuestion,
            $incorrectQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(0, $exam->getCorrectAnswers());
        self::assertSame(0, $exam->getCorrectCount());
    }

    /**
     * Test that `getIncorrectCount` returns the correct count of incorrect answers.
     */
    public function testGetIncorrectCountReturnsCorrectCount(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $correctQuestion->isCorrect(['a']);

        $questions = [
            $correctQuestion,
            $incorrectQuestion,
            $incorrectQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(2, $exam->getIncorrectCount());
    }

    /**
     * Test that `getIncorrectCount` returns zero when all answers are correct.
     */
    public function testGetIncorrectCountReturnsZeroWhenAllCorrect(): void
    {
        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $correctQuestion->isCorrect(['a']);

        $questions = [
            $correctQuestion,
            $correctQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(0, $exam->getIncorrectCount());
    }

    /**
     * Test that `getIncorrectCount` returns zero when there are no questions.
     */
    public function testGetIncorrectCountReturnsZeroWhenNoQuestions(): void
    {
        $exam = new Exam([]);

        self::assertSame(0, $exam->getIncorrectCount());
    }

    /**
     * Test that `getCorrectAnswers` returns 0 when there are no questions.
     */
    public function testGetCorrectAnswersReturnsZeroWhenNoQuestions(): void
    {
        $exam = new Exam([]);

        self::assertSame(0, $exam->getCorrectAnswers());
        self::assertSame(0, $exam->getCorrectCount());
    }

    /**
     * Test that `getPercentageCorrect` returns the correct percentage.
     */
    public function testGetPercentageCorrectReturnsCorrectValue(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $correctQuestion->isCorrect(['a']);

        $questions = [
            $correctQuestion,
            $incorrectQuestion,
            $correctQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(66.67, round($exam->getPercentageCorrect(), 2));
    }

    /**
     * Test that `getPercentageCorrect` returns 0.0 when there are no questions.
     */
    public function testGetPercentageCorrectReturnsZeroWhenNoQuestions(): void
    {
        $exam = new Exam([]);

        self::assertSame(0.0, $exam->getPercentageCorrect());
    }

    /**
     * Test that `getPercentageCorrect` handles cases with 0% correctly.
     */
    public function testGetPercentageCorrectHandlesZeroPercentage(): void
    {
        $incorrectQuestion = new Question('Question 2', ['a' => 'text', 'b' => 'text'], ['a']);
        $incorrectQuestion->isCorrect(['b']);

        $questions = [
            $incorrectQuestion,
            $incorrectQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(0.0, $exam->getPercentageCorrect());
    }

    /**
     * Test that `getPercentageCorrect` returns 100% when all answers are correct.
     */
    public function testGetPercentageCorrectReturnsHundredPercentWhenAllCorrect(): void
    {
        $correctQuestion = new Question('Question 1', ['a' => 'text'], ['a']);
        $correctQuestion->isCorrect(['a']);

        $questions = [
            $correctQuestion,
            $correctQuestion,
        ];

        $exam = new Exam($questions);

        self::assertSame(100.0, $exam->getPercentageCorrect());
    }
}
