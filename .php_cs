<?php

// for more info see:
// https://github.com/FriendsOfPHP/PHP-CS-Fixer#usage
// https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/UPGRADE.md

$rules = [
    '@PSR2'        => true,
    'array_syntax' => ['syntax' => 'short'],
];
$excludes = [
    'bootstrap',
    'node_modules',
    'public',
    'resources/assets',
    'resources/views',
    'storage',
    'vendor',
];

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->exclude($excludes)
            ->name('*.php')
    )
;
