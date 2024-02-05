<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person',
        'label' => 'person_id',
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
        'searchFields' => 'person_id,name,firstname,lastname,phone,profession,email',
        'iconfile' => 'EXT:verowa_connector/Resources/Public/Icons/tx_verowaconnector_domain_model_person.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, person_id, name, firstname, lastname, phone, profession, email, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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

        'person_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person.person_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'firstname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person.firstname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'lastname' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person.lastname',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'profession' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person.profession',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_person.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
    
        'events' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
