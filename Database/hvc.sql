-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 01:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `User_nm` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `User_nm`, `Password`) VALUES
(1, 'Ashwin Rathod', 'Hod@Hvc', 'd8b77e98b14a1effcada37535d1a85fa');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `id` int(5) NOT NULL,
  `enroll_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`id`, `enroll_no`) VALUES
(0, 123456781),
(0, 123456782),
(0, 123456783),
(0, 123456784),
(0, 123456785),
(0, 123456786),
(0, 123456787),
(0, 123456788),
(0, 123456789),
(0, 1234567810),
(0, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `exam_form`
--

CREATE TABLE `exam_form` (
  `Enroll_no` int(20) NOT NULL,
  `exam_nm` varchar(30) NOT NULL,
  `clg_nm` varchar(30) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `cast` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ans_lang` varchar(30) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `usr_mail` varchar(30) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `Uimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_form`
--

INSERT INTO `exam_form` (`Enroll_no`, `exam_nm`, `clg_nm`, `stud_name`, `gen`, `cast`, `address`, `ans_lang`, `mob_no`, `usr_mail`, `subject`, `date`, `Uimage`) VALUES
(123456782, 'Bscit sem1', 'Harivandan College', 'Dalki Tarun Anandbhai', 'male', 'sebc', 'Veraval', 'English,', '7896543245', 'tarun@gmail.com', 'Java,Csharp,Networking,Operationg System,', '2022-09-06', ''),
(123456786, 'Bscit', 'Harivandan College', 'Kamaliya Ashish P.', 'male', 'sebc', 'Rajkot', 'English,', '7434992447', 'ashishkamaliya@gmail.com', '\r\n                     Communication Skills,\r\n                     SEO,\r\n                     Account,\r\n                     Asp.net,\r\n                     C++,', '2022-09-10', '2021-04-08 (2).png'),
(123456788, 'Bscit', 'Harivandan College', 'Naimish Rafaliya G.', 'male', 'sebc', 'bhesan, Junagadh', 'English,', '7865349765', 'naimish@gmail.com', '\r\n                     Communication Skills,\r\n                     SEO,', '2022-09-10', 'Screenshot (3).png'),
(123456987, 'BCA', 'Harivandan College', 'Vaja Nilesh Vajubhai', 'male', 'sebc', 'Somnath', 'English,', '7894561231', 'nilesh@gmail.com', '\r\n                     Communication Skills,\r\n                     SEO,', '2022-09-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(5) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `smail` varchar(30) NOT NULL,
  `smsg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sname`, `smail`, `smsg`) VALUES
(5, 'Nilesh Vaja', 'nilesh@gmail.com', 'Amazing work !!'),
(6, 'tarun dalki', 'tarun@gmail.com', 'i like this site. !!');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `eno` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`eno`, `fname`, `lname`, `dob`, `gender`, `email`, `phno`, `usn`, `passwd`, `image`) VALUES
(123456782, 'tarun', 'dalki', '2022-09-01', 'male', 'tarun@gmail.com', '7896543254', 'tarun@123', 'a412c990fef411aee2396fb42707c32e', ''),
(123456786, 'Ashish', 'Kamaliya', '2003-04-04', 'male', 'ashishkamaliya@gmail.com', '7434992447', 'ashish@123', '74d319802c9cc642be0dbd6598b6f9a0', ''),
(123456788, 'naimish', 'Rafaliya', '2002-11-02', 'male', 'naimish@gmail.com', '7865349765', 'naimish@123', 'e97a59aedfc8c96b6a6d9b5413b6afea', ''),
(123456987, 'nilesh', 'vaja', '2002-02-14', 'male', 'nilesh@gmail.com', '7894561231', 'nilesh@123', 'af962b2d617482c9be9db12c0745e861', 'Screenshot (30).png');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Sub_id` varchar(20) NOT NULL,
  `Sub_nm` varchar(50) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Sem` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Sub_id`, `Sub_nm`, `Course`, `Sem`) VALUES
('23weuf3', 'Communication Skills', 'BCA', 2),
('24tbwe54', 'SEO', 'Bscit', 5),
('8554sdjd', 'Account', 'Bcom', 4),
('f7trf43r', 'Asp.net', 'Bscit', 5),
('sjdkf3274', 'C++', 'BBA', 4);

-- --------------------------------------------------------

--
-- Table structure for table `s_subjects`
--

CREATE TABLE `s_subjects` (
  `Enroll_no` int(20) NOT NULL,
  `Sub_id` varchar(20) NOT NULL,
  `Sub_nm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_subjects`
--

INSERT INTO `s_subjects` (`Enroll_no`, `Sub_id`, `Sub_nm`) VALUES
(123456782, '23weuf3', 'Communication Skills');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_nm` (`User_nm`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_no`);

--
-- Indexes for table `exam_form`
--
ALTER TABLE `exam_form`
  ADD PRIMARY KEY (`Enroll_no`),
  ADD UNIQUE KEY `mob_no` (`mob_no`),
  ADD UNIQUE KEY `usr_mail` (`usr_mail`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`eno`),
  ADD UNIQUE KEY `usn` (`usn`,`passwd`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Sub_id`);

--
-- Indexes for table `s_subjects`
--
ALTER TABLE `s_subjects`
  ADD PRIMARY KEY (`Sub_id`),
  ADD KEY `Enroll_no` (`Enroll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `s_subjects`
--
ALTER TABLE `s_subjects`
  ADD CONSTRAINT `Enroll_no` FOREIGN KEY (`Enroll_no`) REFERENCES `exam_form` (`Enroll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
