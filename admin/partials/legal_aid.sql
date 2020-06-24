-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 12:50 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legal_aid`
--

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `id` int(11) NOT NULL,
  `region_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`id`, `region_id`, `name`, `description`) VALUES
(1, 1, 'Rajshahi', ''),
(2, 2, 'Dhaka', ''),
(3, 3, 'Chittagong', '');

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`id`, `title`, `description`) VALUES
(1, 'eve teasing', '\r\n'),
(2, 'Robbery', 'the action of taking property unlawfully from a person or place by force or threat of force.\r\n'),
(5, 'Test', '43'),
(6, 'mollah', 'fd');

-- --------------------------------------------------------

--
-- Table structure for table `crime_section`
--

CREATE TABLE `crime_section` (
  `id` int(255) NOT NULL,
  `crime_id` int(255) NOT NULL,
  `law_section_id` int(255) NOT NULL,
  `punishment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_section`
--

INSERT INTO `crime_section` (`id`, `crime_id`, `law_section_id`, `punishment`) VALUES
(1, 1, 2, '10 years jails'),
(2, 2, 3, '6');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `court_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `title`, `description`, `court_name`, `user_name`) VALUES
(1, 'new job', 'sdfgv', '2', '2'),
(2, '', '', '0', '0'),
(3, 'Education', 'Regular', '0', '0'),
(4, 'Education', 'Regular', 'Rajshahi', 'mahbub'),
(5, 'Education', 'Regular', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_post_details`
--

CREATE TABLE `job_post_details` (
  `id` int(255) NOT NULL,
  `job_post_id` int(255) NOT NULL,
  `crime_id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post_details`
--

INSERT INTO `job_post_details` (`id`, `job_post_id`, `crime_id`, `description`) VALUES
(1, 3, 2, 'im nobody');

-- --------------------------------------------------------

--
-- Table structure for table `job_post_response`
--

CREATE TABLE `job_post_response` (
  `id` int(255) NOT NULL,
  `job_id` int(255) NOT NULL,
  `lawyer_id` int(255) NOT NULL,
  `fees_amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post_response`
--

INSERT INTO `job_post_response` (`id`, `job_id`, `lawyer_id`, `fees_amount`, `status`) VALUES
(1, 3, 2, 3000, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `law`
--

CREATE TABLE `law` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `number_of_section` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `law`
--

INSERT INTO `law` (`id`, `title`, `year`, `number_of_section`) VALUES
(1, 'Education', 2018, 5),
(2, 'Public Administration', 2003, 32);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `court_id` int(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `court_id`, `contact`, `email`, `username`, `password`) VALUES
(1, 'Billah', 1, '01521480513', 'smustakim007@gmail.com', 'billah007', '123456'),
(2, 'mustakim', 2, '4636243632', 'rfsdghyde@gmail.com', 'tyew5', '134454'),
(3, 'hafiz', 3, '98565', 'hafiz.softrithmit@gmail.com', 'admin@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `law_lawyer`
--

CREATE TABLE `law_lawyer` (
  `id` int(255) NOT NULL,
  `lawyer_id` int(255) NOT NULL,
  `law_id` int(255) NOT NULL,
  `year_of_experience` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `law_lawyer`
--

INSERT INTO `law_lawyer` (`id`, `lawyer_id`, `law_id`, `year_of_experience`) VALUES
(0, 2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `law_section`
--

CREATE TABLE `law_section` (
  `id` int(255) NOT NULL,
  `law_id` int(255) NOT NULL,
  `section_id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `law_section`
--

INSERT INTO `law_section` (`id`, `law_id`, `section_id`, `description`) VALUES
(1, 3, 6, 'hrs'),
(2, 3, 4, 'ed');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `name`, `description`) VALUES
(11, 'Mufachir Hossain', 'sfdgsdfgsdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `image_path` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `contact`, `user_type`, `image_path`, `address`) VALUES
(1, 'billah', '123456', 'billah', 'billah@gmail.com', '2147483647', 'admin', '', ''),
(2, 'mahbub', '123456', '', '', '015214805134', 'user', '', ''),
(3, 'mollah', '123456', '', '', '015214805134', 'lawyer', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crime_section`
--
ALTER TABLE `crime_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post_details`
--
ALTER TABLE `job_post_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_post_response`
--
ALTER TABLE `job_post_response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `law`
--
ALTER TABLE `law`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `law_section`
--
ALTER TABLE `law_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crime_section`
--
ALTER TABLE `crime_section`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_post_details`
--
ALTER TABLE `job_post_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_post_response`
--
ALTER TABLE `job_post_response`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `law`
--
ALTER TABLE `law`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `law_section`
--
ALTER TABLE `law_section`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
