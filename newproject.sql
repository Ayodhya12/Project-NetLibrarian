-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 07:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_detail`
--

CREATE TABLE `book_detail` (
  `book_id` int(100) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(30) NOT NULL,
  `edition` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`book_id`, `genre`, `title`, `author`, `edition`, `status`, `quantity`) VALUES
(2, 'Programming', 'programming in c', 'w.w.perera', '2000', 'Available', 1),
(3, 'Chemistry', 'Organic Chemistry', 'Jeewaka C. Premaraja', '2020', 'Available', 6),
(4, 'Mathematics', 'Complex Numbers', 'S.T.Athapaththu', '3rd', 'Available', 1),
(5, 'Programming', 'C#', 'M.S.Perera', '1st', 'Available', 3),
(1, 'Programming', 'Java', 'S.T.Athapaththu', '2nd', 'Available', 1),
(6, 'Programming', 'Java', 'Jeewaka C. Premaraja', '1st', 'Available', 4);

-- --------------------------------------------------------

--
-- Table structure for table `borrow_books`
--

CREATE TABLE `borrow_books` (
  `book_id` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `approve` varchar(30) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_books`
--

INSERT INTO `borrow_books` (`book_id`, `Email`, `approve`, `issue_date`, `return_date`, `status`) VALUES
('1', 'anne@gmail.com', 'yes', '2020-12-03', '2020-12-10', 'return'),
('3', 'anne@gmail.com', 'yes', '2020-10-24', '2020-10-30', 'return'),
('6', 'anne@gmail.com', 'yes', '2020-10-31', '2020-11-07', 'return'),
('4', 'anne@gmail.com', 'yes', '2020-12-03', '2020-12-10', ''),
('5', 'musk@gmail.com', 'yes', '2020-10-31', '2020-11-07', 'return'),
('2', 'musk@gmail.com', 'yes', '2020-10-31', '2020-11-07', ''),
('1', 'musk@gmail.com', 'yes', '2020-12-03', '2020-12-10', ''),
('1', 'anne@gmail.com', 'yes', '2020-12-03', '2020-12-10', 'return'),
('2', 'anne@gmail.com', 'yes', '2020-12-03', '2020-12-10', 'return');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES
('dilki', 'dilkiayodhya2@gmail.com', 'Hello'),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `book_id` int(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `returned_day` date NOT NULL,
  `days` int(100) NOT NULL,
  `fine` int(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`book_id`, `Email`, `returned_day`, `days`, `fine`, `status`) VALUES
(3, 'anne@gmail.com', '2020-11-24', 25, 125, 'not paid'),
(6, 'anne@gmail.com', '2020-11-24', 17, 85, 'not paid'),
(1, 'anne@gmail.com', '2020-12-03', 0, 0, 'not paid'),
(5, 'musk@gmail.com', '2020-12-16', 39, 195, 'not paid'),
(2, 'anne@gmail.com', '2020-12-16', 6, 30, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `mem_id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `status_id` int(1) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`mem_id`, `FirstName`, `LastName`, `Email`, `Password`, `status_id`, `pic`) VALUES
(1, 'Dilki', 'Ayodhya', 'dilkiayodhya2@gmail.com', 'c710e1765bcba062de5099c65765fa701a13cee4', 1, ''),
(3, 'Elon', 'Musk', 'musk@gmail.com', '1ff3ad36f48586b9d6439514167792a5ac419429', 2, 'profile1.jpg'),
(4, 'Anne', 'Marie', 'anne@gmail.com', 'ee846643b475367dc295a57082d35aadce799b76', 2, 'profile_pic1.webp'),
(7, 'Narada', 'Madusanka', 'naradampro@gmail.com', '5013140f9f6ecfade3ac8ac2e5a970613f634a74', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `return_books`
--

CREATE TABLE `return_books` (
  `book_id` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `currnt_date` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_books`
--

INSERT INTO `return_books` (`book_id`, `Email`, `currnt_date`, `status`) VALUES
('1', 'anne@gmail.com', '2020-10-25', 'okay'),
('3', 'anne@gmail.com', '2020-11-07', 'okay'),
('6', 'anne@gmail.com', '2020-11-07', 'okay'),
('1', 'anne@gmail.com', '2020-12-03', 'okay'),
('5', 'musk@gmail.com', '2020-12-16', 'okay'),
('2', 'anne@gmail.com', '2020-12-16', 'okay');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(1) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `mem_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
