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
                'MultiLayoutExample' => 'showForm, submitForm'
            ),
            array(
                'MultiLayoutExample' => 'showForm, submitForm'
            )
        );
    },
    $_EXTKEY
);
