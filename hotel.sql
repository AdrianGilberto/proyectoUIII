-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 01:02:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(20) NOT NULL,
  `Habitacion` varchar(30) NOT NULL,
  `Alimentos_bebidas` varchar(30) NOT NULL,
  `Recursos_humanos` varchar(30) NOT NULL,
  `Marketing` varchar(30) NOT NULL,
  `Contabilidad` varchar(30) NOT NULL,
  `Recepcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `Habitacion`, `Alimentos_bebidas`, `Recursos_humanos`, `Marketing`, `Contabilidad`, `Recepcion`) VALUES
(1, 'Julio', 'Marcelo', 'Mariana', 'Sheccid', 'Paola', 'Uriel'),
(2, 'Julio', 'Marcelo', 'Hugo', 'Sheccid', 'Paola', 'Tadeo'),
(3, 'Julio', 'Marcelo', 'Hugo', 'Carlos', 'Paola', 'Uriel'),
(4, 'Victoria', 'Azael', 'Mariana', 'Carlos', 'Kenia', 'Tadeo'),
(5, 'Victoria', 'Azael', 'Mariana', 'Sheccid', 'Kenia', 'Uriel'),
(6, 'Victoria', 'Azael', 'Hugo', 'Carlos', 'Kenia', 'Tadeo'),
(7, 'Julio', 'Marcelo', 'Hugo', 'Sheccid', 'Paola', 'Uriel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(10) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `rfc` int(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `nombres`, `apellido_paterno`, `apellido_materno`, `rfc`, `direccion`, `telefono`) VALUES
(1, 'Adrian', 'Nuñez ', 'Sanchez', 123456789, 'Parajes #5859. #12', 656842654),
(2, 'Gilberto', 'Frausto', 'Soto', 987654321, 'Torres #6523. #56', 656216982),
(3, 'Cristiano', 'Ronaldo', 'Aveiro', 777777777, 'Madrid #3265. #7', 656325458),
(4, 'Cris', 'MG', 'OMG', 999999999, 'JuiceWrld #999', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huespedes`
--

CREATE TABLE `huespedes` (
  `id` int(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `correo_electronico` varchar(80) NOT NULL,
  `telefono` int(16) NOT NULL,
  `dias_hospedaje` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `huespedes`
--

INSERT INTO `huespedes` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo_electronico`, `telefono`, `dias_hospedaje`) VALUES
(2, 'Alfredo', 'Sanchez', 'Vega', 'fredysav@google.com', 2147483647, 5),
(3, 'Alan', 'Parra', 'Rios', 'alaparranose@gmail.com', 656215882, 4),
(4, 'Gerardo', 'Nagera', 'Suarez', 'geranata@outlook.com', 656214985, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `horaInicio` varchar(30) NOT NULL,
  `horaSalida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `rol`, `horaInicio`, `horaSalida`) VALUES
(2, 'Alfredo', 'Parra', 'Soto', 'Guardia entrada', '05:00am', '04:00pm'),
(3, 'Roberto', 'Duarte', 'Moreno', 'Guardia salida', '5:00am', '4:30pm'),
(4, 'Cesar', 'Roman', 'Clint', 'Conserje P1', '5:00am', '4:00pm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `huespedes`
--
ALTER TABLE `huespedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idempleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `huespedes`
--
ALTER TABLE `huespedes`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
