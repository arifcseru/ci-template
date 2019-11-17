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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `role` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `user_preference` (
`id` INT NOT NULL AUTO_INCREMENT ,
`applicationTitle` varchar(128) DEFAULT NULL COMMENT 'Enter applicationTitle',
`metaTags` varchar(128) DEFAULT NULL COMMENT 'Enter metaTags',
`userId` varchar(128) DEFAULT NULL COMMENT 'Enter userId',
`activeCompanyId` varchar(128) NOT NULL COMMENT 'Enter activeCompanyId',
`language` varchar(128) NOT NULL COMMENT 'Enter language',
`activeRole` varchar(128) DEFAULT NULL COMMENT 'Enter activeRole',
`showNotification` varchar(128) DEFAULT NULL COMMENT 'Enter showNotification',
`showEmail` varchar(128) DEFAULT NULL COMMENT 'Enter showEmail',
`showTask` varchar(128) DEFAULT NULL COMMENT 'Enter showTask',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `company_profile` (
`id` INT NOT NULL AUTO_INCREMENT ,
`userId` varchar(128) DEFAULT NULL COMMENT 'Enter userId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`establishedDate` varchar(128) DEFAULT NULL COMMENT 'Enter establishedDate',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`authorName` varchar(128) DEFAULT NULL COMMENT 'Enter authorName',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `branch` (
`id` INT NOT NULL AUTO_INCREMENT ,
`companyProfileId` varchar(128) DEFAULT NULL COMMENT 'Enter companyProfileId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`establishedDate` varchar(128) DEFAULT NULL COMMENT 'Enter establishedDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `department` (
`id` INT NOT NULL AUTO_INCREMENT ,
`branchId` varchar(128) DEFAULT NULL COMMENT 'Enter branchId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `job_position` (
`id` INT NOT NULL AUTO_INCREMENT ,
`departmentId` varchar(128) DEFAULT NULL COMMENT 'Enter departmentId',
`positionName` varchar(128) DEFAULT NULL COMMENT 'Enter positionName',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isActive` varchar(128) DEFAULT NULL COMMENT 'Enter isActive',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `job_posting` (
`id` INT NOT NULL AUTO_INCREMENT ,
`positionName` varchar(128) DEFAULT NULL COMMENT 'Enter positionName',
`shortCode` varchar(128) NOT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`jobPositionId` varchar(128) NOT NULL COMMENT 'Enter jobPositionId',
`postingDate` varchar(128) DEFAULT NULL COMMENT 'Enter postingDate',
`expireDate` varchar(128) DEFAULT NULL COMMENT 'Enter expireDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `applicant_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`jobApplicationId` varchar(128) DEFAULT NULL COMMENT 'Enter jobApplicationId',
`enrollmentId` varchar(128) DEFAULT NULL COMMENT 'Enter enrollmentId',
`firstName` varchar(128) DEFAULT NULL COMMENT 'Enter firstName',
`lastName` varchar(128) DEFAULT NULL COMMENT 'Enter lastName',
`fatherName` varchar(128) DEFAULT NULL COMMENT 'Enter fatherName',
`motherName` varchar(128) DEFAULT NULL COMMENT 'Enter motherName',
`spouseName` varchar(128) DEFAULT NULL COMMENT 'Enter spouseName',
`nationality` varchar(128) DEFAULT NULL COMMENT 'Enter nationality',
`gender` varchar(128) DEFAULT NULL COMMENT 'Enter gender',
`age` varchar(128) DEFAULT NULL COMMENT 'Enter age',
`profilePic` varchar(128) DEFAULT NULL COMMENT 'Enter profilePic',
`signature` varchar(128) DEFAULT NULL COMMENT 'Enter signature',
`nidImage` varchar(128) DEFAULT NULL COMMENT 'Enter nidImage',
`eduQualification` varchar(128) DEFAULT NULL COMMENT 'Enter eduQualification',
`bloodGroup` varchar(128) DEFAULT NULL COMMENT 'Enter bloodGroup',
`religion` varchar(128) DEFAULT NULL COMMENT 'Enter religion',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`streetAddress` varchar(128) DEFAULT NULL COMMENT 'Enter streetAddress',
`district` varchar(128) DEFAULT NULL COMMENT 'Enter district',
`policeStation` varchar(128) DEFAULT NULL COMMENT 'Enter policeStation',
`postCode` varchar(128) DEFAULT NULL COMMENT 'Enter postCode',
`chairmanName` varchar(128) DEFAULT NULL COMMENT 'Enter chairmanName',
`contactNo` varchar(128) DEFAULT NULL COMMENT 'Enter contactNo',
`InterviewInfo` varchar(128) DEFAULT NULL COMMENT 'Enter InterviewInfo',
`TraineeCourses` varchar(128) DEFAULT NULL COMMENT 'Enter TraineeCourses',
`postingId` varchar(128) DEFAULT NULL COMMENT 'Enter postingId',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`password` varchar(128) DEFAULT NULL COMMENT 'Enter password',
`isJoined` varchar(128) DEFAULT NULL COMMENT 'Enter isJoined',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `interview_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`applicantInfoId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantInfoId',
`interviewType` varchar(128) NOT NULL COMMENT 'Enter interviewType',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`totalMarks` varchar(128) DEFAULT NULL COMMENT 'Enter totalMarks',
`obtainedMarks` varchar(128) DEFAULT NULL COMMENT 'Enter obtainedMarks',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`interviewerId` varchar(128) DEFAULT NULL COMMENT 'Enter interviewerId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `employee` (
`id` INT NOT NULL AUTO_INCREMENT ,
`companyProfileId` varchar(128) NOT NULL COMMENT 'Enter companyProfileId',
`TrainingInfo` varchar(128) DEFAULT NULL COMMENT 'Enter TrainingInfo',
`EmpDocInfo` varchar(128) DEFAULT NULL COMMENT 'Enter EmpDocInfo',
`applicantId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantId',
`firstName` varchar(128) DEFAULT NULL COMMENT 'Enter firstName',
`lastName` varchar(128) DEFAULT NULL COMMENT 'Enter lastName',
`fatherName` varchar(128) DEFAULT NULL COMMENT 'Enter fatherName',
`motherName` varchar(128) DEFAULT NULL COMMENT 'Enter motherName',
`spouseName` varchar(128) DEFAULT NULL COMMENT 'Enter spouseName',
`nationality` varchar(128) DEFAULT NULL COMMENT 'Enter nationality',
`gender` varchar(128) DEFAULT NULL COMMENT 'Enter gender',
`age` varchar(128) DEFAULT NULL COMMENT 'Enter age',
`profilePic` varchar(128) DEFAULT NULL COMMENT 'Enter profilePic',
`signature` varchar(128) DEFAULT NULL COMMENT 'Enter signature',
`nidImage` varchar(128) DEFAULT NULL COMMENT 'Enter nidImage',
`eduQualification` varchar(128) DEFAULT NULL COMMENT 'Enter eduQualification',
`bloodGroup` varchar(128) DEFAULT NULL COMMENT 'Enter bloodGroup',
`religion` varchar(128) DEFAULT NULL COMMENT 'Enter religion',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`streetAddress` varchar(128) DEFAULT NULL COMMENT 'Enter streetAddress',
`district` varchar(128) DEFAULT NULL COMMENT 'Enter district',
`policeStation` varchar(128) DEFAULT NULL COMMENT 'Enter policeStation',
`postCode` varchar(128) DEFAULT NULL COMMENT 'Enter postCode',
`chairmanName` varchar(128) DEFAULT NULL COMMENT 'Enter chairmanName',
`contactNo` varchar(128) DEFAULT NULL COMMENT 'Enter contactNo',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`managerId` varchar(128) DEFAULT NULL COMMENT 'Enter managerId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `employee_position` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`jobPositionId` varchar(128) NOT NULL COMMENT 'Enter jobPositionId',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `course` (
`id` INT NOT NULL AUTO_INCREMENT ,
`Subject` varchar(128) DEFAULT NULL COMMENT 'Enter Subject',
`shortCode` varchar(128) NOT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`applicantInfoId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantInfoId',
`supervisorId` varchar(128) DEFAULT NULL COMMENT 'Enter supervisorId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `subject` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) NOT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`classDate` varchar(128) DEFAULT NULL COMMENT 'Enter classDate',
`startHour` varchar(128) DEFAULT NULL COMMENT 'Enter startHour',
`duration` varchar(128) DEFAULT NULL COMMENT 'Enter duration',
`courseId` varchar(128) DEFAULT NULL COMMENT 'Enter courseId',
`teacherId` varchar(128) DEFAULT NULL COMMENT 'Enter teacherId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `training_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`courseId` varchar(128) NOT NULL COMMENT 'Enter courseId',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`supervisorId` varchar(128) DEFAULT NULL COMMENT 'Enter supervisorId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `emp_doc_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`documentName` varchar(128) NOT NULL COMMENT 'Enter documentName',
`documentDetails` varchar(128) DEFAULT NULL COMMENT 'Enter documentDetails',
`tags` varchar(128) NOT NULL COMMENT 'Enter tags',
`document` varchar(128) DEFAULT NULL COMMENT 'Enter document',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `leave_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `holiday_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `holiday` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) NOT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`holidayTypeId` varchar(128) DEFAULT NULL COMMENT 'Enter holidayTypeId',
`fromDate` varchar(128) DEFAULT NULL COMMENT 'Enter fromDate',
`thruDate` varchar(128) DEFAULT NULL COMMENT 'Enter thruDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `expepnse_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `expense` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`expenseTypeId` varchar(128) DEFAULT NULL COMMENT 'Enter expenseTypeId',
`amount` varchar(128) DEFAULT NULL COMMENT 'Enter amount',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `income_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `income` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`incomeTypeId` varchar(128) DEFAULT NULL COMMENT 'Enter incomeTypeId',
`amount` varchar(128) DEFAULT NULL COMMENT 'Enter amount',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `disciplinary_cases` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`caseName` varchar(128) NOT NULL COMMENT 'Enter caseName',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `employee_salary` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`amount` varchar(128) NOT NULL COMMENT 'Enter amount',
`taxPercent` varchar(128) DEFAULT NULL COMMENT 'Enter taxPercent',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `providend_fund` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`monthlyAmount` varchar(128) NOT NULL COMMENT 'Enter monthlyAmount',
`installmentMonths` varchar(128) DEFAULT NULL COMMENT 'Enter installmentMonths',
`PfDetails` varchar(128) DEFAULT NULL COMMENT 'Enter PfDetails',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pf_details` (
`id` INT NOT NULL AUTO_INCREMENT ,
`providendFundId` varchar(128) DEFAULT NULL COMMENT 'Enter providendFundId',
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`monthNo` varchar(128) NOT NULL COMMENT 'Enter monthNo',
`empAmount` varchar(128) DEFAULT NULL COMMENT 'Enter empAmount',
`companyAmount` varchar(128) DEFAULT NULL COMMENT 'Enter companyAmount',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pf_loan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`installment` varchar(128) NOT NULL COMMENT 'Enter installment',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`installmentFrom` varchar(128) DEFAULT NULL COMMENT 'Enter installmentFrom',
`PfLoanInstallment` varchar(128) DEFAULT NULL COMMENT 'Enter PfLoanInstallment',
`installmentTo` varchar(128) DEFAULT NULL COMMENT 'Enter installmentTo',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pf_loan_installment` (
`id` INT NOT NULL AUTO_INCREMENT ,
`pfLoanId` varchar(128) NOT NULL COMMENT 'Enter pfLoanId',
`installment` varchar(128) NOT NULL COMMENT 'Enter installment',
`monthNo` varchar(128) DEFAULT NULL COMMENT 'Enter monthNo',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `role` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `user_preference` (
`id` INT NOT NULL AUTO_INCREMENT ,
`applicationTitle` varchar(128) DEFAULT NULL COMMENT 'Enter applicationTitle',
`metaTags` varchar(128) DEFAULT NULL COMMENT 'Enter metaTags',
`userId` varchar(128) DEFAULT NULL COMMENT 'Enter userId',
`activeCompanyId` varchar(128) NOT NULL COMMENT 'Enter activeCompanyId',
`language` varchar(128) NOT NULL COMMENT 'Enter language',
`activeRole` varchar(128) DEFAULT NULL COMMENT 'Enter activeRole',
`showNotification` varchar(128) DEFAULT NULL COMMENT 'Enter showNotification',
`showEmail` varchar(128) DEFAULT NULL COMMENT 'Enter showEmail',
`showTask` varchar(128) DEFAULT NULL COMMENT 'Enter showTask',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `company_profile` (
`id` INT NOT NULL AUTO_INCREMENT ,
`userId` varchar(128) DEFAULT NULL COMMENT 'Enter userId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`establishedDate` varchar(128) DEFAULT NULL COMMENT 'Enter establishedDate',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`authorName` varchar(128) DEFAULT NULL COMMENT 'Enter authorName',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `branch` (
`id` INT NOT NULL AUTO_INCREMENT ,
`companyProfileId` varchar(128) DEFAULT NULL COMMENT 'Enter companyProfileId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`establishedDate` varchar(128) DEFAULT NULL COMMENT 'Enter establishedDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `department` (
`id` INT NOT NULL AUTO_INCREMENT ,
`branchId` varchar(128) DEFAULT NULL COMMENT 'Enter branchId',
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `job_position` (
`id` INT NOT NULL AUTO_INCREMENT ,
`departmentId` varchar(128) DEFAULT NULL COMMENT 'Enter departmentId',
`positionName` varchar(128) DEFAULT NULL COMMENT 'Enter positionName',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isActive` varchar(128) DEFAULT NULL COMMENT 'Enter isActive',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `job_posting` (
`id` INT NOT NULL AUTO_INCREMENT ,
`positionName` varchar(128) DEFAULT NULL COMMENT 'Enter positionName',
`shortCode` varchar(128) NOT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`jobPositionId` varchar(128) NOT NULL COMMENT 'Enter jobPositionId',
`postingDate` varchar(128) DEFAULT NULL COMMENT 'Enter postingDate',
`expireDate` varchar(128) DEFAULT NULL COMMENT 'Enter expireDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `applicant_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`jobApplicationId` varchar(128) DEFAULT NULL COMMENT 'Enter jobApplicationId',
`enrollmentId` varchar(128) DEFAULT NULL COMMENT 'Enter enrollmentId',
`firstName` varchar(128) DEFAULT NULL COMMENT 'Enter firstName',
`lastName` varchar(128) DEFAULT NULL COMMENT 'Enter lastName',
`fatherName` varchar(128) DEFAULT NULL COMMENT 'Enter fatherName',
`motherName` varchar(128) DEFAULT NULL COMMENT 'Enter motherName',
`spouseName` varchar(128) DEFAULT NULL COMMENT 'Enter spouseName',
`nationality` varchar(128) DEFAULT NULL COMMENT 'Enter nationality',
`gender` varchar(128) DEFAULT NULL COMMENT 'Enter gender',
`age` varchar(128) DEFAULT NULL COMMENT 'Enter age',
`profilePic` varchar(128) DEFAULT NULL COMMENT 'Enter profilePic',
`signature` varchar(128) DEFAULT NULL COMMENT 'Enter signature',
`nidImage` varchar(128) DEFAULT NULL COMMENT 'Enter nidImage',
`eduQualification` varchar(128) DEFAULT NULL COMMENT 'Enter eduQualification',
`bloodGroup` varchar(128) DEFAULT NULL COMMENT 'Enter bloodGroup',
`religion` varchar(128) DEFAULT NULL COMMENT 'Enter religion',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`streetAddress` varchar(128) DEFAULT NULL COMMENT 'Enter streetAddress',
`district` varchar(128) DEFAULT NULL COMMENT 'Enter district',
`policeStation` varchar(128) DEFAULT NULL COMMENT 'Enter policeStation',
`postCode` varchar(128) DEFAULT NULL COMMENT 'Enter postCode',
`chairmanName` varchar(128) DEFAULT NULL COMMENT 'Enter chairmanName',
`contactNo` varchar(128) DEFAULT NULL COMMENT 'Enter contactNo',
`InterviewInfo` varchar(128) DEFAULT NULL COMMENT 'Enter InterviewInfo',
`TraineeCourses` varchar(128) DEFAULT NULL COMMENT 'Enter TraineeCourses',
`postingId` varchar(128) DEFAULT NULL COMMENT 'Enter postingId',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`password` varchar(128) DEFAULT NULL COMMENT 'Enter password',
`isJoined` varchar(128) DEFAULT NULL COMMENT 'Enter isJoined',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `interview_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`applicantInfoId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantInfoId',
`interviewType` varchar(128) NOT NULL COMMENT 'Enter interviewType',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`totalMarks` varchar(128) DEFAULT NULL COMMENT 'Enter totalMarks',
`obtainedMarks` varchar(128) DEFAULT NULL COMMENT 'Enter obtainedMarks',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`interviewerId` varchar(128) DEFAULT NULL COMMENT 'Enter interviewerId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `employee` (
`id` INT NOT NULL AUTO_INCREMENT ,
`companyProfileId` varchar(128) NOT NULL COMMENT 'Enter companyProfileId',
`TrainingInfo` varchar(128) DEFAULT NULL COMMENT 'Enter TrainingInfo',
`EmpDocInfo` varchar(128) DEFAULT NULL COMMENT 'Enter EmpDocInfo',
`applicantId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantId',
`firstName` varchar(128) DEFAULT NULL COMMENT 'Enter firstName',
`lastName` varchar(128) DEFAULT NULL COMMENT 'Enter lastName',
`fatherName` varchar(128) DEFAULT NULL COMMENT 'Enter fatherName',
`motherName` varchar(128) DEFAULT NULL COMMENT 'Enter motherName',
`spouseName` varchar(128) DEFAULT NULL COMMENT 'Enter spouseName',
`nationality` varchar(128) DEFAULT NULL COMMENT 'Enter nationality',
`gender` varchar(128) DEFAULT NULL COMMENT 'Enter gender',
`age` varchar(128) DEFAULT NULL COMMENT 'Enter age',
`profilePic` varchar(128) DEFAULT NULL COMMENT 'Enter profilePic',
`signature` varchar(128) DEFAULT NULL COMMENT 'Enter signature',
`nidImage` varchar(128) DEFAULT NULL COMMENT 'Enter nidImage',
`eduQualification` varchar(128) DEFAULT NULL COMMENT 'Enter eduQualification',
`bloodGroup` varchar(128) DEFAULT NULL COMMENT 'Enter bloodGroup',
`religion` varchar(128) DEFAULT NULL COMMENT 'Enter religion',
`address` varchar(128) DEFAULT NULL COMMENT 'Enter address',
`streetAddress` varchar(128) DEFAULT NULL COMMENT 'Enter streetAddress',
`district` varchar(128) DEFAULT NULL COMMENT 'Enter district',
`policeStation` varchar(128) DEFAULT NULL COMMENT 'Enter policeStation',
`postCode` varchar(128) DEFAULT NULL COMMENT 'Enter postCode',
`chairmanName` varchar(128) DEFAULT NULL COMMENT 'Enter chairmanName',
`contactNo` varchar(128) DEFAULT NULL COMMENT 'Enter contactNo',
`email` varchar(128) DEFAULT NULL COMMENT 'Enter email',
`managerId` varchar(128) DEFAULT NULL COMMENT 'Enter managerId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `employee_position` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`jobPositionId` varchar(128) NOT NULL COMMENT 'Enter jobPositionId',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `course` (
`id` INT NOT NULL AUTO_INCREMENT ,
`Subject` varchar(128) DEFAULT NULL COMMENT 'Enter Subject',
`shortCode` varchar(128) NOT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`applicantInfoId` varchar(128) DEFAULT NULL COMMENT 'Enter applicantInfoId',
`supervisorId` varchar(128) DEFAULT NULL COMMENT 'Enter supervisorId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `subject` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) NOT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`classDate` varchar(128) DEFAULT NULL COMMENT 'Enter classDate',
`startHour` varchar(128) DEFAULT NULL COMMENT 'Enter startHour',
`duration` varchar(128) DEFAULT NULL COMMENT 'Enter duration',
`courseId` varchar(128) DEFAULT NULL COMMENT 'Enter courseId',
`teacherId` varchar(128) DEFAULT NULL COMMENT 'Enter teacherId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `training_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`courseId` varchar(128) NOT NULL COMMENT 'Enter courseId',
`shortCode` varchar(128) DEFAULT NULL COMMENT 'Enter shortCode',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`supervisorId` varchar(128) DEFAULT NULL COMMENT 'Enter supervisorId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `emp_doc_info` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`documentName` varchar(128) NOT NULL COMMENT 'Enter documentName',
`documentDetails` varchar(128) DEFAULT NULL COMMENT 'Enter documentDetails',
`tags` varchar(128) NOT NULL COMMENT 'Enter tags',
`document` varchar(128) DEFAULT NULL COMMENT 'Enter document',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `leave_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `holiday_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `holiday` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) NOT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`holidayTypeId` varchar(128) DEFAULT NULL COMMENT 'Enter holidayTypeId',
`fromDate` varchar(128) DEFAULT NULL COMMENT 'Enter fromDate',
`thruDate` varchar(128) DEFAULT NULL COMMENT 'Enter thruDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `expepnse_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `expense` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`expenseTypeId` varchar(128) DEFAULT NULL COMMENT 'Enter expenseTypeId',
`amount` varchar(128) DEFAULT NULL COMMENT 'Enter amount',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `income_type` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) NOT NULL COMMENT 'Enter name',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `income` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`incomeTypeId` varchar(128) DEFAULT NULL COMMENT 'Enter incomeTypeId',
`amount` varchar(128) DEFAULT NULL COMMENT 'Enter amount',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `disciplinary_cases` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`caseName` varchar(128) NOT NULL COMMENT 'Enter caseName',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `employee_salary` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`amount` varchar(128) NOT NULL COMMENT 'Enter amount',
`taxPercent` varchar(128) DEFAULT NULL COMMENT 'Enter taxPercent',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `providend_fund` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`monthlyAmount` varchar(128) NOT NULL COMMENT 'Enter monthlyAmount',
`installmentMonths` varchar(128) DEFAULT NULL COMMENT 'Enter installmentMonths',
`PfDetails` varchar(128) DEFAULT NULL COMMENT 'Enter PfDetails',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pf_details` (
`id` INT NOT NULL AUTO_INCREMENT ,
`providendFundId` varchar(128) DEFAULT NULL COMMENT 'Enter providendFundId',
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`monthNo` varchar(128) NOT NULL COMMENT 'Enter monthNo',
`empAmount` varchar(128) DEFAULT NULL COMMENT 'Enter empAmount',
`companyAmount` varchar(128) DEFAULT NULL COMMENT 'Enter companyAmount',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pf_loan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`employeeId` varchar(128) NOT NULL COMMENT 'Enter employeeId',
`installment` varchar(128) NOT NULL COMMENT 'Enter installment',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`installmentFrom` varchar(128) DEFAULT NULL COMMENT 'Enter installmentFrom',
`PfLoanInstallment` varchar(128) DEFAULT NULL COMMENT 'Enter PfLoanInstallment',
`installmentTo` varchar(128) DEFAULT NULL COMMENT 'Enter installmentTo',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pf_loan_installment` (
`id` INT NOT NULL AUTO_INCREMENT ,
`pfLoanId` varchar(128) NOT NULL COMMENT 'Enter pfLoanId',
`installment` varchar(128) NOT NULL COMMENT 'Enter installment',
`monthNo` varchar(128) DEFAULT NULL COMMENT 'Enter monthNo',
`transactionDate` varchar(128) DEFAULT NULL COMMENT 'Enter transactionDate',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


CREATE TABLE `features` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `characteristics` (
`id` INT NOT NULL AUTO_INCREMENT ,
`icon` varchar(128) DEFAULT NULL COMMENT 'Enter icon',
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` varchar(128) DEFAULT NULL COMMENT 'Enter name',
`shortDetails` varchar(128) DEFAULT NULL COMMENT 'Enter shortDetails',
`features` varchar(128) DEFAULT NULL COMMENT 'Enter features',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `pricing_plan` (
`id` INT NOT NULL AUTO_INCREMENT ,
`type` varchar(128) DEFAULT NULL COMMENT 'Enter type',
`rate` varchar(128) DEFAULT NULL COMMENT 'Enter rate',
`unit` varchar(128) DEFAULT NULL COMMENT 'Enter unit',
`buyLink` varchar(128) DEFAULT NULL COMMENT 'Enter buyLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `team` (
`id` INT NOT NULL AUTO_INCREMENT ,
`memberName` varchar(128) DEFAULT NULL COMMENT 'Enter memberName',
`designation` varchar(128) DEFAULT NULL COMMENT 'Enter designation',
`about` varchar(128) DEFAULT NULL COMMENT 'Enter about',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`frontPageId` varchar(128) DEFAULT NULL COMMENT 'Enter frontPageId',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `front_page` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` varchar(128) DEFAULT NULL COMMENT 'Enter title',
`heading` varchar(128) NOT NULL COMMENT 'Enter heading',
`headline` varchar(128) DEFAULT NULL COMMENT 'Enter headline',
`description` varchar(128) DEFAULT NULL COMMENT 'Enter description',
`specialLink` varchar(128) DEFAULT NULL COMMENT 'Enter specialLink',
`linkType` varchar(128) DEFAULT NULL COMMENT 'Enter linkType',
`detailsLink` varchar(128) DEFAULT NULL COMMENT 'Enter detailsLink',
`detailsLinkText` varchar(128) NOT NULL COMMENT 'Enter detailsLinkText',
`contactUsHeadline` varchar(128) DEFAULT NULL COMMENT 'Enter contactUsHeadline',
`footerMessage` varchar(128) DEFAULT NULL COMMENT 'Enter footerMessage',
`footerLink` varchar(128) DEFAULT NULL COMMENT 'Enter footerLink',
`facebookLink` varchar(128) DEFAULT NULL COMMENT 'Enter facebookLink',
`githubLink` varchar(128) DEFAULT NULL COMMENT 'Enter githubLink',
`twitterLink` varchar(128) DEFAULT NULL COMMENT 'Enter twitterLink',
`linkedInLink` varchar(128) DEFAULT NULL COMMENT 'Enter linkedInLink',
`Features` varchar(128) DEFAULT NULL COMMENT 'Enter Features',
`Characteristics` varchar(128) DEFAULT NULL COMMENT 'Enter Characteristics',
`Projects` varchar(128) DEFAULT NULL COMMENT 'Enter Projects',
`PricingPlan` varchar(128) DEFAULT NULL COMMENT 'Enter PricingPlan',
`Team` varchar(128) DEFAULT NULL COMMENT 'Enter Team',
`isDeleted` tinyint(4) NOT NULL DEFAULT '0',
`isApproved` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- application_table_sql

