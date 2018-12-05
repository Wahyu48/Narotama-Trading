-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 08:45 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `narotama_trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `datanasabah_db`
--

CREATE TABLE `datanasabah_db` (
  `id` int(11) NOT NULL,
  `no_account` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kebangsaan` varchar(50) NOT NULL,
  `no_ktp_passport` int(11) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `no_npwp` int(11) NOT NULL,
  `no_kitas` text NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `nama_suami_istri` varchar(200) NOT NULL,
  `nama_gadis_ibu` varchar(100) NOT NULL,
  `nama_saudara_tidak_serumah` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `alamat_surat_menyurat` text NOT NULL,
  `kode_pos1` int(11) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `kode_pos2` int(11) NOT NULL,
  `no_telp_rumah` int(11) NOT NULL,
  `no_telp_hp` int(11) NOT NULL,
  `no_fax` int(11) NOT NULL,
  `nama_ahli_waris1` varchar(200) NOT NULL,
  `hubungan_waris1` varchar(100) NOT NULL,
  `nama_ahli_waris2` varchar(200) NOT NULL,
  `hubungan_waris2` varchar(100) NOT NULL,
  `latar_belakang_pend` varchar(50) NOT NULL,
  `status_rumah` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `bidang_industri` varchar(100) NOT NULL,
  `lama_bekerja` text NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_telp_kantor` int(11) NOT NULL,
  `no_fax_kantor` int(11) NOT NULL,
  `email_kantor` text NOT NULL,
  `penghasilan_pertahun` text NOT NULL,
  `sumber_dana` text NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `cabang` text NOT NULL,
  `nama_pemilik_rek` text NOT NULL,
  `no_rek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datanasabah_db`
--

INSERT INTO `datanasabah_db` (`id`, `no_account`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kebangsaan`, `no_ktp_passport`, `masa_berlaku`, `no_npwp`, `no_kitas`, `agama`, `status_perkawinan`, `nama_suami_istri`, `nama_gadis_ibu`, `nama_saudara_tidak_serumah`, `email`, `alamat_surat_menyurat`, `kode_pos1`, `alamat_rumah`, `kode_pos2`, `no_telp_rumah`, `no_telp_hp`, `no_fax`, `nama_ahli_waris1`, `hubungan_waris1`, `nama_ahli_waris2`, `hubungan_waris2`, `latar_belakang_pend`, `status_rumah`, `pekerjaan`, `nama_perusahaan`, `bidang_industri`, `lama_bekerja`, `posisi`, `alamat_perusahaan`, `kode_pos`, `no_telp_kantor`, `no_fax_kantor`, `email_kantor`, `penghasilan_pertahun`, `sumber_dana`, `nama_bank`, `cabang`, `nama_pemilik_rek`, `no_rek`) VALUES
(1, 0, 'wahyu', 'laki-laki', 'sidoarjo', '2018-12-04', 'indon', 12314, '2018-12-06', 23424, 'ewwr', 'rwer', 'rwerw', 'kjsdfws', 'kl', 'lk', 'lkl', 'lk', 88888, 'kll', 888, 888, 888, 888, 'kkk', 'kkk', 'kkkk', 'kkk', 'kkkkk', 'kkk', 'kkk', 'kk', 'kk', 'kk', 'kkk', 'kkk', 88, 88, 88, 'kk', 'kk', 'kk', 'kk', 'kk', 'kk', 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datanasabah_db`
--
ALTER TABLE `datanasabah_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datanasabah_db`
--
ALTER TABLE `datanasabah_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
