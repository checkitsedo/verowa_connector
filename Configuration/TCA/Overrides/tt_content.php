<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaConnect',
    'Eventlist',
    'LLL:EXT:verowa_connect/Resources/Private/Language/locallang.xlf:plugin.eventlist.title',
	'EXT:verowa_connect/Resources/Public/Icons/user_plugin_eventlist.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaConnect',
    'Eventdetails',
    'LLL:EXT:verowa_connect/Resources/Private/Language/locallang.xlf:plugin.eventdetails.title',
	'EXT:verowa_connect/Resources/Public/Icons/user_plugin_eventdetails.svg'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaconnect_eventlist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaconnect_eventlist',
    'FILE:EXT:verowa_connect/Configuration/FlexForms/PluginEventlist.xml'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaconnect_eventdetails'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaconnect_eventdetails',
    'FILE:EXT:verowa_connect/Configuration/FlexForms/PluginEventdetails.xml'
);
