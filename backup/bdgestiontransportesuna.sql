-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2022 a las 00:22:03
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

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
-- Estructura de tabla para la tabla `tbcurso`
--

CREATE TABLE `tbcurso` (
  `tbcursonrc` int(11) NOT NULL,
  `tbcursonombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcursosgira`
--

CREATE TABLE `tbcursosgira` (
  `tbcursosgiraid` int(11) NOT NULL,
  `tbgiraid` int(11) NOT NULL,
  `tbcursonrc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdestinogira`
--

CREATE TABLE `tbdestinogira` (
  `tbdestinogiraid` int(11) NOT NULL,
  `tbdestinogiraprovincia` varchar(100) NOT NULL,
  `tbdestinogiracanton` varchar(100) NOT NULL,
  `tbdestinogiradistrito` varchar(100) NOT NULL,
  `tbdestinogirahospedaje` varchar(100) NOT NULL,
  `tbdestinogirasalida` time NOT NULL,
  `tbdestinogirallegada` time NOT NULL,
  `tbdestinogiraidgira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgira`
--

CREATE TABLE `tbgira` (
  `tbgiraid` int(11) NOT NULL,
  `tbgiranombreencargado` text NOT NULL,
  `tbgiraapellidoencargado` text NOT NULL,
  `tbgiracedulaencargado` varchar(20) NOT NULL,
  `tbgirafechasolicitud` date NOT NULL,
  `tbgiranombreacompanante` text NOT NULL,
  `tbgiraapellidoacompanante` text NOT NULL,
  `tbgiracedulaacompanante` varchar(20) NOT NULL,
  `tbgirafechagira` date NOT NULL,
  `tbgiracarrera` text NOT NULL,
  `tbgiratipogira` text NOT NULL,
  `tbgirarequierechofer` tinyint(2) NOT NULL,
  `tbgiraobjetivo` text NOT NULL,
  `tbgiraidchofer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbitinerariogira`
--

CREATE TABLE `tbitinerariogira` (
  `tbitinerariogiraid` int(11) NOT NULL,
  `tbitinerariogirafecha` date NOT NULL,
  `tbitinerariogiraactividad` varchar(300) NOT NULL,
  `tbitinerariogirahorainicio` time NOT NULL,
  `tbitinerariogirahorafinalizacion` time NOT NULL,
  `tbitinerariogiraidgira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbparticipante`
--

CREATE TABLE `tbparticipante` (
  `tbparticipanteid` int(11) NOT NULL,
  `tbparticipantenombre` varchar(100) NOT NULL,
  `tbparticipantecedula` varchar(20) NOT NULL,
  `tbparticipantecarrera` varchar(200) NOT NULL,
  `tbparticipanteinstitucion` varchar(250) NOT NULL,
  `tbparticipanteidgira` int(11) NOT NULL
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
-- Indices de la tabla `tbcurso`
--
ALTER TABLE `tbcurso`
  ADD PRIMARY KEY (`tbcursonrc`);

--
-- Indices de la tabla `tbcursosgira`
--
ALTER TABLE `tbcursosgira`
  ADD PRIMARY KEY (`tbcursosgiraid`),
  ADD KEY `FK_Gira_CursosGira` (`tbgiraid`),
  ADD KEY `FK_Cursos_CursosGira` (`tbcursonrc`);

--
-- Indices de la tabla `tbdestinogira`
--
ALTER TABLE `tbdestinogira`
  ADD PRIMARY KEY (`tbdestinogiraid`);

--
-- Indices de la tabla `tbgira`
--
ALTER TABLE `tbgira`
  ADD PRIMARY KEY (`tbgiraid`);

--
-- Indices de la tabla `tbitinerariogira`
--
ALTER TABLE `tbitinerariogira`
  ADD PRIMARY KEY (`tbitinerariogiraid`);

--
-- Indices de la tabla `tbparticipante`
--
ALTER TABLE `tbparticipante`
  ADD PRIMARY KEY (`tbparticipanteid`);

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

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbdestinogira`
--
ALTER TABLE `tbdestinogira`
  MODIFY `tbdestinogiraid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbitinerariogira`
--
ALTER TABLE `tbitinerariogira`
  MODIFY `tbitinerariogiraid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbparticipante`
--
ALTER TABLE `tbparticipante`
  MODIFY `tbparticipanteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcursosgira`
--
ALTER TABLE `tbcursosgira`
  ADD CONSTRAINT `FK_Cursos_CursosGira` FOREIGN KEY (`tbcursonrc`) REFERENCES `tbcurso` (`tbcursonrc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
