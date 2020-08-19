-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 07:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `es4_finish`
--

CREATE TABLE `es4_finish` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es4_inprogres`
--

CREATE TABLE `es4_inprogres` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es4_project_staff`
--

CREATE TABLE `es4_project_staff` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es4_revisi`
--

CREATE TABLE `es4_revisi` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `es4_todo`
--

CREATE TABLE `es4_todo` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_finish`
--

CREATE TABLE `staff_finish` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_inprogres`
--

CREATE TABLE `staff_inprogres` (
  `kode` bigint(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_todo`
--

CREATE TABLE `staff_todo` (
  `kode` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `es4_finish`
--
ALTER TABLE `es4_finish`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `es4_inprogres`
--
ALTER TABLE `es4_inprogres`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `es4_project_staff`
--
ALTER TABLE `es4_project_staff`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `es4_revisi`
--
ALTER TABLE `es4_revisi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `es4_todo`
--
ALTER TABLE `es4_todo`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `staff_finish`
--
ALTER TABLE `staff_finish`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `staff_inprogres`
--
ALTER TABLE `staff_inprogres`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `staff_todo`
--
ALTER TABLE `staff_todo`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
