-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 09:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptrinhweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `nguoi_nhan` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `ma_san_pham` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `trang_thai` enum('Đang chờ vận chuyển','Đang vận chuyển','Đã giao hàng','Đã hủy','Đã hoàn thành','Chưa thanh toán','Đang chờ xác nhận','Tạm hoãn') NOT NULL DEFAULT 'Đang chờ xác nhận',
  `total` int(11) NOT NULL,
  `shipping_address` varchar(100) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `nguoi_nhan`, `phone`, `ma_san_pham`, `order_date`, `email`, `trang_thai`, `total`, `shipping_address`, `payment_method`, `note`) VALUES
(25, 'Phuong', 869801744, 'M2010, ', '2024-09-09', 'nguyennhuphuong23012004@gmail.com', 'Đang chờ xác nhận', 15000000, 'abcdefhgjbd', 'COD', ''),
(26, 'Suit_able', 978410127, 'M2010, ', '2024-09-09', 'huy08122004@gmail.com', 'Đang chờ xác nhận', 15000000, '111', 'COD', ''),
(27, 'Phuong', 869801744, 'M2010, ', '2024-09-09', 'nguyennhuphuong23012004@gmail.com', 'Đang chờ xác nhận', 15000000, 'abcdefhgjbd', 'COD', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
