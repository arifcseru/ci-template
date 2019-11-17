CREATE TABLE `training_details` (
`id` INT NOT NULL AUTO_INCREMENT ,
`subjectId` varchar(128) NOT NULL COMMENT 'Enter subjectId',
`hourNo` varchar(128) NOT NULL COMMENT 'Enter hourNo',
`classDate` varchar(128) NOT NULL COMMENT 'Enter classDate',
`isAttend` varchar(128) DEFAULT NULL COMMENT 'Enter isAttend',
`remarks` varchar(128) DEFAULT NULL COMMENT 'Enter remarks',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;