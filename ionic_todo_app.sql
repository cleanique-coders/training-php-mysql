/*
SQLyog Community v12.2.2 (64 bit)
MySQL - 10.0.24-MariaDB-7 : Database - ionic_todo_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ionic_todo_app` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ionic_todo_app`;

/*Table structure for table `tasks` */

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `status` enum('New','In Progress','Done') DEFAULT 'New',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tasks` */

insert  into `tasks`(`id`,`user_id`,`name`,`description`,`status`,`created_at`,`updated_at`) values 
(2,2,'Some real name','description 2','','2016-05-04 02:02:38','2016-05-05 07:28:33'),
(3,1,'task 3','description 3','In Progress','2016-05-04 02:02:38','2016-05-04 06:44:21'),
(4,2,'task 4','description 1','','2016-05-04 02:02:38','2016-05-04 06:44:34'),
(5,1,'task 5','description 1','In Progress','2016-05-04 02:02:38','2016-05-04 06:44:43'),
(10,1,'My first blog task!!','lorem ipsum','New','2016-05-05 06:10:32','2016-05-05 06:10:32'),
(11,1,'My first blog task!!','lorem ipsum','New','2016-05-05 07:26:56','2016-05-05 07:26:56'),
(13,1,'asdsadas!!','lorem ipsum','New','2016-05-05 07:27:43','2016-05-05 07:27:43'),
(14,1,'asdsadas!!','lorem ipsum','New','2016-05-05 07:28:03','2016-05-05 07:28:03'),
(15,1,'asdsadas!!','lorem ipsum','New','2016-05-05 07:28:33','2016-05-05 07:28:33');

/*Table structure for table `tokens` */

DROP TABLE IF EXISTS `tokens`;

CREATE TABLE `tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tokens` */

insert  into `tokens`(`id`,`user_id`,`token`,`created_at`,`expired_at`) values 
(1,1,'7b3c1440449e17415074de46ad1675fb','2016-05-19 07:17:34','2016-06-18 07:17:34');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`created_at`,`updated_at`) values 
(1,'nasrul','81dc9bdb52d04dc20036dbd8313ed055','2016-05-05 10:40:52','2016-05-05 10:40:52'),
(2,'hazim','81dc9bdb52d04dc20036dbd8313ed055','2016-05-05 10:47:59','2016-05-05 10:47:59');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
