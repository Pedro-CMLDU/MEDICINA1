-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: senac
-- ------------------------------------------------------
-- Server version	8.4.0

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Máquina'),(2,'Equipamentos'),(3,'Robótica'),(4,'Impressora');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `qtd` int NOT NULL,
  `qtd_max` int NOT NULL,
  `descr` varchar(255) NOT NULL,
  `id_cat` int DEFAULT NULL,
  `id_uni_med` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_uni_med` (`id_uni_med`),
  KEY `fk_id_cat` (`id_cat`),
  CONSTRAINT `fk_id_cat` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id`),
  CONSTRAINT `fk_id_uni_med` FOREIGN KEY (`id_uni_med`) REFERENCES `uni_med` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material`
--

LOCK TABLES `material` WRITE;
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
INSERT INTO `material` VALUES (1,500,1000,'Filamento',4,1),(2,200,500,'Arduino',3,1);
/*!40000 ALTER TABLE `material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reserva` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stts` tinyint(1) DEFAULT NULL,
  `solicitante` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `dt` date DEFAULT NULL,
  `id_us` int DEFAULT NULL,
  `hr_f` time NOT NULL,
  `hr_i` time NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_us` (`id_us`),
  CONSTRAINT `fk_id_us` FOREIGN KEY (`id_us`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
INSERT INTO `reserva` VALUES (1,1,'David Engels Marquez','Trabalho de Robótica','2024-06-25',1,'00:00:00','00:00:00',''),(2,1,'Heitor Renildo Barbosa','Impressora 3D','2024-07-07',3,'00:00:00','00:00:00','');
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resmat`
--

DROP TABLE IF EXISTS `resmat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resmat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `qtd_uti` int NOT NULL,
  `id_res` int DEFAULT NULL,
  `id_mat` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_res` (`id_res`),
  KEY `fk_id_mat` (`id_mat`),
  CONSTRAINT `fk_id_mat` FOREIGN KEY (`id_mat`) REFERENCES `material` (`id`),
  CONSTRAINT `fk_id_res` FOREIGN KEY (`id_res`) REFERENCES `reserva` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resmat`
--

LOCK TABLES `resmat` WRITE;
/*!40000 ALTER TABLE `resmat` DISABLE KEYS */;
INSERT INTO `resmat` VALUES (1,5,1,2),(2,10,2,1);
/*!40000 ALTER TABLE `resmat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'Funcionário(a)'),(2,'Aluno(a)'),(3,'Visitante externo');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni_med`
--

DROP TABLE IF EXISTS `uni_med`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_med` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_med`
--

LOCK TABLES `uni_med` WRITE;
/*!40000 ALTER TABLE `uni_med` DISABLE KEYS */;
INSERT INTO `uni_med` VALUES (1,'Unidade'),(2,'Quilograma'),(3,'Litro'),(4,'Grama');
/*!40000 ALTER TABLE `uni_med` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cpf` char(11) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `stts` tinyint(1) DEFAULT NULL,
  `data_nasc` date NOT NULL,
  `id_tipo` int DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_tipo` (`id_tipo`),
  CONSTRAINT `fk_id_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'43930573932','Jose47','José Lucas Nascimento',1,'1947-04-08',3,'asvdbsdfsdf@gmail.com'),(2,'02375538755','Marilda123','Constância Da Silva Marilda',1,'1963-12-02',1,'relampagomarquinhos23@gmail.com'),(3,'34665578523','Heitorzin1610','Heitor Renildo Barbosa',1,'2005-10-16',2,''),(4,'97057483956','$2y$10$T3uyzs9DTglp4keF03JwwOgaGRcBK3sFeTADHK/iL82A0pw../I6m','Samuel Lucas',1,'2002-02-04',1,'senac123431@gmail.com');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-02  8:12:14
