DROP TABLE IF EXISTS `province`;

CREATE TABLE province (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `district`;

CREATE TABLE district (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `id_province` int(3) NOT NULL,
  FOREIGN KEY (`id_province`) REFERENCES `district` (`id`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `sub_district`;

CREATE TABLE sub_district (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `id_district` int(3) NOT NULL,
  FOREIGN KEY (`id_district`) REFERENCES `district` (`id`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `location` int(3) NOT NULL,
  FOREIGN KEY (`location`) REFERENCES `sub_district` (`id`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

DROP TABLE IF EXISTS `fill`;

CREATE TABLE fill (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `id_user` int(3) NOT NULL,
  `tendency_1` int(10) DEFAULT NULL,
  `tendency_2` int(10) DEFAULT NULL,
  `id_news` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_fill` int(10) NOT NULL,
  `number` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  FOREIGN KEY (`id_fill`) REFERENCES `fill` (`id`),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

