--
-- ���ݿ�: `carshop`
--

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_admin`
--

CREATE TABLE IF NOT EXISTS `cs_admin` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `roleid` mediumint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=19 ;

--
-- ת����е����� `cs_admin`
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
-- ��Ľṹ `cs_article`
--

CREATE TABLE IF NOT EXISTS `cs_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `atype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:�б� 1������ 2����Ƹ',
  `rizu` mediumint(6) NOT NULL COMMENT '����۸�',
  `num` varchar(3) NOT NULL COMMENT '��Ƹ����',
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
-- ת����е����� `cs_article`
--

INSERT INTO `cs_article` (`id`, `title`, `atype`, `rizu`, `num`, `author`, `pic`, `content`, `keywords`, `des`, `rem`, `cateid`, `time`) VALUES
(1, '1', 0, 0, '', '2', './Public/Uploads/2016-04-07/570650c43db3b.jpg', '&lt;p&gt;123456778&lt;br/&gt;&lt;/p&gt;', '3', '4', 1, 75, 1461511847),
(12, '����������Ѷ1', 0, 0, '', '', '', '', '', '', 0, 69, 1461727928),
(13, '����������Ѷ2', 0, 0, '', '', '', '&lt;p&gt;����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1&lt;/p&gt;', '', '', 0, 69, 1461727944),
(7, '��������2', 1, 1000, '', '', '', '&lt;p&gt;��������2��������2��������2&lt;/p&gt;', '', '', 0, 68, 1461732611),
(8, '��������5', 0, 0, '', '', '', '', '', '', 0, 69, 1461511830),
(9, '��������6', 0, 0, '', '', './Public/Uploads/2016-05-03/5728bb5fc39d9.jpg', '&lt;p&gt;��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6��������6&lt;/p&gt;', '', '', 0, 70, 1462287199),
(10, '����չʾ1', 1, 100, '', '1', '', '&lt;p&gt;����չʾ1����չʾ1����չʾ1&lt;br/&gt;&lt;/p&gt;', '2', '3', 1, 68, 1461909821),
(11, 'UI���ʦ1', 2, 0, '21', '', '', '&lt;p&gt;1���ռ��ͷ����û���������&lt;br/&gt;2������û����鼰����������ȷ���߿�ͼ��&lt;br/&gt;3�����߿�ͼ���Ϊƽ��Ч��ͼ��&lt;br/&gt;4�����ٿ����Ͳ��ԣ�&lt;br/&gt;5���������ݷ�������ҳ������Ż���111&lt;/p&gt;', '', '', 0, 27, 1460435581),
(14, '����������Ѷ3', 0, 0, '', '', '', '&lt;p&gt;����������Ѷ1����������Ѷ1����������Ѷ1����������Ѷ1&lt;/p&gt;', '', '', 0, 69, 1461727959),
(15, '���Գ���չʾ1', 0, 0, '', '', './Public/Uploads/2016-04-27/572043b5b427e.jpg', '&lt;p&gt;���Գ���չʾ1���Գ���չʾ1���Գ���չʾ1���Գ���չʾ1&lt;/p&gt;', '', '', 0, 68, 1461732277),
(16, '���Գ���չʾ2', 1, 100, '', '', './Public/Uploads/2016-04-27/5720440116c2c.jpg', '&lt;p&gt;���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3&lt;/p&gt;', '', '', 0, 68, 1461732353),
(17, '���Գ���չʾ3', 1, 234, '', '', './Public/Uploads/2016-04-27/5720442390d32.jpg', '&lt;p&gt;���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3���Գ���չʾ3&lt;/p&gt;', '', '', 1, 68, 1461732387),
(18, '��������1', 0, 0, '', '', './Public/Uploads/2016-04-28/5720e25f1d53e.jpg', '&lt;p&gt;��������1��������1��������1&lt;/p&gt;', '', '', 0, 80, 1461772895),
(19, '��������2', 0, 0, '', '', './Public/Uploads/2016-04-28/5720e284db8d7.jpg', '&lt;p&gt;��������2��������2��������2��������2��������2��������2&lt;/p&gt;', '', '', 0, 80, 1461772932),
(20, '����3', 0, 0, '', '', './Public/Uploads/2016-04-28/5720e29cd839b.jpg', '&lt;p&gt;����3����3����3����3&lt;/p&gt;', '', '', 0, 80, 1461772956),
(21, '��Ƹ���ʦ', 2, 0, '3', '', '', '', '', '01���ռ��ͷ����û���������&lt;br&gt;\r\n02������û����鼰����������ȷ���߿�ͼ��&lt;br&gt;\r\n03�����߿�ͼ���Ϊƽ��Ч��ͼ��&lt;br&gt;\r\n04�����ٿ����Ͳ��ԣ�&lt;br&gt;\r\n05���������ݷ�������ҳ������Ż���&lt;br&gt;', 0, 85, 1461773834),
(22, 'php����ʦ', 2, 0, '10', '', '', '', '', '1���ռ��ͷ����û���������1��\r\n2������û����鼰����������ȷ���߿�ͼ2��\r\n3�����߿�ͼ���Ϊƽ��Ч��ͼ3��\r\n4�����ٿ����Ͳ���4��\r\n5���������ݷ�������ҳ������Ż�5��', 0, 85, 1461773597),
(23, '��Ƹǰ��', 2, 0, '4', '', '', '', '', '1���ռ��ͷ����û���������\r\n2������û����鼰����������ȷ���߿�ͼ��\r\n3�����߿�ͼ���Ϊƽ��Ч��ͼ��\r\n4�����ٿ����Ͳ��ԣ�\r\n5���������ݷ�������ҳ������Ż���', 0, 85, 1461773624),
(24, '����˵����������1', 0, 0, '', '', '', '&lt;p&gt;����˵����������1����˵����������1&lt;/p&gt;', '', '', 0, 91, 1462463649),
(25, '����˵����������2', 0, 0, '', '', '', '&lt;p&gt;����˵����������2����˵����������2����˵����������2&lt;/p&gt;', '', '', 0, 91, 1462463677),
(26, '����˵����������3', 0, 0, '', '', '', '&lt;p&gt;����˵����������3����˵����������3����˵����������3����˵����������3����˵����������3����˵����������3����˵����������3����˵����������3&lt;/p&gt;', '', '', 0, 91, 1462463699),
(27, '����˵����������4', 0, 0, '', '', '', '&lt;p&gt;����˵����������4����˵����������4����˵����������4����˵����������4&lt;/p&gt;', '', '', 0, 91, 1462463716),
(28, '����˵����������5', 0, 0, '', '', '', '&lt;p&gt;����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5����˵����������5&lt;/p&gt;', '', '', 0, 91, 1462463744),
(29, '����˵����������6', 0, 0, '', '', '', '&lt;p&gt;����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6����˵����������6&lt;/p&gt;', '', '', 0, 91, 1462463765),
(30, '����˵����������7', 0, 0, '', '', '', '&lt;p&gt;����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7����˵����������7&lt;/p&gt;', '', '', 0, 91, 1462463783),
(31, '����չʾ1', 0, 0, '', '', './Public/Uploads/2016-05-06/572c25f280ede.jpg', '&lt;p&gt;����չʾ1����չʾ1����չʾ1����չʾ1����չʾ1&lt;/p&gt;', '', '', 0, 93, 1462511090),
(32, '����չʾ2', 0, 0, '', '', './Public/Uploads/2016-05-06/572c260d27369.jpg', '&lt;p&gt;����չʾ2����չʾ2����չʾ2����չʾ2&lt;/p&gt;', '', '', 0, 93, 1462511117),
(33, '����չʾ3', 0, 0, '', '', './Public/Uploads/2016-05-06/572c262a12607.jpg', '&lt;p&gt;����չʾ3����չʾ3&lt;/p&gt;', '', '', 0, 93, 1462511146),
(34, '����չʾ4', 0, 0, '', '', './Public/Uploads/2016-05-06/572c2644de5d6.jpg', '&lt;p&gt;����չʾ3����չʾ3����չʾ3&lt;/p&gt;', '', '', 0, 93, 1462511172),
(35, '����չʾ5', 0, 0, '', '', './Public/Uploads/2016-05-06/572c265c62ab5.jpg', '&lt;p&gt;����չʾ5����չʾ5����չʾ5����չʾ5����չʾ5&lt;/p&gt;', '', '', 0, 93, 1462511196),
(36, '����ά�ޱ���֮�����', 0, 0, '', 'С��', './Public/Uploads/2016-11-19/582ff89448845.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;��������������ɣ������������һ����������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; 1���ɻ�е�˺���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�����������ı��������Ÿ������棬�ڽ��б�������ʱ��Ӧ�������Ե���ҵ��־���Է������˵���������ܵ��˺�������������ʱ��Ӧע��������ĵ�λ������Է����������ˡ��ڷ��������¹���ʱ��Ӧ���������뿪��ʻ�ң��Է�������ͻȻת�������˲��ݻ���������������ˡ������Ҫ�ڳ�����ҵʱ��Ӧ�������Եı�־�������������ڳ�ľ�ںá���ǧ�ﶥ֧��ʱ��ǧ�ﶥҪ����ƽ�ȡ��ݳ�ǰӦ׼���üݳ����ߣ��ݳ��ʣ�����ֹ��שͷ���������塣�ڰ�װ�ܳ�ʱ��ǧ��Ҫ������̽�ݿס����׵�����������ָ�����鷢����ʱ�������ڳ�����ҵ��&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����2����ʧ��&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�����ڱ�������ʱ��������Ҫʹ�����ϡ���ϴ������ȼ���ױ���Ʒ����ʱǧ�������������ʩ��������������Է���һ������������ظ�������Ҫ���̣���Ϊ�����ݳ��Ŀ�ȼ����������ݳ��������Ǻ����ױ���ȼ�ġ�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����3�������ˡ�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�����ո�Ϩ��ķ����������ڷ������ĸ�������ˮ�䡢�����ܵ�������ת��Һ��ͻ����ȣ��¶ȶ��Ƚϸߣ�����С�ĽӴ����Է����ˡ�����������¶ȸߣ�ǧ��Ҫȡ��ˮ��ǻ��ɿ���ˮ���أ��Է����ˡ�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����4��������������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�����ƶ�Һ����������Ĥ������ƤЬ����Ĥ���������ã����ܺܿ���ܽ���Ĥ���ƶ�Һ���۾����к��ģ���������۾���������������ˮ��ϴ�ɾ���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����5���ɲ�ע����ת�Ļ���������·�Եķ�����&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�����ڷ�������תʱ��ע���֡�����͹��߱����뿪��ת�ķ��Ⱥͷ��ȴ����������ȡ������Ľ�ָ���ֱ���������Ʒ�����Գ�ʱ����������λ״��Ӧ�ܱ�֤��ȫͣ����ת����Ч��·�Ե��������������Ե��Գ���־���Գ�ʱ����Ա���������ȫ������ר�ŵ��Գ����Ͻ��С�&amp;nbsp;&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����6���ɲ�ע�⹤������������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�����ڹرշ������ǻ������ܳɸ�ʱ��Ӧ��鹤�ߡ�Ĩ���Ͳ��µ��������Ʒ�Ƿ���������ȷ������󣬲ſ��Թرա�&lt;/span&gt;&lt;/p&gt;', '����', '����ά�ޱ���֮�����', 1, 94, 1479538836),
(37, '������ɫ ʶ��������������', 0, 0, '', '������ɫ ʶ��������������', './Public/Uploads/2016-11-19/582ffbc8d8c9c.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;����ð�̿ɴ��С���ܶ����ֳ����������ð�̵�������������޴롣��ʵ���ֹ������Ȳ�Ҫ���ţ���ϸ�۲������������ͬ�Ĺ������в�ͬ�Ľ�������������Ҫ����ʶ���������ࡣ&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����״��һ������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����������֣������ķ������������������в���������������ͬʱ�ų���ɫ���壬����ʱ�о�������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;��������ԭ���ź��̵������ڻ��������ϱȽ϶�����������ڻ��������͵������������ɵ��Կ��ƣ������ɽ�̤���ſ��ƣ�һЩ����¹����ȼ�ͽ������׺�������ȼ�վ��ų����⣬��������������ǿ����ĺ��̡�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;��������취��1.�������ĳ������������������꣬Ҫ������黯�����Ȼ������ϻ��̶ȣ�����������ͬ�ڵ���γ���Ҫ�������б����͵�У�����ɺõ��ó�ϰ�ߡ�2.���糵Ҫÿ��3��������ߣ�ÿ��1������������������Ҫ��ʱ������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����״����������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����������֣��ɼ�������ɫˮ����ð�������з�������ת��ƽ�ȣ���ʹ������Ԥ�ȴﵽ��������ˮ�����д���ˮ����ð����&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;��������ԭ�򣺵���ð���̿��������ڷ��������׵ĸ׵���ĥ�𣬲���һ����϶������ɢ��ϵͳ��ˮ��������ȼ���ҡ�ˮ�޷�ȼ�գ����Ⱥ�����ˮ������ֱ�Ӵ��������ų���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;��������취��1.��鷢�������塢���׵��Ƿ������ˣ�����������Ƿ��л�ˮ��2.�鿴����˵���飬�ϸ����ճ��ҹ涨��ӱ����ȷ�����͡�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����״����������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����������֣������������½����о����������������������������ɫ���ų����������л���ȼ���������Ľ���ζ����ͨ�������ͱ��ͬʱ���ᷢ�ֻ��͵��������������������ÿ�α����꣬����ʻ7500����󣬻��͵�������Ӧ��������Χ�ڣ�������;���䡣&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;��������ԭ�����̶������ڷ������ڲ����ϣ����»��ʹ���ȼ����ȼ�ն������ģ�������һ������������������ڱ��л��ˡ������ܷⲻ�������Ŵ�����ĥ�𣬶��������϶����ԭ�������󻬵Ļ��ʹ�ʱ��ͨ����Щ��϶����ȼ���Ҳ���ȼ�գ�ȼ�ղ��˵Ļ����ų�����ʱ�Ͳ�������ɫ��Ũ�̡�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;��������취��1.�Գ�����ϵĳ���Ҫ���������塢�����Ȳ������ܷ��ԣ������������ų�ʱ��ʱ��ά��վ�����Է�������ʧ��2.�������Ҫ���������ࡢ���ٶ�����ȡ����ʱ������ʹ�������һ�����ֻ��������쳣������ȥרҵά��վ���м�顣&lt;/span&gt;&lt;/p&gt;', '������ɫ ʶ��������������', '������ɫ ʶ��������������', 1, 94, 1479539656),
(38, '�����������������ϵ�����', 0, 0, '', '��ˮ��', './Public/Uploads/2016-11-19/582ffbfe79586.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;1����ʻ�˲��ܴ�P���γ�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����AL4�Զ�������ᷢ����ʻ���ݸ˲��ܴ�P���γ��Ĺ���������ʱ�Ҳ������������γ������ˣ�˾����ʮ���ջ𡣵�Ȼ����Ӳ���ʻ���ݸ����޼����µģ����и�����ķ����β��ݸˣ�����ӳ���������������ʹ��������װ������������ѹ����ϵͳ�Ľ���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����a���̽��ƶ��ƿ�����������߶ˣ�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����b���ô�����б�����ֹ���ο��������Ѹ�ٰγ����ݸˣ�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����c������������У�ֱ�Ӱ�����ֹ������������о�������ٸ˰ε���N������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;������Ȼ���ų���������и�ǰ�ᣬ��̤���ƶ�̤����ƶ��Ʋ�������Ч�����Ǳ���ϡ�SPT������*����������������Զ������������𻵻��Ƿ�ֹ�����̵����𻵣���ʱ���������Ϸ����γ����ٸˡ�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����2���ų�����ķ���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�������糵����ϵҲ�ᷢ�����裬�����ԭ���⣬������͹ܽ����������׷������裬������ˮ����Ĩ����ͳ��ȴ�����ų����������糵ͬ��Ҳ�ᷢ�����裬�縻��(����ͼƬ����)���糵���г�;��ͻȻϨ�𣬲�����������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;������ʱӦ�򿪵��ţ��������Σ��������ס�𿪵������������ܿڵĳ��ͣ�ֱ������ĭ�������ž���š���͹ܼ��ɣ���ͬʱ������㣬����ʱ��Ҫ����������ڰ�ɫ��ť��������װ�����ͣ���ʹ�������������ų��ռ䡣���ֹ����������佻�ӵĳ��⳵�����׷�����&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����3����ֹ�͸׵ķ���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;���������γ��ڱ����м�ʻ���׷����͸׹��ϡ�ԭ����������λ��ˮ������ǰ�·����������ˮ�״������ڣ����������������ף�����͸ף�������塣ͬʱ����������ɳ����ʱ�����ڸ����γ�������ṹ�ص㣬ɳ��Ҳ���״������ڽ����������ɶ���Ϩ��&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����Ӧ����������ɳ��������ʱ��Ӧ�������������оɳ�������ɽ�������ת�����Ҳ����Ч�������죬Ӧ���Ƴ��١�ѡ��·�棬����ˮ�ݵ������籩��־ã��ɴ���ʱ�������ܴӿ�����һ�˲��£���������а�װ������Ч�ر����͸ס������¹ʡ�&lt;/span&gt;&lt;/p&gt;', '�����������������ϵ�����', '�����������������ϵ�����', 1, 94, 1479539710),
(39, '�ų��ƶ�ʧ����ϵķ���', 0, 0, '', '�ų��ƶ�', './Public/Uploads/2016-11-19/582ffc2e3c001.jpg', '&lt;p&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;1����������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;�����ƶ�̤���г̹����ƶ����óٻ����ƶ�Ч�ܺܵ�����ɥʧ���ƶ�����������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����2������ԭ��&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����1)�ƶ���ѹ�����㡣&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����2)�ƶ�ϵͳ���п���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����3)�ƶ�̤�������г̻��ƶ�����϶�����ƶ���Ħ��Ƭ�Ӵ�������ĥ�����ػ�������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����4)�ƶ����ס��ָ׻����͸׹�ĥ������ˣ�Ƥ���ϻ���&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����3�����ϵ��ж����ų�&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����1)���������ƶ�̤�壬��̤�����������е��Ըо�������ͣһ����ٲ�̤��ʱ��Ȼ�ܵͣ���Ϊ�ƶ�ϵͳ���п�������ʱӦ���ƶ�ϵͳ��������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����2)һ���ƶ����飬�������ȼ���̤��ʱ�ƶ�Ч���ܺã�һ��Ϊ�ƶ�̤�������г̹�����ƶ���϶����Ӧ����̤�������г̣��������ƶ�����϶����Ҫʱ�����ƶ�����������&lt;/span&gt;&lt;br style=&quot;font-size: 14px; text-indent: 28px; white-space: normal; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;span style=&quot;cursor: pointer; font-size: 14px; text-indent: 28px; widows: 1; word-spacing: -1.5px; color: rgb(68, 68, 68); font-family: ����; line-height: 25px; background-color: rgb(255, 255, 255);&quot;&gt;����3)�����ƶ�̤��ʱ���������������������ƶ�Ч����������һ����Ϊ�����ƶ������ϣ����ƶ���Ƭ���ͻ�Ӵ�������Ħ��Ƭ�ϻ���ĥ���ƶ���ĥ�𲻾���Ӧ���ƶ�����״�����м�飬��Ҫʱ���е������޸���&lt;/span&gt;&lt;/p&gt;', '�ų��ƶ�ʧ����ϵķ���', '�ų��ƶ�ʧ����ϵķ���', 1, 94, 1479539758);

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_cate`
--

CREATE TABLE IF NOT EXISTS `cs_cate` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `pc` tinyint(1) NOT NULL DEFAULT '1' COMMENT '�Ƿ���pc����Ŀ',
  `class` tinyint(1) NOT NULL DEFAULT '1' COMMENT '//��Ŀ����',
  `sort` mediumint(5) DEFAULT '50',
  `pic` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `keywords` varchar(60) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `parentid` mediumint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=99 ;

--
-- ת����е����� `cs_cate`
--

INSERT INTO `cs_cate` (`id`, `name`, `type`, `pc`, `class`, `sort`, `pic`, `content`, `keywords`, `des`, `parentid`) VALUES
(67, '��������', 2, 1, 1, 1, NULL, '&lt;p&gt;�������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ������ǹ�������&lt;/p&gt;&lt;p&gt;&lt;img alt=&quot;3235ac20f8f58f91831c93c0580e7a3a.jpg&quot; src=&quot;/ueditor/php/upload/image/20160428/1461858352351741.jpg&quot; title=&quot;1461858352351741.jpg&quot;/&gt;&lt;/p&gt;', '', '', 0),
(68, '����չʾ', 5, 1, 1, 2, NULL, '', '', '', 0),
(69, '������Ѷ', 1, 1, 1, 3, NULL, '', '', '', 0),
(70, '��Ҫ����', 5, 1, 1, 4, NULL, '', '', '', 0),
(71, '���ų���', 5, 1, 2, 50, NULL, '', '', '', 68),
(72, '��������', 5, 1, 2, 50, NULL, '', '', '', 68),
(73, 'С����', 5, 1, 2, 50, NULL, '', '', '', 68),
(74, '���ճ���', 5, 1, 2, 50, NULL, '', '', '', 68),
(75, '����', 5, 1, 3, 50, NULL, '', '', '', 71),
(76, '���ٰ�', 5, 1, 3, 50, NULL, '', '', '', 71),
(77, '����', 5, 1, 3, 50, NULL, '', '', '', 72),
(78, '����', 5, 1, 3, 50, NULL, '', '', '', 72),
(79, '��������', 1, 1, 2, 50, NULL, '', '', '', 69),
(80, '��������', 6, 1, 1, 5, NULL, '', '', '', 0),
(81, '��������2', 1, 1, 2, 50, NULL, '', '', '', 69),
(82, '��������1', 1, 1, 3, 50, NULL, '', '', '', 79),
(83, '��������2', 1, 1, 3, 50, NULL, '', '', '', 79),
(84, '�⳵��֪', 2, 1, 1, 6, NULL, '&lt;p&gt;�⳵��֪�⳵��֪�⳵��֪�⳵��֪�⳵��֪�⳵��֪&lt;/p&gt;', '', '', 0),
(85, '�˲���Ƹ', 4, 1, 1, 7, NULL, '', '', '', 0),
(86, '��������', 3, 1, 1, 8, NULL, '', '', '', 0),
(87, '��ϵ����', 2, 1, 1, 9, NULL, '&lt;p&gt;&lt;img src=&quot;http://api.map.baidu.com/staticimage?center=116.450111,39.927669&amp;zoom=13&amp;width=530&amp;height=340&amp;markers=116.450111,39.927669&quot; height=&quot;340&quot; width=&quot;530&quot;/&gt;&lt;/p&gt;', '', '', 0),
(88, '��˾���', 2, 0, 1, 10, NULL, '&lt;p&gt;�������ǹ������ǹ�������&lt;/p&gt;', '', '', 0),
(89, '����⳵', 2, 0, 1, 11, NULL, '&lt;p&gt;����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵����⳵&lt;/p&gt;', '', '', 0),
(90, '��λ���', 2, 0, 1, 12, NULL, '&lt;p&gt;��λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ�����λ���&lt;/p&gt;', '', '', 0),
(91, '����˵��', 1, 0, 1, 13, NULL, '', '', '', 0),
(92, '�Żݻ', 5, 0, 1, 14, NULL, '', '', '', 0),
(93, 'չʾ����', 5, 0, 1, 15, NULL, '', '', '', 0),
(94, '��������', 1, 0, 1, 16, NULL, '', '', '', 0),
(95, '��ϵ��ʽ', 2, 0, 1, 17, NULL, '&lt;p&gt;��ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ������ϵ����&lt;/p&gt;', '', '', 0),
(96, '��Ƹ�˲�', 2, 0, 1, 18, NULL, '&lt;p&gt;��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ��Ƹ&lt;/p&gt;', '', '', 0),
(97, '�ͻ�����', 3, 0, 1, 19, NULL, '                                                                    ', '', '', 0);

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_job`
--

CREATE TABLE IF NOT EXISTS `cs_job` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL DEFAULT '��',
  `nation` varchar(30) NOT NULL COMMENT '����',
  `age` varchar(15) NOT NULL COMMENT '����',
  `marry` varchar(10) NOT NULL DEFAULT 'δ��',
  `child` varchar(10) NOT NULL DEFAULT '��' COMMENT '������Ů',
  `bplace` varchar(20) NOT NULL COMMENT '����',
  `address` varchar(100) NOT NULL COMMENT '�������ڵ�',
  `education` varchar(20) NOT NULL COMMENT 'ѧ��',
  `foreign` varchar(150) NOT NULL COMMENT '�������ּ��̶�',
  `mobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idnums` varchar(30) NOT NULL COMMENT '���֤��',
  `address_now` varchar(255) NOT NULL COMMENT 'סַ',
  `slim` varchar(20) NOT NULL COMMENT '�ɵ�ְ����',
  `content` text NOT NULL COMMENT '��ע',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

--
-- ת����е����� `cs_job`
--

INSERT INTO `cs_job` (`id`, `title`, `name`, `sex`, `nation`, `age`, `marry`, `child`, `bplace`, `address`, `education`, `foreign`, `mobile`, `email`, `idnums`, `address_now`, `slim`, `content`) VALUES
(1, '��Ƹǰ��', '�й�', '��', '�ɹ���', '', 'δ��', '', '', '', '˶ʿ', '', '', '', '', '', '��ʱ', ''),
(5, 'php����ʦ', 'ͯ��', '��', '�ɹ���', '', '', '��', '������', '�����', '��ʿ', '', '13781652589', '', '', '', '��ʱ', ''),
(6, 'php����ʦ', 'ͯ��', '��', '����', '1990-03-06', 'δ��', '��', '�����', '������', '��ʿ', 'Ӣ��', '13781652457', 'tongpan@163.com', '411425199002259159', '����������', '1����', '�������ҵĸ��˽���\r\n�������ҵĸ��˽���\r\n�������ҵĸ��˽���\r\n�������ҵĸ��˽����������ҵĸ��˽���');

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_link`
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
-- ת����е����� `cs_link`
--

INSERT INTO `cs_link` (`id`, `title`, `url`, `des`, `sort`) VALUES
(5, '360', 'http://www.360.cn', 'http://www.baidu.com', 1),
(7, '�ٶ�', 'http://www.baidu.com', '', 2);

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_message`
--

CREATE TABLE IF NOT EXISTS `cs_message` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0' COMMENT '�Ƿ�ͨ�����',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1pc�˷���0�ƶ��˷���',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

--
-- ת����е����� `cs_message`
--

INSERT INTO `cs_message` (`id`, `nickname`, `telephone`, `email`, `content`, `checked`, `type`, `time`) VALUES
(14, '�ֻ�����', '', '', '�ֻ������ֻ������ֻ������ֻ������ֻ������ֻ�����', 1, 0, 0),
(15, '�ֻ�����2', '', '', '�ֻ�����2�ֻ�����2�ֻ�����2', 1, 0, 0),
(16, '�ֻ�����3', '', '', '�ֻ�����3�ֻ�����3�ֻ�����3�ֻ�����3', 1, 0, 0),
(17, '�������Բ���', '', '', '�������Բ����������Բ����������Բ���', 1, 0, 0);

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_privilege`
--

CREATE TABLE IF NOT EXISTS `cs_privilege` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `pri_name` varchar(20) NOT NULL COMMENT '//Ȩ������',
  `mname` varchar(20) NOT NULL COMMENT '//ģ������',
  `cname` varchar(20) NOT NULL COMMENT '//����������',
  `aname` varchar(20) NOT NULL COMMENT '//��������',
  `parentid` mediumint(5) NOT NULL DEFAULT '0' COMMENT '//�ϼ�Ȩ�޵�id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=38 ;

--
-- ת����е����� `cs_privilege`
--

INSERT INTO `cs_privilege` (`id`, `pri_name`, `mname`, `cname`, `aname`, `parentid`) VALUES
(22, '�������', 'Admin', 'Article', 'add', 21),
(18, '��Ŀ����', 'Admin', 'Cate', 'lst', 17),
(19, '��Ŀ���', 'Admin', 'Cate', 'add', 18),
(20, '��Ŀɾ��', 'Admin', 'Cate', 'del', 18),
(17, '���ò���', 'admin', 'cycz', 'cycz', 0),
(21, '���¹���', 'Admin', 'Article', 'lst', 17),
(23, '�����޸�', 'Admin', 'Article', 'edit', 21),
(24, '�������ӹ���', 'Admin', 'Link', 'lst', 17),
(25, '�����������', 'Admin', 'Link', 'add', 24),
(26, '��������ɾ��', 'Admin', 'Link', 'del', 24),
(27, '������������ɾ��', 'Admin', 'Link', 'bdel', 24),
(28, '��Ŀ����ɾ��', 'Admin', 'Cate', 'bdel', 18),
(29, '��������ɾ��', 'Admin', 'Article', 'bdel', 21),
(30, 'ϵͳ����', 'Admin', 'Admin', 'system', 0),
(31, 'ϵͳ����', 'Admin', 'System', 'lst', 30),
(32, '����Ա����', 'Admin', 'Admin', 'lst', 30),
(33, '����Ա���', 'Admin', 'Admin', 'add', 32),
(34, '����Աɾ��', 'Admin', 'Admin', 'del', 32),
(35, '����Ա����ɾ��', 'Admin', 'Admin', 'bdel', 32),
(36, '����Ա�޸�', 'Admin', 'Admin', 'edit', 32),
(37, '������������', 'Admin', 'Link', 'sortlink', 24);

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_reply`
--

CREATE TABLE IF NOT EXISTS `cs_reply` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `mid` mediumint(5) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=21 ;

--
-- ת����е����� `cs_reply`
--

INSERT INTO `cs_reply` (`id`, `content`, `mid`, `time`) VALUES
(19, 'лл����', 14, 1462526670),
(20, '���Իظ�', 15, 1462526716),
(18, '��л����֧��', 14, 1462526659);

-- --------------------------------------------------------

--
-- ��Ľṹ `cs_role`
--

CREATE TABLE IF NOT EXISTS `cs_role` (
  `id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(20) NOT NULL,
  `pri_id_list` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=10 ;

--
-- ת����е����� `cs_role`
--

INSERT INTO `cs_role` (`id`, `rolename`, `pri_id_list`) VALUES
(1, '��������Ա', '*'),
(6, '��Ŀ����Ա', '17,18,19,20'),
(7, '���¹���Ա', '17,21,22,23'),
(8, '�������ӹ���Ա', '17,24,25,26,27,37'),
(9, '����Ա', '17,18,19,20,21,22,23,24,25,26,27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
