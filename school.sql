/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.1.40-MariaDB : Database - school
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`school` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `school`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`) values 
(2,'rifqi','12345');

/*Table structure for table `data_siswa` */

DROP TABLE IF EXISTS `data_siswa`;

CREATE TABLE `data_siswa` (
  `nis` int(10) NOT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_siswa` */

insert  into `data_siswa`(`nis`,`nama_siswa`,`jk`,`alamat`,`ttl`,`nama_ayah`,`nama_ibu`) values 
(111,'iiz','P','Cilengkrang Girang','Cirebon 23 februari 1995','sukiman','siti'),
(1234,'Muhammad Rifqi Fauzan','L','Cilengkrang','Cirebon 12 april 1999','kiboy','martinah'),
(11111,'dadang','L','cilengkrang','Cirebon 12 mei 1995','idi','eti'),
(12345,'Siti Fatonah','','Babakan','Cirebon 14 februari 1998','rif','junengsih');

/*Table structure for table `penilaian` */

DROP TABLE IF EXISTS `penilaian`;

CREATE TABLE `penilaian` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nis` int(10) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `kd_mapel` int(10) DEFAULT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL,
  `nilai_uts` int(10) DEFAULT NULL,
  `nilai_uas` int(10) DEFAULT NULL,
  `hasil_akhir` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nis` (`nis`),
  CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `data_siswa` (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `penilaian` */

insert  into `penilaian`(`id`,`nis`,`nama_siswa`,`kd_mapel`,`nama_mapel`,`nilai_uts`,`nilai_uas`,`hasil_akhir`) values 
(5,1234,'Muhammad Rifqi Fauzan',3,'Matematika',90,100,95),
(6,12345,'Siti Fatonah',3,'Matematika',80,90,85),
(7,1234,'Muhmad Rifqi Fauzan',4,'Bahasa Indonesia',80,70,75),
(8,11111,'dadang',3,'Matematika',50,70,60);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_usr` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_usr`,`username`,`password`) values 
(1,'ripki10','12345');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
