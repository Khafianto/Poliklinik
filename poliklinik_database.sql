-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2017 pada 03.09
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik`
--
CREATE DATABASE IF NOT EXISTS `poliklinik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `poliklinik`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `KodeDetail` int(11) NOT NULL,
  `NomorResep` varchar(15) NOT NULL,
  `KodeObat` varchar(15) NOT NULL,
  `Harga` int(11) NOT NULL,
  `JumlahBeli` int(11) NOT NULL,
  `Dosis` varchar(50) NOT NULL,
  `SubTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`KodeDetail`, `NomorResep`, `KodeObat`, `Harga`, `JumlahBeli`, `Dosis`, `SubTotal`) VALUES
(2, 'RSP001', 'OBT001', 12000, 1, '2 x sehari', 12000),
(3, 'RSP001', 'OBT002', 6000, 2, '2 x sehari', 12000),
(4, 'RSP001', 'OBT001', 12000, 1, '2 x sehari', 12000),
(5, 'RSP001', 'OBT003', 12500, 1, '1 x sehari', 12500),
(6, 'RSP002', 'OBT001', 12000, 1, '2 x sehari', 12000),
(7, 'RSP002', 'OBT002', 6000, 3, '2 x sehari', 18000),
(8, 'RSP002', 'OBT003', 12500, 3, '2 x sehari', 37500),
(9, 'RSP002', 'OBT001', 12000, 1, '1 x sehari', 12000),
(10, 'RSP003', 'OBT003', 12500, 1, '2 kali setelah makan', 12500),
(11, 'RSP003', 'OBT002', 6000, 2, '3 x sehari sesudah makan', 12000),
(12, 'RSP004', 'OBT001', 12000, 2, '2 x', 24000),
(13, 'RSP005', 'OBT001', 12000, 3, '1 x sehari', 36000),
(14, 'RSP006', 'OBT002', 6000, 5, '3 x sehari', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `KodeDkt` varchar(15) NOT NULL,
  `NamaDkt` varchar(50) NOT NULL,
  `Spesialis` varchar(50) NOT NULL,
  `AlamatDkt` varchar(50) NOT NULL,
  `TeleponDkt` varchar(50) NOT NULL,
  `KodePlk` varchar(15) NOT NULL,
  `Tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`KodeDkt`, `NamaDkt`, `Spesialis`, `AlamatDkt`, `TeleponDkt`, `KodePlk`, `Tarif`) VALUES
('DKT001', 'dr. Joyo', 'Mata', 'Kaligarang', '0891321123456', 'PLK3', 30000),
('DKT002', 'Dr. H. Imamudin', 'Kerinduan', 'Cluwak', '0876321456987', 'PLK3', 35000),
('DKT003', 'dr. Zainal', 'Tulang', 'Blingoh', '0897654321456', 'PLK4', 30000),
('DKT004', 'Dr. Husein', 'Mata', 'Tunahan', '087665354778', 'PLK3', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `KodeLogin` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`KodeLogin`, `Username`, `Password`, `Level`) VALUES
(1, 'daftar', 'daftar', 'daftar'),
(2, 'apotek', 'apotek', 'apotek'),
(3, 'admin', 'admin', 'admin'),
(4, 'manager', 'manager', 'manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `KodeObat` varchar(15) NOT NULL,
  `NamaObat` varchar(50) NOT NULL,
  `JenisObat` varchar(50) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `HargaObat` int(11) NOT NULL,
  `JumlahObat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`KodeObat`, `NamaObat`, `JenisObat`, `Kategori`, `HargaObat`, `JumlahObat`) VALUES
('OBT001', 'Parasetamol', 'Padat', 'B', 12000, 30),
('OBT002', 'Tablet', 'Padat', 'A', 6000, 30),
('OBT003', 'Sirup', 'Cair', 'D', 12500, 15),
('OBT004', 'Pil', 'Semi Padat', 'B', 15000, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `KodePsn` varchar(15) NOT NULL,
  `NamaPsn` varchar(50) NOT NULL,
  `AlamatPsn` varchar(50) NOT NULL,
  `GenderPsn` varchar(50) NOT NULL,
  `UmurPsn` varchar(50) NOT NULL,
  `TeleponPsn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`KodePsn`, `NamaPsn`, `AlamatPsn`, `GenderPsn`, `UmurPsn`, `TeleponPsn`) VALUES
('PSN001', 'Khafianto', 'Jlegong', 'Laki-laki', '16', '085210458089'),
('PSN002', 'Toshiba', 'Kaligarang', 'Perempuan', '20', '04457769982745'),
('PSN003', 'Kazuma', 'Wikrama', 'Laki-laki', '17', '0946786868686868'),
('PSN004', 'Mutiara', 'Jlegong', 'Perempuan', '7', '0877757575'),
('PSN005', 'Chandra', 'Kelet', 'Laki-laki', '15', '0887665453998');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `NomorByr` int(11) NOT NULL,
  `KodePsn` varchar(15) NOT NULL,
  `KodeDkt` varchar(15) NOT NULL,
  `TanggalByr` date NOT NULL,
  `JumlahByr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`NomorByr`, `KodePsn`, `KodeDkt`, `TanggalByr`, `JumlahByr`) VALUES
(3, 'PSN002', 'DKT001', '2017-05-30', 35000),
(4, 'PSN002', 'DKT002', '2017-05-30', 40000),
(5, 'PSN002', 'DKT001', '2017-05-30', 35000),
(6, 'PSN005', 'DKT001', '2017-05-30', 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `NomorPendf` int(11) NOT NULL,
  `TanggalPendf` date NOT NULL,
  `KodeDkt` varchar(15) NOT NULL,
  `KodePsn` varchar(15) NOT NULL,
  `KodePlk` varchar(15) NOT NULL,
  `Biaya` int(11) NOT NULL,
  `status_pasien` varchar(50) NOT NULL,
  `Ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`NomorPendf`, `TanggalPendf`, `KodeDkt`, `KodePsn`, `KodePlk`, `Biaya`, `status_pasien`, `Ket`) VALUES
(7, '2017-05-30', 'DKT001', 'PSN002', 'PLK3', 5000, 'Aktif', 'Sakit jari'),
(8, '2017-05-30', 'DKT002', 'PSN002', 'PLK2', 5000, 'Aktif', 'Gigi'),
(9, '2017-05-30', 'DKT001', 'PSN002', 'PLK3', 5000, 'Aktif', 'Kelelahan'),
(10, '2017-05-30', 'DKT001', 'PSN005', 'PLK3', 5000, 'Aktif', 'Sakit Kepala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `KodePlk` varchar(15) NOT NULL,
  `NamaPlk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`KodePlk`, `NamaPlk`) VALUES
('PLK1', 'Poli Gigi'),
('PLK2', 'Poli Anak'),
('PLK3', 'Poli Umum'),
('PLK4', 'Poli Dalam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `NomorResep` varchar(15) NOT NULL,
  `TanggalResep` date NOT NULL,
  `KodePsn` varchar(15) NOT NULL,
  `TotalHarga` int(11) NOT NULL,
  `Bayar` int(11) NOT NULL,
  `Kembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`NomorResep`, `TanggalResep`, `KodePsn`, `TotalHarga`, `Bayar`, `Kembali`) VALUES
('RSP001', '2017-05-29', 'PSN001', 100000, 100000, 0),
('RSP002', '2017-05-30', 'PSN002', 100000, 100000, 0),
('RSP003', '2017-05-30', 'PSN003', 24500, 25000, 500),
('RSP004', '2017-05-30', 'PSN004', 24000, 25000, 1000),
('RSP005', '2017-06-11', 'PSN004', 36000, 36000, 0),
('RSP006', '2017-06-13', 'PSN003', 30000, 30000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`KodeDetail`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`KodeDkt`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`KodeLogin`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`KodeObat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`KodePsn`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`NomorByr`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`NomorPendf`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`KodePlk`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`NomorResep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `KodeDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `KodeLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `NomorByr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `NomorPendf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
