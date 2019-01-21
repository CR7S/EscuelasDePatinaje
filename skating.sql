-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2017 a las 01:34:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skating`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rendimiento`
--

CREATE TABLE `rendimiento` (
  `rend_id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `fecha` date DEFAULT NULL,
  `indice` float(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rendimiento`
--

INSERT INTO `rendimiento` (`rend_id`, `user_id`, `fecha`, `indice`) VALUES
(1, 1121919788, '2017-04-11', 2.00),
(2, 1121919788, '2017-04-11', 2.40),
(3, 1121919788, '2017-04-11', 1.40),
(4, 1121919788, '2017-04-12', 12.00),
(5, 2147483647, '2017-04-11', 13.00),
(6, 2147483647, '2017-04-11', 13.20),
(7, 1121919788, '2017-04-13', 7.80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(50) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `Birth_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_email`, `user_password`, `p_name`, `s_name`, `apellidos`, `Birth_Date`) VALUES
(1121919788, 'fratil62@hotmail.com', 'd8a8e5a3ddd36d6e2ee7feec97a2307b', 'Cristian', 'Ivan', 'Rey Orozco', '1995-01-11'),
(2147483647, 'cristian.rey@hotmail.com', '6865aeb3a9ed28f9a79ec454b259e5d0', 'asd', 'asd', 'ads', '1111-11-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rendimiento`
--
ALTER TABLE `rendimiento`
  ADD PRIMARY KEY (`rend_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rendimiento`
--
ALTER TABLE `rendimiento`
  MODIFY `rend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rendimiento`
--
ALTER TABLE `rendimiento`
  ADD CONSTRAINT `rendimiento_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
