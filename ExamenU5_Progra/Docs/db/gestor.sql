-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2021 a las 21:38:42
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_archivos`
--

CREATE TABLE `t_archivos` (
  `id_archivos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categorias` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_archivos`
--

INSERT INTO `t_archivos` (`id_archivos`, `id_usuario`, `id_categorias`, `nombre`, `tipo`, `ruta`, `fecha`) VALUES
(1, 3, 2, '171178.jpg', 'jpg', '../../archivos/alex2/171178.jpg', '2021-06-23 13:31:47'),
(2, 3, 2, 'Virtualizacion de Servidores (1).pdf', 'pdf', '../../archivos/alex2/Virtualizacion de Servidores (1).pdf', '2021-06-23 13:32:08'),
(3, 3, 2, '3840x2160-pikachu_pokemon_minimalistic-7923.png', 'png', '../../archivos/alex2/3840x2160-pikachu_pokemon_minimalistic-7923.png', '2021-06-23 13:45:48'),
(5, 3, 2, 'chida.gif', 'gif', '../../archivos/alex2/chida.gif', '2021-06-23 13:51:10'),
(6, 1, 1, 'Bazzi - Mine.mp3', 'mp3', '../../archivos/alex/Bazzi - Mine.mp3', '2021-06-23 14:12:36'),
(7, 1, 1, '4b700e902fc6bcff54bef06d88ca229c.mp4', 'mp4', '../../archivos/alex/4b700e902fc6bcff54bef06d88ca229c.mp4', '2021-06-23 14:15:11'),
(8, 3, 2, '4b700e902fc6bcff54bef06d88ca229c.mp4', 'mp4', '../../archivos/alex2/4b700e902fc6bcff54bef06d88ca229c.mp4', '2021-06-23 14:16:43'),
(9, 3, 2, 'Bazzi - Mine.mp3', 'mp3', '../../archivos/alex2/Bazzi - Mine.mp3', '2021-06-23 14:17:21'),
(10, 3, 2, 'Introducción.docx', 'docx', '../../archivos/alex2/Introducción.docx', '2021-06-23 14:18:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categorias`
--

CREATE TABLE `t_categorias` (
  `id_categorias` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_categorias`
--

INSERT INTO `t_categorias` (`id_categorias`, `id_usuario`, `nombre`, `fecha_insert`) VALUES
(1, 1, 'Peliculas 2021', '2021-06-17 17:42:40'),
(2, 3, 'Peliculas 2021', '2021-06-17 17:43:22'),
(3, 1, 'Peliculas 2019', '2021-06-18 07:20:17'),
(4, 3, 'Ejemplo', '2021-06-22 20:24:40'),
(5, 3, 'Ejemplo2 ', '2021-06-22 22:38:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `fecha_na` date DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `insert` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombre`, `apellido`, `fecha_na`, `usuario`, `password`, `insert`) VALUES
(1, 'Alex', 'Pozos', '0000-00-00', 'alex', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-06-17 14:30:51'),
(2, 'Alejandro', 'Pozos', '1994-09-08', 'alex1', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-06-17 14:34:47'),
(3, 'Alejandro', 'Pozos', '2021-06-17', 'alex2', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-06-17 15:13:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  ADD PRIMARY KEY (`id_archivos`),
  ADD KEY `fkArchivosCategorias_idx` (`id_categorias`),
  ADD KEY `fkUsuariosArchivos_idx` (`id_usuario`);

--
-- Indices de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD PRIMARY KEY (`id_categorias`),
  ADD KEY `fkCategoriaUsuario_idx` (`id_usuario`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  MODIFY `id_archivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_archivos`
--
ALTER TABLE `t_archivos`
  ADD CONSTRAINT `fkArchivosCategorias` FOREIGN KEY (`id_categorias`) REFERENCES `t_categorias` (`id_categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkUsuariosArchivos` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD CONSTRAINT `fkCategoriaUsuario` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
