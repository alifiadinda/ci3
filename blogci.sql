-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 02:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogci`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `tanggal_blog` date NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `lokasi_penulisan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `tanggal_blog`, `content`, `image`, `penulis`, `sumber`, `lokasi_penulisan`) VALUES
(1, 'Sejarah Penyebaran Kopi', '2018-04-10', 'Biji tanaman kopi dipanggang lalu dihaluskan dan dihidangkan. Metode pemanggangan biji kopi sendiri belum diketahui kapan dimulainya. Namun tanaman kopi berasal dari dataran tinggi di Ethiopia, yang pada saat itu merupakan tanaman liar di Ethiopia. Lalu tanaman kopi dari sini dikembangkan di Semenanjung Arab sekitar abad ke-15, yang terkenal menjadi Kopi Arabika. Kopi Arabika saat ini menjadi jenis kopi yang paling banyak diproduksi di dunia yaitu mencapai lebih dari 60 persen produksi kopi dunia.\r\n\r\nMenurut legenda, kopi ditemukan oleh seorang pemuda Arab bernama Kaldi, seorang penggembala kambing. Ia selalu memperhatikan bahwa kambingnya selalu menunjukkan gejala gembira setelah menggigit biji dan daun suatu tanaman hijau. Karena penasaran, ia mencoba biji tanaman tersebut dan merasakan efek semangat serta gembira. Akhirnya penemuan ini menyebar dari mulut ke mulut, sejak itu lahirlah kopi menurut legenda di Arab.\r\n\r\nPada tahun 1610, tanaman kopi pertama ditanam di daerah India. Bangsa Belanda mulai mempelajari pengembangbiakan kopi pada tahun 1614. Lalu pada tahun 1616, mereka berhasil memperoleh bibit dan tanaman kopi yang subur dan langsung mendirikan perkebunan kopi di Srilanka dan tanah Jawa (Indonesia) pada tahun 1699. Kemudian oleh bangsa Belanda, tanaman ini disebar ke koloni Belanda di Amerika Tengah seperti di Suriname dan Kepulauan Karibia. Kemudian bangsa Perancis juga tertarik dengan perdagangan kopi ini. Mereka membeli bibit kopi dari Belanda lalu dikembangkan di Pulau Réunion sebelah timur Madagaskar. Namun mereka gagal mengembangkan kopi di sini. Lalu pada tahun 1723, bangsa Perancis mencoba mengembangkan tanaman kopi di daerah Pulau Martinik. Pada tahun 1800-an, tanaman kopi dikembangkan di Hawaii. Belakangan tanaman ini juga dikembangkan di Brasil dan daerah-daerah lainnya.', 'kopi.jpg', 'alifia', 'www.kopi.com', 'kediri'),
(6, 'Berbagai Macam Kegunaan Kopi', '2018-01-11', 'Berbagai rasa kopi yang khas membuat sensasi menyenangkan di mulut. Misalnya es kopi atau iced coffee yang manis biasanya menyegarkan. Es krim rasa kopi pun juga menjadi favorit bagi banyak orang. Kopi juga menjadi salah satu bahan dasar beberapa jenis kue rasa kopi. Dan yang paling populer adalah kopi polos dan juga kopi susu.  Namun para ilmuwan juga menyelediki manfaat lain dari kopi. Sisa bubuk dari kopi bermanfaat sebagai pupuk yang baik. Selain itu, beberapa produk disinfektan maupun isolasi untuk dinding, lantai dan atap juga dapat dibuat dari kopi. Gliserin yang merupakan produk sampingan dari sabun, dapat dibuat dari minyak kopi. Minyak kopi juga biasa digunakan sebagai bahan pembuat cat, sabun, maupun produk lainnya.  Biji kopi dapat bermanfaat untuk berbagai produk dan kegunaan. Namun yang paling populer tentu saja sebagai minuman yang nikmat yang diminum banyak orang setiap harinya.', 'kopi21112.png', 'alifia', 'www.kopi.com', 'malang'),
(8, 'perubahan2222', '2019-12-02', 'perubahan', 'kopi211121.png', 'alifiat', 'www.kopi.com', 'malang');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
