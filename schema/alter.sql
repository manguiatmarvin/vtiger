ALTER TABLE  `vtiger_users` ADD  `server` VARCHAR( 100 ) NOT NULL AFTER  `is_owner` ,
ADD  `server_username` VARCHAR( 100 ) NOT NULL AFTER  `server` ,
ADD  `server_password` VARCHAR( 100 ) NOT NULL AFTER  `server_username` ,
ADD  `smtp_auth` VARCHAR( 100 ) NOT NULL AFTER  `server_password`

ALTER TABLE  `vtiger_user2role` ADD  `server` VARCHAR( 100 ) NOT NULL ,
ADD  `server_username` VARCHAR( 100 ) NOT NULL ,
ADD  `server_password` VARCHAR( 100 ) NOT NULL ,
ADD  `smtp_auth` VARCHAR( 100 ) NOT NULL ;



ALTER TABLE  `vtiger_asteriskextensions` ADD  `server` VARCHAR( 100 ) NOT NULL ,
ADD  `server_username` VARCHAR( 100 ) NOT NULL ,
ADD  `server_password` VARCHAR( 100 ) NOT NULL ,
ADD  `smtp_auth` VARCHAR( 100 ) NOT NULL ;
