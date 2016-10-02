<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/** @noinspection PhpUndefinedVariableInspection */
call_user_func(
    function ($extensionKey) {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            $extensionKey,
            'Example',
            '[Formz] Form example'
        );

        // Including TypoScript.
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript',
            '[Formz] Form example - Configuration'
        );
    },
    $_EXTKEY
);