-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 15:12:29
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

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
(1, 'remera'),
(2, 'pantalon '),
(4, 'gorras'),
(5, 'camisa'),
(6, 'ASD');

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
(18, 'Remera Futbol', 120, 'Remera de el equipo de Boca Juniors', 'Normal', 1),
(19, 'Remera Futbol', 120, 'Remera de el equipo de River Plate', 'Normal', 1),
(20, 'Pantalon Futbol', 130, 'Pantalon de Boca Juniors', 'Oferta', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(50) NOT NULL,
  `password_user` varchar(60) NOT NULL,
  `mail_user` varchar(40) NOT NULL,
  `prioridad_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre_user`, `password_user`, `mail_user`, `prioridad_user`) VALUES
(1, 'admin', '$2y$10$iZHJhbij4E.G.xqY1OB/FeJCI31xe/MQpt2dTb8EQvFKtW3MkZ6ge', 'admin@admin.com', 0),
(2, 'admin1', '$2y$10$OXsCgaaZkzCGI.O/XkShEOwNZius.NGLRwpF47bvjf0J3mN1CANI2', 'admin1@admin1.com', 0),
(13, 'luquitas', '$2y$10$cQhnR/mgZvQDF13vNjZFxuWP69TwSKSeJqs3IuxbJHSP5pnyMrtlq', 'claubibbo363@gmail.com', 0),
(14, 'ivan', '$2y$10$iZBXpEXQSS/hJvFTOEtmpuend4Fzr/sz.50hYl0sdeDUJYi2tStsG', 'claubibbo363@gmail.com', 1),
(15, 'javi', '$2y$10$Gt.n0XfY2bnrV4RHNkvGzuDyUptRW82TPPBtqScnXfm13bD2BRjkS', 'claubibbo363@gmail.com', 0),
(16, 'admin3', '$2y$10$DcZ7v1KMeuIxLtTR9/mDn.j7fVeIuxUYECXmkRtBBWK2isPSs5nI6', 'admin3@gmail.com', 1);

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
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
