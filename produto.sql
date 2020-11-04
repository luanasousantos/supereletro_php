-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: supereletro
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'cafeteira','Cafeteira Expresso Dolce Gusto Nescafé Arno',435.00,399.00,'Imagens/cafeteira%20expresso%20Dolce%20gusto.jpg'),(2,'cafeteira','Cafeteira Expresso Oster Primalatte cinza e preto',350.00,280.00,'Imagens/Cafeteira%20expresso%20primalatte.jpg'),(3,'fogao','Fogão 4 bocas Consul branco',500.00,450.00,'Imagens/fogao%20Consul%204%20bocas.jpg'),(4,'fogao','Fogão Atlas 5 bocas Tropical Glass',1510.00,1129.00,'Imagens/fog%C3%A3o%20atlas%205%20bocas.jpg'),(5,'geladeira','Geladeira e refrigerador Electrolux Frost Free Inox',3029.00,2083.00,'Imagens/geladeira%20e%20refrigerador%20Electrolux%20Frost%20Free%20Inox.jpg'),(6,'geladeira','Geladeira e refrigerador Panasonic Frost Free',2295.00,2120.00,'Imagens/Geladeira%20Panasonic%20Frost%20Free.jpg'),(7,'geladeira','Geladeira Frost Free Facilite Consul',3241.00,3100.00,'Imagens/Geladeira%20Frost%20free%20Facilite%20Consul.jpg'),(8,'lava_loucas','Lava-louças Brastemp Ative',1253.00,1124.00,'Imagens/Lava-loucas%20brastemp%20ative.jpg'),(9,'micro_ondas','Forno de Micro-ondas com menu fácil Consul',500.00,460.00,'Imagens/forno-de-micro-ondas-consul-cm020bf-com-menu-uso-facil-20-l-2436571.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-03 22:15:33
