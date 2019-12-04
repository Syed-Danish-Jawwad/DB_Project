-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 05:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `student_id` int(4) NOT NULL,
  `date` date NOT NULL,
  `attended` varchar(10) NOT NULL,
  `count_attend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`student_id`, `date`, `attended`, `count_attend`) VALUES
(8, '2019-12-04', 'attended', 1),
(9, '2019-12-04', 'absent', 0),
(10, '2019-12-04', 'attended', 1),
(11, '2019-12-04', 'attended', 1),
(12, '2019-12-04', 'attended', 1),
(13, '2019-12-04', 'absent', 0),
(8, '2019-12-04', 'attended', 1),
(8, '2019-12-04', 'attended', 1),
(8, '2019-12-04', 'absent', 0),
(8, '2019-12-04', 'absent', 0),
(8, '2019-12-04', 'attended', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CSEC` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CID`, `CNAME`, `CSEC`) VALUES
(5, 'V', 'A'),
(6, 'III', 'B'),
(7, 'V', 'E'),
(8, 'X', 'A'),
(9, 'IX', 'F'),
(12, 'I', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'Physics'),
(2, 'Chemistry'),
(3, 'Maths'),
(4, 'urdu'),
(5, 'islamiat'),
(6, 'addmaths'),
(7, 'sociology'),
(8, 'computer'),
(9, 'biology'),
(10, 'database'),
(11, 'algorithms'),
(12, 'object oriented anal'),
(14, 'computer architectur');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `EID` int(11) NOT NULL,
  `ENAME` varchar(150) NOT NULL,
  `ETYPE` varchar(150) NOT NULL,
  `EDATE` varchar(150) NOT NULL,
  `SESSION` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`EID`, `ENAME`, `ETYPE`, `EDATE`, `SESSION`, `CLASS`, `SUB`) VALUES
(4, 'Term Exam', 'II-Term', '18-09-2018', 'AN', 'V', 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `hclass`
--

CREATE TABLE `hclass` (
  `HID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `CLA` varchar(150) NOT NULL,
  `SEC` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hclass`
--

INSERT INTO `hclass` (`HID`, `TID`, `CLA`, `SEC`, `SUB`) VALUES
(1, 1, 'VIII', 'A', 'English'),
(4, 4, 'III', 'B', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `MID` int(11) NOT NULL,
  `REGNO` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  `MARK` varchar(150) NOT NULL,
  `TERM` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`MID`, `REGNO`, `SUB`, `MARK`, `TERM`, `CLASS`) VALUES
(3, 's101', 'English', '35', 'I-Term', 'V');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `TID` int(11) NOT NULL,
  `TNAME` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `QUAL` varchar(150) NOT NULL,
  `SAL` varchar(150) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`TID`, `TNAME`, `TPASS`, `QUAL`, `SAL`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(6, 'ABDUL RAHMAN', '1234', 'Diploma in Teaching Skills,  Diploma in Project Management, M.S(Computer Engineering), B.S(Computer Engineering),  Certifications in VC++, ASP, & VB.', '350000', '090078601', 'ar_mahmood@milleschl.edu.pk', 'Model Colony(75100), Karachi, Pakistan', 'staff/ooad_sir.jpg'),
(8, 'Ammara Yaseen', '1234', 'B.E(CIS), NED UNIVERSITY OF ENGINEERING & TECHNOLOGY, Pakistan (2016)', '200000', '090078602', 'ammara.yaseen@milleschl.edu.pk', 'Somewhere in Karachi, Pakistan', 'staff/Ammara-150x150.jpg'),
(9, 'Anam Qureshi', '1234', 'Ph.D(Computer Science), The Queens University of Belfast, United Kingdom (2006)   M.S(Computer Engineering), King Fahad University, Saudi Arabia (2001', '325000', '090078603', 'anam.qureshi@milleschl.edu.pk', 'Somewhere in Karachi, Pakistan', 'staff/female-150x150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  `RNO` varchar(150) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FNAME` varchar(150) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `GEN` varchar(150) NOT NULL,
  `PHO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `ADDR` text NOT NULL,
  `SCLASS` varchar(150) NOT NULL,
  `SSEC` varchar(150) NOT NULL,
  `SIMG` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `password`, `RNO`, `NAME`, `FNAME`, `DOB`, `GEN`, `PHO`, `MAIL`, `ADDR`, `SCLASS`, `SSEC`, `SIMG`) VALUES
(8, 'saad1234', '', 'saad', 'saleem', '1998-02-08', '', '03353285643', 'saadsaleem3330@gmail.com', 'r130, rado tower ,block 12', 'III', 'C', ''),
(9, 'danish1234', '', 'SYED DANISH JAWWAD', 'jawwad', '2000-12-06', '', '03002856375', 'danishjawwad12@gmail.com', 'B-218, Block 13, Gulberg, Federal B Area', 'IX', 'F', 'student/male.png'),
(10, 'zeeshan123', '', 'zeeshan', 'khan', '1998-12-07', '', '', 'zeeshankhan123@gmail.com', 'r130, rado tower ,block 12', '', '', ''),
(11, 'hammad123', '', 'hammad', 'alam', '1998-03-09', '', '03457652198', 'mhammadAlam@gmail.com', 'baradari,block 2,sector 9', 'V', 'E', ''),
(12, 'danial123', '', 'danial', 'ahmed', '2000-03-12', '', '', 'danialahmed@gmail.com', 'north nazimabad', '', '', ''),
(13, 'aliahmed@g', '', 'ali', 'ahmed', '1990-02-12', '', '', 'aliahmed@gmail.com', 'baradari,block 2,sector 9', '', '', ''),
(14, 'abt1122', '', 'abt', 'abbt', '1990-01-12', '', '', 'abt12@gmail.com', 'abt@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_challan`
--

CREATE TABLE `student_challan` (
  `student_id` int(4) NOT NULL,
  `Fees` int(100) NOT NULL,
  `Due_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_challan`
--

INSERT INTO `student_challan` (`student_id`, `Fees`, `Due_date`) VALUES
(8, 115000, '2019-12-31'),
(9, 20000, '2020-01-08'),
(10, 20000, '2019-12-19'),
(11, 10000, '2019-01-12'),
(12, 45000, '2019-12-06'),
(13, 25000, '2019-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `student_id` int(4) NOT NULL,
  `course_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`student_id`, `course_id`) VALUES
(8, 1),
(8, 2),
(8, 3),
(8, 5),
(8, 4),
(11, 3),
(11, 4),
(8, 1),
(8, 7),
(8, 9),
(8, 8),
(8, 4),
(8, 1),
(10, 4),
(10, 5),
(10, 9),
(10, 4),
(9, 4),
(9, 3),
(9, 3),
(9, 7),
(12, 1),
(12, 2),
(12, 3),
(12, 6),
(12, 7),
(12, 11),
(12, 12),
(12, 14),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(12, 8),
(12, 4),
(8, 1),
(8, 2),
(8, 3),
(8, 5),
(8, 4),
(11, 3),
(11, 4),
(8, 1),
(8, 7),
(8, 9),
(8, 8),
(8, 4),
(8, 1),
(10, 4),
(10, 5),
(10, 9),
(10, 4),
(9, 4),
(9, 3),
(9, 3),
(9, 7),
(12, 1),
(12, 2),
(12, 3),
(12, 6),
(12, 7),
(12, 11),
(12, 12),
(12, 14),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(12, 8),
(12, 4),
(8, 14),
(10, 8),
(14, 8),
(9, 3),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SID`, `SNAME`) VALUES
(3, 'Maths'),
(7, 'Physics'),
(8, 'History'),
(9, 'Geography'),
(10, 'Chemistry'),
(12, 'Islamiat'),
(13, 'Pakistan Studies'),
(14, 'Science'),
(15, 'Social Studies');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course`
--

CREATE TABLE `teacher_course` (
  `tid` int(4) NOT NULL,
  `course_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_course`
--

INSERT INTO `teacher_course` (`tid`, `course_id`) VALUES
(6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `hclass`
--
ALTER TABLE `hclass`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_challan`
--
ALTER TABLE `student_challan`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `teacher_course`
--
ALTER TABLE `teacher_course`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hclass`
--
ALTER TABLE `hclass`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_challan`
--
ALTER TABLE `student_challan`
  ADD CONSTRAINT `student_challan_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`ID`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`ID`),
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `teacher_course`
--
ALTER TABLE `teacher_course`
  ADD CONSTRAINT `teacher_course_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `staff` (`TID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
