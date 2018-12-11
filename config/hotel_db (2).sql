-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 08:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `account_type_id` int(11) NOT NULL,
  `hotel_representative_id` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `credit_limit` decimal(20,2) DEFAULT NULL,
  `opening_balance` decimal(20,2) DEFAULT NULL,
  `payment_term` decimal(20,2) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `credit_card_type` varchar(255) DEFAULT NULL,
  `card_holder` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `exp_date` datetime DEFAULT NULL,
  `group_name` text NOT NULL,
  `reg_number` varchar(255) DEFAULT NULL,
  `reg_number1` varchar(255) DEFAULT NULL,
  `reg_number2` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `remark` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_type_id`, `hotel_representative_id`, `alias`, `last_name`, `first_name`, `account_number`, `credit_limit`, `opening_balance`, `payment_term`, `address1`, `address2`, `city`, `postal_code`, `state`, `country`, `phone`, `fax`, `email`, `credit_card_type`, `card_holder`, `card_number`, `exp_date`, `group_name`, `reg_number`, `reg_number1`, `reg_number2`, `created_on`, `created_by`, `remark`, `created`, `modified`) VALUES
(18, 1, 1, 'AC', 'Amata', 'Fred', 'T87AZ46PC3', '500.00', '0.00', '0.00', '2, allen ikeja', 'ikeja', 'Ikeja', '23401', 'Lagos', 'NG', '111', '111', '111@mail.com', '', '', NULL, '2018-11-14 15:47:54', '0.00', '', '', '', '2018-11-14 15:47:54', '1', '', '2018-11-14 15:47:54', '2018-11-23 09:14:12'),
(19, 1, NULL, 'AC', 'Baba', 'Kelechi', 'B47DK29TP6', '500.00', '0.00', '0.00', 'Lagos', 'Lagos', 'Lagos', '675765', 'Kwara', 'NG', '222', '222', '222@mail.com', '', '', NULL, '2018-11-14 16:43:22', '0.00', '', '', '', '2018-11-14 16:43:22', '1', '', '2018-11-14 16:43:22', '2018-11-14 16:43:22'),
(20, 1, NULL, 'AC', 'test', 'test', 'K54XQ26AS3', '500.00', '0.00', '0.00', 'test', 'etest', 'test', 'test', 'Lagos', 'NG', '333', '333', '333@mail.com', '', '', NULL, '2018-11-14 16:51:07', '0.00', '', '', '', '2018-11-14 16:51:07', '1', '', '2018-11-14 16:51:07', '2018-11-14 16:51:07'),
(21, 2, 1, 'AC', 'Ben', 'John', 'B36ZR89AY2', '500.00', '0.00', '0.00', 'Lagos', 'Lagos', 'Ikeja', '56454', 'Delta', 'NG', '444', '444', '444@mail.com', '', '', NULL, '2018-11-15 13:01:24', 'Ben', '', '', '', '2018-11-15 13:01:24', '1', '', '2018-11-15 13:01:24', '2018-11-21 18:52:32'),
(22, 2, 1, 'AC', 'Baba', 'Precious', 'F42YE75HS6', '500.00', '0.00', '0.00', 'yyutuy', 'tuy', 'tuytuy', 'tuyt', 'Benue', 'NG', '666', '555', '555@mail.com', '', '', NULL, '2018-11-15 14:28:02', '0.00', '', '', '', '2018-11-15 14:28:02', '1', '', '2018-11-15 14:28:02', '2018-11-21 19:25:29'),
(23, 2, 1, '', 'Akin', 'Fred', 'K95LA43PY7', '6000.00', '0.00', '0.00', 'Ikeja, Lagos', 'Nigeria', 'Ikeja', '23401', 'Lagos', 'NG', '666', '666', '666@mail.com', '', '', '', '2018-11-21 16:07:40', 'Akin', '', '', '', '2018-11-21 16:07:40', '', '', '2018-11-21 16:07:40', '2018-11-21 18:50:29'),
(24, 2, 1, '', 'Adebayo', 'Osunbiyi', 'X48YK26GA5', '5000.00', '0.00', '0.00', '9, Ikeja', 'Lagos', 'Ikeja', '23401', 'Benue', 'NG', '222', '777', '777@mail.com', '', '', '', '2018-11-21 16:21:03', 'Adebayo', '', '', '', '2018-11-21 16:21:03', '', '87687687', '2018-11-21 16:21:03', '2018-11-21 16:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `account_type_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `alias`, `account_type_name`, `created`, `modified`) VALUES
(1, 'Corpo001', 'Corporate Account', '2018-11-07 00:00:00', '2018-11-21 11:52:09'),
(2, 'Indiv001', 'Individual Account', '2018-11-12 12:17:07', '2018-11-21 11:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `advancesetting`
--

CREATE TABLE `advancesetting` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `amenity_type_id` int(11) DEFAULT NULL,
  `amenity_name` varchar(255) DEFAULT NULL,
  `amenity_logo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenity_type_id`, `amenity_name`, `amenity_logo`, `created`, `modified`) VALUES
(1, 1, 'Fan', '1543497551-1531744475-0957598409a60c7.jpg', '2018-11-09 10:09:44', '2018-11-29 13:19:11'),
(2, 1, 'AC', '1543497614-1531743015-kitchenette.png', '2018-11-09 10:35:39', '2018-11-29 13:20:14'),
(3, 1, 'Computer', '1543497623-1530263149-download_(3).jpg', '2018-11-09 10:35:52', '2018-11-29 13:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `amenity_types`
--

CREATE TABLE `amenity_types` (
  `id` int(11) NOT NULL,
  `amenity_type_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenity_types`
--

INSERT INTO `amenity_types` (`id`, `amenity_type_name`, `created`, `modified`) VALUES
(1, 'Room Amenities', '2018-11-09 10:05:03', '2018-11-09 10:05:03'),
(2, 'Gym Amenities', '2018-11-09 10:05:13', '2018-11-09 10:05:13'),
(3, 'Bar Amenities', '2018-11-09 10:05:28', '2018-11-09 10:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `application_configurations`
--

CREATE TABLE `application_configurations` (
  `id` int(11) NOT NULL,
  `application_name` varchar(255) DEFAULT NULL,
  `application_logo` varchar(255) DEFAULT NULL,
  `login_banner` varchar(255) DEFAULT NULL,
  `application_theme` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `arrival_departure_infos`
--

CREATE TABLE `arrival_departure_infos` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `transaction_type` varchar(300) DEFAULT NULL,
  `pickup_date` datetime DEFAULT NULL,
  `pickup_time` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_sources`
--

CREATE TABLE `business_sources` (
  `id` int(11) NOT NULL,
  `business_source_types_id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `business_source_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_sources`
--

INSERT INTO `business_sources` (`id`, `business_source_types_id`, `alias`, `business_source_name`, `created`, `modified`) VALUES
(1, 1, 'bb', 'Hotel.com', '2018-11-09 09:43:55', '2018-11-09 09:43:55'),
(2, 1, 'bs', 'Trip Advisor', '2018-11-09 09:44:20', '2018-11-09 09:44:20'),
(3, 2, 'bs', 'Ubber', '2018-11-09 09:44:49', '2018-11-09 09:44:49'),
(4, 3, 'wk', 'Walkin', '2018-11-09 09:45:04', '2018-11-09 09:45:04'),
(5, 2, 'wk', 'Taxify', '2018-11-09 09:45:25', '2018-11-09 09:45:25'),
(6, 4, '', 'Segun Olaniyi', '2018-11-14 14:14:59', '2018-11-14 14:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `business_source_types`
--

CREATE TABLE `business_source_types` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `business_source_type_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_source_types`
--

INSERT INTO `business_source_types` (`id`, `alias`, `business_source_type_name`, `created`, `modified`) VALUES
(1, 'bs', 'Travel Agent', '2018-11-09 09:42:40', '2018-11-09 09:42:40'),
(2, 'bs', 'Taxi', '2018-11-09 09:43:02', '2018-11-09 09:43:02'),
(3, 'bs', 'Walkin', '2018-11-09 09:43:17', '2018-11-09 09:43:17'),
(4, 'new test', 'Marketers', '2018-11-14 14:14:16', '2018-11-14 14:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `card_type_prefixes`
--

CREATE TABLE `card_type_prefixes` (
  `id` int(11) NOT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `credit_card_type` varchar(255) DEFAULT NULL,
  `settlement_type_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_type_prefixes`
--

INSERT INTO `card_type_prefixes` (`id`, `prefix`, `credit_card_type`, `settlement_type_id`, `created`, `modified`) VALUES
(1, 'card001', 'verve', NULL, '2018-11-12 12:15:48', '2018-11-12 12:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(11) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `country_name` varchar(255) DEFAULT NULL,
  `country_alias` varchar(255) DEFAULT NULL,
  `curr_sign` varchar(150) DEFAULT NULL,
  `state_name` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `financial_period_from_day` int(11) DEFAULT NULL,
  `financial_period_from_month` varchar(255) DEFAULT NULL,
  `financial_period_to_day` int(11) DEFAULT NULL,
  `financial_period_to_month` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discount_plans`
--

CREATE TABLE `discount_plans` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(200) DEFAULT NULL,
  `plan_category` varchar(200) DEFAULT NULL,
  `note` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_plans`
--

INSERT INTO `discount_plans` (`id`, `plan_name`, `plan_category`, `note`, `created`, `modified`) VALUES
(1, '% of all Nights', 'c100', 'The percentage of the all night transactions', '2018-11-08 09:14:48', '2018-11-13 14:24:34'),
(3, 'Fixed Amount per Night', 'c200', '', '2018-11-13 14:24:14', '2018-11-27 13:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `dnr_lists`
--

CREATE TABLE `dnr_lists` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `dnr_name` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_accounts`
--

CREATE TABLE `email_accounts` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `mail_server` varchar(255) DEFAULT NULL,
  `mail_server_port` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_using_ssl` tinyint(4) DEFAULT NULL,
  `use_proxysettings` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exchange_rates`
--

CREATE TABLE `exchange_rates` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `decimal_place` int(11) DEFAULT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `symbol_placement` varchar(255) DEFAULT NULL,
  `exchange_rate` decimal(20,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `extra_charges`
--

CREATE TABLE `extra_charges` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `extra_charge_name` varchar(255) DEFAULT NULL,
  `description` text,
  `extra_charge_category_id` int(11) NOT NULL,
  `rate` decimal(20,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `extra_charge_categories`
--

CREATE TABLE `extra_charge_categories` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` int(11) NOT NULL,
  `wing_id` int(11) NOT NULL,
  `floor_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `sort_key` int(11) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `wing_id`, `floor_name`, `alias`, `sort_key`, `description`, `created`, `modified`) VALUES
(1, 1, 'Floor 30', 'French Floor', NULL, '', '2018-09-10 14:35:43', '2018-09-10 14:35:43'),
(2, 2, 'Floor A1', 'bs', 2, '', '2018-11-09 10:02:50', '2018-11-09 10:02:50'),
(3, 2, 'Floor A2', 'bs', 2, '', '2018-11-09 10:03:08', '2018-11-09 10:03:08'),
(4, 3, 'Floor B1', 'll', 2, '', '2018-11-09 10:03:24', '2018-11-09 10:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_types`
--

CREATE TABLE `follow_up_types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_representatives`
--

CREATE TABLE `hotel_representatives` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `hotel_representative_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_representatives`
--

INSERT INTO `hotel_representatives` (`id`, `alias`, `hotel_representative_name`, `created`, `modified`) VALUES
(1, 'kjrghihgrjgv', 'Ngoka Kelechi Chrisopher', '2018-11-21 12:02:01', '2018-11-21 12:02:01'),
(2, 'ksghiowcojewf', 'Osunbiyi Adebayo balo', '2018-11-21 12:03:01', '2018-11-21 12:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `identities`
--

CREATE TABLE `identities` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `sort_key` int(11) DEFAULT NULL,
  `identity_name` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_settings`
--

CREATE TABLE `invoice_settings` (
  `id` int(11) NOT NULL,
  `invoice_variable_name` varchar(255) DEFAULT NULL,
  `number_type` varchar(255) DEFAULT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `start_from` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry_guest_laundry_transactions`
--

CREATE TABLE `laundry_guest_laundry_transactions` (
  `id` int(11) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `room_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `transaction_time` varchar(200) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `delivery_time` varchar(100) DEFAULT NULL,
  `laundry_packaging_type_id` int(11) NOT NULL,
  `laundry_service_id` int(11) NOT NULL,
  `laundry_hotel_service_id` int(11) NOT NULL,
  `total_charges` decimal(20,2) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry_guest_laundry_transaction_items`
--

CREATE TABLE `laundry_guest_laundry_transaction_items` (
  `id` int(11) NOT NULL,
  `laundry_guest_laundry_transaction_id` int(11) NOT NULL,
  `laundry_item_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `charges` decimal(20,2) DEFAULT NULL,
  `total_charges` decimal(20,2) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry_hotel_laundry_transactions`
--

CREATE TABLE `laundry_hotel_laundry_transactions` (
  `id` int(11) NOT NULL,
  `code` varchar(200) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `transaction_time` varchar(200) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `delivery_time` varchar(100) DEFAULT NULL,
  `laundry_packaging_type_id` int(11) NOT NULL,
  `laundry_service_id` int(11) NOT NULL,
  `laundry_hotel_service_id` int(11) NOT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry_hotel_laundry_transaction_items`
--

CREATE TABLE `laundry_hotel_laundry_transaction_items` (
  `id` int(11) NOT NULL,
  `laundry_guest_laundry_transaction_id` int(11) NOT NULL,
  `laundry_item_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laundry_hotel_services`
--

CREATE TABLE `laundry_hotel_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `description` text,
  `extra_charges` decimal(20,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry_hotel_services`
--

INSERT INTO `laundry_hotel_services` (`id`, `service_name`, `description`, `extra_charges`, `created`, `modified`) VALUES
(1, 'Normal', 'Normal Service', '100.00', '2018-12-07 08:59:13', '2018-12-07 08:59:13'),
(2, 'Express', 'Express Service', '200.00', '2018-12-07 08:59:35', '2018-12-07 08:59:35'),
(3, 'Special', 'Special  Service', '500.00', '2018-12-07 08:59:58', '2018-12-07 08:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_items`
--

CREATE TABLE `laundry_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(250) DEFAULT NULL,
  `code` varchar(250) DEFAULT NULL,
  `laundry_item_category_id` int(11) DEFAULT NULL,
  `item_type` varchar(250) DEFAULT NULL,
  `charges` decimal(20,2) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry_items`
--

INSERT INTO `laundry_items` (`id`, `item_name`, `code`, `laundry_item_category_id`, `item_type`, `charges`, `description`, `created`, `modified`) VALUES
(1, 'Bed Runner Large', '034089', 3, 'Both', '450.00', 'Bed Runner Large', '2018-12-07 06:59:29', '2018-12-07 08:12:31'),
(2, 'Bed Sheet Double', '034089', 3, 'Both', '230.00', 'Bed Sheet Double', '2018-12-07 08:04:22', '2018-12-07 08:12:21'),
(3, 'Bed Sheet', '034089', 3, 'Both', '200.00', 'Bed Sheet', '2018-12-07 08:05:17', '2018-12-07 08:05:17'),
(4, 'Cushion Cover Large', '034089', 6, 'Guest Laundry', '400.00', 'Cushion Cover Large', '2018-12-07 08:06:22', '2018-12-07 08:06:22'),
(5, 'Dresses', '034089', 1, 'Both', '200.00', 'Dresses', '2018-12-07 08:07:12', '2018-12-07 08:07:12'),
(6, 'Dresses', '034089', 2, 'Both', '350.00', 'Dresses', '2018-12-07 08:07:44', '2018-12-07 08:07:44'),
(7, 'Jacket', '034089', 1, 'Both', '500.00', 'Jacket', '2018-12-07 08:08:20', '2018-12-07 08:08:20'),
(8, 'Shirt', '034089', 1, 'Guest Laundry', '230.00', 'Shirt', '2018-12-07 08:45:01', '2018-12-07 08:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_items_laundry_services`
--

CREATE TABLE `laundry_items_laundry_services` (
  `laundry_item_id` int(11) NOT NULL,
  `laundry_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry_items_laundry_services`
--

INSERT INTO `laundry_items_laundry_services` (`laundry_item_id`, `laundry_service_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(8, 2),
(8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `laundry_item_categories`
--

CREATE TABLE `laundry_item_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `description` text,
  `category_image` varchar(350) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry_item_categories`
--

INSERT INTO `laundry_item_categories` (`id`, `category_name`, `description`, `category_image`, `created`, `modified`) VALUES
(1, 'Ladies', 'Ladies', '1544102169-Short-Sleeve-Ladies-Gown-5574076.jpg', '2018-12-06 13:16:09', '2018-12-06 13:16:09'),
(2, 'Gents', 'Gents', '1544102230-Howell_1023_Star_Sapphire_Flat_800x.jpg', '2018-12-06 13:17:10', '2018-12-06 13:17:10'),
(3, 'Bed Sheets', 'Bed Sheets', '1544102296-51Rsy5yskTL._SX425_.jpg', '2018-12-06 13:18:16', '2018-12-06 13:18:16'),
(4, 'Towel', 'Towel', '1544102354-haren-bath-towel-gray__0604988_PE681574_S4.JPG', '2018-12-06 13:19:14', '2018-12-06 13:19:14'),
(5, 'Table Cloths', 'Table Cloths', '1544102418-31d+31G+NnL._SY300_QL70_.jpg', '2018-12-06 13:20:18', '2018-12-06 13:20:18'),
(6, 'Cushion cover', 'Cushion cover', '1544102494-imcc-whrdbk-m_empower_idu_mishmi_multi_colour_on_black_cushion_cover_1.jpg', '2018-12-06 13:21:34', '2018-12-06 13:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_packaging_types`
--

CREATE TABLE `laundry_packaging_types` (
  `id` int(11) NOT NULL,
  `packaging_name` varchar(250) DEFAULT NULL,
  `packaging_image` varchar(350) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry_packaging_types`
--

INSERT INTO `laundry_packaging_types` (`id`, `packaging_name`, `packaging_image`, `created`, `modified`) VALUES
(1, 'Hanger', '1544177246-GUEST_b02557a3-7b4c-42d2-ada3-4d500f420c4d.jpg', '2018-12-07 10:07:26', '2018-12-07 10:07:26'),
(2, 'Folded', '1544177316-3636ae691bb518e91e41227b60df5198.jpg', '2018-12-07 10:08:36', '2018-12-07 10:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `laundry_services`
--

CREATE TABLE `laundry_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `service_image` varchar(350) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundry_services`
--

INSERT INTO `laundry_services` (`id`, `service_name`, `service_image`, `description`, `created`, `modified`) VALUES
(1, 'Laundry', '1544091194-images.jpg', 'Laundry Service', '2018-12-06 10:13:15', '2018-12-06 10:13:15'),
(2, 'Pressing', '1544091437-download.jpg', 'Pressing ', '2018-12-06 10:17:17', '2018-12-06 10:17:17'),
(3, 'Dry Cleaning', '1544091515-images_(3).jpg', 'Dry Cleaning', '2018-12-06 10:18:35', '2018-12-06 10:18:35'),
(5, 'Test Service', '1544455490-images_(1).jpg', 'Test Service', '2018-12-10 15:24:50', '2018-12-10 15:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `mainconfig`
--

CREATE TABLE `mainconfig` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mastersetup`
--

CREATE TABLE `mastersetup` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meal_plans`
--

CREATE TABLE `meal_plans` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `meal_plan_name` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE `miscellaneous` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `non_rental_units`
--

CREATE TABLE `non_rental_units` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `amount` decimal(20,2) DEFAULT NULL,
  `min_deposit` decimal(20,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `notice_title` varchar(255) DEFAULT NULL,
  `notice_body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Cash', '2018-11-08 09:38:12', '2018-11-08 09:38:12'),
(2, 'Cheque', '2018-11-08 09:38:22', '2018-11-08 09:38:22'),
(3, 'Visa Card', '2018-11-08 09:38:31', '2018-11-08 09:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `propertysetup`
--

CREATE TABLE `propertysetup` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `id` int(11) NOT NULL,
  `property_name` varchar(255) DEFAULT NULL,
  `beneficiary_name` varchar(255) DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `property_grade` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `res_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`id`, `property_name`, `beneficiary_name`, `property_type`, `property_grade`, `registration_number`, `logo`, `address1`, `address2`, `city`, `state`, `country`, `phone`, `fax`, `res_phone`, `email`, `website`, `created`, `modified`) VALUES
(1, 'Pilgrims Brook Hotel', 'Mr Ubani Ndu', 'Hotel', '5 Star', 'ghdj0976426370920tgj', '1536590080-IMG-20180910-WA0001.jpg', '27 Eloseh street', '', 'Lagos', 'Lagos State', 'Nigeria', '8135570534', '8135570534', '08135570534', 'admin@j-hbc.org', 'www.pilgrimsbrookhotel.com', '2018-09-10 14:34:40', '2018-09-10 14:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `rate_type_id` int(11) NOT NULL,
  `rate_name` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `isweekday` tinyint(4) DEFAULT NULL,
  `isspecial` tinyint(4) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT NULL,
  `extra_adult` decimal(20,2) DEFAULT NULL,
  `extra_child` decimal(20,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `rate_type_id`, `rate_name`, `amount`, `isweekday`, `isspecial`, `start_date`, `end_date`, `isactive`, `extra_adult`, `extra_child`, `created`, `modified`) VALUES
(4, 1, 'Week Days Rate', '10000.00', 1, 0, '2018-11-09 13:10:00', '2019-11-09 13:10:00', 1, '6000.00', '3000.00', '2018-11-09 13:12:58', '2018-11-14 07:42:32'),
(5, 1, 'Weekend Rate', '20000.00', 0, 0, '2018-11-09 13:15:00', '2019-11-09 13:15:00', 1, '12000.00', '8000.00', '2018-11-09 13:16:05', '2018-11-14 07:42:42'),
(6, 2, 'Weekday rate', '15000.00', 1, 0, '2018-11-14 14:08:00', '2018-11-14 14:08:00', 1, '1.00', '1.00', '2018-11-14 14:09:07', '2018-11-14 14:09:07'),
(7, 2, 'Weekend Rate', '25000.00', 0, 0, '2018-11-14 14:09:00', '2018-11-14 14:09:00', 1, '1.00', '1.00', '2018-11-14 14:10:39', '2018-11-14 14:40:55'),
(8, 3, 'Weekday rate', '25000.00', 1, 0, '2018-11-14 14:11:00', '2018-11-14 14:11:00', 1, '2.00', '2.00', '2018-11-14 14:11:37', '2018-11-14 14:11:37'),
(9, 3, 'Weekend Rate', '35000.00', 0, 0, '2018-11-14 14:11:00', '2018-11-14 14:11:00', 1, '2.00', '2.00', '2018-11-14 14:12:19', '2018-11-14 14:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `rate_types`
--

CREATE TABLE `rate_types` (
  `id` int(11) NOT NULL,
  `rate_type_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_types`
--

INSERT INTO `rate_types` (`id`, `rate_type_name`, `created`, `modified`) VALUES
(1, 'Standard Rate', '2018-09-10 14:42:53', '2018-09-10 14:42:53'),
(2, 'Business Rate', '2018-09-10 14:43:10', '2018-09-10 14:43:10'),
(3, 'Executive Rate', '2018-09-10 14:43:29', '2018-09-10 14:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(11) NOT NULL,
  `remark_category_id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `sort_key` int(11) DEFAULT NULL,
  `reason` text,
  `active` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remark_categories`
--

CREATE TABLE `remark_categories` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `sort_key` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `reservation_number` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `arrival` datetime DEFAULT NULL,
  `arrival_time` varchar(250) DEFAULT NULL,
  `departure` datetime DEFAULT NULL,
  `departure_time` varchar(250) DEFAULT NULL,
  `num_of_night` int(11) DEFAULT NULL,
  `num_of_adult` int(11) DEFAULT NULL,
  `num_of_children` int(11) DEFAULT NULL,
  `account_id` int(11) NOT NULL,
  `book_by` varchar(500) DEFAULT NULL,
  `book_on` datetime DEFAULT NULL,
  `business_source_id` int(11) DEFAULT NULL,
  `total_booking` decimal(18,2) DEFAULT NULL,
  `amount_paid` decimal(18,2) DEFAULT NULL,
  `balance` decimal(18,2) DEFAULT NULL,
  `reservation_status` varchar(150) DEFAULT NULL,
  `account_number` varchar(200) DEFAULT NULL,
  `apply_discount` tinyint(4) DEFAULT NULL,
  `bank_name` varchar(200) DEFAULT NULL,
  `branch_name` varchar(200) DEFAULT NULL,
  `cheque` varchar(200) DEFAULT NULL,
  `discount_code` varchar(200) DEFAULT NULL,
  `discount_plan` int(11) DEFAULT NULL,
  `discount_value` decimal(20,2) DEFAULT NULL,
  `discount_amount` decimal(20,2) NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `last_payment_id` int(11) NOT NULL,
  `total_amount_with_discount` decimal(20,2) NOT NULL,
  `total_balance_with_discount` decimal(20,2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `reservation_number`, `code`, `arrival`, `arrival_time`, `departure`, `departure_time`, `num_of_night`, `num_of_adult`, `num_of_children`, `account_id`, `book_by`, `book_on`, `business_source_id`, `total_booking`, `amount_paid`, `balance`, `reservation_status`, `account_number`, `apply_discount`, `bank_name`, `branch_name`, `cheque`, `discount_code`, `discount_plan`, `discount_value`, `discount_amount`, `payment_status`, `last_payment_id`, `total_amount_with_discount`, `total_balance_with_discount`, `created`, `modified`) VALUES
(27, 'R38NK42S', '14be4137-b6f0-4680-9951-b55ecb151717', '2018-11-28 00:00:00', NULL, '2018-12-03 00:00:00', NULL, 5, NULL, NULL, 20, '', '2018-11-28 17:42:52', 1, '154000.00', '200000.00', '-46000.00', 'Reserved', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Incomplete', 19, '0.00', '0.00', '2018-11-28 17:42:52', '2018-11-28 17:42:52'),
(28, 'B27CR84Q', '5528c515-1aa0-436d-9be6-e0b479176206', '2018-11-28 00:00:00', NULL, '2018-12-01 00:00:00', NULL, 3, NULL, NULL, 24, '', '2018-11-28 17:45:13', 1, '60000.00', '40000.00', '20000.00', 'Reserved', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Incomplete', 20, '0.00', '0.00', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(29, 'C97XF52J', '2a987b2e-c40c-454b-b1ed-33d2c12774d3', '2018-11-28 00:00:00', NULL, '2018-11-30 00:00:00', NULL, 2, NULL, NULL, 20, '', '2018-11-28 17:53:03', 2, '20000.00', '10000.00', '0.00', 'CheckIn', '0', 1, '', '', '0', '12345', 1, '3.00', '600.00', 'Completed', 28, '19400.00', '0.00', '2018-11-28 17:53:03', '2018-11-28 17:53:03'),
(30, 'R86GB23J', 'ce02300a-4e86-4c56-a09b-90c23182c188', '2018-11-28 00:00:00', NULL, '2018-12-01 00:00:00', NULL, 3, NULL, NULL, 21, '', '2018-11-28 18:04:55', 5, '30000.00', '20000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 23, '0.00', '0.00', '2018-11-28 18:04:55', '2018-11-28 18:04:55'),
(32, 'N69KX27D', 'f8b885a5-1abf-4a43-93df-67bff477e4a1', '2018-12-01 00:00:00', NULL, '2018-12-05 00:00:00', NULL, 4, NULL, NULL, 24, '', '2018-11-29 12:10:27', 1, '60000.00', '40000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 30, '0.00', '0.00', '2018-11-29 12:10:27', '2018-11-29 12:10:27'),
(33, 'K72RZ39D', '6806ac92-fd81-4671-99ff-9063a6499e7e', '2018-12-05 00:00:00', NULL, '2018-12-15 00:00:00', NULL, 10, NULL, NULL, 24, '', '2018-11-29 12:11:27', 1, '120000.00', '100000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 27, '0.00', '0.00', '2018-11-29 12:11:27', '2018-11-29 12:11:27'),
(34, 'F75TR39M', '615451da-cc05-47a5-81b6-7a87bd086d73', '2018-12-06 00:00:00', NULL, '2018-12-08 00:00:00', NULL, 2, NULL, NULL, 20, '', '2018-11-29 15:11:00', 2, '20000.00', '20000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 29, '0.00', '0.00', '2018-11-29 15:11:00', '2018-11-29 15:11:00'),
(35, 'G97WC82Z', '6426c48f-6f82-41ce-9879-18e13bf3807c', '2018-12-04 00:00:00', NULL, '2018-12-06 00:00:00', NULL, 2, NULL, NULL, 22, '', '2018-12-05 15:43:40', 2, '44000.00', '44000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 31, '0.00', '0.00', '2018-12-05 15:43:40', '2018-12-05 15:43:40'),
(36, 'A68SM92Y', '8fb8c4d5-6f2f-46ee-b680-3ffa605fd0e6', '2018-12-06 00:00:00', NULL, '2018-12-08 00:00:00', NULL, 2, NULL, NULL, 22, '', '2018-12-05 15:45:11', 2, '20000.00', '20000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 32, '0.00', '0.00', '2018-12-05 15:45:11', '2018-12-05 15:45:11'),
(37, 'D97HB38P', '21d9fa41-73fe-4439-9d54-34956c9522e3', '2018-12-11 00:00:00', NULL, '2018-12-13 00:00:00', NULL, 2, NULL, NULL, 21, '', '2018-12-05 16:11:28', 2, '20000.00', '20000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 33, '0.00', '0.00', '2018-12-05 16:11:28', '2018-12-05 16:11:28'),
(38, 'K63WC72J', 'a64bbe7b-1e63-44aa-9f16-cacea3acb0f7', '2018-12-09 00:00:00', NULL, '2018-12-10 00:00:00', NULL, 1, NULL, NULL, 21, '', '2018-12-05 16:13:41', 2, '20000.00', '20000.00', '0.00', 'CheckIn', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 34, '0.00', '0.00', '2018-12-05 16:13:41', '2018-12-05 16:13:41'),
(39, 'Q52CL79H', 'f72f6429-b434-4c6c-bcff-b2f1a2811f77', '2018-12-07 00:00:00', NULL, '2018-12-09 00:00:00', NULL, 2, NULL, NULL, 20, '', '2018-12-07 17:35:00', 2, '30000.00', '30000.00', '0.00', 'Reserved', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 35, '0.00', '0.00', '2018-12-07 17:35:00', '2018-12-07 17:35:00'),
(40, 'W86EG94Z', '2521d135-9172-411c-a537-f8dadd557d60', '2018-12-07 00:00:00', NULL, '2018-12-09 00:00:00', NULL, 2, NULL, NULL, 20, '', '2018-12-07 17:35:01', 2, '30000.00', '30000.00', '0.00', 'Reserved', '0', 0, '', '', '0', '', NULL, '0.00', '0.00', 'Completed', 36, '0.00', '0.00', '2018-12-07 17:35:01', '2018-12-07 17:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_log_entries`
--

CREATE TABLE `reservation_log_entries` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `reserved_room_id` int(11) NOT NULL,
  `action` varchar(750) DEFAULT NULL,
  `log_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_payments`
--

CREATE TABLE `reservation_payments` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `total_amount` decimal(20,2) DEFAULT NULL,
  `paid` decimal(20,2) DEFAULT NULL,
  `balance` decimal(20,2) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `payment_method` varchar(200) DEFAULT NULL,
  `transaction_type` varchar(200) NOT NULL,
  `on_discount` tinyint(4) NOT NULL,
  `discount_type` int(11) NOT NULL,
  `discount_name` varchar(200) NOT NULL,
  `discount_value` decimal(20,2) NOT NULL,
  `total_amount_with_discount` decimal(20,2) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_payments`
--

INSERT INTO `reservation_payments` (`id`, `reservation_id`, `total_amount`, `paid`, `balance`, `transaction_date`, `status`, `payment_method`, `transaction_type`, `on_discount`, `discount_type`, `discount_name`, `discount_value`, `total_amount_with_discount`, `created`, `modified`) VALUES
(19, 27, '232000.00', '200000.00', '32000.00', '2018-11-28 17:42:53', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(20, 28, '60000.00', '40000.00', '20000.00', '2018-11-28 17:45:13', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(21, 29, '20000.00', '10000.00', '9400.00', '2018-11-28 17:53:04', '', '0', 'Reservation Payment', 1, 0, '% of all Nights', '3.00', '19400.00', '2018-11-28 17:53:04', '2018-11-28 17:53:04'),
(22, 30, '30000.00', '20000.00', '10000.00', '2018-11-28 18:04:55', '', 'Cash', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-11-28 18:04:55', '2018-11-28 18:04:55'),
(23, 30, '10000.00', '10000.00', '0.00', NULL, 'Completed', 'Cash', 'Reservation Payment', 0, 0, '', '0.00', '10000.00', '2018-11-28 18:05:42', '2018-11-28 18:05:42'),
(25, 32, '60000.00', '40000.00', '20000.00', '2018-11-29 12:10:27', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-11-29 12:10:27', '2018-11-29 12:10:27'),
(26, 33, '120000.00', '100000.00', '20000.00', '2018-11-29 12:11:28', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-11-29 12:11:28', '2018-11-29 12:11:28'),
(27, 33, '20000.00', '20000.00', '0.00', NULL, 'Completed', 'Cash', 'Reservation Payment', 0, 0, '', '0.00', '20000.00', '2018-11-29 12:12:20', '2018-11-29 12:12:20'),
(28, 29, '9400.00', '9400.00', '0.00', NULL, 'Completed', 'Cash', 'Reservation Payment', 1, 1, '% of all Nights', '3.00', '9400.00', '2018-11-29 15:05:54', '2018-11-29 15:05:54'),
(29, 34, '20000.00', '20000.00', '0.00', '2018-11-29 15:11:00', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-11-29 15:11:00', '2018-11-29 15:11:00'),
(30, 32, '20000.00', '20000.00', '0.00', NULL, 'Completed', 'Cash', 'Reservation Payment', 0, 0, '', '0.00', '20000.00', '2018-12-01 15:46:02', '2018-12-01 15:46:02'),
(31, 35, '44000.00', '44000.00', '0.00', '2018-12-05 15:43:41', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-12-05 15:43:41', '2018-12-05 15:43:41'),
(32, 36, '20000.00', '20000.00', '0.00', '2018-12-05 15:45:11', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-12-05 15:45:11', '2018-12-05 15:45:11'),
(33, 37, '20000.00', '20000.00', '0.00', '2018-12-05 16:11:28', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-12-05 16:11:28', '2018-12-05 16:11:28'),
(34, 38, '20000.00', '20000.00', '0.00', '2018-12-05 16:13:41', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-12-05 16:13:41', '2018-12-05 16:13:41'),
(35, 39, '30000.00', '30000.00', '0.00', '2018-12-07 17:35:01', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-12-07 17:35:01', '2018-12-07 17:35:01'),
(36, 40, '30000.00', '30000.00', '0.00', '2018-12-07 17:35:02', '', '0', 'Reservation Payment', 0, 0, '', '0.00', '0.00', '2018-12-07 17:35:02', '2018-12-07 17:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_transaction`
--

CREATE TABLE `reservation_transaction` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `reserved_room_id` int(11) NOT NULL,
  `rate` decimal(20,2) DEFAULT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `total_reservation` decimal(20,2) DEFAULT NULL,
  `total_adult` decimal(20,2) DEFAULT NULL,
  `total_children` decimal(20,2) DEFAULT NULL,
  `paid` decimal(20,2) DEFAULT NULL,
  `balance` decimal(20,2) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `payment_method` varchar(200) DEFAULT NULL,
  `room_name` varchar(200) DEFAULT NULL,
  `room_Type` varchar(200) DEFAULT NULL,
  `rate_type` varchar(200) DEFAULT NULL,
  `rate_name` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_transaction`
--

INSERT INTO `reservation_transaction` (`id`, `reservation_id`, `reserved_room_id`, `rate`, `total`, `total_reservation`, `total_adult`, `total_children`, `paid`, `balance`, `transaction_date`, `status`, `payment_method`, `room_name`, `room_Type`, `rate_type`, `rate_name`, `created`, `modified`) VALUES
(69, 27, 30, '10000.00', '22000.00', '10000.00', '12000.00', '0.00', '200000.00', '22000.00', '2018-11-28 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(70, 27, 30, '10000.00', '22000.00', '10000.00', '12000.00', '0.00', '200000.00', '22000.00', '2018-11-29 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(71, 27, 30, '10000.00', '22000.00', '10000.00', '12000.00', '0.00', '200000.00', '22000.00', '2018-11-30 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(72, 27, 30, '20000.00', '44000.00', '20000.00', '24000.00', '0.00', '200000.00', '44000.00', '2018-12-01 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Weekend Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(73, 27, 30, '20000.00', '44000.00', '20000.00', '24000.00', '0.00', '200000.00', '44000.00', '2018-12-02 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Weekend Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(74, 27, 31, '10000.00', '16000.00', '10000.00', '0.00', '6000.00', '200000.00', '16000.00', '2018-11-28 00:00:00', 'Reserved', '0', 'Room 304', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(75, 27, 31, '10000.00', '16000.00', '10000.00', '0.00', '6000.00', '200000.00', '16000.00', '2018-11-29 00:00:00', 'Reserved', '0', 'Room 304', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(76, 27, 31, '10000.00', '16000.00', '10000.00', '0.00', '6000.00', '200000.00', '16000.00', '2018-11-30 00:00:00', 'Reserved', '0', 'Room 304', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(77, 27, 31, '20000.00', '36000.00', '20000.00', '0.00', '16000.00', '200000.00', '36000.00', '2018-12-01 00:00:00', 'Reserved', '0', 'Room 304', 'Executive Room', 'Standard Rate', 'Weekend Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(78, 27, 31, '20000.00', '36000.00', '20000.00', '0.00', '16000.00', '200000.00', '36000.00', '2018-12-02 00:00:00', 'Reserved', '0', 'Room 304', 'Executive Room', 'Standard Rate', 'Weekend Rate', '2018-11-28 17:42:53', '2018-11-28 17:42:53'),
(79, 28, 32, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-11-28 00:00:00', 'Reserved', '0', 'Room 401', 'Business Class', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(80, 28, 32, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-11-29 00:00:00', 'Reserved', '0', 'Room 401', 'Business Class', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(81, 28, 32, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-11-30 00:00:00', 'Reserved', '0', 'Room 401', 'Business Class', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(82, 28, 33, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-11-28 00:00:00', 'Reserved', '0', 'Room 402', 'Business Class', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(83, 28, 33, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-11-29 00:00:00', 'Reserved', '0', 'Room 402', 'Business Class', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(84, 28, 33, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-11-30 00:00:00', 'Reserved', '0', 'Room 402', 'Business Class', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(85, 29, 34, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '10000.00', '10000.00', '2018-11-28 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:53:03', '2018-11-28 17:53:03'),
(86, 29, 34, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '10000.00', '10000.00', '2018-11-29 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-11-28 17:53:04', '2018-11-28 17:53:04'),
(87, 30, 35, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-11-28 00:00:00', 'CheckIn', 'Cash', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-28 18:04:55', '2018-11-28 18:04:55'),
(88, 30, 35, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-11-29 00:00:00', 'CheckIn', 'Cash', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-28 18:04:55', '2018-11-28 18:04:55'),
(89, 30, 35, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-11-30 00:00:00', 'CheckIn', 'Cash', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-28 18:04:55', '2018-11-28 18:04:55'),
(94, 32, 37, '20000.00', '20000.00', '20000.00', '0.00', '0.00', '40000.00', '20000.00', '2018-12-01 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Weekend Rate', '2018-11-29 12:10:27', '2018-11-29 12:10:27'),
(95, 32, 37, '20000.00', '20000.00', '20000.00', '0.00', '0.00', '40000.00', '20000.00', '2018-12-02 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Weekend Rate', '2018-11-29 12:10:27', '2018-11-29 12:10:27'),
(96, 32, 37, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-12-03 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:10:27', '2018-11-29 12:10:27'),
(97, 32, 37, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '40000.00', '10000.00', '2018-12-04 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:10:27', '2018-11-29 12:10:27'),
(98, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-05 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:27', '2018-11-29 12:11:27'),
(99, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-06 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:27', '2018-11-29 12:11:27'),
(100, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-07 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:27', '2018-11-29 12:11:27'),
(101, 33, 38, '20000.00', '20000.00', '20000.00', '0.00', '0.00', '100000.00', '20000.00', '2018-12-08 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Weekend Rate', '2018-11-29 12:11:27', '2018-11-29 12:11:27'),
(102, 33, 38, '20000.00', '20000.00', '20000.00', '0.00', '0.00', '100000.00', '20000.00', '2018-12-09 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Weekend Rate', '2018-11-29 12:11:27', '2018-11-29 12:11:27'),
(103, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-10 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:28', '2018-11-29 12:11:28'),
(104, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-11 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:28', '2018-11-29 12:11:28'),
(105, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-12 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:28', '2018-11-29 12:11:28'),
(106, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-13 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:28', '2018-11-29 12:11:28'),
(107, 33, 38, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '100000.00', '10000.00', '2018-12-14 00:00:00', 'CheckIn', '0', 'Suite 303', 'Business Suite', 'Standard Rate', 'Week Days Rate', '2018-11-29 12:11:28', '2018-11-29 12:11:28'),
(108, 34, 39, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-12-06 00:00:00', 'CheckIn', '0', 'Pent House 003', 'Pent House ', 'Standard Rate', 'Week Days Rate', '2018-11-29 15:11:00', '2018-11-29 15:11:00'),
(109, 34, 39, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-12-07 00:00:00', 'CheckIn', '0', 'Pent House 003', 'Pent House ', 'Standard Rate', 'Week Days Rate', '2018-11-29 15:11:00', '2018-11-29 15:11:00'),
(110, 35, 40, '10000.00', '22000.00', '10000.00', '6000.00', '6000.00', '44000.00', '22000.00', '2018-12-04 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-05 15:43:41', '2018-12-05 15:43:41'),
(111, 35, 40, '10000.00', '22000.00', '10000.00', '6000.00', '6000.00', '44000.00', '22000.00', '2018-12-05 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-05 15:43:41', '2018-12-05 15:43:41'),
(112, 36, 41, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-12-06 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-05 15:45:11', '2018-12-05 15:45:11'),
(113, 36, 41, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-12-07 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-05 15:45:11', '2018-12-05 15:45:11'),
(114, 37, 42, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-12-11 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-05 16:11:28', '2018-12-05 16:11:28'),
(115, 37, 42, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '20000.00', '10000.00', '2018-12-12 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-05 16:11:28', '2018-12-05 16:11:28'),
(116, 38, 43, '20000.00', '20000.00', '20000.00', '0.00', '0.00', '20000.00', '20000.00', '2018-12-09 00:00:00', 'CheckIn', '0', 'Baba', 'Executive Room', 'Standard Rate', 'Weekend Rate', '2018-12-05 16:13:41', '2018-12-05 16:13:41'),
(117, 39, 44, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '30000.00', '10000.00', '2018-12-07 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-07 17:35:01', '2018-12-07 17:35:01'),
(118, 39, 44, '20000.00', '20000.00', '20000.00', '0.00', '0.00', '30000.00', '20000.00', '2018-12-08 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Weekend Rate', '2018-12-07 17:35:01', '2018-12-07 17:35:01'),
(119, 40, 45, '10000.00', '10000.00', '10000.00', '0.00', '0.00', '30000.00', '10000.00', '2018-12-07 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Week Days Rate', '2018-12-07 17:35:02', '2018-12-07 17:35:02'),
(120, 40, 45, '20000.00', '20000.00', '20000.00', '0.00', '0.00', '30000.00', '20000.00', '2018-12-08 00:00:00', 'Reserved', '0', 'Room 303', 'Executive Room', 'Standard Rate', 'Weekend Rate', '2018-12-07 17:35:02', '2018-12-07 17:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `reserved_rooms`
--

CREATE TABLE `reserved_rooms` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `serial_number` varchar(250) DEFAULT NULL,
  `room_type_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_type_name` varchar(200) DEFAULT NULL,
  `room_name` varchar(200) DEFAULT NULL,
  `original_owner` varchar(500) DEFAULT NULL,
  `transfer_owner` varchar(500) DEFAULT NULL,
  `reserved_status` varchar(200) DEFAULT NULL,
  `arrival` datetime DEFAULT NULL,
  `arrival_time` varchar(250) DEFAULT NULL,
  `departure` datetime DEFAULT NULL,
  `departure_time` varchar(250) DEFAULT NULL,
  `num_of_night` int(11) DEFAULT NULL,
  `new_account_id` int(11) DEFAULT NULL,
  `discount_plan_id` int(11) DEFAULT NULL,
  `discount_value` decimal(20,2) DEFAULT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `paid` decimal(20,2) DEFAULT NULL,
  `balance` decimal(20,2) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `num_of_adult` int(11) DEFAULT NULL,
  `num_of_children` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserved_rooms`
--

INSERT INTO `reserved_rooms` (`id`, `reservation_id`, `serial_number`, `room_type_id`, `room_id`, `room_type_name`, `room_name`, `original_owner`, `transfer_owner`, `reserved_status`, `arrival`, `arrival_time`, `departure`, `departure_time`, `num_of_night`, `new_account_id`, `discount_plan_id`, `discount_value`, `total`, `paid`, `balance`, `status`, `num_of_adult`, `num_of_children`, `created`, `modified`) VALUES
(30, 27, 'A36FL87N', 1, 7, 'Executive Room', 'Room 303', 'test test', 'Osunbiyi Adebayo', 'Reserved', '2018-11-28 00:00:00', NULL, '2018-11-28 17:42:53', NULL, 5, 24, NULL, NULL, '154000.00', '200000.00', '-46000.00', 'Open', 2, 0, '2018-11-28 17:42:52', '2018-11-28 17:42:53'),
(31, 27, 'F83KB65Q', 1, 8, 'Executive Room', 'Room 304', 'test test', '', 'Reserved', '2018-11-28 00:00:00', NULL, '2018-11-28 17:42:53', NULL, 5, NULL, NULL, NULL, '232000.00', '200000.00', '32000.00', 'Open', 0, 2, '2018-11-28 17:42:52', '2018-11-28 17:42:53'),
(32, 28, 'M34AZ25B', 2, 11, 'Business Class', 'Room 401', 'Osunbiyi Adebayo', '', 'Reserved', '2018-11-28 00:00:00', NULL, '2018-11-28 17:45:13', NULL, 3, NULL, NULL, NULL, '60000.00', '40000.00', '20000.00', 'Open', 0, 0, '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(33, 28, 'P63MG58A', 2, 12, 'Business Class', 'Room 402', 'Osunbiyi Adebayo', '', 'Reserved', '2018-11-28 00:00:00', NULL, '2018-11-28 17:45:13', NULL, 3, NULL, NULL, NULL, '60000.00', '40000.00', '20000.00', 'Open', 0, 0, '2018-11-28 17:45:13', '2018-11-28 17:45:13'),
(34, 29, 'K26XP53J', 1, 4, 'Executive Room', 'Baba', 'test test', '', 'CheckIn', '2018-11-28 00:00:00', NULL, '2018-11-28 17:53:03', NULL, 2, NULL, NULL, NULL, '20000.00', '10000.00', '10000.00', 'Open', 0, 0, '2018-11-28 17:53:03', '2018-11-28 17:53:03'),
(35, 30, 'Z48TK65L', 4, 5, 'Business Suite', 'Suite 303', 'John Ben', '', 'CheckIn', '2018-11-28 00:00:00', NULL, '2018-11-28 18:04:55', NULL, 3, NULL, NULL, NULL, '30000.00', '20000.00', '10000.00', 'Open', 0, 0, '2018-11-28 18:04:55', '2018-11-28 18:04:55'),
(37, 32, 'F46KQ95W', 4, 5, 'Business Suite', 'Suite 303', 'Osunbiyi Adebayo', '', 'CheckIn', '2018-12-01 00:00:00', NULL, '2018-11-29 12:10:27', NULL, 4, NULL, NULL, NULL, '60000.00', '40000.00', '20000.00', 'Open', 0, 0, '2018-11-29 12:10:27', '2018-11-29 12:10:27'),
(38, 33, 'E49YJ26T', 4, 5, 'Business Suite', 'Suite 303', 'Osunbiyi Adebayo', '', 'CheckIn', '2018-12-05 00:00:00', NULL, '2018-11-29 12:11:27', NULL, 10, NULL, NULL, NULL, '120000.00', '100000.00', '20000.00', 'Open', 0, 0, '2018-11-29 12:11:27', '2018-11-29 12:11:27'),
(39, 34, 'W48PF75T', 5, 6, 'Pent House ', 'Pent House 003', 'test test', '', 'CheckIn', '2018-12-06 00:00:00', NULL, '2018-11-29 15:11:00', NULL, 2, NULL, NULL, NULL, '20000.00', '20000.00', '0.00', 'Open', 0, 0, '2018-11-29 15:11:00', '2018-11-29 15:11:00'),
(40, 35, 'X27PN46G', 1, 4, 'Executive Room', 'Baba', 'Precious Baba', '', 'CheckIn', '2018-12-04 00:00:00', NULL, '2018-12-05 15:43:41', NULL, 2, NULL, NULL, NULL, '44000.00', '44000.00', '0.00', 'Open', 1, 2, '2018-12-05 15:43:40', '2018-12-05 15:43:41'),
(41, 36, 'Q74BP96E', 1, 4, 'Executive Room', 'Baba', 'Precious Baba', '', 'CheckIn', '2018-12-06 00:00:00', NULL, '2018-12-05 15:45:11', NULL, 2, NULL, NULL, NULL, '20000.00', '20000.00', '0.00', 'Open', 0, 0, '2018-12-05 15:45:11', '2018-12-05 15:45:11'),
(42, 37, 'R83YQ45K', 1, 4, 'Executive Room', 'Baba', 'John Ben', '', 'CheckIn', '2018-12-11 00:00:00', NULL, '2018-12-05 16:11:28', NULL, 2, NULL, NULL, NULL, '20000.00', '20000.00', '0.00', 'Open', 0, 0, '2018-12-05 16:11:28', '2018-12-05 16:11:28'),
(43, 38, 'W94MS23Q', 1, 4, 'Executive Room', 'Baba', 'John Ben', '', 'CheckIn', '2018-12-09 00:00:00', NULL, '2018-12-05 16:13:41', NULL, 1, NULL, NULL, NULL, '20000.00', '20000.00', '0.00', 'Open', 0, 0, '2018-12-05 16:13:41', '2018-12-05 16:13:41'),
(44, 39, 'W37ZR65P', 1, 7, 'Executive Room', 'Room 303', 'test test', '', 'Reserved', '2018-12-07 00:00:00', NULL, '2018-12-07 17:35:01', NULL, 2, NULL, NULL, NULL, '30000.00', '30000.00', '0.00', 'Open', 0, 0, '2018-12-07 17:35:00', '2018-12-07 17:35:01'),
(45, 40, 'F58AK47P', 1, 7, 'Executive Room', 'Room 303', 'test test', '', 'Reserved', '2018-12-07 00:00:00', NULL, '2018-12-07 17:35:02', NULL, 2, NULL, NULL, NULL, '30000.00', '30000.00', '0.00', 'Open', 0, 0, '2018-12-07 17:35:01', '2018-12-07 17:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `revenue_breakdowns`
--

CREATE TABLE `revenue_breakdowns` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `sort_key` int(11) DEFAULT NULL,
  `breakdown_name` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `sort_key` int(11) DEFAULT NULL,
  `room_name` varchar(255) DEFAULT NULL,
  `room_owner_id` int(11) DEFAULT NULL,
  `phone_extension` varchar(255) DEFAULT NULL,
  `data_extension` varchar(255) DEFAULT NULL,
  `keycard_alias` varchar(255) DEFAULT NULL,
  `power_code` varchar(255) DEFAULT NULL,
  `remark` text,
  `inactive` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type_id`, `floor_id`, `alias`, `sort_key`, `room_name`, `room_owner_id`, `phone_extension`, `data_extension`, `keycard_alias`, `power_code`, `remark`, `inactive`, `created`, `modified`) VALUES
(4, 1, 1, 'test', 3, 'Baba', NULL, 'dsfgsag', '', '', '', '', 0, '2018-11-07 14:49:56', '2018-11-07 14:49:56'),
(5, 4, 1, '', NULL, 'Suite 303', NULL, '303', '', '', '', '', 0, '2018-11-13 13:48:35', '2018-11-13 13:49:22'),
(6, 5, 1, '', NULL, 'Pent House 003', NULL, '', '', '', '', '', 0, '2018-11-13 13:51:18', '2018-11-13 13:51:18'),
(7, 1, 1, 'Room 303', NULL, 'Room 303', NULL, '', '', '', '', '', 0, '2018-11-14 14:01:11', '2018-11-14 14:02:52'),
(8, 1, 1, '', NULL, 'Room 304', NULL, '', '', '', '', '', 0, '2018-11-14 14:03:26', '2018-11-14 14:03:26'),
(9, 3, 2, '', NULL, 'Room 201', NULL, '', '', '', '', '', 0, '2018-11-14 14:04:22', '2018-11-14 14:04:22'),
(10, 3, 1, '', NULL, 'Room 202', NULL, '', '', '', '', '', 0, '2018-11-14 14:05:00', '2018-11-14 14:05:00'),
(11, 2, 1, '', NULL, 'Room 401', NULL, '', '', '', '', '', 0, '2018-11-14 14:05:45', '2018-11-14 14:06:42'),
(12, 2, 3, '', NULL, 'Room 402', NULL, '', '', '', '', '', 0, '2018-11-14 14:06:25', '2018-11-14 14:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_amenities`
--

CREATE TABLE `rooms_amenities` (
  `room_id` int(11) NOT NULL,
  `amenity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_amenities`
--

INSERT INTO `rooms_amenities` (`room_id`, `amenity_id`) VALUES
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 2),
(7, 3),
(8, 1),
(8, 2),
(8, 3),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2),
(11, 3),
(12, 1),
(12, 2),
(12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rooms_week_days`
--

CREATE TABLE `rooms_week_days` (
  `room_id` int(11) NOT NULL,
  `week_day_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_week_days`
--

INSERT INTO `rooms_week_days` (`room_id`, `week_day_id`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 6),
(10, 7),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(11, 5),
(11, 6),
(11, 7),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(12, 5),
(12, 6),
(12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `room_images`
--

CREATE TABLE `room_images` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_images`
--

INSERT INTO `room_images` (`id`, `room_id`, `image_url`, `created`, `modified`) VALUES
(1, 9, '1543492829-bg2.png', '2018-11-29 12:00:29', '2018-11-29 12:00:29'),
(2, 9, '1543495031-bedroom-490779__340.jpg', '2018-11-29 12:37:11', '2018-11-29 12:37:11'),
(3, 9, '1543495036-bedroom-interior-morning-260nw-208506619.jpg', '2018-11-29 12:37:16', '2018-11-29 12:37:16'),
(4, 9, '1543495043-h2.png', '2018-11-29 12:37:23', '2018-11-29 12:37:23'),
(5, 10, '1543495098-traveling-bag-hotel-room-260nw-583482481.jpg', '2018-11-29 12:38:18', '2018-11-29 12:38:18'),
(6, 10, '1543495109-hotel-room-1447201_960_720.jpg', '2018-11-29 12:38:29', '2018-11-29 12:38:29'),
(7, 10, '1543495117-hotel-room-1447201__340.jpg', '2018-11-29 12:38:37', '2018-11-29 12:38:37'),
(8, 10, '1543495125-h2.png', '2018-11-29 12:38:45', '2018-11-29 12:38:45'),
(9, 6, '1543495144-bedroom-490779__340.jpg', '2018-11-29 12:39:04', '2018-11-29 12:39:04'),
(10, 6, '1543495151-bedroom-interior-morning-260nw-208506619.jpg', '2018-11-29 12:39:11', '2018-11-29 12:39:11'),
(11, 6, '1543495158-h2.png', '2018-11-29 12:39:18', '2018-11-29 12:39:18'),
(12, 6, '1543495165-hotel-room-1447201__340.jpg', '2018-11-29 12:39:25', '2018-11-29 12:39:25'),
(13, 4, '1543495183-bedroom-490779__340.jpg', '2018-11-29 12:39:43', '2018-11-29 12:39:43'),
(14, 4, '1543495198-h2.png', '2018-11-29 12:39:58', '2018-11-29 12:39:58'),
(17, 7, '1543495229-bedroom-490779__340.jpg', '2018-11-29 12:40:29', '2018-11-29 12:40:29'),
(18, 7, '1543495235-bedroom-interior-morning-260nw-208506619.jpg', '2018-11-29 12:40:36', '2018-11-29 12:40:36'),
(19, 7, '1543495242-h2.png', '2018-11-29 12:40:42', '2018-11-29 12:40:42'),
(20, 7, '1543495250-hotel-room-1447201__340.jpg', '2018-11-29 12:40:50', '2018-11-29 12:40:50'),
(21, 8, '1543495269-traveling-bag-hotel-room-260nw-583482481.jpg', '2018-11-29 12:41:09', '2018-11-29 12:41:09'),
(22, 8, '1543495275-hotel-room-1447201_960_720.jpg', '2018-11-29 12:41:15', '2018-11-29 12:41:15'),
(23, 8, '1543495282-hotel-room-1447201__340.jpg', '2018-11-29 12:41:22', '2018-11-29 12:41:22'),
(24, 8, '1543495290-h2.png', '2018-11-29 12:41:30', '2018-11-29 12:41:30'),
(25, 5, '1543495309-bedroom-490779__340.jpg', '2018-11-29 12:41:49', '2018-11-29 12:41:49'),
(26, 5, '1543495315-bedroom-interior-morning-260nw-208506619.jpg', '2018-11-29 12:41:55', '2018-11-29 12:41:55'),
(27, 5, '1543495321-h2.png', '2018-11-29 12:42:01', '2018-11-29 12:42:01'),
(28, 5, '1543495330-hotel-room-1447201__340.jpg', '2018-11-29 12:42:10', '2018-11-29 12:42:10'),
(29, 11, '1543495350-traveling-bag-hotel-room-260nw-583482481.jpg', '2018-11-29 12:42:30', '2018-11-29 12:42:30'),
(30, 11, '1543495356-hotel-room-1447201_960_720.jpg', '2018-11-29 12:42:36', '2018-11-29 12:42:36'),
(31, 11, '1543495362-bedroom-490779__340.jpg', '2018-11-29 12:42:42', '2018-11-29 12:42:42'),
(32, 11, '1543495368-bedroom-interior-morning-260nw-208506619.jpg', '2018-11-29 12:42:48', '2018-11-29 12:42:48'),
(33, 12, '1543495393-bedroom-interior-morning-260nw-208506619.jpg', '2018-11-29 12:43:13', '2018-11-29 12:43:13'),
(34, 12, '1543495401-h2.png', '2018-11-29 12:43:21', '2018-11-29 12:43:21'),
(35, 12, '1543495408-hotel-room-1447201__340.jpg', '2018-11-29 12:43:28', '2018-11-29 12:43:28'),
(36, 12, '1543495413-hotel-room-1447201_960_720.jpg', '2018-11-29 12:43:33', '2018-11-29 12:43:33'),
(37, 9, '1543498067-1543495413-hotel-room-1447201_960_720.jpg', '2018-11-29 13:27:47', '2018-11-29 13:27:47'),
(38, 9, '1543498089-1543497614-1531743015-kitchenette.png', '2018-11-29 13:28:09', '2018-11-29 13:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `room_owners`
--

CREATE TABLE `room_owners` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `description` text,
  `room_plan` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `address` varchar(450) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_status_colors`
--

CREATE TABLE `room_status_colors` (
  `id` int(11) NOT NULL,
  `status_type` varchar(255) DEFAULT NULL,
  `status_name` varchar(255) DEFAULT NULL,
  `color_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `room_type_name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `sort_key` int(11) DEFAULT NULL,
  `description` text,
  `max_adult` int(11) DEFAULT NULL,
  `max_child` int(11) DEFAULT NULL,
  `back_color` varchar(200) DEFAULT NULL,
  `inactive` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `room_type_name`, `alias`, `sort_key`, `description`, `max_adult`, `max_child`, `back_color`, `inactive`, `created`, `modified`) VALUES
(1, 'Executive Room', 'Exec', 5751, '', 2, 0, '#408080', 0, '2018-09-10 14:36:58', '2018-11-29 11:55:41'),
(2, 'Business Class', 'bus', 4373, '', 2, 2, '#8080ff', 0, '2018-09-10 14:37:50', '2018-09-10 14:37:50'),
(3, 'Standard Room', 'Std', 89453, '', 2, 2, '#8080c0', 0, '2018-09-10 14:38:52', '2018-09-10 14:38:52'),
(4, 'Business Suite', 'new test', NULL, '', 3, -1, '#ffff80', 0, '2018-11-13 13:46:21', '2018-11-29 11:08:45'),
(5, 'Pent House ', 'new test', NULL, '', 2, 2, '#ff80ff', 0, '2018-11-13 13:47:12', '2018-11-13 13:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `room_types_rates`
--

CREATE TABLE `room_types_rates` (
  `room_type_id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_types_rates`
--

INSERT INTO `room_types_rates` (`room_type_id`, `rate_id`) VALUES
(1, 4),
(1, 5),
(1, 8),
(1, 9),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 4),
(3, 5),
(4, 4),
(4, 5),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(11) NOT NULL,
  `season_type_id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `season_name` varchar(255) DEFAULT NULL,
  `deacription` text,
  `from_day` int(11) DEFAULT NULL,
  `to_day` int(11) DEFAULT NULL,
  `from_month` varchar(255) DEFAULT NULL,
  `to_month` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `season_types`
--

CREATE TABLE `season_types` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `season_type_name` varchar(255) DEFAULT NULL,
  `deacription` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settlements`
--

CREATE TABLE `settlements` (
  `id` int(11) NOT NULL,
  `settlement_type_id` int(11) NOT NULL,
  `settlement_name` varchar(255) DEFAULT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `card_holder_name` varchar(255) DEFAULT NULL,
  `card_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settlement_types`
--

CREATE TABLE `settlement_types` (
  `id` int(11) NOT NULL,
  `settlement_name` varchar(255) DEFAULT NULL,
  `can_generate_receipt` tinyint(4) DEFAULT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `start_index` bigint(20) DEFAULT NULL,
  `current_index` bigint(20) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `payment_option` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL,
  `tax_name` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `charge_on_extra_adult` tinyint(4) DEFAULT NULL,
  `charge_on_extra_child` tinyint(4) DEFAULT NULL,
  `start_day` datetime DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `tax_name`, `duration`, `charge_on_extra_adult`, `charge_on_extra_child`, `start_day`, `format`, `created`, `modified`) VALUES
(1, 'VAT', NULL, 1, 0, '2018-11-12 11:56:00', '%', '2018-11-12 11:58:36', '2018-11-12 11:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `tax_settings`
--

CREATE TABLE `tax_settings` (
  `id` int(11) NOT NULL,
  `tax_setting_type_id` int(11) NOT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_setting_types`
--

CREATE TABLE `tax_setting_types` (
  `id` int(11) NOT NULL,
  `tax_setting_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `template_code` varchar(255) DEFAULT NULL,
  `template_title` varchar(255) DEFAULT NULL,
  `template_body` text,
  `default_template_body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transportaion_statitions`
--

CREATE TABLE `transportaion_statitions` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportaion_statitions`
--

INSERT INTO `transportaion_statitions` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Ikeja', '2018-11-08 11:01:15', '2018-11-08 11:01:15'),
(2, 'Victoria Island', '2018-11-08 11:06:12', '2018-11-08 11:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `transportations`
--

CREATE TABLE `transportations` (
  `id` int(11) NOT NULL,
  `transportation_type_id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportations`
--

INSERT INTO `transportations` (`id`, `transportation_type_id`, `name`, `created`, `modified`) VALUES
(1, 1, 'Arik', '2018-11-08 10:43:29', '2018-11-08 10:43:29'),
(2, 1, 'Aero', '2018-11-08 10:50:40', '2018-11-08 10:50:40'),
(3, 1, 'Air Nigeria', '2018-11-08 10:51:03', '2018-11-08 10:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `transportation_types`
--

CREATE TABLE `transportation_types` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation_types`
--

INSERT INTO `transportation_types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'AirLine', '2018-11-08 09:59:19', '2018-11-08 09:59:19'),
(2, 'Road', '2018-11-08 09:59:29', '2018-11-08 09:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `active`, `created`, `modified`) VALUES
(1, 'admin@mail.com', '$2y$10$BwAm./FxHHagQur/cUw5n.p/cLFbo/GP/fuTqv67zTF0ZqS4xbM9q', 1, '2018-09-10 14:30:20', '2018-09-10 14:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `week_days`
--

CREATE TABLE `week_days` (
  `id` int(11) NOT NULL,
  `day_name` varchar(255) DEFAULT NULL,
  `isweekday` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week_days`
--

INSERT INTO `week_days` (`id`, `day_name`, `isweekday`, `created`, `modified`) VALUES
(1, 'Monday', 1, '2018-09-10 14:51:42', '2018-09-10 14:51:42'),
(2, 'Tuesday', 1, '2018-09-10 14:51:57', '2018-09-10 14:51:57'),
(3, 'Wednesday', 1, '2018-09-10 14:52:17', '2018-09-10 14:52:17'),
(4, 'Thursday', 1, '2018-09-10 14:52:35', '2018-09-10 14:52:35'),
(5, 'Friday', 1, '2018-09-10 14:52:51', '2018-09-10 14:52:51'),
(6, 'Saturday', 0, '2018-09-10 14:54:13', '2018-09-10 14:54:13'),
(7, 'Sunday', 0, '2018-09-10 14:54:28', '2018-09-10 14:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `wings`
--

CREATE TABLE `wings` (
  `id` int(11) NOT NULL,
  `wing_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings`
--

INSERT INTO `wings` (`id`, `wing_name`, `created`, `modified`) VALUES
(1, 'new wing', '2018-09-10 14:35:04', '2018-09-10 14:35:04'),
(2, 'Wing A', '2018-11-09 10:02:05', '2018-11-09 10:02:05'),
(3, 'Wing B', '2018-11-09 10:02:22', '2018-11-09 10:02:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_type_key_2000` (`account_type_id`),
  ADD KEY `hotel_representative_key_200` (`hotel_representative_id`);

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advancesetting`
--
ALTER TABLE `advancesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenity_types`
--
ALTER TABLE `amenity_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_configurations`
--
ALTER TABLE `application_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrival_departure_infos`
--
ALTER TABLE `arrival_departure_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations__key_2354320` (`reservation_id`);

--
-- Indexes for table `business_sources`
--
ALTER TABLE `business_sources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `business_source_types_key_200` (`business_source_types_id`);

--
-- Indexes for table `business_source_types`
--
ALTER TABLE `business_source_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_type_prefixes`
--
ALTER TABLE `card_type_prefixes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settlement_types_key_200` (`settlement_type_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_plans`
--
ALTER TABLE `discount_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dnr_lists`
--
ALTER TABLE `dnr_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_accounts`
--
ALTER TABLE `email_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_rates`
--
ALTER TABLE `exchange_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_charges`
--
ALTER TABLE `extra_charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extra_charge_categories_key_200` (`extra_charge_category_id`);

--
-- Indexes for table `extra_charge_categories`
--
ALTER TABLE `extra_charge_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wings_key2000` (`wing_id`);

--
-- Indexes for table `follow_up_types`
--
ALTER TABLE `follow_up_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_representatives`
--
ALTER TABLE `hotel_representatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identities`
--
ALTER TABLE `identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_settings`
--
ALTER TABLE `invoice_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry_guest_laundry_transactions`
--
ALTER TABLE `laundry_guest_laundry_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_key560989` (`account_id`),
  ADD KEY `room_key678543` (`room_id`),
  ADD KEY `laundry_packaging_type_key45900` (`laundry_packaging_type_id`),
  ADD KEY `laundry_service_key457889` (`laundry_service_id`),
  ADD KEY `laundry_hotel_services_key126754` (`laundry_hotel_service_id`);

--
-- Indexes for table `laundry_guest_laundry_transaction_items`
--
ALTER TABLE `laundry_guest_laundry_transaction_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laundry_guest_laundry_transaction_key90887` (`laundry_guest_laundry_transaction_id`),
  ADD KEY `laundry_item_key908654` (`laundry_item_id`);

--
-- Indexes for table `laundry_hotel_laundry_transactions`
--
ALTER TABLE `laundry_hotel_laundry_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laundry_packaging_type_key456750` (`laundry_packaging_type_id`),
  ADD KEY `laundry_service_key4453289` (`laundry_service_id`),
  ADD KEY `laundry_hotel_services_key0008654` (`laundry_hotel_service_id`);

--
-- Indexes for table `laundry_hotel_laundry_transaction_items`
--
ALTER TABLE `laundry_hotel_laundry_transaction_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laundry_guest_laundry_transaction_key900077` (`laundry_guest_laundry_transaction_id`),
  ADD KEY `laundry_item_key876543` (`laundry_item_id`);

--
-- Indexes for table `laundry_hotel_services`
--
ALTER TABLE `laundry_hotel_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry_items`
--
ALTER TABLE `laundry_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_category__key_2993100` (`laundry_item_category_id`);

--
-- Indexes for table `laundry_items_laundry_services`
--
ALTER TABLE `laundry_items_laundry_services`
  ADD PRIMARY KEY (`laundry_item_id`,`laundry_service_id`),
  ADD KEY `laundry_service_key9800` (`laundry_service_id`);

--
-- Indexes for table `laundry_item_categories`
--
ALTER TABLE `laundry_item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry_packaging_types`
--
ALTER TABLE `laundry_packaging_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundry_services`
--
ALTER TABLE `laundry_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainconfig`
--
ALTER TABLE `mainconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastersetup`
--
ALTER TABLE `mastersetup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_plans`
--
ALTER TABLE `meal_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_rental_units`
--
ALTER TABLE `non_rental_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertysetup`
--
ALTER TABLE `propertysetup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rate_key100` (`rate_type_id`);

--
-- Indexes for table `rate_types`
--
ALTER TABLE `rate_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `remark_categories_key_200` (`remark_category_id`);

--
-- Indexes for table `remark_categories`
--
ALTER TABLE `remark_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts__key_233320` (`account_id`),
  ADD KEY `business_source_id_key_50909` (`business_source_id`),
  ADD KEY `discount_plan__key_2333909008` (`discount_plan`);

--
-- Indexes for table `reservation_log_entries`
--
ALTER TABLE `reservation_log_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_payments`
--
ALTER TABLE `reservation_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations__key_23339100` (`reservation_id`);

--
-- Indexes for table `reservation_transaction`
--
ALTER TABLE `reservation_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations__key_2333909` (`reservation_id`),
  ADD KEY `reserved_rooms__key_2333909` (`reserved_room_id`);

--
-- Indexes for table `reserved_rooms`
--
ALTER TABLE `reserved_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations__key_233320` (`reservation_id`),
  ADD KEY `roomss__key_233320` (`room_id`);

--
-- Indexes for table `revenue_breakdowns`
--
ALTER TABLE `revenue_breakdowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_type_key400` (`room_type_id`),
  ADD KEY `floor_key59000` (`floor_id`),
  ADD KEY `room_owners_key500` (`room_owner_id`);

--
-- Indexes for table `rooms_amenities`
--
ALTER TABLE `rooms_amenities`
  ADD PRIMARY KEY (`room_id`,`amenity_id`),
  ADD KEY `amenities_key600` (`amenity_id`);

--
-- Indexes for table `rooms_week_days`
--
ALTER TABLE `rooms_week_days`
  ADD PRIMARY KEY (`room_id`,`week_day_id`),
  ADD KEY `week_days_key6400` (`week_day_id`);

--
-- Indexes for table `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_key500` (`room_id`);

--
-- Indexes for table `room_owners`
--
ALTER TABLE `room_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_status_colors`
--
ALTER TABLE `room_status_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types_rates`
--
ALTER TABLE `room_types_rates`
  ADD PRIMARY KEY (`room_type_id`,`rate_id`),
  ADD KEY `rate_key5600` (`rate_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `season_types_key450` (`season_type_id`);

--
-- Indexes for table `season_types`
--
ALTER TABLE `season_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settlements`
--
ALTER TABLE `settlements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settlement_type_id_object_3400` (`settlement_type_id`);

--
-- Indexes for table `settlement_types`
--
ALTER TABLE `settlement_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_settings`
--
ALTER TABLE `tax_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tax_settings_key100` (`tax_setting_type_id`);

--
-- Indexes for table `tax_setting_types`
--
ALTER TABLE `tax_setting_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportaion_statitions`
--
ALTER TABLE `transportaion_statitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportations`
--
ALTER TABLE `transportations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportation_type_id_key_50909` (`transportation_type_id`);

--
-- Indexes for table `transportation_types`
--
ALTER TABLE `transportation_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_key200` (`role_id`);

--
-- Indexes for table `week_days`
--
ALTER TABLE `week_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wings`
--
ALTER TABLE `wings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advancesetting`
--
ALTER TABLE `advancesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `amenity_types`
--
ALTER TABLE `amenity_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `application_configurations`
--
ALTER TABLE `application_configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `arrival_departure_infos`
--
ALTER TABLE `arrival_departure_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_sources`
--
ALTER TABLE `business_sources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_source_types`
--
ALTER TABLE `business_source_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `card_type_prefixes`
--
ALTER TABLE `card_type_prefixes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_plans`
--
ALTER TABLE `discount_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dnr_lists`
--
ALTER TABLE `dnr_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_accounts`
--
ALTER TABLE `email_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exchange_rates`
--
ALTER TABLE `exchange_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_charges`
--
ALTER TABLE `extra_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_charge_categories`
--
ALTER TABLE `extra_charge_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `follow_up_types`
--
ALTER TABLE `follow_up_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_representatives`
--
ALTER TABLE `hotel_representatives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `identities`
--
ALTER TABLE `identities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_settings`
--
ALTER TABLE `invoice_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laundry_guest_laundry_transactions`
--
ALTER TABLE `laundry_guest_laundry_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laundry_guest_laundry_transaction_items`
--
ALTER TABLE `laundry_guest_laundry_transaction_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laundry_hotel_laundry_transactions`
--
ALTER TABLE `laundry_hotel_laundry_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laundry_hotel_laundry_transaction_items`
--
ALTER TABLE `laundry_hotel_laundry_transaction_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laundry_hotel_services`
--
ALTER TABLE `laundry_hotel_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laundry_items`
--
ALTER TABLE `laundry_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laundry_item_categories`
--
ALTER TABLE `laundry_item_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laundry_packaging_types`
--
ALTER TABLE `laundry_packaging_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laundry_services`
--
ALTER TABLE `laundry_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mainconfig`
--
ALTER TABLE `mainconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mastersetup`
--
ALTER TABLE `mastersetup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meal_plans`
--
ALTER TABLE `meal_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `non_rental_units`
--
ALTER TABLE `non_rental_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propertysetup`
--
ALTER TABLE `propertysetup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rate_types`
--
ALTER TABLE `rate_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remark_categories`
--
ALTER TABLE `remark_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `reservation_log_entries`
--
ALTER TABLE `reservation_log_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_payments`
--
ALTER TABLE `reservation_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reservation_transaction`
--
ALTER TABLE `reservation_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `reserved_rooms`
--
ALTER TABLE `reserved_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `revenue_breakdowns`
--
ALTER TABLE `revenue_breakdowns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `room_owners`
--
ALTER TABLE `room_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_status_colors`
--
ALTER TABLE `room_status_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `season_types`
--
ALTER TABLE `season_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settlements`
--
ALTER TABLE `settlements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settlement_types`
--
ALTER TABLE `settlement_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax_settings`
--
ALTER TABLE `tax_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_setting_types`
--
ALTER TABLE `tax_setting_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transportaion_statitions`
--
ALTER TABLE `transportaion_statitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transportations`
--
ALTER TABLE `transportations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transportation_types`
--
ALTER TABLE `transportation_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `week_days`
--
ALTER TABLE `week_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wings`
--
ALTER TABLE `wings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `account_type_key_2000` FOREIGN KEY (`account_type_id`) REFERENCES `account_types` (`id`),
  ADD CONSTRAINT `hotel_representative_key_200` FOREIGN KEY (`hotel_representative_id`) REFERENCES `hotel_representatives` (`id`);

--
-- Constraints for table `arrival_departure_infos`
--
ALTER TABLE `arrival_departure_infos`
  ADD CONSTRAINT `reservations__key_2354320` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`);

--
-- Constraints for table `business_sources`
--
ALTER TABLE `business_sources`
  ADD CONSTRAINT `business_source_types_key_200` FOREIGN KEY (`business_source_types_id`) REFERENCES `business_source_types` (`id`);

--
-- Constraints for table `card_type_prefixes`
--
ALTER TABLE `card_type_prefixes`
  ADD CONSTRAINT `settlement_types_key_200` FOREIGN KEY (`settlement_type_id`) REFERENCES `settlement_types` (`id`);

--
-- Constraints for table `extra_charges`
--
ALTER TABLE `extra_charges`
  ADD CONSTRAINT `extra_charge_categories_key_200` FOREIGN KEY (`extra_charge_category_id`) REFERENCES `extra_charge_categories` (`id`);

--
-- Constraints for table `floors`
--
ALTER TABLE `floors`
  ADD CONSTRAINT `wings_key2000` FOREIGN KEY (`wing_id`) REFERENCES `wings` (`id`);

--
-- Constraints for table `laundry_guest_laundry_transactions`
--
ALTER TABLE `laundry_guest_laundry_transactions`
  ADD CONSTRAINT `account_key560989` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `laundry_hotel_services_key126754` FOREIGN KEY (`laundry_hotel_service_id`) REFERENCES `laundry_hotel_services` (`id`),
  ADD CONSTRAINT `laundry_packaging_type_key45900` FOREIGN KEY (`laundry_packaging_type_id`) REFERENCES `laundry_packaging_types` (`id`),
  ADD CONSTRAINT `laundry_service_key457889` FOREIGN KEY (`laundry_service_id`) REFERENCES `laundry_services` (`id`),
  ADD CONSTRAINT `room_key678543` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `laundry_guest_laundry_transaction_items`
--
ALTER TABLE `laundry_guest_laundry_transaction_items`
  ADD CONSTRAINT `laundry_guest_laundry_transaction_key90887` FOREIGN KEY (`laundry_guest_laundry_transaction_id`) REFERENCES `laundry_guest_laundry_transactions` (`id`),
  ADD CONSTRAINT `laundry_item_key908654` FOREIGN KEY (`laundry_item_id`) REFERENCES `laundry_items` (`id`);

--
-- Constraints for table `laundry_hotel_laundry_transactions`
--
ALTER TABLE `laundry_hotel_laundry_transactions`
  ADD CONSTRAINT `laundry_hotel_services_key0008654` FOREIGN KEY (`laundry_hotel_service_id`) REFERENCES `laundry_hotel_services` (`id`),
  ADD CONSTRAINT `laundry_packaging_type_key456750` FOREIGN KEY (`laundry_packaging_type_id`) REFERENCES `laundry_packaging_types` (`id`),
  ADD CONSTRAINT `laundry_service_key4453289` FOREIGN KEY (`laundry_service_id`) REFERENCES `laundry_services` (`id`);

--
-- Constraints for table `laundry_hotel_laundry_transaction_items`
--
ALTER TABLE `laundry_hotel_laundry_transaction_items`
  ADD CONSTRAINT `laundry_guest_laundry_transaction_key900077` FOREIGN KEY (`laundry_guest_laundry_transaction_id`) REFERENCES `laundry_guest_laundry_transactions` (`id`),
  ADD CONSTRAINT `laundry_item_key876543` FOREIGN KEY (`laundry_item_id`) REFERENCES `laundry_items` (`id`);

--
-- Constraints for table `laundry_items`
--
ALTER TABLE `laundry_items`
  ADD CONSTRAINT `item_category__key_2993100` FOREIGN KEY (`laundry_item_category_id`) REFERENCES `laundry_item_categories` (`id`);

--
-- Constraints for table `laundry_items_laundry_services`
--
ALTER TABLE `laundry_items_laundry_services`
  ADD CONSTRAINT `laundry_item_key6700` FOREIGN KEY (`laundry_item_id`) REFERENCES `laundry_items` (`id`),
  ADD CONSTRAINT `laundry_service_key9800` FOREIGN KEY (`laundry_service_id`) REFERENCES `laundry_services` (`id`);

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rate_key100` FOREIGN KEY (`rate_type_id`) REFERENCES `rate_types` (`id`);

--
-- Constraints for table `remarks`
--
ALTER TABLE `remarks`
  ADD CONSTRAINT `remark_categories_key_200` FOREIGN KEY (`remark_category_id`) REFERENCES `remark_categories` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `accounts__key_233320` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `business_source_id_key_50909` FOREIGN KEY (`business_source_id`) REFERENCES `business_sources` (`id`),
  ADD CONSTRAINT `discount_plan__key_2333909008` FOREIGN KEY (`discount_plan`) REFERENCES `discount_plans` (`id`);

--
-- Constraints for table `reservation_payments`
--
ALTER TABLE `reservation_payments`
  ADD CONSTRAINT `reservations__key_23339100` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`);

--
-- Constraints for table `reservation_transaction`
--
ALTER TABLE `reservation_transaction`
  ADD CONSTRAINT `reservations__key_2333909` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`),
  ADD CONSTRAINT `reserved_rooms__key_2333909` FOREIGN KEY (`reserved_room_id`) REFERENCES `reserved_rooms` (`id`);

--
-- Constraints for table `reserved_rooms`
--
ALTER TABLE `reserved_rooms`
  ADD CONSTRAINT `reservations__key_233320` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`),
  ADD CONSTRAINT `roomss__key_233320` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `floor_key59000` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`),
  ADD CONSTRAINT `room_owners_key500` FOREIGN KEY (`room_owner_id`) REFERENCES `room_owners` (`id`),
  ADD CONSTRAINT `room_type_key400` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`);

--
-- Constraints for table `rooms_amenities`
--
ALTER TABLE `rooms_amenities`
  ADD CONSTRAINT `amenities_key600` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`id`),
  ADD CONSTRAINT `room_key600` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `rooms_week_days`
--
ALTER TABLE `rooms_week_days`
  ADD CONSTRAINT `room2_key600` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `week_days_key6400` FOREIGN KEY (`week_day_id`) REFERENCES `week_days` (`id`);

--
-- Constraints for table `room_images`
--
ALTER TABLE `room_images`
  ADD CONSTRAINT `room_key500` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `room_types_rates`
--
ALTER TABLE `room_types_rates`
  ADD CONSTRAINT `rate_key5600` FOREIGN KEY (`rate_id`) REFERENCES `rates` (`id`),
  ADD CONSTRAINT `room_types_key5600` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`);

--
-- Constraints for table `seasons`
--
ALTER TABLE `seasons`
  ADD CONSTRAINT `season_types_key450` FOREIGN KEY (`season_type_id`) REFERENCES `season_types` (`id`);

--
-- Constraints for table `settlements`
--
ALTER TABLE `settlements`
  ADD CONSTRAINT `settlement_type_id_object_3400` FOREIGN KEY (`settlement_type_id`) REFERENCES `settlement_types` (`id`);

--
-- Constraints for table `tax_settings`
--
ALTER TABLE `tax_settings`
  ADD CONSTRAINT `tax_settings_key100` FOREIGN KEY (`tax_setting_type_id`) REFERENCES `tax_setting_types` (`id`);

--
-- Constraints for table `transportations`
--
ALTER TABLE `transportations`
  ADD CONSTRAINT `transportation_type_id_key_50909` FOREIGN KEY (`transportation_type_id`) REFERENCES `transportation_types` (`id`);

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `role_key200` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_key200` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
