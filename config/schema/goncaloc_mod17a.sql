-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Fev-2017 às 18:32
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goncaloc_mod17a`
--
CREATE DATABASE IF NOT EXISTS `goncaloc_mod17a` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `goncaloc_mod17a`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `atk` int(11) NOT NULL,
  `def` int(11) NOT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cards`
--

INSERT INTO `cards` (`id`, `name`, `description`, `atk`, `def`, `image`) VALUES
(2, 'Blue Eyes White Dragon', 'Dragao azulinho', 2000, 1900, 'cards/55be73a3-f37b-46bc-9a08-a46008b27964.jpg'),
(3, 'Dark Magician', 'feiticeiro malvado', 2400, 2000, 'cards/55be73a3-f37b-46bc-9a08-a46008b27964.jpg'),
(6, 'Black hole', 'Forms a black hole capable of destroying all the deck of the player and is life force', 9999999, 9999999, 'cards/55be73a3-f37b-46bc-9a08-a46008b27964.jpg'),
(7, 'asdasd', 'asdasd', 123, 123, 'cards/55be73a3-f37b-46bc-9a08-a46008b27964.jpg'),
(8, 'cartas123', '123asd', 342123, 13121, 'cards/ddb24d70-0211-46ba-8b72-67f7b4e91f76.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cards_users`
--

CREATE TABLE `cards_users` (
  `user_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cards_users`
--

INSERT INTO `cards_users` (`user_id`, `card_id`) VALUES
(2, 3),
(3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'djguu', '$2y$10$JVkL9vmGHT0rZzrH0QQttu3noMovl6fGyg6tBPjHSRsvMpGKbM6.C'),
(3, 'teste', '$2y$10$/6csRZ9ZWE6//RiUohF4LOtDTvpxLfc5NjCMKcSfvsyMAOcwqzGx6'),
(4, 'Gorgulho', '$2y$10$Uy0jullgDBvSMLpRN7/h5eMSPyvm4PPc3YJQeOaaVy/jblWA3QeUa'),
(5, 'teste123', '$2y$10$Ar1rLVTRqQA40qp/JdiZCuKe/UU32mngFXn6g3e656d.STdfYAPya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards_users`
--
ALTER TABLE `cards_users`
  ADD PRIMARY KEY (`user_id`,`card_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
