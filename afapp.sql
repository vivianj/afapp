-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2013 at 03:36 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Hoodies'),
(2, 'Shorts');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_detail_code` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE IF NOT EXISTS `order_info` (
  `order_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `ship_fee` decimal(10,2) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_status_id` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `orderId` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `order_status_id` int(11) NOT NULL,
  `order_status` char(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`order_status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `long_sku_id` bigint(20) NOT NULL,
  `long_sku` char(16) CHARACTER SET armscii8 NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`long_sku_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`long_sku_id`, `long_sku`, `category_id`, `name`, `color`, `price`, `img`) VALUES
(1111111111111, '111-111-1111-111', 1, 'One', 'Navy', 10.00, 'http://anf.scene7.com/is/image/anf/anf_64866_01_prod1?$anfCategoryJPG$'),
(2222222222222, '222-222-2222-222', 1, 'Two', 'Navy', 20.00, ''),
(3333333333333, '333-333-3333-333', 2, 'Three', 'White', 30.00, ''),
(4444444444444, '444-444-4444-444', 2, 'Four', 'Green', 40.00, 'http://anf.scene7.com/is/image/anf/anf_65935_01_prod2?$anfCategoryJPG$');

-- --------------------------------------------------------

--
-- Table structure for table `products_detail`
--

CREATE TABLE IF NOT EXISTS `products_detail` (
  `product_detail_code` int(11) NOT NULL,
  `long_sku_id` bigint(20) NOT NULL,
  `size` char(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_detail`
--

INSERT INTO `products_detail` (`product_detail_code`, `long_sku_id`, `size`) VALUES
(111111111, 1111111111111, 'S'),
(111111112, 1111111111111, 'M'),
(222222221, 2222222222222, 'S'),
(222222222, 2222222222222, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(40) CHARACTER SET armscii8 NOT NULL,
  `nickname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `lastlogin_date` datetime NOT NULL,
  `lock` tinyint(1) NOT NULL DEFAULT '0',
  `email` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `gift_card_rate` decimal(10,0) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `type`, `username`, `password`, `nickname`, `create_date`, `lastlogin_date`, `lock`, `email`, `balance`, `gift_card_rate`, `rate`) VALUES
(1, 1, 'etlds', '9237cc760baf71d10e0d27a4ac1194578bdad1c4', 'ET', '2013-06-06 17:28:00', '2013-06-06 17:28:00', 0, '', 0.00, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
