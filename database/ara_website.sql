-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2021 at 05:46 PM
-- Server version: 5.6.50
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ara_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstrak_iot`
--

CREATE TABLE `abstrak_iot` (
  `id` int(11) NOT NULL,
  `id_tim` int(11) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abstrak_iot`
--

INSERT INTO `abstrak_iot` (`id`, `id_tim`, `judul`, `abstrak`) VALUES
(1, 26, 'Sistem Kebakaran Hutan berbasis Internet of Things dan LoRa', 'Berdasarkan data badan nasional penangulangan bencana (BNPB), tercatat luas area hutan yang terbakar di Indonesia mencapai 328.724 hektare sepanjang bulan Januari sampai Agustus 2019. Mengakibatkan kerugian yang besar bagi negara. Kerugian terjadi diberbagai aspek dalam kehidupan baik itu pada bidang kesehatan, ekonomi, serta politik.  Kebakaran sendiri terjadi karena 3 faktor utama yakni dengan adanya oksigen, bahan bakar, serta panas. Tujuan penelitian ini merancang suatu sistem jaringan hybrid yang dapat digunakan sebagai aplikasi pendeteksian kebakaran hutan yang terhubung dengan Internet of Things (IoT) dan koneksi LoRa. Sistem ini ditujukan untuk mendapatkan parameter data berupa temperature lingkungan, kelembapan, kadar oksigen, intensitas UV, dan indeks kualitas udara menggunakan sensor BME 680 dan sensor UV yang berguna untuk memonitoring keadaan hutan secara real-time. Sistem dapat memberi tanda bahaya bila parameter utama berada pada batas normal. Sistem yang diusulkan terdiri dari sensor node yang direalisasikan melalui (WBAN) untuk mengumpulkan data lingkungan dan jaringan area luas berdaya rendah melalui (LPWAN) untuk menghubungkan WBAN dengan Internet. Sensor yang dipakai di WBAN digunakan untuk mengukur kondisi lingkungan di sekitar subjek menggunakan Safe Node. Server lokal mandiri (gateway) yang dapat memproses sinyal sensor mentah, menampilkan data lingkungan dan fisiologis serta memicu peringatan jika ada keadaan darurat atau kebakaran hutan yang terdeteksi. Untuk menghubungkan gateway dengan internet, server cloud IoT diimplementasikan untuk menyediakan lebih banyak fungsi seperti pemantauan web dan sistem monitoring interaktif berbasis aplikasi android. \r\nKata kunci: LPWAN, LoRa, WBAN, BME 680, real-time, UV, Kebakaran, Internet of Things. \r\n'),
(2, 56, 'Prototipe Sistem Monitoring Smart Servers', '                                                                             ABSTRAK\r\n\r\n\r\n          IoT (Internet of Things) menjadi sebuah bidang penelitian tersendiri semenjak\r\nberkembangnya teknologi internet dan media komunikasi lain, semakin berkembang\r\nkeperluan manusia tentang teknologi, maka semakin banyak penelitian yang akan\r\nhadir, internet of things salah satu hasil pemikiran para peneliti yang mengoptimasi\r\nbeberapa alat seperti media sensor DHT11, sensor flame serta smart object lain yang\r\nmemungkinkan manusia mudah berinteraksi dengan semua peralatan yang terhubung\r\ndengan jaringan internet. Tidak semua perusahaan/industri memiliki prototipe yang\r\nbisa memudahkan dan memiliki rasa aman untuk ruangan servernya agar\r\ntermonitoring dengan baik dan juga agar tidak ingin terjadi hal-hal yang tidak di\r\ninginkan. Maka dari itu saya mengajukan prototipe sistem Monitoring Smart Servers\r\nyang di bekali dengan alat dan juga web server untuk memonitoring ruangan server\r\ntersebut. Prototipe tersebut sebagai sarana untuk memantau data Suhu, Kelembaban\r\ndan memantau jika terjadinya konsleting listrik di ruang server yang memanfaatkan\r\nsensor api melalui wifi secara realtime. Hal ini akan membantu semua pihak di dunia\r\nindustri atau yang berkaitan dengan adanya ruang server dalam mengontrol keadaan\r\nruangan agar suhu di ruangan tetap stabil dan menghindari kejadian yang tidak di\r\ninginkan. Meskipun tidak berada di daerah kantor atau ruang server sehingga dapat\r\nmeningkatkan kualitas rasa aman kondisi di ruang server.\r\n\r\n\r\nKata Kunci: Internet of Things, Smart Servers, Sensor DHT11, Flame Sensor,\r\nWemos D1'),
(3, 52, 'APLIKASI SSAI (SISTEM SENSORIK DETEKSI PADA APD \r\nBERBASIS IOT) UNTUK PEKERJA TAMBANG PT FREEPORT\r\nSEBAGAI UPAYA KESEHATAN DAN KESELAMATAN KERJA \r\nDI ERA “THE NEW NORMAL”', 'Tingkat Kekerapan dan Keparahan Kecelakaan Tambang di PT Freeport\r\npada Bulan Mei Tahun 2020 mencapai angka 14 kejadian dengan kategori \r\nberat yang merupakan angka tertinggi di tahun 2020. Hal ini perlu \r\nperhatian khusus seiring dengan dikeluarkannya Surat Edaran Kementerian \r\nBadan Usaha Milik Negara Nomor 4 Tahun 2020 Tentang Protokol \r\nKesehatan dalam Masa Pandemi Corona Virus Disease 2019 (COVID-19). \r\nSehingga seluruh Direktur Utama BUMN menyiapkan antisipasi program \r\nkeselamatan dan kesehatan kerja dalam era “The New Normal”. Penelitian \r\nini bertujuan untuk mengetahui bagaimana penerapan sistem sensorik \r\ndeteksi APD yang berbasis IoT yang dilaksanakan dalam upaya \r\npencegahan penyebaran virus Covid-19 di lingkungan kerja tambang di PT\r\nFreeport dengan membuat inovasi aplikasi SSAI Sistem Sensorik deteksi \r\nAPD berbasis IoT. Inovasi ini menyediakan aplikasi yang menghubungkan \r\nsistem sensorik pada APD dengan penerapan smartphone. Penerapan \r\nprogram ini sebagai berikut, sebelum pekerja tambang masuk ke dalam \r\nlingkungan kerjanya, pekerja harus melakukan pemindaian QR Code untuk \r\nmenghubungkan sistem sensorik deteksi pada smartphone sehingga pusat \r\nkontrol dapat memantau kesehatan dan mendeteksi kecelakaan kerja \r\ndengan sensor jarak, suhu, detak jantung, dan tingkat oksigen yang \r\ndisematkan pada APD pekerja tambang. Diharapkan dengan penerapan \r\nSSAI dapat memperingatkan pengguna dengan bunyi alarm yang ada pada\r\nAPD. Bunyi ini juga dilengkapi dengan varian warna lampu berbeda untuk \r\nsetiap peringatan. Sehingga pengguna dapat melakukan langkah-langkah \r\nyang diperlukan. Hal ini dapat diimplementasikan bukan hanya di area \r\npertambangan PT Freeport saja, tetapi semua sudut yang membutuhkan \r\npenerapan K3 (potensi bahaya). Sehingga, dengan adanya inovasi SSAI ini \r\ndiharapkan dapat menjadi alat pendeteksi kesehatan dan kecelakaan kerja \r\nserta dapat mengurangi penyebaran COVID-19.\r\nKata Kunci: K3, New Normal, SSAI');

-- --------------------------------------------------------

--
-- Table structure for table `ctf`
--

CREATE TABLE `ctf` (
  `id_ctf` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `id1` varchar(50) NOT NULL,
  `gender1` int(11) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `id2` varchar(50) DEFAULT NULL,
  `gender2` int(11) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `nama3` varchar(50) DEFAULT NULL,
  `id3` varchar(50) DEFAULT NULL,
  `gender3` int(11) DEFAULT NULL,
  `email3` varchar(50) DEFAULT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) DEFAULT NULL,
  `ktm3` varchar(255) DEFAULT NULL,
  `surat1` varchar(255) NOT NULL,
  `surat2` varchar(255) DEFAULT NULL,
  `surat3` varchar(255) DEFAULT NULL,
  `ctf_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctf`
--

INSERT INTO `ctf` (`id_ctf`, `nama_tim`, `nama1`, `id1`, `gender1`, `email1`, `alamat`, `no_wa`, `line`, `nama2`, `id2`, `gender2`, `email2`, `nama3`, `id3`, `gender3`, `email3`, `ktm1`, `ktm2`, `ktm3`, `surat1`, `surat2`, `surat3`, `ctf_timestamp`) VALUES
(1, '********', 'Perdo Kurniawan', '17/412649/PA/17968', 0, 'perdokurniawan@mail.ugm.ac.id', 'Lahat, Sumatera Selatan', '0813-6752-7239', '081367527239', 'Novian Deny Cahyo Aji', '17/412648/PA/17967', 0, 'noviandeny98@mail.ugm.ac.id', 'Ganjar Muhammad Parikesit', '17/409434/PA/17741', 0, 'ganjar.m@mail.ugm.ac.id', '********-17412649PA17968-ktm.jpg', '********-17412648PA17967-ktm.jpg', '********-17409434PA17741-ktm.jpg', '********-17412649PA17968-surat.pdf', '********-17412648PA17967-surat.pdf', '********-17409434PA17741-surat.pdf', '2021-01-24 02:20:16'),
(2, '%zqIH@#eo#1YT6pCjQwyQCiO0', 'Prajna Prasetya', '1906293285', 0, 'prajnapras19@gmail.com', 'Jalan Mangga Besar IV.P/3.D, Taman Sari, Jakarta Barat 11150', '6281-1825-1912', 'prajnaprasetya', 'Zafir Rasyidi Taufik', '1806133793', 0, 'zafir.rasyidi@ui.ac.id', 'Muhammad Faishol Amirul Mukminin', '1906285573', 0, 'muhammad.faishol@ui.ac.id', '%zqIH@eo1YT6pCjQwyQCiO0-1906293285-ktm.jpg', '%zqIH@eo1YT6pCjQwyQCiO0-1806133793-ktm.jpg', '%zqIH@eo1YT6pCjQwyQCiO0-1906285573-ktm.jpg', '%zqIH@eo1YT6pCjQwyQCiO0-1906293285-surat.jpg', '%zqIH@eo1YT6pCjQwyQCiO0-1806133793-surat.jpg', '%zqIH@eo1YT6pCjQwyQCiO0-1906285573-surat.pdf', '2021-01-24 02:20:16'),
(3, 'IniBuatTestingAja', 'IniBuatTestingAja', '123', 0, 'IniBuatTestingAja@gmail.com', 'IniBuatTestingAja', '0812-3456-3456', 'IniBuatTestingAja', 'IniBuatTestingAja', '123', 0, 'IniBuatTestingAja@gmail.com', 'IniBuatTestingAja', '123', 0, 'IniBuatTestingAja@gmail.com', 'IniBuatTestingAja-123-ktm.png', 'IniBuatTestingAja-123-ktm1.png', 'IniBuatTestingAja-123-ktm2.png', 'IniBuatTestingAja-123-surat.png', 'IniBuatTestingAja-123-surat1.png', 'IniBuatTestingAja-123-surat2.png', '2021-01-24 02:20:16'),
(5, 'd.i.d.a.t.e.s', 'asdw', '123', 1, 'asd@asd.com', 'ads', '0810-8108-1018', 'ads', 'ads', '5678', 1, 'asd@asd.com', 'iuyuu', '9090', 1, 'asd@asd.com', 'd-i-d-a-t-e-s-123-ktm.jpg', 'd-i-d-a-t-e-s-5678-ktm.jpg', 'd-i-d-a-t-e-s-9090-ktm.jpg', 'd-i-d-a-t-e-s-123-surat.jpg', 'd-i-d-a-t-e-s-5678-surat.jpg', 'd-i-d-a-t-e-s-9090-surat.jpg', '2021-01-24 02:20:16'),
(6, 'P.i.n.G', 'Rio Darmawan', '18102283', 0, 'riodrwn00@gmail.com', 'bekasi utara', '0852-9246-2259', '@ravenkidz', 'Ahmad Fauzzan Maghribi', '171010404', 0, 'af.maghribi@gmail.com', 'Ahmad Fauzzan Maghribi', '171010404', 0, 'af.maghribi@gmail.com', 'P-i-n-G-18102283-ktm.jpg', 'P-i-n-G-171010404-ktm.jpg', 'P-i-n-G-171010404-ktm1.jpg', 'P-i-n-G-18102283-surat.pdf', 'P-i-n-G-171010404-surat.pdf', 'P-i-n-G-171010404-surat1.pdf', '2021-01-24 02:20:16'),
(7, 'Aesteitic Depok', 'Faris Haidar Zuhdi', '2006597336', 0, 'rastasonna@gmail.com', 'Blok D4 Griya Taman Tiga Putra, Meruyung, Limo, Depok', '0857-8045-8968', 'farishaidarz', 'Ahmad Rafi Wirana', '2006595873', 0, 'ahmadrafi9910@gmail.com', 'Muhammad Ilham Ghozali', '2006596213', 0, 'muhammad.ilham013@ui.ac.id', 'Aesteitic_Depok-2006597336-ktm.png', 'Aesteitic_Depok-2006595873-ktm.png', 'Aesteitic_Depok-2006596213-ktm.jpg', 'Aesteitic_Depok-2006597336-surat.png', 'Aesteitic_Depok-2006595873-surat.png', 'Aesteitic_Depok-2006596213-surat.jpg', '2021-01-24 02:20:16'),
(8, 'Kotak-Kotak', 'Hardwin', '2301914390', 0, 'dromax98@gmail.com', 'Batam', '0813-6354-0649', 'hrdwnhd.', 'Jessica Geofanie Ganadhi', '2301916023', 1, 'geofanie48@gmail.com', 'Andrew Christian Widjojo', '2301896551', 0, 'andrewchristian28@gmail.com', 'Kotak-Kotak-2301914390-ktm.jpg', 'Kotak-Kotak-2301916023-ktm.jpg', 'Kotak-Kotak-2301896551-ktm.jpg', 'Kotak-Kotak-2301914390-surat.pdf', 'Kotak-Kotak-2301916023-surat.pdf', 'Kotak-Kotak-2301896551-surat.pdf', '2021-01-24 02:20:16'),
(12, 'ABK', 'Fariq Fadillah Gusti Insani', '18090094', 0, 'fariqfadillah123@gmail.com', 'Tegal', '0859-7454-7979', 'fariqfgi', 'Maulana Alamsyah', '20090137', 0, 'maulanalamsyah@gmail.com', '-', '-', 0, 'admin@admin.com', 'ABK-18090094-ktm.jpg', 'ABK-20090137-ktm.jpg', NULL, 'ABK-18090094-surat.jpg', 'ABK-20090137-surat.jpg', 'ABK---surat.jpg', '2021-01-24 02:20:16'),
(13, 'Ksatria Akra', 'Glenaldin Halim', 'J3D119052', 0, 'limglenaldin@apps.ipb.ac.id', 'Jl. Pahlawan, Gg. Al-Falah No.31A, RT 01/16, Bogor Selatan, Kota Bogor, Jawa Barat 16131', '0838-1918-5340', 'glenaldin_lim', 'Meihair Alfianzen', 'J3D119072', 0, 'meihair_123alfianzen@apps.ipb.ac.id', '-', '-', 0, 'anon@example.com', 'Ksatria_Akra-J3D119052-ktm.jpg', 'Ksatria_Akra-J3D119072-ktm.jpg', NULL, 'Ksatria_Akra-J3D119052-surat.pdf', 'Ksatria_Akra-J3D119072-surat.pdf', NULL, '2021-01-24 02:20:16'),
(14, 'Terlantarkan', 'Stanley Halim', '2301859146', 0, 'stanleyhalim.work@gmail.com', 'permata taman palem', '0819-0801-3871', 'stanley_xc', 'Bryan Mitchell Lee', '2201749961', 0, 'bryanmitchell2000@gmail.com', 'Sugiarta Wijaya', '2201745074', 0, 'sugiarta.wijaya05@gmail.com', 'Terlantarkan-2301859146-ktm.jpg', 'Terlantarkan-2201749961-ktm.jpg', 'Terlantarkan-2201745074-ktm.jpg', 'Terlantarkan-2301859146-surat.pdf', 'Terlantarkan-2201749961-surat.pdf', 'Terlantarkan-2201745074-surat.pdf', '2021-01-24 02:20:16'),
(15, 'Syntax', 'Erdham Hestiadhi Prianggara', '202041110001', 0, 'erdhamz@gmail.com', 'Jl Sunan Kudus Latsari Tuban Jawa Timur Indonesia', '0889-0703-0007', '@empty', 'Rifda Aisy Nurillah', '20192311002', 1, 'rifdaaisynurillah@gmail.com', 'Khoerul Amin', '20193111001', 0, 'khoerula16@gmail.com', 'Syntax-202041110001-ktm.jpg', 'Syntax-20192311002-ktm.jpg', 'Syntax-20193111001-ktm.jpg', 'Syntax-202041110001-surat.pdf', 'Syntax-20192311002-surat.pdf', 'Syntax-20193111001-surat.pdf', '2021-01-24 02:20:16'),
(16, 'No Rush & Relax', 'Linuz Tri Erianto', 'G64190027', 0, 'linuztri@apps.ipb.ac.id', 'Kp.Kekupu Rt05 Rw03 No.35', '0877-8269-4354', 'litrianz', 'Grey Syafiq Kusuma', 'G64190017', 0, 'greysyafiqkusuma@apps.ipb.ac.id', 'Ihsan Firdaus', 'G64180054', 0, 'ihsan_16@apps.ipb.ac.id', 'No_Rush_Relax-G64190027-ktm.pdf', 'No_Rush_Relax-G64190017-ktm.jpg', 'No_Rush_Relax-G64180054-ktm.jpg', 'No_Rush_Relax-G64190027-surat.pdf', 'No_Rush_Relax-G64190017-surat.pdf', 'No_Rush_Relax-G64180054-surat.pdf', '2021-01-24 02:20:16'),
(17, 'SmallBrainBois', 'Steve Bezalel Iman Gustaman', '13518018', 0, 'stevebezalel215@gmail.com', 'Jl. Pelajar Pejuang 45 No. 109A', '0858-6154-7510', 'sbig21', 'Naufal Dean Anugrah', '13518123', 0, 'naufal.dean@gmail.com', 'Yonatan Viody', '13518120', 0, 'yonatanviody@gmail.com', 'SmallBrainBois-13518018-ktm.jpg', 'SmallBrainBois-13518123-ktm.jpg', 'SmallBrainBois-13518120-ktm.jpg', 'SmallBrainBois-13518018-surat.pdf', 'SmallBrainBois-13518123-surat.pdf', 'SmallBrainBois-13518120-surat.pdf', '2021-01-24 02:20:16'),
(18, 'Pandadap', 'Denny Abraham Sinaga', 'IF11419036', 0, 'dennyngoding@gmail.com', 'Jalan Balige No.38 Porsea', '0813-7533-6843', '-', 'Kevin Johanes Pakpahan', 'IF11419042', 0, 'kevinpakpahan42@gmail.com', 'Nathan Fernando Lumban Tobing', 'IF11419003', 0, 'accnath4n@gmail.com', 'Pandadap-IF11419036-ktm.jpg', 'Pandadap-IF11419042-ktm.jpg', 'Pandadap-IF11419003-ktm.jpg', 'Pandadap-IF11419036-surat.pdf', 'Pandadap-IF11419042-surat.pdf', 'Pandadap-IF11419003-surat.pdf', '2021-01-24 02:20:16'),
(19, 'EsTehTawar', 'Putu Ravindra WIguna', '5025201237', 0, 'ravindrawiguna@gmail.com', 'Sambangan, Sukasada, Buleleng, Bali', '0822-3507-0664', 'sherlockholmes2.0', 'Made Rianja Richo Dainino', '5025201236', 0, 'daininoricho@yahoo.com', 'Warren Gerald Polandra', '5025201233', 0, 'warren.polandra@gmail.com', 'EsTehTawar-5025201237-ktm.pdf', 'EsTehTawar-5025201236-ktm.jpg', 'EsTehTawar-5025201233-ktm.PDF', 'EsTehTawar-5025201237-surat.pdf', 'EsTehTawar-5025201236-surat.jpg', 'EsTehTawar-5025201233-surat.PDF', '2021-01-24 02:20:16'),
(20, 'soybean', 'Ahmad Dany Mirza', '195150607111004', 0, 'ahmdm__@student.ub.ac.id', 'Komplek Masjid Subontoro Santren, RT/RW 03/07, Kec Mojoagung, Kab Jombang', '0857-3534-8493', 'adm404', 'Jagad Nabil Tuah Imanda', '195150207111030', 0, 'yukazu@student.ub.ac.id', 'Rifqi Hilmy Zhafrant', '195150700111020', 0, 'rifqi_hz30@student.ub.ac.id', 'soybean-195150607111004-ktm.pdf', 'soybean-195150207111030-ktm.pdf', 'soybean-195150700111020-ktm.pdf', 'soybean-195150607111004-surat.pdf', 'soybean-195150207111030-surat.pdf', 'soybean-195150700111020-surat.pdf', '2021-01-24 02:20:16'),
(22, 'dida', 'dida', 'dida', 0, 'dida@dida.dida', 'dida', '0810-8108-1018', 'dida', 'dida', 'dida', 0, 'dida@dida.dida', 'dida', 'dida', 0, 'dida@dida.dida', 'dida-dida-ktm.jpg', 'dida-dida-ktm1.jpg', 'dida-dida-ktm2.jpg', 'dida-dida-surat.jpg', 'dida-dida-surat1.jpg', 'dida-dida-surat2.jpg', '2021-01-24 02:20:16'),
(23, 'ara ara oniichan', 'Rayhan Ramdhany Hanaputra', '2019101648', 0, 'rayhanrhanaputra@outlook.com', 'Jl. Priksan Gg. Perumahan Kota Probolinggo', '0856-4661-0759', 'rayhanhanaputra', 'Alfido Osdie', '2019101574', 0, 'alpindoputra@gmail.com', 'R.M Genggam Satoe Bintang', '2019101646', 0, 'rmsatoebintang@gmail.com', 'ara_ara_oniichan-2019101648-ktm.pdf', 'ara_ara_oniichan-2019101574-ktm.pdf', 'ara_ara_oniichan-2019101646-ktm.pdf', 'ara_ara_oniichan-2019101648-surat.pdf', 'ara_ara_oniichan-2019101574-surat.pdf', 'ara_ara_oniichan-2019101646-surat.pdf', '2021-01-24 02:20:16'),
(24, 'yok,bisa,yok', 'Adventus Totti Mariano Simbolon', '201111897', 0, 'anakrpl8122@gmail.com', 'Jl. Nusa Indah VI Helvetia Medan', '0857-6136-3610', '-', 'Edwin Tantawi', '201111994', 0, 'edwintantawi@gmail.com', 'Candra', '161110056', 0, 'liaocandra456@yahoo.com', 'yok,bisa,yok-201111897-ktm.PNG', 'yok,bisa,yok-201111994-ktm.jpg', 'yok,bisa,yok-161110056-ktm.pdf', 'yok,bisa,yok-201111897-surat.PNG', 'yok,bisa,yok-201111994-surat.jpg', 'yok,bisa,yok-161110056-surat.png', '2021-01-24 02:20:16'),
(25, 'bosen idup', 'Jesson Gosal Yo', '13519079', 0, 'Aphostrophy@gmail.com', 'Cisatu 19', '0813-1206-5733', 'jessonyo', 'Ariya Adinatha', '13519048', 0, 'ariyaadinatha21@gmail.com', 'Andrew', '13519036', 0, '13519036@std.stei.itb.ac.id', 'bosen_idup-13519079-ktm.jpg', 'bosen_idup-13519048-ktm.jpg', 'bosen_idup-13519036-ktm.jpg', 'bosen_idup-13519079-surat.pdf', 'bosen_idup-13519048-surat.pdf', 'bosen_idup-13519036-surat.pdf', '2021-01-24 02:20:16'),
(26, 'coba_aja_dulu', 'Ketut Ananta Kevin Permana', '2005551010', 0, 'kevinprmn25@gmail.com', 'Ubung Kaja, Denpasar, Bali', '0812-3872-9811', 'kevin250502', 'Pramayota Fane\'a Lampung', '2005551004', 0, 'pramalampung@gmail.com', 'I Putu Krisna Mahadiputra', '2005551035', 0, 'krisnaptr29@gmail.com', 'coba_aja_dulu-2005551010-ktm.pdf', 'coba_aja_dulu-2005551004-ktm.pdf', 'coba_aja_dulu-2005551035-ktm.pdf', 'coba_aja_dulu-2005551010-surat.pdf', 'coba_aja_dulu-2005551004-surat.pdf', 'coba_aja_dulu-2005551035-surat.pdf', '2021-01-24 02:20:16'),
(27, 'senyumsemangat', 'Ming Hong', '2201741782', 0, 'minghong2403@gmail.com', 'Jl. Rawa Domba Perumahan Taman Duren Sawit D2/9', '0878-8042-0600', 'mingghong', 'Anthony', '2201768115', 0, 'anthony.setiawan45@gmail.com', 'Bryan Satyamulya', '2201732134', 0, 'bryansatya05@gmail.com', 'senyumsemangat-2201741782-ktm.jpg', 'senyumsemangat-2201768115-ktm.jpg', 'senyumsemangat-2201732134-ktm.jpg', 'senyumsemangat-2201741782-surat.jpg', 'senyumsemangat-2201768115-surat.jpg', 'senyumsemangat-2201732134-surat.jpg', '2021-01-24 02:20:16'),
(28, 'yah, namanya juga O R A NG  N G E H A C C', 'I Made Wahyudi', '180020005', 0, 'madewahyudi22@gmail.com', 'Penamparan', '0851-5792-2329', 'wahyudipds', 'I Putu Pramayasa Anesa Putra', '180010048', 0, 'bangsad.teroris@gmail.com', 'Christoper Hendratno', '170030041', 0, 'christophergin88@gmail.com', 'yah,_namanya_juga_O_R_A_NG_N_G_E_H_A_C_C-180020005-ktm.jpg', 'yah,_namanya_juga_O_R_A_NG_N_G_E_H_A_C_C-180010048-ktm.jpg', 'yah,_namanya_juga_O_R_A_NG_N_G_E_H_A_C_C-170030041-ktm.jpg', 'yah,_namanya_juga_O_R_A_NG_N_G_E_H_A_C_C-180020005-surat.jpg', 'yah,_namanya_juga_O_R_A_NG_N_G_E_H_A_C_C-180010048-surat.jpg', 'yah,_namanya_juga_O_R_A_NG_N_G_E_H_A_C_C-170030041-surat.jpg', '2021-01-24 02:20:16'),
(29, 'TolakAngin', 'Nathanael Berliano Novanka Putra', '2019101641', 0, 'nael.ano101@gmail.com', 'Randublatung', '0821-3581-8158', 'nathanaelberliano', 'Socrates Anugrah Mendrofa', '2019101659', 0, 'santesfermit@gmail.com', 'Ihsan Fadli Tampati', '2019101611', 0, 'ifat.ichan@gmail.com', 'TolakAngin-2019101641-ktm1.pdf', 'TolakAngin-2019101659-ktm1.pdf', 'TolakAngin-2019101611-ktm1.pdf', 'TolakAngin-2019101641-surat1.pdf', 'TolakAngin-2019101659-surat1.pdf', 'TolakAngin-2019101611-surat1.pdf', '2021-01-24 02:20:16'),
(30, 'Lowly Cone', 'Evan Ariel Utama', '2201735975', 0, 'evan.ariel2@gmail.com', 'Jl. Penganten Ali, Jakarta Timur', '0813-2388-8915', 'e_ariel', 'Kevin Wibamanto', '2201729676', 0, 'kevevine@gmail.com', 'Stewart Sulivinio', '2201729524', 0, 'stewartsulivinio@gmail.com', 'Lowly_Cone-2201735975-ktm.jpg', 'Lowly_Cone-2201729676-ktm.jpg', 'Lowly_Cone-2201729524-ktm.jpg', 'Lowly_Cone-2201735975-surat.pdf', 'Lowly_Cone-2201729676-surat.pdf', 'Lowly_Cone-2201729524-surat.pdf', '2021-01-24 02:20:16'),
(31, '0xdeadb33f', 'GUSTI AGUNG NGURAH GDE KABA TEGUH DARMAWANGSA', 'Taruna', 0, 'teguhdarmawangsa007@gmail.com', 'Jembrana', '0878-8706-7987', '-', 'PRATAMA AJI PRISADI', 'Taruna', 0, 'pratamaajip01@gmail.com', ' AKHMAD RIZAL ARIFUDIN', 'Taruna', 0, 'ararifudin@gmail.com', '0xdeadb33f-Taruna-ktm.jpg', '0xdeadb33f-Taruna-ktm1.jpg', '0xdeadb33f-Taruna-ktm2.jpg', '0xdeadb33f-Taruna-surat.pdf', '0xdeadb33f-Taruna-surat1.pdf', '0xdeadb33f-Taruna-surat2.pdf', '2021-01-24 02:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `iot`
--

CREATE TABLE `iot` (
  `id_ctf` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `id1` varchar(50) NOT NULL,
  `gender1` int(11) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `id2` varchar(50) DEFAULT NULL,
  `gender2` int(11) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `nama3` varchar(50) DEFAULT NULL,
  `id3` varchar(50) DEFAULT NULL,
  `gender3` int(11) DEFAULT NULL,
  `email3` varchar(50) DEFAULT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) DEFAULT NULL,
  `ktm3` varchar(255) DEFAULT NULL,
  `surat1` varchar(255) NOT NULL,
  `surat2` varchar(255) DEFAULT NULL,
  `surat3` varchar(255) DEFAULT NULL,
  `iot_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iot`
--

INSERT INTO `iot` (`id_ctf`, `nama_tim`, `nama1`, `id1`, `gender1`, `email1`, `alamat`, `no_wa`, `line`, `nama2`, `id2`, `gender2`, `email2`, `nama3`, `id3`, `gender3`, `email3`, `ktm1`, `ktm2`, `ktm3`, `surat1`, `surat2`, `surat3`, `iot_timestamp`) VALUES
(1, 'MakersPHB', 'Rizqi Khoeruzaman', '18040035', 0, 'hardwareprodikom@gmail.com', 'jl mataram no 9 margadana tegal kota', '0858-3263-4795', '-', 'Moh. Fiqih Erinsyah', '19040167', 0, 'hardwareprodikom@gmail.com', 'Wirayuda Ardi Pradana', '19040146', 0, 'hardwareprodikom@gmail.com', 'MakersPHB-18040035-ktm.jpg', 'MakersPHB-19040167-ktm.jpg', 'MakersPHB-19040146-ktm.jpg', 'MakersPHB-18040035-surat.pdf', 'MakersPHB-19040167-surat.pdf', 'MakersPHB-19040146-surat.pdf', '2021-01-24 02:20:17'),
(3, 'YUKbisa', 'Utara setya wardaya', '195150607111008', 0, 'tarazekage@gmail.com', 'Jalan raden patah Desa menggare Kec slahung Kab Ponorogo Jawa Timur', '0852-0490-6165', 'Utarasetyaw', 'ANAK AGUNG ADI WIRYYA PUTRA', '205150609111001', 0, 'aawiryya@gmail.com', 'Graita Sukma Febriansyah Triwildan Azmi', '195150600111008', 0, 'graita_sukma24@student.ub.ac.id', 'YUKbisa-195150607111008-ktm.pdf', 'YUKbisa-205150609111001-ktm.pdf', 'YUKbisa-195150600111008-ktm.pdf', 'YUKbisa-195150607111008-surat.pdf', 'YUKbisa-205150609111001-surat.pdf', 'YUKbisa-195150600111008-surat.pdf', '2021-01-24 02:20:17'),
(4, 'POLBANersswibs', 'Rina Hikmawati', '191354029', 1, 'rinahikmawati19@gmail.com', 'jln.Sindang sari barat RT.07 RW.26 Kel.Melong Kec.Cimahi Selatan Kota Cimahi Jawa Barat', '0822-1785-0747', 'sayarina19', 'Muhammad Rawdoh', '191364022', 0, 'muhammadrawdoh@gmail.com', 'Varian Andika Wijaya Kusuma', '171364030', 0, 'varian.andika.toi17@polban.ac.id', 'POLBANersswibs-191354029-ktm.pdf', 'POLBANersswibs-191364022-ktm.pdf', 'POLBANersswibs-171364030-ktm.pdf', 'POLBANersswibs-191354029-surat.pdf', 'POLBANersswibs-191364022-surat.pdf', 'POLBANersswibs-171364030-surat.pdf', '2021-01-24 02:20:17'),
(5, 'Sumber Rejeki', 'Liandri Eko Prayugo', '202410102008', 0, 'yoga3911@gmail.com', 'Jl Kenanga 12, Jember', '0822-9825-2448', 'yoga3911', 'Salsabilla Ramadhani', '202410101116', 1, 'salsa.ramadhani512@gmail.com', 'Muhamad Irsat Ainul Yaqin', '202410102036', 0, 'yayakaja58@gmail.com', 'Sumber_Rejeki-202410102008-ktm.png', 'Sumber_Rejeki-202410101116-ktm.png', 'Sumber_Rejeki-202410102036-ktm.png', 'Sumber_Rejeki-202410102008-surat.pdf', 'Sumber_Rejeki-202410101116-surat.pdf', 'Sumber_Rejeki-202410102036-surat.pdf', '2021-01-24 02:20:17'),
(6, 'Fortuna', 'Anggie Oktavia Putri', '0919040032', 1, 'anggieoktavia14@student.ppns.ac.id', 'Kemlaten Baru Barat Kenongo no.60 Surabaya', '0895-0228-6050', 'tidak punya line', 'Yuda Irawan', '0920040046', 0, 'yudairawan@student.ppns.ac.id', 'Anugerah Ekha Gusti Audryadmaja', '0920040047', 0, 'anugerah.ekha@student.ppns.ac.id', 'Fortuna-0919040032-ktm.pdf', 'Fortuna-0920040046-ktm.jpg', 'Fortuna-0920040047-ktm.jpg', 'Fortuna-0919040032-surat.PNG', 'Fortuna-0920040046-surat.jpg', 'Fortuna-0920040047-surat.jpg', '2021-01-24 02:20:17'),
(7, 'Amateur Very Student', 'Rohmah Hidayah', '10311810003025', 1, 'rohmahhidayah418@gmail.com', 'Sumberarum kerek Tuban ', '0821-4113-9741', 'rohmahhidayah120709', 'Muh .Andhika prasetya', '10311810003010', 0, 'kontak@andhika.my.id', 'Irfiani Nurul Mawaddah', '10411810000087', 1, 'irfiani.nurul.mawaddah@gmail.com', 'Amateur_Very_Student-10311810003025-ktm.png', 'Amateur_Very_Student-10311810003010-ktm.jpg', 'Amateur_Very_Student-10411810000087-ktm.jpg', 'Amateur_Very_Student-10311810003025-surat.pdf', 'Amateur_Very_Student-10311810003010-surat.pdf', 'Amateur_Very_Student-10411810000087-surat.PDF', '2021-01-24 02:20:17'),
(8, 'Tim Titanium', 'Siti Intan Nurhasanah', '5018201020', 1, 'sitiintannur2@gmail.com', 'RT/02. RW/01. Jln.kelapa gading desa Juwono kecamatan Kertosono kabupaten nganjuk', '0857-3334-0353', 'sitiintannur2', 'Arum Setyowati', '5001201004', 1, 'arum.stywt23@gmail.com', 'Dea Putri Ubaidah', '5018201004', 1, 'deaputri28044@gmail.com', 'Tim_Titanium-5018201020-ktm.pdf', 'Tim_Titanium-5001201004-ktm.pdf', 'Tim_Titanium-5018201004-ktm.pdf', 'Tim_Titanium-5018201020-surat.pdf', 'Tim_Titanium-5001201004-surat.pdf', 'Tim_Titanium-5018201004-surat.pdf', '2021-01-24 02:20:17'),
(9, 'Smart Greenhouse', 'Mohamad Wafi', '193140814111032', 0, 'wafimohamad10@gmail.com', 'Ds.Sendang kecamatan Senori Kab.Tuban', '0823-1149-5916', 'wafi10', 'Dikky setyawan', '193140714111001', 0, 'dikkysetyawan@gmail.com', 'Muhammad Nuridul Umama', '193140714111082', 0, 'nuridulumam@gmail.com', 'Smart_Greenhouse-193140814111032-ktm.jpg', 'Smart_Greenhouse-193140714111001-ktm.jpg', 'Smart_Greenhouse-193140714111082-ktm.jpg', 'Smart_Greenhouse-193140814111032-surat.jpg', 'Smart_Greenhouse-193140714111001-surat.jpg', 'Smart_Greenhouse-193140714111082-surat.jpg', '2021-01-24 02:20:17'),
(10, 'AlElBri Tech', 'Febrian Dzikri Fadlilah', '191364009', 0, 'febriandzikri21@gmail.com', 'Jl. Pembangunan Komplek Mutiara Jaya no.232 Kab. Garut', '0853-1493-7173', 'febriandzikri21', 'Alya Nur Sugandi', '191221033', 1, 'alya.nur.aer19@polban.ac.id', 'Elsa Maulani Putri', '191354008', 1, 'elsamaulanip25@gmail.com', 'AlElBri_Tech-191364009-ktm.pdf', 'AlElBri_Tech-191221033-ktm.pdf', 'AlElBri_Tech-191354008-ktm.pdf', 'AlElBri_Tech-191364009-surat.pdf', 'AlElBri_Tech-191221033-surat.pdf', 'AlElBri_Tech-191354008-surat.pdf', '2021-01-24 02:20:17'),
(11, 'Shadows Team', 'Iwan Hardiawan', '18304013', 0, 'iwan.hardiawan09@gmail.com', 'Kp. Cibanteng No. 04 RT. 01/11 Desa.MandalaMekar Kec. Cimenyan Kab. Bandung', '0896-5639-8556', '-', '-', '-', 0, 'iwan.hardiawan09@gmail.com', '-', '-', 0, 'iwan.hardiawan09@gmail.com', 'Shadows_Team-18304013-ktm.jpg', NULL, NULL, 'Shadows_Team-18304013-surat.jpg', NULL, NULL, '2021-01-24 02:20:17'),
(12, 'Brahma', 'Antoni Surya Putra', 'Antoni', 0, 'antonitarigan00@gmail.com', 'Jalan Raya UjungBerung no 275 Rt 004 Rw 005 - Kota Bandung', '0896-7021-9567', 'ucokdugem', '-', '-', 0, 'antonitarigan00@gmail.com', '-', '-', 0, 'antonitarigan00@gmail.com', 'Brahma-Antoni-ktm.jpg', NULL, NULL, 'Brahma-Antoni-surat.jpg', NULL, NULL, '2021-01-24 02:20:17'),
(13, 'INO-G', 'Singgih Ardiyansyah', '5024201015', 0, 'singgihardians@gmail.com', 'Desa Brobot, RT 01, RW 01, Kecamatan Bojongsari, Kabupaten Purbalingga,   Jawa Tengah 53362', '0882-2549-2972', 'singgih.ard', 'Arum Puspa A', '2040201127', 1, 'arumrumpuspa400@gmail.com', 'Raul Ilma Rajasa', '5025201076', 0, 'raulilmarajasa@gmail.com', 'INO-G-5024201015-ktm.png', 'INO-G-2040201127-ktm.png', 'INO-G-5025201076-ktm.jpg', 'INO-G-5024201015-surat.png', 'INO-G-2040201127-surat.pdf', 'INO-G-5025201076-surat.png', '2021-01-24 02:20:17'),
(14, 'NAOKO', 'Yuni Indrianty', '181311064', 1, 'yuni.indrianty.tele18@polban.ac.id', 'Kp.Pasir Kuray rt.05 rw.09 Kec.Ciranjang Kab.Cianjur Jawa Barat', '0858-4605-5605', 'yuni_indrianty', 'Fadel Firdaus', '181311040', 0, 'fadel.firdaus.tele18@polban.ac.id', 'Fikri Achmad Bachtiar', '181311044', 0, 'fikri.achmad.tele18@polban.ac.id', 'NAOKO-181311064-ktm.jpg', 'NAOKO-181311040-ktm.jpg', 'NAOKO-181311044-ktm.jpg', 'NAOKO-181311064-surat.pdf', 'NAOKO-181311040-surat.pdf', 'NAOKO-181311044-surat.pdf', '2021-01-24 02:20:17'),
(15, 'ESP33', 'Wildan Daffa Hafizh', '18219115', 0, 'wildandaffahafizh@gmail.com', 'Jl. Karmila IV F5/12, Jatiwaringin Asri, Pondokgede, Kota Bekasi, Jawa Barat 17411', '0896-2033-4313', 'daffabatu', 'Rafi Raihansyah Munandar', '13519154', 0, 'rafiray.munandar@gmail.com', 'Natasya Jatiwicha Azzahra', '18219065', 1, '18219065@std.stei.itb.ac.id', 'ESP33-18219115-ktm.jpg', 'ESP33-13519154-ktm.jpg', 'ESP33-18219065-ktm.jpg', 'ESP33-18219115-surat.pdf', 'ESP33-13519154-surat.pdf', 'ESP33-18219065-surat.pdf', '2021-01-24 02:20:17'),
(16, 'Cerdikiawan IoT', 'Mochammad Ibrahim Atthariq', '01111740000043', 0, 'ibrahimatthariq24@gmail.com', 'Jl. Nginden Kota 2/45, Surabaya', '0812-2857-0654', 'nate_river', 'Aulya Yarzuki Kustyawan', '10311710000087', 0, 'aulya.yarzuki@gmail.com', '-', '-', 0, '-@gmail.com', 'Cerdikiawan_IoT-01111740000043-ktm.JPG', 'Cerdikiawan_IoT-10311710000087-ktm.jpg', NULL, 'Cerdikiawan_IoT-01111740000043-surat.pdf', 'Cerdikiawan_IoT-10311710000087-surat.pdf', NULL, '2021-01-24 02:20:17'),
(17, 'VentTech', 'Tedy Apriadi', '167002095', 0, 'tedyapriadi39@gmail.com', 'Banjar, Jawa Barat', '0823-1818-5957', 'Tedyapriadi', 'Susi Sulistiawanti', '167002038', 0, 'Sulistiawantisusi@gmail.com', 'Susi Sulistiawanti', '167002038', 0, 'Sulistiawantisusi@gmail.com', 'VentTech-167002095-ktm.jpg', 'VentTech-167002038-ktm.jpg', 'VentTech-167002038-ktm1.jpg', 'VentTech-167002095-surat.jpg', 'VentTech-167002038-surat.jpg', 'VentTech-167002038-surat1.jpg', '2021-01-24 02:20:17'),
(18, 'Anyageraldine', 'Wahyu Nur Cahyo ', '200491100015', 0, 'Antonius050700@gmail.com', 'Jl.Lebak rejo utara 4/38, Surabaya', '0857-3715-1791', '-', 'Salmatul Farida', '200411100016', 1, 'salma15112001@gmail.com', '-', '-', 0, 'salma15112001@gmail.com', 'Anyageraldine-200491100015-ktm.png', 'Anyageraldine-200411100016-ktm.png', NULL, 'Anyageraldine-200491100015-surat.png', 'Anyageraldine-200411100016-surat.png', NULL, '2021-01-24 02:20:17'),
(19, 'Fattaah', 'Fattaah Bagas Rahmawan', '3322182809000001', 0, 'fattaah.bagas.rahmawan@gmail.com', 'JL. Bali Raya B/3 RT001 RW007 Gedanganak Ungaran Timur Kab. Semarang', '0838-4108-5501', '-', '-', '-', 0, 'fattaah.bagas.rahmawan@gmail.com', '-', '-', 0, 'fattaah.bagas.rahmawan@gmail.com', 'Fattaah-3322182809000001-ktm.jpg', NULL, NULL, 'Fattaah-3322182809000001-surat.jpg', NULL, NULL, '2021-01-24 03:04:00'),
(20, 'ORION', 'Awal Ariansyah', '195520019', 0, 'awalariansyah7@gmail.com', 'Jl. Dr. Wahidin, Sindangsari, Majenang', '0838-6343-4232', 'aawwaall77', 'Diky Setiawan', '195520020', 0, 'dikysetiawan773@gmail.com', 'Willy Setiawan', '195520018', 0, 'wilisetiawan29@gmail.com', 'ORION-195520019-ktm.jpg', 'ORION-195520020-ktm.jpg', 'ORION-195520018-ktm.jpg', 'ORION-195520019-surat.pdf', 'ORION-195520020-surat.pdf', 'ORION-195520018-surat.pdf', '2021-01-24 05:46:10'),
(21, 'Poolez Team', 'Muhammad Novana Hadie', '201810370311323', 0, 'muhammadnovaa15@gmail.com', 'Jl Saxsofone Perum Griya Tunggul Asri2', '0812-1448-5053', 'novahadie', 'Muhammad Rizky Rachmadani', '201810370311322', 0, 'rizkyrach200026@gmail.com', 'Rahul Pandika ', '201810370311301', 0, 'rahulpandika@gmail.com', 'Poolez_Team-201810370311323-ktm.jpg', 'Poolez_Team-201810370311322-ktm.jpg', 'Poolez_Team-201810370311301-ktm.jpg', 'Poolez_Team-201810370311323-surat.pdf', 'Poolez_Team-201810370311322-surat.pdf', 'Poolez_Team-201810370311301-surat.pdf', '2021-01-24 12:16:06'),
(22, 'The Winner', 'Wafda Gusti Taptian', '004202000013', 0, 'wafdataptian@gmail.com', 'Jl. PLN No. 119 A Sangatta Utara, Kutai Timur, Kalimantan Timur', '0822-5211-6092', 'wagustamvan', 'Iin lailatul ma\'rifah', '004202000027', 1, 'iin45donesia@gmail.com', 'Tidak ada', '.', 0, 'iin45donesia@gmail.com', 'The_Winner-004202000013-ktm.pdf', 'The_Winner-004202000027-ktm.pdf', NULL, 'The_Winner-004202000013-surat.pdf', 'The_Winner-004202000027-surat.pdf', NULL, '2021-01-24 15:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `olimpiade`
--

CREATE TABLE `olimpiade` (
  `id_ctf` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `id1` varchar(50) NOT NULL,
  `gender1` int(11) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `nama2` varchar(50) DEFAULT NULL,
  `id2` varchar(50) DEFAULT NULL,
  `gender2` int(11) DEFAULT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `nama3` varchar(50) DEFAULT NULL,
  `id3` varchar(50) DEFAULT NULL,
  `gender3` int(11) DEFAULT NULL,
  `email3` varchar(50) DEFAULT NULL,
  `ktm1` varchar(255) NOT NULL,
  `ktm2` varchar(255) DEFAULT NULL,
  `ktm3` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `olim_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `olimpiade`
--

INSERT INTO `olimpiade` (`id_ctf`, `nama_tim`, `nama1`, `id1`, `gender1`, `email1`, `alamat`, `no_wa`, `line`, `nama2`, `id2`, `gender2`, `email2`, `nama3`, `id3`, `gender3`, `email3`, `ktm1`, `ktm2`, `ktm3`, `foto1`, `foto2`, `foto3`, `olim_timestamp`) VALUES
(1, '$em64rang_w3s', 'MUHAMAD FATHONI', '0037634693', 0, 'muhamad_fathoni_27rpl@student.smktelkom-mlg.sch.id', 'Jalan Danau Ranau 12 G8B Sawojajar Malang kota', '0877-1511-1965', '-', 'NATHANAEL TJAHYADI', '0026334844', 0, 'nathanael_tjahyadi_27tkj@student.smktelkom-mlg.sch', 'RENDI NICOLAS MAHENDRA', '0021229158', 0, 'rendi_nicolas_27tkj@student.smktelkom-mlg.sch.id', 'em64rang_w3s-0037634693-ktm.jpg', 'em64rang_w3s-0026334844-ktm.jpg', 'em64rang_w3s-0021229158-ktm.jpg', 'em64rang_w3s-0037634693-foto.jpg', 'em64rang_w3s-0026334844-foto.jpg', 'em64rang_w3s-0021229158-foto.jpg', '2021-01-24 02:20:17'),
(2, 'Just Bill', 'Bill Elim', '0050592447', 0, 'billelimgg@gmail.com', 'Jalan Veteran Utara lorong 293 no. 18 Makassar', '0895-1022-3003', 'wrathhhh', '-', '-', 0, 'billelimgg@gmail.com', '-', '-', 0, 'billelimgg@gmail.com', 'Just_Bill-0050592447-ktm.jpg', 'Just_Bill---ktm.png', 'Just_Bill---ktm1.png', 'Just_Bill-0050592447-foto.png', 'Just_Bill---foto.png', 'Just_Bill---foto1.png', '2021-01-24 02:20:17'),
(3, 'IT CLUB5', 'Aditia Fauzi', '11918223', 0, 'dittcruzz787@gmail.com', 'Jl. Babakan Cikutra RT 04 RW 08 Kel. Neglasari Kec. Cibeunying Kaler', '0851-5518-8679', 'aditfauzi16', 'Luiz Christoper', '11918459', 0, 'luizchristoper@gmail.com', 'Vebrio Aditya.M', '11918737', 0, 'herozero2245@gmail.com', 'IT_CLUB5-11918223-ktm.jpg', 'IT_CLUB5-11918459-ktm.jpg', 'IT_CLUB5-11918737-ktm.jpg', 'IT_CLUB5-11918223-foto.jpg', 'IT_CLUB5-11918459-foto.jpg', 'IT_CLUB5-11918737-foto.jpg', '2021-01-24 02:20:17'),
(4, 'TEAM 2 IT CLUB 5', 'Muhammad Tegar Sparingga', '11918531', 0, 'sparingga55467@gmail.com', 'Jl jatihandap timur no 110 rt 04 rw 07 Kec. Mandalajati kelu. Jatihanda Kota Bandung', '0812-9542-7794', '11918531', 'Rahman Fadwahudin', '11918589', 0, 'rahmanfadwahudin@gmail.com', 'Yuzrizal Hidayat', '11918768', 0, 'yuzrizalhidayat28@gmail.com', 'TEAM_2_IT_CLUB_5-11918531-ktm.jpg', 'TEAM_2_IT_CLUB_5-11918589-ktm.jpg', 'TEAM_2_IT_CLUB_5-11918768-ktm.jpg', 'TEAM_2_IT_CLUB_5-11918531-foto.jpg', 'TEAM_2_IT_CLUB_5-11918589-foto.jpg', 'TEAM_2_IT_CLUB_5-11918768-foto.jpg', '2021-01-24 02:20:17'),
(5, 'SquareFlash ', 'Triyuwandi Wandira', '0031839967', 0, 'triyuwandiw@gmail.com', 'BTN Puskopad Sentani', '0822-3892-0562', 'triyuwandiii', 'Hilmi Hasbiya Zahirani Waltz ', '0036673020', 1, 'waltzrinki@gmail.com', 'Ramadhani Dwi Kurniawan Putra', '0027547111', 0, 'Ramadhnkurniawan@gmail.com', 'SquareFlash_-0031839967-ktm.jpg', 'SquareFlash_-0036673020-ktm.jpg', 'SquareFlash_-0027547111-ktm.jpg', 'SquareFlash_-0031839967-foto.png', 'SquareFlash_-0036673020-foto.jpg', 'SquareFlash_-0027547111-foto.png', '2021-01-24 02:20:17'),
(6, 'adasd', 'asd', 'qw', 0, 'yohaton624@izzum.com', 'as', '0823-9894-0688', 'as', 'as', 'sa', 0, 'yohaton624@izzum.com', 'as', 'sa', 1, 'yohaton624@izzum.com', 'adasd-qw-ktm.png', 'adasd-sa-ktm.png', 'adasd-sa-ktm1.png', 'adasd-qw-foto.png', 'adasd-sa-foto.png', 'adasd-sa-foto1.png', '2021-01-24 02:20:17'),
(7, 'Poseidon', 'Josiah Farrel Suwito', '0031517422', 0, 'josiahfrlswt@gmail.com', 'Ringinanom gg 2 no 2, Kediri', '0812-3426-4440', '19931883177316631553', 'Clarissa Halim', '0052605971', 1, 'clarissahalim865@gmail.com', 'Darryl Jordan Gunawan', '0031517450', 0, 'darryljordang@gmail.com', 'Poseidon-0031517422-ktm.pdf', 'Poseidon-0052605971-ktm.pdf', 'Poseidon-0031517450-ktm.pdf', 'Poseidon-0031517422-foto.jpg', 'Poseidon-0052605971-foto.JPG', 'Poseidon-0031517450-foto.jpg', '2021-01-24 02:20:17'),
(8, 'Calon Menantu Idaman', 'BINTANG MIFTAQUL HUDA', '10260', 0, 'bintangmfhd@gmail.com', 'Jl. Gatot Koco No.68. Pare', '0878-8137-7842', 'binmfhd', '-', '-', 0, 'null@gmail.com', '-', '-', 0, 'null2@gmail.com', 'Calon_Menantu_Idaman-10260-ktm.jpg', NULL, NULL, 'Calon_Menantu_Idaman-10260-foto.jpg', NULL, NULL, '2021-01-24 02:20:17'),
(9, 'DeepFried.sh', 'Fidelya Fredelina', '0041713117', 1, 'legallyfredelina3@keemail.me', 'Villa Pasir Mas Pasirkuda 16119', '0813-2853-3234', 'santen.kara', 'Alma Putri Nashrida', '0041618788', 1, 'almaputri100804@gmail.com', 'Chesta Aisya Fairuza Rosyadi', '0058826452', 1, 'chestafrosyadi@gmail.com', 'DeepFried-sh-0041713117-ktm.jpg', 'DeepFried-sh-0041618788-ktm.jpg', 'DeepFried-sh-0058826452-ktm.jpg', 'DeepFried-sh-0041713117-foto.jpg', 'DeepFried-sh-0041618788-foto.jpg', 'DeepFried-sh-0058826452-foto.jpg', '2021-01-24 02:20:17'),
(10, 'Impostors', 'Satya Aryaputra Wigiyanto', '118397', 0, 'satyaputrabcd@gmail.com', 'Komp. Catalya 2 Blok H No. 21', '0852-5510-2120', 'neko_sati', 'Starletto', '118403', 0, 'starlettoa@gmail.com', 'Khana Yusdiana', '118318', 1, 'khanayusdiana10@gmail.com', 'Impostors-118397-ktm.jpg', 'Impostors-118403-ktm.jpg', 'Impostors-118318-ktm.jpg', 'Impostors-118397-foto.png', 'Impostors-118403-foto.jpg', 'Impostors-118318-foto.jpg', '2021-01-24 02:20:17'),
(11, 'zac12', 'Gavriel Pramuda Kurniaadi', '0035171202', 0, 'gavriel.k.adi12@gmail.com', 'Jalan Ngesrep Barat I No 46A, Semarang', '8953-9892-6737', 'riel_adi12', '-', '-', 0, '-@gmail.com', '-', '-', 0, '-@gmail.com', 'zac12-0035171202-ktm2.jpg', NULL, NULL, 'zac12-0035171202-foto2.jpg', NULL, NULL, '2021-01-24 02:20:17'),
(12, 'mars', 'Nabila Syahidah', '0042741969', 1, 'elsyhd.lalalabs@gmail.com', 'Banjarnegara', '0813-9164-8459', 'sincost', 'Azizah Nur Aini', '0033523771', 1, 'azizah.ana03@gmail.com', 'Khonsa Hamidah', '0043874171', 1, 'khonsahamidah0121@gmail.com', 'mars-0042741969-ktm.jpg', 'mars-0033523771-ktm.jpg', 'mars-0043874171-ktm.pdf', 'mars-0042741969-foto.png', 'mars-0033523771-foto.jpg', 'mars-0043874171-foto.jpg', '2021-01-24 02:20:17'),
(13, 'Manic BTH', 'Muhamad Rafi kurnia', '0046307260', 0, 'rafikurnia2004@gmail.com', 'Graha Nusa Batam Blok D no.3', '0858-3113-3371', 'rafikurnia174', 'Dwi Erina Athaillah', '0065055781', 1, 'dwierina30@gmail.com', 'Adinda Batrisyibazla', '0043214201', 0, 'adinda.batrisyib@gmail.com', 'Manic_BTH-0046307260-ktm.jpg', 'Manic_BTH-0065055781-ktm.jpg', 'Manic_BTH-0043214201-ktm.jpg', 'Manic_BTH-0046307260-foto.jpg', 'Manic_BTH-0065055781-foto.jpg', 'Manic_BTH-0043214201-foto.jpg', '2021-01-24 12:46:25'),
(14, 'RESTU IBU ', 'VINSENSIA GALUH DWIJAYANTI', '10292', 1, 'vinsensia.galuh@gmail.com', 'Jl. Bratang wetan 2/18', '0878-5794-4737', 'galuhv', 'ROSSYTA ZIA AZZAHRA', '10248', 1, 'rossytazaza12@gmail.com', 'NI MADE PARAMA SINTA WULANDARI', '10192', 1, 'nimadewulandari03@gmail.com', 'RESTU_IBU_-10292-ktm.jpg', 'RESTU_IBU_-10248-ktm.jpg', 'RESTU_IBU_-10192-ktm.jpg', 'RESTU_IBU_-10292-foto.jpg', 'RESTU_IBU_-10248-foto.jpg', 'RESTU_IBU_-10192-foto.jpg', '2021-01-24 12:59:34'),
(15, 'AIR', 'Abdul Rozaqi Wildan', '0024426272', 0, 'rozaqiwt@gmail.com', 'Jl Pesantren Bunisari rt 03 rw 05', '0813-1222-1879', 'rozaqiw', 'Iftala Zahri Sukmana', '0032399062', 0, 'circlebytes.iftala@gmail.com', 'Robi Setia Permadi', '0027581569', 0, 'setiapermadir@gmail.com', 'AIR-0024426272-ktm.jpg', 'AIR-0032399062-ktm.jpg', 'AIR-0027581569-ktm.jpg', 'AIR-0024426272-foto.jpg', 'AIR-0032399062-foto.jpg', 'AIR-0027581569-foto.jpg', '2021-01-24 13:26:39'),
(16, 'n-0ne', 'Ferrari Romano', '0010902190', 0, 'ferrariromano74@gmail.com', 'Desa Kebonrejo,RT.01/RW.03 Kabupaten Banyuwangi Kecamatan Kalibaru ', '0822-3222-1316', 'ferrariromano', 'Suhermanto', '0035805312', 0, 'shrmantoch@gmail.com', 'Mohammad Rendy Firmansyah', '0024638761', 0, 'rendy20firmansyah@gmail.com', 'n-0ne-0010902190-ktm.jpg', 'n-0ne-0035805312-ktm.jpg', 'n-0ne-0024638761-ktm.jpg', 'n-0ne-0010902190-foto.png', 'n-0ne-0035805312-foto.JPG', 'n-0ne-0024638761-foto.JPG', '2021-01-24 16:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(4) NOT NULL,
  `username_panitia` varchar(69) NOT NULL,
  `password_panitia` varchar(69) NOT NULL,
  `status_panitia` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `username_panitia`, `password_panitia`, `status_panitia`) VALUES
(1, 'superpanitia25', 'd44535d9822e1a9f0b66727cb0fe9035', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panitia_log`
--

CREATE TABLE `panitia_log` (
  `log_p_id` int(16) NOT NULL,
  `log_panitia_id` int(4) NOT NULL,
  `log_panitia_access_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `log_panitia_accessor_name_panitia` varchar(69) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia_log`
--

INSERT INTO `panitia_log` (`log_p_id`, `log_panitia_id`, `log_panitia_access_time`, `log_panitia_accessor_name_panitia`) VALUES
(1, 1, '2021-01-15 11:22:18', 'Rafael');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `bukti_share` varchar(255) NOT NULL,
  `bukti_zip` varchar(255) NOT NULL,
  `tim_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tim_status` int(11) NOT NULL DEFAULT '2',
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `nama`, `kategori`, `institusi`, `bukti_bayar`, `bukti_share`, `bukti_zip`, `tim_timestamp`, `tim_status`, `pass`) VALUES
(1, '********', 'ctf', 'Universitas Gadjah Mada', 'bukti_bayar-********.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(2, '%zqIH@#eo#1YT6pCjQwyQCiO0', 'ctf', 'Universitas Indonesia', 'bukti_bayar-%zqIH@eo1YT6pCjQwyQCiO0.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(3, '$em64rang_w3s', 'olimpiade', 'SMK TELKOM MALANG', 'bukti_bayar-em64rang_w3s.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(4, 'IniBuatTestingAja', 'ctf', 'IniBuatTestingAja', 'bukti_bayar-IniBuatTestingAja.png', '', '', '2021-01-24 02:20:17', 2, ''),
(6, 'd.i.d.a.t.e.s', 'ctf', 'ITS', 'bukti_bayar-d-i-d-a-t-e-s.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(7, 'P.i.n.G', 'ctf', 'Insitut Teknologi Telkom Purwokerto', 'bukti_bayar-P-i-n-G.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(8, 'Aesteitic Depok', 'ctf', 'Universitas Indonesia', 'bukti_bayar-Aesteitic_Depok.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(9, 'MakersPHB', 'iot', 'Politeknik Harapan Bersama Tegal', '', '', '', '2021-01-24 02:20:17', 2, '5d2cd67210f76e9527b1d492ffb60233'),
(10, 'Just Bill', 'olimpiade', 'SMKN 7 Makassar', 'bukti_bayar-Just_Bill.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(11, 'IT CLUB5', 'olimpiade', 'SMKN 5 Bandung', 'bukti_bayar-IT_CLUB5.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(12, 'TEAM 2 IT CLUB 5', 'olimpiade', 'SMKN 5 Bandung', 'bukti_bayar-TEAM_2_IT_CLUB_5.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(13, 'Kotak-Kotak', 'ctf', 'Bina Nusantara', 'bukti_bayar-Kotak-Kotak.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(14, 'SquareFlash ', 'olimpiade', 'SMK YPKP SENTANI', 'bukti_bayar-SquareFlash_.png', '', '', '2021-01-24 02:20:17', 2, ''),
(15, 'adasd', 'olimpiade', 'asd', 'bukti_bayar-adasd.png', '', '', '2021-01-24 02:20:17', 2, ''),
(17, 'lambang tes', 'iot', 'ITS', '', '', '', '2021-01-24 02:20:17', 2, 'b07b1bdf449282fd17777d1f2f45ed83'),
(18, 'Poseidon', 'olimpiade', 'SMAN 2 KEDIRI', 'bukti_bayar-Poseidon.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(23, 'ABK', 'ctf', 'Politeknik Harapan Bersama Tegal', 'bukti_bayar-ABK.pdf', '', '', '2021-01-24 02:20:17', 2, ''),
(24, 'Ksatria Akra', 'ctf', 'IPB University', 'bukti_bayar-Ksatria_Akra.pdf', '', '', '2021-01-24 02:20:17', 2, ''),
(25, 'YUKbisa', 'iot', 'Brawijaya University', '', '', '', '2021-01-24 02:20:17', 2, '67ded0a9b2582a91477c759e37b5569a'),
(26, 'POLBANersswibs', 'iot', 'Politeknik Negeri Bandung', '', '', '', '2021-01-24 02:20:17', 2, 'b98107b18e7fc025cfc570195270ef7b'),
(27, 'Calon Menantu Idaman', 'olimpiade', 'SMAN 1 PARE', 'bukti_bayar-Calon_Menantu_Idaman.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(28, 'Sumber Rejeki', 'iot', 'Universitas Jember', '', '', '', '2021-01-24 02:20:17', 2, 'fd7087413395c8a056676f26b834093b'),
(29, 'Terlantarkan', 'ctf', 'Universitas Bina Nusantara', 'bukti_bayar-Terlantarkan.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(30, 'Syntax', 'ctf', ' Institut Teknologi dan Bisnis BRI', 'bukti_bayar-Syntax.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(31, 'No Rush & Relax', 'ctf', 'IPB University', 'bukti_bayar-No_Rush_Relax.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(32, 'SmallBrainBois', 'ctf', 'Institut Teknologi Bandung', 'bukti_bayar-SmallBrainBois.pdf', '', '', '2021-01-24 02:20:17', 2, ''),
(33, 'Pandadap', 'ctf', 'Institut Teknologi Del', 'bukti_bayar-Pandadap.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(34, 'EsTehTawar', 'ctf', 'Instutu Teknologi Sepuluh Nopember', 'bukti_bayar-EsTehTawar.pdf', '', '', '2021-01-24 02:20:17', 2, ''),
(35, 'soybean', 'ctf', 'Universitas Brawijaya', 'bukti_bayar-soybean.pdf', '', '', '2021-01-24 02:20:17', 2, ''),
(37, 'dida', 'ctf', 'dida', 'bukti_bayar-dida.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(38, 'ara ara oniichan', 'ctf', 'Politeknik Siber dan Sandi Negara', 'bukti_bayar-ara_ara_oniichan.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(39, 'yok,bisa,yok', 'ctf', 'STMIK Mikroskil', 'bukti_bayar-yok,bisa,yok.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(40, 'bosen idup', 'ctf', 'ITB', 'bukti_bayar-bosen_idup.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(41, 'coba_aja_dulu', 'ctf', 'Universitas Udayana', 'bukti_bayar-coba_aja_dulu.pdf', '', '', '2021-01-24 02:20:17', 2, ''),
(42, 'DeepFried.sh', 'olimpiade', 'SMAN 1 Bogor', 'bukti_bayar-DeepFried-sh.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(43, 'senyumsemangat', 'ctf', 'Universitas Bina Nusantara', 'bukti_bayar-senyumsemangat.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(44, 'yah, namanya juga O R A NG  N G E H A C C', 'ctf', 'Institut Teknologi dan Bisnis Stikom Bali', 'bukti_bayar-yah,_namanya_juga_O_R_A_NG_N_G_E_H_A_C_C.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(45, 'TolakAngin', 'ctf', 'Politeknik Siber dan Sandi Negara', 'bukti_bayar-TolakAngin.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(46, 'Lowly Cone', 'ctf', 'Universitas Bina Nusantara', 'bukti_bayar-Lowly_Cone.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(47, 'Impostors', 'olimpiade', 'SMK TELKOM MAKASSAR', 'bukti_bayar-Impostors.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(48, 'Fortuna', 'iot', 'PPNS', '', '', '', '2021-01-24 02:20:17', 2, '27a0501724e73ace8a2ff55204be829c'),
(49, 'Amateur Very Student', 'iot', 'ITS', '', '', '', '2021-01-24 02:20:17', 2, 'b2c21d1caba434f38d4dc37b6ae7a4a5'),
(50, 'zac12', 'olimpiade', 'SMAK Tritunggal Semarang', 'bukti_bayar-zac12.png', '', '', '2021-01-24 02:20:17', 2, ''),
(51, '0xdeadb33f', 'ctf', 'Politeknik Siber dan Sandi Negara', 'bukti_bayar-0xdeadb33f.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(52, 'Tim Titanium', 'iot', 'Institut Teknologi Sepuluh Nopember', '', '', '', '2021-01-24 02:20:17', 2, '1658930d059538bcc6272b79a20ec639'),
(53, 'Smart Greenhouse', 'iot', 'universitas Brawijaya', '', '', '', '2021-01-24 02:20:17', 2, 'c5a227446a597be57b6ba25a20709400'),
(54, 'mars', 'olimpiade', 'SMA IT Nur Hidayah', 'bukti_bayar-mars.jpg', '', '', '2021-01-24 02:20:17', 2, ''),
(55, 'AlElBri Tech', 'iot', 'Politeknik Negeri Bandung', '', '', '', '2021-01-24 02:20:17', 2, '1d2ad22d4224f939c7ddbe62c0ed958d'),
(56, 'Shadows Team', 'iot', 'Politeknik Piksi Ganesha Bandung', '', '', '', '2021-01-24 02:20:17', 2, '8dadd5c10a05d600280e6cca5d2977a4'),
(57, 'Brahma', 'iot', 'Politeknik Negeri Bandung', '', '', '', '2021-01-24 02:20:17', 2, '3d22218da2afa48c2e4d8c00db2080c5'),
(58, 'INO-G', 'iot', 'Institut Teknologi Sepuluh Nopember', '', '', '', '2021-01-24 02:20:17', 2, 'e320ef25a6ba38ce16e8c52bf9ebbf06'),
(59, 'NAOKO', 'iot', 'POLITEKNIK NEGERI BANDUNG', '', '', '', '2021-01-24 02:20:17', 2, 'dd3b04c55ea38acda03bf89146465ac4'),
(60, 'ESP33', 'iot', 'ITB', '', '', '', '2021-01-24 02:20:17', 2, '37c7bc77a88258cca5a0959ff9c8a21b'),
(61, 'Cerdikiawan IoT', 'iot', 'Institut Teknologi Sepuluh Nopember', '', '', '', '2021-01-24 02:20:17', 2, '400dac0160e3224ce3d15ff593478793'),
(62, 'VentTech', 'iot', 'Universitas Siliwangi', '', '', '', '2021-01-24 02:20:17', 2, '04bb98944812b71e9007ba1fb35695a9'),
(68, 'Anyageraldine', 'iot', 'Universitas Trunojoyo Madura', '', '', '', '2021-01-24 02:20:17', 2, '7e205652e36a9d318b0d094b6b23c81e'),
(69, 'Fattaah', 'iot', 'Universitas Terbuka', '', '', '', '2021-01-24 03:04:00', 2, 'bceabc976a7f38932f8019f5355d34b7'),
(70, 'ORION', 'iot', 'S1 Teknik Informatika, STMIK Komputama Majenang', '', '', '', '2021-01-24 05:46:10', 2, '39ddbd70dd8b2cee621abf1b1b75159a'),
(71, 'Poolez Team', 'iot', 'UMM', '', '', '', '2021-01-24 12:16:06', 2, 'b076d3adf3023e05ba9b1d747f917a1d'),
(72, 'Manic BTH', 'olimpiade', 'MAN Insan Cendekia Batam', 'bukti_bayar-Manic_BTH.png', '', '', '2021-01-24 12:46:25', 2, ''),
(74, 'RESTU IBU ', 'olimpiade', 'SMAN 14 SURABAYA ', 'bukti_bayar-RESTU_IBU_.jpg', '', '', '2021-01-24 12:59:34', 2, ''),
(75, 'AIR', 'olimpiade', 'SMKN 1 Cimahi', 'bukti_bayar-AIR.jpg', '', '', '2021-01-24 13:26:39', 2, ''),
(76, 'The Winner', 'iot', 'President University', '', '', '', '2021-01-24 15:07:50', 2, '03d641b534e931f0ebd0278b459f3d6b'),
(77, 'n-0ne', 'olimpiade', 'SMKN Kalibaru ', 'bukti_bayar-n-0ne.jpg', '', '', '2021-01-24 16:30:42', 2, ''),
(78, 'Hello, World!', 'iot', 'Universitas Dian Nuswantoro', '', '', '', '2021-01-25 12:47:37', 2, 'a488d127b4fab740fb843c5a4ac26c84');

-- --------------------------------------------------------

--
-- Table structure for table `webinar`
--

CREATE TABLE `webinar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `bukti` text NOT NULL,
  `webinar_timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webinar`
--

INSERT INTO `webinar` (`id`, `nama`, `institusi`, `email`, `no_wa`, `bukti`, `webinar_timestamp`) VALUES
(1, '\"><img>', '\"><img>', 'risky.syaputra7334@gmail.com', '0812-0484-8484', '0812-0484-8484.jpg', '2021-01-24 02:20:17'),
(2, 'Dimas Sahid Abdullah', 'Universitas Gunadarma', 'syahid354313@gmail.com', '0813-8340-0667', '0813-8340-0667.PNG', '2021-01-24 02:20:17'),
(3, 'Mahesa tirta panjalu', 'Universitas gunadarma', 'mahesat8@gmail.com', '0877-8130-8317', '0877-8130-8317.png', '2021-01-24 02:20:17'),
(4, 'Daniel Tirwandez Putra Siahaan', 'SMAN 81 Jakarta', 'danielsiahaan127@gmail.com', '0812-9069-7802', '0812-9069-7802.jpg', '2021-01-24 02:20:17'),
(5, 'Imelda s sigalingging', 'Stmik mikroskil,smkn 1 sipirok', 'imeldaramadan961@gmail.com', '0812-6428-6288', '0812-6428-6288.jpg', '2021-01-24 02:20:17'),
(6, 'Adventus Totti Mariano Simbolon', 'STMIK Mikroskil', 'anakrpl8122@gmail.con', '0857-6136-3610', '0857-6136-3610.jpg', '2021-01-24 02:20:17'),
(7, 'Kris Cahyanti', 'Universitas Siliwangi', '13kriscahyanti01@gmail.com', '0857-4292-4009', '0857-4292-4009.jpg', '2021-01-24 14:48:36'),
(8, 'Iqbal Tamam', 'Univ Raharja', 'iqbal.tamam@raharja.info', '0895-2342-8099', '0895-2342-8099.jpg', '2021-01-25 02:56:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstrak_iot`
--
ALTER TABLE `abstrak_iot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctf`
--
ALTER TABLE `ctf`
  ADD PRIMARY KEY (`id_ctf`),
  ADD UNIQUE KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `iot`
--
ALTER TABLE `iot`
  ADD PRIMARY KEY (`id_ctf`),
  ADD UNIQUE KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `olimpiade`
--
ALTER TABLE `olimpiade`
  ADD PRIMARY KEY (`id_ctf`),
  ADD UNIQUE KEY `nama_tim` (`nama_tim`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD UNIQUE KEY `username_panitia` (`username_panitia`);

--
-- Indexes for table `panitia_log`
--
ALTER TABLE `panitia_log`
  ADD PRIMARY KEY (`log_p_id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abstrak_iot`
--
ALTER TABLE `abstrak_iot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ctf`
--
ALTER TABLE `ctf`
  MODIFY `id_ctf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `iot`
--
ALTER TABLE `iot`
  MODIFY `id_ctf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `olimpiade`
--
ALTER TABLE `olimpiade`
  MODIFY `id_ctf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panitia_log`
--
ALTER TABLE `panitia_log`
  MODIFY `log_p_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
