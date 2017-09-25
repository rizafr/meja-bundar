# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.49)
# Database: db_meja-bundar
# Generation Time: 2017-09-25 14:03:56 +0000
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

LOCK TABLES `portfolioItems` WRITE;
/*!40000 ALTER TABLE `portfolioItems` DISABLE KEYS */;

INSERT INTO `portfolioItems` (`id`, `pictureUrl`, `title`, `portfolioId`, `token`, `createdTime`)
VALUES
	(1,'portfolio-images/b.png','b.png',4,'0.8844842291278265','2017-08-17 18:46:11'),
	(2,'portfolio-images/a.png','a.png',3,'0.5834338813769302','2017-08-17 18:46:11'),
	(3,'portfolio-images/c.png','c.png',3,'0.41105901627042507','2017-08-17 18:46:11'),
	(4,'portfolio-images/d.png','d.png',4,'0.8196674113612381','2017-08-17 18:46:11'),
	(5,'portfolio-images/e.png','e.png',4,'0.28445666648690615','2017-08-17 18:46:12'),
	(6,'portfolio-images/e1.png','e1.png',4,'0.5994789032190384','2017-08-17 18:46:33'),
	(7,'portfolio-images/e2.png','e2.png',3,'0.4471709570483917','2017-08-17 18:54:38'),
	(8,'portfolio-images/Screenshot_from_2017-08-17_22-38-21.png','Screenshot_from_2017-08-17_22-38-21.png',4,'0.2086353744373599','2017-08-18 08:38:17'),
	(9,'portfolio-images/Screenshot_from_2017-08-17_20-47-41.png','Screenshot_from_2017-08-17_20-47-41.png',4,'0.3483959731863304','2017-08-18 08:38:32'),
	(12,'portfolio-images/a1.png','a1.png',4,'0.9216535748193542','2017-08-21 21:02:26'),
	(13,'portfolio-images/c1.png','c1.png',4,'0.6498802875943304','2017-08-21 21:02:26'),
	(14,'portfolio-images/d1.png','d1.png',4,'0.8344417247573512','2017-08-21 21:02:26'),
	(15,'portfolio-images/e3.png','e3.png',4,'0.8487521855511955','2017-08-21 21:02:26'),
	(16,'portfolio-images/f.png','f.png',4,'0.5875404211020769','2017-08-21 21:02:26'),
	(17,'portfolio-images/2.png','2.png',6,'0.20842346321821603','2017-09-17 14:07:56'),
	(18,'portfolio-images/1.png','1.png',6,'0.05354478754622494','2017-09-17 14:07:56'),
	(19,'portfolio-images/3.png','3.png',6,'0.5170201840197646','2017-09-17 14:07:57'),
	(20,'portfolio-images/4.png','4.png',6,'0.35102355506611893','2017-09-17 14:07:57'),
	(21,'portfolio-images/5.png','5.png',6,'0.8230582469400529','2017-09-17 14:07:57'),
	(22,'portfolio-images/6.png','6.png',6,'0.7272145458842671','2017-09-17 14:07:57');

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
  `category` varchar(255) DEFAULT NULL,
  `clientName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

LOCK TABLES `portfolios` WRITE;
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;

INSERT INTO `portfolios` (`id`, `title`, `subTitle`, `overview`, `publishedTime`, `role`, `linkUrl`, `youtubeUrlId`, `createdTime`, `updatedTime`, `createdBy`, `updatedBy`, `isRemoved`, `category`, `clientName`)
VALUES
	(1,'Lookfest 2016','Lala','<h3> Adventure of Sound </h3>\n<p>\n	A visual mapping stage we have created\n</p>\n','2016-10-10','Visual Mapping','instagram Web','XGSy3_Czz8k',NULL,NULL,NULL,NULL,0,'visual',NULL),
	(3,'Lookfest 2017','Lala','<h3> Adventure of Sound </h3>\n<p>\n A visual mapping stage we have created\n</p>\n','2017-09-25','Bumper','http://fancybox.net/howto','XGSy3_Czz8k',NULL,'2017-09-25 20:58:33',NULL,'admin',0,NULL,'LookAt'),
	(4,'lala','lala','lala\n','0000-00-00','berita,gambar,baba ,kaka ','lala','','2017-08-17 18:28:22','2017-08-31 23:28:57','admin','admin',0,NULL,NULL),
	(6,'lala','lala','lala\n','2017-09-17','berita,gambar,baba ,kaka ','lala','','2017-08-17 18:28:22','2017-09-17 14:07:59','admin','admin',0,NULL,'Look You'),
	(8,'Lookfest 2016','Lala','<h3> Adventure of Sound </h3>\n<p>\n A visual mapping stage we have created\n</p>\n','2016-10-25','Visual Mapping','instagram Web','XGSy3_Czz8k',NULL,'2017-09-17 13:58:44',NULL,'admin',0,'visual',''),
	(9,'lala','lala','lala\n','2017-09-23','berita,gambar,baba ,kaka ','lala','','2017-08-17 18:28:22','2017-09-17 13:57:51','admin','admin',0,NULL,'Lookats Project');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
