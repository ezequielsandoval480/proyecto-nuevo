-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-12-2020 a las 08:45:03
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carritonuevo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DetalleVenta`
--

CREATE TABLE `DetalleVenta` (
  `id` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `preciounitario` decimal(20,2) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `DetalleVenta`
--

INSERT INTO `DetalleVenta` (`id`, `idVenta`, `idProducto`, `preciounitario`, `Cantidad`) VALUES
(1, 91, 11, '4000.00', 1),
(2, 92, 11, '4000.00', 1),
(3, 93, 11, '4000.00', 1),
(4, 94, 1, '2000.00', 1),
(5, 95, 1, '2000.00', 1),
(6, 96, 1, '2000.00', 1),
(7, 97, 1, '2000.00', 1),
(8, 98, 1, '2000.00', 1),
(9, 99, 1, '2000.00', 1),
(10, 100, 1, '2000.00', 1),
(11, 101, 11, '4000.00', 1),
(12, 102, 11, '4000.00', 1),
(13, 103, 11, '4000.00', 1),
(14, 104, 11, '4000.00', 1),
(15, 105, 11, '4000.00', 1),
(16, 106, 11, '4000.00', 1),
(17, 107, 11, '4000.00', 1),
(18, 108, 11, '4000.00', 1),
(19, 109, 2, '2000.00', 1),
(20, 110, 2, '2000.00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `DetalleVenta`
--
ALTER TABLE `DetalleVenta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVenta` (`idVenta`),
  ADD KEY `idProducto` (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `DetalleVenta`
--
ALTER TABLE `DetalleVenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
