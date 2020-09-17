-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2020 at 10:31 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `updatedtime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `Email`, `Password`, `updatedtime`) VALUES
(1, 'anuradha1234@gmail.com', 'anu45', '2019-12-17 01:48:42.084691');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Message` varchar(400) NOT NULL,
  `updatedtime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Email`, `Message`, `updatedtime`) VALUES
(6, 'Anuradha', 'anuradha1234@gmail.com', 'Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .', '2019-12-10 06:47:37.257038'),
(7, 'Aman', 'aman123@gmail.com', 'Good morning have a nice day!', '2019-12-16 08:46:47.089133'),
(8, 'sachin', 'sk9876@gmail.com', 'hello !', '2019-12-16 08:47:24.138725'),
(9, 'shalu kesharwani', 'shalukesharwani9793@gmail.com', 'Hiiiii', '2019-12-16 08:47:41.424240'),
(10, 'vinita  kumari', 'vinita567@gmail.com', 'Good afternoon everyone and  have a nice day !!', '2019-12-16 08:48:36.333851'),
(11, 'vinita  kumari', 'vinita567@gmail.com', 'Good afternoon everyone and  have a nice day !!', '2019-12-16 08:48:36.371349');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `Job Title` varchar(40) NOT NULL,
  `Post` varchar(40) NOT NULL,
  `Technology` varchar(40) NOT NULL,
  `Location` varchar(80) NOT NULL,
  `Company` varchar(60) NOT NULL,
  `Salary` varchar(90) NOT NULL,
  `Address` varchar(160) NOT NULL,
  `updatedtime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `userid`, `Job Title`, `Post`, `Technology`, `Location`, `Company`, `Salary`, `Address`, `updatedtime`, `status`) VALUES
(3, 0, 'kjnbhgvcfxhm', 'Marketing Directer', 'Technology Management Consulting', 'Noida', 'HCL', '10,000 - 20,000', 'dsfghuhkujlnbvbncxdzesrery6uihkm, vbfgtyuhik', '2020-01-03 12:57:28.684144', 'Request'),
(7, 0, 'bhhnhnnnyd', 'Regigonal sales Manager', 'Technology Management Consulting', 'Lucknow', 'MNC', '15,000 - 20,000', 'ngrtkjgntkrgntkgng gjtngrg', '2019-12-17 01:44:18.447568', 'Aproved'),
(8, 0, 'bhhnhnnnyd', 'Web Developer / Designer', 'ASP.NET', 'Noida', 'MNC', '15,000 - 20,000', 'hjjvyhguj m hy bhhuijkm, nvyugiujk', '2019-12-12 06:19:03.108333', 'Request'),
(9, 0, 'knjkvghuih', 'Regigonal sales Manager', 'Company Name goes here', 'Noida', 'MNC', '15,000', 'hjjvyhguj m hy bhhuijkm, nvyugiujk', '2019-12-15 16:57:47.483932', 'Aproved'),
(10, 0, 'kjnbhgvcfxhm', 'Regigonal sales Manager', 'Technology Management Consulting', 'Delhi', 'HCL', '15,000 - 20,000', 'hjjvyhguj m hy bhhuijkm, nvyugiujk', '2020-01-03 13:02:52.562932', 'Request'),
(11, 0, 'knjkvghuih', 'Web Developer / Designer', 'PHP,Wordpress', 'Noida', 'kjhgffgj', '10,000-15,000', 'hjjvyhguj m hy bhhuijkm, nvyugiujk', '2019-12-17 01:21:00.837287', 'Request'),
(12, 0, 'knjkvghuih', 'Digital Marketing', 'ASP.NET', 'Pune', 'HCL', '15,000 - 20,000', 'dsfghuhkujlnbvbncxdzesrery6uihkm, vbfgtyuhik', '2019-12-26 15:55:04.867350', 'Request'),
(13, 0, 'Language Matters Recruitment Consultants', 'French speaking Client Executive', 'Technology Management Consulting', 'Noida', 'gfdfgfhvhkjlm,m ', '12,000-15,000', 'hjjvyhguj m hy bhhuijkm, nvyugiujk', '2020-01-03 13:18:58.884620', 'Pending'),
(14, 0, 'knjkvghuih', 'Web Developer / Designer', 'Technology Management Consulting', 'Delhi', 'kjhgffgj', '15,000 - 20,000', 'ngrtkjgntkrgntkgng gjtngrg', '2020-01-03 13:19:37.357785', 'Pending'),
(15, 0, 'bhhnhnnnyd', 'web developer', 'Php', 'Pune', 'HCL', '12,000', 'hjjvyhguj m hy bhhuijkm, nvyugiujk', '2020-01-03 13:20:01.139411', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `createdtime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `Name` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Contact No` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `About Us` varchar(300) NOT NULL,
  `Experience` varchar(400) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Post` varchar(100) NOT NULL,
  `Education` varchar(300) NOT NULL,
  `Current Job` varchar(60) NOT NULL,
  `File Upload` varchar(500) NOT NULL,
  `updatedtime` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `createdtime`, `Name`, `Email`, `Password`, `Contact No`, `Gender`, `About Us`, `Experience`, `Location`, `Post`, `Education`, `Current Job`, `File Upload`, `updatedtime`, `status`) VALUES
(13, '2019-12-15 16:43:16.356216', 'shalu kesharwani', 'shalukesharwani9793@gmail.com', 'shalu3456', '987654323', 'female', 'Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .Nam arcu mauris, tincidunt s', '6 months', 'Mumbai', 'Web Developer', '2008 - 2012 Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .Nam arcu mauris', '', 'a4.jpg', '2019-12-09 06:57:42.000000', 'Approved'),
(14, '2019-12-12 09:32:26.629626', 'sachin', 'sk9876@gmail.com', 'sk9876', '97867645445', 'male', 'Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .Nam arcu mauris.', '2 month', 'Mumbai', 'Application Developer', '  B Tech', '', 'a2.jpg', '2019-12-09 20:33:49.000000', 'Approved'),
(15, '2019-12-11 10:53:33.491335', 'Km vinita  ', 'vinita56790@gmail.com', 'vinita', '9336000032', 'female', 'Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .', '8 months', 'Delhi', 'Web Developer / UI Designer', '                           2008 - 2012 Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore ', '', 'a1.jpg', '2019-12-10 06:50:29.000000', 'Approved'),
(16, '2019-12-15 16:35:55.777806', 'Divya Kesharwani', 'divya1234@gmail.com', 'divya12', '9867346516', 'female', 'Cras sapien urna, malesuada ut varius consequat, hendrerit nisl. Aliquam vestibulum, odio non ullamcorper malesuada.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .Nam arcu mauris, tincidunt sed convallis non, egestas ut lacus. Cras ', '2 Year', 'Noida', 'UX / UI Designer at Company Name', '                  Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .', '', 'pragati.jpg', '2019-12-11 19:29:51.000000', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
