CREATE TABLE `course` (
`id` INT NOT NULL AUTO_INCREMENT ,
`Subject` varchar(128) DEFAULT NULL COMMENT 'Enter Subject',
`shortCode` varchar(128) NOT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`applicantInfoId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantInfoId',
`supervisorId` varchar(128) DEFAULT NULL COMMENT 'Enter supervisorId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;