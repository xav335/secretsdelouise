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
  `tel` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `livraison` tinyint(4) NOT NULL DEFAULT '0',
  `message` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresse`
--

LOCK TABLES `adresse` WRITE;
/*!40000 ALTER TABLE `adresse` DISABLE KEYS */;
INSERT INTO `adresse` VALUES (183,'Gonzalez','Xavier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','xavier@gonzalez.pm',0,''),(184,'Gonzalez','Xavier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','xavier@gonzalez.pm',1,''),(185,'Braillard','Emmanuelle','20 avenue de la foret','33700','Mérignac','06 7856 45','emmanuelle.braillard@gmail.com',0,''),(186,'Braillard','Emmanuelle','20 avenue de la foret','33700','Mérignac','06 7856 45','emmanuelle.braillard@gmail.com',1,''),(187,'Braillard','Emmanuelle','20 avenue de la foret','33700','Mérignac','06 7856 45','emmanuelle.braillard@gmail.com',0,''),(188,'Braillard','Emmanuelle','20 avenue de la foret','33700','Mérignac','06 7856 45','emmanuelle.braillard@gmail.com',1,''),(189,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(190,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(191,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(192,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(193,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(194,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(195,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(196,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(197,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(198,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(199,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(200,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(201,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(202,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(203,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(204,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(205,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(206,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,''),(207,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',0,''),(208,'gonz','Gregorio','36 route de Bordeaux','22222','qsd qsd','06 81 73 18 70','xavier@braillard.fr',1,'');
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
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catproduct`
--

LOCK TABLES `catproduct` WRITE;
/*!40000 ALTER TABLE `catproduct` DISABLE KEYS */;
INSERT INTO `catproduct` VALUES (41,'Bijoux','',0,'/baguier-41.pdf',0,100),(42,'Maroquinerie','',0,'',0,100),(43,'Lunettes',NULL,0,NULL,0,100),(44,'Montres','',0,'',0,100),(45,'Décoration','',0,'',0,100),(47,'Bracelets','',41,'/baguier-47.pdf',1,100),(49,'Bagues',NULL,41,NULL,1,100),(51,'Colliers',NULL,41,NULL,1,100),(52,'lunettes femme','',43,'',1,100),(54,'Bracelets homme','',47,'/baguier-54.pdf',2,100),(55,'bracelets femme','',47,'',2,100),(59,'Plantes artificielles',NULL,0,NULL,0,100);
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
  `id_facturation` int(10) unsigned DEFAULT NULL,
  `id_livraison` int(10) unsigned DEFAULT NULL,
  `colissimo` varchar(240) CHARACTER SET utf8 NOT NULL,
  `mode_paiement` tinyint(4) NOT NULL DEFAULT '1',
  `statut_paiement` tinyint(4) NOT NULL DEFAULT '0',
  `statut_commande` int(11) NOT NULL DEFAULT '0',
  `logpayment` text CHARACTER SET utf8,
  `panier` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande`
--

LOCK TABLES `commande` WRITE;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` VALUES (82,'82rfhq0k68qhnlgi0qjecqa314','2015-07-08 11:56:17',25453,183,184,'',1,0,0,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"93\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:14:\"Bracelet rouge\";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"30\";s:6:\"image1\";s:12:\"/2585-30.jpg\";s:4:\"size\";s:2:\"T1\";s:5:\"color\";s:4:\"Bleu\";s:8:\"shipping\";s:4:\"1.00\";s:10:\"id_sousref\";s:1:\"2\";s:9:\"reference\";s:4:\"23ZE\";s:7:\"sousref\";s:5:\"ACE34\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(83,'82rfhq0k68qhnlgi0qjecqa314','2015-07-08 11:57:03',25453,183,184,'',1,1,1,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"93\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:14:\"Bracelet rouge\";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"30\";s:6:\"image1\";s:12:\"/2585-30.jpg\";s:4:\"size\";s:2:\"T1\";s:5:\"color\";s:4:\"Bleu\";s:8:\"shipping\";s:4:\"1.00\";s:10:\"id_sousref\";s:1:\"2\";s:9:\"reference\";s:4:\"23ZE\";s:7:\"sousref\";s:5:\"ACE34\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(84,'kjronlqo8rq5op9o0pm6ju9472','2015-07-08 12:05:36',25484,185,186,'',1,0,0,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"94\";s:8:\"quantite\";s:1:\"2\";s:5:\"label\";s:18:\"montre sport homme\";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"31\";s:6:\"image1\";s:12:\"/2589-31.jpg\";s:4:\"size\";s:5:\"- n/a\";s:5:\"color\";s:4:\"Bleu\";s:8:\"shipping\";s:4:\"2.00\";s:10:\"id_sousref\";s:2:\"13\";s:9:\"reference\";s:4:\"CD34\";s:7:\"sousref\";s:5:\"puBoU\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(85,'kjronlqo8rq5op9o0pm6ju9472','2015-07-08 12:06:58',25484,185,186,'',1,0,0,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"94\";s:8:\"quantite\";s:1:\"2\";s:5:\"label\";s:18:\"montre sport homme\";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"31\";s:6:\"image1\";s:12:\"/2589-31.jpg\";s:4:\"size\";s:5:\"- n/a\";s:5:\"color\";s:4:\"Bleu\";s:8:\"shipping\";s:4:\"2.00\";s:10:\"id_sousref\";s:2:\"13\";s:9:\"reference\";s:4:\"CD34\";s:7:\"sousref\";s:5:\"puBoU\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(86,'kjronlqo8rq5op9o0pm6ju9472','2015-07-08 12:07:40',25484,187,188,'',1,1,1,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"94\";s:8:\"quantite\";s:1:\"2\";s:5:\"label\";s:18:\"montre sport homme\";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"31\";s:6:\"image1\";s:12:\"/2589-31.jpg\";s:4:\"size\";s:5:\"- n/a\";s:5:\"color\";s:4:\"Bleu\";s:8:\"shipping\";s:4:\"2.00\";s:10:\"id_sousref\";s:2:\"13\";s:9:\"reference\";s:4:\"CD34\";s:7:\"sousref\";s:5:\"puBoU\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(87,'h5edue63ms0iivchrrsl8v8an6','2015-07-08 13:03:55',25493,205,206,'',1,0,0,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"96\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:12:\"Chaise deco \";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"35\";s:6:\"image1\";s:10:\"/2587-.jpg\";s:4:\"size\";s:5:\"- n/a\";s:5:\"color\";s:5:\"- n/a\";s:8:\"shipping\";s:4:\"1.00\";s:10:\"id_sousref\";s:2:\"23\";s:9:\"reference\";s:8:\"23ZE22dd\";s:7:\"sousref\";s:5:\"922it\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(88,'h5edue63ms0iivchrrsl8v8an6','2015-07-08 13:06:44',25493,205,206,'',1,0,0,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"96\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:12:\"Chaise deco \";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"35\";s:6:\"image1\";s:10:\"/2587-.jpg\";s:4:\"size\";s:5:\"- n/a\";s:5:\"color\";s:5:\"- n/a\";s:8:\"shipping\";s:4:\"1.00\";s:10:\"id_sousref\";s:2:\"23\";s:9:\"reference\";s:8:\"23ZE22dd\";s:7:\"sousref\";s:5:\"922it\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(89,'h5edue63ms0iivchrrsl8v8an6','2015-07-08 13:06:52',25493,205,206,'',1,0,0,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"96\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:12:\"Chaise deco \";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"35\";s:6:\"image1\";s:10:\"/2587-.jpg\";s:4:\"size\";s:5:\"- n/a\";s:5:\"color\";s:5:\"- n/a\";s:8:\"shipping\";s:4:\"1.00\";s:10:\"id_sousref\";s:2:\"23\";s:9:\"reference\";s:8:\"23ZE22dd\";s:7:\"sousref\";s:5:\"922it\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}'),(90,'h5edue63ms0iivchrrsl8v8an6','2015-07-08 13:17:00',25493,207,208,'',1,0,0,NULL,'a:1:{i:0;a:14:{s:9:\"id_panier\";s:2:\"96\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:12:\"Chaise deco \";s:4:\"prix\";s:5:\"12.00\";s:2:\"id\";s:2:\"35\";s:6:\"image1\";s:10:\"/2587-.jpg\";s:4:\"size\";s:5:\"- n/a\";s:5:\"color\";s:5:\"- n/a\";s:8:\"shipping\";s:4:\"1.00\";s:10:\"id_sousref\";s:2:\"23\";s:9:\"reference\";s:8:\"23ZE22dd\";s:7:\"sousref\";s:5:\"922it\";s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;s:8:\"totalLiv\";i:5;}}');
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
  `tel` varchar(50) DEFAULT NULL,
  `message` text,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `fromgoldbook` tinyint(4) NOT NULL DEFAULT '0',
  `fromcontact` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25501 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (25439,'xav','gonza','xavier.gonzalez@free.fr',NULL,NULL,1,0,0),(25442,'xavier','gonzalez','fjavi.gonzalez@gmail.com',NULL,NULL,1,0,1),(25445,'Fred ','Lesca','fredericlesca@iconeo.fr',NULL,NULL,1,0,1),(25451,'Fred','lesca','flesca@free.fr',NULL,'atelier medecine chinoise décevant',1,0,1),(25453,'Xavier','Gonzalez','xavier@gonzalez.pm','06 81 73 18 70',NULL,1,0,1),(25479,'Jav','Gonzzza','xav335111@hotmail.com','0909090909',NULL,1,0,1),(25480,'','ICONEO','xav335@hotmail.com','0909090909',NULL,1,0,1),(25483,'Jav','Gonzzza','jav_gonz@yahoo.com','0909090909',NULL,1,0,1),(25500,'Gregorio','gonz','xavier@braillard.fr',NULL,NULL,1,0,0);
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
-- Table structure for table `contact_commande`
--

DROP TABLE IF EXISTS `contact_commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_commande` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `id_facturation` int(11) DEFAULT NULL,
  `id_livraison` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25494 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_commande`
--

LOCK TABLES `contact_commande` WRITE;
/*!40000 ALTER TABLE `contact_commande` DISABLE KEYS */;
INSERT INTO `contact_commande` VALUES (25439,'xavier.gonzalez@free.fr','reivax',NULL,NULL),(25442,'fjavi.gonzalez@gmail.com','azeaze',NULL,NULL),(25445,'fredericlesca@iconeo.fr','azeaze',NULL,NULL),(25451,'flesca@free.fr','azeaze',NULL,NULL),(25453,'xavier@gonzalez.pm','reivax',183,184),(25479,'xav335111@hotmail.com','azeaze',NULL,NULL),(25480,'xav335@hotmail.com','azeaze',NULL,NULL),(25483,'jav_gonz@yahoo.com','azeaze',NULL,NULL),(25484,'emmanuelle.braillard@gmail.com','reivax',187,188),(25485,'xavier@braillard.fr','reivax',189,190),(25486,'xavier@braillard.fr','reivax',191,192),(25487,'xavier@braillard.fr','reivax',193,194),(25488,'xavier@braillard.fr','reivax',195,196),(25489,'xavier@braillard.fr','reivax',197,198),(25490,'xavier@braillard.fr','reivax',199,200),(25491,'xavier@braillard.fr','reivax',201,202),(25492,'xavier@braillard.fr','reivax',203,204),(25493,'xavier@braillard.fr','reivax',207,208);
/*!40000 ALTER TABLE `contact_commande` ENABLE KEYS */;
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
INSERT INTO `goldbook` VALUES (2,'2014-12-10 00:00:00','Xavier Gonzalez','xavier@gonzalez.pm','Produits de grande qualité, j\'ai retrouvé le gout d\'offrir\r\nL\'accueil et les conseils sont vraiment pertinents.\r\n\r\nEt la livraison c\'est juste parfait !',1),(4,'2015-03-11 00:00:00','Fred Lesca','xav3351@gmail.com','Très belle qualité de produit',1),(5,'2015-04-30 00:00:00','Sevrine','no@no.no','Un choix très important et très bon qualité prix',1);
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
INSERT INTO `news` VALUES (10,'2015-01-01 00:00:00','Nouveau ! Les montres lumineuses ','http://secretsdelouise.localxav.lan/produit.php?id=31&idcat=','100 % cultivées et distillées dans <strong>la Drôme</strong> Achillée millefeuille antibactérien et équilibrant Carotte sauvage apaise irritations et rougeurs revigore les peaux ternes Camomille romaine purifie et redonne du tonus Rose astringeant, tonifie la peau. ','/2589-10.jpg',1),(18,'2015-02-19 00:00:00','Votre boutique  en ligne','','Trouvez tous les produits de la boutique en ligne et lancer\r\n','/2583-18.jpg',1),(19,'2015-04-14 00:00:00','Tout savoir sur nos lunettes','http://secretsdelouise.localxav.lan/categories.php?idrub=4','Une véritable opportunité commerciale La plus grande réserve d’or ne se trouve ni en Afrique ni en Amérique du Sud, mais dans les banques centrales et dans les boîtes à bijoux des familles occidentales. Au total, plus de 80 000 tonnes d’or sommeilleraient dans les foyers, soit l’équivalent de quarante ans d’exploitation minière, sans même […]','/o_PRIX_LUNETTES_facebook-19.jpg',1);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (12,'2015-01-01 00:00:00','Ceci est la toute nouvelle actu','ljhjkl'),(13,'2015-06-26 00:00:00','Collection hawaenne jusqu\'à mercredi',' ');
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
INSERT INTO `newsletter_detail` VALUES (333,12,'','/uploads/2589.jpg','http://dev.bsport.fr/',''),(334,12,'','/uploads/2588.jpg','http://www.lessecretsdelouise.com/',''),(336,13,'Super jupe','/2589-.jpg','http://secretsdelouise.localxav.lan/produit.php?id=36&idcat=','Coucou ');
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
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panier`
--

LOCK TABLES `panier` WRITE;
/*!40000 ALTER TABLE `panier` DISABLE KEYS */;
INSERT INTO `panier` VALUES (89,'2015-07-08 11:05:28','gn0vbqhooaamg29l124ucfgnm0',18,1,'a:21:{s:2:\"id\";s:2:\"30\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:4:\"23ZE\";s:4:\"prix\";s:5:\"12.00\";s:7:\"libprix\";s:20:\"€ au lieu de 45€\";s:8:\"shipping\";s:4:\"1.00\";s:5:\"label\";s:14:\"Bracelet rouge\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:11:\"description\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:6:\"image1\";s:12:\"/2585-30.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:4:{i:0;a:3:{s:8:\"catlabel\";s:6:\"Bijoux\";s:5:\"catid\";s:2:\"41\";s:6:\"descat\";s:15:\"/baguier-41.pdf\";}i:1;a:3:{s:8:\"catlabel\";s:9:\"Bracelets\";s:5:\"catid\";s:2:\"47\";s:6:\"descat\";s:15:\"/baguier-47.pdf\";}i:2;a:3:{s:8:\"catlabel\";s:15:\"Bracelets homme\";s:5:\"catid\";s:2:\"54\";s:6:\"descat\";s:15:\"/baguier-54.pdf\";}i:3;a:3:{s:8:\"catlabel\";s:15:\"bracelets femme\";s:5:\"catid\";s:2:\"55\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:2:{i:0;a:2:{s:12:\"couleurlabel\";s:10:\"gris clair\";s:9:\"couleurid\";s:1:\"5\";}i:1;a:2:{s:12:\"couleurlabel\";s:5:\"rouge\";s:9:\"couleurid\";s:1:\"6\";}}s:7:\"sousref\";a:5:{i:0;a:7:{s:2:\"id\";s:1:\"2\";s:7:\"sousref\";s:5:\"ACE34\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"2\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T1\";}i:1;a:7:{s:2:\"id\";s:2:\"18\";s:7:\"sousref\";s:4:\"45RF\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T2\";}i:2;a:7:{s:2:\"id\";s:2:\"22\";s:7:\"sousref\";s:5:\"fubK8\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T3\";}i:3;a:7:{s:2:\"id\";s:1:\"7\";s:7:\"sousref\";s:4:\"Z234\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T3\";}i:4;a:7:{s:2:\"id\";s:2:\"29\";s:7:\"sousref\";s:5:\"xKsVP\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"0\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T2\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(90,'2015-07-08 11:05:43','gn0vbqhooaamg29l124ucfgnm0',35,2,'a:21:{s:2:\"id\";s:2:\"37\";s:13:\"date_creation\";s:19:\"2015-06-26 10:35:05\";s:10:\"date_suppr\";N;s:9:\"reference\";s:8:\"TY366489\";s:4:\"prix\";s:5:\"23.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"2.00\";s:5:\"label\";s:11:\"rose papier\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:27:\"jdhjdfhks hsjkh kshf jksdfz\";s:11:\"description\";s:52:\"lorem ipsus colort\r\ndisjfksjdflksj\r\n\r\nskdfjkjsdhflkj\";s:6:\"image1\";s:10:\"/2588-.jpg\";s:6:\"image2\";s:10:\"/2584-.jpg\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:11:\"Décoration\";s:5:\"catid\";s:2:\"45\";s:6:\"descat\";s:0:\"\";}i:1;a:3:{s:8:\"catlabel\";s:21:\"Plantes artificielles\";s:5:\"catid\";s:2:\"59\";s:6:\"descat\";N;}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:3:{i:0;a:2:{s:12:\"couleurlabel\";s:4:\"Noir\";s:9:\"couleurid\";s:1:\"2\";}i:1;a:2:{s:12:\"couleurlabel\";s:4:\"Vert\";s:9:\"couleurid\";s:1:\"4\";}i:2;a:2:{s:12:\"couleurlabel\";s:11:\"gris foncé\";s:9:\"couleurid\";s:1:\"8\";}}s:7:\"sousref\";a:2:{i:0;a:7:{s:2:\"id\";s:2:\"36\";s:7:\"sousref\";s:5:\"XUQrM\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:5:\"- n/a\";}i:1;a:7:{s:2:\"id\";s:2:\"35\";s:7:\"sousref\";s:5:\"FHBnW\";s:8:\"id_color\";s:1:\"6\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"7\";s:5:\"color\";s:5:\"rouge\";s:4:\"size\";s:5:\"- n/a\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(91,'2015-07-08 11:06:13','5jbdarmu6tgk8rg0mk8ofdmse6',23,1,'a:21:{s:2:\"id\";s:2:\"35\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:8:\"23ZE22dd\";s:4:\"prix\";s:5:\"12.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"1.00\";s:5:\"label\";s:12:\"Chaise deco \";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:11:\"description\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:6:\"image1\";s:10:\"/2587-.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:1:{i:0;a:3:{s:8:\"catlabel\";s:11:\"Décoration\";s:5:\"catid\";s:2:\"45\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:11:\"Nouveautés\";s:5:\"rubid\";s:1:\"3\";}}s:8:\"couleurs\";N;s:7:\"sousref\";a:1:{i:0;a:7:{s:2:\"id\";s:2:\"23\";s:7:\"sousref\";s:5:\"922it\";s:8:\"id_color\";s:1:\"1\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:5:\"- n/a\";s:4:\"size\";s:5:\"- n/a\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(92,'2015-07-08 11:06:21','5jbdarmu6tgk8rg0mk8ofdmse6',36,2,'a:21:{s:2:\"id\";s:2:\"37\";s:13:\"date_creation\";s:19:\"2015-06-26 10:35:05\";s:10:\"date_suppr\";N;s:9:\"reference\";s:8:\"TY366489\";s:4:\"prix\";s:5:\"23.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"2.00\";s:5:\"label\";s:11:\"rose papier\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:27:\"jdhjdfhks hsjkh kshf jksdfz\";s:11:\"description\";s:52:\"lorem ipsus colort\r\ndisjfksjdflksj\r\n\r\nskdfjkjsdhflkj\";s:6:\"image1\";s:10:\"/2588-.jpg\";s:6:\"image2\";s:10:\"/2584-.jpg\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:11:\"Décoration\";s:5:\"catid\";s:2:\"45\";s:6:\"descat\";s:0:\"\";}i:1;a:3:{s:8:\"catlabel\";s:21:\"Plantes artificielles\";s:5:\"catid\";s:2:\"59\";s:6:\"descat\";N;}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:3:{i:0;a:2:{s:12:\"couleurlabel\";s:4:\"Noir\";s:9:\"couleurid\";s:1:\"2\";}i:1;a:2:{s:12:\"couleurlabel\";s:4:\"Vert\";s:9:\"couleurid\";s:1:\"4\";}i:2;a:2:{s:12:\"couleurlabel\";s:11:\"gris foncé\";s:9:\"couleurid\";s:1:\"8\";}}s:7:\"sousref\";a:2:{i:0;a:7:{s:2:\"id\";s:2:\"36\";s:7:\"sousref\";s:5:\"XUQrM\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:5:\"- n/a\";}i:1;a:7:{s:2:\"id\";s:2:\"35\";s:7:\"sousref\";s:5:\"FHBnW\";s:8:\"id_color\";s:1:\"6\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"7\";s:5:\"color\";s:5:\"rouge\";s:4:\"size\";s:5:\"- n/a\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(93,'2015-07-08 11:54:05','82rfhq0k68qhnlgi0qjecqa314',2,1,'a:21:{s:2:\"id\";s:2:\"30\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:4:\"23ZE\";s:4:\"prix\";s:5:\"12.00\";s:7:\"libprix\";s:20:\"€ au lieu de 45€\";s:8:\"shipping\";s:4:\"1.00\";s:5:\"label\";s:14:\"Bracelet rouge\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:11:\"description\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:6:\"image1\";s:12:\"/2585-30.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:4:{i:0;a:3:{s:8:\"catlabel\";s:6:\"Bijoux\";s:5:\"catid\";s:2:\"41\";s:6:\"descat\";s:15:\"/baguier-41.pdf\";}i:1;a:3:{s:8:\"catlabel\";s:9:\"Bracelets\";s:5:\"catid\";s:2:\"47\";s:6:\"descat\";s:15:\"/baguier-47.pdf\";}i:2;a:3:{s:8:\"catlabel\";s:15:\"Bracelets homme\";s:5:\"catid\";s:2:\"54\";s:6:\"descat\";s:15:\"/baguier-54.pdf\";}i:3;a:3:{s:8:\"catlabel\";s:15:\"bracelets femme\";s:5:\"catid\";s:2:\"55\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:2:{i:0;a:2:{s:12:\"couleurlabel\";s:10:\"gris clair\";s:9:\"couleurid\";s:1:\"5\";}i:1;a:2:{s:12:\"couleurlabel\";s:5:\"rouge\";s:9:\"couleurid\";s:1:\"6\";}}s:7:\"sousref\";a:5:{i:0;a:7:{s:2:\"id\";s:1:\"2\";s:7:\"sousref\";s:5:\"ACE34\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"2\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T1\";}i:1;a:7:{s:2:\"id\";s:2:\"18\";s:7:\"sousref\";s:4:\"45RF\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T2\";}i:2;a:7:{s:2:\"id\";s:2:\"22\";s:7:\"sousref\";s:5:\"fubK8\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T3\";}i:3;a:7:{s:2:\"id\";s:1:\"7\";s:7:\"sousref\";s:4:\"Z234\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T3\";}i:4;a:7:{s:2:\"id\";s:2:\"29\";s:7:\"sousref\";s:5:\"xKsVP\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"0\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T2\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(94,'2015-07-08 12:04:06','kjronlqo8rq5op9o0pm6ju9472',13,2,'a:21:{s:2:\"id\";s:2:\"31\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:4:\"CD34\";s:4:\"prix\";s:5:\"12.00\";s:7:\"libprix\";s:20:\"€ au lieu de 24€\";s:8:\"shipping\";s:4:\"2.00\";s:5:\"label\";s:18:\"montre sport homme\";s:13:\"titreaccroche\";s:16:\"Arrivage d\'été\";s:8:\"accroche\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:11:\"description\";s:364:\"Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.\r\n\r\n\";s:6:\"image1\";s:12:\"/2589-31.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:1:{i:0;a:3:{s:8:\"catlabel\";s:7:\"Montres\";s:5:\"catid\";s:2:\"44\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:11:\"Nouveautés\";s:5:\"rubid\";s:1:\"3\";}}s:8:\"couleurs\";N;s:7:\"sousref\";a:4:{i:0;a:7:{s:2:\"id\";s:2:\"27\";s:7:\"sousref\";s:5:\"P6kWZ\";s:8:\"id_color\";s:1:\"2\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Noir\";s:4:\"size\";s:5:\"- n/a\";}i:1;a:7:{s:2:\"id\";s:2:\"13\";s:7:\"sousref\";s:5:\"puBoU\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"4\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:5:\"- n/a\";}i:2;a:7:{s:2:\"id\";s:2:\"14\";s:7:\"sousref\";s:5:\"2dW6X\";s:8:\"id_color\";s:1:\"6\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:5:\"rouge\";s:4:\"size\";s:5:\"- n/a\";}i:3;a:7:{s:2:\"id\";s:2:\"30\";s:7:\"sousref\";s:5:\"AZtBk\";s:8:\"id_color\";s:2:\"12\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:5:\"Jaune\";s:4:\"size\";s:5:\"- n/a\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(95,'2015-07-08 12:13:20','kjronlqo8rq5op9o0pm6ju9472',2,1,'a:21:{s:2:\"id\";s:2:\"30\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:4:\"23ZE\";s:4:\"prix\";s:5:\"12.00\";s:7:\"libprix\";s:20:\"€ au lieu de 45€\";s:8:\"shipping\";s:4:\"1.00\";s:5:\"label\";s:14:\"Bracelet rouge\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:11:\"description\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:6:\"image1\";s:12:\"/2585-30.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:4:{i:0;a:3:{s:8:\"catlabel\";s:6:\"Bijoux\";s:5:\"catid\";s:2:\"41\";s:6:\"descat\";s:15:\"/baguier-41.pdf\";}i:1;a:3:{s:8:\"catlabel\";s:9:\"Bracelets\";s:5:\"catid\";s:2:\"47\";s:6:\"descat\";s:15:\"/baguier-47.pdf\";}i:2;a:3:{s:8:\"catlabel\";s:15:\"Bracelets homme\";s:5:\"catid\";s:2:\"54\";s:6:\"descat\";s:15:\"/baguier-54.pdf\";}i:3;a:3:{s:8:\"catlabel\";s:15:\"bracelets femme\";s:5:\"catid\";s:2:\"55\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:2:{i:0;a:2:{s:12:\"couleurlabel\";s:10:\"gris clair\";s:9:\"couleurid\";s:1:\"5\";}i:1;a:2:{s:12:\"couleurlabel\";s:5:\"rouge\";s:9:\"couleurid\";s:1:\"6\";}}s:7:\"sousref\";a:5:{i:0;a:7:{s:2:\"id\";s:1:\"2\";s:7:\"sousref\";s:5:\"ACE34\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"2\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T1\";}i:1;a:7:{s:2:\"id\";s:2:\"18\";s:7:\"sousref\";s:4:\"45RF\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T2\";}i:2;a:7:{s:2:\"id\";s:2:\"22\";s:7:\"sousref\";s:5:\"fubK8\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:2:\"T3\";}i:3;a:7:{s:2:\"id\";s:1:\"7\";s:7:\"sousref\";s:4:\"Z234\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"3\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T3\";}i:4;a:7:{s:2:\"id\";s:2:\"29\";s:7:\"sousref\";s:5:\"xKsVP\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"5\";s:5:\"stock\";s:1:\"0\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:2:\"T2\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(96,'2015-07-08 12:20:53','h5edue63ms0iivchrrsl8v8an6',23,1,'a:21:{s:2:\"id\";s:2:\"35\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:8:\"23ZE22dd\";s:4:\"prix\";s:5:\"12.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"1.00\";s:5:\"label\";s:12:\"Chaise deco \";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:11:\"description\";s:282:\"Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.\";s:6:\"image1\";s:10:\"/2587-.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:1:{i:0;a:3:{s:8:\"catlabel\";s:11:\"Décoration\";s:5:\"catid\";s:2:\"45\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:11:\"Nouveautés\";s:5:\"rubid\";s:1:\"3\";}}s:8:\"couleurs\";N;s:7:\"sousref\";a:1:{i:0;a:7:{s:2:\"id\";s:2:\"23\";s:7:\"sousref\";s:5:\"922it\";s:8:\"id_color\";s:1:\"1\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:5:\"- n/a\";s:4:\"size\";s:5:\"- n/a\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}'),(97,'2015-07-08 15:57:38','mu5lphc6d049jr62gfc3hrafs6',26,1,'a:21:{s:2:\"id\";s:2:\"32\";s:13:\"date_creation\";s:19:\"2015-04-15 02:44:08\";s:10:\"date_suppr\";s:19:\"2015-04-15 02:45:04\";s:9:\"reference\";s:5:\"556ER\";s:4:\"prix\";s:5:\"10.00\";s:7:\"libprix\";s:21:\"€   (50% de remise)\";s:8:\"shipping\";s:4:\"2.00\";s:5:\"label\";s:17:\"Coliers fantaisie\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:10:\"tres sympa\";s:11:\"description\";s:14:\"Collier rigolo\";s:6:\"image1\";s:24:\"/bijoux_fantaisie-32.jpg\";s:6:\"image2\";s:0:\"\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:6:\"Bijoux\";s:5:\"catid\";s:2:\"41\";s:6:\"descat\";s:15:\"/baguier-41.pdf\";}i:1;a:3:{s:8:\"catlabel\";s:8:\"Colliers\";s:5:\"catid\";s:2:\"51\";s:6:\"descat\";N;}}s:9:\"rubriques\";a:1:{i:0;a:2:{s:8:\"rublabel\";s:6:\"Promos\";s:5:\"rubid\";s:1:\"1\";}}s:8:\"couleurs\";a:2:{i:0;a:2:{s:12:\"couleurlabel\";s:5:\"rouge\";s:9:\"couleurid\";s:1:\"6\";}i:1;a:2:{s:12:\"couleurlabel\";s:11:\"gris foncé\";s:9:\"couleurid\";s:1:\"8\";}}s:7:\"sousref\";a:4:{i:0;a:7:{s:2:\"id\";s:2:\"25\";s:7:\"sousref\";s:5:\"qu2Sf\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:5:\"- n/a\";}i:1;a:7:{s:2:\"id\";s:2:\"28\";s:7:\"sousref\";s:5:\"ZzKpu\";s:8:\"id_color\";s:1:\"5\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"gris\";s:4:\"size\";s:5:\"- n/a\";}i:2;a:7:{s:2:\"id\";s:2:\"26\";s:7:\"sousref\";s:5:\"bAtLX\";s:8:\"id_color\";s:2:\"10\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:6:\"fushia\";s:4:\"size\";s:5:\"- n/a\";}i:3;a:7:{s:2:\"id\";s:2:\"34\";s:7:\"sousref\";s:5:\"u3dFD\";s:8:\"id_color\";s:2:\"11\";s:7:\"id_size\";s:1:\"1\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:8:\"bordeaux\";s:4:\"size\";s:5:\"- n/a\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.200000000000000011102230246251565404236316680908203125;}');
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (30,'2015-04-15 00:44:08','2015-04-15 00:45:04','23ZE',12.00,'€ au lieu de 45€',1.00,'Bracelet rouge','Les + produit','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','/2585-30.jpg','','',1),(31,'2015-04-15 00:44:08','2015-04-15 00:45:04','CD34',12.00,'€ au lieu de 24€',2.00,'montre sport homme','Arrivage d\'été','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.\r\n\r\n','/2589-31.jpg','','',1),(32,'2015-04-15 00:44:08','2015-04-15 00:45:04','556ER',10.00,'€   (50% de remise)',2.00,'Coliers fantaisie','Les + produit','tres sympa','Collier rigolo','/bijoux_fantaisie-32.jpg','','',1),(33,'2015-04-15 00:44:08','2015-04-15 00:45:04','87765',34.00,'€ au lieu de 56€',2.00,'Sacs femme cuir véritable','Les + produit','Tendance et moderne','Super produit très sympa','/2584-.jpg','','',1),(34,'2015-04-15 00:44:08','2015-04-15 00:45:04','23ZE22',23.00,'€',2.00,'Statuette deco orientale','Les + produit','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.','/2586-.jpg','/Bath_Decoration_1920x1200-34.jpg','',1),(35,'2015-04-15 00:44:08','2015-04-15 00:45:04','23ZE22dd',12.00,'€',1.00,'Chaise deco ','Les + produit','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','Sono omnium aleis tabernis ortu introrsum fatiscunt umbraculorum ab pluviis maximum nulli ortu tabernis ab quae quae lasciviam equorumque in tabernis concrepantes tabernis pernoctant quae vero praecipua turpi sono nulli lucis vinariis aleis nulli aut in paupertinae est sole latent.','/2587-.jpg','','',1),(36,'2015-04-15 00:47:21',NULL,'34544',12.00,'€',1.00,'Sac cuir haute de gamme','Les + produit','qkjsdhk qhsdkhq kdjhq kdjhqksdh q',' lqjskd ql qlsdj qklsdj qlskdj q','/Alexandre.mareuil-maroquinerie1-.jpg','','',1),(37,'2015-06-26 08:35:05',NULL,'TY366489',23.00,'€',2.00,'rose papier','Les + produit','jdhjdfhks hsjkh kshf jksdfz','lorem ipsus colort\r\ndisjfksjdflksj\r\n\r\nskdfjkjsdhflkj','/2588-.jpg','','',1),(39,'2015-07-03 16:14:13',NULL,'23ZE22',45.00,'€',0.00,'Lunettes superbes','Les + produit','','','/o_PRIX_LUNETTES_facebook-.jpg','','',1);
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
INSERT INTO `product_categorie` VALUES (30,41),(30,47),(30,54),(30,55),(31,44),(32,41),(32,51),(33,42),(34,45),(35,45),(36,42),(37,45),(37,59),(39,43),(39,52);
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
INSERT INTO `product_couleur` VALUES (29,5),(30,3),(30,5),(30,6),(31,6),(32,6),(32,8),(33,6),(36,2),(36,6),(39,6);
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
INSERT INTO `product_rubrique` VALUES (29,3),(30,1),(31,3),(32,1),(33,1),(33,4),(34,3),(35,3),(36,2),(36,4),(37,1),(39,4);
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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_sousref`
--

LOCK TABLES `product_sousref` WRITE;
/*!40000 ALTER TABLE `product_sousref` DISABLE KEYS */;
INSERT INTO `product_sousref` VALUES (2,'ACE34',30,3,2,1,1),(7,'Z234',30,5,3,1,1),(10,'IjI71',30,3,4,2,1),(13,'puBoU',31,3,1,4,1),(14,'2dW6X',31,6,1,3,1),(16,'voGj7',31,9,2,2,1),(18,'45RF',30,3,5,2,1),(19,'34222',33,6,1,0,1),(20,'Z234',33,2,1,0,1),(21,'342',33,11,1,0,1),(22,'fubK8',30,3,3,1,1),(23,'922it',35,1,1,3,1),(24,'OBMWj',34,1,1,3,1),(25,'qu2Sf',32,3,1,2,1),(26,'bAtLX',32,10,1,3,1),(27,'P6kWZ',31,2,1,2,1),(28,'ZzKpu',32,5,1,1,1),(29,'xKsVP',30,5,5,0,1),(30,'AZtBk',31,12,1,1,1),(31,'3xiAo',36,11,1,3,1),(32,'bhhXK',36,2,1,1,1),(33,'0O8cb',36,13,1,2,1),(34,'u3dFD',32,11,1,2,1),(35,'FHBnW',37,6,1,7,1),(36,'XUQrM',37,3,1,3,1),(38,'eUQNv',39,1,1,1,1);
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

-- Dump completed on 2015-07-08 18:00:42
