CREATE TABLE users(
	`user_id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `complete_name` varchar(255),
    `nick` varchar(45),
    `eadd` varchar(255),
    `address` varchar(255),
    `sex` varchar(6),
    `no` varchar(11),
    `comment` varchar(500),
	`slug` varchar(128) NOT NULL,
	 KEY `slug` (`slug`)
	 )
	 ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
	 
