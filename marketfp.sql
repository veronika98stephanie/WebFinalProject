-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 04:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `clientId` int(10) UNSIGNED NOT NULL,
  `itemId` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `clientId`, `itemId`, `qty`) VALUES
(8, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, NULL, 'Console'),
(2, NULL, 'Game'),
(3, 1, 'PS4 Controller'),
(4, 2, 'PS4 Game'),
(5, 1, 'PS3 Controller'),
(6, 2, 'PS3 Game'),
(7, 1, 'PS2 Controller'),
(8, 2, 'PS2 Game'),
(9, 1, 'General Controller'),
(10, 2, 'Nintendo Game'),
(11, 1, 'PS2 Controller'),
(12, 1, 'PC Controller'),
(13, 2, 'PS Vita Game'),
(14, 2, 'PS New Game');

-- --------------------------------------------------------

--
-- Table structure for table `cat_details`
--

CREATE TABLE `cat_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat_details`
--

INSERT INTO `cat_details` (`id`, `cat_id`, `key`) VALUES
(15, 2, 'Disc Color'),
(16, 1, 'Size'),
(17, 1, 'Weight'),
(18, 3, 'Bluetooth Feature'),
(19, 5, 'Bluetooth Feature'),
(20, 4, 'Player'),
(21, 6, 'Player'),
(22, 4, 'Online'),
(23, 6, 'Online'),
(24, 2, 'Developer'),
(25, 1, 'Factory'),
(26, 2, 'Genre');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessToken` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `accessToken`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 111, '2018-03-05 17:36:09', '2018-03-05 17:36:09'),
(2, 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 222, '2018-03-05 17:36:09', '2018-03-05 17:36:09'),
(3, 'ccb', 'ccb@gmial.com', 'ccb', 'ccb', 'ccb', 91284, '2018-03-05 17:36:35', '2018-03-06 04:42:48'),
(4, 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 444, '2018-03-05 17:36:35', '2018-03-05 17:36:35'),
(5, 'eee', 'eee', 'eee', 'eee', 'eee', 555, '2018-03-05 17:37:02', '2018-03-05 17:37:02'),
(6, 'fff', 'fff', 'fff', 'fff', 'fff', 666, '2018-03-05 17:37:02', '2018-03-05 17:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `clientId` int(10) UNSIGNED NOT NULL,
  `paymentMethodId` int(10) UNSIGNED NOT NULL,
  `statusId` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `clientId`, `paymentMethodId`, `statusId`, `date`) VALUES
(1, 1, 2, 4, '2018-01-01'),
(2, 3, 2, 4, '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `customer_items`
--

CREATE TABLE `customer_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `customerId` int(10) UNSIGNED NOT NULL,
  `itemId` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_items`
--

INSERT INTO `customer_items` (`id`, `customerId`, `itemId`, `qty`) VALUES
(1, 2, 4, 1),
(2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `imgUrl` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `cat_id`, `qty`, `name`, `summary`, `price`, `imgUrl`) VALUES
(1, 3, 100, 'Super Controller 4', 'The best controller in the world', 100.00, 'Super Controller img'),
(2, 6, 10, 'The Witcher', 'asdfasdf', 60.00, 'aaaaaa'),
(3, 4, 100, 'Super Game 4', 'The best game in the world', 100.00, 'Super Game img'),
(4, 3, 100, 'Mini Controller 4', 'Not a good controller', 50.00, 'Mini Controller 4 IMG'),
(5, 4, 100, 'Mini Game 4', 'Not the best game in the world', 50.00, 'Mini Game img'),
(6, 5, 100, 'Super Controller 3', 'The best controller 3 in the world', 95.00, 'Super Controller 3 img'),
(7, 6, 100, 'Super Game 3', 'The best 3D game in the world', 15.00, 'Super Game 3 Img'),
(8, 5, 100, 'Mini Controller 3', 'Not the best controller 3 in the world', 45.00, 'Mini Controller 3 img'),
(9, 6, 100, 'Mini Game 3', 'Not the best 3D game in the world', 10.00, 'Mini Game 3 Img');

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`id`, `item_id`, `key`, `value`) VALUES
(1, 3, 'Disc Color', 'Yellow'),
(2, 3, 'Player', '2'),
(3, 3, 'Online', 'Yes'),
(4, 3, 'Developer', 'Someone'),
(5, 3, 'Genre', 'Action'),
(6, 1, 'Size', '10x10'),
(7, 1, 'Weight', '0.5'),
(8, 1, 'Bluetooth Feature', 'Yes'),
(9, 1, 'Factory', 'Super Factory'),
(10, 2, 'Disc Color', 'Blue'),
(11, 2, 'Player', '1'),
(12, 2, 'Online', 'Yes'),
(13, 2, 'Developer', 'Witcher Dev'),
(15, 2, 'Genre', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2018_03_05_151006_create_payment_methods_table', 1),
(34, '2018_03_05_151117_create_statuses_table', 1),
(35, '2018_03_05_151308_create_categories_table', 1),
(36, '2018_03_05_151330_create_cat_details_table', 1),
(37, '2018_03_05_151400_create_items_table', 1),
(38, '2018_03_05_151437_create_item_details_table', 1),
(39, '2018_03_05_151448_create_promos_table', 1),
(40, '2018_03_05_151516_create_clients_table', 1),
(41, '2018_03_05_151538_create_carts_table', 1),
(42, '2018_03_05_151632_create_purchases_table', 1),
(43, '2018_03_05_151716_create_purchase_lists_table', 1),
(44, '2018_03_05_151741_create_customers_table', 1),
(45, '2018_03_05_151751_create_customer_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`) VALUES
(1, 'Card'),
(2, 'Cash'),
(3, 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `imgUrl` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `imgUrl`) VALUES
(1, 'Promo 0 url'),
(2, 'Promo 2 url');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `clientId` int(10) UNSIGNED NOT NULL,
  `paymentMethodId` int(10) UNSIGNED NOT NULL,
  `statusId` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `clientId`, `paymentMethodId`, `statusId`, `date`) VALUES
(1, 1, 1, 2, NULL),
(2, 2, 1, 2, NULL),
(3, 1, 2, 1, NULL),
(4, 3, 2, 1, NULL),
(5, 1, 2, 1, NULL),
(6, 1, 2, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_lists`
--

CREATE TABLE `purchase_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchaseId` int(10) UNSIGNED NOT NULL,
  `itemId` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_lists`
--

INSERT INTO `purchase_lists` (`id`, `purchaseId`, `itemId`, `qty`) VALUES
(1, 5, 2, 2),
(2, 1, 1, 2),
(3, 2, 1, 2),
(4, 3, 1, 2),
(5, 4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Payment Complete'),
(2, 'Unpaid'),
(3, 'Delivered'),
(4, 'Not Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_clientid_foreign` (`clientId`),
  ADD KEY `carts_itemid_foreign` (`itemId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_details`
--
ALTER TABLE `cat_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_details_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_clientid_foreign` (`clientId`),
  ADD KEY `customers_paymentmethodid_foreign` (`paymentMethodId`),
  ADD KEY `customers_statusid_foreign` (`statusId`);

--
-- Indexes for table `customer_items`
--
ALTER TABLE `customer_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_items_customerid_foreign` (`customerId`),
  ADD KEY `customer_items_itemid_foreign` (`itemId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_details_item_id_foreign` (`item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_clientid_foreign` (`clientId`),
  ADD KEY `purchases_paymentmethodid_foreign` (`paymentMethodId`),
  ADD KEY `purchases_statusid_foreign` (`statusId`);

--
-- Indexes for table `purchase_lists`
--
ALTER TABLE `purchase_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_lists_purchaseid_foreign` (`purchaseId`),
  ADD KEY `purchase_lists_itemid_foreign` (`itemId`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cat_details`
--
ALTER TABLE `cat_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer_items`
--
ALTER TABLE `customer_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `purchase_lists`
--
ALTER TABLE `purchase_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_clientid_foreign` FOREIGN KEY (`clientId`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `carts_itemid_foreign` FOREIGN KEY (`itemId`) REFERENCES `items` (`id`);

--
-- Constraints for table `cat_details`
--
ALTER TABLE `cat_details`
  ADD CONSTRAINT `cat_details_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_clientid_foreign` FOREIGN KEY (`clientId`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `customers_paymentmethodid_foreign` FOREIGN KEY (`paymentMethodId`) REFERENCES `payment_methods` (`id`),
  ADD CONSTRAINT `customers_statusid_foreign` FOREIGN KEY (`statusId`) REFERENCES `statuses` (`id`);

--
-- Constraints for table `customer_items`
--
ALTER TABLE `customer_items`
  ADD CONSTRAINT `customer_items_customerid_foreign` FOREIGN KEY (`customerId`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `customer_items_itemid_foreign` FOREIGN KEY (`itemId`) REFERENCES `items` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `item_details`
--
ALTER TABLE `item_details`
  ADD CONSTRAINT `item_details_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_clientid_foreign` FOREIGN KEY (`clientId`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `purchases_paymentmethodid_foreign` FOREIGN KEY (`paymentMethodId`) REFERENCES `payment_methods` (`id`),
  ADD CONSTRAINT `purchases_statusid_foreign` FOREIGN KEY (`statusId`) REFERENCES `statuses` (`id`);

--
-- Constraints for table `purchase_lists`
--
ALTER TABLE `purchase_lists`
  ADD CONSTRAINT `purchase_lists_itemid_foreign` FOREIGN KEY (`itemId`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `purchase_lists_purchaseid_foreign` FOREIGN KEY (`purchaseId`) REFERENCES `purchases` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
