# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.19)
# Database: chemicalshifts
# Generation Time: 2018-10-23 21:14:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table compounds
# ------------------------------------------------------------

DROP TABLE IF EXISTS `compounds`;

CREATE TABLE `compounds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `compounds` WRITE;
/*!40000 ALTER TABLE `compounds` DISABLE KEYS */;

INSERT INTO `compounds` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'water','2018-10-23 20:49:22','2018-10-23 20:49:22'),
	(2,'acetic acid','2018-10-23 20:49:31','2018-10-23 20:49:31'),
	(3,'acetone','2018-10-23 20:49:34','2018-10-23 20:49:34'),
	(4,'acetonitrile','2018-10-23 20:49:37','2018-10-23 20:49:37'),
	(5,'benzene','2018-10-23 20:49:40','2018-10-23 20:49:40'),
	(6,'tert-butyl alcohol','2018-10-23 20:49:47','2018-10-23 20:49:47'),
	(7,'chloroform','2018-10-23 20:49:51','2018-10-23 20:49:51'),
	(8,'18-crown-6','2018-10-23 20:49:54','2018-10-23 20:49:54'),
	(9,'cyclohexane','2018-10-23 20:50:06','2018-10-23 20:50:06'),
	(10,'1,2-dichloroethane','2018-10-23 20:50:30','2018-10-23 20:50:30'),
	(11,'dichloromethane','2018-10-23 20:50:36','2018-10-23 20:50:36'),
	(12,'diethyl ether','2018-10-23 20:50:42','2018-10-23 20:50:42'),
	(13,'diglyme','2018-10-23 20:50:47','2018-10-23 20:50:47'),
	(14,'dimethylformamide','2018-10-23 20:50:55','2018-10-23 20:50:55'),
	(15,'1,4-dioxane','2018-10-23 20:51:00','2018-10-23 20:51:00'),
	(16,'DME','2018-10-23 20:51:03','2018-10-23 20:51:03'),
	(17,'ethane','2018-10-23 20:51:06','2018-10-23 20:51:06'),
	(18,'ethanol','2018-10-23 20:51:08','2018-10-23 20:51:08'),
	(19,'ethyl acetate','2018-10-23 20:51:10','2018-10-23 20:51:10'),
	(20,'ethylene','2018-10-23 20:51:12','2018-10-23 20:51:12'),
	(21,'ethylene glycol','2018-10-23 20:51:18','2018-10-23 20:51:18'),
	(22,'grease','2018-10-23 20:51:24','2018-10-23 20:51:24'),
	(23,'hexamethylbenzene','2018-10-23 20:51:30','2018-10-23 20:51:30'),
	(24,'n-hexane','2018-10-23 20:51:34','2018-10-23 20:51:34'),
	(25,'HMDSO','2018-10-23 20:51:39','2018-10-23 20:51:39'),
	(26,'HMPA','2018-10-23 20:51:41','2018-10-23 20:51:41'),
	(27,'hydrogen','2018-10-23 20:51:49','2018-10-23 20:51:49'),
	(28,'imidazole','2018-10-23 20:51:52','2018-10-23 20:51:52'),
	(29,'methane','2018-10-23 20:51:54','2018-10-23 20:51:54'),
	(30,'methanol','2018-10-23 20:51:57','2018-10-23 20:51:57'),
	(31,'nitromethane','2018-10-23 20:51:59','2018-10-23 20:51:59'),
	(32,'n-pentane','2018-10-23 20:52:02','2018-10-23 20:52:02'),
	(33,'propane','2018-10-23 20:52:10','2018-10-23 20:52:10'),
	(34,'2-propanol','2018-10-23 20:52:14','2018-10-23 20:52:14'),
	(35,'propylene','2018-10-23 20:52:17','2018-10-23 20:52:17'),
	(36,'pyridine','2018-10-23 20:52:21','2018-10-23 20:52:21'),
	(37,'pyrrole','2018-10-23 20:52:25','2018-10-23 20:52:25'),
	(38,'pyrrolidine','2018-10-23 20:52:33','2018-10-23 20:52:33'),
	(39,'silicone grease','2018-10-23 20:52:39','2018-10-23 20:52:39'),
	(40,'tetrahydrofuran','2018-10-23 20:52:44','2018-10-23 20:52:44'),
	(41,'toluene','2018-10-23 20:52:46','2018-10-23 20:52:46'),
	(42,'triethylamine','2018-10-23 20:52:51','2018-10-23 20:52:51');

/*!40000 ALTER TABLE `compounds` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
