-- phpMyAdmin SQL Dump
-- version 5.0.2
-- Servidor: 127.0.0.1:3306
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-03:00";

DROP TABLE IF EXISTS `electro`;
CREATE TABLE IF NOT EXISTS `electro` (
  `idELEC` int(5) NOT NULL AUTO_INCREMENT,
  `desELEC` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `orgELEC` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `prcELEC` int(10) NOT NULL,
  PRIMARY KEY (`idELEC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
COMMIT;

INSERT INTO electro (desELEC,orgELEC,prcELEC) VALUES ("Television", "CHINA", 15000),("Lavarropas", "CHINA", 15000),("Secarropas", "CHINA", 18000)
,("Microondas", "USA", 12000),("Horno", "USA", 15000),("Heladera", "USA", 22000),("Batidora", "INDIA", 6000);