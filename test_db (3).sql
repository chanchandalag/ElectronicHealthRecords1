-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 04:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `cid` int(11) NOT NULL,
  `csid` int(11) NOT NULL,
  `cref_id` varchar(150) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `findings` text NOT NULL,
  `recommendation` text NOT NULL,
  `prescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`cid`, `csid`, `cref_id`, `date_added`, `findings`, `recommendation`, `prescription`) VALUES
(12, 6, '13c25403207dbc39fc21bf091d1b03e7', '2023-11-11 11:43:35', 'TEST', 'TEST', 'TEST'),
(13, 7, '26d1383b1b879d0ba60ea64b8ef33aaa', '2023-11-11 11:45:39', 'TEST', 'TEST', 'TEST'),
(14, 8, 'f42a2abe5591525dc29f8b1b24454acd', '2023-11-11 11:55:38', 'TEST', 'TEST', 'TEST'),
(15, 9, '3fb6fd56f13d72dc172014b50161e8f4', '2023-11-11 11:56:26', 'test', 'test', 'test'),
(16, 10, 'f4a3ab6998563d0448e26bbdc552902b', '2023-11-11 11:57:14', 'TEST', 'TEST', 'TEST'),
(17, 11, '4a9c0277a975ed4a858b2c0c583c5757', '2023-11-11 11:57:57', 'test', 'test', 'test'),
(18, 12, 'befadc6f90479bc3e3631b0f520da123', '2023-11-11 12:10:21', 'test', 'test', 'test'),
(19, 13, '579b2b0a5a500047ae0107f8f2e770e9', '2023-11-11 12:11:15', 'test', 'test', 'test'),
(20, 14, '6f1e70813d8b893198e85c40b6559ea9', '2023-11-11 12:12:17', 'test', 'test', 'test'),
(21, 15, 'cc8bed43f81b5f3d3999d60f00c933b5', '2023-11-11 12:13:06', 'test', 'test', 'test'),
(22, 16, '6438b7d94f1ac3c226c7e19d55188510', '2023-11-11 12:22:46', 'test', 'test', 'test'),
(23, 17, 'a0fe53bbb6da34ea9e30d690f709b037', '2023-11-11 12:24:01', 'test', 'test', 'test'),
(24, 18, '31c65c3a6ebfefc366ec6b60b2d666c9', '2023-11-11 12:24:59', 'test', 'test', 'test'),
(25, 19, 'd74c19145cb03741a14be98e2520a6a0', '2023-11-11 12:25:36', 'test', 'test', 'test'),
(26, 20, '725b3ab7ed9d042413199a113c263c19', '2023-11-11 12:26:17', 'test', 'test', 'test'),
(27, 7, 'd4268527bab0bfa15ea8c2ed36c9be28', '2023-11-11 12:30:03', 'test', 'test', 'test'),
(28, 10, 'd823803ac6d19cc6b18133655cc089bb', '2023-11-11 12:30:52', 'test', 'test', 'test'),
(29, 12, '63d8386b473c790a0ccf370877d9354c', '2023-11-11 12:31:23', 'test', 'test', 'test'),
(30, 13, '5ddaf69a42d7d91ac9c111f18c3c4c68', '2023-11-11 12:32:00', 'testt', 'test', 'test'),
(31, 15, '86e3981739925f33c72f352e329ee7eb', '2023-11-11 12:32:42', 'testt', 'test', 'ttest'),
(32, 21, 'b051473dd1b43e62b298f8f188ec4024', '2023-11-11 16:13:04', 'TEST', 'TEST', 'TEST'),
(33, 22, '2cbcb690fb39fe46e79bc827617c8034', '2023-11-12 05:56:17', 'test', 'test', 'test'),
(34, 23, '0ef1e3820eb313cb93001ec1be5b4379', '2023-11-12 05:57:18', 'test', 'test', 'test'),
(35, 24, '00c40951eecf8b91a2fa74758187bd35', '2023-11-12 05:57:55', 'test', 'test', 'test'),
(36, 25, 'cde86610221bd6b6a4ad2535add156cd', '2023-11-12 05:58:40', 'test', 'test', 'test'),
(37, 26, '107a68ec98285a74f3acba814d45d8f8', '2023-11-12 05:59:31', 'test', 'test', 'test'),
(38, 27, 'd1e2d270bc5c21d7d1866173a1a29879', '2023-11-12 06:00:22', 'test', 'test', 'test'),
(39, 28, '71579b96cdc3aba1ab24de1465de5f0d', '2023-11-12 15:13:30', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `dental`
--

CREATE TABLE `dental` (
  `d_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `mid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`mid`, `sid`, `date_added`) VALUES
(14, 7, '2023-11-11 11:41:13'),
(15, 6, '2023-11-11 11:41:47'),
(16, 8, '2023-11-11 11:54:46'),
(17, 9, '2023-11-11 11:55:52'),
(18, 10, '2023-11-11 11:56:42'),
(19, 11, '2023-11-11 11:57:26'),
(20, 12, '2023-11-11 12:09:17'),
(21, 13, '2023-11-11 12:10:41'),
(22, 14, '2023-11-11 12:11:29'),
(23, 15, '2023-11-11 12:12:31'),
(24, 16, '2023-11-11 12:22:12'),
(25, 17, '2023-11-11 12:23:00'),
(26, 18, '2023-11-11 12:24:15'),
(27, 19, '2023-11-11 12:25:09'),
(28, 20, '2023-11-11 12:25:47'),
(29, 21, '2023-11-11 16:12:25'),
(30, 22, '2023-11-12 05:55:31'),
(31, 23, '2023-11-12 05:56:41'),
(32, 24, '2023-11-12 05:57:31'),
(33, 25, '2023-11-12 05:58:10'),
(34, 26, '2023-11-12 05:59:02'),
(35, 27, '2023-11-12 05:59:44'),
(36, 28, '2023-11-12 15:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecords`
--

CREATE TABLE `medicalrecords` (
  `mrid` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ref_id` varchar(150) NOT NULL,
  `height` varchar(75) NOT NULL,
  `weight` varchar(75) NOT NULL,
  `blood_pressure` varchar(75) NOT NULL,
  `pulse_rate` varchar(75) NOT NULL,
  `respiration` varchar(75) NOT NULL,
  `body_built` varchar(75) NOT NULL,
  `far_vision` varchar(75) NOT NULL,
  `near_vision` varchar(75) NOT NULL,
  `color_test` varchar(75) NOT NULL,
  `hearing` varchar(75) NOT NULL,
  `audiometry_ad` varchar(75) NOT NULL,
  `audiometry_as` varchar(75) NOT NULL,
  `nose` tinyint(1) NOT NULL DEFAULT 0,
  `tubercolosis` tinyint(1) NOT NULL DEFAULT 0,
  `cancer` tinyint(1) NOT NULL DEFAULT 0,
  `kidney` tinyint(1) NOT NULL DEFAULT 0,
  `headaches` tinyint(1) NOT NULL DEFAULT 0,
  `ear` tinyint(1) NOT NULL DEFAULT 0,
  `highblood` tinyint(1) NOT NULL DEFAULT 0,
  `disorder` tinyint(1) NOT NULL DEFAULT 0,
  `cough` tinyint(1) NOT NULL DEFAULT 0,
  `dizziness` tinyint(1) NOT NULL DEFAULT 0,
  `asthma` tinyint(1) NOT NULL DEFAULT 0,
  `heart` tinyint(1) NOT NULL DEFAULT 0,
  `stomach` tinyint(1) NOT NULL DEFAULT 0,
  `seizures` tinyint(1) NOT NULL DEFAULT 0,
  `dysmennorhea` tinyint(1) NOT NULL DEFAULT 0,
  `record_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicalrecords`
--

INSERT INTO `medicalrecords` (`mrid`, `student_id`, `ref_id`, `height`, `weight`, `blood_pressure`, `pulse_rate`, `respiration`, `body_built`, `far_vision`, `near_vision`, `color_test`, `hearing`, `audiometry_ad`, `audiometry_as`, `nose`, `tubercolosis`, `cancer`, `kidney`, `headaches`, `ear`, `highblood`, `disorder`, `cough`, `dizziness`, `asthma`, `heart`, `stomach`, `seizures`, `dysmennorhea`, `record_added`) VALUES
(22, 6, '13c25403207dbc39fc21bf091d1b03e7', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, '2023-11-11 11:43:19'),
(23, 7, '26d1383b1b879d0ba60ea64b8ef33aaa', '', '', '', '', '', 'slender', '', '', 'Adequate', 'Adequate', '', '', 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, '2023-11-11 11:45:23'),
(24, 8, 'f42a2abe5591525dc29f8b1b24454acd', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, '2023-11-11 11:55:30'),
(25, 9, '3fb6fd56f13d72dc172014b50161e8f4', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', '', 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, '2023-11-11 11:56:17'),
(26, 10, 'f4a3ab6998563d0448e26bbdc552902b', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', 'Adequate', 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, '2023-11-11 11:57:06'),
(27, 11, '4a9c0277a975ed4a858b2c0c583c5757', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, '2023-11-11 11:57:49'),
(28, 12, 'befadc6f90479bc3e3631b0f520da123', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Defective', 'Defective', 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, '2023-11-11 12:09:50'),
(29, 13, '579b2b0a5a500047ae0107f8f2e770e9', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Defective', 'Adequate', 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, '2023-11-11 12:11:07'),
(30, 14, '6f1e70813d8b893198e85c40b6559ea9', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, '2023-11-11 12:12:08'),
(31, 15, 'cc8bed43f81b5f3d3999d60f00c933b5', '1', '1', '1', '1', '1', 'heavy', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Defective', 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, '2023-11-11 12:12:59'),
(32, 16, '6438b7d94f1ac3c226c7e19d55188510', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, '2023-11-11 12:22:34'),
(33, 17, 'a0fe53bbb6da34ea9e30d690f709b037', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, '2023-11-11 12:23:54'),
(34, 18, '31c65c3a6ebfefc366ec6b60b2d666c9', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Defective', 'Defective', 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, '2023-11-11 12:24:44'),
(35, 19, 'd74c19145cb03741a14be98e2520a6a0', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, '2023-11-11 12:25:29'),
(36, 20, '725b3ab7ed9d042413199a113c263c19', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Defective', 'Defective', 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, '2023-11-11 12:26:11'),
(37, 7, 'd4268527bab0bfa15ea8c2ed36c9be28', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', '', 0, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 1, 0, 1, '2023-11-11 12:29:57'),
(38, 10, 'd823803ac6d19cc6b18133655cc089bb', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 0, '2023-11-11 12:30:46'),
(39, 12, '63d8386b473c790a0ccf370877d9354c', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', '', 1, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 1, 0, '2023-11-11 12:31:17'),
(40, 13, '5ddaf69a42d7d91ac9c111f18c3c4c68', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', '', 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 1, '2023-11-11 12:31:54'),
(41, 15, '86e3981739925f33c72f352e329ee7eb', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', '', 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1, '2023-11-11 12:32:33'),
(42, 21, 'b051473dd1b43e62b298f8f188ec4024', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Defective', 'Defective', 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, '2023-11-11 16:12:54'),
(43, 22, '2cbcb690fb39fe46e79bc827617c8034', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 1, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0, 1, 0, '2023-11-12 05:56:02'),
(44, 23, '0ef1e3820eb313cb93001ec1be5b4379', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Defective', 'Defective', 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, '2023-11-12 05:57:09'),
(45, 24, '00c40951eecf8b91a2fa74758187bd35', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', '', 0, 0, 1, 0, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, '2023-11-12 05:57:48'),
(46, 25, 'cde86610221bd6b6a4ad2535add156cd', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', '', 'Adequate', 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '2023-11-12 05:58:34'),
(47, 26, '107a68ec98285a74f3acba814d45d8f8', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 1, '2023-11-12 05:59:25'),
(48, 27, 'd1e2d270bc5c21d7d1866173a1a29879', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 0, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 1, '2023-11-12 06:00:16'),
(49, 28, '71579b96cdc3aba1ab24de1465de5f0d', '1', '1', '1', '1', '1', 'slender', '1', '1', 'Adequate', 'Adequate', 'Adequate', 'Adequate', 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, '2023-11-12 15:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `ID_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `extension_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = yes, 0 = no',
  `course` varchar(255) NOT NULL,
  `year` text NOT NULL,
  `section` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `email_add` varchar(255) NOT NULL,
  `pt_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = student or employee, 0 = visitor',
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `ID_number`, `first_name`, `middle_name`, `last_name`, `extension_name`, `email`, `current_address`, `permanent_address`, `sex`, `course`, `year`, `section`, `brgy`, `municipality`, `province`, `contact`, `civil_status`, `nationality`, `age`, `dob`, `name`, `relationship`, `mobile`, `telephone`, `home_address`, `email_add`, `pt_type`, `added_date`) VALUES
(6, '20-0580-168', 'Christian', 'Ytang', 'Dalag', '', 'dalag2k09@gmail.com', 'Villaba', 'Villab', 1, 'BSIT', 'IV', 'B', 'Del Norte', 'Villaba', 'Leyte', '09466712297', 'Single', 'Filipino', '21', '2002-01-21', 'Test', 'Father', '09109688737', '123123123', 'Villaba', 'Villaba', 1, '2023-11-12 07:58:09'),
(7, '19-2789-078', 'Antoinette', 'Goopio', 'Sanico', '', 'tonyang@gmail.com', 'Palompon', 'Palompon', 0, 'BSIT', 'IV', 'B', 'Ipil III', 'Palompon', 'Leyte', '09123461819', 'Single', 'Filipino', '23', '2000-06-12', 'test', 'Father', '01923649123', '132123123', 'Palompon', '', 1, '2023-11-12 07:58:09'),
(8, '19-1234-234', 'Kobie Bryan', '', 'Fernandez', '', 'kobie@gmail.com', 'Palompon', 'Palompon', 1, 'BSIT', 'IV', 'B', 'Mazawalo', 'Palompon', 'Leyte', '09123571238', 'Single', 'Filipino', '23', '2000-03-12', 'test', 'Father', '09123648123', '0912364186', 'Palompon', 'kobie@gmail.com', 1, '2023-11-12 07:58:09'),
(9, '19-1239-538', 'Jhun Ed', 'Tortosa', 'Nunez', '', 'jhuned@gmail.com', 'Villaba', 'Villaba', 1, 'BSIT', 'IV', 'B', 'Cabungaan', 'Villaba', 'Leyte', '0912364812', 'Single', 'Filipino', '22', '2000-10-12', 'test', 'Father', '091236471', '12983126471', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(10, '20-1234-098', 'Nikka Jane', '', 'Gemina', '', 'nikka@gmail.com', 'Palompon', 'Palompon', 0, 'BSIT', 'IV', 'B', 'Mazawalo', 'Palompon', 'Leyte', '0912364123', 'Single', 'Filipino', '21', '2002-06-12', 'test', 'mother', '0912364123', '0912364712', 'Palompon', '', 1, '2023-11-12 07:58:09'),
(11, '18-1237-123', 'Whynnie Jhoyce', '', 'Formentera', '', 'whyn@gmail.com', 'Palompon', 'Palompon', 0, 'BSIT', 'IV', 'B', 'Central 1', 'Palompon', 'Leyte', '091237127', 'Single', 'Filipino', '24', '1999-03-12', 'test', 'father', '0912368123', '09123654123', 'Palompon', '', 1, '2023-11-12 07:58:09'),
(12, '20-1234-123', 'John Marc', '', 'German', '', 'jm@gmail.com', 'Villaba', 'Villaba', 1, 'BSIT', 'IV', 'B', 'Villaba', 'Villaba', 'Leyte', '0912361238', 'Single', 'Filipino', '21', '2002-02-03', 'test', 'Father', '09123748123', '09123612731', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(13, '20-1237-123', 'Shaun ', '', 'Panoy', '', 'shaun@gmail.com', 'Villaba', 'Villaba', 1, 'BSMT', 'III', 'B', 'Villaba', 'Villaba', 'Leyte', '0912361273', 'Single', 'Filipino', '21', '2002-02-01', 'test', 'Father', '01923172', '091236123', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(14, '20-1267-123', 'Ivy Mae', '', 'Tumamak', '', 'ivy@gmail.com', 'Villaba', 'Villaba', 0, 'BSIT', 'IV', 'B', 'Cabungaan', 'Villaba', 'Leyte', '09123612731', 'Single', 'Filipino', '21', '2002-02-01', 'test', 'father', '091237123', '09112361123', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(15, '20-1237-746', 'Junelyn', '', 'Baldeo', '', 'junelyn@gmail.com', 'Villaba', 'Villaba', 0, 'BSIT', 'IV', 'B', 'Ambot', 'Villaba', 'leyte', '0912361273', 'Single', 'Filipino', '21', '2002-10-01', 'test', 'father', '09123123', '09123123', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(16, '', 'Joyjoy', '', 'Aninipot', '', 'joy@gmail.com', 'Palompon', 'palompon', 0, '', 'N/A', '', 'Ipil lll', 'Palompon', 'Leyte', '0911236123', 'Single', 'Filipino', '18', '2004-12-12', 'test', 'father', '019231236123', '01923162361', 'Palompon', '', 0, '2023-11-12 07:58:09'),
(17, '', 'Mark', '', 'Ang', '', '', 'Villab', 'Villaba', 1, '', 'N/A', '', 'Del Norte', 'Villaba', 'Leyte', '0912361237', 'Singel', 'Filipino', '18', '2005-03-12', '', '', '', '', '', '', 0, '2023-11-12 07:58:09'),
(18, '', 'Chlief', '', 'German', '', '', 'Villaba', 'Villaba', 1, '', 'N/A', '', 'Ambot', 'Villaba', 'Leyte', '09123123', 'Single', 'Filipino', '21', '2002-12-12', 'test', 'father', '', '', 'Villaba', '', 0, '2023-11-12 07:58:09'),
(19, '', 'Audrey', '', 'Dingal', '', '', 'Villaba', 'Villaba', 0, '', 'N/A', '', 'Fatima', 'Villaba', 'Leyte', '019231723', 'Single', 'Filipino', '21', '2002-01-12', 'test', 'father', '', '', 'Villaba', '', 0, '2023-11-12 07:58:09'),
(20, '', 'Danica', '', 'Dalag', '', '', 'Villaba', 'Villaba', 0, '', 'N/A', '', 'Suba', 'Villaba', 'Leyte', '01923162316', 'Single', 'Filipino', '21', '2002-04-12', 'test', 'mother', '', '', 'Villaba', '', 0, '2023-11-12 07:58:09'),
(21, '', 'Jackie', '', 'Chan', '', '', 'Villaba', 'Villaba', 1, '', 'N/A', '', 'Ambot', 'Villaba', 'Leyte', '', 'Single', 'Filipino', '21', '2002-02-12', '', '', '', '', '', '', 0, '2023-11-12 07:58:09'),
(22, '20-1234-748', 'Borj', '', 'Omega', '', 'borj@gmail.com', 'Villaba', 'Villaba', 1, 'BSMT', 'III', 'B', 'Suba', 'Villaba', 'Leyte', '09123647112', 'Single', 'Filipino', '21', '2002-03-09', 'test', 'father', '091236213', '091246412', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(23, '20-9764-123', 'Megie', '', 'Patillas', '', 'megie@gmail.com', 'Villaba', 'Villaba', 0, 'BSHM', 'III', 'B', 'Suba', 'Villaba', 'leyte', '09123611', 'Single', 'Filipino', '21', '2002-03-12', 'test', 'mother', '09123123', '', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(24, '20-5674-197', 'Jelly', '', 'Omega', '', 'jelly@gmail.com', 'Villaba', 'Villaba', 0, 'BSHM', 'III', 'B', 'Suba', 'Villaba', 'Leyte', '091231731', 'Single', 'Filipino', '22', '2001-03-12', 'test', 'father', '09123131', '0193123213', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(25, '20-1234-123', 'Karen', '', 'Vibora', '', 'karen@gmail.com', 'Villaba', 'Villaba', 0, 'BSIT', 'IV', 'B', 'Suba', 'Villaba', 'Leyte', '09123123123', 'Single', 'Filipino', '21', '2002-03-12', 'test', 'father', '09123123', '0192313', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(26, '20-1231-123', 'Kyla', '', 'Potot', '', 'kyla@gmail.com', 'Villaba', 'Villaba', 0, 'BSIT', 'IV', 'B', 'Suba', 'Villaba', 'Leyte', '0192313', 'Single', 'Filipino', '22', '2001-03-12', 'test', 'father', '09123123', '09123123', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(27, '20-1234-123', 'Chan', '', 'German', '', 'chan@gmail.com', 'Villaba', 'Villaba', 1, 'BSMT', 'III', 'A', 'Balite', 'Villaba', 'Leyte', '091231231', 'Single', 'Filipino', '22', '2001-03-12', 'test', 'mother', '09123123', '09123132', 'Villaba', '', 1, '2023-11-12 07:58:09'),
(28, '', 'Devinn', '', 'Aninipot', '', '', 'Villaba', 'Villaba', 1, '', 'N/A', '', 'Suba', 'Villaba', 'Leyte', '', 'Single', 'Filipino', '16', '2007-03-12', 'test', 'father', '1231231', '312313', 'Villaba', '', 0, '2023-11-12 15:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = yes, 0 = no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `role`) VALUES
(6, 'christianytang', 'chanchan123', 'christian22@gmail.com', 1),
(28, 'staff', '123', 'staff@clinic.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dental`
--
ALTER TABLE `dental`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `medicalrecords`
--
ALTER TABLE `medicalrecords`
  ADD PRIMARY KEY (`mrid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `dental`
--
ALTER TABLE `dental`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `medicalrecords`
--
ALTER TABLE `medicalrecords`
  MODIFY `mrid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
