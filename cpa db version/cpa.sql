-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 02:08 PM
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
-- Database: `cpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`, `time_stamp`) VALUES
(4, 'Ravikumar Ch', 'ravikumar1219@outlook.com', 'Information on Due Dates for 2022', 'I want the information regarding due dates of  individual taxes for the year 2022.\r\nThank you.', '2023-02-15 07:19:50'),
(8, 'kumar', 'ravikumarch8099@gmail.com', 'Request for Preparing Individual Taxes', 'Hi, I am Kumar, \r\ni want  to prepare indiviual taxes . let me know guidelines on preparation.\r\nThank you!', '2023-02-15 09:18:11'),
(9, 'Sarat Babu', 'swiss4747@gmail.com', 'Report Generation', 'I need a report taxiation reports for the year 2022', '2023-02-15 11:08:41'),
(10, 'Sai', 'tulasisolutions@outlook.com', 'request for preparing firm taxiation', 'need full details of taxiation for my firm.', '2023-02-15 11:10:53'),
(11, 'irfan', 'irfan@mail.com', 'information on individual taxes', 'let know the full details of indiviual taxes.', '2023-02-17 04:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `main_heading` varchar(200) NOT NULL,
  `main_paragraph` text NOT NULL,
  `main_button` varchar(160) NOT NULL,
  `company_email` varchar(200) NOT NULL,
  `company_phone` bigint(10) NOT NULL,
  `company_delivery_address` text NOT NULL,
  `company_state_zip` text NOT NULL,
  `company_country` text NOT NULL,
  `footer_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `company_name`, `main_heading`, `main_paragraph`, `main_button`, `company_email`, `company_phone`, `company_delivery_address`, `company_state_zip`, `company_country`, `footer_text`) VALUES
(1, 'Jeanine Hemingway CPA, PC', 'Focus On What Matters', 'Our firm works with clients including startups, mid-market and closely held companies, professional services firms, as well as individuals and families. If you are seeking solid tax, bookkeeping, or advisory services—or a blend of it all, Jeanine Hemingway CPA looks forward to earning your trust and making your life less taxing.', 'Get Started', 'info@jeaninecpa.com', 8099267670, '8700 Manchaca Rd. Suite #304', 'Austin, TX 78748-5374', 'United States', 'We respect your privacy 100%, so the information that you provide will remain strictly confidential. Nevertheless, a copy of your message might be stored in our records as a secure database entry for archival purposes.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
