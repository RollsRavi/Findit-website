-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 05:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `states` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `states`) VALUES
(1, 'images\\ap1.jpg', '1'),
(5, 'images\\ap2.jpg', '1'),
(6, 'images\\ap3.jpg', '1'),
(7, 'images\\ap4.jpg', '1'),
(8, 'images\\ap5.jpg', '1'),
(9, 'images\\an1.jpg', '2'),
(10, 'images\\an2.jpg', '2'),
(11, 'images\\an3.jpg', '2'),
(12, 'images\\an4.jpg', '2'),
(13, 'images\\an5.jpg', '2'),
(14, 'images\\aph1.jpg', '3'),
(15, 'images\\aph2.jpg', '3'),
(16, 'images\\aph3.jpg', '3'),
(17, 'images\\aph4.jpg', '3'),
(18, 'images\\aph5.jpg', '3'),
(19, 'images\\as1.jpg', '4'),
(20, 'images\\as2.jpg', '4'),
(21, 'images\\as3.jpg', '4'),
(22, 'images\\as4.jpg', '4'),
(23, 'images\\as5.jpg', '4'),
(24, 'images\\b1.jpg', '5'),
(25, 'images\\b2.jpg', '5'),
(26, 'images\\b3.jpg', '5'),
(27, 'images\\b4.jpg', '5'),
(28, 'images\\b5.jpg', '5'),
(29, 'images\\c1.jpg', '6'),
(30, 'images\\c2.jpg', '6'),
(31, 'images\\c3.jpg', '6'),
(32, 'images\\c4.jpg', '6'),
(33, 'images\\ch1.jpg', '7'),
(34, 'images\\ch2.jpg', '7'),
(36, 'images\\ch3.jpg', '7'),
(37, 'images\\ch4.jpg', '7'),
(38, 'images\\dn1.jpg', '8'),
(39, 'images\\dn2.jpg', '8'),
(40, 'images\\dd1.jpg', '9'),
(41, 'images\\dd2.jpg', '9'),
(42, 'images\\dd3.jpg', '9'),
(43, 'images\\delhi1.jpg', '10'),
(44, 'images\\delhi2.jpg', '10'),
(45, 'images\\delhi3.jpg', '10'),
(46, 'images\\delhi4.jpg', '10'),
(47, 'images\\delhi5.jpg', '10'),
(48, 'images\\lp1.jpg', '11'),
(49, 'images\\lp2.jpg', '11'),
(50, 'images\\py1.jpg', '12'),
(51, 'images\\py2.jpg', '12'),
(52, 'images\\goa1.jpg', '13'),
(53, 'images\\goa2.jpg', '13'),
(54, 'images\\goa3.jpg', '13'),
(55, 'images\\goa4.jpg', '13'),
(56, 'images\\goa5.jpg', '13'),
(57, 'images\\guj1.jpg', '14'),
(58, 'images\\guj2.jpg', '14'),
(59, 'images\\guj3.jpg', '14'),
(60, 'images\\har1.jpg', '15'),
(61, 'images\\har2.jpg', '15'),
(62, 'images\\har3.jpg', '15'),
(63, 'images\\hp1.jpg', '16'),
(64, 'images\\hp2.jpg', '16'),
(65, 'images\\jk1.jpg', '17'),
(66, 'images\\jk2.jpg', '17'),
(67, 'images\\jk3.jpg', '17'),
(68, 'images\\jhar1.jpg', '18'),
(69, 'images\\jhar2.jpg', '18'),
(70, 'images\\bg1.jpg', '19'),
(71, 'images\\bg2.jpg', '19'),
(72, 'images\\bg3.jpg', '19'),
(73, 'images\\bg4.jpg', '19'),
(74, 'images\\kr1.jpg', '20'),
(75, 'images\\kr2.jpg', '20'),
(76, 'images\\kr3.jpg', '20'),
(77, 'images\\mp1.jpg', '21'),
(78, 'images\\mp2.jpg', '21'),
(79, 'images\\mp3.jpg', '21'),
(80, 'images\\mum1.jpg', '22'),
(81, 'images\\mum2.jpg', '22'),
(82, 'images\\mum3.jpg', '22'),
(83, 'images\\mum4.jpg', '22'),
(84, 'images\\man.jpg', '23'),
(85, 'images\\man1.jpg', '23'),
(86, 'images\\meg1.jpg', '24'),
(87, 'images\\meg2.jpg', '24'),
(88, 'images\\miz1.jpg', '25'),
(89, 'images\\miz2.jpg', '25'),
(90, 'images\\nag1.jpg', '26'),
(91, 'images\\nag2.jpg', '26'),
(92, 'images\\nag3.jpg', '26'),
(93, 'images\\odi1.jpg', '27'),
(94, 'images\\odi2.jpg', '27'),
(95, 'images\\odi3.jpg', '27'),
(96, 'images\\pun1.jpg', '28'),
(97, 'images\\pun2.jpg', '28'),
(98, 'images\\jai1.jpg', '29'),
(99, 'images\\jai2.jpg', '29'),
(100, 'images\\sik1.jpg', '30'),
(101, 'images\\sik2.jpg', '30'),
(102, 'images\\tn1.jpg', '31'),
(103, 'images\\tn2.jpg', '31'),
(104, 'images\\tg1.jpg', '32'),
(105, 'images\\tg2.jpg', '32'),
(106, 'images\\tg3.jpg', '32'),
(107, 'images\\tri1.jpg', '33'),
(108, 'images\\tri2.jpg', '33'),
(109, 'images\\up1.jpg', '34'),
(110, 'images\\up2.jpg', '34'),
(111, 'images\\ud1.jpg', '35'),
(112, 'images\\ud2.jpg', '35'),
(113, 'images\\wb1.jpg', '36'),
(114, 'images\\wb2.jpg', '36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
