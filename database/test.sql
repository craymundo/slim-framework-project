-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-04-2021 a las 03:38:00
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
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `documentNumber` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`id`, `documentNumber`, `name`, `last_name`, `create_at`) VALUES
(1, '44915961', 'Cesar', 'Alvarado', '2021-04-25 04:30:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `description` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `description`, `status`) VALUES
(1, 'Ejecutivo Banca Persona', 1),
(2, 'Ejecutivo Empresa(Pyme)', 1),
(3, 'Ejecutivo Normalización', 1),
(4, 'Ejecutivo DFC', 1),
(5, 'Créditos Hipotecarios', 1),
(6, 'Ejecutivo de Inversiones', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `operation`
--

INSERT INTO `operation` (`id`, `customer_id`, `menu_id`, `create_at`) VALUES
(1, 1, 1, '2021-04-25 04:37:46'),
(2, 1, 2, '2021-04-25 04:37:46'),
(3, 1, 1, '2021-04-25 04:37:53'),
(4, 1, 1, '2021-04-25 04:38:50'),
(5, 1, 4, '2021-04-25 04:38:50'),
(6, 1, 4, '2021-04-25 17:07:51'),
(7, 1, 3, '2021-04-26 09:56:43'),
(8, 1, 5, '2021-04-26 09:56:43'),
(9, 1, 6, '2021-04-26 09:56:51'),
(10, 1, 6, '2021-04-26 09:56:51'),
(11, 1, 1, '2021-04-27 00:06:24'),
(12, 1, 1, '2021-04-27 00:06:24'),
(13, 1, 1, '2021-04-27 00:09:05'),
(14, 1, 1, '2021-04-27 00:09:05'),
(15, 1, 1, '2021-04-27 00:10:02'),
(16, 1, 1, '2021-04-27 00:10:02'),
(17, 1, 1, '2021-04-27 00:11:51'),
(18, 1, 1, '2021-04-27 00:11:51'),
(19, 1, 3, '2021-04-27 00:14:55'),
(20, 1, 3, '2021-04-27 00:14:55'),
(21, 1, 2, '2021-04-27 00:19:44'),
(22, 1, 2, '2021-04-27 00:19:44'),
(23, 1, 6, '2021-04-27 00:20:41'),
(24, 1, 6, '2021-04-27 00:20:41'),
(25, 1, 6, '2021-04-27 00:21:42'),
(26, 1, 6, '2021-04-27 00:21:42'),
(27, 1, 4, '2021-04-27 00:27:33'),
(28, 1, 4, '2021-04-27 00:27:33'),
(29, 1, 5, '2021-04-27 00:31:12'),
(30, 1, 5, '2021-04-27 00:31:12'),
(31, 1, 4, '2021-04-27 00:35:41'),
(32, 1, 4, '2021-04-27 00:35:41'),
(33, 1, 5, '2021-04-27 00:40:24'),
(34, 1, 5, '2021-04-27 00:40:24'),
(35, 1, 3, '2021-04-27 00:44:42'),
(36, 1, 3, '2021-04-27 00:44:42'),
(37, 1, 3, '2021-04-27 00:46:51'),
(38, 1, 3, '2021-04-27 00:46:51'),
(39, 1, 4, '2021-04-27 00:47:52'),
(40, 1, 4, '2021-04-27 00:47:52'),
(41, 1, 4, '2021-04-27 00:50:10'),
(42, 1, 4, '2021-04-27 00:50:10'),
(43, 1, 3, '2021-04-27 00:55:59'),
(44, 1, 3, '2021-04-27 00:55:59'),
(45, 1, 1, '2021-04-27 01:35:48'),
(46, 1, 1, '2021-04-27 01:35:48'),
(47, 1, 3, '2021-04-27 01:35:55'),
(48, 1, 3, '2021-04-27 01:35:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `name`, `last_name`, `create_at`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Cesar', 'Alvarado', '2021-04-25 04:28:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_menu` (`customer_id`,`menu_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
