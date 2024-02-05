<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaConnector',
    'Eventlist',
    'LLL:EXT:verowa_connector/Resources/Private/Language/locallang.xlf:plugin.eventlist.title',
	'EXT:verowa_connector/Resources/Public/Icons/user_plugin_eventlist.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaConnector',
    'Eventdetails',
    'LLL:EXT:verowa_connector/Resources/Private/Language/locallang.xlf:plugin.eventdetails.title',
	'EXT:verowa_connector/Resources/Public/Icons/user_plugin_eventdetails.svg'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaconnector_eventlist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaconnector_eventlist',
    'FILE:EXT:verowa_connector/Configuration/FlexForms/PluginEventlist.xml'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaconnector_eventdetails'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaconnector_eventdetails',
    'FILE:EXT:verowa_connector/Configuration/FlexForms/PluginEventdetails.xml'
);
