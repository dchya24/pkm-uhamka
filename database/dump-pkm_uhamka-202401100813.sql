-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: pkm_uhamka
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB-1:10.4.22+maria~focal

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
-- Table structure for table `akses_halaman`
--

DROP TABLE IF EXISTS `akses_halaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akses_halaman` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buka_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubah_nilai_substansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubah_nilai_administrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubah_nilai_peninjauan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubah_rekomendasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akses_halaman`
--

LOCK TABLES `akses_halaman` WRITE;
/*!40000 ALTER TABLE `akses_halaman` DISABLE KEYS */;
INSERT INTO `akses_halaman` VALUES (1,'usulan-1','Usulan 1','0','1','1','1','1',NULL,'2024-01-08 17:10:37'),(2,'usulan-2','Usulan 2','1','0','0','0','0',NULL,NULL),(3,'usulan-3','Usulan 3','0','0','0','0','0',NULL,NULL),(4,'usulan-4','Usulan 4','0','0','0','0','0',NULL,NULL),(5,'usulan-5','Usulan 5','0','0','0','0','0',NULL,NULL);
/*!40000 ALTER TABLE `akses_halaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sertifikat`
--

DROP TABLE IF EXISTS `sertifikat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sertifikat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sertifikat`
--

LOCK TABLES `sertifikat` WRITE;
/*!40000 ALTER TABLE `sertifikat` DISABLE KEYS */;
INSERT INTO `sertifikat` VALUES (1,'Games Dashboard Task Management 5 Jan 2024.pdf','upload/sertifikat/Games Dashboard Task Management 5 Jan 2024.pdf','2024-01-07 17:23:26','2024-01-07 17:23:26'),(2,'ignica Web Task Management 5 Jan 2024.pdf','upload/sertifikat/ignica Web Task Management 5 Jan 2024.pdf','2024-01-07 17:23:26','2024-01-07 17:23:26'),(3,'Kasumi MiiL Website Task Management 5 Jan 2024.pdf','upload/sertifikat/Kasumi MiiL Website Task Management 5 Jan 2024.pdf','2024-01-07 17:23:26','2024-01-07 17:23:26'),(4,'Kasumi Workflow Task Management 5 Jan 2024.pdf','upload/sertifikat/Kasumi Workflow Task Management 5 Jan 2024.pdf','2024-01-07 17:23:26','2024-01-07 17:23:26');
/*!40000 ALTER TABLE `sertifikat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-10  8:13:51
