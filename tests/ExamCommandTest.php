<?php

namespace App\Tests;

use App\ExamCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class ExamCommandTest extends TestCase
{
    public function testExecute(): void
    {
        $command = new ExamCommand();
        $tester = new CommandTester($command);

        $inputs = [];
        $answers = ['A', 'B', 'C', 'D'];
        for ($i = 1; $i <= 2; ++$i) {
            $inputs[] = $answers[array_rand($answers)];
        }

        $tester->setInputs($inputs);
        $tester->execute([
            '--php-only' => false,
            '--sf-only' => false,
            '--php-questions' => 1,
            '--sf-questions' => 2,
        ]);

        $tester->assertCommandIsSuccessful();
    }
}
