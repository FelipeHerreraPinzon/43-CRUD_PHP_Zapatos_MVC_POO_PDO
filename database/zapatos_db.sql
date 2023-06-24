-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 15:35:39
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapatos_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilo`
--

CREATE TABLE `estilo` (
  `id_estilo` int(11) NOT NULL,
  `estilo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estilo`
--

INSERT INTO `estilo` (`id_estilo`, `estilo`) VALUES
(1, 'casual'),
(2, 'deportivo'),
(3, 'formal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Unisex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `id_talla` int(11) NOT NULL,
  `talla` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`id_talla`, `talla`) VALUES
(1, '8'),
(2, '9'),
(3, '10'),
(4, '11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapato`
--

CREATE TABLE `zapato` (
  `id_zapato` int(11) NOT NULL,
  `precio` decimal(18,2) NOT NULL,
  `color` varchar(45) NOT NULL,
  `id_estilo` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_talla` int(11) NOT NULL,
  `cantidad` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zapato`
--

INSERT INTO `zapato` (`id_zapato`, `precio`, `color`, `id_estilo`, `id_genero`, `id_talla`, `cantidad`) VALUES
(1, '20.00', 'VERDE', 1, 1, 1, '45'),
(2, '35.23', 'Rosado', 2, 2, 2, '45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estilo`
--
ALTER TABLE `estilo`
  ADD PRIMARY KEY (`id_estilo`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`id_talla`);

--
-- Indices de la tabla `zapato`
--
ALTER TABLE `zapato`
  ADD PRIMARY KEY (`id_zapato`),
  ADD KEY `id_estilo` (`id_estilo`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_talla` (`id_talla`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estilo`
--
ALTER TABLE `estilo`
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `zapato`
--
ALTER TABLE `zapato`
  MODIFY `id_zapato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `zapato`
--
ALTER TABLE `zapato`
  ADD CONSTRAINT `zapato_ibfk_1` FOREIGN KEY (`id_talla`) REFERENCES `talla` (`id_talla`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_3` FOREIGN KEY (`id_estilo`) REFERENCES `estilo` (`id_estilo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
