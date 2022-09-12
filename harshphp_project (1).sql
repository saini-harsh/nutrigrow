-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2022 at 04:45 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harshphp_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_new`
--

DROP TABLE IF EXISTS `admin_new`;
CREATE TABLE IF NOT EXISTS `admin_new` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_new`
--

INSERT INTO `admin_new` (`email`, `pass`, `usertype`) VALUES
('adminpanel931@gmail.co.in', 'Adminpanel931*', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup_data`
--

DROP TABLE IF EXISTS `admin_signup_data`;
CREATE TABLE IF NOT EXISTS `admin_signup_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_img` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_img`, `date`, `type`, `description`, `time`) VALUES
(14, 'news2.jpg', '2022-04-26', 'lorem dummy content', 'suscipit leo massa sodales velit et scelerisque quam\r\n                  Curabitur vel dolor ultrices ipsum dictum tristique\r\n                  Praesent vitae', '2022-04-26 12:22:21'),
(13, 'latest6.png', '2022-04-26', 'Fusce ultricies orci feugiat', 'suscipit leo massa sodales velit et scelerisque quam\r\n                  Curabitur vel dolor ultrices ipsum dictum tristique\r\n                  Praesent vitae', '2022-04-26 12:21:56'),
(15, 'news3.jpg', '2022-04-18', 'leaf checking treatment', 'suscipit leo massa sodales velit et scelerisque quam\r\n                  Curabitur vel dolor ultrices ipsum dictum tristique\r\n                  Praesent vitae', '2022-04-26 12:22:40'),
(16, 'news4.jpg', '2022-04-15', 'test treatment maker', 'suscipit leo massa sodales velit et scelerisque quam\r\n                  Curabitur vel dolor ultrices ipsum dictum tristique\r\n                  Praesent vitae', '2022-04-26 12:22:55'),
(17, 'news2.jpg', '2022-04-20', 'destiny content checker', 'suscipit leo massa sodales velit et scelerisque quam\r\n                  Curabitur vel dolor ultrices ipsum dictum tristique\r\n                  Praesent vitae', '2022-04-26 12:23:29'),
(18, 'latest2.png', '2022-04-25', 'lorem dummy content', 'suscipit leo massa sodales velit et scelerisque quam\r\n                  Curabitur vel dolor ultrices ipsum dictum tristique\r\n                  Praesent vitae', '2022-04-26 12:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_now_data`
--

DROP TABLE IF EXISTS `contact_now_data`;
CREATE TABLE IF NOT EXISTS `contact_now_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pphone` bigint(20) NOT NULL,
  `ophone` bigint(20) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`pphone`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_now_data`
--

INSERT INTO `contact_now_data` (`id`, `name`, `lname`, `email`, `pphone`, `ophone`, `msg`, `datetime`) VALUES
(4, 'ruhani', 'bisht', 'ruhani45@gmail.co', 7123131321, 9845131321, 'ruhanika bisht is soim', '4022-04-09 10:55:01'),
(7, 'dsfasdf', '', 'sadfdsaf@gmail.com', 8544555454, 9454546455, 'dsfsadfasdf', '2022-05-19 09:00:54'),
(6, 'harsh', 'sain', 'harshsaini0122@gmail.com', 9666666666, 9545454545, 'hello', '2022-05-19 08:29:45'),
(8, 'deepak', 'sasadsa', 'deepak@gmail.com', 9797987979, 9879878979, 'sadfsadfsadfsadfsadf', '2022-05-19 09:02:09'),
(9, 'ram', 'yadava', 'ram@gmail.com', 9897798979, 9646464646, 'adsfas', '2022-05-19 09:03:10'),
(10, 'pulkit', 'sadfas', 'pulkit@gmail.co', 9798797998, 9979875754, 'sadaFD', '2022-05-19 09:05:22'),
(11, 'SADFSA', 'SDFAF', 'sdafsa@gmail.com', 9779797979, 9646546546, 'SDFASF', '2022-05-19 09:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `get_touch_data`
--

DROP TABLE IF EXISTS `get_touch_data`;
CREATE TABLE IF NOT EXISTS `get_touch_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_touch_data`
--

INSERT INTO `get_touch_data` (`id`, `name`, `email`, `phone`, `message`, `datetime`) VALUES
(11, 'vin', 'vina@gmail.com', 9789797979, 'sdalfjkdjf', '2022-04-18 11:39:51'),
(12, 'harsh', 'sdahkfh@gmail.co', 9875646547, 'sad', '2022-07-02 17:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `file_path`, `date`, `type`, `description`, `time`) VALUES
(6, 'news2.jpg', '2022-05-05', '100% Organic Oil', 'Organic oil, is the non-psychoactive cannabinoid famed for significantly reducing symptoms in patients suffering from seizure', '2022-05-11 11:22:34'),
(7, 'news3.jpg', '2022-05-24', 'Cbd Leaf Testing', 'cbd, is the non-psychoactive cannabinoid famed for significantly reducing symptoms in patients suffering from seizure', '2022-05-11 11:25:24'),
(8, 'news4.jpg', '2022-05-18', 'Cbn Leaf Oil', 'cbn, is the non-psychoactive cannabinoid famed for significantly reducing symptoms in patients suffering from seizure', '2022-05-11 11:26:13'),
(5, 'news1.jpg', '2022-05-11', 'lorem ipsum dummy', 'cbd, is the non-psychoactive cannabinoid famed for significantly reducing symptoms in patients suffering from seizure', '2022-05-11 11:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_data`
--

DROP TABLE IF EXISTS `newsletter_data`;
CREATE TABLE IF NOT EXISTS `newsletter_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_data`
--

INSERT INTO `newsletter_data` (`id`, `email`) VALUES
(21, 'afhdsjafhkasjd@fmm.com'),
(20, 'afhdsjafhkasjd@fmm.com'),
(19, 'afhdsjafhkasjd@fmm.com'),
(16, 'harsh@gmail.com'),
(17, 'jhhhhh@gmh.co'),
(18, 'asfsadfa@gaf.com'),
(22, 'afhdsjafhkasjd@fmm.com'),
(23, 'afhdsjafhkasjd@fmm.com'),
(24, 'afhdsjafhkasjd@fmm.com'),
(25, 'afhdsjafhkasjd@fmm.com'),
(26, 'afhdsjafhkasjd@fmm.com'),
(27, 'harsh@gmail.com'),
(28, 'harsh@gmail.com'),
(29, 'harsh@gmail.com'),
(30, 'checking@gmail.com'),
(31, 'check2@gmail.co'),
(32, 'ddddd@gff.om'),
(33, 'inr@gmail.com'),
(34, ''),
(35, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 'vivek', 3910, 'Complete', 'pay_JMOdMiZC1KrBu0', '2022-04-22 12:08:06'),
(2, 'luv', 3454, 'Complete', 'pay_JP5R6ynKmY0Xoe', '2022-04-29 07:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `file_path`, `type`, `price`, `description`, `time`) VALUES
(48, 'cbdproduct3.png', 'Hemp oil', '599', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '2022-05-11 11:09:10'),
(47, 'cbdproduct2.png', 'Skin Oil', '499', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '2022-05-11 11:07:59'),
(46, 'cbdproduct1.png', 'Hair Oil', '199', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '2022-05-11 11:05:45'),
(50, 'cbdproduct5.png', 'Body lotion', '100', 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the lorem', '2022-05-11 11:10:06'),
(51, 'cbdproduct6.png', 'Nutrigrow oil', '999', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '2022-05-11 11:10:36'),
(52, 'cbdproduct7.png', 'cbd hemp oil', '459', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the simple one oil', '2022-05-11 11:12:12'),
(53, 'cbdproduct8.png', 'Hcvc Oil', '369', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the simple one oil', '2022-05-11 11:12:33'),
(54, 'icon.png', 'harsh', '999', 'asdfkjaskdfhaskdfklsadf asdhfsaldfhkasldhf', '2022-07-02 17:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `signup_data`
--

DROP TABLE IF EXISTS `signup_data`;
CREATE TABLE IF NOT EXISTS `signup_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_data`
--

INSERT INTO `signup_data` (`id`, `fname`, `lname`, `email`, `phone`, `pass`) VALUES
(27, 'harsh', 'kok', 'vinayakranjan@gmail.com', 9787897899, 'eca51574cb323468ecb8b67d69133490'),
(25, 'harshh', 'harshh', 'harshharsh@gmail.com', 8797987987, 'd4e3730e8cba214f85cddae5f9331d74'),
(4, 'shara', 'shara', 'shara123@gmail.com', 9898989898, '12982bb70dcc7ac53cd0650bb6eaf69c'),
(5, 'ha', 'asdf', 'sdfal@gmail.com', 9898989898, '4124bc0a9335c27f086f24ba207a4912'),
(6, 'krita', 'kumari', 'krita@gmailco.in', 8978786515, '73ecc7a35cef1c645cc9d83d81d28e67'),
(7, 'kuma', 'saini', 'kuma@gmail.com', 9879797979, '8c9d806c6d2e80e87b60e1e860042303'),
(8, 'msrita', 'iiin', 'missrita@gmail.com', 9879879879, '52e57543775c3ada4236ba67ebf624ae'),
(9, 'harsh', 'saa', 'jokes@gmail.com', 9898989891, '4124bc0a9335c27f086f24ba207a4912'),
(10, 'yaho', 'singh', 'yaho123@gmail.com', 7894568978, '55bb9dcc712dbad45290e6bc9405e1e2'),
(35, 'adfdasfd', 'asfdasfd', 'aabcd@gmail.com', 9877878978, '3dbe00a167653a1aaee01d93e77e730e'),
(12, 'ram', 'yadav', 'ram@gmail.com', 9879879498, '4641999a7679fcaef2df0e26d11e3c72'),
(13, 'asfdas', 'asfdasdf', 'asdfaf@gmail.co', 9989898989, '12eccbdd9b32918131341f38907cbbb5'),
(14, 'qqqq', 'qqq', 'qqqq@gmail.com', 9879879789, '4124bc0a9335c27f086f24ba207a4912'),
(15, 'ram', 'fram', 'ram34@gaga.com', 9878979877, 'c582dec943ff7b743aa0691df291cea6'),
(16, 'vikram', 'kumar', 'vikram@gmail.com', 9878987788, '4f03a3d7d3dffa764d27606ff3773311'),
(17, 'jui', 'jui', 'jui@gmail.com', 9898989898, '881943465311ed940daf6aab9eaa40a9'),
(18, 'deepak', 'kumar', 'deepal@gmail.com', 8979797548, '498b5924adc469aa7b660f457e0fc7e5'),
(24, 'himanshuu', 'saini', 'hkimanshu@gmail.com', 9879797979, '4122ea4f5490094a33d7cdba65136cf8'),
(21, 'pulkit', 'kumm', 'pulkit@gmail.com', 9798797987, 'dff6017deddbe5e1b3022375ffb5937f'),
(29, 'harsh', 'saini', 'harsh@gmail.com', 9789977878, 'd4e3730e8cba214f85cddae5f9331d74'),
(28, 'joke', 'kol', 'joke@gmail.com', 8879797987, 'cc6b3c1cc02549b23b63b211205bd1f1'),
(30, 'vin', 'bin', 'viin@gmail.com', 7979799979, '9d5e4791ecc9bfaaef767413cba4de90'),
(31, 'vivek', 'ranjan', 'vivek@gmail.com', 9797987987, '061a01a98f80f415b1431236b62bb10b'),
(32, 'sweety', 'kumari', 'sweeti123@mail.com', 7897897897, 'de1e3b0952476aae6888f98ea0e4ac11'),
(33, 'vivek', 'ranjan', 'vivek123@gmail.com', 7678689852, '061a01a98f80f415b1431236b62bb10b'),
(34, 'luv', 'pandey', 'luvpandey123@gmail.com', 8595967463, '1753ebe9db5241f9c1aec38942850cbb'),
(36, 'radha', 'kumari', 'radha@gmail.co', 8798764646, '0280a430e35fee634f01cbc5a8178864'),
(37, 'dsafasfd', 'asdfasdf', 'gogogo@gmail.com', 8698797987, '35af4bf130805f0b86b1b13e49c8101e'),
(38, 'deepak', 'dsdfas', 'deepak23@gmail.com', 8787897979, 'c6bf80b54bfe6748bfa87f9a473e517a'),
(39, 'harsh', 'kumar', 'harshkumar123@gmail.com', 9464646546, '49f5fb9ed6bb19a91500796624189308'),
(40, 'harsh', 'saini', 'harshh@gmail.com', 8997979879, '9e4ebaee9723b4ee0646d9ca9e2425a0'),
(41, 'billu', 'saini', 'billu@gmail.com', 9797979798, '358704453ecabf1ec3cec5d64b31597e'),
(42, 'deepak', 'ssadas', 'deepak45@gmail.com', 8979797978, '46832855f252ee59fd7427c9d42bf362'),
(43, 'joke', 'ds', 'joke123@gmail.com', 9998979878, '30c0e76cc03bb63c2e5d3dc79f112bab'),
(44, 'sdaf', 'dsaf', 'koko@gmail.com', 9978978797, '70ad04a86fc498dccb9d872722fbfadd'),
(45, 'harsh', 'sadf', 'harshhh@gmail.com', 9874563214, 'd5c7ebb489c96f3c7b181676b2bda2a6'),
(46, 'yahoo', 'sdafas', 'yahho@gmail.com', 9632587412, '6bcd79659e42d74dd7d65da937fe85fe');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review` varchar(255) NOT NULL,
  `reviewer` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `review`, `reviewer`, `datetime`) VALUES
(4, 'Cannabidiol, or cbd, is the non-psychoactive cannabinoid famed for significantly reducing symptoms in patients suffering from seizure ', 'harsh', '2022-05-09 09:43:51'),
(2, ' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make ', 'wasim ', '2022-04-29 13:26:44'),
(3, 'Cannabidiol, or cbd, is the non-psychoactive cannabinoid famed for significantly reducing symptoms in patients suffering from seizure ', 'tarun saini', '2022-04-29 13:50:47'),
(5, 'Cannabidiol, or cbd, is the non-psychoactive cannabinoid famed for significantly reducing symptoms in patients suffering from seizure ', 'deepak', '2022-05-09 09:44:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
