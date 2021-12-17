-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2021 at 11:50 PM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shlimonc_motochini`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(50) NOT NULL,
  `about_title` varchar(999) NOT NULL,
  `about_title_text` varchar(999) NOT NULL,
  `img_title` varchar(999) NOT NULL,
  `img_title_text` varchar(999) NOT NULL,
  `crew_title` varchar(999) NOT NULL,
  `crew_text` varchar(999) NOT NULL,
  `portfolio_title` varchar(999) NOT NULL,
  `portfolio_sub_title` varchar(999) NOT NULL,
  `portfolio_text` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_title`, `about_title_text`, `img_title`, `img_title_text`, `crew_title`, `crew_text`, `portfolio_title`, `portfolio_sub_title`, `portfolio_text`) VALUES
(1, 'About Motochini ApS', 'Our success relies on the commitment and capability of our people. Happily, we attract and retain the best in the business', 'Elly Nkya founded Motochini ApS in March 2016 after noticing a growing sense of frustration by consultants and developers because of the increased complexity of the Microsoft Dynamic NAV product, particularly with inexperienced professionals.  The company vision is to become a leader in delivering tools to developers and consultants in the Microsoft Dynamic NAV ecosystem that help them manage the complexity of their work. Anoft Dynamics consultants and developers with tools that help them become more effective at delivering well-designed solutions to their customers in a timely and cost-effective manner.  Motochini alreadd its mission is to empower Microsy has 500+ signed-up customers. After giving it to people for free for 5+ years Motochini wants to change its business model to pay', '', '', 'CEO and FOUNDER of MOTOCHINI ApS', 'Elly Nkya is the CEO and founder of Motochini ApS. He has a combined 21 years of software development experience, pmizing Navision in Trimarily in ERP software development. He has been working as an ERP consultant for 5 years, installing, training, and custoanzania, Uganda, and Zambia. He then joined Navisanish Reion Software a/s in Denmark as a software engineer which was acquired by Microsoft in 2001. Elly has two patent awards (1 pending) and a Microsoft Dgional Engineering Excellence Award. ', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
