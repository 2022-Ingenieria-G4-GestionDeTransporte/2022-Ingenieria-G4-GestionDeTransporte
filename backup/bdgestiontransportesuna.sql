-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 01:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdgestiontransportesuna`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbchofer`
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
-- Dumping data for table `tbchofer`
--

INSERT INTO `tbchofer` (`tbchoferid`, `tbchofercedula`, `tbchofernombre`, `tbchoferlicenciavigente`, `tbchoferfechavencimientolicencia`, `tbchoferpassword`) VALUES
(1, '307890567', 'Manuel', 1, '2024-09-22', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbcurso`
--

CREATE TABLE `tbcurso` (
  `tbcursonrc` int(11) NOT NULL,
  `tbcursonombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbcursosgira`
--

CREATE TABLE `tbcursosgira` (
  `tbcursosgiraid` int(11) NOT NULL,
  `tbgiraid` int(11) NOT NULL,
  `tbcursonrc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbdestinogira`
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
-- Table structure for table `tbgira`
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
-- Dumping data for table `tbgira`
--

INSERT INTO `tbgira` (`tbgiraid`, `tbgiranombreencargado`, `tbgiraapellidoencargado`, `tbgiracedulaencargado`, `tbgirafechasolicitud`, `tbgiranombreacompanante`, `tbgiraapellidoacompanante`, `tbgiracedulaacompanante`, `tbgirafechagira`, `tbgirafechafin`, `tbgiracarrera`, `tbgiratipogira`, `tbgirarequierechofer`, `tbgiraobjetivo`, `tbgiraidchofer`, `tbgiraestado`) VALUES
(1, 'Carolina', 'Aguilar Solano', '407650677', '2022-10-09', 'Carlos', 'Hernandez Mora', '704560890', '2022-11-10', '2022-11-13', 'Turismo', 'Formativa', 1, 'Aprendizaje sobre el entorno', 1, 'Aprobada'),
(2, 'Omar', 'Fernandez Aguirre', '507890654', '2022-10-19', 'Julian', 'Herrera Jimenez', '403450678', '2022-11-05', '2022-11-08', 'Ingles', 'Educativa', 0, 'Explorar ingles de la zona', 2, 'Sin Revisar'),
(3, 'Maria', 'Gomez Pereira', '206780765', '2022-10-25', 'Roxana', 'Solis Carballo', '405670543', '2022-11-20', '2022-11-22', 'Ingles', 'Educativa', 1, 'Reforzar Idioma', 2, 'Denegada');

-- --------------------------------------------------------

--
-- Table structure for table `tbitinerariogira`
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
-- Table structure for table `tbparticipante`
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
-- Dumping data for table `tbparticipante`
--

INSERT INTO `tbparticipante` (`tbparticipanteid`, `tbparticipantecedula`, `tbparticipantenombre`, `tbparticipanteapellidos`, `tbparticipantecarrera`, `tbparticipanteinstitucion`, `tbparticipanteidgira`) VALUES
(1, '702880773', 'Kendall', 'Ortega Miranda', 'Ingeniería en Sistemas', 'UNA-SRHNC', 1),
(2, '702870369', 'Randy', 'Barrantes Pizarro', 'Ingeniería en Sistemas', 'UNA-SRHNC', 1),
(3, '702870525', 'Ever', 'Solano Castro', 'Ingeniería en Sistemas', 'UNA-SRHNC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbsolicitante`
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
-- Dumping data for table `tbsolicitante`
--

INSERT INTO `tbsolicitante` (`tbsolicitanteid`, `tbsolicitantecedula`, `tbsolicitantenombre`, `tbsolicitanteapellidos`, `tbsolicitantecorreo`, `tbsolicitantecargo`, `tbsolicitantelicenciavigente`, `tbsolicitantefechavencimientolicencia`, `tbsolicitantepassword`) VALUES
(1, '402320535', 'Derrek', 'Urena Solis', 'dere@hotmail.es', 'Funcionario', 1, '2022-12-28', '4870');

-- --------------------------------------------------------

--
-- Table structure for table `tbvehiculo`
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
-- Dumping data for table `tbvehiculo`
--

INSERT INTO `tbvehiculo` (`tbvehiculoid`, `tbvehiculomatricula`, `tbvehiculomarca`, `tbvehiculomodelo`, `tbvehiculotipo`, `tbvehiculoestado`, `tbvehiculonivelaceite`, `tbvehiculokilometraje`) VALUES
(1, 'CR-009', 'Nissan', '2019', 'PickUp', 100, '100', '130km'),
(2, 'CR-027', 'Toyota', '2016', 'PickUp', 90, '95', '160km');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbchofer`
--
ALTER TABLE `tbchofer`
  ADD PRIMARY KEY (`tbchoferid`);

--
-- Indexes for table `tbcurso`
--
ALTER TABLE `tbcurso`
  ADD PRIMARY KEY (`tbcursonrc`);

--
-- Indexes for table `tbcursosgira`
--
ALTER TABLE `tbcursosgira`
  ADD PRIMARY KEY (`tbcursosgiraid`),
  ADD KEY `FK_Gira_CursosGira` (`tbgiraid`),
  ADD KEY `FK_Cursos_CursosGira` (`tbcursonrc`);

--
-- Indexes for table `tbdestinogira`
--
ALTER TABLE `tbdestinogira`
  ADD PRIMARY KEY (`tbdestinogiraid`);

--
-- Indexes for table `tbgira`
--
ALTER TABLE `tbgira`
  ADD PRIMARY KEY (`tbgiraid`);

--
-- Indexes for table `tbitinerariogira`
--
ALTER TABLE `tbitinerariogira`
  ADD PRIMARY KEY (`tbitinerariogiraid`);

--
-- Indexes for table `tbparticipante`
--
ALTER TABLE `tbparticipante`
  ADD PRIMARY KEY (`tbparticipanteid`);

--
-- Indexes for table `tbsolicitante`
--
ALTER TABLE `tbsolicitante`
  ADD PRIMARY KEY (`tbsolicitanteid`);

--
-- Indexes for table `tbvehiculo`
--
ALTER TABLE `tbvehiculo`
  ADD PRIMARY KEY (`tbvehiculoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbdestinogira`
--
ALTER TABLE `tbdestinogira`
  MODIFY `tbdestinogiraid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbitinerariogira`
--
ALTER TABLE `tbitinerariogira`
  MODIFY `tbitinerariogiraid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbparticipante`
--
ALTER TABLE `tbparticipante`
  MODIFY `tbparticipanteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbcursosgira`
--
ALTER TABLE `tbcursosgira`
  ADD CONSTRAINT `FK_Cursos_CursosGira` FOREIGN KEY (`tbcursonrc`) REFERENCES `tbcurso` (`tbcursonrc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
