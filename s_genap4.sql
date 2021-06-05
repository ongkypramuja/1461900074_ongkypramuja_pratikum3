/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - s_genap4
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`s_genap4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `s_genap4`;

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` char(50) NOT NULL,
  `tahun_terbit` char(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `buku` */

insert  into `buku`(`id`,`judul`,`tahun_terbit`) values 
(1,'Daskomputasi','2021'),
(2,'Daskom Colony','2021'),
(4,'adasdas','111'),
(5,'dwadaw','2020');

/*Table structure for table `jenis_buku` */

DROP TABLE IF EXISTS `jenis_buku`;

CREATE TABLE `jenis_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jenis_buku` */

insert  into `jenis_buku`(`id`,`jenis`) values 
(1,'Teknologi'),
(2,'Sejarah');

/*Table structure for table `rak_buku` */

DROP TABLE IF EXISTS `rak_buku`;

CREATE TABLE `rak_buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_jenis_buku` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_buku` (`id_buku`),
  KEY `id_jenis_buku` (`id_jenis_buku`),
  CONSTRAINT `rak_buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  CONSTRAINT `rak_buku_ibfk_2` FOREIGN KEY (`id_jenis_buku`) REFERENCES `jenis_buku` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rak_buku` */

insert  into `rak_buku`(`id`,`id_buku`,`id_jenis_buku`) values 
(1,2,1),
(2,1,2);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`nama`,`username`,`password`) values 
(1,'Admin','admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
