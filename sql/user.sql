CREATE TABLE `user` (
`id` INT NOT NULL AUTO_INCREMENT ,
`fullName` varchar(128) DEFAULT NULL COMMENT 'Enter fullName',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`password` varchar(128) DEFAULT NULL COMMENT 'Enter password',
`confirmPassword` varchar(128) DEFAULT NULL COMMENT 'Enter confirmPassword',
`roleId` varchar(128) DEFAULT NULL COMMENT 'Enter roleId',
`CompanyProfile` varchar(128) NOT NULL COMMENT 'Enter CompanyProfile',
`mobileNumber` varchar(128) DEFAULT NULL COMMENT 'Enter mobileNumber',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;