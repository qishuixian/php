--
-- 数据库: `article`
--

-- --------------------------------------------------------

--
-- 表的结构 `at_admin`
--

CREATE TABLE IF NOT EXISTS `at_admin` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `at_admin`
--

INSERT INTO `at_admin` (`id`, `user`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- 表的结构 `at_article`
--

CREATE TABLE IF NOT EXISTS `at_article` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `author` varchar(20) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `new` tinyint(2) NOT NULL DEFAULT '0',
  `hot` tinyint(2) NOT NULL DEFAULT '0',
  `desc` text NOT NULL,
  `typeid` int(5) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `at_article`
--

INSERT INTO `at_article` (`id`, `title`, `author`, `pic`, `new`, `hot`, `desc`, `typeid`, `time`) VALUES
(5, '5', '5', './Public/Uploads/2016-07-04/577a2b40cee57.jpg', 1, 0, '青春新派动作手游《神魔2.0》，年度资料片-九重天首章?倾世一战，伐天征途震撼开启！全新主角天狐领衔个性阵容，酷炫出击。神魔boss轮番出阵，挑战你的极限！神装法宝，坐骑翅膀，元神修炼，全民国战等多个特色系统完美结合，华丽技能无缝连招，力破千军的战斗体验，让你玩&lt;strong&gt;转动作派经典！青春新派动作手游《神魔2.0》，年度资料片-九重天首章?倾世一战，伐天征途震撼开启！全新主角天狐领衔个性阵容，酷炫出击。神魔boss轮番出阵，挑战你的极限！神装法宝，坐骑翅膀，元神修炼，全民国战等多个特色系统完美结合，华丽技能无缝连招，力破千军的战斗体验，让你玩转动作派经典！青春新派动作手游《神魔2.0》，年度资料片-九重天首章?倾世一战，伐天征途震撼开启！全新主角天狐领衔个性阵容，酷炫出击。神魔boss轮番出阵，挑战你的极限！神装法宝，坐骑翅膀，元神修炼，全民国战等多个特色系统完美结合，华丽技能无缝连招，力破千军的战斗体验，让&lt;/strong&gt;你玩转动作派经典！', 7, '1467624256'),
(4, '6', '4', './Public/Uploads/2016-07-04/577a23e21464b.jpg', 1, 0, '666666666666666666666', 7, '1467622370'),
(6, '6', '4', './Public/Uploads/2016-07-04/577a341285ee4.jpg', 1, 0, '66666666666666666666666', 3, '1467626514'),
(7, '戚水仙3', '戚水仙3', './Public/Uploads/2016-07-04/577a3a13dcd40.jpg', 1, 0, '33333333333333333333333333333', 3, '1467628051'),
(8, '水仙8', '水仙8', './Public/Uploads/2016-07-13/5785e916c879e.jpg', 0, 0, '2222222222222222222222222222222222', 7, '1467628090'),
(19, '南海', '南海', './Public/Uploads/2016-07-13/57859a7cbad32.png', 1, 0, '南海是中国的', 7, '1468373628'),
(20, '南海1', '南海1', './Public/Uploads/2016-07-13/57859aac47088.jpg', 0, 0, '3人、', 7, '1468373676'),
(22, '9090', '9090', './Public/Uploads/2016-07-13/5786159c278f8.jpg', 1, 1, '9999999999999999', 7, '1468405148');

-- --------------------------------------------------------

--
-- 表的结构 `at_type`
--

CREATE TABLE IF NOT EXISTS `at_type` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `at_type`
--

INSERT INTO `at_type` (`id`, `typename`) VALUES
(8, 'html5'),
(3, 'jquery'),
(9, 'css3'),
(7, 'JavaScript'),
(10, '前端项目'),
(11, 'php开发'),
(12, '我的生活'),
(13, '其他');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
