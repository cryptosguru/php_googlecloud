-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: grocerease_db
-- ------------------------------------------------------
-- Server version	5.7.25-google-log

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
-- Current Database: `grocerease_db`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `grocerease_db` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `grocerease_db`;

--
-- Table structure for table `adds`
--

DROP TABLE IF EXISTS `adds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adds` (
  `itemId` int(11) NOT NULL,
  `shoppingUsername` varchar(30) NOT NULL,
  PRIMARY KEY (`itemId`,`shoppingUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adds`
--

LOCK TABLES `adds` WRITE;
/*!40000 ALTER TABLE `adds` DISABLE KEYS */;
INSERT INTO `adds` VALUES (1101,'username4'),(1102,'sarkaria101'),(1103,'brownsNation'),(1103,'sundayfootball'),(1104,'johnsmith13');
/*!40000 ALTER TABLE `adds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authenticates`
--

DROP TABLE IF EXISTS `authenticates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authenticates` (
  `userUsername` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `loginUsername` varchar(30) NOT NULL,
  PRIMARY KEY (`userUsername`,`email`,`loginUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authenticates`
--

LOCK TABLES `authenticates` WRITE;
/*!40000 ALTER TABLE `authenticates` DISABLE KEYS */;
INSERT INTO `authenticates` VALUES ('brownsNation','browns4life@gmail.com',''),('goatbron','lebronagoat@yahoo.com','goatbron'),('johnSmith','johnsmith@gmail.com','johnSmith'),('jsarkaria99','jsarkaria99@gmail.com','jsarkaria99'),('sarkaria101','sarkss@gmail.com','');
/*!40000 ALTER TABLE `authenticates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `defines`
--

DROP TABLE IF EXISTS `defines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `defines` (
  `username` varchar(30) NOT NULL,
  `itemId` int(11) NOT NULL,
  PRIMARY KEY (`username`,`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `defines`
--

LOCK TABLES `defines` WRITE;
/*!40000 ALTER TABLE `defines` DISABLE KEYS */;
INSERT INTO `defines` VALUES ('brownsNation',1),('brownsNation',3),('goatbron',4),('jamesharden',1);
/*!40000 ALTER TABLE `defines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_inventory_list`
--

DROP TABLE IF EXISTS `home_inventory_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_inventory_list` (
  `username` varchar(30) NOT NULL,
  `itemId` int(11) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `remaining` int(11) NOT NULL,
  PRIMARY KEY (`username`,`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_inventory_list`
--

LOCK TABLES `home_inventory_list` WRITE;
/*!40000 ALTER TABLE `home_inventory_list` DISABLE KEYS */;
INSERT INTO `home_inventory_list` VALUES ('brownsNation',5,'bread',1),('brownsNation',7,'spaghetti',4),('brownsNation',13,'chicken soup',15),('goatbron',1,'apple',1),('goatbron',8,'mango',5),('goatbron',11,'eggplant',3),('goatbron',12,'onions',1);
/*!40000 ALTER TABLE `home_inventory_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_list`
--

DROP TABLE IF EXISTS `item_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_list` (
  `itemId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_list`
--

LOCK TABLES `item_list` WRITE;
/*!40000 ALTER TABLE `item_list` DISABLE KEYS */;
INSERT INTO `item_list` VALUES (1,'apple','Fruit'),(2,'banana','Fruit'),(3,'milk','Beverages'),(4,'apple juice','Beverages'),(5,'bread','Grains'),(6,'oatmeal','Grains'),(7,'spaghetti','Grains'),(8,'mango','Fruit'),(9,'lettuce','Vegetables'),(10,'tomatoes','Vegetables'),(11,'eggplant','Vegetables'),(12,'onions','Vegetables');
/*!40000 ALTER TABLE `item_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_list_category`
--

DROP TABLE IF EXISTS `item_list_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_list_category` (
  `itemId` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_list_category`
--

LOCK TABLES `item_list_category` WRITE;
/*!40000 ALTER TABLE `item_list_category` DISABLE KEYS */;
INSERT INTO `item_list_category` VALUES (1,'Fruit'),(2,'Vegetables'),(3,'Beverages'),(4,'Household'),(5,'Grains'),(6,'Dairy'),(7,'Other'),(8,'Meat');
/*!40000 ALTER TABLE `item_list_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('brownsNation','browns4life@gmail.com','2020-10-15 01:15:30'),('goatbron','lebronagoat@yahoo.com','2020-10-01 08:05:20'),('johnSmith','johnsmith@gmail.com','2020-10-24 20:59:59'),('jsarkaria99','jsarkaria99@gmail.com','2020-10-11 13:23:44'),('sarkaria101','sarkss@gmail.com','2020-10-20 17:11:55'),('sundayfootball','nflseason@yahoo.com','2020-09-17 18:20:52');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopping_list`
--

DROP TABLE IF EXISTS `shopping_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopping_list` (
  `username` varchar(30) NOT NULL,
  `itemId` int(11) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `bought` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`username`,`itemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopping_list`
--

LOCK TABLES `shopping_list` WRITE;
/*!40000 ALTER TABLE `shopping_list` DISABLE KEYS */;
INSERT INTO `shopping_list` VALUES ('brownsNation',1,'apple',3,0),('brownsNation',3,'milk',1,0),('brownsNation',9,'lettuce',1,0),('goatbron',1,'apple',3,1),('goatbron',4,'apple juice',1,0),('goatbron',12,'onions',5,0);
/*!40000 ALTER TABLE `shopping_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tracks`
--

DROP TABLE IF EXISTS `tracks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tracks` (
  `itemId` int(11) NOT NULL,
  `inventoryUsername` varchar(30) NOT NULL,
  PRIMARY KEY (`itemId`,`inventoryUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tracks`
--

LOCK TABLES `tracks` WRITE;
/*!40000 ALTER TABLE `tracks` DISABLE KEYS */;
INSERT INTO `tracks` VALUES (1101,'jsarkaria99'),(1102,'sarkaria101'),(1103,'brownsNation'),(1103,'sundayfootball'),(1104,'johnsmith13');
/*!40000 ALTER TABLE `tracks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('brownsNation','browns4life@gmail.com','brownsSeason','4403297618'),('goatbron','lebronagoat@yahoo.com','mypassword',''),('johnSmith','johnsmith@gmail.com','thisisunbreakable','3301123121'),('jsarkaria99','jsarkaria99@gmail.com','password1','5712681950'),('sarkaria101','sarkss@gmail.com','letsgitthis9','5715892058'),('sundayfootball','nflseason@yahoo.com','password','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-02 19:11:11
