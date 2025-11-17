<?php

namespace App\Tests;

use App\ExamCommand;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class ExamCommandTest extends TestCase
{
    #[DataProvider('commandOptionsProvider')]
    public function testExecute(bool $phpOnly, bool $sfOnly, int $phpQuestions, int $sfQuestions): void
    {
        $command = new ExamCommand();
        $tester = new CommandTester($command);

        $totalQuestions = ($phpOnly ? $phpQuestions : 0) + ($sfOnly ? $sfQuestions : 0);
        if (!$phpOnly && !$sfOnly) {
            $totalQuestions = $phpQuestions + $sfQuestions;
        }

        $answers = ['A', 'B', 'C', 'D'];
        $inputs = array_map(
            fn () => $answers[array_rand($answers)],
            range(1, $totalQuestions)
        );

        $tester->setInputs($inputs);
        $tester->execute([
            '--php-only' => $phpOnly,
            '--sf-only' => $sfOnly,
            '--php-questions' => $phpQuestions,
            '--sf-questions' => $sfQuestions,
        ]);

        $tester->assertCommandIsSuccessful();
    }

    public static function commandOptionsProvider(): \Generator
    {
        foreach ([true, false] as $phpOnly) {
            foreach ([true, false] as $sfOnly) {
                foreach ([0, 1, 2, 3] as $phpQuestions) {
                    foreach ([0, 1, 2, 3] as $sfQuestions) {
                        yield "PHP:{$phpOnly}_SF:{$sfOnly}_PHPq:{$phpQuestions}_SFq:{$sfQuestions}" => [
                            $phpOnly,
                            $sfOnly,
                            $phpQuestions,
                            $sfQuestions,
                        ];
                    }
                }
            }
        }
    }
}
