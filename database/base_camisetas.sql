-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2026 a las 17:33:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_camisetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisetas`
--

CREATE TABLE `camisetas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `equipo` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `liga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camisetas`
--

INSERT INTO `camisetas` (`id`, `titulo`, `descripcion`, `precio`, `equipo`, `imagen`, `categoria`, `liga`) VALUES
(1, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'FC Barcelona', 'barcelona.png', 'actual', 'LaLiga'),
(2, 'Primera equipacion 25/26', 'Camiseta oficial local', 30, 'Real Madrid', 'realmadrid.png', 'actual', 'LaLiga'),
(3, 'Primera equipacion 25/26', 'Camiseta oficial local', 30, 'Arsenal', 'arsenal.png', 'actual', 'Premier League'),
(4, 'Primera equipacion 25/26', 'Camiseta oficial local', 30, 'España', 'españa.png', 'selecciones', 'Selecciones'),
(5, 'Primera equipacion 25/26', 'Camiseta oficial local', 30, 'Manchester United', 'united.png', 'actual', 'Premier League'),
(6, 'Primera equipacion 25/26', 'Camiseta oficial local', 30, 'Ajax', 'ajax.png', 'actual', 'Eredivise'),
(7, 'Primera Equipación 25/26', 'Camiseta Oficial Local', 30, 'Real Oviedo', 'oviedo.png', 'actual', 'LaLiga'),
(8, 'Primera equipacion 25/26', 'Equipación oficial local', 30, 'Milan', 'milan.png', 'actual', 'Serie A'),
(9, 'Primera equipacion 25/26', 'Equipación oficial local', 30, 'Atletico de Madrid', 'atletico.png', 'actual', 'LaLiga'),
(10, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Athletic Club', 'athletic.png', 'actual', 'LaLiga'),
(11, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Real Sociedad', 'realsociedad.png', 'actual', 'LaLiga'),
(12, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Villarreal', 'villarreal.png', 'actual', 'LaLiga'),
(13, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Sevilla FC', 'sevilla.png', 'actual', 'LaLiga'),
(14, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Valencia CF', 'valencia.png', 'actual', 'LaLiga'),
(15, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Real Betis', 'betis.png', 'actual', 'LaLiga'),
(16, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Girona FC', 'girona.png', 'actual', 'LaLiga'),
(17, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Manchester City', 'city.png', 'actual', 'Premier League'),
(18, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Leipzig', 'leipzig.png', 'actual', 'Bundesliga'),
(19, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Liverpool', 'liverpool.png', 'actual', 'Premier League'),
(20, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Real Sporting', 'sporting.png', 'actual', 'LaLiga'),
(21, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Chelsea', 'chelsea.png', 'actual', 'Premier League'),
(22, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Tottenham', 'tottenham.png', 'actual', 'Premier League'),
(23, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Newcastle United', 'newcastle.png', 'actual', 'Premier League'),
(24, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Aston Villa', 'villa.png', 'actual', 'Premier League'),
(25, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'West Ham', 'westham.png', 'actual', 'Premier League'),
(26, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Brighton', 'brighton.png', 'actual', 'Premier League'),
(27, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'PSG', 'psg.png', 'actual', 'Ligue 1'),
(28, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'AS Monaco', 'monaco.png', 'actual', 'Ligue 1'),
(29, 'Primera equipación 1993', 'Camiseta oficial local', 30, 'Olympique de Marseille', 'marsellaretro.jpeg', 'retro', 'Ligue 1'),
(30, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Olympique Lyonnais', 'lyon.png', 'actual', 'Ligue 1'),
(31, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Lille OSC', 'lille.png', 'actual', 'Ligue 1'),
(32, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Juventus', 'juve.png', 'actual', 'Serie A'),
(33, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Inter de Milán', 'inter.png', 'actual', 'Serie A'),
(34, 'Primera equipación 2000/02', 'Camiseta oficial local', 30, 'AC Milan', 'milanretro.png', 'retro', 'Serie A'),
(35, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Napoli', 'napoli.png', 'actual', 'Serie A'),
(36, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'AS Roma', 'roma.png', 'actual', 'Serie A'),
(37, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Lazio', 'lazio.png', 'actual', 'Serie A'),
(38, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Atalanta', 'atalanta.png', 'actual', 'Serie A'),
(39, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Fiorentina', 'fiorentina.png', 'actual', 'Serie A'),
(40, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Bologna', 'bolonia.png', 'actual', 'Serie A'),
(41, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Como', 'como.png', 'actual', 'Serie A'),
(42, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Bayern München', 'bayern.png', 'actual', 'Bundesliga'),
(43, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Borussia Dortmund', 'dortmund.png', 'actual', 'Bundesliga'),
(44, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Borussia Mönchengladbach', 'gladbach.jpg', 'actual', 'Bundesliga'),
(45, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Bayer Leverkusen', 'leverkusen.png', 'actual', 'Bundesliga'),
(46, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Eintracht Frankfurt', 'eintracht.png', 'actual', 'Bundesliga'),
(47, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Japón', 'japon.png', 'selecciones', 'Selecciones'),
(48, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Argentina', 'argentina.png', 'selecciones', 'Selecciones'),
(49, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Brasil', 'brasil.jpeg', 'selecciones', 'Selecciones'),
(50, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Francia', 'francia.jpg', 'selecciones', 'Selecciones'),
(51, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Alemania', 'alemania.png', 'selecciones', 'Selecciones'),
(52, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Inglaterra', 'inglaterra.jpg', 'selecciones', 'Selecciones'),
(53, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Portugal', 'portugal.jpeg', 'selecciones', 'Selecciones'),
(54, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Italia', 'italia.png', 'selecciones', 'Selecciones'),
(55, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Feyenoord', 'feyenord.png', 'actual', 'Eredivise'),
(56, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'PSV Eindhoven', 'psv.jpg', 'actual', 'Eredivise'),
(57, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Marruecos', 'marruecos.jpeg', 'actual', 'Selecciones'),
(58, 'Primera equipación 25/26', 'Camiseta oficial local', 30, 'Egipto', 'egipto.jpeg', 'actual', 'Selecciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  `camiseta_id` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `talla` varchar(10) DEFAULT NULL,
  `precio` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id`, `pedido_id`, `camiseta_id`, `nombre`, `numero`, `talla`, `precio`) VALUES
(1, 1, NULL, 'Pablo', 15, 'XXL', 30),
(2, 1, NULL, 'luis', 14, 'S', 30),
(3, 1, NULL, 'Dani', 12, 'XXL', 30),
(4, 2, NULL, 'luis', 11, 'S', 30),
(5, 2, NULL, 'ana', 14, 'XL', 30),
(6, 3, NULL, 'omaimé', 7, 'L', 30),
(7, 3, NULL, 'omaime', 7, 'L', 30),
(8, 4, NULL, 'Abde', 10, 'M', 30),
(9, 4, NULL, 'hakimi', 2, 'M', 30),
(10, 5, NULL, 'Moha', 19, 'XL', 30),
(11, 5, NULL, 'Moha', 20, 'XL', 30),
(12, 5, NULL, 'Moha', 16, 'L', 30),
(13, 6, NULL, 'Pepito', 7, 'XL', 30),
(14, 6, NULL, 'Pepito', 16, 'XL', 30),
(15, 7, NULL, 'Jaime', 18, 'L', 30),
(16, 7, NULL, 'Jaime', 19, 'L', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `total`, `fecha`) VALUES
(1, 6, 90, '2026-05-15 10:03:28'),
(2, 6, 60, '2026-05-15 13:41:09'),
(3, 1, 60, '2026-05-15 15:17:37'),
(4, 7, 60, '2026-05-15 21:48:32'),
(5, 4, 90, '2026-05-16 08:26:50'),
(6, 8, 60, '2026-05-16 11:07:33'),
(7, 9, 60, '2026-05-16 14:48:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) DEFAULT 'comprador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `rol`) VALUES
(1, 'Administrador', 'admin@DAW.com', '$2y$10$cu86nKlQSRHaTr4neALkIu/POET9ao7AjZC3KhRy0dKXCzmghHEHS', 'admin'),
(4, 'Moha', 'Moha@gmail.com', '$2y$10$Q4iLPpqWYhasL1iF9ViE3uATGwiH7ejWD1FxFpYV8ExPNmHaP5ulC', 'comprador'),
(5, 'Moha2', 'Moha2@gmail.com', '$2y$10$Px5RoFfTFEtYkkeS/KoIcOQ8Z4/fZe1tp39yihHLxtkf26QYAPtp2', 'comprador'),
(6, 'tusi', 'tusi@tusi.com', '$2y$10$tLBpM5jBf9SDICZvBG7cj.1GOhP6cpFj60aqdIYYXe93kYY/pH.be', 'comprador'),
(7, 'Omar', 'omar@gmail.com', '$2y$10$WoCLHugX76z4brtJsvZOTesZLSijwpLJd/gm9fcTxdu3FNvY4Smxi', 'comprador'),
(8, 'Pepito', 'Pepito@gmail.com', '$2y$10$RBYejKaX0AYkzVtYpY6W3OOQpZ9h1YggWch/26kShSb7jMqd/KuIe', 'comprador'),
(9, 'Jaime', 'Jaime@gmail.com', '$2y$10$G7Q0IY8dAzySKrq1kXAjReidGFeT3AMlVZd/kfZFNaejGTv48Ylrm', 'comprador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
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
-- AUTO_INCREMENT de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
