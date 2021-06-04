-- Database: `pw_tubes_203040160`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(900) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bag`
--

INSERT INTO `bag` (`id`, `picture`, `name`, `description`, `price`, `category`) VALUES
(11, 'img1.jpg', 'Epyra Antique White Handbag', 'Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.', 'Rp. 344.999', 'Tas Wanita'),
(12, 'img2.jpg', 'Epyra Yellow Handbag', 'Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.', 'Rp. 344.999', 'Tas Wanita'),
(13, 'img3.jpg', 'Epyra Hot Pink Handbag', 'Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.', 'Rp. 344.999', 'Tas Wanita'),
(14, 'img4.jpg', 'Epyra Medium Purple Handbag', 'Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.', 'Rp. 344.999', 'Tas Wanita'),
(15, 'img5.jpg', 'Elwin Black Handbag', 'Tas wanita dengan bahan togo yang nyaman dipakai sehari-hari.', 'Rp. 337.999', 'Tas Wanita'),
(16, 'img6.jpg', 'Essic Black Totebag', 'Tas dengan bahan kanvas yang nyaman dipakai sehari-hari.', 'Rp. 124.999', 'Tas Unisex'),
(17, 'img7.jpg', 'Essic Black Totebag', 'Tas dengan bahan kanvas yang nyaman dipakai sehari-hari.', 'Rp. 124.999', 'Tas Unisex'),
(18, 'img8.jpg', 'Eluina Maroon Handbag', 'Tas wanita dengan bahan taiga yang nyaman dipakai sehari-hari.', 'Rp. 344.999', 'Tas Wanita'),
(19, 'img9.jpg', 'Equin Peru Handbag', 'Tas dengan bahan taiga yang nyaman dipakai sehari-hari.', 'Rp. 318.999', 'Tas Unisex'),
(20, 'img10.jpg', 'Erpilla Saddle Brown Handbag', 'Tas dengan bahan goatskin yang nyaman dipakai sehari-hari.', 'Rp. 267.999', 'Tas Unisex');

