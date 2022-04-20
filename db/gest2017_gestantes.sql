-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: gest2017
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `gestantes`
--

DROP TABLE IF EXISTS `gestantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gestantes` (
  `id_gestante` int(11) NOT NULL AUTO_INCREMENT,
  `uf_atendimento` varchar(45) NOT NULL,
  `muni_atendimento` varchar(45) NOT NULL,
  `datainipre` date NOT NULL,
  `data_diag` date NOT NULL,
  `nome_unidade` varchar(45) NOT NULL,
  `num_area` int(10) DEFAULT NULL,
  `num_microarea` int(10) DEFAULT NULL,
  `nome_profissional` varchar(45) NOT NULL,
  `cns_prof` varchar(45) NOT NULL,
  `nome_ag_comun` varchar(45) NOT NULL,
  `nome_gestante` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `nome_mae` varchar(100) DEFAULT NULL,
  `estadocivil` varchar(45) NOT NULL,
  `end_terceiro` varchar(130) DEFAULT NULL,
  `racacor` varchar(45) DEFAULT NULL,
  `muni_residencia` varchar(45) DEFAULT NULL,
  `uf_residencia` varchar(45) DEFAULT NULL,
  `end_gestante` varchar(100) NOT NULL,
  `num_residencia` int(11) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `ref_ponto` varchar(45) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `escolaridade` varchar(50) DEFAULT NULL,
  `data_dum` date NOT NULL,
  `data_dpp` date NOT NULL,
  `data_testerapido` date NOT NULL,
  `result_testerapido` tinyint(4) DEFAULT NULL,
  `result_dose1` tinyint(4) NOT NULL,
  `data_presc1` date NOT NULL,
  `teste_trepo1` tinyint(4) NOT NULL,
  `data_testetrepo1` date NOT NULL,
  `vrdl` int(11) DEFAULT NULL,
  `data_lab` date DEFAULT NULL,
  `titulacao` varchar(45) DEFAULT NULL,
  `teste_trepo2` tinyint(4) DEFAULT NULL,
  `data_testetrepo2` date DEFAULT NULL,
  `treponemicoteste` tinyint(4) DEFAULT NULL,
  `candroduro` tinyint(4) DEFAULT NULL,
  `localizacao` varchar(45) DEFAULT NULL,
  `papulaspalmoplantares` tinyint(4) DEFAULT NULL,
  `alopecia` tinyint(4) DEFAULT NULL,
  `ausenciasinais` tinyint(4) DEFAULT NULL,
  `aptneuro` tinyint(4) DEFAULT NULL,
  `sifprimaria` tinyint(4) DEFAULT NULL,
  `sifprimaria_datadose` date DEFAULT NULL,
  `sifsecundaria` tinyint(4) DEFAULT NULL,
  `sifsecundaria_datadose1` date DEFAULT NULL,
  `sifsecundaria_datadose2` date DEFAULT NULL,
  `sifterciaria` tinyint(4) DEFAULT NULL,
  `sifterciaria_datadose1` date DEFAULT NULL,
  `sifterciaria_datadose2` date DEFAULT NULL,
  `sifterciaria_datadose3` date DEFAULT NULL,
  `localdasdoses` varchar(45) DEFAULT NULL,
  `gestalergica_penicilina` tinyint(4) DEFAULT NULL,
  `enc_dur` tinyint(4) DEFAULT NULL,
  `presc_esquem_terapeutico` varchar(45) DEFAULT NULL,
  `gest_infectadapre` tinyint(4) DEFAULT NULL,
  `tratamentoincompleto` tinyint(4) DEFAULT NULL,
  `reiniciouesquema` tinyint(4) DEFAULT NULL,
  `enc_compulsoria` tinyint(4) DEFAULT NULL,
  `enc_compulsoria_data` date DEFAULT NULL,
  `parceirotratado` tinyint(4) DEFAULT NULL,
  `presc_outroesquema` varchar(45) DEFAULT NULL,
  `esquema_prescparceiro` varchar(45) DEFAULT NULL,
  `motivo_naorealizado` varchar(45) DEFAULT NULL,
  `desfecho` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_gestante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestantes`
--

LOCK TABLES `gestantes` WRITE;
/*!40000 ALTER TABLE `gestantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `gestantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-17 16:53:58
