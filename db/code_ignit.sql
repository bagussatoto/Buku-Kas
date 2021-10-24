-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2017 at 07:39 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `code_ignit`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash_agenda`
--

CREATE TABLE IF NOT EXISTS `cash_agenda` (
  `agendaId` int(5) NOT NULL AUTO_INCREMENT,
  `agendaNama` varchar(30) NOT NULL,
  `agendaLokasi` varchar(50) NOT NULL,
  `agendaTgl` date NOT NULL,
  `agendaImage` varchar(100) NOT NULL,
  `agendaBiaya` int(10) NOT NULL,
  PRIMARY KEY (`agendaId`),
  UNIQUE KEY `agendaId` (`agendaId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cash_agenda`
--


-- --------------------------------------------------------

--
-- Table structure for table `cash_date`
--

CREATE TABLE IF NOT EXISTS `cash_date` (
  `dateId` int(5) NOT NULL AUTO_INCREMENT,
  `dateOne` int(10) NOT NULL,
  `dateTwo` int(10) NOT NULL,
  `dateThree` int(10) NOT NULL,
  `dateFour` int(10) NOT NULL,
  `dateFive` int(10) NOT NULL,
  `dateSix` int(10) NOT NULL,
  `dateSeven` int(10) NOT NULL,
  `dateEight` int(10) NOT NULL,
  `dateNine` int(10) NOT NULL,
  `dateTen` int(10) NOT NULL,
  `dateEleven` int(10) NOT NULL,
  `dateTwelve` int(10) NOT NULL,
  PRIMARY KEY (`dateId`),
  UNIQUE KEY `id` (`dateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cash_date`
--

INSERT INTO `cash_date` (`dateId`, `dateOne`, `dateTwo`, `dateThree`, `dateFour`, `dateFive`, `dateSix`, `dateSeven`, `dateEight`, `dateNine`, `dateTen`, `dateEleven`, `dateTwelve`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cash_grafik`
--

CREATE TABLE IF NOT EXISTS `cash_grafik` (
  `dataY` varchar(30) NOT NULL,
  `dataX` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_grafik`
--


-- --------------------------------------------------------

--
-- Table structure for table `cash_login`
--

CREATE TABLE IF NOT EXISTS `cash_login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_login`
--


-- --------------------------------------------------------

--
-- Table structure for table `cash_mhs`
--

CREATE TABLE IF NOT EXISTS `cash_mhs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nrp` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nrp` (`nrp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cash_mhs`
--

INSERT INTO `cash_mhs` (`id`, `nrp`, `nama`) VALUES
(1, 2110151031, 'Ulfa Latifa Hanum'),
(2, 2110151033, 'Hazna At Thoriqoh'),
(3, 2110151034, 'Adi Putra Utama'),
(4, 2110141035, 'Tafaquh Fiddin Al I.'),
(5, 2110151037, 'Bagas Dewangkara');

-- --------------------------------------------------------

--
-- Table structure for table `cash_tanggal`
--

CREATE TABLE IF NOT EXISTS `cash_tanggal` (
  `dateId` int(5) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `date4` date NOT NULL,
  `date5` date NOT NULL,
  `date6` date NOT NULL,
  `date7` date NOT NULL,
  `date8` date NOT NULL,
  `date9` date NOT NULL,
  `date10` date NOT NULL,
  `date11` date NOT NULL,
  `date12` date NOT NULL,
  PRIMARY KEY (`dateId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cash_tanggal`
--

