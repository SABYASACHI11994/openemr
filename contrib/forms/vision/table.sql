CREATE TABLE IF NOT EXISTS `form_vision` (
id bigint(20) NOT NULL auto_increment,
date datetime default NULL,
pid bigint(20) default NULL,
user varchar(255) default NULL,
groupname varchar(255) default NULL,
authorized tinyint(4) default NULL,
activity tinyint(4) default NULL,
od_k1 longtext,
od_k1_axis longtext,
od_k2 longtext,
od_k2_axis longtext,
od_testing_status longtext,
os_k1 longtext,
os_k1_axis longtext,
os_k2 longtext,
os_k2_axis longtext,
os_testing_status longtext,
additional_notes longtext,
PRIMARY KEY (id)
) ENGINE=InnoDB;
