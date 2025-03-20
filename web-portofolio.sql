-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2025 at 01:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `title`, `description`, `image`, `link`) VALUES
(1, 0, 'Pengertian dan sejarah website', 'Website adalah keseluruhan halaman-halaman web yang terdapat dari sebuah domain \r\nyang mengandung informasi. Sebuah website biasanya dibangun atas banyak halaman web yang \r\nsaling berhubungan. Hubungan antara satu halaman web dengan halaman web yang lainnya, \r\natau antar bagian dalam halaman web yang sama disebut dengan Hyperlink sedangkan teks yang \r\ndijadikan media penghubung disebut Hypertext. Sebuah website dapat diakses melalui browser, \r\nyaitu perangkat lunak untuk mengakses halaman-halaman web, seperti Internet explorer, mozilla \r\nfirefox, opera, safari, chrome dan lain-lain.\r\n\r\nWebsite dapat berjalan di internet seperti saat sekarang ini tidak lain adalah berkat \r\npenemuan teknologi yang disebut HTML oleh Tim Barners Lee pada tahun 1989. Tim Barners Lee \r\nadalah salah seorang staff ahli dari CERN (Conseil Europeen pour la Recherche Nucleaire), sebuah \r\norganisasi penelitian yang berlokasi di Jenewa, Swiss. HTML adalah singkatan dari HyperText \r\nMarkup Language yang merupakan suatu bahasa semi pemrograman yang menjadi dasar \r\nterwujudnya website.', 'images.jpeg', 'https://www.hostinger.com/id/tutorial/website-adalah?utm_medium=ppc&amp;amp;utm_campaign=Generic-Tutorials-DSA|NT:Se|LO:ID-Niaga&amp;amp;gad_source=1&amp;amp;gclid=Cj0KCQjw-e6-BhDmARIsAOxxlxUanU93bDqLbflPPMRmVpqu4WmKELIPEcXamZVdZ-gKSmjqjWuuTbsaAioyEALw_wc'),
(2, 0, 'Teknologi Website', 'Perkembangan teknologi dibidang website terus diexplore hingga saat ini telah mulai \r\nmemasuki teknologi yang disebut dengan web 4.0. Pada tahun 1994 dibentuklah W3C (World \r\nWide Web Consorsium) sebagai otoritas tunggal bagi pengembangan web serta berwenang \r\nmenetapkan stkitar yang berlaku di dalamnya. Perkembangan teknologi website hingga saat ini.\r\n\r\nSejarah dikembangkannya teknologi website bermula pada awal tahun 1990-an, di mana pada kala itu Tim Berners-Lee, seorang ilmuwan komputer di CERN, menciptakan “World Wide Web (WWW)”, browser web pertama yang juga berfungsi sebagai editor web.\r\n\r\nSejarah teknologi website tahap awal berlanjut dengan dikenalkannya bahasan standar HTML (Hypertext Markup Language) dan juga HTTP (Hypertext Transfer Protocol) sebagai protokol dalam berkomunikasi. Pada sekitaran tahun ini juga, diluncurkan browser “Mosaic” yang mampu menampilkan gambar yang inline dengan teks.\r\n\r\nPerkembangan pun berlanjut hingga tahun 2000-an, ditandai dengan diperkenalkannya browser Netscape Navigator dan juga berbagai bahasa pemrograman baru seperti CSS (Cascading Style Sheets), JavaScript, PHP (Hypertext Preprocessor), serta ASP (Active Server Pages).\r\n\r\nMasuk ke era modern mulai dari tahun 2000-an hingga sekarang, sejarah perkembangan website pun berjalan cukup cepat, ditandai dengan diperkenalkannya HTM5, CSS3, HTTP/2, Responsive Design, hingga teknologi AI, Cloud, dan Blockchain pada suatu website.', 'images (1).jpeg', 'https://salt.id/id-id/blog/teknologi-website-development-dan-tren-terkini'),
(3, 0, 'Bahasa Pemrograman Website', 'Bahasa pemrograman web yang paling umum digunakan meliputi HTML (untuk struktur), CSS (untuk tampilan), dan JavaScript (untuk interaktivitas). Selain itu, bahasa seperti PHP, Python, dan Java juga populer untuk pengembangan web backend. \r\nBerikut adalah penjelasan lebih detail:\r\nHTML (HyperText Markup Language): Bahasa dasar untuk struktur dan konten halaman web. \r\nCSS (Cascading Style Sheets): Digunakan untuk mengatur tampilan visual, seperti warna, font, dan tata letak. \r\nJavaScript: Memberikan interaktivitas pada halaman web, seperti tombol yang dapat diklik atau animasi. \r\nPHP (Hypertext Preprocessor): Bahasa server-side yang populer untuk pengembangan web dinamis. \r\nPython: Bahasa pemrograman yang fleksibel dan mudah dipelajari, sering digunakan untuk pengembangan web backend. \r\nJava: Bahasa yang kuat dan serbaguna, digunakan untuk berbagai aplikasi, termasuk pengembangan web. \r\nContoh lain bahasa pemrograman web:\r\nSQL: Bahasa untuk berinteraksi dengan database. \r\nASP: Bahasa server-side yang dikembangkan oleh Microsoft. \r\nPerl: Bahasa pemrograman yang fleksibel dan sering digunakan untuk pengembangan web. \r\nC#: Bahasa yang dikembangkan oleh Microsoft, digunakan untuk pengembangan web backend. \r\nKotlin: Bahasa yang populer untuk pengembangan Android, juga mulai digunakan untuk web backend. \r\nGo: Bahasa yang dikembangkan oleh Google, populer untuk pengembangan web backend. ', 'pemrograman-web.jpg', 'https://baraka.uma.ac.id/beragam-bahasa-pemrograman-web-dan-penggunaannya/'),
(4, 0, 'EVALUASI praktek mengerjakan script HTML dan Install VSCODE', 'Cara install Visual Studio Code :\r\n1. Pertama kita harus download terlebih dahulu file instaler Visual Studio Code melalui situs\r\nresminya https://code.visualstudio.com/\r\n2. Setelah berhasil di download, lanjut ke proses instalasi. Double klik pada file installernya\r\natau klik kanan kemudian pilih Run as Administrator\r\n3. Jika muncul peringatan Run as Administrator, silahkan klik Yes\r\n4. Pilih “I accept the aggrement” untuk menyetujui “License Agreement”, kemudian klik next hingga finish\r\n5. Cara membuka\r\nFile script HTML yang akan dibuat sebelumnya, dapat diedit kembali dengan cara :\r\n• Aktifkan terlebih dahulu Visual Studio Code\r\nDari menu yang ada, klik menu File-&gt;Open Folder, dari jendela yang muncul pilih \r\nfolder lokasi dari file tersebut, kemudian pilih file yang akan dibuka/diedit, maka \r\nscript tersebut akan kembali tampil dan dapat kita edit kembali.\r\n6. Cara Menyimpan Script\r\nSetelah selesai menulis script, maka kita harus menyimpannya terlebih dahulu, agar nanti \r\njika ada perbaikan kita dapat mengeditnya kembali, dengan cara File-Save atau Ctrl + S\r\n\r\n BUKA LINK DI BAWAH INI UNTUK MENDOWNLOAD VSCODE', 'temas-vscode.png', 'https://code.visualstudio.com/');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES
(2, 'nasy', 'nasy123', 'nasy@gmail.com', 'admin', '2025-03-20 10:43:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session_token` (`session_token`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
