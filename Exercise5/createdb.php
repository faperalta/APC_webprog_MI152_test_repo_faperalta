CREATE DATABASE `dbtuts` ;
CREATE TABLE `dbtuts`.`users` (
`user_id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`firstname` VARCHAR( 45 ) NOT NULL ,
`midname` VARCHAR( 45 ) NOT NULL ,
`lastname` VARCHAR( 45 ) NOT NULL ,
`email` VARCHAR( 45 ) NOT NULL ,
`gender` VARCHAR( 45 ) NOT NULL ,  
`nickname` VARCHAR( 45 ) NOT NULL ,  
`homeadd` VARCHAR( 45 ) ,  
`cellno` bigint NOT NULL ,
`comment` VARCHAR( 255 ) 
) ENGINE = InnoDB;