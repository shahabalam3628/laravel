/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.1.34-MariaDB : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `laravel`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(100) DEFAULT NULL,
  `comp_email` varchar(100) DEFAULT NULL,
  `comp_mobile` varchar(10) DEFAULT NULL,
  `comp_address` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `companies` */

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(10) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`emp_id`,`name`,`mobile_no`,`address`) values (1,'shahab','8893784889','chhajju'),(2,'shahab','8893784889','chhajju'),(3,'shahab','8893784889','chhajju'),(4,'shahab','8893784889','chhajju'),(5,'shahab','8893784889','chhajju'),(6,'shahab','8893784889','chhajju'),(7,'shahab','8893784889','chhajju'),(8,'shahab','8893784889','chhajju'),(9,'shahab','8893784889','chhajju'),(10,'shahab','8893784889','chhajju');

/*Table structure for table `mytests` */

DROP TABLE IF EXISTS `mytests`;

CREATE TABLE `mytests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_mobile` varchar(10) DEFAULT NULL,
  `user_address` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mytests` */

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_mobile` varchar(10) DEFAULT NULL,
  `user_address` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`id`,`user_name`,`user_email`,`user_mobile`,`user_address`,`created_at`,`updated_at`) values (2,'md shahab alam','shahabalam78@gamil.com','1234567890','ddddddddddddd','2019-09-12 17:34:08','2019-09-12 17:34:08'),(3,'md shahab alam','shahabalam78@gamil.com','1234567890','ddddddddddddd','2019-09-12 17:35:13','2019-09-12 17:35:13'),(5,'Aman','shahab@gamil.com','1234567890','gggggggggg mmmmmmmmmmmmmmm','2019-09-12 18:34:07','2019-09-12 18:34:07'),(6,'Aman','shahab@gamil.com','1234567890','mmmmmmmmmmmmmm','2019-09-13 17:40:14','2019-09-13 17:40:14'),(7,'bilal','bilal@gmail.com','7859848645','9999999999999','2019-09-13 17:40:47','2019-09-13 17:40:47'),(8,'KHAN','KHAN@GMAIL.COM','7859848645','mmmmmmmmmmmm','2019-09-13 18:38:50','2019-09-13 18:38:50'),(9,'gufran','aman@gmail.com','1234567890','MMMMMMMMMM','2019-09-13 18:39:54','2019-09-13 18:39:54'),(10,'gufran','shahabalam78@gamil.com','1234567890','ass','2019-09-13 18:40:38','2019-09-13 18:40:38'),(11,NULL,NULL,NULL,NULL,'2019-09-14 08:09:39','2019-09-14 08:09:39'),(12,NULL,NULL,NULL,NULL,'2019-09-14 08:09:47','2019-09-14 08:09:47'),(13,NULL,NULL,NULL,NULL,'2019-09-14 08:35:24','2019-09-14 08:35:24'),(14,NULL,NULL,NULL,NULL,'2019-10-01 18:43:06','2019-10-01 18:43:06'),(15,NULL,NULL,NULL,NULL,'2019-10-01 18:44:45','2019-10-01 18:44:45'),(16,'md shahab alam','shahabalam78@gamil.com','7859848645','fffffffffffffffffffffffffff','2019-10-01 18:45:59','2019-10-01 18:45:59'),(17,NULL,NULL,NULL,NULL,'2019-10-04 14:24:06','2019-10-04 14:24:06');

/*Table structure for table `tbl_color` */

DROP TABLE IF EXISTS `tbl_color`;

CREATE TABLE `tbl_color` (
  `id` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_color` */

insert  into `tbl_color`(`id`,`color`) values (1,'AliceBlue  '),(2,'AntiqueWhite  '),(3,'Aqua  '),(4,'Aquamarine  '),(5,'Azure  '),(6,'Beige  '),(7,'Bisque  '),(8,'Black  '),(9,'BlanchedAlmond  '),(10,'Blue  '),(11,'BlueViolet  '),(12,'Brown  '),(13,'BurlyWood  '),(14,'CadetBlue  '),(15,'Chartreuse  '),(16,'Chocolate  '),(17,'Coral  '),(18,'CornflowerBlue  '),(19,'Cornsilk  '),(20,'Crimson  '),(21,'Cyan  '),(22,'DarkBlue  '),(23,'DarkCyan  '),(24,'DarkGoldenRod  '),(25,'DarkGray  '),(26,'DarkGreen  '),(27,'DarkKhaki  '),(28,'DarkMagenta  '),(29,'DarkOliveGreen  '),(30,'Darkorange  '),(31,'DarkOrchid  '),(32,'DarkRed  '),(33,'DarkSalmon  '),(34,'DarkSeaGreen  '),(35,'DarkSlateBlue  '),(36,'DarkSlateGray  '),(37,'DarkTurquoise  '),(38,'DarkViolet  '),(39,'DeepPink  '),(40,'DeepSkyBlue  '),(41,'DimGray  '),(42,'DimGrey  '),(43,'DodgerBlue  '),(44,'FireBrick  '),(45,'FloralWhite  '),(46,'ForestGreen  '),(47,'Fuchsia  '),(48,'Gainsboro  '),(49,'GhostWhite  '),(50,'Gold  '),(51,'GoldenRod  '),(52,'Gray  '),(53,'Green  '),(54,'GreenYellow  '),(55,'HoneyDew  '),(56,'HotPink  '),(57,'IndianRed   '),(58,'Indigo   '),(59,'Ivory  '),(60,'Khaki  '),(61,'Lavender  '),(62,'LavenderBlush  '),(63,'LawnGreen  '),(64,'LemonChiffon  '),(65,'LightBlue  '),(66,'LightCoral  '),(67,'LightCyan  '),(68,'LightGoldenRodYellow  '),(69,'LightGray  '),(70,'LightGreen  '),(71,'LightPink  '),(72,'LightSalmon  '),(73,'LightSeaGreen  '),(74,'LightSkyBlue  '),(75,'LightSlateGray  '),(76,'LightSteelBlue  '),(77,'LightYellow  '),(78,'Lime  '),(79,'LimeGreen  '),(80,'Linen  '),(81,'Magenta  '),(82,'Maroon  '),(83,'MediumAquaMarine  '),(84,'MediumBlue  '),(85,'MediumOrchid  '),(86,'MediumPurple  '),(87,'MediumSeaGreen  '),(88,'MediumSlateBlue  '),(89,'MediumSpringGreen  '),(90,'MediumTurquoise  '),(91,'MediumVioletRed  '),(92,'MidnightBlue  '),(93,'MintCream  '),(94,'MistyRose  '),(95,'Moccasin  '),(96,'NavajoWhite  '),(97,'Navy  '),(98,'OldLace  '),(99,'Olive  '),(100,'OliveDrab  '),(101,'Orange  '),(102,'OrangeRed  '),(103,'Orchid  '),(104,'PaleGoldenRod  '),(105,'PaleGreen  '),(106,'PaleTurquoise  '),(107,'PaleVioletRed  '),(108,'PapayaWhip  '),(109,'PeachPuff  '),(110,'Peru  '),(111,'Pink  '),(112,'Plum  '),(113,'PowderBlue  '),(114,'Purple  '),(115,'Red  '),(116,'RosyBrown  '),(117,'RoyalBlue  '),(118,'SaddleBrown  '),(119,'Salmon  '),(120,'SandyBrown  '),(121,'SeaGreen  '),(122,'SeaShell  '),(123,'Sienna  '),(124,'Silver  '),(125,'SkyBlue  '),(126,'SlateBlue  '),(127,'SlateGray  '),(128,'Snow  '),(129,'SpringGreen  '),(130,'SteelBlue  '),(131,'Tan  '),(132,'Teal  '),(133,'Thistle  '),(134,'Tomato  '),(135,'Turquoise  '),(136,'Violet  '),(137,'Wheat  '),(138,'White  '),(139,'WhiteSmoke  '),(140,'Yellow  '),(141,'YellowGreen  ');

/*Table structure for table `tbl_customer_review` */

DROP TABLE IF EXISTS `tbl_customer_review`;

CREATE TABLE `tbl_customer_review` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `image_id` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_customer_review` */

insert  into `tbl_customer_review`(`sn`,`user_id`,`image_id`,`comment`,`comment_date`) values (1,'','','','2019-09-14 09:42:06'),(2,'','','','2019-09-14 09:42:06'),(3,'','','','2019-09-14 09:42:06'),(4,'','','','2019-09-14 09:42:06'),(5,'','','','2019-09-14 09:42:06'),(6,'','','','2019-09-14 09:42:06'),(7,'','','','2019-09-14 09:42:06'),(8,'','','','2019-09-14 09:42:06'),(9,'','','','2019-09-14 09:42:06'),(10,'','','','2019-09-14 09:42:06'),(11,'','','','2019-09-14 09:42:06'),(12,'','','','2019-09-14 09:42:06'),(13,'','','','2019-09-14 09:42:06'),(14,'','','','2019-09-14 09:42:06'),(15,'','','','2019-09-14 09:42:06'),(16,'','','','2019-09-14 09:42:06'),(17,'','','','2019-09-14 09:42:06'),(18,'','','','2019-09-14 09:42:06'),(19,'','','','2019-09-14 09:42:06'),(20,'','','','2019-09-14 09:42:06'),(21,'','','','2019-09-14 09:42:06'),(22,'','','','2019-09-14 09:42:06'),(23,'','','','2019-09-14 09:42:06'),(24,'','','','2019-09-14 09:42:06'),(25,'','','','2019-09-14 09:42:06'),(26,'','','','2019-09-14 09:42:06'),(27,'','','','2019-09-14 09:42:06'),(28,'','','','2019-09-14 09:42:06'),(29,'','','','2019-09-14 09:42:06'),(30,'','','','2019-09-14 09:42:06'),(31,'','','','2019-09-14 09:42:06'),(32,'','','','2019-09-14 09:42:06'),(33,'','','','2019-09-14 09:42:06'),(34,'','','','2019-09-14 09:42:06'),(35,'','','','2019-09-14 09:42:06'),(36,'','','','2019-09-14 09:42:06'),(37,'','','','2019-09-14 09:42:06'),(38,'','','','2019-09-14 09:42:06');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
