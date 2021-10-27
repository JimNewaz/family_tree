-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 06:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family`
--

-- --------------------------------------------------------

--
-- Table structure for table `mapmember`
--

CREATE TABLE `mapmember` (
  `memid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `hob` varchar(100) NOT NULL,
  `ocu` varchar(100) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `neg` varchar(100) NOT NULL,
  `cs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapmember`
--

INSERT INTO `mapmember` (`memid`, `userid`, `name`, `title`, `gender`, `dob`, `status`, `description`, `pic`, `hob`, `ocu`, `pos`, `neg`, `cs`) VALUES
(1, 1, 'Shadman Jahin', 'Father', 'male', '1997-10-28', 'Present', '', 'img/download 2.jpg', 'singing', 'engineer', 'good', 'too much work', 'Super reasonable'),
(2, 1, 'LASHUAN', 'Mother', 'female', '2021-07-21', 'Present', '', 'img/a.png', 'singing', 'engineer', 'good', 'too much work', 'Super reasonable');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `pic` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memid`, `userid`, `name`, `title`, `gender`, `dob`, `status`, `description`, `pic`) VALUES
(1, 1, 'Kala', 'Son in Law', 'male', '2009-01-08', 'Living', 'adadad', 'img/4.png'),
(2, 1, 'Shad Khan', 'Son', 'male', '2020-02-03', 'Living', 'Great', 'img/1548168917541.jpg'),
(3, 1, 'Sayed', 'Grand Father', 'male', '2021-05-30', 'Living', 'Good ONe', 'img/IMG_20210330_000922.jpg'),
(4, 1, 'Karam', 'Daughter', 'female', '1994-10-28', 'Deceased', 'Liked playing hockey', 'img/BG.png'),
(5, 1, 'Shad', 'Brother', 'male', '2013-06-04', 'Living', 'sfsfsfsfs', 'img/cl.png'),
(6, 1, 'Quakbox.com', 'Daughter in Law', 'female', '2021-06-01', 'Living', 'dgddgdgd', 'img/DIT.png'),
(7, 1, 'shad', 'Father', 'male', '2021-06-08', 'Living', 'dgertgr', 'img/cxdx.png'),
(8, 1, 'fdadfd', 'Mother', 'female', '2021-06-10', 'Living', 'afdfadfffggr', 'img/bar.png'),
(10, 1, 'LASHUAN ', 'Father in Law', 'male', '2021-06-23', 'Present', 'ffryrtyry', 'img/audio2.png'),
(11, 1, 'Sayed', 'Myself', 'male', '1998-10-05', 'Present', 'fsfssf', 'img/prof.jpg'),
(12, 1, 'Rick', 'Grand Son', 'male', '2021-06-24', 'Present', 'sfsfs', 'img/waterbridge.jpg'),
(13, 1, 'Lucy', 'Grand Daughter', 'female', '2019-05-07', 'Present', 'adaddadaa', 'img/pexels-skitterphoto-9198.jpg'),
(14, 1, 'Lashuan', 'Wife', 'female', '1996-10-09', 'Present', 'Likes to play soccer', 'img/a7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_dob` varchar(100) NOT NULL,
  `u_description` varchar(500) NOT NULL,
  `u_gender` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `phone`, `password`, `u_name`, `u_dob`, `u_description`, `u_gender`, `pic`) VALUES
(1, 'syedrasheduzzaman7@gmail.com', 1701820722, 'abcd', 'Sayed', '2021-05-30', 'I am happy', 'male', 'img/prof.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mapmember`
--
ALTER TABLE `mapmember`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mapmember`
--
ALTER TABLE `mapmember`
  MODIFY `memid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
