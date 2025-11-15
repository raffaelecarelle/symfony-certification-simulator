<?php

namespace App;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
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
                The exam has started.
                Question can have multiple answers, separated by a comma.
            EOF
        );

        $examFactory = new ExamFactory();
        $exam = $examFactory->make();
        $style->writeln(\sprintf('You have %d questions to answer.', $exam->getNumberOfQuestions()));
        $questions = $exam->getQuestions();

        $progressBar = $style->createProgressBar(\count($questions));
        $progressBar->start();
        $style->newLine(2);

        while (\count($questions) > 0) {
            /** @var Question $question */
            $question = array_shift($questions);

            $style->section($question->getText());

            $helper = new QuestionHelper();
            $choiceQuestion = new ChoiceQuestion('', $question->getAnswers());
            $choiceQuestion->setErrorMessage('Answer %s is invalid.');
            $choiceQuestion->setMultiselect(\count($question->getCorrectAnswer()) > 1);

            $answer = $helper->ask($input, $output, $choiceQuestion);

            if (\is_string($answer)) {
                $answer = [$answer];
            }

            if ($question->isCorrect($answer)) {
                $style->success('Correct!');
            } else {
                if (null !== $question->getLinkAtDocumentation()) {
                    $style->error('The answer is incorrect. The link at documentation is: '.$question->getLinkAtDocumentation());
                } else {
                    $style->error('The answer is incorrect.');
                }
            }

            $progressBar->advance();
            $style->newLine(2);
        }

        $progressBar->finish();

        $style->info('You have finished the exam.');
        $style->table(
            ['Total Score', 'Corrects', 'Incorrect'],
            [
                [$exam->getPercentage().'%', $exam->getCorrectCount(), $exam->getIncorrectCount()],
            ]
        );

        return Command::SUCCESS;
    }
}
