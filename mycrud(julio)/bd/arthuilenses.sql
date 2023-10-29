-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2023 a las 21:20:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `artistas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arthuilenses`
--

CREATE TABLE `arthuilenses` (
  `IdArtistas` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Cat` int(14) NOT NULL,
  `FechaN` int(10) NOT NULL,
  `FechaDifuncion` int(10) NOT NULL,
  `reconocimientos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arthuilenses`
--
ALTER TABLE `arthuilenses`
  ADD PRIMARY KEY (`IdArtistas`),
  ADD KEY `Cat` (`Cat`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arthuilenses`
--
ALTER TABLE `arthuilenses`
  MODIFY `IdArtistas` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arthuilenses`
--
ALTER TABLE `arthuilenses`
  ADD CONSTRAINT `arthuilenses_ibfk_1` FOREIGN KEY (`Cat`) REFERENCES `categorias` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
