-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 06:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1658729_tigapuluhlima`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1),
(14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1),
(15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1),
(16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int(5) UNSIGNED NOT NULL,
  `nama_aktivitas_in` varchar(200) NOT NULL,
  `nama_aktivitas_en` varchar(200) NOT NULL,
  `foto_aktivitas` varchar(100) NOT NULL,
  `deskripsi_aktivitas_in` text DEFAULT NULL,
  `deskripsi_aktivitas_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama_aktivitas_in`, `nama_aktivitas_en`, `foto_aktivitas`, `deskripsi_aktivitas_in`, `deskripsi_aktivitas_en`) VALUES
(6, 'Ekspor Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum_Ekspor Lorem Ipsum_27122023112030.jpg', '<p>lorem</p>', '<p>lorem</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(5) UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `deskripsi_artikel` longtext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`, `created_at`) VALUES
(1, 'Artikel 1', '1725443509_4643a295db081311714c.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(2, 'Artikel 2', '1725443526_40a84e4d2a68cbcc338b.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(3, 'Artikel 3', '1725443543_2dd2ae630d0845570fae.jpeg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(5) UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text DEFAULT NULL,
  `deskripsi_produk_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`) VALUES
(3, 'Makanan Hewan', 'Pet Food', 'Pet Food_Makanan Hewan_04092024094836.jpg', '<p>Pala merupakan tumbuhan berupa pohon yang berasal dari kepulauan Banda, Maluku. Akibat nilainya yang tinggi sebagai rempah-rempah, buah dan biji pala telah menjadi komoditas perdagangan yang penting sejak masa Romawi.</p>', '<p>Nutmeg is a plant in the form of a tree originating from the Banda Islands, Maluku. Due to its high value as a spice, nutmeg fruit and seeds have been important trade commodities since Roman times.</p>'),
(4, 'Mainan Hewan', 'Pet Toys', 'Pet Toys_Mainan Hewan_04092024094926.jpeg', '<p>Jintan Putih merupakan tumbuhan berbunga dari famili Apiaceae yang berasal dari daerah Laut Tengah bagian timur sampai India bagian timur.</p>', '<p>Cumin is a flowering plant from the Apiaceae family originating from the eastern Mediterranean region to eastern India.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(5) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text DEFAULT NULL,
  `deskripsi_perusahaan_en` text DEFAULT NULL,
  `deskripsi_kontak_in` text DEFAULT NULL,
  `deskripsi_kontak_en` text DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_whatsapp` text DEFAULT NULL,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `username`, `password`, `nama_perusahaan`, `logo_perusahaan`, `deskripsi_perusahaan_in`, `deskripsi_perusahaan_en`, `deskripsi_kontak_in`, `deskripsi_kontak_en`, `link_maps`, `link_whatsapp`, `favicon_website`, `title_website`, `foto_utama`, `alamat`, `no_hp`, `email`, `teks_footer`) VALUES
(1, 'user', 'user', 'Pet & Paws', 'Logo_Pet-&-Paws_20082024082937.png', '<p>Selamat datang di <strong>Pets &amp; Paws</strong>, tempat di mana kesehatan, kebahagiaan, dan kesejahteraan hewan peliharaan Anda menjadi prioritas utama kami. Di Pets &amp; Paws, kami mengkhususkan diri dalam menyediakan solusi perawatan hewan peliharaan yang komprehensif, mulai dari makanan hewan berkualitas tinggi hingga layanan pemeliharaan yang menjaga hewan kesayangan Anda tetap dalam kondisi prima.</p>\r\n<p><strong>Mengapa Memilih Pets &amp; Paws?</strong> Di Pets &amp; Paws, kami memperlakukan setiap hewan peliharaan seperti milik kami sendiri. Komitmen kami terhadap kualitas dan kepuasan pelanggan tak tertandingi, dan kami berusaha untuk menciptakan toko serba ada di mana pemilik hewan peliharaan dapat menemukan segala yang mereka butuhkan dalam satu tempat. Staf kami yang berpengetahuan luas selalu siap membantu Anda, menawarkan saran dan rekomendasi yang dipersonalisasi untuk memastikan hewan peliharaan Anda mendapatkan perawatan terbaik.</p>\r\n<p>Bergabunglah dengan keluarga Pets &amp; Paws hari ini dan rasakan perbedaan perawatan yang penuh dedikasi dan penuh cinta bagi kehidupan hewan peliharaan Anda.</p>', '<p>Welcome to <strong>Pets &amp; Paws</strong>, where your pet\'s health, happiness, and well-being are our top priorities. At Pets &amp; Paws, we specialize in providing comprehensive pet care solutions, from high-quality pet food to expert maintenance services that keep your furry friends in perfect shape.</p>\r\n<p><strong>Why Choose Pets &amp; Paws?</strong> At Pets &amp; Paws, we treat every pet as if they were our own. Our commitment to quality and customer satisfaction is unmatched, and we strive to create a one-stop shop where pet owners can find everything they need under one roof. Our knowledgeable staff is always ready to assist you, offering personalized advice and recommendations to ensure your pet gets the best care possible.</p>\r\n<p>Join the Pets &amp; Paws family today and discover the difference that passionate, dedicated care can make in your pet\'s life.</p>\r\n<ul>\r\n<li>\r\n<p>&nbsp;</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<p>Provinsi Sumatra Barat</p>', '<p>West Sumatera Province</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4046040.312635006!2d108.0530452!3d-7.9771059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c21940f685%3A0xce6adb8a6aba4f5!2sNakam%20Foods%20Indonesia!5e0!3m2!1sid!2sid!4v1691128148640!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://wa.me/+6282131222332', 'Favicon_PT-NAKAM-Foods-Indonesia_22082023083620.png', 'Taking Care Your Pets', '1723436272_d6b3d91b9e9d611985ef.jpg', '<p>West Sumatera Province</p>', '+62 821 3122 2332', 'ichacraft@gmail.com', 'All Rights Reserved. Designed with love by Me');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(5) UNSIGNED NOT NULL,
  `file_foto_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `file_foto_slider`) VALUES
(7, 'Icha-Craft_12082024093045.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
