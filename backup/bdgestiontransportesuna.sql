-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 00:15:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdgestiontransportesuna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbchofer`
--

CREATE TABLE `tbchofer` (
  `tbchoferid` int(11) NOT NULL,
  `tbchofercedula` varchar(15) NOT NULL,
  `tbchoferanombre` text NOT NULL,
  `tbchoferlicenciavigente` int(11) NOT NULL,
  `tbchoferfechavencimientolicencia` date NOT NULL,
  `tbchoferpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsolicitante`
--

CREATE TABLE `tbsolicitante` (
  `tbsolicitanteid` int(11) NOT NULL,
  `tbsolicitantecedula` varchar(20) NOT NULL,
  `tbsolicitantenombre` text NOT NULL,
  `tbsolicitanteapellidos` text NOT NULL,
  `tbsolicitantecorreo` text NOT NULL,
  `tbsolicitantecargo` text NOT NULL,
  `tbsolicitantelicenciavigente` int(11) NOT NULL,
  `tbsolicitantefechavencimientolicencia` date NOT NULL,
  `tbsolicitantepassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbvehiculo`
--

CREATE TABLE `tbvehiculo` (
  `tbvehiculoid` int(11) NOT NULL,
  `tbvehiculomatricula` varchar(8) NOT NULL,
  `tbvehiculomodelo` text NOT NULL,
  `tbvehiculotipo` varchar(50) NOT NULL,
  `tbvehiculoestado` int(11) NOT NULL,
  `tbvehiculonivelaceite` varchar(20) NOT NULL,
  `tbvehiculokilometraje` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbchofer`
--
ALTER TABLE `tbchofer`
  ADD PRIMARY KEY (`tbchoferid`);

--
-- Indices de la tabla `tbsolicitante`
--
ALTER TABLE `tbsolicitante`
  ADD PRIMARY KEY (`tbsolicitanteid`);

--
-- Indices de la tabla `tbvehiculo`
--
ALTER TABLE `tbvehiculo`
  ADD PRIMARY KEY (`tbvehiculoid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
