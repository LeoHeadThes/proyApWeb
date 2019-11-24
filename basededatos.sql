-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2019 at 07:07 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `capacitadora2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `descripcion`, `precio`, `imagen`) VALUES
(4, 'Matematicas Elementales', 'En este curso el alumno saldra con los conocimeintos neesarios para cualquier problematica en el area de matematicas.', 1200, '../images/matematicas.jpg'),
(5, 'Linux para Principiantes', 'En este curso te enseñaremos acerca del sistema operativo Linux para principiantes.', 120, '../images/linux.png'),
(7, 'Musica Intermedio', 'El curso te permitira subir de nivel basico a intermedio gracias a las clases que hemos ingeniado para ti en este curso.', 12000, '../images/musica.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `password`, `tipo`) VALUES
(4, 'Rodrian95', 'rodrian95@hotmail.com', '$2y$10$KRYpP/RszIZMeNg1SNZuz.hxFxVv1mF1ah.dc0g3a2a7D2KZvrTpO', 2),
(5, 'rodrian95', 'roy@hotmail.com', '$2y$10$vTPbsrZUM1EffiMmBuI48uzv8HqDUWHQxYbt8LCIIDEQhwYlPC2ma', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
