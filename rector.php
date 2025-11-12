<?php

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withFileExtensions(['php'])
    ->withImportNames(importShortClasses: false)
    ->withParallel()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withSkip([
        '**/vendor/*',
        '**/node_modules/*',
    ])
    ->withPhpSets();
