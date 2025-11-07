-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2025 a las 21:33:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `name` varchar(50) CHARACTER SET koi8r COLLATE koi8r_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET koi8r COLLATE koi8r_general_ci DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `tel` varchar(50) DEFAULT NULL,
  `password` varchar(225) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`name`, `email`, `date`, `tel`, `password`, `id`) VALUES
('jonathan', 'jonstate8@gmail.com', '2025-10-23 00:00:00', '7621243525', 'Jonalive73', 2),
('carlos', 'jonstate20@gmail.com', '2025-10-30 00:00:00', '7621205034', 'Jonalive73', 3),
('migel', 'migel20@gmail.com', '2025-10-30 00:00:00', '7627677778', 'Jonalive73', 4),
('victor', 'jonstate40@gmail.com', '0000-00-00 00:00:00', '7621226565', 'Jonalive73', 5),
('victor', 'jonstate40@gmail.com', '0000-00-00 00:00:00', '7621226565', 'Jonalive73', 6),
('JUAN', 'jonstate40@gmail.com', '0000-00-00 00:00:00', '7621226565', 'Jonalive73', 7),
('JUAN', 'jonstate40@gmail.com', '0000-00-00 00:00:00', '7621226565', 'Jonalive73', 8),
('', '', '0000-00-00 00:00:00', '', '', 10),
('', '', '0000-00-00 00:00:00', '', '', 12),
('', '', '0000-00-00 00:00:00', '', '', 13),
('', '', '0000-00-00 00:00:00', '', '', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbldetalleventa`
--

INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) VALUES
(3, 11, 1, 1000.00, 1, 0),
(4, 50, 5, 400.00, 1, 0),
(5, 50, 6, 500.00, 1, 0),
(6, 51, 5, 400.00, 1, 0),
(7, 51, 6, 500.00, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos2`
--

CREATE TABLE `tblproductos2` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblproductos2`
--

INSERT INTO `tblproductos2` (`id`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'libro1\r\n', 300, 'This new book on PHP 7 introduces writing solid, secure, object-oriented code in the new PHP 7: you will create a complete three-tier application using a natural process of building and testing modules within each tier. This practical approach teaches you about app development and introduces PHP features when they are actually needed rather than providing you with abstract theory and contrived examples.\r\n\r\n', '\r\nhttps://plus.unsplash.com/premium_photo-1695405363183-e55554168063?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2VuJTIwZGlnaXRhbHxlbnwwfHwwfHx8MA%3D%3D&fm=jpg&q=60&w=3000\r\n'),
(5, 'libro2', 400, '1 BESTSELLER DEL NEW YORK TIMES • Del maestro de los thrillers legales, un clásico del \"suspenso de traje y daga\" (The New York Times): En la parte superior de su clase en Harvard Law, Mitch McDeere tuvo su elección de las mejores firmas de Estados Unidos. Cometió un error mortal.', 'https://images-na.ssl-images-amazon.com/images/I/51u-ERS1W8L._SX396_BO1,204,203,200_.jpg'),
(6, 'libro 2', 500, 'El amado bestseller mundial # 1 de John Green, autor de The Anthropocene Reviewed y Turtles All the Way Down\r\n\r\n\"John Green es uno de los mejores escritores vivos\". –E. Lockhart, autor # 1 en ventas de We Were Liars\r\n\r\n\"La mejor historia romántica de esta década\".\r\n\r\n#1 New York Times Bestseller • #1 Wall Street Journal Bestseller • #1 USA Today Bestseller • #1 International Bestseller', '\r\nhttps://plus.unsplash.com/premium_photo-1695405363183-e55554168063?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2VuJTIwZGlnaXRhbHxlbnwwfHwwfHx8MA%3D%3D&fm=jpg&q=60&w=3000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,0) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblventas`
--

INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(11, 'bmmqathddcvkvv3h7rjs220n6p', '', '0000-00-00 00:00:00', 'josntate8@gmail.com', 900, 'pendiente'),
(12, 'bmmqathddcvkvv3h7rjs220n6p', '', '0000-00-00 00:00:00', 'josntate8@gmail.com', 900, 'pendiente'),
(14, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:18:29', 'josntate8@gmail.com', 900, 'pendiente'),
(15, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:19:33', 'josntate8@gmail.com', 900, 'pendiente'),
(16, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:20:16', 'josntate8@gmail.com', 900, 'pendiente'),
(17, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:21:24', '', 900, 'pendiente'),
(18, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:22:02', 'email', 900, 'pendiente'),
(19, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:22:05', 'email', 900, 'pendiente'),
(20, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:23:06', '', 900, 'pendiente'),
(21, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:24:55', 'jon8@gmail.com', 900, 'pendiente'),
(22, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 13:27:52', 'crisnz141218@gmail.com', 1200, 'pendiente'),
(23, 'bmmqathddcvkvv3h7rjs220n6p', '', '2025-11-04 16:15:52', 'jonstate8@gmail.com', 0, 'pendiente'),
(36, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 10:13:46', 'jonstate8@gmail.com', 0, 'pendiente'),
(37, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 10:13:58', 'jonstate8@gmail.com', 0, 'pendiente'),
(38, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 10:14:49', 'jon8@gmail.com', 900, 'pendiente'),
(39, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 10:16:37', 'jon8@gmail.com', 900, 'pendiente'),
(40, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 10:16:49', 'jon8@gmail.com', 900, 'pendiente'),
(41, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 10:34:34', 'jon8@gmail.com', 900, 'pendiente'),
(42, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 10:36:08', 'jon8@gmail.com', 900, 'pendiente'),
(43, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:35:49', 'jon8@gmail.com', 900, 'pendiente'),
(44, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:35:58', 'jon8@gmail.com', 900, 'pendiente'),
(45, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:36:12', 'jonstate8@gmail.com', 900, 'pendiente'),
(46, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:38:08', 'jonstate8@gmail.com', 900, 'pendiente'),
(47, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:38:17', 'jonstate8@gmail.com', 900, 'pendiente'),
(48, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:39:25', 'jonstate8@gmail.com', 900, 'pendiente'),
(49, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:39:35', 'jonstate8@gmail.com', 900, 'pendiente'),
(50, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:40:43', 'jonstate8@gmail.com', 900, 'pendiente'),
(51, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:40:51', 'jonstate8@gmail.com', 900, 'pendiente'),
(52, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:44:21', 'jonstate8@gmail.com', 900, 'pendiente'),
(53, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:50:25', 'jonstate8@gmail.com', 900, 'pendiente'),
(54, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:50:35', 'jonstate8@gmail.com', 900, 'pendiente'),
(55, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:50:39', 'jonstate8@gmail.com', 900, 'pendiente'),
(56, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:50:42', 'jonstate8@gmail.com', 900, 'pendiente'),
(57, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:51:40', 'jonstate8@gmail.com', 900, 'pendiente'),
(58, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:51:43', 'jonstate8@gmail.com', 900, 'pendiente'),
(59, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:56:06', 'jonstate8@gmail.com', 900, 'pendiente'),
(60, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 11:56:57', 'jonstate8@gmail.com', 900, 'pendiente'),
(61, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 12:03:01', 'jonstate8@gmail.com', 900, 'pendiente'),
(62, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 12:03:10', 'jonstate8@gmail.com', 900, 'pendiente'),
(63, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 12:03:46', 'jonstate8@gmail.com', 900, 'pendiente'),
(64, '188n1nduip8na0ooub5m55hkag', '', '2025-11-05 12:05:56', 'jonstate8@gmail.com', 900, 'pendiente'),
(65, '188n1nduip8na0ooub5m55hkag', '', '2025-11-05 12:06:59', 'jonstate8@gmail.com', 400, 'pendiente'),
(66, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 12:15:39', 'jonstate8@gmail.com', 900, 'pendiente'),
(67, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 12:18:08', 'jonstate8@gmail.com', 0, 'pendiente'),
(68, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 12:18:41', 'jon8@gmail.com', 0, 'pendiente'),
(69, 'b3812m7d06skc9p4ddbdgba5bh', '', '2025-11-05 12:29:11', 'jon8@gmail.com', 400, 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `tblproductos2`
--
ALTER TABLE `tblproductos2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tblproductos2`
--
ALTER TABLE `tblproductos2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
