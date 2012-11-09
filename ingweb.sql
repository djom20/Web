-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-06-2012 a las 20:01:09
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ingweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(2) NOT NULL,
  `entrada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salida` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id`, `id_usuario`, `entrada`, `salida`) VALUES
(1, 0, '2012-06-07 13:35:20', '2012-06-07 06:06:20'),
(2, 0, '2012-06-07 19:23:32', '2012-06-07 12:06:32'),
(3, 1, '2012-06-07 19:25:26', '2012-06-07 12:06:26'),
(4, 7, '2012-06-07 19:30:55', '2012-06-07 12:06:55'),
(5, 0, '2012-06-07 19:34:36', '2012-06-07 12:06:36'),
(6, 7, '2012-06-07 19:36:07', '2012-06-07 12:06:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1' COMMENT '0:: inactivo, 1::activo',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`, `estado`) VALUES
(1, 'Barranquilla', 0),
(2, 'Santa Marta', 0),
(3, 'Bogota', 1),
(4, 'Ibague', 0),
(5, 'Cartagena', 1),
(6, 'Bucaramanga', 0),
(7, 'Medellin', 0),
(8, 'Andes', 0),
(9, 'Armenia', 1),
(10, 'Barrancabermeja', 1),
(11, 'Buenos Aires', 1),
(12, 'Cordoba', 1),
(13, 'Cucuta', 0),
(14, 'Murillo', 0),
(15, 'Providencia', 0),
(16, 'Sabanalarga', 0),
(17, 'Tibu', 0),
(18, 'Transporte fluvial', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `sede` int(2) NOT NULL COMMENT 'ciudad.id',
  `admin` int(2) NOT NULL COMMENT 'id_usuario',
  `estado` int(2) NOT NULL DEFAULT '1' COMMENT '0:: inactivo, 1::activo',
  PRIMARY KEY (`id`),
  KEY `sede` (`sede`),
  KEY `nombre` (`nombre`),
  KEY `admin` (`admin`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `sede`, `admin`, `estado`) VALUES
(1, 'Marisol S.A', 1, 4, 1),
(2, 'Marisol S.A', 2, 5, 1),
(3, 'Brasilia S.A', 3, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(2) NOT NULL,
  `id_usuario` int(2) NOT NULL,
  `num_cuenta` int(2) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `num_cuenta_2` (`num_cuenta`),
  KEY `id_usuario` (`id_usuario`),
  KEY `num_cuenta` (`num_cuenta`),
  KEY `banco` (`banco`),
  KEY `fecha` (`fecha`),
  KEY `total` (`total`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_descripcion`
--

CREATE TABLE IF NOT EXISTS `pago_descripcion` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_pago` int(2) NOT NULL,
  `id_servicio` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pago` (`id_pago`),
  KEY `id_servicio` (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_tipo`
--

CREATE TABLE IF NOT EXISTS `pago_tipo` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE IF NOT EXISTS `ruta` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(2) NOT NULL,
  `origen` int(2) NOT NULL COMMENT 'id_ciudad',
  `destino` int(2) NOT NULL COMMENT 'id_ciudad',
  `inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estado` int(2) NOT NULL DEFAULT '1' COMMENT '0:: inactivo, 1::activo',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_servicio_2` (`id_servicio`,`origen`,`destino`,`inicio`,`fin`),
  KEY `id_servicio` (`id_servicio`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`id`, `id_servicio`, `origen`, `destino`, `inicio`, `fin`, `estado`) VALUES
(1, 1, 1, 3, '2012-05-10 16:19:36', '2012-05-10 21:00:00', 1),
(2, 2, 3, 4, '2012-05-11 02:31:19', '2012-05-10 11:00:00', 0),
(3, 1, 10, 11, '2012-06-05 09:06:12', '2012-06-05 09:06:12', 1),
(4, 1, 10, 11, '2012-06-05 09:06:33', '2012-06-05 09:06:33', 1),
(5, 2, 9, 10, '2012-06-05 09:06:34', '2012-06-05 09:06:34', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '1' COMMENT '0:: inactivo, 1::activo',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `id_usuario`, `nombre`, `precio`, `estado`) VALUES
(1, 3, 'Transporte Viajero', '50.000', 1),
(2, 2, 'Transporte Paquete', '20.000', 1),
(3, 4, 'Transporte fluvial', '5.000.000', 1),
(4, 4, 'Transporte aereo', '1.000.000', 1),
(7, 4, 'Transporte aereo2', '1.000.000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_descripcion`
--

CREATE TABLE IF NOT EXISTS `servicio_descripcion` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(2) NOT NULL,
  `cargamento` int(2) NOT NULL,
  `num_pasajeros` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_servicio` (`id_servicio`),
  KEY `cargamento` (`cargamento`),
  KEY `num_pasajeros` (`num_pasajeros`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `servicio_descripcion`
--

INSERT INTO `servicio_descripcion` (`id`, `id_servicio`, `cargamento`, `num_pasajeros`) VALUES
(1, 1, 0, 3),
(2, 2, 2, 0),
(3, 4, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(2) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `nombre2` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) NOT NULL,
  `apellido2` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `user` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `trabajo` int(2) NOT NULL COMMENT 'empresa.id',
  `online` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0:: offline, 1::online',
  `estado` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0::desactivado, 1::activado',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `celular` (`celular`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `nombre` (`nombre`,`apellido`),
  UNIQUE KEY `nombre_2` (`nombre`,`apellido`,`apellido2`),
  UNIQUE KEY `nombre_3` (`nombre`,`nombre2`,`apellido`,`apellido2`),
  KEY `online` (`online`),
  KEY `trabajo` (`trabajo`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `id_tipo`, `nombre`, `nombre2`, `apellido`, `apellido2`, `email`, `celular`, `user`, `pass`, `trabajo`, `online`, `estado`) VALUES
(0, 0, 'Jonathan', NULL, 'Olier', 'Miranda', 'djpcsilvernetjom20@hotmail.com', '3014442072', '834f1b45be33523149e0860cbbf7fdf9', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, 1),
(1, 1, 'Steven', NULL, 'Santiago', NULL, 'stevensantiago@hotmail.com', '3145557445', '6ed61d4b80bb0f81937b32418e98adca', 'e10adc3949ba59abbe56e057f20f883e', 1, 0, 1),
(2, 4, 'Pablo', 'Miguel', 'Barraza', 'Borja', 'pablomiguel@homail.com', '3015879684', '5109d85d95fece7816d9704e6e5b1279', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, 1),
(3, 3, 'Rodrigo', 'Martin', 'Perez', 'Alonso', 'rmpa@gmail.com', '3004521863', '1f2dfa567dcf95833eddf7aec167fec7', 'e10adc3949ba59abbe56e057f20f883e', 3, 0, 1),
(4, 4, 'Rafael', NULL, 'Casianni', 'Mendoza', 'r_mendoza@gmail.com', '3001234567', '5621e3ecab770b73ca180a88f0b1b1d4', 'e10adc3949ba59abbe56e057f20f883e', 1, 0, 1),
(5, 1, 'Raul', NULL, 'Arrieta', NULL, 'r_arrieta@live.com', '3004548214', '437c3564ef263eb8ee7aa2a41cbff512', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, 1),
(6, 1, 'Marcela', 'Carolina', 'Diaz', 'Rangel', 'marcela_diaz@gmail.com', '3018943520', '434e0224ff38c45aadd6700ef097b894', 'e10adc3949ba59abbe56e057f20f883e', 3, 0, 1),
(7, 2, 'Gisela', 'Maria', 'Pereira', 'Gonzalez', 'gmpg_85@gmail.com', '3120047821', '21b209ef28d77f23c623b3e3e4c0d11b', 'e10adc3949ba59abbe56e057f20f883e', 1, 0, 1),
(8, 1, 'roberto', '', 'Diaz', 'Mendez', 'zayaley-venuz@hotmail.com', '3014456521', '73d26b52f7a796c0fd8bdac6040263c3', 'e10adc3949ba59abbe56e057f20f883e', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tipo`
--

CREATE TABLE IF NOT EXISTS `usuario_tipo` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario_tipo`
--

INSERT INTO `usuario_tipo` (`id`, `nombre`, `descripcion`) VALUES
(0, 'Webmaster', NULL),
(1, 'Administrador', NULL),
(2, 'Trabajador', NULL),
(3, 'Cliente', NULL),
(4, 'Conductor', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(2) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '1' COMMENT '0:: inactivo, 1::activo',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `placa` (`placa`),
  KEY `estado` (`estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `id_usuario`, `placa`, `estado`) VALUES
(1, 2, 'hut458', 0),
(2, 3, 'erw743', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
