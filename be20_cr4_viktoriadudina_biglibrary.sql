-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 04:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be20_cr4_viktoriadudina_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be20_cr4_viktoriadudina_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be20_cr4_viktoriadudina_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `ISBN` varchar(30) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `type` varchar(55) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `picture`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(1, 'Harry Potter and the Sorcerer’s Stone', '65582e37e0a41.jpg', '9780590353427', 'J.K. Rowling’s tale of a young wizard’s journey into the magical world.', 'book', 'J.K.', 'Rowling', 'Scholastic', 'New York', '1998-09-01'),
(2, 'The Hobbit', 'hobbit.jpg', '9780261102217', 'J.R.R. Tolkien’s adventure of Bilbo Baggins in the quest for treasure.', 'book', 'J.R.R.', 'Tolkien', 'Allen & Unwin', 'London', '1937-09-21'),
(3, 'The Hunger Games', 'hunger.jpg', '9780439023481', 'Suzanne Collins’ dystopian series where teens fight for survival in a televised event.', 'book', 'Suzanne', 'Collins', 'Scholastic Press', 'New York', '2008-09-14'),
(4, 'The Lord of the Rings', 'lord.jpg', '9780544003415', 'J.R.R. Tolkien’s epic trilogy following the quest to destroy a powerful ring.', 'book', 'J.R.R.', 'Tolkien', 'Houghton Mifflin Harcourt', 'Boston', '1954-07-29'),
(5, 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe', 'narnia.jpg', '9780064471046', 'C.S. Lewis’ magical tale of siblings discovering a fantastical world through a wardrobe.', 'book', 'C.S.', 'Lewis', 'HarperCollins', 'New York', '1950-10-16'),
(6, 'Thriller', 'thriller.jpg', '074643809526', 'Michael Jackson’s iconic album featuring hits like \"Billie Jean\" and \"Thriller.\"', 'CD', 'Michael', 'Jackson', 'Epic Records', 'New York', '1982-11-30'),
(7, 'The Dark Side of the Moon', 'dark.jpg', '5099952243328', 'Pink Floyd’s classic album known for its progressive rock and conceptual themes.', 'CD', 'Pink', 'Floyd', 'Harvest Records', 'Los Angeles', '1973-03-01'),
(8, 'Folklore', 'folklore.jpg', '602508828804', 'Taylor Swift’s introspective album exploring storytelling and personal narratives.', 'CD', 'Taylor', 'Swift', 'Republic Records', 'New York', '2020-07-24'),
(9, '1989', '1989.jpg', '843930014525', 'Taylor Swift’s shift to pure pop with catchy hooks and personal narratives.', 'CD', 'Taylor', 'Swift', 'Big Machine Records', 'Nashville', '2014-10-27'),
(10, 'Positions', 'positions.jpg', '602435581713', 'Ariana Grande’s album showcasing R&B-infused pop and themes of love and intimacy.', 'CD', 'Ariana', 'Grande', 'Republic Records', 'New York', '2020-10-30'),
(11, 'The Dark Knight', 'batman.jpg', '883929156766', 'Christopher Nolan’s Batman film with Heath Ledger’s iconic portrayal of the Joker.', 'DVD', 'Christopher', 'Nolan', 'Warner Bros. Pictures', 'Los Angeles', '2008-07-18'),
(12, 'Forrest Gump', 'forrest.jpg', '032429276820', 'Robert Zemeckis’ film starring Tom Hanks about a man’s extraordinary life journey.', 'DVD', 'Robert', 'Zemeckis', 'Paramount Pictures', 'Los Angeles', '1994-07-06'),
(13, 'The Matrix', 'matrix.jpg', '085391163920', 'The Wachowskis’ sci-fi action film exploring the concept of reality.', 'DVD', 'Lana', 'Wachowski', 'Warner Bros. Pictures', 'Los Angeles', '1999-03-31'),
(14, 'Fight Club', 'fight.jpg', '024543029818', 'David Fincher’s thought-provoking film exploring consumerism and identity.', 'DVD', 'David', 'Fincher', '20th Century Fox', 'Los Angeles', '1999-10-15'),
(15, 'The Godfather', 'godfather.jpg', '097360911440', 'Francis Ford Coppola’s epic crime film about the Corleone family.', 'DVD', 'Francis Ford', 'Coppola', 'Paramount Pictures', 'Los Angeles', '1972-03-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
