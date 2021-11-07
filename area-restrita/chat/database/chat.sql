-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Maio-2021 às 13:21
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_user` int(11) NOT NULL,
  `chat_post` text NOT NULL,
  `chat_view` int(11) NOT NULL,
  `chat_register` varchar(255) NOT NULL,
  `chat_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_friend` int(11) NOT NULL,
  `contact_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`contact_id`, `user_id`, `contact_friend`, `contact_status`, `created_at`, `deleted_at`) VALUES
(86, 1, 5, 1, '2021-04-20 23:34:49', NULL),
(87, 5, 1, 1, '2021-04-20 23:34:49', NULL),
(88, 1, 2, 0, '2021-04-20 23:34:53', NULL),
(89, 2, 1, 0, '2021-04-20 23:34:53', NULL),
(90, 1, 6, 0, '2021-04-20 23:35:12', NULL),
(91, 6, 1, 0, '2021-04-20 23:35:12', NULL),
(94, 1, 12, 1, '2021-04-21 07:56:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_cover` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_token` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_blocked` int(11) NOT NULL,
  `user_last_login` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_cover`, `user_name`, `user_email`, `user_password`, `user_token`, `user_status`, `user_blocked`, `user_last_login`, `created_at`) VALUES
(1, 'mestres-do-php.png', 'Mestres do PHP', 'contato@mestresdophp.com.br', '$2y$10$z6lkPs22j3NblS/p5diNAOexQ2z9bmoStx0Cm2wdLjVHOkhfhz82O', 123456, 1, 0, '', '2021-04-15 18:08:00'),
(2, 'jackie-chan.jpg', 'Sr. Jackie Chan', 'jackie@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 1, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(3, 'michelle-yeoh.jpg', 'Sra. Michelle Yeoh', 'michelle@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '12/04/2021 - 20:39', '2021-04-15 18:08:00'),
(4, 'van-damme.jpg', 'Sr. Van Damme', 'vandamme@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 1, 0, '', '2021-04-15 18:08:00'),
(5, 'Bruce-Lee.png', 'Sr. Bruce Lee', 'bruce@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 1, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(6, 'steven-seagal.jpg', 'Sr. Steven Seagal', 'steven@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(7, 'jet-li.jpg', 'Sr. Jet Li', 'jeli@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(8, 'rothrock-cynthia.jpg', 'Sra. Cynthia Rothrock', 'cynthia@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(9, 'sammo-hung.jpg', 'Sr. Sammo Hung', 'sammohung@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(10, 'Wesleysnipes.jpg', 'Sr. Wesley Snipes', 'wesley@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(11, 'chuck-norris.jpg', 'Sr. Chuck Norris', 'chuck@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00'),
(12, 'pat-morita.jpeg', 'Sr. Pat Morita', 'miyagi@mestresdophp.com.br', '$2y$10$1JQrGEAKMiTMhZrjuSkFw.fRY2grMcvtqaFzNf9gEpmBcxQoAuyYS', 123456, 0, 0, '14/04/2021 - 20:39', '2021-04-15 18:08:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
