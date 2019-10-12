-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 04:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_comment`
--

CREATE TABLE `event_comment` (
  `comment` varchar(2500) DEFAULT NULL,
  `comment_datetime` datetime NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_comment`
--

INSERT INTO `event_comment` (`comment`, `comment_datetime`, `event_id`, `user_id`) VALUES
('Hello Guys, \r\nAfter One year CSE fest is going to be held in khulna University.\r\n', '0000-00-00 00:00:00', 18, 4),
('Hello guys', '2018-04-15 11:16:26', 18, 4),
('Hello guys', '2018-04-15 03:19:38', 18, 4),
('Hello', '2018-04-15 03:19:42', 18, 4),
('Hello Guys..', '2018-04-15 16:36:56', 19, 4),
('Hello Guys', '2018-04-15 16:37:39', 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `event_creation`
--

CREATE TABLE `event_creation` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `start_registration_date` date DEFAULT NULL,
  `end_registration_date` date DEFAULT NULL,
  `event_start_date` datetime DEFAULT NULL,
  `organized_by` varchar(45) DEFAULT NULL,
  `venue` varchar(45) DEFAULT NULL,
  `event_length` int(45) DEFAULT NULL,
  `about` varchar(5000) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_creation`
--

INSERT INTO `event_creation` (`event_id`, `event_title`, `start_registration_date`, `end_registration_date`, `event_start_date`, `organized_by`, `venue`, `event_length`, `about`, `user_id`) VALUES
(18, 'CSE FEST 2018', '2018-03-01', '2018-03-07', '2018-03-10 10:00:00', 'Cluster', 'KU 1st Academic', 3, 'Play FIFA & NFS!  Another blockbuster event of CSE fest is Gaming contest. This is undoubtedly the biggest platform for game lovers. More than 400 contestants participate in this program.how your programming skill!  The largest programming contest of Chittagong Division where more than 40 teams participate from almost 20 universities.Play FIFA & NFS!  Another blockbuster event of CSE fest is Gaming contest. This is undoubtedly the biggest platform for game lovers. More than 400 contestants participate in this program.how your programming skill!  The largest programming contest of Chittagong Division where more than 40 teams participate from almost 20 universitiesPlay FIFA & NFS!  Another blockbuster event of CSE fest is Gaming contest. This is undoubtedly the biggest platform for game lovers. More than 400 contestants participate in this program.how your programming skill!  The largest programming contest of Chittagong Division where more than 40 teams participate from almost 20 universities', 4),
(19, 'SWEKUAA Jublee', '2018-04-06', '2018-04-13', '2018-04-19 09:00:00', 'KUSWE', 'KU academic Building 2', 2, 'CSE Fest 2017 Year-round CSE fest is here again. CSE fest is an annual event organized by CLUSTER and CSE Discipline, Khulna University. It is indented to develop students\' skill and creative capabili | Find upcoming events in Bangladesh related to concerts, conferences, exhibitions fair, festivals and ...CSE Fest 2017 Year-round CSE fest is here again. CSE fest is an annual event organized by CLUSTER and CSE Discipline, Khulna University. It is indented to develop students\' skill and creative capabili | Find upcoming events in Bangladesh related to concerts, conferences, exhibitions fair, festivals and ...CSE Fest 2017 Year-round CSE fest is here again. CSE fest is an annual event organized by CLUSTER and CSE Discipline, Khulna University. It is indented to develop students\' skill and creative capabili | Find upcoming events in Bangladesh related to concerts, conferences, exhibitions fair, festivals and ...CSE Fest 2017 Year-round CSE fest is here again. CSE fest is an annual event organized by CLUSTER and CSE Discipline, Khulna University. It is indented to develop students\' skill and creative capabili | Find upcoming events in Bangladesh related to concerts, conferences, exhibitions fair, festivals and ...', 4),
(22, 'SUST CSE FEST 2018', '2018-05-18', '2018-05-25', '2018-06-01 00:00:00', 'SUST CSE', 'SUST', 3, 'Waiting is over...the countdown has started...\r\nLike the recent years, CSE Society of Shahjalal University of Science and Technology is going to organize \'SUST 6th CSE Carnival 2017 Sponsored by IPVision\', a carnival related to information and communication technology. This event will be held on 4th and 5th August 2017 at Shahjalal University of Science and Technology in Sylhet. This year, there\'ll be several events -\r\n\r\n1. Inter University Programming Contest.\r\n2. Inter University Software Contest.\r\n3. Robotics Competition.\r\n4. Gaming Competition\r\n\r\nWe are cordially inviting everyone to come and participate in this carnival to make it a grand success.\r\nRegistration for Inter University Programming Contest has been started and registration for other events will be started very soon.\r\n\r\n\r\nFor more detailed information :\r\nwww.csecarnival.com', 2),
(23, 'BGEKUAA', '2018-05-10', '2018-06-10', '2018-09-11 10:10:00', 'KU BGE', 'KU', 2, 'Biotechnology is a series of enabling technologies which uses biological processes, organisms, or systems to produce/manufacture goods, products and services intended to improve the quality of life. The interdisciplinary nature of this branch of science encompasses a wide range of disciplines towards the study of animals ...', 7);

-- --------------------------------------------------------

--
-- Table structure for table `event_option`
--

CREATE TABLE `event_option` (
  `option_id` int(11) NOT NULL,
  `option_title` varchar(50) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `building` varchar(45) DEFAULT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_option`
--

INSERT INTO `event_option` (`option_id`, `option_title`, `fee`, `time`, `building`, `event_id`) VALUES
(20, 'Gamming', 300, '02:29:00', '1235', 19),
(21, 'Contest', 500, '15:48:00', '1234', 19),
(22, 'Quiz', 100, '10:00:00', '1204', 19),
(23, 'Hackathon', 1200, '17:36:00', '1201', 19),
(24, 'Programming', 300, '09:40:00', '1235', 18),
(25, 'Hackathon', 500, '10:40:00', '1201', 18),
(26, 'Suduku', 100, '13:40:00', '1234', 18),
(27, 'Gamming', 300, '10:05:05', '1234', 23);

-- --------------------------------------------------------

--
-- Table structure for table `event_user_add`
--

CREATE TABLE `event_user_add` (
  `organization` varchar(45) DEFAULT NULL,
  `transaction` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `even_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `event_option_id` int(11) NOT NULL,
  `position` varchar(45) DEFAULT NULL,
  `resultid` int(11) NOT NULL,
  `user_info_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `u_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`u_id`, `username`, `email`, `phone`, `password`, `city`) VALUES
(1, 'Foysal Islam', 'foysal1627@gmail.com', '01717059192', '160227', 'Khulna'),
(2, 'Lotif1612', 'lotif1612@gmail.com', '01717059192', '160212', 'Sirajganj'),
(3, 'Fahim Rahman', 'fahim1615@gmail.com', '05555555', '160215', 'Nilphamari'),
(4, 'Manna', 'manna1604@gmail.com', '0175558866555', '160204', 'Dhaka'),
(5, 'Atikur Rahman Sabuj', 'atik000@gmail.com', '017176666666', '1111', 'Khulna'),
(6, 'Avijit', 'avijit1412@gmail.com', '015558559', '140212', 'Dhaka'),
(7, 'lotif160212', 'lotif12@gmail.com', '+8801717059192', '160212', 'Khulna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_comment`
--
ALTER TABLE `event_comment`
  ADD KEY `fk_event_comment_event_creation2_idx` (`event_id`),
  ADD KEY `fk_event_comment_user_information2_idx` (`user_id`);

--
-- Indexes for table `event_creation`
--
ALTER TABLE `event_creation`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_event_creation_user_information_idx` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event_option`
--
ALTER TABLE `event_option`
  ADD PRIMARY KEY (`option_id`),
  ADD KEY `fk_event_option_event_creation1_idx` (`event_id`);

--
-- Indexes for table `event_user_add`
--
ALTER TABLE `event_user_add`
  ADD KEY `fk_event_comment_user_information1_idx` (`user_id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `even_id` (`even_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`resultid`),
  ADD KEY `fk_result_event_option1_idx` (`event_option_id`),
  ADD KEY `user_info_id` (`user_info_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_creation`
--
ALTER TABLE `event_creation`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `event_option`
--
ALTER TABLE `event_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `resultid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_comment`
--
ALTER TABLE `event_comment`
  ADD CONSTRAINT `event_comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`u_id`),
  ADD CONSTRAINT `event_comment_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event_creation` (`event_id`);

--
-- Constraints for table `event_creation`
--
ALTER TABLE `event_creation`
  ADD CONSTRAINT `event_creation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`u_id`);

--
-- Constraints for table `event_option`
--
ALTER TABLE `event_option`
  ADD CONSTRAINT `event_option_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event_creation` (`event_id`);

--
-- Constraints for table `event_user_add`
--
ALTER TABLE `event_user_add`
  ADD CONSTRAINT `event_user_add_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`u_id`),
  ADD CONSTRAINT `event_user_add_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `event_option` (`option_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`u_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`even_id`) REFERENCES `event_creation` (`event_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `fk_result_event_option1` FOREIGN KEY (`event_option_id`) REFERENCES `event_option` (`option_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`user_info_id`) REFERENCES `user_information` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
