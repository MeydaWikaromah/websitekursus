-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 02:07 AM
-- Server version: 10.9.2-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitekursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `durasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `judul`, `deskripsi`, `durasi`) VALUES
(2, 'UI/UX Designer Course', 'UI Designer adalah orang yang mendesain tampilan antarmuka sebuah aplikasi atau perangkat. Secara teknis, antarmuka yang terdapat dalam UI Designer berkaitan dengan grafis, tata letak, dan aspek desain fisik dari sebuah aplikasi. Sementara UX Designer adalah orang yang mendesain pengalaman pengguna.', '5 bulan'),
(7, 'Fullstack Web Developer Course', 'Full Stack Developer adalah bagian dari profesi developer yang memiliki tugas dan tanggung jawab dalam mengembangkan sebuah aplikasi atau sistem mulai dari perancangan user interface, pembuatan logic yang tersusun dari banyak kode, manajemen database, hingga memastikan user experience berada pada kondisi yang baik.', '6 bulan'),
(8, 'Front End Web Developer Course', 'Front End Developer adalah seseorang yang bertanggung jawab dalam mengembangkan tampilan dan interaksi antara user dengan website atau aplikasi.', '4 bulan'),
(9, 'Back End Web Developer Course', 'Back End Developer adalah seseorang yang memiliki tugas khusus untuk pengelolaan server, aplikasi serta database sehingga semua bisa berjalan dengan lancar.', '5 bulan'),
(10, 'Data Analyst Course', 'Data analyst adalah seseorang yang bertanggung jawab untuk melakukan analisis dan riset data (data analytics) dengan menggunakan tools tertentu.', '5 bulan');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id`, `judul`, `deskripsi`, `link`) VALUES
(15, 2, 'Pengenalan tools wireframe', 'Wireframing merupakan cara desainer UI/UX membuat rancangan website maupun aplikasi pada level struktural. Wireframe sendiri dapat diartikan dengan sederhana sebagai kerangka gambar. Merancang sebuah wireframe berarti merencanakan kerangka garis besar sebuah aplikasi atau website.', 'link'),
(16, 2, 'Pengenalan tools design process', 'Design Process adalah tahap-tahap dasar yang berhubungan dalam membangun design suatu sistem yang meliputi pola, warna, fungsi, tekstur, dan semua yang sesuai dengan permintaan konsumen.', 'link'),
(17, 2, 'Pengenalan tools prototyping', 'Prototyping dapat didefinisikan sebagai proses pengembangan suatu prototipe secara cepat untuk digunakan terlebih dahulu dan ditingkatkan terus menerus sampai didapatkan sistem yang utuh.', 'link'),
(18, 7, 'JavaScript Fundamental', 'JavaScript adalah bahasa pemrograman yang digunakan untuk membuat aplikasi web interaktif.', 'link'),
(19, 7, 'Database Management System', 'DBMS adalah sistem software yang digunakan untuk menyimpan, mengatur, dan memastikan data-data tersimpan dengan aman.', 'link'),
(20, 7, 'PHP Web Programming', 'PHP merupakan singkatan dari Hypertext Preprocessor adalah salah satu Bahasa scripting open source yang banyak digunakan oleh Web Developer untuk pengembangan Web.', 'link'),
(21, 8, 'HTML', 'HTML (HyperText Markup Language) adalah suatu bahasa yang menggunakan tanda-tanda tertentu (tag) untuk menyatakan kode-kode yang harus ditafsirkan oleh browser agar halaman tersebut dapat ditampilkan secara benar.', 'link'),
(22, 8, 'CSS', 'Css adalah singkatan dari Cascading Style Sheet yang dipergunakan untuk menentukan tampilan dan format pada sebuah website. Artinya, dengan adanya CSS bisa mengatur mulai dari font, warna tulisan dan latar belakang pada website tersebut.', 'link'),
(23, 8, 'JavaScript', 'JavaScript adalah bahasa skrip yang digunakan untuk membuat konten halaman web dinamis, berfungsi untuk membuat elemen yang mampu meningkatkan interaksi pengunjung seperti menu drop-down, animasi, dan warna background dinamis.', 'link');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
