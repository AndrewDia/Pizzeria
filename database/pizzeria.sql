-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2021 at 09:05 AM
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
(5, 'Оливки', 'olives.png', 40, 100),
(6, 'Печериці', 'mushroom.jpg', 20, 50),
(7, 'Лосось', 'salmon.png', 60, 40),
(8, 'Кукурудза', 'corn.png', 10, 20),
(9, 'Фета', 'feta.png', 20, 50),
(10, 'Дорблю', 'dorblu.jpg', 60, 30),
(11, 'Шинка', 'ham.png', 50, 50),
(12, 'Ковбаски', 'sausages.jpg', 30, 50),
(13, 'Альфредо', 'alfredo.jpg', 14, 20),
(14, 'Тартар', 'tartar.png', 16, 20);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_pizza`
--

CREATE TABLE `ingredient_pizza` (
  `pizza_id` int NOT NULL,
  `ingredient_id` int NOT NULL,
  `number` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingredient_pizza`
--

INSERT INTO `ingredient_pizza` (`pizza_id`, `ingredient_id`, `number`) VALUES
(1, 1, 1),
(1, 12, 2),
(2, 1, 2),
(2, 4, 1),
(3, 1, 1),
(3, 4, 1),
(3, 9, 1),
(3, 11, 1),
(4, 1, 1),
(4, 2, 1),
(4, 8, 1),
(5, 1, 2),
(5, 9, 2),
(5, 10, 2),
(5, 13, 1),
(6, 1, 1),
(6, 6, 2),
(6, 14, 1),
(7, 1, 1),
(7, 2, 1),
(7, 4, 1),
(7, 13, 1),
(8, 1, 1),
(8, 11, 2),
(9, 1, 1),
(9, 3, 1),
(9, 6, 1),
(9, 11, 1),
(9, 14, 1),
(10, 1, 1),
(10, 4, 1),
(10, 9, 1),
(10, 13, 1),
(10, 14, 1),
(11, 1, 1),
(11, 2, 1),
(11, 3, 1),
(11, 11, 1),
(11, 12, 1);

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
(1, 'Пепероні', 'Пікантна пепероні, моцарела, томатний соус', 80, 'peperoni.png', 1, 1, 1, 100, 5),
(2, 'Маргарита', 'Моцарела, томати, італійські трави, томатний соус', 70, 'margarita.png', 0, 1, 0, 0, 7),
(3, 'Карбонара', 'Бекон, чеддер, пармезан, моцарела, томати черрі, червона цибуля, часник, італійські трави', 120, 'karbonara.png', 0, 0, 0, 0, 3),
(4, 'Гавайська', 'Курка, ананаси, моцарела, томатний соус', 80, 'havaiska.png', 0, 0, 0, 0, 4),
(5, 'Сирна', 'Моцарела, сири чеддер і пармезан, соус альфредо', 90, 'cheese.jpeg', 1, 0, 0, 0, 9),
(6, 'Шампі', 'Печериці, моцарела, італійські трави, соус вершковий', 75, 'shampi.jpeg', 0, 0, 0, 85, 1),
(7, 'Мексиканська', 'Курка, перець халапеньо, соус сальса, томати, солодкий перець, червона цибуля, моцарела', 90, 'mexican.jpg', 0, 0, 1, 0, 4),
(8, 'Чеддер', 'Шинка, сир чеддер, солодкий перець, моцарела, томатний соус, часник, італійські трави', 100, 'chedder.jpeg', 0, 0, 0, 115, 7),
(9, 'Техас', 'Шинка, бекон, печериці, перець халапеньйо, моцарела, соус вершковий, барбекю', 85, 'texas.jpg', 0, 1, 0, 95, 2),
(10, 'Песто', 'Курка, соуси песто і альфредо, кубики бринзи, томати черрі, моцарела', 115, 'pesto.jpeg', 0, 0, 1, 0, 5),
(11, 'М\'ясна', 'Ковбаски мисливські, шинка, салямі, філе куряче, моцарела, зелень, соус барбекю', 95, 'meat.jpeg', 0, 1, 1, 0, 0);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
