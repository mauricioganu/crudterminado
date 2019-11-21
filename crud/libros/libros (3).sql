-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2019 a las 14:28:29
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3
CREATE DATABASE db_libros;
USE db_libros;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `autor` varchar(50) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `precio` int(20) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`autor`, `titulo`, `precio`, `genero`, `cantidad`) VALUES
('Julio Cortazar', 'Casa tomada', 100, 'Ficcion', 12),
('Gabriel Garcia Marquez', 'Cien aÃ±os de soledad', 540, 'Novela', 4),
('Gabriel Garcia Marquez', 'Cronica de una muerte anunciad', 600, 'Novela', 6),
('Jorge Luis Borges', 'EL Aleph', 200, 'Narrativo', 3),
('Paulo Coelho', 'El alquimista', 300, 'Novela', 6),
('Edgar Allan Poe', 'El cuervo', 300, 'Poema', 6),
('Edgar Allan Poe', 'El gato negro', 130, 'Horror', 7),
('Roberto Arlt', 'El juguete rabioso', 300, 'Ficcion', 4),
('Esteban Echeverria', 'El matadero', 250, 'Ficcion', 6),
('Julio Cortazar', 'El perseguidor', 250, 'Ficcion', 13),
('Antoine de Saint-Exupery', 'El principito', 450, 'Fabula', 7),
('Ernesto Sabato', 'El tunel', 150, 'Novela', 4),
('Isabel Allende', 'La casa de los espiritus', 300, 'Realismo', 8),
('Jose Hernandez', 'La vuelta de Martin Fierro', 300, 'Gauchesco', 10),
('Jose Hernandez', 'Martin Fierro', 250, 'Gauchesco', 5),
('Agatha Christie', 'Muerte en el Nilo', 450, 'Policial', 7),
('Julio Cortazar', 'Rayuela', 300, 'Novela', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`titulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
