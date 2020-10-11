-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `student_11902804`;

CREATE TABLE `Data` (
  `ID` int(6) unsigned NOT NULL,
  `Waarde` int(11) NOT NULL,
  `Tijd` timestamp NOT NULL DEFAULT current_timestamp(),
  KEY `ID` (`ID`),
  CONSTRAINT `Data_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Sensoren` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `Sensoren` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Naam` varchar(30) NOT NULL,
  `IP adres` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-10-09 13:00:56