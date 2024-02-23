-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 02:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `qid` int(10) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `qA` varchar(100) DEFAULT NULL,
  `qB` varchar(100) DEFAULT NULL,
  `qC` varchar(100) DEFAULT NULL,
  `qD` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `subid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`qid`, `question`, `qA`, `qB`, `qC`, `qD`, `ans`, `subid`) VALUES
(11, 'What does PHP stand for?', 'Personal Home Pages', 'Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Hypertext Preprocessor', 3),
(12, 'Who is the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', 'Rasmus Lerdorf', 3),
(13, 'PHP files have a default file extension of.', '.html', '.xml', '.php', '.ph', '.php', 3),
(14, 'A PHP script should start with ___ and end with ___:', '< php >', '< ?php  ?>', '< ? ? >', '< ? php ?>', '< ?php  ?>', 3),
(15, 'Which version of PHP introduced Try/catch Exception?', 'PHP 4', 'PHP 5', 'PHP 5.3', 'PHP 7', 'PHP 5', 3),
(17, 'If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?', '12', '5', 'Error', '1', '5', 3),
(18, 'Which of the below statements is equivalent to $add += $add ?', '$add = $add', '$add = $add +$add', '$add = $add + 1', '$add = $add + $add + 1', '$add = $add +$add', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`id`, `fname`, `lname`, `phone`, `address`, `email`, `password`, `type`) VALUES
(4, 'Uvaish', 'Khan', '8968675675', 'kanpur', 'khan@gmail.com', '12345', 'user'),
(5, 'admin', 'admin', '1234567890', 'kanpur', 'admin@gmail.com', 'admin', 'admin'),
(6, 'Mohan', 'Kumar', '9686866565', 'lucknow', 'mohan@gmail.com', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int(11) NOT NULL,
  `subjectName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `subjectName`) VALUES
(3, 'PHP'),
(4, 'Hindi'),
(5, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `questionid` int(10) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `subid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `subid` (`subid`);

--
-- Indexes for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1150;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD CONSTRAINT `tbl_questions_ibfk_1` FOREIGN KEY (`subid`) REFERENCES `tbl_subject` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
