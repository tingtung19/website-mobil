-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jun 2022 pada 16.22
-- Versi server: 10.5.15-MariaDB-cll-lve
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobs4584_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(255) DEFAULT 'administrator'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_berita`
--

CREATE TABLE `t_berita` (
  `id_berita` int(255) NOT NULL,
  `tgl_upload` date DEFAULT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `deskripsi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `id_admin` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_berita`
--

INSERT INTO `t_berita` (`id_berita`, `tgl_upload`, `judul_berita`, `deskripsi_berita`, `gambar_berita`, `id_admin`) VALUES
(1, '2020-12-31', 'Layanan HomePickup Service Honda Perkasa Klaten', 'Di tengah pandemi Corona seperti yang dialami sekarang ini, kita sebagai pemilik kendaraan memang harus ekstra hati-hati. Pemerintah mengimbau masyarakat untuk tetap berada di rumah saja serta melakukan social distancing ketika berada di luar rumah.\r\n\r\nKondisi ini tentu membuat beberapa kegiatan yang seharusnya dilakukan di luar rumah menjadi terhambat. Salah satunya, adalah perawatan berkala pada kendaraan alias servis rutin. Untuk itu maka Honda Perkasa Klaten tetap memberikan pelayanan semaksimal mungkin bagi konsumen. Salah satunya layanan Home Service dan Pickup.\r\n\r\nSeperti yang dilakukan oleh PT Honda Prospect Motor ( HPM), untuk memastikan kondisi mobil konsumennya tetap prima selama di rumah, Honda memberikan layanan home service, pick up service dan Honda exprerience. Program Home Service Honda saat ini didukung sebanyak 118 dealer di berbagai kota di Indonesia untuk melayani konsumen yang membutuhkan perawatan atau perbaikan mobil tanpa meninggalkan rumah masing-masing. \r\n\r\nUntuk memastikan kondisi mobil Anda tetap prima selama #parkirdirumah, Honda berupaya memberikan pelayanan yang aman dan nyaman melalui layanan Home Service, Pick Up Service dan Honda Experience. Layanan ini meliputi:\r\n\r\nHome Service untuk perbaikan ringan ( ganti karet wiper, ganti accu / baterai dan lain-lain)\r\nHome service untuk perawatan berkala mulai dari 0-100.000 KM (kecuali 40.000 KM, 60.000 KM, 80.000 KM)\r\nHome Service untuk PUD / Recall* \r\nPick Up Service untuk perawatan berkala dan perbaikan yang memerlukan peralatan khusus\r\nLayanan Honda Experience yakni bantuan darurat 24 jam yang meliputi penggantian ban, pengaktifan aki kendaraan, pengisian bahan bakar, serta bantuan darurat mobil derek.\r\nHonda Perkasa Klaten menyediakan layanan Pick Up Service untuk menjemput mobil pelanggan ke bengkel resmi terdekat. Sehubungan dengan kondisi saat ini, Honda juga telah menerapkan berbagai prosedur kesehatan untuk menjamin kenyamanan dan keamanan konsumen. berbagai prosedur kesehatan untuk menjamin kenyamanan dan keamanan konsumen.', 'berita1.jpeg', 1),
(2, '2020-12-31', 'Promo Akhir Taun YES “Year End Sale”', 'Spesial Promo Akhir Taun YES\r\nHallo Honda Lovers!\r\n\r\nHonda Perkasa Klaten selalu berikan layanan terbaik untuk customernya, termasuk melalui promo-promo yang ditawarkan setiap bulannya. di penghujung tahun 2020 ini Honda Perkasa Klaten sajikan promo spesial yaitu “YES” Year End Sale bagi customer melakukan pembelian unit honda. Tak hanya promo ​YES saja yang ditawarkan masih ada promo lainnya seperti promo service dan promo Honda Kreasi Plus. Nah tunggu apa lagi segera pesan kendaraanmu karena NIK 2020 sangat terbatas!! \r\n\r\nDetail Promo YES :\r\n\r\nDapatkan hadiah berupa voucher belanja senilai 3 juta atau progam hadiah berupa smart Tv/laptop tanpa diundi\r\nFree biaya perawatan berkala (perawatan berkala 50.000Km atau 4 tahun)\r\nFree kaca film*\r\nkarpet dasar*\r\nFree car wash*\r\n * Promo berlangsung dari 1 November – 30 November 2020 di dealer resmi Honda Solo Baru\r\n* Syarat dan ketentuan berlaku', 'b2.jpg', 1),
(3, '2020-12-31', 'Tips Berkendara Saat Hujan.', 'Hujan deras mengakibatkan kondisi jalanan yang licin tanpa jarak pandang dan dalam keadaan situasi seperti ini mengharuskan pengemudi menyesuaikan gaya mengemudinya, karena jika tidak akan membahaya si pengemudi itu sendiri. Kondisi cuaca hujan tidak bisa dianggap remeh. Diperlukan persiapan yang baik agar berkendara di musim hujan aman dan selamat sampai di tujuan. Berikut tips berkendara saat hujan agar aman ketika akan berkendara dalam kondisi hujan.\r\n\r\n1.) Pelan – pelan\r\nBerkendaralah dengan kecepatan yang Anda rasa paling nyaman dengan kondisi cuaca hujan. Dengan mengurangi kecepatan, Anda akan memiliki lebih banyak waktu untuk bereaksi jika mobil lain kehilangan kendali atau Anda menghadapi genangan air yang besar.\r\n\r\n2.) Waspadai hydroplaning\r\nIni adalah saat kendaraan Anda berjalan atau meluncur di atas air dan tidak ada, atau sangat sedikit, kontak dengan tanah. Jika ini terjadi, Anda kehilangan atau mengurangi traksi secara signifikan, jadi Anda tidak boleh melakukan gerakan tiba-tiba. Hal terbaik yang harus dilakukan adalah tetap tenang, melepaskan kaki Anda dari pedal gas dan kemudian mengarahkan ke arah yang Anda inginkan.\r\n\r\n3.) Gunakan Wiper Berkualitas Baik\r\nDiantara beberapa tips yang diberikan, menggunakan wiper yang berfungsi dengan baik merupakan hal yang paling penting. Wiper yang sudah getas tidak dapat menyapu seluruh permukaan kaca dari air dengan maksimal, sehingga Anda semakin sulit untuk melihat secara jelas. Untuk mengenali ciri-ciri wiper yang sudah harus diganti.\r\n\r\n4.) Ketahuilah bahwa jalan mungkin licin\r\nJika sudah beberapa lama tidak turun hujan, perlu diingat bahwa jalanan bisa jadi sangat licin. Dalam cuaca kering, oli dan gemuk mesin akan menumpuk di jalan raya, dan jika digabungkan dengan air, ini membuat perjalanan menjadi licin.\r\n\r\n5.) Jangan mengemudi pada genangan air yang besar\r\nCobalah untuk menghindari atau berbalik dan coba rute yang berbeda. Hanya dengan melihat genangan air, sulit untuk mengetahui seberapa dalam sebenarnya. Anda tidak ingin mengambil risiko melewatinya dan menabrak lubang yang dalam atau memercikkan air ke sistem kelistrikan mobil.\r\n\r\n6.) Nyalakan Headlamp dan Foglamp\r\nSelain menyalakan headlamp, foglamp atau lampu kabut juga perlu dinyalakan untuk mendukung visibilitas yang lebih baik selama berkendara.\r\n\r\n7.) Periksa rem Anda\r\nSetiap kali Anda berkendara melalui genangan air yang besar, setelah itu, ketuk pedal rem dengan lembut untuk membantu mengeringkan rotor Anda.\r\n\r\n8.) Nyalakan lampu depan Anda\r\nHal ini memungkinkan pengendara lain untuk melihat Anda dengan lebih baik. Hindari menggunakan lampu sorot tinggi karena Anda dapat membutakan pengemudi lain dan lampu ekstra akan memantul dari tetesan hujan, menyebabkan lebih banyak gangguan bagi Anda. Jika hujan menyebabkan kaca depan Anda berkabut, nyalakan alat penghilang es jendela Anda. Periksa apakah AC dihidupkan sehingga Anda dapat menghilangkan kabut sesegera mungkin.\r\n\r\n9.) Jaga jarak dari truk atau bus besar\r\nSemprotan dari ban mereka dapat menghalangi penglihatan Anda dan membuatnya sangat sulit untuk dilihat. Anda harus menghindari mengopernya, tetapi jika Anda benar-benar harus melakukannya, lakukan operan secepat mungkin.\r\n\r\n3.) Jangan Menyalakan Lampu Hazard\r\nTerkadang, kerap ditemui beberapa pengendara mobil yang menyalakan lampu hazard saat berkendara ditengah hujan. Sebenarnya, hal ini tidak perlu dilakukan. Kenapa? Lampu hazard berfungsi untuk dinyalakan saat mobil Anda harus menepi karena keadaan darurat, guna memberi aba-aba kepada pengendara lain bahwa mobil Anda sedang bermasalah. Dengan kata lain, lampu hazard lebih tepat dinyalakan saat mobil Anda dalam keadaan diam atau terparkir.\r\n\r\nSaat Anda menyalakan lampu hazard ketika mobil melaju, lampu sein otomatis tidak berfungsi dan membuat pengemudi dibelakang kebingungan karena tidak bisa menebak pergerakan mobil Anda: apakah akan berjalan lurus, berbelok ke kiri atau ke kanan, sehingga berpotensi menimbulkan kecelakaan. Cahaya dari headlamp bagian belakang sebenarnya sudah cukup untuk membuat mobil Anda terlihat oleh pengendara lain.\r\n\r\nDengan mengambil tips di atas, saat Anda terjebak dalam situasi hujan, Anda dapat tetap mengendalikan kendaraan Anda dalam situasi terburuk. Luangkan waktu Anda, bersabarlah, dan menepi jika Anda perlu. Pada waktunya, hujan kemungkinan akan reda dan Anda dapat melanjutkan perjalanan dengan aman.', 'b3.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail_tipe`
--

CREATE TABLE `t_detail_tipe` (
  `id_detail_tipe` int(255) NOT NULL,
  `id_tipe` int(255) DEFAULT NULL,
  `id_spek` int(255) DEFAULT NULL,
  `keterangan_spek` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_detail_tipe`
--

INSERT INTO `t_detail_tipe` (`id_detail_tipe`, `id_tipe`, `id_spek`, `keterangan_spek`) VALUES
(57, 20, 1, 'Manual'),
(58, 20, 2, ''),
(59, 20, 3, ''),
(60, 20, 4, ''),
(61, 20, 5, ''),
(62, 20, 6, ''),
(63, 20, 7, ''),
(64, 21, 1, ''),
(65, 21, 2, ''),
(66, 21, 3, ''),
(67, 21, 4, ''),
(68, 21, 5, ''),
(69, 21, 6, ''),
(70, 21, 7, ''),
(71, 22, 1, ''),
(72, 22, 2, ''),
(73, 22, 3, ''),
(74, 22, 4, ''),
(75, 22, 5, ''),
(76, 22, 6, ''),
(77, 22, 7, ''),
(78, 23, 1, ''),
(79, 23, 2, ''),
(80, 23, 3, ''),
(81, 23, 4, ''),
(82, 23, 5, ''),
(83, 23, 6, ''),
(84, 23, 7, ''),
(85, 24, 1, ''),
(86, 24, 2, ''),
(87, 24, 3, ''),
(88, 24, 4, ''),
(89, 24, 5, ''),
(90, 24, 6, ''),
(91, 24, 7, ''),
(92, 25, 1, 'MANUAL'),
(93, 25, 2, ''),
(94, 25, 3, ''),
(95, 25, 4, ''),
(96, 25, 5, ''),
(97, 25, 6, ''),
(98, 25, 7, ''),
(99, 26, 1, ''),
(100, 26, 2, ''),
(101, 26, 3, ''),
(102, 26, 4, ''),
(103, 26, 5, ''),
(104, 26, 6, ''),
(105, 26, 7, ''),
(106, 27, 1, ''),
(107, 27, 2, ''),
(108, 27, 3, ''),
(109, 27, 4, ''),
(110, 27, 5, ''),
(111, 27, 6, ''),
(112, 27, 7, ''),
(113, 28, 1, ''),
(114, 28, 2, ''),
(115, 28, 3, ''),
(116, 28, 4, ''),
(117, 28, 5, ''),
(118, 28, 6, ''),
(119, 28, 7, ''),
(120, 29, 1, ''),
(121, 29, 2, ''),
(122, 29, 3, ''),
(123, 29, 4, ''),
(124, 29, 5, ''),
(125, 29, 6, ''),
(126, 29, 7, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_gambar`
--

CREATE TABLE `t_gambar` (
  `id_gambar` int(10) NOT NULL,
  `id_mobil` int(10) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_gambar`
--

INSERT INTO `t_gambar` (`id_gambar`, `id_mobil`, `gambar`) VALUES
(2, 2, '12345678903.jpg'),
(3, 1, '12345678902.jpg'),
(4, 1, '12345678901.jpg'),
(16, 6, '1611804040u5oaWO5J6Tc0TVQ7sxOl_honda_id_lunar_silver.png'),
(17, 6, '16118040406Rl09les4aKoSLAfrSLM_honda_id_dark_olive_metalic.png'),
(18, 6, '1611804040ZdIsItPF1E2Ejk8jGzvD_honda_id_modern_steel.png'),
(19, 6, '1611804040bjVX2LSdiN2BNWwtAuvC_honda_id_white_orchid_pearl....png'),
(20, 6, '16118040408u3zDRmSlt9Em9UvR4YJ_honda_id_crystal_black.png'),
(21, 6, '161180404092Yod2NlKLEcNLBjNwel_honda_id_rallye_red.png'),
(22, 6, '1611804040zoeyDM3Ig0R87sXVXec6_honda_id_brownish_amethyst.png'),
(23, 7, '1611805424sFNGlssyRlXYTn5CJW1P_honda_id_crystalblackpearl.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(255) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'City Car'),
(2, 'MPV'),
(3, 'Sedan'),
(4, 'Sport Car'),
(5, 'SUV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mobil`
--

CREATE TABLE `t_mobil` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `id_kategori` int(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_mobil`
--

INSERT INTO `t_mobil` (`id_mobil`, `nama_mobil`, `id_kategori`, `deskripsi`) VALUES
(1, 'New Jazz', 1, 'Live Up The Hype! Kini saatnya kamu tampil lebih stylish and always set the newest hype with New Honda Jazz .\r\nSUPERB YET COMFORTABLE. Let step into the hype, nikmati desain sporty dan modern di dalam kabin yang didesain luas, serta berlapis material yang berkelas, memberikan keleluasaan sekaligus kenyamanan saat Kamu berkendara.\r\n\r\nPOWERFUL YET EXCITING. Rasakan ketangguhan performa New Honda Jazz yang membangkitkan keseruan Kamu saat berkendara.\r\n\r\nPRIORITY SAFETY. Bagi Honda kegembiraan dan keseruan berkendara, harus didukung dengan sistem keselamatan yang baik. Inilah prioritas Honda yang hadir pada New Honda Jazz, memberikan perlindungan optimal untuk Kamu saat berkendara.'),
(2, 'All New Brio', 1, 'LET’S BREAK THE ORDINARY WITH THE INTERNATIONAL QUALITY, SPORTY AND BIGGER ALL NEW HONDA BRIO!\r\n\r\nAll New Honda Brio Satya sangat pas untuk kamu yang selalu tampil stylish dan All New Honda Brio RS cocok buat kamu yang berjiwa sporty. Whatever, whenever, however. Break out, break free with All New Honda Brio!\r\n\r\nFABULOUS DESIGN. Start your fun with All New Honda Brio Satya! Pilihan trendy dan stylish untuk have fun bareng sama teman atau keluarga. All New Honda Brio RS untuk kamu yang suka dengan sensasi berkendara bergaya sporty dan lebih seru. Driving has never been this fun!\r\n\r\nAWESOME PERFORMANCE. Feel the maximum power! Pacu adrenalin kamu dengan gaya sporty namun tetap stylish dengan All New Honda Brio!\r\n\r\nSAFETY PROTECTION. Safety is our priority. Karena keselamatan adalah hal yang penting untuk kamu yang bergaya hidup sangat aktif. All New Honda Brio dilengkapi dengan fitur keselamatan yang baik sehingga memberikan rasa lebih aman dalam berkendara.'),
(6, 'HR-V', 5, 'NOTHING BUT OUTSTANDING\r\nBersiaplah merasakan impresi dan sensasi berkendara yang outstanding dari salah satu SUV terbaik dari Honda! Inilah simbol ketangguhan yang semakin menggoda, menjadikan siapapun pengendaranya, stand out di segala suasana. 										\r\n											'),
(7, 'MOBILIO', 1, 'TAMPILAN BARU HONDA MOBILIO MEMBUATNYA MENJADI PARTNER YANG STYLISH, MOBIL KELUARGA YANG SELALU ATRAKTIF DALAM SEGALA AKTIFITAS ANDA									\r\n											');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_profil`
--

CREATE TABLE `t_profil` (
  `id_profil` int(2) NOT NULL,
  `nama_profil` varchar(100) DEFAULT NULL,
  `deskripsi_profil` text DEFAULT NULL,
  `alamat_profil` text DEFAULT NULL,
  `email_profil` varchar(50) DEFAULT NULL,
  `nohp_profil` varchar(50) DEFAULT NULL,
  `file_profil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_profil`
--

INSERT INTO `t_profil` (`id_profil`, `nama_profil`, `deskripsi_profil`, `alamat_profil`, `email_profil`, `nohp_profil`, `file_profil`) VALUES
(1, 'Honda Perkasa Klaten', '<p>Dealer Resmi Honda</p>\r\n\r\n<p style=\"text-align:justify\">Dealer Honda Perkasa Klaten merupakan dealer resmi mobil honda di wilayah Klaten yang menawarkan transaksi jual beli mobil honda, service mobil honda, jual beli sparepart genuine mobil honda dan layanan body repair yang terpercaya. Dapatkan informasi terbaru di official website kami. Ayo buruan beli atau service mobil di dealer honda klaten kamu sekarang.</p>\r\n\r\n<p style=\"text-align:justify\">Transaksi Jual Beli Lebih Mudah dan Cepat</p>\r\n\r\n<p style=\"text-align:justify\">Dealer kami menyediakan sarana yang tepat untuk mendukung penjualan mobil honda dengan E-SPK (elektronik surat pemesanan kendaraan). Dengan mendukung pembayaran virtual account menjadikan transaksi dengan kami lebih mudah sehingga membantu admin mempersiapkan unit mobil yang Anda beli dengan lebih cepat.</p>\r\n\r\n<p style=\"text-align:justify\">Memberikan Banyak Promo Setiap Saat</p>\r\n\r\n<p style=\"text-align:justify\">Semua orang menyukai promo ataupun potongan harga. Dealer kami selalu menghadirkan program promo setiap bulannya, baik promo penjualan unit, promo service, maupun promo body repair.</p>', 'PT Bintang Putra Mobilindo, JL. Raya Solo - Jogja No.168 Tangkisan Pos, Jogonalan, Klaten, Jawa Tengah 57452', 'santi.hpk@gmail.com', '082116222882', 'IMG_20181219_154608_622.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_spek`
--

CREATE TABLE `t_spek` (
  `id_spek` int(255) NOT NULL,
  `nama_spek` varchar(255) DEFAULT NULL,
  `no_urut` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_spek`
--

INSERT INTO `t_spek` (`id_spek`, `nama_spek`, `no_urut`) VALUES
(1, 'Transmisi', NULL),
(2, 'Bahan Bakar', NULL),
(3, 'Kapasitas Tangki', NULL),
(4, 'Seat', NULL),
(5, 'Power Steering', NULL),
(6, 'Ban', NULL),
(7, 'Velg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tipe`
--

CREATE TABLE `t_tipe` (
  `id_tipe` int(255) NOT NULL,
  `id_mobil` varchar(255) DEFAULT NULL,
  `nama_tipe` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_tipe`
--

INSERT INTO `t_tipe` (`id_tipe`, `id_mobil`, `nama_tipe`, `harga`) VALUES
(11, '1', 'Jazz MT', '225000000'),
(12, '1', 'Jazz RS', '290000000'),
(13, '1', 'Jazz RS CVT', '300000000'),
(20, '2', 'BRIO SATYA S MT', '153500000'),
(21, '2', 'BRIO SATYA E MT', '162000000'),
(22, '2', 'BRIO SATYA E CVT', '178000000'),
(23, '2', 'BRIO SATYA RS MT', '191500000'),
(24, '2', 'BRIO SATYA RS CVT', '207000000'),
(25, '6', 'HR-V 1.5L S M/T', '307000000'),
(26, '6', 'HR-V 1.5L S CVT', '318000000'),
(27, '6', 'HR-V 1.5L E CVT', '342000000'),
(28, '6', 'HR-V 1.5L E CVT Special Edition', '352750000'),
(29, '6', 'HR-V 1.8L Prestige', '428000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`) USING BTREE;

--
-- Indeks untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`) USING BTREE;

--
-- Indeks untuk tabel `t_detail_tipe`
--
ALTER TABLE `t_detail_tipe`
  ADD PRIMARY KEY (`id_detail_tipe`) USING BTREE;

--
-- Indeks untuk tabel `t_gambar`
--
ALTER TABLE `t_gambar`
  ADD PRIMARY KEY (`id_gambar`) USING BTREE;

--
-- Indeks untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indeks untuk tabel `t_mobil`
--
ALTER TABLE `t_mobil`
  ADD PRIMARY KEY (`id_mobil`) USING BTREE;

--
-- Indeks untuk tabel `t_profil`
--
ALTER TABLE `t_profil`
  ADD PRIMARY KEY (`id_profil`) USING BTREE;

--
-- Indeks untuk tabel `t_spek`
--
ALTER TABLE `t_spek`
  ADD PRIMARY KEY (`id_spek`) USING BTREE;

--
-- Indeks untuk tabel `t_tipe`
--
ALTER TABLE `t_tipe`
  ADD PRIMARY KEY (`id_tipe`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_detail_tipe`
--
ALTER TABLE `t_detail_tipe`
  MODIFY `id_detail_tipe` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `t_gambar`
--
ALTER TABLE `t_gambar`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `t_mobil`
--
ALTER TABLE `t_mobil`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_profil`
--
ALTER TABLE `t_profil`
  MODIFY `id_profil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_spek`
--
ALTER TABLE `t_spek`
  MODIFY `id_spek` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `t_tipe`
--
ALTER TABLE `t_tipe`
  MODIFY `id_tipe` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
