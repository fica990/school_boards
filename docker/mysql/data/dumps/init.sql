CREATE DATABASE IF NOT EXISTS test;

-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Title','mail@mail.com','text',0,'2020-03-27 19:14:02'),(2,'Title 2','mail@mail.com','text',1,'2020-03-27 19:14:03'),(3,'Title 3','mail@mail.com','text',1,'2020-03-27 19:14:06'),(4,'Title 4','mail@mail.com','text',1,'2020-03-27 19:14:07'),(5,'Title 5','filipmitrovic90@gmail.com','dfgdfg',0,'2020-03-27 19:21:02'),(6,'Title 6','filipmitrovic90@gmail.com','asdasdasd',0,'2020-03-27 19:23:48'),(7,'Title 7','mail@mail.com','asdasd',1,'2020-03-27 19:49:30'),(8,'Title 8','mail@mail.com','asdasd',0,'2020-03-27 19:49:57'),(9,'Title 9','filipmitrovic90@gmail.com','asdasdasd',0,'2020-03-27 19:50:21'),(10,'Title 10','filipmitrovic90@gmail.com','asdasdasd',1,'2020-03-27 19:52:15');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'title','/assets/img/','product_1.jpg','desc text desc text desc text 1'),(2,'title_2','/assets/img/','product_2.jpg','desc text desc text desc text 2'),(3,'title_3','/assets/img/','product_3.jpg','desc text desc text desc text 3'),(4,'title_4','/assets/img/','product_4.jpg','desc text desc text desc text 4'),(5,'title_5','/assets/img/','product_5.jpg','desc text desc text desc text 5'),(6,'title_6','/assets/img/','product_6.jpg','desc text desc text desc text 6'),(7,'title_7','/assets/img/','product_7.jpg','desc text desc text desc text 7'),(8,'title_8','/assets/img/','product_8.jpg','desc text desc text desc text 8'),(9,'title_9','/assets/img/','product_9.jpg','desc text desc text desc text 9');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'test'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-27 22:43:02