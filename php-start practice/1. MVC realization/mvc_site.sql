-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 12:37 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `preview`, `type`) VALUES
(1, 'France fuel protests: PM Philippe \'to halt fuel tax rise\'', '2018-12-04 09:21:06', 'The French government will suspend a fuel tax rise which has led to weeks of violent protests, local media report.\r\n\r\n', '', 'Andrey', '/images/1.jpg', 'PhotoReportPublication'),
(2, 'Law officer says UK can cancel Brexit', '2018-12-04 09:23:18', 'The UK should be able to unilaterally cancel its withdrawal from the EU, according to a top European law officer.', '', 'Vasya', '/images/2.png', 'ArticlePublication'),
(3, 'George HW Bush\'s service dog Sully pays touching last tribute', '2018-12-04 09:23:18', 'The labrador who worked as a service dog for President George HW Bush has been pictured resting beside his coffin, in a moving tribute.', '', 'John', '/images/3.png', 'NewsPublication'),
(4, 'Donald Trump v the world: US tariffs in four charts', '2018-12-04 09:25:15', 'Donald Trump has agreed not to escalate his trade war with China, but many other countries have also been affected by the US president\'s America First trade policy.', '', 'Andrey', '/images/4.png', 'NewsPublication'),
(5, '\'I don\'t want to burden my children\': Life in an Indian care home', '2018-12-04 09:25:15', 'For the elderly living in care homes, life is both calm and chaotic. Photographer Sayan Hazra spent more than a year chronicling the lives of residents at one such care home in southern India.\r\n\r\n', '', 'John', '/images/5.jpeg', 'ArticlePublication');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
