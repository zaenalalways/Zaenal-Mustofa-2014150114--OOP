-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2017 at 04:13 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adminders`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(13) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `name`, `address`, `phone`) VALUES
(6, 'zaenal mustofa', 'Ponoradan', '085799070160'),
(9, 'ardila melyan', 'temanggung', '085799070160'),
(10, 'ardila melyan', 'temanggung', '085729254574'),
(11, 'endang soekamti', 'Temanggung', '0856292190'),
(12, 'edring', 'Temanggung', '96543244'),
(13, 'Ahmad albar', 'Pontianak', '08579999'),
(14, 'Ericka dewi Prasetyani', 'Jl.Pandanaran Jakarta selatan', '008248857939'),
(15, 'Ericka dewi Prasetyani', 'Jl.Pandanaran Jakarta selatan', '008248857939'),
(16, 'Adriani', 'Jl.Pahlawan No.03 Bandung', '0856783881993'),
(17, 'Adriani', 'Jl.Pahlawan No.03 Bandung', '0856783881993'),
(18, 'Adriani', 'Jl.Pahlawan No.03 Bandung', '0856783881993'),
(19, 'Adiska Riayana', 'Bandung', '0858999374939'),
(20, 'Adiska Riayana', 'Bandung', '0858999374939'),
(21, 'Adiska Riayana', 'Bandung', '0858999374939'),
(22, 'asti sinta ', 'Jaya pura ', '0847783802'),
(23, 'intan permata sari', 'JL Seganpit Sulawesi selatan', '08579490385'),
(24, 'intan permata sari', 'JL Seganpit Sulawesi selatan', '08579490385'),
(25, 'intan permata sari', 'JL Seganpit Sulawesi selatan', '08579490385');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
