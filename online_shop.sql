-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(6) NOT NULL,
  `nama_adm` varchar(50) NOT NULL,
  `usn_adm` varchar(200) NOT NULL,
  `pass_adm` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `usn_adm`, `pass_adm`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg ` int(6) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga_brg` varchar(50) NOT NULL,
  `stok_brg` int(5) NOT NULL,
  `img_brg` varchar(200) NOT NULL,
  `ket_brg` varchar(200) NOT NULL,
  `id_kategori` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `harga_brg`, `stok_brg`, `img_brg`, `id_kategori`) VALUES
(4, 'Masala Bread', `30000`, 50, '41.png', 'Roti yummy', 5),
(5, 'Assorted Muffins', `15000`, 50, '46.png', 'Assorted Muffin senaaaaaaak bings', 7),
(6, 'Butter Croissants', `25000`, 50, '38.png', 'Butter Croissants terenak sedunia harus beli sih', 7),
(8, 'bread', `22500`, 50, '45.png', 'Roti yummy', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buyer`
--

CREATE TABLE `buyer` (
  `id_buyer` int(6) NOT NULL,
  `usn_buyer` varchar(50) NOT NULL,
  `pass_buyer` varchar(200) NOT NULL,
  `tgl_akun_buyer` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `usn_buyer`, `pass_buyer`, `tgl_akun_buyer`) VALUES
(11, 'haikia', 'e10adc3949ba59abbe56e057f20f883e', '2022-05-16'),
(13, 'kiacoba', 'e28611980b0fa242a570f68ec3032bf9', '2022-05-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart ` int(6) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga_brg` varchar(50) NOT NULL,
  `qyt_brg` int(5) NOT NULL,
  `img_brg` varchar(200) NOT NULL,
  `id_buyer` int(6) NOT NULL,
  `id_brg` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(6) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('5', 'Bread'),
('7', 'Cake'),;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(6) NOT NULL,
  `total_transaksi` int(10) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL,
  `norek_buyer` int(20) NOT NULL,
  `namarek_buyer` varchar(50) NOT NULL,
  `bank_buyer` varchar(50) NOT NULL,
  `id_buyer` int(6) NOT NULL,
  `nama_buyer` varchar(50) NOT NULL,
  `alamat_buyer` text NOT NULL,
  `telp_buyer` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id_buyer`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id_buyer` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;