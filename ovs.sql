-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 01:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sl` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `voter_id` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `validity` enum('voter','candidate','invalid','commision') NOT NULL,
  `v_card` varchar(20) NOT NULL,
  `vote_status` enum('no','yes') NOT NULL,
  `permission` enum('start','stop','candidate') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sl`, `uname`, `dob`, `voter_id`, `aadhar`, `district`, `city`, `state`, `validity`, `v_card`, `vote_status`, `permission`) VALUES
(36, 'Ritusree Ghosh', '2021-08-22', '110', '110', 'cqwdcew', 'Kolkata', 'West Bengal', 'voter', 'images/Koala.jpg', 'no', 'start'),
(19, 'Anirban Sikdar', '2021-06-09', 'aaa', '111', 'yffj', 'Kolkata', 'West Bengal', 'candidate', '', 'no', 'stop'),
(34, 'Anirban Sikdar', '2021-08-16', 'dd', '0', 'llllllllllllllllllll', 'Kolkata', 'West Bengal', 'voter', 'images/logo.png', 'yes', 'start'),
(15, 'Anirban Sikdar', '0000-00-00', 'dkdhkhh', '73573737', '', 'Kolkata', 'West Bengal', '', '', 'no', 'stop'),
(13, 'Anirban Sikdar', '2021-06-15', 'dtgsr', '52', 'gd', 'Kolkata', 'West Bengal', 'invalid', '', 'no', 'stop'),
(29, 'Anirban Sikdar', '2021-08-19', 'eee', '3333', 'it', 'Kolkata', 'West Bengal', 'voter', 'images/', 'no', 'start'),
(16, 'Anirban Sikdar', '0000-00-00', 'fc', '212', '', 'Kolkata', 'West Bengal', 'candidate', '', 'no', 'stop'),
(33, 'Anirban Sikdar', '2021-08-10', 'gg', '55', 'jrjryj', 'Kolkata', 'West Bengal', 'voter', 'images/', 'no', 'start'),
(14, 'Anirban Sikdar', '2021-06-29', 'ggsfgsfsf', '5672', '', 'Kolkata', 'West Bengal', '', '', 'no', 'stop'),
(20, 'Anirban Sikdar', '2021-06-09', 'hhf', '57', 'jh', 'Kolkata', 'West Bengal', 'invalid', '', 'no', 'stop'),
(17, 'Anirban Sikdar', '0000-00-00', 'jgdgddg', '0', '', 'Kolkata', 'West Bengal', '', '', 'no', 'stop'),
(26, 'gjhgj', '0000-00-00', 'jgj', '56', '', '', '', 'candidate', '', 'no', 'start'),
(31, 'Anirban Sikdar', '2021-08-19', 'lll', '40404404404', 'gdc', 'Kolkata', 'West Bengal', 'candidate', 'images/logo.png', 'no', 'stop'),
(1, 'commision2021', '0001-01-01', 'nopass123', '235', 'null', 'null', 'West Bengal', 'commision', '', 'no', 'stop'),
(27, 'Anirban Sikdar', '2021-08-20', 'qqq', '777', 'hgd', 'Kolkata', 'West Bengal', 'voter', 'images/', 'no', 'start'),
(25, 'Anirban Sikdar', '0000-00-00', 'sgsfgsgs', '7674', '', 'Kolkata', 'West Bengal', 'candidate', '', 'no', 'stop'),
(30, 'Anirban Sikdar', '2021-08-11', 'sss', '1', 'kh', 'Kolkata', 'West Bengal', 'voter', 'images/', 'no', 'start'),
(2, 'Anirban Sikdar', '2021-05-11', 'tehe', '2', 'vhjv', 'Kolkata', 'West Bengal', 'voter', '', 'no', 'start'),
(32, 'Anirban Sikdar', '2021-08-25', 'ws', '52', 'dt', 'Kolkata', 'West Bengal', 'voter', 'images/', 'no', 'start'),
(28, 'aaa', '2021-08-20', 'www', '222', 'vhjv', 'Kolkata', 'West Bengal', 'voter', 'images/', 'no', 'start'),
(18, 'Anirban Sikdar', '0000-00-00', 'zvgdsgg', '0', '', 'Kolkata', 'West Bengal', '', '', 'no', 'stop');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `voter_id` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `party` varchar(20) NOT NULL,
  `vote` int(11) NOT NULL,
  `plogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`voter_id`, `uname`, `party`, `vote`, `plogo`) VALUES
('aaa', 'Anirban Sikdar', 'gccgcd', 3, 'images/logo.png'),
('dkdhkhh', 'Anirban Sikdar', 'hsfghshs', 0, 'images/'),
('fc', 'Anirban Sikdar', 'dyhd', 0, 'images/'),
('ggsfgsfsf', 'Anirban Sikdar', 'hsfghshs', 0, 'images/'),
('jgdgddg', 'Anirban Sikdar', 'dghdhdhd', 0, 'images/1.jpg'),
('jgj', 'gjhgj', 'gchv', 0, 'images/'),
('lll', 'Anirban Sikdar', 'hdudtjdtjdtkj', 0, 'images/logo_sm.png'),
('sgsfgsgs', 'Anirban Sikdar', 'hvhcdhd', 2, 'images/'),
('zvgdsgg', 'Anirban Sikdar', 'dgagaga', 0, 'images/1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`voter_id`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
