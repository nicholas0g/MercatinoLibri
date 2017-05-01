-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2017 at 05:00 PM
-- Server version: 5.1.71-community-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_fondostudnomentano`
--

-- --------------------------------------------------------
--
-- Table structure for table `mercatino`
--

CREATE TABLE IF NOT EXISTS `mercatino` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titolo` text NOT NULL,
  `materia` varchar(20) NOT NULL,
  `prezzo` varchar(7) NOT NULL,
  `classe` varchar(5) NOT NULL,
  `proprietario` varchar(40) NOT NULL,
  `stato` varchar(15) NOT NULL,
  `recapito` varchar(30) NOT NULL,
  `condizioni` text NOT NULL,
  `isbn` text NOT NULL,
  `dare` text NOT NULL,
  `dati` varchar(2) NOT NULL,
  `np` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4257 ;

-- --------------------------------------------------------

--
-- Table structure for table `mercatino_utenti`
--

CREATE TABLE IF NOT EXISTS `mercatino_utenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `psw` varchar(10) NOT NULL,
  `n` int(11) NOT NULL,
  `conf` int(10) NOT NULL DEFAULT '0',
  `pronta` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=337 ;

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
