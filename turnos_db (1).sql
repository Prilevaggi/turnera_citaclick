-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2024 a las 00:55:29
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turnos_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `dsc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `razon_nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `dsc` text COLLATE utf8_spanish_ci NOT NULL,
  `contacto_tel` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_mail` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_logo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `razon_nombre`, `dsc`, `contacto_tel`, `contacto_mail`, `direccion`, `imagen_logo`) VALUES
(1, 'Empresa Uno', 'Descripción de Empresa Uno', '1234567890', 'contacto1@empresa.co', 'Calle 1', 'logo1.png'),
(2, 'Empresa Dos', 'Descripción de Empresa Dos', '2345678901', 'contacto2@empresa.co', 'Calle 2', 'logo2.png'),
(3, 'Empresa Tres', 'Descripción de Empresa Tres', '3456789012', 'contacto3@empresa.co', 'Calle 3', 'logo3.png'),
(4, 'Empresa Cuatro', 'Descripción de Empresa Cuatro', '4567890123', 'contacto4@empresa.co', 'Calle 4', 'logo4.png'),
(5, 'Empresa Cinco', 'Descripción de Empresa Cinco', '5678901234', 'contacto5@empresa.co', 'Calle 5', 'logo5.png'),
(6, 'Empresa Seis', 'Descripción de Empresa Seis', '6789012345', 'contacto6@empresa.co', 'Calle 6', 'logo6.png'),
(7, 'Empresa Siete', 'Descripción de Empresa Siete', '7890123456', 'contacto7@empresa.co', 'Calle 7', 'logo7.png'),
(8, 'Empresa Ocho', 'Descripción de Empresa Ocho', '8901234567', 'contacto8@empresa.co', 'Calle 8', 'logo8.png'),
(9, 'Empresa Nueve', 'Descripción de Empresa Nueve', '9012345678', 'contacto9@empresa.co', 'Calle 9', 'logo9.png'),
(10, 'Empresa Diez', 'Descripción de Empresa Diez', '0123456789', 'contacto10@empresa.c', 'Calle 10', 'logo10.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_categoria`
--

CREATE TABLE `empresas_categoria` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajeria`
--

CREATE TABLE `mensajeria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre_apellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_tel` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `contacto_mail` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre_apellido`, `dni`, `contacto_tel`, `contacto_mail`, `estado`) VALUES
(1, 'Juan Perez', '12345678', '555-1234', 'juan.perez@example.com', 1),
(2, 'Maria Gomez', '87654321', '555-5678', 'maria.gomez@example.com', 1),
(3, 'Carlos Sanchez', '11223344', '555-8765', 'carlos.sanchez@example.com', 1),
(4, 'Ana Martinez', '44332211', '555-4321', 'ana.martinez@example.com', 1),
(5, 'Luis Fernandez', '55667788', '555-6789', 'luis.fernandez@example.com', 1),
(6, 'Laura Rodriguez', '88776655', '555-9876', 'laura.rodriguez@example.com', 1),
(7, 'Miguel Torres', '99887766', '555-5432', 'miguel.torres@example.com', 1),
(8, 'Sofia Ramirez', '66778899', '555-6543', 'sofia.ramirez@example.com', 1),
(9, 'Diego Lopez', '77889900', '555-7654', 'diego.lopez@example.com', 1),
(10, 'Elena Morales', '88990011', '555-8765', 'elena.morales@example.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `obs` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `tipo` tinyint(2) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `contrasena`, `estado`, `tipo`, `persona_id`, `empresa_id`) VALUES
(1, 'juan.perez', '1234', 1, 1, 1, 0),
(2, 'maria.gomez', '1234', 1, 1, 2, 0),
(3, 'carlos.sanchez', '1234', 1, 1, 3, 0),
(4, 'ana.martinez', '1234', 1, 1, 4, 0),
(5, 'luis.fernandez', '1234', 1, 1, 5, 0),
(6, 'empresa.uno', '1234', 1, 2, 0, 1),
(7, 'empresa.dos', '1234', 1, 2, 0, 2),
(8, 'empresa.tres', '1234', 1, 2, 0, 3),
(9, 'empresa.cuatro', '1234', 1, 2, 0, 4),
(10, 'empresa.cinco', '1234', 1, 2, 0, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
