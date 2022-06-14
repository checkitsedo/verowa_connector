#
# Table structure for table 'tx_verowaconnect_domain_model_event'
#
CREATE TABLE tx_verowaconnect_domain_model_event (
	event_id varchar(255) NOT NULL DEFAULT '',
	date_from int(11) NOT NULL DEFAULT '0',
	date_to int(11) NOT NULL DEFAULT '0',
	title varchar(255) NOT NULL DEFAULT '',
	hide_time smallint(1) unsigned NOT NULL DEFAULT '0',
	short_desc varchar(255) NOT NULL DEFAULT '',
	long_desc text,
	childcare_id varchar(255) NOT NULL DEFAULT '',
	subscribe_date int(11) NOT NULL DEFAULT '0',
	subscribe_time int(11) NOT NULL DEFAULT '0',
	subscribe_person_id varchar(255) NOT NULL DEFAULT '',
	baptism_offer_id varchar(255) NOT NULL DEFAULT '',
	event_type int(11) NOT NULL DEFAULT '0',
	event_state varchar(255) NOT NULL DEFAULT '',
	date_text varchar(255) NOT NULL DEFAULT '',
	image_url varchar(255) NOT NULL DEFAULT '',
	subscriptions int(11) NOT NULL DEFAULT '0',
	organizer int(11) unsigned NOT NULL DEFAULT '0',
	rooms int(11) unsigned DEFAULT '0',
	room_id varchar(255) NOT NULL DEFAULT '',
	room_name varchar(255) NOT NULL DEFAULT '',
	room_public_name varchar(255) NOT NULL DEFAULT '',
	room_location_name varchar(255) NOT NULL DEFAULT '',
	room_location_url varchar(255) NOT NULL DEFAULT '',
	room_location_url_is_external smallint(1) unsigned NOT NULL DEFAULT '0'
);

#
# Table structure for table 'tx_verowaconnect_domain_model_organizer'
#
CREATE TABLE tx_verowaconnect_domain_model_organizer (
	event int(11) unsigned DEFAULT '0' NOT NULL,
	organizer_id varchar(255) NOT NULL DEFAULT '',
	organizer_name varchar(255) NOT NULL DEFAULT '',
	organizer_phone varchar(255) NOT NULL DEFAULT '',
	organizer_profession varchar(255) NOT NULL DEFAULT '',
	organizer_email varchar(255) NOT NULL DEFAULT ''
);

#
# Table structure for table 'tx_verowaconnect_domain_model_room'
#
CREATE TABLE tx_verowaconnect_domain_model_room (
	room_id varchar(255) NOT NULL DEFAULT '',
	room_name varchar(255) NOT NULL DEFAULT '',
	room_public_name varchar(255) NOT NULL DEFAULT '',
	room_location_name varchar(255) NOT NULL DEFAULT '',
	room_location_url varchar(255) NOT NULL DEFAULT '',
	room_location_url_is_external smallint(1) unsigned NOT NULL DEFAULT '0'
);
