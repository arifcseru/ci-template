CREATE TABLE `company_profile` (
`id` INT NOT NULL AUTO_INCREMENT ,
`userId` varchar(128) DEFAULT NULL COMMENT 'Enter userId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`establishedDate` varchar(128) DEFAULT NULL COMMENT 'Enter establishedDate',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`authorName` varchar(128) DEFAULT NULL COMMENT 'Enter authorName',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- application_table_sql
