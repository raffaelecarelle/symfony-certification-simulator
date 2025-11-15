<?php

namespace App\Tests;

use App\Question;
use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{
    /**
     * Tests that getText() returns the correct text string provided during construction.
     */
    public function testGetTextReturnsCorrectText(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($text, $question->getText());
    }

    /**
     * Tests that getLinkAtDocumentation() returns a valid Symfony documentation URL.
     */
    public function testGetLinkAtDocumentationReturnsSymfonyDocUrl(): void
    {
        $text = 'What is Symfony?';
        $answers = ['a' => 'A PHP framework'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = 'sf-doc/some/page.rst';

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        $expectedUrl = 'https://symfony.com/doc/current/some/page.html';
        self::assertSame($expectedUrl, $question->getLinkAtDocumentation());
    }

    /**
     * Tests that getLinkAtDocumentation() returns a valid PHP documentation URL.
     */
    public function testGetLinkAtDocumentationReturnsPhpDocUrl(): void
    {
        $text = 'What is PHP?';
        $answers = ['a' => 'A popular scripting language'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = 'php-doc/reference/array/functions/array_map.xml';

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        $expectedUrl = 'https://www.php.net/manual/en/function.array_map.php';
        self::assertSame($expectedUrl, $question->getLinkAtDocumentation());
    }

    /**
     * Tests that getLinkAtDocumentation() returns null when no link is provided.
     */
    public function testGetLinkAtDocumentationReturnsNullWhenNoLinkProvided(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertNull($question->getLinkAtDocumentation());
    }

    /**
     * Tests that getLinkAtDocumentation() returns the same link string if no transformation rule matches.
     */
    public function testGetLinkAtDocumentationReturnsOriginalLinkIfNoRuleMatches(): void
    {
        $text = 'What is custom documentation?';
        $answers = ['a' => 'A made-up example'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = 'unknown-doc/path/file.txt';

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($linkAtDocumentation, $question->getLinkAtDocumentation());
    }

    /**
     * Tests that isAnsweredCorrectly() returns true after the correct answer is provided.
     */
    public function testIsAnsweredCorrectlyReturnsTrueAfterCorrectAnswer(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        $question->isCorrect(['a']);
        self::assertTrue($question->isAnsweredCorrectly());
    }

    /**
     * Tests that isAnsweredCorrectly() returns false when no answer has been provided yet.
     */
    public function testIsAnsweredCorrectlyReturnsFalseWhenNoAnswerProvided(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);
        $question->isCorrect(['b']);
        self::assertFalse($question->isAnsweredCorrectly());
    }

    /**
     * Tests that isAnsweredCorrectly() returns false after an incorrect answer is provided.
     */
    public function testIsAnsweredCorrectlyReturnsFalseAfterIncorrectAnswer(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        $question->isCorrect(['b']);
        self::assertFalse($question->isAnsweredCorrectly());
    }

    /**
     * Tests that getAnswers() returns the correct answers array provided during construction.
     */
    public function testGetAnswersReturnsCorrectAnswers(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($answers, $question->getAnswers());
    }

    /**
     * Tests that getAnswers() correctly handles an empty answers array.
     */
    public function testGetAnswersHandlesEmptyAnswers(): void
    {
        $text = 'What is PHPUnit?';
        $answers = [];
        $correctAnswer = [''];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($answers, $question->getAnswers());
    }

    /**
     * Tests that getText() correctly handles special characters in the text.
     */
    public function testGetTextHandlesSpecialCharacters(): void
    {
        $text = 'When was PHP 8.0 released? (Answer: 2020)';
        $answers = ['a' => '2020', 'b' => '2019', 'c' => '2021'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($text, $question->getText());
    }

    /**
     * Tests that getText() returns an empty string if the constructed text is an empty string.
     */
    public function testGetTextHandlesEmptyText(): void
    {
        $text = '';
        $answers = [];
        $correctAnswer = [''];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($text, $question->getText());
    }

    /**
     * Tests that getCorrectAnswer() returns the correct answer string provided during construction.
     */
    public function testGetCorrectAnswerReturnsCorrectAnswer(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($correctAnswer, $question->getCorrectAnswer());
    }

    /**
     * Tests that isCorrect() returns true for the correct answer.
     */
    public function testIsCorrectReturnsTrueForCorrectAnswer(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertTrue($question->isCorrect(['a']));
    }

    /**
     * Tests that isCorrect() returns false for an incorrect answer.
     */
    public function testIsCorrectReturnsFalseForIncorrectAnswer(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = ['a'];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertFalse($question->isCorrect(['b']));
    }

    /**
     * Tests that getCorrectAnswer() correctly handles an empty string as the correct answer.
     */
    public function testGetCorrectAnswerHandlesEmptyCorrectAnswer(): void
    {
        $text = 'What is PHPUnit?';
        $answers = ['a' => 'A testing framework', 'b' => 'A package manager'];
        $correctAnswer = [''];
        $linkAtDocumentation = null;

        $question = new Question($text, $answers, $correctAnswer, $linkAtDocumentation);

        self::assertSame($correctAnswer, $question->getCorrectAnswer());
    }
}
