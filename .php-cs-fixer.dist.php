<?php

/*
 * Additional rules or rules to override.
 * These rules will be added to default rules or will override them if the same key already exists.
 */

// Force PHPUnit assertions to use `self::` (not `static::`)
$additionalRules = [
    'php_unit_test_case_static_method_calls' => [
        'call_type' => 'self',
    ]
];

$config = new PhpCsFixer\Config();
$config->setRiskyAllowed(true);

$finder = new PhpCsFixer\Finder();

$finder
    ->in(['src', 'tests'])
    ->exclude(['*/vendor/*']);

$config->setFinder($finder);

return $config;
