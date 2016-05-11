/*
SQLyog Community v12.2.2 (64 bit)
MySQL - 10.0.24-MariaDB-7 : Database - php_intim
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php_intim` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `php_intim`;

/*Table structure for table `tasks` */

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `status` enum('New','In Progress','Done') DEFAULT 'New',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tasks` */

insert  into `tasks`(`id`,`name`,`description`,`status`,`created_at`,`updated_at`) values 
(2,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:12','2016-05-11 09:50:23'),
(3,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:13','2016-05-11 09:50:21'),
(4,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:13','2016-05-11 09:50:21'),
(5,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:13','2016-05-11 09:50:20'),
(6,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:15','2016-05-11 09:50:20'),
(7,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:15','2016-05-11 09:50:20'),
(8,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:15','2016-05-11 09:50:19'),
(9,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:16','2016-05-11 09:50:19'),
(10,'Lorem Ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.','New','2016-05-11 09:50:17','2016-05-11 09:50:19'),
(11,'werwe','ewr','New','2016-05-11 16:36:16',NULL),
(12,'Lorem Ipsum','    	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec lorem magna. Nam porta pulvinar molestie. Fusce faucibus felis ut eros volutpat scelerisque. Vivamus fringilla mattis erat, vel porttitor arcu elementum volutpat. Donec id elit vestibulum quam finibus vestibulum in eu orci. Nullam vitae tincidunt metus, id ornare arcu. Praesent blandit porta quam, vel rutrum ex elementum nec. Nulla purus sem, pulvinar nec interdum vitae, ultrices sed purus. In aliquam ex felis, nec pharetra libero efficitur a. Suspendisse dolor justo, luctus at mi in, suscipit iaculis nisi. Cras quis augue quis dui malesuada vestibulum. Duis et mattis lorem. Nunc rutrum mattis tellus vitae commodo.    ','New','2016-05-11 17:23:31',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
