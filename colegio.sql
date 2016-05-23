-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2016 a las 23:59:33
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
(2, 'Hugo Ferney', 'Otavo', 'Varon', '3217518540', 'hugo@gmail.com', '524113095909_10206077034593136_2877799362829434374_n.jpg'),
(3, 'Milton', 'Otavo', 'Varón', '322321212', 'milton@gmail.com', '471616215_10203344202754048_8237009553896869607_n.jpg');

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
(1, 2, 2);

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
(2, 'Salón', '1'),
(3, 'Salón De Informática ', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` bigint(255) NOT NULL,
  `DOC` int(20) NOT NULL,
  `USER` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRES` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `P_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `S_APELLIDO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `KEYPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NEWPASS` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ULTIMA_CONEXION` int(32) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `DOC`, `USER`, `PASS`, `EMAIL`, `NOMBRES`, `P_APELLIDO`, `S_APELLIDO`, `KEYPASS`, `NEWPASS`, `ULTIMA_CONEXION`) VALUES
(1, 1110540682, 'admin', 'd9529dbe59fa02092ee87e645ab6a516', 'milton.otavo@gmail.com', 'MILTON', 'OTAVO', 'VARON', '573e5feb61b20121114c322b050f0dfd', '9699F73A', 0);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `DOCUMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `profesor_salon`
--
ALTER TABLE `profesor_salon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `ID_SALON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
