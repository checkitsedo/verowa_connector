<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_organizer',
        'label' => 'organizer_id',
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
        'searchFields' => 'organizer_id,organizer_name,organizer_phone,organizer_profession,organizer_email',
        'iconfile' => 'EXT:verowa_connect/Resources/Public/Icons/tx_verowaconnect_domain_model_organizer.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, organizer_id, organizer_name, organizer_phone, organizer_profession, organizer_email, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_verowaconnect_domain_model_organizer',
                'foreign_table_where' => 'AND {#tx_verowaconnect_domain_model_organizer}.{#pid}=###CURRENT_PID### AND {#tx_verowaconnect_domain_model_organizer}.{#sys_language_uid} IN (-1,0)',
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

        'organizer_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_organizer.organizer_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'organizer_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_organizer.organizer_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'organizer_phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_organizer.organizer_phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'organizer_profession' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_organizer.organizer_profession',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'organizer_email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_organizer.organizer_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
    
        'event' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
