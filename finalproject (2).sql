-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 04:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone`, `message`, `date`) VALUES
(1, 'melissa@hotmail.com', '03333333', 'hello', '2023-06-02'),
(7, 'user@hotmail.com', '71111333', 'Dear website team, I thoroughly enjoyed exploring your website and trying out the recipes. The spaghetti with tomato sauce was a delightful dish, with perfectly cooked pasta and a flavorful sauce that', '2023-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `name`, `date`, `status`) VALUES
(6, 'Culinary Techniques course', 'melissa', '2023-06-26 22:17:00', 'approved'),
(27, 'Nutrition Information course', 'MelissaElHusseini', '2023-06-26 23:30:44', 'pending'),
(28, 'Food And Culture course', 'melissa', '2023-06-26 23:32:38', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ingredients` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `images` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `category`, `name`, `ingredients`, `time`, `images`, `date`) VALUES
(1, 'Breakfast', 'Egg Pancakes', '1 cup flour - 1 tsp baking powder - 2 eggs - 2 tbsp vegetable oil - 1 cup milk - pinch salt', '15 min', 'pancake.jpg', '2023-06-23 20:33:02'),
(5, 'Breakfast', 'Avocado Toast', '4 eggs - 1 tsp butter - 1 ripe avocado - 1 tsp lemon juice - pinch seasalt, cayenne pepper', '10 min', 'avoc.jpg', '2023-06-23 19:50:55'),
(6, 'Breakfast', 'Brioche French Toast', '4 eggs - 1/4 cup whole milk - 1 teaspoon pure vanilla extract - 1/8 teaspoon nutmeg - Brioche bread', '25 min', 'brioche.jpg', '2023-06-23 19:27:35'),
(7, 'Appetizers&Snacks', 'Canape', '1 Baguette - 15 oz milk ricotta - 2 radishes - 1 orange - 1 tsp lemon juice- 6 quail eggs', '15 min', 'canape.jpg', '2023-06-23 20:58:03'),
(8, 'Appetizers&Snacks', 'Cheese Toast', '2 tbsp white cheese - pinch of salt - 2 dried tomatoes - basilic - brioche bread', '5 min', 'toast.jpg', '2023-06-23 20:54:36'),
(10, 'Appetizers&Snacks', 'Cucumber Bites', '2 cucumbers - garlic and herb cheese - smoked salmon - 1/8 purple onion - sesame seeds - black peppe', '20 min', 'cuncumber.jpg', '2023-06-23 20:59:11'),
(11, 'Main Dishes', 'Burger with Fries', 'Ground beef - 4 large onion slices - Lettuce - Cheese - 4 hamburger buns - 1/3 cup Barbecue Sauce', '20 min', 'burger.jpg', '2023-06-23 21:13:05'),
(12, 'Main Dishes', 'Spaghetti with tomato sauce', 'Fresh Spaghetti - Basil leaves - Parmigiano-Reggiano cheese - 2 tbsp butter - Olive oil - pinch seas', '25 min', 'spag.jpg', '2023-06-23 21:13:40'),
(13, 'Main Dishes', 'Steak', '1 steak - Rosemary - 3 Tomatoes - 3 Carrots - 2 tbsp butter - pinch salt,black pepper', '45 min', 'steak.jpg', '2023-06-23 21:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `category`, `comment`) VALUES
(1, 'Breakfast', 'delicious\r\n'),
(2, 'Appetizers&Snacks', 'Impressive and crowd-pleasing dish,  a hit at my dinner party!'),
(3, 'Main Dishes', 'Quick and tasty recipe  .. '),
(5, 'Breakfast', 'Delicious and foolproof recipe..'),
(6, 'Appetizers&Snacks', 'a family favorite!'),
(7, 'Main Dishes', 'the burger was a mouthwatering, with a juicy, melted cheese .. '),
(8, 'Main Dishes', ' I was delighted by the spaghetti with tomato sauce recipe, which offered a harmonious blend of al dente pasta and a rich, flavorful tomato sauce that was both comforting and satisfying.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `usertype` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `date`, `usertype`) VALUES
(1, 'Melissa', 'melissa.h@gmail.com', '12345678', '', '2023-06-05 18:57:17', 'admin'),
(2, 'user', 'user@hotmail.com', 'user1234', '', '2023-06-05 19:05:10', 'user'),
(3, 'melissa', 'melissah@hotmail.com', '123456789', '', '2023-06-26 11:44:03', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
