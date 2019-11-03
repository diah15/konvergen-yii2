-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2019 at 08:40 AM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konvergen`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 24016400),
('BR', 'Brazil', 205722000),
('CA', 'Canada', 35985751),
('CN', 'China', 1375210000),
('DE', 'Germany', 81459000),
('FR', 'France', 64513242),
('GB', 'United Kingdom', 65097000),
('IN', 'India', 1285400000),
('RU', 'Russia', 146519759),
('US', 'United States', 322976000);

-- --------------------------------------------------------

--
-- Table structure for table `crime_detail`
--

CREATE TABLE `crime_detail` (
  `id` int(6) UNSIGNED NOT NULL,
  `crime_type` varchar(255) DEFAULT NULL,
  `species` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_detail`
--

INSERT INTO `crime_detail` (`id`, `crime_type`, `species`, `tanggal`, `link`, `location`) VALUES
(51, 'menangkap', 'A', '2018-06-13 17:00:00', 'http://photo.sindonews.com/view/14628/bksda-sulut-amankan-dua-ekor-monyet-hitam', 'Jakarta'),
(52, 'menangkap', 'A', '2017-12-31 17:00:00', 'http://www.lensaindonesia.com/2014/09/30/bbkp-surabaya-sita-nuri-kepala-hitam-dari-oknum-tni.html', 'Jakarta'),
(53, 'menangkap', 'A', '2018-01-01 17:00:00', 'https://bitungnews.com/2014/10/30/polisi-tangkap-puluhan-satwa-langka-asal-papua/', 'Jakarta'),
(54, 'menangkap', 'A', '2018-01-02 17:00:00', 'http://pekanbaru.tribunnews.com/2015/02/11/pemburu-gajah-ditangkap-bawa-gading-ratusan-juta-rupiah', 'Jakarta'),
(55, 'menangkap', 'A', '2018-01-03 17:00:00', 'http://palembang.tribunnews.com/2014/05/14/tim-reskrim-polres-mura-bekuk-penjual-trenggiling', 'Jakarta'),
(56, 'menyimpan', 'A', '2018-01-04 17:00:00', 'http://photo.sindonews.com/view/14628/bksda-sulut-amankan-dua-ekor-monyet-hitam', 'Jakarta'),
(57, 'menyimpan', 'A', '2018-01-05 17:00:00', 'http://denpostnews.com/2016/08/15/polisi-amankan-satu-ekor-burung-rangkong/', 'Jakarta'),
(58, 'menyimpan', 'A', '2018-01-06 17:00:00', 'https://news.okezone.com/read/2011/07/11/338/478517/penyelundupan-trenggiling-senilai-rp23-m-digagalkan', 'Jakarta'),
(59, 'mengeluarkan', 'A', '2018-01-07 17:00:00', 'http://tangerangnews.com/bandara/read/5156/penyelundupan-daging-trenggiling-senilai-rp-2-3-miliar-digagalkan', 'Jakarta'),
(60, 'mengeluarkan', 'B', '2018-01-08 17:00:00', 'http://www.mongabay.co.id/2012/06/15/127-ton-trenggiling-ilegal-dimusnahkan/', 'Jakarta'),
(61, 'mengeluarkan', 'B', '2018-01-09 17:00:00', 'https://sains.kompas.com/read/2012/08/31/14150877/Puluhan.Satwa.Dilindungi.Berhasil.Diselamatkan.di.Sulut', 'Jakarta'),
(62, 'mengeluarkan', 'B', '2018-01-10 17:00:00', 'http://www.mongabay.co.id/2013/11/18/polisi-gagalkan-penyelundupan-111-nuri-talaud-ke-filipina/', 'Jakarta'),
(63, 'memperniagakan', 'B', '2018-01-11 17:00:00', 'http://satelitnews.co.id/paruh-burung-dan-trenggiling-diselundupkan-empat-wn-china/', 'Jakarta'),
(64, 'memperniagakan', 'B', '2018-01-12 17:00:00', 'http://beritagar.id/artikel/berita/trenggiling-hidup-akan-dikirim-penyelundup', 'Jakarta'),
(65, 'memperniagakan', 'B', '2018-01-13 17:00:00', 'http://bengkuluekspress.com/selundupkan-puluhan-trenggiling-2-warga-bu-diamankan/', 'Jakarta'),
(66, 'memperniagakan', 'B', '2018-01-14 17:00:00', 'http://kanalsatu.com/id/post/7635/6-ton-trenggiling-dari-indonesia-disita-bea-cukai-vietnam', 'Jakarta'),
(67, 'mengambil', 'B', '2018-01-15 17:00:00', 'http://www.mongabay.co.id/2013/10/10/jakowi-turun-ke-lapangan-dialog-bersama-masyarakat-bisa-cegah-konflik/', 'Jakarta'),
(68, 'mengambil', 'C', '2018-01-16 17:00:00', 'https://aceh.tribunnews.com/2013/02/13/polres-langsa-tangkap-pria-penyelundup-trenggiling', 'Jakarta'),
(69, 'mengambil', 'C', '2018-01-17 17:00:00', 'http://nasional.tempo.co/read/news/2013/12/03/058534361/sembunyikan-belasan-trenggiling-pria-ini-diburu', 'Jakarta'),
(70, 'mengambil', 'C', '2018-01-18 17:00:00', 'http://www.mongabay.co.id/2014/01/10/diangkut-garuda-indonesia-2-800-kura-kura-moncong-babi-disita/', 'Jakarta'),
(71, 'menangkap', 'C', '2018-01-19 17:00:00', 'http://www.borneonews.co.id/berita/776-trenggiling-beku-siap-jual-diamankan', 'Jakarta'),
(72, 'menangkap', 'C', '2018-01-20 17:00:00', 'http://www.beritasatu.com/nasional/162756-polres-mukomuko-ungkap-jaringan-penjualan-satwa-langka.html', 'Jakarta'),
(73, 'menangkap', 'C', '2018-01-21 17:00:00', 'http://internasional.kompas.com/read/2014/01/26/0034079/Polisi.Bengkulu.Tangkap.Pemburu.Harimau', 'Jakarta'),
(74, 'menangkap', 'D', '2018-01-22 17:00:00', 'http://www.republika.co.id/berita/nasional/daerah/14/01/24/mzwe94-polres-mukomuko-tangkap-penjual-satwa-dilindungi', 'Jakarta'),
(75, 'menyimpan', 'D', '2018-01-23 17:00:00', 'https://radarsemarang.com/2014/01/28/penjual-satwa-langka-dituntut-18-bulan/', 'Jakarta'),
(76, 'menyimpan', 'D', '2018-01-24 17:00:00', 'http://aceh.tribunnews.com/2013/02/13/polres-langsa-tangkap-pria-penyelundup-trenggiling', 'Jakarta'),
(77, 'menyimpan', 'D', '2018-01-25 17:00:00', 'http://www.suara.com/news/2014/05/26/123804/polisi-gagalkan-penyelundupan-satwa-langka', 'Jakarta'),
(78, 'mengeluarkan', 'D', '2018-01-26 17:00:00', 'http://kabar24.bisnis.com/read/20140611/16/235093/penyelundupan-satwa-langka-warga-kuwait-jerman-dibekuk', 'Sumatera'),
(79, 'mengeluarkan', 'D', '2018-01-27 17:00:00', 'http://www.antaranews.com/berita/438551/kementan-gagalkan-dua-penyelundupan-satwa-dilindungi', 'Sumatera'),
(80, 'mengeluarkan', 'D', '2018-01-28 17:00:00', 'http://news.mongabay.com/2014/08/indonesian-authorities-bust-porcupine-Smuggling-ring/', 'Sumatera'),
(81, 'mengeluarkan', 'D', '2018-01-29 17:00:00', 'http://www.detikawanua.com/2014/09/polres-talaud-gagalkan-penyelundupan.html', 'Sumatera'),
(82, 'memperniagakan', 'E', '2018-01-30 17:00:00', 'http://news.liputan6.com/read/2105275/tim-bksda-jambi-ringkus-penjual-kulit-harimau-ilegal', 'Sumatera'),
(83, 'memperniagakan', 'E', '2018-01-31 17:00:00', 'http://beritamanado.com/lagi-satwa-dilindungi-dijadikan-ole-ole-brimob-gorontalo/', 'Sumatera'),
(84, 'memperniagakan', 'E', '2018-02-01 17:00:00', 'http://www.lensaindonesia.com/2014/09/30/bbkp-surabaya-sita-nuri-kepala-hitam-dari-oknum-tni.html', 'Sumatera'),
(85, 'memperniagakan', 'E', '2018-02-02 17:00:00', 'http://www.tribunnews.com/regional/2014/11/01/penyelundupan-300-kilogram-kulit-trenggiling-ke-tangerang-digagalkan', 'Sumatera'),
(86, 'mengambil', 'E', '2018-02-03 17:00:00', 'http://www.jitunews.com/read/6452/petugas-karantina-gagalkan-penyelundupan-kakatua-jambul-orange', 'Sumatera'),
(87, 'mengambil', 'E', '2018-02-04 17:00:00', 'http://aceh.tribunnews.com/2015/01/12/polisi-tangkap-tiga-pedagang-landak', 'Sumatera'),
(88, 'mengambil', 'E', '2018-02-05 17:00:00', 'http://www.lensaindonesia.com/2015/01/31/polda-jatim-dan-interpol-inggris-ungkap-penyelundupan-satwa-langka.html', 'Sumatera'),
(89, 'mengambil', 'E', '2018-02-06 17:00:00', 'http://regional.kompas.com/read/2015/02/04/04162271/Petugas.Karantina.Ikan.Amankan.250.Kilogram.Sirip.Hiu.yang.Dilindungi.', 'Sumatera'),
(90, 'mengambil', 'E', '2018-02-07 17:00:00', 'http://www.tribunnews.com/regional/2015/12/03/penjualan-satwa-dilindungi-masih-marak-di-palembang', 'Sumatera'),
(91, 'menangkap', 'F', '2018-02-08 17:00:00', 'http://www.mongabay.co.id/2016/01/26/vonis-yang-harus-membuat-jera-pemburu-gajah/', 'Sumatera'),
(92, 'menangkap', 'F', '2018-02-09 17:00:00', 'http://pekanbaru.tribunnews.com/2015/02/11/pemburu-gajah-ditangkap-bawa-gading-ratusan-juta-rupiah', 'Sumatera'),
(93, 'menangkap', 'F', '2018-02-10 17:00:00', 'http://fokusjambi.com/post/detail/3-penjual-kulit-harimau-diringkus.html', 'Sumatera'),
(94, 'menangkap', 'F', '2018-02-11 17:00:00', 'http://jambi.tribunnews.com/2015/03/14/foto-inilah-penampakan-kucing-langka-yang-dijual-di-fb', 'Sumatera'),
(95, 'menyimpan', 'F', '2018-02-12 17:00:00', 'http://www.merdeka.com/peristiwa/polda-jambi-tangkap-eks-pns-anggota-komplotan-penjual-kulit-harimau.html', 'Sumatera'),
(96, 'menyimpan', 'G', '2018-02-13 17:00:00', 'http://www.dailymail.co.uk/news/article-3027470/Russian-customs-catch-woman-trying-smuggle-55-snakes-35-lizards-seven-turtles-six-lemurs-two-monkeys-LEOPARD-cub-flight-luggage.html', 'Sumatera'),
(97, 'menyimpan', 'G', '2018-02-14 17:00:00', 'http://www.merdeka.com/peristiwa/6-ekor-lutung-jawa-disita-dari-masyarakat.html', 'Sumatera'),
(98, 'mengeluarkan', 'G', '2018-02-15 17:00:00', 'http://jambi.tribunnews.com/2015/04/15/alamak-staf-taman-nasional-berbak-terlibat-perdagangan-satwa', 'Sumatera'),
(99, 'mengeluarkan', 'G', '2018-02-16 17:00:00', 'http://nasional.tempo.co/read/news/2015/05/06/058664123/kakatua-diselundupkan-dalam-botol-plastik-polisi-cari-cctv', 'Sumatera'),
(100, 'mengeluarkan', 'H', '2018-02-17 17:00:00', 'http://palembang.tribunnews.com/2014/05/14/tim-reskrim-polres-mura-bekuk-penjual-trenggiling', 'Sumatera'),
(101, 'mengeluarkan', 'H', '2018-02-18 17:00:00', 'https://www.merdeka.com/foto/peristiwa/547093/20150528191811-polisi-gagalkan-penyelundupan-ratusan-sirip-hiu-di-gilimanuk-001-isn.html', 'Sumatera');

-- --------------------------------------------------------

--
-- Table structure for table `master_berita`
--

CREATE TABLE `master_berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_berita` varchar(255) DEFAULT NULL,
  `berita_html` text,
  `flag_extract` tinyint(1) DEFAULT '0',
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_berita`
--

INSERT INTO `master_berita` (`id`, `link_berita`, `berita_html`, `flag_extract`, `location`) VALUES
(1, 'http://sp.beritasatu.com/home/trenggiling-beku-bernilai-rp-23-miliar-coba-diselundupkan-ke-singapura/8888', 'Presiden Susilo Bambang Yudhoyono meminta agar semua pikiran dan masukan kritis dari kalangan pemuda Indonesia bisa disampaikan langsung kepada pemerintah, dan meminta jajaran kementeriannya menerima semua permintaan dialog dari kalangan pemuda yang bertujuan memberikan masukan positif bagi pemerintah.', 0, NULL),
(2, 'https://news.okezone.com/read/2011/07/11/338/478517/penyelundupan-trenggiling-senilai-rp23-m-digagalkan', 'TANGERANG - Petugas Kantor Pengawasan Pelayanan Bea dan Cukai Tipe Madya Pabean Bandara Soekarno-Hatta, Tangerang, Banten, berhasil menggagalkan penyelundupkan trenggiling senilai Rp23 miliar ke Singapura.\r\n\r\nTerbongkarnya kasus penyelundupan satwa langka ke Singapura itu, berawal dari kecurigaan intelijen terhadap barang yang akan diekspor, pada Pemberitahuan Ekspor Barang (PEB) sebagai ikan segar nomor 179643, pada 9 Juli 2011.', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `crime_detail`
--
ALTER TABLE `crime_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_berita`
--
ALTER TABLE `master_berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crime_detail`
--
ALTER TABLE `crime_detail`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `master_berita`
--
ALTER TABLE `master_berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
