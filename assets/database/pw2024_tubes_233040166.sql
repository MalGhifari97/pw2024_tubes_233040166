-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Bulan Mei 2024 pada 08.25
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040166`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `music`
--

CREATE TABLE `music` (
  `id` int NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_admin` int NOT NULL,
  `url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `music`
--

INSERT INTO `music` (`id`, `judul`, `gambar`, `deskripsi`, `id_admin`, `url`) VALUES
(1, 'Lagu \'Fri(end)s\' Milik V BTS Puncaki Berbagai Platform Musik', 'v.jpg', 'Setelah dirilis pada 15 Maret lalu, lagu terbaru milik V BTS, \'Fri(end)s\', berhasil raih pencapaian besar. \'Fri(end)s\' puncaki tangga lagu di berbagai platform musik.', 1, 'https://www.detik.com/pop/video/240318118/lagu-fri-end-s-milik-v-bts-puncaki-berbagai-platform-musik'),
(2, 'Viral di TikTok, Lagu EXO \'The First Snow\' Puncaki Tangga Lagu MelOn', 'exo snow.jpg', 'Penggemar grup KPop EXO tengah dilanda kebahagiaan. Satu per satu personel EXO telah membuat dance challenge memakai lagunya \'The First Snow\' yang viral di TikTok.\r\nLagu \'The First Snow\' dirilis pada tahun 2013 dalam album Natal EXO, \'Miracles in December\'. Sepuluh tahun setelah perilisannya, lagu tersebut viral menjadi dance challenge TikTok yang diikuti sejumlah idol KPop seperti personel aespa, IVE, NCT DREAM, ATEEZ, dan ENHYPEN.\r\n\r\nBelakangan penggemar Indonesia juga dibuat heboh karena personel Red Velvet, Irene dan Yeri membuat dance challenge \'The First Snow\' di Plaza Senayan Jakarta. Namun, dance challenge TikTok itu dirasa belum sah jika EXO belum berpartisipasi.', 1, 'https://wolipop.detik.com/entertainment-news/d-7100127/viral-di-tiktok-lagu-exo-the-first-snow-puncaki-tangga-lagu-melon'),
(3, 'Gokil! Harga Jual Album Pertama Sheila On 7 Tembus Rp 400 Ribu', 'so7.jpeg', 'Popularitas Sheila On 7 makin meroket apalagi dikalangan gen z. Gak sedikit generasi muda sekarang mencari tau lebih dalam soal Duta cs itu.\r\nTermasuk kepada karya musik Sheila On 7. Album fisiknya bahkan laku keras sampai ke karya lamanya.\r\n\r\nSeperti album pertama mereka yang dirilis pada era 90an, kini bisa dijual sampai ratusan ribu. Gak asal jual aja, album itu memang banyak dicari orang.\r\n\r\n(Harga) Rp 30 ribuan sampai yang paling mahal Rp 300 ribu ada, Rp 400 ribu ada. Kalau ditempat saya yang mahal Sheila On 7 ada yang Rp 400 ribu, kata Untung, pemilik toko kaset lawas, Hysteria di kawasan Blok M, Jakarta Selatan.', 1, 'https://www.detik.com/pop/music/d-7345091/gokil-harga-jual-album-pertama-sheila-on-7-tembus-rp-400-ribu'),
(4, 'Love is in the Air! Rizky Febian dan Mahalini Rilis Klip Lagu Bermuara', 'iki.png', 'Rizky Febian dan Mahalini melengkapi cerita cinta mereka dengan sebuah lagu berjudul Bermuara. Kini, video musik dari lagu itu dirilis.\r\nNuansa romantis sudah terasa sejak di awal klip. Rizky Febian memulainya dengan speech ketika dirinya melamar Mahalini.\r\nDi hari ini, menurut saya adalah hari spesial bagi diri saya. Ketika saya memantapkan diri saya.\r\n\r\nTidak ada banyak kata yang diucapkan di sini. Iky hanya mempunyai niat ibadah untuk menjadi kepribadian yang lebih baik yang mempunyai tujuan yang tulus.\r\n\r\nMungkin memang Iky tidak sempurna, tapi izinkan Iky bisa memperbaiki semuanya sama-sama nantinya bersama Mahalini.\r\n\r\nSelanjutnya, video-video momen Rizky Febian dan Mahalini menjalani serangkaian prosesi adat sebelum menikah pun ditampilkan. Ada juga video mereka yang begitu mesra di pantai.\r\nBermuara punya aransemen musik kontemporer dan penyampaian yang syahdu, membawa pendengar dalam perjalanan emosional cinta yang memikat.\r\n\r\nRizky Febian dan Mahalini berharap Bermuara dapat menjadi sumber kenyamanan dan inspirasi bagi para pendengarnya di seluruh Indonesia.\r\n\r\nLebih dari sekedar lagu cinta, Bermuara juga menjadi simbol persatuan dalam keragaman budaya musik Indonesia. Lagu ini memperkuat semangat kolaborasi antara talenta lokal untuk menghasilkan karya memukau dan menginspirasi.                                                 ', 1, 'https://www.detik.com/pop/music/d-7346326/love-is-in-the-air-rizky-febian-dan-mahalini-rilis-klip-lagu-bermuara'),
(5, 'Lagu Hit BTS hingga Pitbull Akan Dibawakan Orkestra di Bridgerton 3', 'bts.jpeg', ' Sederet lagu-lagu hit akan dibawakan ulang untuk meramaikan Bridgerton season 3 yang tayang pada Kamis (16/5). Setelah Ariana Grande hingga Madonna pada musim sebelumnya, kini giliran lagu BTS dan Sia yang bakal dibawakan ulang.\r\nNetflix mengumumkan Dynamite dari BTS yang mendunia beberapa tahun lalu akan dibawakan ulang Vitamin String Quartet yang sebelumnya cover Thank U, Next dan Material Girl. Lagu itu, seperti diberitakan Variety, akan diputar pada episode 2.\r\nSelain Dynamite, ada juga Cheap Thrills dari Sia untuk Bridgerton 3. Happier Than Ever dari Billie Eilish juga bisa didengarkan setelah Bad Guy dibawakan ulang pada musim pertama.\r\n\r\nMusim ketiga juga akan diramaikan lagu abcdefy (GAYLE), Give Me Everything (Pitbull), Jealous (Nick Jonas), dan Snow On the Beach (Taylor Swift dan Lana Del Rey).\r\n\r\nMusic supervisor Justin Kamps mengatakan memikirkan lagu-lagu dari masa lalu yang cocok, dan juga lagu-lagu hit saat ini yang mungkin masuk akal untuk dimasukkan ke Bridgerton 3.\r\nLagu-lagu tersebut tak hanya akan diputar untuk acara pesta dansa, tapi juga untuk momen-momen lainnya.\r\n\r\nIni benar-benar tergantung pada naskah dan temanya. Dan terkadang awalnya tentang apa yang cocok dengan koreografinya, lalu kemudian tentang apa yang cocok dengan adegan dan emosinya, tuturnya.\r\n\r\nKris Bowers selaku komposer dan salah satu music supervisor akan kembali untuk musim terbaru dan menyatakan bakal ada tema baru untuk Penelope (Nicola Mary Coughlan) dan Colin (Luke Newton) selaku fokus utama Bridgerton 3.\r\n\r\nPemikiran saya di balik Colin dan Penn adalah seberapa besar rasa takut, keberanian mereka melangkah maju, satu langkah mundur. Tema yang saya tulis secara melodi untuk membentuk itu, perasaan untuk maju dan juga bersandar, tuturnya.\r\nPenelope pun ditantang untuk menyembunyikan alter ego Lady Whistledown di tengah situasi itu, terutama saat berhubungan dengan Colin.\r\n\r\nKisah itu bakal ditampilkan dalam delapan episode yang penayangannya dibagi dua bagian, masing-masing empat episode. Bagian pertama pada 16 Mei, sedangkan kedua pada 13 Juni. Jadwal itu juga berlaku untuk perilisan soundtrack.\r\n\r\nBridgerton 3 nantinya tayang pukul 14.00 WIB di Netflix.                                                                               ', 1, 'https://www.cnnindonesia.com/hiburan/20240514090723-227-1097285/lagu-hit-bts-hingga-pitbull-akan-dibawakan-orkestra-di-bridgerton-3'),
(6, 'Nayeon TWICE Akan Rilis Mini Album Solo NA pada 14 Juni', 'nayeon.jpeg', 'Nayeon TWICE akan merilis mini album solo terbaru bertajuk NA pada 14 Juni 2024. Mini album itu menjadi proyek solo kedua Nayeon setelah merilis IM NAYEON dua tahun lalu.\r\nKabar perilisan itu dikonfirmasi akun resmi media sosial TWICE. Pengumuman itu diikuti dengan informasi mengenai rangkaian promosi mini album NA hingga tanggal perilisan.\r\n\"Mini Album ke-2 NAYEON, NA. Rilis pada Jumat 14.06.2024,\" tulis akun X (dulu Twitter) @JYPETWICE pada Minggu (12/5).\r\n\r\nRangkaian promosi mini album NA akan dibuka dengan pengumuman tracklist pada 16 Mei dan trailer album keesokan harinya. Kemudian, empat photo album concept itu akan diunggah mulai dari 19- 29 Mei.\r\n\r\nNayeon juga akan merilis album preview, album sneak peek, dan teaser MV pada awal Juni. NA akhirnya dirilis bersamaan dengan video musik title track pada 14 Juni 2024.\r\n\r\nNA menjadi proyek solo kedua NAYEON setelah debut solo dengan merilis IM NAYEON pada 24 Juni 2022. Mini album itu terdiri dari tujuh lagu dengan title track berjudul Pop!.\r\nIM NAYEON juga cukup sukses secara penjualan karena mendapat sertifikasi dua kali Platinum oleh Korea Music Content Association (KMCA) usai berhasil menjual fisik album itu lebih dari 500 ribu kopi.\r\n\r\nNayeon merupakan anggota girl group TWICE yang debut pada 2015. Mereka terbentuk melalui program survival bernama SIXTEEN.\r\n\r\nIa debut bersama delapan anggota lain, yaitu Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeyoung dan Tzuyu. Mereka debut dengan album mini The Story Begins.\r\n\r\nNayeon merupakan vokalis dan penari utama di TWICE. Untuk itu, ia sering kali mengisi posisi center kala tampil membawakan deretan hits Twice, seperti Cheer Up, TT, Yes or Yes, Signal, hingga What Is Love?.\r\n', 1, 'https://www.cnnindonesia.com/hiburan/20240513141049-227-1096998/nayeon-twice-akan-rilis-mini-album-solo-na-pada-14-juni'),
(7, 'Alan Walker Undang Guru untuk Tampil di Walkerworld Jakarta', 'gambar.jpg', 'DJ asal Norwegia, Alan Walker, akan mengundang seorang guru untuk tampil di Walkerworld Jakarta pada 23 Juni 2024. Guru tersebut adalah Tri Risma Harini, Walikota Surabaya. Kolaborasi ini merupakan bagian dari misi Alan Walker untuk menginspirasi generasi muda dan mempromosikan pendidikan.', 1, 'https://www.antaranews.com/berita/4109682/alan-walker-undang-seorang-guru-untuk-tampil-di-walkerworld-jakarta'),
(8, 'Niki Zefanya Gelar Tur Dunia \"Buzz World Tour\"', 'gambar.jpg', 'Penyanyi NIKI Zefanya mengumumkan tur dunianya yang bertajuk \"Buzz World Tour\". Tur ini akan membawanya ke berbagai benua untuk mempromosikan album ketiganya. Tanggal dan kota yang dikunjungi belum diumumkan, tetapi NIKI berjanji akan segera mengungkap informasinya.', 1, 'https://music.indozone.id/konser/974654863/niki-gelar-tur-dunia-bertajuk-buzz-world-tour-jakarta-kebagian-2-hari'),
(9, 'SCTV Music Awards 2024 Digelar, Hadirkan 10 Kategori Bergengsi', 'gambar.jpg', 'SCTV Music Awards 2024 akan digelar pada 25 Mei 2024. Ajang penghargaan musik ini akan memberikan penghargaan kepada para musisi terbaik di Indonesia dalam 10 kategori. SCTV Music Awards 2024 dapat disaksikan secara langsung di SCTV.', 1, 'https://www.youtube.com/watch?v=8dCROatWNLM'),
(10, 'Ruth Sahanaya Berpesan ke Musisi Muda Agar Kedepankan Sikap Baik', 'gambar.jpg', 'Diva pop Indonesia, Ruth Sahanaya, berpesan kepada para musisi muda agar selalu mengedepankan sikap baik dalam berkarya. Menurutnya, selain bakat, musisi juga harus memiliki attitude yang baik agar dapat diterima oleh masyarakat.', 1, 'https://www.antaranews.com/berita/4108674/ruth-sahanaya-berpesan-ke-musisi-muda-agar-kedepankan-sikap-baik'),
(11, 'Mark NCT Rilis Single Solo Terbaru Bertajuk \"200\"', 'gambar.jpg', 'Mark Lee, anggota NCT, merilis single solo terbarunya yang berjudul \"200\". Lagu ini merupakan lagu R&B dengan tempo santai yang menceritakan tentang rasa cinta dan kerinduan. Single ini dapat didengarkan di berbagai platform musik digital.', 1, 'https://borneobulletin.com.bn/ncts-mark-releases-solo/'),
(12, '2NE1 Rayakan Ulang Tahun Debut ke-15 dan Berfoto Bersama', 'gambar.jpg', 'Girl group asal Korea Selatan, 2NE1, merayakan ulang tahun debut ke-15 mereka pada 17 Mei 2024. Para anggota 2NE1, yaitu CL, Dara, Park Bom, dan Minzy, memposting foto bersama di media sosial untuk memperingati momen spesial ini.', 1, 'https://www.antaranews.com/berita/4108320/2ne1-rayakan-ulang-tahun-debut-ke-15-dan-berfoto-bersama'),
(13, 'Selagu Lagi Festival Hadirkan Kangen Band Hingga Rony Parulian di Malang', 'gambar.jpg', 'Selagu Lagi Festival akan digelar di Lapangan Rampal Malang pada 25 Juni 2024. Festival musik ini akan menghadirkan berbagai musisi ternama Indonesia, seperti Kangen Band, Rony Parulian, Armada, D\'Masiv, Ghea Youbi, dan masih banyak lagi.', 1, 'https://en.kapanlagi.com/music/first-time-held-in-malang-selagu-lagi-festival-presents-kangen-band-to-rony-parulian.html'),
(14, 'Colour Music Fest Volume 2 Siap Digelar, Hadirkan Rossa hingga Last Child', 'gambar.jpg', 'Colour Music Fest Volume 2 akan digelar di Lapangan Sabrang Kulon, Tangerang, pada 29 Juli 2024. Festival musik ini akan menghadirkan berbagai musisi ternama Indonesia, seperti Rossa, Last Child, Fourtwnty, Maliq & D\'Essentials, dan masih banyak lagi.', 1, 'https://en.kapanlagi.com/music/colour-music-fest-volume-2-will-present-rossa-to-last-child-check-the-schedule-and-ticket-prices-here.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` int NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `music`
--
ALTER TABLE `music`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `music`
--
ALTER TABLE `music`
  ADD CONSTRAINT `music_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
