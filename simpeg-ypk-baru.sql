-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 05:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg-ypk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawais`
--

CREATE TABLE `data_pegawais` (
  `id_data_pegawai` int(10) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `tmt_tugas` date NOT NULL,
  `no_surat_tugas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pegawais`
--

INSERT INTO `data_pegawais` (`id_data_pegawai`, `nama_pegawai`, `tempat_lahir`, `tgl_lahir`, `pendidikan_terakhir`, `NIP`, `id_jabatan`, `id_pangkat`, `id_sekolah`, `tmt_tugas`, `no_surat_tugas`, `status_pegawai`) VALUES
(3, 'YOHANES BAMBANG S', 'RAHA', '1999-01-01', 'SMA', '-', 5, 4, 1, '2012-01-01', 'SR10/10/2011', 1),
(4, 'SAYA', 'MANOKWARI', '2017-11-11', 'S1', '123123123a', 5, 1, 3, '2017-11-09', '1212', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolahs`
--

CREATE TABLE `data_sekolahs` (
  `id_data_sekolah` int(10) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `kota_sekolah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sekolahs`
--

INSERT INTO `data_sekolahs` (`id_data_sekolah`, `nama_sekolah`, `alamat_sekolah`, `kota_sekolah`) VALUES
(1, 'SMA YPPK BARU', 'jalan apa saja', 'Manokwari'),
(3, 'SEKOLAH BARU', 'DISITU', 'SORONG');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(40) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id_galeri`, `nama_galeri`, `tgl_upload`, `file`) VALUES
(1, 'Ini gambar', '2017-11-26', 'avatars-000245850909-e37v9l-t500x500.jpg'),
(3, 'ini gambarmu', '2017-11-26', 'itachi.jpg'),
(4, 'adasd', '2017-11-26', 'himakom-lomba-desain.jpg'),
(5, 'asad', '2017-11-26', 'korosensei.png'),
(6, 'adaddfffff', '2017-11-26', 'hungry.jpg'),
(7, 'asdadqeqweqwe', '2017-11-26', 'game.png'),
(8, 'qweqweqwe', '2017-11-26', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id_jabatan`, `nama_jabatan`) VALUES
(3, 'WAKIL KEPALA SEKOLAH BIDANG KURIKULUM'),
(4, 'PSW YPPK KMS WILAYAH MANOKWARI'),
(5, 'GURU'),
(6, 'SATPAM');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_02_093105_create_pasiens_table', 1),
(4, '2017_04_12_032205_create_dokters_table', 2),
(5, '2017_04_12_034126_create_diagnosas_table', 3),
(6, '2017_04_12_043427_create_data_obats_table', 4),
(7, '2017_04_12_100157_create_rekam_medis_table', 5),
(8, '2017_04_13_095953_create_pengadaan_obats_table', 6),
(9, '2017_04_14_045608_create_kunjungan_pasiens_table', 7),
(10, '2017_04_16_163539_create_penjualans_table', 8),
(11, '2017_04_16_164220_create_detail_penjualans_table', 9),
(12, '2017_04_16_165117_create_reseps_table', 10),
(13, '2017_04_16_165314_create_detail_reseps_table', 11),
(14, '2017_08_07_235848_create_jabatans_table', 12),
(15, '2017_08_08_012347_create_pangkats_table', 13),
(16, '2017_08_08_024323_create_status_pegawais_table', 14),
(17, '2017_08_08_031602_create_data_pegawais_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pangkats`
--

CREATE TABLE `pangkats` (
  `id_pangkat` int(11) NOT NULL,
  `nama_pangkat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkats`
--

INSERT INTO `pangkats` (`id_pangkat`, `nama_pangkat`) VALUES
(1, 'II A'),
(2, 'II B'),
(3, 'II C'),
(4, '-');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id_profil` int(10) NOT NULL,
  `isi_profil` text NOT NULL,
  `tgl_profil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id_profil`, `isi_profil`, `tgl_profil`) VALUES
(1, 'asddfsfsfsdfs<br>asdasdadasdadasdasddasd<br>asdadasdadadasdasdassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss<br>adadasdasd<br>', '2017-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `status_pegawais`
--

CREATE TABLE `status_pegawais` (
  `id_status` int(10) UNSIGNED NOT NULL,
  `status_pegawai` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_pegawais`
--

INSERT INTO `status_pegawais` (`id_status`, `status_pegawai`) VALUES
(1, 'HONORER'),
(2, 'PEGAWAI TETAP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'admin aja', 'admin', '$2y$10$mSkAdLa0Bk8VYD/HKIisReU83toUZG89nnMnY7lQmZ49uHiblnM1W', 'admin', 'FKvLZO0dCA7q6VHuVXygl5yRaOcvFlutnOtpLJbq85JLacWfVSXWwp5uc6Y4', '2017-05-19 06:46:00', '2017-11-04 18:35:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawais`
--
ALTER TABLE `data_pegawais`
  ADD PRIMARY KEY (`id_data_pegawai`);

--
-- Indexes for table `data_sekolahs`
--
ALTER TABLE `data_sekolahs`
  ADD PRIMARY KEY (`id_data_sekolah`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkats`
--
ALTER TABLE `pangkats`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `status_pegawais`
--
ALTER TABLE `status_pegawais`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawais`
--
ALTER TABLE `data_pegawais`
  MODIFY `id_data_pegawai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_sekolahs`
--
ALTER TABLE `data_sekolahs`
  MODIFY `id_data_sekolah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id_jabatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pangkats`
--
ALTER TABLE `pangkats`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id_profil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status_pegawais`
--
ALTER TABLE `status_pegawais`
  MODIFY `id_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
