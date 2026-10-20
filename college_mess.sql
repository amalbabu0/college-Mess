-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 07:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(100) NOT NULL,
  `menu_id` int(100) NOT NULL,
  `b_qut` varchar(100) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `sum` varchar(100) NOT NULL,
  `p_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `menu_id`, `b_qut`, `cust_id`, `sum`, `p_status`) VALUES
(1, 1, '17', 2, '170', 'booked'),
(3, 3, '14', 2, '280', 'booked'),
(4, 1, '3', 2, '30', 'added to cart'),
(5, 4, '5', 7, '75', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(100) NOT NULL,
  `cust_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `cmt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `cust_id`, `book_id`, `rate`, `cmt`) VALUES
(2, 2, 1, '4 ****', 'bi'),
(3, 7, 5, '4 ****', 'fs'),
(4, 2, 3, '5 *****', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `login_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `user_type`, `login_status`) VALUES
(1, 'admin', 'admin', 'Admin', '1'),
(2, 'abhi', 'abhi', 'Student', 'approved'),
(3, 'air', 'air', 'tutor', 'approved'),
(4, 'bmw', 'bmw', 'tutor', 'approved'),
(5, 'ram', 'ram', 'Student', 'approved'),
(6, 'staff', 'staff', 'tutor', 'approved'),
(7, 'rahull', 'rahull', 'Student', 'approved'),
(8, 'star', 'star', 'tutor', 'cancel'),
(9, 'star1', 'star1', 'tutor', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(100) NOT NULL,
  `dish_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `menu_date` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `qut` varchar(100) NOT NULL,
  `m_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `dish_name`, `price`, `menu_date`, `details`, `img`, `qut`, `m_type`) VALUES
(3, 'dosa', '20', '2024-09-07', 'hu', 'about-thumb-03.jpg', '0', 'breakfast '),
(4, 'apple', '15', '2024-09-07', 'sdjkl;', 'about-thumb-03.jpg', '100', 'breakfast '),
(5, 'mango', '10', '', 'mango flavored', 'tab-item-05.png', '50', 'other'),
(6, 'mango', '10', '', 'ghjkl', 'about-thumb-02.jpg', '60', 'other'),
(7, 'mango', '10', '', 'jfyufffyyu', 'menu-item-05.jpg', '60', 'other'),
(8, 'apple', '12', '2024-09-07', 'ni', 'tab-item-02.png', '15', 'lunch '),
(9, 'mandhi', '200', '2024-09-07', 'nicefgdtyuyihfgffhhffuyueysdgjyufh', 'tab-item-01.png', '100', 'dinner');

-- --------------------------------------------------------

--
-- Table structure for table `pre_book`
--

CREATE TABLE `pre_book` (
  `book_id` int(100) NOT NULL,
  `dish_id` int(100) NOT NULL,
  `pr_date` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `login_id` int(100) NOT NULL,
  `book_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pre_book`
--

INSERT INTO `pre_book` (`book_id`, `dish_id`, `pr_date`, `details`, `p_type`, `quantity`, `login_id`, `book_status`) VALUES
(10, 3, '2024-09-08', '', 'breakfast ', '14', 3, 'add'),
(11, 3, '2024-09-09', '', 'breakfast ', '5', 4, 'add'),
(12, 4, '2024-09-10', '', 'lunch ', '5', 6, 'add');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `regid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `proof` varchar(250) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`regid`, `name`, `email`, `phone`, `department`, `post`, `proof`, `loginid`) VALUES
(1, 'air', 'air@gmail.com', '09876543211', 'bca', 'HOD', 'chefs-03.jpg', 3),
(2, 'bmw', 'bmw@gmail.com', '09876543211', 'bca', 'hod', 'chefs-02.jpg', 4),
(3, 'staff', 'staff@gmail.com', '9876543211', 'bca', 'tutor', 'chefs-03.jpg', 6),
(4, 'staff', 'staff@gmail.com', '9876543211', 'bca', 'tutor', 'gal_6.jpg', 8),
(5, 'staff', 'staff@gmail.com', '9876543211', 'bca', 'tutor', 'chefs-03.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year_of_join` int(50) NOT NULL,
  `admission_no` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regid`, `name`, `email`, `phone`, `department`, `year_of_join`, `admission_no`, `loginid`) VALUES
(1, 'abhi', 'abhi@gmail.com', '09876543211', 'bca', 2, '1234', 2),
(2, 'ram', 'ram@gmail.com', '09876543211', 'bca', 1, '1234', 5),
(3, 'abhi', 'abhi@gmail.com', '09876543211', 'bca', 1, '1234', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pre_book`
--
ALTER TABLE `pre_book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pre_book`
--
ALTER TABLE `pre_book`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `regid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `regid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `booking` (`book_id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `login` (`loginid`);

--
-- Constraints for table `pre_book`
--
ALTER TABLE `pre_book`
  ADD CONSTRAINT `pre_book_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
