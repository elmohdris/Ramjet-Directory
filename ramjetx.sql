-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2016 at 12:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramjetx`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `Category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `Category`) VALUES
(1, 'CAA');

-- --------------------------------------------------------

--
-- Table structure for table `companies_contacts`
--

CREATE TABLE `companies_contacts` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Tel` varchar(60) DEFAULT NULL,
  `Fax` varchar(60) DEFAULT NULL,
  `AFTN` varchar(60) DEFAULT NULL,
  `Type_b` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `country_companies`
--

CREATE TABLE `country_companies` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotelsContacts`
--

CREATE TABLE `hotelsContacts` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Distance` varchar(60) DEFAULT NULL,
  `Stars` varchar(60) DEFAULT NULL,
  `Tel` varchar(60) DEFAULT NULL,
  `Fax` varchar(60) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelsContacts`
--

INSERT INTO `hotelsContacts` (`id`, `Name`, `Distance`, `Stars`, `Tel`, `Fax`, `Email`) VALUES
(1, 'bala ', 'SW', 'WW', 'SW2', 'WWW', 'WWW'),
(2, 'bala ', 'SW', 'WW', 'SW2', 'WWW', 'WWW'),
(3, 'bala ', 'SW', 'WW', 'SW2', 'WWW', 'WWW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies_contacts`
--
ALTER TABLE `companies_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_companies`
--
ALTER TABLE `country_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelsContacts`
--
ALTER TABLE `hotelsContacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotelsContacts`
--
ALTER TABLE `hotelsContacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies_contacts`
--
ALTER TABLE `companies_contacts`
  ADD CONSTRAINT `companies_companies_contacts_fk` FOREIGN KEY (`id`) REFERENCES `companies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `contacts_companies_contacts_fk` FOREIGN KEY (`id`) REFERENCES `contacts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hotelscontacts_companies_contacts_fk` FOREIGN KEY (`id`) REFERENCES `hotelsContacts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `country_companies`
--
ALTER TABLE `country_companies`
  ADD CONSTRAINT `companies_country_companies_fk` FOREIGN KEY (`id`) REFERENCES `companies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `country_country_companies_fk` FOREIGN KEY (`id`) REFERENCES `country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
