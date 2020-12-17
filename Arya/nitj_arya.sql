-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 04:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nitj_arya`
--

-- --------------------------------------------------------

--
-- Table structure for table `heighlights`
--

CREATE TABLE `heighlights` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heighlights`
--

INSERT INTO `heighlights` (`id`, `datetime`, `title`, `category`, `file`) VALUES
(1, '2020-12-16 16:59:06', 'National Conference on \"Sustainable Research in Energy and Environment\" (SREE-2021) (January 15 - 16, 2021)', 'Heighlights', '5_2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `img_gallery`
--

CREATE TABLE `img_gallery` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_gallery`
--

INSERT INTO `img_gallery` (`id`, `datetime`, `category`, `image`, `text`) VALUES
(1, '2020-12-17 08:59:13', 'Gallery', 'poster IT3.png', 'Online Self-Financed Short Term Course on \"Research Trends in Communication and Signal Processing\" (December 21 - 25, 2020) ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `title` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `datetime`, `title`, `category`, `file`) VALUES
(1, '2020-12-16 17:13:39', 'Online Self-Financed Short Term Course on \"Research Trends in Communication and Signal Processing\" (December 21 - 25, 2020) ', 'News', 'Instructions_to_Students_27858.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `post_cat`
--

CREATE TABLE `post_cat` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_cat`
--

INSERT INTO `post_cat` (`id`, `datetime`, `title`, `author`) VALUES
(1, '2020-12-16 15:03:39', 'Slider Images', 'Govind'),
(2, '2020-12-16 15:04:42', 'Upcoming events', 'Govind'),
(3, '2020-12-16 15:04:55', 'Student corner', 'Govind'),
(4, '2020-12-16 15:05:16', 'News', 'Govind'),
(5, '2020-12-16 15:05:27', 'Recent Project', 'Govind'),
(6, '2020-12-16 15:05:56', 'Heighlights', 'Govind'),
(7, '2020-12-16 15:06:46', 'Gallery', 'Govind'),
(8, '2020-12-16 17:38:45', 'Video Gallery', 'Govind');

-- --------------------------------------------------------

--
-- Table structure for table `slide_img`
--

CREATE TABLE `slide_img` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide_img`
--

INSERT INTO `slide_img` (`id`, `datetime`, `author`, `image`, `text`) VALUES
(6, '2020-12-17 09:10:09', 'Slider Images', 'DSC_7302_1_4351.jpg', 'This is testing'),
(7, '2020-12-17 09:10:32', 'Slider Images', 'fit_india_movement1_33827.jpg', 'This is testing'),
(8, '2020-12-17 09:10:45', 'Slider Images', 'Photo_44451.jpeg', 'This is testing');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` text NOT NULL,
  `course` varchar(50) NOT NULL,
  `yearr` text NOT NULL,
  `yearg` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ON'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `datetime`, `name`, `email`, `num`, `course`, `yearr`, `yearg`, `position`, `address`, `status`) VALUES
(1, '2020-12-15 15:47:49', 'Govind Suman', 'govinddj.cm.18@nitj.ac.in', '9983904397', 'B.Tech', '2018', '2022', 'Student', 'Jaipur Rajasthan', 'ON'),
(2, '2020-12-15 16:08:53', 'Govind', 'govindsuman118@gmail.com', '9983904397', 'PhD', '2018', '2023', 'Student', 'MBH F-Block\r\nRoom No.  121', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `student_corner`
--

CREATE TABLE `student_corner` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_corner`
--

INSERT INTO `student_corner` (`id`, `datetime`, `title`, `category`, `file`) VALUES
(1, '2020-12-16 16:21:27', 'Date Sheet for End Semester Examination, M.Tech / M.Sc. / MBA (1st Semester), January 2021 ', 'Student corner', 'Chapter5_prob01.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `upcomming_events`
--

CREATE TABLE `upcomming_events` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcomming_events`
--

INSERT INTO `upcomming_events` (`id`, `datetime`, `title`, `category`, `file`) VALUES
(1, '2020-12-16 16:11:44', 'Online Self-Financed Short Term Course on \"Research Trends in Communication and Signal Processing\" (December 21 - 25, 2020) ', 'Upcoming events', 'ce6302-mos-civil-iiist-au-unit-iii.pdf'),
(2, '2020-12-16 16:14:53', 'National Conference on \"Sustainable Research in Energy and Environment\" (SREE-2021) (January 15 - 16, 2021) ', 'Upcoming events', 'aaaaaa.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `url` text NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `datetime`, `url`, `category`) VALUES
(2, '2020-12-16 17:46:26', 'https://www.youtube.com/embed/CevxZvSJLk8', 'Video Gallery'),
(3, '2020-12-16 17:50:09', 'https://www.youtube.com/embed/e-ORhEE9VVg', 'Video Gallery'),
(4, '2020-12-16 17:51:14', 'https://www.youtube.com/embed/6eW99oNNRvI', 'Video Gallery'),
(5, '2020-12-16 17:52:11', 'https://www.youtube.com/embed/i_yLpCLMaKk', 'Video Gallery'),
(6, '2020-12-16 17:56:01', 'https://www.youtube.com/embed/RQaVzbxZqXY', 'Video Gallery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heighlights`
--
ALTER TABLE `heighlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_gallery`
--
ALTER TABLE `img_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_cat`
--
ALTER TABLE `post_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_img`
--
ALTER TABLE `slide_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_corner`
--
ALTER TABLE `student_corner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomming_events`
--
ALTER TABLE `upcomming_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `heighlights`
--
ALTER TABLE `heighlights`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img_gallery`
--
ALTER TABLE `img_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_cat`
--
ALTER TABLE `post_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slide_img`
--
ALTER TABLE `slide_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_corner`
--
ALTER TABLE `student_corner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upcomming_events`
--
ALTER TABLE `upcomming_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
