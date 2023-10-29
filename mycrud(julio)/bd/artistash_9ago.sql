-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2023 a las 21:51:35
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

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
CREATE DATABASE IF NOT EXISTS `artistas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `artistas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `idArtista` bigint(11) NOT NULL,
  `nomArtista` varchar(60) NOT NULL,
  `idCategoria` tinyint(4) NOT NULL,
  `fechaNac` date NOT NULL,
  `FechaDefuncion` date DEFAULT NULL,
  `reconocimientos` text NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`idArtista`, `nomArtista`, `idCategoria`, `fechaNac`, `FechaDefuncion`, `reconocimientos`, `foto`) VALUES
(1000, 'Alejandro Perez', 3, '1983-08-24', '0000-00-00', 'Premio Nobel de Literatura, Premio Miguel de Cervantes.', 'aperez.jpg'),
(2000, 'Cielo Latini.', 3, '1983-08-31', '0000-00-00', 'Premio Asturias 2023', 'clatini.webp'),
(3000, 'Adolfo Suaza', 2, '1963-08-15', NULL, 'Premio Al mejor cuadro del mundo', 'asuaza.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` tinyint(4) NOT NULL,
  `nomCategoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nomCategoria`) VALUES
(1, 'Compositores'),
(2, 'Pintores'),
(3, 'Escritores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` bigint(20) NOT NULL,
  `nomUsuario` varchar(30) NOT NULL,
  `passUsuario` int(100) NOT NULL,
  `emailUsuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomUsuario`, `passUsuario`, `emailUsuario`) VALUES
(100, 'julio', 123, 'julitoelgrande@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`idArtista`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD CONSTRAINT `artistas_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
