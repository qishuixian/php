--
-- 数据库: `carshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `cs_admin`
--

CREATE TABLE IF NOT EXISTS `cs_admin` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `roleid` mediumint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `cs_admin`
--

INSERT INTO `cs_admin` (`id`, `username`, `password`, `roleid`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(13, 'guanliyuan', 'e10adc3949ba59abbe56e057f20f883e', 1),
(12, 'tp', 'e10adc3949ba59abbe56e057f20f883e', 8),
(11, 'tongpan', 'e10adc3949ba59abbe56e057f20f883e', 7),
(14, '111', '698d51a19d8a121ce581499d7b701668', 1),
(15, '222', 'bcbe3365e6ac95ea2c0343a2395834dd', 9),
(16, '333', '310dcbbf4cce62f762a2aaa148d556bd', 6),
(17, '444', '550a141f12de6341fba65b0ad0433500', 7),
(18, '555', '15de21c670ae7c3f6f3f1f37029303c9', 8);

-- --------------------------------------------------------

--
-- 表的结构 `cs_article`
--

CREATE TABLE IF NOT EXISTS `cs_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `atype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:列表 1：车型 2：招聘',
  `rizu` mediumint(6) NOT NULL COMMENT '日租价格',
  `num` varchar(3) NOT NULL COMMENT '招聘人数',
  `author` varchar(20) NOT NULL,
  `pic` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `keywords` varchar(60) NOT NULL,
  `des` varchar(255) NOT NULL,
  `rem` tinyint(1) NOT NULL DEFAULT '0',
  `cateid` mediumint(5) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `cs_article`
--

INSERT INTO `cs_article` (`id`, `title`, `atype`, `rizu`, `num`, `author`, `pic`, `content`, `keywords`, `des`, `rem`, `cateid`, `time`) VALUES
(1, '1', 0, 0, '', '2', './Public/Uploads/2016-04-07/570650c43db3b.jpg', '&lt;p&gt;123456778&lt;br/&gt;&lt;/p&gt;', '3', '4', 1, 75, 1461511847),
(12, '测试新闻资讯1', 0, 0, '', '', '', '', '', '', 0, 69, 1461727928),
(13, '测试新闻资讯2', 0, 0, '', '', '', '&lt;p&gt;测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1&lt;/p&gt;', '', '', 0, 69, 1461727944),
(7, '测试文章2', 1, 1000, '', '', '', '&lt;p&gt;测试文章2测试文章2测试文章2&lt;/p&gt;', '', '', 0, 68, 1461732611),
(8, '测试文章5', 0, 0, '', '', '', '', '', '', 0, 69, 1461511830),
(9, '测试文章6', 0, 0, '', '', './Public/Uploads/2016-05-03/5728bb5fc39d9.jpg', '&lt;p&gt;测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6&lt;/p&gt;', '', '', 0, 70, 1462287199),
(10, '车型展示1', 1, 100, '', '1', '', '&lt;p&gt;车型展示1车型展示1车型展示1&lt;br/&gt;&lt;/p&gt;', '2', '3', 1, 68, 1461909821),
(11, 'UI设计师1', 2, 0, '21', '', '', '&lt;p&gt;1、收集和分析用户界面需求；&lt;br/&gt;2、结合用户体验及技术可行性确定线框图；&lt;br/&gt;3、将线框图设计为平面效果图；&lt;br/&gt;4、跟踪开发和测试；&lt;br/&gt;5、根据数据分析，对页面进行优化。111&lt;/p&gt;', '', '', 0, 27, 1460435581),
(14, '测试新闻资讯3', 0, 0, '', '', '', '&lt;p&gt;测试新闻资讯1测试新闻资讯1测试新闻资讯1测试新闻资讯1&lt;/p&gt;', '', '', 0, 69, 1461727959),
(15, '测试车辆展示1', 0, 0, '', '', './Public/Uploads/2016-04-27/572043b5b427e.jpg', '&lt;p&gt;测试车辆展示1测试车辆展示1测试车辆展示1测试车辆展示1&lt;/p&gt;', '', '', 0, 68, 1461732277),
(16, '测试车辆展示2', 1, 100, '', '', './Public/Uploads/2016-04-27/5720440116c2c.jpg', '&lt;p&gt;测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3&lt;/p&gt;', '', '', 0, 68, 1461732353),
(17, '测试车辆展示3', 1, 234, '', '', './Public/Uploads/2016-04-27/5720442390d32.jpg', '&lt;p&gt;测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3测试车辆展示3&lt;/p&gt;', '', '', 1, 68, 1461732387),
(18, '测试荣誉1', 0, 0, '', '', './Public/Uploads/2016-04-28/5720e25f1d53e.jpg', '&lt;p&gt;测试荣誉1测试荣誉1测试荣誉1&lt;/p&gt;', '', '', 0, 80, 1461772895),
(19, '测试荣誉2', 0, 0, '', '', './Public/Uploads/2016-04-28/5720e284db8d7.jpg', '&lt;p&gt;测试荣誉2测试荣誉2测试荣誉2测试荣誉2测试荣誉2测试荣誉2&lt;/p&gt;', '', '', 0, 80, 1461772932),
(20, '荣誉3', 0, 0, '', '', './Public/Uploads/2016-04-28/5720e29cd839b.jpg', '&lt;p&gt;荣誉3荣誉3荣誉3荣誉3&lt;/p&gt;', '', '', 0, 80, 1461772956),
(21, '招聘设计师', 2, 0, '3', '', '', '', '', '01、收集和分析用户界面需求；&lt;br&gt;\r\n02、结合用户体验及技术可行性确定线框图；&lt;br&gt;\r\n03、将线框图设计为平面效果图；&lt;br&gt;\r\n04、跟踪开发和测试；&lt;br&gt;\r\n05、根据数据分析，对页面进行优化。&lt;br&gt;', 0, 85, 1461773834),
(22, 'php工程师', 2, 0, '10', '', '', '', '', '1、收集和分析用户界面需求1；\r\n2、结合用户体验及技术可行性确定线框图2；\r\n3、将线框图设计为平面效果图3；\r\n4、跟踪开发和测试4；\r\n5、根据数据分析，对页面进行优化5。', 0, 85, 1461773597),
(23, '招聘前端', 2, 0, '4', '', '', '', '', '1、收集和分析用户界面需求；\r\n2、结合用户体验及技术可行性确定线框图；\r\n3、将线框图设计为平面效果图；\r\n4、跟踪开发和测试；\r\n5、根据数据分析，对页面进行优化。', 0, 85, 1461773624),
(24, '费用说明测试文章1', 0, 0, '', '', '', '&lt;p&gt;费用说明测试文章1费用说明测试文章1&lt;/p&gt;', '', '', 0, 91, 1462463649),
(25, '费用说明测试文章2', 0, 0, '', '', '', '&lt;p&gt;费用说明测试文章2费用说明测试文章2费用说明测试文章2&lt;/p&gt;', '', '', 0, 91, 1462463677),
(26, '费用说明测试文章3', 0, 0, '', '', '', '&lt;p&gt;费用说明测试文章3费用说明测试文章3费用说明测试文章3费用说明测试文章3费用说明测试文章3费用说明测试文章3费用说明测试文章3费用说明测试文章3&lt;/p&gt;', '', '', 0, 91, 1462463699),
(27, '费用说明测试文章4', 0, 0, '', '', '', '&lt;p&gt;费用说明测试文章4费用说明测试文章4费用说明测试文章4费用说明测试文章4&lt;/p&gt;', '', '', 0, 91, 1462463716),
(28, '费用说明测试文章5', 0, 0, '', '', '', '&lt;p&gt;费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5费用说明测试文章5&lt;/p&gt;', '', '', 0, 91, 1462463744),
(29, '费用说明测试文章6', 0, 0, '', '', '', '&lt;p&gt;费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6费用说明测试文章6&lt;/p&gt;', '', '', 0, 91, 1462463765),
(30, '费用说明测试文章7', 0, 0, '', '', '', '&lt;p&gt;费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7费用说明测试文章7&lt;/p&gt;', '', '', 0, 91, 1462463783),
(31, '车辆展示1', 0, 0, '', '', './Public/Uploads/2016-05-06/572c25f280ede.jpg', '&lt;p&gt;车辆展示1车辆展示1车辆展示1车辆展示1车辆展示1&lt;/p&gt;', '', '', 0, 93, 1462511090),
(32, '车辆展示2', 0, 0, '', '', './Public/Uploads/2016-05-06/572c260d27369.jpg', '&lt;p&gt;车辆展示2车辆展示2车辆展示2车辆展示2&lt;/p&gt;', '', '', 0, 93, 1462511117),
(33, '车辆展示3', 0, 0, '', '', './Public/Uploads/2016-05-06/572c262a12607.jpg', '&lt;p&gt;车辆展示3车辆展示3&lt;/p&gt;', '', '', 0, 93, 1462511146),
(34, '车辆展示4', 0, 0, '', '', './Public/Uploads/2016-05-06/572c2644de5d6.jpg', '&lt;p&gt;车辆展示3车辆展示3车辆展示3&lt;/p&gt;', '', '', 0, 93, 1462511172),
(35, '车辆展示5', 0, 0, '', '', './Public/Uploads/2016-05-06/572c265c62ab5.jpg', '&lt;p&gt;车辆展示5车辆展示5车辆展示5车辆展示5车辆展示5&lt;/p&gt;', '', '', 0, 93, 1462511196),
(36, '汽车维修保养之六大忌', 0, 0, '', '小仙', './Public/Uploads/2016-11-19/582ff89448845.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;汽车保养的六大忌，下面就让我们一起来看看。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; 1：忌机械伤害。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　对汽车的保养关联着各个方面，在进行保养操作时，应设置明显的作业标志，以防其他人的误操作而受到伤害。在启动汽车时，应注意变速器的挡位情况，以防汽车误动伤人。在发动机罩下工作时，应让其他人离开驾驶室，以防发动机突然转动或他人操纵机构动作，造成误伤。如果需要在车下作业时，应设置明显的标志，并将汽车用掩车木掩好。用千斤顶支车时，千斤顶要放置平稳。驾车前应准备好驾车工具（驾车凳），禁止用砖头等易碎物体。在安装总成时，千万不要用手试探螺孔、锁孔等以免轧断手指。试验发动机时，不得在车下作业。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　2、忌失火。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　在保养汽车时，经常需要使用油料、清洗剂等易燃、易爆物品，此时千万别忘了消防措施，备好灭火器，以防万一。在油箱和蓄电池附近，不要吸烟，因为油箱逸出的可燃气体和蓄电池逸出的氢气是很容易被引燃的。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　3、忌烫伤。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　刚刚熄火的发动机，由于发动机的各部件（水箱、排气管道、动力转向液箱和火花塞等）温度都比较高，必须小心接触，以防烫伤。如果发动机温度高，千万不要取下水箱盖或松开放水开关，以防烫伤。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　4、忌损伤汽车。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　制动液对汽车的漆膜（包括皮鞋的漆膜）有损害作用，它能很快地溶解漆膜。制动液对眼睛是有害的，如果溅入眼睛，必须立即用清水冲洗干净。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　5、忌不注意旋转的机件及汽车路试的防护。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　在发动机运转时，注意手、衣物和工具必须离开旋转的风扇和风扇传动带（最好取下佩戴的戒指、手表和领带等物品）。试车时，汽车各部位状况应能保证安全停车和转向有效。路试的汽车必须有明显的试车标志。试车时，人员必须乘坐安全，并在专门的试车道上进行。&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　6、忌不注意工作场所的清理。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　在关闭发动机盖或其他总成盖时，应检查工具、抹布和拆下的零件等物品是否遗忘，待确认无误后，才可以关闭。&lt;/span&gt;&lt;/p&gt;', '保养', '汽车维修保养之六大忌', 1, 94, 1479538836),
(37, '三种颜色 识别汽车烟雾种类', 0, 0, '', '三种颜色 识别汽车烟雾种类', './Public/Uploads/2016-11-19/582ffbc8d8c9c.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;汽车冒烟可大可小，很多新手车主面对汽车冒烟的情况总是手足无措。其实出现故障烟先不要惊慌，仔细观察烟雾情况，不同的故障烟有不同的解决方法，因此先要懂得识别烟雾种类。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　状况一：黑烟&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　车体表现：汽车的发动机抖动大，排气管有不正常声音发出，同时排出黑色烟体，加速时感觉无力。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　故障原因：排黑烟的现象在化油器车上比较多见，这是由于化油器车型的喷油量不是由电脑控制，而是由脚踏油门控制，一些情况下过多的燃油进入汽缸后来不及燃烧就排出车外，这样就造成了我们看到的黑烟。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　处理办法：1.化油器的车如今基本都已上了年岁，要经常检查化油器等机件的老化程度，化油器车不同于电喷轿车，要经常进行保养和调校，养成好的用车习惯。2.电喷车要每隔3万公里检查缸线，每隔1万公里检查火花塞，有问题的要及时更换。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　状况二：白烟&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　车体表现：可见大量白色水蒸气冒出并伴有发动机运转不平稳，即使发动机预热达到正常工作水温仍有大量水蒸气冒出。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　故障原因：导致冒白烟可能是由于发动机汽缸的缸垫有磨损，产生一定间隙，导致散热系统的水大量进入燃烧室。水无法燃烧，受热后生成水蒸气，直接从排气管排出。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　处理办法：1.检查发动机缸体、汽缸垫是否有损伤，检查油箱内是否有积水。2.查看汽车说明书，严格依照厂家规定添加标号正确的汽油。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　状况三：蓝烟&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　车体表现：车辆爆发力下降，感觉加速无力，噪声变大，排气管有蓝色烟排出，并伴随有机油燃烧所产生的焦糊味道。通过检查机油标尺同时还会发现机油的消耗量过大，正常情况下每次保养完，经行驶7500公里后，机油的消耗量应在正常范围内，无需中途补充。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　故障原因：蓝烟多是由于发动机内部故障，导致机油窜入燃烧室燃烧而产生的，常见的一般有两种情况：汽缸内壁有划伤、活塞密封不良或气门处严重磨损，都会产生间隙，而原本负责润滑的机油此时会通过这些间隙窜入燃烧室参与燃烧，燃烧不了的机油排出车外时就产生了蓝色的浓烟。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　处理办法：1.对车龄较老的车辆要经常检查缸体、活塞等部件的密封性，发现有蓝烟排出时及时到维修站修理，以防更大损失。2.机油添加要适量，过多、过少都不可取。定时检查机油使用情况，一旦发现机油消耗异常，立即去专业维修站进行检查。&lt;/span&gt;&lt;/p&gt;', '三种颜色 识别汽车烟雾种类', '三种颜色 识别汽车烟雾种类', 1, 94, 1479539656),
(38, '电喷汽车发动机故障的巧修', 0, 0, '', '戚水仙', './Public/Uploads/2016-11-19/582ffbfe79586.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;1、驾驶杆不能从P档拔出&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　AL4自动变速箱会发生驾驶操纵杆不能从P档拔出的故障现象，这时挂不上其它档，轿车动不了，司机会十分恼火。当然用手硬板驾驶操纵杆是无济于事的，现有个巧妙的方法拔操纵杆：如何延长发动机配气机构使用寿命改装发动机涡轮增压进气系统的介绍&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　a、短接制动灯开关输入输出线端；&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　b、用大起子斜插进锁止器拔开电磁铁，迅速拔出操纵杆；&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　c、拆开中央杂物盒，直接拔起锁止驱动器的衔铁芯，将变速杆拔到“N”档。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　当然，排除这个故障有个前提，即踏下制动踏板后，制动灯不亮才有效。如仪表板上“SPT”、“*”灯闪亮则可能是自动变速器电脑损坏或是防止启动继电器损坏，这时不能用以上方法拔出变速杆。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　2、排除气阻的方法&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　电喷车供油系也会发生气阻，除设计原因外，油箱和油管近高温区，易发生气阻，需用冷水、冷抹布传统冷却方法排除。其他电喷车同样也会发生气阻，如富康(报价图片参数)电喷车在行车途中突然熄火，不能再启动。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　这时应打开电门，启动数次，用油盆接住拆开的汽车滤清器管口的出油，直至带泡沫的汽油排净，拧紧油管即可，它同时会告诉你，加油时不要按下油箱口内白色按钮，让油箱装满了油，致使油箱中气体无排出空间。这种故障在满油箱交接的出租车中最易发生。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　3、防止淹缸的方法&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　富康轿车在暴雨中急驶，易发生淹缸故障。原因是吸气口位于水箱面罩前下方，溅起的泥水易从吸气口，经空滤器吸入气缸，造成淹缸，打损缸体。同时，北方发生沙尘暴时，由于富康轿车的这个结构特点，沙尘也极易从吸气口进入空滤器造成堵塞熄火。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　应急方法：在沙尘暴天气时，应勤清除空滤器滤芯沙尘，还可将吸气口转向侧面也很有效。暴雨天，应控制车速、选择路面，不冲水洼低塘。如暴雨持久，干脆临时将吸气管从空滤器一端拆下，天晴后再行安装，可有效地避免淹缸、捣缸事故。&lt;/span&gt;&lt;/p&gt;', '电喷汽车发动机故障的巧修', '电喷汽车发动机故障的巧修', 1, 94, 1479539710),
(39, '排除制动失灵故障的方法', 0, 0, '', '排除制动', './Public/Uploads/2016-11-19/582ffc2e3c001.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;1、故障现象&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　制动踏板行程过大，制动作用迟缓，制动效能很低甚至丧失，制动距离增长。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　2、故障原因&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　1)制动油压力不足。&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　2)制动系统内有空气&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　3)制动踏板自由行程或制动器间隙过大，制动蹄摩擦片接触不良，磨损严重或有油污&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　4)制动主缸、轮缸活塞和缸管磨损或拉伤，皮碗老化损坏&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　3、故障的判断与排除&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　1)连续踩下制动踏板，如踏板逐渐升高且有弹性感觉，但稍停一会后再踩踏板时仍然很低，即为制动系统内有空气，这时应对制动系统进行排气&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　2)一脚制动不灵，但连续踩几次踏板时制动效果很好，一般为制动踏板自由行程过大或制动间隙过大。应调整踏板自由行程，而后检查制动器间隙，必要时进行制动器解体修理&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: 宋体; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;　　3)踩下制动踏板时，不软弱不沉，但就是制动效果不良，这一现象为车轮制动器故障，如制动蹄片有油或接触不良、摩擦片老化、磨损、制动鼓磨损不均。应对制动技术状况进行检查，必要时进行调整和修复。&lt;/span&gt;&lt;/p&gt;', '排除制动失灵故障的方法', '排除制动失灵故障的方法', 1, 94, 1479539758);

-- --------------------------------------------------------

--
-- 表的结构 `cs_cate`
--

CREATE TABLE IF NOT EXISTS `cs_cate` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `pc` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否是pc端栏目',
  `class` tinyint(1) NOT NULL DEFAULT '1' COMMENT '//栏目级别',
  `sort` mediumint(5) DEFAULT '50',
  `pic` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `keywords` varchar(60) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `parentid` mediumint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=99 ;

--
-- 转存表中的数据 `cs_cate`
--

INSERT INTO `cs_cate` (`id`, `name`, `type`, `pc`, `class`, `sort`, `pic`, `content`, `keywords`, `des`, `parentid`) VALUES
(67, '关于我们', 2, 1, 1, 1, NULL, '&lt;p&gt;关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们关于我们&lt;/p&gt;&lt;p&gt;&lt;img alt=&quot;3235ac20f8f58f91831c93c0580e7a3a.jpg&quot; src=&quot;/ueditor/php/upload/image/20160428/1461858352351741.jpg&quot; title=&quot;1461858352351741.jpg&quot;/&gt;&lt;/p&gt;', '', '', 0),
(68, '车辆展示', 5, 1, 1, 2, NULL, '', '', '', 0),
(69, '新闻资讯', 1, 1, 1, 3, NULL, '', '', '', 0),
(70, '主要车型', 5, 1, 1, 4, NULL, '', '', '', 0),
(71, '热门车型', 5, 1, 2, 50, NULL, '', '', '', 68),
(72, '豪华车型', 5, 1, 2, 50, NULL, '', '', '', 68),
(73, '小车型', 5, 1, 2, 50, NULL, '', '', '', 68),
(74, '紧凑车型', 5, 1, 2, 50, NULL, '', '', '', 68),
(75, '大众', 5, 1, 3, 50, NULL, '', '', '', 71),
(76, '寒假班', 5, 1, 3, 50, NULL, '', '', '', 71),
(77, '宝马', 5, 1, 3, 50, NULL, '', '', '', 72),
(78, '奔驰', 5, 1, 3, 50, NULL, '', '', '', 72),
(79, '测试新闻', 1, 1, 2, 50, NULL, '', '', '', 69),
(80, '资质荣誉', 6, 1, 1, 5, NULL, '', '', '', 0),
(81, '测试新闻2', 1, 1, 2, 50, NULL, '', '', '', 69),
(82, '测试三级1', 1, 1, 3, 50, NULL, '', '', '', 79),
(83, '测试三级2', 1, 1, 3, 50, NULL, '', '', '', 79),
(84, '租车须知', 2, 1, 1, 6, NULL, '&lt;p&gt;租车须知租车须知租车须知租车须知租车须知租车须知&lt;/p&gt;', '', '', 0),
(85, '人才招聘', 4, 1, 1, 7, NULL, '', '', '', 0),
(86, '在线留言', 3, 1, 1, 8, NULL, '', '', '', 0),
(87, '联系我们', 2, 1, 1, 9, NULL, '&lt;p&gt;&lt;img src=&quot;http://api.map.baidu.com/staticimage?center=116.450111,39.927669&amp;zoom=13&amp;width=530&amp;height=340&amp;markers=116.450111,39.927669&quot; height=&quot;340&quot; width=&quot;530&quot;/&gt;&lt;/p&gt;', '', '', 0),
(88, '公司简介', 2, 0, 1, 10, NULL, '&lt;p&gt;关于我们关于我们关于我们&lt;/p&gt;', '', '', 0),
(89, '如何租车', 2, 0, 1, 11, NULL, '&lt;p&gt;如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车如何租车&lt;/p&gt;', '', '', 0),
(90, '如何还车', 2, 0, 1, 12, NULL, '&lt;p&gt;如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车如何还车&lt;/p&gt;', '', '', 0),
(91, '费用说明', 1, 0, 1, 13, NULL, '', '', '', 0),
(92, '优惠活动', 5, 0, 1, 14, NULL, '', '', '', 0),
(93, '展示车辆', 5, 0, 1, 15, NULL, '', '', '', 0),
(94, '车辆保养', 1, 0, 1, 16, NULL, '', '', '', 0),
(95, '联系方式', 2, 0, 1, 17, NULL, '&lt;p&gt;联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们联系我们&lt;/p&gt;', '', '', 0),
(96, '招聘人才', 2, 0, 1, 18, NULL, '&lt;p&gt;招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘招聘&lt;/p&gt;', '', '', 0),
(97, '客户评价', 3, 0, 1, 19, NULL, '                                                                    ', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cs_job`
--

CREATE TABLE IF NOT EXISTS `cs_job` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL DEFAULT '男',
  `nation` varchar(30) NOT NULL COMMENT '民族',
  `age` varchar(15) NOT NULL COMMENT '生日',
  `marry` varchar(10) NOT NULL DEFAULT '未婚',
  `child` varchar(10) NOT NULL DEFAULT '无' COMMENT '有无子女',
  `bplace` varchar(20) NOT NULL COMMENT '籍贯',
  `address` varchar(100) NOT NULL COMMENT '户口所在地',
  `education` varchar(20) NOT NULL COMMENT '学历',
  `foreign` varchar(150) NOT NULL COMMENT '外语语种及程度',
  `mobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idnums` varchar(30) NOT NULL COMMENT '身份证号',
  `address_now` varchar(255) NOT NULL COMMENT '住址',
  `slim` varchar(20) NOT NULL COMMENT '可到职日期',
  `content` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `cs_job`
--

INSERT INTO `cs_job` (`id`, `title`, `name`, `sex`, `nation`, `age`, `marry`, `child`, `bplace`, `address`, `education`, `foreign`, `mobile`, `email`, `idnums`, `address_now`, `slim`, `content`) VALUES
(1, '招聘前端', '中国', '男', '蒙古族', '', '未婚', '', '', '', '硕士', '', '', '', '', '', '随时', ''),
(5, 'php工程师', '童攀', '男', '蒙古族', '', '', '有', '北京市', '天津市', '博士', '', '13781652589', '', '', '', '随时', ''),
(6, 'php工程师', '童攀', '男', '汉族', '1990-03-06', '未婚', '有', '天津市', '北京市', '博士', '英语', '13781652457', 'tongpan@163.com', '411425199002259159', '北京朝阳区', '1周内', '这里是我的个人介绍\r\n这里是我的个人介绍\r\n这里是我的个人介绍\r\n这里是我的个人介绍这里是我的个人介绍');

-- --------------------------------------------------------

--
-- 表的结构 `cs_link`
--

CREATE TABLE IF NOT EXISTS `cs_link` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `url` varchar(60) NOT NULL,
  `des` varchar(255) NOT NULL,
  `sort` mediumint(5) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `cs_link`
--

INSERT INTO `cs_link` (`id`, `title`, `url`, `des`, `sort`) VALUES
(5, '360', 'http://www.360.cn', 'http://www.baidu.com', 1),
(7, '百度', 'http://www.baidu.com', '', 2);

-- --------------------------------------------------------

--
-- 表的结构 `cs_message`
--

CREATE TABLE IF NOT EXISTS `cs_message` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否通过审核',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1pc端发布0移动端发布',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `cs_message`
--

INSERT INTO `cs_message` (`id`, `nickname`, `telephone`, `email`, `content`, `checked`, `type`, `time`) VALUES
(14, '手机留言', '', '', '手机留言手机留言手机留言手机留言手机留言手机留言', 1, 0, 0),
(15, '手机留言2', '', '', '手机留言2手机留言2手机留言2', 1, 0, 0),
(16, '手机留言3', '', '', '手机留言3手机留言3手机留言3手机留言3', 1, 0, 0),
(17, '新增留言测试', '', '', '新增留言测试新增留言测试新增留言测试', 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cs_privilege`
--

CREATE TABLE IF NOT EXISTS `cs_privilege` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `pri_name` varchar(20) NOT NULL COMMENT '//权限名称',
  `mname` varchar(20) NOT NULL COMMENT '//模块名称',
  `cname` varchar(20) NOT NULL COMMENT '//控制器名称',
  `aname` varchar(20) NOT NULL COMMENT '//方法名称',
  `parentid` mediumint(5) NOT NULL DEFAULT '0' COMMENT '//上级权限的id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `cs_privilege`
--

INSERT INTO `cs_privilege` (`id`, `pri_name`, `mname`, `cname`, `aname`, `parentid`) VALUES
(22, '文章添加', 'Admin', 'Article', 'add', 21),
(18, '栏目管理', 'Admin', 'Cate', 'lst', 17),
(19, '栏目添加', 'Admin', 'Cate', 'add', 18),
(20, '栏目删除', 'Admin', 'Cate', 'del', 18),
(17, '常用操作', 'admin', 'cycz', 'cycz', 0),
(21, '文章管理', 'Admin', 'Article', 'lst', 17),
(23, '文章修改', 'Admin', 'Article', 'edit', 21),
(24, '友情链接管理', 'Admin', 'Link', 'lst', 17),
(25, '友情链接添加', 'Admin', 'Link', 'add', 24),
(26, '友情链接删除', 'Admin', 'Link', 'del', 24),
(27, '友情链接批量删除', 'Admin', 'Link', 'bdel', 24),
(28, '栏目批量删除', 'Admin', 'Cate', 'bdel', 18),
(29, '文章批量删除', 'Admin', 'Article', 'bdel', 21),
(30, '系统管理', 'Admin', 'Admin', 'system', 0),
(31, '系统设置', 'Admin', 'System', 'lst', 30),
(32, '管理员管理', 'Admin', 'Admin', 'lst', 30),
(33, '管理员添加', 'Admin', 'Admin', 'add', 32),
(34, '管理员删除', 'Admin', 'Admin', 'del', 32),
(35, '管理员批量删除', 'Admin', 'Admin', 'bdel', 32),
(36, '管理员修改', 'Admin', 'Admin', 'edit', 32),
(37, '链接批量更新', 'Admin', 'Link', 'sortlink', 24);

-- --------------------------------------------------------

--
-- 表的结构 `cs_reply`
--

CREATE TABLE IF NOT EXISTS `cs_reply` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `mid` mediumint(5) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `cs_reply`
--

INSERT INTO `cs_reply` (`id`, `content`, `mid`, `time`) VALUES
(19, '谢谢留言', 14, 1462526670),
(20, '测试回复', 15, 1462526716),
(18, '感谢您的支持', 14, 1462526659);

-- --------------------------------------------------------

--
-- 表的结构 `cs_role`
--

CREATE TABLE IF NOT EXISTS `cs_role` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(20) NOT NULL,
  `pri_id_list` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `cs_role`
--

INSERT INTO `cs_role` (`id`, `rolename`, `pri_id_list`) VALUES
(1, '超级管理员', '*'),
(6, '栏目管理员', '17,18,19,20'),
(7, '文章管理员', '17,21,22,23'),
(8, '友情链接管理员', '17,24,25,26,27,37'),
(9, '管理员', '17,18,19,20,21,22,23,24,25,26,27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
