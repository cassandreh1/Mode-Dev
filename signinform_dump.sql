-- MySQL dump 10.13  Distrib 5.6.38, for osx10.9 (x86_64)
--
-- Host: localhost    Database: sign_in
-- ------------------------------------------------------
-- Server version	5.6.38

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
-- Table structure for table `signinform`
--

DROP TABLE IF EXISTS `signinform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signinform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signinform`
--

LOCK TABLES `signinform` WRITE;
/*!40000 ALTER TABLE `signinform` DISABLE KEYS */;
INSERT INTO `signinform` VALUES (12,'cass@test.com','2018-03-21 15:51:38'),(13,'cass@test.com','2018-03-21 15:54:47'),(14,'cass@test.com','2018-03-21 15:56:20'),(15,'cass@test.com','2018-03-21 15:56:31'),(16,'cass@test.com','2018-03-21 15:59:17'),(17,'test5@gmail.com','2018-03-21 16:36:34'),(18,'','2018-03-21 16:51:32'),(19,'cass@test.com','2018-03-22 01:54:40'),(20,'cass@test.com','2018-03-22 01:54:46'),(21,'cass@test.com','2018-03-22 01:54:52'),(22,'cass@test.com','2018-03-22 01:55:55'),(23,'cass@test.com','2018-03-22 01:56:43'),(24,'cass@test.com','2018-03-22 01:56:50'),(25,'','2018-03-22 01:56:56'),(26,'','2018-03-22 01:56:59'),(27,'','2018-03-22 03:03:44'),(28,'','2018-03-22 03:04:45'),(29,'','2018-03-22 03:05:03'),(30,'','2018-03-22 03:06:18'),(31,'','2018-03-22 03:06:41'),(32,'','2018-03-22 03:07:39'),(33,'','2018-03-22 03:09:16'),(34,'','2018-03-22 03:10:39'),(35,'','2018-03-22 03:12:57'),(36,'','2018-03-22 03:13:08'),(37,'','2018-03-22 03:15:09'),(38,'','2018-03-22 03:19:21'),(39,'test5@gmail.com','2018-03-22 03:19:34'),(40,' ','2018-03-22 03:22:30'),(41,' ','2018-03-22 03:22:38'),(42,' ','2018-03-22 03:23:20'),(43,'testing2@gmail.com','2018-03-22 03:26:06'),(44,'cassandreh01@aim.com','2018-03-22 04:59:05'),(45,'cassandreh01@gmail.com','2018-03-22 05:00:09');
/*!40000 ALTER TABLE `signinform` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-22 11:02:33
