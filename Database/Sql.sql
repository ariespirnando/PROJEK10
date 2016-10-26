/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.24 : Database - intan_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`intan_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `intan_db`;

/*Table structure for table `tblampiran` */

DROP TABLE IF EXISTS `tblampiran`;

CREATE TABLE `tblampiran` (
  `noPendaftaran` char(15) DEFAULT NULL,
  `KTP` text,
  `KK` text,
  `RekeningPelanggan` text,
  `PBB` text,
  KEY `tblampiran_ibfk_1` (`noPendaftaran`),
  CONSTRAINT `tblampiran_ibfk_1` FOREIGN KEY (`noPendaftaran`) REFERENCES `tbpendaftar` (`noPendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblampiran` */

insert  into `tblampiran`(`noPendaftaran`,`KTP`,`KK`,`RekeningPelanggan`,`PBB`) values ('PDFT10201600001','file_1477377508.png','file_14773775081.png','file_14773775082.png','file_14773775083.png');

/*Table structure for table `tbpelanggan` */

DROP TABLE IF EXISTS `tbpelanggan`;

CREATE TABLE `tbpelanggan` (
  `idPelanggan` char(15) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Alamat` text,
  `Pekerjaan` varchar(15) DEFAULT NULL,
  `noHP` varchar(16) DEFAULT NULL,
  `noTelepon` varchar(16) DEFAULT NULL,
  `Status` enum('Belum Membayar','Sudah Membayar') DEFAULT NULL,
  `createdOn` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbpelanggan` */

insert  into `tbpelanggan`(`idPelanggan`,`Nama`,`Alamat`,`Pekerjaan`,`noHP`,`noTelepon`,`Status`,`createdOn`) values ('PLGN10201600001','Suwondo','Jalan Ikan Tenggiriri','Mahasiswa','087898677708','085669555948','Sudah Membayar','2016-10-25 14:29:15');

/*Table structure for table `tbpendaftar` */

DROP TABLE IF EXISTS `tbpendaftar`;

CREATE TABLE `tbpendaftar` (
  `noPendaftaran` char(15) NOT NULL,
  `idPelanggan` char(15) DEFAULT NULL,
  `NoRumah` char(8) NOT NULL,
  `RT` char(8) NOT NULL,
  `RW` char(8) NOT NULL,
  `KodePos` char(8) NOT NULL,
  `idKelurahan` int(10) NOT NULL,
  `fungsiBangunan` enum('Rumah Tangga','Sosial') NOT NULL,
  `NoRekTetangga` varchar(11) DEFAULT NULL,
  `tanggalDaftar` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`noPendaftaran`),
  KEY `idKelurahan` (`idKelurahan`),
  KEY `tbpendaftar_ibfk_3` (`idPelanggan`),
  CONSTRAINT `tbpendaftar_ibfk_2` FOREIGN KEY (`idKelurahan`) REFERENCES `tbradius` (`idKelurahan`) ON UPDATE CASCADE,
  CONSTRAINT `tbpendaftar_ibfk_3` FOREIGN KEY (`idPelanggan`) REFERENCES `tbpelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbpendaftar` */

insert  into `tbpendaftar`(`noPendaftaran`,`idPelanggan`,`NoRumah`,`RT`,`RW`,`KodePos`,`idKelurahan`,`fungsiBangunan`,`NoRekTetangga`,`tanggalDaftar`) values ('PDFT10201600001','PLGN10201600001','12A','1','1','34519',7,'Sosial','12345','2016-10-25 13:38:28');

/*Table structure for table `tbradius` */

DROP TABLE IF EXISTS `tbradius`;

CREATE TABLE `tbradius` (
  `idKelurahan` int(11) NOT NULL AUTO_INCREMENT,
  `NamaKelurahan` varchar(40) NOT NULL,
  `Radius` char(2) DEFAULT NULL,
  PRIMARY KEY (`idKelurahan`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbradius` */

insert  into `tbradius`(`idKelurahan`,`NamaKelurahan`,`Radius`) values (1,'Sumur Putri','R1'),(2,'Sukarame II / Sukajaya','R1'),(3,'Gotong Royong','R1'),(4,'Keteguhan','R2'),(5,'Kota Karang','R2'),(6,'Kangkung','R2'),(7,'Sukamaju','R3'),(8,'Garuntang','R3'),(9,'Sukajaya','R3'),(10,'Sukabumi Indah','R4'),(11,'Kedaton','R4'),(12,'Sepang Jaya','R4'),(13,'Campak Raya','R5'),(14,'Way Gupak','R5'),(15,'Sukabumi','R5'),(16,'Way Laga','R6'),(17,'Panjang Utara','R6'),(18,'Panjang Selatan','R6');

/*Table structure for table `tbtransaksi` */

DROP TABLE IF EXISTS `tbtransaksi`;

CREATE TABLE `tbtransaksi` (
  `idtransaksi` char(15) NOT NULL,
  `noPendaftaran` char(15) DEFAULT NULL,
  `tanggalPembayaran` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bukti` text,
  `TempatPembayaran` char(11) DEFAULT NULL,
  `JumlahTransaksi` double DEFAULT NULL,
  `atasNama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idtransaksi`),
  KEY `noPendaftaran` (`noPendaftaran`),
  CONSTRAINT `tbtransaksi_ibfk_1` FOREIGN KEY (`noPendaftaran`) REFERENCES `tbpendaftar` (`noPendaftaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbtransaksi` */

insert  into `tbtransaksi`(`idtransaksi`,`noPendaftaran`,`tanggalPembayaran`,`bukti`,`TempatPembayaran`,`JumlahTransaksi`,`atasNama`) values ('TRKS10201600001','PDFT10201600001','2016-10-25 14:29:15','file_1477380555.png','150284983',150000,'achmad aries pirnando');

/*Table structure for table `tbuser` */

DROP TABLE IF EXISTS `tbuser`;

CREATE TABLE `tbuser` (
  `iduser` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` enum('1','2') DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbuser` */

insert  into `tbuser`(`iduser`,`username`,`password`,`time`,`level`) values (10,'Intan','827ccb0eea8a706c4c34a16891f84e7b','2016-10-25 01:22:13','2'),(11,'User','827ccb0eea8a706c4c34a16891f84e7b','2016-10-25 01:26:48','1');

/*Table structure for table `v_pendaftar` */

DROP TABLE IF EXISTS `v_pendaftar`;

/*!50001 DROP VIEW IF EXISTS `v_pendaftar` */;
/*!50001 DROP TABLE IF EXISTS `v_pendaftar` */;

/*!50001 CREATE TABLE  `v_pendaftar`(
 `Alamat` text ,
 `idPelanggan` char(15) ,
 `Nama` varchar(30) ,
 `noHP` varchar(16) ,
 `noTelepon` varchar(16) ,
 `Pekerjaan` varchar(15) ,
 `Status` enum('Belum Membayar','Sudah Membayar') ,
 `fungsiBangunan` enum('Rumah Tangga','Sosial') ,
 `idKelurahan` int(10) ,
 `KodePos` char(8) ,
 `noPendaftaran` char(15) ,
 `NoRekTetangga` varchar(11) ,
 `NoRumah` char(8) ,
 `RT` char(8) ,
 `RW` char(8) ,
 `tanggalDaftar` datetime ,
 `NamaKelurahan` varchar(40) ,
 `Radius` char(2) ,
 `KTP` text ,
 `KK` text ,
 `PBB` text ,
 `RekeningPelanggan` text 
)*/;

/*Table structure for table `v_transaksi` */

DROP TABLE IF EXISTS `v_transaksi`;

/*!50001 DROP VIEW IF EXISTS `v_transaksi` */;
/*!50001 DROP TABLE IF EXISTS `v_transaksi` */;

/*!50001 CREATE TABLE  `v_transaksi`(
 `Alamat` text ,
 `idPelanggan` char(15) ,
 `Nama` varchar(30) ,
 `noHP` varchar(16) ,
 `noTelepon` varchar(16) ,
 `Pekerjaan` varchar(15) ,
 `Status` enum('Belum Membayar','Sudah Membayar') ,
 `fungsiBangunan` enum('Rumah Tangga','Sosial') ,
 `idKelurahan` int(10) ,
 `KodePos` char(8) ,
 `noPendaftaran` char(15) ,
 `NoRekTetangga` varchar(11) ,
 `NoRumah` char(8) ,
 `RT` char(8) ,
 `RW` char(8) ,
 `tanggalDaftar` datetime ,
 `NamaKelurahan` varchar(40) ,
 `Radius` char(2) ,
 `atasNama` varchar(30) ,
 `bukti` text ,
 `idtransaksi` char(15) ,
 `JumlahTransaksi` double ,
 `tanggalPembayaran` datetime ,
 `TempatPembayaran` char(11) 
)*/;

/*View structure for view v_pendaftar */

/*!50001 DROP TABLE IF EXISTS `v_pendaftar` */;
/*!50001 DROP VIEW IF EXISTS `v_pendaftar` */;

/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pendaftar` AS (select `pel`.`Alamat` AS `Alamat`,`pel`.`idPelanggan` AS `idPelanggan`,`pel`.`Nama` AS `Nama`,`pel`.`noHP` AS `noHP`,`pel`.`noTelepon` AS `noTelepon`,`pel`.`Pekerjaan` AS `Pekerjaan`,`pel`.`Status` AS `Status`,`pend`.`fungsiBangunan` AS `fungsiBangunan`,`pend`.`idKelurahan` AS `idKelurahan`,`pend`.`KodePos` AS `KodePos`,`pend`.`noPendaftaran` AS `noPendaftaran`,`pend`.`NoRekTetangga` AS `NoRekTetangga`,`pend`.`NoRumah` AS `NoRumah`,`pend`.`RT` AS `RT`,`pend`.`RW` AS `RW`,`pend`.`tanggalDaftar` AS `tanggalDaftar`,`rad`.`NamaKelurahan` AS `NamaKelurahan`,`rad`.`Radius` AS `Radius`,`lam`.`KTP` AS `KTP`,`lam`.`KK` AS `KK`,`lam`.`PBB` AS `PBB`,`lam`.`RekeningPelanggan` AS `RekeningPelanggan` from (((`tbpelanggan` `pel` join `tbpendaftar` `pend`) join `tbradius` `rad`) join `tblampiran` `lam`) where ((`pel`.`idPelanggan` = `pend`.`idPelanggan`) and (`pend`.`idKelurahan` = `rad`.`idKelurahan`) and (`lam`.`noPendaftaran` = `pend`.`noPendaftaran`))) */;

/*View structure for view v_transaksi */

/*!50001 DROP TABLE IF EXISTS `v_transaksi` */;
/*!50001 DROP VIEW IF EXISTS `v_transaksi` */;

/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_transaksi` AS (select `pel`.`Alamat` AS `Alamat`,`pel`.`idPelanggan` AS `idPelanggan`,`pel`.`Nama` AS `Nama`,`pel`.`noHP` AS `noHP`,`pel`.`noTelepon` AS `noTelepon`,`pel`.`Pekerjaan` AS `Pekerjaan`,`pel`.`Status` AS `Status`,`pend`.`fungsiBangunan` AS `fungsiBangunan`,`pend`.`idKelurahan` AS `idKelurahan`,`pend`.`KodePos` AS `KodePos`,`pend`.`noPendaftaran` AS `noPendaftaran`,`pend`.`NoRekTetangga` AS `NoRekTetangga`,`pend`.`NoRumah` AS `NoRumah`,`pend`.`RT` AS `RT`,`pend`.`RW` AS `RW`,`pend`.`tanggalDaftar` AS `tanggalDaftar`,`rad`.`NamaKelurahan` AS `NamaKelurahan`,`rad`.`Radius` AS `Radius`,`trs`.`atasNama` AS `atasNama`,`trs`.`bukti` AS `bukti`,`trs`.`idtransaksi` AS `idtransaksi`,`trs`.`JumlahTransaksi` AS `JumlahTransaksi`,`trs`.`tanggalPembayaran` AS `tanggalPembayaran`,`trs`.`TempatPembayaran` AS `TempatPembayaran` from (((`tbpelanggan` `pel` join `tbpendaftar` `pend`) join `tbradius` `rad`) join `tbtransaksi` `trs`) where ((`pel`.`idPelanggan` = `pend`.`idPelanggan`) and (`pend`.`idKelurahan` = `rad`.`idKelurahan`) and (`trs`.`noPendaftaran` = `pend`.`noPendaftaran`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
