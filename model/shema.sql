CREATE TABLE `abons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pass` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `balance` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
