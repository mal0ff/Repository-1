-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaposleni`
--
CREATE DATABASE IF NOT EXISTS `zaposleni` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `zaposleni`;

-- --------------------------------------------------------

--
-- Table structure for table `employed`
--

CREATE TABLE `employed` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `adress` varchar(191) NOT NULL,
  `position` varchar(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `supervisor` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `jmbg` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employed`
--

INSERT INTO `employed` (`id`, `name`, `email`, `adress`, `position`, `date`, `supervisor`, `status`, `jmbg`) VALUES
(19, 'Alison Jr. Smith', 'alismith@gmail.com', 'Manhattan 35', 'Medior developer', '10.06.2019', 'Bill Wesley', 'full-time', '19000395999912'),
(21, 'Jeff Stone', 'jeffstone40@gmail.com', 'Washington district 29', 'Junior developer', '15.05.2014', 'Alison Jr. Smith', 'part-time', '19000395999912'),
(22, 'Nick Knight', 'niknight@gmail.com', 'London Avenue 10', 'Junior developer', '20.10.2015.', 'Alison Jr. Smith', 'full-time', '19000567190001'),
(23, 'Hugh Gared', 'hughgared@gmail.com', 'Warsaw district 11', 'Medior developer', '10.04.2020.', 'Bill Wesley', 'full-time', '90004532197123'),
(24, 'Connor Jasony', 'cj243@gmail.com', 'Podgorica district 2', 'Junior developer', '15.4.2020.', 'Alison Jr. Smith', 'paid internship', '19000899999991'),
(25, 'Stefan Stefanovic', 'stefstefan@gmail.com', 'Belgrade street 25', 'Junior developer', '27.3.2023', 'Mirko Mirkovljev', 'part-time', '12345432198754'),
(26, 'Mirko Mirkovljev', 'mirkovljev@gmail.com', 'Sofia south street 9', 'Medior developer', '21.08.2019.', 'Bill Wesley', 'full-time', '09854378621356'),
(27, 'Bill Wesley', 'billwesley@gmail.com', 'West Cardiff street 26', 'Senior developer', '27.6.2012.', 'Regional directorate', 'full-time', '90004658743219'),
(28, 'Peter White', 'pwhite@yahoo.com', 'Tokyo district 42', 'Junior developer', '7.10.2022.', 'Mirko Mirkovljev', 'full-time', '12354367854324');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employed`
--
ALTER TABLE `employed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employed`
--
ALTER TABLE `employed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
