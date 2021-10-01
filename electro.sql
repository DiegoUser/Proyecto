-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-10-2021 a las 03:57:21
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `electro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electro`
--

DROP TABLE IF EXISTS `electro`;
CREATE TABLE IF NOT EXISTS `electro` (
  `idELEC` int(5) NOT NULL AUTO_INCREMENT,
  `desELEC` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `orgELEC` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `prcELEC` int(10) NOT NULL,
  PRIMARY KEY (`idELEC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
