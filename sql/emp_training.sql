CREATE TABLE `emp_training` (
`id` INT NOT NULL AUTO_INCREMENT ,
`courseId` varchar(128) NOT NULL COMMENT 'Enter courseId',
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`TrainingDetails` varchar(128) DEFAULT NULL COMMENT 'Enter TrainingDetails',
`approverId` varchar(128) DEFAULT NULL COMMENT 'Enter approverId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;