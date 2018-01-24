--
-- 转存表中的数据 `ecs_touch_ad_position`
--
DELETE FROM `ecs_ad_position` WHERE `position_id` = 256;
INSERT INTO `ecs_ad_position` (`position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style`) VALUES
(256, '手机端首页主题精选广告位', 360, 168, '', '{foreach from=$ads item=ad name=ads}{if $smarty.foreach.ads.iteration % 2 == 0}<li class="fl">{else}<li class="fr">{/if}{$ad}</li>{/foreach}');

DELETE FROM `ecs_ad` WHERE `position_id` = 256;
INSERT INTO `ecs_ad` (`position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled`) VALUES
(256, 0, '1', '', 'index-theme-icon1.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon2.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon3.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon4.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon5.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon6.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon7.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon8.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon9.gif', 1396339200, 1525161600, '', '', '', 0, 1),
(256, 0, '1', '', 'index-theme-icon10.gif', 1396339200, 1525161600, '', '', '', 0, 1);

INSERT INTO `ecs_ad_position` (`position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style`) VALUES
(257, '手机端首页限时促销广告位1', 360, 168, '', '{foreach from=$ads item=ad name=ads}{$ad}{/foreach}');
INSERT INTO `ecs_ad_position` (`position_id`, `position_name`, `ad_width`, `ad_height`, `position_desc`, `position_style`) VALUES
(258, '手机端首页限时促销广告位2', 360, 168, '', '{foreach from=$ads item=ad name=ads}{$ad}{/foreach}');

INSERT INTO `ecs_ad` (`position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled`) VALUES
(257, 0, '1', '', 'index_ads_1.jpg', 1396339200, 1525161600, '', '', '', 0, 1);
INSERT INTO `ecs_ad` (`position_id`, `media_type`, `ad_name`, `ad_link`, `ad_code`, `start_time`, `end_time`, `link_man`, `link_email`, `link_phone`, `click_count`, `enabled`) VALUES
(258, 0, '1', '', 'index_ads_2.jpg', 1396339200, 1525161600, '', '', '', 0, 1),
(258, 0, '1', '', 'index_ads_3.jpg', 1396339200, 1525161600, '', '', '', 0, 1);
