-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 07:39 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `CategoryName`, `Status`, `CreationDate`, `UpdationDate`) VALUES
(1, 'CSE (Computer Science & Engineering)', 1, '2019-06-30 08:22:36', '2019-06-30 08:37:55'),
(2, 'EEE (Electrical and Electronics Engineering)', 1, '2019-06-30 08:23:08', '2019-06-30 08:38:16'),
(3, 'Mathmatics', 1, '2019-06-30 08:23:19', '0000-00-00 00:00:00'),
(4, 'Chemistry', 1, '2019-06-30 08:23:27', '0000-00-00 00:00:00'),
(5, 'Physics', 1, '2019-06-30 08:23:38', '0000-00-00 00:00:00'),
(6, 'Sociology', 1, '2019-06-30 08:52:18', '0000-00-00 00:00:00'),
(8, 'Incourse Questions', 1, '2019-06-30 08:52:31', '0000-00-00 00:00:00'),
(9, 'Mid Questions', 1, '2019-06-30 08:52:46', '0000-00-00 00:00:00'),
(10, 'Statistics', 1, '2019-10-15 09:55:16', '0000-00-00 00:00:00'),
(11, 'Demo', 1, '2019-10-15 10:16:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(50) NOT NULL,
  `categoryId` int(50) NOT NULL,
  `subCategoryId` int(50) NOT NULL,
  `contentName` varchar(200) NOT NULL,
  `author` varchar(200) DEFAULT NULL,
  `edition` varchar(100) DEFAULT NULL,
  `session` varchar(100) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `submittedBy` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `categoryId`, `subCategoryId`, `contentName`, `author`, `edition`, `session`, `file`, `submittedBy`) VALUES
(15, 1, 7, 'Data Structure Guideline by Darshan University', 'Darshan University', 'n/a', 'n/a', 'files/Data_Structure_guideline by Darshan University.pdf', 'ruman'),
(16, 1, 8, 'Data Structure Session 2010 2011 Part 1', 'n/a', 'n/a', 'n/a', 'files/Data_Structure_Session_2010_2011_Part_1.jpg', 'ruman'),
(17, 1, 7, 'Data Structure Session 2010-2011 Part_2', 'n/a', 'n/a', 'n/a', 'files/Data Structure Session 2010-2011 Part_2.jpg', 'ruman'),
(18, 1, 7, 'Data Structure Session 2011-2012 Part_1', 'n/a', 'n/a', 'n/a', 'files/Data Structure Session 2011-2012 Part_1.jpg', 'ruman'),
(19, 1, 7, 'Data Structure Session 2011-2012 Part_2', 'n/a', 'n/a', 'n/a', 'files/Data Structure Session 2011-2012 Part_2.jpg', 'ruman'),
(20, 1, 7, 'Data Structure Session 2012-2013 Part_1', 'n/a', 'n/a', 'n/a', 'files/Data Structure Session 2012-2013 Part_1.jpg', 'ruman'),
(21, 1, 7, 'Data Structure Session 2012-2013 Part_2', 'n/a', 'n/a', 'n/a', 'files/Data Structure Session 2012-2013 Part_2.jpg', 'ruman'),
(22, 4, 6, 'Advanced Organic Chemistry by Reinhard Bruckner', 'Reinhard Bruckner', 'n/a', 'n/a', 'files/Advanced Organic Chemistry by Reinhard Bruckner.pdf', 'ruman'),
(23, 3, 3, 'Concrete Mathematics (Second Edition) - Ronald Graham, Donald Knuth & Oren Patashnik', 'Ronald Graham, Donald Knuth', '2nd', 'n/a', 'files/Concrete Mathematics Second Edition by Ronald Graham, Donald Knuth and Oren & Patashnik.pdf', 'ruman'),
(25, 1, 1, 'Introduction To Computers 6th edition by Peter Norton', 'Peter Norton', '6th', 'n/a', 'files/Introduction To Computers By Peter Norton 6E.pdf', 'ruman'),
(26, 1, 11, 'Engineering Drawing by Wuttet Taffesse', 'Wuttet Taffesse', 'n/a', 'n/a', 'files/EngineeringDrawing by Wuttet Taffesse.pdf', 'ruman'),
(27, 3, 3, 'Differential Equation by Ross 4th Edition', 'Donald Ross', '4th', 'n/a', 'files/Differential Equation by ROSS  4th edition.pdf', 'ruman'),
(28, 1, 1, '50_Most_Frequently_Used_UNIX _ Linux Commands_With Examples', 'Ramesh Natarajan', '', '2010', 'files/50_Most_Frequently_Used_UNIX _ Linux Commands_With Examples.pdf', 'anwar');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryId` int(50) NOT NULL,
  `subCategoryName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryId`, `subCategoryName`, `Status`, `CreationDate`, `UpdationDate`) VALUES
(1, 1, 'Computer Fundamentals', 1, '2019-06-30 08:23:56', '2019-06-30 08:38:53'),
(2, 2, 'Digital Logic Design', 1, '2019-06-30 08:24:13', '0000-00-00 00:00:00'),
(3, 3, 'Calculus', 1, '2019-06-30 08:24:29', '0000-00-00 00:00:00'),
(4, 1, 'Software Engineering', 1, '2019-06-30 08:24:52', '0000-00-00 00:00:00'),
(5, 2, 'Circuit Analysis', 1, '2019-06-30 08:27:41', '0000-00-00 00:00:00'),
(6, 4, 'Organic Chemistry', 1, '2019-06-30 08:45:19', '0000-00-00 00:00:00'),
(7, 1, 'Data Structure', 1, '2019-07-14 16:01:31', '0000-00-00 00:00:00'),
(8, 1, 'Final Question', 1, '2019-07-14 16:02:03', '0000-00-00 00:00:00'),
(9, 1, 'Mid Term Question', 1, '2019-07-14 16:02:14', '0000-00-00 00:00:00'),
(10, 1, 'Incourse Question', 1, '2019-07-14 16:02:26', '0000-00-00 00:00:00'),
(11, 1, 'Engineering Drawing', 1, '2019-07-14 16:33:37', '0000-00-00 00:00:00'),
(12, 10, 'Ss', 1, '2019-10-15 09:58:12', '0000-00-00 00:00:00'),
(13, 11, 'sub demo', 1, '2019-10-15 10:16:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ruman Hossain', 'ruman.cse.brur@gmail.com', NULL, 1, '$2y$10$aecbCgJnte27rDNB4wYsOuDdBrDAbzc56.jPU/Rzcdu47qEp75qz6', NULL, '2019-12-02 03:13:40', '2019-12-02 03:13:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
