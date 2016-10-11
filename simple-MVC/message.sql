-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-08-02 13:59:14
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `msg`
--

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 NOT NULL,
  `src` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `title`, `content`, `src`) VALUES
(1, '图片一', '我是第一张图片xxxx', 'img/F7279000-A760-4265-C15D-C9E260749034.jpeg'),
(7, '图片七', '我是第七张图片', 'img/0FE2391B-18FB-1028-70FB-91B07D256058.jpeg'),
(9, '图片九', '我是第九张图片', 'img/0FE2391B-18FB-1028-70FB-91B07D256058.jpeg'),
(10, '图片十', '我是第十张图片', 'img/0FE2391B-18FB-1028-70FB-91B07D256058.jpeg'),
(11, '图片十一', '我是第十一张图片', 'img/0FE2391B-18FB-1028-70FB-91B07D256058.jpeg'),
(12, '图片十二', '我是第十二张图片', 'img/248D1910-574A-BEFB-475E-814054368FD3.jpeg'),
(62, '3', '3', 'img/248D1910-574A-BEFB-475E-814054368FD3.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
