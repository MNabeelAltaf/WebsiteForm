-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 04:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lead_prosper_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `Id` int(100) NOT NULL,
  `lp_campaign_id` int(250) NOT NULL,
  `lp_supplier_id` int(250) NOT NULL,
  `lp_key` varchar(150) NOT NULL,
  `lp_action` varchar(150) DEFAULT NULL,
  `lp_subid1` varchar(100) DEFAULT NULL,
  `lp_subid2` varchar(100) DEFAULT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `zip_code` int(100) NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `user_agent` varchar(250) NOT NULL,
  `landing_page_url` varchar(250) NOT NULL,
  `jornaya_leadid` varchar(100) NOT NULL,
  `Type_Of_Legal_Problem` varchar(50) NOT NULL,
  `Incident_Date` varchar(150) NOT NULL,
  `Doctor_Treatment` varchar(150) NOT NULL,
  `Were_You_At_Fault` varchar(150) NOT NULL,
  `Have_Insurance` varchar(150) DEFAULT NULL,
  `trusted_form_url` varchar(250) NOT NULL,
  `tcpa_text` varchar(250) NOT NULL,
  `have_attorney` varchar(150) NOT NULL,
  `comments` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`Id`, `lp_campaign_id`, `lp_supplier_id`, `lp_key`, `lp_action`, `lp_subid1`, `lp_subid2`, `first_name`, `last_name`, `email`, `phone`, `zip_code`, `ip_address`, `user_agent`, `landing_page_url`, `jornaya_leadid`, `Type_Of_Legal_Problem`, `Incident_Date`, `Doctor_Treatment`, `Were_You_At_Fault`, `Have_Insurance`, `trusted_form_url`, `tcpa_text`, `have_attorney`, `comments`) VALUES
(1, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Evan', 'June', 'mikeyjones210@gmail.com', 6937495021, 90018, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 5 Years', 'Yes', 'Yes, but it was the result of a tree, animal, or other act of nature', 'Yes', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"'),
(2, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Muhammad Altaf', 'Nabeel', 'elarson@example.org', 7716424546, 54241, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 4 Years', 'Yes', 'No', 'No', 'https://cert.trustedform.com/3308837a148db1111403e41cf', 'Island', 'Yes', 'Port\"---\", testing 123'),
(3, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Evan', 'June', 'elarson@example.org', 5462256425, 64267, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 2 Years', 'No', 'Yes, I was cited or caused the accident', 'No', 'https://cert.trustedform.com/33088371cf', 'Island', 'Yes', 'Port\"---\"'),
(4, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Nils', 'June', 'nabeelaltaf@outlook.com', 6426636875, 64437, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Personal Injury', 'Less than 2 Years', 'No', 'Yes, but it was the result of a tree, animal, or other act of nature', 'Yes', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"'),
(5, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Nils', 'June', 'elarson@example.org', 8643467642, 64326, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 1 Year', 'No', 'Yes, but it was the result of a tree, animal, or other act of nature', 'No', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"testing 321'),
(6, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Evan', 'Nabeel', 'elarson@example.org', 5387643254, 76532, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 1 Year', 'No', 'Yes, but it was the result of a tree, animal, or other act of nature', 'No', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"'),
(7, 16510, 34763, '1ez2ag1wls5m1r', '1', '1', '1', 'Evan', 'Nabeel', 'hudson.luther@example.com', 8868567584, 68686, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 1 Year', 'No', 'Yes, I was cited or caused the accident', 'No', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"'),
(8, 16510, 34763, '1ez2ag1wls5m1r', '1', '1', '1', 'Evan', 'Nabeel', 'hudson.luther@example.com', 3343315686, 79875, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Personal Injury', 'Less than 2 Years', 'Yes', 'Yes, I was cited or caused the accident', 'Yes', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"'),
(9, 16510, 34763, '1ez2ag1wls5m1r', 'Send test for testing', 'any text1', 'any text2', 'Evan', 'June', 'nabeelaltaf@outlook.com', 5734674326, 57634, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 4 Years', 'Yes', 'Yes, but it was the result of a tree, animal, or other act of nature', 'Yes', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'No', '321123'),
(10, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Muhammad Altaf', 'Vern', 'nabeelaltaf@outlook.com', 6534727763, 56347, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'https://example.com/veniam', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 3 Years', 'No', 'Yes, I was cited or caused the accident', 'No', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'No', 'Port\"---\"'),
(11, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Evan', 'June', 'elarson@example.org', 5446775246, 65432, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'http://localhost/WebForm/api_request_data.php', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 4 Years', 'No', 'Yes, I was cited or caused the accident', 'No', 'https://cert.trustedform.com/33088371cf', 'Island', 'Yes', 'testing !'),
(12, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Evan', 'June', 'hudson.luther@example.com', 6433776353, 65342, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'http://localhost/WebForm/api_request_data.php', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 4 Years', 'No', 'Yes, but it was the result of a tree, animal, or other act of nature', 'No', 'https://cert.trustedform.com/33088371cf', 'Island', 'Yes', 'any text'),
(13, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Muhammad Altaf', 'Nabeel', 'nabeelaltaf@outlook.com', 5434542376, 66425, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'http://localhost/WebForm/api_request_data.php', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 3 Years', 'No', 'Yes, I was cited or caused the accident', 'No', 'https://cert.trustedform.com/3308837a148db1111403e41cf', 'Island', 'No', 'Port\"---\"'),
(14, 16510, 34763, '1ez2ag1wls5m1r', 'Send test for testing', '', '', 'Muhammad Altaf', 'Vern', 'nabeelaltaf@outlook.com', 8465927421, 43251, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'http://localhost/WebForm/api_request_data.php', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 5 Years', 'Yes', 'Yes, I was cited or caused the accident', 'No', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"'),
(15, 16510, 34763, '1ez2ag1wls5m1r', '', '', '', 'Muhammad Altaf', 'Nabeel', 'nabeelaltaf@outlook.com', 6533565424, 65325, '::1', 'Mozilla/5.0 (compatible; MSIE 5.0; Windows NT 6.0; Trident/3.1)', 'http://localhost/WebForm/api_request_data.php', 'B330E9E4-64E9-417E-955B-8C06832311E3', 'Auto Accident Injury', 'Less than 1 Year', 'No', 'Yes, I was cited or caused the accident', 'No', 'https://cert.trustedform.com/3308837a148db112cf6a0e83e03a11403e41cf', 'Island', 'Yes', 'Port\"---\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
