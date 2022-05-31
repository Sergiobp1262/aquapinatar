-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2021 a las 19:31:59
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuentes`
--

CREATE TABLE `fuentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `ficha` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fuentes`
--

INSERT INTO `fuentes` (`id`, `nombre`, `descripcion`, `imagen`, `ficha`) VALUES
(1, 'Fuente Luxe', '-Capacidad del depósito de agua fría: 3\'5 Litros.\r\n-Capacidad del depósito de agua caliente: 2 Litros.\r\n-Acabado lujo en gris efecto perla.\r\n-Producción 10-12 Litros/hora.', '1637922575_luxe.jpg', '1639396077_1.pdf'),
(2, 'Mini-Office', ' -Capacidad del depósito del agua fría: 2 Litros. \r\n-Capacidad del depósito de agua caliente: 3 Litros. \r\n-Producción: 8 Litros/hora.', '1638180949_officemini.jpg', '1639408479_4.pdf'),
(3, 'Office grey 5,5L', '-Capacidad del depósito de agua fría: 2 Litros.\r\n-Capacidad del depósito de agua caliente: 1,5 Litros.\r\n-Capacidad del depósito de reserva: 2 Litros.\r\n-Producción: 8 Litros/hora.', '1638380969_officegrey8.jpg', '1639408590_7.pdf'),
(5, 'Palma', '-Capacidad del depósito de agua fría: 5 Litros.\r\n-Capacidad del depósito de agua caliente: 3 Litros.\r\n-Capacidad del depósito de reserva: 7 Litros.\r\n-Producción: 12 Litros/hora.', '1638381093_palma15.jpg', '1639408664_6.pdf'),
(6, 'Office Plus', ' -Capacidad del depósito de agua fría: 5 Litros. -Capacidad del depósito de agua caliente: 3 Litros. -Capacidad del depósito de agua natural/reserva: 15 Litros. -Producción: 15 Litros/hora.', '1638381119_officeplus23.jpg', '1639408127_5.pdf'),
(12, 'Office grey 8L', '-Capacidad del depósito de agua fría: 3,5 Litros.\r\n-Capacidad del depósito de agua caliente: 2 Litros.\r\n-Capacidad del depósito de reserva: 2,5 Litros.\r\n-Producción: 10-12 Litros/hora.', '1639408798_officegrey8.jpg', '1639408798_8.pdf'),
(13, 'Office 14L 3 Temperaturas', '-Capacidad del depósito de agua fría: 4 Litros.\r\n-Capacidad del depósito de agua caliente: 2 Litros.\r\n-Capacidad del depósito de agua natural/reserva: 8 Litros.\r\n-Producción: 12 Litros/hora.', '1639408922_office14l3.jpg', '1639408922_3.pdf'),
(14, 'Office 14L', '-Capacidad del depósito de agua fría: 4 Litros.\r\n-Capacidad del depósito de agua caliente: 2 Litros.\r\n-Capacidad del depósito de agua natural/reserva: 8 Litros.\r\n-Producción: 12 Litros/hora.', '1639409027_office14l.jpg', '1639409027_2.pdf'),
(15, 'Equipo Industrial', '-2 bombas de 15 l./min.\r\n-Producción Directa (1 l./min.) o con depósito adicional.\r\n-Producción: 1400 Litros/día.', '1639409092_industrial.jpg', '1639409092_9.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fuentes`
--
ALTER TABLE `fuentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fuentes`
--
ALTER TABLE `fuentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
