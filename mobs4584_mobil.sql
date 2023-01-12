/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : mobs4584_mobil

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-01-12 10:54:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_admin
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(255) DEFAULT 'administrator',
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_admin
-- ----------------------------
INSERT INTO `t_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator');

-- ----------------------------
-- Table structure for t_berita
-- ----------------------------
DROP TABLE IF EXISTS `t_berita`;
CREATE TABLE `t_berita` (
  `id_berita` int(255) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date DEFAULT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `deskripsi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `id_admin` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_berita`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_berita
-- ----------------------------
INSERT INTO `t_berita` VALUES ('1', '2020-12-31', 'Layanan HomePickup Service Honda Perkasa Klaten', 'Di tengah pandemi Corona seperti yang dialami sekarang ini, kita sebagai pemilik kendaraan memang harus ekstra hati-hati. Pemerintah mengimbau masyarakat untuk tetap berada di rumah saja serta melakukan social distancing ketika berada di luar rumah.\r\n\r\nKondisi ini tentu membuat beberapa kegiatan yang seharusnya dilakukan di luar rumah menjadi terhambat. Salah satunya, adalah perawatan berkala pada kendaraan alias servis rutin. Untuk itu maka Honda Perkasa Klaten tetap memberikan pelayanan semaksimal mungkin bagi konsumen. Salah satunya layanan Home Service dan Pickup.\r\n\r\nSeperti yang dilakukan oleh PT Honda Prospect Motor ( HPM), untuk memastikan kondisi mobil konsumennya tetap prima selama di rumah, Honda memberikan layanan home service, pick up service dan Honda exprerience. Program Home Service Honda saat ini didukung sebanyak 118 dealer di berbagai kota di Indonesia untuk melayani konsumen yang membutuhkan perawatan atau perbaikan mobil tanpa meninggalkan rumah masing-masing. \r\n\r\nUntuk memastikan kondisi mobil Anda tetap prima selama #parkirdirumah, Honda berupaya memberikan pelayanan yang aman dan nyaman melalui layanan Home Service, Pick Up Service dan Honda Experience. Layanan ini meliputi:\r\n\r\nHome Service untuk perbaikan ringan ( ganti karet wiper, ganti accu / baterai dan lain-lain)\r\nHome service untuk perawatan berkala mulai dari 0-100.000 KM (kecuali 40.000 KM, 60.000 KM, 80.000 KM)\r\nHome Service untuk PUD / Recall* \r\nPick Up Service untuk perawatan berkala dan perbaikan yang memerlukan peralatan khusus\r\nLayanan Honda Experience yakni bantuan darurat 24 jam yang meliputi penggantian ban, pengaktifan aki kendaraan, pengisian bahan bakar, serta bantuan darurat mobil derek.\r\nHonda Perkasa Klaten menyediakan layanan Pick Up Service untuk menjemput mobil pelanggan ke bengkel resmi terdekat. Sehubungan dengan kondisi saat ini, Honda juga telah menerapkan berbagai prosedur kesehatan untuk menjamin kenyamanan dan keamanan konsumen. berbagai prosedur kesehatan untuk menjamin kenyamanan dan keamanan konsumen.', 'berita1.jpeg', '1');
INSERT INTO `t_berita` VALUES ('2', '2020-12-31', 'Promo Akhir Taun YES “Year End Sale”', 'Spesial Promo Akhir Taun YES\r\nHallo Honda Lovers!\r\n\r\nHonda Perkasa Klaten selalu berikan layanan terbaik untuk customernya, termasuk melalui promo-promo yang ditawarkan setiap bulannya. di penghujung tahun 2020 ini Honda Perkasa Klaten sajikan promo spesial yaitu “YES” Year End Sale bagi customer melakukan pembelian unit honda. Tak hanya promo ​YES saja yang ditawarkan masih ada promo lainnya seperti promo service dan promo Honda Kreasi Plus. Nah tunggu apa lagi segera pesan kendaraanmu karena NIK 2020 sangat terbatas!! \r\n\r\nDetail Promo YES :\r\n\r\nDapatkan hadiah berupa voucher belanja senilai 3 juta atau progam hadiah berupa smart Tv/laptop tanpa diundi\r\nFree biaya perawatan berkala (perawatan berkala 50.000Km atau 4 tahun)\r\nFree kaca film*\r\nkarpet dasar*\r\nFree car wash*\r\n * Promo berlangsung dari 1 November – 30 November 2020 di dealer resmi Honda Solo Baru\r\n* Syarat dan ketentuan berlaku', 'b2.jpg', '1');
INSERT INTO `t_berita` VALUES ('3', '2020-12-31', 'Tips Berkendara Saat Hujan.', 'Hujan deras mengakibatkan kondisi jalanan yang licin tanpa jarak pandang dan dalam keadaan situasi seperti ini mengharuskan pengemudi menyesuaikan gaya mengemudinya, karena jika tidak akan membahaya si pengemudi itu sendiri. Kondisi cuaca hujan tidak bisa dianggap remeh. Diperlukan persiapan yang baik agar berkendara di musim hujan aman dan selamat sampai di tujuan. Berikut tips berkendara saat hujan agar aman ketika akan berkendara dalam kondisi hujan.\r\n\r\n1.) Pelan – pelan\r\nBerkendaralah dengan kecepatan yang Anda rasa paling nyaman dengan kondisi cuaca hujan. Dengan mengurangi kecepatan, Anda akan memiliki lebih banyak waktu untuk bereaksi jika mobil lain kehilangan kendali atau Anda menghadapi genangan air yang besar.\r\n\r\n2.) Waspadai hydroplaning\r\nIni adalah saat kendaraan Anda berjalan atau meluncur di atas air dan tidak ada, atau sangat sedikit, kontak dengan tanah. Jika ini terjadi, Anda kehilangan atau mengurangi traksi secara signifikan, jadi Anda tidak boleh melakukan gerakan tiba-tiba. Hal terbaik yang harus dilakukan adalah tetap tenang, melepaskan kaki Anda dari pedal gas dan kemudian mengarahkan ke arah yang Anda inginkan.\r\n\r\n3.) Gunakan Wiper Berkualitas Baik\r\nDiantara beberapa tips yang diberikan, menggunakan wiper yang berfungsi dengan baik merupakan hal yang paling penting. Wiper yang sudah getas tidak dapat menyapu seluruh permukaan kaca dari air dengan maksimal, sehingga Anda semakin sulit untuk melihat secara jelas. Untuk mengenali ciri-ciri wiper yang sudah harus diganti.\r\n\r\n4.) Ketahuilah bahwa jalan mungkin licin\r\nJika sudah beberapa lama tidak turun hujan, perlu diingat bahwa jalanan bisa jadi sangat licin. Dalam cuaca kering, oli dan gemuk mesin akan menumpuk di jalan raya, dan jika digabungkan dengan air, ini membuat perjalanan menjadi licin.\r\n\r\n5.) Jangan mengemudi pada genangan air yang besar\r\nCobalah untuk menghindari atau berbalik dan coba rute yang berbeda. Hanya dengan melihat genangan air, sulit untuk mengetahui seberapa dalam sebenarnya. Anda tidak ingin mengambil risiko melewatinya dan menabrak lubang yang dalam atau memercikkan air ke sistem kelistrikan mobil.\r\n\r\n6.) Nyalakan Headlamp dan Foglamp\r\nSelain menyalakan headlamp, foglamp atau lampu kabut juga perlu dinyalakan untuk mendukung visibilitas yang lebih baik selama berkendara.\r\n\r\n7.) Periksa rem Anda\r\nSetiap kali Anda berkendara melalui genangan air yang besar, setelah itu, ketuk pedal rem dengan lembut untuk membantu mengeringkan rotor Anda.\r\n\r\n8.) Nyalakan lampu depan Anda\r\nHal ini memungkinkan pengendara lain untuk melihat Anda dengan lebih baik. Hindari menggunakan lampu sorot tinggi karena Anda dapat membutakan pengemudi lain dan lampu ekstra akan memantul dari tetesan hujan, menyebabkan lebih banyak gangguan bagi Anda. Jika hujan menyebabkan kaca depan Anda berkabut, nyalakan alat penghilang es jendela Anda. Periksa apakah AC dihidupkan sehingga Anda dapat menghilangkan kabut sesegera mungkin.\r\n\r\n9.) Jaga jarak dari truk atau bus besar\r\nSemprotan dari ban mereka dapat menghalangi penglihatan Anda dan membuatnya sangat sulit untuk dilihat. Anda harus menghindari mengopernya, tetapi jika Anda benar-benar harus melakukannya, lakukan operan secepat mungkin.\r\n\r\n3.) Jangan Menyalakan Lampu Hazard\r\nTerkadang, kerap ditemui beberapa pengendara mobil yang menyalakan lampu hazard saat berkendara ditengah hujan. Sebenarnya, hal ini tidak perlu dilakukan. Kenapa? Lampu hazard berfungsi untuk dinyalakan saat mobil Anda harus menepi karena keadaan darurat, guna memberi aba-aba kepada pengendara lain bahwa mobil Anda sedang bermasalah. Dengan kata lain, lampu hazard lebih tepat dinyalakan saat mobil Anda dalam keadaan diam atau terparkir.\r\n\r\nSaat Anda menyalakan lampu hazard ketika mobil melaju, lampu sein otomatis tidak berfungsi dan membuat pengemudi dibelakang kebingungan karena tidak bisa menebak pergerakan mobil Anda: apakah akan berjalan lurus, berbelok ke kiri atau ke kanan, sehingga berpotensi menimbulkan kecelakaan. Cahaya dari headlamp bagian belakang sebenarnya sudah cukup untuk membuat mobil Anda terlihat oleh pengendara lain.\r\n\r\nDengan mengambil tips di atas, saat Anda terjebak dalam situasi hujan, Anda dapat tetap mengendalikan kendaraan Anda dalam situasi terburuk. Luangkan waktu Anda, bersabarlah, dan menepi jika Anda perlu. Pada waktunya, hujan kemungkinan akan reda dan Anda dapat melanjutkan perjalanan dengan aman.', 'b3.jpg', '1');

-- ----------------------------
-- Table structure for t_bobot
-- ----------------------------
DROP TABLE IF EXISTS `t_bobot`;
CREATE TABLE `t_bobot` (
  `id_bobot` int(255) NOT NULL AUTO_INCREMENT,
  `id_mobil` int(10) DEFAULT NULL,
  `id_kriteria` varchar(50) DEFAULT NULL,
  `id_detail_kriteria` int(10) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of t_bobot
-- ----------------------------

-- ----------------------------
-- Table structure for t_detail_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `t_detail_kriteria`;
CREATE TABLE `t_detail_kriteria` (
  `id_detail_kriteria` int(255) NOT NULL AUTO_INCREMENT,
  `id_kriteria` varchar(50) DEFAULT NULL,
  `nama_detail_kriteria` varchar(100) DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_detail_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of t_detail_kriteria
-- ----------------------------
INSERT INTO `t_detail_kriteria` VALUES ('1', 'C1', '< 10 km', 'tinggi');
INSERT INTO `t_detail_kriteria` VALUES ('2', 'C1', ' 10 km - 20 Km', 'sedang');
INSERT INTO `t_detail_kriteria` VALUES ('3', 'C1', '> 20 km', 'rendah');
INSERT INTO `t_detail_kriteria` VALUES ('4', 'C2', 'Lengkap kualitas bagus', 'tinggi');
INSERT INTO `t_detail_kriteria` VALUES ('5', 'C2', 'Lengkap kualitas sedang', 'sedang');
INSERT INTO `t_detail_kriteria` VALUES ('6', 'C2', 'Lengkap kualitas biasa', 'rendah');

-- ----------------------------
-- Table structure for t_detail_tipe
-- ----------------------------
DROP TABLE IF EXISTS `t_detail_tipe`;
CREATE TABLE `t_detail_tipe` (
  `id_detail_tipe` int(255) NOT NULL AUTO_INCREMENT,
  `id_tipe` int(255) DEFAULT NULL,
  `id_spek` int(255) DEFAULT NULL,
  `keterangan_spek` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_detail_tipe`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_detail_tipe
-- ----------------------------
INSERT INTO `t_detail_tipe` VALUES ('57', '20', '1', 'Manual');
INSERT INTO `t_detail_tipe` VALUES ('58', '20', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('59', '20', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('60', '20', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('61', '20', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('62', '20', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('63', '20', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('64', '21', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('65', '21', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('66', '21', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('67', '21', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('68', '21', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('69', '21', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('70', '21', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('71', '22', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('72', '22', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('73', '22', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('74', '22', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('75', '22', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('76', '22', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('77', '22', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('78', '23', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('79', '23', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('80', '23', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('81', '23', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('82', '23', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('83', '23', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('84', '23', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('85', '24', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('86', '24', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('87', '24', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('88', '24', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('89', '24', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('90', '24', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('91', '24', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('92', '25', '1', 'MANUAL');
INSERT INTO `t_detail_tipe` VALUES ('93', '25', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('94', '25', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('95', '25', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('96', '25', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('97', '25', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('98', '25', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('99', '26', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('100', '26', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('101', '26', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('102', '26', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('103', '26', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('104', '26', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('105', '26', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('106', '27', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('107', '27', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('108', '27', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('109', '27', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('110', '27', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('111', '27', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('112', '27', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('113', '28', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('114', '28', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('115', '28', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('116', '28', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('117', '28', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('118', '28', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('119', '28', '7', '');
INSERT INTO `t_detail_tipe` VALUES ('120', '29', '1', '');
INSERT INTO `t_detail_tipe` VALUES ('121', '29', '2', '');
INSERT INTO `t_detail_tipe` VALUES ('122', '29', '3', '');
INSERT INTO `t_detail_tipe` VALUES ('123', '29', '4', '');
INSERT INTO `t_detail_tipe` VALUES ('124', '29', '5', '');
INSERT INTO `t_detail_tipe` VALUES ('125', '29', '6', '');
INSERT INTO `t_detail_tipe` VALUES ('126', '29', '7', '');

-- ----------------------------
-- Table structure for t_gambar
-- ----------------------------
DROP TABLE IF EXISTS `t_gambar`;
CREATE TABLE `t_gambar` (
  `id_gambar` int(10) NOT NULL AUTO_INCREMENT,
  `id_mobil` int(10) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_gambar`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_gambar
-- ----------------------------
INSERT INTO `t_gambar` VALUES ('2', '2', '12345678903.jpg');
INSERT INTO `t_gambar` VALUES ('3', '1', '12345678902.jpg');
INSERT INTO `t_gambar` VALUES ('4', '1', '12345678901.jpg');
INSERT INTO `t_gambar` VALUES ('16', '6', '1611804040u5oaWO5J6Tc0TVQ7sxOl_honda_id_lunar_silver.png');
INSERT INTO `t_gambar` VALUES ('17', '6', '16118040406Rl09les4aKoSLAfrSLM_honda_id_dark_olive_metalic.png');
INSERT INTO `t_gambar` VALUES ('18', '6', '1611804040ZdIsItPF1E2Ejk8jGzvD_honda_id_modern_steel.png');
INSERT INTO `t_gambar` VALUES ('19', '6', '1611804040bjVX2LSdiN2BNWwtAuvC_honda_id_white_orchid_pearl....png');
INSERT INTO `t_gambar` VALUES ('20', '6', '16118040408u3zDRmSlt9Em9UvR4YJ_honda_id_crystal_black.png');
INSERT INTO `t_gambar` VALUES ('21', '6', '161180404092Yod2NlKLEcNLBjNwel_honda_id_rallye_red.png');
INSERT INTO `t_gambar` VALUES ('22', '6', '1611804040zoeyDM3Ig0R87sXVXec6_honda_id_brownish_amethyst.png');
INSERT INTO `t_gambar` VALUES ('23', '7', '1611805424sFNGlssyRlXYTn5CJW1P_honda_id_crystalblackpearl.png');

-- ----------------------------
-- Table structure for t_kategori
-- ----------------------------
DROP TABLE IF EXISTS `t_kategori`;
CREATE TABLE `t_kategori` (
  `id_kategori` int(255) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_kategori
-- ----------------------------
INSERT INTO `t_kategori` VALUES ('1', 'City Car');
INSERT INTO `t_kategori` VALUES ('2', 'MPV');
INSERT INTO `t_kategori` VALUES ('3', 'Sedan');
INSERT INTO `t_kategori` VALUES ('4', 'Sport Car');
INSERT INTO `t_kategori` VALUES ('5', 'SUV');

-- ----------------------------
-- Table structure for t_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `t_kriteria`;
CREATE TABLE `t_kriteria` (
  `id_kriteria` varchar(11) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of t_kriteria
-- ----------------------------
INSERT INTO `t_kriteria` VALUES ('C1', 'Bahan Bakar');
INSERT INTO `t_kriteria` VALUES ('C2', 'Interior');
INSERT INTO `t_kriteria` VALUES ('C3', 'Fitur');
INSERT INTO `t_kriteria` VALUES ('C4', 'Price/Harga');
INSERT INTO `t_kriteria` VALUES ('C5', 'Type');

-- ----------------------------
-- Table structure for t_mobil
-- ----------------------------
DROP TABLE IF EXISTS `t_mobil`;
CREATE TABLE `t_mobil` (
  `id_mobil` int(255) NOT NULL AUTO_INCREMENT,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `id_kategori` int(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  PRIMARY KEY (`id_mobil`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_mobil
-- ----------------------------
INSERT INTO `t_mobil` VALUES ('1', 'New Jazz', '1', 'Live Up The Hype! Kini saatnya kamu tampil lebih stylish and always set the newest hype with New Honda Jazz .\r\nSUPERB YET COMFORTABLE. Let step into the hype, nikmati desain sporty dan modern di dalam kabin yang didesain luas, serta berlapis material yang berkelas, memberikan keleluasaan sekaligus kenyamanan saat Kamu berkendara.\r\n\r\nPOWERFUL YET EXCITING. Rasakan ketangguhan performa New Honda Jazz yang membangkitkan keseruan Kamu saat berkendara.\r\n\r\nPRIORITY SAFETY. Bagi Honda kegembiraan dan keseruan berkendara, harus didukung dengan sistem keselamatan yang baik. Inilah prioritas Honda yang hadir pada New Honda Jazz, memberikan perlindungan optimal untuk Kamu saat berkendara.');
INSERT INTO `t_mobil` VALUES ('2', 'All New Brio', '1', 'LET’S BREAK THE ORDINARY WITH THE INTERNATIONAL QUALITY, SPORTY AND BIGGER ALL NEW HONDA BRIO!\r\n\r\nAll New Honda Brio Satya sangat pas untuk kamu yang selalu tampil stylish dan All New Honda Brio RS cocok buat kamu yang berjiwa sporty. Whatever, whenever, however. Break out, break free with All New Honda Brio!\r\n\r\nFABULOUS DESIGN. Start your fun with All New Honda Brio Satya! Pilihan trendy dan stylish untuk have fun bareng sama teman atau keluarga. All New Honda Brio RS untuk kamu yang suka dengan sensasi berkendara bergaya sporty dan lebih seru. Driving has never been this fun!\r\n\r\nAWESOME PERFORMANCE. Feel the maximum power! Pacu adrenalin kamu dengan gaya sporty namun tetap stylish dengan All New Honda Brio!\r\n\r\nSAFETY PROTECTION. Safety is our priority. Karena keselamatan adalah hal yang penting untuk kamu yang bergaya hidup sangat aktif. All New Honda Brio dilengkapi dengan fitur keselamatan yang baik sehingga memberikan rasa lebih aman dalam berkendara.');
INSERT INTO `t_mobil` VALUES ('6', 'HR-V', '5', 'NOTHING BUT OUTSTANDING\r\nBersiaplah merasakan impresi dan sensasi berkendara yang outstanding dari salah satu SUV terbaik dari Honda! Inilah simbol ketangguhan yang semakin menggoda, menjadikan siapapun pengendaranya, stand out di segala suasana. 										\r\n											');
INSERT INTO `t_mobil` VALUES ('7', 'MOBILIO', '1', 'TAMPILAN BARU HONDA MOBILIO MEMBUATNYA MENJADI PARTNER YANG STYLISH, MOBIL KELUARGA YANG SELALU ATRAKTIF DALAM SEGALA AKTIFITAS ANDA									\r\n											');

-- ----------------------------
-- Table structure for t_pengelola
-- ----------------------------
DROP TABLE IF EXISTS `t_pengelola`;
CREATE TABLE `t_pengelola` (
  `username` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `hp` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of t_pengelola
-- ----------------------------

-- ----------------------------
-- Table structure for t_profil
-- ----------------------------
DROP TABLE IF EXISTS `t_profil`;
CREATE TABLE `t_profil` (
  `id_profil` int(2) NOT NULL AUTO_INCREMENT,
  `nama_profil` varchar(100) DEFAULT NULL,
  `deskripsi_profil` text DEFAULT NULL,
  `alamat_profil` text DEFAULT NULL,
  `email_profil` varchar(50) DEFAULT NULL,
  `nohp_profil` varchar(50) DEFAULT NULL,
  `file_profil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_profil`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_profil
-- ----------------------------
INSERT INTO `t_profil` VALUES ('1', 'Honda Perkasa Klaten', '<p>Dealer Resmi Honda</p>\r\n\r\n<p style=\"text-align:justify\">Dealer Honda Perkasa Klaten merupakan dealer resmi mobil honda di wilayah Klaten yang menawarkan transaksi jual beli mobil honda, service mobil honda, jual beli sparepart genuine mobil honda dan layanan body repair yang terpercaya. Dapatkan informasi terbaru di official website kami. Ayo buruan beli atau service mobil di dealer honda klaten kamu sekarang.</p>\r\n\r\n<p style=\"text-align:justify\">Transaksi Jual Beli Lebih Mudah dan Cepat</p>\r\n\r\n<p style=\"text-align:justify\">Dealer kami menyediakan sarana yang tepat untuk mendukung penjualan mobil honda dengan E-SPK (elektronik surat pemesanan kendaraan). Dengan mendukung pembayaran virtual account menjadikan transaksi dengan kami lebih mudah sehingga membantu admin mempersiapkan unit mobil yang Anda beli dengan lebih cepat.</p>\r\n\r\n<p style=\"text-align:justify\">Memberikan Banyak Promo Setiap Saat</p>\r\n\r\n<p style=\"text-align:justify\">Semua orang menyukai promo ataupun potongan harga. Dealer kami selalu menghadirkan program promo setiap bulannya, baik promo penjualan unit, promo service, maupun promo body repair.</p>', 'PT Bintang Putra Mobilindo, JL. Raya Solo - Jogja No.168 Tangkisan Pos, Jogonalan, Klaten, Jawa Tengah 57452', 'santi.hpk@gmail.com', '082116222882', 'IMG_20181219_154608_622.jpg');

-- ----------------------------
-- Table structure for t_spek
-- ----------------------------
DROP TABLE IF EXISTS `t_spek`;
CREATE TABLE `t_spek` (
  `id_spek` int(255) NOT NULL AUTO_INCREMENT,
  `nama_spek` varchar(255) DEFAULT NULL,
  `no_urut` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_spek`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_spek
-- ----------------------------
INSERT INTO `t_spek` VALUES ('1', 'Transmisi', null);
INSERT INTO `t_spek` VALUES ('2', 'Bahan Bakar', null);
INSERT INTO `t_spek` VALUES ('3', 'Kapasitas Tangki', null);
INSERT INTO `t_spek` VALUES ('4', 'Seat', null);
INSERT INTO `t_spek` VALUES ('5', 'Power Steering', null);
INSERT INTO `t_spek` VALUES ('6', 'Ban', null);
INSERT INTO `t_spek` VALUES ('7', 'Velg', null);

-- ----------------------------
-- Table structure for t_tipe
-- ----------------------------
DROP TABLE IF EXISTS `t_tipe`;
CREATE TABLE `t_tipe` (
  `id_tipe` int(255) NOT NULL AUTO_INCREMENT,
  `id_mobil` varchar(255) DEFAULT NULL,
  `nama_tipe` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipe`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of t_tipe
-- ----------------------------
INSERT INTO `t_tipe` VALUES ('11', '1', 'Jazz MT', '225000000');
INSERT INTO `t_tipe` VALUES ('12', '1', 'Jazz RS', '290000000');
INSERT INTO `t_tipe` VALUES ('13', '1', 'Jazz RS CVT', '300000000');
INSERT INTO `t_tipe` VALUES ('20', '2', 'BRIO SATYA S MT', '153500000');
INSERT INTO `t_tipe` VALUES ('21', '2', 'BRIO SATYA E MT', '162000000');
INSERT INTO `t_tipe` VALUES ('22', '2', 'BRIO SATYA E CVT', '178000000');
INSERT INTO `t_tipe` VALUES ('23', '2', 'BRIO SATYA RS MT', '191500000');
INSERT INTO `t_tipe` VALUES ('24', '2', 'BRIO SATYA RS CVT', '207000000');
INSERT INTO `t_tipe` VALUES ('25', '6', 'HR-V 1.5L S M/T', '307000000');
INSERT INTO `t_tipe` VALUES ('26', '6', 'HR-V 1.5L S CVT', '318000000');
INSERT INTO `t_tipe` VALUES ('27', '6', 'HR-V 1.5L E CVT', '342000000');
INSERT INTO `t_tipe` VALUES ('28', '6', 'HR-V 1.5L E CVT Special Edition', '352750000');
INSERT INTO `t_tipe` VALUES ('29', '6', 'HR-V 1.8L Prestige', '428000000');
