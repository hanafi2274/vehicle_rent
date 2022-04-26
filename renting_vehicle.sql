-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 10:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renting_vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_office`
--

CREATE TABLE `branch_office` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_office_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_office`
--

INSERT INTO `branch_office` (`id`, `name`, `address`, `head_office_id`) VALUES
(1, 'Nikel Jatim Cabang Malang', 'Jalan kalibata no.11, Jawa Timur, Malang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gas_usage`
--

CREATE TABLE `gas_usage` (
  `id` int(10) UNSIGNED NOT NULL,
  `liter_per_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head_office`
--

CREATE TABLE `head_office` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `head_office`
--

INSERT INTO `head_office` (`id`, `name`, `address`) VALUES
(1, 'Nikel Pusat Jatim', 'Jalan enggrang no.19, Jawa Timur, Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_04_26_015302_create_head_office', 1),
(2, '2022_04_26_015312_create_branch_office', 1),
(3, '2022_04_26_015338_create_mine_office', 1),
(4, '2022_04_26_015348_create_user', 1),
(5, '2022_04_26_015355_create_vehicle', 1),
(6, '2022_04_26_015402_create_usage', 1),
(7, '2022_04_26_015407_create_service', 1),
(8, '2022_04_26_015420_create_gas_usage', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mine_office`
--

CREATE TABLE `mine_office` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_office_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mine_office`
--

INSERT INTO `mine_office` (`id`, `name`, `address`, `branch_office_id`) VALUES
(1, 'Nikel Sawojajar', 'Jalan sawojajar no.111, Jawa Timur, Malang', 1),
(6, 'Nikel Purwantoro', 'Jalan goa no.192', 1),
(7, 'Nikel Suhat', 'Jalan suhat no.82 ', 1),
(8, 'Nikel Klojen', 'Jalan klojen 213', 1),
(9, 'Nikel Arjosari', 'Jalan arjosari no.232', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_office_agreement` tinyint(1) DEFAULT NULL,
  `branch_office_agreement` tinyint(1) DEFAULT NULL,
  `head_office_manager` int(10) UNSIGNED NOT NULL,
  `branch_office_manager` int(10) UNSIGNED NOT NULL,
  `driver` int(10) UNSIGNED NOT NULL,
  `vehicle` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `date`, `description`, `head_office_agreement`, `branch_office_agreement`, `head_office_manager`, `branch_office_manager`, `driver`, `vehicle`) VALUES
(1, '2022-04-26', 'Perbaikan ban', 1, NULL, 9, 10, 14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `usage`
--

CREATE TABLE `usage` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `head_office_agreement` tinyint(1) DEFAULT NULL,
  `branch_office_agreement` tinyint(1) DEFAULT NULL,
  `head_office_manager` int(10) UNSIGNED NOT NULL,
  `branch_office_manager` int(10) UNSIGNED NOT NULL,
  `driver` int(10) UNSIGNED NOT NULL,
  `vehicle` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usage`
--

INSERT INTO `usage` (`id`, `date`, `head_office_agreement`, `branch_office_agreement`, `head_office_manager`, `branch_office_manager`, `driver`, `vehicle`) VALUES
(1, '2022-04-26', 1, NULL, 9, 10, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_office_id` int(10) UNSIGNED DEFAULT NULL,
  `branch_office_id` int(10) UNSIGNED DEFAULT NULL,
  `mine_office_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `head_office_id`, `branch_office_id`, `mine_office_id`) VALUES
(9, 'Adi', 'adi', '12345', 'head manager', 1, NULL, NULL),
(10, 'Budi', 'budi', '12345', 'branch manager', NULL, 1, NULL),
(11, 'Oki', 'oki', '12345', 'admin', NULL, NULL, 1),
(12, 'Farel', 'farel', '12345', 'admin', NULL, NULL, 6),
(13, 'Remah', 'remah', '12345', 'employee', NULL, NULL, 1),
(14, 'Joni', 'joni', '12345', 'employee', NULL, NULL, 6),
(15, 'Reza', 'reza', '12345', 'employee', NULL, NULL, 1),
(16, 'Veni', 'veni', '12345', 'employee', NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `renting_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mine_office_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `type`, `renting_company`, `mine_office_id`) VALUES
(1, 'Pickup', 'freight transport', NULL, 1),
(2, 'Pajero', 'people transportation', 'Edi Autocar', 1),
(3, 'Ranger', 'freight transport', 'Boni Auto', 6),
(4, 'Avanza', 'people transportation', NULL, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_office`
--
ALTER TABLE `branch_office`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_office_head_office_id_foreign` (`head_office_id`);

--
-- Indexes for table `gas_usage`
--
ALTER TABLE `gas_usage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gas_usage_usage_id_foreign` (`usage_id`);

--
-- Indexes for table `head_office`
--
ALTER TABLE `head_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mine_office`
--
ALTER TABLE `mine_office`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mine_office_branch_office_id_foreign` (`branch_office_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_head_office_manager_foreign` (`head_office_manager`),
  ADD KEY `service_branch_office_manager_foreign` (`branch_office_manager`),
  ADD KEY `service_driver_foreign` (`driver`),
  ADD KEY `service_vehicle_foreign` (`vehicle`);

--
-- Indexes for table `usage`
--
ALTER TABLE `usage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usage_head_office_manager_foreign` (`head_office_manager`),
  ADD KEY `usage_branch_office_manager_foreign` (`branch_office_manager`),
  ADD KEY `usage_driver_foreign` (`driver`),
  ADD KEY `usage_vehicle_foreign` (`vehicle`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`),
  ADD KEY `user_head_office_id_foreign` (`head_office_id`),
  ADD KEY `user_branch_office_id_foreign` (`branch_office_id`),
  ADD KEY `user_mine_office_id_foreign` (`mine_office_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_mine_office_id_foreign` (`mine_office_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch_office`
--
ALTER TABLE `branch_office`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gas_usage`
--
ALTER TABLE `gas_usage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `head_office`
--
ALTER TABLE `head_office`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mine_office`
--
ALTER TABLE `mine_office`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usage`
--
ALTER TABLE `usage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_office`
--
ALTER TABLE `branch_office`
  ADD CONSTRAINT `branch_office_head_office_id_foreign` FOREIGN KEY (`head_office_id`) REFERENCES `head_office` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gas_usage`
--
ALTER TABLE `gas_usage`
  ADD CONSTRAINT `gas_usage_usage_id_foreign` FOREIGN KEY (`usage_id`) REFERENCES `usage` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mine_office`
--
ALTER TABLE `mine_office`
  ADD CONSTRAINT `mine_office_branch_office_id_foreign` FOREIGN KEY (`branch_office_id`) REFERENCES `branch_office` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_branch_office_manager_foreign` FOREIGN KEY (`branch_office_manager`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_driver_foreign` FOREIGN KEY (`driver`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_head_office_manager_foreign` FOREIGN KEY (`head_office_manager`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_vehicle_foreign` FOREIGN KEY (`vehicle`) REFERENCES `vehicle` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `usage`
--
ALTER TABLE `usage`
  ADD CONSTRAINT `usage_branch_office_manager_foreign` FOREIGN KEY (`branch_office_manager`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usage_driver_foreign` FOREIGN KEY (`driver`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usage_head_office_manager_foreign` FOREIGN KEY (`head_office_manager`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usage_vehicle_foreign` FOREIGN KEY (`vehicle`) REFERENCES `vehicle` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_branch_office_id_foreign` FOREIGN KEY (`branch_office_id`) REFERENCES `branch_office` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_head_office_id_foreign` FOREIGN KEY (`head_office_id`) REFERENCES `head_office` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_mine_office_id_foreign` FOREIGN KEY (`mine_office_id`) REFERENCES `mine_office` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_mine_office_id_foreign` FOREIGN KEY (`mine_office_id`) REFERENCES `mine_office` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
