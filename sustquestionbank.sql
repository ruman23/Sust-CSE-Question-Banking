-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 03:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sustquestionbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_archive`
--

CREATE TABLE `academic_archive` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `teacher` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `academic_archive`
--

INSERT INTO `academic_archive` (`id`, `user_id`, `subject`, `semester`, `session`, `teacher`, `type`, `created_at`, `updated_at`) VALUES
(31, 1, 'C', '1-1', '2013', 'Mr.  XYZ', 'Final', NULL, NULL),
(32, 1, 'java', '1-1', '2012', 'Mr.  XYZ', '1', NULL, NULL),
(33, 1, 'java', '1-2', '2012', 'Mr.  XYZ', '1', NULL, NULL),
(34, 1, 'java', '2-1', '2012', 'Mr.  XYZ', '1', NULL, NULL),
(35, 1, 'java', '2-2', '2012', 'Mr.  XYZ', '1', NULL, NULL),
(36, 1, 'C', '3-1', '2012', 'Mr.  XYZ', '1', NULL, NULL),
(37, 1, 'S-w', '3-2', '2012', 'Mr.  XYZ', 'Final', NULL, NULL),
(38, 1, 'S-w', '4-1', '2012', 'Mr.  XYZ', 'Final', NULL, NULL),
(39, 1, 'C', '4-1', '2012', 'Mr.  XYZ', 'Final', NULL, NULL),
(40, 1, 'C', '1-2', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(41, 1, 'java', '2-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(42, 1, 'java', '2-2', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(43, 1, 'S-w', '3-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(44, 1, 'S-w', '3-2', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(45, 1, 'C', '3-2', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(46, 1, 'C', '1-1', '2014', 'Mr.  XYZ', 'Final', NULL, NULL),
(47, 1, 'C', '1-2', '2014', 'Mr.  XYZ', 'Final', NULL, NULL),
(48, 1, 'C', '2-1', '2014', 'Mr.  XYZ', 'Final', NULL, NULL),
(49, 1, 'java', '2-2', '2014', 'Mr.  XYZ', 'Final', NULL, NULL),
(50, 1, 'S-w', '3-1', '2014', 'Mr.  XYZ', 'Final', NULL, NULL),
(51, 1, 'C', '1-1', '2015', 'Mr.  XYZ', 'Final', NULL, NULL),
(52, 1, 'C', '1-1', '2016', 'Mr.  XYZ', 'Final', NULL, NULL),
(53, 1, 'C', '1-1', '2011', 'Mr.  XYZ', 'Final', NULL, NULL),
(54, 1, 'C', '1-1', '2010', 'Mr.  XYZ', 'Final', NULL, NULL),
(55, 1, 'subject', '1-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(56, 1, 'java', '1-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(57, 1, 'S-w', '1-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(58, 3, 'C', '1-1', '2010', 'Mr.  XYZ', 'Final', NULL, NULL),
(59, 3, 'java', '1-1', '2011', 'Mr.  XYZ', 'Final', NULL, NULL),
(60, 3, 'C', '1-1', '2012', 'Mr.  XYZ', '2', NULL, NULL),
(61, 3, 'C', '1-2', '2012', 'Mr.  XYZ', '2', NULL, NULL),
(62, 3, 'C', '2-1', '2012', 'Mr.  XYZ', '2', NULL, NULL),
(63, 3, 'java', '2-2', '2012', 'Mr.  XYZ', '2', NULL, NULL),
(64, 3, 'S-w', '3-1', '2012', 'Mr.  XYZ', '2', NULL, NULL),
(65, 3, 'C', '1-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(66, 3, 'C', '1-2', '2013', 'Mr.  XYZ', '3', NULL, NULL),
(67, 3, 'C', '2-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(68, 3, 'C', '2-2', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(69, 3, 'java', '3-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(70, 3, 'S-w', '3-2', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(71, 3, 'subject', '4-1', '2013', 'Mr.  XYZ', '2', NULL, NULL),
(72, 3, 'C', '1-1', '2014', 'Mr.  XYZ', '2', NULL, NULL),
(73, 3, 'C', '1-1', '2015', 'Mr.  XYZ', '2', NULL, NULL),
(74, 3, 'C', '1-1', '2016', 'Mr.  XYZ', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `academic_archive_file`
--

CREATE TABLE `academic_archive_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `foreign_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `academic_archive_file`
--

INSERT INTO `academic_archive_file` (`id`, `foreign_id`, `file`, `created_at`, `updated_at`) VALUES
(37, 31, '/img/question/tt1 (1).jpg', NULL, NULL),
(38, 31, '/img/question/tt1 (2).jpg', NULL, NULL),
(39, 31, '/img/question/tt1 (3).jpg', NULL, NULL),
(40, 31, '/img/question/tt1 1.jpg', NULL, NULL),
(41, 32, '/img/question/2012_11.jpg', NULL, NULL),
(42, 33, '/img/question/2012_12.jpg', NULL, NULL),
(43, 34, '/img/question/2012_21.jpg', NULL, NULL),
(44, 35, '/img/question/2012_22.jpg', NULL, NULL),
(45, 36, '/img/question/2012_31.jpg', NULL, NULL),
(46, 37, '/img/question/2012_32.jpg', NULL, NULL),
(47, 38, '/img/question/2012_41.jpg', NULL, NULL),
(48, 39, '/img/question/2012_42.jpg', NULL, NULL),
(50, 40, '/img/question/2013_12.jpg', NULL, NULL),
(51, 41, '/img/question/2013_21.jpg', NULL, NULL),
(52, 42, '/img/question/2013_22.jpg', NULL, NULL),
(53, 43, '/img/question/2013_31.jpg', NULL, NULL),
(54, 44, '/img/question/2013_32.jpg', NULL, NULL),
(55, 45, '/img/question/2013_41.jpg', NULL, NULL),
(56, 46, '/img/question/2014_11.jpg', NULL, NULL),
(57, 47, '/img/question/2014_12.jpg', NULL, NULL),
(58, 48, '/img/question/2014_21.jpg', NULL, NULL),
(59, 49, '/img/question/2013_22.jpg', NULL, NULL),
(60, 50, '/img/question/2014_31.jpg', NULL, NULL),
(61, 51, '/img/question/2015_11.jpg', NULL, NULL),
(62, 52, '/img/question/2016_11.jpg', NULL, NULL),
(63, 53, '/img/question/2016_11.jpg', NULL, NULL),
(64, 54, '/img/question/2012_11.jpg', NULL, NULL),
(65, 55, '/img/question/2013_11.jpg', NULL, NULL),
(66, 56, '/img/question/2013_11.jpg', NULL, NULL),
(67, 57, '/img/question/2013_11.jpg', NULL, NULL),
(68, 58, '/img/question/tt1 (1).jpg', NULL, NULL),
(69, 59, '/img/question/tt1 (2).jpg', NULL, NULL),
(70, 60, '/img/question/tt1 (1).jpg', NULL, NULL),
(71, 60, '/img/question/tt1 (2).jpg', NULL, NULL),
(72, 60, '/img/question/tt1 (3).jpg', NULL, NULL),
(73, 60, '/img/question/tt1 1.jpg', NULL, NULL),
(74, 61, '/img/question/2012_12.jpg', NULL, NULL),
(75, 62, '/img/question/2012_21.jpg', NULL, NULL),
(76, 63, '/img/question/2012_22.jpg', NULL, NULL),
(77, 64, '/img/question/2012_31.jpg', NULL, NULL),
(78, 65, '/img/question/2013_11.jpg', NULL, NULL),
(79, 66, '/img/question/2013_12.jpg', NULL, NULL),
(80, 67, '/img/question/2013_21.jpg', NULL, NULL),
(81, 68, '/img/question/2013_22.jpg', NULL, NULL),
(82, 69, '/img/question/2013_31.jpg', NULL, NULL),
(83, 70, '/img/question/2013_32.jpg', NULL, NULL),
(84, 71, '/img/question/2013_41.jpg', NULL, NULL),
(85, 72, '/img/question/2014_11.jpg', NULL, NULL),
(86, 73, '/img/question/2015_11.jpg', NULL, NULL),
(87, 74, '/img/question/2016_11.jpg', NULL, NULL),
(88, 31, '/img/question/mahmud2014.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activity_numbers`
--

CREATE TABLE `activity_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ques_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `selected` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `ques_id`, `content`, `created_at`, `updated_at`, `selected`) VALUES
(1, 1, 13, 'Hey....', NULL, NULL, 0),
(2, 1, 13, 'Hey....', NULL, NULL, 0),
(3, 1, 13, 'Hey....', NULL, NULL, 0),
(4, 1, 13, 'hey....', NULL, NULL, 0),
(5, 1, 13, 'Hey.......', NULL, NULL, 0),
(6, 1, 13, 'Hey....', NULL, NULL, 0),
(7, 1, 13, 'Hey.....', NULL, NULL, 0),
(8, 1, 13, 'Because it is easy....', NULL, NULL, 0),
(9, 1, 13, 'why...', NULL, NULL, 0),
(10, 1, 13, 'why....', NULL, NULL, 0),
(11, 1, 13, 'Why.....', NULL, NULL, 0),
(12, 1, 13, 'WHy......', NULL, NULL, 0),
(13, 1, 13, 'Hey....', NULL, NULL, 0),
(14, 1, 13, 'Heyy.....', NULL, NULL, 0),
(15, 1, 13, 'dkggjg', NULL, NULL, 0),
(16, 1, 13, 'hobe to.....', '2017-10-21 07:17:44', '2017-10-21 07:17:44', 0),
(17, 1, 13, 'Why so serious ?', '2017-10-22 21:19:50', '2017-10-22 21:19:50', 0),
(18, 1, 13, 'How....', '2017-10-22 23:02:52', '2017-10-22 23:02:52', 0),
(19, 1, 13, 'How....', '2017-10-22 23:02:53', '2017-10-22 23:02:53', 0),
(20, 1, 13, 'hjjjkk', '2017-10-23 01:46:39', '2017-10-23 01:46:39', 0),
(21, 1, 13, 'why so serious?', '2017-10-27 07:04:58', '2017-10-27 07:04:58', 0),
(22, 1, 13, 'It is easy to handle ...', '2017-10-27 20:18:01', '2017-10-27 20:18:01', 0),
(23, 1, 13, 'kkllll', '2017-10-30 02:08:11', '2017-10-30 02:08:11', 0),
(24, 1, 13, 'It is classic.', '2017-11-15 06:04:09', '2017-11-15 06:04:09', 0),
(25, 1, 13, 'it is cool.', '2017-11-15 06:05:35', '2017-11-15 06:05:35', 0),
(26, 1, 13, 'keno amon hoy', '2017-11-15 06:16:18', '2017-11-15 06:16:18', 0),
(27, 1, 13, 'help me', '2017-11-15 06:35:50', '2017-11-15 06:35:50', 0),
(28, 1, 13, 'help me 2', '2017-11-15 06:36:23', '2017-11-15 06:36:23', 0),
(29, 1, 15, 'sort', '2017-11-18 19:55:56', '2017-11-18 19:55:56', 0),
(30, 1, 15, 'jjkklokjjikhhh', '2017-11-19 06:33:48', '2017-11-19 06:33:48', 0),
(31, 1, 15, 'klllllmklljjhh\n', '2017-11-19 06:34:18', '2017-11-19 06:34:18', 0),
(33, 1, 15, 'hjjklll;oo', '2017-11-19 06:36:41', '2017-11-19 06:36:41', 0),
(34, 1, 15, 'kliopopp', '2017-11-19 06:36:49', '2017-11-19 06:36:49', 0),
(36, 1, 15, '\n            1234567\n            ', '2017-11-19 06:39:26', '2017-11-21 13:59:27', 0),
(40, 1, 15, '12345678', '2017-11-19 06:47:19', '2017-11-19 06:47:19', 0),
(41, 1, 15, '\n            \n            \n            \n            \n            \n            \n            \n            \n            \n            1234567890\n            \n            \n            \n            \n            \n            \n            \n            \n          ', '2017-11-19 06:47:31', '2017-11-21 15:30:46', 1),
(42, 2, 16, 'njskffkskkffkfj', '2017-11-21 21:05:53', '2017-11-21 21:05:53', 0),
(43, 1, 16, 'jjkkk', '2017-11-21 23:52:49', '2017-11-21 23:52:49', 0),
(44, 1, 16, 'fkggoeroggorrorrr', '2017-11-25 06:38:56', '2017-11-25 06:38:56', 0),
(45, 1, 16, 'kkkliioii', '2017-11-25 06:41:03', '2017-11-25 06:41:03', 0),
(47, 1, 16, '\n     হি হি হি ;p \n            ', '2017-11-25 06:50:32', '2017-11-29 01:49:11', 0),
(48, 1, 16, 'klloooo', '2017-11-25 06:53:16', '2017-11-25 06:53:16', 0),
(49, 1, 16, 'dddsdd', '2017-11-25 06:54:23', '2017-11-25 06:54:23', 0),
(50, 1, 16, 'dddsdd', '2017-11-25 08:41:17', '2017-11-25 08:41:17', 0),
(52, 1, 16, 'hobe', '2017-11-25 20:00:24', '2017-11-25 20:00:24', 0),
(56, 2, 16, '2020', '2017-11-26 20:29:56', '2017-11-26 20:29:56', 0),
(57, 2, 16, '2021', '2017-11-27 09:12:27', '2017-11-27 09:12:27', 0),
(58, 2, 16, '2022', '2017-11-27 09:22:34', '2017-11-27 09:22:34', 0),
(59, 1, 16, 'kklll', '2017-11-27 23:37:33', '2017-11-27 23:37:33', 0),
(62, 3, 16, '2023', '2017-11-29 03:55:50', '2017-11-29 03:55:50', 0),
(63, 5, 15, '\n            Harvard university provides an open source C library named "cs50.h" for use in their online course - "Introduction to Computer Science". You can have a look online.\nThanks!\n            ', '2017-12-03 01:13:27', '2017-12-03 01:14:27', 0),
(64, 1, 21, 'kkllliooaaax', '2017-12-03 02:16:38', '2017-12-03 02:16:38', 0),
(65, 5, 15, 'Harvard university provides an open source C library named "cs50.h" for use in their online course - "Introduction to Computer Science". You can have a look online. Thanks!', '2017-12-03 04:14:41', '2017-12-03 04:14:41', 0),
(66, 1, 24, 'The return value for main should indicate how the program exited.', '2017-12-03 04:23:48', '2017-12-03 04:23:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_24_125410_create_questions_table', 2),
(4, '2017_10_04_032742_edit_question_table', 3),
(5, '2017_10_04_042609_create_tags_table', 4),
(6, '2017_10_04_042900_create_tag_relations_table', 4),
(7, '2014_01_07_073615_create_tagged_table', 5),
(8, '2014_01_07_073615_create_tags_table', 5),
(9, '2016_06_29_073615_create_tag_groups_table', 5),
(10, '2016_06_29_073615_update_tags_table', 5),
(11, '2017_10_04_153425_create_articles_table', 6),
(12, '2017_10_18_035041_create_answers_table', 7),
(13, '2017_11_15_145435_user_votes_table', 8),
(14, '2017_11_21_205108_edit_answers_table', 9),
(15, '2017_11_21_174516_create_academic_archive_table', 10),
(16, '2017_11_21_211221_create_academic_archive_file_table', 10),
(17, '2017_11_25_033718_user_activity_table', 11),
(20, '2017_11_25_091111_activity_numbers_table', 12),
(21, '2017_11_25_140247_edit_activity_table', 13),
(23, '2017_11_25_155246_create_notification_counter', 14),
(24, '2017_12_02_130639_create_admins_table', 15),
(25, '2017_12_03_170155_create_privacy_table', 15),
(26, '2017_12_03_171231_edit_question_table_again', 16),
(27, '2017_12_03_204346_edit_users_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `notification_counter`
--

CREATE TABLE `notification_counter` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `last_activity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification_counter`
--

INSERT INTO `notification_counter` (`id`, `user_id`, `count`, `last_activity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 12, '2017-11-25 19:30:24', '2017-12-03 04:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(10) UNSIGNED NOT NULL,
  `ques_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `upvote` int(11) NOT NULL DEFAULT '0',
  `downvote` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL DEFAULT '1506258968',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `privacy_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `content`, `upvote`, `downvote`, `date`, `created_at`, `updated_at`, `title`, `privacy_status`) VALUES
(1, 1, 'Loop is a &lt;b&gt;basic &lt;/b&gt;&lt;i&gt;&amp;amp; fundamental content &amp;nbsp;.&lt;/i&gt;', 0, 0, 1506307138, '2017-09-24 20:38:58', '2017-09-24 20:38:58', '', 0),
(2, 1, 'looop &lt;b&gt;is basi&lt;/b&gt;&lt;i&gt;c uioooo&amp;nbsp;&lt;/i&gt;', 0, 0, 1506312481, '2017-09-24 22:08:01', '2017-09-24 22:08:01', '', 0),
(3, 1, 'fggg &lt;b&gt;ffggg &amp;nbsp;&lt;/b&gt;&lt;i&gt;gggghh&amp;nbsp;&lt;/i&gt;', 0, 0, 1506319493, '2017-09-25 00:04:53', '2017-09-25 00:04:53', '', 0),
(4, 1, '&lt;p&gt;&lt;b&gt;Coding is &lt;/b&gt;&lt;i&gt;main thing&amp;nbsp; in &lt;/i&gt;&lt;u&gt;CSE .&lt;/u&gt;&lt;/p&gt;', 0, 0, 1507089100, '2017-10-03 21:51:40', '2017-10-03 21:51:40', 'what is code ?', 0),
(5, 1, '', 0, 0, 1507980551, '2017-10-14 05:29:11', '2017-10-14 05:29:11', 'What is function in PHP ?', 0),
(8, 1, '&lt;img src=&quot;https://cdn3.iconfinder.com/data/icons/transfers/100/239330-loop_arrows-512.png&quot;&gt;&lt;div&gt;Do you know Loop ?&lt;/div&gt;', 0, 0, 1508039192, '2017-10-14 21:46:32', '2017-10-14 21:46:32', 'What is loop ?', 0),
(9, 1, '&lt;img src=&quot;https://cdn3.iconfinder.com/data/icons/transfers/100/239330-loop_arrows-512.png&quot;&gt;&lt;div&gt;Do you know Loop ?&lt;/div&gt;', 0, 0, 1508039235, '2017-10-14 21:47:15', '2017-10-14 21:47:15', 'What is loop ?', 0),
(11, 1, 'Do you know &lt;b&gt;nlp&amp;nbsp;?&lt;/b&gt;', 0, 0, 1508126377, '2017-10-15 21:59:37', '2017-10-15 21:59:37', 'what is nlp ?', 0),
(13, 1, '&lt;b&gt;Laravel &lt;/b&gt;is one of the most popular frameworks of &lt;i&gt;PHP.&lt;/i&gt;&lt;div&gt;&lt;img src=&quot;https://smileyhappycoder.co.uk/wp-content/uploads/2014/12/laravel-logo-300x300.png&quot;&gt;&lt;i&gt;&lt;br&gt;&lt;/i&gt;&lt;/div&gt;', 6, 0, 1508301426, '2017-10-17 22:37:06', '2017-10-17 22:37:06', 'Why developer use Laravel ? ', 0),
(15, 1, '\r\n\r\n&lt;b&gt;Library &lt;/b&gt;&lt;i&gt;function &lt;/i&gt;is useful for any language. &lt;i&gt;C++&lt;/i&gt; has many library functions like , &lt;u&gt;push,&lt;/u&gt;&amp;nbsp;&lt;u&gt;pop, sqrt&amp;nbsp;&lt;/u&gt;etc.&lt;div&gt;&lt;img src=&quot;https://isocpp.org/files/img/cpp_logo.png&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;', 1, 0, 1509169755, '2017-10-27 23:49:15', '2017-11-19 06:28:40', 'Write some library functions in C++ Language ?', 0),
(16, 1, 'this code is &lt;b&gt;not working .&amp;nbsp;&lt;/b&gt;&lt;i&gt;&amp;nbsp;I fell in ...&amp;nbsp;&lt;/i&gt;&lt;div&gt;&lt;i&gt;&lt;br&gt;&lt;/i&gt;&lt;div&gt;&lt;img src=&quot;http://images.autodesk.com/adsk/images/lesson-4-debugging-your-code-6-large-617x278.jpg&quot;&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;please help me ....&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt; \r\n&lt;/div&gt;&lt;/div&gt;', 2, 0, 1511318526, '2017-11-21 20:42:06', '2017-12-15 08:01:26', 'why the code is not working ?', 0),
(21, 1, '\r\n\r\n&lt;b&gt;kklll &lt;/b&gt;&lt;i&gt;klop&lt;/i&gt;&lt;div&gt;&lt;i&gt;&lt;br&gt;&lt;/i&gt;&lt;/div&gt;&lt;div&gt;&lt;i&gt;&amp;nbsp;&lt;/i&gt;&lt;img src=&quot;/img/ask_img/1512288966.jpg&quot;&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;kkklll&lt;/div&gt; \r\n&lt;/div&gt;', 1, 0, 1512288980, '2017-12-03 02:16:20', '2017-12-16 22:19:38', 'kkkiookk', 0),
(24, 1, '\r\n\r\nWhat is the correct (most efficient) way to define the &lt;code&gt;main()&lt;/code&gt; function in C and C++ — &lt;code&gt;int main()&lt;/code&gt; &lt;br&gt;&lt;br&gt;or &lt;code&gt;void main()&lt;/code&gt; — and why? &lt;br&gt;&lt;br&gt;If &lt;code&gt;int main()&lt;/code&gt; then &lt;code&gt;return 1&lt;/code&gt; or &lt;code&gt;return 0&lt;/code&gt;? \r\n', 0, 0, 1512296529, '2017-12-03 04:22:09', '2017-12-04 02:51:43', 'What should main() return in C and C++?', 1),
(25, 1, '&lt;b&gt;sdfff &lt;i&gt;kklloiooox&lt;/i&gt;&lt;br&gt;&lt;/b&gt;', 0, 0, 1512321649, '2017-12-03 11:20:49', '2017-12-03 13:18:43', 'dvkkdsgdg', 1),
(26, 1, '&lt;b&gt;ggghhjj &lt;/b&gt;&lt;i&gt;hhjjkkkl &lt;/i&gt;&lt;br&gt;&lt;b&gt;&lt;/b&gt;', 0, 0, 1513347388, '2017-12-15 08:16:28', '2017-12-15 08:16:28', 'test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_code`) VALUES
(1, 'Structured Programming Language', 101),
(2, 'Data Structure', 123),
(4, 'Laplace', 204);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'hhh', NULL, NULL),
(2, 'Laravel 5', '', NULL, NULL),
(3, 'Laravel 5.1', '', NULL, NULL),
(4, 'C++', 'C++ is a general-purpose object-oriented programming (OOP) language', NULL, NULL),
(5, 'C', 'One of the most popular and old Programming Language.', NULL, NULL),
(6, 'Programming', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag_relations`
--

CREATE TABLE `tag_relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag_relations`
--

INSERT INTO `tag_relations` (`id`, `question_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(4, 11, 1, '2017-10-15 21:59:37', '2017-10-15 21:59:37'),
(5, 11, 3, '2017-10-15 21:59:37', '2017-10-15 21:59:37'),
(8, 13, 1, '2017-10-17 22:37:07', '2017-10-17 22:37:07'),
(9, 13, 2, '2017-10-17 22:37:07', '2017-10-17 22:37:07'),
(11, 15, 4, '2017-10-27 23:49:15', '2017-10-27 23:49:15'),
(12, 16, 6, '2017-11-21 20:42:06', '2017-11-21 20:42:06'),
(18, 21, 4, '2017-12-03 02:16:20', '2017-12-03 02:16:20'),
(19, 21, 5, '2017-12-03 02:16:20', '2017-12-03 02:16:20'),
(23, 24, 4, '2017-12-03 04:22:09', '2017-12-03 04:22:09'),
(24, 24, 5, '2017-12-03 04:22:09', '2017-12-03 04:22:09'),
(25, 25, 4, '2017-12-03 11:20:49', '2017-12-03 11:20:49'),
(26, 26, 4, '2017-12-15 08:16:28', '2017-12-15 08:16:28'),
(27, 26, 5, '2017-12-15 08:16:28', '2017-12-15 08:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'dafault.png',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Alimur Razi', 'alimurrazi570@gmail.com', '$2y$10$/DcvegCFCkm1jJ9SxR8nxOdP37MG0P5xDGkYUW5DLD.oxtpU6uNtm', '1511943762.jpg', 'TjKYdvCbLUgOzaacGLH0EFtDM6gjoeRVWy5HP7wX2ffexxIyrPFjiGqaT08G', '2017-09-23 06:39:37', '2018-01-10 07:25:22', 1),
(2, 'Rana Muhammad', 'ranasust42@gmail.com', '$2y$10$A2PXOpk6qlndvqwqrwFCl.vhVYTTpryye/ZY7vrIUXqpcRwFqr.zO', 'dafault.png', 'M42YpiwP3xAEa19eqdCDVRbwdGibycQ5RcxyQ6hlbDifwVnpuUN6Lhfr7hK4', '2017-11-17 00:17:19', '2017-12-17 03:15:45', 0),
(3, 'Ruman Islam', 'spectatorpioneer@gmail.com', '$2y$10$XecbsDqdqZIXN5t4Aq/px.ChgDomFzb64F46oV2ybMqWRQtmFF2cu', '1511949430.jpg', 'UKy1ZyxnumklK6gG1gp0NktnJhoTIyXsoxcHYZlTx18Zrxejaoikrlm4o3VH', '2017-11-29 03:03:23', '2017-12-03 01:25:53', 0),
(4, ' Md. Limon', 'hahahha@gmail.com', '$2y$10$Ji7Lgvh6KknIzQ.nkrXa4uCo6Ei2uLO7W7Krd4s8cry2fgaP2nEaS', '1511950378.7z', NULL, '2017-11-29 04:12:17', '2017-11-29 04:12:58', 0),
(5, 'Nitesh Khadka', 'niteshgik@gmail.com', '$2y$10$T1bMHIleizx5tsupMymFLO4gZJEwtYQdhZSA73SUHN3gmMRS2Ctvq', '1512285232.PNG', 'llKOz0JFZyNphWEnxWsJa1scG5Dejr9GT9ykayzUzy1gaj1mxYAchsgkADIf', '2017-12-03 01:11:39', '2017-12-03 04:14:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE `user_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `helper_user_id` int(10) UNSIGNED NOT NULL,
  `ques_id` int(10) UNSIGNED NOT NULL,
  `activity` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_activities`
--

INSERT INTO `user_activities` (`id`, `user_id`, `helper_user_id`, `ques_id`, `activity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 16, 1, '2017-11-25 08:41:17', '2017-11-25 08:41:17'),
(3, 1, 1, 16, 1, '2017-11-25 20:00:24', '2017-11-25 20:00:24'),
(4, 1, 1, 16, 1, '2017-11-25 20:47:08', '2017-11-25 20:47:08'),
(5, 1, 1, 16, 1, '2017-11-25 20:48:40', '2017-11-25 20:48:40'),
(6, 1, 2, 16, 1, '2017-11-26 20:29:57', '2017-11-26 20:29:57'),
(7, 1, 2, 16, 1, '2017-11-27 09:12:27', '2017-11-27 09:12:27'),
(8, 1, 2, 16, 1, '2017-11-27 09:22:34', '2017-11-27 09:22:34'),
(9, 1, 3, 16, 1, '2017-11-29 03:55:51', '2017-11-29 03:55:51'),
(11, 1, 5, 15, 1, '2017-12-03 01:13:27', '2017-12-03 01:13:27'),
(12, 1, 5, 15, 1, '2017-12-03 04:14:41', '2017-12-03 04:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_votes`
--

CREATE TABLE `user_votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ques_id` int(10) UNSIGNED NOT NULL,
  `upvote` int(11) NOT NULL,
  `downvote` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_votes`
--

INSERT INTO `user_votes` (`id`, `user_id`, `ques_id`, `upvote`, `downvote`, `created_at`, `updated_at`) VALUES
(3, 1, 13, 0, 1, NULL, NULL),
(4, 1, 16, 1, 0, NULL, NULL),
(6, 3, 16, 1, 0, NULL, NULL),
(7, 5, 15, 1, 0, NULL, NULL),
(8, 1, 21, 1, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_archive`
--
ALTER TABLE `academic_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_archive_file`
--
ALTER TABLE `academic_archive_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academic_archive_file_foreign_id_foreign` (`foreign_id`);

--
-- Indexes for table `activity_numbers`
--
ALTER TABLE `activity_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_user_id_foreign` (`user_id`),
  ADD KEY `answers_ques_id_foreign` (`ques_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_counter`
--
ALTER TABLE `notification_counter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_counter_user_id_foreign` (`user_id`),
  ADD KEY `notification_counter_last_activity_foreign` (`last_activity`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `privacy_ques_id_foreign` (`ques_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_relations`
--
ALTER TABLE `tag_relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_relations_question_id_foreign` (`question_id`),
  ADD KEY `tag_relations_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activitys_user_id_foreign` (`user_id`),
  ADD KEY `user_activitys_helper_user_id_foreign` (`helper_user_id`),
  ADD KEY `user_activitys_ques_id_foreign` (`ques_id`);

--
-- Indexes for table `user_votes`
--
ALTER TABLE `user_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_votes_user_id_foreign` (`user_id`),
  ADD KEY `user_votes_ques_id_foreign` (`ques_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_archive`
--
ALTER TABLE `academic_archive`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `academic_archive_file`
--
ALTER TABLE `academic_archive_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `activity_numbers`
--
ALTER TABLE `activity_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `notification_counter`
--
ALTER TABLE `notification_counter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tag_relations`
--
ALTER TABLE `tag_relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_activities`
--
ALTER TABLE `user_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_votes`
--
ALTER TABLE `user_votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_archive_file`
--
ALTER TABLE `academic_archive_file`
  ADD CONSTRAINT `academic_archive_file_foreign_id_foreign` FOREIGN KEY (`foreign_id`) REFERENCES `academic_archive` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ques_id_foreign` FOREIGN KEY (`ques_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notification_counter`
--
ALTER TABLE `notification_counter`
  ADD CONSTRAINT `notification_counter_last_activity_foreign` FOREIGN KEY (`last_activity`) REFERENCES `user_activities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_counter_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `privacy`
--
ALTER TABLE `privacy`
  ADD CONSTRAINT `privacy_ques_id_foreign` FOREIGN KEY (`ques_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag_relations`
--
ALTER TABLE `tag_relations`
  ADD CONSTRAINT `tag_relations_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tag_relations_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD CONSTRAINT `user_activitys_helper_user_id_foreign` FOREIGN KEY (`helper_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_activitys_ques_id_foreign` FOREIGN KEY (`ques_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_activitys_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_votes`
--
ALTER TABLE `user_votes`
  ADD CONSTRAINT `user_votes_ques_id_foreign` FOREIGN KEY (`ques_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
