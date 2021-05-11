-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2021 a las 00:08:01
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
(2, 'Control Patrimonial', 2, '2021-01-01', b'1'),
(5, 'Fideicomiso', 2, '2021-04-27', b'1'),
(6, 'Manual de Contabilidad', 2, '2021-05-11', b'1'),
(7, 'Presupuesto', 2, '2021-05-11', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gestion`
--

CREATE TABLE `tbl_gestion` (
  `pk_Gestionid` int(11) NOT NULL,
  `Asociado` int(11) DEFAULT NULL,
  `Ley_pk` int(11) NOT NULL,
  `Ter_clave_pk` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `FUltReforma` date NOT NULL,
  `FEntradaVigo` date NOT NULL,
  `EstLey` varchar(50) NOT NULL,
  `ObjLey` varchar(1500) NOT NULL,
  `TipoLey` varchar(20) NOT NULL,
  `Introduccion` varchar(100) NOT NULL,
  `Num_Articulo` varchar(20) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Ref_Titulo` varchar(100) NOT NULL,
  `NomTitulo` varchar(100) NOT NULL,
  `Capitulo` int(11) NOT NULL,
  `Ref_Capitulo` varchar(100) NOT NULL,
  `NomCapitulo` varchar(100) NOT NULL,
  `Fraccion` varchar(100) NOT NULL,
  `Inciso` varchar(50) NOT NULL,
  `Parrafo` varchar(100) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `UltReforma` date NOT NULL,
  `Concepto` varchar(1500) NOT NULL,
  `Estatus` varchar(20) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_gestion`
--

INSERT INTO `tbl_gestion` (`pk_Gestionid`, `Asociado`, `Ley_pk`, `Ter_clave_pk`, `Fecha`, `FUltReforma`, `FEntradaVigo`, `EstLey`, `ObjLey`, `TipoLey`, `Introduccion`, `Num_Articulo`, `Tipo`, `Titulo`, `Ref_Titulo`, `NomTitulo`, `Capitulo`, `Ref_Capitulo`, `NomCapitulo`, `Fraccion`, `Inciso`, `Parrafo`, `Descripcion`, `UltReforma`, `Concepto`, `Estatus`, `Estado`) VALUES
(3, 1, 3, 1, '2006-03-30', '2015-12-30', '2006-03-01', 'Vigente', 'Tiene por objeto reglamentar los artículos 74 fracción IV, 75, 126, 127 y 134 de la Constitución Política de los Estados Unidos Mexicanos, en materia de programación, presupuestación, aprobación, ejercicio, control y evaluación de los ingresos y egresos públicos federales. Los sujetos obligados a cumplir las disposiciones de esta Ley deberán observar que la administración de los recursos públicos federales se realice con base en criterios de legalidad, honestidad, eficiencia, eficacia, economía, racionalidad, austeridad, transparencia, control, rendición de cuentas y equidad de género. La Auditoría fiscalizará el estricto cumplimiento de las disposiciones de esta Ley por parte de los sujetos obligados, conforme a las atribuciones que le confieren la Constitución Política de los Estados Unidos Mexicanos y la Ley de Fiscalización Superior de la Federación.', 'Federal', 'DECRETO EL CONGRESO GENERAL DE LOS ESTADOS UNIDOS MEXICANOS, DECRETA: SE EXPIDE LA LEY FEDERAL DE PR', '1', 'Normal', 'TÍTULO PRIMERO', '', 'Disposiciones Generales', 0, '', 'Objeto y Definiciones de la Ley, Reglas Generales y Ejecutores del Gasto', '', '', '1ro', 'La presente Ley es de orden público, y tiene por objeto reglamentar los artículos 74 fracción IV, 75, 126, 127 y 134 de la Constitución Política de los Estados Unidos Mexicanos, en materia de programación, presupuestación, aprobación, ejercicio, control y evaluación de los ingresos y egresos públicos federales. Los sujetos obligados a cumplir las disposiciones de esta Ley deberán observar que la administración de los recursos públicos federales se realice con base en criterios de legalidad, hone', '2015-12-30', 'No Aplica', 'Normal', b'1'),
(9, 1, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', '', '', '2do', 'La presente Ley es de observancia obligatoria para los poderes Ejecutivo, Legislativo y Judicial de la Federación, los estados y el Distrito Federal; los ayuntamientos de los municipios; los órganos político-administrativos de las demarcaciones territoriales del Distrito Federal; las entidades de la administración pública paraestatal, ya sean federales, estatales o municipales y los órganos autónomos federales y estatales.', '0000-00-00', '', 'Normal', b'1'),
(12, 1, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', '', '', '3er', 'Los gobiernos estatales deberán coordinarse con los municipales para que éstos armonicen su contabilidad con base en las disposiciones de esta Ley. El Gobierno de la Ciudad de México deberá coordinarse con los órganos político-administrativos de sus demarcaciones territoriales. Las entidades federativas deberán respetar los derechos de los municipios con población indígena, entre los cuales se encuentran el derecho a decidir las formas internas de convivencia política y el derecho a elegir, conf', '0000-00-00', '', 'Normal', b'1'),
(13, 2, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '2', 'Normal', '', '', '', 0, '', '', '', '', '1er', 'Los entes públicos aplicarán la contabilidad gubernamental para facilitar el registro y la fiscalización de los activos, pasivos, ingresos y gastos y, en general, contribuir a medir la eficacia, economía y eficiencia del gasto e ingresos públicos, la administración de la deuda pública, incluyendo las obligaciones contingentes y el patrimonio del Estado.', '0000-00-00', '', 'Normal', b'1'),
(14, 2, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', '', '', '2do', 'Los entes públicos deberán seguir las mejores prácticas contables nacionales e internacionales en apoyo a las tareas de planeación financiera, control de recursos, análisis y fiscalización.', '0000-00-00', '', 'Normal', b'1'),
(15, 3, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '3', 'Normal', '', '', '', 0, '', '', '', '', '1er', 'La contabilidad gubernamental determinará la valuación del patrimonio del Estado y su expresión en los estados financieros.', '0000-00-00', '', 'Normal', b'1'),
(16, 4, 1, 1, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '4', 'Normal', '', '', '', 0, '', '', 'I.', '', '', 'Armonización: la revisión, reestructuración y compatibilización de los modelos contables vigentes a nivel nacional, a partir de la adecuación y fortalecimiento de las disposiciones jurídicas que las rigen, de los procedimientos para el registro de las operaciones, de la información que deben generar los sistemas de contabilidad gubernamental, y de las características y contenido de los principales informes de rendición de cuentas;', '0000-00-00', '', 'Normal', b'1'),
(17, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'II.', '', '', 'Catálogo de cuentas: el documento técnico integrado por la lista de cuentas, los instructivos de manejo de cuentas y las guías contabilizadoras;', '0000-00-00', '', 'Normal', b'1'),
(18, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'III.', '', '', 'Comité: el comité consultivo;', '0000-00-00', '', 'Normal', b'1'),
(19, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'IV.', '', '', 'Contabilidad gubernamental: la técnica que sustenta los sistemas de contabilidad gubernamental y que se utiliza para el registro de las transacciones que llevan a cabo los entes públicos, expresados en términos monetarios, captando los diversos eventos económicos identificables y cuantificables que afectan los bienes e inversiones, las obligaciones y pasivos, así como el propio patrimonio, con el fin de generar información financiera que facilite la toma de decisiones y un apoyo confiable en la ', '0000-00-00', '', 'Normal', b'1'),
(20, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'V', '', '', 'Consejo: el consejo nacional de armonización contable;', '0000-00-00', '', 'Normal', b'1'),
(21, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'VI', '', '', 'Costo financiero de la deuda: los intereses, comisiones u otros gastos, derivados del uso de créditos;', '0000-00-00', '', 'Normal', b'1'),
(22, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'VII', '', '', 'Cuentas contables: las cuentas necesarias para el registro contable de las operaciones presupuestarias y contables, clasificadas en activo, pasivo y hacienda pública o patrimonio, y de resultados de los entes públicos;', '0000-00-00', '', 'Normal', b'1'),
(23, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'VIII', '', '', 'Cuentas presupuestarias: las cuentas que conforman los clasificadores de ingresos y gastos públicos;', '0000-00-00', '', 'Normal', b'1'),
(24, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'IX', '', '', 'Cuenta pública: el documento a que se refiere el artículo 74, fracción VI de la Constitución Política de los Estados Unidos Mexicanos; así como el informe que, conforme a las constituciones locales, rinden las entidades federativas y los municipios;', '0000-00-00', '', 'Normal', b'1'),
(25, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'X', '', '', 'Deuda pública: las obligaciones de pasivo, directas o contingentes, derivadas de financiamientos a cargo de los gobiernos federal, de las entidades federativas o municipales, en términos de las disposiciones legales aplicables, sin perjuicio de que dichas obligaciones tengan como propósito operaciones de canje o refinanciamiento;', '0000-00-00', '', 'Normal', b'1'),
(26, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XI', '', '', 'Endeudamiento neto: la diferencia entre el uso del financiamiento y las amortizaciones efectuadas de las obligaciones constitutivas de deuda pública, durante el período que se informa;', '0000-00-00', '', 'Normal', b'1'),
(27, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XII', '', '', 'Entes públicos: los poderes Ejecutivo, Legislativo y Judicial de la Federación y de las entidades federativas; los órganos autónomos de la Federación y de las entidades federativas; los ayuntamientos de los municipios; los órganos político-administrativos de las demarcaciones territoriales del Distrito Federal; y las entidades de la administración pública paraestatal federal, estatal o municipal;', '0000-00-00', '', 'Normal', b'1'),
(28, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XIII', '', '', 'Entidades federativas: los estados de la Federación y el Distrito Federal;', '0000-00-00', '', 'Normal', b'1'),
(29, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XIV', '', '', 'Gasto comprometido: el momento contable del gasto que refleja la aprobación por autoridad competente de un acto administrativo, u otro instrumento jurídico que formaliza una relación jurídica con terceros para la adquisición de bienes y servicios o ejecución de obras. En el caso de las obras a ejecutarse o de bienes y servicios a recibirse durante varios ejercicios, el compromiso será registrado por la parte que se ejecutará o recibirá, durante cada ejercicio;', '0000-00-00', '', 'Normal', b'1'),
(30, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XV', '', '', 'Gasto devengado: el momento contable del gasto que refleja el reconocimiento de una obligación de pago a favor de terceros por la recepción de conformidad de bienes, servicios y obras oportunamente contratados; así como de las obligaciones que derivan de tratados, leyes, decretos, resoluciones y sentencias definitivas;', '0000-00-00', '', 'Normal', b'1'),
(31, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XVI', '', '', 'Gasto ejercido: el momento contable del gasto que refleja la emisión de una cuenta por liquidar certificada debidamente aprobada por la autoridad competente;', '0000-00-00', '', 'Normal', b'1'),
(32, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XVII', '', '', 'Gasto pagado: el momento contable del gasto que refleja la cancelación total o parcial de las obligaciones de pago, que se concreta mediante el desembolso de efectivo o cualquier otro medio de pago;', '0000-00-00', '', 'Normal', b'1'),
(33, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XIII', '', '', 'Información financiera: la información presupuestaria y contable expresada en unidades monetarias, sobre las transacciones que realiza un ente público y los eventos económicos identificables y cuantificables que lo afectan, la cual puede representarse por reportes, informes, estados y notas que expresan su situación financiera, los resultados de su operación y los cambios en su patrimonio;', '0000-00-00', '', 'Normal', b'1'),
(34, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XIX', '', '', 'Ingreso devengado: el que se realiza cuando existe jurídicamente el derecho de cobro de impuestos, derechos, productos, aprovechamientos y otros ingresos por parte de los entes públicos;', '0000-00-00', '', 'Normal', b'1'),
(35, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XX', '', '', 'Inventario: la relación o lista de bienes muebles e inmuebles y mercancías comprendidas en el activo, la cual debe mostrar la descripción de los mismos, códigos de identificación y sus montos por grupos y clasificaciones específicas;', '0000-00-00', '', 'Normal', b'1'),
(36, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXI', '', '', 'Lista de cuentas: la relación ordenada y detallada de las cuentas contables, mediante la cual se clasifican el activo, pasivo y hacienda pública o patrimonio, los ingresos y gastos públicos, y cuentas denominadas de orden o memoranda;', '0000-00-00', '', 'Normal', b'1'),
(37, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXII', '', '', 'Manuales de contabilidad: los documentos conceptuales, metodológicos y operativos que contienen, como mínimo, su finalidad, el marco jurídico, lineamientos técnicos y el catálogo de cuentas, y la estructura básica de los principales estados financieros a generarse en el sistema;', '0000-00-00', '', 'Normal', b'1'),
(38, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXIII', '', '', 'Normas contables: los lineamientos, metodologías y procedimientos técnicos, dirigidos a dotar a los entes públicos de las herramientas necesarias para registrar correctamente las operaciones que afecten su contabilidad, con el propósito de generar información veraz y oportuna para la toma de decisiones y la formulación de estados financieros institucionales y consolidados;', '0000-00-00', '', 'Normal', b'1'),
(39, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXIV', '', '', 'Órganos autónomos: las personas de derecho público con autonomía en el ejercicio de sus funciones y en su administración, creadas por disposición expresa de la Constitución Política de los Estados Unidos Mexicanos, a los que se asignen recursos del Presupuesto de Egresos de la Federación a través de los ramos autónomos, así como las creadas por las constituciones de los estados o el Estatuto de Gobierno del Distrito Federal;', '0000-00-00', '', 'Normal', b'1'),
(40, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXV', '', '', 'Plan de cuentas: el documento en el que se definirán los dos primeros agregados a los que deberán alinearse las listas de cuentas que formularán los entes públicos;', '0000-00-00', '', 'Normal', b'1'),
(41, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXVI', '', '', 'Planeación del desarrollo: el Plan Nacional de Desarrollo, así como los planes de desarrollo de las entidades federativas, de los municipios y de las demarcaciones territoriales del Distrito Federal, conforme resulte aplicable a cada orden de gobierno;', '0000-00-00', '', 'Normal', b'1'),
(42, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXVII', '', '', 'Postulados básicos: los elementos fundamentales de referencia general para uniformar los métodos, procedimientos y prácticas contables;', '0000-00-00', '', 'Normal', b'1'),
(43, 4, 1, 0, '0000-00-00', '0000-00-00', '0000-00-00', 'Vigente', '', 'Federal', '', '', 'Normal', '', '', '', 0, '', '', 'XXVIII', '', '', 'Secretaría de Hacienda: la Secretaría de Hacienda y Crédito Público del Gobierno Federal;', '0000-00-00', '', 'Normal', b'1');

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
(1, 'Contabilidad Gubernamental', b'1'),
(2, 'Presupuesto Basado en Resultados', b'1'),
(3, 'Adquisiciones', b'1'),
(4, 'Transparencia y Rendición de Cuentas', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_leyes`
--

CREATE TABLE `tbl_leyes` (
  `pk_Datos_Ley` int(11) NOT NULL,
  `Nombre_de_Ley` varchar(100) NOT NULL,
  `Grupo_pk` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_leyes`
--

INSERT INTO `tbl_leyes` (`pk_Datos_Ley`, `Nombre_de_Ley`, `Grupo_pk`, `Estado`) VALUES
(1, 'Ley General de Contabilidad Gubernamental', 1, b'1'),
(2, 'Guías Contabilizadoras', 1, b'1'),
(3, 'Ley Federal de Presupuesto y Responsabilidad Hacendaria', 2, b'1'),
(4, 'Ley de Adquisiciones', 3, b'1');

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
  `rol_pk` int(11) NOT NULL,
  `read` int(11) NOT NULL,
  `insert` int(11) NOT NULL,
  `update` int(11) NOT NULL,
  `delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_permisos`
--

INSERT INTO `tbl_permisos` (`pk_Permiso`, `rol_pk`, `read`, `insert`, `update`, `delete`) VALUES
(1, 2, 1, 1, 1, 1),
(2, 4, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `pk_Rol` int(11) NOT NULL,
  `Nombre_Rol` varchar(50) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`pk_Rol`, `Nombre_Rol`, `Descripcion`, `Estado`) VALUES
(2, 'Administrador', 'Acceso a todo x.', b'1'),
(4, 'Usuario', 'Solo acceso basicos', b'1'),
(5, 'Subscriptor', '', b'1'),
(6, 'Demo', NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ter_clave`
--

CREATE TABLE `tbl_ter_clave` (
  `pk_Datos_ley` int(11) NOT NULL,
  `Termino_Clave_pk` int(11) NOT NULL,
  `Ley_pk` int(11) NOT NULL,
  `Articulo_pk` varchar(20) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ter_clave`
--

INSERT INTO `tbl_ter_clave` (`pk_Datos_ley`, `Termino_Clave_pk`, `Ley_pk`, `Articulo_pk`, `Descripcion`, `Estado`) VALUES
(1, 2, 1, '1', 'Referencia de control patrimonial 1\r\n', b'1'),
(2, 3, 1, '1', 'Referencia Fedeicomiso', b'1');

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
(2, 'Daniel ', 'S Vallin', '4492793463', 'danielvallin11@gmail.com', 'Admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-04-08', 2, b'1'),
(3, 'pruebas 2', 'hola', '4491235555', 'admin@gmail.com', 'Admin', '123', '2021-04-08', 4, b'1');

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
  ADD KEY `fk_leyes` (`Ley_pk`);

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
-- Indices de la tabla `tbl_menus`
--
ALTER TABLE `tbl_menus`
  ADD PRIMARY KEY (`pk_menu`);

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
  ADD UNIQUE KEY `pk_Permiso` (`pk_Permiso`),
  ADD KEY `fk_rol` (`rol_pk`);

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
  ADD KEY `fk_Ley` (`Ley_pk`),
  ADD KEY `fk_terminos` (`Termino_Clave_pk`),
  ADD KEY `fk_gestion` (`Articulo_pk`);

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
  MODIFY `pk_Ter_Clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_gestion`
--
ALTER TABLE `tbl_gestion`
  MODIFY `pk_Gestionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `tbl_gpo_leyes`
--
ALTER TABLE `tbl_gpo_leyes`
  MODIFY `pk_Gpo_Ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_leyes`
--
ALTER TABLE `tbl_leyes`
  MODIFY `pk_Datos_Ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_menus`
--
ALTER TABLE `tbl_menus`
  MODIFY `pk_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbl_pagos`
--
ALTER TABLE `tbl_pagos`
  MODIFY `pk_Pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  MODIFY `pk_Permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `pk_Rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  MODIFY `pk_Datos_ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `fk_UsuarioCat` FOREIGN KEY (`Usuario_pk`) REFERENCES `tbl_usuarios` (`pk_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_gestion`
--
ALTER TABLE `tbl_gestion`
  ADD CONSTRAINT `fk_leyes` FOREIGN KEY (`Ley_pk`) REFERENCES `tbl_leyes` (`pk_Datos_Ley`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol_pk`) REFERENCES `tbl_roles` (`pk_Rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_ter_clave`
--
ALTER TABLE `tbl_ter_clave`
  ADD CONSTRAINT `fk_Ley` FOREIGN KEY (`Ley_pk`) REFERENCES `tbl_leyes` (`pk_Datos_Ley`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_UserRol` FOREIGN KEY (`User_Rol_pk`) REFERENCES `tbl_roles` (`pk_Rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
