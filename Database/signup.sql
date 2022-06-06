-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2022 at 08:07 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tallo7t`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_complete` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name_complete`, `username`, `role`, `email`, `password`, `date`) VALUES
(2, 'nasser sandali', 'nasser_sn', 'client', 'nasseressaouira@gmail.com', 'nasser12345', '2022-06-02 13:52:51'),
(3, 'nasser sandali', 'nasser_sn', 'client', 'nasseressaouira@gmail.com', 'nasser1235', '2022-06-02 13:52:51'),
(4, '', '', '', '', '$2y$10$nwibSWDRJuhFRloMwbXXh.zuA1BWC67OwcFw48SiALb7067ypTdge', '2022-06-02 13:52:51'),
(5, '', '', '', '', '$2y$10$LpIrFoWTb5Lpv8PO.N/F2uhraAw9Ia.JtqU.bsB3BxhUIye.s2j5y', '2022-06-02 13:52:51'),
(6, 'salma', 'salma sn', 'client', 'nasseressaouira@gmail.com', '$2y$10$6xRHiLd4icGjNVf80FOpou2oTkrh/mXjOvko2ODWw1C/O58e.eCKy', '2022-06-02 13:52:51'),
(7, '', '', '', '', '$2y$10$.B05HZOiIYnpm6KudZzL/ehcvgnD4kjdMqeiT8iZeR3ueHb5VCDqq', '2022-06-02 13:52:51'),
(8, '', '', '', '', '$2y$10$ZT7BbBAZTWrysjGwHimb6eUpTV.tdbZSL7RGK/th0NTvERVLGisWu', '2022-06-02 13:52:51'),
(9, '', '', '', '', '$2y$10$YTDIdlioUzZHnLm8VWiDt.dBSamA2qC4QRmMk.pG/Z9lNQZ2o9ekC', '2022-06-02 13:52:51'),
(10, '', '', '', '', '$2y$10$fVIXQxPc2ZBUeCshVRwOOe.eFzWB2vLb8YSqTACae7to/p41say52', '2022-06-02 13:52:51'),
(11, '', '', '', '', '$2y$10$K4qMArZ55Tao2.FNGB7Zh.02QcWQWB1givf3eDPpXamG/lhavzwqe', '2022-06-02 13:52:51'),
(12, '', '', '', '', '$2y$10$SR0z4l/sXvSUmeXajVgc8OuIuP7UPNcsRSHS4Y/k3wlh.c0eeql0G', '2022-06-02 13:53:24'),
(13, '', '', '', '', '$2y$10$6N9rsUaUhgEIQOhl1xZuxuL2hVHV2hb3yg0pUatxI6ZY5NvupPLom', '2022-06-02 13:53:29'),
(14, '', '', '', '', '$2y$10$TVplNurAj9GI4j2UJ1oZg.LTWmKCmZMf1MS47iZNyJU0Lz8N5waWi', '2022-06-02 17:52:53'),
(15, '', '', '', '', '$2y$10$mbIC48AjWpnleikx3o5TX.LcZ1CUL/fFB5vE5I4YsFIKNyZdLQL5a', '2022-06-02 18:00:34'),
(16, 'anass', 'jablcoding', 'artiste', 'anass@gmail.com', '$2y$10$ulRMBUCt76jDJdOPsK6k3eJAgx7dqE/UxQVkBBlNL0wIES6vJa/K6', '2022-06-02 18:38:57'),
(17, 'mooka', 'yassine', 'client', 'mooka@gmail.com', '$2y$10$k20qNMe3u4uJR/psCOkBxuKNCoWFS9j6cimcC849uwGTNoiHjQp5m', '2022-06-02 19:33:06'),
(18, 'bader', 'abouriale', 'artiste', 'bader@gmail.com', '$2y$10$YhbMT5c8VJgMbm9dhBXb8uJC74ByKUHKnH7KyK6eS5MbyRIOV2Ilq', '2022-06-02 19:33:33'),
(19, 'anass', 'anass', 'artiste', 'anass123@gmail.com', 'c76f271092a1518d79500f2eb10e0dca', '2022-06-02 19:34:48'),
(20, 'aymane', 'aymaneus', 'client', 'aymane@gmail.com', '$2y$10$OUpabRt06Zo2xbWBRwNx2O2HY0mHuVFigO3VP49hKyEwceTnZjFjq', '2022-06-03 08:18:30'),
(21, 'oussama', 'oussamasouiri', 'artiste', 'oussama@gmail.com', '$2y$10$nxxXCpKmnUlDt7tEL2lYiOnhaNJU9gcM9KYAGrRV9GCM.Xfr5YBRG', '2022-06-03 09:08:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
