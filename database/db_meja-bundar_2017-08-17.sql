# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.49)
# Database: db_meja-bundar
# Generation Time: 2017-08-17 11:48:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table level
# ------------------------------------------------------------

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(100) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;

INSERT INTO `level` (`id_level`, `level`)
VALUES
	(1,'Admin');

/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pengguna
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `id_level` int(10) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama`, `jabatan`, `id_level`)
VALUES
	(1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin','Admin',1);

/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolioItems
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolioItems`;

CREATE TABLE `portfolioItems` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pictureUrl` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `portfolioId` int(11) DEFAULT NULL,
  `token` text,
  `createdTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `portfolioItems` WRITE;
/*!40000 ALTER TABLE `portfolioItems` DISABLE KEYS */;

INSERT INTO `portfolioItems` (`id`, `pictureUrl`, `title`, `portfolioId`, `token`, `createdTime`)
VALUES
	(1,'portfolio-images/b.png','b.png',4,'0.8844842291278265','2017-08-17 18:46:11'),
	(2,'portfolio-images/a.png','a.png',4,'0.5834338813769302','2017-08-17 18:46:11'),
	(3,'portfolio-images/c.png','c.png',4,'0.41105901627042507','2017-08-17 18:46:11'),
	(4,'portfolio-images/d.png','d.png',4,'0.8196674113612381','2017-08-17 18:46:11'),
	(5,'portfolio-images/e.png','e.png',4,'0.28445666648690615','2017-08-17 18:46:12'),
	(6,'portfolio-images/e1.png','e1.png',4,'0.5994789032190384','2017-08-17 18:46:33');

/*!40000 ALTER TABLE `portfolioItems` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolios`;

CREATE TABLE `portfolios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `subTitle` varchar(255) DEFAULT NULL,
  `overview` text,
  `publishedTime` date DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `linkUrl` varchar(255) DEFAULT NULL,
  `youtubeUrlId` varchar(255) DEFAULT NULL,
  `createdTime` datetime DEFAULT NULL,
  `updatedTime` timestamp NULL DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `updatedBy` varchar(255) DEFAULT NULL,
  `isRemoved` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;

INSERT INTO `portfolios` (`id`, `title`, `subTitle`, `overview`, `publishedTime`, `role`, `linkUrl`, `youtubeUrlId`, `createdTime`, `updatedTime`, `createdBy`, `updatedBy`, `isRemoved`)
VALUES
	(1,'Lookfest 2016','Lala','<h3> Adventure of Sound </h3>\n<p>\n	A visual mapping stage we have created\n</p>\n','2016-10-10','Visual Mapping, Bumper','instagram Web','XGSy3_Czz8k',NULL,NULL,NULL,NULL,0),
	(3,'Lookfest 2016','Lala','<h3> Adventure of Sound </h3>\n<p>\n	A visual mapping stage we have created\n</p>\n','2016-10-10','Visual Mapping, Bumper','instagram Web','XGSy3_Czz8k',NULL,NULL,NULL,NULL,0),
	(4,'lala','lala','lala\n','0000-00-00','lala','lala','','2017-08-17 18:28:22','2017-08-17 18:46:19','admin','admin',0);

/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tr_instansi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tr_instansi`;

CREATE TABLE `tr_instansi` (
  `id_instansi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(150) NOT NULL,
  `alamat_instansi` text NOT NULL,
  `logo_instansi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_instansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tr_instansi` WRITE;
/*!40000 ALTER TABLE `tr_instansi` DISABLE KEYS */;

INSERT INTO `tr_instansi` (`id_instansi`, `nama_instansi`, `alamat_instansi`, `logo_instansi`)
VALUES
	(1,'Meja Bundar','Jl. Gudang Selatan No.22 A, Bandung, ID','/assets/img/logoajakecil.png');

/*!40000 ALTER TABLE `tr_instansi` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;