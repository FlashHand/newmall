<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_position`;");
E_C("CREATE TABLE `ecs_ad_position` (
  `position_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=259 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_position` values('255','手机端首页Banner广告位','360','168','','{foreach from=\$ads item=ad}<div class=\"swiper-slide\">{\$ad}</div>{/foreach}');");
E_D("replace into `ecs_ad_position` values('256','手机端首页主题精选广告位','360','168','','{foreach from=\$ads item=ad name=ads}{if \$smarty.foreach.ads.iteration % 2 == 0}<li class=\"fl\">{else}<li class=\"fr\">{/if}{\$ad}</li>{/foreach}');");
E_D("replace into `ecs_ad_position` values('257','手机端首页限时促销广告位1','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");
E_D("replace into `ecs_ad_position` values('258','手机端首页限时促销广告位2','360','168','','{foreach from=\$ads item=ad name=ads}{\$ad}{/foreach}');");

require("../../inc/footer.php");
?>