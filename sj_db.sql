-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2021 at 01:00 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sj_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(25) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(45) NOT NULL,
  `contact_no` int(45) NOT NULL,
  `si_no` int(45) NOT NULL,
  `dr_no` int(45) NOT NULL,
  `term` varchar(45) NOT NULL,
  `customer_address` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `product_serial_number` varchar(45) NOT NULL,
  `quantity` int(10) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `amount_paid` double NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `contact_no`, `si_no`, `dr_no`, `term`, `customer_address`, `date`, `product_serial_number`, `quantity`, `unit`, `amount_paid`) VALUES
(16, 'Jaskos', 918171615, 716151, 81611, '', 'ma', '0001-11-11', '2', 1, '2', 11),
(10, 'arnold', 1111, 222, 111, 'sas', '2', '1999-01-01', '2', 2, '2', 10),
(9, '$customer_name', 1111, 222, 111, '', '2', '1999-01-01', '2', 13, '2', 143),
(8, 'Joselin T. Macayanan', 912121212, 12, 12, '1212', 'maraia', '0001-11-11', 'hhtt6', 12, '7878sd', 133.2),
(15, 'Jefferson Cueva', 97161514, 765, 2222, '1212', 'Maria Aurora', '0001-11-11', '11', 1, '11', 11),
(12, 'Josephin tilan', 97161514, 222, 83363, 'Hayat', 'Baler', '1999-02-01', 'hhtt6', 11, '7878sd', 122.1),
(13, 'Israel Alisos', 927161, 122454, 122144, 'sts', 'Cabanatuan', '1999-02-01', 'hhtt6', 11, '7878sd', 122.1),
(14, 'Mary Joy Saldivar', 912112, 12121, 41131, 'Ssa', 'Maria Ding', '1000-12-09', 'hhtt6', 12, '7878sd', 133.2),
(17, 'Joslsk', 19181716, 87264, 7265, 'ystsrs5', 'Maria Aurora', '1212-12-12', 'hhtt6', 2, '7878sd', 22.2),
(18, 'lsloso', 91871716, 72716, 182726, 'hshsg', 'Maria Aurora', '0011-11-11', 'hhtt6', 2, '7878sd', 22.2),
(19, 'msmnso', 91817165, 11615, 811716, 'jssv', 'm', '0015-12-17', '2', 1, '2', 11),
(48, 'MIS Custom', 912456717, 89872, 180318, 'Rtuao', 'Maria Aurora', '2018-12-12', 'q', 12, '12', 120),
(47, 'dfdslfksjdfkJDKJ', 1918171, 1212, 12131, 'KDJFDHF', '091281927', '2131-12-12', '11', 1, '11', 11),
(39, 'kakakak', 927121212, 1212, 3434, 'oaoaoa', 'Maria Aurora', '2018-12-07', 'hhtt6', 1, '7878sd', 11),
(40, 'kakakak', 927121212, 1212, 3434, 'oaoaoa', 'Maria Aurora', '2018-12-07', '1', 1, '1', 1),
(41, 'kumaw1223', 91212121, 91919, 91919, 'ksjsj', 'dasdasd', '1212-12-12', '6', 6, '6', 36),
(42, 'kumaw1223', 91212121, 91919, 91919, 'ksjsj', 'dasdasd', '1212-12-12', '11', 1, '11', 11),
(43, 'kakalawang', 927188171, 611, 71716, 'uywgww`', 'cuyapo', '1212-12-12', '6', 1, '6', 6),
(44, 'jaja', 191816, 817161, 1716, 'uqyqt', 'hayatala', '0121-12-12', '6', 2, '6', 12),
(45, 'jaja', 191816, 817161, 1716, 'uqyqt', 'hayatala', '0121-12-12', '11', 2, '11', 22),
(46, 'dfdslfksjdfkJDKJ', 1918171, 1212, 12131, 'KDJFDHF', '091281927', '2131-12-12', '6', 1, '6', 6),
(49, 'MIS Custom', 912456717, 89872, 180318, 'Rtuao', 'Maria Aurora', '2018-12-12', '2', 1, '2', 11),
(50, '323y23', 192081982, 1212, 872873, '19829', '1928172', '2018-12-10', 'yyggh', 1, 'hhjh', 7),
(51, 'baboy', 9121212, 10101, 1010, 'Jaja', 'Maria Aurora', '2018-12-27', 'q', 1, '12', 10),
(52, 'jasmin gago', 911818, 1212, 1821, 'haha', 'Manila', '2018-12-12', 'q', 1, '12', 10),
(53, 'sndsdjshj', 120120, 912981928, 712871827, 'kjsdhsjdh', '1217281', '0012-12-12', 'q', 10, '12', 100),
(54, 'asdasd', 91201289, 1291829, 9127182, 'shdjshd', 'Manila', '2018-12-04', 'hhtt6', 20, '7878sd', 220),
(55, 'anaztl', 1234567890, 677777, 456, 'fbxnvmb,mb', 'sddghbgh', '2018-12-14', '1', 1, '1', 1),
(56, 'dfghj', 3456789, 5678, 45678, 'fghj', 'fghj', '0012-12-12', 'hj', 1, 'hj', 1),
(57, 'sdfghj', 5689, 56789, 789, 'fghjk', 'fghjk', '0012-12-12', '1', 1, '1', 1),
(58, 'dfghj', 5678, 5678, 5678, 'tyui', 'fghjk', '0045-03-12', '1', 11, '1', 11),
(59, 'dfghj', 456789, 5678, 56789, 'fghj', 'fghj', '5678-04-23', 'q', 1, '12', 10),
(60, 'fghjk', 4567890, 456789, 456789, 'dfghjk', 'dfghjk', '5678-04-23', 'q', 1, '12', 10),
(61, 'wertyuio', 345678, 345678, 3456789, '456789', '345678', '6789-05-31', 'q', 1, '12', 10),
(62, '234567', 234567, 4567, 34567, '4567', '456', '0006-05-04', 'q', 1, '12', 10),
(63, '5678', 567, 567567, 567567, '565', '656756', '0567-06-05', 'q', 1, '12', 10),
(64, 'rtyu', 678978, 678678, 678, '678', '678', '0089-07-06', 'q', 1, '12', 10),
(65, 'rtyu', 678978, 678678, 678, '678', '678', '0089-07-06', '2', 1, '2', 11),
(66, 'tyu', 678, 78, 78, '678', '45678', '0678-05-31', 'q', 1, '12', 10),
(67, 'tyu', 678, 782, 78, '678', '45678', '0678-05-31', 'q', 1, '12', 10),
(68, 'tyu', 678, 782, 78, '678', '45678', '0678-05-31', 'q', 1, '12', 10),
(69, 'tyu', 678, 782, 78, '678', '45678', '0678-05-31', 'q', 1, '12', 10),
(70, 'Joselin T. Macayanan', 912121212, 1212, 41414, 'hahsh', '1212', '0001-12-14', 'q', 1, '12', 10),
(71, 'Joselin T. Macayanan', 912121212, 1212, 41414, 'hahsh', '1212', '0001-12-14', 'q', 1, '12', 10),
(72, 'Joselin T. Macayanan', 912121212, 1212, 41414, 'hahsh', '1212', '0001-12-14', 'q', 1, '12', 10),
(73, 'Joselin T. Macayanan', 912121212, 1212, 41414, 'hahsh', '1212', '0001-12-14', 'q', 1, '12', 10),
(74, '4567', 4567, 4567, 567, '4567', '567', '0078-06-05', 'q', 1, '12', 10),
(75, '45678', 345678, 45678, 456789, '45678', '45678', '0067-05-31', 'q', 1, '12', 10),
(76, '34567', 8456, 4567, 4567, '567', '567', '0007-06-05', '2', 1, '2', 11),
(77, '6767', 676, 7676, 767, '676', '767', '0006-07-06', 'q', 2, '12', 20),
(78, '556565', 6565, 6, 56, '56', '56', '0122-06-05', 'q', 1, '12', 10),
(79, '878`7`8', 78787, 78787, 87877, '78787', '787', '0078-08-07', 'q', 1, '12', 10),
(80, 'qqwert', 1234, 1234, 254, '4323', '123', '0002-03-12', 'q', 1, '12', 10),
(81, '', 12, 12, 12, '12', '1212', '0012-12-12', 'q', 1, '12', 10),
(82, '', 1, 2, 1, '1', '1', '0012-12-12', 'q', 1, '12', 10),
(83, '1', 1, 2, 1, '1', '1', '0012-12-12', 'q', 1, '12', 10),
(84, '1', 1, 1, 1, '1', '1', '0012-12-12', 'q', 1, '12', 10),
(85, '2345', 2345, 23424, 2342, '2342', '24', '0021-12-12', 'q', 1, '12', 10),
(86, '1212r', 124, 23124, 1424, '124', '124', '0001-12-12', 'q', 1, '12', 10),
(87, '1212', 1241, 124124, 141, '4124', '124', '0141-12-14', 'q', 1, '12', 10),
(88, '12414', 1241, 1241, 1414, '1414', '14', '0014-12-14', 'q', 1, '12', 10),
(89, 'afsdf', 2312, 3123, 123, '123', '12', '0001-12-12', 'q', 1, '12', 10),
(90, 'sdfsdf', 112123, 12312, 31231, '2312', '23123', '0123-03-12', 'q', 1, '12', 10),
(91, 'esfdf', 2341241, 14141, 4124134, '1434134', '1341341', '0123-03-12', 'q', 1, '12', 10),
(92, 'adsads', 34234, 2342, 4342, '34234', '2342', '0012-12-12', 'q', 1, '12', 10),
(93, '1212134', 23123, 21323, 123213, '123123', '12312', '0112-12-12', 'q', 1, '12', 10),
(94, 'dfgdfg', 234324, 2343, 4342, '32344', '3243', '0012-12-12', 'q', 1, '12', 10),
(95, '2133', 232, 3123, 123, '123123', '123', '0023-03-12', 'q', 1, '12', 10),
(96, 'asdasds', 123123, 1231, 2123, '1123', '123', '0213-03-21', 'q', 1, '12', 10),
(97, '3234324', 4234324, 34234, 23123123, '123123', '', '0012-12-12', 'q', 1, '12', 10),
(98, 'dfgdfgd', 4234, 23423, 42342, '34234', '2342', '0343-04-23', 'q', 1, '12', 10),
(99, 'ehdweh1`gk', 3451, 3654576, 475869, 'ghjk', 'dfghjk', '2018-12-17', '1', 6, '1', 6),
(100, 'hdckl', 234567890, 234567, 89456789, '56789', '56789', '0890-07-06', '1', 10, '1', 10),
(101, '5678', 6567, 5678, 6789, '6789', '78', '0090-08-07', 'hhtt6', 1, '7878sd', 11),
(102, '4567', 567, 5678, 5678, '678', '67', '0008-07-06', 'q', 1, '12', 10),
(103, '123456', 123456, 123456, 1234567, '234567', '23456', '0567-04-23', 'hhtt6', 1, '7878sd', 11),
(104, '23456', 3456, 4567, 4567, '4567', '456', '8989-05-04', 'hhtt6', 1, '7878sd', 11),
(105, '2345', 23456, 23456, 2345, '34567', '23456', '0567-04-23', '11', 1, '11', 11),
(106, 'sdasdjadh', 32282738, 2323, 1216271, '1212', '1212', '0012-12-12', '11', 1, '11', 11),
(107, '234567', 345673, 3456, 2345, '3456', '3456', '0067-05-31', '11', 1, '11', 11),
(108, '4567', 34567, 34567, 34567, '3456', '34567', '0006-05-31', '11', 1, '11', 11),
(109, '3456', 345, 23456, 23456, '3456', '23456', '0567-04-23', '11', 1, '11', 11),
(110, '345678', 4567, 45678, 5678, '5678', '5678', '0078-06-05', '11', 1, '11', 11),
(111, '234567', 234567, 23456, 3456, '3456', '3456', '0678-05-31', '11', 1, '11', 11),
(112, '234567', 2345673, 234567, 34567, '234567', '234567', '0567-04-23', '11', 1, '11', 11),
(113, '34567', 34567, 34567, 3456, '3456', '3456', '0567-04-23', '11', 1, '11', 11),
(114, '3456', 3456, 3456, 3456, '3456', '34567', '0067-05-31', '11', 1, '11', 11),
(115, '23456', 3456, 3456, 3456, '34563', '45634567', '0678-05-04', '11', 1, '11', 11),
(116, 'hjkvjkdbkj', 234567890, 23456789, 3456789, '3456745678', '5678', '2018-12-31', '11', 8, '11', 88),
(117, 'hjkvjkdbkj', 234567890, 23456789, 3456789, '3456745678', '5678', '2018-12-31', 'hhtt6', 6, '7878sd', 66);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `stm_no` int(45) NOT NULL,
  `stm_date` date DEFAULT NULL,
  `dr_si_no` int(25) NOT NULL,
  `dr_si_date` date DEFAULT NULL,
  `product_name` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `serial_number` varchar(25) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date_received` date NOT NULL,
  `brand_name` varchar(15) NOT NULL,
  `price` double NOT NULL,
  `remarks` text,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `serial_number` (`serial_number`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `stm_no`, `stm_date`, `dr_si_no`, `dr_si_date`, `product_name`, `unit`, `serial_number`, `quantity`, `date_received`, `brand_name`, `price`, `remarks`) VALUES
(80, 1212, '2018-11-25', 449, '2018-11-14', 'jOSp', '12', 'q', 0, '0001-11-11', '1', 10.1, 'laalala'),
(79, 1212, '2018-11-14', 4345, '2018-11-22', 'mAMA', '2', '2', 0, '0002-02-02', '2', 11, NULL),
(81, 1212, '2018-11-29', 9944, '2018-11-29', 'Oppoes1s1', '7878sd', 'hhtt6', 71, '0001-11-11', '1212', 11.1, '14'),
(82, 91919, '2018-11-29', 4948, '2018-11-29', 'MEME', '1', '1', 8, '0001-11-11', '11', 1.1, '5'),
(83, 1010, '2018-11-16', 4948, '2018-11-21', '11', '11', '11', 100, '0001-11-22', '1', 11, '313123'),
(84, 1010, '2018-11-23', 7262, '2018-11-23', 'uyy', '6', '6', 23, '0006-06-06', '6', 6, NULL),
(85, 9181, '2018-11-03', 4722, '2018-11-19', 'hj', 'hj', 'hj', 85, '0033-03-31', '61', 1, NULL),
(86, 8311, '2018-11-24', 8363, '2018-11-13', 'jjjhj', 'hhjh', 'yyggh', 63, '0007-07-07', '7', 7, NULL),
(87, 191, '2018-11-30', 8171, '2018-11-29', 'S5Minias', '911', '1aia81', 11, '1999-12-12', 'Samsung', 10000.12, NULL),
(89, 1212, '2018-11-01', 12312, '2018-11-30', 'Phone121', '929', '9191', 12, '0021-11-12', 'Samsung', 100, NULL),
(90, 19117, '2018-11-28', 213123, '2018-11-16', 'Omen 118', 'Os9s8', '1911u17', 12, '2018-11-23', 'HP', 601121, NULL),
(91, 1817, '2018-11-16', 9181, '2018-11-09', 'ROG 121', 'Asus 12', 'i181716', 12, '2018-11-16', 'Asus', 60100, NULL),
(92, 98767, '2018-11-22', 91816, '2018-11-21', 'oppof1s', 'Oppo', '01871614171', 14, '2018-11-22', '12211', 101917, NULL),
(93, 121212, '1112-12-12', 21212, '0121-02-11', 'whehwqeh', 'jshdsdgh', 'dshds8d', 12, '0011-12-09', '1918', 19, NULL),
(94, 1278165, '2018-12-25', 93471, '2018-12-19', 'Oppo Se23', 'Oppo 12aaa', '0398432h43287', 12, '2018-12-18', 'Oppo', 12000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dr` int(45) DEFAULT NULL,
  `customer_name` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `serial_number` varchar(45) DEFAULT NULL,
  `term` varchar(45) DEFAULT NULL,
  `net_cash` int(45) DEFAULT NULL,
  `coll` int(45) DEFAULT NULL,
  `charge` int(45) DEFAULT NULL,
  `amount_finance` int(45) DEFAULT NULL,
  `credit_approval` varchar(45) DEFAULT NULL,
  `promo_item` varchar(45) DEFAULT NULL,
  `serial_number_2` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `customer_id` int(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `dr`, `customer_name`, `model`, `serial_number`, `term`, `net_cash`, `coll`, `charge`, `amount_finance`, `credit_approval`, `promo_item`, `serial_number_2`, `remarks`, `date`, `customer_id`) VALUES
(15, 475869, 'ehdweh1`gk', '1', '1', 'ghjk', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-17', 99),
(13, 111, 'arnold', '2', '2', 'sas', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1999-01-01', 10),
(14, 111, '$customer_name', '2', '2', '', 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1999-01-01', 9),
(12, 180318, 'MIS Custom', '2', '2', 'Rtuao', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-12', 49),
(10, 122144, 'Israel Alisos', '7878sd', 'hhtt6', 'sts', 122, 2, 4, 6, '8', '0', '12', '14', '1999-02-01', 13),
(11, 180318, 'MIS Custom', '12', 'q', 'Rtuao', 120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-12', 48),
(9, 83363, 'Josephin tilan', '7878sd', 'hhtt6', 'Hayat', 122, 1, 3, 5, '7', '9', '11', '13', '1999-02-01', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `position` varchar(60) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `hint` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `employee_name`, `position`, `user_type`, `hint`) VALUES
(1, 'admin', '$2y$10$/LVrHEh8Eb9jkpoLQXBbeutBjwdjOvj2nYbBlnIZyKmfXMrbBnG3u', 'admin admin admin', 'admin', 'admin', 'Savage'),
(2, 'jose', '$2y$10$/LVrHEh8Eb9jkpoLQXBbeutBjwdjOvj2nYbBlnIZyKmfXMrbBnG3u', 'Joselin T Macayanan', 'employee', 'user', 'Enemy Double Kill'),
(3, 'neil', '$2y$10$H56BtezAt8GNQyMY3ipDk.y8hqakyswgt8C/aq8Opgz1ccioxujYi', 'Neil T Garcia', 'employee', 'user', 'astig na aso'),
(4, 'mateo', '$2y$10$Y1saf9qQtBCKNmRcP27ejO18/FIhKr2R6y6HQAMJBmW55tNUu.8qS', 'Lawrence P Mateo', 'employee', 'user', 'pogi ko'),
(5, 'selin', '$2y$10$QE1zMrmWoviZMGHjFy0UBuO/KYsxSaUaV1gjDKDTFPHtMs.YtM.9u', 'Joselin T Macayanan', 'Manager', 'admin', '1223');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
