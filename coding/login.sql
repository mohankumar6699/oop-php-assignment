-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2020 at 05:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `pass` varchar(180) NOT NULL,
  `name` varchar(180) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `pass`, `name`, `address`) VALUES
(1, 'admin@123.com', 'admin', 'Akhileshwar Dayal', 'upper bazar');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` int(11) NOT NULL,
  `description` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `category`, `description`) VALUES
(1, 'Moonlight', 'Moonlight', 'prod-image/moonlight.jpg', 200.00, 1, 'Lorem ipsum text praesent tincidunt ipsum lipsum.'),
(3, 'Replicas', 'Replicas', 'prod-image/replicas.jpg', 100.00, 1, 'Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.'),
(4, '10', '10', 'prod-image/ten.jpg', 500.00, 1, 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.'),
(5, 'Archer', 'Archer', 'prod-image/archer.jpg', 200.00, 1, 'Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.'),
(6, 'After', 'After', 'prod-image/after.jpg', 300.00, 1, 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.'),
(7, 'Crimes of Grindelwald', 'Crimes of Grindelwald', 'prod-image/crimes-of-grindelwald.jpg', 800.00, 1, 'Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.'),
(8, 'Black Panther', 'Black Panther', 'prod-image/black-panther.jpg', 500.00, 1, 'Lorem ipsum text praesent tincidunt ipsum lipsum.  What else?'),
(9, 'Jocker', 'Jocker', 'prod-image/jocker.jpg', 700.00, 1, 'Lorem ipsum text praesent tincidunt ipsum lipsum.'),
(10, 'Dexter', 'Dexter', 'prod-image/dexter.jpg', 400.00, 2, 'Lorem ipsum text praesent tincidunt ipsum lipsum.'),
(11, 'Will & Grace', 'Will & Grace', 'prod-image/will-grace.jpg', 200.00, 2, 'Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.'),
(12, 'Friday Night Lights', 'Friday Night Lights', 'prod-image/friday-night-days.jpg', 800.00, 2, 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.'),
(13, 'I Love Lucy', 'I Love Lucy', 'prod-image/i-love-u-lucky.jpg', 600.00, 2, 'Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.'),
(14, 'Entourage', 'Entourage', 'prod-image/entorage.jpg', 200.00, 2, 'Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.'),
(15, 'The Mary Tyler Moore Show', 'The Mary Tyler Moore Show', 'prod-image/The-Mary-Tyler-Moore-Show.jpg', 500.00, 2, 'Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.'),
(16, 'Fawlty Towers', 'Fawlty Towers', 'prod-image/FawltyTowers.jpg', 200.00, 2, 'Lorem ipsum text praesent tincidunt ipsum lipsum.'),
(17, 'Happy Days', 'Happy Days', 'prod-image/HappyDays.jpg', 344.00, 2, 'Lorem ipsum text praesent tincidunt ipsum lipsum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
