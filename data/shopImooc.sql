CREAT DATABASE IF NOT EXISTS `shopImooc`;
USE `shopImooc`;

/*管理员表*/
DROP TABLE IF EXISTS `imooc_admin`;
CREATE TABLE `imooc_admin`(
`id` tinyint unsigned auto_increment key,
`username` varchar(20) not null unique,
`password` varchar(32) not null,
`email` varchar(60) not null
); 

/*分类表*/
DROP TABLE IF EXISTS `imooc_cate`;
CREATE TABLE `imooc_cate`(
`id` int unsigned auto_increment key,
`cName` varchar(60) not null unique
);

/*商品表*/
DROP TABLE IF EXISTS `imooc_pro`;
CREATE TABLE `imooc_pro`(
`id` smallint unsigned auto_increment key,
`pName` varchar(50) not null unique,
`pSn` varchar(50) not null,
`pNum` int unsigned not null default 1,
`mPrice` decimal(10,2) not null,
`iPrice` decimal(10,2) not null,
`pDesc` mediumtext,
`pubTime` int unsigned not null,
`isShow` tinyint(1) not null default 1,
`isHot` tinyint(1) not null default 0,
`cId` int unsigned not null 
);

/*用户表*/
DROP TABLE IF EXISTS `imooc_user`;
CREATE TABLE `imooc_user`(
`id` int unsigned auto_increment key,
`username` varchar(30) not null unique,
`password` varchar(32) not null,
`sex` enum("male","female","secret") not null,
`email` varchar(60) not null,
`face` varchar(50) not null,
`regTime` varchar(20) not null,
`activeFlag` tinyint(1) not null default 0
);

/*相册表*/
DROP TABLE IF EXISTS `imooc_album`;
CREATE TABLE `imooc_album`(
`id` int unsigned auto_increment key,
`pId` int unsigned not null,
`albumPath` varchar(255) not null
);
/*订单表*/
DROP TABLE IF EXISTS `imooc_indent`;
CREATE TABLE `imooc_indent`(
`id` int unsigned auto_increment key,
`uId` tinyint unsigned not null,
`active` tinyint(1) not null default 0,
`indentTime` varchar(20) not null,
`indentMon` decimal(10,2) not null
);
/*订单商品表*/
DROP TABLE IF EXISTS `imooc_indent_pro`;
CREATE TABLE `imooc_indent_pro`(
`id` int unsigned auto_increment key,
`indentId` int unsigned not null,
`pId` smallint unsigned not null,
`count` smallint unsigned not null
);

/*创建一个管理员hengwen，密码也是hengwen*/
insert into imooc_admin(username,password,email) values('hengwen','a68e4cd1d7aef80d7db37f7735ac230d','hengweno@163.com');





