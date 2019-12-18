CREATE TABLE `leave_request` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`leaveTypeId` varchar(128) DEFAULT NULL COMMENT 'Enter leaveTypeId',
`fromDate` varchar(128) DEFAULT NULL COMMENT 'Enter fromDate',
`thruDate` varchar(128) DEFAULT NULL COMMENT 'Enter thruDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;