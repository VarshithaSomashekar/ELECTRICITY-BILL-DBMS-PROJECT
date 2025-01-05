-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 06:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newebill`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_id` int(3) NOT NULL,
  `cust_id` int(3) NOT NULL,
  `account_no` int(225) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `cust_id`, `account_no`, `name`) VALUES
(111, 401, 12341, 'Abhay'),
(112, 402, 12342, 'Vishnu'),
(113, 403, 12343, 'Anant'),
(114, 404, 12344, 'Deekshith'),
(115, 405, 12345, 'Farhaan'),
(116, 406, 12346, 'Tushara'),
(117, 407, 12347, ' Priya'),
(118, 408, 12348, 'Preethi'),
(119, 409, 12349, 'Ajay'),
(120, 410, 12350, 'Rithika');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `a_email_id` varchar(20) NOT NULL,
  `e_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `a_email_id`, `e_password`) VALUES
(154, 'Sunetha S L', 'sunetha@gmail.com', '1234'),
(170, 'Varshitha S', 'varshitha@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `meter_number` int(3) NOT NULL,
  `acc_id` int(3) NOT NULL,
  `cust_id` int(3) NOT NULL,
  `monthly_units` int(3) NOT NULL,
  `amount_per_unit` int(2) NOT NULL,
  `total_amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`meter_number`, `acc_id`, `cust_id`, `monthly_units`, `amount_per_unit`, `total_amount`) VALUES
(101, 111, 401, 500, 10, 5000),
(102, 112, 402, 390, 10, 3900),
(103, 113, 403, 208, 10, 2080),
(104, 114, 404, 800, 10, 8000),
(105, 115, 405, 200, 10, 2000),
(106, 106, 406, 600, 10, 6000),
(107, 117, 407, 500, 10, 5000),
(108, 118, 408, 770, 10, 7700),
(109, 119, 409, 560, 10, 5600),
(110, 120, 410, 320, 10, 3200);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(3) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `city`, `state`, `pincode`, `phone_no`, `sex`, `email_id`, `password`, `admin_id`) VALUES
(401, 'Abhay', 'M G Road', 'Mysore', 'Karnataka', 570008, '7455678902', 'M', 'abhay@gmail.com', 'qwerty', 154),
(402, 'Vishnu', 'Basaveswaranagar', 'Bengaluru', 'Karnataka', 570054, '98765 4321', 'M', 'vishnu@gmail.com', 'qwerty', 170),
(403, 'Anant', 'H D Kote Road', 'Mysore', 'Karnataka', 570009, '78965 4321', 'M', 'anant@gmail.com', 'qwerty', 154),
(404, 'Deekshith', 'R K Block', 'Tumkur', 'Karnataka', 570054, '98654 3210', 'M', 'deekshith@gmail.com', 'qwerty', 170),
(405, 'Farhaan', 'Gokul', 'Hubli', 'Karnataka', 580009, '87654 3210', 'F', 'farhaan@gmail.com', 'qwerty', 170),
(406, 'Tushara', 'C J Colony', 'Gulbarga', 'Karnataka', 585101, '96548 7321', 'F', 'tushara@gmail.com', 'qwerty', 154),
(407, 'Priya', 'Mukli', 'Mangalore', 'Karnataka', 0, ' 78564 123', 'F', 'priya@gmail.com', 'qwerty', 154),
(408, 'Preethi', 'Sultanpur', 'Gulbarga', 'Karnataka', 585102, '87654 3210', 'F', 'preethi@gmail.com', 'qwerty', 170),
(409, 'Ajay', 'Agadi', 'Hubli', 'Karnataka', 580020, '91234 5678', 'M', 'ajay@gmail.com', 'qwerty', 154),
(410, 'Ritika', 'Kateel', 'Mangalore', 'Karnataka', 574173, '90345 6789', 'F', 'rithika@gmail.com', 'qwerty', 170),
(415, 'Anmol', 'batwadi', 'Bengaluru', 'Karnataka', 560072, '7022255703', 'M', 'anmol@gmail.com', 'qwerty', 0),
(417, 'sunetha', 'nagarbhavi', 'Bengaluru', 'Karnataka', 560072, '7022255702', 'F', 'abc', 'qwert', 0);

-- --------------------------------------------------------

--
-- Table structure for table `elec_board`
--

CREATE TABLE `elec_board` (
  `eboard_id` int(5) NOT NULL,
  `board_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elec_board`
--

INSERT INTO `elec_board` (`eboard_id`, `board_name`) VALUES
(1111, 'Bangalore Electricity Supply Company (BESCOM)'),
(2222, 'Hubli Electricity Supply Company (HESCOM)'),
(3333, 'Gulbarga Electricity Supply Company (GESCOM)'),
(4444, 'Chamundeshwari Electricity Supply Company (CESC)'),
(5555, 'Mangalore Electricity Supply Company Limited(MESCOM)');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(4) NOT NULL,
  `eboard_id` int(4) NOT NULL,
  `account_no` int(5) NOT NULL,
  `tariff_id` int(2) NOT NULL,
  `reading_date` date NOT NULL,
  `meter_number` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `eboard_id`, `account_no`, `tariff_id`, `reading_date`, `meter_number`) VALUES
(1201, 4444, 12341, 13, '2022-12-24', 101),
(1202, 1111, 12342, 12, '2022-12-21', 102),
(1203, 4444, 12343, 12, '2022-12-19', 103),
(1204, 1111, 12344, 14, '2022-12-28', 104),
(1205, 2222, 12345, 15, '2022-12-18', 105),
(1206, 3333, 12346, 13, '2022-12-25', 106),
(1207, 5555, 12347, 13, '2022-12-15', 107),
(1208, 3333, 12348, 12, '2023-12-10', 108),
(1209, 2222, 12349, 14, '2022-12-30', 109),
(1210, 5555, 12350, 15, '2022-12-27', 110);

-- --------------------------------------------------------

--
-- Table structure for table `tariff`
--

CREATE TABLE `tariff` (
  `tariff_id` int(12) NOT NULL,
  `tariff_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tariff`
--

INSERT INTO `tariff` (`tariff_id`, `tariff_type`) VALUES
(12, 'Power factor tariff'),
(13, 'peak Load tariff'),
(14, 'Two part tariff'),
(15, 'Three part tariff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_id`),
  ADD KEY `account_ibfk_1` (`cust_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`meter_number`),
  ADD KEY `acc_id` (`acc_id`),
  ADD KEY `billing_ibfk_1` (`cust_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `elec_board`
--
ALTER TABLE `elec_board`
  ADD PRIMARY KEY (`eboard_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `eboard_id` (`eboard_id`),
  ADD KEY `invoice_ibfk_1` (`tariff_id`),
  ADD KEY `meter_number` (`meter_number`);

--
-- Indexes for table `tariff`
--
ALTER TABLE `tariff`
  ADD PRIMARY KEY (`tariff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `meter_number` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=418;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6670;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
