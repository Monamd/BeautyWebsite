-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 06:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_records`
--

CREATE TABLE `booking_records` (
  `booking_id` int(10) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `FullName` varchar(25) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `quantity` int(2) NOT NULL,
  `total_price` double(10,2) NOT NULL,
  `city` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `booking_date` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `fees` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_records`
--

INSERT INTO `booking_records` (`booking_id`, `item_id`, `FullName`, `phone`, `quantity`, `total_price`, `city`, `district`, `booking_date`, `status`, `fees`) VALUES
(110, 'IT001', 'besh', '(333)333-3333', 2, 50.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 06:40:00', 'ACTIVE', 6),
(111, 'IT003', 'Mona', '(222)222-2222', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 06:59:00', 'CANCEL', 6),
(112, 'IT003', 'Sara', '(222)666-7777', 9, 180.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 07:04:00', 'CANCEL', 6),
(113, 'IT005', 'Razan', '(333)333-3333', 1, 18.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 07:21:00', 'CANCEL', 6),
(114, 'IT005', 'Razan', '(333)333-3333', 1, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 07:21:00', 'CANCEL', 6),
(115, 'IT015', 'soso', '(333)333-3333', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 07:50:00', 'ACTIVE', 6),
(117, 'IT007', 'soso', '(323)323-3333', 1, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 13:10:00', 'CANCEL', 6),
(118, 'IT003', 'besho', '(323)555-5555', 6, 126.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 14:00:00', 'CANCEL', 6),
(119, 'IT003', 'besho', '(444)444-4444', 6, 126.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 14:03:00', 'CANCEL', 6),
(120, 'IT003', 'zozo', '(435)555-5555', 6, 126.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 14:59:00', 'CANCEL', 6),
(121, 'IT003', 'samaher', '(657)777-6543', 6, 126.00, 'jeddah', 'AS Sahafah ', '2020-04-09 15:01:00', 'CANCEL', 6),
(122, 'IT003', 'hajar', '(765)777-5434', 6, 126.00, 'Madinah', 'AS Sahafah ', '2020-04-09 15:03:00', 'CANCEL', 6),
(126, 'IT003', 'fooz', '(333)333-3333', 2, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 17:51:00', 'CANCEL', 0),
(123, 'IT003', 'rana', '(654)765-6543', 6, 126.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 15:05:00', 'CANCEL', 0),
(124, 'IT003', 'monaya', '(654)876-8999', 6, 126.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 15:18:00', 'CANCEL', 6),
(125, 'IT003', 'bshbsh', '(234)333-3333', 6, 126.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 15:54:00', 'CANCEL', 6),
(127, 'IT003', 'bobo', '(777)888-7777', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'ACTIVE', 0),
(128, 'IT003', 'bobo', '(777)888-7777', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'ACTIVE', 0),
(129, 'IT003', 'yoyo', '(765)888-4444', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:32:00', 'ACTIVE', 0),
(130, 'IT003', 'toto', '(666)888-5555', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'ACTIVE', 0),
(131, 'IT003', 'toto', '(222)777-9888', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:32:00', 'ACTIVE', 0),
(132, 'IT003', 'nono', '(777)888-5555', 1, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'CANCEL', 0),
(133, 'IT003', 'zizi', '(777)888-5555', 1, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'CANCEL', 0),
(134, 'IT003', 'jojo', '(222)333-3333', 1, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'CANCEL', 0),
(135, 'IT003', 'koko', '(333)333-2222', 1, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'CANCEL', 0),
(136, 'IT003', 'lolo', '(333)333-9999', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-09 18:30:00', 'ACTIVE', 0),
(137, 'IT003', 'toto', '966536580112', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-10 00:23:00', 'ACTIVE', 0),
(138, 'IT003', 'toto', '967536580112', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-10 00:24:00', 'ACTIVE', 0),
(139, 'IT003', 'besh', '966765432123', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-10 00:26:00', 'ACTIVE', 0),
(140, 'IT003', 'besh', '0096653658011', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-10 11:26:00', 'ACTIVE', 0),
(141, 'IT003', 'Sara AlRashed', '966536580112', 1, 0.00, 'Riyadh', 'AS Sahafah ', '2020-04-10 01:31:00', 'CANCEL', 0),
(145, 'IT003', 'haifa', '966536752634', 1, 20.00, 'Riyadh', 'AS Sahafah ', '2020-04-10 01:38:00', 'ACTIVE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `FullName` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `comments` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`FullName`, `email`, `comments`) VALUES
('Bshayer Ateq AlGarni', 'BshayerAlGarni@gmail.com', 'Thank you for your services'),
('haifa', 'balgarnii@hotmail.com', 'When does the salon open?');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `booking_price` double(5,2) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `quantity` int(2) NOT NULL,
  `picture` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `booking_price`, `category_name`, `quantity`, `picture`, `status`) VALUES
('IT001', 'nail polish art', 25.00, 'Nails', 0, 'nail1.jpg', 'BOOKED'),
('IT003', 'rose mask ', 20.00, 'Skin Care', 3, 'face4.jpg', 'AVAILABLE'),
('IT004', 'coffee scrub', 13.00, 'Body Scrub', 2, 'body3.jpg', 'AVAILABLE'),
('IT005', 'black clay mask ', 18.00, 'Skin Care', 0, 'face2.jpg', 'BOOKED'),
('IT006', 'oliv mask', 20.00, 'Skin Care', 1, 'face3.jpg', 'AVAILABLE'),
('IT007', 'Thai massage', 27.00, 'Body Massage', 1, 'massage3.jpg', 'AVAILABLE'),
('IT008', 'red clay mask', 20.00, 'Skin Care', 3, 'fase5.jpg', 'AVAILABLE'),
('IT009', 'Aroma bags massage', 16.00, 'Body Massage', 2, 'massage4.jpg', 'AVAILABLE'),
('IT010', 'hot stone massage', 17.00, 'Body Massage', 2, 'massage1.jpg', 'AVAILABLE'),
('IT011', 'moroccan massage', 17.00, 'Body Massage', 2, 'massage2.JPG', 'AVAILABLE'),
('IT012', 'honey scrub ', 13.00, 'Body Scrub', 2, 'body2.jpg', 'AVAILABLE'),
('IT013', 'green tea scrub ', 13.00, 'Body Scrub', 2, 'body4.jpg', 'AVAILABLE'),
('IT014', 'Oats scrub', 13.00, 'Body Scrub', 2, 'body1.jpg', 'AVAILABLE'),
('IT015', 'nail polish color', 20.00, 'Nails', 0, 'nail3.jpg', 'BOOKED'),
('IT016', 'manicure', 20.00, 'Nails', 3, 'nail2.jpg', 'AVAILABLE'),
('IT017', 'pedicure', 25.00, 'Nails', 2, 'nail4.jpg', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `total_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`total_price`) VALUES
(362.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_records`
--
ALTER TABLE `booking_records`
  ADD PRIMARY KEY (`booking_id`) USING BTREE,
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`total_price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_records`
--
ALTER TABLE `booking_records`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
