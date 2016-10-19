<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/** @noinspection PhpUndefinedVariableInspection */
call_user_func(
    function ($extensionKey) {
        // Plugin registration
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Romm.' . $extensionKey,
            'Example',
            array(
                'DefaultExample' => 'showForm, submitForm'
            ),
            array(
                'DefaultExample' => 'showForm, submitForm'
            )
        );
    },
    $_EXTKEY
);
