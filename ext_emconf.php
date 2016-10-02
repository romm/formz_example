<?php
/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'Formz : Handler for forms - Example',
    'version'     => '0.1.0',
    'state'       => 'beta',
    'description' => 'Form example for EXT:formz',

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
