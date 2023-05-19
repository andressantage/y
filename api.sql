
CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `palabras` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `titulo`, `link`, `descripcion`, `palabras`) VALUES
(1, 'jklds', '_descarga (4).png', 'sd', 'palabra'),
(2, 'juan jose', '_descarga (11).png', 'arbol', 'palabra'),
(3, 'asd', '_descarga (6).png', 'sad', 'palabra'),
(4, 'asda', '_descarga (12).png', 'ada', 'palabra'),
(5, 'asdasd', '_descarga (10).png', 'sdasd', 'palabra'),
(6, 'dfs', '_descarga (10).png', 'dfgd', 'palabra'),
(7, 'sckld', '_descarga (7).png', 'xx', 'palabra'),
(8, 'holaaaaa', '_descarga (10).png', 'ssssss', 'palabra'),
(9, 'TREE', '_descarga (9).png', 'ES UNARBOL', 'palabra');

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
(3, 'casgereda.1@gmail.com', 'SDSD');

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
(4, '2023-05-04', 'casgereda.1@gmail.com', 'SD', '2023-05-04', '312', '2023-05-18 22:07:10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

