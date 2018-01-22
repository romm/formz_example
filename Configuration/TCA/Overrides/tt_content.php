<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/** @noinspection PhpUndefinedVariableInspection */
call_user_func(
    function ($extensionKey) {
        // Including TypoScript.
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript',
            '[FormZ] Forms example - Configuration'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript/View/Bootstrap/Bootstrap3',
            '[FormZ] Forms example - Assets for Twitter Bootstrap 3'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript/View/Foundation/Foundation5',
            '[FormZ] Forms example - Assets for Foundation 5 Assets'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Romm.' . $extensionKey,
            'Example',
            '[FormZ] Forms example'
        );

        $defaultPluginKey = 'formzexample_example';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$defaultPluginKey] = 'pi_flexform';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$defaultPluginKey] = 'recursive,select_key,pages';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($defaultPluginKey, "FILE:EXT:$extensionKey/Configuration/FlexForms/FlexForm.xml");
    },
    'formz_example'
);
