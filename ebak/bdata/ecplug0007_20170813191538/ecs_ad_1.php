<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('1','255','0','1','','index_banner_1.png','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('2','255','0','2','','index_banner_2.png','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('3','255','0','3','','index_banner_3.png','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('4','256','0','1','','index-theme-icon1.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('5','256','0','1','','index-theme-icon2.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('6','256','0','1','','index-theme-icon3.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('7','256','0','1','','index-theme-icon4.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('8','256','0','1','','index-theme-icon5.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('9','256','0','1','','index-theme-icon6.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('10','256','0','1','','index-theme-icon7.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('11','256','0','1','','index-theme-icon8.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('12','256','0','1','','index-theme-icon9.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('13','256','0','1','','index-theme-icon10.gif','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('14','257','0','1','','index_ads_1.jpg','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('15','258','0','1','','index_ads_2.jpg','1396339200','1525161600','','','','0','1');");
E_D("replace into `ecs_ad` values('16','258','0','1','','index_ads_3.jpg','1396339200','1525161600','','','','0','1');");

require("../../inc/footer.php");
?>