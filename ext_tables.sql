#
# Table structure for table 'tx_verowaconnector_domain_model_event'
#
CREATE TABLE tx_verowaconnector_domain_model_event (
  event_id int(11) unsigned NOT NULL,
  date_from int(11) unsigned NOT NULL,
  date_to int(11) unsigned NOT NULL,
  date_text varchar(255) NOT NULL DEFAULT '',
  hide_time tinyint(1) unsigned NOT NULL DEFAULT 0,
  title varchar(255) NOT NULL DEFAULT '',
  topic varchar(255) NOT NULL DEFAULT '',
  short_desc varchar(1024) NOT NULL DEFAULT '',
  long_desc mediumtext,
  organizer int(11) unsigned COMMENT '1:n => person.id',
  coorganizers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'coorganizers (persons) count',
  further_coorganizers varchar(1024) NOT NULL DEFAULT '',
  lectors int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'lectors (persons) count',
  organists int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'organists (persons) count',
  vergers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'vergers (persons) count',
  catering varchar(255) NOT NULL DEFAULT '',
  with_sacrament tinyint(1) unsigned NOT NULL DEFAULT 0,
  childcare_id tinyint(1) unsigned NOT NULL DEFAULT 0,
  childcare_text varchar(255) NOT NULL DEFAULT '',
  childcare_person int(11) unsigned COMMENT '1:n => person.id',
  additional_text1 varchar(255) NOT NULL DEFAULT '',
  additional_text1_label varchar(255) NOT NULL DEFAULT '',
  additional_text2 varchar(255) NOT NULL DEFAULT '',
  additional_text2_label varchar(255) NOT NULL DEFAULT '',
  additional_text4 varchar(255) NOT NULL DEFAULT '',
  additional_text4_label varchar(255) NOT NULL DEFAULT '',
  subs_module_active tinyint(1) unsigned NOT NULL DEFAULT 0,
  subs_date varchar(255),
  subs_text varchar(255) NOT NULL DEFAULT '',
  subs_person_id int(11) unsigned COMMENT '1:n => person.id',
  datetime_text varchar(255) NOT NULL DEFAULT '',
  baptism_offer_id tinyint(1) unsigned NOT NULL DEFAULT 0,
  baptism_offer_text varchar(255) NOT NULL DEFAULT '',
  collection int(11) unsigned COMMENT '1:n => collection.id',
  target_groups int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'target_groups (target_groups) count',
  layers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'layers (layers) count',
  rooms int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'rooms (rooms) count',
  files int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'files (files) count',
  image_url varchar(1024) NOT NULL DEFAULT '',
  image_width int(11) unsigned NOT NULL DEFAULT 0,
  image_height int(11) unsigned NOT NULL DEFAULT 0,
  list_image_url varchar(1024) NOT NULL DEFAULT '',

  UNIQUE event_id (event_id),
);

#
# Table structure for table 'tx_verowaconnector_domain_model_organizer'
#
CREATE TABLE tx_verowaconnector_domain_model_organizer (
	event int(11) unsigned DEFAULT '0' NOT NULL,
	organizer_id varchar(255) NOT NULL DEFAULT '',
	organizer_name varchar(255) NOT NULL DEFAULT '',
	organizer_phone varchar(255) NOT NULL DEFAULT '',
	organizer_profession varchar(255) NOT NULL DEFAULT '',
	organizer_email varchar(255) NOT NULL DEFAULT ''
);

#
# Table structure for table 'tx_verowaconnector_domain_model_targetgroups'
#
CREATE TABLE tx_verowaconnector_domain_model_targetgroups (
  group_id int(11) unsigned NOT NULL,
  name varchar(255) NOT NULL DEFAULT '',
  longname varchar(1024) NOT NULL DEFAULT '',
  url varchar(1024) NOT NULL DEFAULT '',
);

#
# Table structure for table 'tx_verowaconnector_domain_model_layers'
#
CREATE TABLE tx_verowaconnector_domain_model_layers (
  layer_id int(11) unsigned NOT NULL,
  name varchar(255) NOT NULL DEFAULT '',
  url varchar(1024) NOT NULL DEFAULT '',
  parent_id int(11) unsigned NOT NULL,
);

#
# Table structure for table 'tx_verowaconnector_domain_model_room'
#
CREATE TABLE tx_verowaconnector_domain_model_room (
  location_name varchar(255) NOT NULL DEFAULT '',
  location_id int(11) unsigned COMMENT '1:n => location.id',
  street varchar(255) NOT NULL DEFAULT '',
  postcode varchar(255) NOT NULL DEFAULT '',
  city varchar(255) NOT NULL DEFAULT '',
  location_url_is_external tinyint(1) unsigned NOT NULL DEFAULT 0,
  room_name varchar(255) NOT NULL DEFAULT '',
  room_id int(11) unsigned,
  shortcut varchar(40) NOT NULL DEFAULT '',
  location_url varchar(1024),

  UNIQUE room_id (room_id),
);

#
# Table structure for table 'tx_verowaconnector_domain_model_event_room_mm'
#
CREATE TABLE tx_verowa_event_room_mm (
    uid_local int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_event.uid',
    uid_foreign int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_room.uid',
    sorting int(11) DEFAULT '0' NOT NULL,

--    PRIMARY KEY (uid_local,uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);
