CREATE TABLE `branch` (
`id` INT NOT NULL AUTO_INCREMENT ,
`companyProfileId` varchar(128) DEFAULT NULL COMMENT 'Enter companyProfileId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`establishedDate` varchar(128) DEFAULT NULL COMMENT 'Enter establishedDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;