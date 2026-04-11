-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2026 at 03:05 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idProduct` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `salePrice` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idProduct`, `productName`, `productPrice`, `salePrice`, `image`, `idType`) VALUES
(1, 'Áo Thun Nam Focus Form Boxy', 329000, 299000, 'hinh1.jpg', 1),
(2, 'Áo Thun Nam Astra Form Boxy', 349000, 319000, 'hinh2.jpg', 1),
(3, 'Áo Khoác Dù Nam Racing Division Form Loose', 699000, 599000, 'hinh3.jpg', 2),
(4, 'Áo Khoác Nam Duskpath Form Loose', 699000, 599000, 'hinh4.jpg', 2),
(5, 'Áo Sơ Mi Nam Cuban Monochrome Mosaic Form Relaxed', 349000, 299000, 'hinh5.jpg', 3),
(6, 'Áo Sơ Mi Nam Iron Indigo Form Boxy', 379000, 329000, 'hinh6.jpg', 3),
(7, 'Áo Polo Nam League Form Regular', 349000, 299000, 'hinh7.jpg', 4),
(8, 'Áo Polo Nam Disney Mickey Grid Form Regular', 429000, 379000, 'hinh8.jpg', 4),
(9, 'Áo Thun Nam Haritage Form Regular', 290000, 219000, 'o-thun-nam-haritage-form-regular.jpg', 1),
(10, 'Áo Khoác Varsity Nam Stallion Club Form Regular', 699000, 599000, 'ao-khoac-varsity-nam-stallion-club-form-regular.jpg', 2),
(11, 'Áo Thun Nam Marvel The Amazing Form Boxy', 399000, 299000, 'ao-thun-nam-marvel-the-amazing-form-boxy.jpg', 1),
(12, 'Áo Sơ Mi Nam Tay Ngắn Cuban Floral Linen Shirt For Summer Form Relaxed', 349000, 249000, 'ao-so-mi-nam-tay-ngan-cuban-floral-linen-shirt-for-summer-form-relaxed.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `nameRole` varchar(255) NOT NULL,
  `describeRole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `nameRole`, `describeRole`) VALUES
(1, 'Quản lí', 'Phụ trách quản lí tài khoản người dùng'),
(2, 'Nhân viên', 'Phụ trách quản lý thương hiệu - sản phẩm'),
(3, 'Thành viên', 'Khách hàng đã đăng ký tài khoản');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `typeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idType`, `typeName`) VALUES
(1, 'Áo Thun'),
(2, 'Áo Khoác'),
(3, 'Áo Sơ Mi'),
(4, 'Áo Polo'),
(5, 'Áo Nỉ và Len');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `idRole`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'nhanvien', '202cb962ac59075b964b07152d234b70', 2),
(6, 'khachhang', '202cb962ac59075b964b07152d234b70', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `idType` (`idType`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`idRole`),
  ADD KEY `type_2` (`idRole`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
