-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 01:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobtor`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `username` varchar(200) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `division` varchar(200) NOT NULL,
  `zilla` varchar(200) NOT NULL,
  `thana` varchar(200) NOT NULL,
  `duration` int(11) NOT NULL,
  `day_month` varchar(20) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_per`
--

CREATE TABLE `job_per` (
  `id` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `details` text,
  `hospital` varchar(500) DEFAULT NULL,
  `division` varchar(200) DEFAULT NULL,
  `zilla` varchar(200) DEFAULT NULL,
  `thana` varchar(200) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `available` tinyint(1) DEFAULT '1',
  `placename` varchar(255) DEFAULT NULL,
  `placelat` varchar(255) DEFAULT NULL,
  `placelon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` mediumint(9) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `label`, `title`, `header`, `body`) VALUES
(1, 'home', 'Home', 'Home', 'Home', 'mhghh'),
(2, 'about-us', 'About Us', 'About Us', 'About Us', 'seyestygsgasgfdgfdafdafasgfshdshdthjdsyhdtshshdshdshdsyeyeyeyy\r\nghsghgsg\r\ntgrstatgtastfstgfsttttwttttttttttttttwedg\r\nsdgsgsgsgtewtywyyyy'),
(3, 'contact-us', 'Contact Us', 'Contact Us', 'Contact Us', 'stdsstrt\r\nett\r\nwtw\r\ntw\r\nt\r\ntw\r\ntw\r\nt\r\newturtu\r\nty\r\nu\r\nyry\r\ne\r\nur\r\nuirt\r\nit7i\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `division` varchar(200) NOT NULL,
  `zilla` varchar(200) NOT NULL,
  `thana` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `division`, `zilla`, `thana`) VALUES
(1, 'Dhaka', 'Dhaka', 'Sutrapur'),
(2, 'Dhaka', 'Dhaka', 'Dhamrai'),
(3, 'Dhaka', 'Dhaka', 'Dohar'),
(4, 'Dhaka', 'Dhaka', 'Keraniganj'),
(5, 'Dhaka', 'Dhaka', 'Nawabganj'),
(6, 'Dhaka', 'Dhaka', 'Savar'),
(7, 'Dhaka', 'Dhaka', 'Adabor'),
(8, 'Dhaka', 'Dhaka', 'Badda'),
(9, 'Dhaka', 'Dhaka', 'Biman Bandar'),
(10, 'Dhaka', 'Dhaka', 'Bangshal'),
(11, 'Dhaka', 'Dhaka', 'Cantonment'),
(12, 'Dhaka', 'Dhaka', 'Chawkbazar'),
(13, 'Dhaka', 'Dhaka', 'Dakshinkhan'),
(14, 'Dhaka', 'Dhaka', 'Darus Salam'),
(15, 'Dhaka', 'Dhaka', 'Dhanmondi'),
(16, 'Dhaka', 'Dhaka', 'Demra'),
(17, 'Dhaka', 'Dhaka', 'Kotwali'),
(18, 'Dhaka', 'Dhaka', 'Gendaria'),
(19, 'Dhaka', 'Dhaka', 'Gulshan'),
(20, 'Dhaka', 'Dhaka', 'Hazaribagh'),
(21, 'Dhaka', 'Dhaka', 'Jatrabari'),
(22, 'Dhaka', 'Dhaka', 'Kadamtali'),
(23, 'Dhaka', 'Dhaka', 'Kafrul'),
(24, 'Dhaka', 'Dhaka', 'Kalabagan'),
(25, 'Dhaka', 'Dhaka', 'Kamringir Char'),
(26, 'Dhaka', 'Dhaka', 'Khilkhet'),
(27, 'Dhaka', 'Dhaka', 'Khilgaon'),
(28, 'Dhaka', 'Dhaka', 'Lalbagh'),
(29, 'Dhaka', 'Dhaka', 'Mirpur'),
(30, 'Dhaka', 'Dhaka', 'Mohammadpur'),
(31, 'Dhaka', 'Dhaka', 'Motijheel'),
(32, 'Dhaka', 'Dhaka', 'New Market'),
(33, 'Dhaka', 'Dhaka', 'Pallabi'),
(34, 'Dhaka', 'Dhaka', 'Paltan'),
(35, 'Dhaka', 'Dhaka', 'Ramna'),
(36, 'Dhaka', 'Dhaka', 'Rampura'),
(37, 'Dhaka', 'Dhaka', 'Sabujbagh'),
(38, 'Dhaka', 'Dhaka', 'Shah Ali'),
(39, 'Dhaka', 'Dhaka', 'Shahbagh'),
(40, 'Dhaka', 'Dhaka', 'Shahjahanpur'),
(41, 'Dhaka', 'Dhaka', 'Sher-e-Bangla Nagor'),
(42, 'Dhaka', 'Dhaka', 'Shyampur'),
(43, 'Dhaka', 'Dhaka', 'Tejgaon'),
(44, 'Dhaka', 'Dhaka', 'Tejgaon Industrial Area'),
(45, 'Dhaka', 'Dhaka', 'Turag'),
(46, 'Dhaka', 'Dhaka', 'Uttar Khan'),
(47, 'Dhaka', 'Dhaka', 'Uttara'),
(48, 'Dhaka', 'Faridpur', 'Alfadanga'),
(49, 'Dhaka', 'Faridpur', 'Bhanga'),
(50, 'Dhaka', 'Faridpur', 'Boalmari'),
(51, 'Dhaka', 'Faridpur', 'Charbhadrasan'),
(52, 'Dhaka', 'Faridpur', 'Faridpur Sadar'),
(53, 'Dhaka', 'Faridpur', 'Madhukhali'),
(54, 'Dhaka', 'Faridpur', 'Nagarkanda'),
(55, 'Dhaka', 'Faridpur', 'Sadarpur'),
(56, 'Dhaka', 'Faridpur', 'Saltha'),
(57, 'Dhaka', 'Gazipur', 'Gazipur Sadar'),
(58, 'Dhaka', 'Gazipur', 'Kaliakair'),
(59, 'Dhaka', 'Gazipur', 'Kapasia'),
(60, 'Dhaka', 'Gazipur', 'Sreepur'),
(61, 'Dhaka', 'Gazipur', 'Kaliganj'),
(62, 'Dhaka', 'Gazipur', 'Tongi'),
(63, 'Dhaka', 'Kishoreganj', 'Kuliarchar'),
(64, 'Dhaka', 'Kishoreganj', 'Hossainpur'),
(65, 'Dhaka', 'Kishoreganj', 'Pakundia'),
(66, 'Dhaka', 'Kishoreganj', 'Kishoreganj Sadar'),
(67, 'Dhaka', 'Kishoreganj', 'Bajitpur'),
(68, 'Dhaka', 'Kishoreganj', 'Austagram'),
(69, 'Dhaka', 'Kishoreganj', 'Karimganj'),
(70, 'Dhaka', 'Kishoreganj', 'Katiadi'),
(71, 'Dhaka', 'Kishoreganj', 'Tarail'),
(72, 'Dhaka', 'Kishoreganj', 'Itna'),
(73, 'Dhaka', 'Kishoreganj', 'Nikli'),
(74, 'Dhaka', 'Kishoreganj', 'Mithamain'),
(75, 'Dhaka', 'Kishoreganj', 'Bhairab'),
(76, 'Dhaka', 'Manikganj', 'Manikganj Sadar'),
(77, 'Dhaka', 'Manikganj', 'Singair'),
(78, 'Dhaka', 'Manikganj', 'Shivalaya'),
(79, 'Dhaka', 'Manikganj', 'Saturia'),
(80, 'Dhaka', 'Manikganj', 'Harirampur'),
(81, 'Dhaka', 'Manikganj', 'Ghior'),
(82, 'Dhaka', 'Manikganj', 'Daulatpur'),
(83, 'Dhaka', 'Munshiganj', 'Lohajang'),
(84, 'Dhaka', 'Munshiganj', 'Sreenagar'),
(85, 'Dhaka', 'Munshiganj', 'Munshiganj Sadar'),
(86, 'Dhaka', 'Munshiganj', 'Sirajdikhan'),
(87, 'Dhaka', 'Munshiganj', 'Tongibari'),
(88, 'Dhaka', 'Munshiganj', 'Gazaria'),
(89, 'Dhaka', 'Narayanganj', 'Araihazar'),
(90, 'Dhaka', 'Narayanganj', 'Bandar'),
(91, 'Dhaka', 'Narayanganj', 'Narayanganj Sadar'),
(92, 'Dhaka', 'Narayanganj', 'Rupganj'),
(93, 'Dhaka', 'Narayanganj', 'Sonargaon'),
(94, 'Dhaka', 'Gopalganj', 'Gopalganj Sadar'),
(95, 'Dhaka', 'Gopalganj', 'Kashiani'),
(96, 'Dhaka', 'Gopalganj', 'Kotalipara'),
(97, 'Dhaka', 'Gopalganj', 'Muksudpur'),
(98, 'Dhaka', 'Gopalganj', 'Tungipara'),
(99, 'Dhaka', 'Madaripur', 'Madaripur Sadar'),
(100, 'Dhaka', 'Madaripur', 'Rajoir'),
(101, 'Dhaka', 'Madaripur', 'Kalkini'),
(102, 'Dhaka', 'Madaripur', 'Shibchar'),
(103, 'Dhaka', 'Rajbari', 'Rajbari Sadar'),
(104, 'Dhaka', 'Rajbari', 'Baliakandi'),
(105, 'Dhaka', 'Rajbari', 'Goalandaghat'),
(106, 'Dhaka', 'Rajbari', 'Pangsha'),
(107, 'Dhaka', 'Rajbari', 'Kalukhali'),
(108, 'Dhaka', 'Shariatpur', 'Bhedarganj'),
(109, 'Dhaka', 'Shariatpur', 'Damudya'),
(110, 'Dhaka', 'Shariatpur', 'Gosairhat'),
(111, 'Dhaka', 'Shariatpur', 'Naria'),
(112, 'Dhaka', 'Shariatpur', 'Shariatpur Sadar'),
(113, 'Dhaka', 'Shariatpur', 'Zajira'),
(114, 'Dhaka', 'Shariatpur', 'Shakhipur'),
(115, 'Dhaka', 'Tangail', 'Gopalpur'),
(116, 'Dhaka', 'Tangail', 'Basail'),
(117, 'Dhaka', 'Tangail', 'Bhuapur'),
(118, 'Dhaka', 'Tangail', 'Delduar'),
(119, 'Dhaka', 'Tangail', 'Ghatail'),
(120, 'Dhaka', 'Tangail', 'Kalihati'),
(121, 'Dhaka', 'Tangail', 'Madhupur'),
(122, 'Dhaka', 'Tangail', 'Mirzapur'),
(123, 'Dhaka', 'Tangail', 'Nagarpur'),
(124, 'Dhaka', 'Tangail', 'Sakhipur'),
(125, 'Dhaka', 'Tangail', 'Dhanbari'),
(126, 'Dhaka', 'Tangail', 'Tangail Sadar'),
(127, 'Dhaka', 'Narsingdi', 'Narsingdi Sadar'),
(128, 'Dhaka', 'Narsingdi', 'Belabo'),
(129, 'Dhaka', 'Narsingdi', 'Monohardi'),
(130, 'Dhaka', 'Narsingdi', 'Palash'),
(131, 'Dhaka', 'Narsingdi', 'Raipura'),
(132, 'Dhaka', 'Narsingdi', 'Shibpur'),
(133, 'Sylhet', 'Habiganj', 'Ajmiriganj'),
(134, 'Sylhet', 'Habiganj', 'Nabiganj'),
(135, 'Sylhet', 'Habiganj', 'Bahubal'),
(136, 'Sylhet', 'Habiganj', 'Baniyachong'),
(137, 'Sylhet', 'Habiganj', 'Chunarughat'),
(138, 'Sylhet', 'Habiganj', 'Habiganj Sadar'),
(139, 'Sylhet', 'Habiganj', 'Lakhai'),
(140, 'Sylhet', 'Habiganj', 'Madhabpur'),
(141, 'Sylhet', 'Moulvibazar', 'Barlekha'),
(142, 'Sylhet', 'Moulvibazar', 'Juri'),
(143, 'Sylhet', 'Moulvibazar', 'Kamalganj'),
(144, 'Sylhet', 'Moulvibazar', 'Kulaura'),
(145, 'Sylhet', 'Moulvibazar', 'Moulvibazar Sadar'),
(146, 'Sylhet', 'Moulvibazar', 'Rajnagar'),
(147, 'Sylhet', 'Moulvibazar', 'Sreemangal'),
(148, 'Sylhet', 'Sunamganj', 'Bishwamvarpur'),
(149, 'Sylhet', 'Sunamganj', 'Chhatak'),
(150, 'Sylhet', 'Sunamganj', 'Dakshin Sunamganj'),
(151, 'Sylhet', 'Sunamganj', 'Derai'),
(152, 'Sylhet', 'Sunamganj', 'Dharamapasha'),
(153, 'Sylhet', 'Sunamganj', 'Dowarabazar'),
(154, 'Sylhet', 'Sunamganj', 'Jagannathpur'),
(155, 'Sylhet', 'Sunamganj', 'Jamalganj'),
(156, 'Sylhet', 'Sunamganj', 'Sullah'),
(157, 'Sylhet', 'Sunamganj', 'Sunamganj Sadar'),
(158, 'Sylhet', 'Sunamganj', 'Tahirpur'),
(159, 'Sylhet', 'Sylhet', 'Balaganj'),
(160, 'Sylhet', 'Sylhet', 'Beanibazar'),
(161, 'Sylhet', 'Sylhet', 'Bishwanath'),
(162, 'Sylhet', 'Sylhet', 'Companiganj'),
(163, 'Sylhet', 'Sylhet', 'Dakshin Surma'),
(164, 'Sylhet', 'Sylhet', 'Fenchuganj'),
(165, 'Sylhet', 'Sylhet', 'Golapganj'),
(166, 'Sylhet', 'Sylhet', 'Gowainghat'),
(167, 'Sylhet', 'Sylhet', 'Jaintiapur'),
(168, 'Sylhet', 'Sylhet', 'Kanaighat'),
(169, 'Sylhet', 'Sylhet', 'Osmani Nagar'),
(170, 'Sylhet', 'Sylhet', 'Sylhet Sadar'),
(171, 'Sylhet', 'Sylhet', 'Zakiganj'),
(172, 'Mymensingh', 'Netrokona', 'Atpara'),
(173, 'Mymensingh', 'Netrokona', 'Barhatta'),
(174, 'Mymensingh', 'Netrokona', 'Durgapur'),
(175, 'Mymensingh', 'Netrokona', 'Khaliajuri'),
(176, 'Mymensingh', 'Netrokona', 'Kalmakanda'),
(177, 'Mymensingh', 'Netrokona', 'Kendua'),
(178, 'Mymensingh', 'Netrokona', 'Madan'),
(179, 'Mymensingh', 'Netrokona', 'Mohanganj'),
(180, 'Mymensingh', 'Netrokona', 'Netrokona Sadar'),
(181, 'Mymensingh', 'Netrokona', 'Purbadhala'),
(182, 'Mymensingh', 'Sherpur', 'Jhenaigati'),
(183, 'Mymensingh', 'Sherpur', 'Nakla'),
(184, 'Mymensingh', 'Sherpur', 'Nalitabari'),
(185, 'Mymensingh', 'Sherpur', 'Sherpur Sadar'),
(186, 'Mymensingh', 'Sherpur', 'Sreebardi'),
(187, 'Mymensingh', 'Jamalpur', 'Baksiganj'),
(188, 'Mymensingh', 'Jamalpur', 'Dewanganj'),
(189, 'Mymensingh', 'Jamalpur', 'Islampur'),
(190, 'Mymensingh', 'Jamalpur', 'Jamalpur Sadar'),
(191, 'Mymensingh', 'Jamalpur', 'Madarganj'),
(192, 'Mymensingh', 'Jamalpur', 'Melandaha'),
(193, 'Mymensingh', 'Jamalpur', 'Sarishabari'),
(194, 'Mymensingh', 'Mymensingh', 'Bhaluka'),
(195, 'Mymensingh', 'Mymensingh', 'Dhobaura'),
(196, 'Mymensingh', 'Mymensingh', 'Fulbaria'),
(197, 'Mymensingh', 'Mymensingh', 'Gaffargaon'),
(198, 'Mymensingh', 'Mymensingh', 'Gauripur'),
(199, 'Mymensingh', 'Mymensingh', 'Haluaghat'),
(200, 'Mymensingh', 'Mymensingh', 'Ishwarganj'),
(201, 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar'),
(202, 'Mymensingh', 'Mymensingh', 'Muktagachha'),
(203, 'Mymensingh', 'Mymensingh', 'Nandail'),
(204, 'Mymensingh', 'Mymensingh', 'Phulpur'),
(205, 'Mymensingh', 'Mymensingh', 'Trishal'),
(206, 'Mymensingh', 'Mymensingh', 'Tara Khanda'),
(207, 'Khulna', 'Bagerhat', 'Bagerhat Sadar'),
(208, 'Khulna', 'Bagerhat', 'Chitalmari'),
(209, 'Khulna', 'Bagerhat', 'Fakirhat'),
(210, 'Khulna', 'Bagerhat', 'Kachua'),
(211, 'Khulna', 'Bagerhat', 'Mollahat'),
(212, 'Khulna', 'Bagerhat', 'Mongla'),
(213, 'Khulna', 'Bagerhat', 'Morrelganj'),
(214, 'Khulna', 'Bagerhat', 'Rampal'),
(215, 'Khulna', 'Bagerhat', 'Sarankhola'),
(216, 'Khulna', 'Chuadanga', 'Chuadanga Sadar'),
(217, 'Khulna', 'Chuadanga', 'Alamdanga'),
(218, 'Khulna', 'Chuadanga', 'Damurhuda'),
(219, 'Khulna', 'Chuadanga', 'Jibannagar'),
(220, 'Khulna', 'Jessore', 'Abhaynagar'),
(221, 'Khulna', 'Jessore', 'Bagherpara'),
(222, 'Khulna', 'Jessore', 'Chaugachha'),
(223, 'Khulna', 'Jessore', 'Jhikargachha'),
(224, 'Khulna', 'Jessore', 'Keshabpur'),
(225, 'Khulna', 'Jessore', 'Jessore Sadar'),
(226, 'Khulna', 'Jessore', 'Manirampur'),
(227, 'Khulna', 'Jessore', 'Sharsha'),
(228, 'Khulna', 'Jhenaida', 'Harinakunda'),
(229, 'Khulna', 'Jhenaida', 'Jhenaida Sadar'),
(230, 'Khulna', 'Jhenaida', 'Kaliganj'),
(231, 'Khulna', 'Jhenaida', 'Kotchandpur'),
(232, 'Khulna', 'Jhenaida', 'Maheshpur'),
(233, 'Khulna', 'Jhenaida', 'Shailkupa'),
(234, 'Khulna', 'Khulna', 'Batiaghata'),
(235, 'Khulna', 'Khulna', 'Dacope'),
(236, 'Khulna', 'Khulna', 'Dumuria'),
(237, 'Khulna', 'Khulna', 'Dighalia'),
(238, 'Khulna', 'Khulna', 'Koyra'),
(239, 'Khulna', 'Khulna', 'Paikgachha'),
(240, 'Khulna', 'Khulna', 'Phultala'),
(241, 'Khulna', 'Khulna', 'Rupsha'),
(242, 'Khulna', 'Khulna', 'Terokhanda'),
(243, 'Khulna', 'Khulna', 'Daulatpur'),
(244, 'Khulna', 'Khulna', 'Khalishpur'),
(245, 'Khulna', 'Khulna', 'Khan Jahan Ali'),
(246, 'Khulna', 'Khulna', 'Kotwali'),
(247, 'Khulna', 'Khulna', 'Sonadanga'),
(248, 'Khulna', 'Khulna', 'Harintana'),
(249, 'Khulna', 'Kushtia', 'Bheramara'),
(250, 'Khulna', 'Kushtia', 'Daulatpur'),
(251, 'Khulna', 'Kushtia', 'Khoksa'),
(252, 'Khulna', 'Kushtia', 'Kumarkhali'),
(253, 'Khulna', 'Kushtia', 'Kushtia Sadar'),
(254, 'Khulna', 'Kushtia', 'Mirpur'),
(255, 'Khulna', 'Magura', 'Magura Sadar'),
(256, 'Khulna', 'Magura', 'Mohammadpur'),
(257, 'Khulna', 'Magura', 'Shalikha'),
(258, 'Khulna', 'Magura', 'Sreepur'),
(259, 'Khulna', 'Meherpur', 'Meherpur Sadar'),
(260, 'Khulna', 'Meherpur', 'Gangni'),
(261, 'Khulna', 'Meherpur', 'Mujibnagar'),
(262, 'Khulna', 'Narail', 'Kalia'),
(263, 'Khulna', 'Narail', 'Lohagara'),
(264, 'Khulna', 'Narail', 'Narail Sadar'),
(265, 'Khulna', 'Narail', 'Naragati'),
(266, 'Khulna', 'Satkhira', 'Assasuni'),
(267, 'Khulna', 'Satkhira', 'Debhata'),
(268, 'Khulna', 'Satkhira', 'Kalaroa'),
(269, 'Khulna', 'Satkhira', 'Kaliganj'),
(270, 'Khulna', 'Satkhira', 'Satkhira Sadar'),
(271, 'Khulna', 'Satkhira', 'Shyamnagar'),
(272, 'Khulna', 'Satkhira', 'Tala'),
(273, 'Barisal', 'Barguna', 'Amtali'),
(274, 'Barisal', 'Barguna', 'Bamna'),
(275, 'Barisal', 'Barguna', 'Barguna Sadar'),
(276, 'Barisal', 'Barguna', 'Betagi'),
(277, 'Barisal', 'Barguna', 'Patharghata'),
(278, 'Barisal', 'Barguna', 'Taltali'),
(279, 'Barisal', 'Barisal', 'Agailjhara'),
(280, 'Barisal', 'Barisal', 'Babuganj'),
(281, 'Barisal', 'Barisal', 'Bakerganj'),
(282, 'Barisal', 'Barisal', 'Banaripara'),
(283, 'Barisal', 'Barisal', 'Gaurnadi'),
(284, 'Barisal', 'Barisal', 'Hizla'),
(285, 'Barisal', 'Barisal', 'Barisal Sadar'),
(286, 'Barisal', 'Barisal', 'Mehendiganj'),
(287, 'Barisal', 'Barisal', 'Muladi'),
(288, 'Barisal', 'Barisal', 'Wazirpur'),
(289, 'Barisal', 'Bhola', 'Bhola Sadar'),
(290, 'Barisal', 'Bhola', 'Burhanuddin'),
(291, 'Barisal', 'Bhola', 'Char Fasson'),
(292, 'Barisal', 'Bhola', 'Daulatkhan'),
(293, 'Barisal', 'Bhola', 'Lalmohan'),
(294, 'Barisal', 'Bhola', 'Manpura'),
(295, 'Barisal', 'Bhola', 'Tazumuddin'),
(296, 'Barisal', 'Jhalokati', 'Jhalokati Sadar'),
(297, 'Barisal', 'Jhalokati', 'Kathalia'),
(298, 'Barisal', 'Jhalokati', 'Nalchity'),
(299, 'Barisal', 'Jhalokati', 'Rajapur'),
(300, 'Barisal', 'Patuakhali', 'Bauphal'),
(301, 'Barisal', 'Patuakhali', 'Dashmina'),
(302, 'Barisal', 'Patuakhali', 'Galachipa'),
(303, 'Barisal', 'Patuakhali', 'Kalapara'),
(304, 'Barisal', 'Patuakhali', 'Mirzaganj'),
(305, 'Barisal', 'Patuakhali', 'Patuakhali Sadar'),
(306, 'Barisal', 'Patuakhali', 'Rangabali'),
(307, 'Barisal', 'Patuakhali', 'Dumki'),
(308, 'Barisal', 'Pirojpur', 'Bhandaria'),
(309, 'Barisal', 'Pirojpur', 'Kawkhali'),
(310, 'Barisal', 'Pirojpur', 'Mathbaria'),
(311, 'Barisal', 'Pirojpur', 'Nazirpur'),
(312, 'Barisal', 'Pirojpur', 'Pirojpur Sadar'),
(313, 'Barisal', 'Pirojpur', 'Swarupkati'),
(314, 'Barisal', 'Pirojpur', 'Zianagar'),
(315, 'Chittagong', 'Bandarban', 'Ali Kadam'),
(316, 'Chittagong', 'Bandarban', 'Bandarban Sadar'),
(317, 'Chittagong', 'Bandarban', 'Lama'),
(318, 'Chittagong', 'Bandarban', 'Naikhongchhari'),
(319, 'Chittagong', 'Bandarban', 'Rowangchhari'),
(320, 'Chittagong', 'Bandarban', 'Ruma'),
(321, 'Chittagong', 'Bandarban', 'Thanchi'),
(322, 'Chittagong', 'Brahmanbaria', 'Akhaura'),
(323, 'Chittagong', 'Brahmanbaria', 'Bancharampur'),
(324, 'Chittagong', 'Brahmanbaria', 'Brahmanbaria sadar'),
(325, 'Chittagong', 'Brahmanbaria', 'Kasba'),
(326, 'Chittagong', 'Brahmanbaria', 'Nabinagar'),
(327, 'Chittagong', 'Brahmanbaria', 'Nasirnagar'),
(328, 'Chittagong', 'Brahmanbaria', 'Sarail'),
(329, 'Chittagong', 'Brahmanbaria', 'Ashuganj'),
(330, 'Chittagong', 'Brahmanbaria', 'Bijoynagar'),
(331, 'Chittagong', 'Chandpur', 'Chandpur Sadar'),
(332, 'Chittagong', 'Chandpur', 'Faridganj'),
(333, 'Chittagong', 'Chandpur', 'Haimchar'),
(334, 'Chittagong', 'Chandpur', 'Haziganj'),
(335, 'Chittagong', 'Chandpur', 'Kachua'),
(336, 'Chittagong', 'Chandpur', 'Matlab Dakshin'),
(337, 'Chittagong', 'Chandpur', 'Matlab Uttar'),
(338, 'Chittagong', 'Chandpur', 'Shahrasti'),
(339, 'Chittagong', 'Chittagong', 'Anwara'),
(340, 'Chittagong', 'Chittagong', 'Banshkhali'),
(341, 'Chittagong', 'Chittagong', 'Boalkhali'),
(342, 'Chittagong', 'Chittagong', 'Chandanaish'),
(343, 'Chittagong', 'Chittagong', 'Fatikchhari'),
(344, 'Chittagong', 'Chittagong', 'Hathazari'),
(345, 'Chittagong', 'Chittagong', 'Karnaphuli'),
(346, 'Chittagong', 'Chittagong', 'Lohagara'),
(347, 'Chittagong', 'Chittagong', 'Mirsharai'),
(348, 'Chittagong', 'Chittagong', 'Patiya'),
(349, 'Chittagong', 'Chittagong', 'Rangunia'),
(350, 'Chittagong', 'Chittagong', 'Raozan'),
(351, 'Chittagong', 'Chittagong', 'Sandwip'),
(352, 'Chittagong', 'Chittagong', 'Satkania'),
(353, 'Chittagong', 'Chittagong', 'Sitakunda'),
(354, 'Chittagong', 'Chittagong', 'Bandar'),
(355, 'Chittagong', 'Chittagong', 'Chandgaon'),
(356, 'Chittagong', 'Chittagong', 'Double Mooring'),
(357, 'Chittagong', 'Chittagong', 'Kotwali'),
(358, 'Chittagong', 'Chittagong', 'Pahartali'),
(359, 'Chittagong', 'Chittagong', 'Panchlaish'),
(360, 'Chittagong', 'Chittagong', 'Bhujpur'),
(361, 'Chittagong', 'Comilla', 'Barura'),
(362, 'Chittagong', 'Comilla', 'Brahmanpara'),
(363, 'Chittagong', 'Comilla', 'Burichang'),
(364, 'Chittagong', 'Comilla', 'Chandina'),
(365, 'Chittagong', 'Comilla', 'Chauddagram'),
(366, 'Chittagong', 'Comilla', 'Daudkandi'),
(367, 'Chittagong', 'Comilla', 'Debidwar'),
(368, 'Chittagong', 'Comilla', 'Homna'),
(369, 'Chittagong', 'Comilla', 'Laksam'),
(370, 'Chittagong', 'Comilla', 'Muradnagar'),
(371, 'Chittagong', 'Comilla', 'Nangalkot'),
(372, 'Chittagong', 'Comilla', 'Comilla Adarsha Sadar'),
(373, 'Chittagong', 'Comilla', 'Meghna'),
(374, 'Chittagong', 'Comilla', 'Titas'),
(375, 'Chittagong', 'Comilla', 'Monohargonj'),
(376, 'Chittagong', 'Comilla', 'Comilla Sadar Dakshin'),
(377, 'Chittagong', 'Cox\'s Bazar', 'Chakaria'),
(378, 'Chittagong', 'Cox\'s Bazar', 'Cox\'s Bazar Sadar'),
(379, 'Chittagong', 'Cox\'s Bazar', 'Kutubdia'),
(380, 'Chittagong', 'Cox\'s Bazar', 'Maheshkhali'),
(381, 'Chittagong', 'Cox\'s Bazar', 'Ramu'),
(382, 'Chittagong', 'Cox\'s Bazar', 'Teknaf'),
(383, 'Chittagong', 'Cox\'s Bazar', 'Ukhia'),
(384, 'Chittagong', 'Cox\'s Bazar', 'Pekua'),
(385, 'Chittagong', 'Feni', 'Chhagalnaiya'),
(386, 'Chittagong', 'Feni', 'Daganbhuiyan'),
(387, 'Chittagong', 'Feni', 'Feni Sadar'),
(388, 'Chittagong', 'Feni', 'Parshuram'),
(389, 'Chittagong', 'Feni', 'Sonagazi'),
(390, 'Chittagong', 'Feni', 'Fulgazi'),
(391, 'Chittagong', 'Khagrachhari', 'Dighinala'),
(392, 'Chittagong', 'Khagrachhari', 'Khagrachhari'),
(393, 'Chittagong', 'Khagrachhari', 'Lakshmichhari'),
(394, 'Chittagong', 'Khagrachhari', 'Mahalchhari'),
(395, 'Chittagong', 'Khagrachhari', 'Manikchhari'),
(396, 'Chittagong', 'Khagrachhari', 'Matiranga'),
(397, 'Chittagong', 'Khagrachhari', 'Panchhari'),
(398, 'Chittagong', 'Khagrachhari', 'Ramgarh'),
(399, 'Chittagong', 'Lakshmipur', 'Lakshmipur Sadar'),
(400, 'Chittagong', 'Lakshmipur', 'Raipur'),
(401, 'Chittagong', 'Lakshmipur', 'Ramganj'),
(402, 'Chittagong', 'Lakshmipur', 'Ramgati'),
(403, 'Chittagong', 'Lakshmipur', 'Kamalnagar'),
(404, 'Chittagong', 'Noakhali', 'Begumganj'),
(405, 'Chittagong', 'Noakhali', 'Noakhali Sadar'),
(406, 'Chittagong', 'Noakhali', 'Chatkhil'),
(407, 'Chittagong', 'Noakhali', 'Companiganj'),
(408, 'Chittagong', 'Noakhali', 'Hatiya'),
(409, 'Chittagong', 'Noakhali', 'Senbagh'),
(410, 'Chittagong', 'Noakhali', 'Sonaimuri'),
(411, 'Chittagong', 'Noakhali', 'Subarnachar'),
(412, 'Chittagong', 'Noakhali', 'Kabirhat'),
(413, 'Chittagong', 'Rangamati', 'Bagaichhari'),
(414, 'Chittagong', 'Rangamati', 'Barkal'),
(415, 'Chittagong', 'Rangamati', 'Kawkhali'),
(416, 'Chittagong', 'Rangamati', 'Belaichhari'),
(417, 'Chittagong', 'Rangamati', 'Kaptai'),
(418, 'Chittagong', 'Rangamati', 'Juraichhari'),
(419, 'Chittagong', 'Rangamati', 'Langadu'),
(420, 'Chittagong', 'Rangamati', 'Naniyachar'),
(421, 'Chittagong', 'Rangamati', 'Rajasthali'),
(422, 'Chittagong', 'Rangamati', 'Rangamati Sadar'),
(423, 'Rajshahi', 'Jaypurhat', 'Akkelpur'),
(424, 'Rajshahi', 'Jaypurhat', 'Jaypurhat Sadar'),
(425, 'Rajshahi', 'Jaypurhat', 'Kalai'),
(426, 'Rajshahi', 'Jaypurhat', 'Khetlal'),
(427, 'Rajshahi', 'Jaypurhat', 'Panchbibi'),
(428, 'Rajshahi', 'Bogra', 'Adamdighi'),
(429, 'Rajshahi', 'Bogra', 'Bogra Sadar'),
(430, 'Rajshahi', 'Bogra', 'Dhunat'),
(431, 'Rajshahi', 'Bogra', 'Dhupchanchia'),
(432, 'Rajshahi', 'Bogra', 'Gabtali'),
(433, 'Rajshahi', 'Bogra', 'Kahaloo'),
(434, 'Rajshahi', 'Bogra', 'Nandigram'),
(435, 'Rajshahi', 'Bogra', 'Sariakandi'),
(436, 'Rajshahi', 'Bogra', 'Shajahanpur'),
(437, 'Rajshahi', 'Bogra', 'Sherpur'),
(438, 'Rajshahi', 'Bogra', 'Shibganj'),
(439, 'Rajshahi', 'Bogra', 'Sonatola'),
(440, 'Rajshahi', 'Naogaon', 'Naogaon Sadar'),
(441, 'Rajshahi', 'Naogaon', 'Atrai'),
(442, 'Rajshahi', 'Naogaon', 'Badalgachhi'),
(443, 'Rajshahi', 'Naogaon', 'Manda'),
(444, 'Rajshahi', 'Naogaon', 'Dhamoirhat'),
(445, 'Rajshahi', 'Naogaon', 'Mohadevpur'),
(446, 'Rajshahi', 'Naogaon', 'Niamatpur'),
(447, 'Rajshahi', 'Naogaon', 'Patnitala'),
(448, 'Rajshahi', 'Naogaon', 'Porsha'),
(449, 'Rajshahi', 'Naogaon', 'Raninagar'),
(450, 'Rajshahi', 'Naogaon', 'Sapahar'),
(451, 'Rajshahi', 'Natore', 'Bagatipara'),
(452, 'Rajshahi', 'Natore', 'Baraigram'),
(453, 'Rajshahi', 'Natore', 'Gurudaspur'),
(454, 'Rajshahi', 'Natore', 'Lalpur'),
(455, 'Rajshahi', 'Natore', 'Natore Sadar'),
(456, 'Rajshahi', 'Natore', 'Singra'),
(457, 'Rajshahi', 'Natore', 'Naldanga'),
(458, 'Rajshahi', 'Nawabganj', 'Bholahat'),
(459, 'Rajshahi', 'Nawabganj', 'Gomastapur'),
(460, 'Rajshahi', 'Nawabganj', 'Nachole'),
(461, 'Rajshahi', 'Nawabganj', 'Nawabganj Sadar'),
(462, 'Rajshahi', 'Nawabganj', 'Shibganj'),
(463, 'Rajshahi', 'Pabna', 'Ataikula'),
(464, 'Rajshahi', 'Pabna', 'Atgharia'),
(465, 'Rajshahi', 'Pabna', 'Bera'),
(466, 'Rajshahi', 'Pabna', 'Bhangura'),
(467, 'Rajshahi', 'Pabna', 'Chatmohar'),
(468, 'Rajshahi', 'Pabna', 'Faridpur'),
(469, 'Rajshahi', 'Pabna', 'Ishwardi'),
(470, 'Rajshahi', 'Pabna', 'Pabna Sadar'),
(471, 'Rajshahi', 'Pabna', 'Santhia'),
(472, 'Rajshahi', 'Pabna', 'Sujanagar'),
(473, 'Rajshahi', 'Sirajganj', 'Belkuchi'),
(474, 'Rajshahi', 'Sirajganj', 'Chauhali'),
(475, 'Rajshahi', 'Sirajganj', 'Kamarkhanda'),
(476, 'Rajshahi', 'Sirajganj', 'Kazipur'),
(477, 'Rajshahi', 'Sirajganj', 'Raiganj'),
(478, 'Rajshahi', 'Sirajganj', 'Shahjadpur'),
(479, 'Rajshahi', 'Sirajganj', 'Sirajganj Sadar'),
(480, 'Rajshahi', 'Sirajganj', 'Tarash'),
(481, 'Rajshahi', 'Sirajganj', 'Ullahpara'),
(482, 'Rajshahi', 'Rajshahi', 'Bagha'),
(483, 'Rajshahi', 'Rajshahi', 'Bagmara'),
(484, 'Rajshahi', 'Rajshahi', 'Charghat'),
(485, 'Rajshahi', 'Rajshahi', 'Durgapur'),
(486, 'Rajshahi', 'Rajshahi', 'Godagari'),
(487, 'Rajshahi', 'Rajshahi', 'Mohanpur'),
(488, 'Rajshahi', 'Rajshahi', 'Paba'),
(489, 'Rajshahi', 'Rajshahi', 'Puthia'),
(490, 'Rajshahi', 'Rajshahi', 'Tanore'),
(491, 'Rangpur', 'Dinajpur', 'Birampur'),
(492, 'Rangpur', 'Dinajpur', 'Birganj'),
(493, 'Rangpur', 'Dinajpur', 'Biral'),
(494, 'Rangpur', 'Dinajpur', 'Bochaganj'),
(495, 'Rangpur', 'Dinajpur', 'Chirirbandar'),
(496, 'Rangpur', 'Dinajpur', 'Phulbari'),
(497, 'Rangpur', 'Dinajpur', 'Ghoraghat'),
(498, 'Rangpur', 'Dinajpur', 'Hakimpur'),
(499, 'Rangpur', 'Dinajpur', 'Kaharole'),
(500, 'Rangpur', 'Dinajpur', 'Khansama'),
(501, 'Rangpur', 'Dinajpur', 'Dinajpur Sadar'),
(502, 'Rangpur', 'Dinajpur', 'Nawabgonj'),
(503, 'Rangpur', 'Dinajpur', 'Parbatipur'),
(504, 'Rangpur', 'Gaibandha', 'Phulchhari'),
(505, 'Rangpur', 'Gaibandha', 'Gaibandha Sadar'),
(506, 'Rangpur', 'Gaibandha', 'Gobindaganj'),
(507, 'Rangpur', 'Gaibandha', 'Palashbari'),
(508, 'Rangpur', 'Gaibandha', 'Sadullapur'),
(509, 'Rangpur', 'Gaibandha', 'Sughatta'),
(510, 'Rangpur', 'Gaibandha', 'Sundarganj'),
(511, 'Rangpur', 'Kurigram', 'Bhurungamari'),
(512, 'Rangpur', 'Kurigram', 'Char Rajibpur'),
(513, 'Rangpur', 'Kurigram', 'Chilmari'),
(514, 'Rangpur', 'Kurigram', 'Phulbari'),
(515, 'Rangpur', 'Kurigram', 'Kurigram Sadar'),
(516, 'Rangpur', 'Kurigram', 'Nageshwari'),
(517, 'Rangpur', 'Kurigram', 'Rajarhat'),
(518, 'Rangpur', 'Kurigram', 'Raomari'),
(519, 'Rangpur', 'Kurigram', 'Ulipur'),
(520, 'Rangpur', 'Lalmonirhat', 'Aditmari'),
(521, 'Rangpur', 'Lalmonirhat', 'Hatibandha'),
(522, 'Rangpur', 'Lalmonirhat', 'Kaliganj'),
(523, 'Rangpur', 'Lalmonirhat', 'Lalmonirhat Sadar'),
(524, 'Rangpur', 'Lalmonirhat', 'Patgram'),
(525, 'Rangpur', 'Nilphamari', 'Dimla'),
(526, 'Rangpur', 'Nilphamari', 'Domar'),
(527, 'Rangpur', 'Nilphamari', 'Jaldhaka'),
(528, 'Rangpur', 'Nilphamari', 'Kishoreganj'),
(529, 'Rangpur', 'Nilphamari', 'Nilphamari Sadar'),
(530, 'Rangpur', 'Nilphamari', 'Saidpur'),
(531, 'Rangpur', 'Panchagarh', 'Atwari'),
(532, 'Rangpur', 'Panchagarh', 'Boda'),
(533, 'Rangpur', 'Panchagarh', 'Debiganj'),
(534, 'Rangpur', 'Panchagarh', 'Panchagarh Sadar'),
(535, 'Rangpur', 'Panchagarh', 'Tetulia'),
(536, 'Rangpur', 'Rangpur', 'Badarganj'),
(537, 'Rangpur', 'Rangpur', 'Gangachhara'),
(538, 'Rangpur', 'Rangpur', 'Kaunia'),
(539, 'Rangpur', 'Rangpur', 'Rangpur Sadar'),
(540, 'Rangpur', 'Rangpur', 'Mithapukur'),
(541, 'Rangpur', 'Rangpur', 'Pirgachha'),
(542, 'Rangpur', 'Rangpur', 'Pirganj'),
(543, 'Rangpur', 'Rangpur', 'Taraganj'),
(544, 'Rangpur', 'Thakurgaon', 'Baliadangi'),
(545, 'Rangpur', 'Thakurgaon', 'Haripur'),
(546, 'Rangpur', 'Thakurgaon', 'Pirganj'),
(547, 'Rangpur', 'Thakurgaon', 'Ranisankail'),
(548, 'Rangpur', 'Thakurgaon', 'Thakurgaon Sadar');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `username` varchar(200) NOT NULL,
  `date_to` date NOT NULL,
  `date_from` date NOT NULL,
  `division` varchar(200) NOT NULL,
  `zilla` varchar(200) NOT NULL,
  `thana` varchar(200) NOT NULL,
  `duration` int(11) NOT NULL,
  `day_month` varchar(20) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `hospital_name` varchar(500) NOT NULL,
  `details` text NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL,
  `create_date` datetime NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `fb_name` varchar(200) DEFAULT NULL,
  `fb_profile` varchar(200) DEFAULT NULL,
  `pp_url` varchar(2000) DEFAULT 'uploads\\pro_pic\\profile.png',
  `birthdate` date DEFAULT NULL,
  `college` varchar(200) DEFAULT NULL,
  `work1` varchar(200) DEFAULT NULL,
  `street` varchar(500) DEFAULT NULL,
  `work_division` varchar(200) DEFAULT NULL,
  `work_thana` varchar(200) DEFAULT NULL,
  `work_zilla` varchar(200) DEFAULT NULL,
  `work2` varchar(200) DEFAULT NULL,
  `mbbs_reg` varchar(200) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `pass_change` datetime DEFAULT NULL,
  `doctor` tinyint(1) DEFAULT NULL,
  `workinglat` varchar(255) DEFAULT NULL,
  `workinglon` varchar(255) DEFAULT NULL,
  `available` varchar(5) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_per`
--
ALTER TABLE `job_per`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `job_per`
--
ALTER TABLE `job_per`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=549;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
