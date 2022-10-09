-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 11:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepalesestuffuserobj`
--

-- --------------------------------------------------------

--
-- Table structure for table `userobj1`
--

CREATE TABLE `userobj1` (
  `visitedBlog` int(11) DEFAULT NULL,
  `upvotedBlog` int(11) DEFAULT NULL,
  `downvotedBlog` int(11) DEFAULT NULL,
  `bookmarkedBlog` int(11) DEFAULT NULL,
  `reportedBlog` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userobj1`
--

INSERT INTO `userobj1` (`visitedBlog`, `upvotedBlog`, `downvotedBlog`, `bookmarkedBlog`, `reportedBlog`) VALUES
(9, 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `userobj3`
--

CREATE TABLE `userobj3` (
  `visitedBlog` int(11) DEFAULT NULL,
  `upvotedBlog` int(11) DEFAULT NULL,
  `downvotedBlog` int(11) DEFAULT NULL,
  `bookmarkedBlog` int(11) DEFAULT NULL,
  `reportedBlog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userobj8`
--

CREATE TABLE `userobj8` (
  `visitedBlog` int(11) DEFAULT NULL,
  `upvotedBlog` int(11) DEFAULT NULL,
  `downvotedBlog` int(11) DEFAULT NULL,
  `bookmarkedBlog` int(11) DEFAULT NULL,
  `reportedBlog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userobj15`
--

CREATE TABLE `userobj15` (
  `visitedBlog` int(11) DEFAULT NULL,
  `upvotedBlog` int(11) DEFAULT NULL,
  `downvotedBlog` int(11) DEFAULT NULL,
  `bookmarkedBlog` int(11) DEFAULT NULL,
  `reportedBlog` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
