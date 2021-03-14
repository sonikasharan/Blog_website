-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 11:18 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(32, 45, 11, 'A blind man', '1608721087_blind.jpg', '&lt;p&gt;As a blind man has no idea of colors, so have we no idea of the manner by which the all-wise God perceives and understands all things. I\'m not a Method actor......&lt;/p&gt;', 1, '2020-12-23 16:28:07'),
(33, 45, 11, 'Peace begins with a smile', '1608721125_smiling.jpg', '&lt;p&gt;&amp;nbsp;The greatest self is a peaceful smile, that always sees the world smiling back. &quot;A smile is happiness you\'ll find right under......&lt;/p&gt;', 1, '2020-12-23 16:28:45'),
(34, 45, 10, ' An old women', '1608721173_old.jpg', '&lt;p&gt;When I see myself as an old woman, I just think about being happy. If you ever find happiness by hunting for it, you will find it, ....&lt;/p&gt;', 1, '2020-12-23 16:29:33'),
(35, 45, 15, ' light', '1608721237_light.jpg', '&lt;p&gt;And God made two great lights; the greater light to rule the day, and the lesser light to rule the night....&lt;/p&gt;', 1, '2020-12-23 16:30:37'),
(36, 45, 26, 'An old men', '1608721282_blind.jpg', '&lt;p&gt;As a blind man has no idea of colors, so have we no idea of the manner by which the all-wise God perceives and understands all things. I\'m not a Method actor......&lt;/p&gt;', 1, '2020-12-23 16:31:22'),
(37, 45, 16, 'A smiling girl', '1608721335_girl.jpg', '&lt;p&gt;&amp;nbsp;When I see myself as an old woman, I just think about being happy. If you ever find happiness by hunting for it, you will find it, ....&lt;br&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;', 1, '2020-12-23 16:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(10, 'Poem', '<p>this include poem</p>'),
(11, 'Fiction', '<p>fiction</p>'),
(15, 'Quotes', ''),
(16, 'Biography', ''),
(26, 'Motivation', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(45, 0, 'alok', 'alok@gmail.com', '$2y$10$eFpWNgxk8sV4OiDs56TPDubkLLdDQpMaPbzcXHJK66h8r1S3O0ZgS', '2020-12-23 10:49:13'),
(49, 1, 'sonika', 'sonika@gmail.com', '$2y$10$Ml/LoJHnJLGg5AhA0NNfE.4kx.1UZxZTR2otzlGY5E/Oi9Gvw8RM6', '2020-12-24 07:08:53'),
(50, 0, 'deepika', 'deepika@gmail.com', '$2y$10$o0mkjzDxQ1WZTFoT84JFrecciy7QbgzBjRMPlHbgJfXi9Ir140GfO', '2020-12-24 08:11:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
