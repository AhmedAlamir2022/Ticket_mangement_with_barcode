-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 06:57 AM
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
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(900) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `profile_image`, `created_at`, `updated_at`) VALUES
(6, 'Ahmed Mostafa', 'Abo Alamir', 'admin@gmail.com', NULL, '$2y$10$n6W0nrtxV.u9yCqedIGene1Yq20Cw6Kn.GnF9RbfoWOIM6wxnBrJK', '202210271417balagy.jpg', '2022-10-27 06:15:16', '2022-10-31 17:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cat_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `event_category`, `details`, `Cat_image`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 'Travel is the movement of people between distant geographical locations.', 'upload/event/1747840244628448.jpg', '2022-10-27 09:32:30', NULL),
(3, 'Sport', 'The precise definition of what separates a sport from other leisurs', 'upload/event/1747841054105515.jpg', '2022-10-27 09:45:22', NULL),
(4, 'Cinema', 'Cinematography, the science or art of motion-picture photography Film or movie', 'upload/event/1747841127804318.jpg', '2022-10-27 09:46:32', '2022-10-31 18:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', 'dftg', '01012921224', 'wefrgtyhj', '2022-10-27 20:11:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_category_id`, `event_title`, `event_description`, `event_image`, `created_at`, `updated_at`) VALUES
(1, '4', 'Movie', 'Film, also called movie or motion picture, is a visual art used to simulate experiences that communicate ideas, stories, perceptions, feelings, beauty or atmosphere by the means of recorded or programmed moving images along with other sensory stimulations.[1] The word \"cinema\", short for cinematography, is often used to refer to filmmaking and the film industry, and to the art form that is the result of it.', 'upload/event/1747841927209786.jpg', '2022-10-27 09:59:15', '2022-10-30 10:22:43'),
(3, '3', 'Football', 'Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal. Unqualified, the word football normally means the form of football that is the most popular where the word is used. Sports commonly called football include association football (known as soccer in some countries); gridiron football (specifically American football or Canadian football); Australian rules football; rugby football (either rugby league or rugby union); and Gaelic football.[1][2] These various forms of football are known as football codes.', 'upload/event/1747842338406158.jpg', '2022-10-27 10:05:47', '2022-10-30 10:23:22'),
(4, '1', 'Airplane', 'An airplane or aeroplane (informally plane) is a powered, fixed-wing aircraft that is propelled forward by thrust from a jet engine, propeller or rocket engine. Airplanes come in a variety of sizes, shapes, and wing configurations. The broad spectrum of uses for airplanes includes recreation, transportation of goods and people, military, and research. Worldwide', 'upload/event/1747842366253641.jpg', '2022-10-27 10:06:13', '2022-10-30 10:23:39'),
(5, '3', 'Wrestling', 'Wrestling is a combat sport involving grappling-type techniques such as clinch fighting, throws and takedowns, joint locks, pins and other grappling holds. The sport can either be theatrical for entertainment (see professional wrestling), or genuinely competitive. A wrestling bout is a physical competition, between two (occasionally more) competitors or sparring partners, who attempt to gain and maintain a superior position. There are a wide range of styles with varying rules with both traditional historic and modern styles. Wrestling techniques have been incorporated into other martial arts as well as military hand-to-hand combat systems.', 'upload/event/1747842405535300.jpg', '2022-10-27 10:06:51', '2022-10-30 10:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_27_055708_create_admins_table', 2),
(6, '2022_10_27_083228_create_organizers_table', 3),
(7, '2022_10_27_093658_create_categories_table', 4),
(8, '2022_10_27_112143_create_categories_table', 5),
(9, '2022_10_27_115030_create_events_table', 6),
(10, '2022_10_27_121100_create_subscribes_table', 7),
(11, '2022_10_27_121829_create_contacts_table', 8),
(12, '2022_10_27_122640_create_quieries_table', 9),
(13, '2022_10_27_125832_create_tickets_table', 10),
(14, '2022_10_29_195602_create_testimonials_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE IF NOT EXISTS `organizers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer_image` varchar(900) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `organizers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `organizer_image`, `created_at`, `updated_at`) VALUES
(8, 'Ahmed Alamir', 'ahmed', 'ahmed@gmail.com', NULL, '$2y$10$1Zh1C2QLoNffrVnCMGKbWexc7Vm4lYs3lx3egFeWOSN6L1vYSwMTe', '202210272305avatar-366-456318.jpg', '2022-10-27 17:44:24', '2022-10-27 21:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quieries`
--

CREATE TABLE IF NOT EXISTS `quieries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quieries`
--

INSERT INTO `quieries` (`id`, `country`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Egypt11', '01012921225', 'ahmedalamir521@gmail.com', NULL, '2022-10-31 18:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE IF NOT EXISTS `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `testimonial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'User', NULL, 'cdvfbgnh', 0, '2022-10-29 18:22:52', NULL),
(2, 'User', NULL, 'Good Work Keep Going', 1, '2022-10-29 18:25:06', NULL),
(3, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', 'Very Useful Website', 1, '2022-10-29 18:25:34', NULL),
(6, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', 'userid testimonial', 2, '2022-10-30 09:02:24', '2022-10-31 05:09:04'),
(9, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', 'sedfrgthyjuikolp;', 0, '2022-10-31 17:54:01', NULL),
(10, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', 'alamir', 2, '2022-10-31 18:01:41', '2022-10-31 18:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Organizer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkout` int(11) DEFAULT NULL,
  `ticket_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_event_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_seatnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_email`, `Organizer_email`, `checkout`, `ticket_title`, `ticket_event_id`, `ticket_price`, `ticket_description`, `ticket_status`, `ticket_date`, `ticket_duration`, `ticket_time`, `ticket_seatnumber`, `ticket_country`, `ticket_address`, `ticket_remark`, `final`, `ticket_image`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 0, 'Barchalona VS Real madrid', '3', '45', 'The Classico betwwen 2 espain national teams barchalona and real madrid is the biggest football event in espan and the world', '1', '2022-10-30', '5', '04:00', '187', 'Espan', 'Espan / Barchlona / Camp No studium', '0', 'Title: Barchalona VS Real madrid,Price: 45,Date: 2022-10-30,Time: 04:00,Seat Number187', 'upload/ticket/1747849016106422.jpg', '2022-10-27 11:51:55', '2022-10-31 12:20:56'),
(3, NULL, NULL, NULL, 'Royal Rumble', '5', '45', 'The Royal Rumble is a professional wrestling event, produced every January since 1988 by professional wrestling promotion. WWE It is named after the Royal Rumble match, a battle royal whose participants enter at timed intervals', '0', '2022-10-31', '10', '17:00', '4848', 'Sadia', 'Sadia / Gedah', '0', 'Title: Royal Rumble,Price: 45,Date: 2022-10-31,Time: 17:00,Seat Number4848', 'upload/ticket/1747849307002342.jpg', '2022-10-27 11:56:33', NULL),
(4, NULL, 'ahmed@gmail.com', NULL, 'Liverpool Vs Manchester City', '3', '20', 'The Liverpool F.C.â€“Manchester City F.C. rivalry, also known as the M6 Derby, is a high-profile inter-city rivalry between English professional association football clubs Liverpool and Manchester City. It is considered to be one of the biggest rivalries in the association football world in the late 2010s.', '1', '2022-10-28', '3', '20:00', '458', 'Liverpool', 'Liverpool / Anfield studium', '0', 'Title: Liverpool Vs Manchester City,Price: 20,Date: 2022-10-28,Time: 20:00,Seat Number458', 'upload/ticket/1747849394117422.jpg', '2022-10-27 11:57:56', NULL),
(5, ' ', NULL, 1, 'Ip Man 4: The Finale', '1', '100', 'Ip Man 4: The Finale is a 2019 Chinese martial arts film directed by Wilson Yip and produced by Raymond Wong. It is the fourth and final film in the Ip Man film series based on the life of the Wing Chun grandmaster of the same name and features Donnie Yen reprising the role.', '0', '2022-10-30', '2', '22:00', '25', 'Egypt', 'Egypt / Bahlol Cinema', '0', 'Title: Ip Man 4: The Finale,Price: 12,Date: 2022-10-30,Time: 22:00,Seat Number25', 'upload/ticket/1747849486505264.jpg', '2022-10-27 11:59:24', '2022-10-31 18:28:19'),
(6, NULL, 'ahmed@gmail.com', NULL, 'efvrbgjhm', '4', '52', 'asyukiergyjukp', '1', '2022-11-04', '41', '16:07', '85285', 'Egypt', 'Egypt', '0', 'Title: efvrbgjhm,Price: 52,Date: 2022-11-04,Time: 16:07,Seat Number85285', 'upload/ticket/1748030917095712.png', '2022-10-29 12:03:10', NULL),
(8, NULL, 'ahmed@gmail.com', NULL, 'Egypt', '3', '452', '74252#7]\r\nnjlmkl', '1', '2022-10-20', '3', '16:31', '852', 'Egypt', 'Egypt', '0', 'Title: Egypt,Price: 452,Date: 2022-10-20,Time: 16:31,Seat Number852', 'upload/ticket/1748213781102520.png', '2022-10-31 12:29:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `address`, `country`, `city`, `user_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Ahmed Mostafa', 'ahmedalamir521@gmail.com', NULL, '$2y$10$Io7jMivBK.23Qv6qCMX7zucer8HPDu9Z/LZ.eaEYkSUxfBTnXWJxi', '01012921224', 'Egypt', 'Egypt', 'Minia', '202210291503box-img2.jpg', '1ofAhsv2jM3YJoDN3gQtQXwdMjQuOnm8kUcga70UV4ZftrowWa3cLT1p0xrB', '2022-10-29 10:38:03', '2022-10-29 17:48:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
