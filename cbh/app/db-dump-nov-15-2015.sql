-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: cbhousing
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `locations_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2015_09_29_035138_create_locations_table',1),('2015_10_21_220545_create_properties_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `vacant` tinyint(1) NOT NULL DEFAULT '0',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `price` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `province` text COLLATE utf8_unicode_ci NOT NULL,
  `property_type` text COLLATE utf8_unicode_ci NOT NULL,
  `features` text COLLATE utf8_unicode_ci NOT NULL,
  `rooms` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `distance_to_school` double NOT NULL,
  `time_to_bus` double NOT NULL,
  `featured-image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `landlord-email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `properties_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES ('56479567a1f22',1,43.1092094,-79.2232908,450,1700,'My Beautiful home','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n','12 Commerford Street','Thorold','ON','house','| Air Conditioning & Heating | Microwave | ',4,2,6,3,'uploads/56479567a1f22/home.jpg','uploads/56479567a1f22','j_earle@hotmail.com','2015-11-15 01:11:19','2015-11-15 01:11:19','2015-11-15 01:11:19'),('564797502123a',1,43.1096457,-79.2204212,500,1700,'Down the road','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n','63 Commerford Street','Thorold','ON','house','| Bedding | Smoking Allowed | Internet | Pool or Gym | Cable TV | ',4,2,6,3,'uploads/564797502123a/IMG_2460.JPG','uploads/564797502123a','j_earle@hotmail.com','2015-11-15 01:19:28','2015-11-15 01:19:28','2015-11-15 01:19:28'),('564798feb532c',1,43.1201777,-79.2467251,500,23,'Down the road','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n','500 Glenridge Ave','St. Catharines','ON','house','| Pots & Pans | ',123,123,123,123,'uploads/564798feb532c/deis-architecture.png','uploads/564798feb532c','j_earle@hotmail.com','2015-11-15 01:26:38','2015-11-15 01:26:38','2015-11-15 01:26:38'),('5647a2f81a8e7',1,43.1089223,-79.2289621,700,1700,'Right next to bus stop ','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n','94 Keefer Road','Thorold','ON','house','| Air Conditioning & Heating | Microwave | Bedding | Internet | Pool or Gym | Cable TV | ',123,12,5,1,'uploads/5647a2f81a8e7/IMG_0939.JPG','uploads/5647a2f81a8e7','j_earle@hotmail.com','2015-11-15 02:09:12','2015-11-15 02:09:12','2015-11-15 02:09:12'),('5647b11d010f4',1,43.1354108,-79.2275716,300,1200,'Party house','https://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webarhttps://github.com/jeromeetienne/threex.webar','108 Jabson Street','St. Catharines','ON','house','| Air Conditioning & Heating | Bedding | Internet | ',5,2,10,1,'uploads/5647b11d010f4/IMG_1008.JPG','uploads/5647b11d010f4','j_earle@hotmail.com','2015-11-15 03:09:33','2015-11-15 03:09:33','2015-11-15 03:09:33'),('56480aa13a340',1,43.1236091,-79.1989299,500,23,'My Fake Address','James EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames EarleJames Earle','123 Fake Street','Thorold','ON','house','| Bedding | Smoking Allowed | Pots & Pans | ',15,1,10000,12,'uploads/56480aa13a340/microsoft-hq.jpg','uploads/56480aa13a340','j_earle@hotmail.com','2015-11-15 09:31:29','2015-11-15 09:31:29','2015-11-15 09:31:29');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `subscriber` tinyint(1) NOT NULL,
  `landlord` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `users_id_unique` (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('56478f8955e57','James Earle','j_earle@hotmail.com','$2y$10$Q8a0t0RGuDhDkrTDqjR//uhHK2nsYxs.hfeL7VLTdVll9z7JvVHj2',0,1,NULL,'2015-11-15 00:46:17','2015-11-15 00:46:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-15 14:07:50
