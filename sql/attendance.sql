CREATE TABLE `attendance` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`attendanceType` varchar(128) NOT NULL COMMENT 'Enter attendanceType',
`attendanceDate` varchar(128) NOT NULL COMMENT 'Enter attendanceDate',
`attendanceTime` varchar(128) NOT NULL COMMENT 'Enter attendanceTime',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;