-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2016 a las 17:20:34
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quizbomba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa`
--

CREATE TABLE `alternativa` (
  `idalternativa` int(11) NOT NULL,
  `idpregunta` int(11) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `correcta` char(1) DEFAULT 'N',
  `estado` char(45) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idpregunta` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`idpregunta`, `descripcion`, `estado`) VALUES
(1, 'Descubrimiento de America', 'I'),
(2, 'sjkdsad', 'I'),
(3, '2+2', 'I'),
(4, '5+5', 'I'),
(5, '---------    4+4', 'I'),
(6, 'asdsad', 'I'),
(7, 'ajkdkhaksd', 'I'),
(8, 'sczsc', 'I'),
(9, 'h', 'I'),
(10, 'sfsf', 'I'),
(11, 'hola en ingles', 'I'),
(12, 'sada', 'I'),
(13, '', 'I'),
(14, 'sdaas', 'I'),
(15, 'sdasd', 'I'),
(16, 'WA', 'I'),
(17, '', 'I'),
(18, '', 'I'),
(19, '', 'I'),
(20, 'sdas', 'I'),
(21, 'p1', 'I'),
(22, '', 'I'),
(23, '', 'I'),
(24, '', 'I'),
(25, '', 'I'),
(26, 'asdas', 'I'),
(27, 'asd', 'I'),
(28, '', 'I'),
(29, '', 'I'),
(30, '', 'I'),
(31, '23', 'I'),
(32, '', 'I'),
(33, '', 'I'),
(34, 'sad', 'I'),
(35, '', 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `idusuario` int(11) NOT NULL,
  `puntaje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`idusuario`, `puntaje`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT 'A',
  `cargo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `login`, `clave`, `estado`, `cargo`) VALUES
(1, 'admin', 'admin', 'A', 'A'),
(2, 'admin', '123', 'I', 'U'),
(3, 'peru', '12', 'I', 'U'),
(4, 'pedro', '123', 'A', 'U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`idalternativa`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idpregunta`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `idalternativa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idpregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
