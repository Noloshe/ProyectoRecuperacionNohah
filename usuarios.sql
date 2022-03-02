-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2022 a las 20:04:12
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nombrecompleto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreusuario`, `clave`, `nombrecompleto`, `email`, `tipo`, `telefono`) VALUES
(1, 'UsuarioTest', '8E25B393FD3DD07C449CC4CAF56F2FC1', 'Luis Luz Perez', 'test@test.es', 'usuario', 123456789),
(2, 'NohahAdmin', 'A316FCF6F954BEE32ED0D4B58BE8D3D3', 'Nohah Garcia Herrera', 'hunterno016@gmail.com', 'administrador', 689904829),
(7, 'Juan1', '810819C585C4BD7BD8852E91DE10133A', 'Juan Luis Guerra', 'juan@juan.es', '', 0),
(17, 'Pepe1', '6549E7DB7B28A2A6B40ADB0664B9C883', 'Pepe Luis Torres', 'pepe@pepe.es', '', 0),
(18, 'Pepe2', '0B4A2F6EA94AF5DBB307A753E81E5327', 'Pepe Bernavente', 'pepebernavente@pepe.com', '', 0),
(19, 'Pepe3', 'A77093F5372FBA84CF5153481139B12A', 'Pepe Luis', 'Pepe3@pepe3.com', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
