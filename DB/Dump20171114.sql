-- MySQL dump 10.13  Distrib 5.7.20, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
-- Table structure for table `getCategory`
--

DROP TABLE IF EXISTS `getCategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `getCategory` (
  `categoryId` int(11) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `categoryName` varchar(50) DEFAULT NULL,
  `lastUpdated` date DEFAULT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `getCategory`
--

LOCK TABLES `getCategory` WRITE;
/*!40000 ALTER TABLE `getCategory` DISABLE KEYS */;
INSERT INTO `getCategory` VALUES (1,101,'Category1','2017-11-12'),(2,102,'Category2','2018-11-13'),(3,103,'Category3','2018-11-04'),(4,104,'Category4','2019-11-09');
/*!40000 ALTER TABLE `getCategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `getCustomer`
--

DROP TABLE IF EXISTS `getCustomer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `getCustomer` (
  `customerId` int(11) NOT NULL,
  `customerEmail` varchar(50) DEFAULT NULL,
  `customerPassword` varchar(50) DEFAULT NULL,
  `customerName` varchar(50) DEFAULT NULL,
  `customerContact` int(11) DEFAULT NULL,
  `customerAddress` varchar(50) DEFAULT NULL,
  `customerCity` varchar(50) DEFAULT NULL,
  `customerState` varchar(50) DEFAULT NULL,
  `customerOrder` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `getCustomer`
--

LOCK TABLES `getCustomer` WRITE;
/*!40000 ALTER TABLE `getCustomer` DISABLE KEYS */;
INSERT INTO `getCustomer` VALUES (201,'abc@abc','pass1','name1',100000,'b-6666,55-abc','city1','state1','4'),(202,'abc@bcc','pass2','name2',1000122,'g-6474,jdkd','city2','state2','5'),(203,'qww@www','pass3','name3',123456789,'qwerty88','city3','state3','6');
/*!40000 ALTER TABLE `getCustomer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `getOrder`
--

DROP TABLE IF EXISTS `getOrder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `getOrder` (
  `orderId` int(11) NOT NULL,
  `customerId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `orderItem` varchar(50) DEFAULT NULL,
  `orderQuantity` int(11) DEFAULT NULL,
  `orderHistory` varchar(50) DEFAULT NULL,
  `orderAmount` int(11) DEFAULT NULL,
  `orderShipName` varchar(50) DEFAULT NULL,
  `orderShipAddress` varchar(50) DEFAULT NULL,
  `orderState` varchar(50) DEFAULT NULL,
  `orderPhone` int(11) DEFAULT NULL,
  `orderTrackingNo` int(11) DEFAULT NULL,
  `orderPrice` int(11) DEFAULT NULL,
  `orderDiscount` int(11) DEFAULT NULL,
  `orderTotal` int(11) DEFAULT NULL,
  `orderShipDate` date DEFAULT NULL,
  `Order_quantity_copy1` int(11) DEFAULT NULL,
  PRIMARY KEY (`orderId`),
  KEY `Customer_id_idx` (`customerId`),
  KEY `Product_id_idx` (`productId`),
  CONSTRAINT `Customer_id` FOREIGN KEY (`customerId`) REFERENCES `getcustomer` (`customerId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `Product_id` FOREIGN KEY (`productId`) REFERENCES `getproduct` (`productId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `getOrder`
--

LOCK TABLES `getOrder` WRITE;
/*!40000 ALTER TABLE `getOrder` DISABLE KEYS */;
INSERT INTO `getOrder` VALUES (301,201,401,'order1',45,'check23',4999,'name1','qwert-5567','state1',90909090,898989,676767,7878,678678,'2017-01-23',67),(302,202,402,'order2',23,'check45',55656,'name2','qwert5676','state2',78787889,78666,567889,2343,12345,'2018-02-27',34),(303,203,403,'order3',56,'check67',5678,'name3','qwert56789','state3',1234567,3456,5678,567,58729,'2017-01-12',43);
/*!40000 ALTER TABLE `getOrder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `getProduct`
--

DROP TABLE IF EXISTS `getProduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `getProduct` (
  `productId` int(11) NOT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productSize` int(11) DEFAULT NULL,
  `productColor` varchar(50) DEFAULT NULL,
  `productStock` int(11) DEFAULT NULL,
  `productUpdateDate` date DEFAULT NULL,
  `productImage` blob,
  PRIMARY KEY (`productId`),
  KEY `Category_id_idx` (`categoryId`),
  CONSTRAINT `Category_id` FOREIGN KEY (`categoryId`) REFERENCES `getcategory` (`categoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `getProduct`
--

LOCK TABLES `getProduct` WRITE;
/*!40000 ALTER TABLE `getProduct` DISABLE KEYS */;
INSERT INTO `getProduct` VALUES (401,2,'pname1',123,77,'pcolor1',34,'2018-02-12',NULL),(402,1,'pname2',124,78,'pcolor2',35,'2018-02-13',NULL),(403,2,'pname3',124,79,'pcolor3',36,'2018-02-14',NULL);
/*!40000 ALTER TABLE `getProduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `getProductDetails`
--

DROP TABLE IF EXISTS `getProductDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `getProductDetails` (
  `productId` int(11) NOT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `productPrice` int(10) DEFAULT NULL,
  `productDiscountPrice` int(10) DEFAULT NULL,
  `productImage` blob,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `getProductDetails`
--

LOCK TABLES `getProductDetails` WRITE;
/*!40000 ALTER TABLE `getProductDetails` DISABLE KEYS */;
INSERT INTO `getProductDetails` VALUES (401,'pname1',1234,23,NULL),(402,'pname2',2345,4567,NULL),(403,'pname3',7890,3456,NULL);
/*!40000 ALTER TABLE `getProductDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'mydb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-14 22:12:41
