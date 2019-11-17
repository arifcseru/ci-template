CREATE TABLE `attendance_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) DEFAULT NULL COMMENT 'Enter employeeId',
`attendanceDate` varchar(128) DEFAULT NULL COMMENT 'Enter attendanceDate',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`supervisorId` varchar(128) DEFAULT NULL COMMENT 'Enter supervisorId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;