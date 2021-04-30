-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2021 a las 01:26:29
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
-- Estructura de tabla para la tabla `tbl_menus`
--

CREATE TABLE `tbl_menus` (
  `pk_menu` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_menus`
--

INSERT INTO `tbl_menus` (`pk_menu`, `nombre`, `link`) VALUES
(1, 'Inicio', 'dashboard'),
(4, 'Grupo Leyes', 'Menu/cGrupo_Leyes'),
(5, 'Buscador Inteligente', 'Menu/cBuscador'),
(6, 'Usuarios', 'Menu/cUsuarios'),
(7, 'Pagos', 'Menu/cPagos'),
(8, 'Catalogo de Roles', 'Menu/cCatalogo'),
(10, 'Grupo de Leyes', 'Menu/cGrupo_Leyes'),
(11, 'Registro de Leyes', 'Menu/cTer_Clave'),
(12, 'Configuración Términos', 'Menu/cClaves'),
(13, 'Gestion de Leyes', 'Menu/cGestion'),
(14, '', 'Menu/cCuenta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD PRIMARY KEY (`pk_menu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `pk_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
