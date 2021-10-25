-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary table structure for view `role`
--

DROP TABLE IF EXISTS `role`;
/*!50001 DROP VIEW IF EXISTS `role`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `role` (
  `id` tinyint NOT NULL,
  `role` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'student'),(2,'teacher');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `students`
--

DROP TABLE IF EXISTS `students`;
/*!50001 DROP VIEW IF EXISTS `students`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `students` (
  `email` tinyint NOT NULL,
  `uname` tinyint NOT NULL,
  `role` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!50001 DROP VIEW IF EXISTS `teachers`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `teachers` (
  `email` tinyint NOT NULL,
  `uname` tinyint NOT NULL,
  `role` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `uname` (`uname`),
  KEY `users_fk0` (`role`),
  CONSTRAINT `users_fk0` FOREIGN KEY (`role`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (9,'alumn2@gmail.com','uname','bc85eaa36a59a62d6e1861806c3211942db364c017467ca2f2b90f25a45e55b1',1),(10,'foo@foo.com','userfoo','d865e239a0bb044dd3077521a2c286b45357f4e6a1353d686f7f93aae5dd1ea5',1),(11,'umail123@gmail.com','uname123','d3ff7be84bca6fee4a6cbfcac758e72469530aaf1ac523803b471478b5e8a1ae',1),(12,'final@final.com','pruebafinal','281da50b5513664dc6d8a2dbdd8c948f158e09cf558059da2851d70acb318135',1),(16,'maria@maria.com','maria','992ae720b572404cc1f172ec2fc05489b6e16fcd5be1c7b55124e43628410f85',1),(17,'alumnedaw@mail.com','alumnedaw','695e5aa75ff49c20f9885dc2aaed266d3285914b4ee0be9245c9ebb4d2f91ac1',1),(18,'register@mail.com','register','439c81dbb7b5c25f595d30cf2ac0edda889d49899e520e177a43ba004975e503',1),(19,'dadad@mail.com','dadad','bc85eaa36a59a62d6e1861806c3211942db364c017467ca2f2b90f25a45e55b1',1),(20,'register2@gmail.com','register2','bc85eaa36a59a62d6e1861806c3211942db364c017467ca2f2b90f25a45e55b1',1),(22,'toni@escolesnuria.cat','toni','71e0e2f8d6b752d1375cfdc1472a4757ab7ce4c21c01a2bc98261c89d6fdcb48',2),(23,'jp@escolesnuria.cat','joseantonio','85c9f20acb8d0a0c93b4182d0030b655c5d9cc318daeff84b7351f59e4158dff',2),(24,'what@mail.com','what','03d4c69c2bd13d27133e1b3caa79af907dc31f0fa86e7ca3b12562de8ab2491e',1),(25,'teacher@escolesnuria.cat','teacher','f132b9d9288f21cd102b67fbe0456a4a72a8ea85a7aa762a8a7c5ac368dae8a1',2),(26,'pau@mail.com','pau','dfc69436cbb1a289de67c303880d9ad74b17081654fa5c27dd45f46526c10019',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `role`
--

/*!50001 DROP TABLE IF EXISTS `role`*/;
/*!50001 DROP VIEW IF EXISTS `role`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`prova`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `role` AS select `users`.`id` AS `id`,`users`.`role` AS `role` from `users` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `students`
--

/*!50001 DROP TABLE IF EXISTS `students`*/;
/*!50001 DROP VIEW IF EXISTS `students`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`prova`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `students` AS (select `users`.`email` AS `email`,`users`.`uname` AS `uname`,`users`.`role` AS `role` from `users` where `users`.`role` = '1') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `teachers`
--

/*!50001 DROP TABLE IF EXISTS `teachers`*/;
/*!50001 DROP VIEW IF EXISTS `teachers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`prova`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `teachers` AS (select `users`.`email` AS `email`,`users`.`uname` AS `uname`,`users`.`role` AS `role` from `users` where `users`.`role` = '2') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-25 21:52:55
