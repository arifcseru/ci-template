CREATE TABLE `job_application` (
`id` INT NOT NULL AUTO_INCREMENT ,
`jobPositionId` varchar(128) NOT NULL COMMENT 'Enter jobPositionId',
`firstName` varchar(128) DEFAULT NULL COMMENT 'Enter firstName',
`lastName` varchar(128) DEFAULT NULL COMMENT 'Enter lastName',
`applicantPhoneNo` varchar(128) DEFAULT NULL COMMENT 'Enter applicantPhoneNo',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`expectedSalary` varchar(128) NOT NULL COMMENT 'Enter expectedSalary',
`message` varchar(128) DEFAULT NULL COMMENT 'Enter message',
`skills` varchar(128) DEFAULT NULL COMMENT 'Enter skills',
`resumeFileAddress` varchar(128) DEFAULT NULL COMMENT 'Enter resumeFileAddress',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;