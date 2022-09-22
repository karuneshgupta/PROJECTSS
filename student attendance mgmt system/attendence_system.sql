-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 05:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendence_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `student_name`, `roll_number`) VALUES
(1, 'MOHD NASIR', '2'),
(2, 'Karunesh', '12'),
(3, 'Karunesh', '12'),
(4, 'Arunima Gupta', '13'),
(5, 'Arunima Gupta', '13'),
(6, 'Arunima Gupta', '13'),
(7, 'Naushad', '12'),
(8, 'Naushad', '12'),
(9, 'Naushad', '12'),
(10, 'Ayushman Joshi', '50');

-- --------------------------------------------------------

--
-- Table structure for table `attendence_records`
--

CREATE TABLE `attendence_records` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `attendence_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence_records`
--

INSERT INTO `attendence_records` (`id`, `student_name`, `roll_number`, `attendence_status`, `date`) VALUES
(0, 'MOHD NASIR', '2', 'present', '2021-12-21'),
(0, 'Karunesh', '12', 'present', '2021-12-21'),
(0, 'Karunesh', '12', 'present', '2021-12-21'),
(0, 'Arunima Gupta', '13', 'Absent', '2021-12-21'),
(0, 'Arunima Gupta', '13', 'present', '2021-12-21'),
(0, 'Arunima Gupta', '13', 'Absent', '2021-12-21'),
(0, 'MOHD NASIR', '2', 'present', '2021-12-22'),
(0, 'Karunesh', '12', 'present', '2021-12-22'),
(0, 'Karunesh', '12', 'present', '2021-12-22'),
(0, 'Arunima Gupta', '13', 'present', '2021-12-22'),
(0, 'Arunima Gupta', '13', 'present', '2021-12-22'),
(0, 'Arunima Gupta', '13', 'present', '2021-12-22'),
(0, 'Naushad', '12', 'present', '2021-12-22'),
(0, 'Naushad', '12', 'present', '2021-12-22'),
(0, 'Naushad', '12', 'present', '2021-12-22'),
(0, 'MOHD NASIR', '2', 'present', '2021-12-23'),
(0, 'Karunesh', '12', 'present', '2021-12-23'),
(0, 'Karunesh', '12', 'present', '2021-12-23'),
(0, 'Arunima Gupta', '13', 'present', '2021-12-23'),
(0, 'Arunima Gupta', '13', 'present', '2021-12-23'),
(0, 'Arunima Gupta', '13', 'Absent', '2021-12-23'),
(0, 'Naushad', '12', 'Absent', '2021-12-23'),
(0, 'Naushad', '12', 'Absent', '2021-12-23'),
(0, 'Naushad', '12', 'Absent', '2021-12-23'),
(0, 'Ayushman Joshi', '50', 'present', '2021-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
