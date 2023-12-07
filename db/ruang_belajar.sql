-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 04:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruang_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_level`
--

CREATE TABLE `t_admin_level` (
  `level_id` int(11) NOT NULL,
  `level_nama` varchar(255) DEFAULT NULL,
  `level_akses` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_admin_level`
--

INSERT INTO `t_admin_level` (`level_id`, `level_nama`, `level_akses`) VALUES
(1, 'Administrator', 'a:7:{i:0;s:13:\"administrator\";i:1;s:10:\"kompetensi\";i:2;s:6:\"tujuan\";i:3;s:5:\"siswa\";i:4;s:4:\"soal\";i:5;s:7:\"tentang\";i:6;s:6:\"materi\";}'),
(2, 'Personal', 'a:7:{i:0;s:1:\"n\";i:1;s:10:\"kompetensi\";i:2;s:6:\"tujuan\";i:3;s:5:\"siswa\";i:4;s:4:\"soal\";i:5;s:7:\"tentang\";i:6;s:6:\"materi\";}'),
(3, 'Eksekutif', 'a:7:{i:0;s:1:\"n\";i:1;s:1:\"n\";i:2;s:1:\"n\";i:3;s:1:\"n\";i:4;s:4:\"soal\";i:5;s:1:\"n\";i:6;s:6:\"materi\";}');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_user`
--

CREATE TABLE `t_admin_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` text DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `user_password` text DEFAULT NULL,
  `user_foto` text DEFAULT NULL,
  `level_id` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_admin_user`
--

INSERT INTO `t_admin_user` (`user_id`, `user_nama`, `user_email`, `user_password`, `user_foto`, `level_id`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_materi`
--

CREATE TABLE `t_materi` (
  `materi_id` varchar(50) NOT NULL,
  `materi_judul` text DEFAULT NULL,
  `materi_foto` text DEFAULT NULL,
  `materi_post` text DEFAULT NULL,
  `materi_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `materi_tanggal_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_materi`
--

INSERT INTO `t_materi` (`materi_id`, `materi_judul`, `materi_foto`, `materi_post`, `materi_tanggal`, `materi_tanggal_update`) VALUES
('1562759739', '[BAB 1] Perbedaan Tumbuhan Dikotil dan Monokotil', '1562759739.jpg', '<p><strong>Perbedaan Tumbuhan Dikotil dan Monokotil</strong>&nbsp;&ndash; Tumbuhan dikotil dan tumbuhan monokotil mempunyai perbedaan yang sangat mencolok mulai dari&nbsp;<em>batang, akar, biji, daun</em>, dan&nbsp;<em>bunga</em>.&nbsp;<a href=\"https://www.yuksinau.id/\" title=\"YukSinau.id\">YukSinau.id</a>&nbsp;akan melengkapi artikel ini dengan gambar sehingga penjelasan akan lebih rinci dan akan lebih mudah untuk membedakan dua jenis tumbuhan&nbsp;<u>angiospermae</u>&nbsp;ini.</p>\r\n\r\n<p>Coba perhatikan gambar perbedaan tumbuhan dikotil dan tumbuhan monokotil dibawah ini, terlihat jelas bahwa mulai dari keping biji, tulang daun, batang, bunga, dan akar sangat berbeda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"perbedaan tumbuhan dikotil dan monokotil\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/perbedaan-tumbuhan-dikotil-dan-monokotil.png\" style=\"height:294px; width:500px\" title=\"perbedaan tumbuhan dikotil dan monokotil\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Pertama dari&nbsp;<em>keping biji</em>&nbsp;<a href=\"https://www.yuksinau.id/tumbuhan-monokotil/\" title=\"tumbuhan monokotil\">tumbuhan monokotil</a>&nbsp;memiliki satu kotiledon sedangkan tumbuhan dikotil mempunyai dua kotiledon.</li>\r\n	<li>Untuk tulang daun tumbuhan monokotil mempunyai tulang daun yang sejajar atau melengkung, sedangkan tumbuhan dikotil mempunyai tulang daun menyirip atau menjari.</li>\r\n	<li>Selanjutnya pada batang, tumbuhan monokotil bagian berkas pengangkut tersebar, sedangkan tumbuhan dikotil berkas pengangkut terususun dalam suatu lingkaran.</li>\r\n	<li>Pada bagian bunga tumbuhan monokotil hanya terdiri dari 3 atau kelipatannya, dan untuk tumbuhan dikotil terdiri dari 2, 4, 5 atau kelipatannya.</li>\r\n	<li>Akar tumbuhan monokotil mempunyai sistem akar serabut, sedangkan pada&nbsp;<a href=\"https://www.yuksinau.id/tumbuhan-dikotil/\" title=\"tumbuhan dikotil\">tumbuhan dikotil</a>&nbsp;sistem akarnya tunggang.</li>\r\n	<li>\r\n	<h3>Perbedaan Famili Tumbuhan Dikotil dan Monokotil</h3>\r\n\r\n	<table>\r\n		<tbody>\r\n			<tr>\r\n				<th>Famili Tumbuhan Dikotil</th>\r\n				<th>Famili Tumbuhan Monokotil</th>\r\n			</tr>\r\n			<tr>\r\n				<td><em>Euphorbiaceae</em>&nbsp;(Jarak-jarakan) contoh : jarak, ubi, karet</td>\r\n				<td><em>Graminae</em>&nbsp;(Rumut-rumputan), contoh : jagung, padi</td>\r\n			</tr>\r\n			<tr>\r\n				<td><em>Leguminoceae</em>&nbsp;(Polong-polongan),&nbsp;contoh&nbsp;: pete, kacang</td>\r\n				<td><em>Palmae</em>&nbsp;(Pinang-pinangan),&nbsp;contoh&nbsp;: kelapa, sagu</td>\r\n			</tr>\r\n			<tr>\r\n				<td><em>Solanaceae</em>&nbsp;(Terung-terungan),&nbsp;contoh&nbsp;: terong, cabe,&nbsp;tomat</td>\r\n				<td><em>Musaceae</em>&nbsp;(Pisang-pisangan),&nbsp;contoh&nbsp;: pisang ambon,&nbsp;raja</td>\r\n			</tr>\r\n			<tr>\r\n				<td><em>Myrtaceae</em>&nbsp;(Jambu-jambuan),&nbsp;contoh&nbsp;: jambu biji, jambu air</td>\r\n				<td><em>Orchidaceae</em>&nbsp;(Anggrek-angrekan),&nbsp;contoh&nbsp;: anggrek,&nbsp;vanili</td>\r\n			</tr>\r\n			<tr>\r\n				<td><em>Compositae</em>&nbsp;(Komposite),&nbsp;contoh&nbsp;: bunga matahari</td>\r\n				<td><em>Zingiberaceae</em>&nbsp;(Jahe-jahean),&nbsp;contoh&nbsp;: jahe, kunyit</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n\r\n	<h3>Perbedaan Struktur Penampang Melintang Tumbuhan Monokotil dan Dikotil</h3>\r\n\r\n	<p><strong>1. Perbedaan Bagian Akar</strong></p>\r\n\r\n	<p><img alt=\"perbedaan akar monokotil dan dikotil\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/perbedaan-akar-monokotil-dan-dikotil.png\" style=\"height:172px; width:433px\" title=\"perbedaan akar monokotil dan dikotil\" /></p>\r\n\r\n	<p><strong>Tumbuhan Monokotil:</strong></p>\r\n	</li>\r\n	<li>Tidak ada&nbsp;<em>kambium</em></li>\r\n	<li>Batas ujung akar dan kaliptra kelas</li>\r\n	<li>Perisikel terdiri dari beberapa sel dan membentuk akar lateral</li>\r\n	<li><em>Folem&nbsp;</em>dan<em>&nbsp;Xilem</em>&nbsp;terletak berselingan dengan jumlah yang sangat banyak</li>\r\n	<li>Inti besar dan empulur (berkembang baik)</li>\r\n	<li>\r\n	<p><strong>Tumbuhan Dikotil:</strong></p>\r\n	</li>\r\n	<li>Tidak ada empulur</li>\r\n	<li><strong>Floem</strong>&nbsp;terletak di bagian luar xylem (dibatasi oleh kambium) dan Xilem terletak di bagian tengah akar</li>\r\n	<li>Pembuluh xilem memiliki dinding tebal, sedikit serat, tetapi parenkim banyak</li>\r\n	<li>Perisikel terdiri dari selapis sel</li>\r\n	<li>Batas kaliptra dan ujung akar tidak jelas</li>\r\n	<li>\r\n	<p><strong>2.&nbsp;</strong><strong>Perbedaan&nbsp;</strong><strong>Bagian Batang</strong></p>\r\n\r\n	<p><img alt=\"batang tumbuhan monokotil\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/batang-tumbuhan-monokotil.png\" style=\"height:189px; width:450px\" title=\"batang tumbuhan monokotil\" /></p>\r\n\r\n	<p><strong>Tumbuhan Monokotil:</strong></p>\r\n	</li>\r\n	<li>Biasanya tidak ditemui pertumbuhan sekunder</li>\r\n	<li>Tidak ditemui rambut di bagian epidermis</li>\r\n	<li>Berkas pengangkut terlindungi selubung berkas pengangkut</li>\r\n	<li>Tidak ada parenkim&nbsp;<em>floem</em></li>\r\n	<li>Lapisan di bawah epidermis (<em>hipodermis</em>) umumnya berupa sklerenkim</li>\r\n	<li>Ukuran berkas pengangkut berbeda-beda</li>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><img alt=\"batang tumbuhan dikotil\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/batang-tumbuhan-dikotil.png\" style=\"height:201px; width:450px\" title=\"batang tumbuhan dikotil\" /></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Tumbuhan Dikotil:</strong></p>\r\n	</li>\r\n	<li>Tidak ada rongga di berkas pengangkut</li>\r\n	<li>Tidak ada selubung berkas pengangkut</li>\r\n	<li>Terdapat parenkim floem</li>\r\n	<li>Pertumbuhan sekunder disebabkan terbentuknya meristem latera</li>\r\n	<li>Ukuran berkas pengangkut seragam</li>\r\n	<li>Jaringan epidermis lapis tunggal dengan kutikultura yang tebal, terdapat rambut di epidermis (multicellular hairs)</li>\r\n	<li><em>Hipodermis</em>&nbsp;biasanya berupa&nbsp;<em>kolenkim</em></li>\r\n	<li>umur tumbuhan dikotil</li>\r\n	<li>Pembuuh xilem kecil, serat banyak, tetapi parenkim sedikit</li>\r\n	<li>Pertumbuhan xilem membentuk lingkaran tahunan yang umumnya digunakan untuk mengetahui</li>\r\n	<li>\r\n	<p><strong>3.&nbsp;</strong><strong>Perbedaan&nbsp;</strong><strong>Bagian Daun</strong></p>\r\n\r\n	<p><img alt=\"daun tumbuhan monokotil\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/daun-tumbuhan-monokotil.png\" style=\"height:158px; width:497px\" title=\"daun tumbuhan monokotil\" /></p>\r\n\r\n	<p><br />\r\n	<strong>Tumbuhan Monokotil:</strong></p>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n	<li>Ditemui sel kipas (<em>bulliform cells/motor</em>) di epidermis atas yang berfungsi untuk membuka dan menutup daun (daun menggulung)</li>\r\n	<li>Selubung berkas pengangkut terbentuk dari sklerenkim</li>\r\n	<li>Isobilateral</li>\r\n	<li>Pembuluh xilem tersusun dari 2 metaxilem dan 2 protoxilem</li>\r\n	<li>Stomata terletak di epidermis atas dan bawah (<strong>amphistomatic</strong>)</li>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><img alt=\"daun tumbuhan dikotil\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/daun-tumbuhan-dikotil.png\" style=\"height:172px; width:424px\" title=\"daun tumbuhan dikotil\" /></p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Tumbuhan Dikotil:</strong></p>\r\n	</li>\r\n	<li>Pembuluh xilem banyak tersusun dari metaxilem dan protoxilem</li>\r\n	<li>Stomada hanya ditemui di epidermis bawah&nbsp;(<u>hypostomatic</u>)</li>\r\n	<li>Dorsiventral</li>\r\n	<li>Jaringan mesofil dibedakan menjadi jaringan palisade dan parenkim spons</li>\r\n	<li>Selubung berkas pengangkut terbentuk dari kolenkim</li>\r\n	<li>\r\n	<p>Begitulah pembahasa tentang&nbsp;<strong>perbedaan tumbuhan dikotil dan monokotil</strong>&nbsp;dari mulai famili diantara kedua jenis&nbsp;<em>angiospermae</em>&nbsp;ini, sampai struktur penampang melintang yang memperjelas perbedaan antara tumbuhan monokotil dan dikotil.</p>\r\n	</li>\r\n</ul>\r\n', '2019-07-10 11:55:39', '2019-07-10 12:15:14'),
('1562761899', '[BAB 2] Perbedaan Sel Hewan dan Sel Tumbuhan', '1562761899.jpg', '<p><strong>Perbedaan Sel Hewan dan Sel Tumbuhan</strong>&nbsp;&ndash; Sel hewan dam tumbuhan mempunyai banyak perbedaan baik dalam&nbsp;<em>bentuk, struktur, jumlah organel sel, dan lainnya</em>. Walaupun ada juga sel yang sama yang ditemui baik itu di sel hewan maupun sel tumbuhan. Perbedaan yang paling mendasar yaitu&nbsp;<u>tumbuhan mempunyai dinding sel dimana di sel hewan tidak terdapat dinding sel</u>.</p>\r\n\r\n<p>Selain itu, pernahkan Anda memperhatikan bahwa proses fotosintesis hanya terjadi pada tumbuhan dan bukan&nbsp;pada&nbsp;hewan? Atau kenapa hewan dapat bergerak sangat aktif sedangkan tumbuhan umumnya diam? Itu karena&nbsp;<strong>bentuk sel tumbuhan yang kaku</strong>&nbsp;yang menyebabkan tumbuhan tidak fleksibel, sedangkan sel hewan fleksibel dan bentuknya bisa berubah-ubah.</p>\r\n\r\n<p><img alt=\"sel hewan dan sel tumbuhan\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/sel-hewan-dan-sel-tumbuhan.png\" style=\"height:235px; width:500px\" title=\"sel hewan dan sel tumbuhan\" /></p>\r\n\r\n<h3>Perbedaan Sel Hewan dan Sel Tumbuhan</h3>\r\n\r\n<p>Struktur dasar sel hewan dan tumbuhan sebenarnya sama, tetapi dalam perkembangannya jenis sel tumbuhan dan hewan mengalami perubahan tergantung dengan lingkungan, hal ini membuat berbagai macam perbedaan antara dual sel tersebut. Salah satu yang paling jelas yaitu&nbsp;<strong>peran ekologis</strong>, dimana tumbuhan adalah&nbsp;<em>produsen makanan</em>&nbsp;sedangkan hewan adalah&nbsp;<em>konsumen</em>&nbsp;atau pemakan tumbuhan atau hewan lain.</p>\r\n\r\n<p>Artikel Rekomendasi:&nbsp;<a href=\"https://www.yuksinau.id/struktur-fungsi-organel-organel-sel/\" title=\"Struktur, Gambar, dan Fungsi Organel-Organel Sel\">Struktur, Gambar, dan Fungsi Organel-Organel Sel</a></p>\r\n\r\n<p>Untuk mempermudah membedakan antara&nbsp;<strong>sel hewan dan sel tumbuhan</strong>, kami sajikan perbedaannya karakteristik dan bentuk organel sel di dalam sel hewan dan tumbuhan dalam bentuk tabel berikut:</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Perbedaan</th>\r\n			<th>Sel Hewan</th>\r\n			<th>Sel Tumbuhan</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Bentuk Sel</td>\r\n			<td>Berbagai macam dapat berubah-ubah bentuk</td>\r\n			<td>Bentuk sel tumbuhan kaku, jarang berubah<br />\r\n			bentuk kecuali derivat sel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ukuran Sel</td>\r\n			<td>Kecil</td>\r\n			<td>Besar</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dinding Sel</td>\r\n			<td>Tidak ada</td>\r\n			<td>Ada</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Inti Sel</td>\r\n			<td>Ada</td>\r\n			<td>Tidak ada</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Maktiks Ektraselular</td>\r\n			<td>Ada</td>\r\n			<td>Ada</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lisosom</td>\r\n			<td>Umumnya banyak terdapat sel hewan</td>\r\n			<td>Jarang ditemukan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Peroksisom</td>\r\n			<td>Ada</td>\r\n			<td>Ada</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Gilioksisom</td>\r\n			<td>Tidak ada/jarang</td>\r\n			<td>Ada</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Elastisitas Jaringan</td>\r\n			<td>Tinggi, tidak adanya dinding sel</td>\r\n			<td>Rendah, adanya dinding sel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Letak inti sel</td>\r\n			<td>Berada ditengah sel</td>\r\n			<td>Berada di pheriperal sitoplasma</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sentrosom/sentriol</td>\r\n			<td>Ada</td>\r\n			<td>Tidak ada/jarang ditemukan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Organel respirasi</td>\r\n			<td>Mitokondria</td>\r\n			<td>Kloroplas (plastida) dan mitokondria</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vakuola sel</td>\r\n			<td>Kecil dan banyak</td>\r\n			<td>Tunggal akan tetapi sangat besar</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Silia</td>\r\n			<td>Sering ditemukan</td>\r\n			<td>Sangat jarang</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Flagela</td>\r\n			<td>Sering ditemukan,</td>\r\n			<td>Jarang, hanya pada sperma tumbuhan<br />\r\n			tertentu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pembentukan Spindle</td>\r\n			<td>Secar amphiastral</td>\r\n			<td>Secara anastral</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sitokinesis sel</td>\r\n			<td>Membentuk furrowing</td>\r\n			<td>Membentuk lempeng mitosis</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ketahanan tekanan</td>\r\n			<td>Lemah tanpa vakuola kontraktil</td>\r\n			<td>Kuat karena dinding sel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tingkat totipotensi</td>\r\n			<td>Rendah</td>\r\n			<td>Sangat tinggi</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sambungan antar sel</td>\r\n			<td>Desmosome Tight junction</td>\r\n			<td>Plasmodesmata</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Perbedaan Paling Menonjol Antara Sel Tumbuhan dan Sel Hewan</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Sel Hewan</th>\r\n			<th>Sel Tumbuhan</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Tidak memiliki dinding sel</td>\r\n			<td>Memiliki<br />\r\n			dinding sel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Memiliki<br />\r\n			vakuola yang berukuran kecil</td>\r\n			<td>Memiliki vakuola berukuran besar</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Memiliki Sentriol</td>\r\n			<td>Tidak<br />\r\n			memiliki sentriol</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tidak Memiliki plastida</td>\r\n			<td>Memiliki plastida (kloroplas, kromoplas,<br />\r\n			dan leukoplas)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Perbedaan Sel Hewan dan Sel Tumbuhan Berdasarkan Karekteristiknya</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Sel Tumbuhan</th>\r\n			<th>Sel Hewan</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Berukuran lebih besar dari pada hewan</td>\r\n			<td>Berukuran lebih kecil dari pada sel tumbuhan</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Memiliki bentuk cenderung tetap</td>\r\n			<td>Memiliki bentuk yang tidak tetap</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tidak memiliki dinding sel</td>\r\n			<td>Tidak mempunyai dinding sel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Memiliki dinding sel dan membran</td>\r\n			<td>Tidak mempunyai plastida</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mempunyai plastida</td>\r\n			<td>Sebagian memiliki vakuola kecil, umumnya memiliki vesikel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mempunyai vakuola</td>\r\n			<td>Mempunyai sentriol</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tidak mempunyai sentriol</td>\r\n			<td>Mempunyai lisosom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tidak mempunyai lisosom</td>\r\n			<td>Inti sel berukuran lebih besar dari pada vesikel</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ukuran vakuola lebih besar dari pada inti</td>\r\n			<td>Menyimpan energi dalam bentuk butiran glikogen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Menyimpan energi dalam bentuk zat tepung (pati)</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Organel Sel Hewan Yang Tidak Dimiliki Oleh Sel Tumbuhan</h3>\r\n\r\n<p>Sel hewan mempunyai organel sel yang tidak bisa ditemui di sel tumbuhan. Apa sajakah organel-organel sel itu? berikut ini:</p>\r\n\r\n<p><img alt=\"sel hewan\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/sel-hewan.png\" style=\"height:283px; width:400px\" title=\"sel hewan\" /></p>\r\n\r\n<p><strong>1.Sentriol</strong></p>\r\n\r\n<p>Sentriol adalah sepasang struktur yang berbentuk seperti silinder yang mempunyai lubang tengah. Tersusun dari protein mikrotubulus, mempunyai peran dalam mengatur polaritas pembelahan sel dan pembentukan&nbsp;<em>silia serta flagela</em>&nbsp;dan pemisahan kromosom saat pembelahan.</p>\r\n\r\n<p>Artikel Rekomendasi:&nbsp;<a href=\"https://www.yuksinau.id/organel-sel-hewan/\" title=\"Organel Sel Hewan: Fungsi, Struktur, Gambar\">Organel Sel Hewan: Fungsi, Struktur, Gambar</a></p>\r\n\r\n<p>Mikrotubulus yang menyusun sentriol berbentuk seperti benang-benang jala yang terlihat berdekatan dengan kromosom selama pembelahan sel (<em>meiosis dan metosis</em>). Jala itu disebut juga benang spindel, di ujung lain benang spindel berdekatan dengan bajian ujung sentriol.</p>\r\n\r\n<p><strong>2.Vakuola</strong><br />\r\nWalupun terkadang vakuola ditemukan juga di beberapa jenis hewan bersel satu, contohnya paramecium dan amoeba. Di dalam paramecium terdapat 2 macam vakuola, yaitu:</p>\r\n\r\n<ul>\r\n	<li><strong>Vakuola Kontraktil (vakuola berdenyut)</strong>&nbsp;adalah vakuola yang terdapat di hewan bersel satu yang hidup di air tawar. Vakuola ini berfungsi untuk menjaga tekanan osmotik sitoplasma atau osmoregulato.</li>\r\n	<li><strong>Vakuola Non-kontraktil (vakuola tak berdenyut)</strong>&nbsp;berperan untuk mercerna makanan sehingga disebut juga vakuola makanan</li>\r\n</ul>\r\n\r\n<h3>Organel Sel Tumbuhan Yang Tidak Dimiliki Oleh Sel Hewan</h3>\r\n\r\n<p><strong>1. Dinding Sel</strong><br />\r\n<a href=\"https://id.wikipedia.org/wiki/Dinding_sel\" rel=\"nofollow noopener noreferrer\" target=\"_blank\" title=\"Dinding sel\">Dinding sel</a>&nbsp;terletak paling luar dari sel, berfungsi untuk pelindung dan penunjang sel. Dinding sel terbentuk oleh diktlosom dimana bahan penyusun dinding sel yaitu polisakarida, yang terdiri dari selulosa, pektin, dan hemiselulosa. Dinding sel bersifat kaku dan keras. Terdapat 2 jenis dinding sel yaitu&nbsp;<em>sel primer dan sekunder</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Dinding el primer</strong>&nbsp;merupakan dinding sel yang terdiri dari pektin, hemiselulosa, dan selulosa dimana dinding sel ini terbentuk saat pembelahan sel.</li>\r\n	<li><strong>Dinding sel sekunder</strong>&nbsp;merupakan dinding sel yang dibentuk karena adanya penebalan dinding sel yang tersusun oleh lignin, hemiselulosa, dan selulosa. Dinding sel sekunder terdapat di sel dewasa di dalam dinding sel primer.</li>\r\n</ul>\r\n\r\n<p>Diantara 2 dinding sel yang berdekatan, diteumi lamela tengah yang tersusun dari magensium dan kalsium pektat yang berupa gel. Terdapat pori diantara dual sel berdekatan tersebut, lewat pori ini plasma dual sel berdekatan dihubungkan oleh benang-benang plasma atau dikenal juga dengan sebutan&nbsp;<strong>plasma modesmata</strong>.</p>\r\n\r\n<p><img alt=\"sel tumbuhan\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/03/sel-tumbuhan.png\" style=\"height:272px; width:400px\" title=\"sel tumbuhan\" /></p>\r\n\r\n<p>Pernahkah Anda bertanya mengapa batang tumbuhan umumnya keras dan berbeda dengan kulit manusia? Ini karena bagian luar sel tumbuhan tersusun dari dinding sel yang sangat keras. Bahan penyusun dinding sel yaitu berupa zat kayu (selulosa yang tersusun dari glukosa). Zat lain yang terkandung dalam dinding sel yaitu glikoprotein, helmi selulosa, dan pektin.</p>\r\n\r\n<p><strong>2. Plastida</strong><br />\r\nPlastida merupakan organel yang bermembran lengkap berupa butir-butir yang mengandung pigmen. Plastida hanya bisa ditemui pada sel tumbuhan dengan bentuk dan fungsi yang beragam.&nbsp;<em>Plastida adalah hasil perkembangan dari badan kecil (plosplastida) dimana banyak ditemui di daerah meristimatik</em>.</p>\r\n\r\n<p>Artikel Rekomendasi:&nbsp;<a href=\"https://www.yuksinau.id/organel-sel-tumbuhan/\" title=\"Organel Sel Tumbuhan: Struktur, Gambar, Fungsi\">Organel Sel Tumbuhan: Struktur, Gambar, Fungsi</a></p>\r\n\r\n<p>Di dalam perkembangnya proplastida yang merupakan hasil perkembangan dari badan kecil bisa berubah menjadi 3 jenis yaitu tipe&nbsp;<strong>kloroplas, kromoplas, dan leukoplas</strong>.</p>\r\n\r\n<p><strong>a. Kloroplas</strong><br />\r\nKloropas adalah organel sel yang mengandung klorofil yang mana klorofil sangat berpengaruh pada proses fotosintesis. Kloroplas terdiri dari membran luar yang berfungsi melewatkan molekul dengan ukuran &lt; 10 kilodalton tanpa selektivitas.</p>\r\n\r\n<p>Untuk membran dalam&nbsp;<strong>bersifat selektif permeabel</strong>, berfungsi menentukan molekul yang keluar masuk dengan transpor aktif. Stroma adalah cairan kloroplas yang berfungsi menyimpan hasil proses fotosintesis dalam bentuk amilum serta tilakoid tempat berlangsungnya fotosintesis.</p>\r\n\r\n<p>Kloroplas sering ditemui pada daun dan organ tumbuhan yang berwarna hijau. Klorofil dibedakan menjadi beberapa macam:</p>\r\n\r\n<ul>\r\n	<li><em>Klorofil a</em>&nbsp;:menampilkan warna hijau biru</li>\r\n	<li><em>Klorofil b</em>&nbsp;:menampilkan warna hijau kuning</li>\r\n	<li><em>Klorofil c</em>&nbsp;:menampilkan warna hijau cokelat</li>\r\n	<li><em>Klorofil d</em>&nbsp;:menampilkan warna hijau merah.</li>\r\n</ul>\r\n\r\n<p><strong>b.Kromoplas</strong><br />\r\nKromoplas merupakan plastida yang memberi berbagai warna diluar proses fotosintesis (non-fotosintesis), seperti pigmen kuning, orange, merah, dan lainnya. Pigmen yang masuk kelompok kromoplas diantaranya:</p>\r\n\r\n<ul>\r\n	<li><em>Fikosianin</em>: menghasilkan warna biru pada ganggang</li>\r\n	<li><em>Xantofil</em>: menghasilkan warna kuning pada daun yang telah tua</li>\r\n	<li><em>Fikosiantin</em>: menghasilkan warna cokelat pada ganggang</li>\r\n	<li><em>Karoten</em>:&nbsp;menghasilkan&nbsp;warna kuning jingga dan merah,misalnya pada wortel</li>\r\n	<li><em>Fikoeritrin</em>: menghasilkan warna merah pada ganggang.</li>\r\n</ul>\r\n\r\n<p><strong>c.Leukoplas</strong><br />\r\nLeukoplas merupakan plastida yang tidak mempunyai warna atau memiliki warna putih. Biasanya ditemui pada tumbuhan yang tidak terpapar oleh sinar matahari. Terutama di organ penyimpanan cadangan makanan. Leukoplas berfungsi menyimpan badangan makanan. Dibedakan menjadi 3 macan yaitu:</p>\r\n\r\n<ul>\r\n	<li><strong>Amiloplas</strong>: leukoplas yang berfungsi membentuk dan menyimpan amilum,</li>\r\n	<li><strong>Elaioplas(lipidoplas)</strong>: leukoplas yang berfungsi untuk membentuk dan menyimpan lemak atau minyak,</li>\r\n	<li><strong>Proteoplas</strong>: leukoplas yang berfungsi menyimpan protein.</li>\r\n</ul>\r\n\r\n<p>Itulah tabel&nbsp;<em>perbedaan sel hewan dan sel tumbuhan</em>&nbsp;dari organel-organel sel, karakteristik, bentuk, serta ciri khas masing-masing sel hewan dan tumbuhan. Semoga Anda bisa&nbsp;<strong>membedakan sel tumbuhan dan hewan</strong>&nbsp;setelah membaca artikel&nbsp;<a href=\"https://www.yuksinau.id/\" title=\"Yuksinau.id\">Yuksinau.id</a>diatas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Referensi:<br />\r\nwww.artikelsiana.com/2015/04/perbedaan-sel-hewan-sel-tumbuhan.html<br />\r\nwww.softilmu.com/2013/12/perbedaan-sel-hewan-dan-tumbuhan.html</p>\r\n', '2019-07-10 12:31:39', '2019-07-10 12:32:01'),
('1562762013', '[BAB 3] Panca Indra: Pengertian, Macam, Fungsi, Mekanisme', '1562762013.jpg', '<p>Setiap manusia yang dilahirkan ke bumi sudah dianugrahi dengan panca indra oleh sang pencipta, supaya kita sebagai manusia dapat melakukan berbagai kegiatan sehari-hari dengan mudah.&nbsp;<em>Nah</em>&nbsp;untuk itu, mari kita bahas mengenai panca indra secara lengkap dan terperinci.&nbsp;<em>Yuk</em>&nbsp;langsung saja simak ulasan di bawah ini.</p>\r\n\r\n<h2>Pengertian Panca Indra</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"panca indra ke 6\" src=\"https://www.yuksinau.id/wp-content/uploads/2019/02/panca-indra-ke-6.jpg\" style=\"height:768px; width:1366px\" title=\"panca indra ke 6\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada dasarnya, panca indra adalah lima macam indra dengan fungsi yang berbeda seabagai alat sensor. Menurut pendapat dari ahli sansakerta, panca indra sendiri disebut dengan panca budi indriya serta di dalam bahasa Indonesia lebih dikenal dengan sebutan panca indra.</p>\r\n\r\n<p>Panca indra adalah bagian organ yang dimana khusus untuk menerima segala macam jenis rangsangan tertentu. Panca indra tersbeut memiliki saraf yang berfungsi sebagai alat perantara agar dapat membawa kesan dari sebuah rasa (<em>sensory impression</em>), selanjutnya sensor dari panca indra tersebut diteruskan ke otak dimana otak merupakan tempat perasaan itu ditafsirkan.</p>\r\n\r\n<p>Sistem saraf tersbut harus dapat menerima serta memproses informasi mengenai dunia luar yang dirasa untuk kepentingan bereaksi, berkomunikasi, serta menjaga tubuh agar tetap sehat dan aman. Sebagian besar informasi yang di dapat berasal dari indra perasa yaitu : mata, telinga, hidung, lidah, dan kulit.</p>\r\n\r\n<p>Sel yang berada di dalam organ indra perasa itu menerima rangsangan mentah, lalu diterjemahkan menjadi sinyal yang dapat digunakan si sistem saraf. Kemudian, sistem saraf tersebut menyalurkan rangsangan tersebut menuju otak, hingga pada akhirnya diterjemahkan ke sebagai penglihatan, suara (pendengaran), penciuman, rasa (gustasi), serta sentuhan (persepsi taktil).</p>\r\n\r\n<h2>Macam dan Fungsi Panca Indra</h2>\r\n\r\n<p>Sesuai dengan judul artiek yang satu ini, manusia dianugerahi dengan panca indra atau lima indra. Macam dari jenis kelima indra tersebut adalah rasa, penglihatan, sentuhan, penciuman, dan juga pendengaran. Untuk lebih jelasnya, simak ulasan berikut :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>1. Mata</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"makalah panca indera\" src=\"https://www.yuksinau.id/wp-content/uploads/2019/02/makalah-panca-indera.jpg\" style=\"height:768px; width:1366px\" title=\"makalah panca indera\" /></p>\r\n\r\n<p>Mata merupakan salah satu organ dari indra yang berfungsi untuk melihat kondisi sekitar dalam visualisasi gambar, sehingga dengan adanya mata kita dapat mengetehui berbagai benda yang ada di sekitar dengan cepat.</p>\r\n\r\n<p>Mata merupakan indra penglihat yang mendapatkan rangsangan berupa cahaya&nbsp;<em>(fotooreseptor)</em>. Mata sendiri terdiri dari beberapa susunan yaitu alat tambahan mata, bola mata, otot bola mata, dan saraf optik II.</p>\r\n\r\n<p>Alat tambahan mata berfungsi untuk melindungi mata dari berbagai gangguan yang ada di lingkungan sekitar. Alis mata berfungsi untuk melindungi mata dari tetesan keringat, kelopak mata untuk melindungi mata dari benturan, serta bulu mata berfungsi untuk melindungi mata dari debu kotoran serta sinar cahaya yang kuat.</p>\r\n\r\n<h4><strong>Bagian-bagian mata beserta fungsinya</strong></h4>\r\n\r\n<ol>\r\n	<li><strong><em>Kornea mata,&nbsp;</em></strong>berfungsi untuk menerima sebuah rangsangan berupa cahaya serta langsung meneruskannya ke bagian mata yang lebih dalam.</li>\r\n	<li><em><strong>Lensa mata</strong></em>&nbsp;memiliki fungsi untuk&nbsp;meneruskan sekaligus memfokuskan pada cahaya agar bayangan benda jatuh tepat ke lensa mata.</li>\r\n	<li><em><strong>Iris</strong></em>&nbsp;memiliki fungsi sebagai tempat untuk mengatur banyak sedikitnya sebuah cahaya yang masuk ke mata.</li>\r\n	<li><em><strong>Pupil</strong></em>&nbsp;memiliki fungsi&nbsp;sebagai saluran masuknya cahaya ke mata.</li>\r\n	<li><strong><em>Retina</em></strong>&nbsp;memiliki fungsi&nbsp;untuk membentuk sebuah bayangan benda yang langsung dikirim oleh saraf mata menuju otak.</li>\r\n	<li><strong><em>Otot mata</em></strong>&nbsp;berfungsi untuk menggerakan bola mata.</li>\r\n	<li><em><strong>Saraf mata,&nbsp;</strong></em>memiliki fungsi untuk&nbsp;meneruskan rangsangan cahaya dari retina menuju otak.</li>\r\n</ol>\r\n\r\n<h4>Cara kerja mata</h4>\r\n\r\n<p>Cahaya yang masuk ke mata diteruskan menuju aqueous humor kemudian menuju pupil kemudian ke lensa, di bagian lensa di teruskan ke vetreous humor kemudian diteruskan lagi ke retina, selanjutnya diteruskan ke optik dan yang terakhir menuju otak untuk menerjemahkan cahaya menjadi sebuah gambar.</p>\r\n\r\n<h3><strong>2. Telinga</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"mekanisme panca indra\" src=\"https://www.yuksinau.id/wp-content/uploads/2019/02/mekanisme-panca-indra.jpg\" style=\"height:768px; width:1366px\" title=\"mekanisme panca indra\" /></p>\r\n\r\n<p>Telinga adalah organ indra yang memiliki fungsi untuk mendengar suara yang ada di lingkungan kita. Telinga merupakan indra pendengaran yang memperoleh rangsangan berupa suara&nbsp;<em>(fonoreseptor)</em>. Tak hanya itu, telinga juga memiliki fungsi lain yakni sebagai organ alat keseimbangan badan.</p>\r\n\r\n<h4>Bagian &ndash; Bagian Telinga</h4>\r\n\r\n<ul>\r\n	<li><em><strong>Telinga bagian luar</strong></em>&nbsp;yaitu terdiri dari ubang telinga, liang pendengaran, dan daun telinga.</li>\r\n	<li><em><strong>Telinga bagian tengah</strong></em>&nbsp;yaitu terdiri atas gendang telinga, 3 tulang pendengar ( martil, landasan dansanggurdi) serta saluran eustachius.</li>\r\n	<li><strong><em>Telinga bagian dalam</em></strong>&nbsp;yaitu terdiri atas alat keseimbangan tubuh, tiga saluran setengah lingkaran, tingkap jorong, tingkap bundar dan yang terakhir adalah rumah siput atau disebut juga koklea.</li>\r\n</ul>\r\n\r\n<h4>Fungsi Bagian &ndash; bagian Indra Pendengar</h4>\r\n\r\n<ul>\r\n	<li><em><strong>Daun telinga</strong></em>,<em><strong>lubang telinga dan liang pendengaran&nbsp;</strong></em>berfungsi sebagai tempat untuk&nbsp;menangkap sekaligus mengumpulkan suatu gelombang bunyi yang diterima.</li>\r\n	<li><strong><em>Gendang telinga</em></strong>&nbsp;memiliki fungsi sebagai tempat untuk menerima sebuah rangsang berupa bunyi sekaligus meneruskannya langsung menuju ke bagian yang lebih dalam.</li>\r\n	<li><em><strong>Tiga tulang pendengaran ( tulang martil, landasan dan sanggurdi)</strong></em>&nbsp;memiliki fungsi sebagai tempat untuk memperkuat sebuah getaran dan juga meneruskannya langsung menuju ke rumah siput atau koklea.</li>\r\n	<li><em><strong>Tingkap jorong, tingkap bundar, tiga saluran setengah lingkaran dan koklea (rumah siput)</strong></em>&nbsp;memiliki fungsi sebagai tempat untuk&nbsp;mengubah impuls serta diteruskan menuju otak. Pada Tiga saluran setengah lingkaran juga memiliki fungsi lain sebagai penjaga keseimbangan tubuh.</li>\r\n	<li><strong><em>Saluran eustachius</em></strong>&nbsp;memiliki fungsi sebagai tempat untuk menghubungkan suatu rongga mulut dengan telinga yang berada di bagian luar.</li>\r\n</ul>\r\n\r\n<h4>Cara Kerja Telinga</h4>\r\n\r\n<p>Getaran yang ditimbulkan oleh suara ditangkap oleh daun telinga kemudian diteruskan ke saluran telinga lalu ke gendang telinga kemudian diteruskan lagi menuju tiga tulang pendengaran kemudian ke rumah siput lalu menuju sel-sel rambut dalam organ korti kemudian diteruskan lagi ke sel saraf audiotori dan yang terkahir menuju otak.</p>\r\n\r\n<h3>3. Hidung</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"21 indra manusia\" src=\"https://www.yuksinau.id/wp-content/uploads/2019/02/21-indra-manusia.jpg\" style=\"height:768px; width:1366px\" title=\"21 indra manusia\" /></p>\r\n\r\n<p>Hidung merupakan sebuah organ indra yang berfungsi untuk mengenali kondisi sekitar dengan suatu aroma atau bau yang dihasilkan. Serabut-serabut yang terdapat pada hidung merupaka saraf penciuman yang letaknya di bagian atas selaput lendir hidung. Serabut-serabut tersebut bernama olfaktori yang memiliki fungsi untuk mendeteksi setiap rangsangan dari setiap zat kimia dalam bentuk gas di udara&nbsp;<em>(kemoreseptor).</em></p>\r\n\r\n<h4><strong>Bagian &ndash; Bagian Hidung</strong></h4>\r\n\r\n<ul>\r\n	<li><strong><em>Lubang hidung</em></strong>&nbsp;memiliki fungsi sebagai tempat keluar masuknya sebuah udara</li>\r\n	<li><strong><em>Rambut hidung</em></strong>&nbsp;memiliki fungsi sebagai tempat untuk menyaring udara yang masuk ke hidung ketika bernafas</li>\r\n	<li><strong><em>Selaput lendir</em></strong>&nbsp;memiliki fungsi sebagai tempat menempelnya kotoran yang ada di hidung serta sebagai indra pembau.</li>\r\n	<li><strong><em>Serabut saraf</em></strong>&nbsp; memiliki fungsi sebagai tempat untuk mendeteksi zat kimia berupa gas yang ada pada udara pernapasan</li>\r\n	<li><strong><em>Saraf pembau</em></strong>&nbsp;memiliki fungsi sebagai tempat untuk mengirimkan bau-bauan menuju bagian otak.</li>\r\n</ul>\r\n\r\n<h4><strong>Cara Kerja Hidung</strong></h4>\r\n\r\n<p>Rangsangan berupa bau yang diterima lubang hidung diteruskan menuju ke epitelium olfaktori yang kemudian diteruskan kembali ke mukosa olfaktori lalu ke saraf olfaktori kemudian menuju ke talamus dan diteruskan lagi menuju hipotalamus hingga pada akhirnya diteruskan menuju otak.</p>\r\n\r\n<h3>4. Lidah</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"gambar panca indera telinga\" src=\"https://www.yuksinau.id/wp-content/uploads/2019/02/gambar-panca-indera-telinga.jpg\" style=\"height:768px; width:1366px\" title=\"gambar panca indera telinga\" /></p>\r\n\r\n<p>Lidah merupakan salah satu dari jenis indra yang memiliki fungsi untuk merasakan rangsangan berupa rasa dari suatu benda atau makanan yang masuk ke dalam mulut. Lidah dapat merespon rangsangan tersebut sehingga menghasilkan berbagai rasa seperti rasa manis, rasa pahit, rasa asam dan rasa asin.</p>\r\n\r\n<p>Di dalam lidah terdapat dua kelompok otot yang berbeda, yaitu otot intrinsik yang berfungsi untuk melakukan sebuah gerakan halus serta otot ekstrinsik&nbsp; yang berfungsi untuk melakukan sebuah gerakan kasar ketikan sedang mengunyah atau menelan dan mengaitkan lidah pada bagian disekitarnya</p>\r\n\r\n<p>Pada bagian lidah bila kita perhatikan terdapat banyak sekali bintil-bintil, bintil tersebut merupakan papila atau ujung saraf pengecap. Dalam setiap bintil tersebut memiliki perannya masing-masing untuk peka terhadap rasa tertentu berdasarkan letaknya di dalam lidah, diantaranya pada pangkal lidah berfungsi untuk mengecap rasa pahit, tepi lidah sebagai pengecap rasa asin, serta ujung lidah untuk mengecap rasa manis.</p>\r\n\r\n<p>Pada permukaan lidah yang ditutupi oleh tiga macam papila yakni diantaranya :</p>\r\n\r\n<ul>\r\n	<li>Papila sirku valata</li>\r\n	<li>Papila filiformis</li>\r\n	<li>Papila Fungiformis</li>\r\n</ul>\r\n\r\n<h4><strong>Cara Kerja Lidah</strong></h4>\r\n\r\n<p>Benda atau makanan yang memiliki rasa masuk kedalam mulut menuju papila kemudian diteruskan menuju saraf gustatori selanjutnya menuju medula oblongata kemudian diteruskan kembali menuju talamus dan yang terakhir diteruskan menuju otak.</p>\r\n\r\n<h3>5. Kulit</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"7 indra manusia\" src=\"https://www.yuksinau.id/wp-content/uploads/2019/02/7-indra-manusia.jpg\" style=\"height:768px; width:1366px\" title=\"7 indra manusia\" /></p>\r\n\r\n<p>Kulit merupakan salah satu dari organ indra yang dapat menerima berbagai rangsangan yang berbeda, diantaranya seperti emperatur suhu, sentuhan,rasa sakit, tekanan, tekstur, dan yang lainnya.</p>\r\n\r\n<p>Di dalam kulit terdapat sebuah reseptor yang peka terhadap segala rangsangan fisik&nbsp;<em>(mekanoreseptor)</em>. Misalnya seperti pada sentuhan, tekanan, panan, dingin, dan juga nyeri. Reseptor tersebut juga berupa ujung saraf yang bebas atau pun ujung saraf yang telah diselubungi dengan sebuah kapsul jaringat ikat.</p>\r\n\r\n<p>Pada umumnya, pada setiap jenis reseptor hanya dapat menerima satu rangsangan saja. Selain itu, kulit juga memiliki fungsi sebagai alat pelindung bagi daerah dalam dalam tubuh, contohnya untuk otot dan juga tulang. Dan tak ketinggalan sebagai alat peraba yang sangat peka terhadapt suatu rangsangan yakni dengan kata lain sebagai alat ekskresi serta untuk mengatur suhu tubuh.</p>\r\n\r\n<p><strong>Bagian &ndash; Bagian Kulit</strong></p>\r\n\r\n<ul>\r\n	<li><strong><em>Kulit ari</em></strong>&nbsp;mempunyai fungsi untuk&nbsp;mencegah masuknya sebuah bibit penyakit dan untuk mencegah penguapan air dari dalam tubuh.</li>\r\n	<li><em><strong>Kelenjar keringat</strong></em>&nbsp;mempunyai fungsi untuk menghasilkan suatu keringat</li>\r\n	<li><em><strong>Lapisan lemak</strong></em>&nbsp;mempunyai&nbsp;fungsi untuk menghangatkan suatu tubuh</li>\r\n	<li><strong><em>Otot penggerak rambut</em></strong>&nbsp;mempunyai fungsi untuk&nbsp;mengatur sebuah gerakan rambut</li>\r\n	<li><em><strong>Pembuluh darah</strong></em>&nbsp;mempunyai&nbsp;fungsi untuk mengalirkan darah keseluruh tubuh.</li>\r\n</ul>\r\n\r\n<h2>Memelihara Kesehatan Panca Indera</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"pembahasan panca indra\" src=\"https://www.yuksinau.id/wp-content/uploads/2019/02/pembahasan-panca-indra.jpg\" style=\"height:768px; width:1366px\" title=\"pembahasan panca indra\" /></p>\r\n\r\n<h3>1. Mata (Indra Penglihatan)</h3>\r\n\r\n<ol>\r\n	<li>Membaca dengan jarak yang tifak terlalu dekat atau terlalu jauh. Jarak membaca yang baik dengan ukuran &plusmn; 30 cm.</li>\r\n	<li>Tidak membaca di tempat yang kurang cahaya atau terlalu terang.</li>\r\n	<li>Tidak membaca sembari tiduran.</li>\r\n	<li>Jika mata terasa sakit atau penglihatan terganggu, segera berobat ke doket mata.</li>\r\n	<li>Perbanyak mengkonsumsi vitamin A. Sebab vitamin A sangat baik bagi kesehatan mata. diantaranya adalah sayur wortel yang merupakan sayuran dengan kandungan vitamin A yang sangat banyak.</li>\r\n	<li>Jangan menatap sinar matahari secara langsung, terlebih lagi saat terik.</li>\r\n	<li>Jaga supaya kotoran tidak masuk ke daerah mata.</li>\r\n	<li>Jangan mengucek mata jika terdapat kotoran yang masuk ke mata. Segera berikan obat tetes pada mata ketika terdapat kotoran, sebab untuk mendorong kotoran agar keluar dari mata.</li>\r\n</ol>\r\n\r\n<h3>2. Telinga (Indra Pendengaran)</h3>\r\n\r\n<p>Cara merawat telinga agar tetap berfungsi baik :</p>\r\n\r\n<ol>\r\n	<li>Menjagakebersihan telinga supaya lubang telinga tidak akan tersumbat.</li>\r\n	<li>Jangan mengorek telinga dengan benda tajam ataupun cotton bud. Sebab bagaimanapun benda tersebut dapat berpotensi merusak gendang telingamu.</li>\r\n	<li>Jangan mendengarkan bunyi-bunyian terlalu keras. Karena getaran bunyi yang kencang bisa merusak gendang telinga.</li>\r\n	<li>Jangan memakai headphone, headset atau semacamnya terlalu lama, berikan jeda setiap 10 menit sekali.</li>\r\n	<li>Hindari benturan yang berupa tamparan keras.</li>\r\n	<li>Segera pergi ke dokter jika telinga tengah mengalami gangguan. Contoh, telinga sering berdenging atau benda asing masuk ke dalamnya. Dokter yang dituju sebaiknya dokter THT, yang dimana khusus untuk menangani gangguan telinga, hidung, dan tenggorokan.</li>\r\n</ol>\r\n\r\n<p>Setelah belajar mengenai panca indra, pelajari juga&nbsp;<a href=\"https://www.yuksinau.id/perbedaan-tumbuhan-dikotil-dan-monokotil/\" title=\"Perbedaan Tumbuhan Dikotil dan Monokotil\">Perbedaan Tumbuhan Dikotil dan Monokotil</a>&nbsp;dengan penjelasan yang terperinci sehingga akan lebih mudah untuk membedakan dua jenis tumbuhan.</p>\r\n\r\n<h3>3. Hidung (Pembau)</h3>\r\n\r\n<p>Cara menjaga dan merawat hidung :</p>\r\n\r\n<ol>\r\n	<li>Jangan mandi hujan, bermain di daerah yang berdebu, dan pastikan anda tidak terkena influensa.</li>\r\n	<li>Bersihkan hidung dengan menggunakan sapu tangan atau tissue, begitu pula pada saat selepas mandi.</li>\r\n	<li>Jangan mencoba untuk mencabuti bulu-bulu yang ada di dalam hidung.</li>\r\n</ol>\r\n\r\n<h3>4. Lidah (<strong>Indra Pengecap</strong>)</h3>\r\n\r\n<p>Cara menjaga dan merawat lidah agar tetap berfungsi dengan baik :</p>\r\n\r\n<ol>\r\n	<li>Jangan mengkonsumsi makanan atau minuman yang bersuhu panas atau pun terlalu dingin, sebab bisa merusak saraf-saraf&nbsp; pengecap di dalam lidah.\r\n	<ol>\r\n		<li>Jangan lupa untuk membersihkan lidah menggunakan pembersih lidah setiap kali menyikat gigi.</li>\r\n	</ol>\r\n	</li>\r\n	<li>Mengkonsumsi vitamin C secukupnya.</li>\r\n	<li>Menggosok gigi dengan menggunakan sikat gigi yang bersih dan lembut.</li>\r\n</ol>\r\n\r\n<h3>5. Kulit (Indra Peraba)</h3>\r\n\r\n<p>Cara menjaga dan merawat kulit :</p>\r\n\r\n<ol>\r\n	<li>Mandi serta membersihkan seluruh badan dengan menggunakan sabun dan air bersih.</li>\r\n	<li>Mandi cukup 2 kali sehari, atau bila anda melakukan kegiatan yang berlebih dapat mandi saat setelah melakukan kegiatan terssebut.</li>\r\n	<li>Menjaga kebersihan pakaian.</li>\r\n	<li>Jaga agar handuk yang anda pakai tidak lembab.</li>\r\n	<li>Jangan bermain di tempat kotor atau berpolusi.</li>\r\n	<li>Jangan bertukar handuk atau baju kepada orang lain.</li>\r\n	<li>Jangan bertukar alat make up.</li>\r\n	<li>Jangan lupa mencuci tangan sebelum memegang makanan.</li>\r\n	<li>Saat henda tidur, jangan lupa untuk mencuci tangan dan juga kaki.</li>\r\n	<li>Mengoleskan baby oil jika kulit melepuh karena terkena air panas.</li>\r\n	<li>Jangan mengoles pasta gigi ketika terkena api atau air panas.</li>\r\n	<li>Konsumsi vitamin E secukupnya.</li>\r\n</ol>\r\n\r\n<p>Itulah sedikit ulasan yang dapat kami sampaikan mengenai panca indra, semoga bermanfaat.</p>\r\n\r\n<p>Referensi :</p>\r\n\r\n<p>Beny, Yustina dan Murtini. 2010.&nbsp;<em>Ilmu Pengetahuan Alam 4</em>. Jakarta. Pusat Perbukuan, Kementerian Pendidikan Nasional. 24-30. (Bab 2)</p>\r\n\r\n<p>Sularmi, dan M.D. Wijayanti. 2009.&nbsp;<em>Sains 4 Ilmu Pengetahuan Alam SD/MI Kelas IV</em>. Jakarta. Pusat Perbukuan, Departemen Pendidikan Nasional. 14-19.</p>\r\n\r\n<p>https://www.gurupendidikan.co.id/pengertian-fungsi-dan-5-jenis-panca-indera-serta-bagiannya/</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>https://pendidikan.co.id/pengertian-panca-indera-5-macam-bagian-fungsi-cara-kerja-dan-gambar/#Macam_dan_Fungsi_Panca_Indera</p>\r\n', '2019-07-10 12:33:33', '2019-07-10 12:33:47');
INSERT INTO `t_materi` (`materi_id`, `materi_judul`, `materi_foto`, `materi_post`, `materi_tanggal`, `materi_tanggal_update`) VALUES
('1562762147', '[BAB 4] Klasifikasi Makhluk Hidup: Tujuan, Manfaat, Tingkatan', '1562762147.jpg', '<p><strong>Klasifikasi Makhluk Hidup</strong>&nbsp;&ndash; Bismillah, MasyaAllah sungguh ciptaan Allah di dunia ini sangat menakjubkan. Bagaimana tidak, karena ada berbagai macam makhluk hidup yang ada di bumi ini yang bahkan tidak kita ketahui semuanya.</p>\r\n\r\n<p>Ahli biologi kemudian melakukan klasifikasi atau pengelompokan terhadap spesies dari organisme. Sehingga dengan pengelompokan itu timbullah&nbsp;<strong>klasifikasi makhluk hidup</strong>&nbsp;yang berkelanjutan.</p>\r\n\r\n<h3>A. Pengertian Klasifikasi Makhluk Hidup</h3>\r\n\r\n<p><a href=\"https://id.wikipedia.org/wiki/Klasifikasi_ilmiah\" rel=\"noopener noreferrer\" target=\"_blank\" title=\"Klasifikasi Ilmiah\">Klasifikasi</a>&nbsp;(pengelompokan) merupakan suatu cara memilah dan mengelompokkan makhluk hidup menjadi golongan atau unit tertentu.</p>\r\n\r\n<blockquote>\r\n<p><u>Tujuan klasifikasi makhluk hidup</u>&nbsp;untuk mempermudah mengenali, membandingkan, dan mempelajari makhluk hidup. Membandingkan berarti mencari persamaan dan perbedaan sifat atau ciri pada makhluk hidup.</p>\r\n</blockquote>\r\n\r\n<p><u>Manfaatnya:</u></p>\r\n\r\n<ul>\r\n	<li>Memudahkan kita dalam mempelajari makhluk hidup yang sangat beraneka ragam.</li>\r\n	<li>Mengetahui jenis-jenis makhluk hidup.</li>\r\n	<li>Mengetahui hubungan kekerabatan antara makhluk hidup satu dengan yang lain.</li>\r\n</ul>\r\n\r\n<p>Sistem klasifikasi yang kita kenal sekarang merupakan perkembangan klasifikasi makhluk hidup yang berkelanjutan. Perkembangan tersebut diantaranya klasifikasi 2, 3, 4, 5, 6 kingdom.</p>\r\n\r\n<h3>B. Sistem Klasifikasi 2 Kingdom</h3>\r\n\r\n<p>Disini organisme dikelompokkan menjadi 2 dunia besar yaitu dunia tumbuhan (<em>Kingdom Plantae</em>) dan dunia hewan (<em>Kingdom Animalia</em>).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1. Dunia Tumbuhan (<em>Kingdom Plantae</em>)</strong><br />\r\nDunia tumbuhan meliputi makhluk hidup yang mempunyai dinding sel dari bahan selulosa dan berklorofil sehingga mampu melakukan fotosintesis.</p>\r\n\r\n<p>Contoh: Ganggang, tumbuhan lumut, tumbuhan paku. Ditambah bakteri dan jamur walaupun tidak mempunyai klorofil.</p>\r\n\r\n<p><strong>2. Dunia Hewan (<em>Kingdom Animalia</em>)</strong><br />\r\nDunia hewan tidak berdinding sel, tidak berklorofil, dan bisa bergerak bebas.</p>\r\n\r\n<p>Contoh: hewan berpori (<em>Porifera</em>), cacing (<em>Vermes</em>), hewan berongga (<em>Coelenterata</em>), hewan bersel satu (<em>Protozoa</em>), hewan lunak (<em>Mollusca</em>), dan hewan bertulang belakang (<em>Chordata</em>).</p>\r\n\r\n<h3>C. Sistem Klasifikasi 3 Kingdom</h3>\r\n\r\n<p>Di klasifikasi ini memisahkan jamur yang pada klasifikasi 2 kingdom masuk ke dunia tumbuhan. Jamur dibedakan karena dinding sel jamur bukan terdiri dari bahan selulosa seperti dinding sel tumbuhan melainkan dari bahan kitin.</p>\r\n\r\n<p>Jamur juga tidak bisa membuat makanan sendiri (Hererotrof) seperti tumbuhan.</p>\r\n\r\n<p><strong>1. Dunia Jamur (<em>Kingdom Fungi</em>)</strong><br />\r\nMeliputi segala organisme yang mendapatkan makanan secara heterotrof dengan cara menyerap makanan (Absorpsi). Jamur memperoleh makanan dari makhluk hidup lain (Parasit) maupun dengan cara menyerap dari makhluk hidup yang telah mati (Saprofit).</p>\r\n\r\n<p>Ciri-ciri jamur adalah:</p>\r\n\r\n<ul>\r\n	<li>Eukariotik</li>\r\n	<li>Multiseluler</li>\r\n	<li>Dinding sel terbuat dari kitin.</li>\r\n	<li>Para anggota kerajaan ini tidak memiliki pigmen fotosintetik dan karena itu heterotrofik.</li>\r\n</ul>\r\n\r\n<p><strong>2. Dunia Tumbuhan</strong><br />\r\nMeliputi segala organisme yang bisa membuat makanannya sendiri (Autotrof) dengan melewati fotosintesis.</p>\r\n\r\n<p>Ciri-ciri kerajaan tumbuhan adalah:</p>\r\n\r\n<ul>\r\n	<li>Eukariotik</li>\r\n	<li>Multiseluler</li>\r\n	<li>Dinding sel yang terbuat dari selulosa.</li>\r\n	<li>Anggota kelompok Plantae mengandung pigmen fotosintesis dan mendapatkan energi mereka melalui itu dan karena itu autotrofik.</li>\r\n</ul>\r\n\r\n<p><strong>3. Dunia Hewan</strong><br />\r\nMeliputi segala organisme yang memperoleh makanannya secara heterotrof dengan cara memakan organisme lain.</p>\r\n\r\n<p>Sedikit kami menyinggung tentang urutan klasifikasi makhluk hidup dari tingkat tertinggi ke terendah (yang sekarang digunakan), yaitu:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"tingkatan klasifikasi makhluk hidup\" src=\"https://www.yuksinau.id/wp-content/uploads/2016/11/tingkatan-klasifikasi-makhluk-hidup.png\" style=\"height:350px; width:650px\" title=\"tingkatan klasifikasi makhluk hidup\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Domain (Daerah)</li>\r\n	<li>Kingdom (Kerajaan)</li>\r\n	<li>Phylum atau Filum (hewan)/Divisio (tumbuhan)</li>\r\n	<li>Classis (Kelas)</li>\r\n	<li>Ordo (Bangsa)</li>\r\n	<li>familia (Suku)</li>\r\n	<li>Genus (Marga)</li>\r\n	<li>dan Spesies (Jenis)</li>\r\n</ul>\r\n\r\n<h3>D. Sistem Klasifikasi 4 Kingdom</h3>\r\n\r\n<p>Sistem ini berkembang setelah ditemukan inti sel (nukleus). Ada organisme yang inti sel nya tidak mempunyai selaput, terdapat juga organisme yang inti sel nya diselubungi selaput.</p>\r\n\r\n<p><strong>1. Kingdom Monera</strong><br />\r\nAnggota kingdom Monera semuanya tidak memiliki selaput inti, untuk itu disebut organisme prokariotik.</p>\r\n\r\n<p>Contoh: bakteri dan ganggang biru-hijau.</p>\r\n\r\n<p><strong>2. Kingdom Fungi</strong><br />\r\nSegala jenis jamur dimasukkan pada kingdom fungi</p>\r\n\r\n<p><strong>3. Kingdom Plantae</strong><br />\r\nSemua ganggang (kecuali ganggang biru-hijau), tumbuhan paku, tumbuhan lumut,&nbsp;dan tumbuhan biji termasuk dalam kingdom ini.</p>\r\n\r\n<p><strong>4. Kingdom Animalia</strong><br />\r\nSemua hewan mulai dari Protozoa hingga Chordata termasuk ke dalam kingdom animalia.</p>\r\n\r\n<h3>E. Sistem Klasifikasi 5 Kingdom</h3>\r\n\r\n<p><em>Whittaker</em>&nbsp;mengusulkan klasifikasi makhluk hidup menjadi 5 kingdom, yaitu Monera, Protista, Fungi, Plantae, dan Animalia karena kemajuan IPTEK.</p>\r\n\r\n<p>Di sistem ini ganggang yang sebelumnya dimasukkan di kingdom Plantae, serta Protozoa yang dahulu dimasukkan di dalam kingdom Animalia kemudian dikelompokkan menjadi satu kingdom, yaitu Kingdom Protista.</p>\r\n\r\n<p><strong>1. Kingdom Monera</strong><br />\r\nTerdiri dari bakteri dan ganggang biru-hijau. Dilihat dari&nbsp;<a href=\"https://www.yuksinau.id/gambar-bagian-mikroskop-dan-fungsinya/\" title=\"Gambar Bagian Mikroskop dan Fungsinya\">mikroskop</a>&nbsp;kebanyakan bakteri terlhat mempunyai ukuran dan bentuk yang sama.</p>\r\n\r\n<p>Tetapi lewat bukti biologi molekular dijumpai perbedaan pada ARN&nbsp;<a href=\"https://www.yuksinau.id/struktur-dan-fungsi-ribosom/\" title=\"Struktur dan Fungsi Ribosom\">ribosom</a>. Sehingga ahli mikrobiologi membedakan bakteri menjadi eubacteria dan archaebacteria.</p>\r\n\r\n<ul>\r\n	<li>Eubacteria ialah kelompok bakteri yang menghasilkan gas metan dari sumber karbon yang sederhana dan hidup di lingkungan biasa</li>\r\n	<li>Archaebacteria ialah kelompok bakteri yang dapat hidup di lingkungan ekstrim, misalnya pada sumber air panas, di dalam laut dengan kadar garam tinggi, atau di tempat yang asam.</li>\r\n</ul>\r\n\r\n<p><strong>2. Kingdom Protista</strong><br />\r\nTerdiri dari organisme yang mempunyai selaput inti dan bersel tunggal dan bisa ditemui dimana saja. Protista dikelompokkan menjadi tiga, yaitu protista menyerupai tumbuhan (Ganggang), dan protista menyerupai jamur, protista menyerupai hewan (Protozoa),.</p>\r\n\r\n<p>Ciri-ciri: Hampir semua protista hidup di air karena mereka tidak mempunyai pelindung yang dapat menjaga tubuhnya dari kekeringan.</p>\r\n\r\n<p><strong>3. Kingdom Fungi</strong><br />\r\nBiasanya bersel banyak, mempunyai membran inti sekaligus peran sebagai dekomposer pada lingkungan. Jamur mendapatkan makanan dengan cara saprofit atau parasit.</p>\r\n\r\n<p><strong>4. Kingdom Plantae</strong><br />\r\nMerupakan organisme yang memiliki membran inti yang bisa membuat makanannya sendiri dan bersel banyak. Biasanya kingdom ini hidup di darat. Cara berkembang biak bisa secara kawin dan tidak kawin.</p>\r\n\r\n<p><strong>5. Kingdom Animalia</strong><br />\r\nMerupakan organisme yang memakan makhluk hidup lain untuk kebutuhan makanannya.&nbsp;<a href=\"https://www.yuksinau.id/organel-sel-hewan/\" title=\"Organel Sel Hewan: Fungsi, Struktur, Gambar\">Sel hewan</a>&nbsp;tidak mempunyai dinding sel.</p>\r\n\r\n<h3>F. Sistem Klasifikasi Enam Kingdom</h3>\r\n\r\n<p>Sistem klasifikasi yang diuraikan diatas belum memasukkan virus diklasifikasinya. Tubuh virus tersusun atas asam nuklea yang diselubungi oleh protein.</p>\r\n\r\n<p>Di luar sel hidup, virus merupakan benda mati. Virus hanya bisa hidup dan memperbanyak diri dalam sel hidup inangnya.</p>\r\n\r\n<p>Sistem klasifikasi 6 kingdom merupakan sistem klasifikasi 5 kingdom ditambah dengan kingdom Virus.</p>\r\n\r\n<p>Tulisan yang berkaitan dengan topik&nbsp;<a href=\"https://www.yuksinau.id/klasifikasi-makhluk-hidup/\" title=\"Klasifikasi Makhluk Hidup\">klasifikasi makhluk hidup</a>&nbsp;akan berlanjut di seri artikel Yuksinau.id berikutnya, meliputi contoh soal dan membahas tingkatan klasifikasi diatas secara detail.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Referensi:<br />\r\nwww.kuliah.info/2015/10/klasifikasi-makhluk-hidup.html<br />\r\nhedisasrawan.blogspot.co.id/2013/09/klasifikasi-makhluk-hidup-artikel.html</p>\r\n', '2019-07-10 12:35:47', '2019-07-10 12:36:01'),
('1562762198', '[BAB5] Jaringan Meristem: Pengertian, Ciri, Fungsi', '1562762198.jpg', '<p>Jaringan meristem adalah&nbsp;jaringan yang sel penyusunnya bersifat embrional, artinya sel-selnya senantiasa aktif membelah diri untuk menambah jumlah sel tubuh. Jaringan ini menjadi titik pokok proses pertumbuhan pada tanaman.</p>\r\n\r\n<p>Umumnya, jaringannya terletak di bagian ujung akar, ujung batang, kambium, dan pangkal batang. Nah, disini Tamilchill akan mengidentifikasi jaringan meristem pada tumbuhan.</p>\r\n\r\n<h2>Ciri-Ciri Jaringan Meristem</h2>\r\n\r\n<p>Adapun ciri atau sifat jaringan ini sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li>Memiliki sel berbentuk prismatis, kubus, atau membulat.</li>\r\n	<li>Tersusun atas sel-sel yang aktif membelah.</li>\r\n	<li>Terdapat protoplasma pada sel dalam jumlah yang banyak.</li>\r\n	<li>Sel satu dengan sel lainnya tidak memiliki rongga, sehingga struktur jaringanya menjadi padat.</li>\r\n	<li>Sel mudanya masih belum berdiferensiasi, sehingga dapat tumbuh menjadi jaringan apa saja.</li>\r\n	<li>Bagian dalam sel tidak memiliki kandungan zat makanan.</li>\r\n	<li>Tiap sel mempunyai satu atau dua inti sel yang berukuran besar.</li>\r\n	<li>Vakola pada sel berukuran kecil atau bahkan tidak ada sama sekali.</li>\r\n</ul>\r\n\r\n<h2>Fungsi Jaringan Meristem</h2>\r\n\r\n<p>Secara umum, fungsi jaringan ini adalah sebagai jaringan yang menyokong pertumbuhan tanaman baik ke arah atas (meninggi) maupun ke arah samping (membesar). Namun, masing-masing jaringan ini memiliki fungsi berlainan yang lebih spesifik seperti:</p>\r\n\r\n<ol>\r\n	<li>Sebagai jaringan penyokong pertumbuhuan diameter batang.</li>\r\n	<li>Sebagai jaringan penyokong pertumbuhan meninggi pada batang dan memanjang pada akar.</li>\r\n	<li>Sebagai jaringan penyokong pertumbuhan organ perantara tanaman.</li>\r\n</ol>\r\n\r\n<h2>Bentuk Jaringan Meristem</h2>\r\n\r\n<p>Berdasarkan asal pembentukannya, terdapat tiga macam pembagian jaringan seperti berikut:</p>\r\n\r\n<h3><strong>1. Promeristem</strong></h3>\r\n\r\n<p>Jaringan yang telah ada ketika tumbuhan masih dalam bentuk embrio.&nbsp;Berdasarkan teori Harbelendt, jaringan promeristem akan berkembang menjadi tiga sistem, yaitu:</p>\r\n\r\n<ul>\r\n	<li><strong>Jaringan protoderm</strong>: Jaringan yang segera berkembang menjadi epidermis. Epidermis merupakan jaringan paling luar pada tumbuhan. Lapisan epidermis hanya tersusun atas satu lapisan sel. Didalam sel epidermis terdapat protoplas meski jumlahnya sangat sedikit. Pada bagian tengah epidermis terdapat vakuola yang berukuran besar dan tidak terdapat plastida.</li>\r\n	<li><strong>Jaringan meristem dasar</strong>: Jaringan yang nantinya&nbsp;berkembang menjadi jaringan parenkim. Jaringan parenkim terdapat disebelah dalam jaringan epidermis. Berbeda dengan jaringan meristem yang padat, jaringan parenkim cenderung berongga karena terdapat ruang antara sel satu dengan sel lainnya.</li>\r\n	<li><strong>Prokambium</strong>: Jaringan yang akan berkembang menjadi silider pusat pada batang tumbuhan.</li>\r\n</ul>\r\n\r\n<h3><strong>2. Meristem Primer</strong></h3>\r\n\r\n<p>Jaringan pada tumbuhan dewasa dan masih membelah diri.&nbsp;Pembelahan sel merupakan alasan terjadinya pertumbuhan primer pada tumbuhan. Pertumbuhan primer meliputi batang yang bertambah tinggi dan akar yang semakin panjang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>3. Meristem Sekunder</strong></h3>\r\n\r\n<p>Jaringan yang berasal dari meristem primer yang mengalami diferensiasi dan spesialisasi.&nbsp;Aktifitas yang dilakukan oleh meristem sekunder adalah:</p>\r\n\r\n<ul>\r\n	<li>Menambah diameter tanaman dan membentuk lingkaran tahun pada penampang batang tanaman.</li>\r\n	<li>Membentuk jari-jari empulur.</li>\r\n	<li>Membentuk jaringan berkas angkut sekunder.</li>\r\n</ul>\r\n\r\n<h2>Letak Jaringan Meristem</h2>\r\n\r\n<p>Sedangkan berdasarkan letaknya,&nbsp;jaringan ini dibedakan menjadi tiga, yaitu:</p>\r\n\r\n<h3>1. Meristem Apikal</h3>\r\n\r\n<p>Meristem apikal terletak diujung akar dan batang dan mampu menghasilkan pemanjangan. Dalam proses pemanjangan, nantinya dihasilkan tunas apikal yang mampu berkembang menjadi cabang samping.</p>\r\n\r\n<h3>2. Meristem Interkalar</h3>\r\n\r\n<p>Jaringan yang tedapat diantara meristem primer dan dewasa. Meristem semacam ini dijumpai pada tumbuhan yang batangnya beruas-ruas, misalnya keluarga rumput-rumputan.</p>\r\n\r\n<h3>3. Meristem Lateral</h3>\r\n\r\n<p>Meristem lateral menghasilkan pertumbuhan sekunder.&nbsp;Yang termasuk meristem lateral adalah&nbsp;kambium&nbsp;dan felogen atau kambium gabus. Kambium terdapat pada tumbuhan berbiji terbuka dan tumbuhan dikotil.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Demikianlah ringkasan mengenai jaringan meristem. Satu hal lagi, Tamilchill juga menyajikan materi mengenai&nbsp;<a href=\"https://www.yuksinau.id/otot-lurik\" title=\"otot lurik\">otot lurik</a>. Semoga dapat menambah wawasan Anda.</p>\r\n', '2019-07-10 12:36:38', '2019-07-10 12:38:00'),
('1562762264', '[BAB 6] Otot Lurik: Pengertian, Ciri, Bagian, Fungsi', '1562762264.jpg', '<p>Otot lurik&nbsp;atau disebut juga dengan otot rangka adalah sejenis otot yang menempel pada rangka tubuh dan digunakan untuk pergerakan. Sesuai namanya, otot ini memiliki tampilan&nbsp;lurik antara gelap (aktin) dan terang (miosin) dengan tampilannya yang selang seling.</p>\r\n\r\n<p>Otot yang terdapat pada rangka tubuh ini dapat digerakkan atas kehendak kita, sehingga disebut sebagai otot motorik. Otot lurik juga mampu bekerja dengan keras karena memiliki banyak inti sel. Namun, otot ini juga membutuhkan istirahat setelah beraktivitas karena mudah lelah.</p>\r\n\r\n<p>Nah, disini Tamilchill akan menguraikannya beserta gambar agar tidak membosankan.</p>\r\n\r\n<h2>Ciri-Ciri Otot Lurik</h2>\r\n\r\n<p>Otot lurik memiliki ciri yang membedakannya dengan otot lainnya. Adapun ciri-cirinya sebagai berikut:</p>\r\n\r\n<ul>\r\n	<li>Terdapat pada otot paha, otot betis, otot dada, dan seluruh rangka tubuh manusia.</li>\r\n	<li>Memiliki bentuk selindris, panjang, dan memiliki banyak inti sel (multinuklei).</li>\r\n	<li>Mempunyai ribuan serabut yang membentuk jaringan otot yang tersusun rapi.</li>\r\n	<li>Bergerak dibawah kesadaran (Volunter).</li>\r\n	<li>Dapat bekerja dengan keras dan cepat namun mudah lelah, dan harus diistirahatkan secara berkala sehabis beraktivitas.</li>\r\n	<li>Umumnya,&nbsp;otot rangka mempunyai diameter 50 mikron dan panjang hingga 2,5 cm.</li>\r\n	<li>Melekat pada rangka tubuh manusia atau pada hewan.</li>\r\n	<li>Letak inti sel berada di tepi (perifer).</li>\r\n	<li>Cepat dalam berkontraksi (berkerut).</li>\r\n</ul>\r\n\r\n<h2>Bagian-Bagian Otot Lurik</h2>\r\n\r\n<p>Bagian-bagian dari otot rangka sebagai berikut:</p>\r\n\r\n<p><strong>1. Sarkolema</strong></p>\r\n\r\n<p>Sarkolema merupakan membran yang melapisi suatu sel otot yang berfungsi sebagai pelindung otot.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2. Sarkoplasma</strong></p>\r\n\r\n<p>Sarkoplasma merupakan cairan sel otot yang memiliki fungsi untuk tempat dimana miofibril dan miofilamen berada.</p>\r\n\r\n<p><strong>3. Miofibril</strong></p>\r\n\r\n<p>Miofibril merupakan serat-serat pada otot. Miofibril terbagi menjad dua macam, yaitu:</p>\r\n\r\n<ul>\r\n	<li>Miofilamen homogen (terdapat pada otot polos)</li>\r\n	<li>Miofilamen heterogen (terdapat pada otot jantung/otot cardiak dan pada otot rangka/otot lurik)</li>\r\n</ul>\r\n\r\n<p><strong>4. Miofilamen</strong></p>\r\n\r\n<p>Miofilamen adalah benang-benang atau filamen halus yang berasal dari miofibril.</p>\r\n\r\n<h2>Fungsi Otot Lurik</h2>\r\n\r\n<p>Selain dari ciri dan bagiannya, otot ini juga memiliki fungsi untuk&nbsp;menggerakkan rangka tubuh manusia atau hewan, dan dapat bergerak leluasa sesuai dengan kehendak.</p>\r\n\r\n<p>Dengan begini, otot ini sangat membantu dalam bekerja secara keras dan cepat. Contoh otot lurik adalah otot lengan, otot betis, otot perut, otot paha.</p>\r\n\r\n<h2>Cara Kerja Otot Lurik</h2>\r\n\r\n<p>Otot ini bekerja dengan cara kontraksi dan relaksasi. Kontraksi yaitu saat melakukan gerakan yang memerlukan kekuatan dan kerja lebih ekstra, seperti saat menaiki tangga atau berlari.</p>\r\n\r\n<p>Sedangkan relaksasi dilakukan saat selesai beraktivitas atau melakukan tugas berat dengan melenturkan bagian tubuh, seperti yang biasa dilakukan adalah dengan merenggangkan tubuh.</p>\r\n\r\n<p>Dengan begitu, maka Anda dapat mencegah kram atau tekanan, sekaligus mengembalikan kekuatan setelah melakukan aktivitas yang berat.</p>\r\n\r\n<p>Semua gerakan tersebut dikendalikan oleh bagian otak yang mengatur syaraf pusat dengan cara mengolah perintah manusia. Misalnya merespon untuk berjalan atau berlari kemudian meminta otot bagian tubuh yang dibutuhkan untuk bergerak mengikuti kemauan kita.</p>\r\n\r\n<p>Cara kerja yang dilakukan terjadi dalam keadaan sadar atau dikendalikan secara langsung oleh individu tersebut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Demikianlah pembahasan mengenai otot lurik beserta ciri, bagian, fungsi, dan cara kerjanya. Diluar pembahasan ini, Tamilchill juga mengulas mengenai&nbsp;<a href=\"https://www.yuksinau.id/mollusca\" title=\"mollusca\">mollusca</a>.</p>\r\n', '2019-07-10 12:37:44', '2019-07-10 12:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `t_menu`
--

CREATE TABLE `t_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_nama` text DEFAULT NULL,
  `menu_detail` text DEFAULT NULL,
  `menu_foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_menu`
--

INSERT INTO `t_menu` (`menu_id`, `menu_nama`, `menu_detail`, `menu_foto`) VALUES
(1, 'Kompetensi Inti', '<h2 style=\"text-align:center\">Kompetensi Inti</h2>\r\n\r\n<p>Menghargai dan menghayati perilaku jujur, disiplin, tanggung jawab, peduli (toleransi,gotong royong) santun, percaya diri, dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya</p>\r\n', 'komptensi_inti.jpg'),
(2, 'Kompetensi Dasar', '<h2 style=\"text-align:center\">Kompetensi Dasar</h2>\r\n\r\n<p style=\"text-align:justify\">Menunjukkan perilaku ilmiah&nbsp; (memiliki rasa ingin tahu, objektif, jujurteliti, cermat, tekun, hati-hati, bertanggungjawab, terbuka, kritis, kreatif, inovatif dan peduli lingkungan) dan bekerja sama dalam aktivitas sehari-hari sebagai wujud implementasi sikap dalam melakukan pengamatan, percobaan,&nbsp; dan berdiskusi.</p>\r\n', 'komptensi_dasar.jpg'),
(3, 'Tujuan Pembelajaran', '<h2 style=\"text-align:center\">Tujuan Pembelajaran</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'tujuan_pembelajaran.jpg'),
(4, 'Indikator', '<h2 style=\"text-align:center\">Indikator</h2>\r\n\r\n<p style=\"text-align:center\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'indikator.jpg'),
(5, 'Tentang', '<h2 style=\"text-align:center\">Tentang</h2>\r\n\r\n<p style=\"text-align:center\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', 'tentang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa`
--

CREATE TABLE `t_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nama` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_siswa`
--

INSERT INTO `t_siswa` (`siswa_id`, `siswa_nama`) VALUES
(12311101, 'Ariyanto'),
(12311102, 'Ayu Septi'),
(12311103, 'Tika Yulianti'),
(12311104, 'Aulia'),
(12311105, 'Pratiwi'),
(12311106, 'Utami'),
(12311107, 'Anggi'),
(12311108, 'Tri'),
(12311109, 'Dwi'),
(12311110, 'Agus'),
(12311111, 'Lestari'),
(12311112, 'Maria'),
(12311113, 'Novita'),
(12311114, 'Tyas'),
(12311115, 'Nur'),
(12311116, 'Wahyu'),
(12311117, 'Ade'),
(12311118, 'Riza'),
(12311119, 'Arya'),
(12311120, 'Hadi'),
(12311121, 'Bayu'),
(12311122, 'Ria'),
(12311123, 'Dian'),
(12311124, 'Eka'),
(12311125, 'Indah'),
(12311126, 'Angga'),
(12311127, 'Rizal'),
(12311128, 'Mila'),
(12311129, 'Lia'),
(12311130, 'Yani'),
(12311131, 'Rina'),
(12311132, 'Adit'),
(12311133, 'Astuti'),
(12311134, 'Indra'),
(12311135, 'Yudi'),
(12311136, 'Adi'),
(12311137, 'Putra'),
(12311138, 'Nurul'),
(12311139, 'Yulia'),
(12311140, 'Anna'),
(12311141, 'Gita'),
(12311142, 'Andy'),
(12311143, 'Rian'),
(12311144, 'Andi'),
(12311145, 'Arif'),
(12311146, 'Annisa'),
(12311147, 'Rini'),
(12311148, 'Fajar'),
(12311149, 'Ilham'),
(12311150, 'Sari'),
(12311151, 'Sri'),
(12311152, 'Rizki'),
(12311153, 'Amalia'),
(12311154, 'Kusuma'),
(12311155, 'Rio'),
(12311156, 'Dinda'),
(12311157, 'Ika'),
(12311158, 'Yuni'),
(12311159, 'Maya'),
(12311160, 'Devi'),
(12311161, 'Widyanti'),
(12311162, 'Agung'),
(12311163, 'Andre'),
(12311164, 'Putri'),
(12311165, 'Dewi'),
(12311166, 'Wulan'),
(12311167, 'Ajie'),
(12311168, 'Budi'),
(12311169, 'Reza'),
(12311170, 'Yunita'),
(12311171, 'Anto Yulianto');

-- --------------------------------------------------------

--
-- Table structure for table `t_soal`
--

CREATE TABLE `t_soal` (
  `soal_id` int(11) NOT NULL,
  `soal_nama` text DEFAULT NULL,
  `soal_data` text DEFAULT NULL,
  `soal_dibuat` date DEFAULT NULL,
  `soal_diperbarui` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_soal`
--

INSERT INTO `t_soal` (`soal_id`, `soal_nama`, `soal_data`, `soal_dibuat`, `soal_diperbarui`) VALUES
(1, 'Soal latihan biologi [Part 1]', 'a:10:{i:1;a:6:{s:10:\"pertanyaan\";s:25:\"Rangka tersusun dari .. ?\";s:1:\"a\";s:17:\"Tulang dan daging\";s:1:\"b\";s:15:\"Tulang dan otot\";s:1:\"c\";s:16:\"Tulang dan kulit\";s:1:\"d\";s:16:\"Rangkaian tulang\";s:5:\"kunci\";s:1:\"d\";}i:2;a:6:{s:10:\"pertanyaan\";s:80:\"Alat indra yang paling peka untuk membedakan benda panas dan benda dingin adalah\";s:1:\"a\";s:6:\"Hidung\";s:1:\"b\";s:5:\"Kulit\";s:1:\"c\";s:4:\"Mata\";s:1:\"d\";s:7:\"Telinga\";s:5:\"kunci\";s:1:\"b\";}i:3;a:6:{s:10:\"pertanyaan\";s:31:\"Penghubung antar tulang disebut\";s:1:\"a\";s:4:\"Otot\";s:1:\"b\";s:5:\"Sendi\";s:1:\"c\";s:6:\"Daging\";s:1:\"d\";s:6:\"Rangka\";s:5:\"kunci\";s:1:\"b\";}i:4;a:6:{s:10:\"pertanyaan\";s:44:\"Rangsangan yang dapat diterima hidung berupa\";s:1:\"a\";s:7:\"Getaran\";s:1:\"b\";s:7:\"Larutan\";s:1:\"c\";s:3:\"Bau\";s:1:\"d\";s:6:\"Cahaya\";s:5:\"kunci\";s:1:\"c\";}i:5;a:6:{s:10:\"pertanyaan\";s:35:\"Alat indra bagi tubuh berguna untuk\";s:1:\"a\";s:27:\"Mengenal keadaan luar tubuh\";s:1:\"b\";s:22:\"Melindungi organ tubuh\";s:1:\"c\";s:16:\"Menguatkan tubuh\";s:1:\"d\";s:23:\"Mengetahui posisi tubuh\";s:5:\"kunci\";s:1:\"a\";}i:6;a:6:{s:10:\"pertanyaan\";s:48:\"Daun kebanyakan berwarna hijau karena mengandung\";s:1:\"a\";s:7:\"Oksigen\";s:1:\"b\";s:8:\"Krolofil\";s:1:\"c\";s:3:\"Air\";s:1:\"d\";s:14:\"Karbondioksida\";s:5:\"kunci\";s:1:\"b\";}i:7;a:6:{s:10:\"pertanyaan\";s:76:\"Bagian tumbuhan yang berfungsi mencari air dan zat hara didalam tanah adalah\";s:1:\"a\";s:4:\"Daun\";s:1:\"b\";s:6:\"Batang\";s:1:\"c\";s:5:\"Bunga\";s:1:\"d\";s:4:\"Akar\";s:5:\"kunci\";s:1:\"d\";}i:8;a:6:{s:10:\"pertanyaan\";s:161:\"Perhatikan fungsi-fungsi berikut :\r\nA. Tempat memasak makanan\r\nB. Sebagai alat pernapasan\r\nC. Tempat berlangsungnya proses penguapan\r\nD. Menyerap air dalam tanah\";s:1:\"a\";s:7:\"1 dan 2\";s:1:\"b\";s:7:\"1 dan 3\";s:1:\"c\";s:10:\"1, 2 dan 3\";s:1:\"d\";s:13:\"1, 2, 3 dan 4\";s:5:\"kunci\";s:1:\"c\";}i:9;a:6:{s:10:\"pertanyaan\";s:78:\"Bagian tumbuhan yang berfungsi sebagai alat transportasi atau pengankut adalah\";s:1:\"a\";s:6:\"Batang\";s:1:\"b\";s:4:\"Akar\";s:1:\"c\";s:4:\"Daun\";s:1:\"d\";s:5:\"Bunga\";s:5:\"kunci\";s:1:\"a\";}i:10;a:6:{s:10:\"pertanyaan\";s:23:\"Daun selalu tumbuh dari\";s:1:\"a\";s:6:\"Batang\";s:1:\"b\";s:4:\"Akar\";s:1:\"c\";s:5:\"Bunga\";s:1:\"d\";s:4:\"Biji\";s:5:\"kunci\";s:1:\"a\";}}', '2019-07-02', '2023-12-07'),
(2, 'Soal latihan biologi [Part 2]', 'a:10:{i:1;a:6:{s:10:\"pertanyaan\";s:44:\"Lebah mengambil . . . . .yang ada ditumbuhan\";s:1:\"a\";s:5:\"Bunga\";s:1:\"b\";s:5:\"Putik\";s:1:\"c\";s:11:\"Serbuk sari\";s:1:\"d\";s:6:\"Nektar\";s:5:\"kunci\";s:1:\"d\";}i:2;a:6:{s:10:\"pertanyaan\";s:65:\"Dibawah ini yang merupakan salah satu makanan burung elang adalah\";s:1:\"a\";s:5:\"Badak\";s:1:\"b\";s:7:\"Kelinci\";s:1:\"c\";s:6:\"Jagung\";s:1:\"d\";s:6:\"Papaya\";s:5:\"kunci\";s:1:\"b\";}i:3;a:6:{s:10:\"pertanyaan\";s:113:\"Walaupun bertubuh kecil laba-laba merupakan . . . . . karena memangsa hewan kecil lain yang terjebak disarangnya.\";s:1:\"a\";s:9:\"Karnivora\";s:1:\"b\";s:8:\"Omnivora\";s:1:\"c\";s:9:\"Herbivora\";s:1:\"d\";s:8:\"Ortovora\";s:5:\"kunci\";s:1:\"a\";}i:4;a:6:{s:10:\"pertanyaan\";s:82:\"Hewan yang bersumber makanannya berupa jagung, cacing, beras, dan ulat adalah. . .\";s:1:\"a\";s:6:\"Anjing\";s:1:\"b\";s:4:\"Ayam\";s:1:\"c\";s:15:\"Burung kakaktua\";s:1:\"d\";s:6:\"Kucing\";s:5:\"kunci\";s:1:\"b\";}i:5;a:6:{s:10:\"pertanyaan\";s:66:\"Fungsi taring dan cakar yang tajam pada kucing adalah untuk. . . .\";s:1:\"a\";s:19:\"Menangkap mangsanya\";s:1:\"b\";s:18:\"Mendapatkan nectar\";s:1:\"c\";s:17:\"Menyobek dedaunan\";s:1:\"d\";s:27:\"Melompat dari tempat tinggi\";s:5:\"kunci\";s:1:\"a\";}i:6;a:6:{s:10:\"pertanyaan\";s:76:\"Seluruh tahap pertumbuhan yang dialami makhluk hidup selama hidupnya disebut\";s:1:\"a\";s:12:\"Metamorfosis\";s:1:\"b\";s:16:\"Pengembangbiakan\";s:1:\"c\";s:11:\"Pertumbuhan\";s:1:\"d\";s:10:\"Daur hidup\";s:5:\"kunci\";s:1:\"d\";}i:7;a:6:{s:10:\"pertanyaan\";s:57:\"Hewan yang mengalami metamorfosis sempurna adalah. . . ..\";s:1:\"a\";s:8:\"Belalang\";s:1:\"b\";s:9:\"Kupu-kupu\";s:1:\"c\";s:5:\"Katak\";s:1:\"d\";s:6:\"Kecoak\";s:5:\"kunci\";s:1:\"b\";}i:8;a:6:{s:10:\"pertanyaan\";s:69:\"Hewan berikut ini yang mengalami metamorfosis tidak sempurna adalah. \";s:1:\"a\";s:9:\"Kupu-kupu\";s:1:\"b\";s:5:\"Lalat\";s:1:\"c\";s:6:\"Kecoak\";s:1:\"d\";s:5:\"Katak\";s:5:\"kunci\";s:1:\"c\";}i:9;a:6:{s:10:\"pertanyaan\";s:85:\"Serangga dibawah ini yang mengalami tahap kepompong (pupa) dalam daur hidupnya adalah\";s:1:\"a\";s:6:\"Kecoak\";s:1:\"b\";s:9:\"Laba-laba\";s:1:\"c\";s:6:\"Nyamuk\";s:1:\"d\";s:8:\"Belalang\";s:5:\"kunci\";s:1:\"c\";}i:10;a:6:{s:10:\"pertanyaan\";s:31:\"Telur kupu-kupu menetas menjadi\";s:1:\"a\";s:4:\"Ulat\";s:1:\"b\";s:9:\"Kepompong\";s:1:\"c\";s:6:\"Berudu\";s:1:\"d\";s:4:\"Pupa\";s:5:\"kunci\";s:1:\"a\";}}', '2019-07-02', '2019-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `t_soal_detail`
--

CREATE TABLE `t_soal_detail` (
  `soal_detail_id` int(11) NOT NULL,
  `soal_id` int(11) DEFAULT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `nilai_siswa` text DEFAULT NULL,
  `soal_detail_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_soal_detail`
--

INSERT INTO `t_soal_detail` (`soal_detail_id`, `soal_id`, `siswa_id`, `nilai_siswa`, `soal_detail_data`) VALUES
(1, 1, 12311111, '90', 'a:10:{i:1;s:1:\"d\";i:2;s:1:\"b\";i:3;s:1:\"b\";i:4;s:1:\"c\";i:5;s:1:\"a\";i:6;s:1:\"b\";i:7;s:1:\"d\";i:8;s:1:\"d\";i:9;s:1:\"a\";i:10;s:1:\"a\";}'),
(2, 1, 12311101, '70', 'a:10:{i:1;s:1:\"d\";i:2;s:1:\"b\";i:3;s:1:\"b\";i:4;s:1:\"c\";i:5;s:1:\"c\";i:6;s:1:\"b\";i:7;s:1:\"d\";i:8;s:1:\"d\";i:9;s:1:\"a\";i:10;s:1:\"d\";}'),
(3, 1, 12311112, '30', 'a:10:{i:1;s:1:\"c\";i:2;s:1:\"c\";i:3;s:1:\"a\";i:4;s:1:\"a\";i:5;s:1:\"a\";i:6;s:1:\"a\";i:7;s:1:\"a\";i:8;s:1:\"a\";i:9;s:1:\"a\";i:10;s:1:\"a\";}'),
(4, 1, 12311115, '40', 'a:10:{i:1;s:1:\"a\";i:2;s:1:\"c\";i:3;s:1:\"c\";i:4;s:1:\"c\";i:5;s:1:\"a\";i:6;s:1:\"b\";i:7;s:1:\"b\";i:8;s:1:\"c\";i:9;s:1:\"c\";i:10;s:1:\"d\";}'),
(5, 1, 12311110, '30', 'a:10:{i:1;s:1:\"a\";i:2;s:1:\"a\";i:3;s:1:\"b\";i:4;s:1:\"c\";i:5;s:1:\"d\";i:6;s:1:\"b\";i:7;s:1:\"a\";i:8;s:1:\"a\";i:9;s:1:\"c\";i:10;s:1:\"b\";}');

-- --------------------------------------------------------

--
-- Table structure for table `t_soal_uraian`
--

CREATE TABLE `t_soal_uraian` (
  `soal_uraian_id` int(11) NOT NULL,
  `soal_uraian_nama` text DEFAULT NULL,
  `soal_uraian_data` text DEFAULT NULL,
  `soal_uraian_dibuat` timestamp NULL DEFAULT current_timestamp(),
  `soal_uraian_diperbarui` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_soal_uraian`
--

INSERT INTO `t_soal_uraian` (`soal_uraian_id`, `soal_uraian_nama`, `soal_uraian_data`, `soal_uraian_dibuat`, `soal_uraian_diperbarui`) VALUES
(1, 'Soal Uraian', 'a:10:{i:1;a:1:{s:10:\"pertanyaan\";s:25:\"Rangka tersusun dari .. ?\";}i:2;a:1:{s:10:\"pertanyaan\";s:80:\"Alat indra yang paling peka untuk membedakan benda panas dan benda dingin adalah\";}i:3;a:1:{s:10:\"pertanyaan\";s:31:\"Penghubung antar tulang disebut\";}i:4;a:1:{s:10:\"pertanyaan\";s:44:\"Rangsangan yang dapat diterima hidung berupa\";}i:5;a:1:{s:10:\"pertanyaan\";s:35:\"Alat indra bagi tubuh berguna untuk\";}i:6;a:1:{s:10:\"pertanyaan\";s:48:\"Daun kebanyakan berwarna hijau karena mengandung\";}i:7;a:1:{s:10:\"pertanyaan\";s:76:\"Bagian tumbuhan yang berfungsi mencari air dan zat hara didalam tanah adalah\";}i:8;a:1:{s:10:\"pertanyaan\";s:161:\"Perhatikan fungsi-fungsi berikut :\r\nA. Tempat memasak makanan\r\nB. Sebagai alat pernapasan\r\nC. Tempat berlangsungnya proses penguapan\r\nD. Menyerap air dalam tanah\";}i:9;a:1:{s:10:\"pertanyaan\";s:78:\"Bagian tumbuhan yang berfungsi sebagai alat transportasi atau pengankut adalah\";}i:10;a:1:{s:10:\"pertanyaan\";s:23:\"Daun selalu tumbuh dari\";}}', '2019-07-20 10:23:22', '2019-07-20 12:10:53'),
(2, 'Soal 2', 'a:10:{i:1;a:1:{s:10:\"pertanyaan\";s:6:\"Soal a\";}i:2;a:1:{s:10:\"pertanyaan\";s:6:\"Soal b\";}i:3;a:1:{s:10:\"pertanyaan\";s:6:\"Soal c\";}i:4;a:1:{s:10:\"pertanyaan\";s:6:\"Soal d\";}i:5;a:1:{s:10:\"pertanyaan\";s:6:\"Soal e\";}i:6;a:1:{s:10:\"pertanyaan\";s:6:\"Soal f\";}i:7;a:1:{s:10:\"pertanyaan\";s:6:\"Soal g\";}i:8;a:1:{s:10:\"pertanyaan\";s:6:\"Soal h\";}i:9;a:1:{s:10:\"pertanyaan\";s:6:\"Soal i\";}i:10;a:1:{s:10:\"pertanyaan\";s:6:\"Soal j\";}}', '2019-07-20 10:56:56', '2019-07-20 10:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `t_soal_uraian_detail`
--

CREATE TABLE `t_soal_uraian_detail` (
  `soal_uraian_detail_id` int(11) NOT NULL,
  `soal_uraian_id` int(11) DEFAULT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `nilai_siswa` text DEFAULT NULL,
  `soal_uraian_detail_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `t_statistik`
--

CREATE TABLE `t_statistik` (
  `ip` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `online` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_statistik`
--

INSERT INTO `t_statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.1', '2019-10-03', 76, '1570120889'),
('127.0.0.1', '2023-12-07', 3, '1701918080');

-- --------------------------------------------------------

--
-- Table structure for table `t_text`
--

CREATE TABLE `t_text` (
  `text_banner` text DEFAULT NULL,
  `text_author` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `t_text`
--

INSERT INTO `t_text` (`text_banner`, `text_author`) VALUES
('<p>MATEMATIKA | BAHASA INGGRIS | IPA | BAHASA INDONESIA</p>\r\n', '<h5><strong>HELLO WORLD</strong></h5>\r\n\r\n<p>Tulis Profile Anda Di Sini...</p>\r\n');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_last_work`
-- (See below for the actual view)
--
CREATE TABLE `v_last_work` (
`siswa_id` int(11)
,`siswa_nama` text
,`soal_id` int(11)
,`soal_nama` text
,`nilai_siswa` text
,`jawaban_siswa` text
,`soal_data` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_last_work_uraian`
-- (See below for the actual view)
--
CREATE TABLE `v_last_work_uraian` (
`soal_uraian_id` int(11)
,`soal_uraian_nama` text
,`soal_uraian_data` text
,`soal_uraian_detail_id` int(11)
,`siswa_id` int(11)
,`nilai_siswa` text
,`soal_uraian_detail_data` text
,`siswa_nama` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_soal`
-- (See below for the actual view)
--
CREATE TABLE `v_soal` (
`soal` varchar(13)
,`id` varchar(1)
,`soal_id` int(11)
,`soal_nama` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user_level`
-- (See below for the actual view)
--
CREATE TABLE `v_user_level` (
`user_id` int(11)
,`user_nama` text
,`user_email` text
,`user_password` text
,`user_foto` text
,`level_id` int(11)
,`level_nama` varchar(255)
,`level_akses` text
);

-- --------------------------------------------------------

--
-- Structure for view `v_last_work`
--
DROP TABLE IF EXISTS `v_last_work`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_last_work`  AS  select `t_siswa`.`siswa_id` AS `siswa_id`,`t_siswa`.`siswa_nama` AS `siswa_nama`,`t_soal`.`soal_id` AS `soal_id`,`t_soal`.`soal_nama` AS `soal_nama`,`t_soal_detail`.`nilai_siswa` AS `nilai_siswa`,`t_soal_detail`.`soal_detail_data` AS `jawaban_siswa`,`t_soal`.`soal_data` AS `soal_data` from ((`t_siswa` join `t_soal_detail` on(`t_soal_detail`.`siswa_id` = `t_siswa`.`siswa_id`)) join `t_soal` on(`t_soal_detail`.`soal_id` = `t_soal`.`soal_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_last_work_uraian`
--
DROP TABLE IF EXISTS `v_last_work_uraian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_last_work_uraian`  AS  select `t_soal_uraian`.`soal_uraian_id` AS `soal_uraian_id`,`t_soal_uraian`.`soal_uraian_nama` AS `soal_uraian_nama`,`t_soal_uraian`.`soal_uraian_data` AS `soal_uraian_data`,`t_soal_uraian_detail`.`soal_uraian_detail_id` AS `soal_uraian_detail_id`,`t_soal_uraian_detail`.`siswa_id` AS `siswa_id`,`t_soal_uraian_detail`.`nilai_siswa` AS `nilai_siswa`,`t_soal_uraian_detail`.`soal_uraian_detail_data` AS `soal_uraian_detail_data`,`t_siswa`.`siswa_nama` AS `siswa_nama` from ((`t_soal_uraian_detail` join `t_soal_uraian` on(`t_soal_uraian`.`soal_uraian_id` = `t_soal_uraian_detail`.`soal_uraian_id`)) join `t_siswa` on(`t_soal_uraian_detail`.`siswa_id` = `t_siswa`.`siswa_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_soal`
--
DROP TABLE IF EXISTS `v_soal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_soal`  AS  select 'Pilihan Ganda' AS `soal`,'1' AS `id`,`t_soal`.`soal_id` AS `soal_id`,`t_soal`.`soal_nama` AS `soal_nama` from `t_soal` union select 'Uraian' AS `soal`,'2' AS `id`,`t_soal_uraian`.`soal_uraian_id` AS `soal_uraian_id`,`t_soal_uraian`.`soal_uraian_nama` AS `soal_uraian_nama` from `t_soal_uraian` ;

-- --------------------------------------------------------

--
-- Structure for view `v_user_level`
--
DROP TABLE IF EXISTS `v_user_level`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user_level`  AS  select `t_admin_user`.`user_id` AS `user_id`,`t_admin_user`.`user_nama` AS `user_nama`,`t_admin_user`.`user_email` AS `user_email`,`t_admin_user`.`user_password` AS `user_password`,`t_admin_user`.`user_foto` AS `user_foto`,`t_admin_level`.`level_id` AS `level_id`,`t_admin_level`.`level_nama` AS `level_nama`,`t_admin_level`.`level_akses` AS `level_akses` from (`t_admin_user` join `t_admin_level` on(`t_admin_user`.`level_id` = `t_admin_level`.`level_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin_level`
--
ALTER TABLE `t_admin_level`
  ADD PRIMARY KEY (`level_id`) USING BTREE;

--
-- Indexes for table `t_admin_user`
--
ALTER TABLE `t_admin_user`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indexes for table `t_materi`
--
ALTER TABLE `t_materi`
  ADD PRIMARY KEY (`materi_id`) USING BTREE;

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`menu_id`) USING BTREE;

--
-- Indexes for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`siswa_id`) USING BTREE;

--
-- Indexes for table `t_soal`
--
ALTER TABLE `t_soal`
  ADD PRIMARY KEY (`soal_id`) USING BTREE;

--
-- Indexes for table `t_soal_detail`
--
ALTER TABLE `t_soal_detail`
  ADD PRIMARY KEY (`soal_detail_id`) USING BTREE;

--
-- Indexes for table `t_soal_uraian`
--
ALTER TABLE `t_soal_uraian`
  ADD PRIMARY KEY (`soal_uraian_id`) USING BTREE;

--
-- Indexes for table `t_soal_uraian_detail`
--
ALTER TABLE `t_soal_uraian_detail`
  ADD PRIMARY KEY (`soal_uraian_detail_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin_level`
--
ALTER TABLE `t_admin_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_admin_user`
--
ALTER TABLE `t_admin_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12311172;

--
-- AUTO_INCREMENT for table `t_soal`
--
ALTER TABLE `t_soal`
  MODIFY `soal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_soal_detail`
--
ALTER TABLE `t_soal_detail`
  MODIFY `soal_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_soal_uraian`
--
ALTER TABLE `t_soal_uraian`
  MODIFY `soal_uraian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_soal_uraian_detail`
--
ALTER TABLE `t_soal_uraian_detail`
  MODIFY `soal_uraian_detail_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
