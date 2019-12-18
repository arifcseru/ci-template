CREATE TABLE `trainee_courses` (
`id` INT NOT NULL AUTO_INCREMENT ,
`courseId` varchar(128) DEFAULT NULL COMMENT 'Enter courseId',
`applicantInfoId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantInfoId',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;