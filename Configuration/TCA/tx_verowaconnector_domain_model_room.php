<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_room',
        'label' => 'room_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'room_id,room_name,room_public_name,room_location_name,room_location_url',
        'iconfile' => 'EXT:verowa_connect/Resources/Public/Icons/tx_verowaconnect_domain_model_room.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, room_id, room_name, room_public_name, room_location_name, room_location_url, room_location_url_is_external, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_verowaconnect_domain_model_room',
                'foreign_table_where' => 'AND {#tx_verowaconnect_domain_model_room}.{#pid}=###CURRENT_PID### AND {#tx_verowaconnect_domain_model_room}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'room_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_room.room_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'room_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_room.room_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'room_public_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_room.room_public_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'room_location_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_room.room_location_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'room_location_url' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_room.room_location_url',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'room_location_url_is_external' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_room.room_location_url_is_external',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
    
    ],
];
