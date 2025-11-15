<?php

namespace App;

final class Question
{
    /**
     * @param array<string, string> $answers
     * @param list<string>          $correctAnswers
     */
    public function __construct(
        private readonly string $text,
        private readonly array $answers,
        private readonly array $correctAnswers,
        private readonly ?string $linkAtDocumentation = null,
        private ?bool $isCorrect = null,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return array<string, string>
     */
    public function getAnswers(): array
    {
        return $this->answers;
    }

    /**
     * @return string[]
     */
    public function getCorrectAnswer(): array
    {
        return $this->correctAnswers;
    }

    /**
     * @param list<string> $answer
     */
    public function isCorrect(array $answer): bool
    {
        sort($answer);

        $isCorrect = $answer === $this->correctAnswers;
        $this->isCorrect = $isCorrect;

        return $isCorrect;
    }

    public function isAnsweredCorrectly(): bool
    {
        return $this->isCorrect;
    }

    public function getLinkAtDocumentation(): ?string
    {
        if (null === $this->linkAtDocumentation) {
            return null;
        }

        if (str_starts_with($this->linkAtDocumentation, 'php-doc/')) {
            return $this->mapPhpDocPathToPhpNetUrl($this->linkAtDocumentation);
        }

        return str_replace(['sf-doc/', '.rst'], ['https://symfony.com/doc/current/', '.html'], $this->linkAtDocumentation);
    }

    private function mapPhpDocPathToPhpNetUrl(string $docPath): ?string
    {
        $prefix = 'php-doc/';
        $suffix = '.xml';

        if (!str_starts_with($docPath, $prefix) || !str_ends_with($docPath, $suffix)) {
            return null;
        }

        // Remove prefix/suffix
        $core = substr($docPath, \strlen($prefix), -\strlen($suffix));

        // 1) language/...
        if (str_starts_with($core, 'language/')) {
            $slug = str_replace('/', '.', $core);
        }
        // 2) reference/*/functions/foo
        elseif (preg_match('#^reference/[^/]+/functions/([^/]+)$#', $core, $m)) {
            $slug = 'function.'.$m[1];
        }
        // 3) reference/spl/Class/method
        elseif (preg_match('#^reference/spl/([^/]+)/([^/]+)$#', $core, $m)) {
            $slug = $m[1].'.'.$m[2];
        }
        // 4) fallback: replace / with .
        else {
            $slug = str_replace('/', '.', $core);
        }

        return 'https://www.php.net/manual/en/'.$slug.'.php';
    }
}
