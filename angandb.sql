-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 06:36 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `pid`, `image`) VALUES
(1, 18, 'images/projects/remove.png'),
(2, 19, 'images/projects/remove.png'),
(3, 20, 'images/projects/add.png'),
(4, 21, 'images/projects/add.png'),
(5, 22, 'images/projects/add.png'),
(6, 22, 'images/projects/admin.png'),
(7, 22, 'images/projects/audit.png'),
(8, 22, 'images/projects/hr.png'),
(9, 22, 'images/projects/remove.png'),
(10, 22, 'images/projects/report.png'),
(11, 22, 'images/projects/saveClose.png'),
(12, 22, 'images/projects/saveNew.png'),
(13, 22, 'images/projects/security.png'),
(14, 23, 'images/projects/23-0.'),
(15, 24, 'images/projects/24-0.'),
(16, 25, 'images/projects/25-0.png'),
(17, 26, 'images/projects/26-0.png'),
(18, 26, 'images/projects/26-1.png'),
(19, 26, 'images/projects/26-2.png'),
(20, 26, 'images/projects/26-3.png'),
(21, 26, 'images/projects/26-4.png'),
(22, 26, 'images/projects/26-5.png'),
(23, 26, 'images/projects/26-6.png'),
(24, 26, 'images/projects/26-7.png'),
(25, 26, 'images/projects/26-8.png'),
(26, 27, 'images/projects/27-0.jpg'),
(27, 27, 'images/projects/27-1.png'),
(28, 27, 'images/projects/27-2.gif'),
(29, 27, 'images/projects/27-3.jpg'),
(30, 27, 'images/projects/27-4.jpg'),
(31, 27, 'images/projects/27-5.jpg'),
(32, 27, 'images/projects/27-6.jpg'),
(33, 28, 'images/projects/28-0.png'),
(34, 28, 'images/projects/28-1.png'),
(35, 29, 'images/projects/29-0.jpg'),
(36, 29, 'images/projects/29-1.png'),
(37, 29, 'images/projects/29-2.gif'),
(38, 29, 'images/projects/29-3.jpg'),
(39, 29, 'images/projects/29-4.jpg'),
(40, 30, 'images/projects/30-0.jpg'),
(41, 30, 'images/projects/30-1.png'),
(42, 30, 'images/projects/30-2.gif'),
(43, 30, 'images/projects/30-3.jpg'),
(44, 30, 'images/projects/30-4.jpg'),
(45, 31, 'images/projects/31-0.jpg'),
(46, 31, 'images/projects/31-1.png'),
(47, 31, 'images/projects/31-2.gif'),
(48, 31, 'images/projects/31-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userName`, `password`, `type`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectName` varchar(200) NOT NULL,
  `project_url` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `details` varchar(10000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectName`, `project_url`, `location`, `details`, `status`) VALUES
(11, 'as', '', 'as', 'as', 3),
(12, 'assadsdfsd', '', 'as', 'as', 3),
(13, 'assadsdfsd', '', 'as', 'as', 3),
(14, 'asdas', '', 'asd', 'asd', 3),
(15, 'asdas', '', 'asd', 'asd', 3),
(16, 'asdas', '', 'asd', 'asd', 3),
(17, 'asdas', '', 'asd', 'asd', 3),
(18, 'asdas', '', 'asd', 'asd', 2),
(19, 'asdas', '', 'asd', 'asd', 2),
(20, 'asdas', '', 'asd', 'asd', 2),
(21, 'asdas', '', 'asd', 'asd', 2),
(22, 'asdas', '', 'asd', 'asd', 2),
(23, 'asdas', '', 'asd', 'asd', 2),
(24, 'asdas', '', 'asd', 'asd', 2),
(25, 'asdas', '', 'asd', 'asd', 2),
(26, 'asdas', '', 'asd', 'asd', 2),
(27, 'Wes dkljdf dgksfl sgfkjfgk fglfkg sdf', '', 'Baridhara DOHS', 'Angan Crystal Bridge \r\n\r\nAngan Crystal Bridge \r\nProperty Type: Residential\r\n\r\nHouse 08, Road 10\r\nBaridhara Diplomatic Zone.\r\nOpposite to Baridhara Park.\r\n\r\nPlot size: 10 Katha.\r\nLevel: B+G+9.\r\nApartment Size: 4350 - 5100 Sft.\r\nFacing: South.\r\nHand Over: December 2013.', 3),
(28, 'Yeasin', '', 'Banani', 'Ashjdn dn\r\ndfd\r\nsdfsdf', 3),
(29, '1', '', 'Baridhara DOHS', 'fdf\r\nd\r\ndf\r\nfg\r\nfg\r\nf', 1),
(30, '2', '', 'Baridhara DOHS', 'fdf d\r\nfd\r\ndf\r\ndf\r\ndfdf', 2),
(31, '3', '', 'Baridhara DOHS', 'fdf\r\ndf\r\ndf\r\ndf\r\ndfd\r\nfd\r\nfd\r\nf', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
