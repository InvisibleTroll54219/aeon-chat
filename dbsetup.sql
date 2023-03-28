CREATE DATABASE IF NOT EXISTS aeon;

CREATE TABLE IF NOT EXISTS `aeon`.`users` (
	`user_id` INT(11) NOT NULL AUTO_INCREMENT , 
	`unique_id` INT(200) NOT NULL , 
	`fname` VARCHAR(255) NOT NULL , 
	`lname` VARCHAR(255) NOT NULL , 
	`email` VARCHAR(255) NOT NULL , 
	`password` VARCHAR(255) NOT NULL , 
	`img` VARCHAR(400) NOT NULL , 
	`status` VARCHAR(255) NOT NULL , 
	PRIMARY KEY (`user_id`)) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `aeon`.`messages` (
	`msg_id` BIGINT(255) NOT NULL AUTO_INCREMENT ,
	`incoming_msg_id` BIGINT(255) NOT NULL ,
	`outgoing_msg_id` BIGINT(255) NOT NULL , 
	`msg` VARCHAR(8000) NOT NULL , 
	PRIMARY KEY (`msg_id`)) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `aeon`.`posts` (
	`time_posted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`post_id` INT(11) NOT NULL AUTO_INCREMENT,
	`fname` VARCHAR(255) NOT NULL,
	`lname` VARCHAR(255) NOT NULL,
	`text_content` VARCHAR(8000),
	`img_content` VARCHAR(400),
	PRIMARY KEY (`post_id`)) ENGINE=InnoDB;