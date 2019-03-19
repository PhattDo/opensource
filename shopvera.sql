-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 01:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopvera`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Alias` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `Price` decimal(18,2) NOT NULL,
  `PromotionPrice` decimal(18,2) DEFAULT NULL,
  `Warantary` varchar(5000) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Content` varchar(500) DEFAULT NULL,
  `HomeFlag` bit(1) DEFAULT NULL,
  `HotFlag` bit(1) DEFAULT NULL,
  `ViewCount` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` varchar(500) DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `UpdateBy` varchar(500) DEFAULT NULL,
  `MetaKeyword` varchar(500) DEFAULT NULL,
  `MetaDescription` varchar(500) DEFAULT NULL,
  `Status` bit(1) NOT NULL,
  `Tags` varchar(500) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `OriginalPrice` decimal(18,2) NOT NULL,
  `MoreImages` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Alias`, `CategoryID`, `Image`, `Price`, `PromotionPrice`, `Warantary`, `Description`, `Content`, `HomeFlag`, `HotFlag`, `ViewCount`, `CreatedDate`, `CreatedBy`, `UpdateDate`, `UpdateBy`, `MetaKeyword`, `MetaDescription`, `Status`, `Tags`, `Quantity`, `OriginalPrice`, `MoreImages`) VALUES
(4, 'dien thoai', 0, 1, 'images/promo_3.jpg', '10000.00', '28.00', 'sda', '', 'sas', b'1', b'1', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', b'1', '', 2, '10.00', ''),
(5, 'Bags', 0, 1, 'images/promo_1.jpg', '20000.00', '10.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', NULL, 4, '10000.00', NULL),
(6, 'Coat and Jacket', 0, 1, 'images/promo_2.jpg', '20000.00', '10.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', NULL, 4, '10000.00', NULL),
(7, 'Bag22', 0, 1, 'images/promo_3.jpg', '20000.00', '10.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', NULL, 4, '10000.00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `productcategories` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
