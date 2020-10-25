-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 09:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `publication` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_detail`
--

INSERT INTO `book_detail` (`book_id`, `genre`, `title`, `author`, `edition`, `publication`) VALUES
(1, 'Programming', 'Java', 'S.T.Athapaththu', '2017', 'Sadeepa'),
(2, 'Programming', 'programming in c', 'w.w.perera', '2000', 'sarasavi'),
(3, 'Chemistry', 'Organic Chemistry', 'Jeewaka C. Premaraja', '2020', 'ACME'),
(4, 'Mathematics', 'Complex Numbers', 'S.T.Athapaththu', '3rd', 'Sadeepa'),
(5, 'Programming', 'C#', 'M.S.Perera', '1st', 'ACME');

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
('4', 'anne@gmail.com', 'yes', '2020-10-24', '2020-10-30', 'return'),
('1', 'anne@gmail.com', 'yes', '2020-01-01', '2020-01-05', ''),
('3', 'anne@gmail.com', '', '0000-00-00', '0000-00-00', '');

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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `mem_id` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `status_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`mem_id`, `FirstName`, `LastName`, `Email`, `Password`, `status_id`) VALUES
(1, 'Dilki', 'Ayodhya', 'dilkiayodhya2@gmail.com', 'c710e1765bcba062de5099c65765fa701a13cee4', 1),
(3, 'Elon', 'Musk', 'musk@gmail.com', '1ff3ad36f48586b9d6439514167792a5ac419429', 2),
(4, 'Anne', 'Marie', 'anne@gmail.com', 'ee846643b475367dc295a57082d35aadce799b76', 2),
(7, 'Narada', 'Madusanka', 'naradampro@gmail.com', '5013140f9f6ecfade3ac8ac2e5a970613f634a74', 1);

-- --------------------------------------------------------

--
-- Table structure for table `return_books`
--

CREATE TABLE `return_books` (
  `book_id` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `currnt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_books`
--

INSERT INTO `return_books` (`book_id`, `Email`, `currnt_date`) VALUES
('4', 'anne@gmail.com', '2020-10-25');

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
  MODIFY `mem_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;