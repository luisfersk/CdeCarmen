-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2020 a las 16:19:45
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mid_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_bin NOT NULL,
  `razonSocial` varchar(50) COLLATE latin1_bin NOT NULL,
  `servicio` varchar(50) COLLATE latin1_bin NOT NULL,
  `lugar` varchar(50) COLLATE latin1_bin NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `disponibilidad` varchar(50) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personanatural`
--

CREATE TABLE `personanatural` (
  `codigo` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `universidad` varchar(100) NOT NULL,
  `tipoIdentificacion` varchar(10) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_bin NOT NULL,
  `segundoNombre` varchar(50) COLLATE latin1_bin NOT NULL,
  `primerApellido` varchar(50) COLLATE latin1_bin NOT NULL,
  `segundoApellido` varchar(50) COLLATE latin1_bin NOT NULL,
  `tipoIdentificacion` varchar(10) COLLATE latin1_bin NOT NULL,
  `disponibilidad` varchar(50) COLLATE latin1_bin NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personanatural`
--
ALTER TABLE `personanatural`
  ADD PRIMARY KEY (`identificacion`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
