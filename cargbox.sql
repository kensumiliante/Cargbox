-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2016 a las 04:40:24
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cargbox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_contact`
--

CREATE TABLE `data_contact` (
  `Id_dc` int(11) NOT NULL,
  `Nm_Company` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nm_Officer` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `data_contact`
--

INSERT INTO `data_contact` (`Id_dc`, `Nm_Company`, `Nm_Officer`, `Phone`, `Mail`) VALUES
(8, 'La sante', 'Cristina Perez', 987654321, 'admonarchivo@la'),
(9, 'Pepsico', 'luis Gonzales', 23456789123, 'luisgonzales4567@outlook.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_receiver`
--

CREATE TABLE `data_receiver` (
  `Id_dr` int(11) NOT NULL,
  `Id_du` int(11) NOT NULL,
  `Name_Company` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Document` int(20) NOT NULL,
  `Contact_Name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Address_1` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Address_2` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Department` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `City` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cell` int(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Directory` tinyint(4) NOT NULL,
  `Status` int(20) NOT NULL,
  `Date_Rg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `data_receiver`
--

INSERT INTO `data_receiver` (`Id_dr`, `Id_du`, `Name_Company`, `Document`, `Contact_Name`, `Address_1`, `Address_2`, `Department`, `City`, `Mail`, `Cell`, `Phone`, `Directory`, `Status`, `Date_Rg`) VALUES
(10000128, 58, 'pepsico', 0, 'juanita alvarez', 'calle 123 con 11 223', 'piso 123', 'Aragua', 'Amazonas', 'Null', 987654321, 123456789, 0, 1, '2016-12-09 21:21:10'),
(10000131, 58, 'z comunicaciones', 0, 'fabiana parra', 'calle 9 n 10 11', 'conjunto residencial la xyz', 'Amazonas', 'Aragua', 'Null', 0, 2345678901, 0, 1, '2016-12-09 21:22:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_sending`
--

CREATE TABLE `data_sending` (
  `Id_ds` int(11) NOT NULL,
  `Id_du` int(11) NOT NULL,
  `Id_dr` int(11) NOT NULL,
  `Pieces` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Weight` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Value_D` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Value_A` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Content` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Docs` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Cost_Center` bigint(20) NOT NULL,
  `Way_Pay` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `Hour` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Whenever` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `data_sending`
--

INSERT INTO `data_sending` (`Id_ds`, `Id_du`, `Id_dr`, `Pieces`, `Weight`, `Value_D`, `Value_A`, `Content`, `Docs`, `Cost_Center`, `Way_Pay`, `Hour`, `Whenever`) VALUES
(633, 58, 10000128, '2', '41', '20000', '20000', 'zapatos', '2', 200153364, 'CtCargbox', '17:00', 'Hoy'),
(637, 58, 10000132, '2', '10', '2000', '2000', 'documentos', '1', 2015000034, 'CtCargbox', '17:00', 'Hoy'),
(638, 64, 10000133, '1', '10', '10000', '10000', 'computador', '2', 11225511, 'CtCargbox', '09:00', 'Hoy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_user`
--

CREATE TABLE `data_user` (
  `Id_du` int(11) NOT NULL,
  `Name_Company` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Activity` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Contact_Name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Address_1` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Address_2` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Department` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `City` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cell` bigint(20) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Terms` char(5) COLLATE utf8_spanish_ci NOT NULL,
  `Identity` int(11) NOT NULL,
  `Date_Rg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `data_user`
--

INSERT INTO `data_user` (`Id_du`, `Name_Company`, `Activity`, `Contact_Name`, `Address_1`, `Address_2`, `Department`, `City`, `Mail`, `Cell`, `Phone`, `Terms`, `Identity`, `Date_Rg`) VALUES
(62, ' Job', '12345678', 'Carolina ', 'san jose', 'Edificio 1 oficina 2', 'Amazonas', 'Amazonas', 'carolina@ibossjob.com', 12345678, 87654321, 'No', 2, '2016-12-09 21:07:03'),
(80, 'kensu', '8000521', 'kensu miliante', 'calle imaginación', 'casa 1234Abc', 'Amazonas', 'Amazonas', 'kensumiliante@hotmail.com', 3184253737, 987654321, 'No', 2, '2016-12-09 21:13:01'),
(81, '', '', 'anthony', 'cagua', 'ckk', 'Cundinamarca', 'cagua', 'anamarian@gmail.com', 4321098765, 12345678, 'No', 1, '2016-12-11 03:29:48'),
(82, '', '', 'juan', 'cagua', 'cagua', 'Aragua', 'cagua', 'juan@gmail.com', 123456789, 123456789, 'No', 1, '2016-12-12 03:33:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `User` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nick_Name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Date_R` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Date_UR` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `permiso` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `User`, `Password`, `Nick_Name`, `Date_R`, `Date_UR`, `permiso`) VALUES
(80, 'kensumiliante@gmail.com', 'kensu123', '', '2016-12-14 03:40:02', '0000-00-00 00:00:00', 'usuario'),
(81, 'anamarian@gmail.com', 'ciencia123', '', '2016-12-14 03:31:49', '0000-00-00 00:00:00', 'administrador'),
(82, 'any', 'ciencia123', '', '2016-12-12 03:30:53', '0000-00-00 00:00:00', 'cliente'),
(83, 'juan321@gmail.com', 'ciencia1234', '', '2016-12-14 03:39:30', '0000-00-00 00:00:00', 'gerente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data_contact`
--
ALTER TABLE `data_contact`
  ADD PRIMARY KEY (`Id_dc`);

--
-- Indices de la tabla `data_receiver`
--
ALTER TABLE `data_receiver`
  ADD PRIMARY KEY (`Id_dr`);

--
-- Indices de la tabla `data_sending`
--
ALTER TABLE `data_sending`
  ADD PRIMARY KEY (`Id_ds`);

--
-- Indices de la tabla `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`Id_du`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `data_contact`
--
ALTER TABLE `data_contact`
  MODIFY `Id_dc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `data_receiver`
--
ALTER TABLE `data_receiver`
  MODIFY `Id_dr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000132;
--
-- AUTO_INCREMENT de la tabla `data_sending`
--
ALTER TABLE `data_sending`
  MODIFY `Id_ds` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=639;
--
-- AUTO_INCREMENT de la tabla `data_user`
--
ALTER TABLE `data_user`
  MODIFY `Id_du` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
