-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 13.08
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport_digital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID`, `Nama`, `username`, `password`, `level`) VALUES
(20220101, 'Udin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(20220202, 'Suripto', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIP` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `Nama`, `Mapel`) VALUES
(202202021, 'Suripto', 'BK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `NIM` int(11) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Mapel` varchar(50) NOT NULL,
  `Nilai_Tgs_1` varchar(10) NOT NULL,
  `Nilai_Tgs_2` varchar(10) NOT NULL,
  `Nilai_Tgs_3` varchar(10) NOT NULL,
  `Nilai_Uts` varchar(10) NOT NULL,
  `Nilai_Uas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`NIM`, `Kelas`, `Semester`, `Mapel`, `Nilai_Tgs_1`, `Nilai_Tgs_2`, `Nilai_Tgs_3`, `Nilai_Uts`, `Nilai_Uas`) VALUES
(20211003, '11 RPL', 'Ganjil', 'B.Indonesia', '100', '80', '85', '80', '95'),
(20211004, '11 RPL', 'Genap', 'B.Inggris', '80', '75', '85', '85', '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIM` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kelamin` varchar(15) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_HP` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIM`, `Nama`, `Kelamin`, `Kelas`, `Alamat`, `No_HP`) VALUES
(20211003, 'Aulia', 'Perempuan', '11 RPL', 'bojong kaum ', '085223236665'),
(20211004, 'Alvaro', 'Laki-Laki', '11 RPL', 'Jakarta Selatan', '089673202209');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
