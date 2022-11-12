-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: Compras
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

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
-- Current Database: `Compras`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `Compras` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `Compras`;

--
-- Table structure for table `catalogo`
--

DROP TABLE IF EXISTS `catalogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catalogo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) COLLATE utf8mb3_spanish_ci NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalogo`
--

LOCK TABLES `catalogo` WRITE;
/*!40000 ALTER TABLE `catalogo` DISABLE KEYS */;
INSERT INTO `catalogo` VALUES (1,'Computadora',100.00),(2,'Mouse',5.00),(3,'Teclado',7.00),(4,'Tarjeta de video',125.55);
/*!40000 ALTER TABLE `catalogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `base2`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `base2` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `base2`;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb3_unicode_ci NOT NULL,
  `codigocurso` int NOT NULL,
  `mail` varchar(45) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci COMMENT='codigo, nombre, codigocurso, mail';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Juan Ramirez',2,'jrmz@utn.com'),(2,'Luis Diaz',2,'ldiz@utn.com'),(3,'Barbara Aleman',3,'balem@utn.com');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `prueba`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `prueba` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `prueba`;

--
-- Table structure for table `buscador`
--

DROP TABLE IF EXISTS `buscador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buscador` (
  `canciones` varchar(150) COLLATE utf8mb3_spanish_ci NOT NULL,
  PRIMARY KEY (`canciones`),
  UNIQUE KEY `canciones_UNIQUE` (`canciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buscador`
--

LOCK TABLES `buscador` WRITE;
/*!40000 ALTER TABLE `buscador` DISABLE KEYS */;
INSERT INTO `buscador` VALUES ('Aces of the exile - Sabaton'),('Nightmare - Avenged Sevenfold'),('Shoot to thrill - ACDC'),('This Means War - Avenged Sevenfold'),('Warriors of the world - Man o War');
/*!40000 ALTER TABLE `buscador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-12  2:01:19
