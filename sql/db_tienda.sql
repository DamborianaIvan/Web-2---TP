-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 05:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8
=======
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2020 a las 18:04:06
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8
>>>>>>> 800a1fd77f365f99408b287cf8b5f3d432595102

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `nombre_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nombre_cat`) VALUES
(1, 'Remera'),
<<<<<<< HEAD
(15, 'Camisa'),
(16, 'Pantalon');
=======
(2, 'Pantalon'),
(3, 'Medias'),
(4, 'Guantes'),
(5, 'Camisa'),
(8, 'Gorras');
>>>>>>> 800a1fd77f365f99408b287cf8b5f3d432595102

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_prod` varchar(50) NOT NULL,
  `precio_prod` double NOT NULL,
  `descripcion_prod` varchar(140) NOT NULL,
  `estado_prod` varchar(10) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_prod`, `precio_prod`, `descripcion_prod`, `estado_prod`, `id_categoria`) VALUES
<<<<<<< HEAD
(22, 'Camiseta', 230, 'Camiseta Roja', 'Normal', 1),
(23, 'Remera', 200, 'Remera con el estampado del equipo de futbol River', 'Oferta', 1),
(24, 'Pantalon Futbol', 150, 'Pantalon con escudo de equipos de futbol', 'Normal', 16),
(25, 'Pantalon Mujer', 230, 'Pantalon estampado flores, comodidades perfectas.', 'Ofert', 16),
(26, 'Remera', 142, 'Remera de equipo de rugby, ideal para epocas de invierno.', 'Oferta', 1),
(27, 'Camisa', 400, 'Camisa a cuadros especial para fiestas.', 'Normal', 15);
=======
(18, 'Remera Futbol', 120, 'Remera de el equipo de Boca Juniors', 'Normal', 1),
(19, 'Remera de River Plate ', 110, 'Nueva Camiseta De River Plate', 'Normal', 1),
(20, 'Pantalon Futbol', 130, 'Pantalon de Boca Juniors', 'Oferta', 2),
(21, 'Pantalon blanco', 600, 'Pantalon blanco deportivo', 'Normal', 2),
(22, 'Camisa Levis', 700, 'Camisa a cuadros ', 'Normal', 5),
(23, 'Guantes ', 350, 'Guantes para el frio polar', 'Oferta', 4),
(24, 'Gorra Nike', 550, 'Gorra Nike negra con dibujo', 'Oferta', 8),
(25, 'Medias', 250, 'Medias Adidas blancas', 'Oferta', 3),
(26, 'Camisa ', 650, 'Camisa de flores', 'Normal', 5);
>>>>>>> 800a1fd77f365f99408b287cf8b5f3d432595102

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(50) NOT NULL,
  `password_user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre_user`, `password_user`) VALUES
(1, 'admin', '$2y$10$iZHJhbij4E.G.xqY1OB/FeJCI31xe/MQpt2dTb8EQvFKtW3MkZ6ge');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `index_Categoria` (`id_categoria`),
  ADD KEY `id_producto` (`id_producto`) USING BTREE;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
<<<<<<< HEAD
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
=======
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> 800a1fd77f365f99408b287cf8b5f3d432595102

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
<<<<<<< HEAD
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
=======
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
>>>>>>> 800a1fd77f365f99408b287cf8b5f3d432595102

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
