--  
 -- Table structure for table `tbl_user`  
 --  
 CREATE TABLE IF NOT EXISTS `tbl_user` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `first_name` varchar(200) NOT NULL,  
  `last_name` varchar(200) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;  
 --  
 -- Dumping data for table `tbl_user`  
 --  
 INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES  
 (31, 'Tom', 'Cruze'),  
 (30, 'Bill', 'Gates'),  
 (29, 'John', 'Smith'),  
 (28, 'Big', 'Show'),  
 (27, 'Smith', 'Johnson'),  
 (26, 'The', 'Rock'),  
 (25, 'Peter', 'Parker'),  
 (18, 'Mark', 'John');  
