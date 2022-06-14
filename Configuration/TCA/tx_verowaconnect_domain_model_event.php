<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event',
        'label' => 'event_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
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
        'searchFields' => 'event_id,title,short_desc,long_desc,childcare_id,subscribe_person_id,baptism_offer_id,event_state,date_text,image_url,room_id,room_name,room_public_name,room_location_name,room_location_url,room_location_url_is_external',
        'iconfile' => 'EXT:verowa_connect/Resources/Public/Icons/tx_verowaconnect_domain_model_event.gif'
    ],
	'external' => [
		'general' => [
			0 => [
				'connector' => 'json',
				'parameters' => [
					'uri' => 'https://api.verowa.ch/getevents/stjosef-zuerich/1ad89c27e1a89ef6aa34f34e4adf7448',
					'encoding' => 'utf-8',
					'headers' => [
						'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:75.0) Gecko/20100101 Firefox/75.0',
						'Accept' => 'application/json'
					]
				],
				'data' => 'array',
				'arrayPath' => 'events',
				'referenceUid' => 'event_id',
				'group' => 'stjosef',
				'priority' => 10,
				'description' => 'Import of all events from Verowa'
			]
		]
	],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, event_id, date_from, date_to, title, hide_time, short_desc, long_desc, childcare_id, subscribe_date, subscribe_time, subscribe_person_id, baptism_offer_id, event_type, event_state, date_text, image_url, subscriptions, organizer, rooms, room_id, room_name, room_public_name, room_location_name, room_location_url, room_location_url_is_external, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_verowaconnect_domain_model_event',
                'foreign_table_where' => 'AND {#tx_verowaconnect_domain_model_event}.{#pid}=###CURRENT_PID### AND {#tx_verowaconnect_domain_model_event}.{#sys_language_uid} IN (-1,0)',
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

        'event_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.event_id',
            'config' => [
                'type' => 'input',
            ],
			'external' => [
				0 => [
					'field' => 'event_id'
				]
			]
        ],
        'date_from' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.date_from',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
			'external' => [
				0 => [
					'field' => 'date_from',
					'transformations' => [
						10 => [
							'userFunction' => [
								'class' => \Cobweb\ExternalImport\Transformation\DateTimeTransformation::class,
								'method' => 'parseDate',
								'parameters' => [
									'enforceTimeZone' => true
								]
							]
						]
					]
				]
			]
        ],
        'date_to' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.date_to',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
			'external' => [
				0 => [
					'field' => 'date_to',
					'transformations' => [
						10 => [
							'userFunction' => [
								'class' => \Cobweb\ExternalImport\Transformation\DateTimeTransformation::class,
								'method' => 'parseDate',
								'parameters' => [
									'enforceTimeZone' => true
								]
							]
						]
					]
				]
			]
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
				'max' => 255,
                'eval' => 'trim',
            ],
			'external' => [
				0 => [
					'field' => 'title'
				]
			]
        ],
        'hide_time' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.hide_time',
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
            ],
			'external' => [
				0 => [
					'field' => 'hide_time'
				]
			]
        ],
        'short_desc' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.short_desc',
            'config' => [
                'type' => 'text',
            ],
			'external' => [
				0 => [
					'field' => 'short_desc'
				]
			]
        ],
        'long_desc' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.long_desc',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
			'external' => [
				0 => [
					'field' => 'long_desc'
				]
			]
            
        ],
        'childcare_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.childcare_id',
            'config' => [
                'type' => 'input',
                'size' => 50,
				'max' => 255,
                'eval' => 'trim',
            ],
			'external' => [
				0 => [
					'field' => 'childcare_id'
				]
			]
        ],
        'subscribe_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.subscribe_date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
			'external' => [
				0 => [
					'field' => 'subscribe_date',
					'transformations' => [
						10 => [
							'userFunction' => [
								'class' => \Cobweb\ExternalImport\Transformation\DateTimeTransformation::class,
								'method' => 'parseDate',
								'parameters' => [
									'enforceTimeZone' => true
								]
							]
						]
					]
				]
			]
        ],
        'subscribe_time' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.subscribe_time',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
			'external' => [
				0 => [
					'field' => 'subscribe_time',
					'transformations' => [
						10 => [
							'userFunction' => [
								'class' => \Cobweb\ExternalImport\Transformation\DateTimeTransformation::class,
								'method' => 'parseDate',
								'parameters' => [
									'enforceTimeZone' => true
								]
							]
						]
					]
				]
			]
        ],
        'subscribe_person_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.subscribe_person_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'field' => 'subscribe_person_id'
				]
			]
        ],
        'baptism_offer_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.baptism_offer_id',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim'
            ],
			'external' => [
				0 => [
					'field' => 'baptism_offer_id'
				]
			]
        ],
        'event_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.event_type',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim'
            ],
			'external' => [
				0 => [
					'field' => 'event_type'
				]
			]
        ],
        'event_state' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.event_state',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim'
            ],
			'external' => [
				0 => [
					'field' => 'state'
				]
			]
        ],
        'date_text' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.date_text',
            'config' => [
                'type' => 'input',
                'size' => 50,
				'max' => 255,
                'eval' => 'trim',
            ],
			'external' => [
				0 => [
					'field' => 'date_text'
				]
			]
        ],
        'image_url' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.image_url',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 255,
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkFields' => 'class, params, target, title',
                            'blindLinkOptions' => 'file, folder, mail, page, spec, telephone',
                        ],
                    ],
                ],
            ],
			'external' => [
				0 => [
					'field' => 'image_url'
				]
			]
        ],
        'subscriptions' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.subscriptions',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'organizer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.organizer',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_verowaconnect_domain_model_organizer',
                'foreign_field' => 'event',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'rooms' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.rooms',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_verowaconnect_domain_model_room',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
        'room_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.room_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'arrayPath' => 'room/id'
				]
			]
        ],
        'room_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.room_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'arrayPath' => 'room/name'
				]
			]
        ],
        'room_public_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.room_public_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'arrayPath' => 'room/public_name'
				]
			]
        ],
        'room_location_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.room_location_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'arrayPath' => 'room/location_name'
				]
			]
        ],
        'room_location_url' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.room_location_url',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
			'external' => [
				0 => [
					'arrayPath' => 'room/location_url'
				]
			]
        ],
        'room_location_url_is_external' => [
            'exclude' => true,
            'label' => 'LLL:EXT:verowa_connect/Resources/Private/Language/locallang_db.xlf:tx_verowaconnect_domain_model_event.room_location_url_is_external',
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
            ],
			'external' => [
				0 => [
					'arrayPath' => 'room/location_url_is_external'
				]
			]
        ],
    
    ],
];
