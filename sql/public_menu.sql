CREATE TABLE `public_menu` (
`id` INT NOT NULL AUTO_INCREMENT ,
`menuText` varchar(128) DEFAULT NULL COMMENT 'Enter menuText',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`menuLinkUrl` varchar(128) DEFAULT NULL COMMENT 'Enter menuLinkUrl',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;