-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: ks2
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cim`
--

DROP TABLE IF EXISTS `cim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cim` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kapcsolat_id` bigint unsigned NOT NULL,
  `cim_cime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cim_aktiv` tinyint(1) NOT NULL,
  `cim_letrehozas` datetime NOT NULL,
  `cim_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cim_kapcsolat_id_foreign` (`kapcsolat_id`),
  CONSTRAINT `cim_kapcsolat_id_foreign` FOREIGN KEY (`kapcsolat_id`) REFERENCES `kapcsolat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cim`
--

LOCK TABLES `cim` WRITE;
/*!40000 ALTER TABLE `cim` DISABLE KEYS */;
/*!40000 ALTER TABLE `cim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `egyenivallalkozo`
--

DROP TABLE IF EXISTS `egyenivallalkozo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `egyenivallalkozo` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ugyfel_id` bigint unsigned NOT NULL,
  `evafa_id` bigint unsigned NOT NULL,
  `ev_okmnyszam` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ev_statszam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ev_nev` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ev_letrehozas` datetime NOT NULL,
  `ev_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `egyenivallalkozo_ugyfel_id_foreign` (`ugyfel_id`),
  KEY `egyenivallalkozo_evafa_id_foreign` (`evafa_id`),
  CONSTRAINT `egyenivallalkozo_evafa_id_foreign` FOREIGN KEY (`evafa_id`) REFERENCES `evafa` (`id`) ON DELETE CASCADE,
  CONSTRAINT `egyenivallalkozo_ugyfel_id_foreign` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfel` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `egyenivallalkozo`
--

LOCK TABLES `egyenivallalkozo` WRITE;
/*!40000 ALTER TABLE `egyenivallalkozo` DISABLE KEYS */;
INSERT INTO `egyenivallalkozo` VALUES (1,3,2,'45657567','7325656','Kovács Sándor E.V.','2021-11-21 13:52:03','2021-11-21 13:52:03');
/*!40000 ALTER TABLE `egyenivallalkozo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `esemeny`
--

DROP TABLE IF EXISTS `esemeny`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `esemeny` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ugyfel_id` bigint unsigned NOT NULL,
  `kothat_id` bigint unsigned NOT NULL,
  `esem_letrehozas` datetime NOT NULL,
  `esem_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `esemeny_ugyfel_id_foreign` (`ugyfel_id`),
  KEY `esemeny_kothat_id_foreign` (`kothat_id`),
  CONSTRAINT `esemeny_kothat_id_foreign` FOREIGN KEY (`kothat_id`) REFERENCES `kothat` (`id`) ON DELETE CASCADE,
  CONSTRAINT `esemeny_ugyfel_id_foreign` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfel` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esemeny`
--

LOCK TABLES `esemeny` WRITE;
/*!40000 ALTER TABLE `esemeny` DISABLE KEYS */;
INSERT INTO `esemeny` VALUES (1,1,2,'2022-01-29 19:14:00','2022-01-29 19:14:00'),(2,2,2,'2022-01-29 19:14:00','2022-01-29 19:14:00'),(3,1,3,'2022-01-29 19:14:00','2022-01-29 19:14:00');
/*!40000 ALTER TABLE `esemeny` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evafa`
--

DROP TABLE IF EXISTS `evafa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evafa` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `evafa_kod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evafa_leiras` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evafa_letrehozas` datetime NOT NULL,
  `evafa_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evafa`
--

LOCK TABLES `evafa` WRITE;
/*!40000 ALTER TABLE `evafa` DISABLE KEYS */;
INSERT INTO `evafa` VALUES (1,'E1','Áfa fizetésére nem kötelezett','2021-11-21 13:52:03','2021-11-21 13:52:03'),(2,'E2','Áfa fizetésére kötelezett','2021-11-21 13:52:03','2021-11-21 13:52:03'),(3,'E3','Evaalany egyéni vállalkozó','2021-11-21 13:52:03','2021-11-21 13:52:03');
/*!40000 ALTER TABLE `evafa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hatarnap`
--

DROP TABLE IF EXISTS `hatarnap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hatarnap` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `hatn_nap` datetime NOT NULL,
  `hatn_aktiv` tinyint(1) NOT NULL,
  `hatn_letrehozas` datetime NOT NULL,
  `hatn_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hatarnap`
--

LOCK TABLES `hatarnap` WRITE;
/*!40000 ALTER TABLE `hatarnap` DISABLE KEYS */;
INSERT INTO `hatarnap` VALUES (1,'2021-01-07 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(2,'2021-01-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(3,'2021-01-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(4,'2021-01-20 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(5,'2021-01-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(6,'2021-02-01 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(7,'2021-02-05 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(8,'2021-02-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(9,'2021-02-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(10,'2021-02-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(11,'2021-02-22 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(12,'2021-02-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(13,'2021-03-01 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(14,'2021-03-05 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(15,'2021-03-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(16,'2021-03-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(17,'2021-03-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(18,'2021-03-22 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(19,'2021-03-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(20,'2021-03-31 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(21,'2021-04-06 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(22,'2021-04-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(23,'2021-04-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(24,'2021-04-20 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(25,'2021-04-26 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(26,'2021-04-30 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(27,'2021-05-04 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(28,'2021-05-05 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(29,'2021-05-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(30,'2021-05-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(31,'2021-05-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(32,'2021-05-20 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(33,'2021-05-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(34,'2021-05-31 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(35,'2021-06-07 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(36,'2021-06-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(37,'2021-06-14 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(38,'2021-06-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(39,'2021-06-21 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(40,'2021-06-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(41,'2021-06-30 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(42,'2021-07-05 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(43,'2021-07-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(44,'2021-07-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(45,'2021-07-20 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(46,'2021-07-26 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(47,'2021-08-05 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(48,'2021-08-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(49,'2021-08-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(50,'2021-08-16 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(51,'2021-08-23 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(52,'2021-08-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(53,'2021-08-31 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(54,'2021-09-06 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(55,'2021-09-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(56,'2021-09-13 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(57,'2021-09-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(58,'2021-09-20 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(59,'2021-09-27 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(60,'2021-09-30 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(61,'2021-10-05 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(62,'2021-10-11 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(63,'2021-10-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(64,'2021-10-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(65,'2021-10-20 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(66,'2021-10-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(67,'2021-11-05 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(68,'2021-11-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(69,'2021-11-12 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(70,'2021-11-22 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(71,'2021-11-25 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(72,'2021-12-06 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(73,'2021-12-10 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(74,'2021-12-13 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(75,'2021-12-15 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(76,'2021-12-20 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(77,'2021-12-27 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(78,'2021-12-31 23:59:00',0,'2022-01-24 15:32:22','2022-01-24 15:32:22'),(79,'2022-01-03 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(80,'2022-01-05 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(81,'2022-01-12 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(82,'2022-01-17 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(83,'2022-01-20 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(84,'2022-01-25 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(85,'2022-02-21 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(86,'2022-02-25 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(87,'2022-03-21 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(88,'2022-03-31 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(89,'2022-04-01 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(90,'2022-04-20 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45'),(91,'2022-05-31 23:59:00',1,'2022-01-24 15:41:45','2022-01-24 15:41:45');
/*!40000 ALTER TABLE `hatarnap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imel`
--

DROP TABLE IF EXISTS `imel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `imel` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kapcsolat_id` bigint unsigned NOT NULL,
  `imel_cim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imel_aktiv` tinyint(1) NOT NULL,
  `imel_letrehozas` datetime NOT NULL,
  `imel_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `imel_kapcsolat_id_foreign` (`kapcsolat_id`),
  CONSTRAINT `imel_kapcsolat_id_foreign` FOREIGN KEY (`kapcsolat_id`) REFERENCES `kapcsolat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imel`
--

LOCK TABLES `imel` WRITE;
/*!40000 ALTER TABLE `imel` DISABLE KEYS */;
/*!40000 ALTER TABLE `imel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kapcsolat`
--

DROP TABLE IF EXISTS `kapcsolat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kapcsolat` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ugyfel_id` bigint unsigned NOT NULL,
  `szemely_id` bigint unsigned NOT NULL,
  `kapcs_letrehozas` datetime NOT NULL,
  `kapcs_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kapcsolat_ugyfel_id_foreign` (`ugyfel_id`),
  KEY `kapcsolat_szemely_id_foreign` (`szemely_id`),
  CONSTRAINT `kapcsolat_szemely_id_foreign` FOREIGN KEY (`szemely_id`) REFERENCES `szemely` (`id`) ON DELETE CASCADE,
  CONSTRAINT `kapcsolat_ugyfel_id_foreign` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfel` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kapcsolat`
--

LOCK TABLES `kapcsolat` WRITE;
/*!40000 ALTER TABLE `kapcsolat` DISABLE KEYS */;
/*!40000 ALTER TABLE `kapcsolat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kotelezettseg`
--

DROP TABLE IF EXISTS `kotelezettseg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kotelezettseg` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kottip_id` bigint unsigned NOT NULL,
  `kot_leiras` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kot_szam` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kot_kie` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kot_aktiv` tinyint(1) NOT NULL,
  `kot_letrehozas` datetime NOT NULL,
  `kot_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kotelezettseg_kottip_id_foreign` (`kottip_id`),
  CONSTRAINT `kotelezettseg_kottip_id_foreign` FOREIGN KEY (`kottip_id`) REFERENCES `kottip` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kotelezettseg`
--

LOCK TABLES `kotelezettseg` WRITE;
/*!40000 ALTER TABLE `kotelezettseg` DISABLE KEYS */;
INSERT INTO `kotelezettseg` VALUES (10,1,'Havi bevallás a kifizetésekkel, juttatásokkal összefüggő adóról, járulékokról és egyéb adatokról, valamint a szakképzési hozzájárulásról','2008','M, E, T',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(11,2,'Az adókedvezményre jogosító igazolást kiállító szerv adatszolgáltatása a tartósan álláskereső, a gyermekgondozási díjban, gyermekgondozást segítő ellátásban, gyermeknevelési támogatásban, valamint legalább 3 gyermek után járó családi pótlékban részesülő magánszemély részére kiállított igazolásról','K100','T',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(12,1,'Bevallás a kiegészítő tevékenységet folytatónak nem minősülő egyéni vállalkozó szociális hozzájárulási adó és járulék kötelezettségéről, valamint a biztosított mezőgazdasági őstermelő járulék kötelezettségéről”','2058','M2, M3, E',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(13,1,'Havi bevallás a 2019. évi CXXII. törvény 87. § szerinti kötelezettek részére a szociális hozzájárulási adóról, a járulékokról és egyéb adatokról','2008INT','M, E, T',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(14,2,'A munkáltató adatszolgáltatása a védett korban elbocsátott köztisztviselők részére kiállított igazolásokról','K111','T',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(15,2,'Adatszolgáltatás a jövedéki engedélyes kereskedő készletváltozásáról','NAV_J09','E1, E2, T1, T2, T4',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(16,2,'Üzemanyagtöltő állomás adatszolgáltatása','NAV_J41','E1, E2, T1, T2, T4',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(17,3,'Kisadózó vállalkozások tételes adója','','E1, E2, T1, T2',1,'2022-01-24 10:33:38','2022-01-24 10:33:38'),(18,3,'Szociális hozzájárulási adó','','M1, M2, M3, E, T',1,'2022-01-24 10:33:38','2022-01-24 10:33:38');
/*!40000 ALTER TABLE `kotelezettseg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kothat`
--

DROP TABLE IF EXISTS `kothat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kothat` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `hatarnap_id` bigint unsigned NOT NULL,
  `kot_id` bigint unsigned NOT NULL,
  `kothat_letrehozas` datetime NOT NULL,
  `kothat_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kothat_hatarnap_id_foreign` (`hatarnap_id`),
  KEY `kothat_kot_id_foreign` (`kot_id`),
  CONSTRAINT `kothat_hatarnap_id_foreign` FOREIGN KEY (`hatarnap_id`) REFERENCES `hatarnap` (`id`) ON DELETE CASCADE,
  CONSTRAINT `kothat_kot_id_foreign` FOREIGN KEY (`kot_id`) REFERENCES `kotelezettseg` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kothat`
--

LOCK TABLES `kothat` WRITE;
/*!40000 ALTER TABLE `kothat` DISABLE KEYS */;
INSERT INTO `kothat` VALUES (2,1,10,'2022-01-29 19:14:00','2022-01-29 19:14:00'),(3,2,11,'2022-01-29 19:14:00','2022-01-29 19:14:00');
/*!40000 ALTER TABLE `kothat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kottip`
--

DROP TABLE IF EXISTS `kottip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kottip` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kottip_nev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kottip_letrehozas` datetime NOT NULL,
  `kottip_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kottip`
--

LOCK TABLES `kottip` WRITE;
/*!40000 ALTER TABLE `kottip` DISABLE KEYS */;
INSERT INTO `kottip` VALUES (1,'Bevallás','2022-01-24 10:20:31','2022-01-24 10:20:31'),(2,'Befizetés','2022-01-24 10:20:31','2022-01-24 10:20:31'),(3,'Adatszolgáltatás','2022-01-24 10:20:31','2022-01-24 10:20:31'),(4,'Közlemény','2022-01-24 10:20:31','2022-01-24 10:20:31'),(5,'Egyéb','2022-01-24 10:20:31','2022-01-24 10:20:31');
/*!40000 ALTER TABLE `kottip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maganszemely`
--

DROP TABLE IF EXISTS `maganszemely`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maganszemely` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ugyfel_id` bigint unsigned NOT NULL,
  `msafa_id` bigint unsigned NOT NULL,
  `ms_adoazonosito` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_tajszam` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_szulhely` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_szulido` date DEFAULT NULL,
  `ms_aneve` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_szigszam` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ms_letrehozas` datetime NOT NULL,
  `ms_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `maganszemely_ms_adoazonosito_unique` (`ms_adoazonosito`),
  UNIQUE KEY `maganszemely_ms_tajszam_unique` (`ms_tajszam`),
  KEY `maganszemely_ugyfel_id_foreign` (`ugyfel_id`),
  KEY `maganszemely_msafa_id_foreign` (`msafa_id`),
  CONSTRAINT `maganszemely_msafa_id_foreign` FOREIGN KEY (`msafa_id`) REFERENCES `msafa` (`id`) ON DELETE CASCADE,
  CONSTRAINT `maganszemely_ugyfel_id_foreign` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfel` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maganszemely`
--

LOCK TABLES `maganszemely` WRITE;
/*!40000 ALTER TABLE `maganszemely` DISABLE KEYS */;
INSERT INTO `maganszemely` VALUES (1,1,3,'0123456789','87869876','Szeged','1957-07-15','Topomán Rozália','859732HD','2021-11-21 13:52:03','2021-11-21 13:52:03'),(2,2,3,'25639874','865987456','Szentes','1969-08-14','Kiss Mária','','2021-11-21 13:52:03','2021-11-21 13:52:03'),(4,7,3,'256398745','7869876',NULL,NULL,NULL,NULL,'2021-11-21 13:54:09','2021-11-21 13:54:09');
/*!40000 ALTER TABLE `maganszemely` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_10_28_193310_create_ucsoport_table',1),(7,'2021_10_28_193439_create_ugyfel_table',1),(8,'2021_10_28_200706_create_kottip_table',1),(9,'2021_10_28_200804_create_hatarnap_table',1),(10,'2021_10_28_202044_create_kotelezettseg_table',1),(11,'2021_10_28_202336_create_kothat_table',1),(12,'2021_10_28_202555_create_esemeny_table',1),(13,'2021_10_28_202813_create_tafa_table',1),(14,'2021_10_28_202940_create_tarsasag_table',1),(15,'2021_10_28_203350_create_evafa_table',1),(16,'2021_10_28_203534_create_egyenivallalkozo_table',1),(17,'2021_10_28_203709_create_msafa_table',1),(18,'2021_10_28_203807_create_maganszemely_table',1),(19,'2021_10_28_204427_create_szemely_table',1),(20,'2021_10_28_204736_create_kapcsolat_table',1),(21,'2021_10_28_204912_create_cim_table',1),(22,'2021_10_28_205126_create_telefon_table',1),(23,'2021_10_28_205227_create_imel_table',1),(24,'2021_10_31_095316_create_sessions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msafa`
--

DROP TABLE IF EXISTS `msafa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `msafa` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `msafa_kod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msafa_leiras` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msafa_letrehozas` datetime NOT NULL,
  `msafa_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msafa`
--

LOCK TABLES `msafa` WRITE;
/*!40000 ALTER TABLE `msafa` DISABLE KEYS */;
INSERT INTO `msafa` VALUES (1,'M0','Adószámmal nem rendelkező','2021-11-21 13:52:02','2021-11-21 13:52:02'),(2,'M1','Adószámmal rendelkező, aki nem alanya az általános forgalmi adónak (pl. munkáltatói minőségben)','2021-11-21 13:52:02','2021-11-21 13:52:02'),(3,'M2','Adószámmal rendelkező, áfa fizetésére nem kötelezett','2021-11-21 13:52:02','2021-11-21 13:52:02'),(4,'M3','Adószámmal rendelkező, áfa fizetésére nem kötelezett','2021-11-21 13:52:02','2021-11-21 13:52:02');
/*!40000 ALTER TABLE `msafa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('ZtTXIEf3Habh0t781AWshkP3ENPjjl1MKqA9pkD6',1,'192.168.0.37','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36 Edg/97.0.1072.76','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWFIxcHJ0ZHkyOHBEalBmUkE5cHBpSVo4RUhVUnhrV1BkUmc1QVNLMSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTkyLjE2OC4wLjM3OjgwMDAvZXNlbWVueWVrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEdsd1pqNDB5NWtMdVNVWjFVSlNPUi5PaHRaVGJNTVJmVERNY3VuQVZSYkdYN0JrSGtUYi5hIjt9',1643564478);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `szemely`
--

DROP TABLE IF EXISTS `szemely`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `szemely` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ugyfel_id` bigint unsigned NOT NULL,
  `szem_beosztas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `szem_vezeteknev` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `szem_keresztnev` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `szem_aktiv` tinyint(1) NOT NULL,
  `szem_letrehozas` datetime NOT NULL,
  `szem_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `szemely_ugyfel_id_foreign` (`ugyfel_id`),
  CONSTRAINT `szemely_ugyfel_id_foreign` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfel` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `szemely`
--

LOCK TABLES `szemely` WRITE;
/*!40000 ALTER TABLE `szemely` DISABLE KEYS */;
INSERT INTO `szemely` VALUES (1,2,'Titkár','Nemes','Endre',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(2,4,'Titkár','Kerekes','Bettina',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(3,4,'Adminisztrátor','Lukács','Kristóf',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(4,2,'Számlavezető','Veres','Kincső',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(5,2,'Menedzser','Faragó','Fanni',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(6,4,'Előadó','Jónás','Zsombor',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(7,1,'Könyvelő','Pásztor','Erzsébet',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(8,2,'Menedzser','Pásztor','Hunor',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(9,1,'Ügyvezető','Máté','Valéria',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(10,1,'Számlavezető','Pásztor','Jenő',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(11,1,'Előadó','Gulyás','Sándor',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(12,4,'Adminisztrátor','Bognár','Csenge',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(13,2,'Adminisztrátor','Fábián','Géza',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(14,1,'Előadó','Borbély','Kevin',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(15,2,'Előadó','Kelemen','László',1,'2021-11-21 13:52:03','2021-11-21 13:52:03');
/*!40000 ALTER TABLE `szemely` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tafa`
--

DROP TABLE IF EXISTS `tafa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tafa` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tafa_kod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tafa_leiras` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tafa_letrehozas` datetime NOT NULL,
  `tafa_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tafa`
--

LOCK TABLES `tafa` WRITE;
/*!40000 ALTER TABLE `tafa` DISABLE KEYS */;
INSERT INTO `tafa` VALUES (1,'T1','Áfa fizetésére nem kötelezett','2021-11-21 13:52:03','2021-11-21 13:52:03'),(2,'T2','Áfa fizetésére kötelezett','2021-11-21 13:52:03','2021-11-21 13:52:03'),(3,'T3','Evaalany társaság','2021-11-21 13:52:03','2021-11-21 13:52:03'),(4,'T4','Non-profit szervezet, egyéb adóalanyok (alapítvány, közalapítvány, társadalmi szervezet, köztestület, egyház, lakásszövetkezet, önkéntes kölcsönös biztosító pénztár) és egyéb (pl. ügyvédi iroda, végrehajtói iroda, szabadalmi ügyvivő iroda, közjegyzői iroda, magánszemélyek jogi személyiséggel rendelkező munkaközössége, erdőbirtokossági társulat, MRP-célszervezet, közhasznú társaság, vizitársulat)','2021-11-21 13:52:03','2021-11-21 13:52:03');
/*!40000 ALTER TABLE `tafa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarsasag`
--

DROP TABLE IF EXISTS `tarsasag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tarsasag` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ugyfel_id` bigint unsigned NOT NULL,
  `tafa_id` bigint unsigned NOT NULL,
  `tars_cegnev` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tars_cegjszam` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tars_letrehozas` datetime NOT NULL,
  `tars_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tarsasag_ugyfel_id_foreign` (`ugyfel_id`),
  KEY `tarsasag_tafa_id_foreign` (`tafa_id`),
  CONSTRAINT `tarsasag_tafa_id_foreign` FOREIGN KEY (`tafa_id`) REFERENCES `tafa` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tarsasag_ugyfel_id_foreign` FOREIGN KEY (`ugyfel_id`) REFERENCES `ugyfel` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarsasag`
--

LOCK TABLES `tarsasag` WRITE;
/*!40000 ALTER TABLE `tarsasag` DISABLE KEYS */;
INSERT INTO `tarsasag` VALUES (1,4,2,'Kovács Szállítmányozó Kft.','58-69-564987','2021-11-21 13:52:03','2021-11-21 13:52:03'),(2,7,2,'Kovács Szállítmányozó Kft.','58-69-564987','2021-11-21 13:52:03','2021-11-21 13:52:03');
/*!40000 ALTER TABLE `tarsasag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefon`
--

DROP TABLE IF EXISTS `telefon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telefon` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kapcsolat_id` bigint unsigned NOT NULL,
  `tel_szam` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_aktiv` tinyint(1) NOT NULL,
  `tel_letrehozas` datetime NOT NULL,
  `tel_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `telefon_kapcsolat_id_foreign` (`kapcsolat_id`),
  CONSTRAINT `telefon_kapcsolat_id_foreign` FOREIGN KEY (`kapcsolat_id`) REFERENCES `kapcsolat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefon`
--

LOCK TABLES `telefon` WRITE;
/*!40000 ALTER TABLE `telefon` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ucsoport`
--

DROP TABLE IF EXISTS `ucsoport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ucsoport` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ucsop_nev` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ucsop_letrehozas` datetime NOT NULL,
  `ucsop_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ucsoport`
--

LOCK TABLES `ucsoport` WRITE;
/*!40000 ALTER TABLE `ucsoport` DISABLE KEYS */;
INSERT INTO `ucsoport` VALUES (1,'Magánszemély','2021-11-21 13:52:02','2021-11-21 13:52:02'),(2,'Egyéni vállalkozó','2021-11-21 13:52:02','2021-11-21 13:52:02'),(3,'Társaság','2021-11-21 13:52:02','2021-11-21 13:52:02');
/*!40000 ALTER TABLE `ucsoport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ugyfel`
--

DROP TABLE IF EXISTS `ugyfel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ugyfel` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ucsoport_id` bigint unsigned NOT NULL,
  `ugyf_azonosito` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ugyf_leiras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ugyf_adoszam` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ugyf_kadoszam` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ugyf_alapitas` date DEFAULT NULL,
  `ugyf_aktiv` tinyint(1) NOT NULL,
  `ugyf_letrehozas` datetime NOT NULL,
  `ugyf_mod` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ugyfel_ucsoport_id_foreign` (`ucsoport_id`),
  CONSTRAINT `ugyfel_ucsoport_id_foreign` FOREIGN KEY (`ucsoport_id`) REFERENCES `ucsoport` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ugyfel`
--

LOCK TABLES `ugyfel` WRITE;
/*!40000 ALTER TABLE `ugyfel` DISABLE KEYS */;
INSERT INTO `ugyfel` VALUES (1,1,'001','Józsi bácsi','96965887-2-06','HU96965887','2021-11-16',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(2,1,'002','leírás_1','63478956-1-26','HU63478956','2021-11-20',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(3,2,'003','cipész','96582536-5-64','HU96582536','2021-11-20',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(4,3,'004','költöztetés','78459658-1-26','HU78459658','2021-11-20',1,'2021-11-21 13:52:03','2021-11-21 13:52:03'),(7,1,'005',NULL,'76574474','78459658','2021-11-21',1,'2021-11-21 13:54:09','2021-11-21 13:54:09');
/*!40000 ALTER TABLE `ugyfel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Finta Gyula','fintagyula@fintagy.hu',NULL,'$2y$10$GlwZj40y5kLuSUZ1UJSOR.OhtZTbMMRfTDMcunAVRbGX7BkHkTb.a',NULL,NULL,'a0FIMeSruQyUcbuWBNCy3epj5qfTXep7MyYM7Djap3ky94tjNAshCd3jxRQx',NULL,'2021-11-21 12:52:03','2022-01-25 18:37:47',NULL);
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

-- Dump completed on 2022-01-30 18:46:12
