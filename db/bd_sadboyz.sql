-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 20:35:11
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sadboyz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(10) NOT NULL,
  `nom_articulo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `id_sucursal` int(10) NOT NULL,
  `id_marca` int(10) NOT NULL,
  `tip_art` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nom_articulo`, `descripcion`, `talla`, `id_sucursal`, `id_marca`, `tip_art`, `precio`) VALUES
(2, 'Gorra simple', 'Gorra negra simple', 'Uni', 2, 2, 'Gorra', '380.00'),
(4, 'Pantalon simple', 'Pantalon muy comodo para hombres', 'G', 1, 1, 'Pantalon', '866.00'),
(5, 'playera', 'playera holgada ', 'G', 3, 1, 'Playera', '250.00'),
(6, 'Shorts', 'Shorts a blanco y negro', 'S', 1, 4, 'Shorts', '400.00'),
(7, 'Playera tumbada', 'Playera holgada con un diseno tumbado ', 's', 1, 2, 'Playera', '400.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(10) NOT NULL,
  `nom_marca` varchar(100) NOT NULL,
  `contrato_exp` datetime NOT NULL,
  `precio_contrato` decimal(10,2) NOT NULL,
  `cant_prod_tiendas` int(100) NOT NULL,
  `vision` varchar(200) NOT NULL,
  `total_ventas` int(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nom_marca`, `contrato_exp`, `precio_contrato`, `cant_prod_tiendas`, `vision`, `total_ventas`, `estado`) VALUES
(1, 'Nike', '2023-11-24 01:08:00', '80000.00', 65, 'La vision de nuestra marca es hacer que las personas que la usen se sientas comodas y con estilo', 67, 'Disponible'),
(2, 'Puma', '2023-11-29 11:43:45', '38100.00', 43, 'Llevar nuestros productos a la mayor cantidad de gente para hacer un cambio', 59, 'Disponible'),
(4, 'Sadboyz', '2024-12-16 12:30:00', '40000.00', 500, 'Nuestra vision es comprometernos con la calidad de tela que utilizamos para cada prenda que usa el individuo', 600, 'Fuera de Stock');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(10) NOT NULL,
  `nom_sucursal` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `num_exterior` int(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `id_empleado` int(10) NOT NULL,
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `nom_sucursal`, `ciudad`, `calle`, `num_exterior`, `telefono`, `id_empleado`, `gmail`) VALUES
(1, 'Sad Boyz', 'Ciudad Juarez', 'Uva', 5435, '656 893 2312', 7, 'sadboyz@gmail.com'),
(4, 'Sadboyz chamizal', 'juarez', 'Tecnologico', 1523, '656-963-96-96', 2, 'sadChami@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
