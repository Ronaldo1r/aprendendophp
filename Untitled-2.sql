/*create database `secure_login`;*/



/*CREATE USER 'sec_user'@'localhost' IDENTIFIED BY 'eKcGZr59zAa2BEWU';
GRANT SELECT, INSERT, UPDATE ON `secure_login`.* TO 'sec_user'@'localhost';*/

use secure_login;

/*CREATE TABLE `secure_login`.`members` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,    
`username` VARCHAR(30) NOT NULL,    
`email` VARCHAR(50) NOT NULL,    
`password` CHAR(128) NOT NULL,    
`salt` CHAR(128) NOT NULL
) ENGINE = InnoDB;*/

CREATE TABLE `secure_login`.`login_attempts` (
`user_id` INT(11) NOT NULL,    
`time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB
