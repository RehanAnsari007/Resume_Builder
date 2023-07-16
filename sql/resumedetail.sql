-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 01:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resumebuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `resumedetail`
--

CREATE TABLE `resumedetail` (
  `ID` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(20) NOT NULL,
  `about` varchar(500) NOT NULL,
  `githublink` varchar(50) NOT NULL,
  `instalink` varchar(50) NOT NULL,
  `linkedinlink` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `studies` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `position` varchar(500) NOT NULL,
  `workdate` varchar(50) NOT NULL,
  `workabout` varchar(500) NOT NULL,
  `education` varchar(500) NOT NULL,
  `university` varchar(500) NOT NULL,
  `cgpa` double NOT NULL,
  `edudate` varchar(50) NOT NULL,
  `eduabout` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `objectives` varchar(500) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `achivements` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumedetail`
--

INSERT INTO `resumedetail` (`ID`, `name`, `contact`, `address`, `email`, `about`, `githublink`, `instalink`, `linkedinlink`, `city`, `studies`, `occupation`, `position`, `workdate`, `workabout`, `education`, `university`, `cgpa`, `edudate`, `eduabout`, `skills`, `objectives`, `profilepic`, `achivements`) VALUES
(151, 'Rehan Ansari', 2147483647, 'Lady Ratan Complex 12/A Building Roomno. 506 Gandhi Nagar Worli', 'ra9000786@gmail.com', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.', 'https://www.instagram.com/thatwickedboy/', 'https://www.instagram.com/thatwickedboy/', 'https://www.instagram.com/thatwickedboy/', 'Adilabad', 'Computer Engineering', 'android application developer', 'amazon,project manager,internship at kohinoor technalogies,B', ',2022-03-07,2022-03-11,', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in P', 'HSC,ssc,', 'saboo,maharashtra collage of science,', 5.2, '2022-03-02,2022-03-04,', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.', 'assets/profile/do not enter (2).png', 'rimage.jpg'),
(152, 'Zahid Ansari', 2147483647, 'Lady Ratan Complex 12/A Building Roomno. 506 Gandhi Nagar Worli', 'ra9000786@gmail.com', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.', 'https://www.instagram.com/thatwickedboy/', 'https://www.instagram.com/thatwickedboy/', 'https://www.instagram.com/thatwickedboy/', 'Delhi', 'civil Engineering', 'android application developer', 'amazon,project manager,internship at kohinoor technalogies,B', ',2022-03-07,2022-03-11,', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in P', 'HSC,ssc,', 'saboo,maharashtra collage of science,', 5.2, '2022-03-02,2022-03-04,', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.,', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.', 'Once the form of multiple text fields group is submitted to the server-side script (submit.php), use the $_POST method to retrieved value from the input fields in PHP.', 'assets/profile/do not enter (2).png', 'rimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resumedetail`
--
ALTER TABLE `resumedetail`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resumedetail`
--
ALTER TABLE `resumedetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
