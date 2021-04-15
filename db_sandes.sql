-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 10:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sandes`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nik_alternatif` bigint(20) NOT NULL,
  `nama_alternatif` varchar(100) NOT NULL,
  `nama_dusun` varchar(20) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_alternatif`
--

INSERT INTO `data_alternatif` (`id_alternatif`, `nik_alternatif`, `nama_alternatif`, `nama_dusun`, `rt`, `rw`) VALUES
(1, 3507241108850010, 'Agus Hariono', 'Banel', 6, 1),
(24, 3507241509400001, 'Kasdi Siti Khotiin', 'Lowokjati', 1, 4),
(25, 3507241211790007, 'Sukrianto', 'Nampes', 4, 2),
(26, 3507241203620002, 'Dul Manap', 'Pakel', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`) VALUES
(1, 'C1', 'Ibu hamil'),
(2, 'C2', 'Batita (<=3 Tahun)'),
(3, 'C3', 'Stunting'),
(4, 'C4', 'Disabilitas'),
(5, 'C5', 'Kelayakkan Sanitasi'),
(11, 'C6', 'Kondisi Fisik Rumah');

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `id_datalogin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`id_datalogin`, `nama`, `divisi`, `no_telepon`, `username`, `password`, `level`) VALUES
(17, 'User1', 'TFL', '081098765432', 'User1', 'user', 'Pihak Pelaksana'),
(22, 'Admin1', 'Staff IT', '081123456789', 'Admin1', 'admin1', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_subkriteria`
--

CREATE TABLE `data_subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `kode_subkriteria` varchar(100) NOT NULL,
  `nama_subkriteria` varchar(100) NOT NULL,
  `nilai_subkriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_subkriteria`
--

INSERT INTO `data_subkriteria` (`id_subkriteria`, `id_kriteria`, `kode_subkriteria`, `nama_subkriteria`, `nilai_subkriteria`) VALUES
(1, 1, 'K11', '0 (Ibu hamil)', 1),
(2, 1, 'K12', 'Trimester 1', 2),
(3, 1, 'K13', 'Trimester 2', 3),
(4, 1, 'K14', 'Trimester 3', 4),
(10, 2, 'K21', '0 (Batita)', 1),
(11, 2, 'K22', 'Batita (2 s/d <= 3 Tahun)', 2),
(12, 2, 'K23', 'Batita (1 s/d <= 2 Tahun)', 3),
(14, 2, 'K24', 'Batita (0 s/d <= 1 Tahun)', 4),
(15, 3, '12', 'q', 1),
(16, 4, '1213', 'qwert', 2),
(17, 5, '1234', 'q', 1),
(18, 5, '14', 'qw', 1),
(19, 11, 'sd', '123', 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_survey_lapangan`
--

CREATE TABLE `data_survey_lapangan` (
  `id_survei_longlist` int(11) NOT NULL,
  `id_alternatif` bigint(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_survey_lapangan`
--

INSERT INTO `data_survey_lapangan` (`id_survei_longlist`, `id_alternatif`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(8, 3507241211790007, 4, 1, 1, 2, 1, 4),
(9, 3507241108850010, 1, 3, 1, 2, 1, 4),
(10, 3507241509400001, 2, 2, 1, 2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pembobotan`
--

CREATE TABLE `pembobotan` (
  `id_bobot` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id_datalogin`);

--
-- Indexes for table `data_subkriteria`
--
ALTER TABLE `data_subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `data_survey_lapangan`
--
ALTER TABLE `data_survey_lapangan`
  ADD PRIMARY KEY (`id_survei_longlist`),
  ADD KEY `id_longlist` (`id_alternatif`);

--
-- Indexes for table `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_alternatif`
--
ALTER TABLE `data_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `data_kriteria`
--
ALTER TABLE `data_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id_datalogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `data_subkriteria`
--
ALTER TABLE `data_subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_survey_lapangan`
--
ALTER TABLE `data_survey_lapangan`
  MODIFY `id_survei_longlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembobotan`
--
ALTER TABLE `pembobotan`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_subkriteria`
--
ALTER TABLE `data_subkriteria`
  ADD CONSTRAINT `data_subkriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`);

--
-- Constraints for table `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD CONSTRAINT `pembobotan_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
