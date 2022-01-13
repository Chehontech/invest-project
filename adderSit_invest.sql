-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 05 2021 г., 14:31
-- Версия сервера: 5.7.29
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `adderSit_invest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about_images`
--

CREATE TABLE `about_images` (
  `id` int(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `about_images`
--

INSERT INTO `about_images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'about_1602889664.jpeg', '2020-10-16 22:07:44', '2020-10-16 22:07:44'),
(4, 'about_1602889807.jpeg', '2020-10-16 22:10:07', '2020-10-16 22:10:07'),
(5, 'about_1602889832.jpeg', '2020-10-16 22:10:32', '2020-10-16 22:10:32'),
(6, 'about_1602890220.jpeg', '2020-10-16 22:17:00', '2020-10-16 22:17:00'),
(7, 'about_1602890235.jpeg', '2020-10-16 22:17:15', '2020-10-16 22:17:15'),
(8, 'about_1602890270.jpeg', '2020-10-16 22:17:50', '2020-10-16 22:17:50');

-- --------------------------------------------------------

--
-- Структура таблицы `about_site`
--

CREATE TABLE `about_site` (
  `id` int(1) NOT NULL,
  `about` text NOT NULL,
  `terms` text NOT NULL,
  `privacy_policy` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `about_site`
--

INSERT INTO `about_site` (`id`, `about`, `terms`, `privacy_policy`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align:justify;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<p style=\"text-align:justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humours.</p>', '<p style=\"text-align:justify;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<p style=\"text-align:justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humours.</p>', '<p style=\"text-align:justify;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<p style=\"text-align:justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humours.</p>', '2021-05-16 16:31:13', '2021-05-16 15:31:13');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$GFdV7KqcArr7DKmrdwT51uqmreifHqeLKONVV66aTwd4X0/.P5t9K', '', '2020-09-03 20:03:19', '2020-09-03 19:03:19');

-- --------------------------------------------------------

--
-- Структура таблицы `admin_bank`
--

CREATE TABLE `admin_bank` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bank_name` varchar(128) DEFAULT NULL,
  `address` text,
  `swift` varchar(32) DEFAULT NULL,
  `iban` varchar(32) DEFAULT NULL,
  `acct_no` varchar(15) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `admin_bank`
--

INSERT INTO `admin_bank` (`id`, `name`, `bank_name`, `address`, `swift`, `iban`, `acct_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ABCD EFGH', 'Citi  Bank', 'USA', NULL, '12345', '12345678909', 1, '2021-04-28 01:07:35', '2021-04-28 00:07:35');

-- --------------------------------------------------------

--
-- Структура таблицы `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` int(16) NOT NULL,
  `user_id` int(16) NOT NULL,
  `trx` varchar(16) NOT NULL,
  `log` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `user_id`, `trx`, `log`, `created_at`, `updated_at`) VALUES
(1, 11, 'j7MtFMVvoMPmNUFW', 'Check how much would be earned from buying Diamond', '2020-07-04 08:55:05', '2020-07-04 08:55:05'),
(2, 11, 'vj7fjWFrUEercnh7', 'Cancelled Recurring payment for #OHWmRxAQhyEbI54S', '2020-07-04 08:56:45', '2020-07-04 08:56:45'),
(17, 11, 'h8jet1ahKMbrNSvM', 'Failed coupon check for coupon code #swdfghgf', '2020-07-04 09:24:54', '2020-07-04 09:24:54'),
(18, 11, 'r7Jq7EVFsWKsuRNE', 'Started attempt to purchase Gold', '2020-07-04 09:32:48', '2020-07-04 09:32:48'),
(21, 11, 'K01WPUqtbIBMeLlj', 'Purchased plan #Gold', '2020-07-04 09:34:01', '2020-07-04 09:34:01'),
(22, 11, 'Q07XEFK13nqJdYrB', 'Log out - ::1', '2020-07-04 09:36:07', '2020-07-04 09:36:07'),
(23, 11, 'jAYdkT5W8zkNNcAI', 'Updated account details', '2020-07-04 09:50:16', '2020-07-04 09:50:16'),
(24, 11, 'UfcuCWUEmWOX2iq3', 'Logged out - ::1', '2020-07-04 09:54:55', '2020-07-04 09:54:55'),
(25, 11, 'mvM4xAJ56NzmRzKt', 'Logged In', '2020-07-04 09:55:15', '2020-07-04 09:55:15'),
(26, 11, 'iIUQLGMvqc8RGRUZ', 'Created Funding Request of100USD via Voguepay', '2020-07-04 10:01:39', '2020-07-04 10:01:39'),
(27, 11, 'carrChyFLxruQI9T', 'Logged In', '2020-07-04 13:45:03', '2020-07-04 13:45:03'),
(28, 11, 'eAO1qZpeH95cmbs3', 'Logged out - ::1', '2020-07-04 13:48:02', '2020-07-04 13:48:02'),
(29, 34, '8xFqGrwaikIjUKHC', 'Logged In', '2020-07-04 13:49:00', '2020-07-04 13:49:00'),
(30, 34, 'tq3XC2sdHyURMRLN', 'Logged out - ::1', '2020-07-04 13:49:10', '2020-07-04 13:49:10'),
(31, 11, 'MiD42hiGHKvZMUgS', 'Logged In', '2020-07-04 13:50:41', '2020-07-04 13:50:41'),
(32, 11, 'Rd8iOY0DIlhoRer3', 'Logged out - ::1', '2020-07-04 13:51:05', '2020-07-04 13:51:05'),
(33, 34, 'Rom7xOvUcPrpBW0W', 'Logged In', '2020-07-04 13:51:26', '2020-07-04 13:51:26'),
(34, 34, 'u54lBkJz16IgLNST', 'Started attempt to purchase Gold', '2020-07-04 13:52:11', '2020-07-04 13:52:11'),
(35, 34, 'c1APhoQ2OhMIfmtJ', 'Purchased plan #Gold', '2020-07-04 13:52:13', '2020-07-04 13:52:13'),
(36, 34, 'ivZnkCZimCvz8u1x', 'Logged out - ::1', '2020-07-04 13:52:45', '2020-07-04 13:52:45'),
(37, 36, 'k136i0ubEzWpbKYc', 'Logged out - ::1', '2020-07-04 14:20:30', '2020-07-04 14:20:30'),
(38, 36, 'ghjZlmTpXDJEPs29', 'Logged In', '2020-07-04 14:20:40', '2020-07-04 14:20:40'),
(39, 36, '0AuvvdN1wivjBCGh', 'Created Funding Request of 100USD via PayPal', '2020-07-04 14:20:51', '2020-07-04 14:20:51'),
(40, 36, 'bgsafXM0iNcBNcYD', 'Started Transfer request', '2020-07-04 14:21:13', '2020-07-04 14:21:13'),
(41, 36, 'fpOaFgsOY9tRQM7E', 'Transfered $30 to user@test.com', '2020-07-04 14:21:15', '2020-07-04 14:21:15'),
(42, 36, 'CwPA2qoexmw4IsAU', 'Logged out - ::1', '2020-07-04 14:30:28', '2020-07-04 14:30:28'),
(43, 11, 'm4RGS1JmnQO29cro', 'Logged In', '2020-07-04 14:38:51', '2020-07-04 14:38:51'),
(44, 11, 'HW4yY3iPTem2qwqp', 'Logged In', '2020-07-05 09:29:13', '2020-07-05 09:29:13'),
(45, 11, 'HOut9Jrq4R7KXjAu', 'Logged In', '2020-07-05 12:01:44', '2020-07-05 12:01:44'),
(46, 36, '4kUsIXd24EncrSfS', 'Logged In', '2020-07-06 16:20:26', '2020-07-06 16:20:26'),
(47, 36, 'c3HeeiGxwsX6TGOW', 'Started attempt to purchase Starter', '2020-07-06 16:29:00', '2020-07-06 16:29:00'),
(48, 36, 'mWybZHOmTGD03e85', 'Purchased plan #Starter', '2020-07-06 16:29:02', '2020-07-06 16:29:02'),
(49, 36, 'cQxBh2rSoKqjUsfD', 'Logged out - ::1', '2020-07-06 17:27:58', '2020-07-06 17:27:58'),
(50, 11, '2q5rbscK5l2ACjtE', 'Logged In', '2020-07-07 17:09:30', '2020-07-07 17:09:30'),
(51, 11, 'nlzlBotMb3fbKvSR', 'Logged out - ::1', '2020-07-07 17:09:35', '2020-07-07 17:09:35'),
(52, 11, 'NGb5PfTZEAvNKiGV', 'Logged In', '2020-07-07 17:24:03', '2020-07-07 17:24:03'),
(53, 11, 'u2n1foyVdfvB6i9U', 'Logged In', '2020-07-07 17:24:12', '2020-07-07 17:24:12'),
(54, 11, 'us10CKq7z34TmC4Y', 'Logged out - ::1', '2020-07-07 17:24:19', '2020-07-07 17:24:19'),
(55, 11, 'rK1yhflh7EZQQQmy', 'Logged In', '2020-07-07 17:34:24', '2020-07-07 17:34:24'),
(56, 11, 'V9lWFJn7oj6YhoIJ', 'Logged In', '2020-07-07 17:34:37', '2020-07-07 17:34:37'),
(57, 11, 'W8yIHbyZOczeaT1m', 'Logged out - ::1', '2020-07-07 17:35:52', '2020-07-07 17:35:52'),
(58, 11, 'y90OsALqonvlydh3', 'Logged In', '2020-07-07 17:35:56', '2020-07-07 17:35:56'),
(59, 11, 'fOdXO6za93a6YQ7g', 'Logged out - ::1', '2020-07-07 17:35:58', '2020-07-07 17:35:58'),
(60, 11, 'suvkEMVWtbxncvyF', 'Logged out - ::1', '2020-07-07 19:00:24', '2020-07-07 19:00:24'),
(61, 11, 'laClZySB5R09crY0', 'Logged out - ::1', '2020-07-07 19:03:47', '2020-07-07 19:03:47'),
(62, 11, 'n4ddk69nEtxE6w8r', 'Logged In', '2020-07-07 19:03:51', '2020-07-07 19:03:51'),
(63, 11, 'vDk7Zf7SBkxfz3mb', 'Logged out - ::1', '2020-07-07 19:04:00', '2020-07-07 19:04:00'),
(64, 11, 'ePXe6O0mgQV29kLq', 'Logged In', '2020-07-07 19:04:04', '2020-07-07 19:04:04'),
(65, 11, '5SAaiuEkzZYxuvjR', 'Logged out - ::1', '2020-07-07 19:04:08', '2020-07-07 19:04:08'),
(66, 11, 'LG6kTvJb3PXqI4yO', 'Logged In', '2020-07-07 19:04:12', '2020-07-07 19:04:12'),
(67, 11, 'aL5KWdARdvSVAQ7w', 'Logged out - ::1', '2020-07-07 19:04:16', '2020-07-07 19:04:16'),
(68, 11, '1Hw3VWcO4ujfEiOB', 'Logged In', '2020-07-07 19:04:20', '2020-07-07 19:04:20'),
(69, 11, '949lgDNuM3lBSSGF', 'Logged out - ::1', '2020-07-07 19:04:44', '2020-07-07 19:04:44'),
(70, 11, 'oGJ31r20Cr2h3ax1', 'Logged In', '2020-07-07 19:06:13', '2020-07-07 19:06:13'),
(71, 11, 'nSvreqMZ2PFFp4o3', 'Logged out - ::1', '2020-07-07 19:07:04', '2020-07-07 19:07:04'),
(72, 11, 'thwWfCB3pSXT2H9n', 'Logged In', '2020-07-07 19:07:12', '2020-07-07 19:07:12'),
(73, 11, 'v1yluZvAQ3CoNKNN', 'Logged out - ::1', '2020-07-07 19:07:35', '2020-07-07 19:07:35'),
(74, 11, 'c1tY6ZQGrYwJMrxk', 'Logged In', '2020-07-07 19:15:59', '2020-07-07 19:15:59'),
(75, 11, 'whv27IAHjjXJcpSU', 'Logged out - ::1', '2020-07-07 19:16:40', '2020-07-07 19:16:40'),
(76, 11, 'ZDDm50qFqOdeZAwi', 'Logged In', '2020-07-07 19:22:47', '2020-07-07 19:22:47'),
(77, 11, '9w3PdveTb0jnrU20', 'Logged In', '2020-07-07 19:22:52', '2020-07-07 19:22:52'),
(78, 11, 'WTGVnhmHrKW9iLoJ', 'Logged out - ::1', '2020-07-07 19:22:55', '2020-07-07 19:22:55'),
(79, 11, 'DMszUju95gAf83WS', 'Logged In', '2020-07-07 19:22:59', '2020-07-07 19:22:59'),
(80, 11, 'c0ZEZnigF2CHjSG8', 'Logged out - ::1', '2020-07-07 19:23:03', '2020-07-07 19:23:03'),
(81, 11, 'vQ1s5Vg3LoyiK6j1', 'Logged In', '2020-07-07 22:32:01', '2020-07-07 22:32:01'),
(82, 11, 'NrRwrIyn7M0l6U4K', 'Logged out - ::1', '2020-07-07 22:41:30', '2020-07-07 22:41:30'),
(83, 11, 'Fa5i2RU6GfeilHdn', 'Logged In', '2020-07-07 22:41:46', '2020-07-07 22:41:46'),
(84, 11, 'IDtOfyplVCIIGraJ', 'Updated account details', '2020-07-07 22:50:00', '2020-07-07 22:50:00'),
(85, 11, 'GBVL1XmVtpRHu8HL', 'Updated account details', '2020-07-07 22:51:47', '2020-07-07 22:51:47'),
(86, 11, 'rsHK6ULzivT3B3UD', 'Updated account details', '2020-07-07 22:51:51', '2020-07-07 22:51:51'),
(87, 11, 'FKRsI835fkDwJK4z', 'Updated account details', '2020-07-07 22:51:56', '2020-07-07 22:51:56'),
(88, 11, '7ywq4BLzkRqEHtgS', 'Updated account details', '2020-07-07 22:55:14', '2020-07-07 22:55:14'),
(89, 11, 'XvlqzDaCKf2RlTkl', 'Updated account details', '2020-07-07 22:55:16', '2020-07-07 22:55:16'),
(90, 11, 'AXNi4IIydpAEy1zU', 'Updated account details', '2020-07-07 22:55:47', '2020-07-07 22:55:47'),
(91, 11, '1ehNC7fOZO4kYOVH', 'Updated account details', '2020-07-07 22:55:49', '2020-07-07 22:55:49'),
(92, 11, 'r0PW7aA6FZrK8Vwg', 'Updated account details', '2020-07-07 22:57:01', '2020-07-07 22:57:01'),
(93, 11, 'mvZgDQyysnbsy8v4', 'Updated account details', '2020-07-07 22:57:03', '2020-07-07 22:57:03'),
(94, 11, 'iXpYC526AQGaSqTu', 'Updated account details', '2020-07-07 22:59:03', '2020-07-07 22:59:03'),
(95, 11, 'ElZ01R3oDYhAAuxq', 'Updated account details', '2020-07-07 23:00:23', '2020-07-07 23:00:23'),
(96, 11, 'zpXewIyWVtj2m602', 'Updated account details', '2020-07-07 23:00:27', '2020-07-07 23:00:27'),
(97, 11, 'MVgvixA3No0wtSsP', 'Updated account details', '2020-07-07 23:00:32', '2020-07-07 23:00:32'),
(98, 11, 'C0PcuU3bGOie5IRf', 'Updated account details', '2020-07-07 23:01:11', '2020-07-07 23:01:11'),
(99, 11, 'zYswOKSuVZqLveLI', 'Updated account details', '2020-07-07 23:01:16', '2020-07-07 23:01:16'),
(100, 11, 'rjBoRfSKrJB2rkDE', 'Updated account details', '2020-07-07 23:01:19', '2020-07-07 23:01:19'),
(101, 11, 'Ixuj3Szsttob3maM', 'Updated account details', '2020-07-07 23:01:50', '2020-07-07 23:01:50'),
(102, 11, 'Q6V2S4GQZ5C0lmJy', 'Updated account details', '2020-07-07 23:02:05', '2020-07-07 23:02:05'),
(103, 11, 'UJ27io7Q8zrdCozw', 'Updated account details', '2020-07-07 23:02:08', '2020-07-07 23:02:08'),
(104, 11, '8TDfl9CVvbjTnFXQ', 'Updated account details', '2020-07-07 23:07:52', '2020-07-07 23:07:52'),
(105, 11, 'wgw8EcI24aVdRKUh', 'Updated account details', '2020-07-07 23:07:54', '2020-07-07 23:07:54'),
(106, 11, 'R3Hxjl0V1MeY5cXA', 'Updated account details', '2020-07-07 23:10:47', '2020-07-07 23:10:47'),
(107, 11, 'm0p2uzgyPI5uU6ZX', 'Updated account details', '2020-07-07 23:10:50', '2020-07-07 23:10:50'),
(108, 11, 'wkl6r6xQixkL9Mlm', 'Updated account details', '2020-07-07 23:12:41', '2020-07-07 23:12:41'),
(109, 11, 'NT70Vw30iu50Hhph', 'Updated account details', '2020-07-07 23:12:44', '2020-07-07 23:12:44'),
(110, 11, 'xeiQnhFkdIJJzB89', 'Updated account details', '2020-07-07 23:12:55', '2020-07-07 23:12:55'),
(111, 11, '4PeObR5aJ5JlkbcU', 'Updated account details', '2020-07-07 23:12:57', '2020-07-07 23:12:57'),
(112, 11, 'wQ9ELNYdsKn44eMV', 'Updated account details', '2020-07-07 23:13:17', '2020-07-07 23:13:17'),
(113, 11, '2YvMOAaY3ui9JCzx', 'Updated account details', '2020-07-07 23:13:36', '2020-07-07 23:13:36'),
(114, 11, 'AmLI2RqQFWGb6Mms', 'Updated account details', '2020-07-07 23:15:52', '2020-07-07 23:15:52'),
(115, 11, 'gMiTJvroT5Tcwcgk', 'Updated account details', '2020-07-07 23:15:54', '2020-07-07 23:15:54'),
(116, 11, '10XvmipE4pJnE9Vb', 'Updated account details', '2020-07-07 23:17:24', '2020-07-07 23:17:24'),
(117, 11, '9IffAwwuANqbvPQx', 'Updated account details', '2020-07-07 23:17:36', '2020-07-07 23:17:36'),
(118, 11, 'LDU7pA72FuWaOGfE', 'Logged In', '2020-07-08 03:23:38', '2020-07-08 03:23:38'),
(119, 11, 'h1ry3RMZxHvGYrMN', 'Created Funding Request of 100USD via Flutterwave', '2020-07-08 03:47:49', '2020-07-08 03:47:49'),
(120, 11, 'DC402Zd6HIy0OGd5', 'Created Funding Request of 100USD via Flutterwave', '2020-07-08 04:09:54', '2020-07-08 04:09:54'),
(121, 11, '7ohvH8nKWIZem4EW', 'Verified Funding Request of106USD via Flutterwave', '2020-07-08 04:34:08', '2020-07-08 04:34:08'),
(122, 11, 'mqdth9dcn3oFBGA4', 'Verified Funding Request of106USD via Flutterwave', '2020-07-08 04:35:33', '2020-07-08 04:35:33'),
(123, 11, '4s2jZLbujJz9ru7p', 'Verified Funding Request of106USD via Flutterwave', '2020-07-08 04:37:07', '2020-07-08 04:37:07'),
(124, 11, 'UNO6b7UEoSv4TG5Z', 'Verified Funding Request of106USD via Flutterwave', '2020-07-08 04:40:15', '2020-07-08 04:40:15'),
(125, 11, 'Qn5x1mB03aVRNoTg', 'Created Funding Request of 100USD via Flutterwave', '2020-07-08 04:51:37', '2020-07-08 04:51:37'),
(126, 11, '7XH363aWYU6CnDeA', 'Verified Funding Request of 106USD via Flutterwave', '2020-07-08 04:52:30', '2020-07-08 04:52:30'),
(127, 11, 'sMK3eHOHCLCh6xkm', 'Verified Funding Request of 103.031USD via PayPal', '2020-07-08 04:58:05', '2020-07-08 04:58:05'),
(128, 11, 'yuIqAe1A6lgXVe9R', 'Verified Funding Request of 103.03USD via CoinPayment BTC', '2020-07-08 04:59:42', '2020-07-08 04:59:42'),
(129, 11, '2P0eSaTNkIPuYWHL', 'Created Funding Request of 100USD via Flutterwave', '2020-07-08 05:07:26', '2020-07-08 05:07:26'),
(130, 11, 'oxciPVOBEHkEJ2eq', 'Verified Funding Request of 106USD via Flutterwave', '2020-07-08 05:08:19', '2020-07-08 05:08:19'),
(131, 11, 'x6yCV3ZZJLmGiZK1', 'Created Funding Request of 200USD via Stripe', '2020-07-08 05:38:04', '2020-07-08 05:38:04'),
(132, 11, 'ekEjoRVq2cj7TeRZ', 'Logged In', '2020-07-08 09:33:11', '2020-07-08 09:33:11'),
(133, 11, 'qb4ExJnQKSkhyAEd', 'Logged out - ::1', '2020-07-08 09:42:37', '2020-07-08 09:42:37'),
(134, 37, 'KKbT5ayeiFVV3mJ0', 'Logged In', '2020-07-08 09:47:51', '2020-07-08 09:47:51'),
(135, 37, 'EZSI9ESNvNNKr95D', 'Logged out - ::1', '2020-07-08 09:51:03', '2020-07-08 09:51:03'),
(136, 11, 'gyLJdWRSE43cX8CN', 'Logged In', '2020-07-08 10:03:26', '2020-07-08 10:03:26'),
(137, 11, 'vQhhtF1WODojGEeC', 'Logged In', '2020-07-08 10:03:30', '2020-07-08 10:03:30'),
(138, 11, 'HTVkJNvEuaSpQzif', 'Logged out - ::1', '2020-07-08 10:59:13', '2020-07-08 10:59:13'),
(139, 11, 'WdiPRNNpZGD14jyn', 'Logged In', '2020-07-08 10:59:17', '2020-07-08 10:59:17'),
(140, 11, 'TCky7SfU66XvWKgi', 'Logged In', '2020-07-08 15:47:33', '2020-07-08 15:47:33'),
(141, 11, 'xt9szpyIDgJ1oM14', 'Created Funding Request of 100USD via Paystack', '2020-07-08 17:01:50', '2020-07-08 17:01:50'),
(142, 11, 'peIqwxqAEypSQwU4', 'Created Funding Request of 300USD via Flutterwave', '2020-07-08 17:02:29', '2020-07-08 17:02:29'),
(143, 11, 'u4juOHTTqhzULYue', 'Created Funding Request of 100USD via PayPal', '2020-07-08 17:03:01', '2020-07-08 17:03:01'),
(144, 11, 'N49LGCsRMfnENy0n', 'Logged In', '2020-07-08 19:38:41', '2020-07-08 19:38:41'),
(145, 11, 'hP8sGLpyl1O9GiOB', 'Created Funding Request of 100USD via Stripe', '2020-07-08 19:38:48', '2020-07-08 19:38:48'),
(146, 11, 'csoIsVxF5OgLK7vM', 'Logged out - ::1', '2020-07-08 19:50:35', '2020-07-08 19:50:35'),
(147, 11, 'NgsGQjreJbx23wdZ', 'Logged In', '2020-07-08 19:51:04', '2020-07-08 19:51:04'),
(148, 11, 'vmyoElETuzUjTC5A', 'Logged out - ::1', '2020-07-08 20:00:48', '2020-07-08 20:00:48'),
(149, 11, 'PIyFOoULeJINHNn1', 'Logged In', '2020-07-08 21:53:17', '2020-07-08 21:53:17'),
(150, 11, 'YomBKrBde4X3wQd1', 'Logged In', '2020-07-08 21:53:22', '2020-07-08 21:53:22'),
(151, 11, 'OtPqIOYpnRfwE1fR', 'Logged In', '2020-07-08 21:56:19', '2020-07-08 21:56:19'),
(152, 11, 'AMWA1ViLDBPSOVc8', 'Logged In', '2020-07-08 21:56:24', '2020-07-08 21:56:24'),
(153, 11, 'uZgMJjesZZMn1Vnj', 'Logged out - ::1', '2020-07-08 22:05:18', '2020-07-08 22:05:18'),
(154, 11, 'VpffDax0Bi1xz3ZJ', 'Logged In', '2020-07-08 22:05:32', '2020-07-08 22:05:32'),
(155, 11, 'yurh9tbPRoLPJOeC', 'Logged In', '2020-07-08 22:07:54', '2020-07-08 22:07:54'),
(156, 11, 'g25w3UxMJTsocDXW', 'Logged In', '2020-07-08 22:08:03', '2020-07-08 22:08:03'),
(157, 11, 'UZuqHarMsQiOwbZv', 'Logged out - ::1', '2020-07-08 22:11:06', '2020-07-08 22:11:06'),
(158, 11, 'bIE2pSz6qXZSL2SA', 'Logged In', '2020-07-08 22:11:37', '2020-07-08 22:11:37'),
(159, 11, 'kTgp9l4VKlpIEQKP', 'Logged In', '2020-07-08 22:12:24', '2020-07-08 22:12:24'),
(160, 11, 'gVlkTJdJKQBQz03J', 'Logged In', '2020-07-08 22:12:33', '2020-07-08 22:12:33'),
(161, 11, 'lpi8HHxOK9ymxjCS', 'Logged In', '2020-07-08 22:12:47', '2020-07-08 22:12:47'),
(162, 11, 'TJvNatfvdot7zS6W', 'Logged In', '2020-07-09 10:48:28', '2020-07-09 10:48:28'),
(163, 11, 'yuxjRCzwh2Hdwxta', 'Logged In', '2020-07-09 17:36:00', '2020-07-09 17:36:00'),
(164, 11, 'WlY47shjdvF1uwIE', 'Logged In', '2020-07-09 17:40:24', '2020-07-09 17:40:24'),
(165, 11, 'JhNGC9OKlWCKy5oB', 'Logged In', '2020-07-09 17:40:28', '2020-07-09 17:40:28'),
(166, 11, 'xiMfs8aKbR0G6rKa', 'Logged In', '2020-07-09 17:41:41', '2020-07-09 17:41:41'),
(167, 11, 'CuaaIOJpjSLuOY3V', 'Logged In', '2020-07-09 17:41:45', '2020-07-09 17:41:45'),
(168, 11, 'km67wHisREu5JUqS', 'Logged In', '2020-07-09 17:42:54', '2020-07-09 17:42:54'),
(169, 11, 'jbhUjgAgXCvQpem9', 'Logged In', '2020-07-09 17:42:59', '2020-07-09 17:42:59'),
(170, 11, 'A4uPEnkFE1OMnMHW', 'Logged In', '2020-07-09 17:47:08', '2020-07-09 17:47:08'),
(171, 11, 'foaWcaYM2U0hFoIw', 'Logged In', '2020-07-09 17:47:13', '2020-07-09 17:47:13'),
(172, 11, 'wSr1YiyUzG7HExxI', 'Logged out - ::1', '2020-07-09 17:47:35', '2020-07-09 17:47:35'),
(173, 11, 'bPubq5dJZwdndchg', 'Logged In', '2020-07-09 17:59:39', '2020-07-09 17:59:39'),
(174, 11, 'HnpyW0xuDScg9E6n', 'Created Funding Request of 100USD via Flutterwave', '2020-07-09 18:01:12', '2020-07-09 18:01:12'),
(175, 11, 'udsAlwAmkvQ6gLhH', 'Logged In', '2020-07-12 14:16:42', '2020-07-12 14:16:42'),
(176, 11, 'xcqJ9lqEmRxxT81N', 'Logged In', '2020-07-12 14:16:42', '2020-07-12 14:16:42'),
(177, 11, 'NcOlRu6WYyVVv43T', 'Updated account details', '2020-07-12 14:23:49', '2020-07-12 14:23:49'),
(178, 11, 'nyQrWBR5fEU8GmWq', 'Updated account details', '2020-07-12 14:29:36', '2020-07-12 14:29:36'),
(179, 11, 'LTFfKPs7cz93Fte4', 'Submitted withdraw requesthTCl9UQ8vEGtvmWp', '2020-07-12 14:35:40', '2020-07-12 14:35:40'),
(180, 11, 's1jUCxx9Zf1eHoT8', 'Logged In', '2020-07-20 21:01:22', '2020-07-20 21:01:22'),
(181, 11, 'dfqsjTpU9p0xFjQN', 'Logged In', '2020-07-22 05:29:20', '2020-07-22 05:29:20'),
(182, 11, 'jU8i6UkYQ61SxMhp', 'Logged out - ::1', '2020-07-22 05:31:18', '2020-07-22 05:31:18'),
(183, 11, 'Vwbaxmr7JelPxnyd', 'Logged In', '2020-07-22 06:25:19', '2020-07-22 06:25:19'),
(184, 11, 'mXQoJeVbO30nQxgn', 'Logged out - ::1', '2020-07-22 06:25:23', '2020-07-22 06:25:23'),
(185, 11, 'JKlyXMMCvmdVnwiI', 'Logged In', '2020-07-22 06:25:28', '2020-07-22 06:25:28'),
(186, 11, 'GED24H1z8K1GZtHN', 'Logged In', '2020-07-22 06:25:29', '2020-07-22 06:25:29'),
(187, 11, 'CYK5Zly5WcTrNJng', 'Logged out - ::1', '2020-07-22 06:36:11', '2020-07-22 06:36:11'),
(188, 11, 'h61dI9XdQWo4MSFm', 'Logged In', '2020-07-22 13:16:04', '2020-07-22 13:16:04'),
(189, 11, 'PH1PvaBmSaSmz2if', 'Logged out - ::1', '2020-07-22 13:29:25', '2020-07-22 13:29:25'),
(190, 37, 'xYbric50CVc9q663', 'Logged In', '2020-07-22 13:29:50', '2020-07-22 13:29:50'),
(191, 37, 'RYLqxbZplgwGRTbL', 'Logged In', '2020-07-22 13:30:07', '2020-07-22 13:30:07'),
(192, 11, 'ds982BQiRTognRnw', 'Logged In', '2020-07-22 13:30:22', '2020-07-22 13:30:22'),
(193, 11, 'Mx4d2HO5GXGodHQk', 'Logged In', '2020-07-22 13:30:58', '2020-07-22 13:30:58'),
(194, 11, 'LuTB0l40cuYMMSCf', 'Logged In', '2020-07-22 13:31:04', '2020-07-22 13:31:04'),
(195, 11, 'OqEnJfPsb7DOrnkP', 'Logged out - ::1', '2020-07-22 13:31:12', '2020-07-22 13:31:12'),
(196, 37, '6qlKuDrRTcP2QnsA', 'Logged In', '2020-07-22 13:31:31', '2020-07-22 13:31:31'),
(197, 37, 'xA8xcfDE2vbIwIG8', 'Logged In', '2020-07-22 13:31:40', '2020-07-22 13:31:40'),
(198, 37, 'Vxnc1LD64z34NJoi', 'Started attempt to purchase Starter', '2020-07-22 13:32:23', '2020-07-22 13:32:23'),
(199, 37, 'wpnVK0esAeVF7FjG', 'Purchased plan #Starter', '2020-07-22 13:32:26', '2020-07-22 13:32:26'),
(200, 11, 'ETNhbVOVBQ9MyUeo', 'Logged In', '2020-07-22 13:36:59', '2020-07-22 13:36:59'),
(201, 11, 'MpwNgCcGk3Hdkshj', 'Logged In', '2020-07-22 13:37:04', '2020-07-22 13:37:04'),
(202, 11, 'ACGgNbMbcR3ig3iu', 'Logged out - ::1', '2020-07-25 09:02:43', '2020-07-25 09:02:43'),
(203, 11, 'BFzBNyLNGDmqhs2g', 'Logged In', '2020-07-25 09:36:44', '2020-07-25 09:36:44'),
(204, 11, '1MkFQUng9xL0aVpn', 'Updated withdraw requestM2FLNRfjYhDWStB4', '2020-07-25 09:37:27', '2020-07-25 09:37:27'),
(205, 11, 'I5sEilt6KSKHVRbd', 'Logged out - ::1', '2020-07-25 09:37:43', '2020-07-25 09:37:43'),
(206, 11, 'JUei3MAYBPbShDTp', 'Logged In', '2020-07-28 15:32:21', '2020-07-28 15:32:21'),
(207, 11, 'GUDXparRfOUZboAb', 'Created Funding Request of 100USD via Flutterwave', '2020-07-28 15:32:28', '2020-07-28 15:32:28'),
(208, 11, 'UybMlWEMbXHel3BK', 'Logged In', '2020-07-28 21:09:28', '2020-07-28 21:09:28'),
(209, 11, 'zPWHuo3jqBDGdjhx', 'Created Funding Request of 100USD via Paystack', '2020-07-28 21:25:36', '2020-07-28 21:25:36'),
(210, 11, 'LzcSpjGwwH5hdhAy', 'Created Funding Request of 100USD via Flutterwave', '2020-07-29 14:28:15', '2020-07-29 14:28:15'),
(211, 11, 'PTrdc32N5JyOoaVO', 'Updated account details', '2020-07-29 15:26:55', '2020-07-29 15:26:55'),
(212, 11, 'xIvtB4cC9gCxCAyj', 'Changed account photo', '2020-07-29 15:32:43', '2020-07-29 15:32:43'),
(213, 11, 'GFKcT952RNjoVHRe', 'Logged out - ::1', '2020-07-29 16:13:31', '2020-07-29 16:13:31'),
(214, 11, 'V09zhicMAXO2NUkc', 'Logged In', '2020-07-29 16:15:20', '2020-07-29 16:15:20'),
(215, 11, 'IdBOcfWXafpXvu5l', 'Created Funding Request of 100USD via Paystack', '2020-07-29 16:15:35', '2020-07-29 16:15:35'),
(216, 11, 'z1bGoNEsDk8HLz7H', 'Created Funding Request of 100USD via Voguepay', '2020-07-29 16:16:07', '2020-07-29 16:16:07'),
(217, 11, 'qheS4zbuFxVRcZIt', 'Created Funding Request of 100USD via CoinPayment BTC', '2020-07-29 16:39:13', '2020-07-29 16:39:13'),
(218, 11, 'vZw9Vb1rDFisw5WU', 'Created Funding Request of 100USD via Paystack', '2020-07-29 17:22:44', '2020-07-29 17:22:44'),
(219, 11, 'ZU3D8pMEqkBvjFRg', 'Created Funding Request of 100USD via Flutterwave', '2020-07-29 17:23:01', '2020-07-29 17:23:01'),
(220, 11, 'R7SjYJoFccL8BLol', 'Logged out - ::1', '2020-07-29 19:06:06', '2020-07-29 19:06:06'),
(221, 11, 'FYQqAOXBambylMLf', 'Logged In', '2020-07-29 19:09:48', '2020-07-29 19:09:48'),
(222, 11, 'aFIdgWBrjtIxHxRD', 'Logged out - ::1', '2020-07-29 20:36:15', '2020-07-29 20:36:15'),
(223, 11, '9UjKUMerEX9qyIDn', 'Logged In', '2020-07-29 23:13:56', '2020-07-29 23:13:56'),
(224, 11, '0JePwDBOVrjJqWVv', 'Logged In', '2020-07-30 09:28:10', '2020-07-30 09:28:10'),
(225, 11, 'wU20u0flOujAyWi4', 'Logged In', '2020-07-30 09:50:21', '2020-07-30 09:50:21'),
(226, 11, 'U0Xzc5Y0fTOavoZO', 'Logged In', '2020-07-30 12:27:13', '2020-07-30 12:27:13'),
(227, 11, 'DRe1Alicass3eYn8', 'Logged out - ::1', '2020-07-30 12:31:42', '2020-07-30 12:31:42'),
(228, 11, 'uYnAutpdQ2Qti1M8', 'Logged In', '2020-07-30 23:42:48', '2020-07-30 23:42:48'),
(229, 11, 'nMY5fTGe3pgG6bOa', 'Logged In', '2020-07-30 23:42:52', '2020-07-30 23:42:52'),
(230, 11, 'HJkqmIHlyPqIIRAP', 'Logged In', '2020-07-31 17:27:59', '2020-07-31 17:27:59'),
(231, 11, 'dBc7PSDf2B5Ppthh', 'Logged In', '2020-07-31 17:44:12', '2020-07-31 17:44:12'),
(232, 11, 'X3hVBgQsikgXBNdv', 'Logged In', '2020-07-31 17:51:35', '2020-07-31 17:51:35'),
(233, 11, 'Cp2ulNVhIS8bbJzE', 'Logged In', '2020-07-31 17:54:53', '2020-07-31 17:54:53'),
(234, 11, 'umSyky3FfKPRwidD', 'Logged In', '2020-07-31 17:55:23', '2020-07-31 17:55:23'),
(235, 11, 'Vi37mQyBjs3mfLm1', 'Logged In', '2020-07-31 17:55:28', '2020-07-31 17:55:28'),
(236, 11, 'ZXq7DrvmzBV7YKYd', 'Logged In', '2020-08-01 20:21:25', '2020-08-01 20:21:25'),
(237, 11, 'TbputMN0xgIipI3R', 'Logged In', '2020-08-01 20:22:17', '2020-08-01 20:22:17'),
(238, 11, '5Lh9hUy66WWEyyk3', 'Logged In', '2020-08-02 16:19:11', '2020-08-02 16:19:11'),
(239, 11, 'i29kfn4SsekP8sv5', 'Logged In', '2020-08-02 16:19:53', '2020-08-02 16:19:53'),
(240, 11, 'rrg1G2ebwjRs0JjD', 'Logged In', '2020-08-02 16:24:20', '2020-08-02 16:24:20'),
(241, 11, 'JhdGQPc3mkHnUQzY', 'Logged In', '2020-08-02 18:22:04', '2020-08-02 18:22:04'),
(242, 11, 'kbdqNawc78sbbd4o', 'Logged In', '2020-08-03 09:00:29', '2020-08-03 09:00:29'),
(243, 11, 'PjchtYTjgNX7NP8M', 'Logged In', '2020-08-03 09:05:14', '2020-08-03 09:05:14'),
(244, 11, '77dDpHUhbvARtgt6', 'Logged In', '2020-08-03 09:57:43', '2020-08-03 09:57:43'),
(245, 11, 'ym21Vq3wdsyVBZNF', 'Logged In', '2020-08-13 12:11:40', '2020-08-13 12:11:40'),
(246, 11, 'aiJ2tIf8DfsSxYIP', 'Logged In', '2020-08-16 18:29:46', '2020-08-16 18:29:46'),
(247, 11, 'q2UABKiwMe4Nx4Wy', 'Logged out - ::1', '2020-08-16 20:19:37', '2020-08-16 20:19:37'),
(248, 11, 'uIQkjnVutXHlbVnx', 'Logged In', '2020-08-16 20:19:50', '2020-08-16 20:19:50'),
(249, 11, 'NeWiWsJnin0fEJcN', 'Activated 2fa', '2020-08-17 09:43:09', '2020-08-17 09:43:09'),
(250, 11, 'bfDbMCy0Dtbtech0', 'Deactivated 2fa', '2020-08-17 09:50:14', '2020-08-17 09:50:14'),
(251, 11, '6Wo7WNCl4iTTLY75', 'Created Funding Request of 100USD via CoinPayment ETH', '2020-08-17 09:50:41', '2020-08-17 09:50:41'),
(252, 11, 'uGOSZnI5cCv6DVCS', 'Changed account photo', '2020-08-17 23:53:11', '2020-08-17 23:53:11'),
(253, 11, 'Z3O8mM8CfBGz65lh', 'Logged out - ::1', '2020-08-18 01:49:31', '2020-08-18 01:49:31'),
(254, 11, 'wHJtQV7mW1WHuX45', 'Logged In', '2020-08-18 06:49:34', '2020-08-18 06:49:34'),
(255, 11, 'F5ZsE6YmgwJtBgM6', 'Logged In', '2020-08-20 12:39:51', '2020-08-20 12:39:51'),
(256, 11, 'CQ4OTIYjQsAmfHP6', 'Logged In', '2020-09-03 17:57:56', '2020-09-03 17:57:56'),
(257, 11, 'yRhmr3P9wSPfnmBZ', 'Logged out - ::1', '2020-09-03 19:36:44', '2020-09-03 19:36:44'),
(258, 11, 'Lf7houX24YTbJ55R', 'Logged In', '2020-09-03 19:41:16', '2020-09-03 19:41:16'),
(259, 11, '7e0EXJI5Es1CLNQq', 'Logged In', '2020-09-04 08:09:50', '2020-09-04 08:09:50'),
(260, 11, 'rfHGaSjd9W4nAUYx', 'Deposit request Declined XDMIjQ6Ap67RaQax', '2020-09-04 08:35:04', '2020-09-04 08:35:04'),
(261, 11, 'ea7yiCGUACPKbGfX', 'Bank Deposit request Declined wl3mNvoKaDXmpb9a', '2020-09-04 09:12:17', '2020-09-04 09:12:17'),
(262, 11, 'rPNtb4H4eLSDy9wW', 'Withdraw request Approved hTCl9UQ8vEGtvmWp', '2020-09-04 10:48:27', '2020-09-04 10:48:27'),
(263, 11, 'JVlRWTg53BPjLwGb', 'Withdraw request Approved aHa2M9sMfD415V2V', '2020-09-04 10:48:32', '2020-09-04 10:48:32'),
(264, 11, 'ZcnYdfAE0mV6Sb9m', 'Withdraw request Approved 1m0dcrG9mN0vieMI', '2020-09-04 10:48:37', '2020-09-04 10:48:37'),
(265, 11, 'biUUi8nzV6TV0w4L', 'Withdraw request Approved M2FLNRfjYhDWStB4', '2020-09-04 10:48:42', '2020-09-04 10:48:42'),
(266, 11, '8qBSJndf2NkptYWl', 'Logged In', '2020-09-04 15:11:18', '2020-09-04 15:11:18'),
(267, 11, 'Yec9R2VcSD95lUl0', 'Logged out - ::1', '2020-09-07 00:42:57', '2020-09-07 00:42:57'),
(268, 11, 'Iei1jz91ercbkRt0', 'Logged In', '2020-09-07 00:43:54', '2020-09-07 00:43:54'),
(269, 11, 'V5b6xQCgpzo22wO3', 'Deleted Ticket #8', '2020-09-07 00:46:07', '2020-09-07 00:46:07'),
(270, 11, 'k7E8l3ZDse3lrjeV', 'Logged out - ::1', '2020-09-07 00:49:58', '2020-09-07 00:49:58'),
(271, 38, 'Jk2FQNeUx5Jg9Qjh', 'Logged out - ::1', '2020-09-07 01:20:53', '2020-09-07 01:20:53'),
(272, 11, 'FIUB8Mos4E1e0r7F', 'Logged In', '2020-09-07 01:20:59', '2020-09-07 01:20:59'),
(273, 11, '6F01iNcitThO4iVq', 'Check how much would be earned from buying Starter', '2020-09-07 01:45:39', '2020-09-07 01:45:39'),
(274, 11, '5iS0R7heheiHhoHn', 'Check how much would be earned from buying Starter', '2020-09-07 01:45:52', '2020-09-07 01:45:52'),
(275, 11, 'Z9bkwbnRnqz0Hwl1', 'Check how much would be earned from buying Starter', '2020-09-07 01:45:59', '2020-09-07 01:45:59'),
(276, 11, '3DUUEMydn70eLVd4', 'Logged In', '2020-09-07 06:31:58', '2020-09-07 06:31:58'),
(277, 11, 'wPqrqL6dQoyPVbqw', 'Logged out - ::1', '2019-12-31 23:11:30', '2019-12-31 23:11:30'),
(278, 11, 'F0tJcdKgswizkj6W', 'Logged In', '2019-12-31 23:11:45', '2019-12-31 23:11:45'),
(279, 11, 'bBdChukSsfNaTUjs', 'Started attempt to purchase Starter', '2019-12-31 23:12:05', '2019-12-31 23:12:05'),
(280, 11, 'LecIRFBXZmOLGUaj', 'Purchased plan #Starter', '2019-12-31 23:12:06', '2019-12-31 23:12:06'),
(281, 11, 'I1l6j7Kr5zPXxoY6', 'Purchased plan #Starter', '2019-12-31 23:12:13', '2019-12-31 23:12:13'),
(282, 11, 'IQZbz9tySalnpkYI', 'Purchased plan #Starter', '2019-12-31 23:13:49', '2019-12-31 23:13:49'),
(283, 11, 'hdJJEdWyUsy5sH4Q', 'Logged In', '2020-09-07 09:15:49', '2020-09-07 09:15:49'),
(284, 11, 'rOeLFghNgR0ofdG1', 'Logged In', '2020-09-09 11:53:50', '2020-09-09 11:53:50'),
(285, 11, 'gkmyeRZzDOpRD551', 'Check how much would be earned from buying Starter', '2020-09-09 12:02:34', '2020-09-09 12:02:34'),
(286, 11, 'WyU2KxRatX4kMLGp', 'Started attempt to purchase Starter', '2020-09-09 12:02:41', '2020-09-09 12:02:41'),
(287, 11, 'POzBjuGXMKrAqEJl', 'Purchased plan #Starter', '2020-09-09 12:02:52', '2020-09-09 12:02:52'),
(288, 11, 'KcMnpxHLL93G5ZCP', 'Created Funding Request of 300USD via CoinPayment ETH', '2020-09-09 14:40:00', '2020-09-09 14:40:00'),
(289, 40, 'Yd0oMuf9nKj28Cr6', 'Logged out - ::1', '2020-09-12 09:18:09', '2020-09-12 09:18:09'),
(290, 41, 'PBTgMU5KoATfygiE', 'Logged In', '2020-09-19 20:40:50', '2020-09-19 20:40:50'),
(291, 41, '8tNOjK5rDqiqgntt', 'Created Funding Request of 100USD via Paystack', '2020-09-19 20:40:57', '2020-09-19 20:40:57'),
(292, 41, 'GjiLjF5xwVAavpRr', 'Logged In', '2020-09-20 09:22:26', '2020-09-20 09:22:26'),
(293, 41, '07v4bvbirZms0al0', 'Created Funding Request of 100USD via Paystack', '2020-09-20 09:23:21', '2020-09-20 09:23:21'),
(294, 41, 'R6XXpMjhoIEGZctg', 'Logged In', '2020-09-22 20:42:00', '2020-09-22 20:42:00'),
(295, 41, 'SpneWf7fhjMpCMPI', 'Logged In', '2020-09-23 15:19:56', '2020-09-23 15:19:56'),
(296, 41, 'jkzyiD8bfdxaQ1HX', 'Created Funding Request of 1000USD via Boompay', '2020-09-23 15:25:07', '2020-09-23 15:25:07'),
(297, 41, 'a22GrD99kjb7tpm9', 'Logged In', '2020-09-23 15:25:38', '2020-09-23 15:25:38'),
(298, 41, 'nRuPbsFlgvJpgiEs', 'Created Funding Request of 2000USD via Boompay', '2020-09-23 15:25:45', '2020-09-23 15:25:45'),
(299, 41, '2XeND9Bz0ugQQeLu', 'Logged In', '2020-09-24 16:21:48', '2020-09-24 16:21:48'),
(300, 41, 'nHtdr19BQhxFoR9y', 'Created Funding Request of 100USD via Boompay', '2020-09-24 16:23:09', '2020-09-24 16:23:09'),
(301, 41, 'CgfVP9f5vOnIoQWB', 'Logged In', '2020-09-24 16:28:39', '2020-09-24 16:28:39'),
(302, 41, 'BZDBDrTsSuJLalAq', 'Created Funding Request of 100USD via Boompay', '2020-09-24 16:28:45', '2020-09-24 16:28:45'),
(303, 41, 'b6P0bbAunR1HoLQC', 'Logged In', '2020-09-24 16:48:58', '2020-09-24 16:48:58'),
(304, 41, 'AuyVq1PK9IW4dfps', 'Created Funding Request of 100USD via Boompay', '2020-09-24 16:49:04', '2020-09-24 16:49:04'),
(305, 41, 'oHGl8VNhK1v2Cz4L', 'Logged In', '2020-09-24 16:51:03', '2020-09-24 16:51:03'),
(306, 41, 'FhGn8ZNUpzDDb7t8', 'Created Funding Request of 200USD via Boompay', '2020-09-24 16:51:09', '2020-09-24 16:51:09'),
(307, 41, 'cFRsXQrCScvfUhNn', 'Logged In', '2020-09-24 16:51:28', '2020-09-24 16:51:28'),
(308, 41, 'wnpKNUDApCJfZLes', 'Created Funding Request of 100USD via Boompay', '2020-09-24 16:51:39', '2020-09-24 16:51:39'),
(309, 41, 'uX7A2DeqQQdiBkBE', 'Logged In', '2020-09-24 17:04:22', '2020-09-24 17:04:22'),
(310, 41, 'QT7uQGezb5sCUFIQ', 'Created Funding Request of 400USD via Boompay', '2020-09-24 17:04:33', '2020-09-24 17:04:33'),
(311, 41, 'mZXg28g57CNEuMre', 'Logged In', '2020-09-24 17:04:44', '2020-09-24 17:04:44'),
(312, 41, 'zWus83zWrQXh5WWo', 'Created Funding Request of 300USD via Boompay', '2020-09-24 17:05:01', '2020-09-24 17:05:01'),
(313, 41, 'fwIKWfJ8ise668Rd', 'Logged In', '2020-09-24 17:11:46', '2020-09-24 17:11:46'),
(314, 41, 'oJAQppgISClz0laB', 'Created Funding Request of 100USD via Boompay', '2020-09-24 17:11:56', '2020-09-24 17:11:56'),
(315, 41, 'vU0OmHctnfRsYfIf', 'Logged In', '2020-09-24 17:20:57', '2020-09-24 17:20:57'),
(316, 41, 'RP3ZVqQS1KTpWdwO', 'Created Funding Request of 100USD via Boompay', '2020-09-24 17:21:16', '2020-09-24 17:21:16'),
(317, 41, 'cTCTPnUcInDcoDVO', 'Logged In', '2020-09-25 15:42:59', '2020-09-25 15:42:59'),
(318, 41, 'QHw9oDRl3BBDmg8U', 'Created Funding Request of 100USD via Boompay', '2020-09-25 15:43:04', '2020-09-25 15:43:04'),
(319, 41, 'Lb4mht6uFfvgIALQ', 'Logged In', '2020-09-25 23:53:23', '2020-09-25 23:53:23'),
(320, 41, '6RvyuBCf7ZxixEKE', 'Created Funding Request of 100USD via Boompay', '2020-09-25 23:53:29', '2020-09-25 23:53:29'),
(321, 41, 'nYe4NDhRSIMbPz2a', 'Logged In', '2020-09-28 16:48:21', '2020-09-28 16:48:21'),
(322, 41, 'c0DiHgQ0mQZB9PAw', 'Created Funding Request of 100USD via Stripe', '2020-09-28 16:48:34', '2020-09-28 16:48:34'),
(323, 41, 'T9Wx2yzxmSSz4VSL', 'Verified Funding Request of 103USD via Stripe', '2020-09-28 16:50:51', '2020-09-28 16:50:51'),
(324, 41, 'uC5ZFNAx7at3fNWq', 'Logged In', '2020-09-29 20:51:22', '2020-09-29 20:51:22'),
(325, 41, 'CcsScNnspaTdiqCr', 'Created Funding Request of 100USD via Boompay', '2020-09-29 20:51:30', '2020-09-29 20:51:30'),
(326, 41, 'z3PKmYHzmXiLmPr3', 'Logged In', '2020-09-29 20:53:45', '2020-09-29 20:53:45'),
(327, 41, 'T2XDvq9lxtKPZX8e', 'Created Funding Request of 199USD via Boompay', '2020-09-29 20:53:51', '2020-09-29 20:53:51'),
(328, 41, 'dj25Qg5cHUcTta5g', 'Logged In', '2020-10-02 18:38:29', '2020-10-02 18:38:29'),
(329, 41, '5SX1NbggcdMCqxTH', 'Created Funding Request of 300USD via Boompay', '2020-10-02 18:38:38', '2020-10-02 18:38:38'),
(330, 41, 'gKHCwPHoiy2YIPSW', 'Logged In', '2020-10-02 18:39:56', '2020-10-02 18:39:56'),
(331, 40, 'BUj6sxCFOgGF0sei', 'Logged In', '2020-10-03 07:09:57', '2020-10-03 07:09:57'),
(332, 41, 'dS6gBiJ7BlwXOEpx', 'Logged In', '2020-10-11 14:03:26', '2020-10-11 14:03:26'),
(333, 41, 'sYNmKCJzU68d5nCn', 'Check how much would be earned from buying Pawn', '2020-10-11 14:24:34', '2020-10-11 14:24:34'),
(334, 41, 'tHAMfvIhx1Gaqpa7', 'Started attempt to purchase Pawn', '2020-10-11 14:24:52', '2020-10-11 14:24:52'),
(335, 41, 'JlHzogUQHL9d8cIv', 'Started attempt to purchase Pawn', '2020-10-11 14:25:12', '2020-10-11 14:25:12'),
(336, 41, '2qcYbuDqqsEzXlTG', 'Purchased plan #Pawn', '2020-10-11 14:25:14', '2020-10-11 14:25:14'),
(337, 42, 'qDzIuhYtEepcX7K3', 'Logged In', '2020-12-14 19:39:51', '2020-12-14 19:39:51'),
(338, 42, 'gV5TJLEavR6sB8HY', 'Logged In', '2020-12-14 19:40:08', '2020-12-14 19:40:08'),
(339, 42, 'Tf9Jv57hNM0zQOxc', 'Created Funding Request of 100USD via Boompay', '2020-12-14 19:40:19', '2020-12-14 19:40:19'),
(340, 42, 'ehmkW7PgZX09yciJ', 'Logged In', '2020-12-16 05:38:56', '2020-12-16 05:38:56'),
(341, 42, 'sSSwXm4AuJTDEBJn', 'Changed account photo', '2020-12-16 05:39:23', '2020-12-16 05:39:23'),
(342, 42, 'XDOAtVeE9Yl8iqUD', 'Logged out - ::1', '2020-12-16 05:39:28', '2020-12-16 05:39:28'),
(343, 43, 'oFGMiZPqZvjCQ5fg', 'Logged out - ::1', '2020-12-16 05:40:00', '2020-12-16 05:40:00'),
(344, 42, 'iLWoRjbsr6YJPzZl', 'Logged In', '2020-12-20 18:45:05', '2020-12-20 18:45:05'),
(345, 42, '1JzWnb1deLJf9TUX', 'Logged In', '2020-12-21 13:12:35', '2020-12-21 13:12:35'),
(346, 42, 'JQnr0oqu0uBICaf6', 'Created Funding Request of 10USD via Flutterwave', '2020-12-21 13:12:44', '2020-12-21 13:12:44'),
(347, 42, 'zWthlNRFxhLSdkg5', 'Logged In', '2021-01-02 09:01:11', '2021-01-02 09:01:11'),
(348, 42, 'mX2mSVmFWa4gGQ3d', 'Created Funding Request of 100USD via Boompay', '2021-01-02 09:18:28', '2021-01-02 09:18:28'),
(349, 42, 'bYDOwvmRfEEqwy8B', 'Created Funding Request of 200USD via Boompay', '2021-01-02 10:22:17', '2021-01-02 10:22:17'),
(350, 42, 'YgjI11qZIURjxt8Q', 'Created Funding Request of 300USD via Boompay', '2021-01-02 10:33:25', '2021-01-02 10:33:25'),
(351, 42, 'd905bmzhUoS0CkUB', 'Created Funding Request of 100USD via Boompay', '2021-01-07 17:58:57', '2021-01-07 17:58:57'),
(352, 42, 'y5AVHTqffHe2sUys', 'Created Funding Request of 1000USD via Boompay', '2021-01-21 09:50:02', '2021-01-21 09:50:02'),
(353, 42, '58YYLSRoAa7wmW2l', 'Created Funding Request of 1000USD via Boompay', '2021-01-21 10:04:11', '2021-01-21 10:04:11'),
(354, 42, 'zOIynBwibxrtBLsB', 'Created Funding Request of 100USD via CoinPayment BTC', '2021-01-21 11:19:02', '2021-01-21 11:19:02'),
(355, 42, 'BH7U2rjKo70bt63I', 'Created Funding Request of 100USD via CoinPayment BTC', '2021-01-21 11:19:02', '2021-01-21 11:19:02'),
(356, 42, '96Mz9PJqp1DJafNt', 'Created Funding Request of 10000USD via CoinPayment BTC', '2021-01-21 11:23:43', '2021-01-21 11:23:43'),
(357, 42, 'u7pFCSYt14Io2URQ', 'Created Funding Request of 100USD via Boompay', '2021-01-22 21:08:40', '2021-01-22 21:08:40'),
(358, 42, '7mnLjTqg3188t3ss', 'Created Funding Request of 1000USD via Boompay', '2021-01-22 21:21:45', '2021-01-22 21:21:45'),
(359, 43, 'HoJd8JTGRWhIQRXr', 'Logged In', '2021-01-28 11:19:30', '2021-01-28 11:19:30'),
(360, 43, 'LrcBfzXqNz3Dtnhc', 'Created Funding Request of 2USD via Flutterwave', '2021-01-28 11:20:42', '2021-01-28 11:20:42'),
(361, 43, 'jdPDf2lXVVTPXm6n', 'Created Funding Request of 1USD via Flutterwave', '2021-01-28 11:23:45', '2021-01-28 11:23:45'),
(362, 43, 'cEhEsb5Ecj0HzRjT', 'Created Funding Request of 100NGN via Flutterwave', '2021-01-28 11:28:17', '2021-01-28 11:28:17'),
(363, 43, 'xlptWA3EsrKF0q2t', 'Verified Funding Request of 102NGN via Flutterwave', '2021-01-28 11:29:08', '2021-01-28 11:29:08'),
(364, 42, 'dY9yi5iJFTDktmzK', 'Logged In', '2021-02-09 18:52:25', '2021-02-09 18:52:25'),
(365, 42, 'EcnFAsJ60UFGOY5v', 'Created Funding Request of 1000NGN via Boompay', '2021-02-09 18:53:35', '2021-02-09 18:53:35'),
(366, 42, 'krVsfXHVJSnVVweC', 'Logged In', '2021-02-09 18:54:01', '2021-02-09 18:54:01'),
(367, 42, 'DUI44fplSSDhXggr', 'Created Funding Request of 1000NGN via Boompay', '2021-02-09 18:54:07', '2021-02-09 18:54:07'),
(368, 42, 'nfsfjYinYqwLp7R4', 'Logged In', '2021-02-09 20:15:35', '2021-02-09 20:15:35'),
(369, 42, 'Stc9OoVo9hWEEprl', 'Created Funding Request of 2000NGN via Boompay', '2021-02-09 20:15:44', '2021-02-09 20:15:44'),
(370, 43, 'LLwegtaWQgeEfUh5', 'Logged In', '2021-02-10 12:00:31', '2021-02-10 12:00:31'),
(371, 43, 'Rmy3oeTXP3sMDVri', 'Logged In', '2021-02-10 15:31:03', '2021-02-10 15:31:03'),
(372, 43, 'LzlnrZFKhU7JDXf8', 'Check how much would be earned from buying dddd', '2021-02-10 15:44:26', '2021-02-10 15:44:26'),
(373, 43, 'jCnNMAaWUKloVxQD', 'Check how much would be earned from buying dddd', '2021-02-10 15:45:01', '2021-02-10 15:45:01'),
(374, 43, 'uyqlguasHRTQyzz3', 'Check how much would be earned from buying dddd', '2021-02-10 15:46:17', '2021-02-10 15:46:17'),
(375, 43, 'T8clQg8cQO3oqCXs', 'Started attempt to purchase dddd', '2021-02-10 15:47:30', '2021-02-10 15:47:30'),
(376, 43, 'D5DEQ6D89jI8mdiK', 'Started attempt to purchase dddd', '2021-02-10 15:50:19', '2021-02-10 15:50:19'),
(377, 43, 'tEBosovNJX1Lu8Ld', 'Started attempt to purchase dddd', '2021-02-10 15:50:30', '2021-02-10 15:50:30'),
(378, 43, 'lK4QhKA7ZWEdHKm1', 'Started attempt to purchase dddd', '2021-02-10 15:51:11', '2021-02-10 15:51:11'),
(379, 43, 'LwlSs2lmO38T1p8X', 'Purchased plan #dddd', '2021-02-10 15:51:26', '2021-02-10 15:51:26'),
(380, 43, 'BY6Q7tAYu5armMCA', 'Cancelled Recurring payment for #FwTFdbY1izFubyqf', '2021-02-10 15:52:40', '2021-02-10 15:52:40'),
(381, 43, 'G18COr0TUu4PoxJF', 'Started attempt to purchase dddd', '2021-02-10 15:56:35', '2021-02-10 15:56:35'),
(382, 43, '2YcWCBsvZNmpSzqs', 'Purchased plan #dddd', '2021-02-10 15:56:37', '2021-02-10 15:56:37'),
(383, 43, 'ALwWS6GAFnW0zkww', 'Submitted withdraw requestAqMf8tCCY3yINCKe', '2021-02-10 17:05:29', '2021-02-10 17:05:29'),
(384, 43, '3dAzcBUiNNUGjsoO', 'Submitted withdraw request70wiHVlUi86yF0qE', '2021-02-10 17:09:46', '2021-02-10 17:09:46'),
(385, 43, 'DvK7FNwfd7inCf4r', 'Submitted withdraw requestAwUijkeppi13xqS1', '2021-02-10 17:10:59', '2021-02-10 17:10:59'),
(386, 43, 'Cq5ZifkIOGQrOXft', 'Created Funding Request of 1000NGN via Flutterwave', '2021-02-10 17:20:43', '2021-02-10 17:20:43'),
(387, 43, 'dj7G631J9uXlyy2p', 'Created Funding Request of 1000NGN via Stripe', '2021-02-10 17:33:32', '2021-02-10 17:33:32'),
(388, 43, 'DCcG8orjfAoehzDa', 'Logged In', '2021-02-11 05:48:35', '2021-02-11 05:48:35'),
(389, 43, 'raj1VbqWRPBr6VJi', 'Submitted withdraw requestSTL-vjLUpp', '2021-02-11 06:22:23', '2021-02-11 06:22:23'),
(390, 43, 'qhy1Gili3PLqjAqk', 'Submitted withdraw requestSTL-Ja4ktj', '2021-02-11 06:23:55', '2021-02-11 06:23:55'),
(391, 43, 'o0fkyn8g8qZgI6ju', 'Created Funding Request of 1000NGN via Flutterwave', '2021-02-11 06:24:21', '2021-02-11 06:24:21'),
(392, 43, 'GCjCuWUAS9StKKGw', 'Started attempt to purchase dddd', '2021-02-11 06:59:45', '2021-02-11 06:59:45'),
(393, 43, 'LQ0jhihlm1LZs8OK', 'Started attempt to purchase dddd', '2021-02-11 07:00:09', '2021-02-11 07:00:09'),
(394, 43, 'WNOqhqsOREu5nJod', 'Started attempt to purchase dddd', '2021-02-11 07:00:13', '2021-02-11 07:00:13'),
(395, 43, 'kFot0K7LY97gPqAT', 'Started attempt to purchase dddd', '2021-02-11 07:02:26', '2021-02-11 07:02:26'),
(396, 43, 'C3re0xDRDRXHwwMt', 'Started attempt to purchase dddd', '2021-02-11 07:02:49', '2021-02-11 07:02:49'),
(397, 43, 'c9nhLUxlAG0AtLlh', 'Started attempt to purchase dddd', '2021-02-11 07:06:47', '2021-02-11 07:06:47'),
(398, 43, '3Oy1JP3jIRr4t8wK', 'Started attempt to purchase dddd', '2021-02-11 07:06:52', '2021-02-11 07:06:52'),
(399, 43, '7EfIXIkjAB3fAg9k', 'Purchased plan #dddd', '2021-02-11 07:06:59', '2021-02-11 07:06:59'),
(400, 43, 'v1Lar6P3WpWIpClk', 'Started attempt to purchase dddd', '2021-02-11 08:11:36', '2021-02-11 08:11:36'),
(401, 43, 'gTVeKl5CzPkMow7h', 'Purchased plan #dddd', '2021-02-11 08:11:38', '2021-02-11 08:11:38'),
(402, 43, 'yLBOegIYeXCEakrK', 'Started attempt to purchase dddd', '2021-02-11 08:14:22', '2021-02-11 08:14:22'),
(403, 43, 'vjr43jQQgsjJsgNG', 'Purchased plan #dddd', '2021-02-11 08:14:24', '2021-02-11 08:14:24'),
(404, 43, 'E6K1xBSppNsASfBc', 'Started attempt to purchase dddd', '2021-02-11 09:04:04', '2021-02-11 09:04:04'),
(405, 43, 'vowNUTVDKugFQZfY', 'Purchased plan #dddd with coupon code #JBFJSS', '2021-02-11 09:04:49', '2021-02-11 09:04:49'),
(406, 43, '4zo0I043olgQAGqH', 'Purchased plan #dddd', '2021-02-11 09:04:49', '2021-02-11 09:04:49'),
(407, 43, 'svR1htluF4Eer3sI', 'Created Funding Request of 1000NGN via Voguepay', '2021-02-11 09:36:17', '2021-02-11 09:36:17'),
(408, 43, '0OiNSqMC8xUFAJMS', 'Logged out - ::1', '2021-02-11 09:36:41', '2021-02-11 09:36:41'),
(409, 43, 'u1yG82qoWZRwFfZF', 'Logged In', '2021-02-11 09:37:50', '2021-02-11 09:37:50'),
(410, 43, 'D9n6204eOK2QB9GO', 'Started Recurring payment for #INV-VY9HCu', '2021-02-11 09:38:22', '2021-02-11 09:38:22'),
(411, 43, 'Bq8p457EEsePrBil', 'Started attempt to purchase dddd', '2021-02-11 09:43:00', '2021-02-11 09:43:00'),
(412, 43, '2A9CCM0mmKu5X2Ry', 'Purchased plan #dddd', '2021-02-11 09:43:01', '2021-02-11 09:43:01'),
(413, 43, 'w2553eWsiN4puNhs', 'Cancelled Recurring payment for #INV-mJQzgC', '2021-02-11 09:50:06', '2021-02-11 09:50:06'),
(414, 43, 'lA5Iu3VHMLKPsAKP', 'Started Recurring payment for #INV-mJQzgC', '2021-02-11 09:50:11', '2021-02-11 09:50:11'),
(415, 43, 'ixw280gcfzKUEYLo', 'Cancelled Recurring payment for #INV-mJQzgC', '2021-02-11 09:50:19', '2021-02-11 09:50:19'),
(416, 43, 'Zmw39MIshyqg8DEO', 'Started Recurring payment for #INV-mJQzgC', '2021-02-11 09:50:24', '2021-02-11 09:50:24'),
(417, 43, '5QuDxd6VR8ruAvMb', 'Cancelled Recurring payment for #INV-mJQzgC', '2021-02-11 09:50:39', '2021-02-11 09:50:39'),
(418, 43, '4yTxFKOrSxdeS8zE', 'Logged In', '2021-02-11 15:11:19', '2021-02-11 15:11:19'),
(419, 43, 'fs9Cxs9uK23Pk0Ky', 'Logged In', '2021-02-12 04:46:32', '2021-02-12 04:46:32'),
(420, 43, 'yWp2WXT7ZQvPAPvm', 'Logged out - ::1', '2021-02-12 05:21:39', '2021-02-12 05:21:39'),
(421, 43, 'DgWeYHk6rouzthVu', 'Logged In', '2021-02-12 05:21:59', '2021-02-12 05:21:59'),
(422, 43, 'WHUUfiwtDYHRy1hP', 'Logged out - ::1', '2021-02-12 05:22:34', '2021-02-12 05:22:34'),
(423, 43, 'BQ2YmYyOCfbnOgSF', 'Logged In', '2021-02-12 05:23:19', '2021-02-12 05:23:19'),
(424, 43, 'k5TmH8YgflwUYw4x', 'Changed Password', '2021-02-12 05:26:20', '2021-02-12 05:26:20'),
(425, 43, '4jdqk39CFoG1EEOR', 'Started attempt to purchase Gold', '2021-02-12 05:31:03', '2021-02-12 05:31:03'),
(426, 43, 'm83xVYFC0icmOhPT', 'Purchased plan #Gold', '2021-02-12 05:31:05', '2021-02-12 05:31:05'),
(427, 43, 'GDSoVXPaDRDH6pYN', 'Started Recurring payment for #INV-g3Umwu', '2021-02-12 05:35:02', '2021-02-12 05:35:02'),
(428, 43, 'BKaa7UVfbH6rs3cU', 'Started attempt to purchase Gold', '2021-02-12 05:37:00', '2021-02-12 05:37:00'),
(429, 43, 'd09hVYwO4xC1O9Y6', 'Purchased plan #Gold', '2021-02-12 05:37:02', '2021-02-12 05:37:02'),
(430, 43, 'Sh77v4HfgHGpguHZ', 'Started attempt to purchase Gold', '2021-02-12 05:50:00', '2021-02-12 05:50:00'),
(431, 43, 'OR7ocHAEHXyfIcjK', 'Purchased plan #Gold', '2021-02-12 05:50:02', '2021-02-12 05:50:02'),
(432, 43, 'yKEzLHT9JKOKzBQi', 'Started Recurring payment for #INV-V8IF99', '2021-02-12 06:03:04', '2021-02-12 06:03:04'),
(433, 43, 'HxbtkpwtHrevypIg', 'Cancelled Recurring payment for #INV-V8IF99', '2021-02-12 06:03:14', '2021-02-12 06:03:14'),
(434, 43, 'osDBGaGX33W1cDqa', 'Started attempt to purchase Gold', '2021-02-12 06:09:27', '2021-02-12 06:09:27'),
(435, 43, 'mB3TF400SWpzOI3D', 'Purchased plan #Gold', '2021-02-12 06:09:29', '2021-02-12 06:09:29'),
(436, 43, 'geSI7a7Obu53TUD1', 'Started attempt to purchase Gold', '2021-02-12 06:23:46', '2021-02-12 06:23:46'),
(437, 43, 'xhdlbPU3yH61BH5V', 'Purchased plan #Gold', '2021-02-12 06:23:49', '2021-02-12 06:23:49'),
(438, 43, 'Yum7CaZ4zj7NiJ4W', 'Logged out - ::1', '2021-02-12 06:53:17', '2021-02-12 06:53:17'),
(439, 43, 'd9V3fJW4QN6Rui37', 'Logged In', '2021-02-12 07:07:34', '2021-02-12 07:07:34'),
(440, 43, '23G4hSDgo71ERvSX', 'Activated 2fa', '2021-02-12 07:09:37', '2021-02-12 07:09:37'),
(441, 43, 'qAjaT6fb4fAsfArb', 'Deactivated 2fa', '2021-02-12 07:11:16', '2021-02-12 07:11:16'),
(442, 43, 'rhy1uKWUqyblePmN', 'Updated account details', '2021-02-12 07:11:24', '2021-02-12 07:11:24'),
(443, 43, 'v8d156vHPfhbvK4p', 'Changed account photo', '2021-02-12 07:11:54', '2021-02-12 07:11:54'),
(444, 43, 'K3hvUzvDNO8q1aZq', 'Logged out - ::1', '2021-02-12 07:11:59', '2021-02-12 07:11:59'),
(445, 44, 'BZsunkwhvgkIlP0F', 'Submitted KYC', '2021-02-12 07:13:13', '2021-02-12 07:13:13'),
(446, 43, '6rLxw30GhvIUKAjb', 'Logged In', '2021-02-12 07:36:46', '2021-02-12 07:36:46'),
(447, 43, 'mEqBJ8P4N1BlUwhN', 'Logged out - ::1', '2021-02-12 07:37:39', '2021-02-12 07:37:39'),
(448, 44, 'q95I0dsggqbtW8Rw', 'Logged In', '2021-02-12 07:37:49', '2021-02-12 07:37:49'),
(449, 44, 'HtdzpzZfI6KPkVUa', 'Logged out - ::1', '2021-02-12 07:37:58', '2021-02-12 07:37:58'),
(450, 43, 'haZkXzk7oGoogHWo', 'Logged In', '2021-02-12 07:39:08', '2021-02-12 07:39:08'),
(451, 43, '24adUB5RZWTAPDxP', 'Started attempt to purchase Gold', '2021-02-12 07:39:19', '2021-02-12 07:39:19'),
(452, 43, 'HJBo4dKMmQLvx6H3', 'Purchased plan #Gold', '2021-02-12 07:39:21', '2021-02-12 07:39:21'),
(453, 43, 'ptR5PHzeCvgTVj6L', 'Started attempt to purchase Gold', '2021-02-12 07:51:29', '2021-02-12 07:51:29'),
(454, 43, 'YmhIlQb9S4RP49G4', 'Started attempt to purchase Gold', '2021-02-12 07:51:35', '2021-02-12 07:51:35'),
(455, 43, 'fMrmezYZoEmor9ov', 'Started attempt to purchase Gold', '2021-02-12 07:53:50', '2021-02-12 07:53:50'),
(456, 43, 'XVaMbKvcbEPtA2FV', 'Started attempt to purchase Gold', '2021-02-12 07:54:19', '2021-02-12 07:54:19'),
(457, 43, 'P7jd9b8Z1XjkIF58', 'Started attempt to purchase Gold', '2021-02-12 07:55:26', '2021-02-12 07:55:26'),
(458, 43, 'PKnhtZXHptZCMumn', 'Started attempt to purchase Gold', '2021-02-12 07:55:39', '2021-02-12 07:55:39'),
(459, 43, '7EXD7KlgK2fAj1oL', 'Started attempt to purchase Gold', '2021-02-12 07:56:03', '2021-02-12 07:56:03'),
(460, 43, 'ZOtAbSAS9HylEngG', 'Purchased plan #Gold', '2021-02-12 07:56:08', '2021-02-12 07:56:08'),
(461, 43, 'RvYe0Bqq7BWrcjgk', 'Started attempt to purchase Gold', '2021-02-12 08:09:39', '2021-02-12 08:09:39'),
(462, 43, 'OgXXVnONIWcaj39j', 'Purchased plan #Gold', '2021-02-12 08:09:40', '2021-02-12 08:09:40'),
(463, 43, 'yNva5Y5GXJgRMA9l', 'Updated account details', '2021-02-12 08:09:54', '2021-02-12 08:09:54'),
(464, 43, 'LkYaR3S6UfCk3KH9', 'Logged In', '2021-02-12 10:59:01', '2021-02-12 10:59:01'),
(465, 43, 'aHNg3kJwipFcTDDC', 'Logged In', '2021-02-13 06:13:42', '2021-02-13 06:13:42'),
(466, 43, 'ZL1feIrV4KiPNu57', 'Started attempt to purchase Gold', '2021-02-13 06:20:56', '2021-02-13 06:20:56'),
(467, 43, 'VbEMMGkKMlxqmRXz', 'Purchased plan #Gold', '2021-02-13 06:21:01', '2021-02-13 06:21:01'),
(468, 43, 'WwI09NrzxwZUpr4J', 'Logged In', '2021-02-13 07:08:37', '2021-02-13 07:08:37'),
(469, 43, 'oY9AMfVQnHOp4Ytn', 'Logged out - ::1', '2021-02-13 07:08:52', '2021-02-13 07:08:52'),
(470, 43, 'Dg8R7lGftRHnRKfz', 'Logged In', '2021-02-13 07:11:51', '2021-02-13 07:11:51'),
(471, 43, 'nOlE2S7raYWu9RNL', 'Logged out - ::1', '2021-02-13 07:16:42', '2021-02-13 07:16:42'),
(472, 43, 'F2j8lzAYap0sf4qs', 'Logged In', '2021-02-13 08:39:22', '2021-02-13 08:39:22'),
(473, 43, 'XuHFEKD4rZIpV3Dd', 'Logged In', '2021-02-13 19:05:13', '2021-02-13 19:05:13'),
(474, 43, 'xln5lVBft4OuStnb', 'Started attempt to purchase Gold', '2021-02-13 19:06:40', '2021-02-13 19:06:40'),
(475, 43, 'vRH6VWUFQWArSfXm', 'Purchased plan #Gold', '2021-02-13 19:06:46', '2021-02-13 19:06:46'),
(476, 43, 'l76aJBH2kfeGmJn7', 'Logged In', '2021-02-14 08:25:12', '2021-02-14 08:25:12'),
(477, 43, 's1RcF1wtvI0b7nQR', 'Started attempt to purchase Test', '2021-02-14 08:27:03', '2021-02-14 08:27:03'),
(478, 43, 'dN9sfkFo0vdSXiff', 'Purchased plan #Test', '2021-02-14 08:27:07', '2021-02-14 08:27:07'),
(479, 42, 'y5Ldv4rtqdw19Qdc', 'Logged In', '2021-02-20 06:32:08', '2021-02-20 06:32:08'),
(480, 42, 'Jb5Sp2MTJK47mGCI', 'Logged In', '2021-02-20 08:51:16', '2021-02-20 08:51:16'),
(481, 42, 'bPU9lNvkwJq6ht8Q', 'Logged out - ::1', '2021-02-20 09:24:33', '2021-02-20 09:24:33'),
(482, 42, 'EVMFTRfX5rKaJTH5', 'Logged In', '2021-02-20 22:10:56', '2021-02-20 22:10:56'),
(483, 42, 'qe60DHNDHOLNQHyJ', 'Logged In', '2021-02-23 14:52:41', '2021-02-23 14:52:41'),
(484, 42, '5pj3m2U8bC80alNt', 'Logged In', '2021-03-03 16:45:57', '2021-03-03 16:45:57'),
(485, 42, 'H39MvIRXkSTmPFrL', 'Created Funding Request of 1000NGN via Boopmay', '2021-03-03 16:50:14', '2021-03-03 16:50:14'),
(486, 42, 'lQoCrr8rbqsApleo', 'Created Funding Request of 1000NGN via Boopmay', '2021-03-03 16:53:59', '2021-03-03 16:53:59'),
(487, 42, 'IqrNNcIC30F35Tu6', 'Logged In', '2021-03-07 11:19:07', '2021-03-07 11:19:07'),
(488, 42, 'gnceySlajc0JuIT1', 'Started attempt to purchase Gold', '2021-03-07 11:19:36', '2021-03-07 11:19:36'),
(489, 42, 'uIWnh0QhHKWciSfh', 'Purchased plan #Gold', '2021-03-07 11:19:38', '2021-03-07 11:19:38'),
(490, 42, 'qy4bPCzLwRVwZ43s', 'Logged In', '2021-03-08 04:55:28', '2021-03-08 04:55:28'),
(491, 42, 'pE8v4KEyroeSjbKL', 'Logged In', '2021-03-09 06:12:23', '2021-03-09 06:12:23'),
(492, 43, 'YrDzdGc7ksxSb8hp', 'Logged In', '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(493, 43, 'HWeYQhN8z7PafFuR', 'Submitted KYC', '2021-03-18 10:55:14', '2021-03-18 10:55:14'),
(494, 43, 'jqKnBxkJiSWdUEyG', 'Logged In', '2021-03-20 20:57:38', '2021-03-20 20:57:38'),
(495, 43, 'Stx3CfhOnWOy4OXH', 'Logged out - ::1', '2021-03-20 20:58:04', '2021-03-20 20:58:04'),
(496, 43, 'N8KGL1FNtGYUCU2O', 'Logged In', '2021-03-20 20:58:43', '2021-03-20 20:58:43'),
(497, 43, 'PxotFRQrESXeOGOq', 'Logged out - ::1', '2021-03-20 20:59:27', '2021-03-20 20:59:27'),
(498, 43, 'lymW0z7DSZSGePtM', 'Logged In', '2021-03-20 20:59:30', '2021-03-20 20:59:30'),
(499, 43, 'orPBrUlHqQGkauqR', 'Logged In', '2021-03-21 20:41:41', '2021-03-21 20:41:41'),
(500, 43, 'wMAHF6yr0zK2YOJg', 'Logged In', '2021-03-22 06:33:54', '2021-03-22 06:33:54'),
(501, 43, 'hqBoN6z7UD6iPuVL', 'Created Funding Request of 1000AKZ via Boopmay', '2021-03-22 06:34:06', '2021-03-22 06:34:06'),
(502, 43, 'qjGGWXPSXzUKmS4p', 'Created Funding Request of 10000AKZ via Boopmay', '2021-03-22 06:40:52', '2021-03-22 06:40:52'),
(503, 43, 'wze3QwX7DzgkheGd', 'Logged In', '2021-04-01 09:37:05', '2021-04-01 09:37:05'),
(504, 43, 'LxH0ORB1MtdJLmVJ', 'Created Funding Request of 1000AKZ via Boopmay', '2021-04-01 09:39:37', '2021-04-01 09:39:37'),
(505, 43, 'KMPmQOl9XusXwkVm', 'Logged In', '2021-04-01 18:07:49', '2021-04-01 18:07:49'),
(506, 43, 'hZyj9fSy3gIrLy5J', 'Created Funding Request of 1000AKZ via Boopmay', '2021-04-01 18:07:55', '2021-04-01 18:07:55'),
(507, 43, 'RXSyERtHDWiiXbT7', 'Created Funding Request of 200AKZ via Boopmay', '2021-04-01 18:31:39', '2021-04-01 18:31:39');
INSERT INTO `audit_logs` (`id`, `user_id`, `trx`, `log`, `created_at`, `updated_at`) VALUES
(508, 43, 'EthD0Mudl7k8KyoI', 'Created Funding Request of 200AKZ via Boopmay', '2021-04-01 18:32:52', '2021-04-01 18:32:52'),
(509, 43, '2jdJnrT67oj81W6X', 'Created Funding Request of 200AKZ via Boopmay', '2021-04-01 18:38:05', '2021-04-01 18:38:05'),
(510, 43, 'xawd62fdfbAup6Y9', 'Created Funding Request of 200AKZ via Boopmay', '2021-04-01 18:40:02', '2021-04-01 18:40:02'),
(511, 43, '9g9W514y7TT1cQtt', 'Logged In', '2021-04-03 09:25:26', '2021-04-03 09:25:26'),
(512, 43, 'Ur4LPsa1hWasATcG', 'Logged In', '2021-04-03 09:25:35', '2021-04-03 09:25:35'),
(513, 43, '2O6V6cuTE0ZDkLBD', 'Logged In', '2021-04-05 18:02:42', '2021-04-05 18:02:42'),
(514, 43, 'sdeOL6oFsNjFlvhx', 'Created Funding Request of 1000AKZ via Boopmay', '2021-04-05 18:02:50', '2021-04-05 18:02:50'),
(515, 43, '8Ix26oTYRSX3YaI4', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 18:06:26', '2021-04-05 18:06:26'),
(516, 43, 'vBnndpX6NLwI48B0', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 18:16:39', '2021-04-05 18:16:39'),
(517, 43, 'oBSzckdd01TfRSy9', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 18:18:34', '2021-04-05 18:18:34'),
(518, 43, '1DV9sCyFmEeTYfwW', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 18:59:07', '2021-04-05 18:59:07'),
(519, 43, 'oWsdt7Fk6RvkQNt4', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 19:28:43', '2021-04-05 19:28:43'),
(520, 43, 'iPCQuVch5ScXs5ig', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 19:28:43', '2021-04-05 19:28:43'),
(521, 43, 'XK4YqvgSBykZXuP4', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 19:41:17', '2021-04-05 19:41:17'),
(522, 43, '72SQZZGb9t3ZTkik', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 19:44:07', '2021-04-05 19:44:07'),
(523, 43, 'uHGX2ZgU7ziVPdWl', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 19:58:29', '2021-04-05 19:58:29'),
(524, 43, 'gs8Wp9Jv6zArwXpl', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 20:06:00', '2021-04-05 20:06:00'),
(525, 43, '1yZghfQnNZYOnZvy', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 20:13:20', '2021-04-05 20:13:20'),
(526, 43, 'ekjt3nwsQnXWcUWz', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 20:19:45', '2021-04-05 20:19:45'),
(527, 43, 'pieXEZXNIKtotwmn', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 20:56:04', '2021-04-05 20:56:04'),
(528, 43, '5zK5TL8AhctwG1a8', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-05 20:59:32', '2021-04-05 20:59:32'),
(529, 43, 'KF43AHC2CR04Oe2o', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-05 21:01:37', '2021-04-05 21:01:37'),
(530, 43, 'BXdaaM8tDrgtxZ2h', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-05 21:02:08', '2021-04-05 21:02:08'),
(531, 43, 'HUMy0wJjzLRm10M1', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-05 21:03:31', '2021-04-05 21:03:31'),
(532, 43, '7piNC3DcLdQhouQE', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-05 21:05:47', '2021-04-05 21:05:47'),
(533, 43, 'TRpPiNkLD67dmrIP', 'Logged In', '2021-04-06 04:53:20', '2021-04-06 04:53:20'),
(534, 43, 'Ffuv9RO5VQtnLpfG', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 04:53:26', '2021-04-06 04:53:26'),
(535, 43, 'A7sI3cvs7Mf2xXgV', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 04:58:20', '2021-04-06 04:58:20'),
(536, 43, 'RFiCrTlFB0fWlTUd', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 04:58:53', '2021-04-06 04:58:53'),
(537, 43, 'bDSkLLWDJm57d9Vc', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:06:09', '2021-04-06 05:06:09'),
(538, 43, 'D44a8YJ6sByRa1Km', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:13:31', '2021-04-06 05:13:31'),
(539, 43, 'iVYSB8XdJPoyn1av', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:18:18', '2021-04-06 05:18:18'),
(540, 43, '9VTWpcAfhBCGnreA', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:23:36', '2021-04-06 05:23:36'),
(541, 43, 'PXrwWGj6Oog4o1Ky', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:27:21', '2021-04-06 05:27:21'),
(542, 43, 'kAHyGSj4DnQ8tAFn', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:28:43', '2021-04-06 05:28:43'),
(543, 43, '2pebq8cW0JIco9U0', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:29:28', '2021-04-06 05:29:28'),
(544, 43, 'ZvJq1YxYAnUOdJKG', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-06 05:39:06', '2021-04-06 05:39:06'),
(545, 43, 'lBmm0lPchWqr1xH7', 'Logged In', '2021-04-06 07:48:25', '2021-04-06 07:48:25'),
(546, 43, '7YBRuuqctrl7bS4z', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-06 07:48:32', '2021-04-06 07:48:32'),
(547, 43, 'z0VH9dPYneaY4AJ6', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-06 08:13:19', '2021-04-06 08:13:19'),
(548, 43, 'vTDUkycGQH77iAhx', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-06 08:13:53', '2021-04-06 08:13:53'),
(549, 43, 'ywqG1vfoTyyCUl5D', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-06 08:15:43', '2021-04-06 08:15:43'),
(550, 43, 'L8j1NkM2AIKuFwsw', 'Created Funding Request of 300AKZ via Boopmay', '2021-04-06 08:24:08', '2021-04-06 08:24:08'),
(551, 43, 'Jp4PIbcmU1sCtzYT', 'Logged In', '2021-04-10 06:37:57', '2021-04-10 06:37:57'),
(552, 43, 'pO9o4enb3yiXvDEo', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-10 06:38:06', '2021-04-10 06:38:06'),
(553, 43, 'WDUcXVogvzx1lcmW', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-10 06:39:00', '2021-04-10 06:39:00'),
(554, 43, 'OeM0FmMenW8yoeXT', 'Logged In', '2021-04-16 15:39:39', '2021-04-16 15:39:39'),
(555, 43, '5W8tntdsneN7RDv3', 'Logged In', '2021-04-17 23:23:32', '2021-04-17 23:23:32'),
(556, 43, '39Pj4iknrxZYDYSu', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-17 23:23:52', '2021-04-17 23:23:52'),
(557, 43, 'POiUx4Ck5KgYAleS', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-17 23:26:16', '2021-04-17 23:26:16'),
(558, 43, '1X8A1dviFvhMgP3K', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-17 23:38:02', '2021-04-17 23:38:02'),
(559, 43, 'zkU9YQWvJ4IS2gs5', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-17 23:53:19', '2021-04-17 23:53:19'),
(560, 43, 'azpadeQQkxMXereB', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-18 00:05:15', '2021-04-18 00:05:15'),
(561, 43, 'KRUdJ78kMRfW7YVX', 'Created Funding Request of 100AKZ via Boopmay', '2021-04-18 00:11:57', '2021-04-18 00:11:57'),
(562, 43, 'jzVrzmXxHf95grj5', 'Logged In', '2021-04-20 07:48:18', '2021-04-20 07:48:18'),
(563, 43, '3wGz0l9zHlPTRryQ', 'Logged In', '2021-04-20 11:22:47', '2021-04-20 11:22:47'),
(564, 43, 'sWO8wqpvBGTu9CWW', 'Logged out - ::1', '2021-04-20 13:46:51', '2021-04-20 13:46:51'),
(565, 43, '7y0YBCzlXMQG9q37', 'Logged In', '2021-04-20 20:19:47', '2021-04-20 20:19:47'),
(566, 43, 'AHnjiLhXd6tjKeyD', 'Logged out - ::1', '2021-04-20 20:20:03', '2021-04-20 20:20:03'),
(567, 43, '6utUVPOMUmSPLwf0', 'Logged In', '2021-04-20 20:40:34', '2021-04-20 20:40:34'),
(568, 43, 'b91zQu1pwDSkPKbI', 'Logged out - ::1', '2021-04-20 20:40:37', '2021-04-20 20:40:37'),
(569, 43, 'SuQin6eUeQsRYNiu', 'Logged In', '2021-04-20 20:49:14', '2021-04-20 20:49:14'),
(570, 43, 'tFt1pWXpyhAuetWi', 'Logged out - ::1', '2021-04-20 20:49:34', '2021-04-20 20:49:34'),
(571, 43, 'oyWH04PuJB9WGYb7', 'Logged In', '2021-04-20 20:51:18', '2021-04-20 20:51:18'),
(572, 43, '8LCj10sChuVWUGsM', 'Logged out - ::1', '2021-04-20 20:51:23', '2021-04-20 20:51:23'),
(573, 43, 'P4sCRg5AM1LcdIKA', 'Logged In', '2021-04-20 22:36:42', '2021-04-20 22:36:42'),
(574, 43, 'LB1na1CB8gLj2HMx', 'Logged out - ::1', '2021-04-20 22:36:49', '2021-04-20 22:36:49'),
(575, 43, '0wkm17nIuHvHwu6Y', 'Logged In', '2021-04-20 23:03:28', '2021-04-20 23:03:28'),
(576, 43, 'IcJnua2RqKxKe3n5', 'Logged out - ::1', '2021-04-21 08:06:28', '2021-04-21 08:06:28'),
(577, 43, 'IX6PQkWUSZqDzpcc', 'Logged In', '2021-04-21 08:06:38', '2021-04-21 08:06:38'),
(578, 43, 'bI9vWwWEKzfW1T0J', 'Logged out - ::1', '2021-04-21 08:08:27', '2021-04-21 08:08:27'),
(579, 43, 'lMhpbRs40zjCLIBl', 'Logged In', '2021-04-21 08:46:04', '2021-04-21 08:46:04'),
(580, 43, 'tA0RFOs2CUWJPnsv', 'Logged out - ::1', '2021-04-21 09:06:32', '2021-04-21 09:06:32'),
(581, 43, 'IawK4uqWPsS7f2fP', 'Logged In', '2021-04-21 09:19:03', '2021-04-21 09:19:03'),
(582, 43, 'mTpVvLRoiMz5WCBb', 'Created Funding Request of 100AKZ via Stripe', '2021-04-21 09:19:34', '2021-04-21 09:19:34'),
(583, 43, '8CgkyILBIQC2iaJP', 'Logged In', '2021-04-27 10:16:23', '2021-04-27 10:16:23'),
(584, 43, 'XLmwd4KgArsJlDgU', 'Logged In', '2021-04-27 10:16:40', '2021-04-27 10:16:40'),
(585, 43, 'EMnp3fovTJk3nKqO', 'Logged In', '2021-04-27 23:41:01', '2021-04-27 23:41:01'),
(586, 43, 'FMI50Ru8leJvIO2D', 'Created Funding Request of 100AKZ via Flutterwave', '2021-04-28 00:04:45', '2021-04-28 00:04:45'),
(587, 43, 'MzrVjnMdVlQMZP20', 'Created Funding Request of 200USD via CoinPayment ETH', '2021-04-28 00:18:56', '2021-04-28 00:18:56'),
(588, 43, 'JTItVaTk0ZDCurjE', 'Created Funding Request of 200USD via Flutterwave', '2021-04-28 00:19:07', '2021-04-28 00:19:07'),
(589, 43, 'HLv6fmHAFA7astmq', 'Created Funding Request of 100USD via Coinbase', '2021-04-28 00:26:43', '2021-04-28 00:26:43'),
(590, 43, 'fRKdrjFyvfm0X9Ia', 'Created Funding Request of 100USD via Coinbase', '2021-04-28 00:27:15', '2021-04-28 00:27:15'),
(591, 43, 'ZH7mrOxm1ZihcTxi', 'Created Funding Request of 100USD via Coinbase', '2021-04-28 00:27:40', '2021-04-28 00:27:40'),
(592, 43, 'vVdz7KdkEGglW7OG', 'Created Funding Request of 100USD via Coinbase', '2021-04-28 00:28:09', '2021-04-28 00:28:09'),
(593, 43, 'yTwFPVxTg5itUNNJ', 'Submitted withdraw requestSTL-aPWML1', '2021-04-28 00:42:45', '2021-04-28 00:42:45'),
(594, 43, 'AilScqjwVuBKhLIa', 'Submitted withdraw requestSTL-6M3Tag', '2021-04-28 00:43:56', '2021-04-28 00:43:56'),
(595, 43, 'E5Vr2BSNLRF78xjJ', 'Logged out - ::1', '2021-04-28 01:03:42', '2021-04-28 01:03:42'),
(596, 43, 'umDk6dnLtdrJiJhA', 'Logged In', '2021-04-28 01:10:33', '2021-04-28 01:10:33'),
(597, 43, 'k1i29b6DAMM7tHkt', 'Logged In', '2021-04-30 19:23:13', '2021-04-30 19:23:13'),
(598, 43, 'PRO-90rxha', 'Verified Investment of $200 for jhvbdfhv', '2021-04-30 21:20:32', '2021-04-30 21:20:32'),
(599, 43, 'PRO-nUlM9b', 'Verified Investment of $450 for jhvbdfhv', '2021-04-30 21:24:06', '2021-04-30 21:24:06'),
(600, 43, 'LYKpx6KqoQueQlGK', 'Logged In', '2021-05-01 05:18:07', '2021-05-01 05:18:07'),
(601, 43, 'aemLKhbVdwXGDCZa', 'Logged In', '2021-05-01 14:34:29', '2021-05-01 14:34:29'),
(602, 43, 'QjQHHdmojmKiMihu', 'Logged In', '2021-05-01 19:11:47', '2021-05-01 19:11:47'),
(603, 43, 'MzpM3rsXCFmbCgtR', 'Created Funding Request of 1090USD via Stripe', '2021-05-01 19:13:39', '2021-05-01 19:13:39'),
(604, 43, 'ffiCYc70ishTTZv3', 'Logged In', '2021-05-02 04:23:39', '2021-05-02 04:23:39'),
(605, 43, 'g9KJKexxr3q9mU2i', 'Updated account details', '2021-05-02 04:26:11', '2021-05-02 04:26:11'),
(606, 43, 'GSsnSLuAtc9njyQn', 'Updated account details', '2021-05-02 07:46:51', '2021-05-02 07:46:51'),
(607, 43, 'O31TN5TFYDHmQ9Sc', 'Updated account details', '2021-05-02 07:47:00', '2021-05-02 07:47:00'),
(608, 43, 'GQHIqN1aJL5e0qpC', 'Updated account details', '2021-05-02 07:47:44', '2021-05-02 07:47:44'),
(609, 43, 'nUtvnf4i88BxGDBK', 'Updated account details', '2021-05-02 07:48:13', '2021-05-02 07:48:13'),
(610, 43, 'leVpuftO7r7pOGZo', 'Updated account details', '2021-05-02 07:48:47', '2021-05-02 07:48:47'),
(611, 43, 'vzjQQ5Hc4eFbeAS1', 'Updated account details', '2021-05-02 07:48:52', '2021-05-02 07:48:52'),
(612, 43, 'Y7ZCHgoHMygOxxGx', 'Updated account details', '2021-05-02 07:49:41', '2021-05-02 07:49:41'),
(613, 43, 'uDvgbw8LnfQQkSTv', 'Started attempt to purchase Test', '2021-05-02 09:04:14', '2021-05-02 09:04:14'),
(614, 43, 'Y2RwVAiZ0Wjr4CVT', 'Started attempt to purchase Test', '2021-05-02 09:09:30', '2021-05-02 09:09:30'),
(615, 43, 'ALggbl4gFFotZkZC', 'Started attempt to purchase Test', '2021-05-02 09:11:00', '2021-05-02 09:11:00'),
(616, 43, '2jrIJsxrQbnjLnlS', 'Started attempt to purchase Test', '2021-05-02 09:11:27', '2021-05-02 09:11:27'),
(617, 43, 'z8l1hYyID8Ygqpxp', 'Started attempt to purchase Test', '2021-05-02 09:11:42', '2021-05-02 09:11:42'),
(618, 43, '0Yn3DSNJaGf4OFIR', 'Started attempt to purchase Test', '2021-05-02 09:12:50', '2021-05-02 09:12:50'),
(619, 43, 'IMWTMqOGD4MdHNyd', 'Started attempt to purchase Test', '2021-05-02 09:13:00', '2021-05-02 09:13:00'),
(620, 43, '2jR5smjcsCvx22Ro', 'Started attempt to purchase Test', '2021-05-02 09:13:25', '2021-05-02 09:13:25'),
(621, 43, '6735tM5zzjqgSXQi', 'Started attempt to purchase Test', '2021-05-02 09:14:47', '2021-05-02 09:14:47'),
(622, 43, 'Lh9U7kja1g14qR1U', 'Started attempt to purchase Test', '2021-05-02 09:15:31', '2021-05-02 09:15:31'),
(623, 43, '8JrkkKqOjJeF8XUX', 'Started attempt to purchase Test', '2021-05-02 09:16:53', '2021-05-02 09:16:53'),
(624, 43, 'hzFmUgKfh0CpBEYE', 'Started attempt to purchase Test', '2021-05-02 09:17:13', '2021-05-02 09:17:13'),
(625, 43, 'Lsu9IFwNWts5mVRU', 'Started attempt to purchase Test', '2021-05-02 09:17:57', '2021-05-02 09:17:57'),
(626, 43, 'vDciF52xYGA2q0X9', 'Started attempt to purchase Test', '2021-05-02 09:18:30', '2021-05-02 09:18:30'),
(627, 43, '4CstGxQwAdXigmFA', 'Started attempt to purchase Test', '2021-05-02 09:18:40', '2021-05-02 09:18:40'),
(628, 43, 'Wp0TrlY8uEWugCV2', 'Started attempt to purchase Test', '2021-05-02 09:19:10', '2021-05-02 09:19:10'),
(629, 43, 'U1zW0njWga9sF4nH', 'Started attempt to purchase Test', '2021-05-02 09:19:23', '2021-05-02 09:19:23'),
(630, 43, 'NGPvP4XJFbSXqsfx', 'Started attempt to purchase Test', '2021-05-02 09:20:18', '2021-05-02 09:20:18'),
(631, 43, 'NjoVShHp5xn4hLcl', 'Started attempt to purchase Test', '2021-05-02 09:25:56', '2021-05-02 09:25:56'),
(632, 43, 'eclVJqSyrLfJk4GK', 'Started attempt to purchase Test', '2021-05-02 09:27:24', '2021-05-02 09:27:24'),
(633, 43, 'BPBkceFR5PHVvC0n', 'Started attempt to purchase Test', '2021-05-02 09:27:52', '2021-05-02 09:27:52'),
(634, 43, 'KMEqn3MshEA3Zp44', 'Started attempt to purchase Test', '2021-05-02 09:28:15', '2021-05-02 09:28:15'),
(635, 43, 'YdLVoLAWGoidXOcj', 'Started attempt to purchase Test', '2021-05-02 09:28:41', '2021-05-02 09:28:41'),
(636, 43, 'p7xzIU8bqQNszHnk', 'Started attempt to purchase Test', '2021-05-02 09:28:56', '2021-05-02 09:28:56'),
(637, 43, 'MgaNcVALGXoJ2fRb', 'Started attempt to purchase Test', '2021-05-02 09:29:08', '2021-05-02 09:29:08'),
(638, 43, 'xMnO5V0xZqU9R2XQ', 'Purchased plan #Test', '2021-05-02 09:29:41', '2021-05-02 09:29:41'),
(639, 43, 'LvMp4dSEkwAoFH7O', 'Started Recurring payment for #INV-lc14KX', '2021-05-02 09:29:59', '2021-05-02 09:29:59'),
(640, 43, 'miy1ZkEL10WkSVpU', 'Cancelled Recurring payment for #INV-lc14KX', '2021-05-02 09:30:04', '2021-05-02 09:30:04'),
(641, 43, 'PRO-ysbq4O', 'Verified Investment of $5000 for Poultry Farm In South West Nigeria', '2021-05-02 15:38:48', '2021-05-02 15:38:48'),
(642, 43, 'ufxUeChJrSfwIqSK', 'Logged In', '2021-05-02 18:11:16', '2021-05-02 18:11:16'),
(643, 43, 'u9HiJWNIr83EzkWw', 'Logged In', '2021-05-02 18:42:37', '2021-05-02 18:42:37'),
(644, 43, '169bVcaqBFSKcWkk', 'Logged out - ::1', '2021-05-02 18:43:32', '2021-05-02 18:43:32'),
(645, 45, 'PRO-zhIoPA', 'Verified Investment of $40000 for Cassava Farm Investment', '2021-05-08 14:23:16', '2021-05-08 14:23:16'),
(646, 45, 'Ib6jGUZaumgRvpl0', 'Submitted withdraw requestSTL-s2SLyo', '2021-05-08 14:24:31', '2021-05-08 14:24:31'),
(647, 45, 'WktfzhDnl2MsYTUn', 'Started attempt to purchase Advanced', '2021-05-08 14:25:25', '2021-05-08 14:25:25'),
(648, 45, 'Fd7XoVVD57t5mxpb', 'Purchased plan #Advanced', '2021-05-08 14:25:45', '2021-05-08 14:25:45'),
(649, 45, 'kdygIwk90aM5Jfe5', 'Started Recurring payment for #INV-57uegp', '2021-05-08 14:26:36', '2021-05-08 14:26:36'),
(650, 45, 'XYuWhnKVPi1fiEVN', 'Logged out - ::1', '2021-05-08 14:29:19', '2021-05-08 14:29:19'),
(651, 45, 'nn3LZUlAC5XRksuQ', 'Logged In', '2021-05-08 14:29:44', '2021-05-08 14:29:44'),
(652, 45, 'pr9tXeYqdzkzG5yG', 'Logged In', '2021-05-08 19:27:58', '2021-05-08 19:27:58'),
(653, 45, 'BELp8LTAYLKg4hiR', 'Created Ticket #BBKJszBR6YlVZFer', '2021-05-08 19:28:23', '2021-05-08 19:28:23'),
(654, 45, 'xaazURT87IVY5Hrc', 'Logged In', '2021-05-09 03:04:49', '2021-05-09 03:04:49'),
(655, 45, 'JbQcNJi0AZFIe43k', 'Withdraw request Approved STL-s2SLyo', '2021-05-09 03:42:52', '2021-05-09 03:42:52'),
(656, 45, 'cxFK7UUh8RZJr171', 'Logged In', '2021-05-09 07:18:04', '2021-05-09 07:18:04'),
(657, 45, 'WOkdZ8UjveMxtm8g', 'Replied Ticket #BBKJszBR6YlVZFer', '2021-05-09 07:22:20', '2021-05-09 07:22:20'),
(658, 45, 'vkvOCyyhUWsLOOlh', 'Logged In', '2021-05-10 12:41:40', '2021-05-10 12:41:40'),
(659, 45, 'rIHJ4Q1u3N9HvbdY', 'Logged In', '2021-05-10 18:42:01', '2021-05-10 18:42:01'),
(660, 45, 'CVO78mbqg43gS2b7', 'Logged In', '2021-05-11 10:10:58', '2021-05-11 10:10:58'),
(661, 45, 'HT2WdI8gr9RRhKpl', 'Logged In', '2021-05-11 19:03:29', '2021-05-11 19:03:29'),
(662, 45, 'VgFcCyYOZKaDWYKw', 'Submitted withdraw requestSTL-509aKU', '2021-05-11 20:50:10', '2021-05-11 20:50:10'),
(663, 45, '65E2bmcnlDc4yjoU', 'Logged In', '2021-05-12 06:04:50', '2021-05-12 06:04:50'),
(664, 45, 'r7GqUhiJb0DSXqml', 'Cancelled Recurring payment for #INV-57uegp', '2021-05-12 06:58:53', '2021-05-12 06:58:53'),
(665, 45, 'SbHelfAcXbHhOjDN', 'Started Recurring payment for #INV-57uegp', '2021-05-12 07:00:14', '2021-05-12 07:00:14'),
(666, 45, 'dYlcsalPaGokinuK', 'Created Funding Request of 400USD via Coinbase', '2021-05-12 07:00:26', '2021-05-12 07:00:26'),
(667, 45, 'fk3U8rAgJHea0RvW', 'Created Funding Request of 400USD via Coinbase', '2021-05-12 07:03:31', '2021-05-12 07:03:31'),
(668, 45, 'lJRqVuliHq122SOK', 'Started attempt to purchase Basic', '2021-05-12 07:04:08', '2021-05-12 07:04:08'),
(669, 45, 'GRMLwRilSLmtmHAp', 'Logged In', '2021-05-16 14:46:09', '2021-05-16 14:46:09'),
(670, 45, 'dZgdyg01qCtZHLSe', 'Updated account details', '2021-05-16 14:46:28', '2021-05-16 14:46:28'),
(671, 45, 'lm7MuZ6j4TY8DOCT', 'Logged In', '2021-05-18 05:47:49', '2021-05-18 05:47:49'),
(672, 45, '1xfwjeCmWdcWJg8u', 'Logged out - ::1', '2021-05-18 05:48:16', '2021-05-18 05:48:16'),
(673, 45, 'diUVQAuhvsuJDcIX', 'Logged In', '2021-05-19 19:52:25', '2021-05-19 19:52:25'),
(674, 45, '4UAdLuvRlwpDC4LK', 'Logged In', '2021-05-19 19:52:41', '2021-05-19 19:52:41'),
(675, 45, 'p1kH7X9hXc8UKmkV', 'Changed Password', '2021-05-19 19:53:08', '2021-05-19 19:53:08'),
(676, 45, 'A0XNzhTrwpSK3CMC', 'Logged In', '2021-05-20 15:45:21', '2021-05-20 15:45:21'),
(677, 45, 'Hp05KfvrUJWu5bIc', 'Created Funding Request of 1000USD via Paystack', '2021-05-20 15:45:37', '2021-05-20 15:45:37'),
(678, 45, 'QX71Tmo9c4qeZ0w1', 'Created Funding Request of 1000USD via Stripe', '2021-05-20 15:46:08', '2021-05-20 15:46:08'),
(679, 45, 'XKFlITpjwm9Wp4kl', 'Verified Funding Request of 1020USD via Stripe', '2021-05-20 15:46:42', '2021-05-20 15:46:42'),
(680, 45, '8fwYOZFmnMFb6RQ9', 'Logged In', '2021-05-21 04:56:44', '2021-05-21 04:56:44'),
(681, 45, 'Iih4S1bRX8L9Hjld', 'Logged In', '2021-05-22 18:49:49', '2021-05-22 18:49:49'),
(682, 45, 'DE02llIruoHKHeny', 'Logged In', '2021-05-25 10:16:19', '2021-05-25 10:16:19'),
(683, 45, 'oU8cG6BmZS0t1Vvp', 'Created Funding Request of 1000USD via Very Good Collection', '2021-05-25 10:54:08', '2021-05-25 10:54:08'),
(684, 45, 'rH0dMlWuDtuXQMG8', 'Verified Funding Request of 1020USD via Very Good Collection', '2021-05-25 10:58:42', '2021-05-25 10:58:42'),
(685, 45, 'PXH5DcBmMu680fJT', 'Created Funding Request of 4500USD via Very Good Collection', '2021-05-25 10:58:50', '2021-05-25 10:58:50'),
(686, 45, 'yVYab9EfMwyYAt2M', 'Verified Funding Request of 4590USD via Very Good Collection', '2021-05-25 10:59:12', '2021-05-25 10:59:12'),
(687, 45, '3YmTjVhcu9vYGrqM', 'Created Funding Request of 300USD via Very Good Collection', '2021-05-25 11:05:53', '2021-05-25 11:05:53'),
(688, 45, 'CIlgXkDPN9Sm8zPK', 'Created Funding Request of 2USD via Very Good Collection', '2021-05-25 11:33:02', '2021-05-25 11:33:02'),
(689, 45, '0MB8orCp5erRJf7o', 'Created Funding Request of 2USD via Very Good Collection', '2021-05-25 11:52:01', '2021-05-25 11:52:01'),
(690, 45, 'VQI4r3gd2v7zU3L5', 'Verified Funding Request of 2.04USD via Very Good Collection', '2021-05-25 11:56:01', '2021-05-25 11:56:01'),
(691, 45, 'bebRZIuehf4rijuj', 'Created Funding Request of 2USD via Very Good Collection', '2021-05-25 11:58:35', '2021-05-25 11:58:35'),
(692, 45, '1kE7d0Zg3mkEkLto', 'Created Funding Request of 2USD via Very Good Collection', '2021-05-25 12:16:57', '2021-05-25 12:16:57'),
(693, 45, 'IlsPcanDaLPA4mG8', 'Verified Funding Request of 2.04USD via Very Good Collection', '2021-05-25 12:22:03', '2021-05-25 12:22:03'),
(694, 45, 'LSsYMx6Iu0T7fjOW', 'Logged In', '2021-05-30 06:14:29', '2021-05-30 06:14:29'),
(695, 45, 'PUJbwcAfqyZantYU', 'Created Ticket #PNdQvUqGrLTuutBm', '2021-05-30 06:14:42', '2021-05-30 06:14:42'),
(696, 45, 'jOf8MVMUmQF2VhCc', 'Deleted Ticket #10', '2021-05-30 06:14:44', '2021-05-30 06:14:44'),
(697, 45, 'BIyG0NdTauenFANS', 'Submitted KYC', '2021-05-30 06:19:41', '2021-05-30 06:19:41'),
(698, 45, 'PRO-yDpGO1', 'Verified Investment of $30000 for waesdfgh', '2021-05-30 06:30:07', '2021-05-30 06:30:07'),
(699, 45, 'Kw2S0v2OQI314VqJ', 'Logged out - ::1', '2021-05-30 07:01:46', '2021-05-30 07:01:46'),
(700, 47, 'qghRrwH7sdb1TuTo', 'Logged out - ::1', '2021-05-30 07:08:18', '2021-05-30 07:08:18'),
(701, 48, 'BrbMjNlDs36hMGyR', 'Logged out - ::1', '2021-05-30 07:08:52', '2021-05-30 07:08:52'),
(702, 45, 'J9XrJw7aj7kAQUmE', 'Logged In', '2021-05-30 07:08:58', '2021-05-30 07:08:58'),
(703, 45, 'ST4Fm63WwjdLpkPW', 'Logged out - ::1', '2021-05-30 07:09:25', '2021-05-30 07:09:25'),
(704, 47, 'omVFG8B0NYvTOKIq', 'Logged In', '2021-05-30 07:09:42', '2021-05-30 07:09:42'),
(705, 47, 'ANKreYWO9FAInaO0', 'Started attempt to purchase Basic', '2021-05-30 07:10:19', '2021-05-30 07:10:19'),
(706, 47, 'LhEgTD8PCIKXTnPP', 'Purchased plan #Basic', '2021-05-30 07:10:25', '2021-05-30 07:10:25'),
(707, 45, 'x85fxFwaCax2h4Ew', 'Received $300 from 47', '2021-05-30 07:10:25', '2021-05-30 07:10:25'),
(708, 47, 'QUKBfMy3mYatDrrm', 'Paid $300 to sdfgHHHH', '2021-05-30 07:10:25', '2021-05-30 07:10:25'),
(709, 47, 'nBJVztelvM4SEGkP', 'Logged out - ::1', '2021-05-30 07:10:31', '2021-05-30 07:10:31'),
(710, 45, 'oQIQ3tDPEgeiZya6', 'Logged In', '2021-05-30 07:10:37', '2021-05-30 07:10:37'),
(711, 45, 'k2CNiDaZjw5VxHi3', 'Created Ticket #J0rKpxuqEzsmb4rs', '2021-05-30 07:17:43', '2021-05-30 07:17:43'),
(712, 45, 'LiS6NrXd2NwbSSjK', 'Replied Ticket #J0rKpxuqEzsmb4rs', '2021-05-30 07:17:47', '2021-05-30 07:17:47'),
(713, 45, 'keu8HT1Agfy9DGV2', 'Deleted Ticket #11', '2021-05-30 07:17:51', '2021-05-30 07:17:51'),
(714, 45, 'V5JnkUAwRR7YjFwm', 'Logged In', '2021-05-30 08:32:01', '2021-05-30 08:32:01'),
(715, 45, 'QqILifkWW32QfZ5j', 'Logged In', '2021-06-10 13:46:37', '2021-06-10 13:46:37'),
(716, 49, 'gunY3tbp4kt8ka4k', 'Logged out - 188.163.20.28', '2021-06-23 15:21:22', '2021-06-23 15:21:22'),
(717, 50, 'c870ceoEwOQCaFlM', 'Logged out - 188.163.20.28', '2021-06-23 15:22:32', '2021-06-23 15:22:32'),
(718, 49, 'neRmpzdcpzTC7svg', 'Logged In', '2021-06-23 15:23:32', '2021-06-23 15:23:32'),
(719, 49, 'H4xmf7YpUWxPJc8o', 'Logged In', '2021-06-23 19:52:17', '2021-06-23 19:52:17'),
(720, 49, 'QSYcIw6Wd6GQOkgC', 'Logged In', '2021-06-24 07:53:57', '2021-06-24 07:53:57'),
(721, 49, 'KJgy4Rcl4aSc5pBm', 'Logged out - 188.163.20.28', '2021-06-24 07:54:24', '2021-06-24 07:54:24'),
(722, 49, 'qMUwxbAvSiR57eHM', 'Logged In', '2021-06-24 07:57:58', '2021-06-24 07:57:58'),
(723, 49, 'JKef3Qi7whlpLFLP', 'Logged out - 188.163.20.28', '2021-06-24 08:04:14', '2021-06-24 08:04:14'),
(724, 51, 'NVPP8Mh4UCwb9sCP', 'Logged out - 188.163.20.28', '2021-06-24 08:08:17', '2021-06-24 08:08:17'),
(725, 49, 'Okg1nQpiMPtoMAN1', 'Logged In', '2021-06-24 08:08:19', '2021-06-24 08:08:19'),
(726, 49, 'ArOOz12sKdFsgvg1', 'Logged out - 188.163.20.28', '2021-06-24 08:10:07', '2021-06-24 08:10:07'),
(727, 51, '3KPfPI53Hw4V84GQ', 'Logged In', '2021-06-24 08:10:14', '2021-06-24 08:10:14'),
(728, 51, 'IzsMD0i3wk8QI2E9', 'Logged out - 188.163.20.28', '2021-06-24 08:10:44', '2021-06-24 08:10:44'),
(729, 52, 'u0draZEr5ZVIz0CW', 'Logged out - 188.163.20.28', '2021-06-24 08:12:54', '2021-06-24 08:12:54'),
(730, 51, '6nnzQLHUy89cyr4J', 'Logged In', '2021-06-24 08:13:00', '2021-06-24 08:13:00'),
(731, 51, '1dTCKU1js3ABWWdW', 'Logged out - 188.163.20.28', '2021-06-24 08:13:10', '2021-06-24 08:13:10'),
(732, 49, 'vvaKvDwYwgjQyhpq', 'Logged In', '2021-06-24 08:13:13', '2021-06-24 08:13:13'),
(733, 49, 'sZBygRwm9Ja2UGCr', 'Logged out - 188.163.20.28', '2021-06-24 08:18:16', '2021-06-24 08:18:16'),
(734, 49, 'apmuCVkxzptPxcmq', 'Logged In', '2021-06-24 12:57:17', '2021-06-24 12:57:17'),
(735, 49, 'FV91CEB2AOrvtcSV', 'Created Ticket #4QiLeVmyBG1cSPw8', '2021-06-24 12:58:50', '2021-06-24 12:58:50'),
(736, 49, 'DwStYClEKZrUYhr0', 'Logged In', '2021-06-29 11:01:25', '2021-06-29 11:01:25'),
(737, 49, 'z29aqfUqmIwlRc9u', 'Logged In', '2021-07-02 08:50:41', '2021-07-02 08:50:41'),
(738, 49, 'l2XL5DB20SmV42FH', 'Logged In', '2021-07-02 13:10:45', '2021-07-02 13:10:45'),
(739, 49, 'QT5JohflKr3MZMRW', 'Logged out - 188.163.20.28', '2021-07-02 13:56:59', '2021-07-02 13:56:59'),
(740, 52, 'NulYB1M4fKxQ4bWa', 'Logged In', '2021-07-02 13:57:17', '2021-07-02 13:57:17'),
(741, 52, 'FvyTSaF3CRcSYwx7', 'Created Funding Request of 550USD via PayPal', '2021-07-02 14:16:14', '2021-07-02 14:16:14'),
(742, 52, '8ymObX1sh6O30jM6', 'Created Funding Request of 550USD via PayPal', '2021-07-02 14:19:33', '2021-07-02 14:19:33'),
(743, 52, 'qsRcaFPmx6AQ7Htf', 'Logged In', '2021-07-03 15:13:18', '2021-07-03 15:13:18'),
(744, 53, 'gDzhziNuXiev78nA', 'Logged out - 188.163.20.28', '2021-07-04 01:01:30', '2021-07-04 01:01:30'),
(745, 54, '6LhizBt8H5qREI1d', 'Logged out - 188.163.20.28', '2021-07-04 01:03:09', '2021-07-04 01:03:09'),
(746, 55, '3MBeHKXdz5D154wn', 'Logged out - 188.163.20.28', '2021-07-04 01:05:30', '2021-07-04 01:05:30'),
(747, 56, 'Pa4h9v5JrbVcO8FZ', 'Logged out - 188.163.20.28', '2021-07-04 01:06:47', '2021-07-04 01:06:47'),
(748, 55, 'odcrTmqCq09nXw41', 'Logged In', '2021-07-04 01:07:03', '2021-07-04 01:07:03'),
(749, 55, 'woX0jPuMvDmzkrOV', 'Logged out - 188.163.20.28', '2021-07-04 01:07:46', '2021-07-04 01:07:46'),
(750, 55, 'LZRxDbFToi8Sff00', 'Logged In', '2021-07-04 01:07:52', '2021-07-04 01:07:52'),
(751, 55, 'DNnYXGMkVX0NgUnp', 'Logged out - 188.163.20.28', '2021-07-04 01:07:58', '2021-07-04 01:07:58'),
(752, 57, 'dKMSExa5hpokHOWk', 'Logged out - 188.163.20.28', '2021-07-04 01:23:29', '2021-07-04 01:23:29'),
(753, 58, 'YQH2elQBzLfgy4Yo', 'Logged out - 188.163.20.28', '2021-07-04 01:27:01', '2021-07-04 01:27:01'),
(754, 51, 'XxhjYZBG0LIWw41b', 'Logged In', '2021-07-04 01:36:24', '2021-07-04 01:36:24'),
(755, 51, 'ryLEpUuXc1zkK4KO', 'Logged out - 188.163.20.28', '2021-07-04 01:36:39', '2021-07-04 01:36:39'),
(756, 59, 'E2TCKogxrcSO0u9i', 'Logged out - 188.163.20.28', '2021-07-04 01:37:50', '2021-07-04 01:37:50'),
(757, 51, 'Bmx07s5tbjSrDwA3', 'Logged In', '2021-07-04 01:38:01', '2021-07-04 01:38:01'),
(758, 51, 'TzD44qbGOZbEUsIz', 'Logged out - 188.163.20.28', '2021-07-04 01:38:12', '2021-07-04 01:38:12'),
(759, 60, 'iB7DQ1R9rBJuqBKj', 'Logged out - 188.163.20.28', '2021-07-04 01:48:02', '2021-07-04 01:48:02'),
(760, 61, 'vtD6bFXw1Oji4Z6U', 'Logged out - 188.163.20.28', '2021-07-04 01:52:08', '2021-07-04 01:52:08'),
(761, 62, 'NveUgy9mSJjHXIkK', 'Logged out - 188.163.20.28', '2021-07-04 01:54:51', '2021-07-04 01:54:51'),
(762, 63, '7xehu2oT4495NRXH', 'Logged out - 188.163.20.28', '2021-07-04 01:56:02', '2021-07-04 01:56:02'),
(763, 64, 'fTXJAwCdcFb4paMu', 'Logged out - 188.163.20.28', '2021-07-04 01:57:44', '2021-07-04 01:57:44'),
(764, 65, '8jdlG54XOrHNfBOR', 'Logged out - 188.163.20.28', '2021-07-04 02:09:40', '2021-07-04 02:09:40'),
(765, 57, 'M5mHzuGzzVcy1TEE', 'Logged In', '2021-07-04 02:12:50', '2021-07-04 02:12:50'),
(766, 57, 'b2yikaEEx62uWkeX', 'Logged out - 188.163.20.28', '2021-07-04 02:16:27', '2021-07-04 02:16:27'),
(767, 57, 'ZpQVZcW76oxEDSjG', 'Logged In', '2021-07-04 02:24:30', '2021-07-04 02:24:30'),
(768, 57, 'myTYcCsvV5s1DmyY', 'Logged In', '2021-07-04 09:06:48', '2021-07-04 09:06:48'),
(769, 57, 'GBmNUdCaWaPqMAUk', 'Created Ticket #PCOAR79x06BMRwro', '2021-07-04 09:07:16', '2021-07-04 09:07:16'),
(770, 57, 'rNNgQG3pVTPL07ph', 'Logged out - 188.163.20.28', '2021-07-04 09:07:28', '2021-07-04 09:07:28'),
(771, 49, 'MqgmMDoJONwzFm3g', 'Logged In', '2021-07-04 09:11:39', '2021-07-04 09:11:39'),
(772, 49, 'LzVi2u62a0xWjaLi', 'Created Ticket #8ebhkOIS78Q7Ukvh', '2021-07-04 09:21:47', '2021-07-04 09:21:47'),
(773, 49, 'a858hzUzmXYFgFwV', 'Logged In', '2021-07-04 12:26:54', '2021-07-04 12:26:54'),
(774, 49, 'RX6mrZACJ8nsuK58', 'Created Ticket #KrE8HDMLYz9aXMyx', '2021-07-04 12:27:02', '2021-07-04 12:27:02'),
(775, 49, '0BItFnX4OLrKwuEJ', 'Logged In', '2021-07-04 14:58:30', '2021-07-04 14:58:30'),
(776, 49, 'bIhZO9Mg1Vs1kL3k', 'Created Ticket #1blV99ock1L4uBGS', '2021-07-04 16:04:44', '2021-07-04 16:04:44'),
(777, 49, 'nbpdbJ7Fy3BWPIXr', 'Replied Ticket #1blV99ock1L4uBGS', '2021-07-04 16:24:56', '2021-07-04 16:24:56'),
(778, 49, 'k1wLTeerBL1OWzaV', 'Logged out - 188.163.20.28', '2021-07-04 16:53:38', '2021-07-04 16:53:38'),
(779, 49, '9Q5dvVTJtUPJpyl9', 'Logged In', '2021-07-04 17:23:40', '2021-07-04 17:23:40'),
(780, 57, 'N5pGlHdSYX9c3tlq', 'Logged In', '2021-07-08 20:13:11', '2021-07-08 20:13:11'),
(781, 57, 'nYNyK8eqRyMqqdIc', 'Logged In', '2021-08-06 12:02:18', '2021-08-06 12:02:18'),
(782, 57, 'PRO-XT1qRy', 'Verified Investment of $300 for Cattle Herder Stock Program Investment', '2021-08-06 12:03:19', '2021-08-06 12:03:19'),
(783, 57, 'HofLNigSZOAhHOW7', 'Created Funding Request of 50USD via PayPal', '2021-08-06 12:03:45', '2021-08-06 12:03:45'),
(784, 57, 'VKlIp6cJqGTo5wDr', 'Logged out - 188.163.20.28', '2021-08-06 12:34:17', '2021-08-06 12:34:17'),
(785, 49, 'FbT1VzXnoNiTKet1', 'Logged In', '2021-08-06 12:44:20', '2021-08-06 12:44:20'),
(786, 49, 'PRO-OviGiz', 'Verified Investment of $4000 for Cassava Farm Investment', '2021-08-06 12:44:49', '2021-08-06 12:44:49'),
(787, 49, 'PRO-f5Dl3R', 'Verified Investment of $800 for Cassava Farm Investment', '2021-08-06 12:45:47', '2021-08-06 12:45:47'),
(788, 49, 'PRO-MGOiUi', 'Verified Investment of $8000 for Cassava Farm Investment', '2021-08-06 12:50:52', '2021-08-06 12:50:52'),
(789, 57, 'J3uodoKBIz4r4Icg', 'Logged In', '2021-08-06 13:57:16', '2021-08-06 13:57:16'),
(790, 49, 'lFleuuU184T0dvoH', 'Logged In', '2021-08-06 15:27:06', '2021-08-06 15:27:06'),
(791, 49, 'PRO-J9jLBE', 'Verified Investment of $4000 for Cassava Farm Investment', '2021-08-06 15:27:23', '2021-08-06 15:27:23'),
(792, 57, '4ysT6ecYKohFmNHW', 'Logged out - 188.163.20.28', '2021-08-06 15:32:04', '2021-08-06 15:32:04'),
(793, 57, '1Ebel5O1pegmNN9z', 'Logged In', '2021-08-06 15:34:40', '2021-08-06 15:34:40'),
(794, 57, 'UA8lmBel3gtYM3vf', 'Logged In', '2021-08-06 20:44:38', '2021-08-06 20:44:38'),
(795, 57, 'PRO-m0ME27', 'Verified Investment of $200 for Cassava Farm Investment', '2021-08-06 20:45:53', '2021-08-06 20:45:53'),
(796, 57, 'mxPExYeFmKtjcXJq', 'Logged In', '2021-08-10 14:30:40', '2021-08-10 14:30:40'),
(797, 57, 'PRO-S0SMSW', 'Verified Investment of $300 for Cattle Herder Stock Program Investment', '2021-08-10 14:30:56', '2021-08-10 14:30:56'),
(798, 57, '0Z3X9ugKnddEXIu7', 'Logged out - 188.163.20.28', '2021-08-10 14:33:38', '2021-08-10 14:33:38'),
(799, 57, 'VGVC2WGx3r6hRawZ', 'Logged In', '2021-08-11 12:21:58', '2021-08-11 12:21:58'),
(800, 57, 'PRO-aaG2Sl', 'Verified Investment of $80000 for Create Name', '2021-08-11 12:23:51', '2021-08-11 12:23:51'),
(801, 57, 'kuuacFfMA9I9JQk3', 'Logged In', '2021-08-12 11:16:30', '2021-08-12 11:16:30'),
(802, 49, 'zmLmU8InxjQNubSH', 'Logged In', '2021-08-13 08:00:33', '2021-08-13 08:00:33'),
(803, 49, 'ssl6PNzQtEgGBOvO', 'Logged In', '2021-08-14 06:55:03', '2021-08-14 06:55:03'),
(804, 49, 'ozgg2ammlD5vw8K9', 'Logged In', '2021-08-15 11:24:01', '2021-08-15 11:24:01'),
(805, 49, 'vVIfA6jbdRxH3a80', 'Logged out - 188.163.20.28', '2021-08-15 11:25:02', '2021-08-15 11:25:02'),
(806, 49, 'ZV1q6lO0Lf8K8pTp', 'Logged In', '2021-08-15 16:09:02', '2021-08-15 16:09:02'),
(807, 49, 'PRO-iHS5xD', 'Verified Investment of $20000 for Cassava Farm Investment', '2021-08-15 16:40:44', '2021-08-15 16:40:44'),
(808, 49, 'eOTj5saNQ9cmAEE5', 'Logged In', '2021-08-16 11:28:02', '2021-08-16 11:28:02'),
(809, 49, 'Z1kenItA0wzWSxr0', 'Logged In', '2021-08-16 14:30:51', '2021-08-16 14:30:51'),
(810, 49, 'vsIzxUglIcOt1Zjh', 'Logged In', '2021-08-26 08:44:05', '2021-08-26 08:44:05'),
(811, 49, 'PRO-MUXkBo', 'Verified Investment of $300 for Cattle Herder Stock Program Investment', '2021-08-26 08:52:09', '2021-08-26 08:52:09'),
(812, 49, 'EwcezomUKE6wQK9j', 'Logged out - 188.163.20.28', '2021-08-26 08:58:04', '2021-08-26 08:58:04'),
(813, 49, 'RXbEITwBjIQMuY6V', 'Logged In', '2021-08-26 09:00:01', '2021-08-26 09:00:01'),
(814, 49, 'MHVqxtItShyTcZBx', 'Logged out - 188.163.20.28', '2021-08-26 11:37:21', '2021-08-26 11:37:21'),
(815, 49, 'VuNr20Vp7WcbZybi', 'Logged In', '2021-08-26 13:35:46', '2021-08-26 13:35:46'),
(816, 49, 'ZPnYPJ2DsxljehnD', 'Logged out - 188.163.20.28', '2021-08-26 14:06:32', '2021-08-26 14:06:32'),
(817, 49, 'yQQtlnspPHbgomrC', 'Logged In', '2021-08-26 14:10:49', '2021-08-26 14:10:49'),
(818, 49, 'qZQLdmJcAgcybcp2', 'Logged out - 188.163.20.28', '2021-08-26 14:13:38', '2021-08-26 14:13:38'),
(819, 67, 'PRO-UQxt31', 'Verified Investment of $5000 for B.A.M TICKETING', '2021-08-26 14:39:38', '2021-08-26 14:39:38'),
(820, 67, 'HlSHZC5B9X75rew3', 'Logged out - 188.163.20.28', '2021-08-26 15:34:23', '2021-08-26 15:34:23'),
(821, 49, 'BY7y3ey0Tj8SMNwx', 'Logged In', '2021-09-06 07:46:30', '2021-09-06 07:46:30');

-- --------------------------------------------------------

--
-- Структура таблицы `bank_transfer`
--

CREATE TABLE `bank_transfer` (
  `id` int(11) NOT NULL,
  `user_id` int(32) NOT NULL,
  `trx` varchar(32) DEFAULT NULL,
  `amount` int(32) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(32) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int(32) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(2) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `image`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'brand_1595624243.png', 'Capterra', 1, '2020-07-24 20:57:23', '2020-07-24 19:57:23'),
(2, 'brand_1595624257.png', 'crowd', 1, '2020-07-24 20:57:37', '2020-07-24 19:57:37'),
(3, 'brand_1595624229.png', 'Getapp', 1, '2020-07-24 20:57:09', '2020-07-24 19:57:09'),
(4, 'brand_1595624268.png', 'softwareadvice', 1, '2020-07-24 20:57:48', '2020-07-24 19:57:48'),
(5, 'brand_1613500498.png', 'trustpilot', 1, '2021-02-16 18:34:58', '2021-02-16 17:34:58');

-- --------------------------------------------------------

--
-- Структура таблицы `claimed`
--

CREATE TABLE `claimed` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `profit_id` int(32) NOT NULL,
  `amount` double NOT NULL,
  `date` varchar(32) NOT NULL,
  `ref` varchar(32) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `claimed`
--

INSERT INTO `claimed` (`id`, `user_id`, `profit_id`, `amount`, `date`, `ref`, `type`, `created_at`, `updated_at`) VALUES
(26, 43, 129, 100, '2021-02-12 00:00:00', 'HIS-HDKJhq', NULL, '2021-02-12 05:40:37', '2021-02-12 05:40:37'),
(27, 43, 130, 1400, '2021-02-12 00:00:00', 'HIS-8BjsT0', NULL, '2021-02-12 05:56:20', '2021-02-12 05:56:20'),
(28, 43, 130, 5000, '2021-02-12 00:00:00', 'HIS-4Cvq41', NULL, '2021-02-12 05:56:20', '2021-02-12 05:56:20'),
(29, 43, 130, 1400, '2021-02-12 00:00:00', 'HIS-ZhXVGF', NULL, '2021-02-12 05:57:24', '2021-02-12 05:57:24'),
(30, 43, 130, 5000, '2021-02-12 00:00:00', 'HIS-cAtVoM', NULL, '2021-02-12 05:57:24', '2021-02-12 05:57:24'),
(31, 43, 130, 1400, '2021-02-12 00:00:00', 'HIS-uOZ1gQ', NULL, '2021-02-12 06:05:24', '2021-02-12 06:05:24'),
(32, 43, 130, 5000, '2021-02-12 00:00:00', 'HIS-Aw46OZ', NULL, '2021-02-12 06:05:24', '2021-02-12 06:05:24'),
(33, 43, 130, 1400, '2021-02-12 00:00:00', 'HIS-x0RaLR', NULL, '2021-02-12 06:05:55', '2021-02-12 06:05:55'),
(34, 43, 130, 5000, '2021-02-12 00:00:00', 'HIS-QIuTQJ', NULL, '2021-02-12 06:05:55', '2021-02-12 06:05:55'),
(38, 43, 132, 1200, '2021-02-12 00:00:00', 'HIS-V6wCOP', NULL, '2021-02-12 06:28:43', '2021-02-12 06:28:43'),
(39, 43, 132, 5000, '2021-02-12 00:00:00', 'HIS-XKohhb', NULL, '2021-02-12 06:28:43', '2021-02-12 06:28:43'),
(40, 43, 131, 1000, '2021-02-12 00:00:00', 'HIS-PcZnuD', NULL, '2021-02-12 06:32:15', '2021-02-12 06:32:15'),
(41, 43, 131, 0, '2021-02-13 00:00:00', 'HIS-SBqKHW', NULL, '2021-02-13 06:13:42', '2021-02-13 06:13:42'),
(42, 43, 131, 5000, '2021-02-13 00:00:00', 'HIS-m3W2nk', NULL, '2021-02-13 06:13:42', '2021-02-13 06:13:42'),
(43, 43, 133, 53421.696, '2021-03-18 00:00:00', 'HIS-aKtZmZ', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(44, 43, 133, 55647.6, '2021-03-18 00:00:00', 'HIS-tX8Z8O', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(45, 43, 134, 41884.32, '2021-03-18 00:00:00', 'HIS-yyWWhW', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(46, 43, 134, 43629.5, '2021-03-18 00:00:00', 'HIS-BnyyaM', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(47, 43, 135, 4800, '2021-03-18 00:00:00', 'HIS-zdHcBJ', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(48, 43, 135, 5000, '2021-03-18 00:00:00', 'HIS-B2hAxs', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(49, 43, 136, 46983.756, '2021-03-18 00:00:00', 'HIS-fUAPOK', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(50, 43, 136, 51069.3, '2021-03-18 00:00:00', 'HIS-kdW0Td', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(51, 43, 137, 45140.996, '2021-03-18 00:00:00', 'HIS-AbpkPV', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(52, 43, 137, 49066.3, '2021-03-18 00:00:00', 'HIS-iCH0g6', NULL, '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(53, 43, 138, 33357.371, '2021-04-01 00:00:00', 'HIS-KPsihf', NULL, '2021-04-01 09:37:05', '2021-04-01 09:37:05'),
(54, 43, 138, 66054.2, '2021-04-01 00:00:00', 'HIS-nVpwlQ', NULL, '2021-04-01 09:37:05', '2021-04-01 09:37:05'),
(55, 42, 139, 4508.432, '2021-04-10 00:00:00', 'HIS-ANDEu6', NULL, '2021-04-10 06:37:57', '2021-04-10 06:37:57'),
(56, 42, 139, 28177.7, '2021-04-10 00:00:00', 'HIS-fJLJ9k', NULL, '2021-04-10 06:37:57', '2021-04-10 06:37:57'),
(57, 45, 141, 300, '2021-05-12 00:00:00', 'HIS-tyTIu7', NULL, '2021-05-12 06:59:24', '2021-05-12 06:59:24'),
(58, 47, 142, 1600, '2021-06-29 00:00:00', 'HIS-AfMTgk', NULL, '2021-06-29 10:59:57', '2021-06-29 10:59:57'),
(59, 47, 142, 10000, '2021-06-29 00:00:00', 'HIS-Is225V', NULL, '2021-06-29 10:59:57', '2021-06-29 10:59:57'),
(60, 45, 149, 39000, '2021-07-01 00:00:00', 'HIS-uMZ453', 1, '2021-07-01 17:51:13', '2021-07-01 17:51:13'),
(61, 45, 141, 38200, '2021-07-07 00:00:00', 'HIS-szG6ZC', NULL, '2021-07-07 15:30:04', '2021-07-07 15:30:04'),
(62, 45, 141, 50000, '2021-07-07 00:00:00', 'HIS-IuKzLY', NULL, '2021-07-07 15:30:04', '2021-07-07 15:30:04'),
(63, 45, 141, 38200, '2021-09-06 00:00:00', 'HIS-LlJZXt', NULL, '2021-09-06 07:46:22', '2021-09-06 07:46:22'),
(64, 45, 141, 50000, '2021-09-06 00:00:00', 'HIS-dUlhFL', NULL, '2021-09-06 07:46:22', '2021-09-06 07:46:22'),
(65, 67, 160, 19395, '2021-10-06 00:00:00', 'HIS-n3XNlk', 1, '2021-10-06 17:16:47', '2021-10-06 17:16:47');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `subject`, `mobile`, `email`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(8, 'chidi inyama', 'Benin', '08127836749', 'inyamachidi355@gmail.com', 'qwertfg', NULL, '2021-04-20 20:57:56', '2021-04-20 20:57:56'),
(9, 'chidi inyama', 'Benin', '08127836749', 'inyamachidi355@gmail.com', 'asdfgh', NULL, '2021-04-20 20:58:48', '2021-04-20 20:58:48'),
(10, 'test', 'test-Subject', '380979390016', 'test@test.com', 'test help', NULL, '2021-06-24 12:56:16', '2021-06-24 12:56:16');

-- --------------------------------------------------------

--
-- Структура таблицы `coupon`
--

CREATE TABLE `coupon` (
  `id` int(32) NOT NULL,
  `code` varchar(8) NOT NULL,
  `percent` float NOT NULL,
  `status` int(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `percent`, `status`, `created_at`, `updated_at`) VALUES
(3, 'JBFJSS', 10, 1, '2021-02-11 09:03:55', '2021-02-11 09:03:55');

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `symbol` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `country`, `currency`, `name`, `symbol`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Albania', 'Leke', 'ALL', 'Lek', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(2, 'America', 'Dollars', 'USD', '$', 0, '2021-01-28 12:27:40', '2020-09-03 20:16:48'),
(3, 'Afghanistan', 'Afghanis', 'AFN', '؋', 0, '2020-09-03 21:16:48', '2020-09-03 20:16:48'),
(4, 'Argentina', 'Pesos', 'ARS', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(5, 'Aruba', 'Guilders', 'AWG', 'ƒ', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(6, 'Australia', 'Dollars', 'AUD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(7, 'Azerbaijan', 'New Manats', 'AZN', 'ман', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(8, 'Bahamas', 'Dollars', 'BSD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(9, 'Barbados', 'Dollars', 'BBD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(10, 'Belarus', 'Rubles', 'BYR', 'p.', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(11, 'Belgium', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(12, 'Beliz', 'Dollars', 'BZD', 'BZ$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(13, 'Bermuda', 'Dollars', 'BMD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(14, 'Bolivia', 'Bolivianos', 'BOB', '$b', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(15, 'Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(16, 'Botswana', 'Pula', 'BWP', 'P', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(17, 'Bulgaria', 'Leva', 'BGN', 'лв', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(18, 'Brazil', 'Reais', 'BRL', 'R$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(19, 'Britain (United Kingdom)', 'Pounds', 'GBP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(20, 'Brunei Darussalam', 'Dollars', 'BND', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(21, 'Cambodia', 'Riels', 'KHR', '៛', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(22, 'Canada', 'Dollars', 'CAD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(23, 'Cayman Islands', 'Dollars', 'KYD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(24, 'Chile', 'Pesos', 'CLP', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(25, 'China', 'Yuan Renminbi', 'CNY', '¥', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(26, 'Colombia', 'Pesos', 'COP', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(27, 'Costa Rica', 'Colón', 'CRC', '₡', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(28, 'Croatia', 'Kuna', 'HRK', 'kn', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(29, 'Cuba', 'Pesos', 'CUP', '₱', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(30, 'Cyprus', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(31, 'Czech Republic', 'Koruny', 'CZK', 'Kč', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(32, 'Denmark', 'Kroner', 'DKK', 'kr', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(33, 'Dominican Republic', 'Pesos', 'DOP ', 'RD$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(34, 'East Caribbean', 'Dollars', 'XCD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(35, 'Egypt', 'Pounds', 'EGP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(36, 'El Salvador', 'Colones', 'SVC', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(37, 'England (United Kingdom)', 'Pounds', 'GBP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(38, 'Euro', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(39, 'Falkland Islands', 'Pounds', 'FKP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(40, 'Fiji', 'Dollars', 'FJD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(41, 'France', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(42, 'Ghana', 'Cedis', 'GHC', '¢', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(43, 'Gibraltar', 'Pounds', 'GIP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(44, 'Greece', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(45, 'Guatemala', 'Quetzales', 'GTQ', 'Q', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(46, 'Guernsey', 'Pounds', 'GGP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(47, 'Guyana', 'Dollars', 'GYD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(48, 'Holland (Netherlands)', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(49, 'Honduras', 'Lempiras', 'HNL', 'L', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(50, 'Hong Kong', 'Dollars', 'HKD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(51, 'Hungary', 'Forint', 'HUF', 'Ft', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(52, 'Iceland', 'Kronur', 'ISK', 'kr', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(53, 'India', 'Rupees', 'INR', 'Rp', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(54, 'Indonesia', 'Rupiahs', 'IDR', 'Rp', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(55, 'Iran', 'Rials', 'IRR', '﷼', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(56, 'Ireland', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(57, 'Isle of Man', 'Pounds', 'IMP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(58, 'Israel', 'New Shekels', 'ILS', '₪', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(59, 'Italy', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(60, 'Jamaica', 'Dollars', 'JMD', 'J$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(61, 'Japan', 'Yen', 'JPY', '¥', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(62, 'Jersey', 'Pounds', 'JEP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(63, 'Kazakhstan', 'Tenge', 'KZT', 'лв', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(64, 'Korea (North)', 'Won', 'KPW', '₩', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(65, 'Korea (South)', 'Won', 'KRW', '₩', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(66, 'Kyrgyzstan', 'Soms', 'KGS', 'лв', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(67, 'Laos', 'Kips', 'LAK', '₭', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(68, 'Latvia', 'Lati', 'LVL', 'Ls', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(69, 'Lebanon', 'Pounds', 'LBP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(70, 'Liberia', 'Dollars', 'LRD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(71, 'Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(72, 'Lithuania', 'Litai', 'LTL', 'Lt', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(73, 'Luxembourg', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(74, 'Macedonia', 'Denars', 'MKD', 'ден', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(75, 'Malaysia', 'Ringgits', 'MYR', 'RM', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(76, 'Malta', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(77, 'Mauritius', 'Rupees', 'MUR', '₨', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(78, 'Mexico', 'Pesos', 'MXN', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(79, 'Mongolia', 'Tugriks', 'MNT', '₮', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(80, 'Mozambique', 'Meticais', 'MZN', 'MT', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(81, 'Namibia', 'Dollars', 'NAD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(82, 'Nepal', 'Rupees', 'NPR', '₨', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(83, 'Netherlands Antilles', 'Guilders', 'ANG', 'ƒ', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(84, 'Netherlands', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(85, 'New Zealand', 'Dollars', 'NZD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(86, 'Nicaragua', 'Cordobas', 'NIO', 'C$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(87, 'Nigeria', 'Nairas', 'NGN', '₦', 0, '2021-03-21 21:55:29', '0000-00-00 00:00:00'),
(88, 'North Korea', 'Won', 'KPW', '₩', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(89, 'Norway', 'Krone', 'NOK', 'kr', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(90, 'Oman', 'Rials', 'OMR', '﷼', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(91, 'Pakistan', 'Rupees', 'PKR', '₨', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(92, 'Panama', 'Balboa', 'PAB', 'B/.', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(93, 'Paraguay', 'Guarani', 'PYG', 'Gs', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(94, 'Peru', 'Nuevos Soles', 'PEN', 'S/.', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(95, 'Philippines', 'Pesos', 'PHP', 'Php', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(96, 'Poland', 'Zlotych', 'PLN', 'zł', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(97, 'Qatar', 'Rials', 'QAR', '﷼', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(98, 'Romania', 'New Lei', 'RON', 'lei', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(99, 'Russia', 'Rubles', 'RUB', 'руб', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(100, 'Saint Helena', 'Pounds', 'SHP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(101, 'Saudi Arabia', 'Riyals', 'SAR', '﷼', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(102, 'Serbia', 'Dinars', 'RSD', 'Дин.', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(103, 'Seychelles', 'Rupees', 'SCR', '₨', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(104, 'Singapore', 'Dollars', 'SGD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(105, 'Slovenia', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(106, 'Solomon Islands', 'Dollars', 'SBD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(107, 'Somalia', 'Shillings', 'SOS', 'S', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(108, 'South Africa', 'Rand', 'ZAR', 'R', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(109, 'South Korea', 'Won', 'KRW', '₩', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(110, 'Spain', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(111, 'Sri Lanka', 'Rupees', 'LKR', '₨', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(112, 'Sweden', 'Kronor', 'SEK', 'kr', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(113, 'Switzerland', 'Francs', 'CHF', 'CHF', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(114, 'Suriname', 'Dollars', 'SRD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(115, 'Syria', 'Pounds', 'SYP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(116, 'Taiwan', 'New Dollars', 'TWD', 'NT$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(117, 'Thailand', 'Baht', 'THB', '฿', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(118, 'Trinidad and Tobago', 'Dollars', 'TTD', 'TT$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(119, 'Turkey', 'Lira', 'TRY', 'TL', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(120, 'Turkey', 'Liras', 'TRL', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(121, 'Tuvalu', 'Dollars', 'TVD', '$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(122, 'Ukraine', 'Hryvnia', 'UAH', '₴', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(123, 'United Kingdom', 'Pounds', 'GBP', '£', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(124, 'United States of America', 'Dollars', 'USD', '$', 1, '2021-04-28 01:09:42', '2021-04-28 00:09:42'),
(125, 'Uruguay', 'Pesos', 'UYU', '$U', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(126, 'Uzbekistan', 'Sums', 'UZS', 'лв', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(127, 'Vatican City', 'Euro', 'EUR', '€', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(128, 'Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(129, 'Vietnam', 'Dong', 'VND', '₫', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(130, 'Yemen', 'Rials', 'YER', '﷼', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(131, 'Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(132, 'India', 'Rupees', 'INR', '₹', 0, '2020-03-31 08:28:57', '0000-00-00 00:00:00'),
(133, 'Angola', 'Kwanza', 'AKZ', 'Kz', 0, '2021-04-28 01:09:42', '2021-04-28 00:09:42');

-- --------------------------------------------------------

--
-- Структура таблицы `deposits`
--

CREATE TABLE `deposits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_amo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `try` int(11) NOT NULL DEFAULT '0',
  `secret` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txn_id` text COLLATE utf8mb4_unicode_ci,
  `status_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `gateway_id`, `amount`, `charge`, `btc_amo`, `btc_wallet`, `trx`, `status`, `try`, `secret`, `txn_id`, `status_url`, `created_at`, `updated_at`) VALUES
(282, 45, 507, '408', '8', '0', '', 'O3Q3mOLaoQkZtKg6', 0, 0, 'VK9REZJ7', NULL, NULL, '2021-05-12 07:00:26', '2021-05-12 07:00:29'),
(283, 45, 507, '408', '8', '0', '', 'NmWGDDrm9xLYWTLJ', 0, 0, '75K2R9QX', NULL, NULL, '2021-05-12 07:03:31', '2021-05-12 07:03:33'),
(284, 45, 107, '1030', '30', '0', '', 'fIh82Bu07nVTEKCn', 0, 0, 'cOKMS6zV', NULL, NULL, '2021-05-20 15:45:37', '2021-05-20 15:45:37'),
(285, 45, 103, '1020', '20', '0', '', 'riN8fAbaZtb4gLNg', 1, 0, 'XNWRXYnJ', NULL, NULL, '2021-05-20 15:46:08', '2021-05-20 15:46:42'),
(286, 45, 508, '1020', '20', '0', '', '1fEQqjhAxNoc66xi', 1, 0, '6Mg8aGK3', NULL, NULL, '2021-05-25 10:54:08', '2021-05-25 10:58:42'),
(287, 45, 508, '4590', '90', '0', '', '0w3sqo6Rzh52CQae', 1, 0, 'yMySoLZz', NULL, NULL, '2021-05-25 10:58:50', '2021-05-25 10:59:12'),
(288, 45, 508, '306', '6', '0', '', 'HRUByJtFP0VRe0fV', 0, 0, 'aQC3TdI7', NULL, NULL, '2021-05-25 11:05:53', '2021-05-25 11:05:53'),
(289, 45, 508, '2.04', '0.04', '0', '', 'OURDdupfu0sdcW8K', 0, 0, '26HbsT8u', NULL, NULL, '2021-05-25 11:33:02', '2021-05-25 11:33:02'),
(290, 45, 508, '2.04', '0.04', '0', '', 'rHxd5xmysNnCjsvP', 1, 0, 'wkSXZzKp', NULL, NULL, '2021-05-25 11:52:01', '2021-05-25 11:56:01'),
(291, 45, 508, '2.04', '0.04', '0', '', 'FUMowZkWHurH2nBi', 0, 0, 'g7cDPGRW', NULL, NULL, '2021-05-25 11:58:35', '2021-05-25 11:58:35'),
(292, 45, 508, '2.04', '0.04', '0', '', 'QWprOEYmD1hoXdl1', 1, 0, 'n5K8XSZ6', NULL, NULL, '2021-05-25 12:16:57', '2021-05-25 12:22:03'),
(293, 52, 101, '552.8105', '2.8105', '0', '', 'DzJfIewxFi0sbjQn', 0, 0, 'vNzoSc6k', NULL, NULL, '2021-07-02 14:16:14', '2021-07-02 14:16:14'),
(294, 52, 101, '552.8105', '2.8105', '0', '', 'WuL0x4bg064heXx7', 0, 0, 'Rk6axAQ0', NULL, NULL, '2021-07-02 14:19:33', '2021-07-02 14:19:33'),
(295, 57, 101, '50.2555', '0.2555', '0', '', '604O7dRXXuEJir6h', 0, 0, 'BreQIGD1', NULL, NULL, '2021-08-06 12:03:45', '2021-08-06 12:03:45');

-- --------------------------------------------------------

--
-- Структура таблицы `devices`
--

CREATE TABLE `devices` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `name` text NOT NULL,
  `ip_address` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `devices`
--

INSERT INTO `devices` (`id`, `user_id`, `name`, `ip_address`, `created_at`, `updated_at`) VALUES
(22, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '::1', '2020-12-06 13:04:14', '2020-12-06 13:04:14'),
(23, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '::1', '2020-12-20 19:22:38', '2020-12-20 19:22:38'),
(24, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2020-12-21 13:11:55', '2020-12-21 13:11:55'),
(25, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '::1', '2021-01-05 11:31:04', '2021-01-05 11:31:04'),
(26, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '::1', '2021-01-07 18:24:13', '2021-01-07 18:24:13'),
(27, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', '::1', '2021-01-11 07:53:47', '2021-01-11 07:53:47'),
(28, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-09 21:42:36', '2021-02-09 21:42:36'),
(29, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '::1', '2021-02-11 06:02:20', '2021-02-11 06:02:20'),
(30, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '::1', '2021-02-11 09:24:36', '2021-02-11 09:24:36'),
(31, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '::1', '2021-02-11 15:55:59', '2021-02-11 15:55:59'),
(32, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '::1', '2021-02-12 04:46:08', '2021-02-12 04:46:08'),
(33, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 05:21:59', '2021-02-12 05:21:59'),
(34, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 05:23:19', '2021-02-12 05:23:19'),
(35, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 07:07:34', '2021-02-12 07:07:34'),
(36, 44, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 07:12:18', '2021-02-12 07:12:18'),
(37, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 07:36:46', '2021-02-12 07:36:46'),
(38, 44, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 07:37:49', '2021-02-12 07:37:49'),
(39, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 07:39:08', '2021-02-12 07:39:08'),
(40, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-12 10:59:01', '2021-02-12 10:59:01'),
(41, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-13 06:13:42', '2021-02-13 06:13:42'),
(42, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-13 07:08:37', '2021-02-13 07:08:37'),
(43, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-13 07:11:51', '2021-02-13 07:11:51'),
(44, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-13 08:39:22', '2021-02-13 08:39:22'),
(45, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-13 19:05:13', '2021-02-13 19:05:13'),
(46, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-02-14 08:25:12', '2021-02-14 08:25:12'),
(47, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '::1', '2021-02-20 06:32:08', '2021-02-20 06:32:08'),
(48, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '::1', '2021-02-20 08:51:16', '2021-02-20 08:51:16'),
(49, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', '::1', '2021-02-20 22:10:56', '2021-02-20 22:10:56'),
(50, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36', '::1', '2021-02-23 14:52:41', '2021-02-23 14:52:41'),
(51, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36', '::1', '2021-03-03 16:45:57', '2021-03-03 16:45:57'),
(52, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36', '::1', '2021-03-07 11:19:07', '2021-03-07 11:19:07'),
(53, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36', '::1', '2021-03-08 04:55:28', '2021-03-08 04:55:28'),
(54, 42, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36', '::1', '2021-03-09 06:12:23', '2021-03-09 06:12:23'),
(55, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36', '::1', '2021-03-18 10:50:59', '2021-03-18 10:50:59'),
(56, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-03-20 20:57:38', '2021-03-20 20:57:38'),
(57, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-03-20 20:58:43', '2021-03-20 20:58:43'),
(58, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-03-20 20:59:30', '2021-03-20 20:59:30'),
(59, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-03-21 20:41:41', '2021-03-21 20:41:41'),
(60, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-03-22 06:33:54', '2021-03-22 06:33:54'),
(61, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-04-01 09:37:05', '2021-04-01 09:37:05'),
(62, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-04-01 18:07:49', '2021-04-01 18:07:49'),
(63, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-04-03 09:25:26', '2021-04-03 09:25:26'),
(64, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.2 Safari/605.1.15', '::1', '2021-04-03 09:25:35', '2021-04-03 09:25:35'),
(65, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-04-05 18:02:42', '2021-04-05 18:02:42'),
(66, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-04-06 04:53:20', '2021-04-06 04:53:20'),
(67, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-04-06 07:48:25', '2021-04-06 07:48:25'),
(68, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_1_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36', '::1', '2021-04-10 06:37:57', '2021-04-10 06:37:57'),
(69, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-16 15:39:39', '2021-04-16 15:39:39'),
(70, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-17 23:23:32', '2021-04-17 23:23:32'),
(71, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-20 07:48:18', '2021-04-20 07:48:18'),
(72, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-20 11:22:47', '2021-04-20 11:22:47'),
(73, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-20 20:19:47', '2021-04-20 20:19:47'),
(74, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-20 20:40:34', '2021-04-20 20:40:34'),
(75, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-20 20:49:14', '2021-04-20 20:49:14'),
(76, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-20 20:51:18', '2021-04-20 20:51:18'),
(77, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-20 22:36:42', '2021-04-20 22:36:42'),
(78, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-20 23:03:28', '2021-04-20 23:03:28'),
(79, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_2_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', '::1', '2021-04-21 08:06:38', '2021-04-21 08:06:38'),
(80, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-21 08:46:04', '2021-04-21 08:46:04'),
(81, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-21 09:19:03', '2021-04-21 09:19:03'),
(82, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-27 10:16:23', '2021-04-27 10:16:23'),
(83, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-27 10:16:40', '2021-04-27 10:16:40'),
(84, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-27 23:41:01', '2021-04-27 23:41:01'),
(85, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-28 01:10:33', '2021-04-28 01:10:33'),
(86, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-04-30 19:23:13', '2021-04-30 19:23:13'),
(87, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-01 05:18:07', '2021-05-01 05:18:07'),
(88, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-01 14:34:29', '2021-05-01 14:34:29'),
(89, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-01 19:11:47', '2021-05-01 19:11:47'),
(90, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-02 04:23:39', '2021-05-02 04:23:39'),
(91, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-02 18:11:16', '2021-05-02 18:11:16'),
(92, 43, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-02 18:42:37', '2021-05-02 18:42:37'),
(93, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-08 14:18:05', '2021-05-08 14:18:05'),
(94, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-08 14:29:44', '2021-05-08 14:29:44'),
(95, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-08 19:27:58', '2021-05-08 19:27:58'),
(96, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-09 03:04:49', '2021-05-09 03:04:49'),
(97, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-09 07:18:04', '2021-05-09 07:18:04'),
(98, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-10 12:41:40', '2021-05-10 12:41:40'),
(99, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-10 18:42:01', '2021-05-10 18:42:01'),
(100, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-11 10:10:58', '2021-05-11 10:10:58'),
(101, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-11 19:03:29', '2021-05-11 19:03:29'),
(102, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-12 06:04:49', '2021-05-12 06:04:49'),
(103, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-16 14:46:09', '2021-05-16 14:46:09'),
(104, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-18 05:47:49', '2021-05-18 05:47:49'),
(105, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-19 19:52:25', '2021-05-19 19:52:25'),
(106, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-19 19:52:41', '2021-05-19 19:52:41'),
(107, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-20 15:45:21', '2021-05-20 15:45:21'),
(108, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-21 04:56:44', '2021-05-21 04:56:44'),
(109, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-22 18:49:49', '2021-05-22 18:49:49'),
(110, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '::1', '2021-05-25 10:16:19', '2021-05-25 10:16:19'),
(111, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-30 06:14:29', '2021-05-30 06:14:29'),
(112, 46, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-30 07:04:00', '2021-05-30 07:04:00'),
(113, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-30 07:07:42', '2021-05-30 07:07:42'),
(114, 48, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-30 07:08:40', '2021-05-30 07:08:40'),
(115, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-30 07:08:58', '2021-05-30 07:08:58'),
(116, 47, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-30 07:09:42', '2021-05-30 07:09:42'),
(117, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-05-30 07:10:37', '2021-05-30 07:10:37'),
(118, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', '::1', '2021-05-30 08:32:01', '2021-05-30 08:32:01'),
(119, 45, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15', '::1', '2021-06-10 13:46:37', '2021-06-10 13:46:37'),
(120, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-23 15:16:03', '2021-06-23 15:16:03'),
(121, 50, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-23 15:22:22', '2021-06-23 15:22:22'),
(122, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-23 15:23:32', '2021-06-23 15:23:32'),
(123, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-23 19:52:17', '2021-06-23 19:52:17'),
(124, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 07:53:57', '2021-06-24 07:53:57'),
(125, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 07:57:58', '2021-06-24 07:57:58'),
(126, 51, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 08:07:56', '2021-06-24 08:07:56'),
(127, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 08:08:19', '2021-06-24 08:08:19'),
(128, 51, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 08:10:14', '2021-06-24 08:10:14'),
(129, 52, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 08:12:44', '2021-06-24 08:12:44'),
(130, 51, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 08:13:00', '2021-06-24 08:13:00'),
(131, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 08:13:13', '2021-06-24 08:13:13'),
(132, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-06-24 12:57:17', '2021-06-24 12:57:17'),
(133, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '195.114.149.94', '2021-06-29 11:01:25', '2021-06-29 11:01:25'),
(134, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-02 08:50:41', '2021-07-02 08:50:41'),
(135, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-02 13:10:45', '2021-07-02 13:10:45'),
(136, 52, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-02 13:57:17', '2021-07-02 13:57:17'),
(137, 52, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-03 15:13:18', '2021-07-03 15:13:18'),
(138, 53, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 00:53:11', '2021-07-04 00:53:11'),
(139, 54, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:01:55', '2021-07-04 01:01:55'),
(140, 55, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:03:42', '2021-07-04 01:03:42'),
(141, 56, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:05:56', '2021-07-04 01:05:56'),
(142, 55, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:07:03', '2021-07-04 01:07:03'),
(143, 55, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:07:52', '2021-07-04 01:07:52'),
(144, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:22:30', '2021-07-04 01:22:30'),
(145, 58, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:23:52', '2021-07-04 01:23:52'),
(146, 51, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:36:24', '2021-07-04 01:36:24'),
(147, 59, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:36:57', '2021-07-04 01:36:57'),
(148, 51, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:38:01', '2021-07-04 01:38:01'),
(149, 60, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:43:30', '2021-07-04 01:43:30'),
(150, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:49:49', '2021-07-04 01:49:49'),
(151, 62, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:52:26', '2021-07-04 01:52:26'),
(152, 63, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:55:09', '2021-07-04 01:55:09'),
(153, 64, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 01:56:27', '2021-07-04 01:56:27'),
(154, 65, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 02:09:06', '2021-07-04 02:09:06'),
(155, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 02:12:50', '2021-07-04 02:12:50'),
(156, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 02:24:30', '2021-07-04 02:24:30'),
(157, 66, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 02:31:46', '2021-07-04 02:31:46'),
(158, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 09:06:48', '2021-07-04 09:06:48'),
(159, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 09:11:39', '2021-07-04 09:11:39'),
(160, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 12:26:54', '2021-07-04 12:26:54'),
(161, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 14:58:30', '2021-07-04 14:58:30'),
(162, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '188.163.20.28', '2021-07-04 17:23:40', '2021-07-04 17:23:40'),
(163, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '188.163.20.28', '2021-07-08 20:13:11', '2021-07-08 20:13:11'),
(164, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-06 12:02:18', '2021-08-06 12:02:18'),
(165, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-06 12:44:20', '2021-08-06 12:44:20'),
(166, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-06 13:57:16', '2021-08-06 13:57:16'),
(167, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-06 15:27:06', '2021-08-06 15:27:06'),
(168, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-06 15:34:40', '2021-08-06 15:34:40'),
(169, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-06 20:44:38', '2021-08-06 20:44:38'),
(170, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-10 14:30:40', '2021-08-10 14:30:40'),
(171, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-11 12:21:58', '2021-08-11 12:21:58'),
(172, 57, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '188.163.20.28', '2021-08-12 11:16:30', '2021-08-12 11:16:30'),
(173, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '188.163.20.28', '2021-08-13 08:00:33', '2021-08-13 08:00:33'),
(174, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '188.163.20.28', '2021-08-14 06:55:03', '2021-08-14 06:55:03'),
(175, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '188.163.20.28', '2021-08-15 11:24:01', '2021-08-15 11:24:01'),
(176, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '188.163.20.28', '2021-08-15 16:09:02', '2021-08-15 16:09:02'),
(177, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '188.163.20.28', '2021-08-16 11:28:02', '2021-08-16 11:28:02'),
(178, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '188.163.20.28', '2021-08-16 14:30:51', '2021-08-16 14:30:51'),
(179, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '188.163.20.28', '2021-08-26 08:44:05', '2021-08-26 08:44:05'),
(180, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '188.163.20.28', '2021-08-26 09:00:01', '2021-08-26 09:00:01'),
(181, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '188.163.20.28', '2021-08-26 13:35:46', '2021-08-26 13:35:46'),
(182, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '188.163.20.28', '2021-08-26 14:10:49', '2021-08-26 14:10:49'),
(183, 67, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '188.163.20.28', '2021-08-26 14:39:04', '2021-08-26 14:39:04'),
(184, 49, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '195.114.146.50', '2021-09-06 07:46:30', '2021-09-06 07:46:30');

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE `faq` (
  `id` int(32) NOT NULL,
  `cat_id` int(32) DEFAULT NULL,
  `question` text NOT NULL,
  `answer` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `cat_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(54, 6, 'What is Flutter', 'Flutter is a registered digital asset investment firm based in the UK. The platform, which includes advanced basic and technical analysis at the source of high return performance, offers high & fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; Bynamic stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, is committed to achieving high returns from well-diversified portfolios and prioritizing clients.', '2021-05-06 14:21:04', '2021-05-06 14:21:04'),
(55, 6, 'Guaranteed Interest Returns, but how?', 'Digital assets are a class of assets considered dangerous and inconvenient. Many reasons such as liquidity, money laundering accusation, uncertainty of regulation, access restriction', '2021-05-06 14:21:43', '2021-05-06 14:21:43'),
(56, 6, 'What are company principles', 'Successful investment management companies base their business on a core investment philosophy, and Flutter is no different. Although we offer innovative and specific strategies through digital asset funds', '2021-05-06 14:22:11', '2021-05-06 14:22:11'),
(57, 6, 'How can i ask for support?', 'We are here to help you with any problems and questions you may encounter while using the platform and during your investment experience. You can always contact or turn the situation into an opportunity', '2021-05-06 14:22:58', '2021-05-06 14:22:58'),
(58, 7, 'How do I change my password', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.\r\n\r\nBrunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.', '2021-05-06 14:36:03', '2021-05-06 14:36:03'),
(59, 7, 'How do I delete my account?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.\r\n\r\nBrunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.', '2021-05-06 14:36:48', '2021-05-06 14:36:48'),
(60, 7, 'How do I change my account setting?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.\r\n\r\nBrunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.', '2021-05-06 14:37:12', '2021-05-06 14:37:12');

-- --------------------------------------------------------

--
-- Структура таблицы `faq_cat`
--

CREATE TABLE `faq_cat` (
  `id` int(32) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `faq_cat`
--

INSERT INTO `faq_cat` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Basic', '2021-05-06 14:19:44', '2021-05-06 14:19:44'),
(7, 'Account Setting', '2021-05-06 14:19:58', '2021-05-06 14:19:58'),
(8, 'Privacy', '2021-05-06 14:20:19', '2021-05-06 14:20:19');

-- --------------------------------------------------------

--
-- Структура таблицы `gateways`
--

CREATE TABLE `gateways` (
  `id` int(10) UNSIGNED NOT NULL,
  `main_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gateimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val3` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gateways`
--

INSERT INTO `gateways` (`id`, `main_name`, `name`, `gateimg`, `minamo`, `maxamo`, `charge`, `val1`, `val2`, `val3`, `status`, `created_at`, `updated_at`) VALUES
(101, 'PayPal', 'PayPal', 'paypal.png', '5', '1000', '0.511', 'dafuture355@gmail.com', '', NULL, 1, NULL, '2018-06-21 11:59:34'),
(102, 'PerfectMoney', 'Perfect Money', 'perfectmoney.png', '20', '20000', '2', 'U5376900', 'G079qn4Q7XATZBqyoCkBteGRg', NULL, 1, NULL, '2018-05-20 11:58:59'),
(103, 'Stripe', 'Stripe', 'stripe.png', '20', '20000', '2', 'sk_test_4eC39HqLyjWDarjtT1zdp7dc', 'G079qn4Q7XATZBqyoCkBteGRg', NULL, 1, NULL, '2018-05-20 11:58:59'),
(104, 'Skrill', 'Skrill', 'skrill.png', '10', '50000', '3', 'demoqco@sun-fish.com', 'skrill', NULL, 1, NULL, '2018-05-20 12:01:09'),
(106, 'Voguepay', 'Voguepay', 'voguepay.png', '10', '50000', '3', '', 'sk_test_4eC39HqLyjWDarjtT1zdp7dc', NULL, 1, NULL, '2018-05-20 12:01:09'),
(107, 'Paystack', 'Paystack', 'paystack.png', '10', '50000', '3', 'pk_live_293d04f581857487ef9b5cd8cd0f843f7728c3be', NULL, NULL, 1, NULL, '2020-02-09 21:34:23'),
(501, 'Blockchain.info', 'Blockchain BTC', 'blockchain.png', '1', '20000', '1', 'a5f1cf3b6b418fc6304ff7e186041b73c19c2d3e16dedac6c1cafa64704d1e2e', 'xpub6CjfQJqY6Ctz1ccjTpVR7NAqKAKgJ5XDbpbxM2MTRUhznBXoE7Lo8NW749FNZheLfC9EcqAh2RRRtjbQ2ztxXJmiwVnQZNWJxgfeFSphpQM', NULL, 1, NULL, '2020-06-30 16:26:16'),
(505, 'CoinPayment - BTC', 'CoinPayment BTC', 'coinpayment.png', '1', '50000', '0.51', '77f90f5d5cb242bec85eb1f4ec2e5cec6afee88ed0896965bb19887811040b2a', 'dDe9E59433F702a7220c8c71460500DAc023E199BF95d556d1cF4d8bE90609c0', NULL, 1, NULL, '2020-06-30 16:26:08'),
(506, 'CoinPayment - ETH', 'CoinPayment ETH', 'coinpayment.png', '1', '50000', '0.51', '77f90f5d5cb242bec85eb1f4ec2e5cec6afee88ed0896965bb19887811040b2a', 'dDe9E59433F702a7220c8c71460500DAc023E199BF95d556d1cF4d8bE90609c0', NULL, 1, NULL, '2020-06-30 16:26:08'),
(507, 'Coinbase', 'Coinbase', 'coinbase.png', '5', '20000', '2', '11990bef-e58b-4787-9ea1-d912cabb3511', NULL, NULL, 1, NULL, '2021-04-28 00:17:50'),
(508, 'Very Good Collection', 'Very Good Collection', 'vgc.png', '2', '20000', '2', 'PUB-8vGJ3tO0ZfkViPsyjdWFhUkSpOtDo10n', 'SEC-pcJb3oDrNL10PgZxgUQ5PJHYXtmWmyYQ', 'iPwNhdKGdfCPFdVe', 1, NULL, '2021-05-25 10:53:54');

-- --------------------------------------------------------

--
-- Структура таблицы `logo`
--

CREATE TABLE `logo` (
  `id` int(32) NOT NULL,
  `image_link` varchar(128) NOT NULL,
  `image_link2` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `logo`
--

INSERT INTO `logo` (`id`, `image_link`, `image_link2`, `created_at`, `updated_at`) VALUES
(1, 'images/logo_1624539023.png', 'images/favicon_1624539184.png', '2021-06-24 12:53:04', '2021-06-24 12:53:04');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` text,
  `content` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `created_at` varchar(32) NOT NULL,
  `updated_at` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `status`, `created_at`, `updated_at`) VALUES
(4, 'AML Policy', 'aml-policy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>', 1, '2019-07-31 11:43:14', '2021-05-12 07:39:55'),
(6, 'Diversity', 'diversity', '<header>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n<div>\r\n<div>\r\n<div>\r\n<h1>Diversity</h1>\r\n<p>Individuals. Ideas. Inspiration. Yes, we\'re open</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</header>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div data-nn-conditional=\"\">\r\n<div>\r\n<p>Diversity and inclusion matter in our business. An inclusive and diverse workforce makes us better leaders and contributes to a more innovative, dynamic and, ultimately, more successful company. And, variety helps us meet the needs of our diverse client base.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div data-nn-conditional=\"\">\r\n<h2 id=\"col1textimage\">Inclusiveness</h2>\r\n<div>\r\n<p>We promote inclusion and encourage open dialogue to draw out everyone\'s opinions and perspectives. We recognize a diverse range of contributions to keep our people energetic, engaged and inspired. And we are a signatory to the UN Standards of Conduct for Business regarding tackling LGBTI discrimination around the world.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div>\r\n<div>\r\n<div data-nn-conditional=\"\">\r\n<h2 id=\"col2textimage\">Flexibility</h2>\r\n<div>\r\n<p>We offer a modern, flexible working environment. We work where and how it\'s most appropriate according to individual, role and team requirements.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '2020-02-15 23:02:32', '2021-05-12 07:39:50'),
(7, 'Sponsoring', 'sponsoring', '<div>\n<span>The big picture</span>\n</div>\n<div>\n<div>\n<p>We’re passionate about supporting the places where we live and work. Through our long-standing sponsorships of motor sports and contemporary art, we connect with communities in new and exciting ways every day. It’s our way of understanding how the world works, one pit stop and brush stroke at a time.</p>\n</div>\n</div>', 1, '2020-02-15 23:06:08', '2021-05-16 16:34:04');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'ronnie@gmail.com', 'IFsbuBWs5ZgZcoQGMivzLXy8XCvOne', '2018-05-16 01:28:41', NULL),
(2, 'ronnie@gmail.com', 'fHkcBEMW78ef43pmSswx8kVHqLcgDx', '2018-05-23 00:19:47', NULL),
(3, 'ronnie@gmail.com', 'tNPjzNUcsdEYeSPCutmDy8VfbECMUY', '2018-05-23 00:28:28', NULL),
(4, 'ronniearea@gmail.com', 'GXtEiyl8MGzNwMR5tNdRCEI7dTyuVX', '2018-05-27 16:02:22', NULL),
(5, 'abirkhan75@gmail.com', 'Z6sHQHOATk5fluqi0vAJeyqzEd0ZXz', '2018-05-27 05:54:38', NULL),
(6, 'haha@haha.co', 'IDx0BrjOWN6p0FGFpmOdgG6wrdtqO2', '2018-05-28 21:20:01', NULL),
(7, 'haha@haha.co', 'dD4UFej2PEFSEmBil48SJPw1l2zUSv', '2018-05-28 21:26:54', NULL),
(8, 'haha@haha.co', 'gbchqenwrcLnZPhzdjAtpR92V8vwwm', '2018-05-28 21:51:15', NULL),
(9, 'ronniearea@gmail.com', 'aDcOh1kIodnZh7xS1PIfWsQhMpgMdz', '2018-07-07 00:17:52', NULL),
(10, 'ronniearea@gmail.com', 'f1cIXMOls67f0fZTNgrabFt2gz1Tm3', '2018-07-07 00:18:43', NULL),
(11, 'ronniearea@gmail.com', 'otlQ1ZqDnK3fG4ppUJzah8vML0hbWZ', '2018-08-10 22:45:31', NULL),
(12, 'ronniearea@gmail.com', 'voucnaTSJ9zVb68fE89HFlTxpFV5ci', '2018-11-10 06:32:43', NULL),
(13, 'user@test.com', '4eUH4Lgx90OC18eXcDnlczyHNWcr2B', '2020-01-31 10:14:15', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `plan`
--

CREATE TABLE `plan` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `percent` varchar(32) NOT NULL,
  `duration` varchar(128) NOT NULL,
  `period` varchar(32) NOT NULL,
  `min_deposit` varchar(128) NOT NULL,
  `amount` varchar(128) NOT NULL,
  `status` int(2) NOT NULL,
  `ref_percent` float DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `interest` varchar(32) DEFAULT NULL,
  `compound` varchar(32) DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL,
  `claim` int(1) DEFAULT NULL,
  `recurring` int(1) DEFAULT NULL,
  `popular` int(1) DEFAULT NULL,
  `subscribers` int(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `plan`
--

INSERT INTO `plan` (`id`, `name`, `percent`, `duration`, `period`, `min_deposit`, `amount`, `status`, `ref_percent`, `bonus`, `interest`, `compound`, `image`, `claim`, `recurring`, `popular`, `subscribers`, `created_at`, `updated_at`) VALUES
(16, 'Basic', '4', '30', 'Day', '5000', '100000', 1, 3, 8, '20', '120', NULL, 1, 1, 1, 6, '2021-05-30 08:10:25', '2021-05-30 07:10:25'),
(17, 'Standard', '4.3', '40', 'Day', '30000', '100000', 1, 2.3, 5, '72', '172', NULL, 1, 1, 0, 2, '2021-05-06 20:42:06', '2021-05-06 19:42:06'),
(18, 'Advanced', '3', '60', 'Day', '50000', '100000', 1, 4, 10, '80', '180', NULL, 1, 1, 0, 1, '2021-05-08 15:25:45', '2021-05-08 14:25:45');

-- --------------------------------------------------------

--
-- Структура таблицы `profits`
--

CREATE TABLE `profits` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `plan_id` int(32) NOT NULL,
  `amount` float NOT NULL,
  `profit` float NOT NULL,
  `real_profit` varchar(32) DEFAULT NULL,
  `claimed` varchar(32) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `trx` varchar(16) NOT NULL,
  `end_date` varchar(32) NOT NULL,
  `date` varchar(32) NOT NULL,
  `recurring` int(1) DEFAULT '0',
  `c_r` int(1) DEFAULT NULL,
  `bonus` double DEFAULT NULL,
  `coupon` int(1) DEFAULT '0',
  `c_code` varchar(8) DEFAULT NULL,
  `c_percent` int(3) DEFAULT NULL,
  `percent` varchar(32) DEFAULT NULL,
  `duration` varchar(32) DEFAULT NULL,
  `c_bonus` varchar(32) DEFAULT NULL,
  `compound` varchar(32) DEFAULT NULL,
  `interest` varchar(32) DEFAULT NULL,
  `claim` int(1) DEFAULT NULL,
  `bonus_paid` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `profits`
--

INSERT INTO `profits` (`id`, `user_id`, `plan_id`, `amount`, `profit`, `real_profit`, `claimed`, `status`, `trx`, `end_date`, `date`, `recurring`, `c_r`, `bonus`, `coupon`, `c_code`, `c_percent`, `percent`, `duration`, `c_bonus`, `compound`, `interest`, `claim`, `bonus_paid`, `created_at`, `updated_at`) VALUES
(141, 45, 18, 50000, 87000, '37000', '300', 1, 'INV-57uegp', '2021-11-05 07:46:22', '2021-09-06 07:46:22', 1, 1, NULL, 0, NULL, NULL, '3', '60 Day', '10', '180', '80', 1, NULL, '2021-05-08 14:25:45', '2021-11-03 08:46:10'),
(142, 47, 16, 10000, 12000, '52800', NULL, 2, 'INV-tcxJeA', '2021-06-29 08:10:25', '2021-05-30 08:10:25', 1, NULL, NULL, 0, NULL, NULL, '4', '30 Day', '8', '120', '20', 1, NULL, '2021-05-30 07:10:25', '2021-11-03 08:46:10');

-- --------------------------------------------------------

--
-- Структура таблицы `referral`
--

CREATE TABLE `referral` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `ref_id` int(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `ref_earning`
--

CREATE TABLE `ref_earning` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `ref_id` varchar(16) DEFAULT NULL,
  `referral` int(32) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `ref_earning`
--

INSERT INTO `ref_earning` (`id`, `user_id`, `plan_id`, `ref_id`, `referral`, `amount`, `created_at`, `updated_at`) VALUES
(2, 47, 16, '45', 45, 300, '2021-05-30 07:10:25', '2021-05-30 07:10:25');

-- --------------------------------------------------------

--
-- Структура таблицы `reply_support`
--

CREATE TABLE `reply_support` (
  `id` int(32) NOT NULL,
  `ticket_id` varchar(32) NOT NULL,
  `reply` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `reply_support`
--

INSERT INTO `reply_support` (`id`, `ticket_id`, `reply`, `status`, `created_at`, `updated_at`) VALUES
(1, '888883', 'hello', 0, '2020-02-14 09:02:40', '0000-00-00 00:00:00'),
(2, '888883', 'We are working on your issue', 0, '2020-02-14 09:02:40', '0000-00-00 00:00:00'),
(3, '888883', 'hi', 0, '2020-02-14 08:20:58', '2020-02-14 08:20:58'),
(4, '888883', 'sdfg', 1, '2020-02-15 13:47:56', '2020-02-15 13:47:56'),
(5, '888883', 'sdfg', 1, '2020-02-15 13:48:46', '2020-02-15 13:48:46'),
(6, '1581775991', 'ok', 1, '2020-02-19 15:24:24', '2020-02-19 15:24:24'),
(7, 'sHzyERi8sSOZ17hp', 'hey', 1, '2020-06-06 15:39:13', '2020-06-06 15:39:13'),
(8, 'BBKJszBR6YlVZFer', 'sdfgh', 1, '2021-05-09 07:22:20', '2021-05-09 07:22:20'),
(9, 'BBKJszBR6YlVZFer', 'sfdghjj', 0, '2021-05-09 07:22:26', '2021-05-09 07:22:26'),
(10, 'J0rKpxuqEzsmb4rs', 'ZXDFCGHJK', 1, '2021-05-30 07:17:47', '2021-05-30 07:17:47'),
(11, '4QiLeVmyBG1cSPw8', 'test-true', 0, '2021-06-24 12:59:23', '2021-06-24 12:59:23'),
(12, 'PCOAR79x06BMRwro', 'test', 0, '2021-07-04 16:24:14', '2021-07-04 16:24:14'),
(13, '1blV99ock1L4uBGS', 'dssvfvc cxv', 1, '2021-07-04 16:24:56', '2021-07-04 16:24:56');

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `image_link` varchar(32) DEFAULT NULL,
  `review` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `name`, `occupation`, `image_link`, `review`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Jason Well', 'Forex trader', 'update_1618928030.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since', 1, '2021-04-20 14:18:18', '2021-04-20 13:13:50'),
(12, 'JacK Mill', 'Market analyst', 'update_1618928053.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since', 1, '2021-04-20 14:18:18', '2021-04-20 13:14:13'),
(13, 'Micheal Pete', 'Forex analyst', 'update_1618928061.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since', 1, '2021-04-20 14:18:18', '2021-04-20 13:14:21'),
(14, 'Big brother', 'Web developer', 'update_1618928069.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since', 1, '2021-04-20 14:18:18', '2021-04-20 13:14:29');

-- --------------------------------------------------------

--
-- Структура таблицы `sand_followed`
--

CREATE TABLE `sand_followed` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `plan_id` int(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sand_followed`
--

INSERT INTO `sand_followed` (`id`, `user_id`, `plan_id`, `created_at`, `updated_at`) VALUES
(12, 43, 25, '2021-04-30 20:49:39', '2021-04-30 20:49:39'),
(13, 43, 27, '2021-05-02 15:38:48', '2021-05-02 15:38:48'),
(14, 45, 28, '2021-05-08 14:23:16', '2021-05-08 14:23:16'),
(15, 45, 31, '2021-05-22 18:53:27', '2021-05-22 18:53:27'),
(16, 52, 38, '2021-07-02 14:14:23', '2021-07-02 14:14:23'),
(17, 57, 29, '2021-08-06 12:03:19', '2021-08-06 12:03:19'),
(18, 49, 28, '2021-08-06 12:44:49', '2021-08-06 12:44:49'),
(19, 57, 28, '2021-08-06 20:45:53', '2021-08-06 20:45:53'),
(20, 57, 38, '2021-08-11 12:23:51', '2021-08-11 12:23:51'),
(22, 49, 37, '2021-08-14 15:21:53', '2021-08-14 15:21:53'),
(23, 49, 29, '2021-08-26 08:52:09', '2021-08-26 08:52:09'),
(24, 67, 41, '2021-08-26 14:39:38', '2021-08-26 14:39:38');

-- --------------------------------------------------------

--
-- Структура таблицы `sand_plan`
--

CREATE TABLE `sand_plan` (
  `id` int(32) NOT NULL,
  `name` text NOT NULL,
  `name_campaign` text,
  `video_sand` varchar(128) DEFAULT NULL,
  `url_campaign` varchar(128) DEFAULT NULL,
  `slug` text,
  `description` text,
  `description_campaign` text,
  `start_date` varchar(32) DEFAULT NULL,
  `expiring_date` varchar(32) NOT NULL,
  `duration` varchar(128) NOT NULL,
  `ref_percent` varchar(32) DEFAULT NULL,
  `period` varchar(32) NOT NULL,
  `units` varchar(128) NOT NULL,
  `original` int(32) DEFAULT NULL,
  `price` varchar(128) NOT NULL,
  `status` int(2) NOT NULL,
  `interest` double DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL,
  `image_campaign` varchar(32) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `cat_id` int(32) NOT NULL,
  `location` text,
  `insurance` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `file_pdf` varchar(128) DEFAULT NULL,
  `file_analyse` varchar(128) DEFAULT NULL,
  `file_statut` varchar(128) DEFAULT NULL,
  `file_presentation` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sand_plan`
--

INSERT INTO `sand_plan` (`id`, `name`, `name_campaign`, `video_sand`, `url_campaign`, `slug`, `description`, `description_campaign`, `start_date`, `expiring_date`, `duration`, `ref_percent`, `period`, `units`, `original`, `price`, `status`, `interest`, `image`, `image_campaign`, `type`, `cat_id`, `location`, `insurance`, `created_at`, `updated_at`, `file_pdf`, `file_analyse`, `file_statut`, `file_presentation`) VALUES
(26, 'Cashew Nut Investment', NULL, NULL, NULL, 'cashew-nut-investment', '<p>Agropartnerships is a simple and secure collaborative platform that enables you to engage in profitable agribusiness opportunities from the comfort of your home. You can invest in Farms, trade in commodities, and count your profits in no time. Cashew nuts are one of Nigeria&rsquo;s key commodities earning the nation around $1.5 billion in the last 3 years alone. With around 320,000 tonnes produced in 2016, Nigeria was the second-largest producer after Vietnam and accounted for 20% of global production. About Cashews History: The Cashew tree which is native to Northeastern Brazil was brought to the African continent by Portuguese traders in the 15th century. Now prevalent in over 20 countries worldwide, Vietnam, Nigeria, India and Ivory Coast now lead the pack. The harvest season for Cashew begins in February and goes on to the end of May. Cashew is mostly harvested by smallholders in Kogi, Oyo, Kwara, Enugu, Edo and a few other states. They pick the Oval shaped seed from the Cashew Apple and then dry it before selling to Aggregators.</p>', NULL, '2021-05-07', '2022-02-01 00:00:00', '9', NULL, 'Month', '4000', 4000, '20', 1, 20, 'plan_1619972528.jpg', NULL, 1, 1, 'Lagos', 1, '2021-05-12 07:21:44', '2021-05-12 06:21:44', NULL, NULL, NULL, NULL),
(27, 'Poultry Farm In South West Nigeria', NULL, NULL, NULL, 'poultry-farm-in-south-west-nigeria', '<p class=\"font-body text-xs mb-4 whitespace-pre-wrap\">This poultry farm is an investment opportunity powered by ThriveAgric. Your investment covers farm inputs, operations, harvesting, and logistics.</p>\r\n<p><img class=\"mb-4\" src=\"https://cdn-images-1.medium.com/max/1600/1*8NLW3rYD0ec8V19EreNIVQ.jpeg\" alt=\"\" /></p>\r\n<p class=\"font-body text-xs mb-4 whitespace-pre-wrap\">The poultry sub-sector is the most commercialized of all of Nigeria&rsquo;s agricultural sub-sectors.The poultry sub-sector is vital to the socio-economic development of Nigeria because of its short term production cycle. It contributes about 9-10% of agricultural GDP (FAO, 2006). Moreover, Nigeria&rsquo;s chicken population is about 150.682 million (UNDP, 2006) of which 25% are intensively reared, 15% semi-intensive, and 60% extensive system. Poultry birds represent an important source of high quality animal protein, providing about 36.5 per cent of the total protein intake of Nigerians. It is one of the highest investments in agriculture with a net worth of N250 billion. From the Eggs to the Chicken itself, Chicken is a major source of protein in the Nigerian diet and used as a recipe for many dishes. The by products are also used as a great source of organic fertilizer/manure for crop production. The meat is rich in proteins and is a good source of phosphorus and of B-complex vitamins. Poultry meat contains less fat than most cuts of beef and pork. Poultry liver is especially rich in vitamin A. It has a higher proportion of unsaturated fatty acids than saturated fatty acids. This fatty acid ratio suggests that poultry is a more healthy alternative to red meat. The poultry industry in Nigeria had been rapidly expanding in the past years, increasing from 185,300 MT in 2001 to 268,000 MT in 2011 however Nigeria is barely able to meet up with local demands this gives a strong demand for internal production.</p>\r\n<p><img class=\"mb-4\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQzCDEmQaoaRzPaPgQXrcBEnteqdK58B-EJXvsUQBNfchv2jVJr\" alt=\"\" /></p>\r\n<p class=\"font-body text-xs mb-4 whitespace-pre-wrap\">Thrive Agric is a technology-driven agricultural company passionate about ensuring global food security. With people like you investing, they can support farmers to make the best of a farming cycle, with the promise of decent returns to you at the end of each farming cycle. Backed by the team at Telefonica&rsquo;s Wayra (United Kingdom), Google&rsquo;s Launchpad, Ventures platform and a product of Ycombinator, they are on a mission to build an Africa that feeds the world and Itself.</p>', NULL, '2021-05-01', '2021-11-01 00:00:00', '6', NULL, 'Month', '59900', 60000, '50', 1, 12, 'plan_1620464392.png', NULL, 1, 2, 'Lagos', 1, '2021-05-12 07:25:26', '2021-05-12 06:25:26', NULL, NULL, NULL, NULL),
(28, 'Cassava Farm Investment', NULL, NULL, NULL, 'cassava-farm-investment', '<p>Psaltry International Company Limited (PIL) [https://psaltryinternational.com] is an agro-allied company founded by Oluyemisi Iranloye in the year 2005. The company started out by creating a market niche for cassava produce across the rural areas of Oyo State Nigeria. PIL initiated an out-grower program in September 2012 for farmers within an 80km radius of its factory before erecting a starch factory which commenced production in May 2013.</p>\n<p>Psaltry has over 8000 hectares of land suited for out-grower programs, and has employed more than 300 staff with an asset worth of 15 million USD. Our modus operandi is eco-friendly; We installed a water recycling system to detoxify recalcitrant substances before disposing them into the environment and reduces amount of water usage in our production process.</p>\n<p>Cassava farming is a source of livelihood for millions of farmers. Also, cassava serves as a primary staple food to over 800 million people worldwide. It is the third-largest source of food carbohydrates in the tropics, after rice and maize. Cassava is used for producing food products like garri, flour, tapioca, fufu, chips, e.t.c. It is rich in vitamins, carbs, calcium, etc. Nigeria is the world’s largest producer of cassava, while Thailand is the largest exporter of cassava with most of it going to Europe. In 2017, Nigeria produced 59 million tons making about 20% of global world production. Besides, it exports about 3.2 million tons annually and earned $136 million in 2013.</p>\n<p> </p>', NULL, '2021-05-06', '2022-11-06 00:00:00', '18', NULL, 'Month', '1150', 5000, '20', 1, 36, 'plan_1620464605.jpg', NULL, 1, 1, 'Oyo state', 0, '2021-08-15 16:40:44', '2021-08-15 16:40:44', NULL, NULL, NULL, NULL),
(29, 'Cattle Herder Stock Program Investment', NULL, NULL, NULL, 'cattle-herder-stock-program-investment', '<p class=\"font-body text-xs mb-4 whitespace-pre-wrap\">We are a leading livestock breeding and fattening enterprise involved in upgrading and multiplying livestock breeds/herds with local adaptability and improved quality and yield, innovative breeding technology of artificial insemination and careful selection.</p>\r\n<p><img class=\"mb-4\" src=\"http://owonikoko.com/images/about-welcome.jpg\" alt=\"\" /></p>\r\n<p class=\"font-body text-xs mb-4 whitespace-pre-wrap\">Designed to function as a combinatorial pilot, our farm is built to foster modern agricultural practices in ranching, animal processing as well as pilot best practice farming processes in the cash and fruit crops sectors. In a bid to supplement our cattle feeding on corn stalks and also to further contribute to our nation&rsquo;s crop market, We have utilized our spacious ranch to cultivate maize and vegetables, and so far we are doing excellently well owing to good farm practices we have so delicately delivered.</p>\r\n<p>&nbsp;</p>', NULL, '2021-05-11', '2022-05-11 00:00:00', '12', NULL, 'Month', '3970', 4000, '30', 1, 20, 'plan_1620465122.jpg', NULL, 1, 2, 'Kano', 1, '2021-08-26 08:52:09', '2021-08-26 08:52:09', NULL, NULL, NULL, NULL),
(31, 'waesdfgh', NULL, NULL, NULL, 'waesdfgh', '<p>sdfgxh</p>', NULL, '2021-05-11', '2021-06-11 00:00:00', '1', NULL, 'Month', '3900', 4000, '300', 1, 30, 'plan_1621576843.jpg', NULL, 1, 6, 'sdfgh', 1, '2021-05-30 07:30:07', '2021-05-30 06:30:07', NULL, NULL, NULL, NULL),
(32, 'Test Invest', NULL, NULL, NULL, 'test-invest', '<p>test</p>', NULL, '2020-06-25', '2020-06-27 00:00:00', '2', '20', 'Day', '4', 4, '6000', 0, 25, 'plan_1624642864.jpg', NULL, 1, 1, 'usa', 0, '2021-08-17 07:22:29', '2021-08-17 07:22:29', NULL, NULL, NULL, NULL),
(33, 'test', 'Name Campaign', NULL, NULL, 'test', '<p>testtesttest</p>', '<p>Description Campaign</p>', '2020-06-25', '2022-07-25 00:00:00', '25', NULL, 'Month', '2000', 2000, '2000', 0, 25, 'plan_1624666790.jpg', NULL, 1, 1, 'test', 1, '2021-08-17 07:22:19', '2021-08-17 07:22:19', NULL, NULL, NULL, NULL),
(34, 'Name', 'Name Campaign', NULL, 'Url Campaign', 'name', '<p>Description</p>', '', '2020-06-20', '2020-10-20 00:00:00', '4', NULL, 'Month', '5000', 5000, '5000', 0, 20, NULL, 'plan_1624668361.jpg', 1, 1, 'Location', 1, '2021-08-17 07:22:08', '2021-08-17 07:22:08', NULL, NULL, NULL, NULL),
(35, 'NameName', 'Name Campaign', NULL, 'Url Campaign', 'namename', '', '<p>Description Campaign</p>', '2020-06-20', '2020-08-20 00:00:00', '2', NULL, 'Month', '50000', 50000, '050000', 0, 25, NULL, 'plan_1624668873.png', 1, 1, 'usa', 1, '2021-08-17 07:22:00', '2021-08-17 07:22:00', NULL, NULL, NULL, NULL),
(36, 'NameNameName', 'Name Campaign', 'Video UrlVideo Url', 'Url Campaign', 'namenamename', '<p>Description</p>', '<p>Description Campaign</p>', '2020-06-30', '2020-08-30 00:00:00', '2', NULL, 'Month', '8000', 8000, '8000', 0, 50, 'plan_1624711371.jpg', 'plan_1624711371.pdf', 1, 1, 'usa', 1, '2021-08-17 07:21:46', '2021-08-17 07:21:46', NULL, NULL, NULL, NULL),
(37, 'Name Created', 'Name Cam', 'Video Url', 'Url Campaign', 'name-created', '<p>DescriptionDescriptionDescription</p>', '<p>Description CampaignDescription Campaign</p>', '2020-06-20', '2121-06-20 00:00:00', '101', NULL, 'Year', '5000', 5000, '5000', 0, 20, 'plan_1624715551.jpg', 'plan_1624715551.png', 1, 1, 'usa', 1, '2021-08-17 07:21:36', '2021-08-17 07:21:36', 'plan_1624715551.pdf', 'plan_1624715551.pdf', 'plan_1624715551.pdf', 'plan_1624715551.pdf'),
(38, 'Create Name', 'Name Campaign Campaign', 'Video UrlVideo UrlVideo Url', 'Url Campaign Campaign', 'create-name', '<p>DescriptionDescriptionDescription</p>', '<p>CampaignCampaignCampaignCampaign</p>', '2020-06-30', '2020-10-30 00:00:00', '4', NULL, 'Month', '8990', 9000, '8000', 0, 25, 'plan_1624715965.jpg', 'plan_1624715965.png', 1, 3, 'Location', 1, '2021-08-17 07:21:28', '2021-08-17 07:21:28', 'plan_1624715965.pdf', 'plan_1624715965.pdf', 'plan_1624715965.pdf', 'plan_1624715965.pdf'),
(39, 'Create Name', 'Name Campaign Name Campaign Name Campaign', NULL, 'Url Campaign', 'create-name', '<p>DescriptionDescriptionDescriptionDescription</p>', '<p>Url Campaign Description Campaign</p>', '2020-06-20', '2025-06-20 00:00:00', '5', NULL, 'Year', '8000', 8000, '8000', 0, 20, 'plan_1624725285.jpg', 'plan_1624725285.png', 1, 1, 'Location', 1, '2021-08-17 07:21:21', '2021-08-17 07:21:21', 'plan_1624725285.pdf', 'plan_1624725285.pdf', 'plan_1624725285.pdf', 'plan_1624725285.pdf'),
(40, 'NameNameNameNameName80', 'Name Campaign', 'Video Url', 'Name Campaign', 'namenamenamenamename80', '<p>DescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescriptionDescription</p>', '<p>Name Campaign</p>', '2020-06-20', '2020-07-10 00:00:00', '20', '80\'', 'Day', '6000', 6000, '6000', 0, 35, 'plan_1625042645.jpg', 'plan_1625042645.png', 1, 1, 'London', 1, '2021-08-17 07:20:20', '2021-08-17 07:20:20', 'plan_1625042645.pdf', 'plan_1625042645.pdf', 'plan_1625042645.pdf', 'plan_1625042645.pdf'),
(41, 'B.A.M TICKETING', 'B.A.M', 'https://www.youtube.com/watch?v=nvBgnEh0p4k', 'https://www.youtube.com/channel/UCcIQ9I2miCn7GgUxQZ_SV6w', 'bam-ticketing', '<p>Blockchain Ticketing - sicherer Ticketverkauf entlang der Wertschöpfungskette für Großveranstaltungen.</p>', '', '2021-08-25', '2022-07-30 00:00:00', '40', '2.5', 'Day', '1490', 1500, '500', 1, 287.9, 'plan_1629982842.jpg', 'plan_1629982842.jpg', 1, 7, 'Wien, AT', 1, '2021-08-26 14:39:38', '2021-08-26 14:39:38', 'plan_1629982842.pdf', 'plan_1629982842.pdf', 'plan_1629982842.pdf', 'plan_1629982842.pdf');

-- --------------------------------------------------------

--
-- Структура таблицы `sand_plan_category`
--

CREATE TABLE `sand_plan_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sand_plan_category`
--

INSERT INTO `sand_plan_category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Crop', 1, '2020-09-12 19:58:32', '2020-09-12 18:40:55'),
(2, 'Animal', 1, '2020-10-27 17:42:40', '2020-10-27 17:42:40'),
(3, 'Transportation', 1, '2020-10-27 17:42:49', '2020-10-27 17:42:49'),
(4, 'Estate', 1, '2020-10-27 17:43:00', '2020-10-27 17:43:00'),
(5, 'Health', 1, '2020-10-28 15:29:46', '2020-10-28 15:29:46'),
(6, 'gdgrf', 1, '2021-05-21 04:59:34', '2021-05-21 04:59:34'),
(7, 'EIGENKAPITAL', 1, '2021-08-26 12:47:08', '2021-08-26 12:47:08');

-- --------------------------------------------------------

--
-- Структура таблицы `sand_plan_updates`
--

CREATE TABLE `sand_plan_updates` (
  `id` int(32) NOT NULL,
  `plan_id` int(32) NOT NULL,
  `information` text NOT NULL,
  `report` text NOT NULL,
  `activity` text NOT NULL,
  `stage` int(32) NOT NULL,
  `weeks` int(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sand_plan_updates`
--

INSERT INTO `sand_plan_updates` (`id`, `plan_id`, `information`, `report`, `activity`, `stage`, `weeks`, `created_at`, `updated_at`) VALUES
(1, 16, 'Fumigation was done with a mixture of formalin (Formaldehyde) and Potassium Permanganate (KMnO4). This would keep away harmful microorganisms that pose a threat to the health and well being of the birds. The pens (poultry house) were then left for 2-3 weeks before stocking, to ensure the effectiveness of the disinfectants/fumigants, as well as reduction in chemical residue Feeds and Day-old chicks arrived at the farms and they were given water and anti-stress drugs to reduce the mortality rate due to the stress of the long-distance journey. Day-old chicks are very sensitive and need optimum attention, just like newborn babies. Luckily for us, the locked down due to the current pandemic situation is not affecting our daily routines on the field, we are grateful for the federal government permit given to our farmers and logistics workers. Cheers to a successful project.', 'Pens and pen equipment/utensils were washed, disinfected and fumigated. We spread some litter all over the brooder and rearing pen floors and also provided multiple heat sources, lights, feeders, and drinkers in the respective pens. The adequate number of feeders and drinkers were kept in place for easy accessibility while awaiting the arrival of the chicks. Feeds and vaccine distribution was carried out across various farm location in Osun, Oyo, Osogbo, Kwara, Kano. Farmers are doing fine, so our birds.', 'Farm sanitization and day-old chick arrival', 1, 4, '2020-09-13 10:19:29', '2020-09-13 10:19:29'),
(2, 17, 'Fumigation was done with a mixture of formalin (Formaldehyde) and Potassium Permanganate (KMnO4). This would keep away harmful microorganisms that pose a threat to the health and well being of the birds. The pens (poultry house) were then left for 2-3 weeks before stocking, to ensure the effectiveness of the disinfectants/fumigants, as well as reduction in chemical residue Feeds and Day-old chicks arrived at the farms and they were given water and anti-stress drugs to reduce the mortality rate due to the stress of the long-distance journey. Day-old chicks are very sensitive and need optimum attention, just like newborn babies. Luckily for us, the locked down due to the current pandemic situation is not affecting our daily routines on the field, we are grateful for the federal government permit given to our farmers and logistics workers. Cheers to a successful project.', 'Pens and pen equipment/utensils were washed, disinfected and fumigated. We spread some litter all over the brooder and rearing pen floors and also provided multiple heat sources, lights, feeders, and drinkers in the respective pens. The adequate number of feeders and drinkers were kept in place for easy accessibility while awaiting the arrival of the chicks. Feeds and vaccine distribution was carried out across various farm location in Osun, Oyo, Osogbo, Kwara, Kano. Farmers are doing fine, so our birds.', 'Farm sanitization and day-old chick arrival', 1, 2, '2020-09-14 13:52:07', '2020-09-14 13:52:07'),
(3, 31, 'dsfghj', 'szdftyguh', 'zsdfgchvjbnm', 2, 3, '2021-05-30 07:58:45', '2021-05-30 06:58:45');

-- --------------------------------------------------------

--
-- Структура таблицы `sand_profits`
--

CREATE TABLE `sand_profits` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `plan_id` int(32) NOT NULL,
  `expiring_date` varchar(32) DEFAULT NULL,
  `units` int(32) NOT NULL,
  `amount` float NOT NULL,
  `profit` float NOT NULL,
  `status` int(2) NOT NULL,
  `trx` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sand_profits`
--

INSERT INTO `sand_profits` (`id`, `user_id`, `plan_id`, `expiring_date`, `units`, `amount`, `profit`, `status`, `trx`, `created_at`, `updated_at`) VALUES
(148, 45, 28, '2022-11-08 15:23:16', 2000, 40000, 54400, 1, 'PRO-zhIoPA', '2021-05-08 14:23:16', '2021-05-08 14:23:16'),
(149, 45, 31, '2021-06-30 07:30:07', 100, 30000, 39000, 2, 'PRO-yDpGO1', '2021-07-01 17:51:13', '2021-07-01 17:51:13'),
(150, 57, 29, '2022-08-06 12:03:19', 10, 300, 360, 1, 'PRO-XT1qRy', '2021-08-06 12:03:19', '2021-08-06 12:03:19'),
(151, 49, 28, '2023-02-06 12:44:49', 200, 4000, 5440, 1, 'PRO-OviGiz', '2021-08-06 12:44:49', '2021-08-06 12:44:49'),
(152, 49, 28, '2023-02-06 12:45:47', 40, 800, 1088, 1, 'PRO-f5Dl3R', '2021-08-06 12:45:47', '2021-08-06 12:45:47'),
(153, 49, 28, '2023-02-06 12:50:52', 400, 8000, 10880, 1, 'PRO-MGOiUi', '2021-08-06 12:50:52', '2021-08-06 12:50:52'),
(154, 49, 28, '2023-02-06 15:27:23', 200, 4000, 5440, 1, 'PRO-J9jLBE', '2021-08-06 15:27:23', '2021-08-06 15:27:23'),
(155, 57, 28, '2023-02-06 20:45:53', 10, 200, 272, 1, 'PRO-m0ME27', '2021-08-06 20:45:53', '2021-08-06 20:45:53'),
(156, 57, 29, '2022-08-10 14:30:56', 10, 300, 360, 1, 'PRO-S0SMSW', '2021-08-10 14:30:56', '2021-08-10 14:30:56'),
(157, 57, 38, '2021-12-11 12:23:51', 10, 80000, 100000, 1, 'PRO-aaG2Sl', '2021-08-11 12:23:51', '2021-08-11 12:23:51'),
(158, 49, 28, '2023-02-15 16:40:44', 1000, 20000, 27200, 1, 'PRO-iHS5xD', '2021-08-15 16:40:44', '2021-08-15 16:40:44'),
(159, 49, 29, '2022-08-26 08:52:09', 10, 300, 360, 1, 'PRO-MUXkBo', '2021-08-26 08:52:09', '2021-08-26 08:52:09'),
(160, 67, 41, '2021-10-05 14:39:38', 10, 5000, 19395, 2, 'PRO-UQxt31', '2021-10-06 17:16:47', '2021-10-06 17:16:47');

-- --------------------------------------------------------

--
-- Структура таблицы `savings`
--

CREATE TABLE `savings` (
  `id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `profit` varchar(32) DEFAULT NULL,
  `percent` varchar(32) DEFAULT NULL,
  `purpose` varchar(255) NOT NULL,
  `end_date` varchar(32) NOT NULL,
  `duration` varchar(32) DEFAULT NULL,
  `ref_id` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(32) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Account Certified Privacy', '2021-04-20 10:58:31', '2021-04-20 09:58:31'),
(2, 'Claim profit anytime', '2021-04-20 10:59:03', '2021-04-20 09:59:03'),
(3, 'Buy plans with coupon', '2021-04-20 10:58:49', '2021-04-20 09:58:49'),
(4, 'Investment bonuses', '2021-04-20 10:58:10', '2021-04-20 09:58:10'),
(5, 'Top notched security', '2021-04-20 10:00:24', '2021-04-20 10:00:24'),
(6, '24/7 customer support', '2021-04-20 10:01:07', '2021-04-20 10:01:07');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(32) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `site_name` varchar(200) DEFAULT NULL,
  `site_desc` text,
  `livechat` text,
  `email` varchar(128) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `address` text,
  `balance_reg` double DEFAULT NULL,
  `email_notify` int(2) DEFAULT NULL,
  `sms_notify` int(2) DEFAULT NULL,
  `kyc` int(2) DEFAULT NULL,
  `kyc_restriction` int(1) DEFAULT NULL,
  `email_verification` int(2) DEFAULT NULL,
  `sms_verification` int(2) DEFAULT NULL,
  `registration` int(2) DEFAULT NULL,
  `withdraw_charge` varchar(191) DEFAULT NULL,
  `transfer_charge` int(3) DEFAULT NULL,
  `referral` int(2) NOT NULL DEFAULT '0',
  `recaptcha` int(1) DEFAULT '0',
  `language` int(1) DEFAULT '1',
  `blog` int(1) DEFAULT '1',
  `d_c` varchar(8) DEFAULT NULL,
  `m_c` varchar(8) DEFAULT NULL,
  `s_c` varchar(8) DEFAULT NULL,
  `services` int(1) DEFAULT '0',
  `plan` int(1) DEFAULT '0',
  `review` int(1) DEFAULT '0',
  `team` int(1) DEFAULT '0',
  `stat` int(1) DEFAULT '0',
  `contact` int(1) DEFAULT '0',
  `faq` int(1) DEFAULT '0',
  `upgrade_status` int(1) DEFAULT '0',
  `upgrade_fee` double DEFAULT NULL,
  `transfer` int(1) DEFAULT '1',
  `next_settlement` varchar(32) DEFAULT NULL,
  `duration` varchar(32) DEFAULT NULL,
  `period` varchar(32) DEFAULT NULL,
  `s_3m` varchar(32) DEFAULT NULL,
  `s_6m` varchar(32) DEFAULT NULL,
  `s_9m` varchar(32) DEFAULT NULL,
  `s_12m` varchar(32) DEFAULT NULL,
  `s_min` varchar(32) DEFAULT NULL,
  `xperiod` varchar(32) DEFAULT NULL,
  `p_inv` int(1) DEFAULT NULL,
  `s_inv` int(1) DEFAULT NULL,
  `savings` int(1) DEFAULT NULL,
  `welcome_message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `title`, `site_name`, `site_desc`, `livechat`, `email`, `mobile`, `address`, `balance_reg`, `email_notify`, `sms_notify`, `kyc`, `kyc_restriction`, `email_verification`, `sms_verification`, `registration`, `withdraw_charge`, `transfer_charge`, `referral`, `recaptcha`, `language`, `blog`, `d_c`, `m_c`, `s_c`, `services`, `plan`, `review`, `team`, `stat`, `contact`, `faq`, `upgrade_status`, `upgrade_fee`, `transfer`, `next_settlement`, `duration`, `period`, `s_3m`, `s_6m`, `s_9m`, `s_12m`, `s_min`, `xperiod`, `p_inv`, `s_inv`, `savings`, `welcome_message`, `created_at`, `updated_at`) VALUES
(1, 'The Better way to Save & Invest', 'site', 'siteis at your service with its user-friendly features, secure infrastructure and applications that make a difference.site', '<script></script>', 'demo@gmail.net', '+1234567894, +2345666666', '47 Nungua Link Road 2nd Floor,\r\nBigboss,England', 10, 0, 0, 1, 0, 0, 0, 1, '4', 5, 1, 0, 1, 1, '#ffffff', '#f9f0e1', '#efb028', 1, 1, 1, 1, 1, 1, 1, 1, 10, 1, '2021-06-12 14:46:37', '2', 'Day', '3', '5', '10', '15', '1', '2021-05-01 20:23:13', 1, 1, 1, NULL, '2021-07-04 17:13:18', '2021-07-02 07:53:26');

-- --------------------------------------------------------

--
-- Структура таблицы `social_links`
--

CREATE TABLE `social_links` (
  `id` int(2) NOT NULL,
  `type` longtext COLLATE utf8_unicode_ci,
  `value` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `social_links`
--

INSERT INTO `social_links` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://facebook.com/', '2020-02-09 08:09:22', '2020-02-09 07:09:22'),
(2, 'instagram', 'https://instagram.com/', '2020-01-24 22:09:58', '0000-00-00 00:00:00'),
(3, 'twitter', 'https://twitter.com/', '2020-01-24 22:09:58', '0000-00-00 00:00:00'),
(4, 'skype', NULL, '2020-02-15 22:59:58', '2020-02-15 21:59:58'),
(5, 'pinterest', NULL, '2020-02-15 23:00:20', '2020-02-15 22:00:20'),
(7, 'linkedin', NULL, '2020-02-15 23:00:07', '2020-02-15 22:00:07'),
(8, 'youtube', NULL, '2020-02-15 22:59:48', '2020-02-15 21:59:48'),
(9, 'whatsapp', 'https://whatsapp.com/', '2020-02-09 08:09:38', '2020-02-09 07:09:38');

-- --------------------------------------------------------

--
-- Структура таблицы `status_images`
--

CREATE TABLE `status_images` (
  `id` int(32) NOT NULL,
  `update_id` int(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `status_images`
--

INSERT INTO `status_images` (`id`, `update_id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'planupdate_1600016753.jpg', 'Farm sanitization and day-old chick arrival', '2020-09-13 16:05:53', '2020-09-13 16:05:53'),
(4, 3, 'planupdate_1622361643.jpg', 'asddrtfgyhuj', '2021-05-30 07:00:43', '2021-05-30 07:00:43'),
(5, 3, 'planupdate_1622361659.jpg', 'asddfghj', '2021-05-30 07:00:59', '2021-05-30 07:00:59');

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `id` int(32) NOT NULL,
  `subject` text NOT NULL,
  `priority` varchar(8) NOT NULL,
  `message` text NOT NULL,
  `status` int(2) NOT NULL,
  `user_id` int(32) NOT NULL,
  `ticket_id` varchar(16) NOT NULL,
  `name` text,
  `name_campaign` text,
  `video_sand` varchar(128) DEFAULT NULL,
  `url_campaign` varchar(128) DEFAULT NULL,
  `slug` text,
  `description` text,
  `description_campaign` text,
  `start_date` varchar(32) DEFAULT NULL,
  `expiring_date` varchar(32) DEFAULT NULL,
  `duration` varchar(128) DEFAULT NULL,
  `ref_percent` varchar(32) DEFAULT NULL,
  `period` varchar(32) DEFAULT NULL,
  `units` varchar(128) DEFAULT NULL,
  `original` int(32) DEFAULT NULL,
  `price` varchar(128) DEFAULT NULL,
  `interest` double DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL,
  `image_campaign` varchar(32) DEFAULT NULL,
  `cat_id` int(32) DEFAULT NULL,
  `location` text,
  `file_pdf` varchar(128) DEFAULT NULL,
  `file_analyse` varchar(128) DEFAULT NULL,
  `file_statut` varchar(128) DEFAULT NULL,
  `file_presentation` varchar(128) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `support`
--

INSERT INTO `support` (`id`, `subject`, `priority`, `message`, `status`, `user_id`, `ticket_id`, `name`, `name_campaign`, `video_sand`, `url_campaign`, `slug`, `description`, `description_campaign`, `start_date`, `expiring_date`, `duration`, `ref_percent`, `period`, `units`, `original`, `price`, `interest`, `image`, `image_campaign`, `cat_id`, `location`, `file_pdf`, `file_analyse`, `file_statut`, `file_presentation`, `created_at`, `updated_at`) VALUES
(12, 'test_Subject', 'Low', 'test Details', 0, 49, '4QiLeVmyBG1cSPw8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-24', '2021-06-24'),
(13, 'Test_1_proposal_1', 'Medium', 'cancer18', 1, 57, 'PCOAR79x06BMRwro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', '2021-07-11'),
(14, 'testttt_tikket', 'High', 'testttt_tikkettestttt_tikket', 0, 49, '8ebhkOIS78Q7Ukvh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', '2021-07-04'),
(15, 'Test_1_proposal_1', 'High', 'ssss', 0, 49, 'KrE8HDMLYz9aXMyx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', '2021-07-04'),
(16, 'Test_1_proposal_1', 'create', 'Details', 0, 49, '1blV99ock1L4uBGS', 'Name investment', 'Name Campaign', 'https://invest.adder.com.ua/admin/sand-py-plan-create', 'Url Campaign', 'name-investment', '<p>DescriptionDescriptionDescription</p>', '<p>Url Campaign</p>', '2020-06-20', '2020-09-08 00:00:00', '80', '20', 'Day', '5000', 5000, '5000', 26, NULL, NULL, 5, 'Location', NULL, NULL, NULL, NULL, '2021-07-04', '2021-07-04');

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Robert Cooper', 'CEO', 1, 'team_1620462789.jpg', '2021-05-08 08:34:54', '2021-05-08 07:34:54'),
(2, 'Christina Tores', 'CTO', 1, 'team_1620462781.jpg', '2021-05-08 08:35:26', '2021-05-08 07:35:26'),
(3, 'David Ferris', 'Data Scientist', 1, 'team_1620462768.jpg', '2021-05-30 07:05:42', '2021-05-30 06:05:42'),
(4, 'Micheal Pete', 'Technical Officer', 1, 'team_1620462743.jpg', '2021-05-08 08:32:23', '2021-05-08 07:32:23');

-- --------------------------------------------------------

--
-- Структура таблицы `transfers`
--

CREATE TABLE `transfers` (
  `id` int(32) NOT NULL,
  `ref_id` varchar(32) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `charge` int(11) DEFAULT NULL,
  `sender_id` int(32) NOT NULL,
  `receiver_id` int(32) DEFAULT NULL,
  `temp` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `trending`
--

CREATE TABLE `trending` (
  `id` int(8) NOT NULL,
  `title` text NOT NULL,
  `slug` text,
  `details` text NOT NULL,
  `image` varchar(64) NOT NULL,
  `cat_id` int(32) NOT NULL,
  `views` int(32) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `trending`
--

INSERT INTO `trending` (`id`, `title`, `slug`, `details`, `image`, `cat_id`, `views`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Budget for Your Winter Trip to Cancun', 'budget-for-your-winter-trip-to-cancun', '<p>It may be cold at home, but winter months are the peak season for Caribbean beaches, and for good reason: With beautiful scenery, tropical weather, and a dazzling array of adventure opportunities, a trip to sunny Mexico can be the perfect cure for the winter blues.</p>', 'post_1620316212.jpg', 2, 14, 1, '2021-06-26 01:04:30', '2021-06-26 01:04:30'),
(10, 'We are still choosing to help you grow your money and your confidence', 'we-are-still-choosing-to-help-you-grow-your-money-and-your-confidence', '<p>We don’t have a crystal ball, and can’t predict when rates will change again, but we wanted to clearly communicate what’s happening today. We believe that maintaining our high Protected Goals Account rates—and rewarding the choice to save—will help our customers continue to feel confident with their money.</p>', 'post_1585828243.jpg', 2, 4, 1, '2021-05-12 07:54:59', '2021-05-12 06:54:59'),
(11, 'Prioritize your savings goals based on what you really want.', 'prioritize-your-savings-goals-based-on-what-you-really-want', '<p>You know you should be saving, but what should you save for first? Prioritizing your savings goals can be confusing. Here’s how to sift through it all.</p>', 'post_1585828288.jpg', 2, 8, 1, '2021-05-12 07:49:50', '2021-05-12 06:49:50');

-- --------------------------------------------------------

--
-- Структура таблицы `trending_cat`
--

CREATE TABLE `trending_cat` (
  `id` int(8) NOT NULL,
  `categories` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `trending_cat`
--

INSERT INTO `trending_cat` (`id`, `categories`, `created_at`, `updated_at`) VALUES
(2, 'Inspiration', '2020-01-24 22:13:56', '0000-00-00 00:00:00'),
(3, 'Company', '2020-01-24 22:13:56', '0000-00-00 00:00:00'),
(4, 'Engineering', '2020-01-24 22:13:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `ui_design`
--

CREATE TABLE `ui_design` (
  `id` int(11) NOT NULL,
  `s6_title` text,
  `s2_title` text,
  `s2_body` text,
  `header_title` text,
  `header_body` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `team` text,
  `h1_t` text,
  `h1_b` text,
  `h2_t` text,
  `h2_b` text,
  `h3_t` text,
  `h3_b` text,
  `h4_t` text,
  `h4_b` text,
  `plan_title` text,
  `plan_body` text,
  `image1` varchar(32) DEFAULT NULL,
  `image2` varchar(32) DEFAULT NULL,
  `image3` varchar(32) DEFAULT NULL,
  `image4` varchar(32) DEFAULT NULL,
  `image5` varchar(32) DEFAULT NULL,
  `item1_title` text,
  `item1_body` text,
  `item2_title` text,
  `item2_body` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ui_design`
--

INSERT INTO `ui_design` (`id`, `s6_title`, `s2_title`, `s2_body`, `header_title`, `header_body`, `created_at`, `updated_at`, `team`, `h1_t`, `h1_b`, `h2_t`, `h2_b`, `h3_t`, `h3_b`, `h4_t`, `h4_b`, `plan_title`, `plan_body`, `image1`, `image2`, `image3`, `image4`, `image5`, `item1_title`, `item1_body`, `item2_title`, `item2_body`) VALUES
(1, 'Focused, Active Management of  High-Growth Digital Assets.', 'Few reasons why you should choose us', 'Flutter, the best and safest savings and investment firm, was established to provide intelligent portfolios with its expert investors, customer-priority approach, safe and high-tech investment tools.', 'The Better way to Save & Invest', 'Flutter platform is at your service with its user-friendly features, secure infrastructure and applications that make a difference.', '2020-02-21 07:12:02', '2021-05-07 23:54:17', 'Trust the professionals', 'Account Setup', 'Only 1 minute and you\'re in. Enter the information you need to become a member and start right away', 'Select a plan that suites your budget', 'Select a standard plan, a project that suits your budget or a saving plan with a good duration and interest', 'Watch your investment grow', 'Invest and sit back. You can follow your investment status at any time and invest in limited time special offers.', 'Payout Day', 'Your investment is eligible to withdraw anytime after the first 24 hours.', 'Find the right plan for you', 'Investment & Savings solution that is affordable', 'section1_1620431182.png', 'section2_1619948417.png', 'section3_1618927245.jpg', 'section3_1620433986.png', 'section5_1618942441.png', 'Decide on what to invest', 'You have complete control over the type of investments you want to engage in. All opportunities are pre-vetted by Kingsmen.', 'Watch your portfolio grow', 'Easily monitor the progress of your investments from yourdashboard.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(32) DEFAULT NULL,
  `merchant_id` varchar(32) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` text,
  `first_name` text,
  `last_name` text,
  `balance` varchar(64) DEFAULT NULL,
  `profit` varchar(64) NOT NULL DEFAULT '0',
  `ref_bonus` varchar(64) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `ip_address` varchar(32) NOT NULL,
  `last_login` varchar(32) DEFAULT NULL,
  `kyc_link` varchar(32) DEFAULT NULL,
  `kyc_type` varchar(32) DEFAULT NULL,
  `kyc_status` int(2) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `address` text,
  `verification_code` varchar(191) NOT NULL,
  `email_verify` tinyint(4) NOT NULL,
  `email_time` datetime NOT NULL,
  `googlefa_secret` varchar(64) DEFAULT NULL,
  `fa_status` int(1) DEFAULT '0',
  `trade_share` varchar(3) DEFAULT 'on',
  `total_profit` int(32) DEFAULT '0',
  `trade_bonus` double DEFAULT '0',
  `referral` int(32) DEFAULT NULL,
  `referral_second` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fa_expiring` varchar(32) DEFAULT NULL,
  `upgrade` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `image`, `merchant_id`, `email`, `username`, `first_name`, `last_name`, `balance`, `profit`, `ref_bonus`, `password`, `phone`, `status`, `ip_address`, `last_login`, `kyc_link`, `kyc_type`, `kyc_status`, `remember_token`, `address`, `verification_code`, `email_verify`, `email_time`, `googlefa_secret`, `fa_status`, `trade_share`, `total_profit`, `trade_bonus`, `referral`, `referral_second`, `created_at`, `updated_at`, `fa_expiring`, `upgrade`) VALUES
(45, 'personx.jpg', '2cAFKZ', 'user@test.com', 'sdfgHHHH', 'sfdgxch', 'dszfxgdsfg', '896948', '115500', '300', '$2y$10$XxZDFwjZPz6iVpI.Jzsc6u0kX4IkQH5ETHE1mIksMW8hoU785NYP6', NULL, 0, '::1', '2021-06-10 14:46:37', 'sdfgHHHH1622359181kyc.png', 'National ID', 0, NULL, NULL, 'YYCYXU', 1, '2021-05-08 15:23:04', NULL, 0, 'on', 115700, 0, NULL, NULL, '2021-05-08 14:18:04', '2021-09-06 07:46:22', NULL, 0),
(47, 'personx.jpg', 'xmeAzL', 'info@g.net', 'boomchart', 'yjghfd', 'uyjthrge', '100000', '1600', '10', '$2y$10$YIltZ5EGEtYaCxA88k3SjOqcub3kI1sMIxlv/x.Yw8E6abcZqH4k6', NULL, 0, '::1', '2021-05-30 08:09:42', NULL, NULL, 0, NULL, NULL, 'HK2HKP', 1, '2021-05-30 08:12:42', NULL, 0, 'on', 1600, 0, 45, NULL, '2021-05-30 07:07:42', '2021-06-29 10:59:57', NULL, 0),
(48, 'personx.jpg', '2pa5YN', 'F@G.com', 'ASDFGHJ', 'SDFGH', 'ASDFGHJ', NULL, '0', '10', '$2y$10$twC1C.BDS6mAfOny00X3XuYYvvv75YEEI0btpAlbGWgvRKY1sEHGy', NULL, 0, '::1', NULL, NULL, NULL, 0, NULL, NULL, 'Z4U83I', 1, '2021-05-30 08:13:40', NULL, 0, 'on', 0, 0, 45, NULL, '2021-05-30 07:08:40', '2021-05-30 07:08:40', NULL, 0),
(49, 'personx.jpg', 'fPgDRM', 'yurii.yesyp@gmail.com', 'cancer', 'Yurii', 'yesyp', '-37100', '0', '10', '$2y$10$xPBZJQOEjoi8CQ5XNIhyY.D1fCc2WNX1Z1TvIUyXhaGDEDznUAAhu', NULL, 0, '195.114.146.50', '2021-09-06 07:46:30', NULL, NULL, 0, NULL, NULL, 'YBAGUI', 1, '2021-06-23 15:21:03', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-06-23 15:16:03', '2021-09-06 07:46:30', NULL, 0),
(50, 'personx.jpg', 'RPtTpa', 'set@gmail.com', 'cancer2', 'Yurii 2', 'yesyp', NULL, '0', '10', '$2y$10$YtqfTrqmzHP5Psw8lXRtOObKb36zgVZBsgKYlWXOo/QRqOb.s0Hpy', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'B4BTXI', 1, '2021-06-23 15:27:22', NULL, 0, 'on', 0, 0, 49, NULL, '2021-06-23 15:22:22', '2021-06-23 15:22:22', NULL, 0),
(51, 'personx.jpg', '3MyKsU', 'cancer3@gmail.com', 'cancer3', 'cancer3', 'cancer3', NULL, '0', '10', '$2y$10$F4v1kU3.d8JA8AvVp9Zr.ugx0iGm7Pk8seq265H1G..c/VCAB6pOq', NULL, 0, '188.163.20.28', '2021-07-04 01:38:01', NULL, NULL, 0, NULL, NULL, 'HJ3MAB', 1, '2021-06-24 08:12:56', NULL, 0, 'on', 0, 0, 49, NULL, '2021-06-24 08:07:56', '2021-07-04 01:38:01', NULL, 0),
(52, 'personx.jpg', 'kpCysB', 'cancer4@gmail.com', 'cancer4', 'cancer4', 'cancer4', NULL, '0', '10', '$2y$10$SBSA10bl0npfgWyK2CC3sOKpL5ia3uVwPbDAxYpSTGDHq/9noftjG', NULL, 0, '188.163.20.28', '2021-07-03 15:13:17', NULL, NULL, 0, NULL, NULL, '85IFDJ', 1, '2021-06-24 08:17:44', NULL, 0, 'on', 0, 0, 51, NULL, '2021-06-24 08:12:44', '2021-07-03 15:13:17', NULL, 0),
(53, 'personx.jpg', 'qZq43m', 'cancer5@gmail.com', 'cancer5', 'cancer5', 'cancer5', NULL, '0', '10', '$2y$10$Y7jI/SUzyPCHKJug1fm8YO/j5HWp01plkH81b1/z5R.693CtlyN26', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'XJUOTJ', 1, '2021-07-04 00:58:11', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 00:53:11', '2021-07-04 00:53:11', NULL, 0),
(54, 'personx.jpg', 'ktilW6', 'cancer6@gmail.com', 'cancer6', 'cancer6', 'cancer6', NULL, '0', '10', '$2y$10$QVw966aIqvnjEqFVSpMGheJl105.8NQ5/PXwpcKJTAXngnzwSEqqG', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, '9I0KVB', 1, '2021-07-04 01:06:55', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 01:01:55', '2021-07-04 01:01:55', NULL, 0),
(55, 'personx.jpg', 'Ooy6jy', 'cancer7@gmail.com', 'cancer7', 'cancer7', 'cancer7', NULL, '0', '10', '$2y$10$Mt24.DY9kPEQ.gxTm3X64eO1fK/S6Am/3UwDxFez7xxaclmcK3ivq', NULL, 0, '188.163.20.28', '2021-07-04 01:07:52', NULL, NULL, 0, NULL, NULL, 'PS4NNY', 1, '2021-07-04 01:08:42', NULL, 0, 'on', 0, 0, 45, '47', '2021-07-04 01:03:42', '2021-07-04 01:07:52', NULL, 0),
(56, 'personx.jpg', 'bio5cL', 'cancer8@gmail.com', 'cancer8', 'cancer8', 'cancer8', NULL, '0', '10', '$2y$10$/xTUtYIUf3FS5pQE8RxCiOHVaxqXoYxM64vrSaut9M431IwNhQSDC', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'E9B0LM', 1, '2021-07-04 01:10:56', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 01:05:56', '2021-07-04 01:05:56', NULL, 0),
(57, 'personx.jpg', '3Ds9o6', 'cancer9@gmail.com', 'cancer9', 'cancer9', 'cancer9', '-80600', '0', '10', '$2y$10$zU9.tLWxKN9MX.lVachVT.01./sNk1K6LzFFTcZ3xm06Q7GnnPQKq', NULL, 0, '188.163.20.28', '2021-08-12 11:16:30', NULL, NULL, 0, NULL, NULL, 'QE2EFD', 1, '2021-07-04 01:27:30', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 01:22:30', '2021-08-12 11:16:30', NULL, 0),
(58, 'personx.jpg', '4YEm88', 'cancer10@gmail.com', 'cancer10', 'cancer10', 'cancer10', NULL, '0', '10', '$2y$10$KcNGg4y.Lv1KiIuMogK8WeXiig6Aued7P17mwtyzw/2GrkYb0ko7W', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, '9GWCUG', 1, '2021-07-04 01:28:52', NULL, 0, 'on', 0, 0, 45, '47', '2021-07-04 01:23:52', '2021-07-04 01:23:52', NULL, 0),
(59, 'personx.jpg', 'LoUION', 'cancer11@gmail.com', 'cancer11', 'cancer11', 'cancer11', NULL, '0', '10', '$2y$10$YnNUmJdDys7VJi0cpUbJTuCN./YfDO8.geMU7P2iB3TvhqoMaDxv6', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'P3AHVY', 1, '2021-07-04 01:41:57', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 01:36:57', '2021-07-04 01:36:57', NULL, 0),
(60, 'personx.jpg', '944IuR', 'cancer12@gmail.com', 'cancer12', 'cancer12', 'cancer12', NULL, '0', '10', '$2y$10$AgZmAXEaMz235R2rEkOxzuBdROeT4/2/4IJKFbIIo6k8AFrfxvMLO', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, '7OTDOI', 1, '2021-07-04 01:48:30', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 01:43:30', '2021-07-04 01:43:30', NULL, 0),
(61, 'personx.jpg', 'MO2Efh', 'cancer13@gmail.com', 'cancer13', 'cancer13', 'cancer13', NULL, '0', '10', '$2y$10$q4vuRdf7/oSCpxM5IhQb5umbPcwrHV9vNq5vstSavO72DOErXkqnu', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'NWHHNO', 1, '2021-07-04 01:54:49', NULL, 0, 'on', 0, 0, 0, '0', '2021-07-04 01:49:49', '2021-07-04 01:49:49', NULL, 0),
(62, 'personx.jpg', 'ipUV2P', 'cancer14@gmail.com', 'cancer14', 'cancer14', 'cancer14', NULL, '0', '10', '$2y$10$PLCPZ0HT74MunAY8AnutNOGvHd/up9QKD.oW7dplK3FlSIS6Srlqi', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, '6WLI5P', 1, '2021-07-04 01:57:26', NULL, 0, 'on', 0, 0, 0, NULL, '2021-07-04 01:52:26', '2021-07-04 01:52:26', NULL, 0),
(63, 'personx.jpg', 'jNq00B', 'cancer15@gmail.com', 'cancer15', NULL, NULL, NULL, '0', '10', '$2y$10$xFlFhbgC1UrTj4OYBdAxb.Qts7BANo5Es6kQlKAZdu4JM1LVfXCHi', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'KYCSNZ', 1, '2021-07-04 02:00:09', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 01:55:09', '2021-07-04 01:55:09', NULL, 0),
(64, 'personx.jpg', 'hJmkXe', 'cancer16@gmail.com', 'cancer16', NULL, NULL, NULL, '0', '10', '$2y$10$Xhel.eFBPT/KY5qRkjLzGu7cNuVgG/tZGWnWoBNAvCTrl0H1OyMqm', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'FFFOLB', 1, '2021-07-04 02:01:27', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 01:56:27', '2021-07-04 01:56:27', NULL, 0),
(65, 'personx.jpg', 'xUCWTK', 'cancer17@gmail.com', 'cancer17', '', '', NULL, '0', '10', '$2y$10$Q5qsn8Eh8bUVjER3veo1negD1aDHNdpTI8qmH8PdkWhGzmFlhVhxu', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'Z48P3O', 1, '2021-07-04 02:14:06', NULL, 0, 'on', 0, 0, NULL, NULL, '2021-07-04 02:09:06', '2021-07-04 02:09:06', NULL, 0),
(66, 'personx.jpg', 'fQkbHg', 'cancer18@gmail.com', 'cancer18', 'cancer18', 'cancer18', NULL, '0', '10', '$2y$10$IyAznzW22TqE4sXLMJQ5QevdCELrZzfIBqTG.LvjF/uagRwW8kwHW', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'DXOGCZ', 1, '2021-07-04 02:36:45', NULL, 0, 'on', 0, 0, 49, '51', '2021-07-04 02:31:46', '2021-07-04 02:31:46', NULL, 0),
(67, 'personx.jpg', 'KCprNe', 'TestUser@gmail.com', 'TestUser', 'User', 'Test', '-5000', '19395', '10', '$2y$10$iuR5fyxyisVIjmv1N1Uja.j.W8Tzk.CuOjQQeEnjJEOYo.6rpQhIa', NULL, 0, '188.163.20.28', NULL, NULL, NULL, 0, NULL, NULL, 'UDYWBN', 1, '2021-08-26 14:44:04', NULL, 0, 'on', 19395, 0, NULL, NULL, '2021-08-26 14:39:04', '2021-10-06 17:16:47', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `withdrawm`
--

CREATE TABLE `withdrawm` (
  `id` int(32) NOT NULL,
  `method` varchar(128) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `withdrawm`
--

INSERT INTO `withdrawm` (`id`, `method`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Bitcoin	', 0, '2020-01-30 08:25:31', '0000-00-00 00:00:00'),
(11, 'Litecoin', 0, '2020-01-30 08:25:31', '0000-00-00 00:00:00'),
(12, 'Bitcoin Cash', 0, '2020-01-30 08:25:31', '0000-00-00 00:00:00'),
(14, 'Stellar', 1, '2020-02-09 14:12:15', '2020-02-09 13:12:15'),
(15, 'Dash', 1, '2020-02-09 14:12:25', '2020-02-09 13:12:25'),
(16, 'Paypal', 1, '2020-02-09 14:12:34', '2020-02-09 13:12:34'),
(17, 'Perfect money', 1, '2020-02-09 14:13:12', '2020-02-09 13:13:12'),
(18, 'Skrill', 1, '2020-02-09 14:13:07', '2020-02-09 13:13:07'),
(19, 'Payu', 1, '2020-02-09 14:13:02', '2020-02-09 13:13:02'),
(20, 'Voguepay', 1, '2020-02-09 14:12:58', '2020-02-09 13:12:58'),
(21, 'Flutter wave', 1, '2020-02-09 14:12:04', '2020-02-09 13:12:04'),
(22, 'Paystack', 1, '2020-02-09 14:03:58', '2020-02-09 13:03:58'),
(23, 'Ethereum', 0, '2020-09-04 11:47:56', '2020-09-04 10:47:56'),
(24, 'test', 1, '2021-07-11 20:56:47', '2021-07-11 20:56:47');

-- --------------------------------------------------------

--
-- Структура таблицы `w_history`
--

CREATE TABLE `w_history` (
  `id` int(32) NOT NULL,
  `reference` varchar(32) NOT NULL,
  `user_id` int(32) NOT NULL,
  `amount` int(32) NOT NULL,
  `charge` int(11) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `coin_id` varchar(32) NOT NULL,
  `type` int(2) NOT NULL,
  `details` text NOT NULL,
  `next_settlement` varchar(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `w_history`
--

INSERT INTO `w_history` (`id`, `reference`, `user_id`, `amount`, `charge`, `status`, `coin_id`, `type`, `details`, `next_settlement`, `created_at`, `updated_at`) VALUES
(81, 'STL-s2SLyo', 45, 28800, 1200, 1, '15', 2, 'aWsezdxrcftgvybhujihgfdr', '2021-05-10 15:18:05', '2021-05-09 04:42:52', '2021-05-09 03:42:52'),
(82, 'STL-509aKU', 45, 3840, 160, 0, '15', 2, '32n4jh34j3434jhb3hj4bh', '2021-06-12 14:46:37', '2021-06-10 14:46:37', '2021-06-10 13:46:37');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_images`
--
ALTER TABLE `about_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `about_site`
--
ALTER TABLE `about_site`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin_bank`
--
ALTER TABLE `admin_bank`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bank_transfer`
--
ALTER TABLE `bank_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `claimed`
--
ALTER TABLE `claimed`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `faq_cat`
--
ALTER TABLE `faq_cat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `profits`
--
ALTER TABLE `profits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ref_earning`
--
ALTER TABLE `ref_earning`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reply_support`
--
ALTER TABLE `reply_support`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sand_followed`
--
ALTER TABLE `sand_followed`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sand_plan`
--
ALTER TABLE `sand_plan`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sand_plan_category`
--
ALTER TABLE `sand_plan_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sand_plan_updates`
--
ALTER TABLE `sand_plan_updates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sand_profits`
--
ALTER TABLE `sand_profits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status_images`
--
ALTER TABLE `status_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trending`
--
ALTER TABLE `trending`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trending_cat`
--
ALTER TABLE `trending_cat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ui_design`
--
ALTER TABLE `ui_design`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `withdrawm`
--
ALTER TABLE `withdrawm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `w_history`
--
ALTER TABLE `w_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about_images`
--
ALTER TABLE `about_images`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `admin_bank`
--
ALTER TABLE `admin_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=822;

--
-- AUTO_INCREMENT для таблицы `bank_transfer`
--
ALTER TABLE `bank_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `claimed`
--
ALTER TABLE `claimed`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT для таблицы `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT для таблицы `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT для таблицы `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `faq_cat`
--
ALTER TABLE `faq_cat`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `profits`
--
ALTER TABLE `profits`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT для таблицы `referral`
--
ALTER TABLE `referral`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ref_earning`
--
ALTER TABLE `ref_earning`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `reply_support`
--
ALTER TABLE `reply_support`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `sand_followed`
--
ALTER TABLE `sand_followed`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `sand_plan`
--
ALTER TABLE `sand_plan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `sand_plan_category`
--
ALTER TABLE `sand_plan_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `sand_plan_updates`
--
ALTER TABLE `sand_plan_updates`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `sand_profits`
--
ALTER TABLE `sand_profits`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT для таблицы `savings`
--
ALTER TABLE `savings`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `status_images`
--
ALTER TABLE `status_images`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `trending`
--
ALTER TABLE `trending`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `trending_cat`
--
ALTER TABLE `trending_cat`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `ui_design`
--
ALTER TABLE `ui_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `withdrawm`
--
ALTER TABLE `withdrawm`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `w_history`
--
ALTER TABLE `w_history`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
