-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2009 at 02:16 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hamroshikshya`
--

-- --------------------------------------------------------

--
-- Table structure for table `logina_admina`
--

CREATE TABLE IF NOT EXISTS `logina_admina` (
  `sn` int(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logina_admina`
--

INSERT INTO `logina_admina` (`sn`, `username`, `password`) VALUES
(0, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `sn` int(20) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) NOT NULL,
  `news` varchar(5000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sn`, `news_title`, `news`, `date`) VALUES
(95, 'Nepal won Bhutan', '<p>Nepal won Bhutan in the International level Badminton Competition. The team of Bhtan played their best but couldn&#39;t bagged the medal.</p>\r\n', '0000-00-00 00:00:00'),
(100, 'EC completes Nov. 19 poll preparations', '<p>SAPTARI, OCT 16 - Election Commissioner Ayodhee Prasad Yadav has said all preparations for the Constituent Assembly election except for printing of&nbsp;ballot paper&nbsp;s have been completed.</p>\r\n\r\n<p>Speaking at a press meet organised in Rajbiraj by the District Election Office Saptari today, Commissioner Yadav said the EC has intensified the printing of&nbsp;ballot paper&nbsp;s.</p>\r\n\r\n<p>Yadav said printing of 12.5 million&nbsp;ballot paper&nbsp;s for direct election has started from yesterday while for the Proportional Representation category nine million have already been printed. According to Yadav, six million remain&nbsp;ballot paper&nbsp;s for PR system is yet to be printed.&nbsp;</p>\r\n\r\n<p>He added that the&nbsp;ballot paper&nbsp;s will be transported to the district election offices as soon as they are completed.</p>\r\n\r\n<p>Commissioner Yadav also urged the poll-opposing parties including the CPN-Maoist for cooperation.</p>\r\n', '0000-00-00 00:00:00'),
(101, 'Fear for festival hunger haunts Dalit community in Bajura VDC', '<p>Shankar Lohar, a Dalit from Kailashmandau VDC-3 in Bajura, is tensed up as he is running out of food at a time when&nbsp;Dashain&nbsp;is on his doorstep.</p>\r\n\r\n<p>He fears that he may not get Khalo (wages given in the form of crops by landlords) during the festival with the harvest season yet to start. &ldquo;We will celebrate&nbsp;Dashain&nbsp;only if our landlord gives us Khalo. We are waiting for it,&rdquo; he said.</p>\r\n\r\n<p>Not only Shankar, many people from the Dalit community in the district are awaiting Khalo, a traditional system practiced by Dalits. There is no limitation of how much Khalo one gets. It depends at the mercy of landlords. &ldquo;We get crops in lieu of wages for our work,&rdquo; Shankar said, adding that he makes and repairs around 100 iron items a day for landlords.</p>\r\n\r\n<p>Meanwhile, some Dalits, quitting this traditional profession, have made their way to Indian cities in search of job opportunities. &ldquo;We are forced to go to India to work as it is difficult to survive back home,&rdquo; said Sher Bahadur Nepali of Barhabis. &ldquo;We have to work for landlords the whole year, but we get Khalo only twice a year, which is not enough to feed our families.&rdquo;</p>\r\n\r\n<p>Pratape Aauji, chairman of the District Khaliya Society, said Dalits from Lohar, Damai and Sarki groups, among others, are forced to continue the system for want of alternative income sources. He said there are around 45,000 Khaliyas in the district.</p>\r\n', '0000-00-00 00:00:00'),
(102, 'Rescue tower in Phewa Lake', '<p>A lake watch and rescue tower has been constructed on the banks of&nbsp;Phewa Lake&nbsp;to curb incidents of drowning.</p>\r\n\r\n<p>The 32 feet tall tower, under the guard of the Armed Police Force (APF), came into operation from Monday. The tower was inaugurated by Regional Administrator Lokdarshan Regmi amid a programme.</p>\r\n\r\n<p>A team of APF personnel, specialising in water rescue operation, will be deputed to minimise incidents of drowning and to promptly rescue victims.</p>\r\n\r\n<p>The team will constantly monitor activities in the lake and inform about precautionary measures through loud speakers installed around the lake. &ldquo;Police will alert all by providing prior information about any change in the weather and wind condition&rdquo;,said SSP Durga Bahadur Kunwar of the APF.</p>\r\n\r\n<p>The tower was constructed on the initiation of the APF with the support of of the Pokhara Sub-Metropolitan City, tourism entrepreneurs, boat operators, local youth clubs and mother&#39;s group at the cost of Rs 1.5 million.</p>\r\n', '0000-00-00 00:00:00'),
(103, 'Sonam won the match of badminton', '<p>Sonam Gurung bagged the gold medal in the international level Badminton Comp.</p>\r\n', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE IF NOT EXISTS `slider_image` (
  `image_id` int(20) NOT NULL AUTO_INCREMENT,
  `image_location` varchar(100) NOT NULL,
  `image_caption` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`image_id`, `image_location`, `image_caption`, `date`) VALUES
(6, 'photos/image-slider-1.jpg', 'Men and the women are lying under the nature.', '0000-00-00 00:00:00'),
(9, 'photos/image-slider-3.jpg', 'This is another image slider.', '0000-00-00 00:00:00'),
(10, 'photos/image-slider-4.jpg', 'This is another image slider.', '0000-00-00 00:00:00'),
(11, 'photos/image-slider-5.jpg', 'This is another image slider.', '0000-00-00 00:00:00');
