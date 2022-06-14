<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaConnect',
			'Eventlist',
			[
				\Checkitsedo\VerowaConnect\Controller\EventController::class => 'list'
			],
			// non-cacheable actions
			[
				\Checkitsedo\VerowaConnect\Controller\EventController::class => 'list',
				\Checkitsedo\VerowaConnect\Controller\OrganizerController::class => '',
				\Checkitsedo\VerowaConnect\Controller\RoomController::class => ''
			]
		);
		
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaConnect',
			'Eventdetails',
			[
				\Checkitsedo\VerowaConnect\Controller\EventController::class => 'show'
			],
			// non-cacheable actions
			[
				\Checkitsedo\VerowaConnect\Controller\EventController::class => '',
				\Checkitsedo\VerowaConnect\Controller\OrganizerController::class => '',
				\Checkitsedo\VerowaConnect\Controller\RoomController::class => ''
			]
		);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:verowa_connect/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
);

		
		$icons = [
            'verowa_connect-plugin-eventlist' => 'EXT:verowa_connect/Resources/Public/Icons/user_plugin_eventlist.svg',
			'verowa_connect-plugin-eventdetails' => 'EXT:verowa_connect/Resources/Public/Icons/user_plugin_eventdetails.svg',
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
							iconIdentifier = verowa_connect-plugin-eventlist
							title = LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowa_connect_eventlist.name
							description = LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowa_connect_eventlist.description
							tt_content_defValues {
								CType = list
								list_type = verowaconnect_eventlist
							}
						}
						eventdetails {
							iconIdentifier = verowa_connect-plugin-eventdetails
							title = LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowa_connect_eventdetails.name
							description = LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowa_connect_eventdetails.description
							tt_content_defValues {
								CType = list
								list_type = verowaconnect_eventdetails
							}
						}
					}
					show = *
				}
			}'
		);
	}
);
