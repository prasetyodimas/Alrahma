-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 06:56 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolsconsultant`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa_testi`
--

CREATE TABLE IF NOT EXISTS `analisa_testi` (
`id_analisa_testi` int(100) NOT NULL,
  `id_testimoni` int(100) NOT NULL,
  `sesi_user` varchar(100) NOT NULL,
  `answer_testi` text NOT NULL,
  `tgl_answer` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa_testi`
--

INSERT INTO `analisa_testi` (`id_analisa_testi`, `id_testimoni`, `sesi_user`, `answer_testi`, `tgl_answer`) VALUES
(13, 20, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida ante eu porttitor sagittis. Praesent ultricies fringilla diam, at sollicitudin erat bibendum non. Vestibulum sed ligula vestibulum, dapibus lorem vel, accumsan ipsum. Proin ', '2016-06-20 12:18:28'),
(14, 19, 'admin', 'enean consectetur, est vehicula sollicitudin imperdiet, nisl est lacinia ligula, vel finibus lorem tortor eu leo. Aliquam erat volutpat. Aenean cursus, nisl quis varius aliquam, urna erat pretium erat, sit amet pellentesque nisl metus congue purus', '2016-06-20 12:32:17'),
(24, 20, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida ante eu porttitor sagittis. Praesent ultricies fringilla diam, at sollicitudin erat bibendum non. Vestibulum sed ligula vestibulum, dapibus lorem vel, accumsan ipsum. Proin ', '2016-07-02 20:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(100) NOT NULL,
  `judul_berita` text NOT NULL,
  `ket_berita` text NOT NULL,
  `foto_berita` varchar(100) NOT NULL,
  `tanggal_berita` datetime NOT NULL,
  `status_news` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `ket_berita`, `foto_berita`, `tanggal_berita`, `status_news`) VALUES
(107, 'Beasiswa AL-Rahma', '<p><span style="color:rgb(68, 68, 68); font-family:ptsansnarrowregular,arial,helvetica,sans-serif; font-size:14px">vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus, at fringilla risus laoreet. Quisque ornare tellus vel neque mollis tincidunt. Maecenas at nunc ac turpis pellentesque bibendum. Nullam facilisis viverra diam, quis condimentum nunc. Fusce eget semper augue. Nulla ultricies purus odio, i</span></p>\r\n\r\n<p><span style="color:rgb(68, 68, 68); font-family:ptsansnarrowregular,arial,helvetica,sans-serif; font-size:14px">vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus, at fringilla risus laoreet. Quisque ornare tellus vel neque mollis tincidunt. Maecenas at nunc ac turpis pellentesque bibendum. Nullam facilisis viverra diam, quis condimentum nunc. Fusce eget semper augue. Nulla ultricies purus odio, ivestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus, at fringilla risus laoreet. Quisque ornare tellus vel neque mollis tincidunt. Maecenas at nunc ac turpis pellentesque bibendum. Nullam facilisis viverra diam, quis condimentum nunc. Fusce eget semper augue. Nulla ultricies purus odio, i</span></p>\r\n\r\n<p><span style="color:rgb(68, 68, 68); font-family:ptsansnarrowregular,arial,helvetica,sans-serif; font-size:14px">vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus, at fringilla risus laoreet. Quisque ornare tellus vel neque mollis tincidunt. Maecenas at nunc ac turpis pellentesque bibendum. Nullam facilisis viverra diam, quis condimentum nunc. Fusce eget semper augue. Nulla ultricies purus odio, i</span></p>\r\n', '351806IMG_71271.jpg', '2016-06-29 10:02:46', 'hits'),
(109, 'dapibus lorem ve', '<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif"><em><strong>Lorem Ipsum</strong></em></span>&nbsp;<span style="font-family:arial,helvetica,sans-serif">adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></span></p>\r\n\r\n<h2><span style="font-family:arial,helvetica,sans-serif"><span style="font-size:14px"><strong>Mengapa kita menggunakannya?</strong></span></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti &quot;Bagian isi disini, bagian isi disini&quot;, sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat &quot;Lorem Ipsum&quot; akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span></span></p>\r\n\r\n<h2><span style="font-size:14px"><strong><span style="font-family:arial,helvetica,sans-serif">Dari mana asalnya?</span></strong></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.</span></span></p>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Bagian standar dari teks Lorem Ipsum yang digunakan sejak tahun 1500an kini di reproduksi kembali di bawah ini untuk mereka yang tertarik. Bagian 1.10.32 dan 1.10.33 dari &quot;de Finibus Bonorum et Malorum&quot; karya Cicero juga di reproduksi persis seperti bentuk aslinya, diikuti oleh versi bahasa Inggris yang berasal dari terjemahan tahun 1914 oleh H. Rackham.</span></span></p>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n', '952758img-20160321-wa0008.jpg', '2016-06-29 10:03:56', 'biasa'),
(111, 'Lowongan Staf Pendid', '<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif"><em><strong>Lorem Ipsum</strong></em></span>&nbsp;<span style="font-family:arial,helvetica,sans-serif">adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></span></p>\r\n\r\n<h2><span style="font-family:arial,helvetica,sans-serif"><span style="font-size:14px"><strong>Mengapa kita menggunakannya?</strong></span></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti &quot;Bagian isi disini, bagian isi disini&quot;, sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat &quot;Lorem Ipsum&quot; akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span></span></p>\r\n\r\n<h2><span style="font-size:14px"><strong><span style="font-family:arial,helvetica,sans-serif">Dari mana asalnya?</span></strong></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.</span></span></p>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Bagian standar dari teks Lorem Ipsum yang digunakan sejak tahun 1500an kini di reproduksi kembali di bawah ini untuk mereka yang tertarik. Bagian 1.10.32 dan 1.10.33 dari &quot;de Finibus Bonorum et Malorum&quot; karya Cicero juga di reproduksi persis seperti bentuk aslinya, diikuti oleh versi bahasa Inggris yang berasal dari terjemahan tahun 1914 oleh H. Rackham.</span></span></p>\r\n\r\n<div>&nbsp;</div>\r\n', '45025612.JPG', '2016-07-04 19:44:31', 'populer'),
(112, 'sollicitudin imperdi', '<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif"><em><strong>Lorem Ipsum</strong></em></span>&nbsp;<span style="font-family:arial,helvetica,sans-serif">adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></span></p>\r\n\r\n<h2><span style="font-family:arial,helvetica,sans-serif"><span style="font-size:14px"><strong>Mengapa kita menggunakannya?</strong></span></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti &quot;Bagian isi disini, bagian isi disini&quot;, sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat &quot;Lorem Ipsum&quot; akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span></span></p>\r\n\r\n<h2><span style="font-size:14px"><strong><span style="font-family:arial,helvetica,sans-serif">Dari mana asalnya?</span></strong></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.</span></span></p>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Bagian standar dari teks Lorem Ipsum yang digunakan sejak tahun 1500an kini di reproduksi kembali di bawah ini untuk mereka yang tertarik. Bagian 1.10.32 dan 1.10.33 dari &quot;de Finibus Bonorum et Malorum&quot; karya Cicero juga di reproduksi persis seperti bentuk aslinya, diikuti oleh versi bahasa Inggris yang berasal dari terjemahan tahun 1914 oleh H. Rackham.</span></span></p>\r\n\r\n<div>&nbsp;</div>\r\n', '62832612312.jpg', '2016-07-04 19:50:47', 'biasa'),
(113, 'Apakah Lorem Ipsum itu?', '<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif"><em><strong>Lorem Ipsum</strong></em></span>&nbsp;<span style="font-family:arial,helvetica,sans-serif">adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</span></span></p>\r\n\r\n<h2><span style="font-family:arial,helvetica,sans-serif"><span style="font-size:14px"><strong>Mengapa kita menggunakannya?</strong></span></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti &quot;Bagian isi disini, bagian isi disini&quot;, sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat &quot;Lorem Ipsum&quot; akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</span></span></p>\r\n\r\n<h2><span style="font-size:14px"><strong><span style="font-family:arial,helvetica,sans-serif">Dari mana asalnya?</span></strong></span></h2>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.</span></span></p>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Bagian standar dari teks Lorem Ipsum yang digunakan sejak tahun 1500an kini di reproduksi kembali di bawah ini untuk mereka yang tertarik. Bagian 1.10.32 dan 1.10.33 dari &quot;de Finibus Bonorum et Malorum&quot; karya Cicero juga di reproduksi persis seperti bentuk aslinya, diikuti oleh versi bahasa Inggris yang berasal dari terjemahan tahun 1914 oleh H. Rackham</span></span></p>\r\n', '173431asdas.jpg', '2016-07-04 19:51:46', 'populer');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
`id_career` int(100) NOT NULL,
  `judul_career` varchar(100) NOT NULL,
  `ket_career` text NOT NULL,
  `foto` text NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id_career`, `judul_career`, `ket_career`, `foto`, `tgl_posting`) VALUES
(8, 'Graduated Progams', '<p>Dibutuhkan segera tenaga Pengajar / Guru :</p>\r\n\r\n<p>1. Matematika</p>\r\n\r\n<p>2. Ilmu Pengetahuan Alam</p>\r\n\r\n<p>3. Bahasa Indonesia</p>\r\n\r\n<p>4. Bahasa Inggris.</p>\r\n\r\n<p>5. Komputer</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SYARAT DAN KETENTUAN :</p>\r\n\r\n<p>a. Warga Nsgara Republik Indcnesia</p>\r\n\r\n<p>b. Usia Tendah 21 (dua puluh satu) tahun dan paling tinggi 30 (tiga puluh) tahun pada 15 Desember 2012</p>\r\n\r\n<p>c. Tingkat pendidikan Sarjana (S1) / Sarjana Pendidikan (S.Pd) berakreditasi dengan IPK 5 2,75</p>\r\n\r\n<p>d. Tidak pernah dihukum penjara atau kurungan berdasarkan putusan pengadilan yang sudah mempunyai kekuatan hukum yang tetap, karena melakukan suatu tindak pidana kejahatan.</p>\r\n\r\n<p>e. Tidak berstatus sebagai Caton Pegawai Negeri Sipil/Pegawai Negeri Sipil</p>\r\n\r\n<p>f. Tidak pernah diberhentikan dengan hormat tidak atas permintaan sendiri atau tidak dengan hormat sebagai PNS atau diberhentikan tidak dengan hormat sebagai pegawai swasta</p>\r\n\r\n<p>g. Mempunyai pendidikan, kecakapan, keahlian dan keterampilan yang diperlukan</p>\r\n\r\n<p>h. Berkelakuan baik dan sehat jasmani maupun rohani</p>\r\n\r\n<p>i. Tidak menjadi. anggota dan atau pengurus partai politik</p>\r\n\r\n<p>j. Waktu melamar telah memiliki ijazah perguruan tinggi negeri atau perguruan tinggi swasta yang telah terakreditasi. Apabila dalam ijazah tersebut &nbsp; &nbsp; tidak disebutkan akreditasi, maka perlu dilampirkan surat keterangan dari universitas yang bersangkutan yang menyebutkan akreditasinya</p>\r\n\r\n<p>&nbsp;k. Berdomisili di wilayah Kabupaten Banyumas&nbsp;(diutamakan).</p>\r\n\r\n<p>I. Berpengalaman kerja (diutamakan).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PENGAJUAN LAMARAN :</p>\r\n\r\n<p>Berkas lamaran dimasukkan kedalam amplop coklat (ukuran 350 mm x 240 mm) dan dikirim melalui pos yang dialamatkan ke: ALRAHMA FIRST EDUCATION CENTRE paling lambat tanggal 15 Desember 2012 cap pos. Surat lamaran ditulis dengan tangan sendiri, menggunakan tinta hitam, yang dilengkapi dengan :</p>\r\n\r\n<p>a. Formulir data pelamar (Daftar Riwayat Hidup)</p>\r\n\r\n<p>b. Photocopy STTB/Ijazah dan Transkrip Nilai yang telah dilegalisir oleh pejabat berwenang (1 rangkap)</p>\r\n\r\n<p>c. Pas Photo terbaru ukuran 4 x 6 sejumlah 4 iembar</p>\r\n\r\n<p>Lembaga Pendidikan 31. KH. A. xxNo. 39 Banyumas Telp. 0295 &mdash; 385798</p>\r\n', '305969sdasdsa.jpg', '2016-06-25'),
(10, 'Heros And looking', '<p>Dibutuhkan segera tenaga Pengajar / Guru :</p>\r\n\r\n<p>1. Matematika</p>\r\n\r\n<p>2. Ilmu Pengetahuan Alam</p>\r\n\r\n<p>3. Bahasa Indonesia</p>\r\n\r\n<p>4. Bahasa Inggris.</p>\r\n\r\n<p>5. Komputer</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SYARAT DAN KETENTUAN :</p>\r\n\r\n<p>a. Warga Nsgara Republik Indcnesia</p>\r\n\r\n<p>b. Usia Tendah 21 (dua puluh satu) tahun dan paling tinggi 30 (tiga puluh) tahun pada 15 Desember 2012</p>\r\n\r\n<p>c. Tingkat pendidikan Sarjana (S1) / Sarjana Pendidikan (S.Pd) berakreditasi dengan IPK 5 2,75</p>\r\n\r\n<p>d. Tidak pernah dihukum penjara atau kurungan berdasarkan putusan pengadilan yang sudah mempunyai kekuatan hukum yang tetap, karena melakukan suatu tindak pidana kejahatan.</p>\r\n\r\n<p>e. Tidak berstatus sebagai Caton Pegawai Negeri Sipil/Pegawai Negeri Sipil</p>\r\n\r\n<p>f. Tidak pernah diberhentikan dengan hormat tidak atas permintaan sendiri atau tidak dengan hormat sebagai PNS atau diberhentikan tidak dengan hormat sebagai pegawai swasta</p>\r\n\r\n<p>g. Mempunyai pendidikan, kecakapan, keahlian dan keterampilan yang diperlukan</p>\r\n\r\n<p>h. Berkelakuan baik dan sehat jasmani maupun rohani</p>\r\n\r\n<p>i. Tidak menjadi. anggota dan atau pengurus partai politik</p>\r\n\r\n<p>j. Waktu melamar telah memiliki ijazah perguruan tinggi negeri atau perguruan tinggi swasta yang telah terakreditasi. Apabila dalam ijazah tersebut &nbsp; &nbsp; tidak disebutkan akreditasi, maka perlu dilampirkan surat keterangan dari universitas yang bersangkutan yang menyebutkan akreditasinya</p>\r\n\r\n<p>&nbsp;k. Berdomisili di wilayah Kabupaten Banyumas&nbsp;(diutamakan).</p>\r\n\r\n<p>I. Berpengalaman kerja (diutamakan).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PENGAJUAN LAMARAN :</p>\r\n\r\n<p>Berkas lamaran dimasukkan kedalam amplop coklat (ukuran 350 mm x 240 mm) dan dikirim melalui pos yang dialamatkan ke: ALRAHMA FIRST EDUCATION CENTRE paling lambat tanggal 15 Desember 2012 cap pos. Surat lamaran ditulis dengan tangan sendiri, menggunakan tinta hitam, yang dilengkapi dengan :</p>\r\n\r\n<p>a. Formulir data pelamar (Daftar Riwayat Hidup)</p>\r\n\r\n<p>b. Photocopy STTB/Ijazah dan Transkrip Nilai yang telah dilegalisir oleh pejabat berwenang (1 rangkap)</p>\r\n\r\n<p>c. Pas Photo terbaru ukuran 4 x 6 sejumlah 4 iembar</p>\r\n\r\n<p>Lembaga Pendidikan 31. KH. A. xxNo. 39 Banyumas Telp. 0295 &mdash; 385798</p>\r\n', '578155305969sdasdsa.jpg', '2016-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
`id_contactus` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id_contactus`, `nama`, `email`, `phone`, `keterangan`) VALUES
(13, 'ajeng', 'dimasprasetyo485@gmail.com', 89898797, 'enean consectetur, est vehicula sollicitudin imperdiet, nisl est lacinia ligulaenean consectetur, est vehicula sollicitudin imperdiet, nisl est lacinia ligula');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_event` int(100) NOT NULL,
  `judul_event` text NOT NULL,
  `keterangan_event` text NOT NULL,
  `foto_event` varchar(100) NOT NULL,
  `tanggal_event` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `judul_event`, `keterangan_event`, `foto_event`, `tanggal_event`) VALUES
(12, 'The Go Green Festival', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida ante eu porttitor sagittis. Praesent ultricies fringilla diam, at sollicitudin erat bibendum non. Vestibulum sed ligula vestibulum, dapibus lorem vel, accumsan ipsum. ProinLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida ante eu porttitor sagittis. Praesent ultricies fringilla diam, at sollicitudin erat bibendum non.&nbsp;</p>\r\n', '91494712312.jpg', '2016-06-29'),
(15, 'The Hobbit And Fams', '<p><span style="color:rgb(68, 68, 68); font-family:ptsansnarrowregular,arial,helvetica,sans-serif; font-size:14px">vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus,</span></p>\r\n', '930053234234.jpg', '2016-07-03'),
(19, 'Keakraban Anak', '<p>vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibusvestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet&nbsp;</p>\r\n', '858795asdsad.jpg', '2016-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id_gallery` int(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_gallery` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `keterangan`, `foto_gallery`) VALUES
(23, '<p>Donec ac faucibus lectus. Sed vestibulum&nbsp;</p>\r\n', '273010gambar_20160530_163902.jpg'),
(24, '<p><span style="color:rgb(68, 68, 68); font-family:ptsansnarrowregular,arial,helvetica,sans-serif; font-size:16px">Sed vestibulum nisi non odio laoreet lacinia.</span><span style="line-height:1.6em">â€‹</span></p>\r\n', '521057234234.jpg'),
(26, '<p><span style="color:rgb(68, 68, 68); font-family:ptsansnarrowregular,arial,helvetica,sans-serif; font-size:14px">Donec ac faucibus lectus. Sed vestibulum</span></p>\r\n', '496124asdas.jpg'),
(27, '<p><span style="color:rgb(68, 68, 68); font-family:ptsansnarrowregular,arial,helvetica,sans-serif; font-size:14px">Donec ac faucibus lectus. Sed vestibulum</span></p>\r\n', '63659asdsa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
`id_hak_akses` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('0','1') NOT NULL,
  `blokir` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `username`, `password`, `level`, `blokir`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', 'tidak'),
(15, 'pimpinan', '21232f297a57a5a743894a0e4a801fc3', '1', 'tidak'),
(16, 'dimas', '202cb962ac59075b964b07152d234b70', '1', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id_slider` int(100) NOT NULL,
  `foto_slider` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `foto_slider`) VALUES
(43, '190307dampak-negatif-tablet-dan-smartphone-untuk-anak.jpg'),
(44, '728759sdasd.jpg'),
(45, '686553sadasd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
`id_testimoni` int(100) NOT NULL,
  `nama_testi` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `keluhan_testi` text NOT NULL,
  `no_telp_testi` varchar(20) NOT NULL,
  `tgl_testi` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama_testi`, `email`, `keluhan_testi`, `no_telp_testi`, `tgl_testi`) VALUES
(13, 'Dimas Prasertyo', 'dimasprasetyo485@gmail.com', 'anak saya sering begadangan malam lalu apakah ada solusi untuk saya bpk/ ibu..?', ' 085640420816', '2016-06-05 09:40:35'),
(15, 'Arif Prmono', 'arif@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida ante eu porttitor sagittis. Praesent ultricies fringilla diam, at sollicitudin erat bibendum non. Vestibulum sed ligula vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus, at fringilla risus laoreet. Quisque ornare tellus vel neque mollis tincidunt. Maecenas at nunc ac turpis pellentesque bibendum. Nullam facilisis viverra diam, quis condimentum nunc. Fusce eget semper augue. Nulla ultricies purus odio, id pretium augue rhoncus non. Aenean sit amet pharetra lacus. Suspendisse ac finibus erat. Donec sit amet nibh sapien. Suspendisse consequat tellus quis iaculis consectetur.\r\n\r\nCras malesuada elit sed metus vulputate, sed mollis massa fermentum. Fusce aliquam, augue vitae efficitur mollis, odio ex ornare ', '083453553', '2016-06-14 09:50:58'),
(18, 'Ardyan Triasmoko', 'ardyan@gmail.com', 'vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus, at fringilla risus laoreet. Quisque ornare tellus vel neque mollis tincidunt. Maecenas at nunc ac turpis pellentesque bibendum. Nullam facilisis viverra diam, quis condimentum nunc. Fusce eget semper augue. Nulla ultricies purus odio, id pretium augue rhoncus non. Aenean sit amet pharetra lacus. Suspendisse ac finibus erat. Donec sit amet nibh sapien', '0823424324', '2016-06-16 11:28:52'),
(19, 'Dany Marcelo', 'dany@gmail.com', 'enean consectetur, est vehicula sollicitudin imperdiet, nisl est lacinia ligula, vel finibus lorem tortor eu leo. Aliquam erat volutpat. Aenean cursus, nisl quis varius aliquam, urna erat pretium erat, sit amet pellentesque nisl metus congue purus. Donec vestibulum lorem velit, eu ', '08645646', '2016-06-16 11:29:25'),
(20, 'Damar Huda N', 'damar@gmail.com', 'enean consectetur, est vehicula sollicitudin imperdiet, nisl est lacinia ligula, vel finibus lorem tortor eu leo. Aliquam erat volutpat. Aenean cursus, nisl quis varius aliquam, urna erat pretium erat, sit amet pellentesque nisl metus congue purus. Donec vestibulum l', '0886786867', '2016-06-19 14:49:30'),
(21, 'Tegar Bianda W', 'tegarbianda@gmail.com', 'vestibulum, dapibus lorem vel, accumsan ipsum. Proin convallis, neque sit amet aliquet auctor, sapien dolor aliquet nibh, vel imperdiet lorem magna eu mi. Praesent dignissim est eget ante dapibus, ', '089767454', '2016-06-20 12:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE IF NOT EXISTS `tujuan` (
`id_tujuan` int(10) NOT NULL,
  `ket_tujuan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id_tujuan`, `ket_tujuan`) VALUES
(1, '<p><span style="background-color:rgb(251, 251, 251); color:rgb(0, 0, 0); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Tujuan:</span><br />\r\n<span style="font-size:14px"><span style="background-color:rgb(251, 251, 251); color:rgb(0, 0, 0); font-family:helvetica neue,helvetica,arial,sans-serif">1. Mengembangkan budaya lingkungan pembelajaran yang religius.</span><br />\r\n<span style="background-color:rgb(251, 251, 251); color:rgb(0, 0, 0); font-family:helvetica neue,helvetica,arial,sans-serif">2. Mengaplikasikan pembelajaran metode aktif pada semua kegiatan pembelajaran.</span><br />\r\n<span style="background-color:rgb(251, 251, 251); color:rgb(0, 0, 0); font-family:helvetica neue,helvetica,arial,sans-serif">3. Mengembangkan kegiatan dalam proses pembelajaran berbasis karakter dan etika sebagi bangsa.</span><br />\r\n<span style="background-color:rgb(251, 251, 251); color:rgb(0, 0, 0); font-family:helvetica neue,helvetica,arial,sans-serif">4. Menjaga fasilitas pembelajaran dengan baik guna kenyamanan dan keamanan warga sekolah.</span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE IF NOT EXISTS `visimisi` (
`id_visimisi` int(100) NOT NULL,
  `ket_visimisi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `ket_visimisi`) VALUES
(1, '<p>Visi :&nbsp;Mewujudkan peserta didik yang beriman, berkarakter, beretika, cerdas, mandiri dan memiliki wawasan luas&nbsp;</p>\r\n\r\n<p>Misi :&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;1.Menanamkan keimanan dan ketaqwaan melalui ajaran agama Islam<br />\r\n&nbsp;2.Mengembangkan bidang Ilmu Agama dan Umum berdasarkan sifat dinamis anak dengan cara senang belajar dan belajar dengan senang<br />\r\n&nbsp;3.Menanamkan sikap kemandirian, melalui pembiasaan sikap dan tauladan yang baik serta pengembangan sesuai minat, bakat dan &nbsp; &nbsp;potensi anak secara bertahap dan berkesinambungan<br />\r\n&nbsp;4.Menjalin kerjasama yang harmonis antara warga sekolah, lingkungan dan lembaga lain yang terkait.&nbsp;</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_testi`
--
ALTER TABLE `analisa_testi`
 ADD PRIMARY KEY (`id_analisa_testi`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
 ADD PRIMARY KEY (`id_career`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
 ADD PRIMARY KEY (`id_contactus`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
 ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
 ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
 ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
 ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa_testi`
--
ALTER TABLE `analisa_testi`
MODIFY `id_analisa_testi` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
MODIFY `id_career` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
MODIFY `id_contactus` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id_gallery` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
MODIFY `id_hak_akses` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id_slider` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
MODIFY `id_testimoni` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
MODIFY `id_tujuan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
MODIFY `id_visimisi` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
