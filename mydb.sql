-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2016 a las 18:10:17
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `create_user`(IN `name` VARCHAR(50) CHARSET utf8, IN `email` VARCHAR(50) CHARSET utf8, IN `pass` VARCHAR(50) CHARSET utf8, IN `rol` VARCHAR(50) CHARSET utf8)
    NO SQL
INSERT INTO `usuarios`(`email`, `nombre`, `pass`, `rol`) VALUES (email,name,pass,rol)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_user`(IN `name` VARCHAR(50) CHARSET utf8, IN `email` VARCHAR(50) CHARSET utf8, IN `pass` VARCHAR(50) CHARSET utf8)
    NO SQL
INSERT INTO `usuarios`(`email`, `nombre`, `pass`) VALUES (email,name,pass)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE IF NOT EXISTS `anuncio` (
  `id_anuncio` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitud` int(11) NOT NULL,
  `latitud` int(11) NOT NULL,
  `Usuarios_id_user` int(11) NOT NULL DEFAULT '0',
  `Usuarios_id_user1` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id_anuncio`, `imagen`, `titulo`, `descripcion`, `longitud`, `latitud`, `Usuarios_id_user`, `Usuarios_id_user1`) VALUES
(1, 'url', 'titulo tituloso', 'Se vende el mejor coche del planeta tierra porque lo digo yo, Joseba de carglas :D', 123, 123, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
  `idjuegos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `idniveles` int(11) NOT NULL,
  `nivel` varchar(45) NOT NULL,
  `puntuacion` float DEFAULT NULL,
  `juegos_idjuegos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacion`
--

CREATE TABLE IF NOT EXISTS `poblacion` (
  `idpoblacion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'client'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `email`, `nombre`, `pass`, `rol`) VALUES
(1, 'prueba@gmail.com', 'prueba', '1234', 'admin'),
(2, 'prueba2@gmail.com', 'prueba2', '1234', 'client'),
(6, 'pepe2', 'antonio', '1234', 'user'),
(7, 'pepepe', 'pepe2', '1234', 'client'),
(8, 'entoÃ±ico @gmail.com', 'antonio josÃ©', '1234', 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `id_valoracion` int(11) NOT NULL,
  `Usuarios_id_user` int(11) NOT NULL,
  `Anuncio_id_anuncio` int(11) NOT NULL,
  `Anuncio_Usuarios_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id_anuncio`,`Usuarios_id_user`),
  ADD KEY `fk_Anuncio_Usuarios1_idx` (`Usuarios_id_user1`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`idjuegos`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`idniveles`),
  ADD KEY `fk_niveles_juegos1_idx` (`juegos_idjuegos`);

--
-- Indices de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  ADD PRIMARY KEY (`idpoblacion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `fk_Valoracion_Usuarios1_idx` (`Usuarios_id_user`),
  ADD KEY `fk_Valoracion_Anuncio1_idx` (`Anuncio_id_anuncio`,`Anuncio_Usuarios_id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idjuegos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `idniveles` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `poblacion`
--
ALTER TABLE `poblacion`
  MODIFY `idpoblacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `fk_Anuncio_Usuarios1` FOREIGN KEY (`Usuarios_id_user1`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD CONSTRAINT `fk_niveles_juegos1` FOREIGN KEY (`juegos_idjuegos`) REFERENCES `juegos` (`idjuegos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `fk_Valoracion_Anuncio1` FOREIGN KEY (`Anuncio_id_anuncio`, `Anuncio_Usuarios_id_user`) REFERENCES `anuncio` (`id_anuncio`, `Usuarios_id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Valoracion_Usuarios1` FOREIGN KEY (`Usuarios_id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
