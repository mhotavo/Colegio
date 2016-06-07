-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2016 a las 16:54:11
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



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
(6, 'Milton Hernando ', 'Otavo', 'Varon', '3112002546', 'milton.otavo@gmail.com', '1007FotoFondoAzul.png');

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
(36, 6, 3),
(37, 6, 4);

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
(4, 'Salón Ambiental', '0003'),
(5, 'Salón De Música ', '0004');

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
  MODIFY `DOCUMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `profesor_salon`
--
ALTER TABLE `profesor_salon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `ID_SALON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `profesor_salon`
--
ALTER TABLE `profesor_salon`
  ADD CONSTRAINT `FK_PROFESOR` FOREIGN KEY (`ID_PROFESOR`) REFERENCES `profesores` (`DOCUMENTO`),
  ADD CONSTRAINT `FK_SALON` FOREIGN KEY (`ID_SALON`) REFERENCES `salones` (`ID_SALON`);

