-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2023 a las 22:55:40
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `autor` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`autor`, `titulo`, `contenido`, `fecha`, `imagen`) VALUES
('0', '0', '0', '2023-02-08', 'uploads/2022-11-24-20-48-48_0.png'),
('0', '0', '0', '2023-02-09', 'uploads/2022-11-24-20-48-48_0.png'),
('Alex@gmail.com', 'Alex', 'dfgdfg', '2023-02-08', 'uploads/2022-11-24-20-48-48_0.png'),
('Alex@gmail.com', 'Alex', 'dofgnodfgndfg', '2023-02-24', 'uploads/2022-11-24-20-48-48_0.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
