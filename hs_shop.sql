/*
Navicat MySQL Data Transfer

Source Server         : locahost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : hs_shop

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2016-05-30 10:36:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hs_admin_user
-- ----------------------------
DROP TABLE IF EXISTS `hs_admin_user`;
CREATE TABLE `hs_admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) DEFAULT NULL,
  `pwd` char(32) NOT NULL,
  `tel` char(11) NOT NULL,
  `permission` tinyint(4) NOT NULL DEFAULT '2',
  `pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_admin_user
-- ----------------------------
INSERT INTO `hs_admin_user` VALUES ('1', 'admin', 'admin', '18962180537', '1', '/Public/Uploads/2016-05-17/573b0c5ab6562.jpg');
INSERT INTO `hs_admin_user` VALUES ('30', 'tree', '123456', '18962180537', '2', '/Public/Uploads/2016-05-20/573eca590d008.jpg');
INSERT INTO `hs_admin_user` VALUES ('31', 'users', '123456', '18962180537', '2', '/Public/Uploads/2016-05-20/573ef1e3c696a.jpg');
INSERT INTO `hs_admin_user` VALUES ('32', 'yichuan', '123456', '18962180537', '2', '/Public/Uploads/2016-05-23/57425c6318e0e.gif');
INSERT INTO `hs_admin_user` VALUES ('34', 'liwenhui', '123456', '1896218053', '2', '/Public/Uploads/2016-05-23/57425d0a7a6e5.jpg');
INSERT INTO `hs_admin_user` VALUES ('35', 'test', '123456', '18962180537', '2', '/Public/Uploads/2016-05-23/5742805622fb6.jpg');
INSERT INTO `hs_admin_user` VALUES ('38', 'test2', '123456', '18962180537', '2', '/Public/Uploads/2016-05-24/5743e78536213.jpg');
INSERT INTO `hs_admin_user` VALUES ('39', 'test3', '123456', '18962180537', '2', '/Public/Uploads/2016-05-24/5743e7ab61a1b.jpg');
INSERT INTO `hs_admin_user` VALUES ('40', 'tests', '123456', '18962180537', '2', '/Public/Uploads/2016-05-25/574532abd2449.jpg');

-- ----------------------------
-- Table structure for hs_category
-- ----------------------------
DROP TABLE IF EXISTS `hs_category`;
CREATE TABLE `hs_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '0,',
  `display` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cname` (`cname`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_category
-- ----------------------------
INSERT INTO `hs_category` VALUES ('1', '中国', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('2', '欧美1', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('3', '荷兰', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('4', '韩版', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('5', '罗马', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('6', '地中海', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('7', '米兰', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('8', '公主部落', '4', '0,4,', '1');
INSERT INTO `hs_category` VALUES ('9', 'GCU1', '0', '0,1,', '1');
INSERT INTO `hs_category` VALUES ('10', '美帘', '4', '0,4,', '1');
INSERT INTO `hs_category` VALUES ('11', '千禧', '4', '0,4,', '1');
INSERT INTO `hs_category` VALUES ('13', '风信子', '3', '0,3,', '1');
INSERT INTO `hs_category` VALUES ('14', '金喜善', '4', '0,4,', '1');
INSERT INTO `hs_category` VALUES ('15', '罗马假日', '5', '0,5,', '1');
INSERT INTO `hs_category` VALUES ('16', '公主嫁到', '5', '0,5,', '1');
INSERT INTO `hs_category` VALUES ('17', '地久天长', '5', '0,5,', '1');
INSERT INTO `hs_category` VALUES ('18', '热情似火', '6', '0,6,', '1');
INSERT INTO `hs_category` VALUES ('19', '海阔天空', '6', '0,6,', '1');
INSERT INTO `hs_category` VALUES ('20', '我心永恒', '6', '0,6,', '1');
INSERT INTO `hs_category` VALUES ('21', '米兰帝国', '7', '0,7,', '1');
INSERT INTO `hs_category` VALUES ('22', '浪漫假日', '7', '0,7,', '1');
INSERT INTO `hs_category` VALUES ('23', '岁月无痕', '7', '0,7,', '1');
INSERT INTO `hs_category` VALUES ('24', '浪漫满屋', '0', '0,2,', '1');
INSERT INTO `hs_category` VALUES ('25', '女儿国', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('26', '百万新娘', '1', '0,1,', '1');
INSERT INTO `hs_category` VALUES ('28', '海底世界', '0', '0,', '1');
INSERT INTO `hs_category` VALUES ('29', '巴黎', '0', '0,', '1');

-- ----------------------------
-- Table structure for hs_fashion
-- ----------------------------
DROP TABLE IF EXISTS `hs_fashion`;
CREATE TABLE `hs_fashion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `fpic` varchar(255) DEFAULT NULL,
  `fmsg` text,
  `ftime` datetime DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `authorintro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_fashion
-- ----------------------------
INSERT INTO `hs_fashion` VALUES ('22', '如何才能拍出好看唯美的婚纱照', '/Public/Uploads/2016-05-27/5747f300a173e.jpeg', '<p class=\"font:16px/25px \"><span style=\"color: rgb(227, 108, 9);\">&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color: rgb(227, 108, 9); font-size: 20px;\">&nbsp; <strong>结婚一辈子就\r\n一次</strong>，</span></span><span style=\"font-size: 20px;\">婚纱照是纪念这段完美的婚姻的最好证据，同时它还记录了新娘一生中最美丽的时刻，所以，所有的新娘都会在意拍摄出来的婚纱照到底美不美。有些新娘认\r\n为自己不够漂亮，所以很担心拍出的婚纱照会不好看。怎么拍婚纱照好看呢？小编这里有秘诀，绝对能让你做世界上最美丽的新娘，一起来学一下吧！</span><span style=\"color: rgb(227, 108, 9); font-size: 20px;\"><img src=\"http://img.baidu.com/hi/jx2/j_0061.gif\"/></span></p><p style=\"text-align: center;\" class=\"font:16px/25px \"><span style=\"color: rgb(227, 108, 9);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <img alt=\"u=4141508977,3569065057&amp;fm=21&amp;gp=0.jpg\" src=\"/Public/Uploads/image/20160527/1464337303624778.jpg\" title=\"1464337303624778.jpg\"/>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"u=2857352120,2433135281&amp;fm=21&amp;gp=0.jpg\" src=\"/Public/Uploads/image/20160527/1464337317122885.jpg\" title=\"1464337317122885.jpg\"/></span></p><p class=\"font:16px/25px \"><span style=\"color: rgb(227, 108, 9);\">&nbsp;&nbsp;&nbsp;</span>&nbsp; <span style=\"font-size: 20px;\">婚\r\n纱照大部分都是近距离拍摄，所以在化妆的时候，新娘不要用太多的睫毛液和眼线液，否则拍摄出来化妆的迹象会很明显，还会使新娘的眼睛变得特别小。同时新娘\r\n的腮红也不要打得太厚，看起来会不自然。但是如果唇彩很有光泽感，那么整个脸部都会很亮眼。如果新娘脸部有的地方肉比较多的话，那个部位就不要扑太亮的粉\r\n了，直接打成暗影形式，然后在眼睛和鼻子部位用亮光，这样比较能遮盖过多的肉肉。</span></p><p style=\"text-align: center;\" class=\"font:16px/25px \"><span style=\"color: rgb(227, 108, 9);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img alt=\"u=3476210882,3199639582&amp;fm=21&amp;gp=0.jpg\" src=\"/Public/Uploads/image/20160527/1464337331455233.jpg\" title=\"1464337331455233.jpg\"/></span></p><p><span style=\"color: rgb(227, 108, 9);\">&nbsp;<span style=\"color: rgb(227, 108, 9); font-size: 20px;\">&nbsp;&nbsp; </span></span><span style=\"font-size: 20px;\">想\r\n要自己的下巴变尖一点吗？很简单，用现在最流行的非主流拍摄方式就行了，将脸部微微上扬，然后摄像机从上往下拍摄，这样漂亮的瓜子脸就出来了！想要让自己\r\n的脸变小吗？有一种陷害式的方法效果很不错哦！那就是在拍摄的时候，尽量让自己的脸放在同伴的后面，近大远小就是这个意思。虽然对同伴有点不人道，但是效\r\n果这的很不错。 &nbsp;&nbsp; <br/></span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 很多人在拍照的时候，如果手上没有道具，就不知道手该往哪里放，有的就直接抓着自己的衣服或者抱着手臂，新娘子你千万不能这样哦！否者拍出来就不像婚纱照\r\n了。如果实在不知道该怎么办的话，直接把手自然下垂就好了，那样你的纤纤手臂拍出来也许会更好看新娘的婚纱一般都是露肩的，所以拍摄婚纱照的时候，新娘的\r\n脸部和肩部是一个重点，拍摄的好的话，即使别的地方有瑕疵，也不会令人发现。新娘在选礼服的时候，最好选择能露出性感锁骨的婚纱，这样能将视觉点放入新娘\r\n的肩部和脸部。而且露出锁骨的婚纱一般都能使新娘的脸部线条变得柔和 ~&nbsp;</span>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <br/></p>', '2016-05-28 14:39:20', '一只飞行的的猫', '风吹沙 蝶恋花  千古佳话  似水中月  情迷着镜中花  竹篱笆 木琵琶  拱桥月下  谁在弹唱  思念远方牵挂  那年仲夏  你背上行囊离开家  古道旁 我欲语泪先下  庙里求签  我哭诉青梅等竹马  求 菩萨保佑我俩 ');
INSERT INTO `hs_fashion` VALUES ('23', '几月份拍婚纱照最合适', '/Public/Uploads/2016-05-27/574809cf8d2e5.jpg', '<p><span style=\"color: rgb(217, 150, 148);\">&nbsp; </span>&nbsp; <span style=\"font-size: 20px;\">&nbsp; 婚纱摄影一直都很受新人们的喜爱，都想用这次的拍摄来纪念我们那甜蜜美妙的爱情，但是婚纱照的拍摄有很多地方都是需要注意的，第一个就是季节的选择，这可是关系这婚纱照的唯美程度。那几月份适合拍婚纱照呢？下面是爱漫莎婚纱摄影分析的婚纱照拍摄的月份，一起来看。</span></p><p style=\"text-align: center;\"><img style=\"margin: 0px auto; float: none; width: 602px; height: 366px;\" src=\"/ueditor/php/upload/image/20160527/1464338357131681.jpg\" data-is-check=\"1\" class=\"pic-cursor-pointer\" height=\"366\" width=\"602\"/></p><p><span style=\"color: rgb(217, 150, 148); font-size: 20px;\">&nbsp;</span><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 11月-2月，因为是冬季，各种气候优势使得大海看上去美丽动人，但是想去拍摄照片的你，可千万不要选择前往，因为那简直是太冷了!</span></p><p><span style=\"color: rgb(217, 150, 148); font-size: 20px;\"><br/></span></p><p><span style=\"color: rgb(217, 150, 148); font-size: 20px;\">&nbsp;&nbsp;&nbsp; </span><span style=\"font-size: 20px;\">9、10月份秋高气爽，空气的透明度较高，清澈的海面上会映衬出天空的湛蓝，这种较为深一些的海面颜色，加上秋季时海浪翻腾，拍打着礁石。人物会被这种大海独特的颜色衬托得深邃悠远，使得照片更富有情感内涵。</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 7、\r\n8月份由于是雨季来临，海上空气湿度较大，小水珠颗粒大量在海面上附着，所以大海反射出的颜色就较为灰暗，这个时间拍摄效果大家可想而知。照片在氛围上会\r\n有些沉闷。再加上7、8月份是海边的旅游高峰期，新人们一定不想看见你的照片里面留下除了你和爱人的另外一个身影!所以夏季的海边一般不作为拍摄婚纱的大\r\n力推荐。</span></p><p><span style=\"font-size: 20px;\">&nbsp; <br/></span></p><p><span style=\"font-size: 20px;\">&nbsp; 3、4、5、6月份天空纯蓝，大海的颜色就是浅蓝的，海面是一道水平线，没有大的海浪波澜。拍摄出来的照片海水清澈。照片效果是白纱衬着天蓝，静静的，给人以春意盎然的清新感</span></p><p><br/></p>', '2016-05-28 14:40:11', '一只潜水的猫', '说来实在嘲讽，我不太懂，偏渴望你懂。是否幸福轻得太沉重，过度使用不痒不痛。得不到的永远在骚动，被偏爱的都有恃无恐。——《红玫瑰》');
INSERT INTO `hs_fashion` VALUES ('24', '[其他]旅游小知识旅游需要注意什么???', '/Public/Uploads/2016-05-27/57480ee1472ae.jpg', '<p><br/></p><p><span style=\"font-size: 20px;\"><strong>1</strong></span><img src=\"http://img.baidu.com/hi/youa/y_0034.gif\" style=\"width:300px;height:200px;float:left;\" border=\"0\" height=\"200\" hspace=\"0\" vspace=\"0\" width=\"300\"/><span style=\"font-size: 20px;\"><strong>、<span style=\"font-size: 20px; color: rgb(23, 54, 93);\">吃</span></strong><br/><br/>外出旅游不能错过品尝当地的特色食品。出产地自然是味道正宗价格便宜，但千万不要在旅游点购买，到所住地街道店铺去买才不会被宰。但一定要注意饮食饮水卫生，切忌暴饮暴食<br/><br/><strong>2、<span style=\"font-size: 20px; color: rgb(23, 54, 93);\">住</span></strong><br/><br/>在旅游活动期间，要保证充足的睡眠。如有条件，在出游前可与信誉较好的旅行社联系，进行咨询并委托代订房间。<br/><br/><strong>3、<span style=\"font-size: 20px; color: rgb(23, 54, 93);\">行</span></strong><br/><br/>行前准备充足。如果时间宽裕，坐火车硬卧最适宜，既比飞机便宜很多，又节省住宿费用，增添旅途内容</span></p><p><br/></p><p><span style=\"font-size: 20px;\"><strong>4、<span style=\"font-size: 20px; color: rgb(23, 54, 93);\">旅游<strong>旅游百科知识大全</strong>四宝</span></strong><br/><br/>扇子、雨伞、眼镜、太阳帽。<br/><br/><strong>5、入乡随俗</strong><br/><br/>中国是一个多民族的国家，许多少数民族有不同的宗教信仰和习俗忌讳。在进入少数民族聚居区旅游<strong>旅游安全注意事项</strong>时，要尊重他们的传统习俗和生活中的禁忌，切不可忽视礼俗或由于行动上的不慎而伤害他们的民族自尊心。<br/><br/><strong>6、<span style=\"font-size: 20px; color: rgb(23, 54, 93);\">切忌惹是生非</span></strong><br/><br/>旅行的地点始终不是自己地头，蛮劲、霸气还是收敛点好。<br/><span style=\"font-size: 20px; color: rgb(23, 54, 93);\"></span><br/><strong>7、<span style=\"font-size: 20px; color: rgb(23, 54, 93);\">相互帮助</span></strong><br/><br/>在自由活动时间时，老人不要单独行动，最好三人以上同行，可以互相照顾。<br/><br/><strong>8、<span style=\"font-size: 20px; color: rgb(23, 54, 93);\">安全</span></strong><br/><br/>漂流时不要携带现金和贵重物品上船。</span></p><p><img src=\"http://img.baidu.com/hi/jx2/j_0033.gif\"/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>', '2016-05-28 12:43:09', '一只奔跑的猫', '曾爱惜的总要放手，难接手的又来等候。如我爱你你爱的他都要走，同样犯不着哀求。——《我什么都没有》');
INSERT INTO `hs_fashion` VALUES ('25', '《杜拉拉》戚薇黑纱婚惊艳荧屏 引黑白时尚热议', '/Public/Uploads/2016-05-28/5749238f044fa.jpg', '<p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 搜狐娱乐讯\r\n由戚薇、王耀庆领衔主演的“杜拉拉”系列终结之作《我是杜拉拉》正在江苏卫视幸福剧场热播，这版杜拉拉除了展现职场生存法则之外，更贴近生活版“白骨精”\r\n的日常。王耀庆饰演的王伟荧屏展现“爱妻伎俩”，为杜拉拉置办了一套纯黑色婚纱。这款黑色婚纱也惊艳荧屏，“戚薇穿黑婚纱”话题在新媒体吸引了超过4万人\r\n的讨论量，引发网友对“黑色婚纱”的时尚追溯。</span></p><p><span style=\"font-size: 20px;\">　　<strong>戚薇版杜拉拉戏里遭遇90后劲敌，新娘伴娘上演“婚纱大战”</strong></span></p><p><span style=\"font-size: 20px;\">　　戚薇饰演的杜拉拉首度遭遇职场情场的双重冲击，王汀饰演的凯西，就是这场事业婚姻双重保卫战的“核心干扰”，不仅职场与杜拉拉对立，在家庭中拿下了杜\r\n拉拉婆婆的心。凯西不仅在职场花样百出，在生活中也是打入了“辣味夫妇”的内部，与王伟青梅竹马，又以干妹妹、干女儿的身份深得王伟母亲陆爱华的喜爱，成\r\n为杜拉拉的“婚礼伴娘”。杜拉拉的婚礼大事被抠门爱算计的婆婆和对王伟存有幻想的干妹妹凯西承包，连试婚纱都被凯西代替。身为伴娘的凯西公然穿着洁白纱裙\r\n亮相杜拉拉的婚礼，反客为主、抢尽风头。新娘与伴娘从职场到情场的大战至此也掀起了高潮，“婚纱大战”令观众瞩目：“伴娘连婚纱都试，看杜拉拉如何反转这\r\n一局了！”</span></p><p><span style=\"font-size: 20px;\">　　<strong>戚薇穿黑婚纱惊艳荧屏，黑婚纱PK白婚纱尽显角色性格</strong></span></p><p><span style=\"font-size: 20px;\">　　《我是杜拉拉》中“辣味夫妇”的日常也引发了网友的关注，特别杜拉拉的婚礼掀起了热议。面对被伴娘抢了风头的妻子，王伟为杜拉拉置办了一套纯黑色婚\r\n纱，使得娇妻成为众人瞩目的焦点，并深情告白“因为你是特别的”。“因为你是特别的”哥特式婚纱重磅来袭，幸福指数爆表！皮肤白皙、五官立体的戚薇身着与\r\n众不同的黑婚纱瞬间化身高贵黑天鹅，曝光的系列婚纱剧照美到令人窒息。黑色婚纱PK白色婚纱，网友站在了戚薇一边，“与其说杜拉拉做什么事情都坚持不懈不\r\n如说他在坚持的时候还多了份幸运，不管是事业还是家庭，事情到最后总是会有转机，就像这件黑婚纱，让她成为全场的焦点，而那件伴娘礼服也就不算什么了。”</span></p><p><span style=\"font-size: 20px;\">　　<strong>《我是杜拉拉》引发网友“追黑”时尚，网友普及黑婚纱习俗</strong></span></p><p><span style=\"font-size: 20px;\">　　经常自称自己为“网红”的戚薇，穿起黑婚纱来妩媚惊艳，成功引领新的时尚潮流。自《我是杜拉拉》中荧屏黑色婚纱的登场，这独树一帜的婚纱也引发了网友\r\n热议：“看明星的结婚照都美腻美腻的！咱们“七哥”却不走寻常路，戚薇穿黑婚纱亮相荧屏，亮瞎宝宝的眼睛了！是不是电视的打开方式不对？不过戚薇还是\r\nhold住了这场面”！网友也扒出黑色婚纱的深刻寓意“黑色，给人沉稳、幽邃、神秘的感觉，而在时装界，黑色代表稳定、庄重的样式。黑色婚纱散发着迷人的\r\n高品位贵族气息，极具现代感。这样的婚纱照放在哪里都会个性十足！”、“虽然中国人结婚黑色婚纱比较罕见，但在西班牙，黑色婚纱代表忠诚，意味着新娘对新\r\n郎的爱将至死不渝”……看来，戚薇此次引领了黑婚纱潮流，“辣味夫妇”的恩爱日常又增色不少呢！</span></p><p><br/></p>', '2016-05-28 12:50:22', '一只爬行的猫', '戚薇，1984年10月26日出生于四川省成都市武侯区，中国内地女演员、歌手，毕业于浙江传媒学院录音艺术专业。2006年因参加选秀节目《我型我秀》而正式出道，同年与袁成杰组成“男才女貌”组合，并凭借歌曲《外滩十八号》在歌坛获得关注。2010年因参演古装剧《美人心计》而被观众所认识。2011年主演都市情感剧《夏家三千金》；同年签约海蝶音乐，并发行首张个人EP《如果爱忘了》。2012年在都市剧《世界上另一个我》中饰演摇滚女歌手纪南娜。2014年9月8日，与韩国演员李承铉结婚。');
INSERT INTO `hs_fashion` VALUES ('26', ' 黄晓明Baby结婚纪念日虐狗：白驹过隙 匆匆一年', '/Public/Uploads/2016-05-28/574929e0ac688.jpg', '<p>\r\n				</p><p><span style=\"font-size: 20px;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp; 核心提示：</strong>2015年5月27日，黄晓明和Angelababy在青岛领证完婚。时隔一年，这对模范夫妻迎来了第一个结婚纪念日。				</span></p><p>\r\n			</p><p><span style=\"font-size: 20px;\">\r\n						\r\n						\r\n	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;			</span></p><p style=\"text-align:center\">&nbsp; <br/></p><p style=\"text-align:center\" class=\"pictext\"><span style=\"font-size: 20px;\">　　Baby微博截图</span></p><p style=\"text-align:center\"><img data-bd-imgshare-binded=\"1\" style=\"cursor: pointer;\" alt=\"Baby与黄晓明（资料图）\" src=\"/ueditor/php/upload/image/20160528/1464412405100578.jpg\"/></p><p style=\"text-align:center\" class=\"pictext\"><span style=\"font-size: 20px;\">　　Baby与黄晓明（资料图）</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 2015年5月27日，黄晓明和Angelababy在青岛领证完婚。时隔一年，这对模范夫妻迎来了第一个结婚纪念日。</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5月27日凌晨，Baby工作室通过官方微博晒出两张照片，并写道：“白驹过隙，匆匆一年@黄晓明@angelababy。”照片中穿着粉色短裙的Baby搂着黄晓明的肩膀前行，另外一张Baby一手提裙角一手与黄晓明牵手。</span></p><p><span style=\"font-size: 20px;\">网友纷纷表示：“深夜虐狗”“我们来干了这碗狗粮”“亲爱的姑娘，祝你一生一世都辛福，永永远远走下去。”“没想到你是这样的工作室！大半夜的。”</span></p><p><span style=\"font-size: 20px;\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;			</span></p><p><br/></p>', '2016-05-28 13:17:20', '一只蹬车的猫', '杨颖（Angelababy），1989年2月28日出生于上海，中国影视女演员。2003年以模特身份出道。2007年将演艺事业的重心转向大银幕。2009年主演爱情电影《全城热恋》。2011年在电影《夏日乐悠悠》中首次担任女主角。2012年凭借爱情电影《第一次》获得第十三届华语电影传媒大奖“最受瞩目女演员奖”。2013年1月，《南都娱乐周刊》举办新生代四小花旦的评选活动，杨颖以70分的综合得分当选为新“四小花旦”之一；同年主演电视剧处女作《大汉情缘之云中歌》');
INSERT INTO `hs_fashion` VALUES ('27', '一路走来----姚笛简介', '/Public/Uploads/2016-05-28/57492c987f316.jpg', '<p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp; 2007年，姚笛参加“红楼梦中人”的选秀，同年6月姚笛和</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/840033.htm\"><span style=\"font-size: 20px;\">李旭丹</span></a><span style=\"font-size: 20px;\">分获</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/466466.htm\"><span style=\"font-size: 20px;\">宝钗</span></a><span style=\"font-size: 20px;\">组和</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/subview/343362/12958459.htm\"><span style=\"font-size: 20px;\">黛玉</span></a><span style=\"font-size: 20px;\">组的第一名，被定为</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/20461.htm\"><span style=\"font-size: 20px;\">薛宝钗</span></a><span style=\"font-size: 20px;\">和</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/10418.htm\"><span style=\"font-size: 20px;\">林黛玉</span></a><span style=\"font-size: 20px;\">的扮演者。”</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp; 2008年初，剧组对外宣布，姚笛最终成为新版《红楼梦》中</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/136682.htm\"><span style=\"font-size: 20px;\">王熙凤</span></a><span style=\"font-size: 20px;\">的扮演者。<sup>[1]</sup></span><a name=\"ref_[1]_733886\"></a><span style=\"font-size: 20px;\"> &nbsp; &nbsp;&nbsp;&nbsp; 2008年，拍摄</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/7465.htm\"><span style=\"font-size: 20px;\">陆川</span></a><span style=\"font-size: 20px;\">导演的电影《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/7074544.htm\"><span style=\"font-size: 20px;\">南京！南京！</span></a><span style=\"font-size: 20px;\">》。<sup>[11]</sup></span><a name=\"ref_[11]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp; 2010年，出演的电影《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/3863884.htm\"><span style=\"font-size: 20px;\">午夜心跳</span></a><span style=\"font-size: 20px;\">》，总票房累计2800万，在当年贺岁</span></p><p><span style=\"font-size: 20px;\">档上线的惊悚片中排名第三。<sup>[12]</sup></span><a name=\"ref_[12]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;与</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/2885.htm\"><span style=\"font-size: 20px;\">林志颖</span></a><span style=\"font-size: 20px;\">合作拍摄电影《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/3944495.htm\"><span style=\"font-size: 20px;\">变身男女</span></a><span style=\"font-size: 20px;\">》，影片于2012年初上映。<sup>[13]</sup></span><a name=\"ref_[13]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;</span></p><p></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp; 2011年，姚笛与</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/subview/363031/5192786.htm\"><span style=\"font-size: 20px;\">文章</span></a><span style=\"font-size: 20px;\">、</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/125990.htm\"><span style=\"font-size: 20px;\">张凯丽</span></a><span style=\"font-size: 20px;\">、</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/520963.htm\"><span style=\"font-size: 20px;\">丁嘉丽</span></a><span style=\"font-size: 20px;\">合作主演的情感剧《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/3865903.htm\"><span style=\"font-size: 20px;\">裸婚时代</span></a><span style=\"font-size: 20px;\">》获选为“2011年度国剧盛典十佳电视剧第8名”，因此令她人气上升。<sup>[2]</sup></span><a name=\"ref_[2]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;\r\n 姚笛也因此获得2011优酷影视盛典年度最具人气女演员及最受欢迎女演员等奖项。<sup>[3]</sup></span><a name=\"ref_[3]_733886\"></a><span style=\"font-size: 20px;\"><br/></span></p><p style=\"text-align: center;\"><span style=\"font-size: 20px;\"><img alt=\"2ee9bfad33e9048fc86bd28b4962063d.jpg\" src=\"/Public/Uploads/image/20160528/1464413329675125.jpg\" title=\"1464413329675125.jpg\"/>&nbsp;</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 2012年，再次与</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/80804.htm\"><span style=\"font-size: 20px;\">赵宝刚</span></a><span style=\"font-size: 20px;\">导演合作的青春励志剧《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/3888727.htm\"><span style=\"font-size: 20px;\">北京青年</span></a><span style=\"font-size: 20px;\">》，姚笛在剧中饰演唐娇一角。<sup>[5]</sup></span><a name=\"ref_[5]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;该剧获得第29届中国电视剧</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/17612.htm\"><span style=\"font-size: 20px;\">飞天奖</span></a><span style=\"font-size: 20px;\">长篇电视剧一等奖。<sup>[15]</sup></span><a name=\"ref_[15]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;2012年9月23日，由北京华美时空文化传播有限公司、金盛信马影视文化有限公司联合出品，导演刘恺执导，姚笛、</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/subview/255816/7605007.htm\"><span style=\"font-size: 20px;\">张默</span></a><span style=\"font-size: 20px;\">领衔主演的情感剧《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/3158523.htm\"><span style=\"font-size: 20px;\">失恋33天</span></a><span style=\"font-size: 20px;\">》在北京正式开机，2013年8月14日在</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/1097554.htm\"><span style=\"font-size: 20px;\">天津卫视</span></a><span style=\"font-size: 20px;\">和</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/1011848.htm\"><span style=\"font-size: 20px;\">陕西卫视</span></a><span style=\"font-size: 20px;\">黄金档全国上映，腾讯视频网络同步首播。<sup>[16]</sup></span><a name=\"ref_[16]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 2013年，姚笛领衔主演的电视剧《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/6507604.htm\"><span style=\"font-size: 20px;\">新恋爱时代</span></a><span style=\"font-size: 20px;\">》于同年6月10日在</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/1091964.htm\"><span style=\"font-size: 20px;\">江苏卫视</span></a><span style=\"font-size: 20px;\">和</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/67610.htm\"><span style=\"font-size: 20px;\">东方卫视</span></a><span style=\"font-size: 20px;\">首播。姚笛因此获得亚洲偶像盛典年度最具收视号召力女演员奖。<sup>[7]</sup></span><a name=\"ref_[7]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 2014年，姚笛携手</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/3432101.htm\"><span style=\"font-size: 20px;\">雷佳音</span></a><span style=\"font-size: 20px;\">出演电视剧《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/12123497.htm\"><span style=\"font-size: 20px;\">爱情碟中谍</span></a><span style=\"font-size: 20px;\">》<sup>[17]</sup></span><a name=\"ref_[17]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;。</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 2015年，姚笛参加录制《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/subview/924083/16367604.htm\"><span style=\"font-size: 20px;\">超级战队</span></a><span style=\"font-size: 20px;\">》，这也是自去年3月底被拍到与</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/subview/363031/5192786.htm\"><span style=\"font-size: 20px;\">文章</span></a><span style=\"font-size: 20px;\">婚外情后首次公开露面。<sup>[18]</sup></span><a name=\"ref_[18]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;4月现身成都，和</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/19156.htm\"><span style=\"font-size: 20px;\">郭品超</span></a><span style=\"font-size: 20px;\">一起拍摄家庭伦理轻喜剧《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/15147633.htm\"><span style=\"font-size: 20px;\">王小米驯夫记</span></a><span style=\"font-size: 20px;\">》<sup>[19]</sup></span><a name=\"ref_[19]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;。7月20日，《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/subview/10131243/18300340.htm\"><span style=\"font-size: 20px;\">爱的速递</span></a><span style=\"font-size: 20px;\">》在北京正式开机，</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/733886.htm\"><span style=\"font-size: 20px;\">姚笛</span></a><span style=\"font-size: 20px;\">、</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/117894.htm\"><span style=\"font-size: 20px;\">杜淳</span></a><span style=\"font-size: 20px;\">、</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/view/50758.htm\"><span style=\"font-size: 20px;\">释小龙</span></a><span style=\"font-size: 20px;\">联袂主演<sup>[20]</sup></span><a name=\"ref_[20]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;。</span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 2016年，主演励志情感大剧《</span><a style=\"font-size: 20px; text-decoration: underline;\" target=\"_blank\" href=\"http://baike.baidu.com/subview/7202398/18548572.htm\"><span style=\"font-size: 20px;\">生于70年代</span></a><span style=\"font-size: 20px;\">》<sup>[9]</sup></span><a name=\"ref_[9]_733886\"></a><span style=\"font-size: 20px;\">&nbsp;</span></p><p><br/></p>', '2016-05-28 13:28:56', '一只自拍的猫', '姚笛，中国内地女演员。1982年3月17日出生于浙江省嘉兴市桐乡市。毕业于北京电影学院表演系高职，曾就读于杭州艺术学校兼修越剧专业。北京鑫宝源影视投资有限公司签约艺人。2007年姚笛因参加“红楼梦中人”的选秀而进入演艺圈。 2008年因其出演新版《红楼梦》的王熙凤而被关注。2011年，在家庭情感剧《裸婚时代》中饰演的“童佳倩”，她也因此获得2011优酷影视盛典年度最受欢迎女演员奖 、最具人气女演员奖及年度最具网络人气奖等奖项');
INSERT INTO `hs_fashion` VALUES ('28', '拍婚纱照前需要准备啥', '/Public/Uploads/2016-05-28/57492efe62e67.jpeg', '<p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 情感真。无压力则不刻板，要让客户保持轻松的心清，幸福感才能油然而生。如果说婚纱照要向&quot;纪实&quot;借鉴，首先就应该是人物真实的心态。因为记录情感交流是最重要的目的，甚至可以说这是婚纱照向摄影本身的回归。</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 很多摄影师朋友也问过我这样的问题:怎样才能拍出幸福感?其实如果把我们自己当成客户来想象就不难理解.按照我们惯熟的路线和方法去拍婚纱，\r\n \r\n漫长的等待和生硬的摆动作……这些貌似追求&quot;完美&quot;的手段消磨掉的不仅仅是时间，更是新人的心情，让他们疲惫的去完成一个任务，而不是享受愉悦的过程。这\r\n 无论对谁而言，恐怕都很难焕发出由衷的幸福之感。</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 我们都看过很多貌似&#39;没什么特别&#39;的照片，姿态、构图、光影、取景无一不简单，反倒是让人觉得幸福满溢。因为那是当时当刻的情感和故事，在今\r\n 后每一次观看时都能引发人们的回忆和联想。将来我们的客户看到自己的婚纱照会想起什么？是不是只想的起当时怎样辛苦和难受的扭出各种奇怪的姿态？</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 对于婚纱照来说，记录人物的情感交流是最重要的目的，要让客户保持轻松的心态，做简单且合理的设计，真实的玩乐，只有这样才能达成情感之美。\r\n \r\n影像美。摄影师的工作是以专业的眼光和技术为客户呈现优质的照片。如果说情感美的达成在于客户的真实和放松，影像美的达成则在于摄影师的全权掌控，任何&#39;\r\n \r\n审美要求&#39;都不应该专家成客户的压力。这是我们应该向&#39;纪实&#39;学习的第二点。很长一段时间，婚纱拍摄走入了误区，比如过分以来人物动作姿态、服装造型的变\r\n 化或是片面夸大引导的作用。我们应该意识到，影像美是建立在摄影本质因素上的，想要达成自然、和谐的画面，必然要判断好取景、光线、构图，使用不同的光\r\n 圈、景深、角度等来拍摄，这些基本元素的组成于变化是实现影响美与丰富性的唯一出路，而不是让顾客变：变姿态、变表情、变角度……</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 引导的问题同样如此，引导就是要帮助他们建立一个幻想的空间，而不是细节。比如在一片公园草坪上拍摄，我们可以先想想，如果是自己带着心爱的\r\n \r\n人，在这样的场景下会做什么？散步、躺着聊天、坐下来看夕阳、追逐玩乐、或是摔倒了互相搀扶，等等。这些都是正常的、合理的设计，引导顾客进入这个适合的\r\n 情境即可，而不应该把每一个动作都纠正到位，那不能称之为完美。</span></p>', '2016-05-28 13:39:10', '一只流浪的猫', '<独家记忆>\r\n我希望你 是我独家的记忆 　　\r\n摆在心底 　　\r\n不管别人说的多么难听 　　\r\n现在我拥有的事情 　　\r\n是你 是给我一半的爱情 　　\r\n我喜欢你 是我独家的记忆');
INSERT INTO `hs_fashion` VALUES ('29', '不一样的婚纱摄影 不一样的苏州婚纱照', '/Public/Uploads/2016-05-28/5749323f4b216.jpeg', '<p style=\"text-align: left;\"><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp; <br/></span></p><p style=\"text-align: left;\"><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp; 当下苏州婚纱照有内景苏州婚纱照和外景苏州婚纱照两种形式，每对新人都有自己喜欢的苏州婚纱照风格和拍苏州婚纱照方式，有人会选择纯内景苏州婚纱照，有的\r\n会选择纯外景苏州婚纱照，有的会选择内外景结合的苏州婚纱照，如果是你，你会选择哪个类型的苏州婚纱照呢?你知道内景和外景拍摄哪个贵吗?下面苏州婚纱摄\r\n影工作室就为您简单分析一下。<br/>&nbsp; </span><br/><span style=\"font-size: 20px;\">\r\n &nbsp; &nbsp; \r\n通常来说外景苏州婚纱照要更贵一些，因为除了套餐中所规定的服务之外，有很多是需要额外开支的，比如说你要去一个景区拍苏州婚纱照，很有可能要用到门票或\r\n是停车费，如果去的地方远的，当天回不来甚至会需要食宿费，这些影楼或婚纱摄影工作室都是不给提供的，需要新人额外掏腰包的，这样一来就提高了苏州婚纱照\r\n的拍摄成本。内景苏州婚纱照是完全不用考虑这些的，不过外景苏州婚纱照贵也是有它的道理的，真实自然的拍摄背景是任何内景苏州婚纱照都无法比拟的，而且新\r\n人在这样的环境中更容易放松，更有助于拍出满意的苏州婚纱照片，但是在室内则会给人一种沉闷压抑，会影响到新人的发挥。</span></p><p style=\"text-align: left;\"><span style=\"font-size: 20px;\"><br/></span></p><p style=\"text-align: left;\"><span style=\"font-size: 20px;\"> &nbsp; &nbsp; \r\n内景苏州婚纱照和外景苏州婚纱照拍摄哪个贵，相较来说外景更贵一些，但是也是物有所值，对于准备拍苏州婚纱照的新人来说，可以根据自己的需求和能力来选择\r\n在哪儿拍苏州婚纱照，目前最受欢迎的就是内外景结合模式，既有室内的严谨，也有户外的清新，这种鱼和熊掌兼得的方式被越来越多的新人所追捧</span></p>', '2016-05-28 13:53:03', '一只懒散的猫', '开了灯 眼前的模样\r\n偌大的房 寂寞的床\r\n关了灯 全都一个样\r\n心里的伤 无法分享\r\n生命随年月流去\r\n随白发老去\r\n随着你离去 快乐渺无音讯\r\n随往事淡去\r\n随梦境睡去\r\n随麻痹的心逐渐远去');
INSERT INTO `hs_fashion` VALUES ('30', '如何挑选婚纱', '/Public/Uploads/2016-05-28/5749333521e2b.jpeg', '<p><strong><span style=\"font-size: 20px;\">挑选婚纱细节部位一：裙型</span></strong><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \r\n裙型指的是一件婚纱的整体剪裁。婚纱的“型”奠定了整个形象的基调，它也是最基本的参考要素。比如，一件上身紧致合体、下身长款钟型裙的婚纱会立刻让人联\r\n想到童话里的灰姑娘，最适合走公主范儿的新娘。高腰裙则是更温和的款式，高于腰际的妩媚腰线设计强调一种经典的时代感。而更追求身材玲珑线条的紧身裙放大\r\n婚纱性感的一面，对摩登的新娘来说是既时髦又有型格的选择。</span></p><p><br/> </p><p><strong><span style=\"font-size: 20px;\">挑选婚纱细节部位二：领型</span></strong><span style=\"font-size: 20px;\"></span></p><p><span style=\"font-size: 20px;\">\r\n &nbsp; &nbsp;&nbsp; 从两方面来说，领型对婚纱极其重要：首先这是整个造型里第一个映入人们眼帘的部分，同时，它衬托着新娘的脸。如果把新娘的脸比作一副画像，领部便是装饰这\r\n画像的外框。像一字领、小圆领、中式领等款式，设计的重点在于提拉颈部的长度、起到修饰、遮掩的作用。而包肩领、鸡心领、单肩领等则精确地控制着裸露的尺\r\n度。设计恰到好处的领型无疑会提升一件婚纱的个性，同时让配饰得以显山露水、让一些身体部位更为出挑-比如，修长优雅的脖颈、大胆暴露的低领、或者一双圆\r\n润而结实的肩膀。</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\"> <strong>挑选婚纱细节部位三：腰线</strong></span></p><p><span style=\"font-size: 20px;\">&nbsp; \r\n从技术层面来说，婚裙的腰线可谓将上身与裙体连接得天衣无缝的水平线。和领型与袖子的设计一样，腰线的作用是为特定的裙型增添个人风格；它同样也左右着婚\r\n纱的“形”和平衡各个部位的“型”。打个比方，延长版的V型巴斯克式腰线是适合长款蓬蓬裙的绝佳剪裁，而一字型中腰线则更能让人注意到线条柔和的设计。低\r\n腰设计的影响力自上世纪20年代爵士时代起绵延至今，它有助从视觉上令躯体变得更修长；一字型高腰设计则因为修身的效果而倍受欢迎。</span></p><p><strong><span style=\"font-size: 20px;\"><br/></span></strong></p><p><strong><span style=\"font-size: 20px;\"> 挑选婚纱细节部位四：袖子</span></strong><span style=\"font-size: 20px;\"></span></p><p><span style=\"font-size: 20px;\">\r\n &nbsp;&nbsp;&nbsp; \r\n婚裙的袖子能为上身增添细节上的风味，同时视觉上与下身裙体达成和谐。由于要考虑到季节的变化，袖子设计的选择现在大多是关于选择露多少的问题。长袖款中\r\n包括前臂贴身、肩位膨胀的泡泡袖、袖口收紧而腕部以上飘逸的灯笼袖，以及长袖套。而短袖款也有不少很棒的选择，像仅仅覆盖过肩头的茶杯式、以内衣般性感著\r\n称的细肩带式。</span></p><p><br/></p>', '2016-05-28 13:57:09', '一只醉醺醺的猫', '没有一点点防备\r\n\r\n也没有一丝顾虑\r\n\r\n你就这样出现\r\n\r\n在我的世界里\r\n\r\n带给我惊喜 情不自已\r\n\r\n可是你偏又这样\r\n\r\n在我不知不觉中 悄悄地消失\r\n\r\n从我的世界里没有音讯\r\n\r\n剩下的只是回忆');
INSERT INTO `hs_fashion` VALUES ('31', '你选对婚纱了吗', '/Public/Uploads/2016-05-28/5749351019a01.jpg', '<p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、沙漏型:有明显的线条,肩部与臀部等宽。</span></p><p><span style=\"font-size: 20px;\">　　2、苹果型:指下肢纤细修长、腰腹却突出的浑圆,就是肚子要收一收。</span></p><p><span style=\"font-size: 20px;\">　　3、矩形:身型合乎比例,唯独腰部线条不明显。肩膀至臀部几乎成直线。就是没什么曲线,没有腰。</span></p><p><span style=\"font-size: 20px;\">　　4、梨形:上身比较纤细,下身比较丰满。</span></p><p><span style=\"font-size: 20px;\">　　5、倒三角形:上身比较丰满,下身比较纤细。</span></p><p><span style=\"font-size: 20px;\">　　结婚是人生大事那是不用说的,多少新娘子卯足干劲只为成为最美的新娘。然而,选婚纱就成了重中之重,选择经典婚纱款式是最保险的,但是并不是每个人都适用的。</span></p><p><span style=\"font-size: 20px;\">　　最经典的婚纱款式分别是A字裙、紧身裙、蓬蓬裙和鱼尾裙。虽然看上去好像都差不多,但是穿在不同身形上,款式就立刻呈现出来了。那么该如何从经典款中挑选出适合自己体型的婚纱呢?这是一个大学问。</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">　　蓬蓬裙——就是那么任性</span></p><p><span style=\"font-size: 20px;\">　　说起蓬蓬裙,它给大家的印象就是童话、梦幻、童真。其实,蓬蓬裙适合大多数的身材。</span></p><p><span style=\"font-size: 20px;\">　　一字领式的蓬蓬婚纱,褶皱的腰带设计提高了腰线,这就是为什么苹果形身材不太适合蓬蓬裙的原因,很容易自曝小肚子。</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">　　鱼尾裙——就是要性感</span></p><p><span style=\"font-size: 20px;\">　　周星驰《美人鱼》的热播,让不少准新娘子大喊:“我要穿鱼尾婚纱裙。”然而,鱼尾裙并不是每个人都适合,它可挑人很挑人的。</span></p><p><span style=\"font-size: 20px;\">　　传统意义上的鱼尾婚纱,是裙体呈鱼尾状的裙子,腰部、臀部及大腿中部呈合体造型,往下逐步放开下摆展成鱼尾状。这款婚纱美是美,但是也是特别挑人穿,前提是你得有臀,而且臀还不能太大,不然会暴露你身材的缺陷。</span></p><p><span style=\"font-size: 20px;\"><br/></span></p><p><span style=\"font-size: 20px;\">　　紧身裙——“又是一个磨人的小妖精”</span></p><p><span style=\"font-size: 20px;\">　　婚纱的紧身裙款式与鱼尾裙款式看上去还是挺像的,区别在于鱼尾裙下摆顾名思义呈鱼尾状,而紧身婚纱一般都是直筒下来。同理,有紧身的地方就有风险,因此,此款婚纱多适合沙漏型或者矩形身材的人穿,梨形身材的人不适合穿是因为,臀部本来就宽,再穿紧身就很容易暴露缺点。</span></p><p><br/></p>', '2016-05-28 14:05:04', '一只吃米的猫', '丑八怪 在这暧昧的时代 我的存在 像意外 有人用一滴泪 会红颜祸水 有人丢掉称谓 什么也不会 只要你足够虚伪 就不怕魔鬼 对不对 如果剧本写好 谁比谁高贵 我只能沉默以对 美丽本无罪 当欲望开始贪杯 有很多机会 像尘埃一样的无畏 化成灰谁认得谁 谁管他配不配 丑八怪 能否别把灯打开 我要的爱 出没在漆黑一片的舞台 丑八怪 在这暧昧的时代 我的存在 不意外 丑八怪 其实见多就不怪 放肆去HIGH 用力踩 那不堪一击的洁白');
INSERT INTO `hs_fashion` VALUES ('32', '盘点明星婚纱 2015五大时尚婚纱', '/Public/Uploads/2016-05-28/574936d53b8a7.jpg', '<p style=\"text-align:justify;TEXT-JUSTIFY: distribute; TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><span style=\"font-size: 20px;\">近\r\n日，备受期待的都市爱情轻喜剧《剩者为王》终于在各大影院上映了，而在前不久曝光的终极海报中舒淇身着一袭婚纱的身影堪称绝美，而在镜子里和她四目相对的\r\n彭于晏满眼都是深深的爱恋。性感的抹胸式婚纱，精致的蕾丝提花，腰间简约的蝴蝶结缎带，整个婚纱让舒淇看起来既性感又不失纯真。</span></p><p style=\"text-align:center;\"><img src=\"http://upload.ct.youth.cn/2015/1110/1447148492572.jpg\" alt=\"\"/></p><p style=\"text-align:justify;TEXT-JUSTIFY: distribute; TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><span style=\"font-size: 20px;\">2015年可谓是喜讯连连，不少明星都身披婚纱走进婚姻的殿堂。备受大家热议的不仅仅是盛大的婚礼，还有新娘身上让人目不转睛的婚纱。</span></p><p style=\"text-align:center;\"><img src=\"http://upload.ct.youth.cn/2015/1110/1447148492902.jpg\" alt=\"\"/></p><p style=\"text-align:justify;TEXT-JUSTIFY: distribute; TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><span style=\"font-size: 20px;\">年初，周杰伦给了昆凌一个梦幻的世纪婚礼，婚礼上昆凌身穿纯手工刺绣镶珍珠的定制婚纱。这件婚纱来自黎巴嫩设计师在加拿大创立的品牌Mikael D。宫廷蕾丝刺绣的曳地拖尾、背后的心形镂空，满足了少女所有的公主梦。</span></p><p style=\"text-align:center;\"><img src=\"http://upload.ct.youth.cn/2015/1110/1447148492344.jpg\" alt=\"\"/></p><p style=\"text-align:justify;TEXT-JUSTIFY: distribute; TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><span style=\"font-size: 20px;\">十\r\n月初AngelaBaby与黄晓明在上海举行了世纪婚礼，Baby一袭婚纱则是由迪奥创意总监拉夫·西蒙 主持设计，经迪奥 (Dior) \r\n高级订制工坊的工匠们花费近千小时手工缝制而成的婚纱礼服。小露香肩的性感V型领，精致蕾丝提花，轻盈的层叠薄纱，蓬蓬的拖地长裙摆，一切都如梦如幻。</span></p><p style=\"text-align:center;\"><img src=\"http://upload.ct.youth.cn/2015/1110/1447148492309.jpg\" alt=\"\"/></p><p style=\"text-align:justify;TEXT-JUSTIFY: distribute; TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><span style=\"font-size: 20px;\">在\r\n今年8月，李小冉与“男闺蜜”徐佳宁低调地在布鲁塞尔办了一场迟到的草坪婚礼。端庄大气的李小冉婚纱选择了来自于的西班牙国宝级婚纱品牌Atelier \r\nPronovias，此品牌崇尚极简风，看似设计简单，却暗藏精美的手工制作细节，漂亮的蕾丝提花刺绣，轻舞梦幻的层叠白纱。</span></p><p style=\"text-align:center;\"><img src=\"http://upload.ct.youth.cn/2015/1110/1447148492205.jpg\" alt=\"\"/></p><p style=\"text-align:justify;TEXT-JUSTIFY: distribute; TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><span style=\"font-size: 20px;\">被称为“百变精灵”的迅哥也终于在去年与自己相爱的人走进婚姻的殿堂，作为Chanel形象大使她的婚纱也是来自Chanel的定制款。这款婚纱为羽毛刺绣款，简约又有女人味，很符合她的气质。</span></p><p><br/></p>', '2016-05-28 14:12:37', '一只罢演的猫', '徘徊过多少橱窗 住过多少旅馆\r\n才会觉得分离也并不冤枉\r\n感情是用来浏览 还是用来珍藏\r\n好让日子天天都过得难忘\r\n熬过了多久患难 湿了多长眼眶\r\n才能知道伤感是爱的遗产\r\n流浪几张双人床 换过几次信仰');
INSERT INTO `hs_fashion` VALUES ('33', '婚纱和发型你搭对了没?', '/Public/Uploads/2016-05-28/57493802407a1.jpg', '<p><span style=\"font-size: 20px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、抹胸与蓬蓬裙摆给人一种小公主的感觉，蓬松的发型让发量增多的同时，营造慵懒气息，长度适中也恰好露出迷人的锁骨。</span></p><p><span style=\"font-size: 20px;\">　　2、紧身鱼尾长裙优雅有度，一头顺滑有光泽的头发只需披到一边就能散发浓浓的女人味。</span></p><p><span style=\"font-size: 20px;\">　　3、文艺轻松的婚纱只需要配上简单舒适的披肩发就能看起来清新与活力。</span></p><p><span style=\"font-size: 20px;\">　　4、波西米亚风格的垂地长裙，将头发如瀑布一般自然披到一边。</span></p><p><span style=\"font-size: 20px;\">　　5、气势强盛的拖尾头纱必须有一个简介利落的发型，侧辫马尾可以兼顾大气与女性的柔美。</span></p><p><span style=\"font-size: 20px;\">　　6、女王气息十足的婚纱，发型必须干净利落，让精致的五官展露出来。</span></p><p><span style=\"font-size: 20px;\">　　7、漂亮的蕾丝大摆婚纱需要搭配一个俏皮可爱的发型，突出小女生的情怀，适合田园风格的婚礼。</span></p><p><span style=\"font-size: 20px;\">　　8、一字领及地婚纱，温婉气息来袭，想更淑女就把秀发盘起吧。</span></p><p><span style=\"font-size: 20px;\">　　9、海藻般的长发最适合淑女气息浓厚的婚纱。</span></p><p><span style=\"font-size: 20px;\">　　10、高领透视婚纱，适合简洁的直发，突出新娘的时尚态度。</span></p>', '2016-05-28 14:17:38', '一只独钓的猫', '其实很简单其实很自然\r\n\r\n两个人的爱由两人分担\r\n\r\n其实并不难是你太悲观\r\n\r\n隔着一道墙不跟谁分享\r\n\r\n不想让你为难\r\n\r\n你不再需要给我个答案\r\n\r\n我想你是爱我的\r\n\r\n我猜你也舍不得\r\n\r\n但是怎么说总觉得\r\n\r\n我们之间留了太多空白格');

-- ----------------------------
-- Table structure for hs_goods
-- ----------------------------
DROP TABLE IF EXISTS `hs_goods`;
CREATE TABLE `hs_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) DEFAULT NULL,
  `cate_id` int(10) unsigned DEFAULT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '888.00',
  `stock` int(10) unsigned NOT NULL DEFAULT '10',
  `sale` int(10) unsigned NOT NULL DEFAULT '6',
  `is_new` tinyint(4) NOT NULL DEFAULT '1',
  `is_hot` tinyint(4) NOT NULL DEFAULT '1',
  `state` tinyint(4) DEFAULT '1',
  `zan` smallint(6) NOT NULL DEFAULT '1',
  `msg` varchar(600) NOT NULL DEFAULT '',
  `gtime` datetime DEFAULT NULL,
  `gpic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gname` (`gname`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_goods
-- ----------------------------
INSERT INTO `hs_goods` VALUES ('1', '水晶之恋', '1', '899.00', '100', '0', '1', '1', '1', '6', '时时刻刻新娘可以选择一些。', '2016-05-27 15:33:35', '/Public/Uploads/2016-05-27/5747f84f1ab3f.jpeg');
INSERT INTO `hs_goods` VALUES ('2', '巴黎恋人', '2', '999.00', '1774', '3', '1', '1', '1', '13', '再搭配精致的头纱和高跟鞋，轻轻松松就可以展现新娘的美丽与甜蜜。', '2016-05-27 15:37:08', '/Public/Uploads/2016-05-27/5747f9244c4b4.jpeg');
INSERT INTO `hs_goods` VALUES ('3', '味道', '3', '666.00', '6', '4', '1', '1', '1', '13', '因为它不落俗套的设计可以从整体提升新娘的气质。', '2016-05-27 15:36:57', '/Public/Uploads/2016-05-27/5747f9191e848.jpeg');
INSERT INTO `hs_goods` VALUES ('4', '天使的嫁衣', '4', '450.00', '10', '2', '1', '1', '1', '11', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:32:56', '/Public/Uploads/2016-05-27/5747f828aba95.jpeg');
INSERT INTO `hs_goods` VALUES ('5', '迷迭香', '1', '3.00', '10', '0', '1', '1', '1', '2', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:31:21', '/Public/Uploads/2016-05-27/5747f7c953ec6.jpeg');
INSERT INTO `hs_goods` VALUES ('6', '珊瑚海', '2', '10.00', '10', '0', '1', '1', '1', '3', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:33:06', '/Public/Uploads/2016-05-27/5747f832d9701.jpeg');
INSERT INTO `hs_goods` VALUES ('7', '莎士比亚', '3', '10.00', '10', '0', '1', '1', '1', '1', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:29:27', '/Public/Uploads/2016-05-27/5747f75707a12.jpeg');
INSERT INTO `hs_goods` VALUES ('8', '苏格拉没有底', '4', '10.00', '10', '0', '1', '1', '1', '1', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:32:22', '/Public/Uploads/2016-05-27/5747f8068583b.jpeg');
INSERT INTO `hs_goods` VALUES ('9', '认真的雪', '5', '10.00', '10', '0', '1', '1', '1', '1', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:28:57', '/Public/Uploads/2016-05-27/5747f739ec82e.jpeg');
INSERT INTO `hs_goods` VALUES ('10', '幻听', '6', '10.00', '10', '0', '1', '1', '1', '1', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:31:51', '/Public/Uploads/2016-05-27/5747f7e7a7d8c.jpeg');
INSERT INTO `hs_goods` VALUES ('11', '梦幻之城', '1', '333.00', '888', '0', '1', '1', '1', '7', '让新人有了更多的选择空间，而新人也乐见有更为宽泛的选择余地，', '2016-05-27 15:38:37', '/Public/Uploads/2016-05-27/5747f97da4083.jpeg');
INSERT INTO `hs_goods` VALUES ('12', '开心宝贝', '2', '666.00', '444', '0', '1', '1', '1', '5', '会有同类时尚元素款展示。', '2016-05-27 15:42:02', '/Public/Uploads/2016-05-27/5747fa4a0f424.jpeg');
INSERT INTO `hs_goods` VALUES ('13', '亭亭玉立', '3', '111.00', '444', '0', '1', '1', '1', '4', '，无论是扮演活泼洋溢的公主还是性感蛊惑的美人鱼，都一样值得挑战！', '2016-05-27 15:42:13', '/Public/Uploads/2016-05-27/5747fa5581b32.jpeg');
INSERT INTO `hs_goods` VALUES ('14', '琼楼玉女', '4', '777.00', '999', '0', '1', '1', '1', '7', '就了新娘的霸气个性，充满女人味的亮片薄纱领口也如此璀璨生辉??  ', '2016-05-27 15:42:27', '/Public/Uploads/2016-05-27/5747fa63c65d4.jpeg');
INSERT INTO `hs_goods` VALUES ('15', '伊丽莎白', '5', '33.00', '4', '0', '1', '1', '1', '3', '，而惊叹过后的宁静回归则是令人窒息的朦胧美：轻', '2016-05-27 15:42:37', '/Public/Uploads/2016-05-27/5747fa6d98968.jpeg');
INSERT INTO `hs_goods` VALUES ('16', '曼珠沙华', '6', '55.00', '7888', '0', '1', '1', '1', '3', '而，就是这种自然散发的气质，却成为许多品牌婚纱 ', '2016-05-27 15:41:46', '/Public/Uploads/2016-05-27/5747fa3ab34a7.jpeg');
INSERT INTO `hs_goods` VALUES ('17', '眉飞色舞', '7', '999.00', '222', '0', '1', '1', '1', '2', '霍启刚远赴西班牙现场挑选婚  ', '2016-05-27 15:41:32', '/Public/Uploads/2016-05-27/5747fa2c0b71b.jpeg');
INSERT INTO `hs_goods` VALUES ('18', '花花世界', '8', '999.00', '5', '0', '1', '1', '1', '1', '雪纺布料，搭配精致的花蕾丝或者小颗粒的亮片就更加显得优雅动人了。', '2016-05-27 15:39:24', '/Public/Uploads/2016-05-27/5747f9accdfe6.jpeg');
INSERT INTO `hs_goods` VALUES ('19', '童话', '1', '333.00', '33', '0', '1', '1', '1', '4', '与甜蜜。', '2016-05-27 15:41:18', '/Public/Uploads/2016-05-27/5747fa1e90f56.jpeg');
INSERT INTO `hs_goods` VALUES ('20', '我心永恒', '1', '888.00', '10', '6', '1', '1', '1', '1', '眼睛在为你下雨，心却在为你打伞。', '2016-05-27 15:31:07', '/Public/Uploads/2016-05-27/5747f7bb5b8d8.jpeg');
INSERT INTO `hs_goods` VALUES ('21', '一生一世', '2', '333.00', '33', '0', '1', '1', '1', '1', '提升新娘的气质。', '2016-05-27 15:40:59', '/Public/Uploads/2016-05-27/5747fa0b7de29.jpeg');
INSERT INTO `hs_goods` VALUES ('22', '月亮代表我的心', '3', '33.00', '33', '0', '1', '1', '1', '1', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:40:44', '/Public/Uploads/2016-05-27/5747f9fc6ea05.jpeg');
INSERT INTO `hs_goods` VALUES ('23', '天之蓝', '4', '333.00', '21', '0', '1', '1', '1', '1', '既休闲帅气，又不失端庄与典雅。', '2016-05-29 13:19:49', '/Public/Uploads/2016-05-29/574a7bf603d09.jpg');
INSERT INTO `hs_goods` VALUES ('24', '梦之蓝', '5', '333.00', '333', '0', '1', '1', '1', '1', '它可以非常好地体现婚纱的档次与品质，使新娘在众人中脱颖而出。', '2016-05-27 15:40:06', '/Public/Uploads/2016-05-27/5747f9d6dd40a.jpeg');
INSERT INTO `hs_goods` VALUES ('25', '海之蓝', '2', '99999.99', '33', '0', '1', '1', '1', '1', '，先来找到令你心驰神往的婚纱风格！', '2016-05-27 15:39:37', '/Public/Uploads/2016-05-27/5747f9b9aba95.jpeg');
INSERT INTO `hs_goods` VALUES ('26', '美好时光', '6', '333.00', '33', '0', '1', '1', '1', '1', '搭配精致的花蕾丝或者小颗粒的亮片就更加显得优雅动人了。', '2016-05-27 15:39:13', '/Public/Uploads/2016-05-27/5747f9a1af79e.jpeg');
INSERT INTO `hs_goods` VALUES ('27', '醉华阴', '9', '22.00', '22', '0', '1', '1', '1', '1', '再搭配精致的头纱和高跟鞋，轻轻松松就可以展现新娘的美丽与甜蜜。', '2016-05-27 15:33:23', '/Public/Uploads/2016-05-27/5747f84329f63.jpeg');
INSERT INTO `hs_goods` VALUES ('28', '玫瑰梦', '9', '33.00', '22', '0', '1', '1', '1', '1', '不落俗套的设计可以从整体提升新娘的气质。', '2016-05-27 15:39:02', '/Public/Uploads/2016-05-27/5747f99631975.jpeg');
INSERT INTO `hs_goods` VALUES ('29', '粉色天空', '3', '222.00', '11', '0', '1', '1', '1', '2', '既休闲帅气，又不失端庄与典雅。', '2016-05-27 15:38:50', '/Public/Uploads/2016-05-27/5747f98a6acfc.jpeg');
INSERT INTO `hs_goods` VALUES ('30', '月光下的凤尾竹', '5', '9999.00', '77', '0', '1', '1', '1', '3', '都可以呈现出新娘最完美的状态。', '2016-05-27 15:38:20', '/Public/Uploads/2016-05-27/5747f96cb71b0.jpeg');
INSERT INTO `hs_goods` VALUES ('31', '小情歌', '2', '888.00', '10', '6', '1', '1', '1', '1', '使新娘在众人中脱颖而出', '2016-05-27 15:38:10', '/Public/Uploads/2016-05-27/5747f962a7d8c.jpeg');
INSERT INTO `hs_goods` VALUES ('32', '爱一点', '1', '888.00', '10', '6', '1', '1', '1', '1', '先来找到令你心驰神往的婚纱风格！', '2016-05-27 15:28:39', '/Public/Uploads/2016-05-27/5747f727c65d4.jpeg');
INSERT INTO `hs_goods` VALUES ('33', 'foreverLOVE', '2', '888.00', '10', '6', '1', '1', '1', '1', '在2010的婚纱设计上都有所回归。 ', '2016-05-27 15:32:01', '/Public/Uploads/2016-05-27/5747f7f19c671.jpeg');
INSERT INTO `hs_goods` VALUES ('34', '洋葱', '4', '888.00', '10', '6', '1', '1', '1', '1', 'Justin Alexander', '2016-05-27 15:28:15', '/Public/Uploads/2016-05-27/5747f70f66ff3.jpeg');
INSERT INTO `hs_goods` VALUES ('35', '不二情书', '5', '888.00', '10', '6', '1', '1', '1', '1', '散发着迷人', '2016-05-27 15:30:15', '/Public/Uploads/2016-05-27/5747f787ca2dd.jpeg');
INSERT INTO `hs_goods` VALUES ('36', '天空之城', '6', '888.00', '10', '6', '1', '1', '1', '1', ' 也会有同类时尚元素款展示', '2016-05-27 15:29:55', '/Public/Uploads/2016-05-27/5747f77390f56.jpeg');
INSERT INTO `hs_goods` VALUES ('37', '龙猫', '7', '888.00', '10', '6', '1', '1', '1', '1', '蕾丝作为热门的婚纱元素铺天盖地袭来时，或许你也在犹豫是否随波逐流。', '2016-05-27 15:28:03', '/Public/Uploads/2016-05-27/5747f7032625a.jpeg');
INSERT INTO `hs_goods` VALUES ('38', '千里千寻', '8', '888.00', '10', '6', '1', '1', '1', '1', '充满女人味的亮片薄纱领口也如此璀璨生辉?? ', '2016-05-27 15:27:42', '/Public/Uploads/2016-05-27/5747f6eee1113.jpeg');
INSERT INTO `hs_goods` VALUES ('39', '四月物语', '9', '888.00', '10', '6', '1', '1', '1', '1', '而惊叹过后的宁静回归则是令人窒息的朦胧美：轻', '2016-05-27 15:27:28', '/Public/Uploads/2016-05-27/5747f6e0baeb9.jpeg');
INSERT INTO `hs_goods` VALUES ('40', '竹屋', '10', '888.00', '10', '6', '1', '1', '1', '1', '却成为许多品牌婚纱   ', '2016-05-27 15:27:11', '/Public/Uploads/2016-05-27/5747f6cf501bd.jpeg');
INSERT INTO `hs_goods` VALUES ('41', '天涯海角', '11', '888.00', '10', '6', '1', '1', '1', '1', '也丝毫不掩饰对Pronovias的喜爱，与霍启刚远赴西班牙现场挑选婚 ', '2016-05-27 15:26:56', '/Public/Uploads/2016-05-27/5747f6c00f424.jpeg');
INSERT INTO `hs_goods` VALUES ('42', '蝶恋花', '1', '888.00', '10', '6', '1', '1', '1', '1', '虽然没有曳地长尾、', '2016-05-27 15:26:43', '/Public/Uploads/2016-05-27/5747f6b3a4083.jpeg');
INSERT INTO `hs_goods` VALUES ('43', '金粉世家', '2', '888.00', '10', '6', '1', '1', '1', '1', '回得了过去，回不了当初。', '2016-05-27 15:39:55', '/Public/Uploads/2016-05-27/5747f9cbe8b25.jpeg');
INSERT INTO `hs_goods` VALUES ('44', '如意', '3', '888.00', '10', '6', '1', '1', '1', '1', '要有多坚强，才敢念念不忘。', '2016-05-27 15:37:37', '/Public/Uploads/2016-05-27/5747f941cdfe6.jpeg');
INSERT INTO `hs_goods` VALUES ('45', '伊人', '4', '888.00', '10', '6', '1', '1', '1', '1', '看着别人的故事，流着自己的眼泪。', '2016-05-27 15:37:21', '/Public/Uploads/2016-05-27/5747f931501bd.jpeg');
INSERT INTO `hs_goods` VALUES ('46', '依然爱你', '5', '888.00', '10', '6', '1', '1', '1', '1', '向来缘浅，奈何情深？', '2016-05-27 15:26:08', '/Public/Uploads/2016-05-27/5747f69044aa2.jpeg');
INSERT INTO `hs_goods` VALUES ('47', '小酒窝', '6', '888.00', '10', '6', '1', '1', '1', '1', '戏子入画、一生天涯。', '2016-05-27 15:25:57', '/Public/Uploads/2016-05-27/5747f68590f56.jpeg');
INSERT INTO `hs_goods` VALUES ('48', '十一年', '7', '888.00', '10', '6', '1', '1', '1', '1', '夜微凉、灯微暗、暧昧散尽、笙歌婉转。', '2016-05-27 15:36:41', '/Public/Uploads/2016-05-27/5747f909c28cb.jpeg');
INSERT INTO `hs_goods` VALUES ('49', '北极星的眼泪', '8', '888.00', '10', '6', '1', '1', '1', '1', '　\r\n曾听人说，回忆是一座桥，却是通向寂寞的牢。　　 ', '2016-05-27 15:25:27', '/Public/Uploads/2016-05-27/5747f66716e36.jpeg');
INSERT INTO `hs_goods` VALUES ('50', '夏天的风', '9', '888.00', '10', '6', '1', '1', '1', '1', '眼睛在为你下雨，心却在为你打伞。', '2016-05-27 15:25:42', '/Public/Uploads/2016-05-27/5747f6762625a.jpeg');
INSERT INTO `hs_goods` VALUES ('51', '水水水水', '28', '999.00', '888', '6', '1', '1', '1', '1', 'rei g', '2016-05-27 15:29:42', '/Public/Uploads/2016-05-27/5747f76629f63.jpeg');
INSERT INTO `hs_goods` VALUES ('52', '营业员', '1', '555.00', '4444', '6', '1', '1', '1', '1', 'yy ', '2016-05-27 15:02:40', '/Public/Uploads/2016-05-27/5747f11103d09.jpg');
INSERT INTO `hs_goods` VALUES ('54', '巴黎恋人2', '2', '888.00', '66', '6', '1', '1', '1', '1', '唯美唯我为时尚2', '2016-05-29 13:10:29', '/Public/Uploads/2016-05-29/574a79c51312d.jpg');
INSERT INTO `hs_goods` VALUES ('55', '巴黎婚纱', '29', '777.00', '66', '6', '1', '1', '0', '1', '巴厘岛的风情,浪漫般的夏日', '2016-05-29 13:17:25', '/Public/Uploads/2016-05-29/574a75cdc65d4.jpg');

-- ----------------------------
-- Table structure for hs_goods_comment
-- ----------------------------
DROP TABLE IF EXISTS `hs_goods_comment`;
CREATE TABLE `hs_goods_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `commsg` varchar(255) DEFAULT NULL,
  `comtime` text,
  `gname` varchar(255) DEFAULT NULL,
  `gpic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_goods_comment
-- ----------------------------

-- ----------------------------
-- Table structure for hs_image
-- ----------------------------
DROP TABLE IF EXISTS `hs_image`;
CREATE TABLE `hs_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iname` varchar(255) DEFAULT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `cover` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `iname` (`iname`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_image
-- ----------------------------
INSERT INTO `hs_image` VALUES ('1', '/Public/Uploads/2016-05-17/573aa75c39387.jpg', '1', '0');
INSERT INTO `hs_image` VALUES ('2', '/Public/Uploads/2016-05-17/573a8c250f424.jpg', '1', '0');
INSERT INTO `hs_image` VALUES ('3', '/Public/Uploads/2016-05-17/573a8c6989544.jpg', '1', '0');
INSERT INTO `hs_image` VALUES ('4', '/Public/Uploads/2016-05-17/573a8cbcbaeb9.jpg', '7', '0');
INSERT INTO `hs_image` VALUES ('5', '/Public/Uploads/2016-05-17/573a8ce4b71b0.jpg', '6', '0');
INSERT INTO `hs_image` VALUES ('6', '/Public/Uploads/2016-05-17/573a93e329f63.jpeg', '6', '0');
INSERT INTO `hs_image` VALUES ('7', '/Public/Uploads/2016-05-17/573a9ec300000.jpg', '5', '0');
INSERT INTO `hs_image` VALUES ('8', '/Public/Uploads/2016-05-17/573aabdd9c671.jpg', '5', '0');
INSERT INTO `hs_image` VALUES ('16', '/Public/Uploads/2016-05-17/573ad502f0537.jpg', '3', '0');
INSERT INTO `hs_image` VALUES ('17', '/Public/Uploads/2016-05-17/573ad79631975.jpg', '2', '0');
INSERT INTO `hs_image` VALUES ('18', '/Public/Uploads/2016-05-17/573ad7d5cdfe6.jpg', '2', '0');
INSERT INTO `hs_image` VALUES ('20', '/Public/Uploads/2016-05-18/573c562907a12.jpg', '7', '0');
INSERT INTO `hs_image` VALUES ('21', '/Public/Uploads/2016-05-18/573c5634a7d8c.jpg', '7', '0');
INSERT INTO `hs_image` VALUES ('24', '/Public/Uploads/2016-05-26/57467eb78d24d.jpg', '3', '0');
INSERT INTO `hs_image` VALUES ('25', '/Public/Uploads/2016-05-26/57467ec1cdfe6.jpg', '3', '0');
INSERT INTO `hs_image` VALUES ('26', '/Public/Uploads/2016-05-26/574684ab94c5f.jpg', '4', '0');
INSERT INTO `hs_image` VALUES ('27', '/Public/Uploads/2016-05-26/574684b35f5e1.jpg', '4', '0');
INSERT INTO `hs_image` VALUES ('28', '/Public/Uploads/2016-05-26/574684bbd1cef.jpg', '4', '0');
INSERT INTO `hs_image` VALUES ('29', '/Public/Uploads/2016-05-26/5746d13729f63.jpg', '49', '0');
INSERT INTO `hs_image` VALUES ('30', '/Public/Uploads/2016-05-29/574a76847270e.jpg', '55', '0');
INSERT INTO `hs_image` VALUES ('31', '/Public/Uploads/2016-05-29/574a768c57bcf.jpg', '55', '0');
INSERT INTO `hs_image` VALUES ('32', '/Public/Uploads/2016-05-29/574a769a8583b.jpg', '55', '0');
INSERT INTO `hs_image` VALUES ('34', '/Public/Uploads/2016-05-29/574a76b0a4083.jpg', '55', '0');
INSERT INTO `hs_image` VALUES ('35', '/Public/Uploads/2016-05-29/574a79bae8b25.jpg', '54', '0');
INSERT INTO `hs_image` VALUES ('36', '/Public/Uploads/2016-05-29/574a79d622551.jpg', '15', '0');
INSERT INTO `hs_image` VALUES ('37', '/Public/Uploads/2016-05-29/574a79df632ea.jpg', '15', '0');
INSERT INTO `hs_image` VALUES ('38', '/Public/Uploads/2016-05-29/574a79e99c671.jpg', '15', '0');
INSERT INTO `hs_image` VALUES ('39', '/Public/Uploads/2016-05-29/574a79ff632ea.jpg', '14', '0');
INSERT INTO `hs_image` VALUES ('40', '/Public/Uploads/2016-05-29/574a7a13b34a7.jpg', '14', '0');
INSERT INTO `hs_image` VALUES ('42', '/Public/Uploads/2016-05-29/574a7a327a120.jpg', '14', '0');
INSERT INTO `hs_image` VALUES ('43', '/Public/Uploads/2016-05-29/574a7a3be4e1c.jpg', '13', '0');
INSERT INTO `hs_image` VALUES ('44', '/Public/Uploads/2016-05-29/574a7a44dd40a.jpg', '13', '0');
INSERT INTO `hs_image` VALUES ('45', '/Public/Uploads/2016-05-29/574a7a4f5f5e1.jpg', '13', '0');
INSERT INTO `hs_image` VALUES ('47', '/Public/Uploads/2016-05-29/574a7af66ea05.jpg', '12', '0');
INSERT INTO `hs_image` VALUES ('48', '/Public/Uploads/2016-05-29/574a7aff7a120.jpg', '13', '0');
INSERT INTO `hs_image` VALUES ('49', '/Public/Uploads/2016-05-29/574a7b0c6ea05.jpg', '12', '0');
INSERT INTO `hs_image` VALUES ('50', '/Public/Uploads/2016-05-29/574a7b1c00000.jpg', '12', '0');
INSERT INTO `hs_image` VALUES ('51', '/Public/Uploads/2016-05-29/574a7b262625a.jpg', '16', '0');
INSERT INTO `hs_image` VALUES ('52', '/Public/Uploads/2016-05-29/574a7b302dc6c.jpg', '16', '0');
INSERT INTO `hs_image` VALUES ('53', '/Public/Uploads/2016-05-29/574a7b3ae1113.jpg', '16', '0');
INSERT INTO `hs_image` VALUES ('54', '/Public/Uploads/2016-05-30/574b9d9c550df.jpg', '2', '0');

-- ----------------------------
-- Table structure for hs_job
-- ----------------------------
DROP TABLE IF EXISTS `hs_job`;
CREATE TABLE `hs_job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `personnum` int(10) unsigned DEFAULT '1',
  `work` varchar(255) DEFAULT NULL,
  `job_phone` char(11) NOT NULL,
  `job_email` varchar(255) DEFAULT NULL,
  `job_intro` text,
  `job_address` varchar(255) DEFAULT NULL,
  `jtime` datetime DEFAULT NULL,
  `jinfo` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_job
-- ----------------------------
INSERT INTO `hs_job` VALUES ('1', '1', '1', '首席摄影师', '13333333333', '123555@qq.com', '担任本店的相关活动拍摄!;', '上海市闸北区', '2016-05-26 09:40:36', '<p>&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/Public/Uploads/image/20160523/1464014851370073.jpg\" title=\"1464014851370073.jpg\" alt=\"2.jpg\" width=\"997\" height=\"517\" style=\"width: 997px; height: 517px;\"/></p><p>&nbsp; &nbsp; 职位要求:</p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.具备专业的职业技能</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.有相关工作经验的优先</p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.能吃苦耐劳<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;<br/></p>');
INSERT INTO `hs_job` VALUES ('2', '1', '3', '摄影师助理', '13333333333', '123555@qq.com', '配合首席摄影师完成相关工作;', '上海市闸北区', '2016-05-26 09:40:52', '<p>&nbsp; &nbsp; &nbsp;&nbsp;<img src=\"/Public/Uploads/image/20160523/1464014999129869.jpg\" title=\"1464014999129869.jpg\" alt=\"4.jpg\" width=\"985\" height=\"532\" style=\"width: 985px; height: 532px;\"/>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;职位要求:</p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.具备一定的艺术审美能力<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.摄影爱好者<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.具备相关职业技能证书优先</p><p>&nbsp;&nbsp;&nbsp;&nbsp;职位诱惑;<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.具有较大的升职空间<br/></p>');
INSERT INTO `hs_job` VALUES ('3', '1', '1', '店长', '13333333333', '123555@qq.com', '对店内事务进行管理,协调各部门工作', '上海市闸北区', '2016-05-23 22:54:03', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160523/1464015144275489.jpg&quot; title=&quot;1464015144275489.jpg&quot; alt=&quot;Annie.jpg&quot; width=&quot;957&quot; height=&quot;476&quot; style=&quot;width: 957px; height: 476px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职位要求:&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;1.具备良好的解决事情的能力&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2.具备优秀的管理能力&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;3.具备优秀的沟通能力&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职位诱惑:&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;1.具有良好的发展空间&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2.待遇丰厚&lt;br/&gt;&lt;/p&gt;');
INSERT INTO `hs_job` VALUES ('4', '1', '5', '店员', '13333333333', '123555@qq.com', '完成店内的店长分配的相关工作', '上海市闸北区', '2016-05-23 22:55:43', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160523/1464015291135636.jpg&quot; title=&quot;1464015291135636.jpg&quot; alt=&quot;circle.jpg&quot; width=&quot;970&quot; height=&quot;440&quot; style=&quot;width: 970px; height: 440px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职位要求:&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;1.能吃苦耐劳&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2.抗压能力强&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;3.对本店有一定的了解&lt;/p&gt;');
INSERT INTO `hs_job` VALUES ('5', '1', '2', 'web前端工程师', '13333333333', '123555@qq.com', '对公司的网站前台页面构建', '上海市闸北区', '2016-05-23 22:58:44', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160523/1464015399741437.jpg&quot; title=&quot;1464015399741437.jpg&quot; alt=&quot;Dragon.jpg&quot; width=&quot;936&quot; height=&quot;485&quot; style=&quot;width: 936px; height: 485px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职位要求:&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;1.熟练掌握HTML5,CSS,HTML,XML等前台相关编程语言&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2.熟练掌握PS等相关图片美化软件&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;3.具备相关工作经验者优先&lt;br/&gt;&lt;/p&gt;');
INSERT INTO `hs_job` VALUES ('6', '1', '3', 'PHP后端工程师', '13333333333', '123555@qq.com', '对公司的网站后台进行管理,实现特定的功能', '上海市闸北区', '2016-05-23 23:00:38', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160523/1464015575934736.jpg&quot; title=&quot;1464015575934736.jpg&quot; alt=&quot;fj1.jpg&quot; width=&quot;924&quot; height=&quot;513&quot; style=&quot;width: 924px; height: 513px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职位要求;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;1.熟练掌握PHP,JS,CSS,HTML等语言&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2.熟悉PHP框架&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;3.熟悉LAMP环境构建&lt;br/&gt;&lt;/p&gt;');
INSERT INTO `hs_job` VALUES ('7', '1', '1', '文案管理员', '13333333333', '123555@qq.com', '对公司相关文档进行管理', '上海市闸北区', '2016-05-24 19:21:32', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160524/1464088846185036.jpg&quot; title=&quot;1464088846185036.jpg&quot; alt=&quot;4.jpg&quot; width=&quot;982&quot; height=&quot;433&quot; style=&quot;width: 982px; height: 433px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职位要求:&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;1.具备良好的管理文件能力&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2.具备良好的分类管理习惯&lt;br/&gt;&lt;/p&gt;');
INSERT INTO `hs_job` VALUES ('8', '1', '1', '橱窗陈列师', '13999999999', '123555@qq.com', '对公司的橱窗进行装饰,并对服装进行当下的流行搭配', '上海市闸北区', '2016-05-24 19:23:40', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160524/1464088960808868.jpg&quot; title=&quot;1464088960808868.jpg&quot; alt=&quot;cg.jpg&quot; width=&quot;945&quot; height=&quot;538&quot; style=&quot;width: 945px; height: 538px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职位要求;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;1.了解流行的婚纱搭配动态&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2.对婚纱搭配具有独特的见解&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;3.能够定时更新橱窗内的装饰&lt;br/&gt;&lt;/p&gt;');
INSERT INTO `hs_job` VALUES ('9', '0', '1', '客户经理', '13999999999', '123555@qq.com', '主要接待来店的顾客,对其进行产品介绍,并协助顾客与摄影师的沟通.;', '上海市闸北区', '2016-05-27 14:23:37', '<p>&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"/Public/Uploads/image/20160527/1464330201115970.jpg\" title=\"1464330201115970.jpg\" alt=\"fly.jpg\" width=\"997\" height=\"594\" style=\"width: 997px; height: 594px;\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;职位要求:<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.具备良好的沟通能力.<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.能够技师解决用户的困难<br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.具备一定的相关技能<br/></p>');

-- ----------------------------
-- Table structure for hs_joke
-- ----------------------------
DROP TABLE IF EXISTS `hs_joke`;
CREATE TABLE `hs_joke` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `joke_pic` varchar(255) DEFAULT NULL,
  `joke_msg` text,
  `joke_time` datetime DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `zanzan` smallint(6) DEFAULT '0',
  `look_num` int(10) DEFAULT '0',
  `talk` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_joke
-- ----------------------------
INSERT INTO `hs_joke` VALUES ('1', '数据', '/Public/Uploads/2016-05-28/57498217a037a.gif', '<p>到了谈婚论嫁的时候了，打算和男朋友买房结婚，在售楼处<br/>售楼小姐：“请问二位想要什么样的房子？”<br/>我：“环境要好，要安静，要绿化好，最好是一层的，价格不能太高，要小平房的，节假日要方便亲戚来访……”<br/>二货男友插嘴道：“我怎么听着你像在买坟地！”<br/><br/></p>', '2016-05-30 10:16:25', '慧慧', '3', '13', null);
INSERT INTO `hs_joke` VALUES ('2', '红楼梦', '/Public/Uploads/2016-05-26/5746a668501bd.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0015.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0026.gif\"/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 一同事计划戒烟，想到一方法：买贵的，就舍不得多抽了。结果第一天买的软中华，半天不到就被抢光了。。。<br/><br/></p>', '2016-05-26 15:31:52', '曹雪芹', '136', '21', null);
INSERT INTO `hs_joke` VALUES ('3', '百科全书', '/Public/Uploads/2016-05-28/574964c3d9701.jpg', '<p>、两中年男人聊天<br/>甲：“每次和老婆吵架，老婆都会让我酣畅淋漓、刻骨铭心的经历一次。。。”<br/>乙：“这么享受啊？”<br/>甲：“享受？被开水烫算是享受吗？”<img src=\"http://img.baidu.com/hi/jx2/j_0016.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0018.gif\"/></p>', '2016-05-30 10:17:07', '钱钟书', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('4', '栀子花开', '/Public/Uploads/2016-05-26/5746ae6ad1cef.jpg', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"http://img.baidu.com/hi/jx2/j_0013.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0015.gif\"/>她说：我提示过你，买礼物，一是我表现出过喜欢，二是质感要比普通的好，三是目前家里没有。礼物不用一进门就看见，放在睡觉前一定会打开的地方就好了，才能有惊喜。<br/>他说：我就是这么做的。<br/>她说：所以你就买一块上等五花肉放在冰箱里？ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2016-05-26 18:28:54', '何炅', '4', '10', null);
INSERT INTO `hs_joke` VALUES ('5', '你是人间四月天', '/Public/Uploads/2016-05-29/574a5cf6b34a7.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 和媳妇一块看老版的水浒，看到潘金莲和西门庆的那集<br/>我：“武大郎不就是矮点吗，至于把他药死吗？”<br/>媳妇：“用王干娘的话说，他是三寸丁枯树皮，能不弄死他吗”<br/>我：“矮有那么严重吗？”<br/>媳妇：“关键在这个丁上，三寸丁！”@小丁丁<br/><br/></p>', '2016-05-30 10:15:09', '林徽因', '0', '2', null);
INSERT INTO `hs_joke` VALUES ('6', '百万英镑', '/Public/Uploads/2016-05-26/5746a796b71b0.jpg', '<blockquote><p><img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0071.gif\"/>我：“大师，我刚刚在那个路边看见一个女神级美女，可我不知怎么下手，大师指点两招吧。”<br/>大师二话没说，转身进了屋子，等了有五分钟，大师出来了，衣着光鲜，手拿奔驰车钥匙对我说：“走，带我去看看。”<img src=\"/ueditor/php/upload/image/20160526/1464248206872813.png\" title=\"1464248206872813.png\" alt=\"scrawl.png\"/></p></blockquote>', '2016-05-26 15:36:54', '马克吐温', '23', '11', null);
INSERT INTO `hs_joke` VALUES ('7', '傲慢与偏见', '/Public/Uploads/2016-05-29/574a5d086acfc.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 凤姐到日本旅游。<br/>一个欧洲旅客问她：“你是日本人吧？”<br/>凤姐心想：肯定我柔软娇美得像日本妹子，所以他才这么问。<br/>于是顺水推舟道：“你是怎么看出来的？”<br/>欧洲旅客道：“一看你这模样，肯定是在受过核辐射的，所以猜你是日本人！”<br/>凤姐哭了。。。@因风化龙 <br/><br/></p>', '2016-05-30 10:14:21', '奥斯丁', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('8', '辛德勒名单', '/Public/Uploads/2016-05-26/5746a80116e36.jpg', '<blockquote><p>1、据不完全统计，本次统计不完全。<br/><br/>2、谁能想到，USA的邻居居然是USB。<br/><br/>3、游戏输了肯定是队友不行。如果队友厉害，没有我也能赢。<br/><br/>4、人们从历史中学到的唯一教训就是：人们从不吸取历史教训！<br/><br/>5、“为什么我国这么多gay？”<br/>“因为人口基数大”<img src=\"http://img.baidu.com/hi/jx2/j_0029.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0030.gif\"/></p></blockquote>', '2016-05-26 15:38:41', '托马斯·肯尼利', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('9', '罗马假日', '/Public/Uploads/2016-05-26/5746a86b94c5f.jpg', '<blockquote><p>蓝脸的窦尔敦盗御马，红脸的毛爷爷不够花。<img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0019.gif\"/></p></blockquote>', '2016-05-26 15:40:27', '派克', '2', '8', null);
INSERT INTO `hs_joke` VALUES ('10', '三个火枪手', '/Public/Uploads/2016-05-29/574a5d17aba95.gif', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 本人打算购房了，咱可不差钱，为了彰显土豪本色，我对卖家提出四点要求：<br/>第一是房子的通风透光必须好；<br/>第二是房子必须是移动式的；<br/>第三是房间要足够大，层高也要比一般的房子高；<br/>第四最关键，笼子的缝隙不能太大，要确保养的小鸟飞不出去！@房钟客<br/><br/></p>', '2016-05-30 10:12:46', '小仲马', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('11', '飞行村', '/Public/Uploads/2016-05-26/5746a8dacdfe6.jpg', '<blockquote><p><br/></p><p>我就不爱用微信付款，主要是付一下就关注一个号，感觉手机被嫖了我TM还得掏钱。。。<img src=\"http://img.baidu.com/hi/jx2/j_0017.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0026.gif\"/></p></blockquote>', '2016-05-26 15:42:18', '儒勒·凡尔纳', '5', '10', null);
INSERT INTO `hs_joke` VALUES ('12', '孤星血泪', '/Public/Uploads/2016-05-29/574a5d2590f56.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 哥们问我：三十好几了咋还不结婚呢？<br/>我：没钱结啥婚！<br/>哥们拍着我的肩膀道：咱们哥俩好，我倒可以出点微薄之力！<br/>我惊喜：真的？你借我多少钱？<br/>哥们严肃道：谈钱伤感情啊！<br/>我：那微薄之力是指？<br/>哥们：帮你发条‘微博’征婚啊！<br/>我：尼玛！！！</p>', '2016-05-30 10:13:58', '狄更斯', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('13', '倾城之恋', '/Public/Uploads/2016-05-29/574a5d352625a.gif', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 儿子：爸，我想去蓝翔！<br/>爸爸：就你这点分人家会要你吗？<br/>儿子：我可以再复读一年啊！<br/>爸爸：你复读了人家也不一定要你！<br/>儿子：但是我考不上蓝翔，我不甘心啊！同时别人也会笑话我的！<br/>爸爸：那种高等学府不是咱们平民百姓可以上的去的，儿子别胡思乱想了。<br/>儿子：那我该怎么办？<br/>爸爸：咱就老老实实的去上清华吧！@找企鹅<br/><br/></p>', '2016-05-30 10:13:30', '张爱玲', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('14', '骆驼祥子', '/Public/Uploads/2016-05-29/574a5d4966ff3.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 1、商场里。<br/>女：“相中没？”<br/>男：“没！”<br/>女：“那你就别摸，很贵的！”<br/>... ...<br/>... ...<br/>可能你们和我一样以为这是顾客与营业员的对话，其实TM这是一对狗男女在哪里相亲。@biao521ge<br/><br/></p>', '2016-05-30 10:12:08', '老舍', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('15', '边城', '/Public/Uploads/2016-05-29/574a5d58a7d8c.jpeg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 1、一个人坐在公园发呆，突然一男子上来搭讪：“美女，给你一百块钱，能不能让我看看你胸？”<br/>于是我收了钱，将他暴打了一顿。这年头的人真TM变态，居然有人喜欢看我凶。。。<br/><br/>2、别人家女朋友是这样的：亲爱哒，给我点纸巾，人家想去洗手间。<br/>而我女朋友是：喂！给我纸！老娘请你吃屎！！！<br/><br/>3、晚上男友正玩游戏，我拿着手机凑过去说：“老公！你看我这张自拍漂亮吗？”<br/>他瞟了一眼，说：“不漂亮！”<br/>老娘啪的把手机砸地上，哭道：“这手机像素不好，我要换手机。。。”<br/><br/></p>', '2016-05-30 09:17:28', '沈从文', '2', '2', null);
INSERT INTO `hs_joke` VALUES ('16', '在人间', '/Public/Uploads/2016-05-26/5746a93be4e1c.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0017.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0079.gif\"/>晚上十一点整，老公推开门，发现老婆坐在客厅里。<br/>老公陪笑道：“怎么还不睡觉？”<br/>老婆不冷不热地说：“睡不着，听到外面起风了，我怕风大把搓衣板吹走了，刚从阳台上拿进来，你回的刚刚好，你用膝盖压着它，它飞不走，我就可以睡个安稳觉了。”@李绍旺<br/><br/></p>', '2016-05-30 10:15:55', '高尔基', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('17', '海的女儿', '/Public/Uploads/2016-05-29/574a5d6731975.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 女A：“昨天晚上梦见宋钟基带我吃小龙虾，就在他为我剥虾的时候闹钟响了！”<br/>女B：“真是太可惜了。”<br/>女A：“可不是嘛！多好的小龙虾，一口都没尝到！” <br/></p>', '2016-05-30 10:11:08', '安徒生', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('18', '安娜卡列妮娜', '/Public/Uploads/2016-05-26/5746a99107a12.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> <img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0004.gif\"/>别人要求你去做为难的事情，请直接回答“不方便”。 <br/>&nbsp;若不识趣，还要问“怎么不方便？”，回答“就是不方便”。<br/>还不识趣，问“为什么不方便”，回答“你的要求让人拉不出屎来，没法方便”。</p>', '2016-05-26 15:45:21', '列夫托儿斯泰', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('19', '天鹅湖', '/Public/Uploads/2016-05-26/5746a9c1ec82e.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> <img src=\"http://img.baidu.com/hi/jx2/j_0016.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0017.gif\"/>、最近发现有些脱发，于是我问老妈：“妈，您说我这脱发用去医院检查一下吗？”<br/>老妈安慰道：“不用，你爸年轻时也这样，掉段时间就不会掉了。”<br/>我看了一眼老爸的光头，发现老妈说的好有道理。。。</p>', '2016-05-26 15:46:09', '列夫托儿斯泰', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('20', '简爱', '/Public/Uploads/2016-05-26/5746aa0344aa2.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0015.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0028.gif\"/><br/>2、女儿：“我要买一身运动服用来晨跑！”<br/>爸爸：“为什么啊，穿校服晨跑不也挺好吗？”<br/>女儿：“穿校服晨跑谁能知道我晨跑啊，他们都认为我上学迟到了！”</p>', '2016-05-26 15:47:15', '夏洛特.勃朗宁', '1', '1', null);
INSERT INTO `hs_joke` VALUES ('21', '仲夏夜之梦', '/Public/Uploads/2016-05-26/5746aa5522551.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> <img src=\"http://img.baidu.com/hi/jx2/j_0001.gif\"/>朋友儿子，课余时间学武术。<br/>突然有天老师叫到学校，说儿子用砖头打破了同学的头。<br/>晚上回家把他儿子好一顿揍，边打边气愤的质问： “我花那么多钱天天送你去学武术都白学了吗？和人单挑居然用砖头？！</p>', '2016-05-26 15:48:37', '巴尔扎克', '2', '2', null);
INSERT INTO `hs_joke` VALUES ('22', '欧也妮葛朗台', '/Public/Uploads/2016-05-26/5746aa8faba95.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> <img src=\"http://img.baidu.com/hi/jx2/j_0029.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0038.gif\"/>家里还没有电视那会，我总是站在别人家门口看动画片，老妈看在眼里，终于有一天她跟老爸商量道：“儿子整天站在别人家门口看电视多累啊！再苦也不能苦孩子啊！”<br/>我听得那个激动呀！<br/>老妈接着说：“不如帮儿子买张小塑料凳吧！轻巧方便携带！”</p>', '2016-05-26 15:49:35', '巴尔扎克', '6', '7', null);
INSERT INTO `hs_joke` VALUES ('23', '老人与海', '/Public/Uploads/2016-05-29/574a5d920f424.jpeg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 朋友儿子，课余时间学武术。<br/>突然有天老师叫到学校，说儿子用砖头打破了同学的头。<br/>晚上回家把他儿子好一顿揍，边打边气愤的质问： “我花那么多钱天天送你去学武术都白学了吗？和人单挑居然用砖头？！</p>', '2016-05-30 09:15:38', '海明威', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('24', '泰戈尔选集', '/Public/Uploads/2016-05-29/574a5d9c501bd.jpeg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 1、最近发现有些脱发，于是我问老妈：“妈，您说我这脱发用去医院检查一下吗？”<br/>老妈安慰道：“不用，你爸年轻时也这样，掉段时间就不会掉了。”<br/>我看了一眼老爸的光头，发现老妈说的好有道理。。。<br/><br/>2、女儿：“我要买一身运动服用来晨跑！”<br/>爸爸：“为什么啊，穿校服晨跑不也挺好吗？”<br/>女儿：“穿校服晨跑谁能知道我晨跑啊，他们都认为我上学迟到了！”<br/><br/></p>', '2016-05-30 09:15:09', '谢冰心', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('25', '围城', '/Public/Uploads/2016-05-29/574a5dbc2625a.jpeg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 1、一同事计划戒烟，想到一方法：买贵的，就舍不得多抽了。结果第一天买的软中华，半天不到就被抢光了。。。<br/><br/>2、朋友银行工作，刚才跟我说那天来个和尚贷款买车，工作人员说他没有收入证明，贷不了。<br/>和尚说：出家人不打诳语，你放心，我肯定能还。。。<br/><br/>3、雇了个二B店员，让她临走时候检查一下电源，把该拔的拔了，结果把冰柜的也拔了，一柜的雪糕全TM化成水了。。。<br/><br/>4、科三考了一次又一次都没过，教练终于忍不住对我说：“你是不是怕考过了买不起车？”<br/><br/></p>', '2016-05-30 09:13:34', '钱钟书', '0', '0', null);
INSERT INTO `hs_joke` VALUES ('26', '大卫科波威尔', '/Public/Uploads/2016-05-29/574a5dd331975.jpg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> <br/>5、小刘愁眉苦脸的说：“我们家生了俩了，结果媳妇儿又怀孕了，可咋办呀。”<br/>老王热心的宽慰他：“小事儿，报我名字，我这还有一个名额呢！”<br/><br/></p>', '2016-05-30 08:53:52', '查尔斯·狄更斯', '0', '3', null);
INSERT INTO `hs_joke` VALUES ('27', '假如给我三天光明', '/Public/Uploads/2016-05-29/574a5dae44aa2.jpeg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 1、据不完全统计，本次统计不完全。<br/><br/>2、谁能想到，USA的邻居居然是USB。<br/><br/>3、游戏输了肯定是队友不行。如果队友厉害，没有我也能赢。<br/><br/>4、人们从历史中学到的唯一教训就是：人们从不吸取历史教训！<br/><br/>5、“为什么我国这么多gay？”<br/>“因为人口基数大”<br/><br/></p>', '2016-05-30 09:14:36', '海伦', '0', '1', null);
INSERT INTO `hs_joke` VALUES ('28', '格林童话', '/Public/Uploads/2016-05-29/574a5d865f5e1.jpeg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 、富翁要快不行了，把三个儿子叫到床前，老头儿：儿子们，我快不行了，但是我有一大笔遗产，你们三个每人去买些东西把这个房间填满，到时候谁填的又快又满，我的遗产就留给谁。<br/>大儿子买了一大堆废报纸，老富翁叹了口气。。<br/>二儿子买了一大堆棉花，老富翁又叹了口气。。<br/>这时，三儿子回来了，鼓捣了一会儿，掏出了新买的打火机。。。<br/>老富翁：果然是我的好儿子。。我的遗产就是你的了。<br/>大儿子：恭喜三弟恭喜三弟！！<br/>二儿子：老三真棒老三真棒！！<br/>老富翁、大儿子、二儿子：老三，你现在可以把煤气关了不。。。</p>', '2016-05-30 09:16:46', '格林', '0', '1', null);
INSERT INTO `hs_joke` VALUES ('29', '一千零一夜', '/Public/Uploads/2016-05-29/574a5d7840d99.jpeg', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0056.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0069.gif\"/> 家里还没有电视那会，我总是站在别人家门口看动画片，老妈看在眼里，终于有一天她跟老爸商量道：“儿子整天站在别人家门口看电视多累啊！再苦也不能苦孩子啊！”<br/>我听得那个激动呀！<br/>老妈接着说：“不如帮儿子买张小塑料凳吧！轻巧方便携带！”<br/><br/></p>', '2016-05-30 09:16:10', '安徒生', '0', '0', null);

-- ----------------------------
-- Table structure for hs_joke_talk
-- ----------------------------
DROP TABLE IF EXISTS `hs_joke_talk`;
CREATE TABLE `hs_joke_talk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `joke_id` int(10) NOT NULL,
  `talk` text,
  `talk_time` datetime DEFAULT NULL,
  `joke_author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_joke_talk
-- ----------------------------
INSERT INTO `hs_joke_talk` VALUES ('1', '24', '<p><img style=\"width: 240px; height: 123px;\" alt=\"a79c30700a4734122dae413b952deed8.gif\" src=\"/Public/Uploads/image/20160528/1464438448109442.gif\" title=\"1464438448109442.gif\" height=\"123\" width=\"240\"/></p>', '2016-05-28 20:27:39', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('3', '8', '<p>好几顿饭<br/></p>', '2016-05-28 19:46:26', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('4', '9', '<p>好几顿饭<br/></p>', '2016-05-28 19:46:26', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('5', '11', '<p>好好<br/></p>', '2016-05-28 19:47:09', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('6', '16', '<p>好好<br/></p>', '2016-05-28 19:47:09', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('7', '18', '<p>TT<img src=\"http://img.baidu.com/hi/jx2/j_0024.gif\"/></p>', '2016-05-28 19:48:51', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('8', '19', '<p>TT<img src=\"http://img.baidu.com/hi/jx2/j_0024.gif\"/></p>', '2016-05-28 19:48:51', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('9', '20', '<p>GG <br/></p>', '2016-05-28 19:49:32', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('10', '21', '<p>GG <br/></p>', '2016-05-28 19:49:32', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('11', '27', '<p>今天真好<br/></p>', '2016-05-28 20:31:28', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('12', '22', '<p>RR<br/></p>', '2016-05-28 19:52:05', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('13', '26', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0001.gif\"/></p>', '2016-05-28 20:29:13', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('14', '23', '<p>方法<br/></p>', '2016-05-28 20:15:37', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('21', '26', '<p>喜欢你<img src=\"http://img.baidu.com/hi/jx2/j_0014.gif\"/></p>', '2016-05-29 12:54:49', '匿名');
INSERT INTO `hs_joke_talk` VALUES ('22', '26', '<p>你好<br/></p>', '2016-05-30 09:37:33', '匿名');

-- ----------------------------
-- Table structure for hs_order
-- ----------------------------
DROP TABLE IF EXISTS `hs_order`;
CREATE TABLE `hs_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ordernum` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `tel` char(11) NOT NULL,
  `allprice` decimal(7,2) NOT NULL DEFAULT '0.00',
  `ostate` tinyint(4) NOT NULL DEFAULT '0',
  `address` varchar(600) NOT NULL DEFAULT '',
  `ordertime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordernum` (`ordernum`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_order
-- ----------------------------
INSERT INTO `hs_order` VALUES ('1', '14', '1464164747', '黄丹', '18962180537', '24.00', '3', '山东省烟台市莱阳市西卡都是看哈', '2016-05-25 16:25:47');
INSERT INTO `hs_order` VALUES ('2', '18', '1464270148', '', '', '3996.00', '1', '', '2016-05-26 21:42:28');
INSERT INTO `hs_order` VALUES ('4', '19', '1464273176', '黄丹', '18962180537', '2464.00', '3', '澳门澳门市区', '2016-05-26 22:32:56');
INSERT INTO `hs_order` VALUES ('5', '10', '1464573386', 'qq', '1896218053', '2997.00', '3', '维吾尔喀什地区喀什市啊啊啊啊啊啊啊', '2016-05-30 09:56:26');

-- ----------------------------
-- Table structure for hs_order_address
-- ----------------------------
DROP TABLE IF EXISTS `hs_order_address`;
CREATE TABLE `hs_order_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oname` varchar(255) NOT NULL,
  `tel` char(11) NOT NULL,
  `address` varchar(600) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL,
  `default` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_order_address
-- ----------------------------
INSERT INTO `hs_order_address` VALUES ('1', '黄丹', '18962180537', '山东省烟台市莱阳市西卡都是看哈', '14', '0');
INSERT INTO `hs_order_address` VALUES ('2', '小王', '111111111', '山东省东营市广饶县水电费广东省', '14', '1');
INSERT INTO `hs_order_address` VALUES ('3', '黄丹', '18962180537', '澳门澳门市区', '19', '0');
INSERT INTO `hs_order_address` VALUES ('7', '黄丹丹', '18962180537', '安徽省蚌埠市淮上区街道', '10', '1');
INSERT INTO `hs_order_address` VALUES ('8', '黄丹丹', '1896218053', '澳门澳门市区', '10', '1');
INSERT INTO `hs_order_address` VALUES ('9', 'qq', '1896218053', '维吾尔喀什地区喀什市啊啊啊啊啊啊啊', '10', '0');

-- ----------------------------
-- Table structure for hs_order_goods
-- ----------------------------
DROP TABLE IF EXISTS `hs_order_goods`;
CREATE TABLE `hs_order_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `qty` int(10) unsigned NOT NULL DEFAULT '1',
  `gpic` varchar(255) DEFAULT NULL,
  `gname` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `ordernum` int(11) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_order_goods
-- ----------------------------
INSERT INTO `hs_order_goods` VALUES ('1', '6', '12.00', '2', '/Public/Uploads/2016-05-25/57454ac81e4b9.jpg', 'dhhh', '1', null, '14');
INSERT INTO `hs_order_goods` VALUES ('2', '18', '999.00', '4', '/Public/Uploads/2016-05-17/573ab2db94c5f.jpg', '花花世界', '2', null, '18');
INSERT INTO `hs_order_goods` VALUES ('3', '1', '899.00', '2', '/Public/Uploads/2016-05-26/57466be539387.jpg', '水晶之恋', '4', '1464273176', '19');
INSERT INTO `hs_order_goods` VALUES ('4', '3', '666.00', '1', '/Public/Uploads/2016-05-26/57466c031ab3f.jpg', '花莎', '4', '1464273176', '19');
INSERT INTO `hs_order_goods` VALUES ('5', '2', '999.00', '3', '/Public/Uploads/2016-05-27/5747f9244c4b4.jpeg', '巴黎恋人', '5', '1464573386', '10');

-- ----------------------------
-- Table structure for hs_portrait
-- ----------------------------
DROP TABLE IF EXISTS `hs_portrait`;
CREATE TABLE `hs_portrait` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `udefault` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_portrait
-- ----------------------------

-- ----------------------------
-- Table structure for hs_recommend
-- ----------------------------
DROP TABLE IF EXISTS `hs_recommend`;
CREATE TABLE `hs_recommend` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `r_title` varchar(255) DEFAULT NULL,
  `r_pic` varchar(255) DEFAULT NULL,
  `r_msg` text,
  `rtime` datetime DEFAULT NULL,
  `rintro` text,
  `raddress` varchar(255) DEFAULT NULL,
  `rphone` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_recommend
-- ----------------------------
INSERT INTO `hs_recommend` VALUES ('1', '梦幻星河', '/Public/Uploads/2016-05-24/57443a8676417.jpg', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160524/1464100071126530.jpg&quot; title=&quot;1464100071126530.jpg&quot; alt=&quot;xk5.jpg&quot; width=&quot;1006&quot; height=&quot;645&quot; style=&quot;width: 1006px; height: 645px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;渴望一场难忘的,梦幻的,具备科技情怀的独特婚礼吗?&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;这里有你所想,专业团队根据私人要求进行定制婚礼,保证满意用户的要求,给您一场终生难忘的梦幻星辰的婚礼&lt;br/&gt;&lt;/p&gt;', '2016-05-24 22:28:01', '主打梦幻星辰主题的婚礼,具备优秀的策划能力', '上海市闸北区', '13777777777');
INSERT INTO `hs_recommend` VALUES ('2', '浪漫爱琴海', '/Public/Uploads/2016-05-24/57443b2f7270e.jpg', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;img src=&quot;/Public/Uploads/image/20160524/1464089348481654.jpg&quot; title=&quot;1464089348481654.jpg&quot; alt=&quot;4.jpg&quot; width=&quot;1010&quot; height=&quot;523&quot; style=&quot;width: 1010px; height: 523px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;根据您的需求,为您提供专业的推荐,完成您终身难忘的婚礼&lt;br/&gt;&lt;/p&gt;', '2016-05-24 19:30:23', '以柏拉图式的爱情,根据希腊神话爱情故事为背景,打造专属独特的婚礼', '上海市闸北', '13666666666');
INSERT INTO `hs_recommend` VALUES ('3', '疯狂动物城', '/Public/Uploads/2016-05-27/5747e60b39387.jpg', '<p><embed src=\"http://player.youku.com/player.php/sid/XMTU4NTc2NDUzNg==/v.swf\" allowfullscreen=\"true\" quality=\"high\" width=\"1080\" height=\"600\" align=\"middle\" allowscriptaccess=\"always\" type=\"application/x-shockwave-flash\"/></p>', '2016-05-27 14:15:39', '打造童话般的美好故事', '上海市闸北区', '13555555555');

-- ----------------------------
-- Table structure for hs_recommendmsg
-- ----------------------------
DROP TABLE IF EXISTS `hs_recommendmsg`;
CREATE TABLE `hs_recommendmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recomid` int(11) DEFAULT NULL,
  `rcompany` varchar(255) DEFAULT NULL,
  `recommsg` text,
  `rmsgtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_recommendmsg
-- ----------------------------
INSERT INTO `hs_recommendmsg` VALUES ('31', '2', '浪漫爱琴海', '梦里的风景,展现在了现实中!Perfect!<img src=\"/Public/Home/jQQlyb/images/liwu_thumb.gif\" title=\"[礼物]\">', '2016-05-26 15:30:16');
INSERT INTO `hs_recommendmsg` VALUES ('32', '2', '浪漫爱琴海', '<img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\">', '2016-05-26 15:36:44');
INSERT INTO `hs_recommendmsg` VALUES ('33', '2', '浪漫爱琴海', '<img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\"><img src=\"http://mingmen.cn/Public/Home/jQQlyb/images/tootha_thumb.gif\" title=\"嘻嘻]\" style=\"line-height: 21.6px;\">', '2016-05-26 15:42:22');
INSERT INTO `hs_recommendmsg` VALUES ('34', '1', '梦幻星河', '梦中的婚礼!梦幻而美丽!<img src=\"/Public/Home/jQQlyb/images/geili_thumb.gif\" title=\"[给力]\">', '2016-05-26 15:45:15');
INSERT INTO `hs_recommendmsg` VALUES ('35', '2', '浪漫爱琴海', '苏打水<img src=\"/Public/Home/jQQlyb/images/heia_thumb.gif\" title=\"[偷笑]\">', '2016-05-26 22:16:40');
INSERT INTO `hs_recommendmsg` VALUES ('36', '2', '浪漫爱琴海', '大', '2016-05-26 22:59:25');
INSERT INTO `hs_recommendmsg` VALUES ('37', '2', '浪漫爱琴海', '松德股份', '2016-05-26 22:59:29');
INSERT INTO `hs_recommendmsg` VALUES ('38', '2', '浪漫爱琴海', '松德股份', '2016-05-26 22:59:31');
INSERT INTO `hs_recommendmsg` VALUES ('39', '3', '疯狂动物城', '幽默风趣,每种动物形象各有特色,还有小兔子为了梦想永不言败的精神更令人感动<img src=\"/Public/Home/jQQlyb/images/rabbit_thumb.gif\" title=\"兔子]\">', '2016-05-27 15:23:21');
INSERT INTO `hs_recommendmsg` VALUES ('40', '3', '疯狂动物城', '感动常在', '2016-05-27 15:23:32');
INSERT INTO `hs_recommendmsg` VALUES ('41', '3', '疯狂动物城', '很好的公司,有个性,有趣味<img src=\"/Public/Home/jQQlyb/images/mb_thumb.gif\" title=\"[太开心]\">', '2016-05-27 15:25:00');
INSERT INTO `hs_recommendmsg` VALUES ('42', '1', null, '的话说', '2016-05-30 10:31:28');

-- ----------------------------
-- Table structure for hs_resume
-- ----------------------------
DROP TABLE IF EXISTS `hs_resume`;
CREATE TABLE `hs_resume` (
  `rid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resume_name` varchar(255) DEFAULT NULL,
  `resume_birth` datetime DEFAULT NULL,
  `resume_sex` tinyint(4) DEFAULT '2',
  `resume_wid` int(11) DEFAULT NULL,
  `resume_work` varchar(255) DEFAULT NULL,
  `resume_phone` char(11) DEFAULT NULL,
  `resume_email` varchar(255) DEFAULT NULL,
  `resume_intro` varchar(255) DEFAULT NULL,
  `resume_address` varchar(255) DEFAULT NULL,
  `restime` datetime DEFAULT NULL,
  `resume_pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `resume_name` (`resume_name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_resume
-- ----------------------------
INSERT INTO `hs_resume` VALUES ('1', '勇士', '2016-05-03 00:00:00', '0', '1', '首席摄影师', '13333333333', '1111@qq.com', '诚挚加入你们', '浙江省-杭州市-淳安县', '2016-05-24 18:28:24', '/Public/Uploads/2016-05-24/5744382a22551.jpg');
INSERT INTO `hs_resume` VALUES ('2', '妮萨', '2016-05-01 00:00:00', '0', '2', '摄影师助理', '13333333333', '1111@qq.com', '丽萨的玫瑰嫁衣', '山东省-枣庄市-峄城区', '2016-05-24 18:38:03', '/Public/Uploads/2016-05-24/57443836a7d8c.jpg');
INSERT INTO `hs_resume` VALUES ('4', '想你', '1994-05-10 00:00:00', '1', '1', '首席摄影师', '13333333333', '1111@qq.com', '想你的夜,在无数的深夜里对你的无数思念幻化成的泡沫', '安徽省-蚌埠市-淮上区', '2016-05-25 14:09:08', '/Public/Uploads/2016-05-25/57454184a037a.jpg');
INSERT INTO `hs_resume` VALUES ('6', '黄丹', '1994-05-02 00:00:00', '0', '2', '摄影师助理', '13333333333', '1111@qq.com', '在这里工作是我的', '澳门-澳门-市区', '2016-05-25 20:00:43', '/Public/Uploads/2016-05-25/574593eb66ff3.jpg');
INSERT INTO `hs_resume` VALUES ('7', '航公', '1994-01-16 00:00:00', '1', '1', '首席摄影师', '13333333333', '1111@qq.com', '诚挚的加入您的公司!', '黑龙江省-鸡西市-密山市', '2016-05-26 10:28:10', '/Public/Uploads/2016-05-26/57465f3a487ab.jpg');
INSERT INTO `hs_resume` VALUES ('8', '不知道', '1993-05-10 00:00:00', '1', '1', '首席摄影师', '13333333333', '1111@qq.com', '撒旦撒大声大声道', '安徽省-蚌埠市-淮上区', '2016-05-26 14:37:42', '/Public/Uploads/2016-05-26/574699b707a12.jpg');
INSERT INTO `hs_resume` VALUES ('14', '黄丹但', '2016-05-10 00:00:00', '0', '2', '摄影师助理', '18962180537', '1185@qq.com', '的发生的骄傲和你的', '澳门-澳门-市区', '2016-05-26 22:50:35', '/Public/Uploads/2016-05-26/57470d3bda435.jpg');
INSERT INTO `hs_resume` VALUES ('15', '黄丹丹', '2016-05-16 00:00:00', '0', '2', '摄影师助理', '18962180537', '111@qq.com', '1', '山东省-东营市-垦利县', '2016-05-26 22:54:26', '/Public/Uploads/2016-05-26/57470e22a93d6.jpg');
INSERT INTO `hs_resume` VALUES ('16', '大好机会', '0000-00-00 00:00:00', '0', '2', '摄影师助理', '18962180537', '111@qq.com', '', '', '2016-05-26 22:55:19', null);
INSERT INTO `hs_resume` VALUES ('17', '', '0000-00-00 00:00:00', '1', '1', null, '18962180537', '111@qq.com', '', '', '2016-05-27 17:20:29', null);
INSERT INTO `hs_resume` VALUES ('19', '黄丹但子', '2016-05-11 00:00:00', '0', '1', null, '18962180537', '1185@qq.com', '111', '山东省-威海市-文登区', '2016-05-30 10:31:03', '/Public/Uploads/2016-05-30/574ba5e70f933.jpg');

-- ----------------------------
-- Table structure for hs_suggestion
-- ----------------------------
DROP TABLE IF EXISTS `hs_suggestion`;
CREATE TABLE `hs_suggestion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `smsg` varchar(255) DEFAULT NULL,
  `stime` datetime DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_suggestion
-- ----------------------------
INSERT INTO `hs_suggestion` VALUES ('1', '1', 'dfsfdafdsa', '2016-05-18 18:25:46', null);
INSERT INTO `hs_suggestion` VALUES ('2', '10', '<p>高科技和空间<img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/></p>', '2016-05-27 17:19:11', 'user');
INSERT INTO `hs_suggestion` VALUES ('3', '10', '<p>打个麻将<img src=\"http://img.baidu.com/hi/jx2/j_0019.gif\"/></p>', '2016-05-27 17:19:34', 'user');
INSERT INTO `hs_suggestion` VALUES ('4', '10', '<p>你好<br/></p>', '2016-05-30 09:39:02', 'user');

-- ----------------------------
-- Table structure for hs_think_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `hs_think_auth_group`;
CREATE TABLE `hs_think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_think_auth_group
-- ----------------------------
INSERT INTO `hs_think_auth_group` VALUES ('3', 'big boss', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21');
INSERT INTO `hs_think_auth_group` VALUES ('2', '管理员查看组', '1', '1,9,11,13,14,19');
INSERT INTO `hs_think_auth_group` VALUES ('1', '用户增删改查组', '1', '1,2,3,4,5,6,7,8,9');

-- ----------------------------
-- Table structure for hs_think_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `hs_think_auth_group_access`;
CREATE TABLE `hs_think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_think_auth_group_access
-- ----------------------------
INSERT INTO `hs_think_auth_group_access` VALUES ('1', '3');
INSERT INTO `hs_think_auth_group_access` VALUES ('30', '1');
INSERT INTO `hs_think_auth_group_access` VALUES ('31', '1');
INSERT INTO `hs_think_auth_group_access` VALUES ('32', '1');
INSERT INTO `hs_think_auth_group_access` VALUES ('34', '1');
INSERT INTO `hs_think_auth_group_access` VALUES ('35', '1');
INSERT INTO `hs_think_auth_group_access` VALUES ('38', '1');
INSERT INTO `hs_think_auth_group_access` VALUES ('39', '1');
INSERT INTO `hs_think_auth_group_access` VALUES ('40', '3');

-- ----------------------------
-- Table structure for hs_think_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `hs_think_auth_rule`;
CREATE TABLE `hs_think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_think_auth_rule
-- ----------------------------
INSERT INTO `hs_think_auth_rule` VALUES ('1', 'Admin/Index/index', '后台首页', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('3', 'Admin/User/add', '后台用户添加', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('4', 'Admin/User/save', '后台用户修改', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('2', 'Admin/User/index', '后台用户列表', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('5', 'Admin/User/ajaxdel', '后台用户删除', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('9', 'Admin/Login/index', '后台管理员登录', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('11', 'Admin/Adminuser/index', '后台管理员列表', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('12', 'Admin/Adminuser/add', '后台管理员添加', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('13', 'Admin/Adminuser/save', '后台管理员修改', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('14', 'Admin/Adminuser/ajaxdel', '后台管理员删除', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('15', 'Admin/Thinkauthrule/index', '后台规则列表', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('16', 'Admin/Thinkauthrule/add', '后台规则添加', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('17', 'Admin/Thinkauthrule/save', '后台规则修改', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('18', 'Admin/Thinkauthrule/ajaxdel', '后台规则删除', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('6', 'Admin/User/insert', '后台用户插入', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('7', 'Admin/User/update', '后台用户刷新', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('8', 'Admin/User/ajaxedit', '后台用户双击修改', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('10', 'Admin/Adminuser/insert', '后台管理员插入', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('19', 'Admin/Adminuser/update', '后台管理更新', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('20', 'Admin/Thinkauthrule/insert', '后台规则插入', '1', '1', '');
INSERT INTO `hs_think_auth_rule` VALUES ('21', 'Admin/Thinkauthrule/update', '后台规则更新', '1', '1', '');

-- ----------------------------
-- Table structure for hs_user
-- ----------------------------
DROP TABLE IF EXISTS `hs_user`;
CREATE TABLE `hs_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `pwd` char(32) NOT NULL,
  `tel` char(11) NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '2',
  `email` varchar(255) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hs_user
-- ----------------------------
INSERT INTO `hs_user` VALUES ('5', 'huang4', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '2', '1185724179@qq.com', '/Public/Uploads/2016-05-18/573c4c01d359f.jpg', 'eraeda', '1');
INSERT INTO `hs_user` VALUES ('9', 'user1', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '1', '1185724179@qq.com', '/Public/Uploads/2016-05-18/573bf259857fb.jpg', '11', '1');
INSERT INTO `hs_user` VALUES ('10', 'user', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '1', '1185724179@qq.com', '/Public/Uploads/2016-05-24/5743e1a61d7a6.jpg', 'fghjk', '0');
INSERT INTO `hs_user` VALUES ('11', 'user2', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '1', '1185724179@qq.com', '/Public/Uploads/2016-05-24/5743e1cbbe3c8.gif', '', '1');
INSERT INTO `hs_user` VALUES ('12', 'user3', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '1', '1185724179@qq.com', '/Public/Uploads/2016-05-24/5743e3f8a24ad.jpg', '1231', '1');
INSERT INTO `hs_user` VALUES ('13', 'tiantian', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '1', '1185724179@qq.com', '/Public/Uploads/2016-05-24/574426824a21b.jpg', 'edsad', '1');
INSERT INTO `hs_user` VALUES ('14', 'huangdan', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '2', '1185724179@qq.com', '/Public/Uploads/2016-05-25/574534a9485cb.gif', 'dssad', '1');
INSERT INTO `hs_user` VALUES ('15', 'yushuncheng', 'e10adc3949ba59abbe56e057f20f883e', '', '2', '', null, null, null);
INSERT INTO `hs_user` VALUES ('16', 'liwenhui', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '1', '1185724179@qq.com', '/Public/Uploads/2016-05-25/5745968707343.jpg', 'woaiwan', '0,1,2');
INSERT INTO `hs_user` VALUES ('17', 'zzys', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '2', '1185724179@qq.com', '/Public/Uploads/2016-05-26/57464de20f217.jpg', 'hjj', '1');
INSERT INTO `hs_user` VALUES ('18', 'ddww', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '2', '1185724179@qq.com', null, null, null);
INSERT INTO `hs_user` VALUES ('19', 'test', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '0', '1185724179@qq.com', '/Public/Uploads/2016-05-26/57470a0a44e80.jpg', '', null);
INSERT INTO `hs_user` VALUES ('23', 'huangdandan', 'e10adc3949ba59abbe56e057f20f883e', '18962180537', '2', '1185724179@qq.com', null, null, null);
