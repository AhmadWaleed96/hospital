-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 10:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `department_id`, `date`, `time`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(5, 17, 14, 1, '2020-02-22', '10:50:00', 'انتظار', 'Eius ipsum placeat', '2022-06-22 07:52:53', '2022-06-22 07:52:53'),
(7, 47, 14, 2, '2005-02-15', '16:59:00', 'مؤكدة', 'Sed accusamus id cul', '2022-07-03 18:07:34', '2022-07-03 18:07:34'),
(8, 48, 14, 2, '1995-03-18', '02:22:00', 'ملغيه', 'Do ullam velit sequi', '2022-07-03 18:07:49', '2022-07-03 18:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bed_allotments`
--

CREATE TABLE `bed_allotments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bed_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_banks`
--

CREATE TABLE `blood_banks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `age` bigint(20) DEFAULT NULL,
  `weight` bigint(20) DEFAULT NULL,
  `donornumber` bigint(20) DEFAULT NULL,
  `hospital` varchar(255) NOT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL,
  `notes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_banks`
--

INSERT INTO `blood_banks` (`id`, `name`, `national_id`, `address`, `birth_date`, `gender`, `mobile`, `age`, `weight`, `donornumber`, `hospital`, `blood_group`, `type`, `date`, `time`, `notes`, `created_at`, `updated_at`) VALUES
(10, 'Sara Howell', '2', 'Consectetur exercit', '2001-03-26', 'female', 19, 39, 54, 704, 'Facere sit porro in', 'Delectus officiis e', 'BloodBank', '2012-09-24', '20:07:00', 'Animi sed non quide', '2022-07-01 09:19:40', '2022-07-01 09:19:40'),
(12, 'Jonah Gaines', '37', 'Ullamco praesentium', '2015-07-29', 'female', 72, 36, 93, 605, 'Aut omnis laboriosam', 'Ex qui praesentium o', 'BloodBank', '2015-02-05', '14:13:00', 'Et esse ea aut perf', '2022-07-01 09:43:43', '2022-07-01 09:43:43'),
(13, 'Tatiana Pickett', '21', 'Perferendis ullamco', '2020-04-03', 'male', 8, 43, 48, 268, 'Voluptas quos rerum', 'Qui doloribus sunt c', 'BloodBank', '2015-12-11', '13:46:00', 'Voluptatibus minus n', '2022-07-01 10:43:13', '2022-07-01 10:43:13'),
(14, 'Hermione Nicholson', '21', 'Et aliquam dolore vo', '1981-10-26', 'male', 49, 68, 47, 24, 'Voluptas nostrud pla', 'Ab alias aut consect', 'BloodBank', '1980-10-24', '16:16:00', 'Maiores enim aperiam', '2022-07-01 18:13:14', '2022-07-01 18:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `case_histories`
--

CREATE TABLE `case_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_allergies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bleed_tendency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heart_disease` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_pressure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diabetic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surgery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accident` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_medical_history` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_medication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female_pregnancy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breast_feeding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health_insurance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_income` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_histories`
--

INSERT INTO `case_histories` (`id`, `patient_id`, `doctor_id`, `date`, `title`, `food_allergies`, `bleed_tendency`, `heart_disease`, `blood_pressure`, `diabetic`, `surgery`, `accident`, `family_medical_history`, `current_medication`, `female_pregnancy`, `breast_feeding`, `health_insurance`, `low_income`, `reference`, `others`, `status`, `created_at`, `updated_at`) VALUES
(7, 3, 1, '2021-06-08', 'Dolore ea maiores do', NULL, NULL, 'Perferendis dignissi', 'Laborum similique er', 'Quis qui doloribus v', 'Debitis sit volupta', 'Exercitation mollit', NULL, NULL, NULL, NULL, 'Reprehenderit necess', NULL, NULL, NULL, 'غير نشط', '2022-06-21 22:28:21', '2022-06-21 22:28:21'),
(6, 10, 1, '2011-07-21', 'Ab nemo dolorem tene', NULL, NULL, 'Placeat laboris lab', 'Aut occaecat digniss', 'Quibusdam cum facili', 'Aliquam nesciunt bl', 'Quisquam proident n', NULL, NULL, NULL, NULL, 'Et ut in non ea recu', NULL, NULL, NULL, 'نشط', '2022-06-21 22:26:37', '2022-06-21 22:26:37'),
(16, 10, 1, '2017-09-03', 'Quo officia elit pe', NULL, NULL, 'Unde eos consequat', 'Hic facilis quibusda', 'Libero reprehenderit', 'Ipsum ipsa vero ad', 'Adipisci ad voluptat', NULL, NULL, NULL, NULL, 'Consectetur sint ius', NULL, NULL, NULL, 'غير نشط', '2022-06-22 11:34:21', '2022-06-22 11:34:21'),
(17, 11, 1, '1971-08-09', 'Velit commodi optio', NULL, NULL, 'Minima laboris persp', 'Quibusdam esse enim', 'Ut deserunt consecte', 'Consequatur aut odi', 'Sunt perferendis lor', NULL, NULL, NULL, NULL, 'Nostrum nihil ad eum', NULL, NULL, NULL, 'نشط', '2022-06-28 11:15:26', '2022-06-28 11:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `dayoff_schedules`
--

CREATE TABLE `dayoff_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'قسم الجراحة', 'قسم  الجراحة', '2022-06-19 08:35:17', '2022-07-09 16:38:04'),
(2, 'قسم  العيون', 'قسم العيون', '2022-06-21 21:47:57', '2022-07-09 16:38:28'),
(3, 'قسم القلب', 'قسم القلب', '2022-06-21 21:58:53', '2022-07-09 16:38:50'),
(4, 'قسم  الباطني', 'قسم  الباطني', '2022-07-09 16:39:11', '2022-07-09 16:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `department_user`
--

CREATE TABLE `department_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_user`
--

INSERT INTO `department_user` (`id`, `department_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 3, 21, NULL, NULL),
(11, 1, 20, NULL, NULL),
(6, 1, 12, NULL, NULL),
(7, 1, 13, NULL, NULL),
(43, 2, 14, NULL, NULL),
(13, 3, 22, NULL, NULL),
(14, 3, 23, NULL, NULL),
(15, 2, 24, NULL, NULL),
(16, 3, 25, NULL, NULL),
(35, 1, 55, NULL, NULL),
(28, 2, 36, NULL, NULL),
(29, 3, 37, NULL, NULL),
(27, 2, 35, NULL, NULL),
(23, 2, 32, NULL, NULL),
(24, 3, 33, NULL, NULL),
(30, 1, 38, NULL, NULL),
(46, 2, 56, NULL, NULL),
(44, 4, 68, NULL, NULL),
(45, 3, 69, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `patient_id`, `doctor_id`, `date`, `description`, `doc`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 14, '2001-10-27', 'Qui voluptatem eiusm', 'patients_documents/1Tx1iP5bktO0Vwr69XXy3M0zlA7A1CgVZeDD4ITI.txt', NULL, '2022-06-22 07:13:03', '2022-07-03 18:50:13'),
(2, 11, 14, '2018-05-07', 'Dolore culpa enim s', 'patients_documents/3xKjN1b2jm1cDPVCSA775dFSQrxRVMTHlkWorNzj.txt', NULL, '2022-06-28 02:12:50', '2022-06-28 02:12:50'),
(4, 41, 14, '2017-12-08', 'Ut in voluptas minim', 'patients_documents/0Hfbbc1VbuzlLLkl4WvshUSe1kNYwSxVlRCnQsAa.txt', NULL, '2022-07-03 18:51:09', '2022-07-03 18:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donornumber` bigint(20) DEFAULT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `national_id`, `address`, `donornumber`, `hospital`, `blood_group`, `qty`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Nicole Hooper', '87', 'Quod alias consequun', 442, 'Nihil ullamco non si', 'Sapiente consequatur', 29, 'donor', '2022-07-02 13:03:58', '2022-07-02 13:03:58'),
(2, 'Craig Sellers', '5555555555555', 'Dolore autem rem vol', 978, 'Sapiente laboriosam', 'Qui pariatur Ex vol', 857, 'donor', '2022-07-01 18:34:35', '2022-07-01 18:34:46'),
(4, 'Janna Wynn', '80', 'Doloribus nisi iure', 746, 'Ea provident obcaec', 'Ut aliqua Dolorum d', 622, 'donor', '2022-07-02 13:04:07', '2022-07-02 13:04:07'),
(5, 'Justin Baxter', '10', 'Labore in voluptate', 140, 'Vitae eum blanditiis', 'Qui architecto quasi', 414, 'donor', '2022-07-02 13:04:16', '2022-07-02 13:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_money` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lap_reports`
--

CREATE TABLE `lap_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lap_reports`
--

INSERT INTO `lap_reports` (`id`, `date`, `time`, `patient_id`, `doctor_id`, `template_id`, `report`, `created_at`, `updated_at`) VALUES
(1, '2004-08-03', '09:40:00', 11, 14, 2, 'Occaecat sunt cum mo', '2022-06-28 00:49:12', '2022-06-28 03:11:48'),
(2, '1971-11-11', '21:17:00', 11, 14, 1, 'Facere do totam pari', '2022-06-28 01:32:22', '2022-06-28 01:32:22'),
(3, '2019-12-25', '03:38:00', 10, 14, 2, 'Cum ea architecto ut', '2022-06-28 01:43:43', '2022-06-28 01:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `lap_templates`
--

CREATE TABLE `lap_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lap_templates`
--

INSERT INTO `lap_templates` (`id`, `name`, `template`, `created_at`, `updated_at`) VALUES
(1, 'B', 'Magna alias et commo', '2022-06-28 00:44:59', '2022-06-28 00:46:26'),
(2, 'ِِA', 'Porro ut eum aute ad', '2022-06-28 01:11:41', '2022-06-28 01:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instruction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `purchase_price` double(8,2) NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `instruction`, `category_id`, `purchase_price`, `sale_price`, `quantity`, `company`, `expire_date`, `created_at`, `updated_at`) VALUES
(3, 'Hillary Mclean', 'Inventore nisi autem', 1, 706.00, 966.00, 967, 'Alvarez and Ford Associates', '2009-01-04', '2022-06-27 04:00:37', '2022-07-03 18:53:48'),
(4, 'Doris Gamble', 'Nostrud iure asperio', 1, 5.00, 673.00, 199, 'Lowery and Wilcox Associates', '2018-08-31', '2022-07-03 18:53:33', '2022-07-03 18:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_categories`
--

CREATE TABLE `medicine_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_categories`
--

INSERT INTO `medicine_categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'خطير', 'hxfgdsyfgsydfdsxfg', '2022-06-19 20:43:42', '2022-06-27 03:59:20'),
(2, 'خفيف', 'Pariatur Et qui ut', '2022-06-27 03:33:16', '2022-06-27 03:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_prescription`
--

CREATE TABLE `medicine_prescription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `instructions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_05_153432_create_departments_table', 1),
(5, '2019_11_06_180428_create_time_schedules_table', 1),
(6, '2019_11_18_141722_create_appointments_table', 1),
(7, '2020_01_05_140821_create_case_histories_table', 1),
(8, '2020_01_05_181313_create_documents_table', 1),
(9, '2020_01_06_135045_create_prescriptions_table', 1),
(10, '2020_01_06_151523_create_medicines_table', 1),
(11, '2020_01_06_183538_create_services_table', 1),
(12, '2020_01_06_185211_create_patient_service_table', 1),
(13, '2020_01_07_161138_create_dayoff_schedules_table', 1),
(14, '2020_01_09_144204_create_service_packages_table', 1),
(15, '2020_01_09_144836_create_service_service_package_table', 1),
(16, '2020_01_09_165150_create_medicine_prescription_table', 1),
(17, '2020_01_12_161816_create_beds_table', 1),
(18, '2020_01_12_162459_create_bed_allotments_table', 1),
(19, '2020_01_23_165249_create_lap_templates_table', 1),
(20, '2020_01_23_165417_create_lap_reports_table', 1),
(21, '2020_01_28_162725_create_payments_table', 1),
(22, '2020_01_29_144424_create_payment_items_table', 1),
(23, '2020_01_29_145351_create_invoices_table', 1),
(24, '2020_02_03_190213_create_payment_payment_item_table', 1),
(25, '2020_02_04_143422_create_medicine_categories_table', 1),
(26, '2020_02_04_154707_create_expenses_table', 1),
(27, '2020_02_04_155119_create_finances_table', 1),
(28, '2020_02_12_155643_create_donors_table', 1),
(29, '2020_02_12_155709_create_blood_banks_table', 1),
(30, '2020_02_13_193336_create_department_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_service`
--

CREATE TABLE `patient_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `taxes` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `amount_received` double(8,2) NOT NULL,
  `amount_to_pay` double(8,2) NOT NULL,
  `doctor_commission` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_items`
--

CREATE TABLE `payment_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `commission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_payment_item`
--

CREATE TABLE `payment_payment_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `payment_item_id` int(11) NOT NULL,
  `payment_item_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `blood_pressure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diabetes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symptoms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `doctor_id`, `patient_id`, `blood_pressure`, `diabetes`, `symptoms`, `diagnosis`, `advice`, `date`, `created_at`, `updated_at`) VALUES
(1, 14, 11, NULL, NULL, 'Necessitatibus conse', 'Dolor aliquam saepe', 'Nihil obcaecati duci', '2022-09-27', '2022-06-22 11:27:34', '2022-07-03 18:57:02'),
(2, 14, 20, NULL, NULL, 'Anim ut anim occaeca', 'Sed velit ullam exe', 'Exercitation recusan', '2011-02-02', '2022-06-22 17:34:46', '2022-06-22 17:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` double(8,2) NOT NULL,
  `doctor_commission` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_packages`
--

CREATE TABLE `service_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_commission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_service_package`
--

CREATE TABLE `service_service_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_package_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_schedules`
--

CREATE TABLE `time_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `week_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `week_num` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `emergency` bigint(20) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `medical_degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `national_id`, `email`, `password`, `address`, `picture`, `birth_date`, `gender`, `phone`, `mobile`, `emergency`, `type`, `email_verified_at`, `medical_degree`, `specialist`, `biography`, `educational_qualification`, `blood_group`, `remember_token`, `created_at`, `updated_at`) VALUES
(15, 'Kaseem', 'Baird', NULL, 'buki@mailinator.com', '$2y$10$lVodaqS8gf0CgAzL499fSeexzNRw2WSyXb0.jJ.DlBR1CWkwoP/g.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2Nx9Sk4rdjuwG25E6xPGqt1Yvp3EgZH5wQXqAZ2mpmzKrjbXZ2PyDJElONNf', '2022-06-21 20:04:42', '2022-06-21 20:04:42'),
(9, 'khaled', 'matar', NULL, '55555@gmail.com', '$2y$10$wo/sM5fHZyaG41G14vZoi.a3yMAuShRohg3SqXJRglUYh2FCNb2Me', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-19 15:56:17', '2022-06-19 15:56:17'),
(20, 'أحمد', 'حسان', '20461110258', 'gabyco@mailinator.com', '$2y$10$SzdDpMqnhxmjZjTY0dJTgezzhBSkzHoZD50/Sxv.JvciXpK0LvfCS', 'غزة', NULL, '1972-09-25', 'female', NULL, 592481036, NULL, 'patient', NULL, NULL, 'نشط', NULL, NULL, 'أجراء  فحص شامل', NULL, '2022-06-22 11:33:27', '2022-07-09 16:47:49'),
(14, 'موسى', 'حمد', '5646346551', 'fusy@mailinator.com', '$2y$10$eBEHsajhzpX5/y7LBiCFBOJY03FIsxqDHctN.HmePXajfuz28PtLu', 'غزة', NULL, '2020-01-15', 'male', 538735455, 592481036, 101, 'doctor', NULL, 'دبلوم', 'دبلوم', 'دبلوم', 'دبلوم', NULL, NULL, '2022-06-21 19:59:50', '2022-07-09 16:40:46'),
(68, 'يوسف', 'العطار', '20461110258', 'engmosahmd15@gmail.com', '$2y$10$eLU59dbxFHyYxarAKPGLFOhHtxY8Dfa4c5oCimUXyyiCxNSX09PQq', 'غزة', NULL, '2022-07-20', 'male', 535455555, 592481036, 101, 'nurse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 16:42:03', '2022-07-09 16:42:03'),
(59, 'Nell', 'Lott', NULL, 'zupebyw@mailinator.com', NULL, 'Et corrupti dolorem', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 19:55:00', '2022-07-03 19:55:00'),
(58, 'Rowan', 'Harrison', NULL, 'zidysuz@mailinator.com', NULL, 'Velit et deleniti ma', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'غير نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 19:42:59', '2022-07-03 19:42:59'),
(36, 'Leslie', 'Booker', 'Laudantium repudian', 'puho@mailinator.com', NULL, 'Est culpa accusantiu', NULL, NULL, NULL, NULL, 24, NULL, 'ticketout', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:09:04', '2022-06-27 04:09:04'),
(33, 'أحمد', 'حمدان', '65454545265', 'gesola@mailinator.com', NULL, 'Maxime', NULL, NULL, NULL, NULL, NULL, NULL, 'accountant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 17:29:34', '2022-07-09 16:48:59'),
(35, 'Cassady', 'Ward', 'Hic elit distinctio', 'moba@mailinator.com', NULL, 'Laboriosam atque qu', NULL, NULL, NULL, NULL, 56, NULL, 'ticketout', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 06:23:00', '2022-06-25 06:23:00'),
(38, 'Kaitlin', 'Dominguez', '55555555555555', 'gejyli@mailinator.com', NULL, 'Amet cillum enim ne', NULL, NULL, NULL, NULL, NULL, NULL, 'ticketout', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 17:36:50', '2022-06-27 17:36:50'),
(40, 'Rudyard', 'Hickman', NULL, 'fyvylevi@mailinator.com', NULL, 'Dolores proident in', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'نشط', NULL, NULL, NULL, NULL, NULL, '2022-06-28 03:08:25', '2022-06-28 03:08:25'),
(42, 'Addison', 'Booth', NULL, 'qigulajy@mailinator.com', NULL, 'Voluptatibus aut qui', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 17:17:43', '2022-07-03 17:17:43'),
(43, 'Danielle', 'Winters', NULL, 'lyqituju@mailinator.com', NULL, 'Enim ea dolorem impe', 'rays_pictures/IRcXV2wTVgvQQIJHRswpZCxhxKf6P5AXrOi6E2lf.jpg', NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 17:26:59', '2022-07-03 17:27:00'),
(44, 'Jacob', 'Donaldson', NULL, 'koxebyzoko@mailinator.com', NULL, 'Beatae aut dolor ea', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'غير نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 17:39:52', '2022-07-03 17:39:52'),
(45, 'Vielka', 'Leach', NULL, 'nuvynubeg@mailinator.com', NULL, 'Nihil eligendi conse', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'غير نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 17:40:35', '2022-07-03 17:40:35'),
(54, 'Hilary', 'Richardson', NULL, 'qoqewito@mailinator.com', NULL, 'Esse do nobis in cor', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 19:18:44', '2022-07-03 19:18:44'),
(55, 'أحمد', 'حمدان', '20461110258', 'ziwikib@mailinator.com', '$2y$10$IGolC0U/mjgObiuYiibj2.mv9vYQXhmmRd6a8F7fgEaV9PwYuKyG2', 'غزة', NULL, '2008-03-18', 'male', 592481036, 592481036, 101, 'laboratorist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 19:26:51', '2022-07-09 16:44:21'),
(56, 'محمد', 'حمد', '65454545265', 'tizoga@mailinator.com', '$2y$10$aABTVr.FklKp0qvVo5MBYejJ.SY1r17VXxdSTe81Y9Uvb1RoT21Ai', 'غزة', NULL, '1970-02-15', 'male', 592481036, 592481036, NULL, 'pharmacist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 19:27:13', '2022-07-09 16:45:17'),
(60, 'Fallon', 'Knight', NULL, 'zuzisixit@mailinator.com', NULL, 'Incidunt rerum nihi', NULL, NULL, NULL, NULL, NULL, NULL, 'rays', NULL, 'غير نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 20:08:42', '2022-07-03 20:08:42'),
(62, 'Cora', 'Myers', NULL, 'vegul@mailinator.com', NULL, 'Eos vero ad natus du', NULL, NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'غير نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 20:45:12', '2022-07-03 20:59:11'),
(66, 'fkxzkf', 'zdcsh', NULL, 'sajohuhudy@mailinator.com', '$2y$10$yIOQF6oA0138tA9GQ7JYguYhDgcbqo2r3oQ5vJH2pnU5X5t/t8Cj6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 21:24:34', '2022-07-03 21:24:34'),
(65, 'Eve', 'Little', NULL, 'wyta@mailinator.com', NULL, 'Repellendus Quam mo', 'ray_pictures/vATYgns9HeDYnyvqg381qpD2VLnt0kIuCQy3vELp.svg', NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'غير نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 21:01:11', '2022-07-03 21:01:11'),
(64, 'Knox', 'Mullen', NULL, 'casu@mailinator.com', NULL, 'Irure reprehenderit', 'ray_pictures/Ih5blJVZwFwoioH0xOSMbMUkx7qQeIKxm6a5vcjU.svg', NULL, NULL, NULL, NULL, NULL, 'ray', NULL, 'نشط', NULL, NULL, NULL, NULL, NULL, '2022-07-03 20:51:11', '2022-07-03 20:51:11'),
(67, 'fkxzkf', 'xfdxzf', NULL, 'fiboner99@mailinator.com', '$2y$10$TEnBRnB4DZyIdI5mlLl4l./2.TFDQnMReOmR.JWwzfR3CmvpxD/GO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 21:27:40', '2022-07-03 21:27:40'),
(69, 'باسم', 'عيسى', '65454545265', 'buki@mailinator.com', '$2y$10$D..AhbwjY95ur7D9XYdEjOVqlh.k325MPuTHKfPSfB/7kSeGgC7N2', 'غزة', NULL, '2022-07-26', 'male', 592481036, 592481036, NULL, 'receptionist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-09 16:43:14', '2022-07-09 16:43:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_allotments`
--
ALTER TABLE `bed_allotments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_banks`
--
ALTER TABLE `blood_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_histories`
--
ALTER TABLE `case_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dayoff_schedules`
--
ALTER TABLE `dayoff_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_user`
--
ALTER TABLE `department_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_reports`
--
ALTER TABLE `lap_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lap_templates`
--
ALTER TABLE `lap_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_categories`
--
ALTER TABLE `medicine_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_prescription`
--
ALTER TABLE `medicine_prescription`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `patient_service`
--
ALTER TABLE `patient_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_items`
--
ALTER TABLE `payment_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_payment_item`
--
ALTER TABLE `payment_payment_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_packages`
--
ALTER TABLE `service_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_service_package`
--
ALTER TABLE `service_service_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_schedules`
--
ALTER TABLE `time_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bed_allotments`
--
ALTER TABLE `bed_allotments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_banks`
--
ALTER TABLE `blood_banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `case_histories`
--
ALTER TABLE `case_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dayoff_schedules`
--
ALTER TABLE `dayoff_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_user`
--
ALTER TABLE `department_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lap_reports`
--
ALTER TABLE `lap_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lap_templates`
--
ALTER TABLE `lap_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicine_categories`
--
ALTER TABLE `medicine_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine_prescription`
--
ALTER TABLE `medicine_prescription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `patient_service`
--
ALTER TABLE `patient_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_items`
--
ALTER TABLE `payment_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_payment_item`
--
ALTER TABLE `payment_payment_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_packages`
--
ALTER TABLE `service_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_service_package`
--
ALTER TABLE `service_service_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_schedules`
--
ALTER TABLE `time_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
