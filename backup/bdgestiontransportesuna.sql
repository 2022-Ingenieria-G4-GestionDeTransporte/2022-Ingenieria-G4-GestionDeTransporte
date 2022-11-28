-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 08:58:46
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

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
  `tbchofernombre` text NOT NULL,
  `tbchoferlicenciavigente` tinyint(11) NOT NULL,
  `tbchoferfechavencimientolicencia` date NOT NULL,
  `tbchoferpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbchofer`
--

INSERT INTO `tbchofer` (`tbchoferid`, `tbchofercedula`, `tbchofernombre`, `tbchoferlicenciavigente`, `tbchoferfechavencimientolicencia`, `tbchoferpassword`) VALUES
(1, '307890567', 'Manuel', 1, '2024-09-22', '1234');

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
  `tbgirafechafin` date NOT NULL,
  `tbgiracarrera` text NOT NULL,
  `tbgiratipogira` text NOT NULL,
  `tbgirarequierechofer` tinyint(2) NOT NULL,
  `tbgiraobjetivo` text NOT NULL,
  `tbgiraidchofer` int(11) NOT NULL,
  `tbgiraestado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbgira`
--

INSERT INTO `tbgira` (`tbgiraid`, `tbgiranombreencargado`, `tbgiraapellidoencargado`, `tbgiracedulaencargado`, `tbgirafechasolicitud`, `tbgiranombreacompanante`, `tbgiraapellidoacompanante`, `tbgiracedulaacompanante`, `tbgirafechagira`, `tbgirafechafin`, `tbgiracarrera`, `tbgiratipogira`, `tbgirarequierechofer`, `tbgiraobjetivo`, `tbgiraidchofer`, `tbgiraestado`) VALUES
(1, 'Carolina', 'Aguilar Solano', '407650677', '2022-10-09', 'Carlos', 'Hernandez Mora', '704560890', '2022-11-10', '2022-11-13', 'Turismo', 'Formativa', 1, 'Aprendizaje sobre el entorno', 1, 'Aprobada'),
(2, 'Omar', 'Fernandez Aguirre', '507890654', '2022-10-19', 'Julian', 'Herrera Jimenez', '403450678', '2022-11-05', '2022-11-08', 'Ingles', 'Educativa', 0, 'Explorar ingles de la zona', 2, 'Sin Revisar'),
(3, 'Maria', 'Gomez Pereira', '206780765', '2022-10-25', 'Roxana', 'Solis Carballo', '405670543', '2022-11-20', '2022-11-22', 'Ingles', 'Educativa', 1, 'Reforzar Idioma', 2, 'Denegada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbitenerariochofer`
--

CREATE TABLE `tbitenerariochofer` (
  `tbitenerariochoferid` int(11) NOT NULL,
  `tbitenerariochoferlugar` text CHARACTER SET latin1 NOT NULL,
  `tbitenerariochoferfechallegada` datetime NOT NULL,
  `tbitenerariochoferfechasalida` datetime NOT NULL,
  `tbitenerariochoferobservaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbitenerariochofer`
--

INSERT INTO `tbitenerariochofer` (`tbitenerariochoferid`, `tbitenerariochoferlugar`, `tbitenerariochoferfechallegada`, `tbitenerariochoferfechasalida`, `tbitenerariochoferobservaciones`) VALUES
(1, 'Bosque Humedo', '2022-11-28 06:30:00', '2022-11-28 22:00:00', 'Calles despejadas');

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
  `tbparticipantecedula` varchar(18) NOT NULL,
  `tbparticipantenombre` varchar(100) NOT NULL,
  `tbparticipanteapellidos` varchar(20) NOT NULL,
  `tbparticipantecarrera` varchar(200) NOT NULL,
  `tbparticipanteinstitucion` varchar(250) NOT NULL,
  `tbparticipanteidgira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbparticipante`
--

INSERT INTO `tbparticipante` (`tbparticipanteid`, `tbparticipantecedula`, `tbparticipantenombre`, `tbparticipanteapellidos`, `tbparticipantecarrera`, `tbparticipanteinstitucion`, `tbparticipanteidgira`) VALUES
(1, '702880773', 'Kendall', 'Ortega Miranda', 'Ingeniería en Sistemas', 'UNA-SRHNC', 1),
(2, '702870369', 'Randy', 'Barrantes Pizarro', 'Ingeniería en Sistemas', 'UNA-SRHNC', 1),
(3, '702870525', 'Ever', 'Solano Castro', 'Ingeniería en Sistemas', 'UNA-SRHNC', 1);

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
  `tbsolicitantelicenciavigente` tinyint(11) NOT NULL,
  `tbsolicitantefechavencimientolicencia` date NOT NULL,
  `tbsolicitantepassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbsolicitante`
--

INSERT INTO `tbsolicitante` (`tbsolicitanteid`, `tbsolicitantecedula`, `tbsolicitantenombre`, `tbsolicitanteapellidos`, `tbsolicitantecorreo`, `tbsolicitantecargo`, `tbsolicitantelicenciavigente`, `tbsolicitantefechavencimientolicencia`, `tbsolicitantepassword`) VALUES
(1, '402320535', 'Derrek', 'Urena Solis', 'dere@hotmail.es', 'Funcionario', 1, '2022-12-28', '4870');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbvehiculo`
--

CREATE TABLE `tbvehiculo` (
  `tbvehiculoid` int(11) NOT NULL,
  `tbvehiculomatricula` varchar(8) NOT NULL,
  `tbvehiculomarca` text NOT NULL,
  `tbvehiculomodelo` text NOT NULL,
  `tbvehiculotipo` varchar(50) NOT NULL,
  `tbvehiculoestado` int(11) NOT NULL,
  `tbvehiculonivelaceite` varchar(20) NOT NULL,
  `tbvehiculokilometraje` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbvehiculo`
--

INSERT INTO `tbvehiculo` (`tbvehiculoid`, `tbvehiculomatricula`, `tbvehiculomarca`, `tbvehiculomodelo`, `tbvehiculotipo`, `tbvehiculoestado`, `tbvehiculonivelaceite`, `tbvehiculokilometraje`) VALUES
(1, 'CR-009', 'Nissan', '2019', 'PickUp', 100, '100', '130km'),
(2, 'CR-027', 'Toyota', '2016', 'PickUp', 90, '95', '160km');

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
-- Indices de la tabla `tbitenerariochofer`
--
ALTER TABLE `tbitenerariochofer`
  ADD PRIMARY KEY (`tbitenerariochoferid`);

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
  MODIFY `tbparticipanteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
