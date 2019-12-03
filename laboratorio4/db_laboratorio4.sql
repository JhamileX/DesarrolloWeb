-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2019 a las 03:26:03
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_laboratorio4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(11) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(11) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(11) COLLATE utf8_bin NOT NULL,
  `correo` varchar(11) COLLATE utf8_bin NOT NULL,
  `password` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `nombre`, `apellidos`, `correo`, `password`) VALUES
('', '2', '3', '4', '5'),
('', '2', '3', '4', '5'),
('', '2', '3', '4', '5'),
('', '2', '3', '4', '5'),
('1', '2', '3', '4', '5'),
('0', '9', '8', '7', '6'),
('1', '1', '1', '1', '1'),
('1', '2', '2', '2', '2'),
('3r3q', '3qe', '3', 'q', 'efew');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
