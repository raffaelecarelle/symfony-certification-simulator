<?php

namespace App;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'exam:start', description: 'Start the exam')]
class ExamCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $style = new SymfonyStyle($input, $output);

        $style->info(
            <<<EOF
                The exam has started, you have 75 questions to answer.
                Question can be skipped by typing "s".
                Question can have multiple answers, separated by a comma.
            EOF
        );

        $examFactory = new ExamFactory();
        $exam = $examFactory->make();
        $questions = $exam->getQuestions();

        $progressBar = $style->createProgressBar(count($questions));
        $progressBar->start();
        $style->newLine(2);

        while (count($questions) > 0) {
            /** @var Question $question */
            $question = array_shift($questions);

            $style->section($question->getText());

            $helper = new QuestionHelper();
            $choiceQuestion = new ChoiceQuestion('', $question->getAnswers());
            $choiceQuestion->setErrorMessage('Answer %s is invalid.');
            $choiceQuestion->setMultiselect((bool) count(explode(',', $question->getCorrectAnswer())));

            $answer = $helper->ask($input, $output, $choiceQuestion);

            if (is_array($answer)) {
                $answer = implode(',', $answer);
            }

            if ($question->isCorrect($answer)) {
                $style->success('Correct!');
            } else {
                $style->error('Wrong!');
            }

            $progressBar->advance();
            $style->newLine(2);
        }

        $progressBar->finish();

        return Command::SUCCESS;
    }
}
