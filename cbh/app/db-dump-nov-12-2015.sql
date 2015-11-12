-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
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
INSERT INTO `properties` VALUES ('5642be5e35845',1,450,1,'My Beautiful Home','The validator method of the Registrar contains the validation rules for new users of the application, while the create method of the Registrar is responsible for creating new User records in your database. You are free to modify each of these methods as you wish. The Registrar is called by the AuthController via the methods contained in the AuthenticatesAndRegistersUsers trait.','63 Commerford Street','Thorold','ON','house','| Bedding | Smoking Allowed | Pots & Pans | Internet | Pool or Gym | ',1,1,1,1,'uploads/5642be5e35845/home.jpg','uploads/5642be5e35845','me@jamesearle.ca','2015-11-11 09:04:46','2015-11-11 09:04:46','2015-11-11 09:04:46'),('56441942eae37',1,450,2400,'bitchin ass home`','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n','12 Commerford Street','Thorold','ON','house','| Air Conditioning & Heating | Microwave | Bedding | Smoking Allowed | Pots & Pans | Balcony | Pool or Gym | Cable TV | Washer & Dryer | ',5,3,5,3,'uploads/56441942eae37/2800.jpg','uploads/56441942eae37','j_earle@hotmail.com','2015-11-12 09:44:50','2015-11-12 09:44:50','2015-11-12 09:44:50'),('56442b50a21ff',1,400,2000,'Very close to bar and corner store!','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','234 Summers Drive','Thorold','ON','house','| Air Conditioning & Heating | Microwave | Toaster | Nearby Park | Bedding | Smoking Allowed | Pots & Pans | Balcony | Internet | Cable TV | Washer & Dryer | ',4,2,5,3,'uploads/56442b50a21ff/nice modern home.jpg','uploads/56442b50a21ff','j_earle@hotmail.com','2015-11-12 11:01:52','2015-11-12 11:01:52','2015-11-12 11:01:52'),('56442c1d8edf6',1,500,2048,'bitchin ass home','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','33 Baxter Crescent','Thorold','ON','house','| Air Conditioning & Heating | Microwave | Smoking Allowed | Internet | Cable TV | ',4,3,12,3,'uploads/56442c1d8edf6/modern pool.jpg','uploads/56442c1d8edf6','j_earle@hotmail.com','2015-11-12 11:05:17','2015-11-12 11:05:17','2015-11-12 11:05:17');
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
INSERT INTO `users` VALUES ('564296bb9d826','James the Landlord','j_earle@hotmail.com','$2y$10$JtZBkp3.R5XGapyKROC6juqCvC6xjm3hN2xaW6dXjYBMJ48J0XigS',0,1,NULL,'2015-11-11 06:15:39','2015-11-11 06:15:39'),('564296d96c78e','Mr James Student','je11zi@brocku.ca','$2y$10$NXs39x6wz7lArY5WjRX/qOL1YH.ft3D6ErMck4h4BlGxZLd0UJZtC',0,0,'Q8yoU0Xhotc14cn3HHJv7rq5fs4YZsFPvSihhsLMX2TITZ7EWIUqN4d8QO15','2015-11-11 06:16:09','2015-11-11 08:16:29'),('5642a0318b5d0','Alex','alex@cbhousing.ca','$2y$10$NyHVzqzD/VaYvNaSMuh7d.y1vI9DudLFtDUowqpKTeTRoKH.T4ZRi',0,0,NULL,'2015-11-11 06:56:01','2015-11-11 06:56:01'),('5642b32d7ccc7','James Earle','me@jamesearle.ca','$2y$10$Arj1lSOIG9SWRLztHLJzv.0NQwuUzpKoOx8kjmY.s2DsUzi9kNHrm',0,1,NULL,'2015-11-11 08:17:01','2015-11-11 08:17:01');
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

-- Dump completed on 2015-11-12  1:53:10
