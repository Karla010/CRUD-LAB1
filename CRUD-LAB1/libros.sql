-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2025 a las 05:53:31
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
-- Base de datos: `crud_libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `anio_publicacion` year(4) NOT NULL,
  `genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `anio_publicacion`, `genero`) VALUES
(1, 'Cien años de soledad', 'Gabriel García Márquez', '1967', 'Realismo mágico'),
(2, '1984', 'George Orwell', '1949', 'Distopía'),
(3, 'El Principito', 'Antoine de Saint-Exupéry', '1943', 'Fábula'),
(4, 'Don Quijote de la Mancha', 'Miguel de Cervantes', '0000', 'Novela clásica'),
(5, 'Crónica de una muerte anunciada', 'Gabriel García Márquez', '1981', 'Novela policiaca'),
(6, 'Rayuela', 'Julio Cortázar', '1963', 'Experimental'),
(7, 'Fahrenheit 451', 'Ray Bradbury', '1953', 'Ciencia ficción'),
(8, 'La sombra del viento', 'Carlos Ruiz Zafón', '2001', 'Misterio'),
(9, 'Ensayo sobre la ceguera', 'José Saramago', '1995', 'Ficción filosófica'),
(10, 'Orgullo y prejuicio', 'Jane Austen', '0000', 'Romántica'),
(11, 'El nombre de la rosa', 'Umberto Eco', '1980', 'Misterio histórico'),
(12, 'It', 'Stephen King', '1986', 'Terror'),
(13, 'El alquimista', 'Paulo Coelho', '1988', 'Aventura espiritual'),
(14, 'Drácula', 'Bram Stoker', '0000', 'Terror gótico'),
(15, 'Los juegos del hambre', 'Suzanne Collins', '2008', 'Distopía');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
