-- Progettazione Web 
DROP DATABASE if exists GIACOMELLI_Utenti; 
CREATE DATABASE GIACOMELLI_Utenti; 
USE GIACOMELLI_Utenti; 
-- MySQL dump 10.13  Distrib 5.6.20, for Win32 (x86)
--
-- Host: localhost    Database: GIACOMELLI_Utenti
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `attivita`
--

DROP TABLE IF EXISTS `attivita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attivita` (
  `Nome` varchar(50) NOT NULL,
  `Cod` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attivita`
--

LOCK TABLES `attivita` WRITE;
/*!40000 ALTER TABLE `attivita` DISABLE KEYS */;
INSERT INTO `attivita` VALUES ('Altro','XCalt'),('Catechismo','XCcat'),('Catechismo di quarta elementare','Ccat4'),('CatechismoDiPrimaSuperiore','CcatS1'),('CatechismoDiQuintaElementare','Ccat5'),('CatechismoDiSecondaElementare','Ccat2'),('CatechismoDiSecondaSuperiore','CcatS2'),('CatechismoDiTerzaElementare','Ccat3'),('GruppoCoro','XCgio'),('GruppoFamiglia','XCfam'),('GruppoGiovani','Cgio'),('GruppoGiovani(nonAttuale)','XCgio'),('GruppoGiovanissimi','Cgiovanis'),('GruppoGiovanissimi(nonAttuale)','XCgiovanis'),('GruppoGREST','Cgre'),('GruppoGREST(nonAttuale)','XCgre'),('GruppoMedie','Cmed'),('GruppoPresepeVivente','Cpre'),('Oraratorio delle elementari','Cora'),('Oratorio(nonAttuale)','XCora');
/*!40000 ALTER TABLE `attivita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postutenti`
--

DROP TABLE IF EXISTS `postutenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postutenti` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Proprietario` varchar(255) DEFAULT NULL,
  `Titolo` varchar(255) DEFAULT NULL,
  `Testo` varchar(255) DEFAULT NULL,
  `Utenza` varchar(255) DEFAULT NULL,
  `Immissione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postutenti`
--

LOCK TABLES `postutenti` WRITE;
/*!40000 ALTER TABLE `postutenti` DISABLE KEYS */;
INSERT INTO `postutenti` VALUES (1,'fedeGiaco','Badia on-line!','Benvenuti nel nuovissimo sito che ospiter&#224 tutti i contenuti parrocchiali. Disponibile da Marzo 2020!','all','2020-06-01 18:35:25'),(2,'marioRossi','L&#8216anno nuovo porta consiglio','&#200 da un mese che il nuovo &#233 iniziato e le attivit&#224 procedono spedite. Ottimo lavoro!','all','2020-06-01 18:35:25'),(3,'fedeGiaco','La Verna &#233 preistoria :(','Ormai possiamo definire pi&#249 che lontana l&#8216esperienza del ritiro della La Verna (cui sopra ne &#233 riportata la foto). Grandi momenti!','GruppoGiovani','2020-06-01 18:35:25'),(4,'fedeGiaco','Il tempo passa, la voglia rimane','Non c&#8216&#233 stato un incontro privo di carica. La costante partecipazione, pochissime volte sotto le 15 presenze, &#233 una grande soddisfazione. Noi continueremo cos&#236, non ci deludete','GruppoMedie','2020-06-01 18:35:25'),(5,'pippo','Bullismo: piaga infinita','I 2 incontri sul tema del bullismo sono pi&#249 che piaciuti. Gli spunti di riflessione non sono mancati!!! &#200 sempre un tema ostico!','GruppoMedie','2020-06-01 18:35:25'),(6,'pippo','Mega-Riunione','Tenetevi pronti! A breve ci sar&#224 la canonica riunione catechisti e animatori per fare il punto della situazione di met&#224 anno','allB','2020-06-01 18:35:25');
/*!40000 ALTER TABLE `postutenti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stanze`
--

DROP TABLE IF EXISTS `stanze`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stanze` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Stanza` int(1) NOT NULL,
  `GiornoPeriodico` int(2) NOT NULL,
  `GiornoSpecifico` int(2) DEFAULT NULL,
  `MeseSpecifico` int(2) DEFAULT NULL,
  `AnnoSpecifico` int(4) DEFAULT NULL,
  `OrarioInizio` int(2) NOT NULL,
  `OrarioFine` int(2) NOT NULL,
  `Periodico` tinyint(4) NOT NULL,
  `Responsabile` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stanze`
--

LOCK TABLES `stanze` WRITE;
/*!40000 ALTER TABLE `stanze` DISABLE KEYS */;
INSERT INTO `stanze` VALUES (1,1,1,NULL,NULL,NULL,18,19,1,'GruppoMedie','Regolare svolgimento del gruppo'),(2,1,1,NULL,NULL,NULL,21,22,1,'GruppoPresepeVivente','Regolare svolgimento del gruppo'),(3,2,3,NULL,NULL,NULL,21,22,1,'GruppoMedie','Riunione gruppo'),(4,2,3,NULL,NULL,NULL,21,22,1,'Oratorio','Riunione gruppo'),(5,1,3,NULL,NULL,NULL,21,22,1,'GruppoGiovanissimi','Regolare svolgimento del gruppo'),(6,1,6,NULL,NULL,NULL,14,15,1,'CatechismoDiSecondaElementare','Regolare svolgimento del catechismo'),(7,2,6,NULL,NULL,NULL,14,15,1,'CatechismoDiTerzaElementare','Regolare svolgimento del catechismo'),(8,3,6,NULL,NULL,NULL,14,15,1,'CatechismoDiQuartaElementare','Regolare svolgimento del catechismo'),(9,3,6,NULL,NULL,NULL,14,15,1,'CatechismoDiQuintaElementare','Regolare svolgimento del catechismo'),(10,1,6,NULL,NULL,NULL,15,17,1,'Oratorio','Regolare svolgimento del gruppo');
/*!40000 ALTER TABLE `stanze` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `svolge`
--

DROP TABLE IF EXISTS `svolge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `svolge` (
  `ID` varchar(255) NOT NULL,
  `Gruppo` varchar(50) NOT NULL DEFAULT '',
  `Ruolo` varchar(15) DEFAULT NULL,
  `Anno` int(4) DEFAULT NULL,
  PRIMARY KEY (`ID`,`Gruppo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `svolge`
--

LOCK TABLES `svolge` WRITE;
/*!40000 ALTER TABLE `svolge` DISABLE KEYS */;
INSERT INTO `svolge` VALUES ('fedeGiaco','GruppoCoro','Inesistente',2017),('fedeGiaco','GruppoGiovani','Inesistente',2019),('fedeGiaco','GruppoGiovanissimi(nonAttuale)','Partecipante',2016),('fedeGiaco','GruppoMedie','Animatore',2019),('fedeGiaco','Oratorio(nonAttuale)','Animatore',2017),('marioRossi','GruppoGiovani','Inesistente',2019),('pippo','GruppoMedie','Animatore',2019);
/*!40000 ALTER TABLE `svolge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabellafile`
--

DROP TABLE IF EXISTS `tabellafile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabellafile` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) DEFAULT NULL,
  `Tipo` varchar(128) DEFAULT NULL,
  `Dati` longblob,
  `Proprietario` varchar(255) DEFAULT NULL,
  `Immissione` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabellafile`
--

LOCK TABLES `tabellafile` WRITE;
/*!40000 ALTER TABLE `tabellafile` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabellafile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utente`
--

DROP TABLE IF EXISTS `utente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utente` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `DataNascita` date NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Sesso` char(1) NOT NULL,
  `Controllo` tinyint(1) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`,`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utente`
--

LOCK TABLES `utente` WRITE;
/*!40000 ALTER TABLE `utente` DISABLE KEYS */;
INSERT INTO `utente` VALUES (1,'fedeGiaco','3031d4f16107d3826cf5b2ab9be7e123','Federico','Giacomelli','1999-07-08','fe.giac99@hotmail.it','M',0,'Admin'),(2,'marioRossi','de2f15d014d40b93578d255e6221fd60','Mario','Rossi','2000-03-08','mario.rossi@hotmail.it','M',0,'Admin'),(3,'pippo','0c88028bf3aa6a6a143ed846f2be1ea4','Pippo','DePippo','2004-01-01','pippo.depippo@live.it','M',0,'No admin');
/*!40000 ALTER TABLE `utente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-01 20:37:43
