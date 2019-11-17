CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;