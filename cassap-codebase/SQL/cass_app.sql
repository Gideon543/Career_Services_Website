-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 12:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cass_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('silas.sangmin@ashesi.edu.gh', '123456@good');

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` text DEFAULT NULL,
  `class` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `booking_link` varchar(200) DEFAULT NULL,
  `img_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`id`, `name`, `bio`, `class`, `email`, `tel`, `booking_link`, `img_link`) VALUES
(13, 'Selasi Nukpe', 'I have a unique set of skills and experience spanning across Project Management, International Trade and Development, Sales, and Marketing.\r\n     ', '2023', 'snupke@ashesi.edu.gh', '+233', 'https://google.com', 'https://res.cloudinary.com/dg6egbqfn/image/upload/v1637839054/samples/people/1516523851514_tnhjxc.jpg'),
(14, 'Najeeb Mohammed Ibrahim', 'A culturally sensitive and highly adaptable Senior Program Manager and interculturalist with 12+ years of progressive program experience. I am passionate about experiential learning and global empower ', '2022', 'nibrahim@ashesi.edu.gh', '+233542893998', 'https://google.com', 'https://media.istockphoto.com/photos/african-mature-man-with-spectacles-picture-id1152603187?b=1&k=20&m=1152603187&s=170667a&w=0&h=bfbJLM57Uylu_hdUeUL8RoF5pTsQPJ9igBiz8iIs6fk='),
(15, 'Silas Sangmin', 'A enjoy singing but my voice is not the best ', '2024', 'sangminsilas@gmail.com', '+233542893998', 'https://google.com', 'https://media.istockphoto.com/photos/headshot-portrait-of-smiling-biracial-man-posing-picture-id1292475584?b=1&k=20&m=1292475584&s=170667a&w=0&h=jZ6etD3dfOV_NIgwR9hIQ5B9TBC5kpYxShIsaqjWbzc='),
(16, 'Silas Sangmin 23454', 'This is my Bio ', '2023', 'sangminsilas@gmail.com', '+233542893998', 'https://google.com', 'https://res.cloudinary.com/dg6egbqfn/image/upload/v1626706884/samples/people/smiling-man.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cpas`
--

CREATE TABLE `cpas` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` text DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `class` tinytext NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `booking_link` varchar(200) DEFAULT NULL,
  `img_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpas`
--

INSERT INTO `cpas` (`id`, `name`, `bio`, `course`, `class`, `email`, `tel`, `booking_link`, `img_link`) VALUES
(1, 'Gideon Bonsu ', 'I live for the opportunities in life, always searching for new opportunities that will push me out of my comfort zone and make me the best version of myself.  ', '2023', 'CS', 'gideonbonsu543@gmail.com', '0550145602', 'https://docs.google.com/document', 'https://res.cloudinary.com/dg6egbqfn/image/upload/v1626706886/samples/people/boy-snow-hoodie.jpg'),
(3, 'Benedicta Bannerman', 'I live for the opportunities in life, always searching for new opportunities that will push me out of my comfort zone and make me the best version of myself. ', '2023', 'CS', 'banner@gmail.com', '0550145602', 'https://docs.google.com/document', 'https://res.cloudinary.com/dg6egbqfn/image/upload/v1626706886/samples/people/boy-snow-hoodie.jpg'),
(4, 'Joshua Owusu', 'I live for the opportunities in life, always searching for new opportunities that will push me out of my comfort zone and make me the best version of myself.  ', '2023', 'CS', 'joshua.ansah@ashesi.edu.gh', '+233542893998', 'https://google.com', 'https://res.cloudinary.com/dg6egbqfn/image/upload/v1626706886/samples/people/boy-snow-hoodie.jpg'),
(5, 'Betsy Naa Malm Again 2', 'I live for the opportunities in life, always searching for new opportunities that will push me out of my comfort zone and make me the best version of myself.  ', '2023', 'BA', 'bmal@ashesi.edu.gh', '+233542893998', 'https://google.com', 'https://res.cloudinary.com/dg6egbqfn/image/upload/v1626706886/samples/people/boy-snow-hoodie.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` text NOT NULL,
  `event_descipt` text NOT NULL,
  `event_venue` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `event_class` enum('2022','2023','2024','2025') NOT NULL DEFAULT '2023',
  `event_type` enum('General','CS','MIS','ENG','BA') NOT NULL DEFAULT 'General',
  `event_posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `img_link` varchar(200) NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_descipt`, `event_venue`, `event_date`, `event_class`, `event_type`, `event_posted`, `img_link`, `event_time`) VALUES
(19, 'How To Write A Compeling CV', 'whayt is the name of the ', 'Zoom ', '2021-11-24', '2023', 'General', '2021-11-24 21:28:38', 'https://www.universnewsroom.com/wp-content/uploads/2020/02/ashesi-uni.jpg', '21:31:00'),
(20, 'A Day In The Life of A Software Engineer ', 'Have you been wondering how software engineers live their life? This session will feature Joshua Owusu Ansah a software engineer at Microsoft and alumina of Ashesi University.  Come ready with all your question for Joshua ', 'Zoom ', '2021-11-24', '2023', 'General', '2021-11-24 21:40:50', 'https://media.wired.com/photos/5dd3081844aad10009406a30/1:1/w_2400,c_limit/Biz-Sundar-h_20.93146994.jpg', '17:00:00'),
(21, 'Personal Branding', 'This session is to help you know how you can better represent yourself on social media. ', 'Zoom ', '2021-11-08', '2023', 'General', '2021-11-24 21:44:08', 'https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F660449096%2FBuild-Your-Personal-Brand%2F960x0.jpg%3Ffit%3Dscale', '14:30:00'),
(22, 'A Day In The Life of An Investment Banker', 'Interested in the investment banking industry? This session is for you. ', 'The Hive', '2021-12-01', '2023', 'BA', '2021-11-24 21:47:08', 'https://cdn.corporatefinanceinstitute.com/assets/IBD-investment-banking-division.jpg', '17:30:00'),
(23, 'A Day In The Life of An Engineer ', 'Are you an engineering student wanting to know how it feels like to work in companies such as Tesla, Toyota, etc? If that is the case then this session. ', 'Zoom ', '2021-12-08', '2023', 'ENG', '2021-11-24 21:52:54', 'https://www.austintec.com/wp-content/uploads/2019/04/types-of-engineers.jpg', '07:30:00'),
(25, 'How To Write A Compeling ', 'whayt is the name of the ', 'Zoom', '2021-11-24', '2023', 'General', '2021-11-25 03:43:40', 'How', '21:31:00'),
(26, 'A Day In The Life of An E', 'Are you an engineering student wanting to know how it feels like to work in companies such as Tesla, Toyota, etc? If that is the case then this session. ', 'Zoom', '2021-12-08', '2023', 'ENG', '2021-11-25 03:43:54', 'A', '07:30:00'),
(27, 'How To Write A Compeling ', 'whayt is the name of the ', 'Zoom', '2021-11-24', '2023', 'General', '2021-11-25 03:44:47', 'How', '21:31:00'),
(30, 'A Day In The Life of An ', 'Are you an engineering student wanting to know how it feels like to work in companies such as Tesla, Toyota, etc? If that is the case then this session. ', 'Zoom', '2021-12-08', '2023', 'ENG', '2021-11-25 03:48:08', 'A', '07:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpas`
--
ALTER TABLE `cpas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisors`
--
ALTER TABLE `advisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cpas`
--
ALTER TABLE `cpas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
