--  
 -- Table structure for table `country`  
 --  
 CREATE TABLE IF NOT EXISTS `country` (  
  `country_id` int(11) NOT NULL AUTO_INCREMENT,  
  `country_name` varchar(255) NOT NULL,  
  PRIMARY KEY (`country_id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;  
 --  
 -- Dumping data for table `country`  
 --  
 INSERT INTO `country` (`country_id`, `country_name`) VALUES  
 (1, 'United States of America'),  
 (2, 'Canada'),  
 (3, 'Australia');  
 -- --------------------------------------------------------  
 --  
 -- Table structure for table `state`  
 --  
 CREATE TABLE IF NOT EXISTS `state` (  
  `state_id` int(11) NOT NULL AUTO_INCREMENT,  
  `country_id` int(11) NOT NULL,  
  `state_name` varchar(255) NOT NULL,  
  PRIMARY KEY (`state_id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;  
 --  
 -- Dumping data for table `state`  
 --  
 INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES  
 (1, 1, 'Alabama'),  
 (2, 1, 'Arizona'),  
 (3, 1, 'California'),  
 (4, 2, 'Alberta'),  
 (5, 2, 'Manitoba'),  
 (6, 2, 'Ontario'),  
 (7, 3, 'Queensland'),  
 (8, 3, 'Tasmania'),  
 (9, 3, 'Victoria');  