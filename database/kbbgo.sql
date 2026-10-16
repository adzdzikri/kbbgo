-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: kbbgo
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `destinasi`
--

DROP TABLE IF EXISTS `destinasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(191) NOT NULL,
  `harga_tiket` decimal(12,2) NOT NULL DEFAULT 0.00,
  `gambar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinasi`
--

LOCK TABLES `destinasi` WRITE;
/*!40000 ALTER TABLE `destinasi` DISABLE KEYS */;
INSERT INTO `destinasi` VALUES (1,'Curug Malela','Air terjun megah yang dijuluki sebagai The Little Niagara of West Java. Memiliki panorama tebing dan aliran air spektakuler yang dikelilingi hutan rimbun.','Desa Cicadas, Kec. Rongga, Gununghalu, Kabupaten Bandung Barat',15000.00,'curug.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(2,'Tangkuban Perahu','Gunung stratovolcano aktif yang tersohor dengan legenda Sangkuriang. Wisatawan dapat menyaksikan keindahan Kawah Ratu dan Kawah Domas dari dekat.','Kecamatan Lembang, Kabupaten Bandung Barat',35000.00,'tangkuban.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(3,'Orchid Forest Cikole','Taman konservasi anggrek terluas di Indonesia yang berada di tengah rimbunnya hutan pinus sejuk, dilengkapi jembatan kayu bercahaya di malam hari.','Genteng, Cikole, Kec. Lembang, Kabupaten Bandung Barat',50000.00,'orchid.png','2026-10-16 16:24:28','2026-10-16 16:24:28'),(4,'Farmhouse Susu Lembang','Destinasi rekreasi bertema pedesaan Eropa lengkap dengan rumah hobbit, penyewaan kostum Belanda, dan wisata edukasi memberi makan hewan.','Jl. Raya Lembang No.108, Gudangkahuripan, Lembang, KBB',30000.00,'farmhouse.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(5,'Dusun Bambu Leisure Park','Ekowisata terpadu di kaki Gunung Burangrang dengan pemandangan danau asri, saung Purbasari, dan berbagai restoran khas Sunda.','Jl. Kolonel Masturi KM. 11, Kertawangi, Kec. Cisarua, KBB',40000.00,'dusunbambu.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(6,'Floating Market Lembang','Konsep wisata pasar apung di atas danau alami yang menyajikan aneka jajanan tradisional Sunda dengan transaksi menggunakan koin koin khusus.','Jl. Grand Hotel No.33E, Lembang, Kabupaten Bandung Barat',35000.00,'floating.png','2026-10-16 16:24:28','2026-10-16 16:24:28'),(7,'Wisata Panorama Merah Bata Padalarang','Modi beatae qui quaerat alias nesciunt fuga aut. Ex non nihil quam ut et nemo. Eum aut voluptatibus quod repudiandae nulla. Ad enim porro in pariatur molestiae fugit hic.','Kecamatan Padalarang, Kabupaten Bandung Barat',15000.00,'tangkuban.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(8,'Wisata Panorama Jingga Tua Cikalongwetan','Tempore ut aliquam quam dicta delectus sit. Nam officia est voluptatem qui et non praesentium. Placeat porro nisi eum quos. Aut consequuntur incidunt ut aut.','Kecamatan Cikalongwetan, Kabupaten Bandung Barat',20000.00,'floating.png','2026-10-16 16:24:28','2026-10-16 16:24:28'),(9,'Wisata Panorama Putih Gandum Gununghalu','Ipsam aut facilis quidem pariatur quia eligendi libero. Dolores a sunt ea repudiandae neque est. Omnis possimus est suscipit omnis rem dolor mollitia.','Kecamatan Gununghalu, Kabupaten Bandung Barat',30000.00,'dusunbambu.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(10,'Wisata Panorama Tomat Padalarang','Molestias autem beatae vel nemo culpa consequatur. Voluptas voluptas voluptates nisi minus modi. Deleniti libero reprehenderit quo ut qui saepe. Perferendis officiis ut quod quia dolor non.','Kecamatan Padalarang, Kabupaten Bandung Barat',20000.00,'sumbingg.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28');
/*!40000 ALTER TABLE `destinasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2024_01_01_000001_create_destinasi_table',1),(3,'2024_01_01_000002_create_umkm_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `umkm`
--

DROP TABLE IF EXISTS `umkm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `umkm` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) NOT NULL,
  `kategori` varchar(191) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `gambar` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umkm`
--

LOCK TABLES `umkm` WRITE;
/*!40000 ALTER TABLE `umkm` DISABLE KEYS */;
INSERT INTO `umkm` VALUES (1,'Keripik Singkong & Tempe Lembang','Kuliner & Camilan','Keripik renyah olahan singkong dan kedelai pilihan petani lokal dengan bumbu rempah khas Priangan tanpa bahan pengawet.','Jl. Maribaya No. 12, Lembang, Kabupaten Bandung Barat','kripik.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(2,'Kopi Java Preanger Gununghalu','Minuman & Kopi','Kopi Arabika premium dengan aroma floral dan cita rasa buah khas lereng pegunungan Bandung Barat yang telah memenangkan penghargaan rasa tingkat internasional.','Desa Sirnajaya, Kec. Gununghalu, Kabupaten Bandung Barat','kopi.png','2026-10-16 16:24:28','2026-10-16 16:24:28'),(3,'Batik Tulis Karst Padalarang','Fashion & Kerajinan','Kain batik khas Bandung Barat dengan motif karst Citatah, daun teh, dan flora pegunungan bernilai seni tinggi karya pembatik lokal.','Jl. Kertajaya No. 88, Padalarang, Kabupaten Bandung Barat','batik2.png','2026-10-16 16:24:28','2026-10-16 16:24:28'),(4,'Anyaman Bambu Kreatif Cisarua','Kerajinan Tangan','Produk perabot dan dekorasi rumah ramah lingkungan dari bambu wulung pilihan karya kelompok pengrajin tradisional Cisarua.','Desa Kertawangi, Kec. Cisarua, Kabupaten Bandung Barat','anyaman.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(5,'Wayang Golek Tradisional Parongpong','Seni & Budaya','Pahat boneka kayu wayang golek bernuansa tokoh pewayangan Sunda seperti Cepot dan Gatotkaca buatan tangan seniman Parongpong.','Jl. Cihanjuang KM. 4, Parongpong, Kabupaten Bandung Barat','wayang.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(6,'Bakpia & Kue Kering Cihampelas','Kuliner & Camilan','Aneka bakpia lembut isi kacang hijau, keju, dan cokelat lumer serta olahan kue basah khas oleh-oleh Bandung Barat.','Jl. Raya Cihampelas No. 23, Kabupaten Bandung Barat','bakpia.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(7,'UMKM Yayasan Tamba Kuswoyo Lembang','Kuliner & Camilan','Et libero quasi est officiis et omnis nihil. Voluptas rerum fuga nam animi vel aut laudantium.','Jl. Abang No. 700, Kec. Lembang, KBB','kripik.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(8,'UMKM Perum Yuniar Batujajar','Pertanian & Olahan','Qui assumenda voluptate qui dignissimos. Ipsam culpa incidunt numquam illum similique consequatur.','Jl. Ikan No. 478, Kec. Batujajar, KBB','wayang.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(9,'UMKM PJ Nasyidah Prabowo Tbk Cikalongwetan','Kuliner & Camilan','Expedita adipisci dolorum rerum blanditiis. Ut consequatur perspiciatis quibusdam voluptas officia dolore excepturi possimus. Modi recusandae ratione qui architecto.','Jl. Barasak No. 331, Kec. Cikalongwetan, KBB','wayang.jpg','2026-10-16 16:24:28','2026-10-16 16:24:28'),(10,'UMKM PT Astuti Hutasoit Tbk Lembang','Fashion & Kerajinan','Labore tempora sint odit corporis tempora illum. Ducimus fuga aspernatur enim nemo odit labore explicabo corrupti.','Jl. Supomo No. 106, Kec. Lembang, KBB','kopi.png','2026-10-16 16:24:28','2026-10-16 16:24:28');
/*!40000 ALTER TABLE `umkm` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-10-16 23:28:35
