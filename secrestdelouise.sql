-- MySQL dump 10.13  Distrib 5.6.21, for osx10.6 (x86_64)
--
-- Host: localhost    Database: secretsdelouise
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'alleedubio','alleedubio33','administrateur'),(2,'admin','admin33','ico');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adresse` (
  `id_adresse` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(200) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(254) CHARACTER SET utf8 NOT NULL,
  `cp` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ville` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `livraison` tinyint(4) NOT NULL DEFAULT '0',
  `message` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresse`
--

LOCK TABLES `adresse` WRITE;
/*!40000 ALTER TABLE `adresse` DISABLE KEYS */;
INSERT INTO `adresse` VALUES (40,'Alvarez','Isable','55 rue anatole france','33150','Cenon','0567875645','isa.gonzalez@gmail.com',1,'pllez au portail et attention au chien !'),(41,'Gonzalez','xavier','36 route de bordeaux','33360','Latresne','06 81 73 1','xav335@hotmail.com',0,'pllez au portail et attention au chien !'),(42,'Alvarez','Isable','55 rue anatole france','33150','Cenon','0567875645','isa.gonzalez@gmail.com',1,'pllez au portail et attention au chien !'),(43,'Gonzalez','xavier','36 route de bordeaux','33360','Latresne','06 81 73 1','xav335@hotmail.com',0,'pllez au portail et attention au chien !'),(44,'Alvarez','Isable','55 rue anatole france','33150','Cenon','0567875645','isa.gonzalez@gmail.com',1,'pllez au portail et attention au chien !'),(45,'Gonzalez','xavier','36 route de bordeaux','33360','Latresne','06 81 73 1','xav335@hotmail.com',0,'pllez au portail et attention au chien !'),(46,'Alvarez','Isable','55 rue anatole france','33150','Cenon','0567875645','isa.gonzalez@gmail.com',1,'pllez au portail et attention au chien !'),(47,'Gonzalez','xavier','36 route de bordeaux','33360','Latresne','06 81 73 1','xav335@hotmail.com',0,'pllez au portail et attention au chien !'),(48,'Alvarez','Isable','55 rue anatole france','33150','Cenon','0567875645','isa.gonzalez@gmail.com',1,'pllez au portail et attention au chien !'),(49,'Gonzalez','Xavier','36 route de Bordeaux ','33360 ','Latresne','06877676','xav335@hotmail.com',0,''),(50,'Gonzalez','Xavier','36 route de Bordeaux ','33360 ','Latresne','06877676','xav335@hotmail.com',1,''),(51,'Gonzalez','Xavier','36 route de Bordeaux ','33360 ','Latresne','06877676','xav335@hotmail.com',0,'Attention au chien'),(52,'Gonzalez','Xavier','36 route de Bordeaux ','33360 ','Latresne','06877676','xav335@hotmail.com',1,'Attention au chien'),(53,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335111@hotmail.com',0,''),(54,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335111@hotmail.com',1,''),(55,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(56,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(57,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(58,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(59,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(60,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(61,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(62,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(63,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(64,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(65,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(66,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(67,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(68,'Gonzzza','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(69,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(70,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(71,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(72,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(73,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(74,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(75,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(76,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(77,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(78,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(79,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(80,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(81,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(82,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(83,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(84,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(85,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(86,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(87,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(88,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(89,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(90,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(91,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(92,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(93,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(94,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(95,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(96,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(97,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(98,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(99,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,''),(100,'Gonzzza','Jav','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,''),(101,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(102,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(103,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(104,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(105,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(106,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(107,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(108,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(109,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(110,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar'),(111,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',0,'Attnetion au klebar'),(112,'ICONEO','','36 route de Bordeaux','33360','Latresne','0909090909','xav335@hotmail.com',1,'Attnetion au klebar');
/*!40000 ALTER TABLE `adresse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(10) unsigned NOT NULL,
  `categorie` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catproduct`
--

DROP TABLE IF EXISTS `catproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catproduct` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(250) NOT NULL,
  `description` text,
  `parent` int(11) NOT NULL DEFAULT '0',
  `image` varchar(250) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `ordre` smallint(6) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catproduct`
--

LOCK TABLES `catproduct` WRITE;
/*!40000 ALTER TABLE `catproduct` DISABLE KEYS */;
INSERT INTO `catproduct` VALUES (41,'Bijoux','',0,'',0,100),(42,'Maroquinerie','',0,'',0,100),(43,'Lunettes',NULL,0,NULL,0,100),(44,'Montres','',0,'',0,100),(45,'Décoration','',0,'',0,100),(47,'Bracelets',NULL,41,NULL,1,100),(49,'Bagues',NULL,41,NULL,1,100),(50,'prêt-à-porter','',0,'',0,100),(51,'Colliers',NULL,41,NULL,1,100),(52,'lunettes femme','',43,'',1,100),(53,'lunettes homme',NULL,43,NULL,1,100),(54,'Bracelets homme','',47,'',2,100),(55,'bracelets femme','',47,'',2,100),(57,'Bagues hommes','',49,'',2,100),(58,'Bagues Femmes','',49,'',2,100);
/*!40000 ALTER TABLE `catproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `color` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (1,'- n/a'),(2,'Noir'),(3,'Bleu'),(4,'Vert'),(5,'gris'),(6,'rouge'),(10,'fushia'),(11,'bordeaux'),(12,'Jaune'),(13,'Beige'),(14,'gris clair');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commande` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session` varchar(200) CHARACTER SET utf8 NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_contact` int(11) NOT NULL,
  `colissimo` varchar(240) CHARACTER SET utf8 NOT NULL,
  `mode_paiement` tinyint(4) NOT NULL DEFAULT '1',
  `statut_paiement` tinyint(4) NOT NULL DEFAULT '0',
  `statut_commande` int(11) NOT NULL DEFAULT '0',
  `logpayment` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande`
--

LOCK TABLES `commande` WRITE;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` VALUES (1,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 09:01:27',25480,'',1,0,0,'0'),(2,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 09:02:57',25480,'',1,0,0,'0'),(3,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 09:03:15',25480,'',1,1,3,'a:0:{}'),(4,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 09:03:57',25480,'',1,0,0,'0'),(5,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:19:17',25480,'',1,0,0,NULL),(6,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:20:56',25480,'',1,0,1,NULL),(7,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:21:12',25480,'',1,0,0,NULL),(8,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:24:17',25480,'',1,0,0,NULL),(9,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:24:20',25480,'',1,0,0,NULL),(10,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:33:43',25480,'',1,1,2,NULL),(11,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:33:46',25480,'',1,0,0,NULL),(12,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:33:49',25480,'',1,0,0,NULL),(13,'gq1fpuh087d4c2fn348dmtkc77','2015-06-17 13:33:50',25480,'',1,0,0,NULL);
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `message` text,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `fromgoldbook` tinyint(4) NOT NULL DEFAULT '0',
  `fromcontact` tinyint(4) NOT NULL DEFAULT '0',
  `id_facturation` int(11) DEFAULT NULL,
  `id_livraison` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25482 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (25438,'Jav','gonz','jav_gonz@yahoo.com','',NULL,NULL,0,0,0,NULL,NULL),(25439,'xav','gonza','xavier.gonzalez@free.fr','',NULL,NULL,1,0,0,NULL,NULL),(25442,'xavier','gonzalez','fjavi.gonzalez@gmail.com','',NULL,NULL,1,0,0,NULL,NULL),(25445,'Fred ','Lesca','fredericlesca@iconeo.fr','',NULL,NULL,1,0,0,NULL,NULL),(25451,'','lesca','flesca@free.fr','',NULL,'atelier medecine chinoise décevant',1,1,0,NULL,NULL),(25453,'','Xavier Gonzalez','xavier@gonzalez.pm','reivax',NULL,NULL,1,0,1,NULL,NULL),(25479,'Jav','Gonzzza','xav335111@hotmail.com','','0909090909',NULL,1,0,0,53,54),(25480,'','ICONEO','xav335@hotmail.com','azeaze','0909090909',NULL,1,0,0,111,112),(25481,'Jav','Gonzzza','xav335@hotmail.com','reivax','0909090909',NULL,1,0,0,99,100);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_categorie`
--

DROP TABLE IF EXISTS `contact_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_categorie` (
  `id_contact` int(11) unsigned NOT NULL,
  `id_categorie` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_categorie`
--

LOCK TABLES `contact_categorie` WRITE;
/*!40000 ALTER TABLE `contact_categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `couleur` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `couleur`
--

LOCK TABLES `couleur` WRITE;
/*!40000 ALTER TABLE `couleur` DISABLE KEYS */;
INSERT INTO `couleur` VALUES (1,'Blanc'),(2,'Noir'),(3,'Bleu'),(4,'Vert'),(5,'gris clair'),(6,'rouge'),(7,'jaune'),(8,'gris foncé');
/*!40000 ALTER TABLE `couleur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goldbook`
--

DROP TABLE IF EXISTS `goldbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goldbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbook`
--

LOCK TABLES `goldbook` WRITE;
/*!40000 ALTER TABLE `goldbook` DISABLE KEYS */;
INSERT INTO `goldbook` VALUES (2,'2014-12-10 00:00:00','Xavier Gonzalez','xavier@gonzalez.pm','Produits de grande qualité, j\'ai retrouvé le gout d\'offrir\r\nL\'accueil et les conseils sont vraiment pertinents.\r\n\r\nEt la livraison c\'est juste parfait !',1),(4,'2015-03-11 00:00:00','Fred Lesca','xav3351@gmail.com','Très belle qualité de produit',1),(5,'2015-04-30 00:00:00','Sevrine','no@no.no','Un choix très important et très bon qualité prix',1),(6,'2015-04-07 00:00:00','Pascal.T (Carignan de Bordeaux)','sdfsdf@fsdfsdf.fr','hghjgjg',0);
/*!40000 ALTER TABLE `goldbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_news`
--

DROP TABLE IF EXISTS `media_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_news` int(11) NOT NULL,
  `url_media` varchar(250) NOT NULL,
  `url_apercu` varchar(250) NOT NULL,
  `type_media` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`id_news`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_news`
--

LOCK TABLES `media_news` WRITE;
/*!40000 ALTER TABLE `media_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `media_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `date_news` datetime NOT NULL,
  `titre` varchar(250) NOT NULL,
  `accroche` text,
  `contenu` text,
  `image1` varchar(250) DEFAULT NULL,
  `online` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (10,'2015-01-01 00:00:00','Nouveau ! Les montres lumineuses ','http://secretsdelouise.localxav.lan/produit.php?id=31&idcat=','100 % cultivées et distillées dans <strong>la Drôme</strong> Achillée millefeuille antibactérien et équilibrant Carotte sauvage apaise irritations et rougeurs revigore les peaux ternes Camomille romaine purifie et redonne du tonus Rose astringeant, tonifie la peau. ','/2589-10.jpg',1),(18,'2015-02-19 00:00:00','Votre boutique  en ligne','','Trouvez tous les produits de la boutique en ligne et lancer\r\n','/2583-18.jpg',1),(19,'2015-04-14 00:00:00','Tout savoir sur nos lunettes','','Une véritable opportunité commerciale La plus grande réserve d’or ne se trouve ni en Afrique ni en Amérique du Sud, mais dans les banques centrales et dans les boîtes à bijoux des familles occidentales. Au total, plus de 80 000 tonnes d’or sommeilleraient dans les foyers, soit l’équivalent de quarante ans d’exploitation minière, sans même […]','/o_PRIX_LUNETTES_facebook-19.jpg',0);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `bas_page` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (12,'2015-01-01 00:00:00','Ceci est la toute nouvelle actu','Grande promotion au mois d\'aout restez à l\'écoute !!');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter_detail`
--

DROP TABLE IF EXISTS `newsletter_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_newsletter` int(10) unsigned NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `texte` text,
  PRIMARY KEY (`id`,`id_newsletter`)
) ENGINE=InnoDB AUTO_INCREMENT=337 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_detail`
--

LOCK TABLES `newsletter_detail` WRITE;
/*!40000 ALTER TABLE `newsletter_detail` DISABLE KEYS */;
INSERT INTO `newsletter_detail` VALUES (335,12,'','/uploads/2589.jpg','http://dev.bsport.fr/',''),(336,12,'','/uploads/2588.jpg','http://www.lessecretsdelouise.com/','');
/*!40000 ALTER TABLE `newsletter_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter_journal`
--

DROP TABLE IF EXISTS `newsletter_journal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter_journal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_envoi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_newsletter` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_journal`
--

LOCK TABLES `newsletter_journal` WRITE;
/*!40000 ALTER TABLE `newsletter_journal` DISABLE KEYS */;
INSERT INTO `newsletter_journal` VALUES (1,'2015-03-25 15:02:20',12),(2,'2015-03-30 00:15:38',12),(3,'2015-03-30 00:16:13',12);
/*!40000 ALTER TABLE `newsletter_journal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter_journal_detail`
--

DROP TABLE IF EXISTS `newsletter_journal_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter_journal_detail` (
  `id_newsletter_journal` int(11) unsigned NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `read` tinyint(4) NOT NULL DEFAULT '0',
  `coderandom` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `error` varchar(250) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_journal_detail`
--

LOCK TABLES `newsletter_journal_detail` WRITE;
/*!40000 ALTER TABLE `newsletter_journal_detail` DISABLE KEYS */;
INSERT INTO `newsletter_journal_detail` VALUES (3,'jav_gonz@yahoo.fr',0,'fgWhWspjJQSc',''),(3,'xavier.gonzalez@free.fr',0,'CRmH9Krt6wKy',''),(3,'xavier.gonzalez@laposte.net',0,'Rxzr21m659cQ',''),(3,'xavier@gonzalez.pm',0,'oqXX7FXyk84j',''),(3,'fjavi.gonzalez@gmail.com',0,'IjCDDaZkymzn',''),(3,'xav335@hotmail.com',0,'cLi7HjKVxxGt','');
/*!40000 ALTER TABLE `newsletter_journal_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `panier`
--

DROP TABLE IF EXISTS `panier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `panier` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session` varchar(200) CHARACTER SET utf8 NOT NULL,
  `id_sousref` int(10) unsigned NOT NULL,
  `quantite` smallint(6) NOT NULL DEFAULT '1',
  `serialproduct` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panier`
--

LOCK TABLES `panier` WRITE;
/*!40000 ALTER TABLE `panier` DISABLE KEYS */;
INSERT INTO `panier` VALUES (29,'2015-05-11 15:42:58','ov38j31ad80aqo6nqvu2iblgu5',25,1,NULL),(31,'2015-05-11 16:24:44','ov38j31ad80aqo6nqvu2iblgu5',2,1,NULL),(32,'2015-05-12 13:05:19','u20us3e21j0qah9b4gtiehgl92',18,2,NULL),(33,'2015-05-18 07:05:51','3ibkte8d5imr73u3t80eso9j76',27,2,NULL),(34,'2015-05-18 13:39:13','3ibkte8d5imr73u3t80eso9j76',24,1,NULL),(35,'2015-05-18 14:59:38','3ibkte8d5imr73u3t80eso9j76',2,1,NULL),(36,'2015-05-18 15:06:31','k2b0l84as9co7pi39pve0lnjc5',23,1,NULL),(37,'2015-05-18 16:25:54','1hjr92f7h0k74ak98hp789l704',29,1,NULL),(38,'2015-05-18 17:06:48','loi3pbfqp5a3cfm79tibt0egr6',2,1,NULL),(39,'2015-05-18 17:26:36','gpb2shqpchr9ef32h7nbtab9v4',23,1,NULL),(40,'2015-05-18 17:28:41','gpb2shqpchr9ef32h7nbtab9v4',28,1,NULL),(41,'2015-05-18 18:25:31','191ffs3s3sdg9ol2dpa9lkla07',25,1,NULL),(43,'2015-06-15 09:52:56','k8s8ujfqjmdaj61th2p6052th3',28,1,NULL),(44,'2015-06-15 10:10:04','k8s8ujfqjmdaj61th2p6052th3',13,1,NULL),(45,'2015-06-15 10:10:35','k8s8ujfqjmdaj61th2p6052th3',18,1,NULL),(48,'2015-06-15 10:45:21','9hr1iejj5n4d2ins1r8o7dalc6',32,1,NULL),(50,'2015-06-15 13:44:58','9hr1iejj5n4d2ins1r8o7dalc6',20,1,NULL),(51,'2015-06-15 13:45:22','9hr1iejj5n4d2ins1r8o7dalc6',22,1,NULL),(54,'2015-06-15 16:47:20','d15st5im2jrqc2atb1ae6mhat1',23,1,NULL),(55,'2015-06-16 06:19:16','d15st5im2jrqc2atb1ae6mhat1',13,1,NULL),(56,'2015-06-17 08:24:51','roqm40hmlqetrmp394piianfm7',23,1,NULL),(58,'2015-06-17 08:37:22','gq1fpuh087d4c2fn348dmtkc77',26,1,'a:19:{s:2:\"id\";s:2:\"32\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:5:\"556ER\";s:4:\"prix\";s:5:\"10.00\";s:7:\"libprix\";s:21:\"€   (50% de remise)\";s:8:\"shipping\";s:4:\"2.00\";s:5:\"label\";s:17:\"Coliers fantaisie\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:10:\"tres sympa\";s:11:\"description\";s:14:\"Collier rigolo\";s:6:\"image1\";s:24:\"/bijoux_fantaisie-32.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:2:{s:8:\"catlabel\";s:6:\"Bijoux\";s:5:\"catid\";s:2:\"41\";}i:1;a:2:{s:8:\"catlabel\";s:8:\"Colliers\";s:5:\"catid\";s:2:\"51\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:6:{i:0;a:2:{s:12:\"couleurlabel\";s:5:\"Blanc\";s:9:\"couleurid\";s:1:\"1\";}i:1;a:2:{s:12:\"couleurlabel\";s:4:\"Noir\";s:9:\"couleurid\";s:1:\"2\";}i:2;a:2:{s:12:\"couleurlabel\";s:4:\"Bleu\";s:9:\"couleurid\";s:1:\"3\";}i:3;a:2:{s:12:\"couleurlabel\";s:4:\"Vert\";s:9:\"couleurid\";s:1:\"4\";}i:4;a:2:{s:12:\"couleurlabel\";s:10:\"gris clair\";s:9:\"couleurid\";s:1:\"5\";}i:5;a:2:{s:12:\"couleurlabel\";s:5:\"rouge\";s:9:\"couleurid\";s:1:\"6\";}}s:7:\"sousref\";a:4:{i:0;a:7:{s:2:\"id\";s:2:\"25\";s:7:\"sousref\";s:5:\"qu2Sf\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:5:\"- n/a\";}i:1;a:7:{s:2:\"id\";s:2:\"28\";s:7:\"sousref\";s:5:\"ZzKpu\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:5:\"- n/a\";}i:2;a:7:{s:2:\"id\";s:2:\"26\";s:7:\"sousref\";s:5:\"bAtLX\";s:8:\"id_color\";s:2:\"10\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:6:\"fushia\";s:4:\"size\";s:5:\"- n/a\";}i:3;a:7:{s:2:\"id\";s:2:\"34\";s:7:\"sousref\";s:5:\"u3dFD\";s:8:\"id_color\";s:2:\"11\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:8:\"bordeaux\";s:4:\"size\";s:5:\"- n/a\";}}}'),(59,'2015-06-17 08:42:53','gq1fpuh087d4c2fn348dmtkc77',7,1,'a:19:{s:2:\"id\";s:2:\"30\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:4:\"23ZE\";s:4:\"prix\";s:5:\"12.54\";s:7:\"libprix\";s:20:\"€ au lieu de 45€\";s:8:\"shipping\";s:4:\"0.00\";s:5:\"label\";s:14:\"Bracelet rouge\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:11:\"description\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:6:\"image1\";s:12:\"/2585-30.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:3:{i:0;a:2:{s:8:\"catlabel\";s:6:\"Bijoux\";s:5:\"catid\";s:2:\"41\";}i:1;a:2:{s:8:\"catlabel\";s:9:\"Bracelets\";s:5:\"catid\";s:2:\"47\";}i:2;a:2:{s:8:\"catlabel\";s:15:\"bracelets femme\";s:5:\"catid\";s:2:\"55\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:2:{i:0;a:2:{s:12:\"couleurlabel\";s:10:\"gris clair\";s:9:\"couleurid\";s:1:\"5\";}i:1;a:2:{s:12:\"couleurlabel\";s:5:\"rouge\";s:9:\"couleurid\";s:1:\"6\";}}s:7:\"sousref\";a:5:{i:0;a:7:{s:2:\"id\";s:1:\"2\";s:7:\"sousref\";s:5:\"ACE34\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"2\";s:5:\"stock\";s:1:\"4\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T1\";}i:1;a:7:{s:2:\"id\";s:2:\"18\";s:7:\"sousref\";s:4:\"45RF\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T2\";}i:2;a:7:{s:2:\"id\";s:2:\"22\";s:7:\"sousref\";s:5:\"fubK8\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T3\";}i:3;a:7:{s:2:\"id\";s:1:\"7\";s:7:\"sousref\";s:4:\"Z234\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T3\";}i:4;a:7:{s:2:\"id\";s:2:\"29\";s:7:\"sousref\";s:5:\"xKsVP\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T2\";}}}');
/*!40000 ALTER TABLE `panier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planning`
--

DROP TABLE IF EXISTS `planning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planning` (
  `id` tinyint(4) NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `url` varchar(250) NOT NULL,
  `pdf` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planning`
--

LOCK TABLES `planning` WRITE;
/*!40000 ALTER TABLE `planning` DISABLE KEYS */;
INSERT INTO `planning` VALUES (1,'Période 2014 - 2015','','/Bon_de_commandeV2-20150223.pdf');
/*!40000 ALTER TABLE `planning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_suppr` timestamp NULL DEFAULT NULL,
  `reference` varchar(250) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `libprix` varchar(120) DEFAULT NULL,
  `shipping` decimal(10,2) NOT NULL DEFAULT '0.00',
  `label` varchar(250) NOT NULL,
  `titreaccroche` varchar(250) DEFAULT NULL,
  `accroche` text,
  `description` text,
  `image1` varchar(250) DEFAULT NULL,
  `image2` varchar(250) DEFAULT NULL,
  `image3` varchar(250) DEFAULT NULL,
  `actif` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (30,'2015-04-15 00:44:08','2015-04-15 00:45:04','23ZE',12.54,'€ au lieu de 45€',0.00,'Bracelet rouge','Les + produit','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','/2585-30.jpg','','',1),(31,'2015-04-15 00:44:08','2015-04-15 00:45:04','CD34',12.00,'€ au lieu de 24€',2.00,'montre sport homme','Arrivage d\'été','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.\r\n\r\n','/2589-31.jpg','','',1),(32,'2015-04-15 00:44:08','2015-04-15 00:45:04','556ER',10.00,'€   (50% de remise)',2.00,'Coliers fantaisie','Les + produit','tres sympa','Collier rigolo','/bijoux_fantaisie-32.jpg','','',1),(33,'2015-04-15 00:44:08','2015-04-15 00:45:04','87765',34.00,'€ au lieu de 56€',2.00,'Sacs femme cuir véritable','Les + produit','Tendance et moderne','Super produit très sympa','/2584-.jpg','','',1),(34,'2015-04-15 00:44:08','2015-04-15 00:45:04','23ZE22',23.00,'€',2.00,'Statuette deco orientale','Les + produit','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.','/2586-.jpg','/Bath_Decoration_1920x1200-34.jpg','',1),(35,'2015-04-15 00:44:08','2015-04-15 00:45:04','23ZE22dd',12.00,'€',1.00,'Chaise deco ','Les + produit','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','/2587-.jpg','','',1),(36,'2015-04-15 00:47:21',NULL,'34544',12.00,'€',1.00,'Sac cuir haute de gamme','Les + produit','qkjsdhk qhsdkhq kdjhq kdjhqksdh q',' lqjskd ql qlsdj qklsdj qlskdj q','/Alexandre.mareuil-maroquinerie1-.jpg','','',1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categorie`
--

DROP TABLE IF EXISTS `product_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categorie` (
  `id_product` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categorie`
--

LOCK TABLES `product_categorie` WRITE;
/*!40000 ALTER TABLE `product_categorie` DISABLE KEYS */;
INSERT INTO `product_categorie` VALUES (30,41),(30,47),(30,55),(31,44),(32,41),(32,51),(33,42),(34,45),(35,45),(36,42);
/*!40000 ALTER TABLE `product_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_couleur`
--

DROP TABLE IF EXISTS `product_couleur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_couleur` (
  `id_product` int(11) NOT NULL,
  `id_couleur` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_couleur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_couleur`
--

LOCK TABLES `product_couleur` WRITE;
/*!40000 ALTER TABLE `product_couleur` DISABLE KEYS */;
INSERT INTO `product_couleur` VALUES (29,5),(30,5),(30,6),(32,1),(32,2),(32,3),(32,4),(32,5),(32,6),(36,1),(36,2),(36,3);
/*!40000 ALTER TABLE `product_couleur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_rubrique`
--

DROP TABLE IF EXISTS `product_rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_rubrique` (
  `id_product` int(11) NOT NULL,
  `id_rubrique` int(11) NOT NULL,
  PRIMARY KEY (`id_product`,`id_rubrique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_rubrique`
--

LOCK TABLES `product_rubrique` WRITE;
/*!40000 ALTER TABLE `product_rubrique` DISABLE KEYS */;
INSERT INTO `product_rubrique` VALUES (29,3),(30,1),(31,3),(32,1),(33,1),(33,4),(34,3),(35,3),(36,2),(36,4);
/*!40000 ALTER TABLE `product_rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_sousref`
--

DROP TABLE IF EXISTS `product_sousref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_sousref` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sousref` varchar(250) DEFAULT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `id_color` smallint(5) unsigned NOT NULL,
  `id_size` smallint(5) unsigned NOT NULL,
  `stock` smallint(6) NOT NULL DEFAULT '0',
  `actif` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_sousref`
--

LOCK TABLES `product_sousref` WRITE;
/*!40000 ALTER TABLE `product_sousref` DISABLE KEYS */;
INSERT INTO `product_sousref` VALUES (2,'ACE34',30,3,2,4,1),(7,'Z234',30,5,3,2,1),(10,'IjI71',30,3,4,2,1),(13,'puBoU',31,3,1,4,1),(14,'2dW6X',31,6,1,3,1),(16,'voGj7',31,9,2,2,1),(18,'45RF',30,3,5,3,1),(19,'34222',33,6,1,1,1),(20,'Z234',33,2,1,2,1),(21,'342',33,11,1,1,1),(22,'fubK8',30,3,3,2,1),(23,'922it',35,1,1,3,1),(24,'OBMWj',34,1,1,3,1),(25,'qu2Sf',32,3,1,2,1),(26,'bAtLX',32,10,1,3,1),(27,'P6kWZ',31,2,1,2,1),(28,'ZzKpu',32,5,1,1,1),(29,'xKsVP',30,5,5,2,1),(30,'AZtBk',31,12,1,1,1),(31,'3xiAo',36,11,1,3,1),(32,'bhhXK',36,2,1,1,1),(33,'0O8cb',36,13,1,2,1),(34,'u3dFD',32,11,1,2,1);
/*!40000 ALTER TABLE `product_sousref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubrique`
--

DROP TABLE IF EXISTS `rubrique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubrique` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubrique`
--

LOCK TABLES `rubrique` WRITE;
/*!40000 ALTER TABLE `rubrique` DISABLE KEYS */;
INSERT INTO `rubrique` VALUES (1,'Promos'),(2,'Ventes flash'),(3,'Nouveautés'),(4,'Coups de coeur');
/*!40000 ALTER TABLE `rubrique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `size` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size`
--

LOCK TABLES `size` WRITE;
/*!40000 ALTER TABLE `size` DISABLE KEYS */;
INSERT INTO `size` VALUES (1,'- n/a'),(2,'T1'),(3,'T3'),(5,'T2'),(6,'T4'),(7,'T5'),(8,'T6');
/*!40000 ALTER TABLE `size` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-18 15:53:48
