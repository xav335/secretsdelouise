-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: secretsdelouise
-- ------------------------------------------------------
-- Server version	5.5.44-0+deb8u1

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
INSERT INTO `admin` VALUES (1,'secret','secret33','client'),(2,'admin','admin33','ico');
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adresse`
--

LOCK TABLES `adresse` WRITE;
/*!40000 ALTER TABLE `adresse` DISABLE KEYS */;
INSERT INTO `adresse` VALUES (1,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(2,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench'),(3,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(4,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench'),(5,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(6,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench'),(7,'TENNENBAUM','Christine','26, avenue Gambetta','33120','ARCACHON','0647763858','tennenbaum.christine@orange.fr',0,''),(8,'TENNENBAUM','Christine','26, avenue Gambetta','33120','ARCACHON','0647763858','tennenbaum.christine@orange.fr',1,''),(9,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(10,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench'),(11,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(12,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench'),(13,'TENNENBAUM','Christine','26, avenue Gambetta','33120','ARCACHON','0647763858','tennenbaum.christine@orange.fr',0,''),(14,'TENNENBAUM','Christine','26, avenue Gambetta','33120','ARCACHON','0647763858','tennenbaum.christine@orange.fr',1,''),(15,'Wayne','John','20 av de la forêt','33700','Merignac','0681731870','xavier.gonzalez@free.fr',0,''),(16,'Wayne','John','20 av de la forêt','33700','Merignac','0681731870','xavier.gonzalez@free.fr',1,''),(17,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(18,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench'),(19,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(20,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench'),(21,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',0,'attention au iench'),(22,'Gonzalez','Javier','36 route de Bordeaux','33360','Latresne','06 81 73 18 70','fjavi.gonzalez@gmail.com',1,'attention au iench');
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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catproduct`
--

LOCK TABLES `catproduct` WRITE;
/*!40000 ALTER TABLE `catproduct` DISABLE KEYS */;
INSERT INTO `catproduct` VALUES (44,'BOUCLES D\'OREILLES',NULL,0,NULL,0,2),(45,'COLLIERS',NULL,0,NULL,0,3),(46,'BRACELETS',NULL,0,NULL,0,1),(47,'MONTRES',NULL,0,NULL,0,4),(48,'COURTES','',44,'',1,100),(50,'LONGUES','',44,'',1,100),(51,'CREOLES','',44,'',1,100),(53,'PUCES','',44,'',1,100),(54,'SAUTOIRS','',45,'',1,100),(55,'RAS DU COU','',45,'',1,100),(56,'COURTS','',45,'',1,100),(58,'CHAINES','',45,'',1,100),(59,'MANCHETTES','',46,'',1,100),(60,'CORDONS','',46,'',1,100),(61,'BRACELET METAL','',47,'',1,100),(62,'BRACELET CUIR','',47,'',1,100),(63,'RONDS','',46,'',1,100),(64,'CHAINES','',46,'',1,100);
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color`
--

LOCK TABLES `color` WRITE;
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` VALUES (1,'- n/a'),(2,'Noir'),(3,'Bleu'),(4,'Vert'),(5,'gris'),(6,'rouge'),(10,'fushia'),(11,'bordeaux'),(12,'Jaune'),(13,'Beige'),(14,'gris clair'),(15,'indigo'),(16,'Leopard beige'),(17,'Léopard marron'),(18,'marron'),(19,'Argent'),(20,'Or'),(21,'Camel'),(22,'Ivoire'),(23,'Ecru'),(24,'Orange'),(25,'Vieil or'),(26,'Blanc'),(27,'Rose'),(28,'Rose poudré'),(29,'Turquoise'),(30,'Framboise'),(31,'Kaki'),(32,'Corail'),(33,'Multico'),(34,'Canard'),(35,'Vieil argent'),(36,'Translucide');
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
  `stock_traite` enum('0','1') NOT NULL DEFAULT '0',
  `logpayment` text CHARACTER SET utf8,
  `transaction_id` varchar(20) NOT NULL DEFAULT '',
  `panier` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande`
--

LOCK TABLES `commande` WRITE;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` VALUES (1,'frkv5cgt4lo0k9cl8nftekkkb7','2015-11-05 08:37:33',1,17,18,'',1,0,0,'0','a:41:{s:8:\"mc_gross\";s:5:\"21.00\";s:22:\"protection_eligibility\";s:8:\"Eligible\";s:14:\"address_status\";s:11:\"unconfirmed\";s:8:\"payer_id\";s:13:\"5FNDZK3A99Q8L\";s:3:\"tax\";s:4:\"2.67\";s:14:\"address_street\";s:20:\"36 route de Bordeaux\";s:12:\"payment_date\";s:25:\"00:38:40 Nov 05, 2015 PST\";s:14:\"payment_status\";s:9:\"Completed\";s:7:\"charset\";s:12:\"windows-1252\";s:11:\"address_zip\";s:5:\"33360\";s:10:\"first_name\";s:9:\"Christine\";s:6:\"mc_fee\";s:4:\"0.96\";s:20:\"address_country_code\";s:2:\"FR\";s:12:\"address_name\";s:15:\"Javier Gonzalez\";s:14:\"notify_version\";s:3:\"3.8\";s:6:\"custom\";s:19:\"1;1;13.33;5.00;2.67\";s:12:\"payer_status\";s:8:\"verified\";s:8:\"business\";s:18:\"xav335@hotmail.com\";s:15:\"address_country\";s:6:\"France\";s:12:\"address_city\";s:8:\"Latresne\";s:8:\"quantity\";s:1:\"1\";s:11:\"verify_sign\";s:56:\"AI36sk2Aln3iC.t.mla1wMizPRcQA7Cwo4NrMNnaYmn6qXP70eJu-GtN\";s:11:\"payer_email\";s:16:\"franck@iconeo.es\";s:6:\"txn_id\";s:17:\"4TY656266R043692Y\";s:12:\"payment_type\";s:7:\"instant\";s:9:\"last_name\";s:10:\"TENNENBAUM\";s:13:\"address_state\";s:0:\"\";s:14:\"receiver_email\";s:18:\"xav335@hotmail.com\";s:11:\"payment_fee\";s:0:\"\";s:11:\"receiver_id\";s:13:\"PVHUN68DV2Y8N\";s:8:\"txn_type\";s:10:\"web_accept\";s:9:\"item_name\";s:35:\"Ma commande \"les secrets de Louise\"\";s:11:\"mc_currency\";s:3:\"EUR\";s:11:\"item_number\";s:0:\"\";s:17:\"residence_country\";s:2:\"FR\";s:8:\"test_ipn\";s:1:\"1\";s:15:\"handling_amount\";s:4:\"0.00\";s:19:\"transaction_subject\";s:19:\"1;1;13.33;5.00;2.67\";s:13:\"payment_gross\";s:0:\"\";s:8:\"shipping\";s:4:\"5.00\";s:12:\"ipn_track_id\";s:13:\"167d517c5b520\";}','4TY656266R043692Y','a:3:{s:6:\"client\";a:7:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:8:\"password\";s:6:\"reivax\";s:14:\"id_facturation\";s:2:\"17\";s:12:\"id_livraison\";s:2:\"18\";s:11:\"facturation\";a:1:{i:0;a:10:{s:10:\"id_adresse\";s:2:\"17\";s:3:\"nom\";s:8:\"Gonzalez\";s:6:\"prenom\";s:6:\"Javier\";s:7:\"adresse\";s:20:\"36 route de Bordeaux\";s:2:\"cp\";s:5:\"33360\";s:5:\"ville\";s:8:\"Latresne\";s:3:\"tel\";s:14:\"06 81 73 18 70\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:9:\"livraison\";s:1:\"0\";s:7:\"message\";s:18:\"attention au iench\";}}s:9:\"livraison\";a:1:{i:0;a:10:{s:10:\"id_adresse\";s:2:\"18\";s:3:\"nom\";s:8:\"Gonzalez\";s:6:\"prenom\";s:6:\"Javier\";s:7:\"adresse\";s:20:\"36 route de Bordeaux\";s:2:\"cp\";s:5:\"33360\";s:5:\"ville\";s:8:\"Latresne\";s:3:\"tel\";s:14:\"06 81 73 18 70\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:9:\"livraison\";s:1:\"1\";s:7:\"message\";s:18:\"attention au iench\";}}}s:6:\"panier\";a:1:{i:0;a:12:{s:9:\"id_panier\";s:1:\"1\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:30:\" estampe goutte d\'eau et boule\";s:4:\"prix\";s:5:\"16.00\";s:2:\"id\";s:3:\"154\";s:6:\"image1\";s:14:\"/bo520-154.jpg\";s:4:\"size\";s:6:\"Unique\";s:5:\"color\";s:6:\"Argent\";s:8:\"shipping\";s:4:\"5.00\";s:10:\"id_sousref\";s:3:\"253\";s:9:\"reference\";s:5:\"BC520\";s:7:\"sousref\";s:5:\"BO520\";}}s:6:\"divers\";a:5:{s:3:\"tva\";d:0.20000000000000001;s:16:\"seuil_fdl_gratos\";i:100;s:23:\"frais_livraison_calcule\";d:5;s:24:\"frais_livraison_pratique\";d:5;s:26:\"total_ht_commande_hors_fdp\";d:13.333333333333334;}}'),(2,'k3m0do6hnllmurlkqqb9odvh23','2015-11-05 19:42:48',1,19,20,'',1,0,0,'0',NULL,'','a:3:{s:6:\"client\";a:7:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:8:\"password\";s:6:\"reivax\";s:14:\"id_facturation\";s:2:\"19\";s:12:\"id_livraison\";s:2:\"20\";s:11:\"facturation\";a:1:{i:0;a:10:{s:10:\"id_adresse\";s:2:\"19\";s:3:\"nom\";s:8:\"Gonzalez\";s:6:\"prenom\";s:6:\"Javier\";s:7:\"adresse\";s:20:\"36 route de Bordeaux\";s:2:\"cp\";s:5:\"33360\";s:5:\"ville\";s:8:\"Latresne\";s:3:\"tel\";s:14:\"06 81 73 18 70\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:9:\"livraison\";s:1:\"0\";s:7:\"message\";s:18:\"attention au iench\";}}s:9:\"livraison\";a:1:{i:0;a:10:{s:10:\"id_adresse\";s:2:\"20\";s:3:\"nom\";s:8:\"Gonzalez\";s:6:\"prenom\";s:6:\"Javier\";s:7:\"adresse\";s:20:\"36 route de Bordeaux\";s:2:\"cp\";s:5:\"33360\";s:5:\"ville\";s:8:\"Latresne\";s:3:\"tel\";s:14:\"06 81 73 18 70\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:9:\"livraison\";s:1:\"1\";s:7:\"message\";s:18:\"attention au iench\";}}}s:6:\"panier\";a:1:{i:0;a:12:{s:9:\"id_panier\";s:1:\"2\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:8:\"Sautoir \";s:4:\"prix\";s:5:\"28.00\";s:2:\"id\";s:2:\"43\";s:6:\"image1\";s:13:\"/co104-43.jpg\";s:4:\"size\";s:6:\"Unique\";s:5:\"color\";s:4:\"Bleu\";s:8:\"shipping\";s:4:\"5.00\";s:10:\"id_sousref\";s:2:\"70\";s:9:\"reference\";s:5:\"CO104\";s:7:\"sousref\";s:5:\"CO104\";}}s:6:\"divers\";a:5:{s:3:\"tva\";d:0.20000000000000001;s:16:\"seuil_fdl_gratos\";i:100;s:23:\"frais_livraison_calcule\";d:5;s:24:\"frais_livraison_pratique\";d:5;s:26:\"total_ht_commande_hors_fdp\";d:23.333333333333332;}}'),(3,'cpgenotlka1s3a4ev4flgrqhv0','2015-11-05 19:53:31',1,21,22,'',1,0,0,'0',NULL,'','a:3:{s:6:\"client\";a:7:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:8:\"password\";s:6:\"reivax\";s:14:\"id_facturation\";s:2:\"21\";s:12:\"id_livraison\";s:2:\"22\";s:11:\"facturation\";a:1:{i:0;a:10:{s:10:\"id_adresse\";s:2:\"21\";s:3:\"nom\";s:8:\"Gonzalez\";s:6:\"prenom\";s:6:\"Javier\";s:7:\"adresse\";s:20:\"36 route de Bordeaux\";s:2:\"cp\";s:5:\"33360\";s:5:\"ville\";s:8:\"Latresne\";s:3:\"tel\";s:14:\"06 81 73 18 70\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:9:\"livraison\";s:1:\"0\";s:7:\"message\";s:18:\"attention au iench\";}}s:9:\"livraison\";a:1:{i:0;a:10:{s:10:\"id_adresse\";s:2:\"22\";s:3:\"nom\";s:8:\"Gonzalez\";s:6:\"prenom\";s:6:\"Javier\";s:7:\"adresse\";s:20:\"36 route de Bordeaux\";s:2:\"cp\";s:5:\"33360\";s:5:\"ville\";s:8:\"Latresne\";s:3:\"tel\";s:14:\"06 81 73 18 70\";s:5:\"email\";s:24:\"fjavi.gonzalez@gmail.com\";s:9:\"livraison\";s:1:\"1\";s:7:\"message\";s:18:\"attention au iench\";}}}s:6:\"panier\";a:2:{i:0;a:12:{s:9:\"id_panier\";s:1:\"3\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:22:\"lanière cuir et clous\";s:4:\"prix\";s:5:\"24.00\";s:2:\"id\";s:1:\"3\";s:6:\"image1\";s:16:\"/br101_19_-3.jpg\";s:4:\"size\";s:6:\"Unique\";s:5:\"color\";s:5:\"rouge\";s:8:\"shipping\";s:4:\"5.00\";s:10:\"id_sousref\";s:2:\"24\";s:9:\"reference\";s:5:\"BR101\";s:7:\"sousref\";s:5:\"BR101\";}i:1;a:12:{s:9:\"id_panier\";s:1:\"4\";s:8:\"quantite\";s:1:\"1\";s:5:\"label\";s:22:\"lanière cuir et clous\";s:4:\"prix\";s:5:\"24.00\";s:2:\"id\";s:1:\"3\";s:6:\"image1\";s:16:\"/br101_19_-3.jpg\";s:4:\"size\";s:6:\"Unique\";s:5:\"color\";s:4:\"Noir\";s:8:\"shipping\";s:4:\"5.00\";s:10:\"id_sousref\";s:2:\"23\";s:9:\"reference\";s:5:\"BR101\";s:7:\"sousref\";s:5:\"BR101\";}}s:6:\"divers\";a:5:{s:3:\"tva\";d:0.20000000000000001;s:16:\"seuil_fdl_gratos\";i:100;s:23:\"frais_livraison_calcule\";d:10;s:24:\"frais_livraison_pratique\";d:10;s:26:\"total_ht_commande_hors_fdp\";d:40.000000000000007;}}');
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
) ENGINE=InnoDB AUTO_INCREMENT=25486 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (25439,'xav','gonza','xavier.gonzalez@free.fr',NULL,NULL,1,0,0),(25442,'xavier','gonzalez','fjavi.gonzalez@gmail.com',NULL,NULL,1,0,1),(25445,'Fred ','Lesca','fredericlesca@iconeo.fr',NULL,NULL,1,0,1),(25451,'Fred','lesca','flesca@free.fr',NULL,'atelier medecine chinoise décevant',1,0,1),(25453,'Xavier','Gonzalez','xavier@gonzalez.pm','06 81 73 18 70',NULL,1,0,1),(25479,'Jav','Gonzzza','xav335111@hotmail.com','0909090909',NULL,1,0,1),(25480,'','ICONEO','xav335@hotmail.com','0909090909',NULL,1,0,1),(25483,'Jav','Gonzzza','jav_gonz@yahoo.com','0909090909',NULL,1,0,1),(25484,'Jennifer','vacavant','jenyfer.89@hotmail.fr',NULL,NULL,1,0,1),(25485,'Christine','TENNENBAUM','tennenbaum.christine@orange.fr',NULL,NULL,1,0,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_commande`
--

LOCK TABLES `contact_commande` WRITE;
/*!40000 ALTER TABLE `contact_commande` DISABLE KEYS */;
INSERT INTO `contact_commande` VALUES (1,'fjavi.gonzalez@gmail.com','reivax',21,22),(2,'tennenbaum.christine@orange.fr','kriss',13,14),(3,'xavier.gonzalez@free.fr','reivax',15,16);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goldbook`
--

LOCK TABLES `goldbook` WRITE;
/*!40000 ALTER TABLE `goldbook` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'2015-10-29 00:00:00','Louise','','Louise','/Louise-.jpg',0);
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
INSERT INTO `newsletter` VALUES (13,'2015-06-26 00:00:00','Collection hawaenne jusqu\'à mercredi',' ');
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
) ENGINE=InnoDB AUTO_INCREMENT=338 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_detail`
--

LOCK TABLES `newsletter_detail` WRITE;
/*!40000 ALTER TABLE `newsletter_detail` DISABLE KEYS */;
INSERT INTO `newsletter_detail` VALUES (337,13,'Super jupe','/bo1003_2_-13.jpg','http://secretsdelouise.localxav.lan/produit.php?id=36&idcat=','Coucou ');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter_journal`
--

LOCK TABLES `newsletter_journal` WRITE;
/*!40000 ALTER TABLE `newsletter_journal` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panier`
--

LOCK TABLES `panier` WRITE;
/*!40000 ALTER TABLE `panier` DISABLE KEYS */;
INSERT INTO `panier` VALUES (1,'2015-11-05 08:35:53','frkv5cgt4lo0k9cl8nftekkkb7',253,1,'a:21:{s:2:\"id\";s:3:\"154\";s:13:\"date_creation\";s:19:\"2015-10-20 18:34:42\";s:10:\"date_suppr\";N;s:9:\"reference\";s:5:\"BC520\";s:4:\"prix\";s:5:\"16.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"5.00\";s:5:\"label\";s:30:\" estampe goutte d\'eau et boule\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:0:\"\";s:11:\"description\";s:62:\"estampe goutte d\'eau et boule\r\nLongueur : 8 cm\r\nlargeur : 3 cm\";s:6:\"image1\";s:14:\"/bo520-154.jpg\";s:6:\"image2\";s:17:\"/bo520_2_-154.jpg\";s:6:\"image3\";s:0:\"\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:18:\"BOUCLES D\'OREILLES\";s:5:\"catid\";s:2:\"44\";s:6:\"descat\";N;}i:1;a:3:{s:8:\"catlabel\";s:7:\"LONGUES\";s:5:\"catid\";s:2:\"50\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";N;s:8:\"couleurs\";N;s:7:\"sousref\";a:1:{i:0;a:7:{s:2:\"id\";s:3:\"253\";s:7:\"sousref\";s:5:\"BO520\";s:8:\"id_color\";s:2:\"19\";s:7:\"id_size\";s:2:\"10\";s:5:\"stock\";s:1:\"5\";s:5:\"color\";s:6:\"Argent\";s:4:\"size\";s:6:\"Unique\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.20000000000000001;}'),(2,'2015-11-05 19:41:16','k3m0do6hnllmurlkqqb9odvh23',70,1,'a:21:{s:2:\"id\";s:2:\"43\";s:13:\"date_creation\";s:19:\"2015-10-17 11:17:29\";s:10:\"date_suppr\";N;s:9:\"reference\";s:5:\"CO104\";s:4:\"prix\";s:5:\"28.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"5.00\";s:5:\"label\";s:8:\"Sautoir \";s:13:\"titreaccroche\";s:1:\" \";s:8:\"accroche\";s:19:\"Existe en 2 coloris\";s:11:\"description\";s:108:\"corne, perle couleur argent, fourrure et petit plastron couleur argent sur cordon cuir\r\nLongueur : 57 X 2 cm\";s:6:\"image1\";s:13:\"/co104-43.jpg\";s:6:\"image2\";s:16:\"/co104_2_-43.jpg\";s:6:\"image3\";s:16:\"/co104_5_-43.jpg\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:8:\"COLLIERS\";s:5:\"catid\";s:2:\"45\";s:6:\"descat\";N;}i:1;a:3:{s:8:\"catlabel\";s:8:\"SAUTOIRS\";s:5:\"catid\";s:2:\"54\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";N;s:8:\"couleurs\";N;s:7:\"sousref\";a:2:{i:0;a:7:{s:2:\"id\";s:2:\"69\";s:7:\"sousref\";s:5:\"CO104\";s:8:\"id_color\";s:1:\"2\";s:7:\"id_size\";s:2:\"10\";s:5:\"stock\";s:1:\"2\";s:5:\"color\";s:4:\"Noir\";s:4:\"size\";s:6:\"Unique\";}i:1;a:7:{s:2:\"id\";s:2:\"70\";s:7:\"sousref\";s:5:\"CO104\";s:8:\"id_color\";s:1:\"3\";s:7:\"id_size\";s:2:\"10\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:4:\"Bleu\";s:4:\"size\";s:6:\"Unique\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.20000000000000001;}'),(5,'2015-11-05 20:17:33','cpgenotlka1s3a4ev4flgrqhv0',76,1,'a:21:{s:2:\"id\";s:2:\"48\";s:13:\"date_creation\";s:19:\"2015-10-17 11:29:29\";s:10:\"date_suppr\";N;s:9:\"reference\";s:5:\"CO238\";s:4:\"prix\";s:5:\"30.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"5.00\";s:5:\"label\";s:8:\"Collier \";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:0:\"\";s:11:\"description\";s:49:\"Perles de rocaille 50 rangs\r\nLongueur : 32 X 2 cm\";s:6:\"image1\";s:13:\"/co109-48.jpg\";s:6:\"image2\";s:16:\"/co109_2_-48.jpg\";s:6:\"image3\";s:16:\"/co109_3_-48.jpg\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:8:\"COLLIERS\";s:5:\"catid\";s:2:\"45\";s:6:\"descat\";N;}i:1;a:3:{s:8:\"catlabel\";s:6:\"COURTS\";s:5:\"catid\";s:2:\"56\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";N;s:8:\"couleurs\";N;s:7:\"sousref\";a:1:{i:0;a:7:{s:2:\"id\";s:2:\"76\";s:7:\"sousref\";s:5:\"CO109\";s:8:\"id_color\";s:2:\"19\";s:7:\"id_size\";s:2:\"10\";s:5:\"stock\";s:1:\"1\";s:5:\"color\";s:6:\"Argent\";s:4:\"size\";s:6:\"Unique\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.20000000000000001;}'),(6,'2015-11-06 18:25:25','1if645q5tp8v41qb82jdr2n2t5',358,1,'a:21:{s:2:\"id\";s:3:\"214\";s:13:\"date_creation\";s:19:\"2015-11-03 23:15:03\";s:10:\"date_suppr\";N;s:9:\"reference\";s:5:\"BC615\";s:4:\"prix\";s:5:\"18.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"5.00\";s:5:\"label\";s:19:\"Aile couleur argent\";s:13:\"titreaccroche\";s:13:\"Les + produit\";s:8:\"accroche\";s:0:\"\";s:11:\"description\";s:86:\"Aile d\'ange couleur argent\r\nperle howlite bleu \r\napprêt couleur argent\r\nperle gorgone\";s:6:\"image1\";s:14:\"/P1010724-.jpg\";s:6:\"image2\";s:14:\"/P1010725-.jpg\";s:6:\"image3\";s:14:\"/P1010726-.jpg\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:18:\"BOUCLES D\'OREILLES\";s:5:\"catid\";s:2:\"44\";s:6:\"descat\";N;}i:1;a:3:{s:8:\"catlabel\";s:7:\"COURTES\";s:5:\"catid\";s:2:\"48\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";N;s:8:\"couleurs\";N;s:7:\"sousref\";a:1:{i:0;a:7:{s:2:\"id\";s:3:\"358\";s:7:\"sousref\";s:7:\"BOC1615\";s:8:\"id_color\";s:2:\"19\";s:7:\"id_size\";s:2:\"10\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:6:\"Argent\";s:4:\"size\";s:6:\"Unique\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.20000000000000001;}'),(7,'2015-11-07 01:32:11','5kseja4mii3r388vbed0rqmuv5',311,1,'a:21:{s:2:\"id\";s:3:\"183\";s:13:\"date_creation\";s:19:\"2015-10-26 13:20:28\";s:10:\"date_suppr\";N;s:9:\"reference\";s:5:\"BR512\";s:4:\"prix\";s:5:\"39.00\";s:7:\"libprix\";s:3:\"€\";s:8:\"shipping\";s:4:\"5.00\";s:5:\"label\";s:39:\"Maille et petites boules plaqué argent\";s:13:\"titreaccroche\";s:14:\"plaqué argent\";s:8:\"accroche\";s:15:\"Collier assorti\";s:11:\"description\";s:32:\"Longueur : 19 cm\r\nlargeur : 1 cm\";s:6:\"image1\";s:14:\"/br512-183.jpg\";s:6:\"image2\";s:17:\"/br512_2_-183.jpg\";s:6:\"image3\";s:26:\"/br512_3_ - Copy 1-183.jpg\";s:5:\"actif\";s:1:\"1\";s:10:\"categories\";a:2:{i:0;a:3:{s:8:\"catlabel\";s:9:\"BRACELETS\";s:5:\"catid\";s:2:\"46\";s:6:\"descat\";N;}i:1;a:3:{s:8:\"catlabel\";s:7:\"CHAINES\";s:5:\"catid\";s:2:\"64\";s:6:\"descat\";s:0:\"\";}}s:9:\"rubriques\";N;s:8:\"couleurs\";N;s:7:\"sousref\";a:1:{i:0;a:7:{s:2:\"id\";s:3:\"311\";s:7:\"sousref\";s:5:\"BR512\";s:8:\"id_color\";s:2:\"19\";s:7:\"id_size\";s:2:\"10\";s:5:\"stock\";s:1:\"3\";s:5:\"color\";s:6:\"Argent\";s:4:\"size\";s:6:\"Unique\";}}s:9:\"fraisport\";i:5;s:3:\"tva\";d:0.20000000000000001;}');
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
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'2015-10-06 16:07:45',NULL,'BRA200',50.00,'€',5.00,'BRACELET MANCHETTE CABOCHON ','Les + produit','','','/P1000132-.jpg','/P1000133-.jpg','/P1000135-.jpg',0),(2,'2015-10-13 16:58:42',NULL,'BR100',0.00,'€',0.00,'Bracelet plume','Les + produit','','','/P1000157-.jpg','','',0),(3,'2015-10-15 12:52:59',NULL,'BR101',24.00,'€',5.00,'Lanière cuir et clous',' ','Existe en 5 coloris','clous\r\nLongueur : 50cm\r\nlargeur : 0.5 cm\r\nfermoir coulissant couleur or','/br101_19_-3.jpg','/br101_7_-3.jpg','/br101_12_-3.jpg',1),(4,'2015-10-15 13:16:02',NULL,'BR101',0.00,'€',0.00,'Lanières et clous','Les + produit','','Longueur : 50cm\r\nlargeur : 0.5 cm\r\nfermoir coulissant couleur or','','','',0),(5,'2015-10-15 13:19:44',NULL,'BR101',0.00,'€',0.00,'Lanières et clous','Les + produit','','Longueur : 50cm\r\nlargeur : 0.5 cm\r\nfermoir coulissant couleur or','','','',0),(6,'2015-10-15 13:23:15',NULL,'BR101',0.00,'€',0.00,'Lanières et clous','Les + produit','','Longueur : 50cm\r\nlargeur : 0.5 cm\r\nfermoir coulissant couleur or','','','',0),(7,'2015-10-15 13:25:51',NULL,'BR101',0.00,'€',0.00,'Lanières et clous','Les + produit','','Longueur : 50cm\r\nlargeur : 0.5 cm\r\nfermoir coulissant couleur or','','','',0),(8,'2015-10-15 13:31:33',NULL,'BR120',0.00,'€',0.00,'Strass fermoir emanté','Les + produit','','','','','',0),(9,'2015-10-15 13:33:13',NULL,'BR121',0.00,'€',0.00,'Strass fermoir emanté','Les + produit','','','','','',0),(10,'2015-10-15 13:34:42',NULL,'BR122',0.00,'€',0.00,'Strass fermoir emanté','Les + produit','','','','','',0),(11,'2015-10-15 13:38:05',NULL,'BR123',24.00,'€',5.00,'Lanières (5) pompon fourrure','Les + produit','','pompon fourrure\r\nLongueur : 20 cm\r\nlargeur : 3 cm\r\nfermoir aimanté couleur argent','','','',1),(12,'2015-10-15 13:40:23',NULL,'BR124',18.00,'€',5.00,'Lanière cuir avec strass et aspect peau de bête',' ','Existe en 4 coloris','avec strass et aspect peau de bête\r\nLongueur : 19 cm\r\nlargeur : 1 cm\r\nfermoir aimanté couleur or','/br124_8_-12.jpg','/br124_6_-12.jpg','/br124_14_-12.jpg',1),(13,'2015-10-15 16:16:20',NULL,'BR114',24.00,'€',5.00,'Manchette ethnique avec strass','Les + produit','','impression ethnique\r\nLongueur : 22 cm\r\nlargeur : 3.5 cm\r\nfermoir à boucle bronze','/br114-.jpg','/br114_3_-.jpg','/br114_4_-.jpg',1),(14,'2015-10-15 16:29:56',NULL,'BR110',24.00,'€',5.00,'Lanières (5) et bord fourrure',' ','Existe en 3 coloris','lanières avec clou strass et fourrure\r\nLongueur : 19 cm\r\nlargeur : 6 cm \r\nfermoir aimanté couleur argent','/br110-.jpg','/br110_4_-14.jpg','',1),(15,'2015-10-16 09:23:27',NULL,'BR106',24.00,'€',5.00,'Lanière cuir et clous','Les + produit','','clous\r\nLongueur : 27 cm\r\nlargeur : 0.5 cm\r\nfermoir aimanté couleur or','/br106_3_-15.jpg','/br106-15.jpg','/br106_2_-15.jpg',1),(16,'2015-10-16 09:29:10',NULL,'BR107',24.00,'€',5.00,'Lanières (5) et encre couleur argent','Les + produit','','5 lanières strass et imprimée et encre couleur argent\r\nLongueur : 20 cm\r\nlargeur : 3 cm\r\nfermoir aimanté couleur argent','/br107_3_-16.jpg','/br107_2_-16.jpg','/br107_4_-16.jpg',1),(17,'2015-10-16 09:33:28',NULL,'BR108',24.00,'€',5.00,'Lanières (8) strass et clous ','Les + produit','','strass et clous\r\nLongueur : 20cm\r\nlargeur : 4 cm\r\nfermoir aimanté couleur argent','/br108-17.jpg','/br108_3_-17.jpg','/br108_4_-17.jpg',1),(18,'2015-10-16 09:35:57',NULL,'BR109',24.00,'€',5.00,'Lanières (7) grosse perle et strass',' ','Existe en 2 coloris','grosse perle et strass\r\nLongueur : 19 cm\r\nlargeur : 3 cm\r\nfermoir aimanté couleur argent','/br109_7_-18.jpg','/br109_3_-18.jpg','/br109_5_-18.jpg',1),(19,'2015-10-16 09:45:09',NULL,'BR111',24.00,'€',5.00,'Lanières (4) avec perle hématite et breloques',' ','Existe en 3 coloris','pierre hématite bleue et breloques\r\nLongueur : 19 cm\r\nlargeur : 2.5 cm\r\nfermoir aimanté couleur argent ','/br111_2_-19.jpg','/br111-19.jpg','/br111_3_-19.jpg',1),(20,'2015-10-16 09:47:47',NULL,'BR112',24.00,'€',5.00,'Lanières (6) et plume couleur argent','Les + produit','','6 lanières entrecroisées et plume couleur argent\r\nLongueur : 21 cm\r\nlargeur : 3.5 cm\r\nfermoir par pression (4) couleur argent','/br112_2_-20.jpg','/br112_4_-20.jpg','/br112_3_-20.jpg',1),(21,'2015-10-16 09:52:11',NULL,'BR113',24.00,'€',4.00,'Lanière perle centrale','Les + produit','','7 lanières strass et impression et perle centrale\r\nLongueur : 19 cm\r\nlargeur : 3 cm\r\nfermoir aimanté couleur argent','','','',0),(22,'2015-10-16 09:57:44',NULL,'BR115',24.00,'€',5.00,'Lanières (3) perles et strass et pompon coton',' ','Existe en 4 coloris','pompon, perle et strass \r\nLongueur : 19.5 cm\r\nlargeur : 3 cm\r\nfermoir aimanté couleur argent','/br115-22.jpg','/br115_3_-22.jpg','/br115_2_-22.jpg',1),(23,'2015-10-16 12:01:31',NULL,'BR116',24.00,'€',5.00,'Lanières (7) clous ','Les + produit','','clous et chaine\r\nLongueur : 19.5 cm\r\nlargeur : 4.5cm\r\nfermoir aimanté couleur or','/br116_2_-23.jpg','/br116_3_-23.jpg','/br116-23.jpg',1),(24,'2015-10-16 12:07:22',NULL,'BR118',24.00,'€',5.00,'Lanière cuir strass et clous ','Les + produit','','strass et clou\r\nLongueur : 20 cm\r\nlargeur : 3.5 cm\r\nfermoir aimanté couleur argent','/br118_3_-24.jpg','/br118_4_-24.jpg','/br118-24.jpg',1),(25,'2015-10-16 12:09:44',NULL,'BR117',24.00,'€',5.00,'Lanières cuir (14) clous et strass ',' ','Existe en 3 coloris','clous et strass\r\nLongueur : 20 cm\r\nlargeur : 4 cm\r\nfermoir aimanté couleur vieil argent','/br117-25.jpg','/br117_2_-25.jpg','',1),(26,'2015-10-16 12:19:00',NULL,'BR119',24.00,'€',5.00,'Lanières (7) strass et clous',' ','Existe en 4 coloris','strass et clous\r\nLongueur : 20 cm\r\nlargeur : 4 cm\r\nfermoir aimanté couleur argent','/br119_4_-26.jpg','/br119_5_-26.jpg','/br119_6_-26.jpg',1),(27,'2015-10-16 14:18:41',NULL,'BR501',39.00,'€',5.00,'Bracelet rond triple plaqué argent','plaqué argent','','Diamètre : 6cm','/br501-27.jpg','/br501_2_-27.jpg','',1),(28,'2015-10-16 14:23:58',NULL,'BR502',39.00,'€',5.00,'Bracelet double plat plaqué argent','plaqué argent','','Diamètre : 6 cm','/br502-28.jpg','','',1),(29,'2015-10-16 14:26:03',NULL,'BR503',39.00,'€',5.00,'Manchette martelé',' ','Existe en2 coloris','Métal martelé  \r\nlargeur : 5 cm','/br503-29.jpg','/br503_5_-29.jpg','/br503_7_-29.jpg',1),(30,'2015-10-16 14:30:43',NULL,'BR504',24.00,'€',5.00,'Manchette style oriental','Les + produit','','largeur : 6 cm','/br504-30.jpg','/br504_5_-30.jpg','/br504_2_-30.jpg',1),(31,'2015-10-16 14:32:41',NULL,'BR505',24.00,'€',5.00,'Manchette araignée strass','Les + produit','','Fermoir ressort\r\nlargeur : 4 cm','/br505_2_-31.jpg','/br505_3_-31.jpg','/br505-31.jpg',1),(32,'2015-10-16 14:37:33',NULL,'BR506',24.00,'€',5.00,'Manchette antique','Les + produit','','Longueur : 9.5 cm','/br506-32.jpg','/br506_2_-32.jpg','/br506_3_-32.jpg',1),(33,'2015-10-16 14:39:48',NULL,'BR507',18.00,'€',5.00,'Bracelet perle','Les + produit','','Fermoir ressort\r\nDiamètre : 6.5 cm','/br507-33.jpg','/br507_2_-33.jpg','',1),(34,'2015-10-16 14:47:22',NULL,'BR120',28.00,'€',5.00,'Manchette cabochon et perle de rocaille',' ','Existe en 2 coloris','Longueur : 19 cm\r\nlargeur : 4 cm\r\nfermoir aimanté couleur or','/br120_2_-34.jpg','/br120_3_-34.jpg','/br120_4_-34.jpg',1),(35,'2015-10-16 14:52:54',NULL,'BR508',39.00,'€',5.00,'Bracelet simple plein plat plaqué argent','plaqué argent','','largeur : 1 cm\r\ndiamètre : 7 cm','/br508-35.jpg','','',1),(36,'2015-10-16 14:55:47',NULL,'BR509',39.00,'€',5.00,'Bracelet multiple plaqué argent','plaqué argent','','largeur : 2.5 cm\r\ndiamètre : 6 cm','/br509-36.jpg','/br509_2_-36.jpg','',1),(37,'2015-10-16 15:04:38',NULL,'MO101',28.00,'€',5.00,'Montre cadran rectangulaire ',' ','Existe en 4 coloris','Bracelet cuir grainé 22 cm\r\ncadran couleur argent : largeur : 1.5 cm\r\ncadran longueur : 2.5 cm','','','',1),(38,'2015-10-16 15:12:46',NULL,'MO102',28.00,'€',5.00,'Montre cadran rond',' ','Existe en 4 coloris','Bracelet cuir grainé 22 cm\r\nCadran rond couleur argent diamètre : 2.5 cm ','','','',1),(39,'2015-10-17 09:04:21',NULL,'CO100',24.00,'€',5.00,'Sautoir perles',' ','Existe en 2 coloris','Perles facettées et perle couleur argent sur cordon coton\r\nLongueur : 60 X 2 cm\r\n','/co100_2_ - Copy 1-39.jpg','/co100_4_-39.jpg','/co100_5_-39.jpg',1),(40,'2015-10-17 09:09:13',NULL,'CO101',24.00,'€',5.00,'Sautoir chaine et pastilles','Les + produit','','2 chaînes couleur argent avec pastilles 3 couleurs : or, argent et bronze\r\nLongueur : 47 X 2 cm','/co101-40.jpg','/co101_2_-40.jpg','',1),(41,'2015-10-17 09:11:19',NULL,'CO102',24.00,'€',5.00,'Sautoir plume',' ','Existe en 2 coloris ','plume et ruban\r\nLongueur 150 cm à régler ','/co102-41.jpg','/co102_6_-41.jpg','/co102_5_-41.jpg',1),(42,'2015-10-17 09:13:44',NULL,'CO103',24.00,'€',5.00,'Sautoir macramé',' ','Existe en 2 coloris','macramé cabochon et plume\r\nLongueur : 57 X 2 cm','/co103_4_-42.jpg','/co103-42.jpg','/co103_5_-42.jpg',1),(43,'2015-10-17 09:17:29',NULL,'CO104',28.00,'€',5.00,'Sautoir ',' ','Existe en 2 coloris','corne, perle couleur argent, fourrure et petit plastron couleur argent sur cordon cuir\r\nLongueur : 57 X 2 cm','/co104-43.jpg','/co104_2_-43.jpg','/co104_5_-43.jpg',1),(44,'2015-10-17 09:19:31',NULL,'CO105',28.00,'€',5.00,'Sautoir ',' ','Existe en 2 coloris','corne, perle couleur argent, fourrure et petit plastron couleur or sur cordon cuir\r\nLongueur : 57 X 2 cm','/co105-44.jpg','/co105_3_-44.jpg','/co105_5_-44.jpg',1),(45,'2015-10-17 09:21:35',NULL,'CO237',28.00,'€',5.00,'Plume et chainette','Les + produit','','plume et chainette sur cordon aspect daim\r\nLongueur : 35 X 2 cm','/co217-45.jpg','/co237_2_-45.jpg','/co237_3_-45.jpg',1),(46,'2015-10-17 09:23:41',NULL,'CO107',0.00,'€',0.00,'Sautoir','Les + produit','','perle de nacre\r\nLongueur : 52 X 2 cm','/co107-46.jpg','/co107_2_-46.jpg','/co107_3_-46.jpg',1),(47,'2015-10-17 09:25:46',NULL,'CO108',28.00,'€',5.00,'Sautoir','Les + produit','','multi anneaux avec lien cuir et chaine couleur argent \r\nLongueur : 48 X 2 cm','/co108-47.jpg','/co108_2_-47.jpg','/co108_3_-47.jpg',1),(48,'2015-10-17 09:29:29',NULL,'CO238',30.00,'€',5.00,'Perle de rocaille','Les + produit','','Perles de rocaille 50 rangs\r\nLongueur : 32 X 2 cm','/co109-48.jpg','/co109_2_-48.jpg','/co109_3_-48.jpg',1),(49,'2015-10-17 09:33:57',NULL,'CO110',24.00,'€',5.00,'Sautoir',' ','Existe en 2 coloris','Perles facettées et perle couleur or sur cordon coton\r\nLongueur : 60 X 2 ','/co110_3_-49.jpg','/co110 - Copy 1-49.jpg','/co110_4_-49.jpg',1),(50,'2015-10-17 13:30:03',NULL,'CO201',15.00,'€',5.00,'Perle 2 rangs','Les + produit','','2 rangs\r\nLongueur : 20 cm','/co201-50.jpg','/co201_2_-50.jpg','',1),(51,'2015-10-17 13:32:35',NULL,'CO202',15.00,'€',5.00,'Perles blanches 1 rang','Les + produit','','Perles blanches\r\nLongueur : 20 cm','/co202-51.jpg','/co202_2_-51.jpg','/co202_3_-51.jpg',1),(52,'2015-10-17 13:34:20',NULL,'CO203',28.00,'€',5.00,'Breloques et plumes',' ','Existe en 2 coloris','3 rangs avec breloques, coquillages et pièces\r\nLongueur : 27 cm','/co203-52.jpg','/co203_3_-52.jpg','/co203_4_-52.jpg',1),(53,'2015-10-17 13:36:26',NULL,'CO204',30.00,'€',5.00,'Fourrure',' ','Existe en 4 coloris','Fourrure, perles et pierres\r\nLongueur : 41 cm','/co204-53.jpg','','',1),(54,'2015-10-17 13:39:22',NULL,'CO205',28.00,'€',5.00,'Anneaux de perles',' ','Existe en 2 coloris','Anneaux de perles (15) sur cordon aspect lurex\r\nLongueur : 20 cm','/co205_9_-54.jpg','/co205-54.jpg','/co205_5_-54.jpg',1),(55,'2015-10-17 13:43:03',NULL,'CO206',28.00,'€',5.00,'Grosses boules façon passementerie',' ','Existe en 2 coloris','Grosses boules façon passementerie sur chaine anneaux\r\nLongueur : 20 cm','/co206_6_ - Copy 1-55.jpg','','/co206_3_-55.jpg',1),(56,'2015-10-17 13:44:56',NULL,'CO207',30.00,'€',5.00,'Grosses perles façon plexi ',' ','Existe en 3 coloris','Grosses perles façon plexi sur chaine\r\nLongueur : 27 cm','/co207-56.jpg','/co207_2_-56.jpg','',1),(57,'2015-10-17 13:47:14',NULL,'CO208',30.00,'€',5.00,'Spirales aspect corne',' ','Existe en 2 coloris','Spirales aspect corne\r\nLongueur : 23 cm','/co208-57.jpg','/co208_2_-57.jpg','/co208_3_-57.jpg',1),(58,'2015-10-17 13:49:27',NULL,'CO209',28.00,'€',5.00,'Collier chaine',' ','Existe en 2 coloris','Chaine avec 11 cercles\r\nLongueur : 22 cm','/co209_3_-58.jpg','/co209-58.jpg','/co209_2_-58.jpg',1),(59,'2015-10-17 13:51:18',NULL,'CO210',26.00,'€',5.00,'Plastron et pièces',' ','Existe en 2 coloris','Plastron et pièces\r\nLongueur : 25 cm','/co210_3_-59.jpg','/co210-59.jpg','/co210_4_-59.jpg',1),(60,'2015-10-17 13:52:52',NULL,'CO211',28.00,'€',5.00,'Plastron antique',' ','Existe en 2 coloris','Plastron antique avec strass noirs\r\nLongueur: 24 cm','/co211_2_-60.jpg','/co211-60.jpg','',1),(61,'2015-10-17 13:54:35',NULL,'CO212',30.00,'€',5.00,'Collier plastron',' ','Existe en 2 coloris','Plastron avec perles hématites bleues\r\nLongueur : 28 cm','/co212-61.jpg','/co212_3_-61.jpg','/co212_4_-61.jpg',1),(62,'2015-10-17 13:56:30',NULL,'CO213',35.00,'€',5.00,'Collier strass',' ','Existe en 3 coloris','Strass\r\nLongueur : 25 cm','/co213-62.jpg','/co213_4_-62.jpg','/co213_6_-62.jpg',1),(63,'2015-10-17 13:58:54',NULL,'CO214',30.00,'€',5.00,'Collier plumes ',' ','Existe en 2 coloris','Plastron avec plumes couleur argent\r\nLongueur : 27 cm','/co214-63.jpg','','',1),(64,'2015-10-17 14:03:11',NULL,'CO215',24.00,'€',5.00,'Collier franges','Les + produit','','Franges et breloques\r\nLongueur : 34 cm','/co215-64.jpg','/co215_2_-64.jpg','/co215_4_-64.jpg',1),(65,'2015-10-17 14:04:48',NULL,'CO216',28.00,'€',5.00,'Collier plaques',' ','Existe en 2 coloris','Chaine et plaques\r\nLongueur : 23 cm','/co216-65.jpg','/co216_6_-65.jpg','/co216_7_-65.jpg',1),(66,'2015-10-17 14:06:30',NULL,'CO217',28.00,'€',5.00,'Collier feuilles',' ','Existe en 2 coloris','cordon et 12 feuilles métal\r\nLongueur : 25 cm','/co217 - Copy 1-66.jpg','/co217_3_-66.jpg','/co217_2_-66.jpg',1),(67,'2015-10-17 14:17:26',NULL,'CO218',26.00,'€',5.00,'Collier Côte de maille',' ','Existe en 2 coloris','Côte de maille\r\nLongueur : 21 cm','/co218-67.jpg','/co218_5_-67.jpg','/co218_2_-67.jpg',1),(68,'2015-10-17 14:19:12',NULL,'CO219',30.00,'€',5.00,'Ras du cou  crochet',' ','Existe en 2 coloris','Crochet, perles et chainettes','/co219-68.jpg','/co219_4_-68.jpg','/co219_5_-68.jpg',1),(69,'2015-10-17 14:20:54',NULL,'CO220',30.00,'€',5.00,'Ras du cou crocher','Les + produit','','Crochet, perles et chainettes couleur or\r\n','/co220-69.jpg','/co220_2_-69.jpg','',1),(70,'2015-10-17 14:22:28',NULL,'CO221',28.00,'€',5.00,'Collier multi chaines',' ','Existe en 3 coloris','Pendant multi chaines\r\nLongueur : 29 cm','/co221_11_-70.jpg','/co221_4_-70.jpg','/co221_5_-70.jpg',1),(71,'2015-10-17 14:24:43',NULL,'CO222',30.00,'€',5.00,'Collier ruban','Les + produit','','Ruban velours et perles facettées\r\nCordon a nouer','/co222-71.jpg','/co222_2_-71.jpg','/co222_3_-71.jpg',1),(72,'2015-10-18 16:31:16',NULL,'CO223',35.00,'€',4.00,'Collier plastron','Les + produit','','Plastron et perles couleur ivoire\r\nLongueur : 30 cm','/co223-72.jpg','/co223_2_-72.jpg','/co223_3_-72.jpg',1),(73,'2015-10-18 16:35:21',NULL,'CO301',69.00,'€',5.00,'Maille plate plaqué or','plaqué or','','Chaine plate\r\nPlaqué or\r\nLongueur : 20 cm\r\nlargeur : 0.5 cm','/co301-.jpg','','',1),(74,'2015-10-18 16:37:47',NULL,'CO302',45.00,'€',5.00,'Collier plaqué or','plaqué or','','Chaine et médaillon\r\nPlaqué or\r\nLongueur : 19 cm\r\nDiamètre du médaillon: 3.4 cm','/co302-.jpg','','',1),(75,'2015-10-19 14:08:37',NULL,'BO101',24.00,'€',5.00,'Perles et strass',' ','Existe en 3 coloris','perles et strass\r\nLongueur : 7.5 cm\r\nlargeur : 3.5 cm','/P1000543 - Copy 1-75.jpg','/bo101_5_-75.jpg','',1),(76,'2015-10-19 14:11:30',NULL,'BO102',24.00,'€',5.00,'Estampe perlée et grosse perle centrale',' ','Existe en 3 coloris','estampe perlée et grosse perle centrale et pampilles\r\nLongueur : 7 cm\r\nlargeur : 4 cm','/bo102_7_-76.jpg','/bo102_9_-76.jpg','/bo102_4_-76.jpg',1),(77,'2015-10-19 14:15:07',NULL,'BO103',24.00,'€',5.00,'Cabochon et perle',' ','Existe en 2 coloris','perle et cabochon\r\nLongueur : 5.5 cm\r\nlargeur : 2.5 cm','','','',1),(78,'2015-10-19 14:18:15',NULL,'BO104',24.00,'€',5.00,'Cabochon et perle',' ','Existe en 2 coloris','Perle et cabochon\r\nLongueur : 5.5 cm\r\nlargeur : 2.5 cm','','','',1),(79,'2015-10-19 14:22:40',NULL,'BO105',24.00,'€',5.00,'Perle et strass',' ','Existe en 2 coloris','Perle et strass\r\nLongueur : 8 cm\r\nlargeur : 3.5 cm','/bo105_8_-79.jpg','/bo105_2_-79.jpg','/bo105_10_-79.jpg',1),(80,'2015-10-19 14:24:33',NULL,'BO106',24.00,'€',5.00,'Pendantes avec strass',' ','Existe en 4 coloris','Strass\r\nLongueur : 9 cm','/bo106_5_-80.jpg','/bo106_2_-80.jpg','/bo106_6_-80.jpg',1),(81,'2015-10-19 14:27:16',NULL,'BO107',24.00,'€',5.00,'Perles et breloques',' ','Existe en 3 coloris','Perles et breloques\r\nLongueur : 11 cm','/bo107_3_-81.jpg','/bo107_7_-81.jpg','/bo107-81.jpg',1),(82,'2015-10-19 14:28:59',NULL,'BO108',24.00,'€',5.00,'Plaque ajourée ',' ','Existe en 2 coloris','Plaque ajourée et strass\r\nLongueur : 7 cm','/bo108_4_-82.jpg','/bo108_2_-82.jpg','/bo108_5_-82.jpg',1),(83,'2015-10-19 14:31:49',NULL,'BO109',24.00,'€',5.00,'Ronds entrelacés',' ','Existe en 4 coloris','3 ronds entrelacés\r\nDiamètre : 2 cm','/bo109-83.jpg','/bo109_2_-83.jpg','',1),(84,'2015-10-19 14:34:17',NULL,'BO110',24.00,'€',5.00,'Feuilles pendantes','Les + produit','','Pendant de feuilles\r\nLongueur : 7 cm','/bo110-84.jpg','/bo110_2_-84.jpg','/bo110_3_-84.jpg',1),(85,'2015-10-19 14:43:34',NULL,'BO111',24.00,'€',5.00,'Fleurs ajourées','Les + produit','','Plaque de fleurs ajourées\r\nLongueur : 4 cm\r\ndiamètre : 2.5 cm','/bo111-85.jpg','/bo111_2_-85.jpg','/bo111_3_-85.jpg',1),(86,'2015-10-19 14:45:04',NULL,'BO112',24.00,'€',5.00,'Fleurs','Les + produit','','Fleurs\r\nLongueur : 4.5 cm\r\ndiamètre : 3 cm','/bo112-86.jpg','/bo112_2_-86.jpg','',1),(87,'2015-10-19 14:46:47',NULL,'BO113',24.00,'€',5.00,'Cœur ajouré','Les + produit','','Cœur ajouré\r\nLongueur : 6 cm','','','',1),(88,'2015-10-19 14:48:52',NULL,'BO114',24.00,'€',5.00,'Plaques ajourées',' ','Existe en 2 coloris','Plaques ajourées\r\nLongueur : 6 cm\r\nlargeur : 3 cm','/bo114_4_-88.jpg','/bo114-88.jpg','/bo114_6_-88.jpg',1),(89,'2015-10-19 14:51:09',NULL,'BO115',24.00,'€',5.00,'Breloques','Les + produit','','Cercle, breloques\r\nLongueur : 6 cm\r\nlargeur : 2 cm','/bo115-89.jpg','/bo115_2_-89.jpg','',1),(90,'2015-10-19 14:53:00',NULL,'BO116',24.00,'€',5.00,'opéra',' ','Existe en 2coloris','Strass\r\nLongueur : 7 cm\r\nlargeur : 1.5 cm','','','',1),(91,'2015-10-19 14:59:06',NULL,'BO117',24.00,'€',5.00,'Plaques et pièces','Les + produit','','Plaques avec pendant pièces\r\nLongueur : 11.5 cm\r\nlargeur : 3.5 cm','','','',1),(92,'2015-10-19 15:01:18',NULL,'BO118',24.00,'€',5.00,'Losanges et pendants pièces',' ','Existe en 2 coloris','Losanges et pendant pièces\r\nLongueur : 7 cm\r\nlargeur : 2.5 cm','/bo118-92.jpg','/bo118_4_-92.jpg','/bo118_3_-92.jpg',1),(93,'2015-10-19 15:04:19',NULL,'BO119',24.00,'€',5.00,'Rosace et strass','Les + produit','','Rosace avec perle centrale et strass\r\nLongueur :8 cm\r\ndiamètre : 5.3 cm','/bo119-93.jpg','/bo119_2_-93.jpg','/bo119_3_-93.jpg',1),(94,'2015-10-19 15:06:29',NULL,'BO120',24.00,'€',5.00,'Arabesque et perles',' ','Existe en 3 coloris','arabesque et perles\r\nLongueur : 10 cm\r\nlargeur : 4.5 cm','/bo120-94.jpg','/bo120_2_-94.jpg','',1),(95,'2015-10-19 15:09:34',NULL,'BO121',24.00,'€',5.00,'Créoles strass et perles',' ','Existe en2 coloris','Créoles strass et perles\r\nLongueur : 7 cm\r\ndiamètre : 4 cm','/bo121-95.jpg','/bo121_2_-95.jpg','/bo121_3_-95.jpg',1),(96,'2015-10-19 15:11:27',NULL,'BO122',24.00,'€',5.00,'Créoles perles',' ','Existe en 2 coloris','Créoles \r\nCrochet\r\nLongueur : 7 cm \r\ndiamètre : 5 cm','/bo122-96.jpg','/bo122_4_-96.jpg','/bo122_3_-96.jpg',1),(97,'2015-10-19 15:13:27',NULL,'BO123',24.00,'€',5.00,'Demi lune','Les + produit','','Demi lune avec breloques\r\nLongueur : 7 cm\r\ndiamètre : 3.5 cm','/bo123-97.jpg','/bo123_2_-97.jpg','/bo123_3_-97.jpg',1),(98,'2015-10-19 15:15:05',NULL,'BO124',24.00,'€',5.00,'Dormeuses strass',' ','Existe en 3 coloris','Dormeuse boule strass\r\nLongueur : 3.5 cm\r\ndiamètre : 1.5 cm','','','',1),(99,'2015-10-19 15:17:14',NULL,'BO125',24.00,'€',5.00,'Créoles strass et perles',' ','Existe en 2 coloris','Goutte d\'eau entourée de perles\r\nLongueur : 6 cm\r\ndiamètre : 2.5 cm','/bo125_3_-99.jpg','/bo125_2_-99.jpg','/bo125_4_-99.jpg',1),(100,'2015-10-19 15:19:14',NULL,'BO126',24.00,'€',5.00,'Losange avec perles et breloques',' ','Existe en 2 coloris','Losange avec perles et breloques\r\nLongueur : 7 cm\r\nlargeur : 2 cm','','','',1),(101,'2015-10-19 15:22:15',NULL,'BO127',24.00,'€',5.00,'Créoles perles',' ','Existe en 2 coloris','Créoles, perles et feuille couleur or\r\nDiamètre : 4.5 cm','/bo127-101.jpg','/bo127_3_-101.jpg','/bo127_2_-101.jpg',1),(102,'2015-10-19 15:25:33',NULL,'BO128',24.00,'€',5.00,'2 plaques','Les + produit','','Plaques rondes avec perle centrale\r\nLongueur : 7 cm\r\ndiamètre des plaques : 4 et 2 cm','/bo128-102.jpg','/bo128_2_-102.jpg','',1),(103,'2015-10-19 15:29:26',NULL,'BO129',24.00,'€',5.00,'2 plaques avec perles',' ','Existe en 2 coloris','Plaques (ronde et goutte d\'eau) incrustées\r\nLongueur : 7 cm\r\nlargeur : 2 cm','/bo129_4_-103.jpg','/bo129_2_-103.jpg','/bo129_6_-103.jpg',1),(104,'2015-10-19 15:31:33',NULL,'BO130',24.00,'€',5.00,'Plaque sculptée',' ','Existe en 2 coloris','Plaque sculptée\r\nLongueur : 5 cm\r\nlargeur : 3 cm','/bo130_3_-104.jpg','/bo130-104.jpg','/bo130_4_-104.jpg',1),(105,'2015-10-19 15:34:06',NULL,'BO131',24.00,'€',5.00,'Croix sculptée',' ','Existe en 2 coloris','Croix sculptée\r\nLongueur : 7 cm\r\nlargeur : 3.5 cm','/bo131_3_-105.jpg','/bo131-105.jpg','/bo131_4_-105.jpg',1),(106,'2015-10-19 15:36:26',NULL,'BO132',24.00,'€',5.00,'Demi lune sersti de stras',' ','Existe en 2 coloris','Demi lune sersti de stras, pendant chaines et plumes couleur argent\r\nLongueur : 11 cm\r\nlargeur : 4.5 cm','/bo132-106.jpg','/bo132_4_-106.jpg','/bo132_3_-106.jpg',1),(107,'2015-10-19 15:38:51',NULL,'BO133',24.00,'€',5.00,'Créoles perles',' ','Existe en 2 coloris','Créoles  habillées  de perles et pendant plume métal \r\nDiamètre : 2 cm','/bo133-107.jpg','/bo133_4_-107.jpg','/bo133_2_-107.jpg',1),(108,'2015-10-19 15:41:49',NULL,'BO134',24.00,'€',5.00,'Plume métal','Les + produit','','Perle couleur turquoise avec plume en métal\r\nLongueur : 8 cm\r\nlargeur : 1 cm','/bo134-108.jpg','/bo134_2_-108.jpg','/bo134_3_-108.jpg',1),(109,'2015-10-19 15:43:54',NULL,'BO135',24.00,'€',5.00,'Goutte et strass','Les + produit','','Goutte avec strass et pendant perle\r\n Longueur : 5.5 cm\r\nlargeur : 1.5 cm','/bo135-109.jpg','/bo135_2_-109.jpg','/bo135_3_-109.jpg',1),(110,'2015-10-19 15:45:47',NULL,'BO136',24.00,'€',5.00,'Créoles travaillées','Les + produit','','Forme géométrique travaillée\r\nLongueur : 5 cm\r\nlargeur : 2.5 cm','/bo136-110.jpg','/bo136_2_-110.jpg','/bo136_3_-110.jpg',1),(111,'2015-10-19 15:47:54',NULL,'BO137',24.00,'€',5.00,'Grande plume avec perles','Les + produit','','Grande plume avec perles couleur turquoise\r\nLongueur : 9.5 cm\r\nlargeur : 3 cm','/bo137_2_-111.jpg','/bo137_3_-111.jpg','/bo137-111.jpg',1),(112,'2015-10-19 15:49:20',NULL,'BO138',24.00,'€',5.00,'Corne sur chaine','Les + produit','Existe en 2 coloris','Corne sur chaine\r\nLongueur : 11.5 cm','/bo138-112.jpg','/bo138_4_-112.jpg','/bo138_3_-112.jpg',1),(113,'2015-10-19 15:51:35',NULL,'BO139',24.00,'€',5.00,'Demi lune avec strass',' ','Existe en 2 coloris','Demi lune avec strass et pendant breloques\r\nLongueur : 10.5 cm\r\nlargeur : 4.5 cm','/bo139_3_-113.jpg','/bo139-113.jpg','/bo139_5_-113.jpg',1),(114,'2015-10-20 08:39:36',NULL,'BC1001',16.00,'€',5.00,'Cabochon pied de poule','Les + produit','','cabochon pied de poule\r\nLongueur : 5.5 cm\r\nCabochon : 2.5 X 2 cm','/bo1001-114.jpg','/bo1001_2_-114.jpg','',1),(115,'2015-10-20 08:40:46',NULL,'BC1002',16.00,'€',5.00,'Cabochon pois','Les + produit','','cabochon pois\r\nLongueur : 5.5 cm\r\nCabochon 2.5 X 2 cm','/bo1002-115.jpg','/bo1002_2_-115.jpg','',1),(116,'2015-10-20 08:41:39',NULL,'BC1003',16.00,'€',5.00,'Cabochon léopard','Les + produit','',' cabochon léopard\r\nLongueur : 5.5 cm\r\nCabochon 2.5 X 2 cm','/bo1003_3_-116.jpg','/bo1003-116.jpg','/bo1003_2_-116.jpg',1),(117,'2015-10-20 08:42:29',NULL,'BC1004',16.00,'€',5.00,'Cabochon perroquet','Les + produit','','cabochon perroquet\r\nLongueur : 5.5 cm\r\nCabochon : 2.5 X 2 cm','/bo1004-117.jpg','/bo1004_3_-117.jpg','/bo1004_4_-117.jpg',1),(118,'2015-10-20 08:43:19',NULL,'BC1005',16.00,'€',5.00,'Cabochon papillon','Les + produit','','cabochon papillon\r\n Longueur : 5.5 cm\r\nCabochon : 2.5 X 2 cm','/bo1005-118.jpg','/bo1005_2_-118.jpg','',1),(119,'2015-10-20 08:44:12',NULL,'BC1006',16.00,'€',5.00,'Cabochon pois','Les + produit','','cabochon pois\r\nLongueur : 5.5 cm\r\nCabochon : 2.5 X 2 cm','/bo1006-119.jpg','/bo1006_2_-119.jpg','/bo1006_5_-119.jpg',1),(120,'2015-10-20 08:45:02',NULL,'BC1007',16.00,'€',5.00,'Cabochon chat','Les + produit','',' cabochon chat\r\nLongueur : 5.5 cm\r\nCabochon : 2.5 X 2 cm','/bo1007-120.jpg','/bo1007_4_-120.jpg','/bo1007_5_-120.jpg',1),(121,'2015-10-20 08:45:54',NULL,'BC1008',16.00,'€',5.00,'Cabochon perruche ','Les + produit','','cabochon perruche \r\n Longueur : 5.5 cm\r\nCabochon :2.5 X 2 cm','/bo1008_2_-121.jpg','/bo1008_3_-121.jpg','/bo1008_5_-121.jpg',1),(122,'2015-10-20 08:46:44',NULL,'BC1009',16.00,'€',5.00,'Cabochon tour Eiffel','Les + produit','','cabochon tour Eiffel\r\nLongueur : 5.5 cm\r\nCabochon : 2.5 X 2 cm','/bo1009_2_-122.jpg','/bo1009_3_-122.jpg','/bo1009_5_-122.jpg',1),(123,'2015-10-20 09:10:18',NULL,'BC1101',14.00,'€',5.00,'Taureau','Les + produit','','vache\r\nLongueur : 2.5 cm','/bo1101-123.jpg','/bo1101_2_-123.jpg','/bo1101_5_-123.jpg',1),(124,'2015-10-20 09:11:16',NULL,'BC1102',14.00,'€',5.00,'Danseuse','Les + produit','','danseuse\r\nLongueur : 4 cm','/bo1102-124.jpg','/bo1102_2_-124.jpg','/bo1102_3_-124.jpg',1),(125,'2015-10-20 09:12:05',NULL,'BC1103',14.00,'€',5.00,'Chat','Les + produit','','chat\r\nLongueur : 4 cm','/bo1103_2_-125.jpg','/bo1103_3_-125.jpg','',1),(126,'2015-10-20 09:13:27',NULL,'BC1104',14.00,'€',5.00,'Arbre de vie','Les + produit','','arbre de vie\r\nLongueur : 3.5 cm\r\nlargeur : 2 cm','/bo1104-126.jpg','/bo1104_2_-126.jpg','/bo1104_3_-126.jpg',1),(127,'2015-10-20 09:14:31',NULL,'BC1105',14.00,'€',5.00,'Tortue','Les + produit','','tortue\r\nLongueur : 3 cm\r\nLargeur : 2 cm','/bo1105-127.jpg','/bo1105_2_-127.jpg','/bo1105_3_-127.jpg',1),(128,'2015-10-20 09:15:28',NULL,'BC1106',14.00,'€',5.00,'Cheval','Les + produit','','cheval\r\nLongueur : 3 cm\r\nLargeur : 2 cm','/bo1106-128.jpg','/bo1106_2_-128.jpg','/bo1106_3_-128.jpg',1),(129,'2015-10-20 09:16:23',NULL,'BC1107',14.00,'€',5.00,'Tour Eiffel','Les + produit','','tour Eiffel\r\nLongueur : 3 cm\r\nLargeur : 1 cm','/bo1107-129.jpg','/bo1107_2_-129.jpg','',1),(130,'2015-10-20 09:17:21',NULL,'BC1108',14.00,'€',5.00,'Carrosse','Les + produit','','carrosse\r\nLongueur : 3 cm\r\nLargeur : 2 cm','/bo1108-130.jpg','/bo1108_4_-130.jpg','/bo1108_2_-130.jpg',1),(131,'2015-10-20 09:18:21',NULL,'BC1109',14.00,'€',5.00,'Couverts','Les + produit','','couverts\r\nLongueur : 8 cm\r\nLargeur : 0.7 cm','/bo1109-131.jpg','/bo1109_2_-131.jpg','/bo1109_3_-131.jpg',1),(132,'2015-10-20 09:19:46',NULL,'BC1110',14.00,'€',5.00,'Arbre de vie et perle rouge','Les + produit','','arbre de vie et perle rouge\r\nLongueur : 5 cm','/bo1110-132.jpg','/bo1110_2_-132.jpg','/bo1110_3_-132.jpg',1),(133,'2015-10-20 09:20:33',NULL,'BC1111',14.00,'€',5.00,'Horloge','Les + produit','','horloge\r\nLongueur : 5 cm\r\nLargeur : 1.5 cm','/bo1111-133.jpg','/bo1111_2_-133.jpg','/bo1111_4_-133.jpg',1),(134,'2015-10-20 09:21:22',NULL,'BC1112',14.00,'€',5.00,'Manège','Les + produit','','manège\r\nLongueur : 3 cm\r\nLargeur : 1 cm','/bo1112-134.jpg','/bo1112_2_-134.jpg','/bo1112_3_-134.jpg',1),(135,'2015-10-20 12:26:37',NULL,'BC501',16.00,'€',5.00,'Perle  bénitier rose poudrée ','Les + produit','','perle nacre de bénitier rose poudrée \r\nperle 1 cm\r\ncoupelle carrée couleur argent\r\nLongueur : 3 cm\r\nlargeur : 1.2 cm\r\n\r\n\r\n\r\n','/bo1501-135.jpg','/bo1501_2_-135.jpg','',1),(136,'2015-10-20 12:28:59',NULL,'BC502',16.00,'€',5.00,'Perle nacrée de bénitier','Les + produit','','perle nacrée de bénitier de 1 cm\r\ncoupelle métal argent\r\nperle métal de 4 mm\r\nLongueur : 3 cm\r\nlargeur : 1 cm\r\n\r\n','/bo502-136.jpg','/bo502_2_-136.jpg','/bo502_3_-136.jpg',1),(137,'2015-10-20 12:31:44',NULL,'BC503',16.00,'€',5.00,'Perle nacrée de bénitier blanche irisée','Les + produit','','perle nacrée de bénitier blanche irisée\r\ncoupelle métal\r\nrondelle métal\r\nperle argenté de 4 mm\r\nLongueur : 3 cm\r\nlargeur : 1 cm\r\n\r\n','/bo503-137.jpg','/bo503_2_-137.jpg','/bo503_3_-137.jpg',1),(138,'2015-10-20 12:38:12',NULL,'BC504',16.00,'€',5.00,'Perle de bénitier rose poudré','Les + produit','','perle de bénitier rose poudré \r\napprêt métal argenté\r\nperle de 6 mm métal argenté\r\nLongueur : 3.5 cm\r\nlargeur : 1 cm\r\n\r\n','/bo1504 - Copy 1-138.jpg','/bo1504_2_ - Copy 1-138.jpg','',1),(139,'2015-10-20 12:40:11',NULL,'BC505',16.00,'€',5.00,'Perle agathe noire','Les + produit','','perle agathe noire\r\ncoupelle métal argenté\r\nperle de 4 mm métal argenté \r\nLongueur :  3 cm\r\nlargeur : 1.2 cm\r\n\r\n','/bo505-139.jpg','/bo505_2_-139.jpg','/bo505_4_-139.jpg',1),(140,'2015-10-20 12:42:20',NULL,'BC506',16.00,'€',5.00,'Perle agathe noire mâte','Les + produit','','perle agathe noire mâte \r\nrondelle métal argenté\r\nperle couleur argent de 8 mm\r\nLongueur : 3.5 cm\r\nlargeur : 1.2 cm\r\n\r\n\r\n','/bo506-140.jpg','/bo506_2_-140.jpg','/bo506_3_-140.jpg',1),(141,'2015-10-20 12:45:08',NULL,'BC507',16.00,'€',5.00,'Perle agathe noire','Les + produit','','perle agathe noire\r\nperle métal de 4 mm\r\nrondelle métal\r\nLongueur : 3.5 cm\r\nlargeur : 1.2 cm\r\n\r\n\r\n','/bo507-141.jpg','/bo507_2_-141.jpg','/bo507_3_-141.jpg',1),(142,'2015-10-20 12:46:49',NULL,'BC508',16.00,'€',5.00,'Perle howlite bleue','Les + produit','','perle howlite bleue\r\ncoupelle métal argenté\r\nmini coupelle\r\nLongueur : 3.5 cm\r\nlargeur : 1 cm\r\n\r\n','/bo1508-142.jpg','/bo1508_3_-142.jpg','/bo1508_5_-142.jpg',1),(143,'2015-10-20 12:48:59',NULL,'BC509',16.00,'€',5.00,'Perle gorgone','Les + produit','','perle gorgone\r\ncoupelle métal argenté\r\nperle couleur métal argenté\r\nLongueur : 3.5 cm\r\nlargeur : 1.5 cm\r\n\r\n','/bo1509-143.jpg','/bo1509_2_-143.jpg','/bo1509_3_-143.jpg',1),(144,'2015-10-20 12:51:07',NULL,'BC510',16.00,'€',5.00,'Perle gorgone et howlite bleue','Les + produit','','perle gorgone et howlite bleue\r\ncoupelle couleur métal argenté\r\nrondelle howlite bleue\r\nLongueur : 4 cm\r\nlargeur : 2 cm\r\n\r\n','/bo1510-144.jpg','/bo1510_2_-144.jpg','/bo1510_3_-144.jpg',1),(145,'2015-10-20 12:54:20',NULL,'BC511',16.00,'€',5.00,'Perle howlite antique blanche et perle howlite bleue','Les + produit','','perle howlite antique blanche\r\ncoupelle couleur métal argenté\r\npetite coupelle\r\nperle howlite bleue\r\nLongueur : 4 cm\r\nlargeur : 1.2 cm\r\n\r\n','/bo1511-145.jpg','/bo1511_2_-145.jpg','/bo1511_3_-145.jpg',1),(146,'2015-10-20 12:57:39',NULL,'BC512',16.00,'€',5.00,'Perle nacrée de bénitier blanc irisé et perle howlite bleue','Les + produit','','Perle nacrée de bénitier blanc irisé\r\nperle howlite\r\nrondelle métal et strass\r\nLongueur : 4 cm\r\nlargeur : 1 cm\r\n\r\n','/bo512-146.jpg','/bo512_2_-146.jpg','/bo512_3_-146.jpg',1),(147,'2015-10-20 13:10:39',NULL,'BC513',16.00,'€',5.00,'Perle de bénitier blanche irisée','Les + produit','','perle de bénitier blanche irisée\r\nperle grise de 8 mm\r\nrondelle métal et strass\r\nLongueur : 4 cm\r\nlargeur : 1 cm\r\n\r\n','/bo513-147.jpg','/bo513_2_-147.jpg','/bo513_4_-147.jpg',1),(148,'2015-10-20 13:12:33',NULL,'BC514',16.00,'€',5.00,'Perle de bénitier grise','Les + produit','','perle de bénitier grise\r\nrondelle métal et strass\r\nperle grise de 8 mm\r\nLongueur : 4 cm\r\nlargeur : 1 cm\r\n\r\n','/bo514-148.jpg','/bo514_2_-148.jpg','/bo514_3_-148.jpg',1),(149,'2015-10-20 13:15:31',NULL,'BC515',16.00,'€',5.00,'Perle rouge et feuille couleur argent','Les + produit','','perle rouge\r\nfeuille couleur argent\r\ncoupelle fleur métal argenté\r\nLongueur : 5 cm\r\nlargeur  : 1 cm\r\n\r\n','/bo515-149.jpg','/bo515_2_-149.jpg','/bo515_3_-149.jpg',1),(150,'2015-10-20 13:17:40',NULL,'BC516',16.00,'€',5.00,'Perle orange et estampe papillon','Les + produit','','perle orange et papillon\r\nrondelle fleur\r\nperle métal argenté\r\npapillon métal argenté\r\nLongueur : 4.5 cm\r\nlargeur : 1 cm\r\n\r\n','/bo1516_copie-150.jpg','/bo1516_2_-150.jpg','/bo1516_3_-150.jpg',1),(151,'2015-10-20 16:31:00',NULL,'BC517',16.00,'€',5.00,'Plume couleur argent et perle orange','Les + produit','','plume couleur argent et perle orange\r\nLongueur : 7 cm\r\nlargeur : 1 cm','/bo1517-151.jpg','/bo1517_2_-151.jpg','/bo1517_3_-151.jpg',1),(152,'2015-10-20 16:32:34',NULL,'BC518',16.00,'€',5.00,'Plume couleur argent et perle','Les + produit','','plume couleur argent et perle\r\nLongueur : 7 cm\r\nlargeur : 1 cm','/bo518-152.jpg','/bo518_2_-152.jpg','/bo518_3_-152.jpg',1),(153,'2015-10-20 16:33:37',NULL,'BC519',16.00,'€',5.00,'Estampe goutte d\'eau et noeud pap','Les + produit','','estampe goutte d\'eau et noeud pap\r\nLongueur : 7 cm\r\nlargeur : 3 cm','/bo519-153.jpg','/bo519_2_-153.jpg','/bo519_3_-153.jpg',1),(154,'2015-10-20 16:34:42',NULL,'BC520',16.00,'€',5.00,' Estampe goutte d\'eau et boule','Les + produit','','estampe goutte d\'eau et boule\r\nLongueur : 8 cm\r\nlargeur : 3 cm','/bo520-154.jpg','/bo520_2_-154.jpg','',1),(155,'2015-10-20 17:44:50',NULL,'BC521',16.00,'€',5.00,'Estampe goutte d\'eau et perle couleur turquoise','Les + produit','','estampe goutte d\'eau et perle couleur turquoise\r\nLongueur : 8cm\r\nlargeur : 3 cm','/bo1521-155.jpg','/bo1521_3_-155.jpg','/bo1521_5_-155.jpg',1),(156,'2015-10-20 17:45:50',NULL,'BC522',16.00,'€',5.00,'Estampe aile et perle howlite bleue','Les + produit','','Aile et perle howlite bleue\r\nLongueur : 9 cm\r\nlargeur : 2 cm','/bo1522-156.jpg','/bo1522_2_-156.jpg','/bo1522_3_-156.jpg',1),(157,'2015-10-20 17:47:14',NULL,'BC523',16.00,'€',5.00,'Estampe aile et perle marron ','Les + produit','','Aile et perle marron\r\nLongueur : 8.5 cm\r\nlargeur : 2 cm','/bo1523-157.jpg','','',1),(158,'2015-10-20 17:49:01',NULL,'BC524',16.00,'€',5.00,'Estampe aile et perle couleur turquoise ','Les + produit','','Aile et perle couleur turquoise\r\nLongueur : 8.5 cm\r\nlargeur : 2 cm','','','',1),(159,'2015-10-20 17:50:50',NULL,'BC525',16.00,'€',5.00,'Estampe aile rouge et perle couleur turquoise','Les + produit','','Aile rouge et perle couleur turquoise\r\nLongueur : 9 cm\r\nlargeur : 2 cm','','','',1),(160,'2015-10-20 17:51:49',NULL,'BC526',16.00,'€',5.00,'Estampe aile rouge et perle orange','Les + produit','','Aile rouge et perle orange\r\nLongueur : 9 cm\r\nlargeur : 2 cm','/bo1526-160.jpg','/bo1526_2_-160.jpg','/bo1526_3_-160.jpg',1),(161,'2015-10-20 17:53:15',NULL,'BC527',16.00,'€',5.00,'Estampe aile rouge et perle couleur turquoise','Les + produit','','Aile rouge et perle couleur turquoise\r\nLongueur : 8 cm\r\nlargeur : 2 cm','','','',1),(162,'2015-10-20 17:54:06',NULL,'BC528',16.00,'€',5.00,'Métal brossé','Les + produit','','Métal brossé\r\nLongueur : 5.5 cm\r\nlargeur : 1.5 cm','/bo528-162.jpg','/bo528_2_-162.jpg','/bo528_3_-162.jpg',1),(163,'2015-10-20 17:56:18',NULL,'BC529',16.00,'€',5.00,'Estampe ovale et feuille couleur argent','Les + produit','','estampe ovale et feuille couleur argent\r\nLongueur : 6 cm\r\nlargeur : 1.5 cm','/bo1529-163.jpg','/bo1529_2_-163.jpg','/bo1529_3_-163.jpg',1),(164,'2015-10-20 17:57:21',NULL,'BC530',16.00,'€',5.00,'Estampe ronde et feuille couleur argent','Les + produit','','estampe ronde et feuille couleur argent\r\nLongueur : 5 cm\r\nlargeur : 2 cm','/bo1530-164.jpg','/bo1530_2_-164.jpg','',1),(165,'2015-10-20 17:58:06',NULL,'BC531',16.00,'€',5.00,'Estampe rosace et feuille couleur argent','Les + produit','','estampe rosace et feuille couleur argent\r\nLongueur : 6 cm\r\nlargeur : 2.5 cm','/bo1531_2_-165.jpg','/bo1531_4_-165.jpg','',1),(166,'2015-10-20 17:59:34',NULL,'BC532',16.00,'€',5.00,'Estampe feuille et estampe ronde','Les + produit','','estampe feuille et estampe ronde\r\nLongueur : 7 cm\r\nlargeur : 2 cm','/bo532-166.jpg','/bo532_2_-166.jpg','/bo532_3_-166.jpg',1),(167,'2015-10-20 18:01:57',NULL,'BC533',16.00,'€',5.00,'Estampe rosace et pompon coton',' ','Existe en 4 coloris','estampe rosace et pompon coton\r\nLongueur : 6.5 cm\r\nlargeur : 2.5 cm','/bo1533_5_-167.jpg','/bo1533-167.jpg','/bo1533_13_-167.jpg',1),(168,'2015-10-20 18:05:10',NULL,'BC534',16.00,'€',5.00,'Estampe rosace et pompon plume','Les + produit','','estampe rosace et pompon plume\r\nLongueur : 6.5 cm\r\nlargeur : 2.5 cm','/bo1534-168.jpg','/bo1534_2_-168.jpg','/bo1534_3_-168.jpg',1),(169,'2015-10-20 18:06:30',NULL,'BC536',16.00,'€',5.00,'Estampe ovale et pompon plume','Les + produit','','estampe ovale et pompon plume\r\nLongueur : 6 cm\r\nlargeur : 1.5 cm','/bo1536-169.jpg','/bc536_2_-169.jpg','/bo1536_3_-169.jpg',1),(170,'2015-10-20 18:07:43',NULL,'BC537',16.00,'€',5.00,'Estampe ronde et pompon coton',' ','Existe en 3 coloris','estampe ronde et pompon coton\r\nLongueur : 6 cm\r\nlargeur : 2 cm','/bo1537_4_-170.jpg','/bo1537_8_-170.jpg','/bo1537_3_-170.jpg',1),(171,'2015-10-20 18:27:53',NULL,'BC535',16.00,'€',5.00,'Estampe ovale et pompon coton',' ','Existe en 3 coloris','estampe ovale et pompon coton\r\nLongueur : 7 cm\r\nlargeur : 1.5 cm','/bo1535-171.jpg','/bo1535_5_-171.jpg','/bo1535_8_-171.jpg',1),(172,'2015-10-22 08:38:37',NULL,'BO601',30.00,'€',5.00,'Strass serti de perles','Les + produit','','Strass serti de perles, pendant pièce, pompon, perle et feuille\r\nLongueur : 9 cm\r\nlargeur : 2 cm','/bo601_2_-172.jpg','/bo601-172.jpg','/bo601_3_-172.jpg',1),(173,'2015-10-22 08:40:01',NULL,'BO602',24.00,'€',5.00,'Plaque et plumes',' ','Existe en 3 coloris','Plaque travaillée, chaines, perles et plumes\r\nLongueur : 16 cm\r\nDiamètre : 4 cm','/bo602_3_ - Copy 1-173.jpg','/bo602 - Copy 1-173.jpg','/bo602_4_-173.jpg',1),(174,'2015-10-22 08:41:31',NULL,'BO604',24.00,'€',5.00,'Perles et plumes',' ','Existe en 2 coloris','Plaque ajourée, pendant perles et plumes\r\nLongueur :11 cm\r\nDiamètre : 2.5 cm','/bo604-174.jpg','/bo604_2_-174.jpg','',1),(175,'2015-10-22 08:42:33',NULL,'BO605',24.00,'€',5.00,'pendantes plumes et chaines',' ','Existe en 4 coloris','Pompon de chaines, plume et lien cuir\r\nLongueur : 10 cm','/bo605_2_-175.jpg','/bo605_7_-175.jpg','/bo605_3_-175.jpg',1),(176,'2015-10-22 08:43:27',NULL,'BO606',24.00,'€',5.00,'Pompons  et plumes',' ','Existe en 3 coloris','Pompon de chaines, plume et lien cuir\r\nLongueur : 10 cm','/bo606-176.jpg','/bo606_3_-176.jpg','/bo606_2_-176.jpg',1),(177,'2015-10-22 08:44:56',NULL,'BO607',24.00,'€',5.00,'Attrape réves',' ','Existe en 3 coloris','Attrape rêves\r\nLongueur : 20 cm\r\nDiamètre : 3 cm','/bo607_2_-177.jpg','/bo608 - Copy 1-177.jpg','/bo608_3_-177.jpg',1),(178,'2015-10-22 08:45:50',NULL,'BO608',24.00,'€',5.00,'Attrape réves',' ','Existe en 3 coloris','Attrape rêves\r\nLongueur : 20 cm\r\nDiamètre : 3 cm','/bo607_3_-178.jpg','/bo608_4_-178.jpg','/bo608_6_-178.jpg',1),(179,'2015-10-22 08:46:38',NULL,'BO609',24.00,'€',5.00,'Attrape réves',' ','Existe en 3 coloris','Attrape rêves avec plaque métal\r\nLongueur : 10 cm','/bo609-179.jpg','/bo609_3_-179.jpg','/bo609_5_-179.jpg',1),(180,'2015-10-22 08:47:28',NULL,'BO11110',24.00,'€',5.00,'Attrape rêves ','Les + produit','','Attrape rêves avec plaque métal\r\nLongueur : 10 cm','','','',1),(181,'2015-10-26 12:18:11',NULL,'BR510',39.00,'€',5.00,'Bracelet simple rond plein plaqué argent','plaqué argent','','Longueur : 6.5 cm\r\nDiamètre  : 0.5 cm','/br510-181.jpg','/br510_2_-181.jpg','',1),(182,'2015-10-26 12:19:23',NULL,'BR511',0.00,'€',0.00,'Bracelet grosse maille','Les + produit','','Longueur : 19 cm\r\nlargeur : 0.5 cm','','','',0),(183,'2015-10-26 12:20:28',NULL,'BR512',39.00,'€',5.00,'Maille et petites boules plaqué argent','plaqué argent','Collier assorti','Longueur : 19 cm\r\nlargeur : 1 cm','/br512-183.jpg','/br512_2_-183.jpg','/br512_3_ - Copy 1-183.jpg',1),(184,'2015-10-26 12:21:31',NULL,'BR513',39.00,'€',5.00,'Triple chaines et boules plaqué argent','plaquué argent','Collier assorti','Longueur : 19 cm\r\nlargeur : 1.5 cm','/br513_2_-184.jpg','/br513_4_-184.jpg','/br513_5_-184.jpg',1),(185,'2015-10-26 13:01:53',NULL,'BR121',24.00,'€',5.00,'Lanière pompon et coeur couleur argent',' ','Existe en 2 coloris','pompon et coeur couleur argent\r\nLongueur : 7 cm\r\nlargeur : 0.5 cm\r\nFermoir aimanté couleur argent','/br121-185.jpg','/br121_2_-185.jpg','/br121_8_-185.jpg',1),(186,'2015-10-26 13:02:58',NULL,'BR122',24.00,'€',5.00,'Lanière pompon et coeur couleur argent',' ','Existe en 2 coloris','pompon et coeur couleur argent\r\nLongueur : 7 cm\r\nlargeur : 0.5 cm\r\nFermoir aimanté couleur argent','/br122-186.jpg','/br122_3_-186.jpg','/br122_4_-186.jpg',1),(187,'2015-10-26 13:04:51',NULL,'BR125',24.00,'€',5.00,'Lanières (4) imprimées et strass',' ','Existe en 2 coloris','imprimées et strass\r\nDiamètre : 6.5 cm\r\nlargeur : 3 cm\r\nFermoir aimanté couleur argent','/br125_4_-187.jpg','/br125_5_-187.jpg','/br125_2_-187.jpg',1),(188,'2015-10-26 13:08:04',NULL,'BR126',24.00,'€',5.00,'Lanières (4) imprimées et breloques',' ','Existe en 3 coloris','imprimées et breloques\r\nLongueur total : 38 cm\r\nFermoir aimanté couleur argenté','/br126_11_-188.jpg','/br126_13_-188.jpg','/br126_14_-188.jpg',1),(189,'2015-10-26 13:14:57',NULL,'BR127',24.00,'€',5.00,'Lanières (3) imprimées et plume couleur argent',' ','Existe en 3 coloris','imprimées et plume couleur argent\r\nLongueur : 19 cm\r\nlargeur : 1.5 cm\r\nFermoir aimanté couleur argent','/br127-189.jpg','/br127_2_-189.jpg','/br127_3_-189.jpg',1),(190,'2015-10-26 13:20:35',NULL,'BR128',24.00,'€',5.00,'Lanières (14)  imprimées avec clous et strass','Les + produit','','imprimées avec clous et strass\r\nLongueur : 20 cm\r\nlargeur : 4 cm\r\nFermoir aimanté couleur or','/br128-190.jpg','','',1),(191,'2015-10-26 13:32:32',NULL,'CO111',24.00,'€',5.00,'Sautoir ',' ','Existe en 2 coloris','perles bois,perle bouddha et pompon\r\nLongueur : 60 cm','/co111_2_-191.jpg','/co111-191.jpg','/co111_4_-191.jpg',1),(192,'2015-10-26 15:14:44',NULL,'CO224',45.00,'€',5.00,'Collier plaqué argent','Les + produit','B.O. assorties','Chaine et plaques (5) géométriques\r\nPlaqué argent\r\nLongueur : 22 cm','/co224 - Copy 1-192.jpg','','',1),(193,'2015-10-26 15:17:13',NULL,'CO225',45.00,'€',5.00,'Collier plaqué argent','plaqué argent','Bracelet assorti','Chaine et boules \r\nPlaqué argent\r\nLongueur : 23 cm\r\nlargeur : 1.5 cm','/co225-193.jpg','','',1),(194,'2015-10-26 15:18:23',NULL,'CO226',45.00,'€',5.00,'Collier plaqué argent','plaqué argent','Bracelet assorti','Chaine fine et boules\r\nPlaqué argent\r\nLongueur : 21 cm\r\nlargeur : 1.5 cm','/co226-194.jpg','','',1),(195,'2015-10-26 15:19:21',NULL,'CO227',45.00,'€',5.00,'Collier plaqué argent ','plaqué argent','B.O. assorties','Chaine et pendant multi chaines\r\nPlaqué argent\r\nLongueur : 30 cm','/co227-195.jpg','','',1),(196,'2015-10-26 15:20:07',NULL,'CO228',0.00,'€',0.00,'Collier chaine','Les + produit','','Longueur : 22 cm','','','',0),(197,'2015-10-26 15:21:11',NULL,'CO229',35.00,'€',5.00,'Collier pièces et plumes',' ','Existe en 2 coloris','5 pendants, pièces et plumes\r\nLongueur : 38 cm','/co229_4_-197.jpg','/co229-197.jpg','/co229_3_-197.jpg',1),(198,'2015-10-26 15:22:11',NULL,'CO230',30.00,'€',5.00,'Collier plastron',' ','Existe en 3 coloris','Plastron demi lune\r\nLongueur : 32 cm','/co230-198.jpg','/co230_2_-198.jpg','/co230_3_ - Copy 1-198.jpg',1),(199,'2015-10-26 15:23:43',NULL,'CO231',35.00,'€',5.00,'Collier plastron',' ','Existe en 3 coloris','Plastron 3 étages avec cabochon\r\nLongueur : 33 cm','/co231_3_-199.jpg','/co231-199.jpg','/co231_2_-199.jpg',1),(200,'2015-10-26 15:25:26',NULL,'CO236',35.00,'€',5.00,'Collier plastron strass','Les + produit','','Plastron strass\r\nLongueur : 24 cm','/co236-200.jpg','/co236_2_-200.jpg','/co236_3_-200.jpg',1),(201,'2015-10-26 15:26:35',NULL,'CO232',30.00,'€',5.00,'Collier perles facetées','Les + produit','','Perles facettées noires\r\nLongueur : 21 cm','/co232-201.jpg','/co232_2_-201.jpg','',1),(202,'2015-10-26 15:27:30',NULL,'CO233',30.00,'€',5.00,'Collier pièces','Les + produit','','Pièces et chaines\r\nLongueur : 32 cm','/co233-202.jpg','/co233_2_-202.jpg','/co233_3_-202.jpg',1),(203,'2015-10-26 15:29:05',NULL,'CO234',35.00,'€',5.00,'Collier serti','Les + produit','','Serti de perles facettées noires et perles brillantes\r\nLongueur : 18 cm','/co234-203.jpg','/co234_2_-203.jpg','/co234_3_-203.jpg',1),(204,'2015-10-26 15:30:07',NULL,'CO235',24.00,'€',5.00,'Collier multi chaines','Les + produit','','Pendant plaques et chaines\r\nLongueur : 45 cm','/co235-204.jpg','/co235_2_-204.jpg','/co235_3_-204.jpg',1),(205,'2015-10-28 14:22:34',NULL,'BR129',24.00,'€',5.00,'Bracelet lanières (14) ','Les + produit','','imprimées avec clous et strass\r\nLongueur : 20 cm\r\nlargeur : 4 cm\r\nFermoir aimanté couleur vieil argent','','','',0),(206,'2015-11-03 14:21:17',NULL,'BC599',18.00,'€',5.00,'Perle Jaspe impérial rose','Les + produit','','perle jaspe impérial rose \r\nperle couleur argent ajourée\r\n3.5 cm x 1 cm','/bo599-206.jpg','/bo599_2_-206.jpg','/bo599_3_-206.jpg',1),(207,'2015-11-03 14:56:20',NULL,'BC601',18.00,'€',5.00,'Pierre de montagne bleu','Les + produit','','perle pierre de montagne bleue \r\ncoupelle couleur argent \r\nrondelle couleur argent\r\n3cm x1 cm\r\n ','/bo601 - Copy 1-.jpg','/bo601_2_ - Copy 1-.jpg','/bo601_3_ - Copy 1-.jpg',1),(208,'2015-11-03 15:14:04',NULL,'BC689',18.00,'€',5.00,'Perle jaspe impérial','Les + produit','','Perle jaspe impérial rose\r\ncoupelle couleur argent \r\nperle couleur argent \r\nLongueur : 3.5 cm\r\nlargeur : 1.2 cm','/bo602-.jpg','/bo602_2_-.jpg','/bo602_3_-.jpg',1),(209,'2015-11-03 15:24:46',NULL,'BC610',18.00,'€',5.00,'Pierre cristal de roche','Les + produit','','perle cristal de roche \r\ncoupelle couleur argent \r\nLongueur : 3.5 cm \r\nlargeur : 1.3 cm','/bc610-209.jpg','/bc610_2_-209.jpg','/bc610_3_-209.jpg',1),(210,'2015-11-03 15:42:00',NULL,'BC692',18.00,'€',5.00,'Pierre de montagne bleu ','Les + produit','',' pierre de montagne bleu \r\n perle couleur argent ajourée\r\n3.5 cm x 1 cm \r\n','/bo605-.jpg','/bo605_2_ - Copy 1-.jpg','/bo605_3_ - Copy 1-.jpg',1),(211,'2015-11-03 15:52:27',NULL,'BC690',16.00,'€',5.00,'Perle bénitier grise','Les + produit','','perle bénitier grise\r\ncoupelle couleur argent\r\nperle couleur argent\r\n3.5cm x 1.2 cm','/bo607-211.jpg','/bo607_2_-211.jpg','',1),(212,'2015-11-03 16:04:21',NULL,'BC1606 ',18.00,'€',5.00,'Perle orange','Les + produit','','Perle couleur orange \r\nperle ajourée couleur argent\r\nperle hématite bleue\r\nfermoir','/bo606-.jpg','/bo606_2_-.jpg','/bo606_3_-.jpg',1),(213,'2015-11-03 16:22:22',NULL,'BC691',16.00,'€',5.00,'Perle couleur orange hématite bleue','Les + produit','','Perle couleur orange\r\nperle ajourée couleur argent\r\nperle hématite bleue\r\nLongueur : 4 cm\r\nlargeur : 1.2cm','/bo606-.jpg','/bo606_2_-.jpg','/bo606_3_-.jpg',1),(214,'2015-11-03 22:15:03',NULL,'BC615',18.00,'€',5.00,'Aile couleur argent','Les + produit','','Aile d\'ange couleur argent\r\nperle howlite bleu \r\napprêt couleur argent\r\nperle gorgone','/P1010724-.jpg','/P1010725-.jpg','/P1010726-.jpg',0),(215,'2015-11-04 08:14:57',NULL,'BC663',18.00,'€',5.00,'Perle nacre de Bénitier','Les + produit','','Perle nacre de Bénitier\r\nPerle 10 mm couleur blanc irisé\r\nCoupelle carré couleur argent 4 mm\r\nLongueur 3cm\r\n\r\n\r\n','','','',1),(216,'2015-11-04 08:24:15',NULL,'BC640',18.00,'€',5.00,'Perle Bénitier blanc irisé','Les + produit','','perle de nacre de bénitier blanc irisé \r\nPerle 10 mm\r\nSupport couleur argent\r\nperle couleur argent\r\nLongueur : 3 cm\r\nlargeur : 1 cm\r\nlongueur 3.5 cm\r\n','/bc640-216.jpg','/bc640_2_-216.jpg','/bc640_3_-216.jpg',1),(217,'2015-11-04 08:28:59',NULL,'BC627',16.00,'€',5.00,'Plume couleur argent','Les + produit','','Plume couleur argent\r\nNœud couleur écru 1 cm\r\nLongueur 5 cm\r\nlargeur : 1 cm','/bc627-217.jpg','/bc627_2_-217.jpg','/bc627_3_-217.jpg',1),(218,'2015-11-04 08:36:05',NULL,'BC639',18.00,'€',5.00,'Perle couleur écru','Les + produit','','Perle couleur écru\r\nApprét couleur argent\r\nPerle couleur argent \r\nLongueur 3.5 cm\r\nlargeur : 0.8 cm','/bc639-218.jpg','/bc639_2_-218.jpg','/bc639_4_-218.jpg',1),(219,'2015-11-05 09:13:16',NULL,'BO610',24.00,'€',5.00,'Plaque et plumes','Les + produit','','Attrape rêves avec plaque métal\r\nLongueur : 10 cm','/bo610-.jpg','/bo610_2_-.jpg','/bo610_3_-.jpg',1),(220,'2015-11-07 14:44:09',NULL,'BC550',16.00,'€',5.00,'Perle ovale quartz','Les + produit','','perle ovale quartz\r\ncoupelle couleur argent\r\nLongueur : 4.5 cm\r\nlargeur : 1.5 cm','/bc550-.jpg','/bc550_2_-.jpg','/bc550_3_-.jpg',1),(221,'2015-11-07 14:50:39',NULL,'BC556',18.00,'€',5.00,'Perle de gorgone plate','Les + produit','','perle de gorgone\r\ncoupelle couleur argent\r\nrondelle couleur argent\r\npetite perle couleur argent\r\nLongueur : 3.5 cm\r\nlargeur : 2 cm','/bc556-.jpg','/bc556_2_-.jpg','/bc556_3_-.jpg',1),(222,'2015-11-07 14:56:59',NULL,'BC561',18.00,'€',5.00,'Perle ovale couleur argent et perle de gorgone','Les + produit','','perle ovale couleur argent\r\nperle de gorgone\r\ncoupelle couleur argent\r\npetite perle couleur argent\r\nLongueur : 6 cm\r\nlargeur : 1.5 cm','/bc561-.jpg','/bc561_2_-.jpg','/bc561_3_-.jpg',1),(223,'2015-11-07 15:00:07',NULL,'BC554',18.00,'€',5.00,'Perle carrée jaspe','Les + produit','','perle carrée jaspe\r\npompon couleur argent\r\nLongueur : 9 cm\r\nlargeur : 2 cm','/bc554-.jpg','/bc554_2_-.jpg','/bc554_3_-.jpg',1),(224,'2015-11-07 15:03:13',NULL,'BC562',16.00,'€',5.00,'Perle oeil de tigre',' ','Existe en 2 coloris','perle œil de tigre\r\napprêt couleur argent\r\nLongueur : 3.5 cm\r\nlargeur : 1 cm','/bc562-.jpg','/bc562_4_-.jpg','/bc562_6_-.jpg',1),(225,'2015-11-07 15:06:34',NULL,'BC563',16.00,'€',5.00,'estampe ronde fushia','Les + produit','','estampe ronde fushia\r\ntige couleur argent\r\nLongueur : 4.5 cm\r\nlargeur : 2 cm','/bc563-.jpg','/bc563_2_-.jpg','/bc563_3_-.jpg',1),(226,'2015-11-07 15:08:32',NULL,'BC567',16.00,'€',5.00,'Goutte hématite','Les + produit','','perle hématite goutte\r\ncoupelle couleur argent\r\nperle couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1 cm','/bc567-.jpg','/bc567_2_-.jpg','/bc567_3_-.jpg',1),(227,'2015-11-07 15:11:12',NULL,'BC569',16.00,'€',5.00,'Perle goutte quartz','Les + produit','','perle goutte quartz\r\ncoupelle couleur argent\r\ntige couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1.5 cm','/bc569-.jpg','/bc569_3_-.jpg','/bc569_4_-.jpg',1),(228,'2015-11-07 15:14:55',NULL,'BC571',16.00,'€',5.00,'Perle nacrée de bénitier iriséé','Les + produit','','perle nacrée de bénitier irisée de 12 mm\r\ncoupelle couleur laiton\r\nperle couleur laiton\r\nLongueur : 3 cm','/bc571-.jpg','/bc571_2_-.jpg','/bc571_3_-.jpg',1),(229,'2015-11-07 15:18:34',NULL,'BC572',16.00,'€',5.00,'Perle nacrée de bénitier irisée','Les + produit','','perles nacrée de bénitier blanc irisé (12 mm et 10 mm)\r\nrondelle couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1.2 cm\r\n','/bc572-.jpg','/bc572_2_-.jpg','/bc572_3_-.jpg',1),(230,'2015-11-07 15:22:23',NULL,'BC573',16.00,'€',5.00,'Perle nacrée de bénitier rose','Les + produit','','perle nacrée de bénitier rose poudrée\r\nrondelles couleur laiton\r\nLongueur : 3.5 cm\r\nlargeur : 1.2 cm','/bc573-.jpg','/bc573_2_-.jpg','/bc573_3_-.jpg',1),(231,'2015-11-07 15:25:35',NULL,'BC576',16.00,'€',5.00,'Perle gorgone plate et perle antique','Les + produit','','perle gorgone plate\r\nperle antique \r\ncoupelle couleur argent\r\nrondelle couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1.5 cm','/bc576-.jpg','/bc576_2_-.jpg','/bc576_3_-.jpg',1),(232,'2015-11-07 15:29:00',NULL,'BC578',16.00,'€',5.00,'Perle howlite antique','Les + produit','','perle howlite couleur antique blanc de 12 mm\r\ncoupelles couleur argent\r\nperle couleur argent\r\nLongueur : 2 cm\r\nlargeur : 1.2 cm','/bc578-.jpg','/bc578_2_-.jpg','/bc578_3_-.jpg',1),(233,'2015-11-07 15:31:18',NULL,'BC580',16.00,'€',5.00,'Perle oeil de tigre','Les + produit','','perle œil de tigre\r\ncoupelle couleur argent\r\nLongueur : 3.5 cm\r\nlargeur : 1 cm','/bc580-.jpg','/bc580_2_-.jpg','/bc580_4_-.jpg',1),(234,'2015-11-07 15:33:38',NULL,'BC582',16.00,'€',5.00,'Perle gorgone','Les + produit','','perle gorgone\r\ncoupelles couleur argent\r\nLongueur : 2.5 cm\r\nlargeur : 1 cm','/bc582-.jpg','/bc582_2_-.jpg','/bc582_3_-.jpg',1),(235,'2015-11-07 15:37:44',NULL,'BC585',16.00,'€',5.00,'Perle gorgone','Les + produit','','perle gorgone\r\ncoupelle couleur argent\r\nperle couleur argent\r\nLongueur : 3 cm\r\nlargeur : 0.8 cm','/bc585-.jpg','/bc585_2_-.jpg','/bc585_3_-.jpg',1),(236,'2015-11-07 15:40:31',NULL,'BC586',16.00,'€',5.00,'Perle nacrée de bénitier grise','Les + produit','','perle nacrée de bénitier grise\r\nrondelle couleur argent\r\nperle couleur argent\r\nLongueur : 2.5 cm\r\nlargeur : 1 cm','/bc586-.jpg','/bc586_2_-.jpg','/bc586_3_-.jpg',1),(237,'2015-11-07 15:48:19',NULL,'BC587',16.00,'€',5.00,'Perles de bénitier nacrée','Les + produit','','perles nacrées de bénitier rose\r\napprêt couleur argent\r\nLongueur : 3 cm\r\nlargeur : 0.8 cm','/bc587-.jpg','/bc587_2_-.jpg','/bc587_3_-.jpg',1),(238,'2015-11-07 16:10:49',NULL,'BC600',16.00,'€',5.00,'Perle gorgone sculptée ','Les + produit','','perle gorgone sculptée\r\ncoupelles couleur argent\r\nperle antique\r\nperle couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1.5 cm','/bc600-.jpg','/bc600_2_-.jpg','/bc608_3_-.jpg',1),(239,'2015-11-07 16:14:47',NULL,'BC602',16.00,'€',5.00,'Aile d\'ange couleur argent et perles','Les + produit','','aile d\'ange couleur argent\r\nperle facettée rouge\r\nperle hématite bleue\r\nperle couleur argent\r\nLongueur : 5.5 cm\r\nlargeur : 1 cm','/bc602-.jpg','/bc602_2_-.jpg','/bc602_3_-.jpg',1),(240,'2015-11-07 16:19:32',NULL,'BC603',16.00,'€',5.00,'Perle nacrée de bénitier','Les + produit','','perle nacrée de bénitier\r\ncoupelles couleur argent\r\nperle couleur argent\r\nLongueur : 3 cm\r\nlargeur : 1.2 cm','/bc603-.jpg','/bc603_2_-.jpg','/bc603_3_-.jpg',1),(241,'2015-11-07 16:22:19',NULL,'BC604',16.00,'€',5.00,'Perle oeil de tigre','Les + produit','','perle œil de tigre\r\ncoupelle couleur argent\r\nperle couleur argent\r\nLongueur : 3 cm\r\nlargeur : 1 cm','/bc604_2_-.jpg','/bc604-.jpg','',1),(242,'2015-11-07 16:29:07',NULL,'BC605',16.00,'€',5.00,'Perle de lave sculptée','Les + produit','','perle de lave sculptée\r\ncoupelles couleur argent\r\nperle couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1.5 cm','/bc605-.jpg','/bc605_2_-.jpg','/bc605_4_-.jpg',1),(243,'2015-11-07 16:36:20',NULL,'BC606',16.00,'€',5.00,'Perle de lave sculptée','Les + produit','','perle de lave sculptée\r\ncoupelle couleur argent\r\nperle couleur argent\r\nLongueur : 4.5 cm\r\nlargeur : 2 cm','/bc606-.jpg','/bc606_3_-.jpg','/bc606_4_-.jpg',1),(244,'2015-11-07 16:40:08',NULL,'BC607',16.00,'€',5.00,'Tortue céramique','Les + produit','','tortue céramique grise\r\nnœud \r\nperle couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1.5 cm','/bc607_2_-.jpg','/bc607_3_-.jpg','/bc607_4_-.jpg',1),(245,'2015-11-07 16:50:13',NULL,'BC608',16.00,'€',5.00,'Perle gorgone sculptée fleur','Les + produit','','perle gorgone sculptée fleur\r\ncoupelles couleur argent\r\nperle antique\r\nperle couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1.5 cm','/bc608-245.jpg','/bc608_2_-245.jpg','/bc608_3_-245.jpg',1),(246,'2015-11-07 17:05:22',NULL,'BC609',16.00,'€',5.00,'Perle facettée et fleur et feuille couleur argent','Les + produit','','perle facettée\r\nfleur et feuille couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1 cm','/bc609-.jpg','/bc609_2_-.jpg','/bc609_3_-.jpg',1),(247,'2015-11-07 17:20:11',NULL,'BC613',16.00,'€',5.00,'Perle cristal translucide et perle cristal grise','Les + produit','','perle cristal translucide\r\nperle couleur argent\r\nperle cristal couleur argent\r\nLongueur : 3 cm\r\nlargeur : 0.5 cm','/bc613-.jpg','/bc613_2_-.jpg','/bc613_3_-.jpg',1),(248,'2015-11-07 17:23:29',NULL,'BC614',14.00,'€',5.00,'Aile d\'ange et perle facettée orange','Les + produit','','Aile d\'ange couleur argent\r\nperle facettée\r\ncoupelle couleur argent\r\nperle couleur argent\r\nLongueur : 5 cm\r\nlargeur : 0.8 cm','/bc614-.jpg','/bc614_2_-.jpg','/bc614_3_-.jpg',1),(249,'2015-11-07 17:27:55',NULL,'BC612',16.00,'€',5.00,'Aile d\'ange couleur argent et noeud pap','Les + produit','','aile d\'ange couleur argent\r\nnœud pap\r\nLongueur : 5 cm\r\nlargeur : 1 cm','/bc612-.jpg','/bc612_2_-.jpg','/bc612_3_-.jpg',1),(250,'2015-11-07 17:33:13',NULL,'BC615',16.00,'€',5.00,'Aile d\'ange couleur argent perle howlite bleue et perle gorgone','Les + produit','','aile d\'ange couleur argent\r\nperle howlite bleue\r\napprêt couleur argent\r\nperle gorgone\r\napprêt couleur argent\r\nLongueur : 5.5 cm\r\nlargeur : 0.5 cm','/bc615-.jpg','/bc615_2_-.jpg','/bc615_3_-.jpg',1),(251,'2015-11-07 17:38:01',NULL,'BC616',16.00,'€',5.00,'Aile perle howlite écru e d\'ange','Les + produit','','Aile d\'ange couleur argent\r\nperle howlite écru\r\nrondelles écru et bleue ciel\r\nrondelle couleur argent \r\nLongueur : 6 cm\r\nlargeur : 1 cm','/bc616-.jpg','/bc616_2_-.jpg','/bc616_3_-.jpg',1),(252,'2015-11-07 17:41:07',NULL,'BC617',16.00,'€',5.00,'Perle nacrée de bénitier','Les + produit','','perle nacrée de bénitier blanc irisée 10 mm\r\nperle nacrée de bénitier grise 8 mm\r\nsupport couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1 cm','/bc617-.jpg','/bc617_2_-.jpg','/bc617_3_-.jpg',1),(253,'2015-11-07 17:44:47',NULL,'BC618',16.00,'€',5.00,'Aile d\'ange couleur argent','Les + produit','','aile d\'ange couleur argent\r\nperle couleur argent\r\ntige couleur argent\r\nLongueur : 5 cm\r\nlargeur : 0.8 cm','/bc618-.jpg','/bc618_3_-.jpg','/bc618_4_-.jpg',1),(254,'2015-11-07 17:47:37',NULL,'BC619',16.00,'€',5.00,'Perles cristal facettées','Les + produit','','perle de cristal facettées\r\napprêt\r\nLongueur : 4 cm\r\nlargeur : 1 cm','/bc619-.jpg','/bc619_2_-.jpg','/bc619_3_-.jpg',1),(255,'2015-11-07 17:50:36',NULL,'BC620',16.00,'€',5.00,'Aile d\'ange et perle de cristal','Les + produit','','aile d\'ange couleur argent\r\nperle de cristal \r\nperle couleur argent\r\ntige couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1 cm','/bc620_2_-.jpg','/bc620_3_-.jpg','/bc620_4_-.jpg',1),(256,'2015-11-07 17:53:00',NULL,'BC621',16.00,'€',5.00,'Plume et noeud couleur argent','Les + produit','','Plume et nœud couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1.5 cm','/bc621-.jpg','/bc621_2_-.jpg','/bc621_3_-.jpg',1),(257,'2015-11-07 17:58:46',NULL,'BC622',16.00,'€',5.00,'Perle de soleil bleu nuit et noeud','Les + produit','','perle scintillante bleue\r\nnœud \r\nperle couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1 cm','/bc622-.jpg','/bc622_2_-.jpg','/bc622_3_-.jpg',1),(258,'2015-11-07 18:01:43',NULL,'BC623',16.00,'€',5.00,'Perle de cristal et ancre','Les + produit','','perle de cristal facettée\r\nancre couleur argent\r\nperle couleur argent\r\nLongueur : 3.5 cm\r\nlargeur : 1 cm','/bc623-.jpg','/bc623_2_-.jpg','/bc623_3_-.jpg',1),(259,'2015-11-07 18:04:22',NULL,'BC624',16.00,'€',5.00,'Perle de soleil bleu nuit ','Les + produit','','perle de soleil bleu nuit\r\napprêt couleur argent\r\ncoupelle couleur argent\r\nLongueur : 2.5 cm\r\nlargeur : 1 cm','/bc624-.jpg','/bc624_2_-.jpg','/bc624_3_-.jpg',1),(260,'2015-11-07 18:07:12',NULL,'BC626',16.00,'€',5.00,'Aile d\'ange et perles','Les + produit','','Aile d\'ange couleur argent\r\nperles rose et turquoise\r\napprêt couleur argent\r\nLongueur : 4 cm\r\nlargeur : 0.5 cm','/bc626-.jpg','/bc626_2_-.jpg','/bc626_3_-.jpg',1),(261,'2015-11-07 18:12:40',NULL,'BC628',16.00,'€',5.00,'Estampes feuille et ronde','Les + produit','','estampe feuille couleur argent\r\nestampe ronde couleur argent\r\nLongueur : 8 cm\r\nlargeur : 2.5 cm','/bc628_2_-.jpg','/bc628_3_-.jpg','/bc628_4_-.jpg',1),(262,'2015-11-07 18:15:40',NULL,'BC629',16.00,'€',5.00,'Estampe et noeud','Les + produit','','estampe goutte couleur argent\r\nnœud pap\r\nLongueur : 7.5 cm\r\nlargeur : 3.5 cm','/bc629-.jpg','/bc629_2_-.jpg','/bc629_3_-.jpg',1),(263,'2015-11-07 18:23:34',NULL,'BC631',16.00,'€',5.00,'Feuille et fleur couleur argent','Les + produit','','feuille et fleur couleur argent\r\nLongueur : 4.5 cm\r\nlargeur : 1 cm','/bc631-.jpg','/bc631_2_-.jpg','/bc631_3_-.jpg',1),(264,'2015-11-07 18:26:23',NULL,'BC632',16.00,'€',5.00,'Estampe papillon et perle facettée','Les + produit','','estampe papillon\r\nperle facettée\r\napprêt couleur argent\r\nperle couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1.5 cm','/bc632-.jpg','/bc632_2_-.jpg','/bc632_3_-.jpg',1),(265,'2015-11-07 18:29:32',NULL,'BC633',16.00,'€',5.00,'Estampe rosace et perles','Les + produit','','estampe rosace couleur argent\r\nperle gorgone\r\ncoupelle couleur argent\r\nhématite bleue\r\nperle couleur argent\r\nLongueur : 7 cm\r\nlargeur : 2.5 cm','/bc633-.jpg','/bc633_2_-.jpg','/bc633_3_-.jpg',1),(266,'2015-11-07 18:32:37',NULL,'BC635',16.00,'€',5.00,'Hirondelle et perle howlite','Les + produit','','perle howlite bleue\r\nhirondelle couleur argent\r\nperle couleur argent\r\nLongueur : 2 cm\r\nlargeur : 1 cm ','/bc635-.jpg','/bc635_2_-.jpg','/bc635_4_-.jpg',1),(267,'2015-11-07 18:36:13',NULL,'BC634',16.00,'€',5.00,'Aile d\'ange et perle','Les + produit','','aile d\'ange couleur argent\r\nperle howlite écru\r\nrondelles\r\napprêt couleur argent\r\nLongueur : 5 cm\r\nlargeur : 1 cm','/bc634-.jpg','/bc634_3_-.jpg','/bc634_4_-.jpg',1),(268,'2015-11-07 18:38:52',NULL,'BC636',16.00,'€',5.00,'Plume et perle antique','Les + produit','','plume couleur argent\r\nperle howlite écru\r\ncoupelle couleur argent\r\nLongueur : 4 cm\r\nlargeur : 1.2 cm','/bc636-.jpg','/bc636_2_-.jpg','/bc636_3_-.jpg',1),(269,'2015-11-07 18:44:58',NULL,'BC638',16.00,'€',5.00,'Perle hématite et perle de soleil','Les + produit','','perle hématite bleue\r\ncoupelle couleur argent\r\nperle de soleil bleu nuit\r\napprêt couleur argent\r\nLongueur : 2.5 cm\r\nlargeur : 0.8 cm','/bc638-.jpg','/bc638_2_-.jpg','/bc638_3_-.jpg',1),(270,'2015-11-07 18:55:26',NULL,'BC641',16.00,'€',5.00,'Plumes et perles','Les + produit','','plumes couleur argent\r\nrondelles couleur argent\r\nperle hématite\r\ntube de perle\r\nLongueur : 9 cm\r\nlargeur : 1 cm','/bc641-.jpg','/bc641_2_-.jpg','/bc641_3_-.jpg',1);
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
INSERT INTO `product_categorie` VALUES (1,59),(2,46),(2,60),(3,46),(3,60),(4,46),(4,60),(5,46),(5,60),(6,46),(6,60),(7,46),(7,60),(8,46),(8,60),(9,46),(9,60),(10,46),(10,60),(11,46),(11,60),(12,46),(12,60),(13,46),(13,59),(14,46),(14,60),(15,46),(15,60),(16,46),(16,60),(17,46),(17,60),(18,46),(18,60),(19,46),(19,60),(20,46),(20,60),(21,46),(21,60),(22,46),(22,60),(23,46),(23,60),(24,46),(24,60),(25,46),(25,60),(26,46),(26,60),(27,46),(27,63),(28,46),(28,63),(29,46),(29,59),(30,46),(30,59),(31,46),(31,59),(32,46),(32,59),(33,46),(33,63),(34,46),(34,59),(35,46),(35,63),(36,46),(36,63),(37,47),(37,62),(38,47),(38,62),(39,45),(39,54),(40,45),(40,54),(41,45),(41,54),(42,45),(42,54),(43,45),(43,54),(44,45),(44,54),(45,45),(45,56),(46,45),(46,54),(47,45),(47,54),(48,45),(48,56),(49,45),(49,54),(50,45),(50,56),(51,45),(51,56),(52,45),(52,56),(53,45),(53,56),(54,45),(54,56),(55,45),(55,56),(56,45),(56,56),(57,45),(57,56),(58,45),(58,56),(59,45),(59,56),(60,45),(60,56),(61,45),(61,56),(62,45),(62,56),(63,45),(63,56),(64,45),(64,56),(65,45),(65,56),(66,45),(66,56),(67,45),(67,56),(68,45),(68,55),(69,45),(69,55),(70,45),(70,56),(71,45),(71,56),(72,45),(72,56),(73,45),(73,55),(74,45),(74,58),(75,44),(75,50),(76,44),(76,50),(77,44),(77,50),(78,44),(78,50),(79,44),(79,50),(80,44),(80,50),(81,44),(81,50),(82,44),(82,50),(83,44),(83,53),(84,44),(84,50),(85,44),(85,50),(86,44),(86,50),(87,44),(87,50),(88,44),(88,50),(89,44),(89,50),(90,44),(90,50),(91,44),(91,50),(92,44),(92,50),(93,44),(93,50),(94,44),(94,50),(95,44),(95,51),(96,44),(96,51),(97,44),(97,51),(98,44),(98,48),(99,44),(99,50),(100,44),(100,50),(101,44),(101,51),(102,44),(102,50),(103,44),(103,50),(104,44),(104,50),(105,44),(105,50),(106,44),(106,50),(107,44),(107,50),(108,44),(108,50),(109,44),(109,50),(110,44),(110,50),(111,44),(111,50),(112,44),(112,50),(113,44),(113,50),(114,44),(114,50),(115,44),(115,50),(116,44),(116,50),(117,44),(117,50),(118,44),(118,50),(119,44),(119,50),(120,44),(120,50),(121,44),(121,50),(122,44),(122,50),(123,44),(123,50),(124,44),(124,50),(125,44),(125,50),(126,44),(126,50),(127,44),(127,50),(128,44),(128,50),(129,44),(129,50),(130,44),(130,50),(131,44),(131,50),(132,44),(132,50),(133,44),(133,50),(134,44),(134,50),(135,44),(135,48),(136,44),(136,48),(137,44),(137,48),(138,44),(138,48),(139,44),(139,48),(140,44),(140,48),(141,44),(141,48),(142,44),(142,48),(143,44),(143,48),(144,44),(144,48),(145,44),(145,48),(146,44),(146,48),(147,44),(147,48),(148,44),(148,48),(149,44),(149,50),(150,44),(150,50),(151,44),(151,50),(152,44),(152,50),(153,44),(153,50),(154,44),(154,50),(155,44),(155,50),(156,44),(156,50),(157,44),(157,50),(158,44),(158,50),(159,44),(159,50),(160,44),(160,50),(161,44),(161,50),(162,44),(162,50),(163,44),(163,50),(164,44),(164,50),(165,44),(165,50),(166,44),(166,50),(167,44),(167,50),(168,44),(168,50),(169,44),(169,50),(170,44),(170,50),(171,44),(171,50),(172,44),(172,50),(173,44),(173,50),(174,44),(174,50),(175,44),(175,50),(176,44),(176,50),(177,44),(177,50),(178,44),(178,50),(179,44),(179,50),(180,44),(180,50),(181,46),(181,63),(182,46),(182,63),(183,46),(183,64),(184,46),(184,64),(185,46),(185,60),(186,46),(186,60),(187,46),(187,60),(188,46),(188,60),(189,46),(189,60),(190,46),(190,60),(191,45),(191,54),(192,45),(192,56),(193,45),(193,58),(194,45),(194,58),(195,45),(195,58),(196,45),(196,56),(197,45),(197,56),(198,45),(198,56),(199,45),(199,56),(200,45),(200,56),(201,45),(201,56),(202,45),(202,56),(203,45),(203,55),(204,45),(204,56),(205,46),(205,60),(206,44),(206,48),(207,44),(207,48),(208,44),(208,48),(209,44),(209,48),(210,44),(210,48),(211,44),(211,48),(212,48),(213,44),(213,50),(214,44),(214,48),(215,44),(215,48),(216,44),(216,48),(217,44),(217,50),(218,44),(218,48),(219,44),(219,50),(220,44),(220,48),(221,44),(221,48),(222,44),(222,50),(223,44),(223,50),(224,44),(224,48),(225,44),(225,50),(226,44),(226,50),(227,44),(227,50),(228,44),(228,48),(229,44),(229,50),(230,44),(230,50),(231,44),(231,50),(232,44),(232,48),(233,44),(233,48),(234,44),(234,48),(235,44),(235,48),(236,44),(236,48),(237,44),(237,48),(238,44),(238,50),(239,44),(239,50),(240,44),(240,48),(241,44),(241,48),(242,44),(242,50),(243,44),(243,50),(244,44),(244,50),(245,44),(245,50),(246,44),(246,50),(247,44),(247,48),(248,44),(248,50),(249,44),(249,50),(250,44),(250,50),(251,44),(251,50),(252,44),(252,50),(253,44),(253,50),(254,44),(254,50),(255,44),(255,50),(256,44),(256,50),(257,44),(257,50),(258,44),(258,48),(259,44),(259,48),(260,44),(260,50),(261,44),(261,50),(262,44),(262,50),(263,44),(263,50),(264,44),(264,50),(265,44),(265,50),(266,44),(266,48),(267,44),(267,50),(268,44),(268,50),(269,44),(269,48),(270,44),(270,50);
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
INSERT INTO `product_couleur` VALUES (1,3),(2,3),(2,5),(3,2),(22,1),(22,2),(22,3),(22,5),(22,8),(27,1),(27,2),(27,3),(27,4),(27,5),(27,6),(27,7),(27,8),(28,1),(28,2),(28,3),(28,4),(28,5),(28,6),(28,7),(28,8),(33,1),(33,2),(33,3),(33,4),(33,5),(33,6),(33,7),(33,8),(35,1),(35,2),(35,3),(35,4),(35,5),(35,6),(35,7),(35,8),(36,1),(36,2),(36,3),(36,4),(36,5),(36,6),(36,7),(36,8),(114,1),(114,2),(114,3),(114,4),(114,5),(114,6),(114,7),(114,8),(115,1),(115,2),(115,3),(115,4),(115,5),(115,6),(115,7),(115,8),(116,1),(116,2),(116,3),(116,4),(116,5),(116,6),(116,7),(116,8),(117,1),(117,2),(117,3),(117,4),(117,5),(117,6),(117,7),(117,8),(118,1),(118,2),(118,3),(118,4),(118,5),(118,6),(118,7),(118,8),(119,1),(119,2),(119,3),(119,4),(119,5),(119,6),(119,7),(119,8),(120,1),(120,2),(120,3),(120,4),(120,5),(120,6),(120,7),(120,8),(121,1),(121,2),(121,3),(121,4),(121,5),(121,7),(121,8),(181,1),(181,2),(181,3),(181,4),(181,5),(181,6),(181,8);
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
) ENGINE=InnoDB AUTO_INCREMENT=422 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_sousref`
--

LOCK TABLES `product_sousref` WRITE;
/*!40000 ALTER TABLE `product_sousref` DISABLE KEYS */;
INSERT INTO `product_sousref` VALUES (10,'BR124',12,2,10,1,1),(11,'BR114',13,2,10,1,1),(14,'BR106',15,2,10,1,1),(15,'BR107',16,5,10,1,1),(16,'BR108',17,2,10,1,1),(17,'BR109',18,5,10,1,1),(20,'BR112',20,18,10,1,1),(22,'BR115',22,2,10,1,1),(23,'BR101',3,2,10,1,1),(24,'BR101',3,6,10,2,1),(25,'BR101',3,5,10,2,1),(26,'BR101',3,15,10,2,1),(27,'BR101',3,3,10,2,1),(28,'BR109',18,13,10,1,1),(29,'BR116',23,18,10,1,1),(30,'BR123',11,2,10,1,1),(31,'BR118',24,5,10,1,1),(33,'BR124',12,16,10,1,1),(34,'BR124',12,17,10,1,1),(35,'BR124',12,5,10,1,1),(36,'BR119',26,2,10,1,1),(37,'BR119',26,18,10,1,1),(38,'BR119',26,3,10,1,1),(39,'BR119',26,13,10,1,1),(41,'BR502',28,19,10,2,1),(42,'BR503',29,19,10,1,1),(43,'BR503',29,20,10,1,1),(44,'BR504',30,20,10,1,1),(45,'BR505',31,20,10,1,1),(46,'BR506',32,19,10,1,1),(47,'BR507',33,20,10,1,1),(48,'BR120',34,3,10,1,1),(49,'BR120',34,5,10,1,1),(50,'BR508',35,19,10,1,1),(51,'BR509',36,19,10,2,1),(52,'MO101',37,2,10,3,1),(53,'MO101',37,3,10,2,1),(54,'MO101',37,18,10,2,1),(55,'MO101',37,21,10,3,1),(56,'MO102',38,3,10,1,1),(57,'MO102',38,2,10,1,1),(58,'MO102',38,21,10,1,1),(59,'MO102',38,18,10,1,1),(61,'CO100',39,2,10,2,1),(63,'CO100',39,3,10,1,1),(64,'CO101',40,19,10,1,1),(65,'C102',41,2,10,1,1),(66,'C102',41,18,10,1,1),(67,'CO103',42,5,10,2,1),(68,'CO103',42,6,10,1,1),(69,'CO104',43,2,10,2,1),(70,'CO104',43,3,10,1,1),(71,'CO105',44,18,10,1,1),(72,'CO105',44,6,10,1,1),(73,'CO106',45,2,10,1,1),(74,'CO107',46,2,10,1,1),(75,'CO108',47,19,10,1,1),(76,'CO109',48,19,10,1,1),(77,'CO110',49,18,10,1,1),(78,'CO110',49,6,10,2,1),(79,'CO201',50,22,10,1,1),(80,'CO202',51,22,10,3,1),(81,'CO203',52,20,10,1,1),(82,'CO203',52,19,10,1,1),(83,'CO204',53,11,10,2,1),(84,'CO204',53,3,10,1,1),(85,'CO204',53,18,10,1,1),(86,'CO204',53,2,10,1,1),(87,'CO205',54,3,10,1,1),(89,'CO205',54,23,10,1,1),(90,'CO206',55,19,10,1,1),(91,'CO206',55,20,10,1,1),(92,'CO207',56,2,10,1,1),(93,'CO207',56,5,10,1,1),(94,'CO207',56,18,10,1,1),(95,'CO208',57,13,10,1,1),(96,'CO208',57,18,10,1,1),(97,'CO209',58,19,10,1,1),(98,'CO209',58,20,10,1,1),(99,'CO210',59,19,10,1,1),(100,'CO210',59,20,10,1,1),(101,'CO211',60,19,10,1,1),(102,'CO211',60,20,10,1,1),(103,'CO212',61,19,10,1,1),(104,'CO212',61,20,10,1,1),(105,'CO213',62,19,10,1,1),(106,'CO213',62,20,10,1,1),(107,'CO214',63,18,10,2,1),(108,'CO214',63,3,10,1,1),(109,'CO215',64,2,10,1,1),(110,'CO216',65,20,10,1,1),(111,'CO216',65,19,10,1,1),(112,'CO217',66,19,10,1,1),(113,'CO217',66,20,10,1,1),(114,'CO218',67,20,10,1,1),(115,'CO218',67,19,10,1,1),(116,'CO219',68,2,10,1,1),(117,'CO219',68,20,10,1,1),(118,'CO220',69,2,10,1,1),(119,'CO221',70,19,10,1,1),(120,'CO221',70,20,10,1,1),(121,'CO222',71,2,10,1,1),(122,'CO301',73,20,10,1,1),(123,'CO302',74,20,10,1,1),(124,'CO223',72,22,10,1,1),(125,'BO101',75,2,10,3,1),(126,'BO101',75,19,10,1,1),(127,'BO101',75,20,10,1,1),(128,'BO102',76,3,10,1,1),(129,'BO102',76,6,10,2,1),(130,'BO102',76,18,10,2,1),(131,'BO103',77,3,10,3,1),(132,'BO103',77,2,10,4,1),(133,'BO104',78,6,10,4,1),(134,'BO104',78,26,10,2,1),(135,'BO105',79,2,10,2,1),(136,'BO105',79,18,10,1,1),(137,'BO106',80,18,10,1,1),(138,'BO106',80,3,10,1,1),(139,'BO106',80,6,10,1,1),(140,'BO106',80,2,10,2,1),(141,'BO107',81,3,10,1,1),(142,'BO107',81,18,10,1,1),(143,'BO107',81,2,10,2,1),(144,'BO108',82,18,10,1,1),(145,'BO108',82,5,10,1,1),(146,'BO109',83,2,10,1,1),(147,'BO109',83,19,10,1,1),(148,'BO109',83,18,10,2,1),(149,'BO109',83,3,10,1,1),(150,'BO110',84,19,10,1,1),(151,'BO111',85,19,10,1,1),(152,'BO1112',86,19,10,1,1),(153,'BO113',87,19,10,1,1),(154,'BO114',88,19,10,1,1),(155,'BO114',88,20,10,1,1),(156,'BO115',89,19,10,2,1),(157,'BO116',90,19,10,1,1),(158,'BO116',90,20,10,2,1),(159,'BO117',91,19,10,1,1),(160,'BO118',92,19,10,3,1),(161,'BO118',92,20,10,2,1),(162,'BO119',93,13,10,2,1),(163,'BO120',94,5,10,3,1),(164,'BO120',94,2,10,2,1),(165,'BO120',94,18,10,3,1),(166,'BO121',95,19,10,3,1),(167,'BO121',95,2,10,2,1),(168,'BO122',96,20,10,2,1),(169,'BO122',96,19,10,1,1),(170,'BO123',97,19,10,3,1),(171,'BO124',98,20,10,1,1),(172,'BO124',98,3,10,1,1),(173,'BO124',98,5,10,1,1),(174,'BO125',99,5,10,3,1),(175,'BO125',99,2,10,4,1),(176,'BO126',100,19,10,2,1),(177,'BO126',100,20,10,2,1),(178,'BO127',101,24,10,1,1),(179,'BO127',101,18,10,1,1),(180,'BO128',102,20,10,2,1),(181,'BO129',103,24,10,2,1),(182,'BO129',103,5,10,2,1),(183,'BO130',104,19,10,2,1),(184,'BO130',104,20,10,2,1),(185,'BO131',105,20,10,2,1),(186,'BO131',105,19,10,1,1),(187,'BO132',106,19,10,2,1),(188,'BO132',106,20,10,1,1),(189,'BO133',107,19,10,3,1),(190,'BO133',107,20,10,2,1),(191,'BO134',108,19,10,1,1),(192,'BO135',109,20,10,1,1),(193,'BO136',110,19,10,2,1),(194,'BO137',111,25,10,1,1),(195,'BO138',112,20,10,3,1),(196,'BO138',112,19,10,2,1),(197,'BO139',113,20,10,2,1),(198,'BO139',113,19,10,3,1),(199,'BO1007',120,27,10,3,1),(200,'BO1003',116,16,10,3,1),(201,'BO1005',118,6,10,3,1),(202,'BO1004',117,13,10,3,1),(203,'BO1008',121,13,10,3,1),(204,'BO1001',114,2,10,3,1),(205,'BO1002',115,2,10,3,1),(206,'BO1006',119,13,10,3,1),(207,'BO1009',122,5,10,3,1),(208,'BO1104',126,19,10,5,1),(209,'BO1110',132,19,10,5,1),(210,'BO1108',130,19,10,6,1),(211,'BO1103',125,19,10,5,1),(212,'BO1106',128,19,10,5,1),(213,'BO1109',131,19,10,10,1),(214,'BO1102',124,19,10,5,1),(215,'BO1112',134,19,10,4,1),(216,'BO1111',133,19,10,5,1),(217,'BO1105',127,19,10,5,1),(218,'BO1107',129,19,10,5,1),(219,'BO1101',123,19,10,5,1),(220,'BO507',141,2,10,5,1),(226,'BO513',146,26,10,5,1),(232,'BO509',143,18,10,5,1),(233,'BO513',147,26,10,5,1),(234,'BO503',137,26,10,5,1),(235,'BO514',148,5,10,5,1),(236,'BO502',136,26,10,5,1),(237,'BO501',135,28,10,5,1),(238,'BO504',138,28,10,5,1),(239,'BO510',144,18,10,5,1),(240,'BO511',145,26,10,5,1),(241,'BO508',142,29,10,5,1),(242,'BO505',139,2,10,5,1),(243,'BO506',140,2,10,5,1),(244,'BO516',150,24,10,5,1),(245,'BO515',149,30,10,5,1),(246,'BO523',157,19,10,3,1),(247,'BO522',156,19,10,3,1),(248,'BO524',158,19,10,5,1),(249,'BO527',161,6,10,3,1),(250,'BO525',159,6,10,3,1),(251,'BO526',160,6,10,3,1),(252,'BO532',166,19,10,5,1),(253,'BO520',154,19,10,5,1),(254,'BO519',153,19,10,5,1),(255,'BO521',155,19,10,3,1),(256,'BO529',163,19,10,5,1),(257,'BC536',169,6,10,5,1),(258,'BO530',164,19,10,5,1),(259,'BO537',170,18,10,3,1),(260,'BO537',170,31,10,3,1),(261,'BO537',170,32,10,3,1),(262,'BO531',165,19,10,5,1),(263,'BO533',167,32,10,3,1),(264,'BO533',167,29,10,3,1),(265,'BO533',167,31,10,3,1),(266,'BO533',167,18,10,3,1),(267,'BO534',168,6,10,5,1),(268,'BO528',162,19,10,3,1),(269,'BO517',151,24,10,5,1),(270,'BO518',152,29,10,5,1),(271,'BO535',171,32,10,3,1),(273,'BO535',171,18,10,3,1),(274,'BO535',171,29,10,3,1),(276,'BO607',177,3,10,2,1),(280,'BO608',178,26,10,2,1),(281,'BO606',176,5,10,1,1),(282,'BO606',176,3,10,2,1),(283,'BO606',176,2,10,1,1),(284,'BO605',175,6,10,1,1),(285,'BO605',175,31,10,2,1),(286,'BO605',175,18,10,1,1),(287,'BO605',175,2,10,1,1),(288,'BO601',172,18,10,2,1),(289,'BO604',174,18,10,3,1),(290,'BO604',174,2,8,3,1),(291,'BO609',179,18,10,2,1),(292,'BO609',179,29,10,2,1),(293,'BO609',179,2,10,2,1),(294,'BO610',180,33,10,1,1),(295,'BO602',173,18,10,3,1),(296,'BO602',173,2,10,4,1),(297,'BO602',173,3,10,3,1),(298,'BR117',25,3,10,1,1),(299,'BR117',25,5,10,1,1),(301,'BR117',25,2,10,3,1),(302,'BR111',19,2,10,2,1),(303,'BR111',19,18,10,1,1),(304,'BR111',19,3,10,1,1),(305,'BR110',14,2,10,2,1),(306,'BR110',14,3,10,1,1),(307,'BR110',14,18,10,1,1),(308,'BR501',27,19,10,7,1),(309,'BR510',181,19,10,3,1),(311,'BR512',183,19,10,3,1),(312,'BR513',184,19,10,1,1),(313,'BR125',187,18,10,2,1),(314,'BR125',187,2,10,2,1),(315,'BR126',188,18,10,2,1),(316,'BR126',188,3,10,2,1),(317,'BR126',188,2,10,2,1),(318,'BR122',186,6,10,2,1),(319,'BR122',186,13,10,2,1),(320,'BR121',185,2,10,2,1),(321,'BR121',185,3,10,2,1),(322,'BR127',189,2,10,2,1),(323,'BR127',189,18,10,2,1),(324,'BR127',189,13,10,2,1),(325,'BR128',190,18,10,2,1),(326,'CO111',191,2,10,1,1),(327,'CO111',191,18,10,1,1),(328,'CO224',192,19,10,3,1),(329,'CO225',193,19,10,3,1),(330,'CO226',194,19,10,2,1),(331,'CO227',195,19,10,3,1),(333,'CO230',198,19,10,1,1),(334,'CO230',198,20,10,1,1),(335,'CO230',198,35,10,1,1),(336,'CO231',199,19,10,1,1),(337,'CO231',199,20,10,1,1),(338,'CO231',199,35,10,1,1),(339,'CO236',200,20,10,1,1),(340,'CO232',201,2,10,2,1),(341,'CO233',202,19,10,1,1),(342,'CO235',204,20,10,1,1),(343,'CO234',203,20,10,1,1),(344,'CO229',197,20,10,1,1),(345,'CO229',197,19,10,1,1),(347,'CO221',70,2,10,1,1),(348,'BR115',22,13,10,2,1),(349,'BR115',22,3,10,2,1),(350,'BR115',22,5,10,2,1),(351,'BOC1601',207,3,10,5,1),(352,'BC689',208,27,10,5,1),(353,'BOC1599',206,27,10,5,1),(354,'BC610',209,36,10,5,1),(355,'BC692',210,3,10,5,1),(356,'BC690',211,5,10,5,1),(357,'BC691',213,24,10,5,1),(359,'BOC1663',215,26,10,5,1),(360,'BC640',216,26,10,5,1),(361,'BC627',217,19,10,5,1),(362,'BC639',218,23,10,5,1),(363,'BOC1606',212,24,10,5,1),(364,'BO610',219,33,10,1,1),(365,'BO607',177,31,10,1,1),(366,'BO607',177,2,10,2,1),(367,'BO607',177,18,10,2,1),(368,'BO608',178,29,10,1,1),(369,'BC536',169,3,10,5,1),(370,'BC550',220,29,10,5,1),(371,'BC556',221,18,10,5,1),(372,'BC561',222,18,10,4,1),(373,'BC554',223,18,10,5,1),(374,'BC562',224,13,10,5,1),(375,'BC562',224,18,10,5,1),(376,'BC563',225,10,10,4,1),(377,'BC567',226,29,10,5,1),(378,'BC569',227,29,10,5,1),(379,'BC571',228,26,10,5,1),(380,'BC572',229,26,10,5,1),(381,'BC573',230,28,10,5,1),(382,'BC576',231,18,10,5,1),(383,'BC578',232,26,10,5,1),(384,'BC580',233,18,10,5,1),(385,'BC582',234,18,10,5,1),(386,'BC585',235,18,10,5,1),(387,'BC586',236,14,10,5,1),(388,'BC587',237,27,10,5,1),(389,'BC600',238,18,10,3,1),(390,'BC602',239,6,10,5,1),(391,'BC603',240,13,10,3,1),(392,'BC604',241,13,10,5,1),(393,'BC605',242,2,10,5,1),(394,'BC606',243,2,10,5,1),(395,'BC607',244,14,10,5,1),(396,'BC608',245,24,10,3,1),(397,'BC609',246,6,10,5,1),(398,'BC613',247,36,10,5,1),(399,'BC614',248,24,10,5,1),(400,'BC612',249,19,10,5,1),(401,'BC615',250,18,10,3,1),(402,'BC616',251,23,10,5,1),(403,'BC617',252,26,10,5,1),(404,'BC618',253,19,10,5,1),(405,'BC619',254,3,10,5,1),(406,'BC620',255,3,10,5,1),(407,'BC621',256,19,10,5,1),(408,'BC622',257,3,10,5,1),(409,'BC623',258,3,10,5,1),(410,'BC624',259,3,10,5,1),(411,'BC626',260,27,10,5,1),(412,'BC628',261,19,10,3,1),(413,'BC629',262,19,10,5,1),(414,'BC631',263,19,10,5,1),(415,'BC632',264,6,10,5,1),(416,'BC633',265,29,10,3,1),(417,'BC635',266,29,10,4,1),(418,'BC634',267,23,10,5,1),(419,'BC636',268,23,10,5,1),(420,'BC638',269,29,10,5,1),(421,'BC641',270,3,10,5,1);
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
  `sous_titre` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubrique`
--

LOCK TABLES `rubrique` WRITE;
/*!40000 ALTER TABLE `rubrique` DISABLE KEYS */;
INSERT INTO `rubrique` VALUES (1,'Votre boutique','bijoux - maroquinerie - accessoires','/img_bijoux-1.jpg'),(2,'Promos !','Toutes nos promos du moment...','/img_bijoux2-2.jpg'),(3,'Ventes flash','Bague, bracelets, colliers...','/img_bijoux3-3.jpg'),(4,'Nouveautés','Ne loupez pas nos derniers articles arrivés...','/img_bijoux4-4.jpg'),(5,'Coups de coeur','','/img_bijoux5-5.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size`
--

LOCK TABLES `size` WRITE;
/*!40000 ALTER TABLE `size` DISABLE KEYS */;
INSERT INTO `size` VALUES (1,'- n/a'),(2,'T1'),(3,'T3'),(5,'T2'),(6,'T4'),(7,'T5'),(8,'T6'),(9,'Bracelet'),(10,'Unique');
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

-- Dump completed on 2015-11-07 22:22:54
