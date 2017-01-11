--
-- ���ݿ�: `article`
--

-- --------------------------------------------------------

--
-- ��Ľṹ `at_admin`
--

CREATE TABLE IF NOT EXISTS `at_admin` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- ת����е����� `at_admin`
--

INSERT INTO `at_admin` (`id`, `user`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- ��Ľṹ `at_article`
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
-- ת����е����� `at_article`
--

INSERT INTO `at_article` (`id`, `title`, `author`, `pic`, `new`, `hot`, `desc`, `typeid`, `time`) VALUES
(5, '5', '5', './Public/Uploads/2016-07-04/577a2b40cee57.jpg', 1, 0, '�ഺ���ɶ������Ρ���ħ2.0�����������Ƭ-����������?����һս��������;�𺳿�����ȫ������������θ������ݣ����ų�������ħboss�ַ�������ս��ļ��ޣ���װ������������Ԫ��������ȫ���ս�ȶ����ɫϵͳ������ϣ����������޷����У�����ǧ����ս�����飬������&lt;strong&gt;ת�����ɾ��䣡�ഺ���ɶ������Ρ���ħ2.0�����������Ƭ-����������?����һս��������;�𺳿�����ȫ������������θ������ݣ����ų�������ħboss�ַ�������ս��ļ��ޣ���װ������������Ԫ��������ȫ���ս�ȶ����ɫϵͳ������ϣ����������޷����У�����ǧ����ս�����飬������ת�����ɾ��䣡�ഺ���ɶ������Ρ���ħ2.0�����������Ƭ-����������?����һս��������;�𺳿�����ȫ������������θ������ݣ����ų�������ħboss�ַ�������ս��ļ��ޣ���װ������������Ԫ��������ȫ���ս�ȶ����ɫϵͳ������ϣ����������޷����У�����ǧ����ս�����飬��&lt;/strong&gt;����ת�����ɾ��䣡', 7, '1467624256'),
(4, '6', '4', './Public/Uploads/2016-07-04/577a23e21464b.jpg', 1, 0, '666666666666666666666', 7, '1467622370'),
(6, '6', '4', './Public/Uploads/2016-07-04/577a341285ee4.jpg', 1, 0, '66666666666666666666666', 3, '1467626514'),
(7, '��ˮ��3', '��ˮ��3', './Public/Uploads/2016-07-04/577a3a13dcd40.jpg', 1, 0, '33333333333333333333333333333', 3, '1467628051'),
(8, 'ˮ��8', 'ˮ��8', './Public/Uploads/2016-07-13/5785e916c879e.jpg', 0, 0, '2222222222222222222222222222222222', 7, '1467628090'),
(19, '�Ϻ�', '�Ϻ�', './Public/Uploads/2016-07-13/57859a7cbad32.png', 1, 0, '�Ϻ����й���', 7, '1468373628'),
(20, '�Ϻ�1', '�Ϻ�1', './Public/Uploads/2016-07-13/57859aac47088.jpg', 0, 0, '3�ˡ�', 7, '1468373676'),
(22, '9090', '9090', './Public/Uploads/2016-07-13/5786159c278f8.jpg', 1, 1, '9999999999999999', 7, '1468405148');

-- --------------------------------------------------------

--
-- ��Ľṹ `at_type`
--

CREATE TABLE IF NOT EXISTS `at_type` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- ת����е����� `at_type`
--

INSERT INTO `at_type` (`id`, `typename`) VALUES
(8, 'html5'),
(3, 'jquery'),
(9, 'css3'),
(7, 'JavaScript'),
(10, 'ǰ����Ŀ'),
(11, 'php����'),
(12, '�ҵ�����'),
(13, '����');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
