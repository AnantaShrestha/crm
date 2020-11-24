-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 12:01 PM
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
-- Database: `gcn_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `batch_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `batch_name`, `year`, `month`, `section`, `created_at`, `updated_at`) VALUES
(1, 'MBBS2019', '2019', 'April', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `batch_course`
--

CREATE TABLE `batch_course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batch_shift`
--

CREATE TABLE `batch_shift` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` int(10) UNSIGNED NOT NULL,
  `shift_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', NULL, NULL),
(2, 'AX', 'Åland Islands', NULL, NULL),
(3, 'AL', 'Albania', NULL, NULL),
(4, 'DZ', 'Algeria', NULL, NULL),
(5, 'AS', 'American Samoa', NULL, NULL),
(6, 'AD', 'Andorra', NULL, NULL),
(7, 'AO', 'Angola', NULL, NULL),
(8, 'AI', 'Anguilla', NULL, NULL),
(9, 'AQ', 'Antarctica', NULL, NULL),
(10, 'AG', 'Antigua and Barbuda', NULL, NULL),
(11, 'AR', 'Argentina', NULL, NULL),
(12, 'AM', 'Armenia', NULL, NULL),
(13, 'AW', 'Aruba', NULL, NULL),
(14, 'AU', 'Australia', NULL, NULL),
(15, 'AT', 'Austria', NULL, NULL),
(16, 'AZ', 'Azerbaijan', NULL, NULL),
(17, 'BS', 'Bahamas', NULL, NULL),
(18, 'BH', 'Bahrain', NULL, NULL),
(19, 'BD', 'Bangladesh', NULL, NULL),
(20, 'BB', 'Barbados', NULL, NULL),
(21, 'BY', 'Belarus', NULL, NULL),
(22, 'BE', 'Belgium', NULL, NULL),
(23, 'BZ', 'Belize', NULL, NULL),
(24, 'BJ', 'Benin', NULL, NULL),
(25, 'BM', 'Bermuda', NULL, NULL),
(26, 'BT', 'Bhutan', NULL, NULL),
(27, 'BO', 'Bolivia, Plurinational State of', NULL, NULL),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba', NULL, NULL),
(29, 'BA', 'Bosnia and Herzegovina', NULL, NULL),
(30, 'BW', 'Botswana', NULL, NULL),
(31, 'BV', 'Bouvet Island', NULL, NULL),
(32, 'BR', 'Brazil', NULL, NULL),
(33, 'IO', 'British Indian Ocean Territory', NULL, NULL),
(34, 'BN', 'Brunei Darussalam', NULL, NULL),
(35, 'BG', 'Bulgaria', NULL, NULL),
(36, 'BF', 'Burkina Faso', NULL, NULL),
(37, 'BI', 'Burundi', NULL, NULL),
(38, 'KH', 'Cambodia', NULL, NULL),
(39, 'CM', 'Cameroon', NULL, NULL),
(40, 'CA', 'Canada', NULL, NULL),
(41, 'CV', 'Cape Verde', NULL, NULL),
(42, 'KY', 'Cayman Islands', NULL, NULL),
(43, 'CF', 'Central African Republic', NULL, NULL),
(44, 'TD', 'Chad', NULL, NULL),
(45, 'CL', 'Chile', NULL, NULL),
(46, 'CN', 'China', NULL, NULL),
(47, 'CX', 'Christmas Island', NULL, NULL),
(48, 'CC', 'Cocos (Keeling) Islands', NULL, NULL),
(49, 'CO', 'Colombia', NULL, NULL),
(50, 'KM', 'Comoros', NULL, NULL),
(51, 'CG', 'Congo', NULL, NULL),
(52, 'CD', 'Congo, the Democratic Republic of the', NULL, NULL),
(53, 'CK', 'Cook Islands', NULL, NULL),
(54, 'CR', 'Costa Rica', NULL, NULL),
(55, 'CI', 'Côte d\'Ivoire', NULL, NULL),
(56, 'HR', 'Croatia', NULL, NULL),
(57, 'CU', 'Cuba', NULL, NULL),
(58, 'CW', 'Curaçao', NULL, NULL),
(59, 'CY', 'Cyprus', NULL, NULL),
(60, 'CZ', 'Czech Republic', NULL, NULL),
(61, 'DK', 'Denmark', NULL, NULL),
(62, 'DJ', 'Djibouti', NULL, NULL),
(63, 'DM', 'Dominica', NULL, NULL),
(64, 'DO', 'Dominican Republic', NULL, NULL),
(65, 'EC', 'Ecuador', NULL, NULL),
(66, 'EG', 'Egypt', NULL, NULL),
(67, 'SV', 'El Salvador', NULL, NULL),
(68, 'GQ', 'Equatorial Guinea', NULL, NULL),
(69, 'ER', 'Eritrea', NULL, NULL),
(70, 'EE', 'Estonia', NULL, NULL),
(71, 'ET', 'Ethiopia', NULL, NULL),
(72, 'FK', 'Falkland Islands (Malvinas)', NULL, NULL),
(73, 'FO', 'Faroe Islands', NULL, NULL),
(74, 'FJ', 'Fiji', NULL, NULL),
(75, 'FI', 'Finland', NULL, NULL),
(76, 'FR', 'France', NULL, NULL),
(77, 'GF', 'French Guiana', NULL, NULL),
(78, 'PF', 'French Polynesia', NULL, NULL),
(79, 'TF', 'French Southern Territories', NULL, NULL),
(80, 'GA', 'Gabon', NULL, NULL),
(81, 'GM', 'Gambia', NULL, NULL),
(82, 'GE', 'Georgia', NULL, NULL),
(83, 'DE', 'Germany', NULL, NULL),
(84, 'GH', 'Ghana', NULL, NULL),
(85, 'GI', 'Gibraltar', NULL, NULL),
(86, 'GR', 'Greece', NULL, NULL),
(87, 'GL', 'Greenland', NULL, NULL),
(88, 'GD', 'Grenada', NULL, NULL),
(89, 'GP', 'Guadeloupe', NULL, NULL),
(90, 'GU', 'Guam', NULL, NULL),
(91, 'GT', 'Guatemala', NULL, NULL),
(92, 'GG', 'Guernsey', NULL, NULL),
(93, 'GN', 'Guinea', NULL, NULL),
(94, 'GW', 'Guinea-Bissau', NULL, NULL),
(95, 'GY', 'Guyana', NULL, NULL),
(96, 'HT', 'Haiti', NULL, NULL),
(97, 'HM', 'Heard Island and McDonald Mcdonald Islands', NULL, NULL),
(98, 'VA', 'Holy See (Vatican City State)', NULL, NULL),
(99, 'HN', 'Honduras', NULL, NULL),
(100, 'HK', 'Hong Kong', NULL, NULL),
(101, 'HU', 'Hungary', NULL, NULL),
(102, 'IS', 'Iceland', NULL, NULL),
(103, 'IN', 'India', NULL, NULL),
(104, 'ID', 'Indonesia', NULL, NULL),
(105, 'IR', 'Iran, Islamic Republic of', NULL, NULL),
(106, 'IQ', 'Iraq', NULL, NULL),
(107, 'IE', 'Ireland', NULL, NULL),
(108, 'IM', 'Isle of Man', NULL, NULL),
(109, 'IL', 'Israel', NULL, NULL),
(110, 'IT', 'Italy', NULL, NULL),
(111, 'JM', 'Jamaica', NULL, NULL),
(112, 'JP', 'Japan', NULL, NULL),
(113, 'JE', 'Jersey', NULL, NULL),
(114, 'JO', 'Jordan', NULL, NULL),
(115, 'KZ', 'Kazakhstan', NULL, NULL),
(116, 'KE', 'Kenya', NULL, NULL),
(117, 'KI', 'Kiribati', NULL, NULL),
(118, 'KP', 'Korea, Democratic People\'s Republic of', NULL, NULL),
(119, 'KR', 'Korea, Republic of', NULL, NULL),
(120, 'KW', 'Kuwait', NULL, NULL),
(121, 'KG', 'Kyrgyzstan', NULL, NULL),
(122, 'LA', 'Lao People\'s Democratic Republic', NULL, NULL),
(123, 'LV', 'Latvia', NULL, NULL),
(124, 'LB', 'Lebanon', NULL, NULL),
(125, 'LS', 'Lesotho', NULL, NULL),
(126, 'LR', 'Liberia', NULL, NULL),
(127, 'LY', 'Libya', NULL, NULL),
(128, 'LI', 'Liechtenstein', NULL, NULL),
(129, 'LT', 'Lithuania', NULL, NULL),
(130, 'LU', 'Luxembourg', NULL, NULL),
(131, 'MO', 'Macao', NULL, NULL),
(132, 'MK', 'Macedonia, the Former Yugoslav Republic of', NULL, NULL),
(133, 'MG', 'Madagascar', NULL, NULL),
(134, 'MW', 'Malawi', NULL, NULL),
(135, 'MY', 'Malaysia', NULL, NULL),
(136, 'MV', 'Maldives', NULL, NULL),
(137, 'ML', 'Mali', NULL, NULL),
(138, 'MT', 'Malta', NULL, NULL),
(139, 'MH', 'Marshall Islands', NULL, NULL),
(140, 'MQ', 'Martinique', NULL, NULL),
(141, 'MR', 'Mauritania', NULL, NULL),
(142, 'MU', 'Mauritius', NULL, NULL),
(143, 'YT', 'Mayotte', NULL, NULL),
(144, 'MX', 'Mexico', NULL, NULL),
(145, 'FM', 'Micronesia, Federated States of', NULL, NULL),
(146, 'MD', 'Moldova, Republic of', NULL, NULL),
(147, 'MC', 'Monaco', NULL, NULL),
(148, 'MN', 'Mongolia', NULL, NULL),
(149, 'ME', 'Montenegro', NULL, NULL),
(150, 'MS', 'Montserrat', NULL, NULL),
(151, 'MA', 'Morocco', NULL, NULL),
(152, 'MZ', 'Mozambique', NULL, NULL),
(153, 'MM', 'Myanmar', NULL, NULL),
(154, 'NA', 'Namibia', NULL, NULL),
(155, 'NR', 'Nauru', NULL, NULL),
(156, 'NP', 'Nepal', NULL, NULL),
(157, 'NL', 'Netherlands', NULL, NULL),
(158, 'NC', 'New Caledonia', NULL, NULL),
(159, 'NZ', 'New Zealand', NULL, NULL),
(160, 'NI', 'Nicaragua', NULL, NULL),
(161, 'NE', 'Niger', NULL, NULL),
(162, 'NG', 'Nigeria', NULL, NULL),
(163, 'NU', 'Niue', NULL, NULL),
(164, 'NF', 'Norfolk Island', NULL, NULL),
(165, 'MP', 'Northern Mariana Islands', NULL, NULL),
(166, 'NO', 'Norway', NULL, NULL),
(167, 'OM', 'Oman', NULL, NULL),
(168, 'PK', 'Pakistan', NULL, NULL),
(169, 'PW', 'Palau', NULL, NULL),
(170, 'PS', 'Palestine, State of', NULL, NULL),
(171, 'PA', 'Panama', NULL, NULL),
(172, 'PG', 'Papua New Guinea', NULL, NULL),
(173, 'PY', 'Paraguay', NULL, NULL),
(174, 'PE', 'Peru', NULL, NULL),
(175, 'PH', 'Philippines', NULL, NULL),
(176, 'PN', 'Pitcairn', NULL, NULL),
(177, 'PL', 'Poland', NULL, NULL),
(178, 'PT', 'Portugal', NULL, NULL),
(179, 'PR', 'Puerto Rico', NULL, NULL),
(180, 'QA', 'Qatar', NULL, NULL),
(181, 'RE', 'Réunion', NULL, NULL),
(182, 'RO', 'Romania', NULL, NULL),
(183, 'RU', 'Russian Federation', NULL, NULL),
(184, 'RW', 'Rwanda', NULL, NULL),
(185, 'BL', 'Saint Barthélemy', NULL, NULL),
(186, 'SH', 'Saint Helena, Ascension and Tristan da Cunha', NULL, NULL),
(187, 'KN', 'Saint Kitts and Nevis', NULL, NULL),
(188, 'LC', 'Saint Lucia', NULL, NULL),
(189, 'MF', 'Saint Martin (French part)', NULL, NULL),
(190, 'PM', 'Saint Pierre and Miquelon', NULL, NULL),
(191, 'VC', 'Saint Vincent and the Grenadines', NULL, NULL),
(192, 'WS', 'Samoa', NULL, NULL),
(193, 'SM', 'San Marino', NULL, NULL),
(194, 'ST', 'Sao Tome and Principe', NULL, NULL),
(195, 'SA', 'Saudi Arabia', NULL, NULL),
(196, 'SN', 'Senegal', NULL, NULL),
(197, 'RS', 'Serbia', NULL, NULL),
(198, 'SC', 'Seychelles', NULL, NULL),
(199, 'SL', 'Sierra Leone', NULL, NULL),
(200, 'SG', 'Singapore', NULL, NULL),
(201, 'SX', 'Sint Maarten (Dutch part)', NULL, NULL),
(202, 'SK', 'Slovakia', NULL, NULL),
(203, 'SI', 'Slovenia', NULL, NULL),
(204, 'SB', 'Solomon Islands', NULL, NULL),
(205, 'SO', 'Somalia', NULL, NULL),
(206, 'ZA', 'South Africa', NULL, NULL),
(207, 'GS', 'South Georgia and the South Sandwich Islands', NULL, NULL),
(208, 'SS', 'South Sudan', NULL, NULL),
(209, 'ES', 'Spain', NULL, NULL),
(210, 'LK', 'Sri Lanka', NULL, NULL),
(211, 'SD', 'Sudan', NULL, NULL),
(212, 'SR', 'Suriname', NULL, NULL),
(213, 'SJ', 'Svalbard and Jan Mayen', NULL, NULL),
(214, 'SZ', 'Swaziland', NULL, NULL),
(215, 'SE', 'Sweden', NULL, NULL),
(216, 'CH', 'Switzerland', NULL, NULL),
(217, 'SY', 'Syrian Arab Republic', NULL, NULL),
(218, 'TW', 'Taiwan', NULL, NULL),
(219, 'TJ', 'Tajikistan', NULL, NULL),
(220, 'TZ', 'Tanzania, United Republic of', NULL, NULL),
(221, 'TH', 'Thailand', NULL, NULL),
(222, 'TL', 'Timor-Leste', NULL, NULL),
(223, 'TG', 'Togo', NULL, NULL),
(224, 'TK', 'Tokelau', NULL, NULL),
(225, 'TO', 'Tonga', NULL, NULL),
(226, 'TT', 'Trinidad and Tobago', NULL, NULL),
(227, 'TN', 'Tunisia', NULL, NULL),
(228, 'TR', 'Turkey', NULL, NULL),
(229, 'TM', 'Turkmenistan', NULL, NULL),
(230, 'TC', 'Turks and Caicos Islands', NULL, NULL),
(231, 'TV', 'Tuvalu', NULL, NULL),
(232, 'UG', 'Uganda', NULL, NULL),
(233, 'UA', 'Ukraine', NULL, NULL),
(234, 'AE', 'United Arab Emirates', NULL, NULL),
(235, 'GB', 'United Kingdom', NULL, NULL),
(236, 'US', 'United States', NULL, NULL),
(237, 'UM', 'United States Minor Outlying Islands', NULL, NULL),
(238, 'UY', 'Uruguay', NULL, NULL),
(239, 'UZ', 'Uzbekistan', NULL, NULL),
(240, 'VU', 'Vanuatu', NULL, NULL),
(241, 'VE', 'Venezuela, Bolivarian Republic of', NULL, NULL),
(242, 'VN', 'Viet Nam', NULL, NULL),
(243, 'VG', 'Virgin Islands, British', NULL, NULL),
(244, 'VI', 'Virgin Islands, U.S.', NULL, NULL),
(245, 'WF', 'Wallis and Futuna', NULL, NULL),
(246, 'EH', 'Western Sahara', NULL, NULL),
(247, 'YE', 'Yemen', NULL, NULL),
(248, 'ZM', 'Zambia', NULL, NULL),
(249, 'ZW', 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `code`, `slug`, `duration`, `fees`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Test', '', '', '', '2000', 'this is test', 1, NULL, '2020-01-07 22:45:18', '2020-03-13 14:45:44'),
(5, 'Haad', '', '', '', '9000', 'here we can enroll for haad exam and for licencing to work in abroad', 1, NULL, '2020-03-13 14:08:58', '2020-03-13 14:08:58'),
(6, 'DHAMCQ', '', '', '', '11500', 'Registered nurse', 1, NULL, '2020-03-13 14:28:13', '2020-03-13 14:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `student_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 2, 6),
(6, 2, 7),
(7, 2, 9),
(8, 2, 13),
(9, 2, 14),
(10, 3, 15),
(11, 5, 18),
(12, 2, 18),
(13, 2, 19),
(14, 5, 6),
(15, 5, 20),
(16, 2, 20),
(17, 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachments` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `message`, `attachments`, `created_at`, `updated_at`) VALUES
(1, 'TRYING', '<p>dfghjk</p>\n', 'public/uploads/emailattachments/HRHtGZggWu5kkxbyfTilUca6dqt3FHBEX38lbE3Z.jpeg', '2019-12-24 16:31:46', '2019-12-24 16:31:46'),
(2, 'Utkarsha Shukla', '<p>hello</p>\n', '', '2020-03-13 09:57:51', '2020-03-13 09:57:51'),
(3, 'Lydia Morse', '<p>das</p>\n', '', '2020-03-13 10:29:45', '2020-03-13 10:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `phone`, `date`, `remarks`, `visited`, `created_at`, `updated_at`) VALUES
(3, 'Rems', '7ekln@qyyu.com', '7933750493', NULL, 'hello', 1, '2020-03-06 12:23:47', '2020-03-06 12:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries_enquiry_categories`
--

CREATE TABLE `enquiries_enquiry_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `enquiry_id` int(10) UNSIGNED NOT NULL,
  `enquiry_category_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries_enquiry_categories`
--

INSERT INTO `enquiries_enquiry_categories` (`id`, `enquiry_id`, `enquiry_category_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries_responses`
--

CREATE TABLE `enquiries_responses` (
  `id` int(10) UNSIGNED NOT NULL,
  `enquiry_id` int(10) UNSIGNED NOT NULL,
  `enquiry_response_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries_responses`
--

INSERT INTO `enquiries_responses` (`id`, `enquiry_id`, `enquiry_response_id`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries_source`
--

CREATE TABLE `enquiries_source` (
  `id` int(10) UNSIGNED NOT NULL,
  `enquiry_id` int(10) UNSIGNED NOT NULL,
  `enquiry_source_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries_source`
--

INSERT INTO `enquiries_source` (`id`, `enquiry_id`, `enquiry_source_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_categories`
--

CREATE TABLE `enquiry_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry_categories`
--

INSERT INTO `enquiry_categories` (`id`, `cat_name`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Normal Enquiry', 1, 'normal-enquiry', NULL, NULL),
(3, 'Instagramf', 1, 'instagramf', '2020-03-12 15:34:25', '2020-03-13 10:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_sources`
--

CREATE TABLE `enquiry_sources` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry_sources`
--

INSERT INTO `enquiry_sources` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Onlined', '1', NULL, '2020-03-13 10:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `exam_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `received_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `amount`, `received_by`, `paid_by`, `expense_category`, `created_at`, `updated_at`) VALUES
(2, 5000, 'fff', 'IMS Admin', 1, '2020-01-07 22:47:10', '2020-01-07 22:47:10'),
(3, 200, 'MS Admin', 'IMS Admin', 1, '2020-03-08 15:46:04', '2020-03-08 15:46:04'),
(4, 93, 'Incididunt exercitat', 'Rerum provident aut', 3, '2020-03-08 15:46:12', '2020-03-08 15:46:12'),
(5, 10000, 'Utkarsha Shukla', 'Pratap Kc', 1, '2020-03-12 15:02:12', '2020-03-12 15:02:12'),
(6, 12121, 'sdsadsa', 'IMS Admin', 1, '2020-11-09 04:02:00', '2020-11-09 04:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_categories`
--

INSERT INTO `expense_categories` (`id`, `expense_category_name`, `created_at`, `updated_at`) VALUES
(1, 'Salary', NULL, NULL),
(2, 'Rent', NULL, NULL),
(3, 'Internet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `student_id`, `title`, `amount`, `created_at`, `updated_at`) VALUES
(1, 2, '[\"MBBS\"]', 2000, '2019-12-23 16:44:37', '2019-12-23 16:44:37'),
(2, 3, '[\"MBBS\"]', 2000, '2019-12-23 17:06:38', '2019-12-23 17:06:38'),
(3, 4, '[\"MBBS\"]', 2000, '2019-12-23 17:07:32', '2019-12-23 17:07:32'),
(4, 5, '[\"MBBS\"]', 2000, '2019-12-25 12:29:54', '2019-12-25 12:29:54'),
(5, 6, '[\"Test\",\"Haad\"]', 11000, '2020-01-07 22:46:27', '2020-03-13 14:59:04'),
(6, 7, '[\"Test\"]', 2222, '2020-01-08 11:33:08', '2020-01-08 11:33:08'),
(7, 9, '[\"Test\"]', 2222, '2020-02-18 11:44:07', '2020-02-18 11:44:07'),
(8, 13, '[\"Test\"]', 2222, '2020-03-12 14:36:48', '2020-03-12 14:36:48'),
(9, 14, '[\"Test\"]', 2222, '2020-03-12 15:38:33', '2020-03-12 15:38:33'),
(10, 15, '[\"Illana Strickland\"]', 239, '2020-03-13 10:28:04', '2020-03-13 10:28:04'),
(11, 18, '[\"Test\",\"Haad\"]', 11222, '2020-03-13 14:25:17', '2020-03-13 14:25:17'),
(12, 19, '[\"Test\"]', 2222, '2020-03-13 14:30:05', '2020-03-13 14:30:05'),
(15, 0, 'sdd', 2222, '2020-03-13 14:57:08', '2020-03-13 14:57:08'),
(16, 20, '[\"Test\",\"Haad\"]', 11000, '2020-03-19 14:47:46', '2020-03-19 14:47:46'),
(17, 21, '[\"Test\"]', 2000, '2020-03-19 16:12:39', '2020-03-19 16:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(3, '2019_10_22_105315_create_roles_table', 1),
(4, '2019_10_23_075017_create_courses_table', 1),
(5, '2019_10_23_103411_create_site_settings_table', 1),
(6, '2019_10_23_111905_create_batches_table', 1),
(7, '2019_10_24_060501_create_shifts_table', 1),
(8, '2019_10_24_062356_create_sections_table', 1),
(9, '2019_10_31_072056_create_enquiry_categories_table', 1),
(10, '2019_10_31_103803_create_batch_course_table', 1),
(11, '2019_11_01_103958_create_batch_shift_table', 1),
(12, '2019_11_01_105745_create_enquiries_table', 1),
(13, '2019_11_03_062951_create_enquiry_sources_table', 1),
(14, '2019_11_03_064208_create_teachers_table', 1),
(15, '2019_11_03_065635_create_enquiries_source_table', 1),
(16, '2019_11_03_104721_create_course_teacher_table', 1),
(17, '2019_11_03_105556_create_teacher_categories_table', 1),
(18, '2019_11_03_132242_create_enquiries_enquiry_categories_table', 1),
(19, '2019_11_03_132553_create_enquiries_responses_table', 1),
(20, '2019_11_04_061026_create_students_table', 1),
(21, '2019_11_04_061138_create_student_categories_table', 1),
(22, '2019_11_04_065059_create_invoices_table', 1),
(23, '2019_11_04_074402_create_expense_categories_table', 1),
(24, '2019_11_04_094812_create_course_student_table', 1),
(25, '2019_11_04_100542_create_expenses_table', 1),
(26, '2019_11_05_071848_create_fees_table', 1),
(27, '2019_11_05_072623_create_sms_templates_table', 1),
(28, '2019_11_05_103914_create_emails_table', 1),
(29, '2019_11_07_082614_create_exams_table', 1),
(30, '2019_11_07_100531_create_jobs_table', 1),
(31, '2019_11_08_105722_create_results_table', 1),
(32, '2019_11_12_091959_create_teacher_attendances_table', 1),
(33, '2019_11_13_063523_create_staff_attendances_table', 1),
(34, '2019_11_13_065651_create_student_attendances_table', 1),
(35, '2019_11_13_071943_create_teacher_batch_table', 1),
(36, '2019_11_15_111034_create_section_student_table', 1),
(37, '2019_11_16_075914_create_payments_table', 1),
(38, '2019_12_20_113953_create_countries_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `payment_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `received_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_of_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `payment_code`, `payment_title`, `amount_paid`, `received_by`, `paid_by`, `mode_of_payment`, `document_number`, `doc_image`, `created_at`, `updated_at`) VALUES
(4, 7, '#PAYMENT-1', 'asdasd', 1000, 'IMS Admin', 'sabin', 'cash', NULL, NULL, '2020-01-08 11:33:46', '2020-01-08 11:33:46'),
(3, 6, '#PAYMENT-1', 'asdsf', 2000, 'IMS Admin', 'asddfds', 'cash', NULL, NULL, '2020-01-07 22:48:48', '2020-01-07 22:48:48'),
(5, 7, '#PAYMENT-1', 'sabin test pay', 100, 'IMS Admin', 'sabin', 'cash', NULL, NULL, '2020-01-08 12:23:25', '2020-01-08 12:23:25'),
(6, 6, '#PAYMENT-1', 'New payment', 3000, 'IMS Admin', 'test', 'cash', NULL, NULL, '2020-02-17 11:05:07', '2020-02-17 11:05:07'),
(7, 7, '#PAYMENT-1', 'Aut quo lorem eos di', 0, 'Autem adipisicing in', 'Velit facere eos des', 'cash', NULL, NULL, '2020-02-17 15:19:07', '2020-02-17 15:19:07'),
(8, 7, '#PAYMENT-1', 'Aut quo lorem eos di', 7787, 'Autem adipisicing in', 'Velit facere eos des', 'cash', NULL, NULL, '2020-02-17 15:19:18', '2020-02-17 15:19:18'),
(9, 9, '#PAYMENT-1', 'Et ullamco voluptas', 0, 'Optio est aut anim', 'Eius consectetur ut', 'bank_deposite', '45545', NULL, '2020-02-18 11:44:44', '2020-02-18 11:44:44'),
(10, 9, '#PAYMENT-1', 'Et ullamco voluptas', 787, 'Optio est aut anim', 'Eius consectetur ut', 'cash', '45545', NULL, '2020-02-18 11:45:28', '2020-02-18 11:45:28'),
(11, 9, '#PAYMENT-1', 'Qui proident dolore', 877887, 'Repellendus Dolorem', 'Sit ducimus labore', 'cheque', NULL, NULL, '2020-02-20 15:31:28', '2020-02-20 15:31:28'),
(12, 7, '#PAYMENT-1', 'admisiiojn', 2000, 'IMS Admin', 'chakra', 'cash', NULL, NULL, '2020-02-20 15:39:39', '2020-02-20 15:39:39'),
(13, 9, '#PAYMENT-1', 'library', 2000, 'IMS Admin', 'chakra', 'cash', NULL, NULL, '2020-02-20 16:30:51', '2020-02-20 16:30:51'),
(14, 7, '#PAYMENT-1', 'admisiiojn', -200, 'IMS Admin', 'chakra', 'cash', NULL, NULL, '2020-02-20 16:33:45', '2020-02-20 16:33:45'),
(15, 7, '#PAYMENT-1', 'yo', 999, 'IMS Admin', 'fgj', 'cash', NULL, NULL, '2020-03-08 11:54:01', '2020-03-08 11:54:01'),
(16, 7, '#PAYMENT-1', 'Et modi accusamus de', 788788, 'Quasi vero iure ut e', 'Qui laborum asperior', 'cash', NULL, NULL, '2020-03-08 12:16:51', '2020-03-08 12:16:51'),
(17, 9, '#PAYMENT-1', 'kk', 236, 'IMS Admin', 'l', 'cash', NULL, NULL, '2020-03-08 14:01:30', '2020-03-08 14:01:30'),
(18, 7, '#PAYMENT-1', 'admission', 5000, 'IMS Admin', 'asdasdasd', 'cash', NULL, NULL, '2020-03-08 15:44:49', '2020-03-08 15:44:49'),
(19, 7, '#PAYMENT-1', 'sad', 3000, 'IMS Admin', 'asd', 'cash', NULL, NULL, '2020-03-12 09:26:21', '2020-03-12 09:26:21'),
(20, 9, 'IN2020/03/12/2', 'dfghjk', 0, 'IMS Admin', 'bnbn', 'cash', NULL, NULL, '2020-03-12 09:37:33', '2020-03-12 09:37:33'),
(21, 9, 'IN2020/03/12/3', 'dfghjk', 4565, 'IMS Admin', 'bnbn', 'cash', NULL, NULL, '2020-03-12 09:37:48', '2020-03-12 09:37:48'),
(22, 7, 'IN2020/03/12/4', 'Naya', 1000, 'IMS Admin', 'Gaire', 'cash', NULL, NULL, '2020-03-12 09:56:09', '2020-03-12 09:56:09'),
(23, 7, 'IN2020/03/12/5', 'website', 5000, 'Green Computing Nepal', 'sabin koju', 'cash', NULL, NULL, '2020-03-12 14:25:21', '2020-03-12 14:25:21'),
(24, 7, 'IN2020/03/12/6', 'website', 5000, 'Green Computing Nepal', 'sabin koju', 'cash', NULL, NULL, '2020-03-12 14:27:16', '2020-03-12 14:27:16'),
(29, 19, 'IN2020/03/13/1', 'Salary', 5000, 'IMS Admin', 'dsgsgg', 'cash', NULL, NULL, '2020-03-13 15:13:48', '2020-03-13 15:13:48'),
(30, 6, 'IN2020/07/06/1', 'HR Related Work', 30, 'IMS Admin', 'xcdfcz', 'cash', NULL, NULL, '2020-07-06 13:05:08', '2020-07-06 13:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `result` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Staff', NULL, NULL),
(3, 'Customers', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_students` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `no_of_students`, `created_at`, `updated_at`) VALUES
(1, 'A', 25, NULL, NULL),
(2, 'B', 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_student`
--

CREATE TABLE `section_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` int(10) UNSIGNED NOT NULL,
  `shift_available` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `shift_available`, `created_at`, `updated_at`) VALUES
(1, 'Morning', NULL, NULL),
(2, 'Day', NULL, NULL),
(3, 'Evening', NULL, NULL),
(4, 'Night', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `company_name`, `short_name`, `logo`, `tagline`, `favicon`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Green Computing Nepal', 'GCN', NULL, NULL, NULL, 'admin@gcn.com.np', '9801004752', 'Pragati Marg (Way to Liberty College), Anamnagar, Hanumansthan, Kathmandu - Nepal', NULL, '2020-03-13 10:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `sms_templates`
--

CREATE TABLE `sms_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Shram', 'hi to all', '2020-03-13 09:46:24', '2020-03-13 09:46:24'),
(3, 'Melanie Keith', 'Ratione ut quo a pla', '2020-03-13 10:31:55', '2020-03-13 10:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendances`
--

CREATE TABLE `staff_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `attendance` enum('Present','Absent','Excused') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_attendances`
--

INSERT INTO `staff_attendances` (`id`, `user_id`, `attendance`, `remarks`, `date`, `created_at`, `updated_at`) VALUES
(1, 19, 'Present', NULL, '2020-03-13', '2020-03-13 12:36:44', '2020-03-13 12:36:44'),
(2, 20, 'Present', NULL, '2020-03-13', '2020-03-13 12:36:44', '2020-03-13 12:36:44'),
(3, 19, 'Present', NULL, '2020-03-12', '2020-03-13 14:32:20', '2020-03-13 14:32:20'),
(4, 20, 'Present', NULL, '2020-03-12', '2020-03-13 14:32:20', '2020-03-13 14:32:20'),
(5, 22, 'Present', NULL, '2020-03-12', '2020-03-13 14:32:20', '2020-03-13 14:32:20'),
(6, 19, 'Present', NULL, '2020-03-20', '2020-03-20 12:24:58', '2020-03-20 12:24:58'),
(7, 23, 'Present', NULL, '2020-03-20', '2020-03-20 12:24:58', '2020-03-20 12:24:58'),
(8, 20, 'Present', NULL, '2020-03-20', '2020-03-20 12:24:58', '2020-03-20 12:24:58'),
(9, 22, 'Present', NULL, '2020-03-20', '2020-03-20 12:24:58', '2020-03-20 12:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_category_id` int(10) UNSIGNED NOT NULL,
  `batch_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `ifuser` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `types` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `first_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `gender`, `dob`, `email`, `email_verified_at`, `password`, `image`, `phone`, `address`, `student_category_id`, `batch_id`, `section_id`, `ifuser`, `due`, `company_name`, `group_name`, `business_number`, `type`, `types`, `registration_no`, `pan`, `city`, `state`, `country_id`, `first_contact_person`, `first_designation`, `first_email`, `first_phone`, `second_contact_person`, `second_designation`, `second_email`, `second_phone`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', '', '', '0000-00-00', 'gcn@gmail.com', NULL, '', NULL, '9861099309', 'kathmandu', 0, 0, 0, 0, 0, 'Green Computing Nepal', 'Laravel', '987654321', 'Supplier', 'company', '312121', '98765432', 'kirtipur', 'province-03', 156, 'aakash', 'laravel core team', 'aakash@gmail.com', '9843002345', NULL, NULL, NULL, NULL, 1, NULL, '2019-12-23 16:43:31', '2020-01-07 10:56:59', '2020-01-07 10:56:59'),
(2, 'surendra', 'gaire', 'male', '2052-01-12', 'test@gmail.com', NULL, '$2y$10$GNlka8hmynpvDNEi7cN20.28abZgTo1EMdOp2Lc.tfOslFu0FyuWq', NULL, '9861099309', 'kathmandu', 0, 0, 0, 1, 2000, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2019-12-23 16:44:37', '2020-01-07 10:56:37', '2020-01-07 10:56:37'),
(3, 'Saroj', 'bhusal', 'male', '2019-12-10', 'sarojbhusal31@gmail.com', NULL, '$2y$10$dcDXeOL0v07vr4zhWcufyuCb3Qf3AWYpKGIvDS.TCL/EofQqcYg2C', NULL, '123456789', 'ananamnaaar', 0, 0, 0, 1, 0, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2019-12-23 17:06:38', '2020-01-07 10:56:41', '2020-01-07 10:56:41'),
(4, 'sdfghj', 'dfghj', 'male', '2019-12-03', 'aakroid@gmail.com', NULL, '$2y$10$6Xz4jU6Kt0v7H/73rBAr6.6R2vwDR3ZtnBHVQZMcL67wRh6KSTxLa', NULL, '123456789', 'ananamnaaar', 0, 0, 0, 1, 2000, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2019-12-23 17:07:32', '2020-01-07 10:56:45', '2020-01-07 10:56:45'),
(5, 'asdfgh', 'sdfghj', 'male', '2019-12-02', 'asdfgf@asdf.com', NULL, '$2y$10$l1PtL6br30jLLipUwLHraOvCxfNuKQsCm7K6S61K7qvQWk/MZY8MS', NULL, '123456789', 'ananamnaaar', 0, 0, 0, 1, 2000, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2019-12-25 12:29:54', '2020-01-07 10:56:49', '2020-01-07 10:56:49'),
(6, 'yo yo', 'honeysingh', 'male', '2020-03-12', 'asd@asd.com', NULL, '$2y$10$yGEU9MBXAPZpr7Cp6zvKGeVQEF9qlEBkTy2.b.Y.qt431ToLrxUfS', NULL, '98000000', 'test', 0, 0, 0, 1, 10970, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-01-07 22:46:27', '2020-07-06 13:05:08', NULL),
(7, 'sabin', 'koju', 'male', '2020-01-08', 'sabinkoju7@gmail.com', NULL, '$2y$10$ZYHvjwPCU5tDe7x63ohOAeZx0PNPLD7gyjxf3UirmSxI8r2rbgZJ6', NULL, '9849929625', 'ktm', 0, 0, 0, 1, -817252, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-01-08 11:33:08', '2020-03-12 14:27:16', NULL),
(8, 'shikha', 'gurung', '', '0000-00-00', 'shikhagurung6@gmail.com', NULL, '', NULL, '9808851775', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-01-19 15:29:48', '2020-02-17 11:03:38', '2020-02-17 11:03:38'),
(9, 'Craig', 'Shepherd', 'male', '0000-00-00', 'qiqiseber@mailinator.com', NULL, '$2y$10$E6NE7Aj6FgpLgrIQtY1sruTk7TuUZL/nInfwTYZbscJldKkIYLyZ6', NULL, '386', 'Iusto quia eos dolor', 0, 0, 0, 1, -883253, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-02-18 11:44:07', '2020-03-13 14:29:23', '2020-03-13 14:29:23'),
(10, '', '', '', '0000-00-00', 'joh@usro.com', NULL, '', NULL, '9879781237', 'minilog', 0, 0, 0, 0, 0, 'pillo', 'nHlqMlbZ9S', '1042257411', 'Supplier', 'company', 'oCiUGxwvBh', 'MiboMYCa0N', '0wOFPt3Qw5', 'oLIqPRFdre', 10, '0811675111', '524XUKgFL1', 'aghj@gmail.com', '9218815205', '6343550853', 'iKozYIR4YF', 'ksghsak@gmail.com', '6657525675', 1, NULL, '2020-03-02 17:22:08', '2020-03-02 17:22:08', NULL),
(11, '', '', '', '0000-00-00', 'casujankr@outlook.com', NULL, '', NULL, '9851143063', 'chapali ghumti', 0, 0, 0, 0, 0, 'Easy Lekha Pvt. Ltd.', 'Website', '215769/75/076', 'Client', '', '215769/75/076', '609541513', 'Kathmandu', '2', 156, 'Sujan Kumar Acharya', 'CEO', 'casujankr@outlook.com', '9851143063', 'Bishesh Bibu Acharya', 'Manager', 'cabsishesh@gmail.com', '9851143090', 1, NULL, '2020-03-12 14:05:07', '2020-03-13 14:23:32', NULL),
(12, '', '', '', '0000-00-00', 'utkarshashukla@gmail.com', NULL, '', NULL, '9851158547', 'chapali ghumti', 0, 0, 0, 0, 0, 'Easy Lekha', 'Website', '215769/75/076', 'Client', '', '215769/75/076', '609541513', 'Kathmandu', '3', 156, 'Sujan Kumar Acharya', 'CEO', 'casujanckr@outlook.com', '9851143063', 'Bishesh Bibu Acharya', 'Manager', 'cabsishesh@gmail.com', '9851143090', 1, NULL, '2020-03-12 14:17:15', '2020-03-12 14:19:59', NULL),
(13, 'Manju', 'Nagarkoti', 'female', '1996-10-08', 'mnagarkoti20@gmail.com', NULL, '$2y$10$x54BxDJwwdjfcknIA76XIeN.4D5DTfZuk4NdJ/U2baUx6jIkZ8x8a', 'QUU7Q956iv73sQT1LNTo.jpg', '9860339617', 'Chapali Bhadrakali,Budhanilkantha', 0, 0, 0, 1, 4444, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-03-12 14:36:48', '2020-03-13 14:50:21', NULL),
(14, 'Utkarsha', 'Shukla', 'male', '1997-01-27', 'utkarsha@gmail.com', NULL, '$2y$10$7UGLuw97oFOSbuFXUveNn.eotGauJ6ZV5SHIZvqCW4cK6tw01UqiG', NULL, '9803770204', 'kirtipur', 0, 0, 0, 1, 2222, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-03-12 15:38:33', '2020-03-12 15:40:09', '2020-03-12 15:40:09'),
(15, 'Sage', 'Pruitt', 'others', '0000-00-00', 'xynevaluf@mailinator.com', NULL, '$2y$10$fggCa.afh4RJIXZ/pQKel.T/bvlq.V0sPqNao1qgoepgdgobyeEcm', NULL, '897', 'Tempore sit itaque', 0, 0, 0, 1, 239, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-03-13 10:28:04', '2020-03-13 10:28:04', NULL),
(16, '', '', '', '0000-00-00', 'wemahynedu@mailinator.net', NULL, '', NULL, '+1 (622) 917-2891', 'Sunt quae qui debiti', 0, 0, 0, 0, 0, 'Hardin', 'Maile Langley', '311', 'Client', '', 'Et in consequatur te', 'Quo veniam eaque ve', 'Est do cupiditate q', 'Eos consectetur ita', 136, 'Aliquip veniam impe', 'Sit beatae perspicia', 'dofyz@mailinator.com', '+1 (928) 277-7808', 'Voluptate aut et sun', 'Possimus eum nulla', 'derohukal@mailinator.com', '+1 (285) 269-2202', 1, NULL, '2020-03-13 10:28:30', '2020-03-13 14:23:14', '2020-03-13 14:23:14'),
(17, '', '', '', '0000-00-00', 'oetprepnepal@gmail.com', NULL, '', NULL, '9843536139', 'Anamanagar', 0, 0, 0, 0, 0, 'OET Preparation Nepal Pvt. Ltd', 'Client', '123', 'Client', '', '1223', '2345', 'Kathmandu', 'Bagmati', 156, 'Pramila KC', 'OET Instructor', 'pramila.kc@gmail.com', '985273473', 'Pratap KC', 'Admin', 'impratapkc@gmail.com', '9801004652', 1, NULL, '2020-03-13 14:22:23', '2020-03-13 14:22:23', NULL),
(18, 'Tom', 'Jerry', 'others', '1995-08-10', 'tomnjerry@gmail.com', NULL, '$2y$10$6RS.ysYhVLMXWGrC9TUBdexAFA8K8DgIjHf5IT9v//TjuRnFq2G3W', 'UKrGCgDPhLyS02i2sV12.jpg', '45678345', 'pokhara', 0, 0, 0, 1, 11222, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-03-13 14:25:17', '2020-03-13 14:46:57', NULL),
(19, 'mero', 'website', 'male', '2020-03-02', 'merowebsite@gmail.com', NULL, '$2y$10$CCVdf1zHdQ9QsxCat3NtwOtc.4YqHvZmXdoi6U50aCwxdqKiAFo6W', 'kLd5jvcIhIRvHNq9uJ3p.jpg', '9803961735', '\'s-Gravendijkdreef 132', 0, 0, 0, 1, -2778, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-03-13 14:30:05', '2020-03-13 15:13:48', NULL),
(20, 'Cameron', 'Cannon', 'others', '0000-00-00', 'laxoryno@mailinator.com', NULL, '$2y$10$fZ0Ows/cJfOwO0KhQ1wNEOmoMHhW8eTc/mI9surM.jiJZmUMAzsTy', NULL, '589', 'Fugiat numquam tempo', 0, 0, 0, 0, 11000, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-03-19 14:47:46', '2020-03-19 14:47:46', NULL),
(21, 'Hannah', 'Gonzalez', 'others', '0000-00-00', 'nela@mailinator.com', NULL, '$2y$10$ryWt0be/gZlFFUoiWbtoYOMA9WFoT7HM9yfqUBIEbZl5cumYq.zhC', NULL, '860', 'Aut nihil molestiae', 0, 0, 0, 0, 2000, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, NULL, NULL, NULL, 0, NULL, '2020-03-19 16:12:39', '2020-03-19 16:12:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `attendance` enum('Present','Absent','Excused') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_categories`
--

CREATE TABLE `student_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_categories`
--

INSERT INTO `student_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Doctor', '1', NULL, NULL),
(2, 'Nurse', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_category_id` int(10) UNSIGNED NOT NULL,
  `timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifuser` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendances`
--

CREATE TABLE `teacher_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `attendance` enum('Present','Absent','Excused') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_batch`
--

CREATE TABLE `teacher_batch` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_categories`
--

CREATE TABLE `teacher_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_categories`
--

INSERT INTO `teacher_categories` (`id`, `cat_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Permanent', 'Active', NULL, NULL),
(2, 'Volunteer', 'Active', NULL, NULL),
(3, 'Temporary', 'Active', NULL, NULL),
(4, 'Visiting', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `phone`, `address`, `role_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IMS Admin', 'admin@admin.com', NULL, '$2y$10$/8gI5hxu5p4Km25HzjdOceExn.R/F4eNo9dZBnqWsP8QvQ0sHsGw.', '11TZYEWs5Kl1WdT7JIQc.png', '9803961735', 'Anamanagar, Kathamandu', 1, NULL, '2019-12-23 16:41:38', '2019-12-24 10:56:55', NULL),
(11, 'Utkarsha Shukla', 'iutkarshashukla@gmail.com', NULL, '$2y$10$8bGuwxZpsHGdMXkkfkjhzu0R9GntYGYKTTm0zGCIbWwEotpItqrUS', NULL, '9818827276', 'kirtipur', 3, NULL, '2020-03-12 15:12:13', '2020-03-13 10:20:51', '2020-03-13 10:20:51'),
(22, 'merowebsite', 'merowebsite@gmail.com', NULL, '$2y$10$gEcuf0l2zPsuO2x85pi2s.RJBtRJK2JuGiGk/yoxvNNXZgVa43Vlm', NULL, '9803961735', '\'s-Gravendijkdreef 132', 2, NULL, '2020-03-13 14:30:05', '2020-03-13 14:31:48', NULL),
(10, 'ManjuNagarkoti', 'mnagarkoti20@gmail.com', NULL, '$2y$10$CA0LcSI3awS0WmLgIaWW.et2g3.Vm.Vh7CjWTb5fkfymYtQeZoPGy', NULL, '9860339617', 'Chapali Bhadrakali,Budhanilkantha', 3, NULL, '2020-03-12 14:36:48', '2020-03-12 15:36:42', NULL),
(7, 'yo yohoneysingh', 'asd@asd.com', NULL, '$2y$10$v.W3dL9O8w9h7Rs5ugPieuOHkwlcCD6LHGGsBrpmiLtNxwE6Mjghu', NULL, '98000000', 'test', 3, NULL, '2020-01-07 22:46:27', '2020-03-13 14:26:25', NULL),
(8, 'sabinkoju', 'sabinkoju7@gmail.com', NULL, '$2y$10$.V6PoTUZbH5eKR.vXBwqtOiJ1Qt84V0H5eg.js7DenoaE6YNPS6Oy', NULL, '9849929625', 'ktm', 3, NULL, '2020-01-08 11:33:08', '2020-01-08 11:33:08', NULL),
(12, 'Utkarsha Shukla', 'utkar24@gmail.com', NULL, '$2y$10$6PcmqBb6tNPXH26umBMIzOMO.aIiYhkPsR2iIARrKmAOxllE.Pda.', NULL, '9818827276', 'kirtipur', 3, NULL, '2020-03-12 15:12:51', '2020-03-12 15:12:51', NULL),
(13, 'Sairav Shivanand', 'abc@gmail.com', NULL, '$2y$10$abTqoaOV6G7cCzwbZ3XXhOhR5hSmw5UFj.dS/HdHe/3sLqPl66hM6', NULL, '9803961735', 'kirtipur', 2, NULL, '2020-03-12 15:18:34', '2020-03-12 15:18:46', '2020-03-12 15:18:46'),
(14, 'UtkarshaShukla', 'utkarshashukla@gmail.com', NULL, '$2y$10$OKn4Oz4EIJF7JsKzQ71creOJXlqFVdMJHNJel5DOtOarRNO.FgGNS', NULL, '9803770204', 'kirtipur', 4, NULL, '2020-03-12 15:38:19', '2020-03-12 15:38:19', NULL),
(15, 'UtkarshaShukla', 'shukla@gmail.com', NULL, '$2y$10$jR528qNNHeDHLcS7sHEkuO5Q5a0VOQlYNecDbOGKpvffsEDywXQ2K', NULL, '9803770204', 'kirtipur', 4, NULL, '2020-03-12 15:38:33', '2020-03-12 15:38:33', NULL),
(17, 'Alyssa Contreras', 'gymybo@mailinator.net', NULL, '$2y$10$hhBRBb73AseYICwwi4V.5u9bvXoIGcus7u2HnX6evoZCZpGguLHNS', NULL, '386', 'At sed ad fugit bla', 3, NULL, '2020-03-13 10:20:29', '2020-03-13 10:20:29', NULL),
(18, 'SagePruitt', 'xynevaluf@mailinator.com', NULL, '$2y$10$ciWA1z714sgCPfaWEudVZuNAVNpcJBGc2jh3N2BqvgBXr8u8/m8sW', NULL, '897', 'Tempore sit itaque', 4, NULL, '2020-03-13 10:28:04', '2020-03-13 10:28:04', NULL),
(19, 'Isabelle Andrews', 'qynogaqoqy@mailinator.com', NULL, '$2y$10$htjxhYvJ.PO3BVPTfpT5le02npBZv0iXWBza23.6.7Waa7FEkzWai', NULL, '83', 'Tempore architecto', 2, NULL, '2020-03-13 10:34:07', '2020-03-13 10:34:07', NULL),
(20, 'Lev Ferguson', 'minyt@mailinator.com', NULL, '$2y$10$GWZf0LP3DWvJ4cZ7hrRq0uIk/B0OxHZwx.gsJdd0bRcHBk.atBKfC', NULL, '253', 'Dolor voluptates eli', 2, NULL, '2020-03-13 12:36:00', '2020-03-13 12:36:00', NULL),
(21, 'TomJerry', 'tomnjerry@gmail.com', NULL, '$2y$10$PLOk8zj2.iTx4HRMqQTWYuaHDdipnmq03FTCeRfWXli.acn7goN/e', NULL, '45678345', 'pokhara', 3, NULL, '2020-03-13 14:25:17', '2020-03-13 14:30:55', NULL),
(23, 'Keely Bruce', 'nikokywihe@mailinator.com', NULL, '$2y$10$6YMlSEiNvC8EepcOLbzVbe9aARfiGNGY6CSYa1bnMaTHqKl3eosHC', 'FiS6iZdavYfI7QfneOCm.jpg', '199', 'Id ea quis consequa', 2, NULL, '2020-03-15 11:58:30', '2020-03-15 11:58:30', NULL),
(24, 'Utkarsha Shukla', '123@gmail.com', NULL, '$2y$10$Zye0c/eobAywwwFCUFgGZuS8hWrxRaQu02mG3D9OSavfSXn22gGmC', NULL, '9818827276', 'panga', 1, NULL, '2020-03-20 12:34:20', '2020-03-20 12:34:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_course`
--
ALTER TABLE `batch_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `batch_course_batch_id_foreign` (`batch_id`),
  ADD KEY `batch_course_course_id_foreign` (`course_id`);

--
-- Indexes for table `batch_shift`
--
ALTER TABLE `batch_shift`
  ADD PRIMARY KEY (`id`),
  ADD KEY `batch_shift_batch_id_foreign` (`batch_id`),
  ADD KEY `batch_shift_shift_id_foreign` (`shift_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_code_index` (`code`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_student_id_foreign` (`student_id`),
  ADD KEY `course_student_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_teacher_teacher_id_foreign` (`teacher_id`),
  ADD KEY `course_teacher_course_id_foreign` (`course_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries_enquiry_categories`
--
ALTER TABLE `enquiries_enquiry_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiries_enquiry_categories_enquiry_id_foreign` (`enquiry_id`),
  ADD KEY `enquiries_enquiry_categories_enquiry_category_id_foreign` (`enquiry_category_id`);

--
-- Indexes for table `enquiries_responses`
--
ALTER TABLE `enquiries_responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiries_responses_enquiry_id_foreign` (`enquiry_id`),
  ADD KEY `enquiries_responses_enquiry_response_id_foreign` (`enquiry_response_id`);

--
-- Indexes for table `enquiries_source`
--
ALTER TABLE `enquiries_source`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enquiries_source_enquiry_id_foreign` (`enquiry_id`),
  ADD KEY `enquiries_source_enquiry_source_id_foreign` (`enquiry_source_id`);

--
-- Indexes for table `enquiry_categories`
--
ALTER TABLE `enquiry_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_sources`
--
ALTER TABLE `enquiry_sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_course_id_foreign` (`course_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_expense_category_foreign` (`expense_category`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fees_student_id_foreign` (`student_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_student_id_foreign` (`student_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_exam_id_foreign` (`exam_id`),
  ADD KEY `results_student_id_foreign` (`student_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_student`
--
ALTER TABLE `section_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_student_student_id_foreign` (`student_id`),
  ADD KEY `section_student_section_id_foreign` (`section_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_templates`
--
ALTER TABLE `sms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_attendances`
--
ALTER TABLE `staff_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_attendances_user_id_foreign` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_attendances_student_id_foreign` (`student_id`),
  ADD KEY `student_attendances_course_id_foreign` (`course_id`);

--
-- Indexes for table `student_categories`
--
ALTER TABLE `student_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `teacher_attendances`
--
ALTER TABLE `teacher_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_attendances_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teacher_batch`
--
ALTER TABLE `teacher_batch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_batch_batch_id_foreign` (`batch_id`),
  ADD KEY `teacher_batch_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teacher_categories`
--
ALTER TABLE `teacher_categories`
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
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batch_course`
--
ALTER TABLE `batch_course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch_shift`
--
ALTER TABLE `batch_shift`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `course_teacher`
--
ALTER TABLE `course_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiries_enquiry_categories`
--
ALTER TABLE `enquiries_enquiry_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiries_responses`
--
ALTER TABLE `enquiries_responses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiries_source`
--
ALTER TABLE `enquiries_source`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry_categories`
--
ALTER TABLE `enquiry_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry_sources`
--
ALTER TABLE `enquiry_sources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_student`
--
ALTER TABLE `section_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_templates`
--
ALTER TABLE `sms_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_attendances`
--
ALTER TABLE `staff_attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_categories`
--
ALTER TABLE `student_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_attendances`
--
ALTER TABLE `teacher_attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_batch`
--
ALTER TABLE `teacher_batch`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_categories`
--
ALTER TABLE `teacher_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
