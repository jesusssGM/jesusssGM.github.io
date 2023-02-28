-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:47 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda_bochos`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `sexo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `telefono`, `fecha_de_nacimiento`, `sexo`) VALUES
(1, 'goku', 'goku.@gmail', '6666666', '2021-09-01', 12),
(2, 'vegeta', 'vegeta:@gmailcom', '777777', '2023-02-15', 4),
(4, 'jesus', 'jesus.@mail.com', '6678975453', '2023-02-15', 24),
(5, 'fernaan', 'fernan@gmail.com', '667456789', '2023-02-02', 23),
(6, 'jorge', 'jorge@correo.com', '6670987654', '2022-08-09', 34),
(7, 'paco', 'foco.@gmail.com', '45623456', '2023-02-16', 34),
(8, 'dios', 'dddddd@cetis.com.mx', '123456789', '1233-12-05', 1),
(9, 'hector', 'hercotor.com', '6666666', '2021-09-01', 12),
(10, 'yonataaaan', 'yoni@gmail.com', '66754357453', '0000-00-00', 0),
(11, 'dominick', 'domi@gmail.com', '4567889443', '0001-02-02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
