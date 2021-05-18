-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 09:28 AM
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
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
                           `id` int NOT NULL,
                           `name` varchar(20) NOT NULL,
                           `filter_name` varchar(10) NOT NULL,
                           `img_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `name`, `filter_name`, `img_name`) VALUES
(1, 'вегетаріанська', 'veg', 'vegan-filter.svg'),
(2, 'гостра', 'spicy', 'spicy-filter.svg'),
(3, 'знижка', 'sale', 'sale-filter.svg'),
(4, 'новинка', 'new', 'new-filter.svg'),
(5, 'популярні', 'popularity', 'hit-filter.svg');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
                               `id` int NOT NULL,
                               `name` varchar(30) NOT NULL,
                               `img_name` varchar(34) NOT NULL,
                               `price` float NOT NULL,
                               `weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `img_name`, `price`, `weight`) VALUES
(1, 'Моцарела', 'mozzarella.png', 40, 100),
(2, 'Філе курки', 'chicken.png', 40, 100),
(3, 'Салямі', 'salami.png', 40, 100),
(4, 'Помідори', 'tomatoes.png', 40, 100),
(5, 'Оливки', 'olives.png', 40, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_pizza`
--

CREATE TABLE `ingredient_pizza` (
                                    `pizza_id` int NOT NULL,
                                    `ingredient_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredient_pizza`
--

INSERT INTO `ingredient_pizza` (`pizza_id`, `ingredient_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(4, 2),
(2, 4),
(3, 4);

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
                          `sale` float UNSIGNED NOT NULL DEFAULT '0',
                          `popularity` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `name`, `description`, `price`, `img_name`, `veg`, `spicy`, `new`, `sale`, `popularity`) VALUES
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
-- Indexes for table `filters`
--
ALTER TABLE `filters`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_pizza`
--
ALTER TABLE `ingredient_pizza`
    ADD PRIMARY KEY (`pizza_id`,`ingredient_id`),
  ADD KEY `ingredient_id` (`ingredient_id`);

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
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredient_pizza`
--
ALTER TABLE `ingredient_pizza`
    ADD CONSTRAINT `ingredient_pizza_ibfk_1` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingredient_pizza_ibfk_2` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
