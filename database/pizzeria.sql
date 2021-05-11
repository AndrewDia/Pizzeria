-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2021 at 04:43 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `img_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `veg` tinyint(1) NOT NULL DEFAULT '0',
  `spicy` tinyint(1) NOT NULL DEFAULT '0',
  `new` tinyint(1) NOT NULL DEFAULT '0',
  `old_price` float UNSIGNED NOT NULL DEFAULT '0',
  `popularity` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `name`, `description`, `price`, `img_name`, `veg`, `spicy`, `new`, `old_price`, `popularity`) VALUES
(1, 'Пепероні', 'Пікантна пепероні, моцарелла, томатний соус', 80, 'peperoni.png', 1, 1, 1, 100, 5),
(2, 'Маргарита', 'Моцарела, томати, італійські трави, томатний соус', 70, 'margarita.png', 0, 1, 0, 0, 7),
(3, 'Карбонара', 'Бекон, чеддер, пармезан, моцарела, томати черрі, червона цибуля, часник, італійські трави', 120, 'karbonara.png', 0, 0, 0, 0, 3),
(4, 'Гавайська', 'Курка, ананаси, моцарела, томатний соус', 80, 'havaiska.png', 0, 0, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `img_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `name`, `description`, `active`, `img_name`) VALUES
(1, 'Замовте дві - платіть менше', 'Замовляючи дві або більше піц, Ви отримайте знижку 10% від загальної суми', 1, 'pizzas.png'),
(2, 'Замовляйте в правильний час', 'Замовляйте будь-яку піцу з 11:00 до 12:30 та отримайте знижку 10%', 1, 'clock.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
