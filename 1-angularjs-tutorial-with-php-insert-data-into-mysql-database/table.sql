 --  
 -- Table structure for table `tbl_user`  
 --  
 CREATE TABLE IF NOT EXISTS `tbl_user` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `first_name` varchar(200) NOT NULL,  
  `last_name` varchar(200) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;  
 --  
 -- Dumping data for table `tbl_user`  
 --  
 INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES  
 (18, 'Mark', 'John');