/*
Navicat MySQL Data Transfer

Source Server         : p53
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2017-07-03 18:15:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'sss', '123456', '2017-6-11');

-- ----------------------------
-- Table structure for `blog_admin`
-- ----------------------------
DROP TABLE IF EXISTS `blog_admin`;
CREATE TABLE `blog_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_admin
-- ----------------------------
INSERT INTO `blog_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for `blog_article`
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) NOT NULL,
  `article_image` varchar(255) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('31', '中江丹参', '/thinkphp_5.0/public/upload/20170703\\f9422f32a370febda44aee35486551a4.gif');
INSERT INTO `blog_article` VALUES ('28', '中江八宝油糕', '/thinkphp_5.0/public/upload/20170703\\6d4cabb78acb2667fa118a7cd26504c6.gif');
INSERT INTO `blog_article` VALUES ('29', '中江柚', '/thinkphp_5.0/public/upload/20170703\\4101d1687270d7f93ec3035a484f56d3.gif');
INSERT INTO `blog_article` VALUES ('30', '中江竹编', '/thinkphp_5.0/public/upload/20170703\\20ef4ef96d2f9d63f16c1f2059f1f4de.gif');
INSERT INTO `blog_article` VALUES ('32', '中江白芍', '/thinkphp_5.0/public/upload/20170703\\02bb4b54dad68a40c6b8175e49e63341.gif');
INSERT INTO `blog_article` VALUES ('33', '中江挂面', '/thinkphp_5.0/public/upload/20170703\\4aa115e24369bdd2b1973ad7ced5ec06.gif');

-- ----------------------------
-- Table structure for `blog_base`
-- ----------------------------
DROP TABLE IF EXISTS `blog_base`;
CREATE TABLE `blog_base` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_base
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_become`
-- ----------------------------
DROP TABLE IF EXISTS `blog_become`;
CREATE TABLE `blog_become` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_become
-- ----------------------------
INSERT INTO `blog_become` VALUES ('1', '江县童游街道水尾村赤坭土布自然村人口不到100人，却有个不平凡的致富能手，他叫曹宗成，今年53岁。');
INSERT INTO `blog_become` VALUES ('3', ' 曹宗成致富的故事从1991年开始。当时，他一男一女两个孩子在城里读小学，一年借读费要200元，这对于曹宗成一家来说是笔大数目。曹宗成一家四口人，分得10亩农田，一年收入也在2000元左右。生活的艰辛，逼得曹宗成不得不另谋出路，赤坭土布后山四里处有一片30多亩的荒山，长年无人打理。曹宗成觉得可惜，他主动找到村委会，要求承包这片山。经过多次协商，曹宗成最终以一次性付4200元的价格取得这片山61年经营权。东拼西借，曹宗成终于凑足了这笔钱。');

-- ----------------------------
-- Table structure for `blog_category`
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `listorder` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `update_time` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('2', '0', '哈哈镜', '0', '-1', '1499060893', '1497452464');
INSERT INTO `blog_category` VALUES ('3', '0', '娱乐', '0', '1', '1499060910', '1497496995');
INSERT INTO `blog_category` VALUES ('4', '3', '衣服', '0', '1', '1497497881', '1497497881');
INSERT INTO `blog_category` VALUES ('5', '0', '游戏', '0', '1', '1499060932', '1497508128');
INSERT INTO `blog_category` VALUES ('6', '2', '达大厦', '0', '1', '1497508140', '1497508140');
INSERT INTO `blog_category` VALUES ('7', '2', '大声道', '0', '1', '1497508150', '1497508150');
INSERT INTO `blog_category` VALUES ('8', '0', '服装', '0', '1', '1499060948', '1497508161');
INSERT INTO `blog_category` VALUES ('9', '3', '裤子', '0', '1', '1497514709', '1497508225');
INSERT INTO `blog_category` VALUES ('10', '8', '衣服', '0', '1', '1499060966', '1499060966');
INSERT INTO `blog_category` VALUES ('11', '3', '唱歌', '0', '1', '1499060977', '1499060977');
INSERT INTO `blog_category` VALUES ('12', '0', '运动', '0', '1', '1499060988', '1499060988');
INSERT INTO `blog_category` VALUES ('13', '0', '电竞', '0', '1', '1499061000', '1499061000');
INSERT INTO `blog_category` VALUES ('14', '0', '休闲', '0', '1', '1499061018', '1499061018');

-- ----------------------------
-- Table structure for `blog_inrtoduce`
-- ----------------------------
DROP TABLE IF EXISTS `blog_inrtoduce`;
CREATE TABLE `blog_inrtoduce` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_inrtoduce
-- ----------------------------
INSERT INTO `blog_inrtoduce` VALUES ('1', '宏波养殖实业有限公司', '创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。');
INSERT INTO `blog_inrtoduce` VALUES ('4', '一、养殖业：', '肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。');
INSERT INTO `blog_inrtoduce` VALUES ('5', '二、种植业：', '宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。');

-- ----------------------------
-- Table structure for `blog_introduction`
-- ----------------------------
DROP TABLE IF EXISTS `blog_introduction`;
CREATE TABLE `blog_introduction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) NOT NULL,
  `guige` varchar(255) NOT NULL,
  `chandi` varchar(255) NOT NULL,
  `jiage` varchar(255) NOT NULL,
  `shijian` varchar(255) NOT NULL,
  `tedian` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_introduction
-- ----------------------------
INSERT INTO `blog_introduction` VALUES ('1', '产品类别：	水果及加工品', '产品规格：	4*500G', '产品原产地：中江县', '产品价格：	7500元/吨', '上架时间：9月份', '    中江柚，以独特的风味著称。果大，皮薄，可食比例大。果肉乳白微黄，质地脆嫩化渣，酸甜适度，汁多味美，营养丰富，有止咳，化痰，顺气，平喘的药用功能。中江柚栽植历史悠久，但在漫长的岁月里，由于一般农民未掌握果树嫁接管理的科学技术，故发展缓慢。    1975年柑桔选种，中江柚以它早产性，丰产性，耐贮性、抗逆性等各项指标均超过当地普通柚种，受到果树专家和有关部门重视，列为我县开发农业的重点项目。国家林业部列为全国“八五”百项林产品重点开发科技项目。1986年在全省柚类鉴评会上获唯一的肉质满分。1990', '/zhongjiang/public/upload/20170629\\87fcb7bfc6d10b2e563c885202cce853.jpg');

-- ----------------------------
-- Table structure for `blog_outlook`
-- ----------------------------
DROP TABLE IF EXISTS `blog_outlook`;
CREATE TABLE `blog_outlook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_outlook
-- ----------------------------
INSERT INTO `blog_outlook` VALUES ('1', '2', '/zhongjiang/public/upload/20170629\\3fa3b30bcbb9f455ed9821afcfbc73f5.jpg');

-- ----------------------------
-- Table structure for `blog_productlist`
-- ----------------------------
DROP TABLE IF EXISTS `blog_productlist`;
CREATE TABLE `blog_productlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `univalent` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_productlist
-- ----------------------------

-- ----------------------------
-- Table structure for `blog_technology`
-- ----------------------------
DROP TABLE IF EXISTS `blog_technology`;
CREATE TABLE `blog_technology` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_technology
-- ----------------------------
INSERT INTO `blog_technology` VALUES ('1', '一、中江柚品种特性及发展情况', '    中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易');

-- ----------------------------
-- Table structure for `cegister`
-- ----------------------------
DROP TABLE IF EXISTS `cegister`;
CREATE TABLE `cegister` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `spassword` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cegister
-- ----------------------------
INSERT INTO `cegister` VALUES ('1', 'www', '555', '555', '77@qq.com', 'hp2');
