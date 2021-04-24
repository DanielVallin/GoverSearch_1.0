-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2021 a las 02:10:36
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `goversearch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_claves`
--

CREATE TABLE `tbl_claves` (
  `pk_Ter_Clave` int(11) NOT NULL,
  `Termino_Clave` varchar(50) NOT NULL,
  `Usuario_pk` int(20) NOT NULL,
  `Fecha_Alta` date NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_claves`
--

INSERT INTO `tbl_claves` (`pk_Ter_Clave`, `Termino_Clave`, `Usuario_pk`, `Fecha_Alta`, `Estado`) VALUES
(1, 'CAJA', 2, '2021-04-08', b'1'),
(2, 'Alta 5', 3, '2021-01-01', b'1'),
(3, 'Baja', 3, '2022-12-30', b'1'),
(4, 'Norma', 3, '2021-04-16', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gestion`
--

CREATE TABLE `tbl_gestion` (
  `pk_Gestionid` int(11) NOT NULL,
  `Ley_pk` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `FUltReforma` date NOT NULL,
  `FEntradaVigo` date NOT NULL,
  `EstLey` varchar(50) NOT NULL,
  `ObjLey` varchar(500) NOT NULL,
  `TipoLey` varchar(20) NOT NULL,
  `Num_Articulo` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `NomTitulo` varchar(100) NOT NULL,
  `Capitulo` int(11) NOT NULL,
  `NomCapitulo` varchar(100) NOT NULL,
  `Fraccion` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `UltReforma` date NOT NULL,
  `Descripcion2` varchar(500) NOT NULL,
  `Estatus` varchar(20) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_gestion`
--

INSERT INTO `tbl_gestion` (`pk_Gestionid`, `Ley_pk`, `Fecha`, `FUltReforma`, `FEntradaVigo`, `EstLey`, `ObjLey`, `TipoLey`, `Num_Articulo`, `Tipo`, `Titulo`, `NomTitulo`, `Capitulo`, `NomCapitulo`, `Fraccion`, `Descripcion`, `UltReforma`, `Descripcion2`, `Estatus`, `Estado`) VALUES
(1, 1, '2021-04-08', '2021-04-15', '2021-04-14', 'Derogada', 'Capturar', 'Federal', 42, 'Transitorio', '', '', 0, '', '', 'capturar el texto del articulo', '2021-04-13', '31/12/2020', 'Derogado', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gpo_leyes`
--

CREATE TABLE `tbl_gpo_leyes` (
  `pk_Gpo_Ley` int(11) NOT NULL,
  `Nombre_de_Grupo` varchar(50) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_gpo_leyes`
--

INSERT INTO `tbl_gpo_leyes` (`pk_Gpo_Ley`, `Nombre_de_Grupo`, `Estado`) VALUES
(1, 'Contabilidad 50', b'1'),
(2, 'Contabilidad 2', b'1'),
(3, 'Contabilidad 23', b'1'),
(4, 'Contabilidad 25', b'1'),
(5, '', b'1'),
(6, 'ss', b'1'),
(8, 'hola', b'1'),
(9, 'Contabilidad 5', b'0'),
(10, 'Contabilidad', b'1'),
(11, 'Contabilidad 2	', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_leyes`
--

CREATE TABLE `tbl_leyes` (
  `pk_Datos_Ley` int(11) NOT NULL,
  `Nombre_de_Ley` varchar(50) NOT NULL,
  `Grupo_pk` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_leyes`
--

INSERT INTO `tbl_leyes` (`pk_Datos_Ley`, `Nombre_de_Ley`, `Grupo_pk`, `Estado`) VALUES
(1, 'Ley General de Contabilidad', 1, b'1'),
(2, 'Nueva ley', 4, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pagos`
--

CREATE TABLE `tbl_pagos` (
  `pk_Pago` int(11) NOT NULL,
  `Usuario_pk` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Folio_Pago` varchar(50) NOT NULL,
  `Fecha_Pago` date NOT NULL,
  `Consepto_Pago` varchar(50) NOT NULL,
  `Importe` decimal(50,0) NOT NULL,
  `Estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_pagos`
--

INSERT INTO `tbl_pagos` (`pk_Pago`, `Usuario_pk`, `Descripcion`, `Folio_Pago`, `Fecha_Pago`, `Consepto_Pago`, `Importe`, `Estado`) VALUES
(1, 2, 'Pago mes 04', 'asdawe3', '2021-04-08', 'ABRIL', '500', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos`
--

CREATE TABLE `tbl_permisos` (
  `pk_Permiso` int(11) NOT NULL,
  `Descripcion` bit(1) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `pk_Rol` int(11) NOT NULL,
  `Nombre_Rol` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`pk_Rol`, `Nombre_Rol`, `Descripcion`, `Estado`) VALUES
(2, 'Administrador', 'Acceso a todo x.', b'1'),
(4, 'Usuario', 'Solo acceso basico', b'1'),
(7, 'Subscriptopr', 'asd55', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ter_clave`
--

CREATE TABLE `tbl_ter_clave` (
  `pk_Datos_ley` int(11) NOT NULL,
  `Termino_Clave_pk` int(11) NOT NULL,
  `Ley_pk` int(11) NOT NULL,
  `Articulo` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ter_clave`
--

INSERT INTO `tbl_ter_clave` (`pk_Datos_ley`, `Termino_Clave_pk`, `Ley_pk`, `Articulo`, `Descripcion`, `Estado`) VALUES
(1, 1, 1, 2, 'Nueva des\r\n', b'1'),
(2, 3, 1, 5, NULL, b'1'),
(3, 1, 2, 6, NULL, b'1'),
(4, 4, 1, 3, 'asas', b'1'),
(5, 3, 1, 55, 'ley 0000', b'1'),
(6, 1, 1, 455, 'a', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `pk_Usuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Fecha_Alta` date NOT NULL,
  `User_Rol_pk` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`pk_Usuario`, `Nombre`, `Apellidos`, `Telefono`, `Correo`, `Usuario`, `Contrasena`, `Fecha_Alta`, `User_Rol_pk`, `Estado`) VALUES
(2, 'Daniel', 'Vallin', '4492793463', 'dan@gmail.com', 'Admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-04-08', 2, b'1'),
(3, 'Admin', '', '4491235555', 'admin@gmail.com', 'Admin', '123', '2021-04-08', 2, b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_claves`
--
ALTER TABLE `tbl_claves`
  ADD PRIMARY KEY (`pk_Ter_Clave`),
  ADD UNIQUE KEY `pk_Ter_Clave` (`pk_Ter_Clave`),
  ADD KEY `fk_UsuarioCat` (`Usuario_pk`);

--
-- Indices de la tabla `tbl_gestion`
--
ALTER TABLE `tbl_gestion`
  ADD PRIMARY KEY (`pk_Gestionid`),
  ADD KEY `fk_leyes_gestion` (`Ley_pk`);

--
-- Indices de la tabla `tbl_gpo_leyes`
--
ALTER TABLE `tbl_gpo_leyes`
  ADD PRIMARY KEY (`pk_Gpo_Ley`),
  ADD UNIQUE KEY `pk_Gpo_Ley` (`pk_Gpo_Ley`),
  ADD UNIQUE KEY `Nombre_de_Grupo` (`Nombre_de_Grupo`);

--
-- Indices de la tabla `tbl_leyes`
--
ALTER TABLE `tbl_leyes`
  ADD PRIMARY KEY (`pk_Datos_Ley`),
  ADD UNIQUE KEY `pk_Datos_Ley` (`pk_Datos_Ley`),
  ADD KEY `fk_LeyesG` (`Grupo_pk`);

--
-- Indices de la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  ADD PRIMARY KEY (`pk_Pago`),
  ADD UNIQUE KEY `pk_Pago` (`pk_Pago`),
  ADD UNIQUE KEY `Folio_Pago` (`Folio_Pago`),
  ADD KEY `fk_Pagos` (`Usuario_pk`);

--
-- Indices de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD PRIMARY KEY (`pk_Permiso`),
  ADD UNIQUE KEY `pk_Permiso` (`pk_Permiso`);

--
-- Indices de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`pk_Rol`),
  ADD UNIQUE KEY `pk_Rol` (`pk_Rol`),
  ADD UNIQUE KEY `Nombre_Rol` (`Nombre_Rol`);

--
-- Indices de la tabla `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  ADD PRIMARY KEY (`pk_Datos_ley`),
  ADD UNIQUE KEY `pk_Datos_ley` (`pk_Datos_ley`),
  ADD KEY `fk_Ter_Clave` (`Termino_Clave_pk`),
  ADD KEY `fk_Ley` (`Ley_pk`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`pk_Usuario`),
  ADD UNIQUE KEY `pk_Usuario` (`pk_Usuario`),
  ADD UNIQUE KEY `Correo` (`Correo`,`Usuario`),
  ADD UNIQUE KEY `Correo_2` (`Correo`,`Usuario`),
  ADD UNIQUE KEY `Correo_3` (`Correo`,`Usuario`),
  ADD KEY `fk_UserRol` (`User_Rol_pk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_claves`
--
ALTER TABLE `tbl_claves`
  MODIFY `pk_Ter_Clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_gestion`
--
ALTER TABLE `tbl_gestion`
  MODIFY `pk_Gestionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_gpo_leyes`
--
ALTER TABLE `tbl_gpo_leyes`
  MODIFY `pk_Gpo_Ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_leyes`
--
ALTER TABLE `tbl_leyes`
  MODIFY `pk_Datos_Ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  MODIFY `pk_Pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  MODIFY `pk_Permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `pk_Rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  MODIFY `pk_Datos_ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `pk_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_claves`
--
ALTER TABLE `tbl_claves`
  ADD CONSTRAINT `fk_UsuarioCat` FOREIGN KEY (`Usuario_pk`) REFERENCES `tbl_usuarios` (`pk_Usuario`);

--
-- Filtros para la tabla `tbl_gestion`
--
ALTER TABLE `tbl_gestion`
  ADD CONSTRAINT `fk_leyes_gestion` FOREIGN KEY (`Ley_pk`) REFERENCES `tbl_leyes` (`Grupo_pk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_leyes`
--
ALTER TABLE `tbl_leyes`
  ADD CONSTRAINT `fk_LeyesG` FOREIGN KEY (`Grupo_pk`) REFERENCES `tbl_gpo_leyes` (`pk_Gpo_Ley`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  ADD CONSTRAINT `fk_Pagos` FOREIGN KEY (`Usuario_pk`) REFERENCES `tbl_usuarios` (`pk_Usuario`);

--
-- Filtros para la tabla `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  ADD CONSTRAINT `fk_Ley` FOREIGN KEY (`Ley_pk`) REFERENCES `tbl_leyes` (`pk_Datos_Ley`),
  ADD CONSTRAINT `fk_Ter_Clave` FOREIGN KEY (`Termino_Clave_pk`) REFERENCES `tbl_claves` (`pk_Ter_Clave`);

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_UserRol` FOREIGN KEY (`User_Rol_pk`) REFERENCES `tbl_roles` (`pk_Rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
