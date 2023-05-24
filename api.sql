-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2023 a las 18:20:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4  d */;

--
-- Base de datos: `api`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `palabras` varchar(255) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `titulo`, `link`, `descripcion`, `palabras`, `nombre`) VALUES
(1, 'jklds', '_descarga (4).png', 'sd', 'palabra', NULL),
(2, 'juan jose', '_descarga (11).png', 'arbol', 'palabra', NULL),
(3, 'asd', '_descarga (6).png', 'sad', 'palabra', NULL),
(4, 'asda', '_descarga (12).png', 'ada', 'palabra', NULL),
(5, 'asdasd', '_descarga (10).png', 'sdasd', 'palabra', NULL),
(6, 'dfs', '_descarga (10).png', 'dfgd', 'palabra', NULL),
(7, 'sckld', '_descarga (7).png', 'xx', 'palabra', NULL),
(8, 'holaaaaa', '_descarga (10).png', 'ssssss', 'palabra', NULL),
(9, 'TREE', '_descarga (9).png', 'ES UNARBOL', 'palabra', NULL),
(10, 'km', '_WhatsApp Image 2023-02-07 at 10.46.35 AM.jpeg', 'kl', 'palabra', NULL),
(11, 'aaaaaaaaaaaaaaaa', '_descarga (4).png', 'd', 'palabra', NULL),
(12, 'wwwwwwwwwwwwww', '_descarga (5).png', 'sss', 'palabra', NULL),
(13, 'arbol v5.0', '_descargass.png', 'ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 'palabra', NULL),
(14, 'yllen', '_descargass.png', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx', 'palabra', NULL),
(15, 'sd', '_1.PNG', 'l', 'palabra', NULL),
(16, 'sd', '_1.PNG', 'hjk', 'palabra', NULL),
(17, 'sfsd', '_1.PNG', 'dsf', 'palabra', NULL),
(18, 'dfgdf', '_1.PNG', 'fg', 'palabra', NULL),
(19, 'sg', '_1.png', 'uyjh', 'palabra', NULL),
(20, 'aw', '_árbol-alto-33279950.jpg', 'df', 'palabra', NULL),
(21, 'sdsssssssss', '_depositphotos_21469709-stock-photo-tree-on-white-background.jpg', 'hmj', 'palabra', NULL),
(22, 'sdsdsd', '_depositphotos_10918965-stock-photo-tree-on-white-background.jpg', 'sd', 'palabra', NULL),
(23, 'sdfsdf', '_8330e0dade8daf56eaedf68805c7414e-hermoso-arbol-alto.png', 'dfdf', 'palabra', NULL),
(24, 'sdsdsdfsfdsf', '_descarga (11).png', 'dfd', 'palabra', NULL),
(25, 'arbolllll', '_zamarripa_salud_visual_auditiva_blog_resulucion-pixeles-ojo-humano-pixel-1.jpg', 'f', 'palabra', NULL),
(26, 'wwwwwwwwwwwwww', '_images.jpg', 'd', 'palabra', NULL),
(27, 'GGGGGGGGGGGG', '_tall-tree-isolated-png.webp', 'S', 'palabra', NULL),
(28, '44444444', '_1.png', 'RR', 'palabra', NULL),
(29, '55555555555', '55555555555_descarga (11).png', '555', 'palabra', 'Giovany'),
(30, 'jkj', 'jkj_depositphotos_10918965-stock-photo-tree-on-white-background.jpg', 'kl', 'palabra', 'Giovany'),
(31, 'eeee', 'eeee_ApiNux_Ojo Humano (2).jpg', 'eee', 'palabra', 'Giovany'),
(32, 'correr', '', 'Es una persona corriendo', 'palabra', 'Giovany'),
(33, 'correr', '', 'Persona corriendo', 'palabra', 'Giovany'),
(34, 'afrodescendiente', 'kk', 'Mujer afrodescendiente', 'palabra', 'Giovany'),
(35, 'sd', '', 'dsdsd', 'palabra', 'Nixon'),
(37, 'policia', '', 'Dos policias abrazados', 'palabra', 'Giovany'),
(38, 'Pasaporte', '', 'Es un simple pasaporte', 'palabra', 'Giovany'),
(39, 'Aduana', '', 'Foto de donde se recaudan impuestos de importacion', 'palabra', 'Giovany'),
(40, 'Gato', '', 'Imagen de un gato bebe', 'palabra', 'Giovany'),
(41, 'Enojar', '', 'Una persona muy enojada', 'palabra', 'Giovany'),
(42, 'Casa', '', 'Foto de una casa basica', 'palabra', 'Giovany'),
(43, 'ojo', '', 'Imagen de una foto de un ser humano', 'palabra', 'Giovany'),
(44, 'ojo', '', 'Imagen de una foto de un ser humano', 'palabra', 'Giovany'),
(45, 'arbol', '', 'Imagen de un arbol generado', 'palabra', 'Giovany'),
(46, 'Yogurt', '', 'Es un yogurt de mora', 'palabra', 'Andres'),
(47, 'Vegetales', '', 'Varios vegetales de diferentes colores', 'palabra', 'Andres'),
(48, 'Tea', '', 'Tea sabroso', 'palabra', 'Andres'),
(49, 'Salsa', '', 'Es una salsa de tomate como para las papas fritas', 'palabra', 'Andres'),
(50, 'Pollo asado', '', 'Un rico pollo asado en punto', 'palabra', 'Andres'),
(51, 'Sopa', '', 'Una rica sopa con cilantro', 'palabra', 'Andres'),
(52, 'Pera', '', 'Pera verde', 'palabra', 'Andres'),
(53, 'Naranja', '', 'Naranjas iguales a las que comia en la finca de mis tios', 'palabra', 'Andres'),
(54, 'Pasta', '', 'Unas ricas pastas bien condimentadas', 'palabra', 'Miguel'),
(55, 'Pastel', '', 'Un rico pastel de color blanco con una cereza en el centro', 'palabra', 'Miguel'),
(56, 'Cafe', '', 'Un buen cafe del campo colombiano', 'palabra', 'Miguel'),
(57, 'Helado', '', 'Dos helados buenos para un dia caluroso', 'palabra', 'Miguel'),
(58, 'Vino', '', 'Un vino para embriagarme 😎', 'palabra', 'Miguel'),
(59, 'Papas', '', 'Papas que se cosechan en el bello pueblo de Berlin, donde hace un frio ni el mas HP 🥶', 'palabra', 'Miguel'),
(60, 'Caballo', '', 'Algun dia tendre un caballo de ese tipo', 'palabra', 'Miguel'),
(61, 'Azucar', '', 'Cuba antes era el primer productor de azucar', 'palabra', 'Karen'),
(62, 'Manzana', '', 'Fruta redonda y jugosa de varios colores', 'palabra', 'Karen'),
(63, 'Melon', '', 'Fruta ovalada y refrescante, con pulpa dulce', 'palabra', 'Karen'),
(64, 'Oveja', '', 'Animal cubierto de lana, criado por su carne y lana', 'palabra', 'Karen'),
(65, 'Gallina', '', 'Ave doméstica que pone huevos y cacarea', 'palabra', 'Karen'),
(66, 'Arroz', '', 'Cereal básico, pequeño y se cocina hirviendo', 'palabra', 'Karen'),
(67, 'Alcohol', '', 'Sustancia intoxicante en bebidas como vino y cerveza. Tambien se usa para matar bacterias y virus, fue muy usado durante la pandemia del covid', 'palabra', 'Karen'),
(68, 'Carne', '', 'Alimento obtenido de animales, utilizado en muchas preparaciones culinarias.', 'palabra', 'Miguel'),
(69, 'Huevo', '', 'Producto comestible obtenido de aves, utilizado en diversas recetas.', 'palabra', 'Miguel'),
(70, 'Ensalada', '', 'Plato compuesto principalmente por vegetales crudos o cocidos.', 'palabra', 'Miguel'),
(71, 'Pan', '', 'Alimento básico hecho de harina, agua, levadura y sal.', 'palabra', 'Miguel'),
(72, 'Limon', '', 'Fruta cítrica de sabor ácido y refrescante.', 'palabra', 'Miguel'),
(73, 'Vaca', '', 'Animal de granja criado por su leche y carne.', 'palabra', 'Miguel'),
(74, 'Animal', '', 'Ser vivo con capacidad de movimiento y sensibilidad.', 'palabra', 'Miguel'),
(75, 'arbol1', '', 'Un arbol hecho con IA', 'palabra', 'arbol'),
(76, 'arbol2', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(77, 'arbol3', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(78, 'arbol5', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(79, 'arbol6', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(80, 'arbol7', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(81, 'arbol9', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(82, 'arbol9', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(83, 'arbol10', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(84, 'arbol11', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(85, 'arbol13', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(86, 'arbol14', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(87, 'arbol14', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(88, 'arbol14', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(89, 'arbol15', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(90, 'arbol16', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(91, 'Espiral natural', '', 'Una espiral de un helecho', 'palabra', 'arbol'),
(92, 'arbol19', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(93, 'arbol20', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(94, 'arbol21', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol'),
(95, 'arbol22', '', 'Un acercamiento a hacer un arbol', 'palabra', 'arbol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contra` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `correo`, `contra`) VALUES
(1, 'cesar14_andres@hotmail.com', 'ssss'),
(2, 'cesar14_andres@hotmail.com', 'ddd'),
(3, 'casgereda.1@gmail.com', 'SDSD'),
(4, 'casgereda.1@gmail.com', 'll');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `contra` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contra`, `fecha_nacimiento`, `celular`, `fecha_registro`) VALUES
(1, '1992-06-17', 'cesar14_andres@hotmail.com', 'asasas', '1992-06-17', '41', '2023-05-18 16:58:46'),
(2, '2023-05-18', 'cesar14_andres@hotmail.com', 'ww', '2023-05-18', '2', '2023-05-18 17:26:15'),
(3, '2023-05-23', 'asas@gmail.com', 'Daniqwer', '2023-05-23', '1314315', '2023-05-18 17:36:41'),
(4, '2023-05-04', 'casgereda.1@gmail.com', 'SD', '2023-05-04', '312', '2023-05-18 22:07:10'),
(5, 'd', 'casgereda.1@gmail.com', 'd', '2023-05-16', 'd', '2023-05-19 09:43:18'),
(6, 'Cesar Andres', 'casgereda.1@gmail.com', '123', '2023-05-10', '323', '2023-05-20 01:56:28'),
(7, 'Giovany', 'asas@gmail.com', '123', '2023-05-03', '3145465', '2023-05-20 02:05:51'),
(8, 'camilo', 'assssssas@gmail.com', '123', '2023-05-10', '323', '2023-05-20 02:13:17'),
(9, 'Nixon', 'asas@gmail.com', '12345', '2023-05-05', '3162457988', '2023-05-23 20:09:33'),
(11, 'Andres', 'casgereda.1@gmail.com', '12345', '2023-05-10', '3162457988', '2023-05-24 08:38:57'),
(12, 'Miguel', 'miguel@campus.com', '123', '2023-05-02', '3162457988', '2023-05-24 08:56:42'),
(13, 'Karen', 'karen@campus.com', '123', '2023-05-07', '2', '2023-05-24 09:05:18'),
(14, 'arbol', 'arbol@campus.com', '123', '2023-05-12', '123123', '2023-05-24 09:28:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
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
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
