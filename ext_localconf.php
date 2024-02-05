<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaConnector',
			'Eventlist',
			[
				\Checkitsedo\VerowaConnector\Controller\EventController::class => 'list'
			],
			// non-cacheable actions
			[
				\Checkitsedo\VerowaConnector\Controller\EventController::class => 'list',
				\Checkitsedo\VerowaConnector\Controller\OrganizerController::class => '',
				\Checkitsedo\VerowaConnector\Controller\RoomController::class => ''
			]
		);
		
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaConnector',
			'Eventdetails',
			[
				\Checkitsedo\VerowaConnector\Controller\EventController::class => 'show'
			],
			// non-cacheable actions
			[
				\Checkitsedo\VerowaConnector\Controller\EventController::class => '',
				\Checkitsedo\VerowaConnector\Controller\OrganizerController::class => '',
				\Checkitsedo\VerowaConnector\Controller\RoomController::class => ''
			]
		);

		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:verowa_connector/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
		);

		$icons = [
			'verowa_connector-plugin-eventlist' => 'EXT:verowa_connector/Resources/Public/Icons/user_plugin_eventlist.svg',
			'verowa_connector-plugin-eventdetails' => 'EXT:verowa_connector/Resources/Public/Icons/user_plugin_eventdetails.svg',
		];
		
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		foreach ($icons as $identifier => $path) {
			$iconRegistry->registerIcon(
				$identifier,
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => $path]
			);
		};
		
		// wizards
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'mod {
				wizards.newContentElement.wizardItems.plugins {
					elements {
						eventlist {
							iconIdentifier = verowa_connector-plugin-eventlist
							title = LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowa_connector_eventlist.name
							description = LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowa_connector_eventlist.description
							tt_content_defValues {
								CType = list
								list_type = verowaconnector_eventlist
							}
						}
						eventdetails {
							iconIdentifier = verowa_connector-plugin-eventdetails
							title = LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowa_connector_eventdetails.name
							description = LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowa_connector_eventdetails.description
							tt_content_defValues {
								CType = list
								list_type = verowaconnector_eventdetails
							}
						}
					}
					show = *
				}
			}'
		);
	}
);
