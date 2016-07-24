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
-- Database: `ramjet`
--

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airport_catering_companies`
--

CREATE TABLE `airport_catering_companies` (
  `airport_id` int(11) NOT NULL,
  `catering_companies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airport_fbo`
--

CREATE TABLE `airport_fbo` (
  `airport_id` int(11) NOT NULL,
  `fbo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airport_fuel_companies`
--

CREATE TABLE `airport_fuel_companies` (
  `airport_id` int(11) NOT NULL,
  `fuel_companies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airport_ground_handlers`
--

CREATE TABLE `airport_ground_handlers` (
  `airport_id` int(11) NOT NULL,
  `ground_handlers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airport_hotels`
--

CREATE TABLE `airport_hotels` (
  `airport_id` int(11) NOT NULL,
  `hotels_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airport_maintaince_companies`
--

CREATE TABLE `airport_maintaince_companies` (
  `airport_id` int(11) NOT NULL,
  `maintaince_companies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `airport_slot`
--

CREATE TABLE `airport_slot` (
  `airport_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `caa`
--

CREATE TABLE `caa` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catering_companies`
--

CREATE TABLE `catering_companies` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country_airports`
--

CREATE TABLE `country_airports` (
  `airport_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country_caa`
--

CREATE TABLE `country_caa` (
  `country_id` int(11) NOT NULL,
  `caa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fbo`
--

CREATE TABLE `fbo` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_companies`
--

CREATE TABLE `fuel_companies` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ground_handlers`
--

CREATE TABLE `ground_handlers` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintainance_companies`
--

CREATE TABLE `maintainance_companies` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) DEFAULT NULL,
  `Tel` varchar(30) DEFAULT NULL,
  `Fax` varchar(30) DEFAULT NULL,
  `AFTN` varchar(30) DEFAULT NULL,
  `Type_b` varchar(30) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` smallint(10) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '$2y$13$uqe3LPW9ya3RZhynJpPN5um9fvdxUmoqjOqQBJDdIDXSKxRZB5bPu', '', '', 10, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport_catering_companies`
--
ALTER TABLE `airport_catering_companies`
  ADD PRIMARY KEY (`airport_id`,`catering_companies_id`),
  ADD KEY `catering_companies_airport_catering_companies_fk` (`catering_companies_id`);

--
-- Indexes for table `airport_fbo`
--
ALTER TABLE `airport_fbo`
  ADD PRIMARY KEY (`airport_id`,`fbo_id`),
  ADD KEY `fbo_airport_fbo_fk` (`fbo_id`);

--
-- Indexes for table `airport_fuel_companies`
--
ALTER TABLE `airport_fuel_companies`
  ADD PRIMARY KEY (`airport_id`,`fuel_companies_id`),
  ADD KEY `fuel_companies_airport_fuel_companies_fk` (`fuel_companies_id`);

--
-- Indexes for table `airport_ground_handlers`
--
ALTER TABLE `airport_ground_handlers`
  ADD PRIMARY KEY (`airport_id`,`ground_handlers_id`),
  ADD KEY `ground_handlers_airport_ground_handlers_fk` (`ground_handlers_id`);

--
-- Indexes for table `airport_hotels`
--
ALTER TABLE `airport_hotels`
  ADD PRIMARY KEY (`airport_id`,`hotels_id`),
  ADD KEY `hotels_airport_hotels_fk` (`hotels_id`);

--
-- Indexes for table `airport_maintaince_companies`
--
ALTER TABLE `airport_maintaince_companies`
  ADD PRIMARY KEY (`airport_id`,`maintaince_companies_id`),
  ADD KEY `maintainance_companies_airport_maintaince_companies_fk` (`maintaince_companies_id`);

--
-- Indexes for table `airport_slot`
--
ALTER TABLE `airport_slot`
  ADD PRIMARY KEY (`airport_id`,`slot_id`),
  ADD KEY `slots_airport_slot_fk` (`slot_id`);

--
-- Indexes for table `caa`
--
ALTER TABLE `caa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering_companies`
--
ALTER TABLE `catering_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_airports`
--
ALTER TABLE `country_airports`
  ADD PRIMARY KEY (`airport_id`,`country_id`),
  ADD KEY `country_country_airports_fk` (`country_id`);

--
-- Indexes for table `country_caa`
--
ALTER TABLE `country_caa`
  ADD PRIMARY KEY (`country_id`,`caa_id`),
  ADD KEY `caa_country_caa_fk` (`caa_id`);

--
-- Indexes for table `fbo`
--
ALTER TABLE `fbo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_companies`
--
ALTER TABLE `fuel_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ground_handlers`
--
ALTER TABLE `ground_handlers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintainance_companies`
--
ALTER TABLE `maintainance_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `airport_catering_companies`
--
ALTER TABLE `airport_catering_companies`
  ADD CONSTRAINT `airports_airport_catering_companies_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `catering_companies_airport_catering_companies_fk` FOREIGN KEY (`catering_companies_id`) REFERENCES `catering_companies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `airport_fbo`
--
ALTER TABLE `airport_fbo`
  ADD CONSTRAINT `airports_airport_fbo_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fbo_airport_fbo_fk` FOREIGN KEY (`fbo_id`) REFERENCES `fbo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `airport_fuel_companies`
--
ALTER TABLE `airport_fuel_companies`
  ADD CONSTRAINT `airports_airport_fuel_companies_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fuel_companies_airport_fuel_companies_fk` FOREIGN KEY (`fuel_companies_id`) REFERENCES `fuel_companies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `airport_ground_handlers`
--
ALTER TABLE `airport_ground_handlers`
  ADD CONSTRAINT `airports_airport_ground_handlers_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ground_handlers_airport_ground_handlers_fk` FOREIGN KEY (`ground_handlers_id`) REFERENCES `ground_handlers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `airport_hotels`
--
ALTER TABLE `airport_hotels`
  ADD CONSTRAINT `airports_airport_hotels_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hotels_airport_hotels_fk` FOREIGN KEY (`hotels_id`) REFERENCES `hotels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `airport_maintaince_companies`
--
ALTER TABLE `airport_maintaince_companies`
  ADD CONSTRAINT `airports_airport_maintaince_companies_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `maintainance_companies_airport_maintaince_companies_fk` FOREIGN KEY (`maintaince_companies_id`) REFERENCES `maintainance_companies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `airport_slot`
--
ALTER TABLE `airport_slot`
  ADD CONSTRAINT `airports_airport_slot_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `slots_airport_slot_fk` FOREIGN KEY (`slot_id`) REFERENCES `slots` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `country_airports`
--
ALTER TABLE `country_airports`
  ADD CONSTRAINT `airports_country_airports_fk` FOREIGN KEY (`airport_id`) REFERENCES `airports` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `country_country_airports_fk` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `country_caa`
--
ALTER TABLE `country_caa`
  ADD CONSTRAINT `caa_country_caa_fk` FOREIGN KEY (`caa_id`) REFERENCES `caa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `country_country_caa_fk` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
