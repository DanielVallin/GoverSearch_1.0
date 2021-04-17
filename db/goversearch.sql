-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 12:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goversearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `pk_Ter_Clave` int(11) NOT NULL,
  `Termino_Clave` varchar(50) NOT NULL,
  `Usuario_pk` int(20) NOT NULL,
  `Fecha_Alta` date NOT NULL,
  `Estatus` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`pk_Ter_Clave`, `Termino_Clave`, `Usuario_pk`, `Fecha_Alta`, `Estatus`) VALUES
(1, 'CAJA', 2, '2021-04-08', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gpo_leyes`
--

CREATE TABLE `tbl_gpo_leyes` (
  `pk_Gpo_Ley` int(11) NOT NULL,
  `Nombre_de_Grupo` varchar(50) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gpo_leyes`
--

INSERT INTO `tbl_gpo_leyes` (`pk_Gpo_Ley`, `Nombre_de_Grupo`, `Estado`) VALUES
(1, 'Contabilidad', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leyes`
--

CREATE TABLE `tbl_leyes` (
  `pk_Datos_Ley` int(11) NOT NULL,
  `Nombre_de_Ley` varchar(50) NOT NULL,
  `Numero_de_Articulo` int(11) NOT NULL,
  `Detalle_Art` varchar(50) NOT NULL,
  `Grupo_pk` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leyes`
--

INSERT INTO `tbl_leyes` (`pk_Datos_Ley`, `Nombre_de_Ley`, `Numero_de_Articulo`, `Detalle_Art`, `Grupo_pk`, `Estado`) VALUES
(1, 'Ley General de Contabilidad', 1, 'aquí va todo el texto del articulo', 1, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pagos`
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
-- Dumping data for table `tbl_pagos`
--

INSERT INTO `tbl_pagos` (`pk_Pago`, `Usuario_pk`, `Descripcion`, `Folio_Pago`, `Fecha_Pago`, `Consepto_Pago`, `Importe`, `Estado`) VALUES
(1, 2, 'Pago mes 04', 'asdawe3', '2021-04-08', 'ABRIL', '500', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permisos`
--

CREATE TABLE `tbl_permisos` (
  `pk_Permiso` int(11) NOT NULL,
  `Descripcion` bit(1) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `pk_Rol` int(11) NOT NULL,
  `Nombre_Rol` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`pk_Rol`, `Nombre_Rol`, `Descripcion`, `Estado`) VALUES
(2, 'Administrador', 'Acceso a todo x.', b'1'),
(3, 'Usuario', 'Acceso limitado', b'1'),
(4, 'Usuario', 'Solo acceso basico', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ter_clave`
--

CREATE TABLE `tbl_ter_clave` (
  `pk_Datos_ley` int(11) NOT NULL,
  `Agp_Termino_Clave` int(11) NOT NULL,
  `Termino_Clave_pk` int(11) NOT NULL,
  `Ley_pk` int(11) NOT NULL,
  `Articulo` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ter_clave`
--

INSERT INTO `tbl_ter_clave` (`pk_Datos_ley`, `Agp_Termino_Clave`, `Termino_Clave_pk`, `Ley_pk`, `Articulo`, `Estado`) VALUES
(1, 1, 1, 2, 2, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
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
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`pk_Usuario`, `Nombre`, `Apellidos`, `Telefono`, `Correo`, `Usuario`, `Contrasena`, `Fecha_Alta`, `User_Rol_pk`, `Estado`) VALUES
(2, 'Daniel', 'Vallin', '4492793463', 'dan@gmail.com', 'Admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-04-08', 2, b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`pk_Ter_Clave`),
  ADD UNIQUE KEY `pk_Ter_Clave` (`pk_Ter_Clave`),
  ADD KEY `fk_UsuarioCat` (`Usuario_pk`);

--
-- Indexes for table `tbl_gpo_leyes`
--
ALTER TABLE `tbl_gpo_leyes`
  ADD PRIMARY KEY (`pk_Gpo_Ley`),
  ADD UNIQUE KEY `pk_Gpo_Ley` (`pk_Gpo_Ley`);

--
-- Indexes for table `tbl_leyes`
--
ALTER TABLE `tbl_leyes`
  ADD PRIMARY KEY (`pk_Datos_Ley`),
  ADD UNIQUE KEY `pk_Datos_Ley` (`pk_Datos_Ley`),
  ADD KEY `fk_LeyesG` (`Grupo_pk`);

--
-- Indexes for table `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  ADD PRIMARY KEY (`pk_Pago`),
  ADD UNIQUE KEY `pk_Pago` (`pk_Pago`),
  ADD KEY `fk_Pagos` (`Usuario_pk`);

--
-- Indexes for table `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD PRIMARY KEY (`pk_Permiso`),
  ADD UNIQUE KEY `pk_Permiso` (`pk_Permiso`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`pk_Rol`),
  ADD UNIQUE KEY `pk_Rol` (`pk_Rol`);

--
-- Indexes for table `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  ADD PRIMARY KEY (`pk_Datos_ley`),
  ADD UNIQUE KEY `pk_Datos_ley` (`pk_Datos_ley`),
  ADD KEY `fk_Ter_Clave` (`Termino_Clave_pk`),
  ADD KEY `fk_Ley` (`Ley_pk`);

--
-- Indexes for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`pk_Usuario`),
  ADD UNIQUE KEY `pk_Usuario` (`pk_Usuario`),
  ADD KEY `fk_UserRol` (`User_Rol_pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `pk_Ter_Clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gpo_leyes`
--
ALTER TABLE `tbl_gpo_leyes`
  MODIFY `pk_Gpo_Ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_leyes`
--
ALTER TABLE `tbl_leyes`
  MODIFY `pk_Datos_Ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  MODIFY `pk_Pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  MODIFY `pk_Permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `pk_Rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  MODIFY `pk_Datos_ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `pk_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD CONSTRAINT `fk_UsuarioCat` FOREIGN KEY (`Usuario_pk`) REFERENCES `tbl_usuarios` (`pk_Usuario`);

--
-- Constraints for table `tbl_leyes`
--
ALTER TABLE `tbl_leyes`
  ADD CONSTRAINT `fk_LeyesG` FOREIGN KEY (`Grupo_pk`) REFERENCES `tbl_gpo_leyes` (`pk_Gpo_Ley`);

--
-- Constraints for table `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  ADD CONSTRAINT `fk_Pagos` FOREIGN KEY (`Usuario_pk`) REFERENCES `tbl_usuarios` (`pk_Usuario`);

--
-- Constraints for table `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  ADD CONSTRAINT `fk_Ley` FOREIGN KEY (`Ley_pk`) REFERENCES `tbl_usuarios` (`pk_Usuario`),
  ADD CONSTRAINT `fk_Ter_Clave` FOREIGN KEY (`Termino_Clave_pk`) REFERENCES `tbl_cat` (`pk_Ter_Clave`);

--
-- Constraints for table `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_UserRol` FOREIGN KEY (`User_Rol_pk`) REFERENCES `tbl_roles` (`pk_Rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
