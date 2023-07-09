-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 18:30:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `drvfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `Nombre`, `Clave`) VALUES
(1, 'drvadmin', '123'),
(2, 'admindrv', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbclientes`
--

CREATE TABLE `dbclientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dbclientes`
--

INSERT INTO `dbclientes` (`id`, `nombre`, `apellido`, `direccion`) VALUES
(12, 'Carlos', 'Lopez', 'San Juan 55'),
(17, 'Cristian', 'Castro', 'Luro 125'),
(18, 'Juan Jose', 'Lopez', 'San Juan 123'),
(19, 'Juan Jose', 'Lopez', 'San Juan 123'),
(20, 'Sergio', 'Peralta', 'Jara 200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(1, 'Maria Belen', 'Vega', 'Luro 125', '223655'),
(2, 'Maria Belen', 'Vega', 'Luro 125', '223655'),
(3, 'Julio', 'Moya', 'San juan 555', '223456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hombre`
--

CREATE TABLE `hombre` (
  `id_post` int(11) NOT NULL,
  `Marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Fotogran` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hombre`
--

INSERT INTO `hombre` (`id_post`, `Marca`, `Descripcion`, `Precio`, `Foto`, `Fotogran`) VALUES
(1, 'Converse', 'Converse Modelo X\r\n', ' $ 100,00', 'img/conversemini.jpg', 'img/converse.jpg'),
(2, 'X Runners', 'X modelo 123 para entrenamiento exigente ', ' $ 200,00', 'img/xmini.jpg', 'img/x.jpg'),
(3, 'Puma', 'Indumentaria deportiva', ' $ 200.00', 'img/pumamini.jpg', 'img/puma.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mujer`
--

CREATE TABLE `mujer` (
  `id_post` int(11) NOT NULL,
  `Marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Fotogran` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mujer`
--

INSERT INTO `mujer` (`id_post`, `Marca`, `Descripcion`, `Precio`, `Foto`, `Fotogran`) VALUES
(1, 'Zapatillas Damas', 'Zapatillas para damas los mejores modelos', ' $ 150.00', 'img/damamini.jpg', 'img/dama.jpg'),
(2, 'Nike Damas', 'Nike calidad garantizada', ' $ 200.00', 'img/nikedamamini.jpg', 'img/nikedama.jpg'),
(3, 'Puma Damas', 'Puma Damas', ' $ 150,00', 'img/pumamini.jpg', 'img/puma.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id_post` int(11) NOT NULL,
  `Marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Fotogran` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id_post`, `Marca`, `Descripcion`, `Precio`, `Foto`, `Fotogran`) VALUES
(1, 'Atomik Sodio', 'Zapatillas Atomik Sodio', ' $ 100,00', 'img/atomiksodiomini.jpg', 'img/atomiksodio.jpg'),
(2, 'Reebok', 'Reebok Nano X2', ' $ 150,00', 'img/reeboknanox2mini.jpg', 'img/reeboknanox2.jpg'),
(3, 'Topper', 'Topper Ciro', ' $ 150,00', 'img/toppersanciromini.jpg', 'img/toppersanciro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posteos`
--

CREATE TABLE `posteos` (
  `id_post` int(11) NOT NULL,
  `Marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `Precio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Fotogran` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `posteos`
--

INSERT INTO `posteos` (`id_post`, `Marca`, `Descripcion`, `Precio`, `Foto`, `Fotogran`) VALUES
(1, 'Adidas', 'La marca de las tres tiras', '$ 100,00', 'img/banneradidasmini.jpg', 'img/banneradidas.jpg'),
(2, 'Nike', 'Zapatillas Nike', '$ 150,00', 'img/bannernikemini.jpg', 'img/bannernike.jpg'),
(3, 'Puma', 'Exelente indumentaria', '$ 152,00', 'img/bannerpumamini.jpg', 'img/bannerpuma.jpg'),
(4, '', '', '', 'img/avion7.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'Daniel', '123'),
(2, 'Carolina', '123'),
(3, 'Claudia', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `dbclientes`
--
ALTER TABLE `dbclientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hombre`
--
ALTER TABLE `hombre`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `mujer`
--
ALTER TABLE `mujer`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `posteos`
--
ALTER TABLE `posteos`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dbclientes`
--
ALTER TABLE `dbclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `hombre`
--
ALTER TABLE `hombre`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mujer`
--
ALTER TABLE `mujer`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `posteos`
--
ALTER TABLE `posteos`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
