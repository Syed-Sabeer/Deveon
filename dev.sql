-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2025 at 01:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `tags` text DEFAULT NULL,
  `min_read` varchar(255) DEFAULT NULL,
  `visibility` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `content`, `image`, `tags`, `min_read`, `visibility`, `created_at`, `updated_at`) VALUES
(5, 'Choose The Best IT Service Company in the City.', 'choose-the-best-it-service-company-in-the-city', '<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in reprehenderit.</p>\r\n\r\n<p>The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta arcu In hac habitasse the is platea augue thelorem turpoi dictumst. In lacus libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac ante rutrum sed the is sodales augue consequat.</p>\r\n\r\n<p><strong>BLOG TEST DATA</strong></p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros.</p>\r\n\r\n<p>&nbsp;</p>', 'uploads/blogs/1760183479_board-361516_640.jpg', 'd', 'wew', 1, '2025-10-11 14:33:40', '2025-10-11 15:51:19'),
(6, 'jhgj', 'jhgj', '<p>ghj</p>', 'uploads/blogs/1760184129_board-361516_640.jpg', 'ggg,hhg', NULL, 1, '2025-10-11 16:02:09', '2025-10-11 16:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `light_logo_image` text DEFAULT NULL,
  `dark_logo_image` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `tiktok_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `footer_copyright_text` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `light_logo_image`, `dark_logo_image`, `email`, `address`, `phone`, `facebook_link`, `youtube_link`, `tiktok_link`, `instagram_link`, `footer_copyright_text`, `created_at`, `updated_at`) VALUES
(1, 'uploads/business-settings/1761807094_light_logo_dd logo grey-04.png', 'uploads/business-settings/1761807094_dark_logo_dd logo-04.png', 'info@deveondynamics.com', 'Suite 391 - 1505 Laperriere Avenue, Ottawa, Ontario K1Z 7T1, Canada', '703-200-4522', 'http://facebook.com/transportesaetallc?mibextid=wwXIfr&rdid=C3NiiC31QlI3dUHU&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1CJcecy9Cb%2F%3Fmibextid%3DwwXIfr#', 'https://www.youtube.com/@transportesaetallc1718', 'https://www.tiktok.com/@transportesaetallc?_t=ZP-8uarrdLZZEN&_r=1', 'https://www.instagram.com/transsaetava/?igsh=MWtpOG9laHQxajFucg%3D%3D&utm_source=qr#', '© 2025 Design and Developed by DEVEON INC.', '2025-09-11 08:23:11', '2025-10-30 10:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `responsiblities` text NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `salary_range` varchar(255) DEFAULT NULL,
  `visibility` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `job_type`, `summary`, `responsiblities`, `location`, `education`, `experience`, `salary_range`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'PHP Laravel Developer', 'Full-time', 'We are seeking a skilled and detail-oriented Backend Laravel Developer to join our growing development team. The ideal candidate will be responsible for building and maintaining robust backend solutions using Laravel and related technologies. You\'ll work closely with our front-end developers, UI/UX designers, and project managers to deliver high-quality, scalable web applications.', '[\"Develop, test, and maintain scalable backend services using Laravel framework.\",\"Integrate third-party APIs, databases, and internal tools.\",\"Design and implement RESTful APIs and microservices architecture.\",\"Collaborate with front-end developers to ensure seamless data flow and application performance.\",\"Can Deal With Frontend Changes as Well\"]', NULL, 'Bachelors Degree (Preffered)', '2+ Years', '50k - 60K', 1, '2025-11-06 03:20:31', '2025-11-06 03:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `fullname`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(14, 'Shoshana Branch', '+1 (342) 312-4884', 'juji@mailinator.com', 'Corporis aut volupta', 'In quo laudantium u', '2025-10-14 14:09:00', '2025-10-14 14:09:00'),
(15, 'Josef Estep', '518268040', 'estep.josef@googlemail.com', 'Tired of running like a hamster in a wheel?', 'Working hard every day but still barely moving forward? It’s time to stop the endless grind.\r\nDiscover how people are earning real money from trading — no office, no boss, no limits.\r\n\r\nOne simple app could be your ticket to financial freedom: https://youtu.be/VmHYisHHOtU\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nto UNSUBSCRIBE:\r\nhttps://casatemporada.site/unsubscribe?domain=deveondynamics.com\r\nAddress: 108 West Street Comstock Park, MI 48721', '2025-10-26 15:59:44', '2025-10-26 15:59:44'),
(16, 'Ishmael Oneill', '+1 (445) 495-2061', 'zozexipe@mailinator.com', 'Velit qui ex possim', 'Aliquip iste velit i', '2025-10-30 10:49:19', '2025-10-30 10:49:19'),
(17, 'Jill Rendall', '4975229234', 'rendall.jill@yahoo.com', '5 Ready-To-Launch SaaS Businesses To Start Selling Instantly!', 'Start Your Own AI SaaS Agency & Charge Your Clients $497-$2997 For Creating 1 Single App… \r\nOr Sell Them on Fiverr, Upwork, Your Website, \r\nor As Monthly Subscription – For Fastest 6-Figure Passive Income!\r\n\r\nhttps://goldsolutions.pro/MagicAppsAI\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nto UNSUBSCRIBE:\r\nhttps://smartexperts.pro/unsubscribe?domain=deveondynamics.com\r\nAddress: 209 West Street Comstock Park, MI 49321', '2025-11-02 19:21:49', '2025-11-02 19:21:49'),
(18, 'Errol Forney', '4037359054', 'joel.fox.1965+deveondynamics.com@gmail.com', 'Nonstop Payments', 'Discover The Easy New Way We’re Getting Paid Multiple Times A Day From A Hidden Source!\r\nhttps://www.novaai.expert/TheHiddenGoldmine\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nto UNSUBSCRIBE:\r\nhttps://www.novaai.expert/unsubscribe?domain=deveondynamics.com\r\nAddress: 209 West Street Comstock Park, MI 49321', '2025-11-03 03:25:24', '2025-11-03 03:25:24'),
(19, 'Leo', '431814919', 'leo@beamon.medicopostura.com', 'Leo Beamon', 'Hello there \r\n\r\nLooking to improve your posture and live a healthier life? Our Medico Postura™ Body Posture Corrector is here to help!\r\n\r\nExperience instant posture improvement with Medico Postura™. This easy-to-use device can be worn anywhere, anytime – at home, work, or even while you sleep.\r\n\r\nMade from lightweight, breathable fabric, it ensures comfort all day long.\r\n\r\nGrab it today at a fantastic 60% OFF: https://medicopostura.com\r\n\r\nPlus, enjoy FREE shipping for today only!\r\n\r\nDon\'t miss out on this amazing deal. Get yours now and start transforming your posture!\r\n\r\nThanks for your time, \r\n\r\nLeo', '2025-11-03 10:25:08', '2025-11-03 10:25:08'),
(20, 'Noble Shepherd', '+1 (854) 424-7757', 'giryr@mailinator.com', 'Est enim mollit elit', 'Reiciendis error qui', '2025-11-06 06:24:30', '2025-11-06 06:24:30'),
(21, 'Gavin Summers', '+1 (705) 732-9211', 'jaci@mailinator.com', 'Sed aut aut dolore c', 'Laboris corporis fug', '2025-11-06 06:24:53', '2025-11-06 06:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `phone_code` varchar(255) NOT NULL,
  `phone_number_limit` varchar(255) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `phone_code`, `phone_number_limit`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', '+93', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(2, 'Åland Islands', 'AX', '+358', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(3, 'Albania', 'AL', '+355', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(4, 'Algeria', 'DZ', '+213', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(5, 'American Samoa', 'AS', '+1684', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(6, 'Andorra', 'AD', '+376', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(7, 'Angola', 'AO', '+244', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(8, 'Anguilla', 'AI', '+1264', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(9, 'Antarctica', 'AQ', '+672', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(10, 'Antigua and Barbuda', 'AG', '+1268', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(11, 'Argentina', 'AR', '+54', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(12, 'Armenia', 'AM', '+374', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(13, 'Aruba', 'AW', '+297', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(14, 'Australia', 'AU', '+61', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(15, 'Austria', 'AT', '+43', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(16, 'Azerbaijan', 'AZ', '+994', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(17, 'Bahamas', 'BS', '+1242', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(18, 'Bahrain', 'BH', '+973', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(19, 'Bangladesh', 'BD', '+880', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(20, 'Barbados', 'BB', '+1246', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(21, 'Belarus', 'BY', '+375', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(22, 'Belgium', 'BE', '+32', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(23, 'Belize', 'BZ', '+501', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(24, 'Benin', 'BJ', '+229', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(25, 'Bermuda', 'BM', '+1441', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(26, 'Bhutan', 'BT', '+975', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(27, 'Bolivia, Plurinational State of', 'BO', '+591', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', '+599', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(29, 'Bosnia and Herzegovina', 'BA', '+387', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(30, 'Botswana', 'BW', '+267', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(31, 'Bouvet Island', 'BV', '+55', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(32, 'Brazil', 'BR', '+55', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(33, 'British Indian Ocean Territory', 'IO', '+246', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(34, 'Brunei Darussalam', 'BN', '+673', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(35, 'Bulgaria', 'BG', '+359', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(36, 'Burkina Faso', 'BF', '+226', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(37, 'Burundi', 'BI', '+257', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(38, 'Cambodia', 'KH', '+855', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(39, 'Cameroon', 'CM', '+237', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(40, 'Canada', 'CA', '+1', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(41, 'Cape Verde', 'CV', '+238', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(42, 'Cayman Islands', 'KY', '+1345', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(43, 'Central African Republic', 'CF', '+236', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(44, 'Chad', 'TD', '+235', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(45, 'Chile', 'CL', '+56', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(46, 'China', 'CN', '+86', '11', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(47, 'Christmas Island', 'CX', '+61', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(48, 'Cocos (Keeling) Islands', 'CC', '+61', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(49, 'Colombia', 'CO', '+57', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(50, 'Comoros', 'KM', '+269', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(51, 'Congo', 'CG', '+242', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(52, 'Congo, the Democratic Republic of the', 'CD', '+243', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(53, 'Cook Islands', 'CK', '+682', '5', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(54, 'Costa Rica', 'CR', '+506', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(55, 'Côte d\'Ivoire', 'CI', '+225', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(56, 'Croatia', 'HR', '+385', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(57, 'Cuba', 'CU', '+53', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(58, 'Curaçao', 'CW', '+599', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(59, 'Cyprus', 'CY', '+357', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(60, 'Czech Republic', 'CZ', '+420', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(61, 'Denmark', 'DK', '+45', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(62, 'Djibouti', 'DJ', '+253', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(63, 'Dominica', 'DM', '+1767', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(64, 'Dominican Republic', 'DO', '+1809', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(65, 'Ecuador', 'EC', '+593', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(66, 'Egypt', 'EG', '+20', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(67, 'El Salvador', 'SV', '+503', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(68, 'Equatorial Guinea', 'GQ', '+240', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(69, 'Eritrea', 'ER', '+291', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(70, 'Estonia', 'EE', '+372', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(71, 'Eswatini', 'SZ', '+268', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(72, 'Ethiopia', 'ET', '+251', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(73, 'Falkland Islands (Malvinas)', 'FK', '+500', '5', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(74, 'Faroe Islands', 'FO', '+298', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(75, 'Fiji', 'FJ', '+679', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(76, 'Finland', 'FI', '+358', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(77, 'France', 'FR', '+33', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(78, 'French Guiana', 'GF', '+594', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(79, 'French Polynesia', 'PF', '+689', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(80, 'French Southern Territories', 'TF', '+262', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(81, 'Gabon', 'GA', '+241', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(82, 'Gambia', 'GM', '+220', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(83, 'Georgia', 'GE', '+995', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(84, 'Germany', 'DE', '+49', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(85, 'Ghana', 'GH', '+233', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(86, 'Gibraltar', 'GI', '+350', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(87, 'Greece', 'GR', '+30', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(88, 'Greenland', 'GL', '+299', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(89, 'Grenada', 'GD', '+1473', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(90, 'Guadeloupe', 'GP', '+590', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(91, 'Guam', 'GU', '+1671', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(92, 'Guatemala', 'GT', '+502', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(93, 'Guernsey', 'GG', '+44', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(94, 'Guinea', 'GN', '+224', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(95, 'Guinea-Bissau', 'GW', '+245', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(96, 'Guyana', 'GY', '+592', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(97, 'Haiti', 'HT', '+509', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(98, 'Heard Island and McDonald Islands', 'HM', '+672', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(99, 'Holy See (Vatican City State)', 'VA', '+39', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(100, 'Honduras', 'HN', '+504', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(101, 'Hong Kong', 'HK', '+852', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(102, 'Hungary', 'HU', '+36', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(103, 'Iceland', 'IS', '+354', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(104, 'India', 'IN', '+91', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(105, 'Indonesia', 'ID', '+62', '11', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(106, 'Iran', 'IR', '+98', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(107, 'Iraq', 'IQ', '+964', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(108, 'Ireland', 'IE', '+353', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(109, 'Isle of Man', 'IM', '+44', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(110, 'Israel', 'IL', '+972', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(111, 'Italy', 'IT', '+39', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(112, 'Jamaica', 'JM', '+1876', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(113, 'Japan', 'JP', '+81', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(114, 'Jersey', 'JE', '+44', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(115, 'Jordan', 'JO', '+962', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(116, 'Kazakhstan', 'KZ', '+7', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(117, 'Kenya', 'KE', '+254', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(118, 'Kiribati', 'KI', '+686', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(119, 'North Korea', 'KP', '+850', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(120, 'South Korea', 'KR', '+82', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(121, 'Kuwait', 'KW', '+965', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(122, 'Kyrgyzstan', 'KG', '+996', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(123, 'Lao People\'s Democratic Republic', 'LA', '+856', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(124, 'Latvia', 'LV', '+371', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(125, 'Lebanon', 'LB', '+961', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(126, 'Lesotho', 'LS', '+266', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(127, 'Liberia', 'LR', '+231', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(128, 'Libya', 'LY', '+218', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(129, 'Liechtenstein', 'LI', '+423', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(130, 'Lithuania', 'LT', '+370', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(131, 'Luxembourg', 'LU', '+352', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(132, 'Macao', 'MO', '+853', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(133, 'Macedonia, the Former Yugoslav Republic of', 'MK', '+389', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(134, 'Madagascar', 'MG', '+261', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(135, 'Malawi', 'MW', '+265', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(136, 'Malaysia', 'MY', '+60', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(137, 'Maldives', 'MV', '+960', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(138, 'Mali', 'ML', '+223', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(139, 'Malta', 'MT', '+356', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(140, 'Marshall Islands', 'MH', '+692', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(141, 'Martinique', 'MQ', '+596', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(142, 'Mauritania', 'MR', '+222', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(143, 'Mauritius', 'MU', '+230', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(144, 'Mayotte', 'YT', '+262', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(145, 'Mexico', 'MX', '+52', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(146, 'Micronesia', 'FM', '+691', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(147, 'Moldova, Republic of', 'MD', '+373', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(148, 'Monaco', 'MC', '+377', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(149, 'Mongolia', 'MN', '+976', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(150, 'Montenegro', 'ME', '+382', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(151, 'Montserrat', 'MS', '+1664', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(152, 'Morocco', 'MA', '+212', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(153, 'Mozambique', 'MZ', '+258', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(154, 'Myanmar', 'MM', '+95', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(155, 'Namibia', 'NA', '+264', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(156, 'Nauru', 'NR', '+674', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(157, 'Nepal', 'NP', '+977', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(158, 'Netherlands', 'NL', '+31', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(159, 'New Caledonia', 'NC', '+687', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(160, 'New Zealand', 'NZ', '+64', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(161, 'Nicaragua', 'NI', '+505', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(162, 'Niger', 'NE', '+227', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(163, 'Nigeria', 'NG', '+234', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(164, 'Niue', 'NU', '+683', '4', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(165, 'Norfolk Island', 'NF', '+672', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(166, 'Northern Mariana Islands', 'MP', '+1670', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(167, 'Norway', 'NO', '+47', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(168, 'Oman', 'OM', '+968', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(169, 'Pakistan', 'PK', '+92', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(170, 'Palau', 'PW', '+680', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(171, 'Palestine, State of', 'PS', '+970', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(172, 'Panama', 'PA', '+507', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(173, 'Papua New Guinea', 'PG', '+675', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(174, 'Paraguay', 'PY', '+595', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(175, 'Peru', 'PE', '+51', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(176, 'Philippines', 'PH', '+63', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(177, 'Pitcairn', 'PN', '+64', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(178, 'Poland', 'PL', '+48', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(179, 'Portugal', 'PT', '+351', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(180, 'Puerto Rico', 'PR', '+1939', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(181, 'Qatar', 'QA', '+974', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(182, 'Réunion', 'RE', '+262', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(183, 'Romania', 'RO', '+40', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(184, 'Russian Federation', 'RU', '+7', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(185, 'Rwanda', 'RW', '+250', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(186, 'Saint Barthélemy', 'BL', '+590', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(187, 'Saint Helena', 'SH', '+290', '4', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(188, 'Saint Kitts and Nevis', 'KN', '+1869', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(189, 'Saint Lucia', 'LC', '+1758', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(190, 'Saint Martin (French part)', 'MF', '+590', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(191, 'Saint Pierre and Miquelon', 'PM', '+508', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(192, 'Saint Vincent and the Grenadines', 'VC', '+1784', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(193, 'Samoa', 'WS', '+685', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(194, 'San Marino', 'SM', '+378', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(195, 'Sao Tome and Principe', 'ST', '+239', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(196, 'Saudi Arabia', 'SA', '+966', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(197, 'Senegal', 'SN', '+221', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(198, 'Serbia', 'RS', '+381', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(199, 'Seychelles', 'SC', '+248', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(200, 'Sierra Leone', 'SL', '+232', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(201, 'Singapore', 'SG', '+65', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(202, 'Sint Maarten (Dutch part)', 'SX', '+1721', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(203, 'Slovakia', 'SK', '+421', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(204, 'Slovenia', 'SI', '+386', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(205, 'Solomon Islands', 'SB', '+677', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(206, 'Somalia', 'SO', '+252', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(207, 'South Africa', 'ZA', '+27', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(208, 'South Georgia and the South Sandwich Islands', 'GS', '+500', '5', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(209, 'South Sudan', 'SS', '+211', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(210, 'Spain', 'ES', '+34', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(211, 'Sri Lanka', 'LK', '+94', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(212, 'Sudan', 'SD', '+249', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(213, 'Suriname', 'SR', '+597', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(214, 'Svalbard and Jan Mayen', 'SJ', '+47', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(215, 'Sweden', 'SE', '+46', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(216, 'Switzerland', 'CH', '+41', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(217, 'Syrian Arab Republic', 'SY', '+963', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(218, 'Taiwan, Province of China', 'TW', '+886', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(219, 'Tajikistan', 'TJ', '+992', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(220, 'Tanzania, United Republic of', 'TZ', '+255', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(221, 'Thailand', 'TH', '+66', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(222, 'Timor-Leste', 'TL', '+670', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(223, 'Togo', 'TG', '+228', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(224, 'Tokelau', 'TK', '+690', '4', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(225, 'Tonga', 'TO', '+676', '5', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(226, 'Trinidad and Tobago', 'TT', '+1868', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(227, 'Tunisia', 'TN', '+216', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(228, 'Turkey', 'TR', '+90', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(229, 'Turkmenistan', 'TM', '+993', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(230, 'Tuvalu', 'TV', '+688', '5', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(231, 'Uganda', 'UG', '+256', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(232, 'Ukraine', 'UA', '+380', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(233, 'United Arab Emirates', 'AE', '+971', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(234, 'United Kingdom', 'GB', '+44', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(235, 'United States', 'US', '+1', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(236, 'Uruguay', 'UY', '+598', '8', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(237, 'Uzbekistan', 'UZ', '+998', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(238, 'Vanuatu', 'VU', '+678', '7', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(239, 'Venezuela', 'VE', '+58', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(240, 'Viet Nam', 'VN', '+84', '10', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(241, 'Wallis and Futuna', 'WF', '+681', '6', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(242, 'Western Sahara', 'EH', '+212', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(243, 'Yemen', 'YE', '+967', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(244, 'Zambia', 'ZM', '+260', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(245, 'Zimbabwe', 'ZW', '+263', '9', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Chief Executive Officer (CEO)', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(2, 'Chief Operating Officer (COO)', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(3, 'Chief Financial Officer (CFO)', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(4, 'Chief Technology Officer (CTO)', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(5, 'Chief Marketing Officer (CMO)', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(6, 'Managing Director', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(7, 'General Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(8, 'Operations Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(9, 'Project Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(10, 'Product Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(11, 'Human Resources Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(12, 'Finance Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(13, 'Software Engineer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(14, 'Senior Software Engineer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(15, 'Frontend Developer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(16, 'Backend Developer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(17, 'Full Stack Developer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(18, 'UI/UX Designer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(19, 'Quality Assurance Engineer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(20, 'Data Analyst', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(21, 'Data Scientist', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(22, 'Network Administrator', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(23, 'Marketing Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(24, 'Sales Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(25, 'Customer Support Representative', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(26, 'Accountant', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(27, 'Business Analyst', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(28, 'Legal Advisor', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(29, 'Consultant', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(30, 'Research Analyst', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(31, 'Content Writer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(32, 'Digital Marketing Specialist', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(33, 'Social Media Manager', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(34, 'Administrative Assistant', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(35, 'Receptionist', 'active', '2025-09-11 04:43:57', '2025-09-11 04:43:57'),
(36, 'Security Officer', 'active', '2025-09-11 04:43:57', '2025-09-11 04:43:57'),
(37, 'Office Assistant', 'active', '2025-09-11 04:43:57', '2025-09-11 04:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `visibility` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Why Is SEO Important For Small Business ?', '<p>Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus</p>', 1, '2025-09-11 04:49:25', '2025-10-30 11:33:36'),
(2, 'How Do I Choose The Best SEO Agency ?', '<p>Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus</p>', 1, '2025-09-11 04:49:39', '2025-10-30 11:34:02'),
(3, 'Better Security & Faster Server', '<p>Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus</p>', 1, '2025-09-11 04:49:50', '2025-10-30 11:34:28'),
(4, 'Deployment With in Few Minutes', '<p>Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus</p>', 1, '2025-10-30 11:34:47', '2025-10-30 11:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Male', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(2, 'Female', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(3, 'Non-Binary', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(4, 'Transgender Male', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(5, 'Transgender Female', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(6, 'Genderfluid', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(7, 'Agender', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(8, 'Bigender', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(9, 'Two-Spirit', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(10, 'Androgynous', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(11, 'Demiboy', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(12, 'Demigirl', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(13, 'Genderqueer', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(14, 'Intersex', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(15, 'Pangender', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(16, 'Neutrois', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(17, 'Questioning', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(18, 'Other', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(19, 'Prefer Not to Say', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `linkedin_url` varchar(500) DEFAULT NULL,
  `current_job_place` varchar(255) DEFAULT NULL,
  `current_job_position` varchar(255) DEFAULT NULL,
  `current_salary` varchar(255) DEFAULT NULL,
  `yearofexperince` varchar(255) NOT NULL,
  `applied_for` varchar(255) NOT NULL,
  `expected_salary` varchar(255) NOT NULL,
  `resume_file` text NOT NULL,
  `covering_letter` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `firstname`, `lastname`, `email`, `phone`, `linkedin_url`, `current_job_place`, `current_job_position`, `current_salary`, `yearofexperince`, `applied_for`, `expected_salary`, `resume_file`, `covering_letter`, `created_at`, `updated_at`) VALUES
(1, 'Brandon', 'Mejia', 'fizyxybawy@mailinator.com', '+1 (733) 572-1079', 'https://www.papyzunacitygu.me', 'Molestiae dolores cu', 'Vel eiusmod dolor se', 'Quae hic vero tenetu', '2013', 'Odit doloribus digni', 'Nihil quaerat aut in', 'uploads/jobs/1762427471_sample.pdf', 'Voluptatum suscipit', '2025-11-06 06:11:11', '2025-11-06 06:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `iso_code` varchar(255) NOT NULL,
  `native_name` varchar(255) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `iso_code`, `native_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'English', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(2, 'Spanish', 'es', 'Español', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(3, 'French', 'fr', 'Français', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(4, 'Chinese', 'zh', '中文', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(5, 'Arabic', 'ar', 'العربية', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(6, 'Hindi', 'hi', 'हिन्दी', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(7, 'Russian', 'ru', 'Русский', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(8, 'Portuguese', 'pt', 'Português', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(9, 'Bengali', 'bn', 'বাংলা', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(10, 'Urdu', 'ur', 'اردو', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(11, 'Japanese', 'ja', '日本語', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(12, 'German', 'de', 'Deutsch', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(13, 'Korean', 'ko', '한국어', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(14, 'Turkish', 'tr', 'Türkçe', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(15, 'Italian', 'it', 'Italiano', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(16, 'Persian', 'fa', 'فارسی', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(17, 'Dutch', 'nl', 'Nederlands', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(18, 'Swedish', 'sv', 'Svenska', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(19, 'Greek', 'el', 'Ελληνικά', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(20, 'Hebrew', 'he', 'עברית', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(21, 'Thai', 'th', 'ไทย', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(22, 'Vietnamese', 'vi', 'Tiếng Việt', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(23, 'Polish', 'pl', 'Polski', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(24, 'Romanian', 'ro', 'Română', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(25, 'Hungarian', 'hu', 'Magyar', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(26, 'Czech', 'cs', 'Čeština', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(27, 'Finnish', 'fi', 'Suomi', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(28, 'Malay', 'ms', 'Bahasa Melayu', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(29, 'Indonesian', 'id', 'Bahasa Indonesia', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(30, 'Norwegian', 'no', 'Norsk', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(31, 'Danish', 'da', 'Dansk', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(32, 'Slovak', 'sk', 'Slovenčina', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(33, 'Serbian', 'sr', 'Српски', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(34, 'Bulgarian', 'bg', 'Български', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(35, 'Lithuanian', 'lt', 'Lietuvių', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(36, 'Latvian', 'lv', 'Latviešu', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(37, 'Estonian', 'et', 'Eesti', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(38, 'Croatian', 'hr', 'Hrvatski', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(39, 'Slovenian', 'sl', 'Slovenščina', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(40, 'Swahili', 'sw', 'Kiswahili', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(41, 'Afrikaans', 'af', 'Afrikaans', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(42, 'Albanian', 'sq', 'Shqip', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(43, 'Armenian', 'hy', 'Հայերեն', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(44, 'Georgian', 'ka', 'ქართული', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(45, 'Pashto', 'ps', 'پښتو', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(46, 'Kurdish', 'ku', 'Kurdî', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(47, 'Sindhi', 'sd', 'سنڌي', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(48, 'Tamil', 'ta', 'தமிழ்', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(49, 'Telugu', 'te', 'తెలుగు', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(50, 'Marathi', 'mr', 'मराठी', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(51, 'Gujarati', 'gu', 'ગુજરાતી', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `marital_statuses`
--

CREATE TABLE `marital_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marital_statuses`
--

INSERT INTO `marital_statuses` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Single', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(2, 'Married', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(3, 'Divorced', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(4, 'Widowed', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(5, 'Separated', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(6, 'Engaged', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(7, 'In a Relationship', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(8, 'It\'s Complicated', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(9, 'Domestic Partnership', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(10, 'Civil Union', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56'),
(11, 'Prefer Not to Say', 'active', '2025-09-11 04:43:56', '2025-09-11 04:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(161, '2014_10_12_000000_create_users_table', 1),
(162, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(163, '2019_08_19_000000_create_failed_jobs_table', 1),
(164, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(165, '2025_01_20_000000_create_live_videos_table', 1),
(166, '2025_01_20_000001_create_partners_table', 1),
(167, '2025_05_21_203520_create_permission_tables', 1),
(168, '2025_05_22_202511_create_countries_table', 1),
(169, '2025_05_22_202520_create_languages_table', 1),
(170, '2025_05_22_202529_create_genders_table', 1),
(171, '2025_05_22_202546_create_marital_statuses_table', 1),
(172, '2025_05_22_202636_create_designations_table', 1),
(173, '2025_05_22_202637_create_timezones_table', 1),
(174, '2025_05_22_202638_create_company_settings_table', 1),
(175, '2025_05_22_202645_create_profiles_table', 1),
(176, '2025_05_22_203629_create_system_settings_table', 1),
(177, '2025_05_22_210323_create_notifications_table', 1),
(178, '2025_07_21_141525_create_faqs_table', 1),
(179, '2025_07_21_141539_create_contacts_table', 1),
(180, '2025_07_21_162639_create_company_details_table', 1),
(181, '2025_07_21_163957_create_hero_sections_table', 1),
(182, '2025_07_21_175416_create_contact_sections_table', 1),
(183, '2025_07_22_133745_create_prefooter_sections_table', 1),
(184, '2025_07_22_140939_create_newsletters_table', 1),
(185, '2025_07_22_155254_create_visit_stats_table', 1),
(186, '2025_08_27_152246_create_about_sections_table', 1),
(187, '2025_08_27_163905_create_home_hero_sections_table', 1),
(188, '2025_09_01_161143_create_new_newsletters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsbars`
--

CREATE TABLE `newsbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsbars`
--

INSERT INTO `newsbars` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'WEB DEVELOPMENT', '2025-09-12 05:02:00', '2025-09-18 14:21:11'),
(2, 'APP DEVELOPMENT', '2025-09-12 05:02:10', '2025-09-18 14:21:16'),
(3, 'SEO', '2025-09-12 05:02:23', '2025-09-18 14:21:21'),
(4, 'GRAPHIC DESIGNING', '2025-09-12 05:02:40', '2025-09-18 14:19:33'),
(5, 'WEB DESIGNING', '2025-09-12 05:02:47', '2025-09-18 14:21:00'),
(6, 'CYBER SECURITY', '2025-09-18 14:21:58', '2025-09-18 14:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `new_newsletters`
--

CREATE TABLE `new_newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_newsletters`
--

INSERT INTO `new_newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'dfdf@sd.com', '2025-09-12 07:51:56', '2025-09-12 07:51:56'),
(2, 'dfdg@sddff.com', '2025-09-12 07:53:31', '2025-09-12 07:53:31'),
(3, 'sdsd@sdd.com', '2025-09-12 07:53:41', '2025-09-12 07:53:41'),
(4, 'sdsds@sddc.com', '2025-09-12 07:53:59', '2025-09-12 07:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `company_size` varchar(255) DEFAULT NULL,
  `dance_style` varchar(255) DEFAULT NULL,
  `dance_video` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-09-11 04:43:55', '2025-09-11 04:43:55'),
(2, 'individual', 'web', '2025-09-11 04:43:55', '2025-09-11 04:43:55'),
(3, 'company', 'web', '2025-09-11 04:43:55', '2025-09-11 04:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `faq_question` longtext DEFAULT NULL,
  `faq_answer` longtext DEFAULT NULL,
  `visibility` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading`, `slug`, `description`, `image`, `faq_question`, `faq_answer`, `visibility`, `created_at`, `updated_at`) VALUES
(10, 'Digital Marketing', 'digital-marketing', '<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<p>pellentesque vulputate malesuada dictumst fames interdum cursus an te tellus porta ullamcorper accumsan non eu adipiscing integer venenatis sagittis arcu curae finibus ridi culus aliquam velit lobortis senectus vitae sollicitudin sit consectetuer ultricies rutrum parturient pede nisi nascetur habitant netus quisque elementum inceptos nam felis penatibus feugiat</p>\n\n<h3>What We Provide</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<h3>The Challange</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<ul>\n	<li>Various analysis options.</li>\n	<li>Advance Data analysis operation.</li>\n</ul>\n\n<ul>\n	<li>Page Load (time, size, number of requests).</li>\n	<li>Advance Data analysis operation.</li>\n</ul>', 'uploads/services/1761037795_icon-1.png', '[\"Why Is SEO Important For Small Business ?\",\"How Do I Choose The Best SEO Agency\", \"Better Security And Faster Server\"]', '[\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\"]', 1, '2025-10-21 13:09:55', '2025-10-21 13:18:40'),
(11, 'SEO Analytics', 'seo-analytics', '<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<p>pellentesque vulputate malesuada dictumst fames interdum cursus an te tellus porta ullamcorper accumsan non eu adipiscing integer venenatis sagittis arcu curae finibus ridi culus aliquam velit lobortis senectus vitae sollicitudin sit consectetuer ultricies rutrum parturient pede nisi nascetur habitant netus quisque elementum inceptos nam felis penatibus feugiat</p>\n\n<h3>What We Provide</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<h3>The Challange</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<ul>\n	<li>Various analysis options.</li>\n	<li>Advance Data analysis operation.</li>\n</ul>\n\n<ul>\n	<li>Page Load (time, size, number of requests).</li>\n	<li>Advance Data analysis operation.</li>\n</ul>', 'uploads/services/1761037889_icon-2.png', '[\"Why Is SEO Important For Small Business ?\",\"How Do I Choose The Best SEO Agency\", \"Better Security And Faster Server\"]', '[\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\"]', 1, '2025-10-21 13:11:29', '2025-10-21 13:11:29'),
(12, 'Social Marketing', 'social-marketing', '<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<p>pellentesque vulputate malesuada dictumst fames interdum cursus an te tellus porta ullamcorper accumsan non eu adipiscing integer venenatis sagittis arcu curae finibus ridi culus aliquam velit lobortis senectus vitae sollicitudin sit consectetuer ultricies rutrum parturient pede nisi nascetur habitant netus quisque elementum inceptos nam felis penatibus feugiat</p>\n\n<h3>What We Provide</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<h3>The Challange</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<ul>\n	<li>Various analysis options.</li>\n	<li>Advance Data analysis operation.</li>\n</ul>\n\n<ul>\n	<li>Page Load (time, size, number of requests).</li>\n	<li>Advance Data analysis operation.</li>\n</ul>', 'uploads/services/1761037912_icon-3.png', '[\"Why Is SEO Important For Small Business ?\",\"How Do I Choose The Best SEO Agency\", \"Better Security And Faster Server\"]', '[\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\"]', 1, '2025-10-21 13:11:52', '2025-10-21 13:11:52'),
(13, 'Email Marketing', 'email-marketing', '<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<p>pellentesque vulputate malesuada dictumst fames interdum cursus an te tellus porta ullamcorper accumsan non eu adipiscing integer venenatis sagittis arcu curae finibus ridi culus aliquam velit lobortis senectus vitae sollicitudin sit consectetuer ultricies rutrum parturient pede nisi nascetur habitant netus quisque elementum inceptos nam felis penatibus feugiat</p>\n\n<h3>What We Provide</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<h3>The Challange</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<ul>\n	<li>Various analysis options.</li>\n	<li>Advance Data analysis operation.</li>\n</ul>\n\n<ul>\n	<li>Page Load (time, size, number of requests).</li>\n	<li>Advance Data analysis operation.</li>\n</ul>', 'uploads/services/1761037933_icon-4.png', '[\"Why Is SEO Important For Small Business ?\",\"How Do I Choose The Best SEO Agency\", \"Better Security And Faster Server\"]', '[\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\"]', 1, '2025-10-21 13:12:13', '2025-10-21 13:12:13'),
(14, 'Social Media Marketing', 'social-media-marketing', '<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<p>pellentesque vulputate malesuada dictumst fames interdum cursus an te tellus porta ullamcorper accumsan non eu adipiscing integer venenatis sagittis arcu curae finibus ridi culus aliquam velit lobortis senectus vitae sollicitudin sit consectetuer ultricies rutrum parturient pede nisi nascetur habitant netus quisque elementum inceptos nam felis penatibus feugiat</p>\n\n<h3>What We Provide</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<h3>The Challange</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<ul>\n	<li>Various analysis options.</li>\n	<li>Advance Data analysis operation.</li>\n</ul>\n\n<ul>\n	<li>Page Load (time, size, number of requests).</li>\n	<li>Advance Data analysis operation.</li>\n</ul>', 'uploads/services/1761037948_icon-5.png', '[\"Why Is SEO Important For Small Business ?\",\"How Do I Choose The Best SEO Agency\", \"Better Security And Faster Server\"]', '[\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\"]', 1, '2025-10-21 13:12:28', '2025-10-21 13:12:28'),
(15, 'Better audiences', 'better-audiences', '<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<p>pellentesque vulputate malesuada dictumst fames interdum cursus an te tellus porta ullamcorper accumsan non eu adipiscing integer venenatis sagittis arcu curae finibus ridi culus aliquam velit lobortis senectus vitae sollicitudin sit consectetuer ultricies rutrum parturient pede nisi nascetur habitant netus quisque elementum inceptos nam felis penatibus feugiat</p>\n\n<h3>What We Provide</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<h3>The Challange</h3>\n\n<p>At tempus aenean sapien torquent sed diam class efficitur mus morbi eros dictum quam augue ac laor eet ligula libero mi commodo nibh hac fermentum orci ad pharetra consequat justo duis turpis lorem elit dui consectetur magnis lacinia odio per placerat vestibulum volutpat mauris mollis primis imperdiet posu ere ex enim gravida cras congue</p>\n\n<ul>\n	<li>Various analysis options.</li>\n	<li>Advance Data analysis operation.</li>\n</ul>\n\n<ul>\n	<li>Page Load (time, size, number of requests).</li>\n	<li>Advance Data analysis operation.</li>\n</ul>', 'uploads/services/1761037963_icon-6.png', '[\"Why Is SEO Important For Small Business ?\",\"How Do I Choose The Best SEO Agency\", \"Better Security And Faster Server\"]', '[\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\",\"Nullam faucibus eleifend mi eu varius. Integer vel tincidunt massa, quis semper odio.Mauris et mollis quam. Nullam fringilla erat id ante commodo maximus\"]', 1, '2025-10-21 13:12:43', '2025-10-21 13:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `max_upload_size` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `currency_symbol_position` enum('prefix','postfix') NOT NULL DEFAULT 'prefix',
  `language_id` bigint(20) UNSIGNED DEFAULT NULL,
  `timezone_id` bigint(20) UNSIGNED DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `review` text DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `fullname`, `designation`, `image`, `review`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'markStefanie Rashford', 'Cliente', 'uploads/testimonials/1757672861_1.png', 'He utilizado Transporte Saeta tanto para viajes cortos como largos, y siempre me han brindado una experiencia tranquila, segura y cómoda. ¡Muy recomendable!.', 1, '2025-09-11 05:02:54', '2025-09-12 05:27:41'),
(2, 'Stefanie Rashford', 'Cliente', 'uploads/testimonials/1757672893_2.png', 'Reservé un viaje de larga distancia y fue una experiencia excelente. El conductor fue amable y el trayecto muy cómodo. ¡Definitivamente volveré a usar su servicio!', 1, '2025-09-12 05:28:13', '2025-09-12 05:28:13'),
(3, 'Stefanie Rashford', 'Cliente', 'uploads/testimonials/1757672928_3.png', 'Tenía algunas preguntas antes de reservar y su equipo de soporte respondió rápidamente y fue muy servicial. ¡Hizo que mi experiencia fuera aún mejor!', 1, '2025-09-12 05:28:48', '2025-09-12 05:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `timezones`
--

CREATE TABLE `timezones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `offset` varchar(255) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `provider` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `is_active`, `provider`, `provider_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$flBTjINPJK1oQ35NC60CmeVNyuyu.ya1I1eY/eHB467J7dfQgxene', NULL, 'active', NULL, NULL, '2025-09-11 04:43:55', '2025-09-11 04:43:55', NULL),
(2, 'John Doe', 'individual@example.com', 'john_individual', NULL, '$2y$10$5yellrcyEsFOF.I3vN/7hOITlzwssW.EtYlOsXgEiLQD1PuCKD7qW', NULL, 'active', NULL, NULL, '2025-09-11 04:43:56', '2025-09-11 04:43:56', NULL),
(3, 'ACME Corp', 'company@example.com', 'acme_company', NULL, '$2y$10$0GH1du7CnCfAj4BrPrnlnuxSgGbZlZqrkVT7a1vK4G8oKtLUM0am2', NULL, 'active', NULL, NULL, '2025-09-11 04:43:56', '2025-09-11 04:43:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visit_stats`
--

CREATE TABLE `visit_stats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_visits` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit_stats`
--

INSERT INTO `visit_stats` (`id`, `home_visits`, `created_at`, `updated_at`) VALUES
(1, 1971, '2025-09-12 08:07:51', '2025-11-06 07:09:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marital_statuses`
--
ALTER TABLE `marital_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `newsbars`
--
ALTER TABLE `newsbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_newsletters`
--
ALTER TABLE `new_newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `new_newsletters_email_unique` (`email`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`) USING HASH;

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_settings_language_id_foreign` (`language_id`),
  ADD KEY `system_settings_timezone_id_foreign` (`timezone_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timezones`
--
ALTER TABLE `timezones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `timezones_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `visit_stats`
--
ALTER TABLE `visit_stats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `marital_statuses`
--
ALTER TABLE `marital_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `newsbars`
--
ALTER TABLE `newsbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_newsletters`
--
ALTER TABLE `new_newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timezones`
--
ALTER TABLE `timezones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visit_stats`
--
ALTER TABLE `visit_stats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD CONSTRAINT `system_settings_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `system_settings_timezone_id_foreign` FOREIGN KEY (`timezone_id`) REFERENCES `timezones` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
