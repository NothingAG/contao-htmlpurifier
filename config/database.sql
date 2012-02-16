-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_htmlpurifier`
-- 

CREATE TABLE `tl_htmlpurifier` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `fallback` char(1) NOT NULL default '',
  `rte` varchar(255) NOT NULL default '',
  
  `Attr_AllowedClasses` varchar(255) NOT NULL default '',
  `Attr_DefaultImageAlt` varchar(255) NOT NULL default '',
  `Attr_DefaultTextDir` varchar(3) NOT NULL default '',
  `Attr_EnableID` char(1) NOT NULL default '',
  `Attr_ForbiddenClasses` varchar(255) NOT NULL default '',
  `Attr_IDBlacklist` varchar(255) NOT NULL default '',
  
  `AutoFormat_Linkify` char(1) NOT NULL default '',
  `AutoFormat_RemoveEmpty` char(1) NOT NULL default '',
  `AutoFormat_RemoveEmpty_RemoveNbsp` char(1) NOT NULL default '',
  `AutoFormat_RemoveEmpty_RemoveNbsp_Exceptions` varchar(255) NOT NULL default '',
  `AutoFormat_RemoveSpansWithoutAttributes` char(1) NOT NULL default '',

  `CSS_AllowedProperties` varchar(255) NOT NULL default '',
  `CSS_ForbiddenProperties` varchar(255) NOT NULL default '',
  `CSS_AllowImportant` char(1) NOT NULL default '',
  `CSS_AllowTricky` char(1) NOT NULL default '',
  `CSS_Proprietary` char(1) NOT NULL default '',
  
  `HTML_Doctype` varchar(32) NOT NULL default '',
  `HTML_ForbiddenAttributes` varchar(255) NOT NULL default '',
  `HTML_ForbiddenElements` varchar(255) NOT NULL default '',
  `HTML_TidyLevel` varchar(10) NOT NULL default '',
  `HTML_Trusted` char(1) NOT NULL default '',
  
  `URI_DisableExternal` char(1) NOT NULL default '',
  `URI_DisableExternalResources` char(1) NOT NULL default '',
  
  PRIMARY KEY  (`id`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_user`
-- 

CREATE TABLE `tl_user` (
  `htmlpurifier` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table `tl_user_group`
-- 

CREATE TABLE `tl_user_group` (
  `htmlpurifier` int(10) unsigned NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

