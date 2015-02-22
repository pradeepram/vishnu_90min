-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2015 at 03:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `next90minapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `facebook_collapsed_ip`
--

CREATE TABLE IF NOT EXISTS `facebook_collapsed_ip` (
  `userip` varchar(100) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook_collapsed_ip`
--

INSERT INTO `facebook_collapsed_ip` (`userip`, `post_id`) VALUES
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 155),
('192.168.0.70', 155),
('192.168.0.70', 136),
('192.168.0.70', 136),
('192.168.0.70', 136),
('192.168.0.70', 136),
('192.168.0.70', 136),
('192.168.0.70', 135),
('192.168.0.70', 135),
('192.168.0.70', 139),
('192.168.0.70', 139),
('192.168.0.70', 139),
('192.168.0.70', 139),
('192.168.0.70', 140),
('192.168.0.70', 140),
('192.168.0.70', 140),
('192.168.0.70', 142),
('192.168.0.70', 142),
('192.168.0.70', 142),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 154),
('192.168.0.235', 154),
('192.168.0.235', 156),
('192.168.0.235', 156),
('192.168.0.235', 156),
('192.168.0.235', 156),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 153),
('192.168.0.70', 153),
('192.168.0.70', 153),
('192.168.0.235', 156),
('192.168.0.235', 156),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 154),
('192.168.0.235', 154),
('192.168.0.235', 155),
('192.168.0.235', 155),
('192.168.0.235', 153),
('192.168.0.235', 153),
('192.168.0.235', 153),
('192.168.0.235', 153),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 155),
('192.168.0.70', 155),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.70', 154),
('192.168.0.70', 154),
('192.168.0.70', 156),
('192.168.0.70', 156),
('192.168.0.235', 156),
('192.168.0.235', 156),
('192.168.0.235', 156),
('192.168.0.129', 148),
('192.168.0.129', 148),
('192.168.0.129', 144),
('192.168.0.70', 166),
('192.168.0.70', 166),
('192.168.0.70', 166),
('192.168.0.70', 166),
('192.168.0.70', 164),
('192.168.0.70', 164);

-- --------------------------------------------------------

--
-- Table structure for table `facebook_collapsed_likes`
--

CREATE TABLE IF NOT EXISTS `facebook_collapsed_likes` (
`id` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook_collapsed_likes`
--

INSERT INTO `facebook_collapsed_likes` (`id`, `likes`, `post_id`, `Date`) VALUES
(83, 1, 166, '2015-02-21 04:55:14'),
(84, 2, 166, '2015-02-21 04:55:16'),
(85, 1, 164, '2015-02-21 04:57:05'),
(86, 2, 164, '2015-02-21 04:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `facebook_posts`
--

CREATE TABLE IF NOT EXISTS `facebook_posts` (
`p_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `post` varchar(255) NOT NULL,
  `f_image` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userip` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook_posts`
--

INSERT INTO `facebook_posts` (`p_id`, `f_name`, `post`, `f_image`, `date_created`, `userip`, `status`) VALUES
(172, 'User1', 'Test 11:21..', '', '2015-02-21 06:35:07', '192.168.0.70', 1),
(178, 'User1', 'Test 11:47.', '', '2015-02-21 06:34:25', '192.168.0.70', 0),
(180, 'User1', 'Test 11:56..', '', '2015-02-21 06:34:55', '192.168.0.70', 1),
(181, 'User1', 'Test 11:57..', '', '2015-02-21 06:35:24', '192.168.0.70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facebook_posts_comments`
--

CREATE TABLE IF NOT EXISTS `facebook_posts_comments` (
`c_id` int(11) NOT NULL,
  `userip` varchar(200) NOT NULL,
  `comments` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook_posts_comments`
--

INSERT INTO `facebook_posts_comments` (`c_id`, `userip`, `comments`, `date_created`, `post_id`) VALUES
(40, '192.168.0.70', 'wat session 1 plan..', '2015-02-21 04:11:49', 160);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
`user_id` int(11) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dt_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `emailaddress`, `username`, `password`, `dt_registered`) VALUES
(1, 'ghgh', '', '', '2015-02-21 12:49:30'),
(2, 'Test@gmail.com', '', '', '2015-02-21 12:51:25'),
(3, 'ghgh,username=selva,pwd=selva', '', '', '2015-02-21 12:53:42'),
(4, 'ghgh,"username"=selva,"pwd"=selva', '', '', '2015-02-21 12:54:20'),
(5, 'ghgh,"?username"=selva,"?pwd"=selva', '', '', '2015-02-21 12:55:19'),
(6, 'ghgh "?username"=selva "?pwd"=selva', '', '', '2015-02-21 12:55:42'),
(7, '', '', '', '2015-02-21 13:03:19'),
(8, '', '', '', '2015-02-21 13:08:58'),
(9, '', '', '', '2015-02-21 13:49:09'),
(10, '', '', '', '2015-02-21 14:17:32'),
(11, '', '', '', '2015-02-21 14:19:36'),
(12, '', '', '', '2015-02-21 14:29:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facebook_collapsed_likes`
--
ALTER TABLE `facebook_collapsed_likes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `Date` (`Date`);

--
-- Indexes for table `facebook_posts`
--
ALTER TABLE `facebook_posts`
 ADD PRIMARY KEY (`p_id`), ADD UNIQUE KEY `date_created` (`date_created`);

--
-- Indexes for table `facebook_posts_comments`
--
ALTER TABLE `facebook_posts_comments`
 ADD PRIMARY KEY (`c_id`), ADD UNIQUE KEY `date_created` (`date_created`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facebook_collapsed_likes`
--
ALTER TABLE `facebook_collapsed_likes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `facebook_posts`
--
ALTER TABLE `facebook_posts`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `facebook_posts_comments`
--
ALTER TABLE `facebook_posts_comments`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
