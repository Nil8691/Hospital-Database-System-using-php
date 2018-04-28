-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 11:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_detail`
--

CREATE TABLE `billing_detail` (
  `bill_number` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_charge` int(11) DEFAULT '200',
  `medical_charge` int(11) DEFAULT '0',
  `room_charge` int(11) DEFAULT '0',
  `operation_charge` int(11) DEFAULT '0',
  `patient_type` varchar(20) DEFAULT 'outpatient'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_detail`
--

INSERT INTO `billing_detail` (`bill_number`, `patient_id`, `doctor_charge`, `medical_charge`, `room_charge`, `operation_charge`, `patient_type`) VALUES
(1, 1, 200, 104, 5000, 300, 'outpatient'),
(2, 4, 200, 2000, 300, 200, 'Inpatient'),
(3, 2, 300, 4000, 20, 20, 'Outpatient'),
(5, 5, 300, 20, 20, 20, 'Outpatient'),
(6, 6, 500, 300, 50000, 4000, 'Inpatient'),
(7, 7, 500, 3000, 10, 40000, 'Inpatient'),
(7, 7, 200, 300, 400, 300, 'Inpatient');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Orthopedic'),
(2, 'Cardiology'),
(3, 'Dentistry'),
(4, 'Neurology'),
(5, 'Neurosurgery'),
(6, 'Radiology'),
(7, 'Oncology'),
(8, 'Chaplaincy'),
(9, 'Audiology'),
(10, 'Orthopaedics'),
(11, 'Otolaryngology');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `department_id`, `gender`) VALUES
(1, 'Suraj Tiwari', 3, 'Male'),
(2, 'Bhumit Raj', 8, 'Male'),
(3, 'Pratik Vishawakarma', 5, 'Male'),
(4, 'Abhishek Kumar', 4, 'Male'),
(5, 'Vishal Singh', 10, 'Male'),
(6, 'Gaurav Vishwakarma', 7, 'Male'),
(7, 'Nilesh Yadav', 5, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `inpatient_detail`
--

CREATE TABLE `inpatient_detail` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_gender` varchar(20) DEFAULT NULL,
  `patient_phone` bigint(11) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `date_of_adm` datetime DEFAULT NULL,
  `date_of_dis` datetime DEFAULT '9999-12-31 00:00:00',
  `advance_payment` int(11) DEFAULT '0',
  `bednumber` int(11) DEFAULT NULL,
  `patient_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inpatient_detail`
--

INSERT INTO `inpatient_detail` (`patient_id`, `patient_name`, `patient_age`, `patient_gender`, `patient_phone`, `disease`, `doctor_id`, `date_of_adm`, `date_of_dis`, `advance_payment`, `bednumber`, `patient_type`) VALUES
(1, 'Rakesh Yadav', 20, 'Male', 1876453290, 'Anaplasmosis', 3, '2018-04-16 10:39:00', '2018-04-26 14:00:00', 200, 3900, 'Inpatient'),
(2, 'Rahul Panday', 20, 'Male', 2147483647, 'Laveria', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 5000, '208'),
(3, 'Roshani Khan', 23, 'Female', 9820127638, 'Aortic Aneurysm', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 3000, '309'),
(4, 'Ravi Teja', 49, 'Male', 9820187625, 'Anisakiasis ', 2, '2018-04-26 08:30:00', '2018-04-26 11:00:00', 200, 309, 'Inpatient'),
(5, 'Aryan Goud', 9, 'male', 9820127638, 'Acinetobacter Infect', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3000, 309, 'Inpatient'),
(6, 'Arjun Aryan', 30, 'Male', 9876871234, 'Adult Vaccinations', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3000, 301, 'Inpatient');

-- --------------------------------------------------------

--
-- Table structure for table `outpatient_detail`
--

CREATE TABLE `outpatient_detail` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_phone` int(11) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `appointment_time` datetime DEFAULT NULL,
  `patient_opd` int(11) DEFAULT '20',
  `patient_gender` varchar(20) DEFAULT NULL,
  `patient_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpatient_detail`
--

INSERT INTO `outpatient_detail` (`patient_id`, `patient_name`, `patient_age`, `patient_phone`, `disease`, `doctor_id`, `appointment_time`, `patient_opd`, `patient_gender`, `patient_type`) VALUES
(1, 'Ratnesh Dubay', 20, 2147483647, 'Bone Fracture', 5, '0000-00-00 00:00:00', 90, 'Male', 'Outpatient'),
(2, 'RAhul Raj', 21, 2147483647, 'Adenovirus Infection', 5, '0000-00-00 00:00:00', 205, 'Male', 'Outpatient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `inpatient_detail`
--
ALTER TABLE `inpatient_detail`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `outpatient_detail`
--
ALTER TABLE `outpatient_detail`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `inpatient_detail`
--
ALTER TABLE `inpatient_detail`
  ADD CONSTRAINT `inpatient_detail_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `outpatient_detail`
--
ALTER TABLE `outpatient_detail`
  ADD CONSTRAINT `outpatient_detail_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
