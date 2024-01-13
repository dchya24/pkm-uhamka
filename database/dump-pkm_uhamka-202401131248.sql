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
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrator` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','warek') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `administrator_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrator`
--

LOCK TABLES `administrator` WRITE;
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
INSERT INTO `administrator` VALUES (1,'admin','Darryl Hyatt','$2y$12$AaLmGgycH.5Lzw2k3gTer.fOElwqfUH6TWpNtm6y2b.1zodkZpkUu','admin','2023-12-25 14:00:34','2023-12-25 14:00:34'),(2,'admin2','Administrator 2','$2y$12$AaLmGgycH.5Lzw2k3gTer.fOElwqfUH6TWpNtm6y2b.1zodkZpkUu','admin',NULL,NULL),(5,'warek_1','Wakil Rektor 1 Password','$2y$12$YUxaLn9jGW1VI2vpP6.tcOtlqglDIXtqw2TJnf1xxX4MPW1Bx9Mx2','warek',NULL,'2024-01-11 01:27:48');
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `data_dosen`
--

DROP TABLE IF EXISTS `data_dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_dosen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nidn` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_dosen_nidn_unique` (`nidn`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dosen`
--

LOCK TABLES `data_dosen` WRITE;
/*!40000 ALTER TABLE `data_dosen` DISABLE KEYS */;
INSERT INTO `data_dosen` VALUES (1,'648929164','Fred Crist','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(2,'300601744','Prof. Blair Christiansen','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(3,'537985395','Kevon Mueller III','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(4,'403725400','Mr. Everardo Farrell','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(5,'234948768','Bethany Erdman','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(6,'796242582','Dr. Jordy Adams Sr.','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(7,'955733443','Dr. Norberto Klein IV','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(8,'321961334','Lew Lehner','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(9,'297061557','Ms. Pamela Predovic','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(10,'299784158','Maxine Dooley Sr.','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(11,'222940186','King Hessel','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(12,'546068482','Oleta Pfeffer','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(13,'661006078','Stephon Medhurst','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(14,'437065619','Loyal Turcotte','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(15,'518284031','Lelia Sanford','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(16,'720211404','Jaylin Wehner','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(17,'203264770','Martina Spencer','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(18,'213597276','Jayne Boyle Imported Data','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(19,'976793359','Miss Christiana Gleichner III','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(20,'366953143','Allison Kirlin','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(21,'302779040','Mckenzie Hickle','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(22,'169214617','Guadalupe Macejkovic Imported Data','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(23,'400078522','Maci O\'Connell III','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(24,'934918567','Alvera Glover','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(25,'125965689','Mrs. Ivory Doyle I Imported Data','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(26,'250352522','Zetta Kessler','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(27,'989860720','Bettie Sipes','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(28,'314836677','Dr. Chaz Beahan','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(29,'111745610','Axel Ondricka','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(30,'230486331','Mrs. Berneice Jacobson','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(31,'430673358','Pat Bergnaum','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(32,'889676889','Alyce Senger','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(33,'455697849','Modesta Macejkovic','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(34,'216064131','Linnea Lehner','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(35,'680569869','Selina Denesik','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(36,'491995372','Prof. Jordan Howell Jr.','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(37,'763153890','Dr. Velma Eichmann DDS','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(38,'435784192','Edd Upton','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(39,'100746322','Madisen Schinner No Update','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2024-01-12 06:30:57'),(40,'113228343','Kiarra Kassulke','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(41,'655723486','Dena Emard','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(42,'527658135','Isabel Schinner','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(43,'620963746','Prof. Jamil Durgan Sr.','FTII','Teknik Informatika',1,'2023-12-25 12:30:01','2023-12-25 12:30:01'),(44,'934235337','Agustina Schaefer PhD','FTII','Teknik Informatika',1,'2023-12-25 12:30:02','2023-12-25 12:30:02'),(45,'476916422','Emil Bode','FTII','Teknik Informatika',1,'2023-12-25 12:30:02','2023-12-25 12:30:02'),(46,'145223837','Miss Pearline Feest Imported Data','FTII','Teknik Informatika',1,'2023-12-25 12:30:02','2023-12-25 12:30:02'),(47,'345655918','Noe Kreiger','FTII','Teknik Informatika',1,'2023-12-25 12:30:02','2023-12-25 12:30:02'),(48,'706790587','Gaston Greenholt V','FTII','Teknik Informatika',1,'2023-12-25 12:30:02','2023-12-25 12:30:02'),(49,'780618164','Lazaro Ward II','FTII','Teknik Informatika',1,'2023-12-25 12:30:02','2023-12-25 12:30:02'),(50,'339414814','Boris Doyle','FTII','Teknik Informatika',1,'2023-12-25 12:30:02','2023-12-25 12:30:02'),(52,'NIDN/NIP','Nama Lengkap','Fakultas','Program Studi',1,NULL,NULL);
/*!40000 ALTER TABLE `data_dosen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_mahasiswa`
--

DROP TABLE IF EXISTS `data_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_mahasiswa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_mahasiswa_nim_unique` (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=306 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_mahasiswa`
--

LOCK TABLES `data_mahasiswa` WRITE;
/*!40000 ALTER TABLE `data_mahasiswa` DISABLE KEYS */;
INSERT INTO `data_mahasiswa` VALUES (1,'1903015048','Dr. Gordon Cremin','FTII','Teknik Informatika',0,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(2,'1903015985','Melody Kuhic','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(3,'1903015309','Ryder Hill','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(4,'1903015632','Elise Leuschke','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(5,'1903015591','Prof. Brooklyn Abernathy Sr.','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(6,'1903015886','Arch Kunze','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(7,'1903015772','Quincy Raynor','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(8,'1903015856','Cleta Schoen','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(9,'1903015736','Dr. Shakira Waters','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(10,'1903015275','Dr. Leann Beier','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(11,'1903015403','Mr. Elton Cremin','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(12,'1903015713','Winfield Kovacek','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(13,'1903015084','Mortimer Boyer','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(14,'1903015617','Krystel DuBuque','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(15,'1903015692','Kenya Huels III','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(16,'1903015821','Alycia Dibbert','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(18,'1903015746','Miss Hertha Padberg','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(19,'1903015747','Jamil Dibbert','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(20,'1903015670','Anita Gusikowski','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(21,'1903015946','Mr. Payton Eichmann','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(22,'1903015819','Liam Aufderhar','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(23,'1903015949','Berneice Walker','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(24,'1903015131','Kaelyn Hamill','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(25,'1903015824','Prof. Terrill Ernser','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(26,'1903015854','Loren Spencer','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(27,'1903015768','Timmy Murphy','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(28,'1903015842','Rolando Kozey II','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(29,'1903015845','Shea Murray','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(30,'1903015595','Joesph Heathcote MD','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(31,'1903015695','Mercedes Gislason Sr.','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(32,'1903015624','Miss Zella Huel','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(33,'1903015213','Davin Streich','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(34,'1903015194','Mr. Tracey Rippin Update','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2024-01-12 06:31:13'),(35,'1903015440','Santos White','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(36,'1903015749','Mr. Marcus Walsh','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(37,'1903015553','Fredy Kiehn','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(38,'1903015789','Mr. Dallin Feest MD','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(39,'1903015850','Durward Hand','FTII','Teknik Informatika',1,'2023-12-24 17:57:06','2023-12-24 17:57:06'),(41,'1903015040','Arden Deckow Update','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-25 02:42:11'),(42,'1903015806','Aliya Hessel','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(43,'1903015697','Dr. Lawson Hoppe','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(44,'1903015257','Gudrun Schiller','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(45,'1903015337','Jaylan Bosco','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(46,'1903015861','Mr. Hassan Gorczany DDS','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(47,'1903015042','Mrs. Evelyn Russel','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(48,'1903015959','Mable Wyman','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(49,'1903015072','Dr. Kyler Feest','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(50,'1903015647','Trudie O\'Connell','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(51,'1903015696','Mr. Sheridan Haag PhD','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(52,'1903015800','Twila Larson','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(53,'1903015214','Dr. Lyric Nader V','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(54,'1903015358','Brian Altenwerth','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(55,'1903015793','Brant Konopelski','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(56,'1903015791','Mr. Hollis Kutch','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(57,'1903015605','Cole Pacocha','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(58,'1903015123','Jacinto Ryan PhD','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(59,'1903015939','Shaina Corkery','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(60,'1903015424','Tia Windler Sr.','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(61,'1903015181','Yvette Kassulke','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57'),(62,'1903015235','Dax Lynch','FTII','Teknik Informatika',1,'2023-12-24 17:57:57','2023-12-24 17:57:57');
/*!40000 ALTER TABLE `data_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `informasi`
--

DROP TABLE IF EXISTS `informasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `untuk_mahasiswa` tinyint(1) NOT NULL,
  `untuk_penilai_substansi` tinyint(1) NOT NULL,
  `untuk_penilai_administrasi` tinyint(1) NOT NULL,
  `untuk_peninjau` tinyint(1) NOT NULL,
  `untuk_warek` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informasi`
--

LOCK TABLES `informasi` WRITE;
/*!40000 ALTER TABLE `informasi` DISABLE KEYS */;
INSERT INTO `informasi` VALUES (6,'Bill and Account Collector Update','<p>alsdl;askd;lakd;aksl;d</p>','upload/informasi/Planogram_Dashboard_Application_and_Service_Task_Management_11_Jan.pdf',1,1,1,1,1,'2024-01-11 13:43:16',NULL);
/*!40000 ALTER TABLE `informasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_pkm`
--

DROP TABLE IF EXISTS `jenis_pkm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_pkm` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `singkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_skema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_substansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_administrasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_peninjau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_pkm`
--

LOCK TABLES `jenis_pkm` WRITE;
/*!40000 ALTER TABLE `jenis_pkm` DISABLE KEYS */;
INSERT INTO `jenis_pkm` VALUES (4,'PKM-KT','Karya Tulis Update','upload/jenis-pkm/form_substansi_PKM-KT_4.csv','upload/jenis-pkm/form_administrasi_PKM-KT_4.csv','upload/jenis-pkm/form_peninjau_PKM-KT_4.csv','2024-01-01 14:54:26','2024-01-01 15:20:53');
/*!40000 ALTER TABLE `jenis_pkm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ketua_kelompok`
--

DROP TABLE IF EXISTS `ketua_kelompok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ketua_kelompok` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data_mahasiswa_id` bigint(20) unsigned NOT NULL,
  `nim` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ketua_kelompok_nim_unique` (`nim`),
  KEY `ketua_kelompok_FK` (`data_mahasiswa_id`),
  CONSTRAINT `ketua_kelompok_FK` FOREIGN KEY (`data_mahasiswa_id`) REFERENCES `data_mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ketua_kelompok`
--

LOCK TABLES `ketua_kelompok` WRITE;
/*!40000 ALTER TABLE `ketua_kelompok` DISABLE KEYS */;
INSERT INTO `ketua_kelompok` VALUES (1,2,'1903015985','$2y$12$sYTqINxk0/YHoylVHFguhuV0VpVpG/mqfFMuXykW4qEhyokzA03tC',NULL,NULL),(2,3,'1903015309','$2y$12$xk4BOkZDgZsitctgZ2FeTO5llggmJvOc921Bh1U3RuYgajevrp1QS',NULL,NULL),(3,4,'1903015632','$2y$12$tD/Bl1JPXxAumzdG0QJtmeKBpLZ6L367hK9KjmEgA6lqjQS.xZC/y',NULL,'2024-01-10 16:29:04'),(4,5,'1903015591','$2y$12$LB7uTNnB3UJT.e0oKgBYxOxBf7.PSycAEvh6Kuon24ZCfC50h.gjq',NULL,NULL);
/*!40000 ALTER TABLE `ketua_kelompok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_12_24_143404_create_data_mahasiswas_table',1),(6,'2023_12_25_051416_create_data_dosens_table',2),(7,'2023_12_25_135538_create_administrators_table',3),(8,'2023_12_26_125721_create_penilais_table',4),(9,'2023_12_26_152220_create_peninjaus_table',4),(10,'2023_12_28_134348_create_ketua_kelompoks_table',4),(11,'2023_12_29_152220_create_peninjaus_table',5),(13,'2024_01_01_142319_create_jenis_pkms_table',6),(16,'2024_01_02_150222_create_usulans_table',7),(17,'2024_01_02_152444_create_informasis_table',7),(20,'2024_01_03_150222_create_usulans_table',8),(21,'2024_01_04_145617_add_column_usulan_table',9),(22,'2024_01_05_014555_add_column_usulan',10),(23,'2024_01_06_060610_add_new_column_usulan_table',11),(24,'2024_01_06_172239_create_rekomendasis_table',12),(26,'2024_01_07_170830_create_sertifikats_table',13),(29,'2024_01_08_160405_create_akses_halamen_table',14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penilai`
--

DROP TABLE IF EXISTS `penilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penilai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_penilai` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = Administrasi, 2 = Substansi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `penilai_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penilai`
--

LOCK TABLES `penilai` WRITE;
/*!40000 ALTER TABLE `penilai` DISABLE KEYS */;
INSERT INTO `penilai` VALUES (1,'halvorson.ebony','Dr. Barton Hettinger II','$2y$12$HEKHkfuedgTqizW1lBn/Yupk41k.7x1LbKT4die2QdO6mLBk7pT3y','1','2023-12-30 13:40:59','2024-01-11 01:37:48'),(2,'kaylin.funk','Kaylah Romaguera','$2y$12$uvpnKeFejNsjNLKKrAUtwePN5CTs0t04pguFYcIGjLCshBht7/DEK','2','2023-12-30 13:40:59','2024-01-10 23:17:33'),(3,'quinton22','Ms. Pat Heidenreich','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(4,'gracie.jacobson','Shaun Littel','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(5,'hmosciski','Prof. Guadalupe Goyette IV','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(6,'saul17','Maud Considine','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(7,'wilmer01','Chandler Howe','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(8,'glen.cummerata','Monroe White','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(9,'vinnie.ernser','Mabel Rogahn','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(10,'laverne.metz','Violette Huel','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(11,'wbartell','Mr. Rowland Dicki V','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(12,'rodriguez.amir','Obie Schulist DDS','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(13,'mertz.esta','Dr. Duane Padberg','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(14,'lauryn66','Miss Lucinda Stoltenberg V','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(15,'kip.sawayn','Vicenta Bode','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(16,'jaskolski.otha','Leonor Quigley DDS','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59'),(17,'elinor50','Yoshiko Koelpin','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(18,'zelda.grimes','Kaci Bartoletti','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(19,'crooks.desiree','Prof. Jameson Lindgren MD','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','1','2023-12-30 13:40:59','2023-12-30 13:40:59'),(20,'simone27','Ms. Verlie Veum','$2y$12$lZ4kdau3lJSZw1D4Vrd3Xe5DKb4a/svTgQbEP01X.aiKJY0e0iKY6','2','2023-12-30 13:40:59','2023-12-30 13:40:59');
/*!40000 ALTER TABLE `penilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peninjau`
--

DROP TABLE IF EXISTS `peninjau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peninjau` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data_dosen_id` bigint(20) unsigned NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `peninjau_username_unique` (`username`),
  UNIQUE KEY `peninjau_UN` (`data_dosen_id`),
  CONSTRAINT `peninjau_FK` FOREIGN KEY (`data_dosen_id`) REFERENCES `data_dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peninjau`
--

LOCK TABLES `peninjau` WRITE;
/*!40000 ALTER TABLE `peninjau` DISABLE KEYS */;
INSERT INTO `peninjau` VALUES (1,1,'648929164','$2y$12$oAXgGbRiYC/wfAeWt6AwgOvVt9h75XnxDTNUlMse6ZIvxxkgW6QPK',NULL,'2024-01-11 01:15:11');
/*!40000 ALTER TABLE `peninjau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `rekomendasi`
--

DROP TABLE IF EXISTS `rekomendasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rekomendasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_group` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rekomendasi`
--

LOCK TABLES `rekomendasi` WRITE;
/*!40000 ALTER TABLE `rekomendasi` DISABLE KEYS */;
INSERT INTO `rekomendasi` VALUES (1,'belmawa','www.belmawa-update.com',NULL,'2024-01-06 17:50:05'),(2,'internal','www.internal.com',NULL,NULL);
/*!40000 ALTER TABLE `rekomendasi` ENABLE KEYS */;
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

--
-- Table structure for table `usulan`
--

DROP TABLE IF EXISTS `usulan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usulan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendahuluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_pkm_id` bigint(20) unsigned DEFAULT NULL,
  `anggaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pengajuan` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua_kelompok_id` bigint(20) unsigned NOT NULL,
  `tugas_ketua_kelompok` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggota_satu_id` bigint(20) unsigned DEFAULT NULL,
  `tugas_anggota_satu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggota_dua_id` bigint(20) unsigned DEFAULT NULL,
  `tugas_anggota_dua` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggota_tiga_id` bigint(20) unsigned DEFAULT NULL,
  `tugas_anggota_tiga` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anggota_empat_id` bigint(20) unsigned DEFAULT NULL,
  `tugas_anggota_empat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembar_biodata_kelompok` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembimbing_id` bigint(20) unsigned DEFAULT NULL,
  `lembar_bimbingan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembar_proposal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembar_biodata_dospem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lembar_pengesahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penilai_substansi_id` bigint(20) unsigned DEFAULT NULL,
  `form_penilaian_substansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_penilaian_substansi` enum('sedang dinilai','mayor','minor') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penilai_administrasi_id` bigint(20) unsigned DEFAULT NULL,
  `form_penilaian_administrasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_penilaian_administrasi` enum('not_submited','submited','waiting','done','rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peninjau_id` bigint(20) unsigned DEFAULT NULL,
  `form_penilaian_peninjau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_penilaian_peninjau` enum('not_submited','submited','waiting','done','rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wakil_rektor_id` bigint(20) unsigned DEFAULT NULL,
  `status_rekomendasi` enum('internal','belmawa') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentar_ke_warek` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentar_ke_mahasiswa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usulan_jenis_pkm_id` (`jenis_pkm_id`),
  KEY `usulan_FK_ketua_kelompok_id` (`ketua_kelompok_id`),
  KEY `usulan_FK_anggota_1_id` (`anggota_satu_id`),
  KEY `usulan_FK_wakil_rektor_id` (`wakil_rektor_id`),
  KEY `usulan_FK_anggota_3_id` (`anggota_tiga_id`),
  KEY `usulan_FK_anggota_2_id` (`anggota_dua_id`),
  KEY `usulan_FK_anggota_4_id` (`anggota_empat_id`),
  KEY `usulan_FK__pembimbing_id` (`pembimbing_id`),
  KEY `usulan_FK_substansi_id` (`penilai_substansi_id`),
  KEY `usulan_FK_administrasi_id` (`penilai_administrasi_id`),
  KEY `usulan_FK_peninjau_id` (`peninjau_id`),
  CONSTRAINT `usulan_FK__pembimbing_id` FOREIGN KEY (`pembimbing_id`) REFERENCES `data_dosen` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_FK_administrasi_id` FOREIGN KEY (`penilai_administrasi_id`) REFERENCES `penilai` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_FK_anggota_1_id` FOREIGN KEY (`anggota_satu_id`) REFERENCES `data_mahasiswa` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_FK_anggota_2_id` FOREIGN KEY (`anggota_dua_id`) REFERENCES `data_mahasiswa` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_FK_anggota_3_id` FOREIGN KEY (`anggota_tiga_id`) REFERENCES `data_mahasiswa` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_FK_anggota_4_id` FOREIGN KEY (`anggota_empat_id`) REFERENCES `data_mahasiswa` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_FK_ketua_kelompok_id` FOREIGN KEY (`ketua_kelompok_id`) REFERENCES `data_mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usulan_FK_peninjau_id` FOREIGN KEY (`peninjau_id`) REFERENCES `peninjau` (`id`) ON DELETE SET NULL,
  CONSTRAINT `usulan_FK_substansi_id` FOREIGN KEY (`penilai_substansi_id`) REFERENCES `penilai` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_FK_wakil_rektor_id` FOREIGN KEY (`wakil_rektor_id`) REFERENCES `administrator` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `usulan_jenis_pkm_id` FOREIGN KEY (`jenis_pkm_id`) REFERENCES `jenis_pkm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usulan`
--

LOCK TABLES `usulan` WRITE;
/*!40000 ALTER TABLE `usulan` DISABLE KEYS */;
INSERT INTO `usulan` VALUES (3,'Test 09 updAATE','Test 09 updAATE','1',4,'6000000','2024',4,'Test 09 updAATE',37,'Test 09 updAATE',61,'Test 09 updAATE',62,'Test 09 updAATE',13,'Test 09 updAATE','upload/lembar_biodata_kelompok/Games Dashboard Task Management 8 Jan 2024.pdf',40,'upload/lembar_bimbingan/Customer_And_Sales_Analytics_for_Kasumi_Planogram_Task_Management (10).pdf','upload/lembar_proposal/Kasumi Workflow Task Management 9 Jan 2024.pdf','upload/lembar_biodata_dospem/Kasumi Workflow Task Management 11 Jan 2024.pdf','upload/lembar_pengesahan/ignica Web Task Management 4 Jan 2024.pdf',2,'upload/penilaian/substansi/hourly_pay04012024.csv','minor',1,'upload/penilaian/administrasi/User_Exceptive_List_2023-09-05.csv','done',1,'upload/penilaian/peninjau/hourly_pay04012024.csv','done',NULL,NULL,'','','2024-01-09 14:31:35','2024-01-13 04:14:35');
/*!40000 ALTER TABLE `usulan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'pkm_uhamka'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-13 12:48:26
