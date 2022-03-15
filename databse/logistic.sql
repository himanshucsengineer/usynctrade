-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 02:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `houdinv_staff_management`
--

CREATE TABLE `houdinv_staff_management` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_contact_number` varchar(250) NOT NULL,
  `staff_department` varchar(250) NOT NULL,
  `staff_status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `staff_warehouse` int(11) NOT NULL,
  `staff_email` varchar(250) NOT NULL,
  `staff_password` varchar(250) DEFAULT NULL,
  `staff_password_salt` varchar(150) DEFAULT NULL,
  `staff_alternat_contact` varchar(250) DEFAULT NULL,
  `staff_address` longtext NOT NULL,
  `password_send` varchar(250) DEFAULT NULL,
  `houdinv_staff_auth_token` varchar(255) NOT NULL,
  `houdinv_staff_auth_url_token` varchar(255) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `update_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houdinv_staff_management`
--

INSERT INTO `houdinv_staff_management` (`staff_id`, `staff_name`, `staff_contact_number`, `staff_department`, `staff_status`, `image`, `staff_warehouse`, `staff_email`, `staff_password`, `staff_password_salt`, `staff_alternat_contact`, `staff_address`, `password_send`, `houdinv_staff_auth_token`, `houdinv_staff_auth_url_token`, `create_date`, `update_date`) VALUES
(2, 'Himanshu Goyal', '', 'Account', 1, 'http://localhost/badaengineering/upload/profilepic/image-1637860298.jpg', 4, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', '', '\\', 'email', '1PVx0v', '1PVx0v', '1532432610', '1637860304'),
(3, 'Himanshu Goyal', '', '', 1, 'http://localhost/badaengineering/upload/profilepic/image-1637860298.jpg', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1637860304'),
(10, 'Himanshu Goyal', '', 'Account', 1, 'http://localhost/badaengineering/upload/profilepic/image-1637860298.jpg', 1, 'himanshugoyal1011@gmail.com', '$2y$10$thV9bNXzhKb/ieJwfSX6I.mAOberDRBO0bB0ckoOnHi7n8yznnMNG', '$2y$10$thV9bNXzhKb/ieJwfSX6I.6O2PEutLuu9N2iEMCN3sdnJdQTaZvWG', NULL, '', NULL, '', '', '', '1637860304');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houdinv_staff_management`
--
ALTER TABLE `houdinv_staff_management`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
