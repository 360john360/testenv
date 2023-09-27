-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 11:31 AM
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
-- Database: `nursingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `nursing_recruitment`
--

CREATE TABLE `nursing_recruitment` (
  `id` int(11) NOT NULL,
  `cohort` varchar(255) DEFAULT NULL,
  `esr_number` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `address_3` varchar(255) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `attachments` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `nmc_pin` varchar(255) DEFAULT NULL,
  `date_nmc_pin_obtained` date DEFAULT NULL,
  `prn_number` varchar(255) DEFAULT NULL,
  `hospital` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `cost_centre` varchar(255) DEFAULT NULL,
  `band_4_position_number` varchar(255) DEFAULT NULL,
  `manager_name` varchar(255) DEFAULT NULL,
  `manager_esr_number` varchar(255) DEFAULT NULL,
  `manager_phone_number` varchar(20) DEFAULT NULL,
  `bank_building_society` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `bank_account_number` varchar(255) DEFAULT NULL,
  `sort_code` varchar(255) DEFAULT NULL,
  `ni_number` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `covid_risk_assessment_score` int(11) DEFAULT NULL,
  `occupational_health_clearance` date DEFAULT NULL,
  `tb_appointment` date DEFAULT NULL,
  `certificate_of_sponsorship_number` varchar(255) DEFAULT NULL,
  `brp_number` varchar(255) DEFAULT NULL,
  `brp_valid_from` date DEFAULT NULL,
  `brp_valid_to` date DEFAULT NULL,
  `rtw_sharecode_number` varchar(255) DEFAULT NULL,
  `rtw_expiry_date` date DEFAULT NULL,
  `dbs_number` varchar(255) DEFAULT NULL,
  `dbs_issue_date` date DEFAULT NULL,
  `dbs_acceptable` tinyint(1) DEFAULT NULL,
  `candidate_compliance_pack` varchar(255) DEFAULT NULL,
  `candidate_compliance_pack_complete` tinyint(1) DEFAULT NULL,
  `first_attempt_osce` date DEFAULT NULL,
  `second_attempt_osce` date DEFAULT NULL,
  `third_attempt_osce` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nursing_recruitment`
--

INSERT INTO `nursing_recruitment` (`id`, `cohort`, `esr_number`, `first_name`, `last_name`, `sex`, `date_of_birth`, `nationality`, `email`, `phone_number`, `address_1`, `address_2`, `address_3`, `postcode`, `attachments`, `notes`, `nmc_pin`, `date_nmc_pin_obtained`, `prn_number`, `hospital`, `ward`, `cost_centre`, `band_4_position_number`, `manager_name`, `manager_esr_number`, `manager_phone_number`, `bank_building_society`, `account_name`, `bank_account_number`, `sort_code`, `ni_number`, `start_date`, `covid_risk_assessment_score`, `occupational_health_clearance`, `tb_appointment`, `certificate_of_sponsorship_number`, `brp_number`, `brp_valid_from`, `brp_valid_to`, `rtw_sharecode_number`, `rtw_expiry_date`, `dbs_number`, `dbs_issue_date`, `dbs_acceptable`, `candidate_compliance_pack`, `candidate_compliance_pack_complete`, `first_attempt_osce`, `second_attempt_osce`, `third_attempt_osce`) VALUES
(1, '2021/01', '123456', 'John', 'Doe', 'M', '1985-05-01', 'British', 'johndoe@example.com', '1234567890', '123 Main St', 'Apt 4', 'London', 'SW1A 1AA', 'resume.pdf', 'Candidate has previous nursing experience', '123456', '2020-10-01', '789012', 'St. Mary\'s Hospital', 'Ward A', '12345', '1234', 'Jane Smith', '987654', '0987654321', 'HSBC', 'John Doe', '12345678', '11223344', 'AB123456C', '2021-01-01', 10, '2020-12-01', '2021-01-15', 'COS123456', 'BRP123456', '2021-01-01', '2024-01-01', 'SHARE123', '2023-01-01', 'DBS123456', '2021-02-01', 1, 'compliance.pdf', 1, '2024-02-02', '2024-03-23', '2023-04-18'),
(3, '2021/05', '567890', 'Oliver', 'Wong', 'M', '1993-01-20', 'Chinese', 'oliverwong@example.com', '5678901234', '123 Main St', '', 'Birmingham', 'B1 1AA', 'resume.pdf', '', '567890', '2021-04-30', '456789', 'Queen Elizabeth Hospital', 'Ward E', '56789', '8901', 'Thomas Brown', '345678', '7654321098', 'HSBC', 'Oliver Wong', '12345678', '11223344', 'GH567890H', '2021-05-01', 9, '2021-04-01', '2021-05-15', 'COS456789', 'BRP456789', '2021-05-01', '2024-05-01', 'SHARE567', '2023-05-01', 'DBS567890', '2021-06-01', 1, 'compliance.pdf', 1, '2023-08-30', '2023-09-16', '2023-06-13'),
(4, '2021/06', '678901', 'Isabella', 'Smith', 'F', '1994-07-10', 'American', 'isabellasmith@example.com', '6789012345', '789 Oak St', '', 'Manchester', 'M1 1AB', 'resume.pdf', '', '678901', '2021-05-31', '567890', 'Manchester Royal Infirmary', 'Ward F', '67890', '8901', 'John Lee', '456789', '6543210987', 'Barclays', 'Isabella Smith', '56789012', '22110033', 'KL678901J', '2021-06-01', 8, '2021-05-01', '2021-06-20', 'COS567890', 'BRP567890', '2021-06-01', '2024-06-01', 'SHARE678', '2023-06-01', 'DBS678901', '2021-07-01', 1, 'compliance.pdf', 0, '2023-10-09', '2023-08-05', '2024-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nursing_recruitment`
--
ALTER TABLE `nursing_recruitment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nursing_recruitment`
--
ALTER TABLE `nursing_recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
