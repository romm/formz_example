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

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript/Bootstrap/Bootstrap3',
            '[Formz] Form example - Twitter Bootstrap 3 Assets'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript/Foundation/Foundation5',
            '[Formz] Form example - Foundation 5 Assets'
        );

        $defaultPluginKey = 'formzexample_example';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$defaultPluginKey] = 'pi_flexform';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$defaultPluginKey] = 'recursive,select_key,pages';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($defaultPluginKey, "FILE:EXT:$extensionKey/Configuration/FlexForms/FlexForm.xml");
    },
    $_EXTKEY
);
