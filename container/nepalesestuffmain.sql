-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 12:05 PM
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
-- Database: `nepalesestuffmain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `adminId` int(11) NOT NULL,
  `adminname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogtable`
--

CREATE TABLE `blogtable` (
  `blogId` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `docdir` varchar(128) NOT NULL,
  `thumbnaildir` varchar(128) NOT NULL,
  `tag1` varchar(32) NOT NULL,
  `tag2` varchar(32) NOT NULL,
  `tag3` varchar(32) NOT NULL,
  `tag4` varchar(32) NOT NULL,
  `tag5` varchar(32) NOT NULL,
  `userViewCount` int(11) NOT NULL,
  `guestViewCount` int(11) NOT NULL,
  `reportCount` int(11) NOT NULL,
  `bookmarkCount` int(11) NOT NULL,
  `upvoteCount` int(11) NOT NULL,
  `downvoteCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `userId` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `blogtable`
--
ALTER TABLE `blogtable`
  ADD PRIMARY KEY (`blogId`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogtable`
--
ALTER TABLE `blogtable`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
