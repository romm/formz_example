<?php
/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'Formz - Examples',
    'version'     => '0.2.0',
    'state'       => 'beta',
    'description' => 'Provides plug-in examples for the extension Formz.',

    'author'       => 'Romain Canon',
    'author_email' => 'romain.hydrocanon@gmail.com',

    'category'         => 'frontend',
    'clearCacheOnLoad' => 1,

    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-7.6.99',
            'formz' => '0.0.0-0.99.99'
        ]
    ]
];
