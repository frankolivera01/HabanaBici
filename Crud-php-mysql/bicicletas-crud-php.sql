-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2023 a las 05:29:03
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bicicletas-crud-php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicicletas`
--

CREATE TABLE `bicicletas` (
  `Numero Inventario` int(20) NOT NULL,
  `Codigo Cliente` varchar(20) NOT NULL,
  `Nombre Cliente` varchar(20) NOT NULL,
  `Hora Inicio` time(6) NOT NULL,
  `Hora Finalizada` time(6) NOT NULL,
  `Fabricante` varchar(20) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Año de Servicio` year(4) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla de Datos General';

--
-- Volcado de datos para la tabla `bicicletas`
--

INSERT INTO `bicicletas` (`Numero Inventario`, `Codigo Cliente`, `Nombre Cliente`, `Hora Inicio`, `Hora Finalizada`, `Fabricante`, `Marca`, `Año de Servicio`, `Estado`) VALUES
(1, '01071641422', 'Rafael Almora Alvare', '08:20:00.000000', '15:00:00.000000', 'china', 'china', 2023, 'Disponible'),
(2, '01032948463', 'Pablo Jose Sago Serr', '09:00:00.000000', '17:00:00.000000', 'china', 'china', 2023, 'Disponible'),
(3, '01033067682', 'Frank Miguel Olivera', '10:00:00.000000', '16:00:00.000000', 'china', 'china', 2020, 'Disponible'),
(4, '01022667681', 'Adrian Perez Bravo', '12:00:00.000000', '16:00:00.000000', 'china', 'china', 2021, 'Disponible');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bicicletas`
--
ALTER TABLE `bicicletas`
  ADD PRIMARY KEY (`Numero Inventario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bicicletas`
--
ALTER TABLE `bicicletas`
  MODIFY `Numero Inventario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
