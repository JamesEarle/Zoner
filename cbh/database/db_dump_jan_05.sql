-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cbhousing
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
INSERT INTO `properties` VALUES ('56479567a1f22',1,43.1092094,-79.2232908,450,1700,'My Beautiful home','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n','12 Commerford Street','Thorold','ON','house','| Air Conditioning & Heating | Microwave | ',4,2,6,3,'uploads/56479567a1f22/home.jpg','uploads/56479567a1f22','j_earle@hotmail.com','2015-11-15 01:11:19','2015-11-15 01:11:19','2015-11-15 01:11:19'),('564797502123a',1,43.1096457,-79.2204212,500,1700,'Down the road','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n','63 Commerford Street','Thorold','ON','house','| Bedding | Smoking Allowed | Internet | Pool or Gym | Cable TV | ',4,2,6,3,'uploads/564797502123a/IMG_2460.JPG','uploads/564797502123a','j_earle@hotmail.com','2015-11-15 01:19:28','2015-11-15 01:19:28','2015-11-15 01:19:28'),('5647a2f81a8e7',1,43.1089223,-79.2289621,700,1700,'Right next to bus stop ','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n','94 Keefer Road','Thorold','ON','house','| Air Conditioning & Heating | Microwave | Bedding | Internet | Pool or Gym | Cable TV | ',123,12,5,1,'uploads/5647a2f81a8e7/IMG_0939.JPG','uploads/5647a2f81a8e7','j_earle@hotmail.com','2015-11-15 02:09:12','2015-11-15 02:09:12','2015-11-15 02:09:12'),('5664839d9d00b',1,43.124052,-79.2005465,535,120,'Mature Student Rental','Josh did f did fjc he the she she she she she she ahaha she is d d diamshebebrh ','42 Front Street South','Thorold','ON','Apartment','| Air Conditioning & Heating | Microwave | Toaster | Internet | Washer & Dryer | ',1,1,7,1,'uploads/5664839d9d00b/image.jpeg','uploads/5664839d9d00b','alex@cbhousing.ca','2015-12-06 18:51:09','2015-12-06 18:51:09','2015-12-06 18:51:09'),('566a19ce55e19',1,43.1171062,-79.2323294,490,1600,'Premium Student Rental','This home located at 181 Winterberry Blvd in Thorold is ideal for BROCK UNIVERSITY STUDENTS as it is an exquisite 6 bedroom townhouse with 3.5 baths! Priced from $490/month (per room), the home is furnished with a couch, television, all appliances (including dishwasher and freezer), dining table, beds, side tables, and desk with chair. The main floor has a large living room, dining area, powder room and a beautiful kitchen. The upper floor has 4 bedrooms with two full bathrooms. The basement has 2 bedrooms with a bathroom. This home is located in the most desirable subdivision of Thorold as it is just minutes from Brock University!! \r\n\r\nPlease Note: We have a large inventory of 6 bedroom homes in Thorold available from May 2016 including 103 Winterberry Blvd, 107 Winterberry Blvd, 136 Winterberry Blvd, 139 Winterberry Blvd, 173 Winterberry Blvd, 66 Juneberry Road, 68 Juneberry Road. And 70 Juneberry Road! ','181 Winterberry','Thorold','ON','House','| Air Conditioning & Heating | Microwave | Toaster | Internet | Garage | Washer & Dryer | ',6,3,4,1,'uploads/566a19ce55e19/DSC_9802 copy.jpg','uploads/566a19ce55e19','info@mizrentals.com','2015-12-11 00:33:18','2015-12-11 00:33:18','2015-12-11 00:33:18'),('566f372ac4f00',1,43.1170321,-79.2276325,450,1500,'Beautiful Test Home','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n','99 Winterberry Boulevard','Thorold','ON','House','| Air Conditioning & Heating | Microwave | Toaster | Bedding | Smoking Allowed | Pots & Pans | Internet | ',2,2,4,3,'uploads/566f372ac4f00/IMG_1120.JPG','uploads/566f372ac4f00','j_earle@hotmail.com','2015-12-14 21:39:54','2015-12-14 21:39:54','2015-12-14 21:39:54');
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
INSERT INTO `users` VALUES ('56478f8955e57','James Earle','j_earle@hotmail.com','$2y$10$Q8a0t0RGuDhDkrTDqjR//uhHK2nsYxs.hfeL7VLTdVll9z7JvVHj2',0,1,NULL,'2015-11-15 00:46:17','2015-11-15 00:46:17'),('564d33dd864aa','Alex Mohr','alex@cbhousing.ca','$2y$10$6ZwDwtI3oiWCbIcjPdnIt.o.RoCX/Ozt.eCPfVUrEHtwgJPc.qkO.',0,1,NULL,'2015-11-19 02:28:45','2015-11-19 02:28:45'),('5663dbc781966','James Earle','me@jamesearle.ca','$2y$10$SOtfW.oR9YbQYqhWHoPZOuqLjC/aDDIoiFJNPLMorTZAIoFGBPB5S',0,0,NULL,'2015-12-06 06:55:03','2015-12-06 06:55:03'),('566a17f237f19','Vaseem Shaikh','info@mizrentals.com','$2y$10$YOL7moabhSjAo5aPG9UfZeZghhJFTuIM4.D0wd3hCSX4JL5xTtroG',0,1,NULL,'2015-12-11 00:25:22','2015-12-11 00:25:22'),('566f3d979818f','Cody Murdoch','cm11_1@hotmail.com','$2y$10$2ZtKEESq1vfpmEI1Rv3gVuwZuzZqeLIBq3bb0kN.rMLuCdpgs0lPS',0,1,NULL,'2015-12-14 22:07:19','2015-12-14 22:07:19');
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

-- Dump completed on 2016-01-06  0:23:45
