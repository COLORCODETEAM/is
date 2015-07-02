CREATE DATABASE  IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laravel`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	5.5.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `booking_room`
--

DROP TABLE IF EXISTS `booking_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking_room` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `booking_no` varchar(45) DEFAULT NULL,
  `events` varchar(200) DEFAULT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `description` text,
  `contact_person` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `room_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`room_id`),
  KEY `fk_booking_room_room1_idx` (`room_id`),
  CONSTRAINT `fk_booking_room_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_room`
--

LOCK TABLES `booking_room` WRITE;
/*!40000 ALTER TABLE `booking_room` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_room_detail`
--

DROP TABLE IF EXISTS `booking_room_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking_room_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `booking_room_id` int(10) unsigned NOT NULL,
  `device_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`booking_room_id`,`device_id`),
  KEY `fk_booking_room_detail_booking_room1_idx` (`booking_room_id`),
  KEY `fk_booking_room_detail_device1_idx` (`device_id`),
  CONSTRAINT `fk_booking_room_detail_booking_room1` FOREIGN KEY (`booking_room_id`) REFERENCES `booking_room` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_booking_room_detail_device1` FOREIGN KEY (`device_id`) REFERENCES `device` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_room_detail`
--

LOCK TABLES `booking_room_detail` WRITE;
/*!40000 ALTER TABLE `booking_room_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking_room_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bring_material`
--

DROP TABLE IF EXISTS `bring_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bring_material` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bring_no` varchar(45) DEFAULT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `withdraw_person` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `approvement` tinyint(1) DEFAULT NULL,
  `remark` text,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bring_material`
--

LOCK TABLES `bring_material` WRITE;
/*!40000 ALTER TABLE `bring_material` DISABLE KEYS */;
/*!40000 ALTER TABLE `bring_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bring_material_detail`
--

DROP TABLE IF EXISTS `bring_material_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bring_material_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `bring_material_id` int(10) unsigned NOT NULL,
  `material_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`bring_material_id`,`material_id`),
  KEY `fk_bring_material_detail_bring_material1_idx` (`bring_material_id`),
  KEY `fk_bring_material_detail_material1_idx` (`material_id`),
  CONSTRAINT `fk_bring_material_detail_bring_material1` FOREIGN KEY (`bring_material_id`) REFERENCES `bring_material` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_bring_material_detail_material1` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bring_material_detail`
--

LOCK TABLES `bring_material_detail` WRITE;
/*!40000 ALTER TABLE `bring_material_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `bring_material_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_no` varchar(45) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `description` text,
  `serial_no` varchar(100) DEFAULT NULL,
  `warranty` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `unit_price` varchar(45) DEFAULT NULL,
  `remark` text,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `stock_id` int(10) unsigned NOT NULL,
  `device_type_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`stock_id`,`device_type_id`),
  KEY `fk_device_stock1_idx` (`stock_id`),
  KEY `fk_device_devicel_type1_idx` (`device_type_id`),
  CONSTRAINT `fk_device_devicel_type1` FOREIGN KEY (`device_type_id`) REFERENCES `device_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_device_stock1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device`
--

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
INSERT INTO `device` (`id`, `device_no`, `brand`, `model`, `ip_address`, `description`, `serial_no`, `warranty`, `amount`, `unit_price`, `remark`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`, `stock_id`, `device_type_id`) VALUES (1,'Monitor-1-NO','Monitor-1-Brand','Monitor-1-Model','Monitor-1-IP','Monitor-1-Description','Monitor-1-SN','Monitor-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:56:00',4,'2015-05-14 04:56:00',1,2,1),(2,'Printer-1-NO','Printer-1-Brand','Printer-1-Model','Printer-1-IP','Printer-1-Description','Printer-1-SN','Printer-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:57:00',4,'2015-05-14 05:01:00',1,2,2),(3,'Scanner-1-NO','Scanner-1-Brand','Scanner-1-Model','Scanner-1-IP','Scanner-1-Description','Scanner-1-SN','Scanner-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:58:00',4,'2015-05-14 05:02:00',1,2,3),(4,'Projector-1-NO','Projector-1-Brand','Projector-1-Model','Projector-1-IP','Projector-1-Description','Projector-1-SN','Projector-1-Warranty',10,NULL,NULL,4,'2015-05-14 04:59:00',4,'2015-05-14 05:04:00',1,2,4),(5,'Monitor-2-NO','Monitor-2-Brand','Monitor-2-Model','Monitor-2-IP','Monitor-2-Description','Monitor-2-SN','Monitor-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:08:00',3,'2015-05-14 07:08:00',1,1,1),(6,'Printer-2-NO','Printer-2-Brand','Printer-2-Model','Printer-2-IP','Printer-2-Description','Printer-2-SN','Printer-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:08:00',3,'2015-05-14 07:08:00',1,1,2),(7,'Speaker-2-NO','Speaker-2-Brand','Speaker-2-Model','Speaker-2-IP','Speaker-2-Description','Speaker-2-SN','Speaker-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:09:00',3,'2015-05-14 07:09:00',1,1,5),(8,'Splitter-2-NO','Splitter-2-Brand','Splitter-2-Model','Splitter-2-IP','Splitter-2-Description','Splitter-2-SN','Splitter-2-Warranty',10,NULL,NULL,3,'2015-05-14 07:10:00',3,'2015-05-14 07:10:00',1,1,6);
/*!40000 ALTER TABLE `device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device_type`
--

DROP TABLE IF EXISTS `device_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_no` varchar(45) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_type`
--

LOCK TABLES `device_type` WRITE;
/*!40000 ALTER TABLE `device_type` DISABLE KEYS */;
INSERT INTO `device_type` (`id`, `type_no`, `name`, `description`, `flag`) VALUES (1,'Monitor','Monitor','Monitor',1),(2,'Printer','Printer','Printer',1),(3,'Scanner','Scanner','Scanner',1),(4,'Projecter','Projecter','Projecter',1),(5,'Speaker','Speaker','Speaker',1),(6,'Splitter','Splitter','Splitter',1),(7,'External HDD','External HDD','External HDD',1),(8,'External LAN Card','External LAN Card','External LAN Card',1),(9,'External DVD','External DVD','External DVD',1),(10,'Camera','Camera','Camera',1),(11,'Video Camera','Video Camera','Video Camera',1),(12,'ขาตั้งกล้อง','ขาตั้งกล้อง','ขาตั้งกล้อง',1),(13,'ฉากตั้ง LCD','ฉากตั้ง LCD','ฉากตั้ง LCD',1),(14,'Headphone','Headphone','Headphone',1),(15,'Webcam','Webcam','Webcam',1),(16,'Mouse','Mouse','Mouse',1),(17,'Keyboard','Keyboard','Keyboard',1),(18,'Notebook','Notebook','Notebook',1),(19,'เครื่องทำ label','เครื่องทำ label','เครื่องทำ label',1),(20,'กรรไกร','กรรไกร','กรรไกร',1),(21,'คีม','คีม','คีม',1),(22,'ไขควง','ไขควง','ไขควง',1),(23,'คีมหนีบหัว lan','คีมหนีบหัว lan','คีมหนีบหัว lan',1),(24,'คัตเตอร์','คัตเตอร์','คัตเตอร์',1),(25,'ที่ตัดกระดาษ','ที่ตัดกระดาษ','ที่ตัดกระดาษ',1),(26,'ไม้บรรทัดเหล็ก','ไม้บรรทัดเหล็ก','ไม้บรรทัดเหล็ก',1),(27,'Notebook','Notebook','Notebook',1),(28,'แม็ก','แม็ก','แม็ก',1);
/*!40000 ALTER TABLE `device_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lend_device`
--

DROP TABLE IF EXISTS `lend_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lend_device` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lend_no` varchar(45) DEFAULT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `rent_person` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `approvement` tinyint(1) DEFAULT NULL,
  `remark` text,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lend_device`
--

LOCK TABLES `lend_device` WRITE;
/*!40000 ALTER TABLE `lend_device` DISABLE KEYS */;
/*!40000 ALTER TABLE `lend_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lend_device_detail`
--

DROP TABLE IF EXISTS `lend_device_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lend_device_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `lend_device_id` int(10) unsigned NOT NULL,
  `device_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`lend_device_id`,`device_id`),
  KEY `fk_booking_device_detail_booking_device1_idx` (`lend_device_id`),
  KEY `fk_booking_device_detail_device1_idx` (`device_id`),
  CONSTRAINT `fk_booking_device_detail_booking_device1` FOREIGN KEY (`lend_device_id`) REFERENCES `lend_device` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_booking_device_detail_device1` FOREIGN KEY (`device_id`) REFERENCES `device` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lend_device_detail`
--

LOCK TABLES `lend_device_detail` WRITE;
/*!40000 ALTER TABLE `lend_device_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `lend_device_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapping_computer`
--

DROP TABLE IF EXISTS `mapping_computer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapping_computer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mapping_no` varchar(45) DEFAULT NULL,
  `computer_name` varchar(100) DEFAULT NULL,
  `serial_no` varchar(100) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `os` varchar(45) DEFAULT NULL,
  `product_key_os` varchar(45) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `cpu` varchar(100) DEFAULT NULL,
  `ram` varchar(100) DEFAULT NULL,
  `video_card` varchar(100) DEFAULT NULL,
  `hdd` varchar(100) DEFAULT NULL,
  `cd_dvd` varchar(100) DEFAULT NULL,
  `antivirus` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `room` varchar(45) DEFAULT NULL,
  `remark` text,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `room_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`room_id`),
  KEY `fk_mapping_computer_room1_idx` (`room_id`),
  CONSTRAINT `fk_mapping_computer_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapping_computer`
--

LOCK TABLES `mapping_computer` WRITE;
/*!40000 ALTER TABLE `mapping_computer` DISABLE KEYS */;
INSERT INTO `mapping_computer` (`id`, `mapping_no`, `computer_name`, `serial_no`, `ip`, `os`, `product_key_os`, `brand`, `model`, `cpu`, `ram`, `video_card`, `hdd`, `cd_dvd`, `antivirus`, `status`, `room`, `remark`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`, `room_id`) VALUES (2,'no','name','sn','1970-01-01 00:00','oss','1970-01-01 00:00','brand','model','cpu','ram','vga','hdd','cd',1,1,'123','33333',2,'2015-05-17 16:45:00',2,'2015-05-17 16:45:00',1,1),(3,'no','name','sn','1970-01-01 00:00','oss','1970-01-01 00:00','brand','model','cpu','ram','vga','hdd','cd',1,1,'123','33333',2,'2015-05-17 16:46:00',2,'2015-05-17 16:46:00',0,1),(4,'no2','name2','sn2','ip2','oss2','os2','brand2','model2','cpu2','ram2','vga2','hdd2','cd2',0,0,'1232','333332',2,'2015-05-17 16:46:00',2,'2015-05-17 17:35:00',1,2),(5,'no','name','sn','1970-01-01 00:00','oss','1970-01-01 00:00','brand','model','cpu','ram','vga','hdd','cd',1,1,'123','33333',2,'2015-05-17 16:48:00',2,'2015-05-17 16:48:00',0,1);
/*!40000 ALTER TABLE `mapping_computer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `material_no` varchar(45) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `description` text,
  `serial_no` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `unit_price` varchar(45) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `stock_id` int(10) unsigned NOT NULL,
  `material_type_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`stock_id`,`material_type_id`),
  KEY `fk_material_stock1_idx` (`stock_id`),
  KEY `fk_material_material_type1_idx` (`material_type_id`),
  CONSTRAINT `fk_material_material_type1` FOREIGN KEY (`material_type_id`) REFERENCES `material_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_stock1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` (`id`, `material_no`, `brand`, `model`, `description`, `serial_no`, `amount`, `unit_price`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`, `stock_id`, `material_type_id`) VALUES (1,'กระดาษ A4-1-NO','กระดาษ A4-1-Brand','กระดาษ A4-1-Model','กระดาษ A4-1-Description','กระดาษ A4-1-SN',10,NULL,4,'2015-05-14 06:43:00',4,'2015-05-14 06:50:00',1,2,1),(2,'เทปใส-1-NO','เทปใส-1-Brand','เทปใส-1-Model','เทปใส-1-Description','เทปใส-1-SN',10,NULL,4,'2015-05-14 06:44:00',4,'2015-05-14 06:44:00',1,2,2),(3,'ลูกแม็ค-1-NO','ลูกแม็ค-1-Brand','ลูกแม็ค-1-Model','ลูกแม็ค-1-Description','ลูกแม็ค-1-SN',10,NULL,4,'2015-05-14 06:45:00',4,'2015-05-14 06:45:00',1,2,3),(4,'สายแลน-1-NO','สายแลน-1-Brand','สายแลน-1-Model','สายแลน-1-Description','สายแลน-1-SN',10,NULL,4,'2015-05-14 06:46:00',4,'2015-05-14 06:46:00',1,2,4),(5,'กระดาษ A4-2-NO','กระดาษ A4-2-Brand','กระดาษ A4-2-Model','กระดาษ A4-2-Description','กระดาษ A4-2-Sn',10,NULL,3,'2015-05-14 07:04:00',3,'2015-05-14 07:04:00',1,1,1),(6,'เทปใส-2-NO','เทปใส-2-Brand','เทปใส-2-Model','เทปใส-2-Description','เทปใส-2-Sn',10,NULL,3,'2015-05-14 07:05:00',3,'2015-05-14 07:05:00',1,1,2),(7,'ม้วนสายแลน-2-NO','ม้วนสายแลน-2-Brand','ม้วนสายแลน-2-Model','ม้วนสายแลน-2-Description','ม้วนสายแลน-2-SN',10,NULL,3,'2015-05-14 07:06:00',3,'2015-05-14 07:06:00',1,1,5),(8,'หัวRJ-2-NO','หัวRJ-2-Brand','หัวRJ-2-Model','หัวRJ-2-Description','หัวRJ-2-SN',10,NULL,3,'2015-05-14 07:07:00',3,'2015-05-14 07:07:00',1,1,6);
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material_type`
--

DROP TABLE IF EXISTS `material_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_no` varchar(45) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material_type`
--

LOCK TABLES `material_type` WRITE;
/*!40000 ALTER TABLE `material_type` DISABLE KEYS */;
INSERT INTO `material_type` (`id`, `type_no`, `name`, `description`, `flag`) VALUES (1,'กระดาษ A4 (ลีม)','กระดาษ A4 (ลีม)','กระดาษ A4 (ลีม)',1),(2,'เทปใส','เทปใส','เทปใส',1),(3,'ลูกแม็ค','ลูกแม็ค','ลูกแม็ค',1),(4,'สายแลน','สายแลน','สายแลน',1),(5,'ม้วนสายแลน','ม้วนสายแลน','ม้วนสายแลน',1),(6,'หัวRJ','หัวRJ','หัวRJ',1),(7,'น๊อต','น๊อต','น๊อต',1),(8,'สาย VGA','สาย VGA','สาย VGA',1),(9,'สาย Power','สาย Power','สาย Power',1),(10,'สาย pair','สาย pair','สาย pair',1),(11,'ตลับสายไฟ','ตลับสายไฟ','ตลับสายไฟ',1),(12,'ลางสายแลน','ลางสายแลน','ลางสายแลน',1),(13,'หัวต่อ HDMI','หัวต่อ HDMI','หัวต่อ HDMI',1),(14,'หัวต่อ Video line','หัวต่อ Video line','หัวต่อ Video line',1),(15,'Tonner','Tonner','Tonner',1),(16,'ตลับหมึกสี Drum','ตลับหมึกสี Drum','ตลับหมึกสี Drum',1),(17,'Harddisk','Harddisk','Harddisk',1),(18,'Ram','Ram','Ram',1),(19,'Power Supply','Power Supply','Power Supply',1),(20,'CD/DVD','CD/DVD','CD/DVD',1),(21,'แผ่นรองเม้า','แผ่นรองเม้า','แผ่นรองเม้า',1),(22,'ตัวหุ้มสายไฟ','ตัวหุ้มสายไฟ','ตัวหุ้มสายไฟ',1),(23,'ใส้ไก่','ใส้ไก่','ใส้ไก่',1);
/*!40000 ALTER TABLE `material_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` varchar(45) DEFAULT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `order_by` varchar(100) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `approvement` tinyint(1) DEFAULT NULL,
  `approved_date` datetime DEFAULT NULL,
  `received_by` varchar(100) DEFAULT NULL,
  `received_date` datetime DEFAULT NULL,
  `checked_by` varchar(100) DEFAULT NULL,
  `checked_date` date DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_no` varchar(45) DEFAULT NULL,
  `description` text,
  `amount` int(11) DEFAULT NULL,
  `unit_price` varchar(45) DEFAULT NULL,
  `remark` text,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `order_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`order_id`),
  KEY `fk_order_detail_order_idx` (`order_id`),
  CONSTRAINT `fk_order_detail_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_detail`
--

LOCK TABLES `order_detail` WRITE;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_device`
--

DROP TABLE IF EXISTS `repair_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_device` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `repair_no` varchar(45) DEFAULT NULL,
  `person` varchar(100) DEFAULT NULL,
  `approvement` tinyint(1) DEFAULT NULL,
  `approved_date` datetime DEFAULT NULL,
  `received_by` varchar(100) DEFAULT NULL,
  `received_date` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_device`
--

LOCK TABLES `repair_device` WRITE;
/*!40000 ALTER TABLE `repair_device` DISABLE KEYS */;
/*!40000 ALTER TABLE `repair_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repair_device_detail`
--

DROP TABLE IF EXISTS `repair_device_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repair_device_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `symptom` text,
  `flag` int(11) DEFAULT NULL,
  `repair_device_id` int(10) unsigned NOT NULL,
  `device_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`repair_device_id`,`device_id`),
  KEY `fk_repair_device_detail_repair_device1_idx` (`repair_device_id`),
  KEY `fk_repair_device_detail_device1_idx` (`device_id`),
  CONSTRAINT `fk_repair_device_detail_device1` FOREIGN KEY (`device_id`) REFERENCES `device` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_repair_device_detail_repair_device1` FOREIGN KEY (`repair_device_id`) REFERENCES `repair_device` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repair_device_detail`
--

LOCK TABLES `repair_device_detail` WRITE;
/*!40000 ALTER TABLE `repair_device_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `repair_device_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_no` varchar(45) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` (`id`, `room_no`, `name`, `description`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`) VALUES (1,'Lab-1','Lab-1','Lab-1',1,'2015-04-27 02:50:39',1,'2015-04-27 02:51:52',1),(2,'Lab-2','Lab-2','Lab-2',1,'2015-04-27 02:51:10',1,'2015-04-27 02:52:07',1);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stock_no` varchar(45) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` text,
  `create_user` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` (`id`, `stock_no`, `name`, `description`, `create_user`, `create_date`, `update_user`, `update_date`, `flag`) VALUES (1,'High school','High school','High school',1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1),(2,'Elementary school','Elementary school','Elementary school',1,'2015-04-27 04:45:00',1,'2015-04-27 04:45:00',1);
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_no` varchar(45) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`id`, `role_no`, `name`, `description`) VALUES (1,'admin','admin','admin'),(2,'manager','manager','manager'),(3,'support','support','support'),(4,'user','user','user');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_stock`
--

DROP TABLE IF EXISTS `user_stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `stock_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`stock_id`,`users_id`),
  KEY `fk_user_stock_stock1_idx` (`stock_id`),
  KEY `fk_user_stock_users1_idx` (`users_id`),
  CONSTRAINT `fk_user_stock_stock1` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_stock_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_stock`
--

LOCK TABLES `user_stock` WRITE;
/*!40000 ALTER TABLE `user_stock` DISABLE KEYS */;
INSERT INTO `user_stock` (`id`, `name`, `description`, `flag`, `stock_id`, `users_id`) VALUES (1,'Support High school','Support High school',1,1,3),(2,'Support Elementary school','Support Elementary school',1,2,4),(3,'Manager High School','Manager High School',1,1,2),(4,'Manager Elementary School','Manager Elementary School',1,2,2),(5,'Admin High School','Admin High School',1,1,1),(6,'Admin Elementary School','Admin Elementary School',1,2,1),(7,'User High School','User High School',1,1,5),(8,'User Elementary School','User Elementary School',1,2,5);
/*!40000 ALTER TABLE `user_stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  `user_role_id` int(10) unsigned NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`,`user_role_id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_user_user_role1_idx` (`user_role_id`),
  CONSTRAINT `fk_user_user_role1` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `phone`, `create_user`, `created_at`, `update_user`, `updated_at`, `flag`, `user_role_id`) VALUES (1,'admin','admin','admin@mail.com','$2y$10$xdhKqEX45bayqVAMOB/moOdC6zk4p6MyQHMpp0/zRRAAZnYr6vDqq','iAODcxRG43Z6cckab9PqfCDUHBXbgimuo4pRutDTX1WDbemNIKxZKUE0Eih5','811111111',0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,1),(2,'manager','manager','manager@mail.com','$2y$10$7np7eqXwr5psfvp/ezH7DeXWzwkcTo.u3p9HoFtkck5bBHj1j6AhG','IqgxhGdHwpZFHZqOxRI1izm5JMQ5l0yu8oaQG75Pt2zipyi4gkx4zpUL5PkI','811111111',0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,2),(3,'support','primary school','support.primaryschool@mail.com','$2y$10$xdhKqEX45bayqVAMOB/moOdC6zk4p6MyQHMpp0/zRRAAZnYr6vDqq','QfRpYFSSFBeJKk0GQ0I5hJpqqfw8pp8osIBQvnFsG7CtJaomgPbihYTJFasC','811111111',0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,3),(4,'support','elementary school','support.elementaryschool@mail.com','$2y$10$xdhKqEX45bayqVAMOB/moOdC6zk4p6MyQHMpp0/zRRAAZnYr6vDqq','QfRpYFSSFBeJKk0GQ0I5hJpqqfw8pp8osIBQvnFsG7CtJaomgPbihYTJFasC','811111111',0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,3),(5,'user','user','user@mail.com','$2y$10$P6Qt1vcqqtTCODdYpkShqezF19HHllykc/2oIJr/I8XvBds7UOq6G','feUYTCftKdZhbLJB9tH7gyvkIVRgfKcmWLG57BvyLg5D5LO2T6VRoWBX3GT3','811111111',0,'2015-05-07 17:00:00',0,'2015-05-07 17:00:00',1,4),(6,'test','test','test@mail.com','$2y$10$2ApH6UqO/d7ZBLzFc/VN1eS25YqnjjkcP8S4kv5LAWEE1pKVff6AG','pjotA0Spf9vSjsfCq9134hg4WPdywUc0iwtHIMLZogG7Or76d3chRUXK8uzc','08111111111',NULL,NULL,NULL,NULL,NULL,3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `view_availabledevice`
--

DROP TABLE IF EXISTS `view_availabledevice`;
/*!50001 DROP VIEW IF EXISTS `view_availabledevice`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_availabledevice` (
  `id` tinyint NOT NULL,
  `device_no` tinyint NOT NULL,
  `brand` tinyint NOT NULL,
  `model` tinyint NOT NULL,
  `ip_address` tinyint NOT NULL,
  `description` tinyint NOT NULL,
  `serial_no` tinyint NOT NULL,
  `warranty` tinyint NOT NULL,
  `amount` tinyint NOT NULL,
  `unit_price` tinyint NOT NULL,
  `remark` tinyint NOT NULL,
  `create_user` tinyint NOT NULL,
  `create_date` tinyint NOT NULL,
  `update_user` tinyint NOT NULL,
  `update_date` tinyint NOT NULL,
  `stock_id` tinyint NOT NULL,
  `stock_name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_availablematerial`
--

DROP TABLE IF EXISTS `view_availablematerial`;
/*!50001 DROP VIEW IF EXISTS `view_availablematerial`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_availablematerial` (
  `id` tinyint NOT NULL,
  `material_no` tinyint NOT NULL,
  `brand` tinyint NOT NULL,
  `model` tinyint NOT NULL,
  `description` tinyint NOT NULL,
  `serial_no` tinyint NOT NULL,
  `amount` tinyint NOT NULL,
  `unit_price` tinyint NOT NULL,
  `create_user` tinyint NOT NULL,
  `create_date` tinyint NOT NULL,
  `update_user` tinyint NOT NULL,
  `update_date` tinyint NOT NULL,
  `stock_id` tinyint NOT NULL,
  `stock_name` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_availablestock`
--

DROP TABLE IF EXISTS `view_availablestock`;
/*!50001 DROP VIEW IF EXISTS `view_availablestock`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_availablestock` (
  `id` tinyint NOT NULL,
  `stock_no` tinyint NOT NULL,
  `name` tinyint NOT NULL,
  `user_id` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_availableusers`
--

DROP TABLE IF EXISTS `view_availableusers`;
/*!50001 DROP VIEW IF EXISTS `view_availableusers`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_availableusers` (
  `id` tinyint NOT NULL,
  `firstname` tinyint NOT NULL,
  `lastname` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_sumlenddevicedetail`
--

DROP TABLE IF EXISTS `view_sumlenddevicedetail`;
/*!50001 DROP VIEW IF EXISTS `view_sumlenddevicedetail`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_sumlenddevicedetail` (
  `device_id` tinyint NOT NULL,
  `sum` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_summaterialdetail`
--

DROP TABLE IF EXISTS `view_summaterialdetail`;
/*!50001 DROP VIEW IF EXISTS `view_summaterialdetail`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_summaterialdetail` (
  `material_id` tinyint NOT NULL,
  `sum` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_sumrepairdetail`
--

DROP TABLE IF EXISTS `view_sumrepairdetail`;
/*!50001 DROP VIEW IF EXISTS `view_sumrepairdetail`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_sumrepairdetail` (
  `device_id` tinyint NOT NULL,
  `sum` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_sumroombookingdetail`
--

DROP TABLE IF EXISTS `view_sumroombookingdetail`;
/*!50001 DROP VIEW IF EXISTS `view_sumroombookingdetail`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_sumroombookingdetail` (
  `device_id` tinyint NOT NULL,
  `sum` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `view_availabledevice`
--

/*!50001 DROP TABLE IF EXISTS `view_availabledevice`*/;
/*!50001 DROP VIEW IF EXISTS `view_availabledevice`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_availabledevice` AS select `d`.`id` AS `id`,`d`.`device_no` AS `device_no`,`d`.`brand` AS `brand`,`d`.`model` AS `model`,`d`.`ip_address` AS `ip_address`,`d`.`description` AS `description`,`d`.`serial_no` AS `serial_no`,`d`.`warranty` AS `warranty`,(`d`.`amount` - ((ifnull(`l`.`sum`,0) + ifnull(`rb`.`sum`,0)) + ifnull(`rd`.`sum`,0))) AS `amount`,ifnull(`d`.`unit_price`,0) AS `unit_price`,`d`.`remark` AS `remark`,`d`.`create_user` AS `create_user`,`d`.`create_date` AS `create_date`,`d`.`update_user` AS `update_user`,`d`.`update_date` AS `update_date`,`d`.`stock_id` AS `stock_id`,`s`.`name` AS `stock_name` from ((((`device` `d` left join `stock` `s` on((`d`.`stock_id` = `s`.`id`))) left join `view_sumlenddevicedetail` `l` on((`d`.`id` = `l`.`device_id`))) left join `view_sumroombookingdetail` `rb` on((`d`.`id` = `rb`.`device_id`))) left join `view_sumrepairdetail` `rd` on((`d`.`id` = `rd`.`device_id`))) where ((`d`.`flag` = '1') and ((`l`.`sum` < `d`.`amount`) or isnull(`l`.`sum`)) and ((`rb`.`sum` < `d`.`amount`) or isnull(`rb`.`sum`)) and ((`rd`.`sum` < `d`.`amount`) or isnull(`rd`.`sum`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_availablematerial`
--

/*!50001 DROP TABLE IF EXISTS `view_availablematerial`*/;
/*!50001 DROP VIEW IF EXISTS `view_availablematerial`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_availablematerial` AS select `m`.`id` AS `id`,`m`.`material_no` AS `material_no`,`m`.`brand` AS `brand`,`m`.`model` AS `model`,`m`.`description` AS `description`,`m`.`serial_no` AS `serial_no`,(`m`.`amount` - ifnull(`br`.`sum`,0)) AS `amount`,ifnull(`m`.`unit_price`,0) AS `unit_price`,`m`.`create_user` AS `create_user`,`m`.`create_date` AS `create_date`,`m`.`update_user` AS `update_user`,`m`.`update_date` AS `update_date`,`m`.`stock_id` AS `stock_id`,`s`.`name` AS `stock_name` from ((`material` `m` left join `stock` `s` on((`m`.`stock_id` = `s`.`id`))) left join `view_summaterialdetail` `br` on((`br`.`material_id` = `m`.`id`))) where ((`m`.`flag` = '1') and ((`br`.`sum` < `m`.`amount`) or isnull(`br`.`sum`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_availablestock`
--

/*!50001 DROP TABLE IF EXISTS `view_availablestock`*/;
/*!50001 DROP VIEW IF EXISTS `view_availablestock`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_availablestock` AS select `s`.`id` AS `id`,`s`.`stock_no` AS `stock_no`,`s`.`name` AS `name`,`u`.`id` AS `user_id` from ((`stock` `s` join `users` `u`) left join `user_stock` `us` on(((`u`.`id` = `us`.`users_id`) and (`s`.`id` = `us`.`stock_id`) and ((`us`.`flag` = 1) or isnull(`us`.`id`))))) where isnull(`us`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_availableusers`
--

/*!50001 DROP TABLE IF EXISTS `view_availableusers`*/;
/*!50001 DROP VIEW IF EXISTS `view_availableusers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_availableusers` AS select `u`.`id` AS `id`,`u`.`firstname` AS `firstname`,`u`.`lastname` AS `lastname` from ((`stock` `s` join `users` `u`) left join `user_stock` `us` on(((`u`.`id` = `us`.`users_id`) and (`s`.`id` = `us`.`stock_id`) and ((`us`.`flag` = 1) or isnull(`us`.`id`))))) where isnull(`us`.`id`) group by `u`.`id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_sumlenddevicedetail`
--

/*!50001 DROP TABLE IF EXISTS `view_sumlenddevicedetail`*/;
/*!50001 DROP VIEW IF EXISTS `view_sumlenddevicedetail`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_sumlenddevicedetail` AS select `l`.`device_id` AS `device_id`,sum(`l`.`amount`) AS `sum` from (`lend_device_detail` `l` left join `lend_device` `ld` on((`l`.`lend_device_id` = `ld`.`id`))) where ((`l`.`flag` = '1') and (`ld`.`end_time` > now())) group by `l`.`device_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_summaterialdetail`
--

/*!50001 DROP TABLE IF EXISTS `view_summaterialdetail`*/;
/*!50001 DROP VIEW IF EXISTS `view_summaterialdetail`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_summaterialdetail` AS select `bring_material_detail`.`material_id` AS `material_id`,sum(`bring_material_detail`.`amount`) AS `sum` from `bring_material_detail` where (`bring_material_detail`.`flag` = 1) group by `bring_material_detail`.`material_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_sumrepairdetail`
--

/*!50001 DROP TABLE IF EXISTS `view_sumrepairdetail`*/;
/*!50001 DROP VIEW IF EXISTS `view_sumrepairdetail`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_sumrepairdetail` AS select `r`.`device_id` AS `device_id`,1 AS `sum` from (`repair_device_detail` `r` left join `repair_device` `rd` on((`r`.`repair_device_id` = `rd`.`id`))) where (`r`.`flag` = '1') group by `r`.`device_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_sumroombookingdetail`
--

/*!50001 DROP TABLE IF EXISTS `view_sumroombookingdetail`*/;
/*!50001 DROP VIEW IF EXISTS `view_sumroombookingdetail`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_sumroombookingdetail` AS select `b`.`device_id` AS `device_id`,sum(`b`.`amount`) AS `sum` from (`booking_room_detail` `b` left join `booking_room` `br` on((`b`.`booking_room_id` = `br`.`id`))) where ((`b`.`flag` = '1') and (`br`.`end_time` > now())) group by `b`.`device_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-01  0:17:53
