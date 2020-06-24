-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 02:09 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

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
(1, 13, 'Rajshahi', 'nothing'),
(2, 12, 'Dhaka', ''),
(3, 14, 'Chittagong', ''),
(4, 15, 'Khulna', '');

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
(10, 'eve-teasing', ''),
(11, 'cyber crime', ''),
(12, 'kidnapping', ''),
(13, 'robbery', ''),
(14, 'Cheating', ''),
(15, 'Theft', ''),
(16, 'Fraud', ''),
(17, 'Hate Crime', ''),
(18, 'Rape or Sexual Assault', ''),
(19, 'Pornography', ''),
(20, 'Terrorism', ''),
(21, 'Violent Crime', '');

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
(3, 15, 4, 'If a person steals, then he will be punished with imprisonment for a term of three years, or in a penalty, or both, for a period of three years.'),
(4, 15, 5, 'Punishment on Cheating: If a person is cheating, then he shall be punished with imprisonment for a term of one term for one year, or for imprisonment for a year or for a fine, or both');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2550) NOT NULL,
  `court_id` int(11) NOT NULL,
  `crime_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id`, `title`, `description`, `court_id`, `crime_id`, `user_id`) VALUES
(7, 'A person stole my mobile', 'A  person named Tomal stole my mobile last week evening. Tomal is my neighbor. I sued the case and filed a case against him. I need a good and experienced lawyer.', 1, 15, 2),
(11, 'On Cheating with me', 'Last year, A friennd named Aslam borrowed 2 lakh taka from me. he said, he would refund the money. but even after one year, he didn\'t return the money. I filed a case against him. I need legal help.', 2, 14, 2),
(14, 'test', 'Testing job post', 2, 10, 9);

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

-- --------------------------------------------------------

--
-- Table structure for table `job_post_response`
--

CREATE TABLE `job_post_response` (
  `id` int(255) NOT NULL,
  `job_id` int(255) NOT NULL,
  `lawyer_id` int(255) NOT NULL,
  `fees_amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post_response`
--

INSERT INTO `job_post_response` (`id`, `job_id`, `lawyer_id`, `fees_amount`, `status`, `remarks`) VALUES
(13, 7, 3, 3500, 'ALLOTTED', 'I read this post carefully. I have 5 year experience. 100% chance to win this case if I will handle it.'),
(16, 14, 4, 2999, 'ALLOTTED', 'test'),
(19, 7, 4, 10000, '', 'I can do it'),
(20, 11, 4, 12000, '', 'nothing'),
(21, 7, 10, 1500, '', 'I want');

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
(1, 'Penal Code', 2019, 511);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `court_id` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `court_id`, `address`, `contact`, `email`, `user_id`) VALUES
(3, 'Eakub Mollah', 1, 'Pabna', '98565', 'mollah@gmail.com', 3),
(4, 'Tushar', 4, 'dhaka', '015214805134', 'nayeem@gmail.com', 4),
(10, 'Rakib', 2, 'Dhaka', '01358392332', 'rakib@gmail.com', 10);

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
(1, 3, 1, 5);

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
(4, 1, 417, 'Punishment on Cheating: If a person is cheating, then he shall be punished with imprisonment for a term of one term for one year, or for imprisonment for a year or for a fine, or both'),
(5, 1, 379, 'Punishment of theft');

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
(12, 'Dhaka', ''),
(13, 'Rajshahi', '');

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
(1, 'billah', '123456', 'billah', 'billah@gmail.com', '2147483648', 'admin', '', ''),
(2, 'mahbub', '123456', '', '', '015214805134', 'user', '', ''),
(3, 'mollah', '123456', '', '', '015214805134', 'lawyer', '', ''),
(4, 'tushar', '123456', 'Tushar', 'mohsin.bd008@gmail.com', '0152149833', 'lawyer', '', '123'),
(9, 'Selim', '123456', 'Selim Mia', 'selim@gmail.com', '01343456543', 'user', '', 'Dept. of CSE, Jagannath University'),
(10, 'Rakib', '123456', 'Rakib', 'rakib@gmail.com', '01321332134', 'lawyer', '', 'Arambag');

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
-- Indexes for table `law_lawyer`
--
ALTER TABLE `law_lawyer`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `crime_section`
--
ALTER TABLE `crime_section`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_post_details`
--
ALTER TABLE `job_post_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_post_response`
--
ALTER TABLE `job_post_response`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `law`
--
ALTER TABLE `law`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `law_lawyer`
--
ALTER TABLE `law_lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `law_section`
--
ALTER TABLE `law_section`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
