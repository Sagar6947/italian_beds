-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2022 at 07:18 PM
-- Server version: 10.3.37-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exzpblvz_italianbeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `bc_blog`
--

CREATE TABLE `bc_blog` (
  `blog_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `blog_body` text NOT NULL,
  `is_visible` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bc_blog`
--

INSERT INTO `bc_blog` (`blog_id`, `created`, `image`, `title`, `blog_body`, `is_visible`) VALUES
(1, '2022-11-13 13:49:07', '13111668332551594.jpg', 'this is testing', '<p>this is awesome</p>\r\n', '0'),
(2, '2022-11-13 15:01:44', '', 'Sagar Thakur', '<p>the greatest person in the world is sagar</p>\r\n', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bc_category`
--

CREATE TABLE `bc_category` (
  `id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `title_one` varchar(100) NOT NULL,
  `description_one` varchar(500) NOT NULL,
  `image_url_one` varchar(100) NOT NULL,
  `title_two` varchar(100) NOT NULL,
  `description_two` varchar(500) NOT NULL,
  `image_url_two` varchar(100) NOT NULL,
  `is_visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_checkout`
--

CREATE TABLE `bc_checkout` (
  `id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `create_date_only` varchar(15) NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `product_details` int(11) NOT NULL,
  `payment_type` enum('0','1') NOT NULL COMMENT '0-card,1 aftrepay',
  `payment_id` varchar(500) NOT NULL,
  `payment_data` varchar(1000) NOT NULL,
  `razorpay_payment_id` varchar(500) NOT NULL,
  `merchant_order_id` varchar(500) NOT NULL,
  `merchant_amount` varchar(500) NOT NULL,
  `payment_status` enum('0','1','2') NOT NULL COMMENT '0 new , 1 success , 2 failed',
  `notes` text NOT NULL,
  `totalamount` double NOT NULL,
  `grand_total` double NOT NULL,
  `status` enum('0','1','2','3') NOT NULL COMMENT '0=placed , 1=onworking,\r\n2=cancelled and refunded \r\n3=completed',
  `viewfield` enum('0','1') NOT NULL,
  `shipping_address` enum('0','1') NOT NULL,
  `billing_address1` varchar(100) NOT NULL,
  `billing_address2` varchar(100) NOT NULL,
  `billing_pincode` varchar(100) NOT NULL,
  `billing_city` varchar(100) NOT NULL,
  `billing_state` varchar(100) NOT NULL,
  `promocode` varchar(100) NOT NULL,
  `is_promocode` enum('0','1') NOT NULL,
  `promocode_title` varchar(100) NOT NULL,
  `promocode_amt` double NOT NULL,
  `promocode_deduct_amt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_checkout_product`
--

CREATE TABLE `bc_checkout_product` (
  `cpid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `checkoutid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_img` varchar(200) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `total_pro_amt` double NOT NULL,
  `product_variant_id` int(11) NOT NULL,
  `product_variant_name` varchar(200) NOT NULL,
  `product_variant_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_cities`
--

CREATE TABLE `bc_cities` (
  `id` mediumint(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` mediumint(8) UNSIGNED NOT NULL,
  `state_code` varchar(255) NOT NULL,
  `country_id` mediumint(8) UNSIGNED NOT NULL,
  `country_code` char(2) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2013-12-31 19:31:01',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag` tinyint(1) NOT NULL DEFAULT 1,
  `wikiDataId` varchar(255) DEFAULT NULL COMMENT 'Rapid API GeoDB Cities'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `bc_contactdetails`
--

CREATE TABLE `bc_contactdetails` (
  `cid` int(11) NOT NULL,
  `f_contact` varchar(100) NOT NULL,
  `s_contact` varchar(100) NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_contact_query`
--

CREATE TABLE `bc_contact_query` (
  `cid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_countries`
--

CREATE TABLE `bc_countries` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numeric_code` char(3) DEFAULT NULL,
  `iso2` char(2) DEFAULT NULL,
  `phonecode` varchar(255) DEFAULT NULL,
  `capital` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `tld` varchar(255) DEFAULT NULL,
  `native` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `subregion` varchar(255) DEFAULT NULL,
  `timezones` text DEFAULT NULL,
  `translations` text DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `emoji` varchar(191) DEFAULT NULL,
  `emojiU` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag` tinyint(1) NOT NULL DEFAULT 1,
  `wikiDataId` varchar(255) DEFAULT NULL COMMENT 'Rapid API GeoDB Cities'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_country`
--

CREATE TABLE `bc_country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_customer`
--

CREATE TABLE `bc_customer` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `tax_exempt_category` varchar(100) NOT NULL,
  `customer_group_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `origin_channel_id` varchar(100) NOT NULL,
  `channel_ids` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_faq`
--

CREATE TABLE `bc_faq` (
  `fid` int(11) NOT NULL,
  `f_title` text NOT NULL,
  `f_description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_home_banner`
--

CREATE TABLE `bc_home_banner` (
  `bid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_miscellaneous`
--

CREATE TABLE `bc_miscellaneous` (
  `id` int(11) NOT NULL,
  `data_title` varchar(100) NOT NULL,
  `data_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_policy`
--

CREATE TABLE `bc_policy` (
  `id` int(11) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_product`
--

CREATE TABLE `bc_product` (
  `id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` varchar(300) NOT NULL DEFAULT 'physical',
  `sku` varchar(100) NOT NULL,
  `sdesc` varchar(800) NOT NULL,
  `description` text NOT NULL,
  `weight` float NOT NULL,
  `price` float NOT NULL,
  `discounted_price` varchar(100) NOT NULL,
  `discount_per` int(11) NOT NULL,
  `calculated_price` float NOT NULL,
  `sec_heading` varchar(500) NOT NULL,
  `sec_image` varchar(200) NOT NULL,
  `categories` text NOT NULL,
  `title_one` varchar(100) NOT NULL,
  `description_one` varchar(500) NOT NULL,
  `image_url_one` varchar(100) NOT NULL,
  `title_two` varchar(100) NOT NULL,
  `description_two` varchar(500) NOT NULL,
  `image_url_two` varchar(100) NOT NULL,
  `is_visible` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_bestseller` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_product_images`
--

CREATE TABLE `bc_product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `is_thumbnail` int(11) NOT NULL,
  `image_file` varchar(1000) NOT NULL,
  `url_zoom` varchar(1000) NOT NULL,
  `url_standard` varchar(1000) NOT NULL,
  `url_thumbnail` varchar(1000) NOT NULL,
  `url_tiny` varchar(1000) NOT NULL,
  `primary` varchar(255) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `listorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_product_option`
--

CREATE TABLE `bc_product_option` (
  `option_id` int(11) NOT NULL,
  `option_display_name` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_product_option_label`
--

CREATE TABLE `bc_product_option_label` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_display_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_product_review`
--

CREATE TABLE `bc_product_review` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `status` varchar(500) NOT NULL,
  `rating` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date_reviewed` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_created` varchar(500) NOT NULL,
  `date_modified` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_product_specs`
--

CREATE TABLE `bc_product_specs` (
  `specs_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `specs_title` varchar(500) NOT NULL,
  `specs_desc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_product_variants`
--

CREATE TABLE `bc_product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` int(11) NOT NULL,
  `sku_id` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `calculated_weight` int(11) NOT NULL,
  `is_free_shipping` int(11) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `option_values` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_promocode`
--

CREATE TABLE `bc_promocode` (
  `pid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `deduction` varchar(100) NOT NULL,
  `min_amt` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_showroom_gallery`
--

CREATE TABLE `bc_showroom_gallery` (
  `sid` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_states`
--

CREATE TABLE `bc_states` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` mediumint(8) UNSIGNED NOT NULL,
  `country_code` char(2) NOT NULL,
  `fips_code` varchar(255) DEFAULT NULL,
  `iso2` varchar(255) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `flag` tinyint(1) NOT NULL DEFAULT 1,
  `wikiDataId` varchar(255) DEFAULT NULL COMMENT 'Rapid API GeoDB Cities'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `bc_tbl_admin`
--

CREATE TABLE `bc_tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_tbl_cities`
--

CREATE TABLE `bc_tbl_cities` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_tbl_countries`
--

CREATE TABLE `bc_tbl_countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_tbl_states`
--

CREATE TABLE `bc_tbl_states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `color_list`
--

CREATE TABLE `color_list` (
  `c_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color_code` varchar(100) NOT NULL,
  `rgb_color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bc_blog`
--
ALTER TABLE `bc_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `bc_category`
--
ALTER TABLE `bc_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_checkout`
--
ALTER TABLE `bc_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_checkout_product`
--
ALTER TABLE `bc_checkout_product`
  ADD PRIMARY KEY (`cpid`);

--
-- Indexes for table `bc_cities`
--
ALTER TABLE `bc_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_test_ibfk_1` (`state_id`),
  ADD KEY `cities_test_ibfk_2` (`country_id`);

--
-- Indexes for table `bc_contactdetails`
--
ALTER TABLE `bc_contactdetails`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `bc_contact_query`
--
ALTER TABLE `bc_contact_query`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `bc_countries`
--
ALTER TABLE `bc_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_country`
--
ALTER TABLE `bc_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_customer`
--
ALTER TABLE `bc_customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bc_faq`
--
ALTER TABLE `bc_faq`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `bc_home_banner`
--
ALTER TABLE `bc_home_banner`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bc_miscellaneous`
--
ALTER TABLE `bc_miscellaneous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_policy`
--
ALTER TABLE `bc_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_product`
--
ALTER TABLE `bc_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_product_images`
--
ALTER TABLE `bc_product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_product_option`
--
ALTER TABLE `bc_product_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `bc_product_option_label`
--
ALTER TABLE `bc_product_option_label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_product_review`
--
ALTER TABLE `bc_product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_product_specs`
--
ALTER TABLE `bc_product_specs`
  ADD PRIMARY KEY (`specs_id`);

--
-- Indexes for table `bc_product_variants`
--
ALTER TABLE `bc_product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_promocode`
--
ALTER TABLE `bc_promocode`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `bc_showroom_gallery`
--
ALTER TABLE `bc_showroom_gallery`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `bc_states`
--
ALTER TABLE `bc_states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_region` (`country_id`);

--
-- Indexes for table `bc_tbl_admin`
--
ALTER TABLE `bc_tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bc_tbl_cities`
--
ALTER TABLE `bc_tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_tbl_countries`
--
ALTER TABLE `bc_tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_tbl_states`
--
ALTER TABLE `bc_tbl_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_list`
--
ALTER TABLE `color_list`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bc_blog`
--
ALTER TABLE `bc_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bc_category`
--
ALTER TABLE `bc_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `bc_checkout`
--
ALTER TABLE `bc_checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `bc_checkout_product`
--
ALTER TABLE `bc_checkout_product`
  MODIFY `cpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `bc_cities`
--
ALTER TABLE `bc_cities`
  MODIFY `id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14038;

--
-- AUTO_INCREMENT for table `bc_contact_query`
--
ALTER TABLE `bc_contact_query`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_countries`
--
ALTER TABLE `bc_countries`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_country`
--
ALTER TABLE `bc_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_customer`
--
ALTER TABLE `bc_customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_faq`
--
ALTER TABLE `bc_faq`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_home_banner`
--
ALTER TABLE `bc_home_banner`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_miscellaneous`
--
ALTER TABLE `bc_miscellaneous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_policy`
--
ALTER TABLE `bc_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_product`
--
ALTER TABLE `bc_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_product_images`
--
ALTER TABLE `bc_product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_product_option`
--
ALTER TABLE `bc_product_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_product_option_label`
--
ALTER TABLE `bc_product_option_label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_product_review`
--
ALTER TABLE `bc_product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_product_specs`
--
ALTER TABLE `bc_product_specs`
  MODIFY `specs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_product_variants`
--
ALTER TABLE `bc_product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_promocode`
--
ALTER TABLE `bc_promocode`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_showroom_gallery`
--
ALTER TABLE `bc_showroom_gallery`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_states`
--
ALTER TABLE `bc_states`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_tbl_admin`
--
ALTER TABLE `bc_tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_tbl_cities`
--
ALTER TABLE `bc_tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_tbl_countries`
--
ALTER TABLE `bc_tbl_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_tbl_states`
--
ALTER TABLE `bc_tbl_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color_list`
--
ALTER TABLE `color_list`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bc_cities`
--
ALTER TABLE `bc_cities`
  ADD CONSTRAINT `bc_cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `bc_states` (`id`),
  ADD CONSTRAINT `bc_cities_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `bc_countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
