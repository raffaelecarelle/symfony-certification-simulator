<?php

/*
 * Additional rules or rules to override.
 * These rules will be added to default rules or will override them if the same key already exists.
 */

// Force PHPUnit assertions to use `self::` (not `static::`)
$additionalRules = [
    '@PSR12' => true,
    '@Symfony' => true,
    '@Symfony:risky' => true,
    'php_unit_test_case_static_method_calls' => [
        'call_type' => 'self',
    ]
];

$config = new PhpCsFixer\Config();
$config->setRiskyAllowed(true);
$config->setRules(array_merge($config->getRules(), $additionalRules));
$finder = new PhpCsFixer\Finder();

$finder
    ->in(['src', 'tests', 'data'])
    ->exclude(['*/vendor/*']);

$config->setFinder($finder);

return $config;
