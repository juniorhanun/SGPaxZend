-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: paxvila_pax
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `admin_admin`
--

DROP TABLE IF EXISTS `admin_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `senha` char(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT '1' COMMENT '1 Adminstrador',
  `status` int(11) DEFAULT '1',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_alteracao` datetime DEFAULT NULL,
  `role` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Papel',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_admin`
--

LOCK TABLES `admin_admin` WRITE;
/*!40000 ALTER TABLE `admin_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_arquivos`
--

DROP TABLE IF EXISTS `admin_arquivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_pai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_arquivos`
--

LOCK TABLES `admin_arquivos` WRITE;
/*!40000 ALTER TABLE `admin_arquivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_arquivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_banners`
--

DROP TABLE IF EXISTS `admin_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(150) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `clicks` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_banners`
--

LOCK TABLES `admin_banners` WRITE;
/*!40000 ALTER TABLE `admin_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_clientes`
--

DROP TABLE IF EXISTS `admin_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fantasia` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `razao_social` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf_cnpj` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_ie` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Inscricao Estadual',
  `site` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contato` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_alteracao` datetime DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_clientes`
--

LOCK TABLES `admin_clientes` WRITE;
/*!40000 ALTER TABLE `admin_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_config`
--

DROP TABLE IF EXISTS `admin_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `palavra_chaves` text COLLATE utf8_unicode_ci,
  `descricao` text COLLATE utf8_unicode_ci,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8_unicode_ci,
  `saudacao` text COLLATE utf8_unicode_ci,
  `google_webmaster` text COLLATE utf8_unicode_ci,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `msn` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_plus` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flickr` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_config`
--

LOCK TABLES `admin_config` WRITE;
/*!40000 ALTER TABLE `admin_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_contatos`
--

DROP TABLE IF EXISTS `admin_contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assunto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conteudo` text COLLATE utf8_unicode_ci,
  `data_cadastro` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `respondida` int(11) DEFAULT '0' COMMENT '0 Nao',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_contatos`
--

LOCK TABLES `admin_contatos` WRITE;
/*!40000 ALTER TABLE `admin_contatos` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_conteudos`
--

DROP TABLE IF EXISTS `admin_conteudos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_conteudos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conteudo` text COLLATE utf8_unicode_ci,
  `descricao` text COLLATE utf8_unicode_ci,
  `palavra_chaves` text COLLATE utf8_unicode_ci,
  `fontes` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_alteracao` datetime DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `clicks` int(11) DEFAULT NULL,
  `autor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_conteudos`
--

LOCK TABLES `admin_conteudos` WRITE;
/*!40000 ALTER TABLE `admin_conteudos` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_conteudos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_news`
--

DROP TABLE IF EXISTS `admin_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_news`
--

LOCK TABLES `admin_news` WRITE;
/*!40000 ALTER TABLE `admin_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_parceiros`
--

DROP TABLE IF EXISTS `admin_parceiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_parceiros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contato` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clicks` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci DEFAULT '1',
  `data_cadastro` datetime DEFAULT NULL,
  `data_alteracao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_parceiros`
--

LOCK TABLES `admin_parceiros` WRITE;
/*!40000 ALTER TABLE `admin_parceiros` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_parceiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_sitmap`
--

DROP TABLE IF EXISTS `admin_sitmap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_sitmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastmod` datetime DEFAULT NULL COMMENT 'Data da AlteraÃ§Ã£o',
  `loc` varchar(150) DEFAULT NULL COMMENT 'localizaÃ§Ã£o da URL completa da pÃ¡Â¡gina inform',
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_sitmap`
--

LOCK TABLES `admin_sitmap` WRITE;
/*!40000 ALTER TABLE `admin_sitmap` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_sitmap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_associados`
--

DROP TABLE IF EXISTS `pax_associados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_associados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionarios` int(11) NOT NULL,
  `cidade_asso` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `contrato` varchar(45) DEFAULT NULL,
  `data_contrato` datetime DEFAULT NULL,
  `data_pedido` datetime DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `dia_pagemento` varchar(2) DEFAULT NULL,
  `serie` varchar(45) DEFAULT NULL,
  `porcento` varchar(10) DEFAULT NULL,
  `viajem` varchar(3) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `profissao` varchar(45) DEFAULT NULL,
  `religiao` varchar(45) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `endereco_cobranca` varchar(100) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `local` varchar(100) DEFAULT NULL,
  `pai` varchar(100) DEFAULT NULL,
  `status_pai` varchar(45) DEFAULT NULL,
  `mae` varchar(100) DEFAULT NULL,
  `status_mae` varchar(45) DEFAULT NULL,
  `conjugue` varchar(100) DEFAULT NULL,
  `status_conjugue` varchar(45) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT 'ATIVO' COMMENT 'Ativado',
  `translado` varchar(100) DEFAULT NULL,
  `observacao` text,
  `condicao` varchar(45) DEFAULT NULL COMMENT 'Vivo',
  `vendedor` varchar(45) DEFAULT NULL,
  `tipo_contrato` varchar(45) DEFAULT NULL,
  `nome_sogra` varchar(45) DEFAULT NULL,
  `status_sogra` varchar(45) DEFAULT NULL,
  `nome_sogro` varchar(45) DEFAULT NULL,
  `status_sogro` varchar(45) DEFAULT NULL,
  `motivo_cancelamento` text,
  `tipo_caixao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pax_associados_pax_funcionarios1_idx` (`id_funcionarios`),
  CONSTRAINT `fk_pax_associados_pax_funcionarios1` FOREIGN KEY (`id_funcionarios`) REFERENCES `pax_funcionarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=329 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_associados`
--

LOCK TABLES `pax_associados` WRITE;
/*!40000 ALTER TABLE `pax_associados` DISABLE KEYS */;
INSERT INTO `pax_associados` VALUES (1,1,'CIDAE DE GOIÃƒÂS','ABSALÃƒÆ’O ROMA JARDIM','123','2014-09-16 13:43:41','2014-09-16 13:43:41','2014-09-16 13:43:41','30','','','SIM','','','','76600000','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2','','VIVA','','VIVO','',NULL),(2,1,'CIDAE DE GOIÃƒÂS','ADRIANO LOPES DE FARIA','',NULL,NULL,NULL,'30','','04,00','SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2','','VIVA','','VIVO','',NULL),(3,1,'CIDAE DE GOIÃƒÂS','REGINA EMIDIO DA SILVA RIBEIRO','','2011-09-29 00:00:00','2014-09-16 00:00:00','2014-09-16 00:00:00','','','','SIM','','','','','','','','FAZENDA OLARIA','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','7','','VIVA','','VIVO','',NULL),(4,1,'CIDAE DE GOIÃƒÂS','DORVALINO FRANCISCO PEREIRA','','1985-01-29 00:00:00','2014-09-16 13:48:40','2014-09-16 13:48:40','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2','','VIVA','','VIVO','',NULL),(5,1,'CIDAE DE GOIÃƒÂS','MARIA DAS DORES SILVA LOBO','','2005-11-07 00:00:00','2014-09-16 13:49:30','2014-09-16 13:49:30','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(6,1,'CIDAE DE GOIÃƒÂS','ADELICIO ALVES MARTINS','','1998-10-19 00:00:00','2014-09-16 13:50:14','2014-09-16 13:50:14','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(7,1,'CIDAE DE GOIÃƒÂS','HUGA FERREIRA DA SILVA','','1996-12-20 00:00:00','2014-09-16 13:50:58','2014-09-16 13:50:58','','',NULL,'SIM','','','','','','','','RUA ALTINO LOBO','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(8,1,'CIDAE DE GOIÃƒÂS','JOSÃƒâ€° MARTINS DE ALMEIDA','','1986-04-02 00:00:00','2014-09-16 13:51:44','2014-09-16 13:51:44','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(9,1,'CIDAE DE GOIÃƒÂS','ESTENDILAU EVANGELISTA DANTAS','','1977-08-08 00:00:00','2014-09-16 13:52:31','2014-09-16 13:52:31','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(10,1,'CIDAE DE GOIÃƒÂS','GENY APARECIDA PINTO','','2011-01-10 00:00:00','2014-09-16 13:53:26','2014-09-16 13:53:26','','',NULL,'SIM','','','','','','','','AV. SÃƒÆ’O JOÃƒÆ’O - VILA SÃƒÆ’O VICENTE','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(11,1,'CIDAE DE GOIÃƒÂS','JOAQUIM MENESES DE OLIVEIRA','','1985-06-27 00:00:00','2014-09-16 13:54:23','2014-09-16 13:54:23','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(12,1,'CIDAE DE GOIÃƒÂS','CREDIO ANTONIO RIBEIRO','','2014-09-16 13:55:26','2014-09-16 13:55:26','2014-09-16 13:55:26','','',NULL,'SIM','','','','','','','','TRAVESSA TURISMO NÃ‚Âº05','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(13,1,'CIDAE DE GOIÃƒÂS','LUCIANO DE SOUZA FARIA','','1985-01-09 00:00:00','2014-09-16 13:56:06','2014-09-16 13:56:06','','',NULL,'SIM','','','','','','','','ALTO SANTANA','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(14,1,'CIDAE DE GOIÃƒÂS','DIVINA APARECIDA RIBEIRO FERREIRA','','2001-12-30 00:00:00','2014-09-16 13:56:43','2014-09-16 13:56:43','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(15,1,'CIDAE DE GOIÃƒÂS','BALTAZAR PEDRO DA SILVA','','2014-09-16 13:58:05','2014-09-16 13:58:05','2014-09-16 13:58:05','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(16,1,'CIDAE DE GOIÃƒÂS','MARIA DE FATIMA LEANDRO DA COSTA','','2010-10-15 00:00:00','2014-09-16 13:58:46','2014-09-16 13:58:46','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(17,1,'CIDAE DE GOIÃƒÂS','JOSE FERRIERA DE LIMA','','1985-02-09 00:00:00','2014-09-16 13:59:39','2014-09-16 13:59:39','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(18,1,'CIDAE DE GOIÃƒÂS','JANETE MARIA DE JESUS','','1992-12-05 00:00:00','2014-09-16 14:00:16','2014-09-16 14:00:16','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(19,1,'CIDAE DE GOIÃƒÂS','BENEDITO SANTIAGO ','','1986-04-11 00:00:00','2014-09-16 14:00:52','2014-09-16 14:00:52','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(20,1,'CIDAE DE GOIÃƒÂS','HELIO LOUREIRO DUARTE','','1995-08-07 00:00:00','2014-09-16 14:01:30','2014-09-16 14:01:30','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','3','','VIVA','','VIVO','',NULL),(21,1,'CIDAE DE GOIÃƒÂS','CECILIA CORREIA DA SILVA','','1989-04-26 00:00:00','2014-09-16 14:02:01','2014-09-16 14:02:01','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(22,1,'CIDAE DE GOIÃƒÂS','CAMILA NUNES BOTELHO','','1995-05-15 00:00:00','2014-09-16 14:42:51','2014-09-16 14:42:51','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','5','','VIVA','','VIVO','',NULL),(23,1,'CIDAE DE GOIÃƒÂS','NAIR PEREIRA PACHECO ','','1985-06-22 00:00:00','2014-09-16 14:43:41','2014-09-16 14:43:41','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(24,1,'CIDAE DE GOIÃƒÂS','PEDRO RICARDO DE LIMA','','2010-09-06 00:00:00','2014-09-16 14:44:24','2014-09-16 14:44:24','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(25,1,'CIDAE DE GOIÃƒÂS','JOVENI LEITE DE SOUZA','','1989-05-15 00:00:00','2014-09-16 14:45:21','2014-09-16 14:45:21','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(26,1,'CIDAE DE GOIÃƒÂS','LUCIA APARECIDA RIBEIRO','','1997-02-08 00:00:00','2014-09-16 14:46:23','2014-09-16 14:46:23','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','5','','VIVA','','VIVO','',NULL),(27,1,'CIDAE DE GOIÃƒÂS','JANIRO FERREIRA PINTO','','2013-08-07 00:00:00','2014-09-16 14:47:43','2014-09-16 14:47:43','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(28,1,'CIDAE DE GOIÃƒÂS','ADALBERTO INOCENCIO MATOS','','1990-08-23 00:00:00','2014-09-16 14:59:13','2014-09-16 14:59:13','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(29,1,'CIDAE DE GOIÃƒÂS','ADELAIDE JOSE DOS SANTOS','','1993-08-25 00:00:00','2014-09-16 14:59:47','2014-09-16 14:59:47','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(30,1,'CIDAE DE GOIÃƒÂS','ADIRO JOSE DA SILVA ','','2006-06-06 00:00:00','2014-09-16 15:00:22','2014-09-16 15:00:22','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(31,1,'CIDAE DE GOIÃƒÂS','AGUIMAR QUIRINO DA SILVA','','2004-08-03 00:00:00','2014-09-16 15:01:14','2014-09-16 15:01:14','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(32,1,'CIDAE DE GOIÃƒÂS','ALAOR FRANCISCO DE OLIVEIRA','','1985-09-21 00:00:00','2014-09-16 15:01:44','2014-09-16 15:01:44','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(33,1,'CIDAE DE GOIÃƒÂS','ALCIMAR ALVES DE SOUZA','','2009-07-04 00:00:00','2014-09-16 15:02:26','2014-09-16 15:02:26','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(34,1,'CIDAE DE GOIÃƒÂS','ALTINO RODRIGUES VIDIGAL NETO ','','1998-01-06 00:00:00','2014-09-16 15:06:54','2014-09-16 15:06:54','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(35,1,'CIDAE DE GOIÃƒÂS','AMANCIO MARTINS BORGES ','','1985-02-02 00:00:00','2014-09-16 15:07:27','2014-09-16 15:07:27','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(36,1,'CIDAE DE GOIÃƒÂS','ANA LIVIA VALADARES MAIA','','2014-06-13 00:00:00','2014-09-16 15:08:44','2014-09-16 15:08:44','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(37,1,'CIDAE DE GOIÃƒÂS','ANDIARA GONÃƒâ€¡ALVES TEIXEIRA','','1980-11-25 00:00:00','2014-09-16 15:09:52','2014-09-16 15:09:52','','001',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','3','','VIVA','','VIVO','',NULL),(38,1,'CIDAE DE GOIÃƒÂS','ANTONIA RODRIGUES DE MATOS ','','1993-05-15 00:00:00','2014-09-16 15:10:27','2014-09-16 15:10:27','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(39,1,'CIDAE DE GOIÃƒÂS','ANTONIO ALVES DE SOUZA','','1997-12-05 00:00:00','2014-09-16 15:10:53','2014-09-16 15:10:53','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(40,1,'CIDAE DE GOIÃƒÂS','ANTONIO ESTANISLAU FARIA','','1992-12-01 00:00:00','2014-09-16 15:11:28','2014-09-16 15:11:28','','001',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(41,1,'CIDAE DE GOIÃƒÂS','ANTONIO FERREIRA DOS PASSOS','','1996-06-25 00:00:00','2014-09-16 15:12:35','2014-09-16 15:12:35','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(42,1,'CIDAE DE GOIÃƒÂS','ANTONIO FERREIRA PITALUGA','','2008-04-23 00:00:00','2014-09-16 15:13:22','2014-09-16 15:13:22','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(43,1,'CIDAE DE GOIÃƒÂS','ANTONIO GOMES DOS SANTOS','','1998-10-19 00:00:00','2014-09-16 15:31:22','2014-09-16 15:31:22','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(44,1,'CIDAE DE GOIÃƒÂS','ANTONIO PAGES ','','1989-12-21 00:00:00','2014-09-16 15:31:51','2014-09-16 15:31:51','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(45,1,'CIDAE DE GOIÃƒÂS','ANTONIO VELASCO DOS SANTOS','','1983-06-30 00:00:00','2014-09-16 15:32:17','2014-09-16 15:32:17','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2','','VIVA','','VIVO','',NULL),(46,1,'CIDAE DE GOIÃƒÂS','APARECIDA DE FATIMA SOARES','','2010-12-03 00:00:00','2014-09-16 15:33:11','2014-09-16 15:33:11','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(47,1,'CIDAE DE GOIÃƒÂS','APARECIDA FRAGA RODRIUES','','2013-06-10 00:00:00','2014-09-16 15:33:48','2014-09-16 15:33:48','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(48,1,'CIDAE DE GOIÃƒÂS','ARACIONE DAS GRAÃƒâ€¡AS SERRA COELHO','','1984-10-05 00:00:00','2014-09-16 15:34:45','2014-09-16 15:34:45','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(49,1,'CIDAE DE GOIÃƒÂS','ARMANDIO GONÃƒâ€¡ALVES FAGUNDES','','2014-09-16 15:35:38','2014-09-16 15:35:38','2014-09-16 15:35:38','','001',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(50,1,'CIDAE DE GOIÃƒÂS','BENEDITA ANGELICA DUARTE ','','2001-12-23 00:00:00','2014-09-16 15:36:14','2014-09-16 15:36:14','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(51,1,'CIDAE DE GOIÃƒÂS','BENEDITA DE MORAES SIQUEIRA','','1996-03-01 00:00:00','2014-09-16 15:36:43','2014-09-16 15:36:43','','001',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','7','','VIVA','','VIVO','',NULL),(52,1,'CIDAE DE GOIÃƒÂS','BENEDITA FRANCISCA DOS SANTOS','','1998-01-21 00:00:00','2014-09-16 15:37:15','2014-09-16 15:37:15','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(53,1,'CIDAE DE GOIÃƒÂS','BENEDITA LUIZA DA SILVA','','1995-01-23 00:00:00','2014-09-16 15:37:43','2014-09-16 15:37:43','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(54,1,'CIDAE DE GOIÃƒÂS','BENEDITA LUIZA JACINTO','','2014-09-16 15:39:19','2014-09-16 15:39:19','2014-09-16 15:39:19','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','3','','VIVA','','VIVO','',NULL),(55,1,'CIDAE DE GOIÃƒÂS','BENEDITA GARCIA DE MELO','','1992-03-02 00:00:00','2014-09-16 15:40:54','2014-09-16 15:40:54','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2,5','','VIVA','','VIVO','',NULL),(56,1,'CIDAE DE GOIÃƒÂS','BENEDITO GONÃƒâ€¡ALVES NORONHA','','1996-06-10 00:00:00','2014-09-16 15:41:29','2014-09-16 15:41:29','','002',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(57,1,'CIDAE DE GOIÃƒÂS','BRASILINA PEREIRA ALGADO','','1995-09-29 00:00:00','2014-09-16 15:42:07','2014-09-16 15:42:07','','001',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','5','','VIVA','','VIVO','',NULL),(58,1,'CIDAE DE GOIÃƒÂS','BRIGITA KOCK MOLINARI ','','2014-09-16 15:42:38','2014-09-16 15:42:38','2014-09-16 15:42:38','','001',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',NULL),(59,1,'CIDAE DE GOIÃƒÂS','','','2014-10-22 10:36:34','2014-10-22 10:36:34','2014-10-22 10:36:34','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','2','','VIVA','','VIVO','',0),(60,1,'CIDAE DE GOIÃƒÂS','ONOFRE RAIMUNDO PINTO','5090','2010-09-27 00:00:00','2014-12-29 10:17:52','2014-12-29 10:17:52','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','MORTO','','MORTA','MARIA SALGADO PINTO','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',2),(61,1,'CIDAE DE GOIÃƒÂS','CARMELITA MARIA FLEURY CURADO ','5031','2009-03-23 00:00:00','2014-12-29 16:28:58','2014-12-29 16:28:58','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',0),(62,1,'CIDAE DE GOIÃƒÂS','ADELIA LEANDRO DA COSTA','5228','2014-10-27 00:00:00','2014-12-29 16:30:59','2014-12-29 16:30:59','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',0),(63,1,'CIDAE DE GOIÃƒÂS','BRASILINA PEREIRA SALGADO','1232','1995-09-29 00:00:00','2014-12-29 16:31:56','2014-12-29 16:31:56','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','5','','VIVA','','VIVO','',1),(64,1,'CIDAE DE GOIÃƒÂS','ELZA FERREIRA LEITE','5203','2014-02-28 00:00:00','2014-12-29 16:32:45','2014-12-29 16:32:45','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',2),(65,1,'CIDAE DE GOIÃƒÂS','MARIA DAS DORES SILVA LOBO','2862','2005-11-07 00:00:00','2014-12-29 16:34:04','2014-12-29 16:34:04','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','HELIO ANTONIO FERREIRA LOBO','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',2),(66,1,'CIDAE DE GOIÃƒÂS','SEBASTIANA OLIVEIRA SOUZA','958','1994-11-07 00:00:00','2014-12-29 16:36:02','2014-12-29 16:36:02','','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO','','VIVA','','VIVA(O)','','','ATIVO','','',NULL,'','4','','VIVA','','VIVO','',1),(67,1,'CIDAE DE GOIÃS','CARLOS ALVES DA PAIXÃƒO','262',NULL,NULL,NULL,'','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO(A)','','VIVO(A)','','VIVO(A)','','','ATIVO','','',NULL,'','2,5','','VIVO(A)','','VIVO(A)','',2),(68,1,'CIDAE DE GOIÃS','JALES RODRIGUES DE OLIVEIRA','151','1987-12-18 00:00:00',NULL,NULL,'','',NULL,'SIM','','','','','','','','RUA CONTORNO NÂº 17.19','','','','INTERNO','ALMERINDO MANOEL RODRIGUES','VIVO(A)','MARIA CANDIDA RODRIGUES + 09/11/04','VIVO(A)','DINAIR BORGES RODRIGUES','VIVO(A)','','','ATIVO','','',NULL,'','3','','VIVO(A)','','VIVO(A)','',1),(74,1,'CIDAE DE GOIÁS','ANA LUCIA SANTIAGO MARTINS','5236','2014-12-30 00:00:00',NULL,NULL,'','',NULL,'SIM','','','','','','','','','','','','INTERNO','','VIVO(A)','','VIVO(A)','GUINALDO RODRIGUES MARTINS','VIVO(A)','','','ATIVO','','',NULL,'1','4','','VIVO(A)','','VIVO(A)','',2),(75,1,'CIDAE DE GOIÃS','Acirema Ana Paulina dos Santos','147',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SÃ£o Jorge - ao lado Dn. Ana Costa','SÃ£o Jorge - ao lado Dn. Ana Costa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(76,1,'CIDAE DE GOIÃS','Ademaria Maria do Nascimento','Goias',NULL,NULL,NULL,NULL,'202',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'08','08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(77,1,'CIDAE DE GOIÃS','Adilte Oliveira Chaves','Goias',NULL,NULL,NULL,NULL,'221',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua do Oriente','Rua do Oriente',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(78,1,'CIDAE DE GOIÃS','Aguinaldo Gomes Cardoso Contabilidade','02S',NULL,NULL,NULL,NULL,'4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','',NULL,NULL,NULL,NULL,NULL,NULL),(79,1,'CIDAE DE GOIÃS','Alberico FogaÃ§a dos Santos','575',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Joaquim Bonifacio','Rua Joaquim Bonifacio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(80,1,'CIDAE DE GOIÃS','Alecilda de Souza Moreira','Goias',NULL,NULL,NULL,NULL,'5125',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(81,1,'CIDAE DE GOIÃS','Alexandre Borges Ferreira','Goias',NULL,NULL,NULL,NULL,'898',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Travessa Cordelio Rosa n 10','Travessa Cordelio Rosa n 10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(82,1,'CIDAE DE GOIÃS','Alfeu Craveira de Oliveira','GoiÃ¡s',NULL,NULL,NULL,NULL,'040',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'05','05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(83,1,'CIDAE DE GOIÃS','Altair Jose Mendes','GoiÃ¡s',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(84,1,'CIDAE DE GOIÃS','Altair Pereira dos Santos','GoiÃ¡s',NULL,NULL,NULL,NULL,'2819',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(85,1,'CIDAE DE GOIÃS','Ana Caetano da Costa','Goias',NULL,NULL,NULL,NULL,'009',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(86,1,'CIDAE DE GOIÃS','Ana Maria Jesus','Setor Rio Vermelho nas casinhas depois do Sr.',NULL,NULL,NULL,NULL,'Goias',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Ana Maria Jesus dos Santos','Ana Maria Jesus dos Santos',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','1771',NULL,NULL,NULL,NULL,NULL,NULL),(87,1,'CIDAE DE GOIÃS','Angelina Ferreira Pontes','Goias',NULL,NULL,NULL,NULL,'155',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na mercearia estrela guia','Receber na mercearia estrela guia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(88,1,'CIDAE DE GOIÃS','Antonia Maria Pitaluga','Goias',NULL,NULL,NULL,NULL,'001',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua F Vila Aguinel','Rua F Vila Aguinel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(89,1,'CIDAE DE GOIÃS','Antonieta Borges de Souza','GoiÃ¡s',NULL,NULL,NULL,NULL,'212',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(90,1,'CIDAE DE GOIÃS','Antonio Ferreira Pitaluga','Goias',NULL,NULL,NULL,NULL,'4995',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila do Pipoca no final da rua','Vila do Pipoca no final da rua',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(91,1,'CIDAE DE GOIÃS','Antonio Pires Rezende','149',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Aguinel Merc. do Edimar','Rua Aguinel Merc. do Edimar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(92,1,'CIDAE DE GOIÃS','Antonio Raimundo Pedro Lopes','149',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 07 vila serra dourada dia10','Rua 07 vila serra dourada dia10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(93,1,'CIDAE DE GOIÃS','Antonio Soares dos Santos','004',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Joaquim BonifÃ¡cio acima da Goiandira ','Rua Joaquim BonifÃ¡cio acima da Goiandira ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(94,1,'CIDAE DE GOIÃS','Aparecida de Sousa','5211',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Acima da Joelma do conselho nÂº 63','Acima da Joelma do conselho nÂº 63',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(95,1,'CIDAE DE GOIÃS','Arminda Gomes Bezerra','Goias',NULL,NULL,NULL,NULL,'006',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(96,1,'CIDAE DE GOIÃS','Arnaldo Pedro do Nascimento','841',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua barreirinho nÂº 18 ','Rua barreirinho nÂº 18 ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(97,1,'CIDAE DE GOIÃS','Arquimino Batista dos Santos','Goias',NULL,NULL,NULL,NULL,'008',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25','25',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(98,1,'CIDAE DE GOIÃS','Augusta FogaÃ§a Faria','Goias',NULL,NULL,NULL,NULL,'082',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(99,1,'CIDAE DE GOIÃS','Aurora Avelar Pereira','2122',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Santo Amaro nÂº 15/abaixo Natal vereador','Santo Amaro nÂº 15/abaixo Natal vereador',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(100,1,'CIDAE DE GOIÃS','Benedita Alves de Carvalho','GoiÃ¡s',NULL,NULL,NULL,NULL,'078',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'05','05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(101,1,'CIDAE DE GOIÃS','Benedita ConceiÃ§Ã£o Gomes dos Santos','Goias',NULL,NULL,NULL,NULL,'109',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(102,1,'CIDAE DE GOIÃS','Benedita de Carvalho Resende','Goias',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15','15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(103,1,'CIDAE DE GOIÃS','Benedito Cordeiro de Faria','848',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua do Aeroporto ao lado do Apolonio','Rua do Aeroporto ao lado do Apolonio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(104,1,'CIDAE DE GOIÃS','Benedito DamiÃ£o da Silva','2305',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Av. SÃ£o JoÃ£o 755','Av. SÃ£o JoÃ£o 755',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','3',NULL,NULL,NULL,NULL,NULL,NULL),(105,1,'CIDAE DE GOIÃS','Benedito Mendes Moreira','GoiÃ¡s',NULL,NULL,NULL,NULL,'4928',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(106,1,'CIDAE DE GOIÃS','Candido Divino da Luz Campos','Goias',NULL,NULL,NULL,NULL,'331',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(107,1,'CIDAE DE GOIÃS','Carlos Pereira de AraÃºjo','Goias',NULL,NULL,NULL,NULL,'1790',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(108,1,'CIDAE DE GOIÃS','Carolina Ferreira de Moraes','Goias',NULL,NULL,NULL,NULL,'421',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(109,1,'CIDAE DE GOIÃS','Cleomar Viana','5136',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber Nilcar auto vidro','Receber Nilcar auto vidro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(110,1,'CIDAE DE GOIÃS','Cleuza Maria do Rosario','089',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua nova na esq. Prox ao seu Pedrinho','Rua nova na esq. Prox ao seu Pedrinho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(111,1,'CIDAE DE GOIÃS','ConceiÃ§Ã£o Maria de Jesus','Goias',NULL,NULL,NULL,NULL,'096',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua F vila aguinel em frente ao segueta','Rua F vila aguinel em frente ao segueta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(112,1,'CIDAE DE GOIÃS','Deni Batista Moreira','861',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Alto santana no fundo do centro espirita','Alto santana no fundo do centro espirita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(113,1,'CIDAE DE GOIÃS','Diomarina MendonÃ§a Brunes','Goias',NULL,NULL,NULL,NULL,'184',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Ao lado da mercearia Mateus','Ao lado da mercearia Mateus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(114,1,'CIDAE DE GOIÃS','Divanio BrandÃ£o Cardoso','5098',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Chaveiro santa Rita','Chaveiro santa Rita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(115,1,'CIDAE DE GOIÃS','Divina GonÃ§alves Noronha de Souza','Goias',NULL,NULL,NULL,NULL,'2526',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18','18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(116,1,'CIDAE DE GOIÃS','Domingas Bastos da Mata','788',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua santa bÃ¡rbara n 720','Rua santa bÃ¡rbara n 720',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(117,1,'CIDAE DE GOIÃS','Domingos Gomes da Neiva','Goias',NULL,NULL,NULL,NULL,'439',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua santos dumont n 5','Rua santos dumont n 5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(118,1,'CIDAE DE GOIÃS','Dorizete JacÃ³ de Camargo','Goias',NULL,NULL,NULL,NULL,'436',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Oficina so seu Algusto na GO','Oficina so seu Algusto na GO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(119,1,'CIDAE DE GOIÃS','Dorval Camargo dos Santos','Goias435',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Oficina do seu Algusto na GO','Oficina do seu Algusto na GO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(120,1,'CIDAE DE GOIÃS','Duanefabe de Souza Rocha','5198',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'R. 07 ao lado dp muro do consorcio','R. 07 ao lado dp muro do consorcio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(121,1,'CIDAE DE GOIÃS','Edi Cordeiro Duarte','Goias',NULL,NULL,NULL,NULL,'464',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 4 st rio vermelho','Rua 4 st rio vermelho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(122,1,'CIDAE DE GOIÃS','Edileuza Rodrigues de Souza','Goias',NULL,NULL,NULL,NULL,'0422',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na policia tÃ©cnico cientifica','Receber na policia tÃ©cnico cientifica',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(123,1,'CIDAE DE GOIÃS','Edinilson Junior Ribeiro','5179',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na rodoviÃ¡ria c/ NoÃ© do taxi','Receber na rodoviÃ¡ria c/ NoÃ© do taxi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(124,1,'CIDAE DE GOIÃS','Edite Rosa Leandro','631',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Setor Rio vermelho vizinho do chupreto','Setor Rio vermelho vizinho do chupreto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(125,1,'CIDAE DE GOIÃS','Elcy Maria da Silva','GoiÃ¡s',NULL,NULL,NULL,NULL,'663',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(126,1,'CIDAE DE GOIÃS','Eleni Pereira dos Santos','011',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Em frente a praÃ§a Sta BÃ¡rbara manicure','Em frente a praÃ§a Sta BÃ¡rbara manicure',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(127,1,'CIDAE DE GOIÃS','Eleuza Martins Garcia','itaberai',NULL,NULL,NULL,NULL,'104',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02L',NULL,NULL,NULL,NULL,NULL,NULL),(128,1,'CIDAE DE GOIÃS','Elio Vicente Ferreira','Goias',NULL,NULL,NULL,NULL,'2464',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(129,1,'CIDAE DE GOIÃS','Euler JosÃ© Leite','391',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Na igreja do carmo acima do hosp. SÃ£o Pedro','Na igreja do carmo acima do hosp. SÃ£o Pedro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(130,1,'CIDAE DE GOIÃS','Eunice Algusta de Jesus','1244',NULL,NULL,NULL,NULL,'02s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua JoÃ£o XXlll n 09','Rua JoÃ£o XXlll n 09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','3',NULL,NULL,NULL,NULL,NULL,NULL),(131,1,'CIDAE DE GOIÃS','Eva da P. Camelo Pinto','Goias',NULL,NULL,NULL,NULL,'1864',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila lions','Vila lions',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(132,1,'CIDAE DE GOIÃS','Eva Pereira da Silva','Goias',NULL,NULL,NULL,NULL,'058',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua santo amaro na esquina da aabb','Rua santo amaro na esquina da aabb',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(133,1,'CIDAE DE GOIÃS','Eva Sebastiana','466',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Com JoÃ£o Drogaria Rio Vermelho com SebastiÃ£o Silva ','Com JoÃ£o Drogaria Rio Vermelho com SebastiÃ£o Silva ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','3',NULL,NULL,NULL,NULL,NULL,NULL),(134,1,'CIDAE DE GOIÃS','Evanir Campos da Silva','Goias',NULL,NULL,NULL,NULL,'772',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(135,1,'CIDAE DE GOIÃS','Luiz Carlos Tomaz','177',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 4 nÂº4 vila serra dourada','Rua 4 nÂº4 vila serra dourada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(136,1,'CIDAE DE GOIÃS','Manoel Alves da Costa','410',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na rodoviÃ¡ria nova com Tom do tÃ¡xi 20','Receber na rodoviÃ¡ria nova com Tom do tÃ¡xi 20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(137,1,'CIDAE DE GOIÃS','Manoel de Deus Passos','1195',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua altino lobo em frente a mercearia basto','Rua altino lobo em frente a mercearia basto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(138,1,'CIDAE DE GOIÃS','Manoel Felix da Silva','321',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua BolÃ­var em frente ao Diuba','Rua BolÃ­var em frente ao Diuba',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(139,1,'CIDAE DE GOIÃS','Manoel Santana da Mata','Goias',NULL,NULL,NULL,NULL,'132',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15','15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(140,1,'CIDAE DE GOIÃS','Marcilio Luiz Ferreira','GoiÃ¡s',NULL,NULL,NULL,NULL,'270',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(141,1,'CIDAE DE GOIÃS','Marcondes Jacinto de Moraes','Goias',NULL,NULL,NULL,NULL,'2343',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(142,1,'CIDAE DE GOIÃS','Maria Antonia Ferreira da Silva','583',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua  Cordelio Rosa','Rua  Cordelio Rosa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(143,1,'CIDAE DE GOIÃS','Maria Aparecida do EspÃ­rito S. Souza','2325',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'PraÃ§a Araguari','PraÃ§a Araguari',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(144,1,'CIDAE DE GOIÃS','Maria Aparecida Gomes de Jesus','5073',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Pedro Lobo st rio vermelho-receber no artesanato','Rua Pedro Lobo st rio vermelho-receber no artesanato',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(145,1,'CIDAE DE GOIÃS','Maria Cleuza Neres dos Santos','010',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua JoÃ£o XXIII nÂº 09','Rua JoÃ£o XXIII nÂº 09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(146,1,'CIDAE DE GOIÃS','Maria Correia da Silva','681',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 5 jardim vila boa','Rua 5 jardim vila boa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(147,1,'CIDAE DE GOIÃS','Maria da Cruz Arruda','071',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na casa do Dr Aroudo','Receber na casa do Dr Aroudo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','3',NULL,NULL,NULL,NULL,NULL,NULL),(148,1,'CIDAE DE GOIÃS','Maria do Carmo','Goias',NULL,NULL,NULL,NULL,'057',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Maria do Carmo Souza','Maria do Carmo Souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(149,1,'CIDAE DE GOIÃS','Maria das GraÃ§as Santos Lima','Goias',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(150,1,'CIDAE DE GOIÃS','Maria de Assis Santos','404',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Beco da taquara','Beco da taquara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(151,1,'CIDAE DE GOIÃS','Maria de FÃ¡tima Camelo Nunes','1141',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua altino lobo','Rua altino lobo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(152,1,'CIDAE DE GOIÃS','Maria de FÃ¡tima Carlos da Silva','207',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber no J vila boa abaixo do Olney','Receber no J vila boa abaixo do Olney',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(153,1,'CIDAE DE GOIÃS','Maria de Lourdes GonÃ§alves','103',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Beco da faculdade','Beco da faculdade',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(154,1,'CIDAE DE GOIÃS','Maria de SÃ¡ Pinheiro','048',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na diocese','Receber na diocese',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(155,1,'CIDAE DE GOIÃS','Maria Divina de Araujo','1663',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Av. independÃªncia  jardim vila boa','Av. independÃªncia  jardim vila boa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(156,1,'CIDAE DE GOIÃS','Maria Divina Rodrigues Marques','076',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 03 fundo cemitÃ©rio','Rua 03 fundo cemitÃ©rio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(157,1,'CIDAE DE GOIÃS','Maria rosÃ¡rio de jesus','Goias',NULL,NULL,NULL,NULL,'429',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Maria RosÃ¡rio de Jesus','Maria RosÃ¡rio de Jesus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(158,1,'CIDAE DE GOIÃS','Maria Eva dos Santos','456',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua aeroporto sorveteria junto com Riele Garcia','Rua aeroporto sorveteria junto com Riele Garcia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(159,1,'CIDAE DE GOIÃS','Maria J. de Oliveira Roque','252',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber mercearia souza','Receber mercearia souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(160,1,'CIDAE DE GOIÃS','Maria Lucia Ribeiro Ferreira','2044',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua B aeroporto nÂº 135 receber com Antonio do milho','Rua B aeroporto nÂº 135 receber com Antonio do milho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(161,1,'CIDAE DE GOIÃS','Maria Martins de Oliveira','553',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua aeroporto prox ao Manoel Preto','Rua aeroporto prox ao Manoel Preto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(162,1,'CIDAE DE GOIÃS','Maria Santana F. Leite','143',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 02 vila uniÃ£o','Rua 02 vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(163,1,'CIDAE DE GOIÃS','Mario da Costa','200',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila uniÃ£o','Vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(164,1,'CIDAE DE GOIÃS','Mario Serafim de Aguiar','5120',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 08 jardim vila boa','Rua 08 jardim vila boa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(165,1,'CIDAE DE GOIÃS','Marinho Rodrigues de Arruda','152',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Ao lado da padaria estrela guia pg da policia','Ao lado da padaria estrela guia pg da policia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(166,1,'CIDAE DE GOIÃS','Marlene ConceiÃ§Ã£o B. P. Lima','Goias',NULL,NULL,NULL,NULL,'235',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20','20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(167,1,'CIDAE DE GOIÃS','MarLene CornÃ©lio Guerra','104',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'PÃ§a aeroporto casa JoÃ£o Teles','PÃ§a aeroporto casa JoÃ£o Teles',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(168,1,'CIDAE DE GOIÃS','Matilde Alves Pereira','403',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 1 vila uniÃ£o','Rua 1 vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(169,1,'CIDAE DE GOIÃS','Miron Arantes de Souza','5042',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua sol poente st rio vermelho','Rua sol poente st rio vermelho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(170,1,'CIDAE DE GOIÃS','Natal Balbino Leite Peixoto','5137',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RuaJussara Q 02 L94','RuaJussara Q 02 L94',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(171,1,'CIDAE DE GOIÃS','Natalina Xavier de Godoi','Goias',NULL,NULL,NULL,NULL,'1592',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 1 vila uniÃ£o','Rua 1 vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(172,1,'CIDAE DE GOIÃS','Nelvanio Pereira Costa','2326',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na mercearia souza','Receber na mercearia souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(173,1,'CIDAE DE GOIÃS','Nilce Santana Alves Castro','118',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Divinopilis acima da igreja 5Âª casa','Rua Divinopilis acima da igreja 5Âª casa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(174,1,'CIDAE DE GOIÃS','Nonilha de Deus Passos','5065',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 02 nÂº 07 vila serra dourada','Rua 02 nÂº 07 vila serra dourada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(175,1,'CIDAE DE GOIÃS','OdÃ­lio JosÃ© Gomes','474',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Agnel nÂº 02','Rua Agnel nÂº 02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(176,1,'CIDAE DE GOIÃS','Orlando de Camargo','448',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua sta BÃ¡rbara nÂº 15','Rua sta BÃ¡rbara nÂº 15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(177,1,'CIDAE DE GOIÃS','Orlando Fernandes da Silva','Goias',NULL,NULL,NULL,NULL,'205',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'05','05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(178,1,'CIDAE DE GOIÃS','Pedro B. Fonseca','230',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'HermÃ³genes Coelho bar do Pedro','HermÃ³genes Coelho bar do Pedro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(179,1,'CIDAE DE GOIÃS','Riele  Garcia dos Santos','038',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sorveteria','Sorveteria',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(180,1,'CIDAE DE GOIÃS','Rivalino Antonio de Jesus','2357',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Papirus abaixo do bar','Papirus abaixo do bar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(181,1,'CIDAE DE GOIÃS','Rita Pinto Silva','Goias',NULL,NULL,NULL,NULL,'134',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Altino Lobo nÂº 20','Rua Altino Lobo nÂº 20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(182,1,'CIDAE DE GOIÃS','Rosa Helena Cordeiro','055',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua A vila serra dourada nÂº 16','Rua A vila serra dourada nÂº 16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(183,1,'CIDAE DE GOIÃS','Rosalina Silva de Paula','250',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 2 em frente ao orelhÃ£o sogra do Renatinho','Rua 2 em frente ao orelhÃ£o sogra do Renatinho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(184,1,'CIDAE DE GOIÃS','Rosalva Leopoldina','974',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber ferragista rio vermelho','Receber ferragista rio vermelho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(185,1,'CIDAE DE GOIÃS','Salvina Rosa dos Santos','5026',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 4 em frente a barbearia / serra dourada','Rua 4 em frente a barbearia / serra dourada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(186,1,'CIDAE DE GOIÃS','Santa Aprobato Fernandes','113',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'PraÃ§a Brasil Ramos Caiado','PraÃ§a Brasil Ramos Caiado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(187,1,'CIDAE DE GOIÃS','Sebastiana R. J.  de Freitas','2183',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 1 atras do cemitÃ©rio','Rua 1 atras do cemitÃ©rio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(188,1,'CIDAE DE GOIÃS','Sebastiana Pinto Barroso','Goias',NULL,NULL,NULL,NULL,'1659',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(189,1,'CIDAE DE GOIÃS','SebastiÃ£o Avelino  Rosa','103',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua sto amaro','Rua sto amaro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(190,1,'CIDAE DE GOIÃS','SebastiÃ£o Ferreira de Matos','188',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Marechal Abrantes','Rua Marechal Abrantes',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(191,1,'CIDAE DE GOIÃS','Selma Pereira Clemente','5236',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua A aeroporto','Rua A aeroporto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(192,1,'CIDAE DE GOIÃS','Serafim Silva  da Rocha','468',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila lions abaixo da lavanderia','Vila lions abaixo da lavanderia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(193,1,'CIDAE DE GOIÃS','Severino Ferreira da Silva','419',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua da assemblÃ©ia de Deus','Rua da assemblÃ©ia de Deus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(194,1,'CIDAE DE GOIÃS','Sidney Antonio Rosa','2328',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber mercearia Souza','Receber mercearia Souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(195,1,'CIDAE DE GOIÃS','Simoni Custodia da Silva','5054',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua A prox. a OEC â€“ Aeroporto','Rua A prox. a OEC â€“ Aeroporto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(196,1,'CIDAE DE GOIÃS','Tereza Antunes de Bastos','223',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 01 vila Republica prox ao divino feirante','Rua 01 vila Republica prox ao divino feirante',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(197,1,'CIDAE DE GOIÃS','Terezinha de Jesus dos Santos','048',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Hugo agente n 15','Hugo agente n 15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(198,1,'CIDAE DE GOIÃS','Terezinha Maria das Chagas de SÃ¡','200',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Trav rua santa rita','Trav rua santa rita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(199,1,'CIDAE DE GOIÃS','Walmir dias de Oliveira','091',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Auto elÃ©trica abaixo do blue gÃ¡s','Auto elÃ©trica abaixo do blue gÃ¡s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(200,1,'CIDAE DE GOIÃS','Virginea Pinto Barroso','2784',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua D vila aguinel','Rua D vila aguinel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(201,1,'CIDAE DE GOIÃS','Wanderley Alves da PaixÃ£o','2771',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Agenor de Barros','Agenor de Barros',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(202,1,'CIDAE DE GOIÃS','Acirema Ana Paulina dos Santos','147',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SÃ£o Jorge - ao lado Dn. Ana Costa','SÃ£o Jorge - ao lado Dn. Ana Costa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(203,1,'CIDAE DE GOIÃS','Ademaria Maria do Nascimento','Goias',NULL,NULL,NULL,NULL,'202',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'08','08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(204,1,'CIDAE DE GOIÃS','Adilte Oliveira Chaves','Goias',NULL,NULL,NULL,NULL,'221',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua do Oriente','Rua do Oriente',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(205,1,'CIDAE DE GOIÃS','Aguinaldo Gomes Cardoso Contabilidade','02S',NULL,NULL,NULL,NULL,'4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','',NULL,NULL,NULL,NULL,NULL,NULL),(206,1,'CIDAE DE GOIÃS','Alberico FogaÃ§a dos Santos','575',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Joaquim Bonifacio','Rua Joaquim Bonifacio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(207,1,'CIDAE DE GOIÃS','Alecilda de Souza Moreira','Goias',NULL,NULL,NULL,NULL,'5125',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(208,1,'CIDAE DE GOIÃS','Alexandre Borges Ferreira','Goias',NULL,NULL,NULL,NULL,'898',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Travessa Cordelio Rosa n 10','Travessa Cordelio Rosa n 10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(209,1,'CIDAE DE GOIÃS','Alfeu Craveira de Oliveira','GoiÃ¡s',NULL,NULL,NULL,NULL,'040',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'05','05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(210,1,'CIDAE DE GOIÃS','Altair Jose Mendes','GoiÃ¡s',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(211,1,'CIDAE DE GOIÃS','Altair Pereira dos Santos','GoiÃ¡s',NULL,NULL,NULL,NULL,'2819',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(212,1,'CIDAE DE GOIÃS','Ana Caetano da Costa','Goias',NULL,NULL,NULL,NULL,'009',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(213,1,'CIDAE DE GOIÃS','Ana Maria Jesus','Setor Rio Vermelho nas casinhas depois do Sr.',NULL,NULL,NULL,NULL,'Goias',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Ana Maria Jesus dos Santos','Ana Maria Jesus dos Santos',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','1771',NULL,NULL,NULL,NULL,NULL,NULL),(214,1,'CIDAE DE GOIÃS','Angelina Ferreira Pontes','Goias',NULL,NULL,NULL,NULL,'155',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na mercearia estrela guia','Receber na mercearia estrela guia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(215,1,'CIDAE DE GOIÃS','Antonia Maria Pitaluga','Goias',NULL,NULL,NULL,NULL,'001',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua F Vila Aguinel','Rua F Vila Aguinel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(216,1,'CIDAE DE GOIÃS','Antonieta Borges de Souza','GoiÃ¡s',NULL,NULL,NULL,NULL,'212',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30','30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(217,1,'CIDAE DE GOIÃS','Antonio Ferreira Pitaluga','Goias',NULL,NULL,NULL,NULL,'4995',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila do Pipoca no final da rua','Vila do Pipoca no final da rua',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(218,1,'CIDAE DE GOIÃS','Antonio Pires Rezende','149',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Aguinel Merc. do Edimar','Rua Aguinel Merc. do Edimar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(219,1,'CIDAE DE GOIÃS','Antonio Raimundo Pedro Lopes','149',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 07 vila serra dourada dia10','Rua 07 vila serra dourada dia10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(220,1,'CIDAE DE GOIÃS','Antonio Soares dos Santos','004',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Joaquim BonifÃ¡cio acima da Goiandira ','Rua Joaquim BonifÃ¡cio acima da Goiandira ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(221,1,'CIDAE DE GOIÃS','Aparecida de Sousa','5211',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Acima da Joelma do conselho nÂº 63','Acima da Joelma do conselho nÂº 63',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(222,1,'CIDAE DE GOIÃS','Arminda Gomes Bezerra','Goias',NULL,NULL,NULL,NULL,'006',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(223,1,'CIDAE DE GOIÃS','Arnaldo Pedro do Nascimento','841',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua barreirinho nÂº 18 ','Rua barreirinho nÂº 18 ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(224,1,'CIDAE DE GOIÃS','Arquimino Batista dos Santos','Goias',NULL,NULL,NULL,NULL,'008',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25','25',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(225,1,'CIDAE DE GOIÃS','Augusta FogaÃ§a Faria','Goias',NULL,NULL,NULL,NULL,'082',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(226,1,'CIDAE DE GOIÃS','Aurora Avelar Pereira','2122',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Santo Amaro nÂº 15/abaixo Natal vereador','Santo Amaro nÂº 15/abaixo Natal vereador',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(227,1,'CIDAE DE GOIÃS','Benedita Alves de Carvalho','GoiÃ¡s',NULL,NULL,NULL,NULL,'078',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'05','05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(228,1,'CIDAE DE GOIÃS','Benedita ConceiÃ§Ã£o Gomes dos Santos','Goias',NULL,NULL,NULL,NULL,'109',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(229,1,'CIDAE DE GOIÃS','Benedita de Carvalho Resende','Goias',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15','15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(230,1,'CIDAE DE GOIÃS','Benedito Cordeiro de Faria','848',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua do Aeroporto ao lado do Apolonio','Rua do Aeroporto ao lado do Apolonio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(231,1,'CIDAE DE GOIÃS','Benedito DamiÃ£o da Silva','2305',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Av. SÃ£o JoÃ£o 755','Av. SÃ£o JoÃ£o 755',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','3',NULL,NULL,NULL,NULL,NULL,NULL),(232,1,'CIDAE DE GOIÃS','Benedito Mendes Moreira','GoiÃ¡s',NULL,NULL,NULL,NULL,'4928',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(233,1,'CIDAE DE GOIÃS','Candido Divino da Luz Campos','Goias',NULL,NULL,NULL,NULL,'331',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(234,1,'CIDAE DE GOIÃS','Carlos Pereira de AraÃºjo','Goias',NULL,NULL,NULL,NULL,'1790',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(235,1,'CIDAE DE GOIÃS','Carolina Ferreira de Moraes','Goias',NULL,NULL,NULL,NULL,'421',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(236,1,'CIDAE DE GOIÃS','Cleomar Viana','5136',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber Nilcar auto vidro','Receber Nilcar auto vidro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(237,1,'CIDAE DE GOIÃS','Cleuza Maria do Rosario','089',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua nova na esq. Prox ao seu Pedrinho','Rua nova na esq. Prox ao seu Pedrinho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(238,1,'CIDAE DE GOIÃS','ConceiÃ§Ã£o Maria de Jesus','Goias',NULL,NULL,NULL,NULL,'096',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua F vila aguinel em frente ao segueta','Rua F vila aguinel em frente ao segueta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(239,1,'CIDAE DE GOIÃS','Deni Batista Moreira','861',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Alto santana no fundo do centro espirita','Alto santana no fundo do centro espirita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(240,1,'CIDAE DE GOIÃS','Diomarina MendonÃ§a Brunes','Goias',NULL,NULL,NULL,NULL,'184',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Ao lado da mercearia Mateus','Ao lado da mercearia Mateus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(241,1,'CIDAE DE GOIÃS','Divanio BrandÃ£o Cardoso','5098',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Chaveiro santa Rita','Chaveiro santa Rita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(242,1,'CIDAE DE GOIÃS','Divina GonÃ§alves Noronha de Souza','Goias',NULL,NULL,NULL,NULL,'2526',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18','18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(243,1,'CIDAE DE GOIÃS','Domingas Bastos da Mata','788',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua santa bÃ¡rbara n 720','Rua santa bÃ¡rbara n 720',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(244,1,'CIDAE DE GOIÃS','Domingos Gomes da Neiva','Goias',NULL,NULL,NULL,NULL,'439',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua santos dumont n 5','Rua santos dumont n 5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(245,1,'CIDAE DE GOIÃS','Dorizete JacÃ³ de Camargo','Goias',NULL,NULL,NULL,NULL,'436',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Oficina so seu Algusto na GO','Oficina so seu Algusto na GO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(246,1,'CIDAE DE GOIÃS','Dorval Camargo dos Santos','Goias435',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Oficina do seu Algusto na GO','Oficina do seu Algusto na GO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(247,1,'CIDAE DE GOIÃS','Duanefabe de Souza Rocha','5198',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'R. 07 ao lado dp muro do consorcio','R. 07 ao lado dp muro do consorcio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(248,1,'CIDAE DE GOIÃS','Edi Cordeiro Duarte','Goias',NULL,NULL,NULL,NULL,'464',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 4 st rio vermelho','Rua 4 st rio vermelho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(249,1,'CIDAE DE GOIÃS','Edileuza Rodrigues de Souza','Goias',NULL,NULL,NULL,NULL,'0422',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na policia tÃ©cnico cientifica','Receber na policia tÃ©cnico cientifica',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(250,1,'CIDAE DE GOIÃS','Edinilson Junior Ribeiro','5179',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na rodoviÃ¡ria c/ NoÃ© do taxi','Receber na rodoviÃ¡ria c/ NoÃ© do taxi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(251,1,'CIDAE DE GOIÃS','Edite Rosa Leandro','631',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Setor Rio vermelho vizinho do chupreto','Setor Rio vermelho vizinho do chupreto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(252,1,'CIDAE DE GOIÃS','Elcy Maria da Silva','GoiÃ¡s',NULL,NULL,NULL,NULL,'663',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(253,1,'CIDAE DE GOIÃS','Eleni Pereira dos Santos','011',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Em frente a praÃ§a Sta BÃ¡rbara manicure','Em frente a praÃ§a Sta BÃ¡rbara manicure',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(254,1,'CIDAE DE GOIÃS','Eleuza Martins Garcia','itaberai',NULL,NULL,NULL,NULL,'104',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02L',NULL,NULL,NULL,NULL,NULL,NULL),(255,1,'CIDAE DE GOIÃS','Elio Vicente Ferreira','Goias',NULL,NULL,NULL,NULL,'2464',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(256,1,'CIDAE DE GOIÃS','Euler JosÃ© Leite','391',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Na igreja do carmo acima do hosp. SÃ£o Pedro','Na igreja do carmo acima do hosp. SÃ£o Pedro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'7','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(257,1,'CIDAE DE GOIÃS','Eunice Algusta de Jesus','1244',NULL,NULL,NULL,NULL,'02s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua JoÃ£o XXlll n 09','Rua JoÃ£o XXlll n 09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'1','3',NULL,NULL,NULL,NULL,NULL,NULL),(258,1,'CIDAE DE GOIÃS','Eva da P. Camelo Pinto','Goias',NULL,NULL,NULL,NULL,'1864',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila lions','Vila lions',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'7','02S',NULL,NULL,NULL,NULL,NULL,NULL),(259,1,'CIDAE DE GOIÃS','Eva Pereira da Silva','Goias',NULL,NULL,NULL,NULL,'058',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua santo amaro na esquina da aabb','Rua santo amaro na esquina da aabb',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'7','02S',NULL,NULL,NULL,NULL,NULL,NULL),(260,1,'CIDAE DE GOIÃS','Eva Sebastiana','466',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Com JoÃ£o Drogaria Rio Vermelho com SebastiÃ£o Silva ','Com JoÃ£o Drogaria Rio Vermelho com SebastiÃ£o Silva ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','3',NULL,NULL,NULL,NULL,NULL,NULL),(261,1,'CIDAE DE GOIÃS','Evanir Campos da Silva','Goias',NULL,NULL,NULL,NULL,'772',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(262,1,'CIDAE DE GOIÃS','Luiz Carlos Tomaz','177',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 4 nÂº4 vila serra dourada','Rua 4 nÂº4 vila serra dourada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(263,1,'CIDAE DE GOIÃS','Manoel Alves da Costa','410',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na rodoviÃ¡ria nova com Tom do tÃ¡xi 20','Receber na rodoviÃ¡ria nova com Tom do tÃ¡xi 20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(264,1,'CIDAE DE GOIÃS','Manoel de Deus Passos','1195',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua altino lobo em frente a mercearia basto','Rua altino lobo em frente a mercearia basto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(265,1,'CIDAE DE GOIÃS','Manoel Felix da Silva','321',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua BolÃ­var em frente ao Diuba','Rua BolÃ­var em frente ao Diuba',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(266,1,'CIDAE DE GOIÃS','Manoel Santana da Mata','Goias',NULL,NULL,NULL,NULL,'132',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15','15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'7','02S',NULL,NULL,NULL,NULL,NULL,NULL),(267,1,'CIDAE DE GOIÃS','Marcilio Luiz Ferreira','GoiÃ¡s',NULL,NULL,NULL,NULL,'270',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(268,1,'CIDAE DE GOIÃS','Marcondes Jacinto de Moraes','Goias',NULL,NULL,NULL,NULL,'2343',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(269,1,'CIDAE DE GOIÃS','Maria Antonia Ferreira da Silva','583',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua  Cordelio Rosa','Rua  Cordelio Rosa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(270,1,'CIDAE DE GOIÃS','Maria Aparecida do EspÃ­rito S. Souza','2325',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'PraÃ§a Araguari','PraÃ§a Araguari',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(271,1,'CIDAE DE GOIÃS','Maria Aparecida Gomes de Jesus','5073',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Pedro Lobo st rio vermelho-receber no artesanato','Rua Pedro Lobo st rio vermelho-receber no artesanato',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(272,1,'CIDAE DE GOIÃS','Maria Cleuza Neres dos Santos','010',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua JoÃ£o XXIII nÂº 09','Rua JoÃ£o XXIII nÂº 09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(273,1,'CIDAE DE GOIÃS','Maria Correia da Silva','681',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 5 jardim vila boa','Rua 5 jardim vila boa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(274,1,'CIDAE DE GOIÃS','Maria da Cruz Arruda','071',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na casa do Dr Aroudo','Receber na casa do Dr Aroudo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','3',NULL,NULL,NULL,NULL,NULL,NULL),(275,1,'CIDAE DE GOIÃS','Maria do Carmo','Goias',NULL,NULL,NULL,NULL,'057',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Maria do Carmo Souza','Maria do Carmo Souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(276,1,'CIDAE DE GOIÃS','Maria das GraÃ§as Santos Lima','Goias',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(277,1,'CIDAE DE GOIÃS','Maria de Assis Santos','404',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Beco da taquara','Beco da taquara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2,5',NULL,NULL,NULL,NULL,NULL,NULL),(278,1,'CIDAE DE GOIÃS','Maria de FÃ¡tima Camelo Nunes','1141',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua altino lobo','Rua altino lobo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(279,1,'CIDAE DE GOIÃS','Maria de FÃ¡tima Carlos da Silva','207',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber no J vila boa abaixo do Olney','Receber no J vila boa abaixo do Olney',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(280,1,'CIDAE DE GOIÃS','Maria de Lourdes GonÃ§alves','103',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Beco da faculdade','Beco da faculdade',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(281,1,'CIDAE DE GOIÃS','Maria de SÃ¡ Pinheiro','048',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na diocese','Receber na diocese',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(282,1,'CIDAE DE GOIÃS','Maria Divina de Araujo','1663',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Av. independÃªncia  jardim vila boa','Av. independÃªncia  jardim vila boa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(283,1,'CIDAE DE GOIÃS','Maria Divina Rodrigues Marques','076',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 03 fundo cemitÃ©rio','Rua 03 fundo cemitÃ©rio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(284,1,'CIDAE DE GOIÃS','Maria rosÃ¡rio de jesus','Goias',NULL,NULL,NULL,NULL,'429',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Maria RosÃ¡rio de Jesus','Maria RosÃ¡rio de Jesus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(285,1,'CIDAE DE GOIÃS','Maria Eva dos Santos','456',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua aeroporto sorveteria junto com Riele Garcia','Rua aeroporto sorveteria junto com Riele Garcia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(286,1,'CIDAE DE GOIÃS','Maria J. de Oliveira Roque','252',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber mercearia souza','Receber mercearia souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(287,1,'CIDAE DE GOIÃS','Maria Lucia Ribeiro Ferreira','2044',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua B aeroporto nÂº 135 receber com Antonio do milho','Rua B aeroporto nÂº 135 receber com Antonio do milho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(288,1,'CIDAE DE GOIÃS','Maria Martins de Oliveira','553',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua aeroporto prox ao Manoel Preto','Rua aeroporto prox ao Manoel Preto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(289,1,'CIDAE DE GOIÃS','Maria Santana F. Leite','143',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 02 vila uniÃ£o','Rua 02 vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(290,1,'CIDAE DE GOIÃS','Mario da Costa','200',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila uniÃ£o','Vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(291,1,'CIDAE DE GOIÃS','Mario Serafim de Aguiar','5120',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 08 jardim vila boa','Rua 08 jardim vila boa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(292,1,'CIDAE DE GOIÃS','Marinho Rodrigues de Arruda','152',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Ao lado da padaria estrela guia pg da policia','Ao lado da padaria estrela guia pg da policia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(293,1,'CIDAE DE GOIÃS','Marlene ConceiÃ§Ã£o B. P. Lima','Goias',NULL,NULL,NULL,NULL,'235',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'20','20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(294,1,'CIDAE DE GOIÃS','MarLene CornÃ©lio Guerra','104',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'PÃ§a aeroporto casa JoÃ£o Teles','PÃ§a aeroporto casa JoÃ£o Teles',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(295,1,'CIDAE DE GOIÃS','Matilde Alves Pereira','403',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 1 vila uniÃ£o','Rua 1 vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(296,1,'CIDAE DE GOIÃS','Miron Arantes de Souza','5042',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua sol poente st rio vermelho','Rua sol poente st rio vermelho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(297,1,'CIDAE DE GOIÃS','Natal Balbino Leite Peixoto','5137',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RuaJussara Q 02 L94','RuaJussara Q 02 L94',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','4',NULL,NULL,NULL,NULL,NULL,NULL),(298,1,'CIDAE DE GOIÃS','Natalina Xavier de Godoi','Goias',NULL,NULL,NULL,NULL,'1592',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 1 vila uniÃ£o','Rua 1 vila uniÃ£o',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(299,1,'CIDAE DE GOIÃS','Nelvanio Pereira Costa','2326',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber na mercearia souza','Receber na mercearia souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(300,1,'CIDAE DE GOIÃS','Nilce Santana Alves Castro','118',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Divinopilis acima da igreja 5Âª casa','Rua Divinopilis acima da igreja 5Âª casa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(301,1,'CIDAE DE GOIÃS','Nonilha de Deus Passos','5065',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 02 nÂº 07 vila serra dourada','Rua 02 nÂº 07 vila serra dourada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(302,1,'CIDAE DE GOIÃS','OdÃ­lio JosÃ© Gomes','474',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Agnel nÂº 02','Rua Agnel nÂº 02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(303,1,'CIDAE DE GOIÃS','Orlando de Camargo','448',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua sta BÃ¡rbara nÂº 15','Rua sta BÃ¡rbara nÂº 15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(304,1,'CIDAE DE GOIÃS','Orlando Fernandes da Silva','Goias',NULL,NULL,NULL,NULL,'205',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'05','05',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(305,1,'CIDAE DE GOIÃS','Pedro B. Fonseca','230',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'HermÃ³genes Coelho bar do Pedro','HermÃ³genes Coelho bar do Pedro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(306,1,'CIDAE DE GOIÃS','Riele  Garcia dos Santos','038',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Sorveteria','Sorveteria',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(307,1,'CIDAE DE GOIÃS','Rivalino Antonio de Jesus','2357',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Papirus abaixo do bar','Papirus abaixo do bar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(308,1,'CIDAE DE GOIÃS','Rita Pinto Silva','Goias',NULL,NULL,NULL,NULL,'134',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Altino Lobo nÂº 20','Rua Altino Lobo nÂº 20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(309,1,'CIDAE DE GOIÃS','Rosa Helena Cordeiro','055',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua A vila serra dourada nÂº 16','Rua A vila serra dourada nÂº 16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(310,1,'CIDAE DE GOIÃS','Rosalina Silva de Paula','250',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 2 em frente ao orelhÃ£o sogra do Renatinho','Rua 2 em frente ao orelhÃ£o sogra do Renatinho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(311,1,'CIDAE DE GOIÃS','Rosalva Leopoldina','974',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber ferragista rio vermelho','Receber ferragista rio vermelho',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(312,1,'CIDAE DE GOIÃS','Salvina Rosa dos Santos','5026',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 4 em frente a barbearia / serra dourada','Rua 4 em frente a barbearia / serra dourada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(313,1,'CIDAE DE GOIÃS','Santa Aprobato Fernandes','113',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'PraÃ§a Brasil Ramos Caiado','PraÃ§a Brasil Ramos Caiado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(314,1,'CIDAE DE GOIÃS','Sebastiana R. J.  de Freitas','2183',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 1 atras do cemitÃ©rio','Rua 1 atras do cemitÃ©rio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(315,1,'CIDAE DE GOIÃS','Sebastiana Pinto Barroso','Goias',NULL,NULL,NULL,NULL,'1659',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'10','10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','02S',NULL,NULL,NULL,NULL,NULL,NULL),(316,1,'CIDAE DE GOIÃS','SebastiÃ£o Avelino  Rosa','103',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua sto amaro','Rua sto amaro',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(317,1,'CIDAE DE GOIÃS','SebastiÃ£o Ferreira de Matos','188',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua Marechal Abrantes','Rua Marechal Abrantes',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(318,1,'CIDAE DE GOIÃS','Selma Pereira Clemente','5236',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua A aeroporto','Rua A aeroporto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(319,1,'CIDAE DE GOIÃS','Serafim Silva  da Rocha','468',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vila lions abaixo da lavanderia','Vila lions abaixo da lavanderia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(320,1,'CIDAE DE GOIÃS','Severino Ferreira da Silva','419',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua da assemblÃ©ia de Deus','Rua da assemblÃ©ia de Deus',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(321,1,'CIDAE DE GOIÃS','Sidney Antonio Rosa','2328',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Receber mercearia Souza','Receber mercearia Souza',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(322,1,'CIDAE DE GOIÃS','Simoni Custodia da Silva','5054',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua A prox. a OEC â€“ Aeroporto','Rua A prox. a OEC â€“ Aeroporto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(323,1,'CIDAE DE GOIÃS','Tereza Antunes de Bastos','223',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua 01 vila Republica prox ao divino feirante','Rua 01 vila Republica prox ao divino feirante',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(324,1,'CIDAE DE GOIÃS','Terezinha de Jesus dos Santos','048',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Hugo agente n 15','Hugo agente n 15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(325,1,'CIDAE DE GOIÃS','Terezinha Maria das Chagas de SÃ¡','200',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Trav rua santa rita','Trav rua santa rita',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(326,1,'CIDAE DE GOIÃS','Walmir dias de Oliveira','091',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Auto elÃ©trica abaixo do blue gÃ¡s','Auto elÃ©trica abaixo do blue gÃ¡s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(327,1,'CIDAE DE GOIÃS','Virginea Pinto Barroso','2784',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Rua D vila aguinel','Rua D vila aguinel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL),(328,1,'CIDAE DE GOIÃS','Wanderley Alves da PaixÃ£o','2771',NULL,NULL,NULL,NULL,'02S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Agenor de Barros','Agenor de Barros',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ATIVO',NULL,NULL,NULL,'2','2',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `pax_associados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_cancelamento`
--

DROP TABLE IF EXISTS `pax_cancelamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_cancelamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `data_canc` datetime DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `motivo` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_cancelamento`
--

LOCK TABLES `pax_cancelamento` WRITE;
/*!40000 ALTER TABLE `pax_cancelamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_cancelamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_contas_receber`
--

DROP TABLE IF EXISTS `pax_contas_receber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_contas_receber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `descricao_servico` varchar(200) DEFAULT NULL,
  `data_servico` datetime DEFAULT NULL,
  `data_vencimento` datetime DEFAULT NULL,
  `valor_servico` double(15,2) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `responsavel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_contas_receber`
--

LOCK TABLES `pax_contas_receber` WRITE;
/*!40000 ALTER TABLE `pax_contas_receber` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_contas_receber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_dependentes`
--

DROP TABLE IF EXISTS `pax_dependentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_dependentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_associado` int(11) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `data_obito` datetime DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_dependentes`
--

LOCK TABLES `pax_dependentes` WRITE;
/*!40000 ALTER TABLE `pax_dependentes` DISABLE KEYS */;
INSERT INTO `pax_dependentes` VALUES (1,60,'CREZIO RAIMUNDO PINTO','','','VIVO','','2014-01-01 00:00:00','2014-01-01 00:00:00'),(2,74,'GUINALDO RODRIGUES MARTINS',NULL,NULL,'VIVO(A)','Conjugue',NULL,NULL),(3,74,'ANA PAULA S. RODRIGUES MARTINS','','','VIVO(A)','FILHO',NULL,NULL),(4,74,'WALQUER S. RODRIGUES MARTINS','','','VIVO(A)','FILHO',NULL,NULL);
/*!40000 ALTER TABLE `pax_dependentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_empresas`
--

DROP TABLE IF EXISTS `pax_empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_for` int(11) DEFAULT NULL,
  `razao` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `inc_est` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_empresas`
--

LOCK TABLES `pax_empresas` WRITE;
/*!40000 ALTER TABLE `pax_empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_funcionarios`
--

DROP TABLE IF EXISTS `pax_funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `comissao` double(5,2) DEFAULT NULL,
  `data_adm` datetime DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'ATIVO',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_funcionarios`
--

LOCK TABLES `pax_funcionarios` WRITE;
/*!40000 ALTER TABLE `pax_funcionarios` DISABLE KEYS */;
INSERT INTO `pax_funcionarios` VALUES (1,'Kamila','Kamila','$2y$14$QUI3UUhZbWZwWjIrbTZiNufVSPX247NoxRPGg3RzWzVMi/b3ve83O','','','','','','',0.00,NULL,'AB7QHYmfpZ2+m6b7y1EkoB6vNcy9CyD/Gn0PY0qE7iqAcR2HbL9Cv41trzu3AMihbeDR83Z+1Vi0jv3mMdBtrMVMMUF3f4/vgaKAyCxhw3ehJqNq+cq7/VUVqeiI3tPT','ATIVO'),(2,'Cob01','','$2y$14$bkl5SFN4ZUtXVnd5S0prT.BY6GmgMKUKfa8zeYAPNIHgXrkt01gBK','','','','','','',0.00,NULL,'nIyHSxeKWVwyKJkLHSZ2IRzVIFtx15LZeitSdS+EKC62aNgVAsye1NP+6KeRbYwaJV8LmsmQW7YECgSYc6Ykk77EMz97vj3tBQQbwscTUcuDG8T1qnteOK84llXpGtK+','ATIVO'),(3,'Itapirapuã','','$2y$14$T3RZQ1BZSGRwTXRHWjV1U.VWp5v7vKXQbGD5Z1.JWr.ECyt6nDw.i','','','','','','',0.00,NULL,'OtYCPYHdpMtGZ5uPaXBSmUJEhVSi6AfS3X6QEfN566k+kwYHwiL04/6h6cBtpLxhbdjWbgND17tqSt0IQScSOM0BkW4bUNPQq9CYVWm37flzWDFoLjaC/40r0892Tj1+','ATIVO'),(4,'Mossamedes','','$2y$14$bDd2NHl5ZVZvci9INEk1ZeJwXssqfSzenaHSy0K6TPQKSjwj1W212','','','','','','',0.00,NULL,'l7v4yyeVor/H4I5fXDqHwA9cAEL4N3jH5aSQ+HXvg7fep2fJqCx42K9e8sKC2SBwJ4Y98CxABrNEQoSO0jqr38jC7SpZkad8zq2pvf+ykLxOclN/z4POYc4zkGxosc+2','ATIVO'),(5,'Itaberai','','$2y$14$cXJjV1BDYmdTVUl4TlhLduXc4SFwmi1.yuR5XzbEsIQde1x7UwUtS','','','','','','',0.00,NULL,'qrcWPCbgSUIxNXKwvhH0cTaMRZpNE0NLVFjerywauUXI8ZH7p112dr8dGRMnkcSPEk/oVIkWShyqYGR70398lXu5AcWBDs21HHtPSNHDLV2zW1iaRQXkUBISv/f7tPwh','ATIVO'),(6,'Cob02','','$2y$14$bVNSS3BaNTM2MzhnVkhqZuoQxsgMhXYiPkGmai.Mxm0oc8XR6cMHa','','','','','','',0.00,NULL,'mSRKpZ53638gVHjguY91r+JULitkSN6+DjL8VMOovnp+l3W2W7DkaUeCLd21WjugsDbuouyvFfYfQrKiRNIPy5mGBnFJN/0NwfEWvAPiNh0CVONdWHT+REoHDhT7Ivbc','ATIVO'),(7,'Colonia de Uvá','','$2y$14$N0FhTkdLdG8wUXpUSGtFWe4b0zK3JJItbE/judoexA/1Fbexs4AEK','','','','','','',0.00,NULL,'7AaNGKto0QzTHkEZMjRxTnd/y+W0NQPOvjrNbQ65BiS+1PUyK4CK6CZzbNRMi64M78HBSBxR10waj3nOuuETOA8F0r+MVwC0o3y7JqWhAJfeQL0H8MeZdPptV4ZDzNCX','ATIVO');
/*!40000 ALTER TABLE `pax_funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_material`
--

DROP TABLE IF EXISTS `pax_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  `saldo` varchar(45) DEFAULT NULL,
  `compra` double(15,2) DEFAULT NULL,
  `venda` double(15,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_material`
--

LOCK TABLES `pax_material` WRITE;
/*!40000 ALTER TABLE `pax_material` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_mensalidade`
--

DROP TABLE IF EXISTS `pax_mensalidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_mensalidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_pagamento` datetime DEFAULT NULL,
  `mes_referencia` char(2) DEFAULT NULL,
  `ano_referencia` char(4) DEFAULT NULL,
  `valor_mensalidade` double(15,2) DEFAULT NULL,
  `paga` int(11) DEFAULT '0' COMMENT '0 Nao',
  `valor_pago` double(15,2) DEFAULT NULL,
  `diferenca` double(15,2) DEFAULT NULL,
  `cobrador` varchar(45) DEFAULT NULL,
  `id_associados` int(11) NOT NULL,
  `id_funcionarios` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pax_mensalidade_pax_associados1_idx` (`id_associados`),
  KEY `fk_pax_mensalidade_pax_funcionarios1_idx` (`id_funcionarios`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_mensalidade`
--

LOCK TABLES `pax_mensalidade` WRITE;
/*!40000 ALTER TABLE `pax_mensalidade` DISABLE KEYS */;
INSERT INTO `pax_mensalidade` VALUES (1,NULL,'01','2015',15.76,0,NULL,NULL,NULL,1,1),(2,NULL,'01','2015',15.76,0,NULL,NULL,NULL,2,1),(3,NULL,'01','2015',15.76,0,NULL,NULL,NULL,1,1),(4,NULL,'01','2015',15.76,0,NULL,NULL,NULL,2,1),(5,NULL,'01','2015',15.76,0,NULL,NULL,NULL,1,1),(6,NULL,'01','2015',15.76,0,NULL,NULL,NULL,2,1),(7,NULL,'01','2015',15.76,0,NULL,NULL,NULL,1,1),(8,NULL,'01','2015',15.76,0,NULL,NULL,NULL,2,1),(9,NULL,'01','2015',15.76,0,NULL,NULL,'7',256,1),(10,NULL,'01','2015',15.76,0,NULL,NULL,'7',258,1),(11,NULL,'01','2015',15.76,0,NULL,NULL,'7',259,1),(12,NULL,'01','2015',15.76,0,NULL,NULL,'7',266,1),(13,NULL,'01','2015',15.76,0,NULL,NULL,'7',256,1),(14,NULL,'01','2015',15.76,0,NULL,NULL,'7',256,1),(15,NULL,'01','2015',15.76,0,NULL,NULL,'7',258,1),(16,NULL,'01','2015',15.76,0,NULL,NULL,'7',259,1),(17,NULL,'01','2015',15.76,0,NULL,NULL,'7',266,1),(18,NULL,'01','2015',15.76,0,NULL,NULL,'7',256,1),(19,NULL,'01','2015',15.76,0,NULL,NULL,'7',258,1),(20,NULL,'01','2015',15.76,0,NULL,NULL,'7',259,1),(21,NULL,'01','2015',15.76,0,NULL,NULL,'7',266,1),(22,NULL,'01','2015',15.76,0,NULL,NULL,'7',256,1),(23,NULL,'01','2015',15.76,0,NULL,NULL,'7',258,1),(24,NULL,'01','2015',15.76,0,NULL,NULL,'7',259,1),(25,NULL,'01','2015',15.76,0,NULL,NULL,'7',266,1);
/*!40000 ALTER TABLE `pax_mensalidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_moedas`
--

DROP TABLE IF EXISTS `pax_moedas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_moedas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `valor` double(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_moedas`
--

LOCK TABLES `pax_moedas` WRITE;
/*!40000 ALTER TABLE `pax_moedas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_moedas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_movimento_caixa`
--

DROP TABLE IF EXISTS `pax_movimento_caixa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_movimento_caixa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_movimento` date DEFAULT NULL,
  `credor` varchar(45) DEFAULT NULL,
  `discriminacao` varchar(250) DEFAULT NULL,
  `valor_lancado` double(15,2) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT 'D Debitos\nC Cretitos',
  `lancamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_movimento_caixa`
--

LOCK TABLES `pax_movimento_caixa` WRITE;
/*!40000 ALTER TABLE `pax_movimento_caixa` DISABLE KEYS */;
INSERT INTO `pax_movimento_caixa` VALUES (1,'2015-01-06','Maria do Carmo Teixeira','Taxa',29.00,'D',NULL),(2,'2015-01-06','teste','teste',50.20,'D',NULL),(3,'2015-01-08','teste2','teste2',50.20,'D',NULL),(4,'2015-01-06','Agua','Agua',30.00,'C',NULL);
/*!40000 ALTER TABLE `pax_movimento_caixa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_notas_fiscais`
--

DROP TABLE IF EXISTS `pax_notas_fiscais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_notas_fiscais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nun_nota` varchar(45) COLLATE utf8_estonian_ci DEFAULT NULL,
  `cod_fornecedor` varchar(5) COLLATE utf8_estonian_ci DEFAULT NULL,
  `razao_social` varchar(100) COLLATE utf8_estonian_ci DEFAULT NULL,
  `cnpj` varchar(20) COLLATE utf8_estonian_ci DEFAULT NULL,
  `inc_estatual` varchar(20) COLLATE utf8_estonian_ci DEFAULT NULL,
  `data_emissao` datetime DEFAULT NULL,
  `total` double(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_notas_fiscais`
--

LOCK TABLES `pax_notas_fiscais` WRITE;
/*!40000 ALTER TABLE `pax_notas_fiscais` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_notas_fiscais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_obitos`
--

DROP TABLE IF EXISTS `pax_obitos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_obitos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionarios` int(11) NOT NULL,
  `codigo_ass` int(11) DEFAULT NULL,
  `nome_associado` varchar(45) DEFAULT NULL,
  `data_obito` datetime DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `situacao` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '0',
  `velorio` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `tipo_pagamento` varchar(45) DEFAULT NULL,
  `contrato` varchar(45) DEFAULT NULL,
  `groupo` varchar(45) DEFAULT NULL,
  `translado` varchar(45) DEFAULT NULL,
  `responsavel` varchar(45) DEFAULT NULL,
  `data_pagamento` datetime DEFAULT NULL,
  `cod_urna` varchar(45) DEFAULT NULL,
  `valor_urna` varchar(45) DEFAULT NULL,
  `diferenca_urna` varchar(45) DEFAULT NULL,
  `atendente` varchar(45) DEFAULT NULL,
  `horario_sepultamento` varchar(45) DEFAULT NULL,
  `valor_total` double(15,2) DEFAULT NULL,
  `descricao` text,
  `valor_tran` double(15,2) DEFAULT NULL,
  `data_velorio` datetime DEFAULT NULL,
  `sepulta` varchar(45) DEFAULT NULL,
  `valor_sep` double(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pax_obitos_pax_funcionarios1_idx` (`id_funcionarios`),
  CONSTRAINT `fk_pax_obitos_pax_funcionarios1` FOREIGN KEY (`id_funcionarios`) REFERENCES `pax_funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_obitos`
--

LOCK TABLES `pax_obitos` WRITE;
/*!40000 ALTER TABLE `pax_obitos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_obitos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_obitos_despesa`
--

DROP TABLE IF EXISTS `pax_obitos_despesa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_obitos_despesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_obitos` int(11) NOT NULL,
  `sepulta` varchar(45) DEFAULT NULL,
  `valor_sep` double(15,2) DEFAULT NULL,
  `paramento` varchar(45) DEFAULT NULL,
  `valor_par` double(15,2) DEFAULT NULL,
  `ornamento` varchar(45) DEFAULT NULL,
  `valor_orn` double(15,2) DEFAULT NULL,
  `velas` varchar(45) DEFAULT NULL,
  `valor_vela` double(15,2) DEFAULT NULL,
  `veu` varchar(45) DEFAULT NULL,
  `valor_veu` double(15,2) DEFAULT NULL,
  `nota_fal` varchar(45) DEFAULT NULL,
  `valor_nota` double(15,2) DEFAULT NULL,
  `valor_servico` double(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pax_obitos_despesa_pax_obitos1_idx` (`id_obitos`),
  CONSTRAINT `fk_pax_obitos_despesa_pax_obitos1` FOREIGN KEY (`id_obitos`) REFERENCES `pax_obitos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_obitos_despesa`
--

LOCK TABLES `pax_obitos_despesa` WRITE;
/*!40000 ALTER TABLE `pax_obitos_despesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_obitos_despesa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_produtos_notas`
--

DROP TABLE IF EXISTS `pax_produtos_notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_produtos_notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nun_nota` int(11) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `unidade` varchar(4) DEFAULT NULL,
  `valor_unitario` double(15,2) DEFAULT NULL,
  `valor_total` double(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_produtos_notas`
--

LOCK TABLES `pax_produtos_notas` WRITE;
/*!40000 ALTER TABLE `pax_produtos_notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_produtos_notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_servicos`
--

DROP TABLE IF EXISTS `pax_servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_servico` datetime DEFAULT NULL,
  `data_venc` datetime DEFAULT NULL,
  `valor` double(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_servicos`
--

LOCK TABLES `pax_servicos` WRITE;
/*!40000 ALTER TABLE `pax_servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pax_urnas`
--

DROP TABLE IF EXISTS `pax_urnas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pax_urnas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `compra` double(15,2) DEFAULT NULL,
  `venda` double(15,2) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pax_urnas`
--

LOCK TABLES `pax_urnas` WRITE;
/*!40000 ALTER TABLE `pax_urnas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pax_urnas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-06 13:13:07
