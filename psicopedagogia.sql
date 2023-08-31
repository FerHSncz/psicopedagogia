-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-08-2023 a las 06:18:16
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20386295_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `telefono`, `carrera`, `email`, `password`) VALUES
(1, 'Edgar Lopez', '3121212120', 'Ing. en Procesos Alimentarios', 'edgar@outlook.com', '$2y$10$r1vahxL75scjI.dLrOLvkeHqpc7GzmxMKtS2rk.BxHZgkFZjwItOC'),
(2, 'Alexis Aldair Gomez Mata', '7580123456', 'Ing. en Desarrollo y Gestión de Software', 'alex@gmail.com', '$2y$10$vHM37hAeUPaX7EVxPuN09Oj2ke0A5cB17ndVf0e2jscIWtQVT04K6'),
(3, 'Yahir ', '7421009090', 'Ing. en Desarrollo y Gestión de Software', '20307040@utcgg.edu.mx', '$2y$10$tG/J9dKu.0h8QXbxmD3VEeS2UmYL1gF0li0loeztGbvD0l3L4AYpW'),
(4, 'Fernando', '7422920990', 'Ing. en Desarrollo y Gestión de Software', '20307040@utcgg.edu.mx', '$2y$10$drdrvCKXQnUTF7I3ATb0Jev5mjvNbSeU.AZzkMwMfyDgv0HMsXZkK'),
(5, 'verijona rosa melcacho', '7581016969', 'Ing. en Procesos Alimentarios', 'verija69@gmail.com', '$2y$10$YrARLK8BXnrwxJkp2nOmHOkkz53a82W57OFXw.XQ/HGR.DRyilS2q'),
(6, 'profe denis', '7551236969', 'Ing. en Logística Internacional', 'denis@gmail.com', '$2y$10$UUk.K1.Th5nhEJCZzJgLTuSCVjo5SCdM/RKlFG4g.I1xnzJX6t4R6'),
(7, 'Luis Fernando HS', '7581016969', 'Ing. en Desarrollo y Gestión de Software', 'fer@gmail.com', '$2y$10$NHpId5MRrV6.H5S8g/HNzuBP6frp0vZGJh.JEE2sb/JMyjCIk26Fm'),
(8, 'Yahir', '7421122200', 'Lic. en Gestión del Capital Humano', 'yahir@gmail.com', '$2y$10$b.Gf8ch02.k5kEQ964005e..rjG788gVvaK1Inj3Jr05avIOTeD3i');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `honey`
--

CREATE TABLE `honey` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `p1` tinyint(1) NOT NULL,
  `p2` tinyint(1) NOT NULL,
  `p3` tinyint(1) NOT NULL,
  `p4` tinyint(1) NOT NULL,
  `p5` tinyint(1) NOT NULL,
  `p6` tinyint(1) NOT NULL,
  `p7` tinyint(1) NOT NULL,
  `p8` tinyint(1) NOT NULL,
  `p9` tinyint(1) NOT NULL,
  `p10` tinyint(1) NOT NULL,
  `p11` tinyint(1) NOT NULL,
  `p12` tinyint(1) NOT NULL,
  `p13` tinyint(1) NOT NULL,
  `p14` tinyint(1) NOT NULL,
  `p15` tinyint(1) NOT NULL,
  `p16` tinyint(1) NOT NULL,
  `p17` tinyint(1) NOT NULL,
  `p18` tinyint(1) NOT NULL,
  `p19` tinyint(1) NOT NULL,
  `p20` tinyint(1) NOT NULL,
  `p21` tinyint(1) NOT NULL,
  `p22` tinyint(1) NOT NULL,
  `p23` tinyint(1) NOT NULL,
  `p24` tinyint(1) NOT NULL,
  `p25` tinyint(1) NOT NULL,
  `p26` tinyint(1) NOT NULL,
  `p27` tinyint(1) NOT NULL,
  `p28` tinyint(1) NOT NULL,
  `p29` tinyint(1) NOT NULL,
  `p30` tinyint(1) NOT NULL,
  `p31` tinyint(1) NOT NULL,
  `p32` tinyint(1) NOT NULL,
  `p33` tinyint(1) NOT NULL,
  `p34` tinyint(1) NOT NULL,
  `p35` tinyint(1) NOT NULL,
  `p36` tinyint(1) NOT NULL,
  `p37` tinyint(1) NOT NULL,
  `p38` tinyint(1) NOT NULL,
  `p39` tinyint(1) NOT NULL,
  `p40` tinyint(1) NOT NULL,
  `p41` tinyint(1) NOT NULL,
  `p42` tinyint(1) NOT NULL,
  `p43` tinyint(1) NOT NULL,
  `p44` tinyint(1) NOT NULL,
  `p45` tinyint(1) NOT NULL,
  `p46` tinyint(1) NOT NULL,
  `p47` tinyint(1) NOT NULL,
  `p48` tinyint(1) NOT NULL,
  `p49` tinyint(1) NOT NULL,
  `p50` tinyint(1) NOT NULL,
  `p51` tinyint(1) NOT NULL,
  `p52` tinyint(1) NOT NULL,
  `p53` tinyint(1) NOT NULL,
  `p54` tinyint(1) NOT NULL,
  `p55` tinyint(1) NOT NULL,
  `p56` tinyint(1) NOT NULL,
  `p57` tinyint(1) NOT NULL,
  `p58` tinyint(1) NOT NULL,
  `p59` tinyint(1) NOT NULL,
  `p60` tinyint(1) NOT NULL,
  `p61` tinyint(1) NOT NULL,
  `p62` tinyint(1) NOT NULL,
  `p63` tinyint(1) NOT NULL,
  `p64` tinyint(1) NOT NULL,
  `p65` tinyint(1) NOT NULL,
  `p66` tinyint(1) NOT NULL,
  `p67` tinyint(1) NOT NULL,
  `p68` tinyint(1) NOT NULL,
  `p69` tinyint(1) NOT NULL,
  `p70` tinyint(1) NOT NULL,
  `p71` tinyint(1) NOT NULL,
  `p72` tinyint(1) NOT NULL,
  `p73` tinyint(1) NOT NULL,
  `p74` tinyint(1) NOT NULL,
  `p75` tinyint(1) NOT NULL,
  `p76` tinyint(1) NOT NULL,
  `p77` tinyint(1) NOT NULL,
  `p78` tinyint(1) NOT NULL,
  `p79` tinyint(1) NOT NULL,
  `p80` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `honey`
--

INSERT INTO `honey` (`id`, `nombre`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `p38`, `p39`, `p40`, `p41`, `p42`, `p43`, `p44`, `p45`, `p46`, `p47`, `p48`, `p49`, `p50`, `p51`, `p52`, `p53`, `p54`, `p55`, `p56`, `p57`, `p58`, `p59`, `p60`, `p61`, `p62`, `p63`, `p64`, `p65`, `p66`, `p67`, `p68`, `p69`, `p70`, `p71`, `p72`, `p73`, `p74`, `p75`, `p76`, `p77`, `p78`, `p79`, `p80`) VALUES
(1, 'Luis Fernando HS', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'ADMINISTRADOR', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'verijona rosa melcacho', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 'verijona rosa melcacho', 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 1, 1, 0),
(5, 'Yahir', 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 'ADMINISTRADOR', 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefearea`
--

CREATE TABLE `jefearea` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `jefearea`
--

INSERT INTO `jefearea` (`id`, `nombre`, `email`, `password`, `telefono`) VALUES
(1, 'ADMINISTRADOR', 'admin@admin.com', '$2y$10$n.Gd7RtMbEMhQXl8NB7q9eYFFwavVNkh/O3kMSzqcmtvJpzrHKxUC', '7123456780');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pnl`
--

CREATE TABLE `pnl` (
  `id` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `p1` int(100) NOT NULL,
  `p2` int(100) NOT NULL,
  `p3` int(100) NOT NULL,
  `p4` int(100) NOT NULL,
  `p5` int(100) NOT NULL,
  `p6` int(100) NOT NULL,
  `p7` int(100) NOT NULL,
  `p8` int(100) NOT NULL,
  `p9` int(100) NOT NULL,
  `p10` int(100) NOT NULL,
  `p11` int(100) NOT NULL,
  `p12` int(100) NOT NULL,
  `p13` int(100) NOT NULL,
  `p14` int(100) NOT NULL,
  `p15` int(100) NOT NULL,
  `p16` int(100) NOT NULL,
  `p17` int(100) NOT NULL,
  `p18` int(100) NOT NULL,
  `p19` int(100) NOT NULL,
  `p20` int(100) NOT NULL,
  `p21` int(100) NOT NULL,
  `p22` int(100) NOT NULL,
  `p23` int(100) NOT NULL,
  `p24` int(100) NOT NULL,
  `p25` int(100) NOT NULL,
  `p26` int(100) NOT NULL,
  `p27` int(100) NOT NULL,
  `p28` int(100) NOT NULL,
  `p29` int(100) NOT NULL,
  `p30` int(100) NOT NULL,
  `p31` int(100) NOT NULL,
  `p32` int(100) NOT NULL,
  `p33` int(100) NOT NULL,
  `p34` int(100) NOT NULL,
  `p35` int(100) NOT NULL,
  `p36` int(100) NOT NULL,
  `p37` int(100) NOT NULL,
  `p38` int(100) NOT NULL,
  `p39` int(100) NOT NULL,
  `p40` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pnl`
--

INSERT INTO `pnl` (`id`, `nombre`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `p38`, `p39`, `p40`) VALUES
(1, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, '', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(4, '', 1, 1, 1, 3, 1, 3, 1, 3, 2, 1, 3, 3, 1, 2, 2, 2, 1, 3, 1, 1, 1, 3, 1, 3, 2, 3, 3, 3, 1, 3, 3, 3, 2, 1, 1, 2, 1, 2, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologos`
--

CREATE TABLE `psicologos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `psicologos`
--

INSERT INTO `psicologos` (`id`, `nombre`, `email`, `password`, `telefono`) VALUES
(1, 'Ana Lilia Moreno Abarca', 'ana@gmail.com', '$2y$10$Fo/0qcQGYt90Nq3X460sVeC5bOiXMyynHVGY2dUIcM1LBggnj/kCu', '7551333347'),
(2, 'Iyanu Hernández Adame', 'iya@gmail.com', '$2y$10$MeZKLX1Utd41LXVSjQW7Nenkv2XTURTNeFcJwSW1nZ.1t9ScWSeNa', '7581009320'),
(3, 'Psicologo1', '20304050@utcgg.edu.mx', '$2y$10$Ul1x85wqiNHZzAgp6DMlkuakB5nhYuBmLh8kT/fBm1ZxltevoVkF.', '7421009988'),
(4, 'Yahir ', '20307040@utcgg.edu.mx', '$2y$10$0WArYGR9rCl5l6IUfDJwPOUKAPTWw0AVsY2kr2AqQZgpU4gO5ECSq', '742009922'),
(5, 'fernando', 'fernando@gmail.com', '$2y$10$IEsQ0jzFKn1cQ6.z8V1jjuqR56fjlgDVuotFc8esRNZ0ENwFivu0G', '5527151013');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test1`
--

CREATE TABLE `test1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `p1` tinyint(1) NOT NULL,
  `p2` tinyint(1) NOT NULL,
  `p3` tinyint(1) NOT NULL,
  `p4` tinyint(1) NOT NULL,
  `p5` tinyint(1) NOT NULL,
  `p6` tinyint(1) NOT NULL,
  `p7` tinyint(1) NOT NULL,
  `p8` tinyint(1) NOT NULL,
  `p9` tinyint(1) NOT NULL,
  `p10` tinyint(1) NOT NULL,
  `p11` tinyint(1) NOT NULL,
  `p12` tinyint(1) NOT NULL,
  `p13` tinyint(1) NOT NULL,
  `p14` tinyint(1) NOT NULL,
  `p15` tinyint(1) NOT NULL,
  `p16` tinyint(1) NOT NULL,
  `p17` tinyint(1) NOT NULL,
  `p18` tinyint(1) NOT NULL,
  `p19` tinyint(1) NOT NULL,
  `p20` tinyint(1) NOT NULL,
  `p21` tinyint(1) NOT NULL,
  `p22` tinyint(4) NOT NULL,
  `p23` tinyint(1) NOT NULL,
  `p24` tinyint(1) NOT NULL,
  `p25` tinyint(1) NOT NULL,
  `p26` tinyint(1) NOT NULL,
  `p27` tinyint(1) NOT NULL,
  `p28` tinyint(1) NOT NULL,
  `p29` tinyint(1) NOT NULL,
  `p30` tinyint(1) NOT NULL,
  `p31` tinyint(1) NOT NULL,
  `p32` tinyint(1) NOT NULL,
  `p33` tinyint(1) NOT NULL,
  `p34` tinyint(1) NOT NULL,
  `p35` tinyint(1) NOT NULL,
  `p36` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `test1`
--

INSERT INTO `test1` (`id`, `nombre`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`) VALUES
(1, 'Luis Fernando HS', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `honey`
--
ALTER TABLE `honey`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefearea`
--
ALTER TABLE `jefearea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pnl`
--
ALTER TABLE `pnl`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `psicologos`
--
ALTER TABLE `psicologos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `honey`
--
ALTER TABLE `honey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `jefearea`
--
ALTER TABLE `jefearea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pnl`
--
ALTER TABLE `pnl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `psicologos`
--
ALTER TABLE `psicologos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
