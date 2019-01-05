--
-- Database: `db_kereta`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nama_kereta` varchar(255) NOT NULL,
  `asal` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `tgl_berangkat` datetime NOT NULL,
  `tgl_sampai` datetime NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama_kereta`, `asal`, `tujuan`, `tgl_berangkat`, `tgl_sampai`, `kelas`, `harga`, `status`) VALUES
(1, 'Malam', 1, 2, '2019-01-03 14:23:00', '2019-01-30 14:23:00', 'Bisnis', '300000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id` int(11) NOT NULL,
  `nomor_tiket` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id`, `nomor_tiket`, `nama`, `no_identitas`) VALUES
(1, 'T001', 'abdul', '15689141561'),
(2, 'T001', 'asd', '123'),
(3, 'T001', 'qwe', '342'),
(4, 'ETK002', 'sdaassd', '1213213'),
(5, 'ETK003', 'ryan', '2354321234554321'),
(6, 'ETK004', 'abdul', '120938012983'),
(7, 'ETK005', 'abdul', '15689141561'),
(8, 'ETK001', 'abdul', '123');

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE `stasiun` (
  `id` int(11) NOT NULL,
  `nama_stasiun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`id`, `nama_stasiun`) VALUES
(1, 'Yogyakarta'),
(2, 'SOLO BALAPAN'),
(3, 'GAMBIR'),
(4, 'CIREBON'),
(5, 'CILACAP'),
(7, 'LEMPUYANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `nomor_tiket` varchar(255) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `nomor_tiket`, `id_jadwal`, `nama_pemesan`, `email`, `no_telepon`, `alamat`) VALUES
(1, '0', 1, 'dhimasabdi', 'dhimasabdi23@gmail.com', '081946212889', 'Jalan tegal melati no.68 gang kapas no.5a sariharjo, ngaglik, kab.sleman, daerah istimewa yogyakarta 55581, indonesia'),
(2, '0', 1, 'Ryan', 'ryan.dheapratama88@gmail.com', '081545563645', '11'),
(3, '0', 1, 'Ryan', 'ryan.dheapratama88@gmail.com', '081545563645', '7'),
(4, '0', 1, 'dhimasabdi', 'dhimasabdi23@gmail.com', '081946212889', 'Jalan tegal melati no.68 gang kapas no.5a sariharjo, ngaglik, kab.sleman, daerah istimewa yogyakarta 55581, indonesia'),
(5, 'ETK005', 1, 'dhimasabdi', 'dhimasabdi23@gmail.com', '081946212889', 'Jalan tegal melati no.68 gang kapas no.5a sariharjo, ngaglik, kab.sleman, daerah istimewa yogyakarta 55581, indonesia'),
(6, 'ETK001', 1, 'dhimasabdi', 'dhimasabdi23@gmail.com', '081946212889', 'Jalan tegal melati no.68 gang kapas no.5a sariharjo, ngaglik, kab.sleman, daerah istimewa yogyakarta 55581, indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nomor_tiket` varchar(255) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `total_transaksi` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nomor_tiket`, `no_transaksi`, `total_transaksi`, `status`) VALUES
(1, 'ETK001', 'BT0071', '300000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin'),
(2, 2, 'dhimas', '123'),
(4, 2, 'q', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `stasiun`
--
ALTER TABLE `stasiun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
