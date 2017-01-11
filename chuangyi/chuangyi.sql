-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?08 �?27 �?13:44
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `chuangyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `ar_admin`
--

CREATE TABLE IF NOT EXISTS `ar_admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(30) NOT NULL,
  `ad_password` varchar(32) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `ar_admin`
--

INSERT INTO `ar_admin` (`ad_id`, `ad_name`, `ad_password`) VALUES
(19, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(21, '111', '698d51a19d8a121ce581499d7b701668'),
(22, 'root', '63a9f0ea7bb98050796b649e85481845'),
(23, '123', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- 表的结构 `ar_article`
--

CREATE TABLE IF NOT EXISTS `ar_article` (
  `ar_id` int(5) NOT NULL AUTO_INCREMENT,
  `ar_title` varchar(200) NOT NULL,
  `ar_author` varchar(20) NOT NULL,
  `ar_pic` varchar(200) NOT NULL,
  `ar_rem` tinyint(1) NOT NULL DEFAULT '0',
  `ar_content` text NOT NULL,
  `ar_cateid` int(5) NOT NULL,
  `ar_time` varchar(20) NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=301 ;

--
-- 转存表中的数据 `ar_article`
--

INSERT INTO `ar_article` (`ar_id`, `ar_title`, `ar_author`, `ar_pic`, `ar_rem`, `ar_content`, `ar_cateid`, `ar_time`) VALUES
(34, '22', '22', './Public/Uploads/2016-08-10/57aaf0621c1e2.jpg', 1, '&lt;p&gt;22&lt;/p&gt;', 105, '1470820450'),
(35, '33', '33', './Public/Uploads/2016-08-10/57aaf0766239a.png', 1, '&lt;p&gt;33333&lt;/p&gt;', 106, '1470820470'),
(36, '44', '44', './Public/Uploads/2016-08-10/57aaf08959f1f.png', 1, '&lt;p&gt;444&lt;/p&gt;', 107, '1470820489'),
(37, '222', '222', './Public/Uploads/2016-08-10/57aaf09f2024c.jpg', 1, '&lt;p&gt;2222222222&lt;/p&gt;', 114, '1470820511'),
(38, '212', '213', './Public/Uploads/2016-08-10/57aaf0b08381f.jpg', 1, '&lt;p&gt;1222&lt;/p&gt;', 115, '1470820528'),
(39, '4444', '44444', './Public/Uploads/2016-08-10/57aaf11611ef7.png', 1, '&lt;p&gt;444444444444&lt;/p&gt;', 114, '1470820630'),
(40, '5454', '44444', './Public/Uploads/2016-08-10/57aaf139c9c8c.jpg', 1, '&lt;p&gt;4444444444444444444&lt;/p&gt;', 114, '1470820665'),
(300, '300', '300', '300', 127, '300', 300, '300'),
(33, '11', '11', './Public/Uploads/2016-08-10/57aaf03c65cf5.jpg', 1, '&lt;p&gt;11111111111111&lt;/p&gt;', 103, '1470820412');

-- --------------------------------------------------------

--
-- 表的结构 `ar_category`
--

CREATE TABLE IF NOT EXISTS `ar_category` (
  `cate_id` int(5) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(20) NOT NULL,
  `cate_ename` varchar(20) NOT NULL,
  `cate_pic` varchar(200) NOT NULL,
  `cate_keywords` varchar(200) NOT NULL,
  `cate_desc` text NOT NULL,
  `cate_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0封面,1列表,2产品',
  `parentid` int(5) NOT NULL DEFAULT '0',
  `cate_content` text NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=123 ;

--
-- 转存表中的数据 `ar_category`
--

INSERT INTO `ar_category` (`cate_id`, `cate_name`, `cate_ename`, `cate_pic`, `cate_keywords`, `cate_desc`, `cate_type`, `parentid`, `cate_content`) VALUES
(102, '最新动态', 'News', './Public/Uploads/2016-08-10/57aacaa81f6fc.jpg', '最新动态', '最新动态', 0, 102, '&lt;p&gt;102&lt;/p&gt;'),
(101, '关于创宜', 'About us', './Public/Uploads/2016-08-10/57aacbd6445ef.jpg', '关于创宜', '关于创宜', 0, 101, '&lt;p&gt;101&lt;/p&gt;'),
(103, '产品介绍', 'Product', './Public/Uploads/2016-08-10/57aacc8a9aa12.jpg', '产品动态', '产品动态', 0, 0, '&lt;p&gt;103&lt;/p&gt;'),
(105, '企业风采', 'Company style', '', '企业风采', '企业风采', 0, 0, '&lt;p&gt;&lt;span style=&quot;color: rgb(52, 75, 80); font-family: Simsun; font-size: 12px; background-color: rgb(213, 244, 254);&quot;&gt;企业风采&lt;/span&gt;&lt;/p&gt;'),
(106, '诚聘英才', 'Career', '', '诚聘英才', '诚聘英才', 0, 0, '&lt;p&gt;诚聘英才&lt;/p&gt;'),
(107, '联系我们', 'Contact us', '', '联系我们', '联系我们', 0, 0, '&lt;p&gt;联系我们&lt;/p&gt;'),
(108, '创宜简介', '创宜简介', '', '创宜简介', '创宜简介', 1, 101, '&lt;p&gt;创宜简介&lt;/p&gt;'),
(109, '创宜文化', '创宜文化', '', '创宜文化', '创宜文化', 1, 101, '&lt;p&gt;创宜文化&lt;/p&gt;'),
(110, '创宜视频', '创宜视频', '', '创宜视频', '创宜视频', 1, 101, '&lt;p&gt;创宜视频&lt;/p&gt;'),
(111, '公司新闻', '公司新闻', '', '公司新闻', '公司新闻', 1, 102, '&lt;p&gt;公司新闻&lt;/p&gt;'),
(112, '国际交流', '国际交流', '', '国际交流', '国际交流', 1, 102, '&lt;p&gt;国际交流&lt;/p&gt;'),
(113, '行业资讯', '行业资讯', '', '行业资讯', '行业资讯', 1, 102, '&lt;p&gt;行业资讯&lt;/p&gt;'),
(114, '育宜康', '育宜康', '', '育宜康', '育宜康', 1, 103, '&lt;p&gt;育宜康&lt;/p&gt;'),
(115, '安宜康', '安宜康', './Public/Uploads/2016-08-10/57aaccadd0581.png', '安宜康', '安宜康', 1, 103, '&lt;p&gt;115&lt;/p&gt;'),
(116, '创宜访谈', '创宜访谈', '', '创宜访谈', '创宜访谈', 1, 105, '&lt;p&gt;创宜访谈&lt;/p&gt;'),
(117, '创宜资质', '创宜资质', '', '创宜资质', '创宜资质', 1, 105, '&lt;p&gt;创宜资质&lt;/p&gt;'),
(118, '创宜讲座', '创宜讲座', '', '创宜讲座', '创宜讲座', 1, 105, '&lt;p&gt;创宜讲座&lt;/p&gt;'),
(119, '销售部区域经理', '销售部区域经理', '', '销售部区域经理', '销售部区域经理', 1, 106, '&lt;p&gt;销售部区域经理&lt;/p&gt;'),
(120, '业务主管', '业务主管', '', '业务主管', '业务主管', 1, 106, '&lt;p&gt;业务主管&lt;/p&gt;'),
(121, '联系方式', '联系方式', '', '联系方式', '联系方式', 1, 107, '&lt;p&gt;联系方式&lt;/p&gt;'),
(122, '在线留言', '在线留言', '', '在线留言', '在线留言', 1, 107, '&lt;p&gt;在线留言&lt;/p&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `ar_conf`
--

CREATE TABLE IF NOT EXISTS `ar_conf` (
  `cf_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `cf_name` varchar(30) NOT NULL,
  `cf_ename` varchar(30) NOT NULL,
  `cf_type` varchar(30) NOT NULL,
  `cf_values` text NOT NULL,
  `cf_value` text NOT NULL,
  PRIMARY KEY (`cf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `ar_conf`
--

INSERT INTO `ar_conf` (`cf_id`, `cf_name`, `cf_ename`, `cf_type`, `cf_values`, `cf_value`) VALUES
(6, '99', '99', 'radio', '99', '99'),
(5, '46', '46', 'text', '444', '444'),
(4, '45', '44', 'text', '444444', '44444444'),
(7, '77', '77', 'textarea', '77', '7777');

-- --------------------------------------------------------

--
-- 表的结构 `ar_link`
--

CREATE TABLE IF NOT EXISTS `ar_link` (
  `li_id` int(5) NOT NULL AUTO_INCREMENT,
  `li_title` varchar(60) NOT NULL,
  `li_url` varchar(100) NOT NULL,
  `li_pic` varchar(200) NOT NULL,
  `li_des` text NOT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `ar_link`
--

INSERT INTO `ar_link` (`li_id`, `li_title`, `li_url`, `li_pic`, `li_des`) VALUES
(8, '370', 'http://370.com', './Public/Uploads/2016-08-04/57a2ebc96f3c3.jpg', '370'),
(9, '4555', 'http://450.com', './Public/Uploads/2016-08-04/57a2ebeacb410.jpg', '5555'),
(10, '55', 'http://555.ccom', '', '&lt;p&gt;555555555555555555&lt;br/&gt;&lt;/p&gt;'),
(11, '', 'http://', '', ''),
(14, '', 'http://', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
