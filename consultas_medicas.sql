-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2015 a las 23:55:39
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas_medicas`
--

CREATE TABLE IF NOT EXISTS `consultas_medicas` (
  `id_consulta` bigint(20) unsigned NOT NULL,
  `fecha_consulta` date NOT NULL,
  `nombre_paciente` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `nombre_medico` varchar(100) NOT NULL,
  `consultorio` varchar(20) NOT NULL,
  `diagnostico` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas_medicas`
--

INSERT INTO `consultas_medicas` (`id_consulta`, `fecha_consulta`, `nombre_paciente`, `telefono`, `nombre_medico`, `consultorio`, `diagnostico`) VALUES
(1, '2010-04-14', '1', '1234567890', '3', 'B-05', 'DIARREA CRONICA'),
(2, '2010-05-11', '1', '1234567890', '1', 'A-09', 'REVISION MENSUAL'),
(3, '2010-06-17', '2', '1234567890', '2', 'B-06', 'dfsdf fgdfg'),
(4, '2010-07-18', '1', '0987654321', '3', 'D90', 'dfsdf fgdfg'),
(5, '2010-08-19', '1', '1234567890', '2', 'Z11', 'dfsdf fgdfg'),
(6, '0000-00-00', 'Aldo Gamaliel Estrada Tepec', '7471212313', 'Yobani Tepec', '03', 'Esta enfermo'),
(7, '0000-00-00', 'Aldo Gamaliel Estrada Tepec', '7471212313', 'yobani Tepec', '03', 'esta enfermo'),
(8, '0000-00-00', 'aldo Gamaliel Estrada Tepec', '7471212313', 'yobani Tepec', '03', 'Esta enfermo'),
(9, '0000-00-00', 'wd', '1232', 'sd', 'sd', 'sd'),
(10, '0000-00-00', 'wd', '1232', 'sd', '23', 'sd'),
(11, '0000-00-00', 'wd', '1232', 'sd', '23', 'sd'),
(12, '0000-00-00', 'ass', '1232', 'sd', '23', 'sd'),
(13, '0000-00-00', 'ass', '1232', 'sd', '23', 'sd'),
(14, '0000-00-00', 'Aldo Gamaliel Estrada Tepec', '7471212313', 'Yobani Tepec', '03', 'esta enfermo'),
(15, '0000-00-00', 'Aldo Gamaliel Estrada Tepec', '7471212313', 'Yobani Tepec', '03', 'esta enfermo'),
(16, '0000-00-00', 'wew', '45678', '', '', ''),
(17, '0000-00-00', 'wew', '45678', '', '', ''),
(18, '0000-00-00', 'wew', '45678', '', '', ''),
(19, '0000-00-00', 'aldo Gamaliel Estrada Tepec', '7471212313', 'yobani Tepec', '0', 'esta enfermo'),
(20, '0000-00-00', 'aldo Gamaliel Estrada Tepec', '7471212313', 'yobani Tepec', '0', 'esta enfermo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas_medicas`
--
ALTER TABLE `consultas_medicas`
  ADD PRIMARY KEY (`id_consulta`),
  ADD UNIQUE KEY `id_consulta` (`id_consulta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas_medicas`
--
ALTER TABLE `consultas_medicas`
  MODIFY `id_consulta` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
