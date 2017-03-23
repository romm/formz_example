<?php
/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title'       => 'FormZ • Modern form handler (examples)',
    'version'     => '0.3.0',
    'state'       => 'beta',
    'description' => 'Provides plug-in examples for the extension FormZ. Visit typo3-formz.com for more information.',

    'author'       => 'Romain Canon',
    'author_email' => 'romain.hydrocanon@gmail.com',

    'category'         => 'example',
    'clearCacheOnLoad' => 1,

    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-8.6.99',
            'formz' => '1.0.0-0.99.99'
        ]
    ]
];
