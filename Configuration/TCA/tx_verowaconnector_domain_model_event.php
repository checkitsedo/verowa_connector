<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event',
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
		'searchFields' => 'event_id,date_text,title,topic,short_desc,long_desc,subs_person_id,collection,target_groups,layers,rooms,image_url',
		'iconfile' => 'EXT:verowa_connector/Resources/Public/Icons/tx_verowaconnector_domain_model_event.gif'
	],
	'external' => [
		'general' => [
			0 => [
				'connector' => 'json',
				'parameters' => [
					'uri' => 'https://api.verowa.ch/geteventdetails/stjosef-zuerich/1ad89c27e1a89ef6aa34f34e4adf7448/0',
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
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, event_id, date_from, date_to, date_text, hide_time, title, topic, short_desc, long_desc, organizer, subs_date, subs_time, subs_person_id, collection, target_groups, layers, rooms, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
				'foreign_table' => 'tx_verowaconnector_domain_model_event',
				'foreign_table_where' => 'AND {#tx_verowaconnector_domain_model_event}.{#pid}=###CURRENT_PID### AND {#tx_verowaconnector_domain_model_event}.{#sys_language_uid} IN (-1,0)',
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
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.event_id',
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
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.date_from',
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
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.date_to',
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
		'date_text' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.date_text',
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
		'hide_time' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.hide_time',
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
		'title' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.title',
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
		'topic' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.topic',
			'config' => [
				'type' => 'input',
				'size' => 50,
				'max' => 255,
				'eval' => 'trim',
			],
			'external' => [
				0 => [
					'field' => 'topic'
				]
			]
		],
		'short_desc' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.short_desc',
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
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.long_desc',
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
		'organizer' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.organizer',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_verowaconnect_domain_model_person',
				'default' => 0,
				'minitems' => 0,
				'maxitems' => 1,
			],
		],
		'coorganizers' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.coorganizers',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectMultiple',
				'foreign_table' => 'tx_verowaconnector_domain_model_person',
				'MM' => 'tx_verowaconnector_domain_model_event_person_mm',
				'default' => 0,
				'minitems' => 0,
				'maxitems' => 999,
			],
		],
		'subs_date' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.subs_date',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime',
			],
			'external' => [
				0 => [
					'field' => 'subs_date',
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
		'subs_text' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.subs_text',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'subs_text',
				]
			]
		],
		'subs_person_id' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.subs_person_id',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => ''
			],
			'external' => [
				0 => [
					'field' => 'subs_person_id'
				]
			]
		],
		'baptism_offer_id' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.baptism_offer_id',
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
		'baptism_offer_text' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.baptism_offer_text',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'baptism_offer_text'
				]
			]
		],
		'target_groups' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.target_groups',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectMultiple',
				'foreign_table' => 'tx_verowaconnector_domain_model_targetgroup',
				'MM' => 'tx_verowaconnector_domain_model_event_targetgroup_mm',
				'default' => 0,
				'minitems' => 0,
				'maxitems' => 999,
			],
		],
		'layers' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.layers',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectMultiple',
				'foreign_table' => 'tx_verowaconnector_domain_model_layer',
				'MM' => 'tx_verowaconnector_domain_model_event_layer_mm',
				'default' => 0,
				'minitems' => 0,
				'maxitems' => 999,
			],
		],
		'rooms' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.rooms',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_verowaconnect_domain_model_room',
				'default' => 0,
				'minitems' => 0,
				'maxitems' => 1,
			],
		],
		'image_url' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.image_url',
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
		'image_width' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.image_width',
			'config' => [
				'type' => 'input',
			],
			'external' => [
				0 => [
					'field' => 'image_width'
				]
			]
		],
		'image_height' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_connector/Resources/Private/Language/locallang_db.xlf:tx_verowaconnector_domain_model_event.image_height',
			'config' => [
				'type' => 'input',
			],
			'external' => [
				0 => [
					'field' => 'image_height'
				]
			]
		],
	],
];
