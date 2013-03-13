-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2013 at 09:14 PM
-- Server version: 5.1.67
-- PHP Version: 5.3.6-13ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workshop_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `post_id` int(12) NOT NULL,
  `comment_id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `website_url` varchar(256) DEFAULT NULL,
  `content` text NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`,`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`post_id`, `comment_id`, `name`, `website_url`, `content`, `posted_on`) VALUES
(3, 1, 'Duis a Lectus', 'www.wikia.com', 'Donec nulla nunc, malesuada eget tincidunt quis, adipiscing vitae massa. Aenean dapibus orci nec metus rhoncus commodo. Nunc aliquam quam in mauris cursus eleifend vel eget lectus. Aenean feugiat tempor dolor id sollicitudin. Sed iaculis sem sit amet nisi aliquam eleifend. Cras pharetra enim pellentesque est sollicitudin a adipiscing dolor tristique. Integer non tempus lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam at urna mauris, in pulvinar magna. Etiam ornare magna id sem accumsan quis tristique felis hendrerit. Nam neque erat, tempus in scelerisque at, faucibus eu nisi. Maecenas ultrices congue leo et luctus. Donec eget rhoncus ante. Nullam suscipit dui eget odio fermentum fermentum. Fusce dapibus molestie congue.', '2013-03-13 20:12:23'),
(1, 1, 'Sit Amet', NULL, 'Proin id enim at lectus ultrices hendrerit eu dignissim turpis. Vestibulum in massa dolor. Donec congue congue est a egestas. Nunc lectus lacus, dictum iaculis egestas sed, volutpat at velit. Nullam tellus sapien, tempor sed commodo sit amet, sodales ac ipsum. Praesent at tellus mauris, nec ultricies diam. In molestie facilisis lacus sed auctor.', '2013-03-13 20:13:27'),
(1, 2, 'Nunc Tellus', NULL, 'Donec tortor diam, tincidunt non dapibus et, luctus in sapien. Phasellus sed turpis erat. Sed venenatis, urna sed sollicitudin posuere, massa tortor malesuada nunc, id laoreet justo tortor ut dolor. Integer aliquam, tellus et malesuada sagittis, lacus risus pulvinar diam, ac adipiscing ligula dui cursus metus. Donec blandit hendrerit odio, vitae tristique nisl mollis a. Integer pharetra neque sed lectus vulputate nec sagittis nisi tincidunt. Suspendisse malesuada congue laoreet. Quisque a turpis sed ante fermentum dapibus.', '2013-03-13 20:13:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
