-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2016 a las 00:46:49
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `DOCUMENTO` int(11) NOT NULL,
  `NOMBRES` varchar(50) NOT NULL,
  `PRIMER_APELLIDO` varchar(20) NOT NULL,
  `SEGUNDO_APELLIDO` varchar(20) DEFAULT NULL,
  `TELEFONO` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `IMAGEN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`DOCUMENTO`, `NOMBRES`, `PRIMER_APELLIDO`, `SEGUNDO_APELLIDO`, `TELEFONO`, `EMAIL`, `IMAGEN`) VALUES
(2, 'Hugo Ferney', 'Otavo', 'Varon', '3217518540', 'hugo@gmail.com', '1922Cejas.PNG'),
(3, 'Milton', 'Otavo', 'Varon', '322321212', 'milton@gmail.com', '471616215_10203344202754048_8237009553896869607_n.jpg'),
(4, 'Nicol', 'Mesa', 'Rengifo', '4343434', 'f.f@gmail.com', '190813095909_10206077034593136_2877799362829434374_n.jpg'),
(5, 'Luz Miriam ', 'Varon', '', '3112002546', 'luz.varon@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_salon`
--

CREATE TABLE `profesor_salon` (
  `ID` int(11) NOT NULL,
  `ID_PROFESOR` int(11) NOT NULL,
  `ID_SALON` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor_salon`
--

INSERT INTO `profesor_salon` (`ID`, `ID_PROFESOR`, `ID_SALON`) VALUES
(19, 3, 3),
(22, 2, 2),
(23, 3, 2),
(24, 3, 4),
(25, 2, 3),
(26, 2, 4),
(27, 4, 2),
(29, 4, 4),
(31, 4, 3),
(32, 5, 2),
(33, 5, 3),
(34, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `ID_SALON` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `NUMERO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`ID_SALON`, `NOMBRE`, `NUMERO`) VALUES
(2, 'Salón Sociales', '0001'),
(3, 'Salón De Informática ', '0002'),
(4, 'Salon Ambiental', '0003');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`DOCUMENTO`);

--
-- Indices de la tabla `profesor_salon`
--
ALTER TABLE `profesor_salon`
  ADD PRIMARY KEY (`ID`,`ID_PROFESOR`,`ID_SALON`),
  ADD KEY `ID_SALON` (`ID_SALON`),
  ADD KEY `ID_PROFESOR` (`ID_PROFESOR`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`ID_SALON`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `DOCUMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `profesor_salon`
--
ALTER TABLE `profesor_salon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `ID_SALON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `profesor_salon`
--
ALTER TABLE `profesor_salon`
  ADD CONSTRAINT `FK_PROFESOR` FOREIGN KEY (`ID_PROFESOR`) REFERENCES `profesores` (`DOCUMENTO`),
  ADD CONSTRAINT `FK_SALON` FOREIGN KEY (`ID_SALON`) REFERENCES `salones` (`ID_SALON`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
