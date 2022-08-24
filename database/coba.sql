-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 12:40 PM
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
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(45) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `name`, `role`) VALUES
('admin', 'admin', 'Admin', 'Admin'),
('author', 'author', 'Author', 'Author'),
('user', 'user', 'User', 'Author');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `title`, `content`, `date`, `username`) VALUES
(3, 'Soal Test', '<p><strong>Buatlah Blog seperti ini dalam WAKTU 2&nbsp;JAM dengan ketentuan :</strong></p>\r\n\r\n<ol>\r\n	<li>Menu :\r\n	<ul>\r\n		<li>Beranda</li>\r\n		<li>Post : CRUD Post</li>\r\n		<li>Akun : CRUD Akun</li>\r\n		<li>Login / Logout</li>\r\n	</ul>\r\n	</li>\r\n	<li>Terdapat 2 Role :\r\n	<ul>\r\n		<li>Admin dapat membuat Akun baru dan Post baru (CRUD)</li>\r\n		<li>Author&nbsp; hanya dapat membuat post baru (CRUD)</li>\r\n	</ul>\r\n	</li>\r\n	<li>User dummy untuk login melihat CRUD&nbsp;:\r\n	<ul>\r\n		<li>admin admin</li>\r\n		<li>author author</li>\r\n	</ul>\r\n	</li>\r\n	<li>Upload source code hasilnya pada repositori publik&nbsp;(misal github, bitbucket dsb)</li>\r\n</ol>\r\n', '2022-08-24 17:26:58', 'admin'),
(4, 'Database Dump', '<p><code>CREATE TABLE IF NOT EXISTS `account` (<br />\r\n&nbsp; `username` VARCHAR(45) NOT NULL,<br />\r\n&nbsp; `password` VARCHAR(250) NOT NULL,<br />\r\n&nbsp; `name` VARCHAR(45) NOT NULL,<br />\r\n&nbsp; `role` VARCHAR(45) NOT NULL,<br />\r\n&nbsp; PRIMARY KEY (`username`))<br />\r\nENGINE = InnoDB;</code></p>\r\n\r\n<p><code>CREATE TABLE IF NOT EXISTS `post` (<br />\r\n&nbsp; `idpost` INT NOT NULL AUTO_INCREMENT,<br />\r\n&nbsp; `title` TEXT NOT NULL,<br />\r\n&nbsp; `content` TEXT NOT NULL,<br />\r\n&nbsp; `date` DATETIME NOT NULL,<br />\r\n&nbsp; `username` VARCHAR(45) NOT NULL,<br />\r\n&nbsp; PRIMARY KEY (`idpost`),<br />\r\n&nbsp; INDEX `fk_post_account_idx` (`username` ASC),<br />\r\n&nbsp; CONSTRAINT `fk_post_account`<br />\r\n&nbsp; &nbsp; FOREIGN KEY (`username`)<br />\r\n&nbsp; &nbsp; REFERENCES `account` (`username`)<br />\r\n&nbsp; &nbsp; ON DELETE NO ACTION<br />\r\n&nbsp; &nbsp; ON UPDATE NO ACTION)<br />\r\nENGINE = InnoDB;</code></p>\r\n', '2022-08-24 17:33:10', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `fk_post_account_idx` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_account` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
