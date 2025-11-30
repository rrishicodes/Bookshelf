-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 11:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(1) NOT NULL,
  `img_name` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `author_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `img_name`, `name`, `price`, `author_name`) VALUES
(2, 'secret book.jpg', 'The secret ', 185, 'rhonda byrne'),
(3, 'banana.jpg', 'The lake', 195, 'banana yoshimoto'),
(4, 'richie rich.png', 'How to become rich', 250, 'Devdutt Pattanaik'),
(5, 'qween.jpg', 'The reign of Queen Victoria', 190, 'Hector Bolitho'),
(6, 'arrivals.jpg', 'The Arrivals', 250, 'Lucas Lloyd'),
(7, 'subconcius.jpg', 'The power of your subconcious mind', 270, 'Joseph Murphy'),
(8, 'chroicals.jpg', 'The Chronicals of Narnia', 350, 'C .S LEWIS'),
(9, 'memory2.png', 'The Imperfections Of Memory', 250, 'ANGELINA ALUDO'),
(10, 'memory.png', 'MEMORY', 195, 'WILLIAM WALKER'),
(11, 'hooligan.png', 'THE HOOLIGAN TURNED HOLY MAN', 190, 'HARSH SHASHTRY'),
(12, 'designing.jpg', 'DESIGNING DESTINY', 195, 'KAMLESH PATEL'),
(13, 'BLACKBEARD-library-print-cover-8_15_2016.png', 'BLACKBEARD', 250, 'MATHILDA DOUGLAS'),
(14, 'BOOK-11-Ashes-Kindle-Cover.jpg', 'FIRE FROM THE SKY', 350, 'N.C REED'),
(15, 'COWBOY-11-1-2018v2.png', 'COWBOY', 250, 'JERRY D. YOUNG'),
(16, 'DIVIDED-SERENITY-BOOK-1-6X9-9-16-2017v2-CAROUSEL-1.png', 'DIVIDED SERENITY', 250, 'G.L CROMARTY'),
(17, 'DOMINIC-SANTELLI-5_22_2016.png', 'DOMINIC SENTELLI PREPPER', 199, 'JERRY D. YOUNG'),
(20, 'monster-layered-CAROUSEL-1.png', 'THE MONSTER', 299, 'N.C REED'),
(21, 'Mystery-circle.png', 'SHERLOCK HOLMES', 350, 'STEVE HAVES DAVID WHITEHEAD');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `img_name` text NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `img_name`, `name`) VALUES
(4, '9.9.20-Telekinetic-Book-1.jpg', 'Audio Books'),
(5, 'ARMAGEDDON-CULT.png', 'Thriller Books'),
(6, 'arrivals.jpg', 'Action'),
(7, 'chroicals.jpg', 'Fantasy'),
(8, 'gandhi.jpg', 'Biography'),
(9, 'richie rich.png', 'Richie Rich'),
(10, 'subconcius.jpg', 'Thoughts'),
(11, 'Billy-Redo-6-16-2017-CAROUSEL.png', 'Billi redo series'),
(12, 'BLACKBEARD-library-print-cover-8_15_2016.png', 'Drama'),
(13, '9.16.20-PSYCHICIANS-Book-5-Kindle-1.jpg', 'phsykenetic'),
(14, 'monster-layered-CAROUSEL-1.png', 'Horror'),
(15, 'Best-Sellers-circle.png', 'Showman');

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'rishu', 'rishu@gmail.com', '6388324426', 'jhbkjlknlmllmnljbk\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`) VALUES
(9, '9.9.20-Telekinetic-Book-1.jpg'),
(10, '9.16.20-PSYCHICIANS-Book-5-Kindle-1.jpg'),
(11, 'Alcatraz-46-cover.png'),
(12, 'AND-THE-PENDULUM-SWINGS-12-1-2018.png'),
(13, 'ARMAGEDDON-CULT.png'),
(14, 'arrivals.jpg'),
(15, 'BAD-TIMES-COMING-print-cover-4_13_2015-CAROUSEL.png'),
(16, 'banana.jpg'),
(17, 'Barbaras-Legacy-5_22_2016-CAROUSEL.png'),
(18, 'BEER-1-3-2017.png'),
(19, 'Best-Sellers-circle.png'),
(20, 'Billy-Redo-6-16-2017-CAROUSEL.png'),
(21, 'BLACKBEARD-library-print-cover-8_15_2016.png'),
(22, 'BOOK-11-Ashes-Kindle-Cover.jpg'),
(23, 'chroicals.jpg'),
(24, 'COWBOY-11-1-2018v2.png'),
(25, 'designing.jpg'),
(26, 'DIVIDED-SERENITY-BOOK-1-6X9-9-16-2017v2-CAROUSEL-1.png'),
(27, 'DOMINIC-SANTELLI-5_22_2016.png'),
(28, 'gandhi.jpg'),
(29, 'memory.png'),
(30, 'secret book.jpg'),
(31, 'memory2.png'),
(32, 'hooligan.png'),
(34, 'richie rich.png'),
(35, 'qween.jpg'),
(36, 'Mystery-circle.png'),
(38, 'subconcius.jpg'),
(39, 'monster-layered-CAROUSEL-1.png'),
(40, 'dream arts.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `id` int(1) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `email`, `mobile`, `password`) VALUES
(12, 'rishu9335205203@gmail.com', '6388324426', 'Draghvan@321');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(1) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `mobile`, `password`) VALUES
(4, 'nihal@gmail.com', '6388324426', 'Draghvan@321');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(1) NOT NULL,
  `img_name` text NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(120) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `img_name`, `name`, `email`, `mobile`, `gender`, `city`, `state`, `address`, `password`) VALUES
(5, '320.jpg', 'ravi', 'nihal@gmail.com', '6388324426', 'Male', 'lucknow', 'up', 'dscndsonclk;l      ', 'Draghvan@321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
