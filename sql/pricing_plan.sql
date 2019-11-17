CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;