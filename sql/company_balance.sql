CREATE TABLE `company_balance` (
`id` INT NOT NULL AUTO_INCREMENT ,
`companyProfileId` varchar(128) NOT NULL COMMENT 'Enter companyProfileId',
`initialBalance` varchar(128) DEFAULT NULL COMMENT 'Enter initialBalance',
`currentBalance` varchar(128) DEFAULT NULL COMMENT 'Enter currentBalance',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;