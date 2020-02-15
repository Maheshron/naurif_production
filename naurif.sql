-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 01:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vruddhi_handloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_pass` text NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`) VALUES
(1, 'VGS', 'sumithravgs@gmail.com', 'vgs', 'avatar-4.png', '111111111'),
(7, 'Mahesh', 'maheshkumarvgs@gmail.com', 'vgs', 'Penguins.jpg', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_img` text NOT NULL,
  `p_title` text NOT NULL,
  `p_price` int(11) NOT NULL,
  `ip_add` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(10, 'Mens'),
(11, 'Womens'),
(12, 'Kids'),
(14, 'Gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `customers_orders`
--

CREATE TABLE `customers_orders` (
  `id` int(11) NOT NULL,
  `razorpay_order_id` text NOT NULL,
  `payment_id` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mail` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `size` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_orders`
--

INSERT INTO `customers_orders` (`id`, `razorpay_order_id`, `payment_id`, `customer_id`, `amount`, `product_id`, `qty`, `order_date`, `mail`, `contact`, `address`, `size`) VALUES
(5, '21', '21', 12, '12121', 11, 2, '2020-02-03 07:10:36', 'maheshkumarvgs@gmail.com', 'asdf', 'asf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `dummycompanydataruchitha`
--

CREATE TABLE `dummycompanydataruchitha` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comapnyname` varchar(100) DEFAULT NULL,
  `pnoneno` varchar(10) DEFAULT NULL,
  `faxno` varchar(50) DEFAULT NULL,
  `orcityid` varchar(20) DEFAULT NULL,
  `shipdate` varchar(50) DEFAULT NULL,
  `orginzip` varchar(50) DEFAULT NULL,
  `orgsateid` varchar(50) DEFAULT NULL,
  `desizip` varchar(50) DEFAULT NULL,
  `descityid` varchar(20) DEFAULT NULL,
  `desstateid` varchar(20) DEFAULT NULL,
  `empstops` varchar(50) DEFAULT NULL,
  `companyid` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummycompanydate`
--

CREATE TABLE `dummycompanydate` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comapnyname` varchar(100) DEFAULT NULL,
  `pnoneno` varchar(10) DEFAULT NULL,
  `faxno` varchar(50) DEFAULT NULL,
  `orcityid` varchar(20) DEFAULT NULL,
  `shipdate` varchar(50) DEFAULT NULL,
  `orginzip` varchar(50) DEFAULT NULL,
  `orgsateid` varchar(50) DEFAULT NULL,
  `desizip` varchar(50) DEFAULT NULL,
  `descityid` varchar(20) DEFAULT NULL,
  `desstateid` varchar(20) DEFAULT NULL,
  `empstops` varchar(50) DEFAULT NULL,
  `companyid` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentspay`
--

CREATE TABLE `paymentspay` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_qty` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `sub_cat_id` int(222) NOT NULL,
  `small_size` int(222) NOT NULL,
  `medium_size` int(255) NOT NULL,
  `large_size` int(255) NOT NULL,
  `extra_large_size` int(255) NOT NULL,
  `extra_extra_large_size` int(255) NOT NULL,
  `xxl3` varchar(255) NOT NULL,
  `xxl4` varchar(255) NOT NULL,
  `xxl5` varchar(222) NOT NULL,
  `video` varchar(222) NOT NULL,
  `size_variation` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `image_2` varchar(200) NOT NULL,
  `image_3` varchar(200) NOT NULL,
  `image_4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `cat_id`, `sub_cat_id`, `small_size`, `medium_size`, `large_size`, `extra_large_size`, `extra_extra_large_size`, `xxl3`, `xxl4`, `xxl5`, `video`, `size_variation`, `price`, `discount`, `description`, `image_1`, `image_2`, `image_3`, `image_4`) VALUES
(12, 'Women', 11, 19, 12, 12, 21, 12, 1212, '', '', '', '', '', 312, 20, 'qwertyuiop                     ', 'dress-material.jpg', 'dress-material2.jpg', 'gawns2.jpg', 'kurties2.jpg'),
(13, 'Kid', 12, 26, 12, 21, 12, 12, 21, '', '', '', '', '', 12, 21, 'asdfghjkl', 'kid-boys.jpg', 'kids1.jpg', 'kid-boys.jpg', 'Kids.jpg'),
(14, 'phone', 14, 29, 12, 12, 21, 12, 12, '', '', '', '', '', 12890, 34, 'aswqaswqaswqaswqaswqaswqaswq', 'el1.jpg', 'el1.jpg', 'el1.jpg', 'el1.jpg'),
(16, 'Denis Lingo', 10, 3, 12, 23, 12, 23, 23, '', '', '', '', '', 2500, 72, 'The sytlish Casual  striped shirt has a  Slim Collar,Long Sleves, and a curved  hemline, Fabrics & carrers 100% premium Cotton', 'xl-c754-black-dennis-lingo-original-imafnyktcczfqvpq.jpeg', 'xl-c754-black-dennis-lingo-original-imafnyktcezbcpf6.jpeg', 'xl-c754-black-dennis-lingo-original-imafnyktrzjjfjdu.jpeg', 'xl-c754-black-dennis-lingo-original-imafnyktznffeyxa.jpeg'),
(17, 'King & Kross Cotton Casual shirt', 10, 0, 12, 12, 12, 23, 21, '', '', '', '', '', 290, 3, 'King and Kross cotton casual shirt for men Fabric laser prints                                    ', '5v696cupaoq10h1ccz39.jpg', 'd2735990c0y5c304iylr.jpg', '', ''),
(18, 'seta 100% cotton checkered full sleevees Shirt for men', 10, 0, 23, 12, 32, 12, 32, '', '', '', '', '', 368, 7, '  Festive        Occation                          \r\n                                    ', '6rp2m224o08dgqmfjpug.jpg', '9vxojcqiv8b8bfdxqabr.jpg', 'celjy933gojke5fqenmz.jpg', 'j4e7tbn6oz5zyhmm3hbh.jpg'),
(19, 'Cobio Man Navy Blue Cotton Casual  Shirt For  Man', 10, 0, 12, 32, 12, 23, 12, '12', '32', '12', '', '', 273, 4, 'Cobio Man Navy Blue Cotton Casual Shirt For Man,\r\nFabric Cotton,\r\nCollar Shirt                         \r\n                                    ', '6chhvzrxg1ghoam2wuev.jpg', 'p57rnrd2dpnghnu2m07q.jpg', 'nu9fm8fh0nfb4jnkqqfe.jpg', 'p57rnrd2dpnghnu2m07q.jpg'),
(20, 'Mens Floral Print Casual Slim Shirt', 10, 0, 12, 32, 23, 23, 12, '23', '1', '32', '', '', 2299, 71, 'Full Sleeve,\r\nFabric\r\nslim         ', 's-c713-brown-dennis-lingo-original-imaf6trb5mgtzcgu.jpeg', 's-c713-brown-dennis-lingo-original-imaf6trbh8jmrzhk.jpeg', 's-c713-brown-dennis-lingo-original-imaf6trbhn7zcwkc.jpeg', 's-c713-brown-dennis-lingo-original-imaf6trbzgm7vffp.jpeg'),
(21, 'Men Floral Print Casual Spread Shirt', 10, 0, 12, 21, 32, 23, 23, '12', '23', '12', '', 's', 2299, 71, 'Cotton,\r\nFull Sleeve                                    ', 's-c713-brown-dennis-lingo-original-imaf6trb5mgtzcgu.jpeg', 's-c713-brown-dennis-lingo-original-imaf6trbh8jmrzhk.jpeg', 's-c713-brown-dennis-lingo-original-imaf6trbhn7zcwkc.jpeg', 's-c713-brown-dennis-lingo-original-imaf6trbzgm7vffp.jpeg'),
(22, 'Denis Lingo', 10, 0, 23, 32, 12, 32, 12, '23', '21', '12', '', 's', 2299, 71, 'Fabric Cotton Blend,\r\nSleeve Full Sleve,\r\nPattern Floral Print,\r\nCollor Spread', 'm-c721-white-dennis-lingo-original-imafjzgyh2pakhvs.jpeg', 'm-c721-white-dennis-lingo-original-imafjzgyszfyzehy.jpeg', 'm-c721-white-dennis-lingo-original-imafjzgytdtn4ghs.jpeg', 'm-c721-white-dennis-lingo-original-imafjzgyvmyk6jqr.jpeg'),
(23, 'Dior Exclusive Party Wear Imported Shirt With Box', 10, 0, 23, 12, 32, 12, 23, '23', '12', '22', '', 's', 656, 5, 'Sleeve Full Sleeve,\r\nParty Wear                                    ', 'wglowa025fgxavdjd7se.jpeg', '', '', ''),
(24, 'Louis Vuitton exclusive party wear imported shirt with box', 10, 0, 23, 21, 23, 21, 12, '23', '21', '12', '', 's', 656, 5, 'Occation Party Wear,\r\nFabric Imported', 'tbggobohhuptm7mckfer.jpeg', '', '', ''),
(25, 'Versace exclusive party wear imported shirt with box', 10, 0, 23, 12, 23, 32, 12, '32', '12', '12', '', 's', 623, 5, 'Collor Neck,\r\nParty Wear,\r\nFull Sleeves', 'm3rcearciqqq1d84ggxd.jpeg', '', '', ''),
(26, 'Hamson milled Dyed Checks', 10, 0, 12, 23, 21, 12, 32, '12', '23', '12', '', 's', 614, 3, 'Hamson milled Dyed Checks                     ', '3etbkpugfzd58rmxnnbf.jpg', '', '', ''),
(27, 'Mens Solid Casual Slim Shirt', 10, 0, 21, 23, 234, 12, 233, '2', '12', '12', '', 's', 1849, 70, 'Enhance your look by wearing this trendy shirt. Team it with a pair of Sharp Looking Chinos ans Tassel Loafers for a Dapper Look                                                     \r\n', 'l-c301-dustypink-dennis-lingo-original-imafjvx7b9jguhdv.jpeg', 'l-c301-dustypink-dennis-lingo-original-imafjvx7c68n7vdz.jpeg', 'l-c301-dustypink-dennis-lingo-original-imafjvx7gh2yfzrf.jpeg', 'm-c301-dustypink-dennis-lingo-original-imafjvx7hu22dhhy.jpeg'),
(28, 'Maroon Shirt', 10, 0, 21, 12, 12, 21, 12, '212', '3', '23', '', 's', 350, 1, 'Plain Shirt ,\r\nParty Wear                                    ', '9kypyarhqys2j8r1vxkn.jpg', 'suh810uvo4radge36stw.jpg', '', ''),
(29, 'Cobio man multicolor party wear shirt', 10, 0, 23, 12, 23, 12, 23, '11', '12', '23', '', 's', 315, 4, 'Ideal for men,\r\ncotton fabric,\r\nfull sleeve', '1xkj9n5f2hsegucnk135.jpg', 'joldtdwrrjebntelkidd.jpg', 's09yzi7fabndfcez75ls.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(11) NOT NULL,
  `p_cat_title` text NOT NULL,
  `parent` int(11) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `parent`, `catid`) VALUES
(1, 'Saree', 0, 1),
(2, 'All Saree', 1, 1),
(3, 'Fabric', 1, 1),
(5, 'Occassion', 1, 1),
(6, 'Dupatta and Stoles', 0, 1),
(7, 'Dress Materials', 0, 1),
(8, 'Kurta', 0, 1),
(9, 'Top and Shirts', 0, 1),
(10, 'Skirts', 0, 1),
(11, 'Jackets', 0, 1),
(12, 'Pavadai Sattai', 0, 1),
(13, 'Jewellery', 0, 1),
(14, 'Cotton', 3, 1),
(15, 'Silk', 3, 1),
(16, 'Silk and Cotton', 3, 1),
(17, 'georgette and Silk', 3, 1),
(18, 'Shiffon', 3, 1),
(19, 'Shiffon and Silk', 3, 1),
(21, 'Crap', 3, 1),
(22, 'Pure Crap', 3, 1),
(23, 'Crap and Silk', 3, 1),
(24, 'Jeorjet', 3, 1),
(25, 'Tusser', 3, 1),
(26, 'Clothing', 0, 2),
(27, 'Kurtas', 26, 2),
(28, 'Shirts', 26, 2),
(29, 'Nehru Jackets & Blazers', 26, 2),
(30, 'Pyjamas & Churidars', 26, 2),
(31, 'Salwars & Dhotis', 26, 2),
(32, 'Trousers & Shorts', 26, 2),
(33, 'Stoles, Shawls & Mufflers', 26, 2),
(34, 'Accessories', 0, 2),
(35, 'Footwear', 34, 2),
(36, 'Bags & Accessories', 34, 2),
(37, 'Sale! Collection', 0, 2),
(38, 'Rajwada Collection', 37, 2),
(39, 'Malhar Collection', 37, 2),
(40, 'Indigo Collection', 37, 2),
(41, 'Summer Collection', 37, 2),
(42, 'Chikankari Collection', 37, 2),
(43, 'Wool Collection', 37, 2),
(44, 'Hand Block Print', 37, 2),
(45, 'Ikat Collection', 37, 2),
(46, 'Kalamkari', 37, 2),
(47, 'Get The Look', 0, 2),
(48, 'Indian Summer', 47, 2),
(49, 'Custom Kurtas', 0, 2),
(50, 'Girls', 0, 3),
(51, 'Kurtas', 50, 3),
(52, 'Tops & Tunics', 50, 3),
(53, 'Dresses', 50, 3),
(54, 'Sets', 50, 3),
(55, 'Skirts', 50, 3),
(56, 'Bottoms', 50, 3),
(57, 'Boys', 0, 3),
(58, 'Kurtas', 57, 3),
(59, 'Shirts', 57, 3),
(60, 'Jackets', 57, 3),
(61, 'Sets', 57, 3),
(62, 'Bottoms', 57, 3),
(63, 'Infants', 0, 3),
(64, 'Boys', 63, 3),
(65, 'Girls', 63, 3),
(66, 'Accessories', 0, 3),
(67, 'Jewellery', 66, 3),
(68, 'Footwear', 66, 3),
(69, 'Sale! Collection', 0, 3),
(70, 'Rajwada Collection', 69, 3),
(71, 'Malhar Collection', 69, 3),
(72, 'Indigo Collection', 69, 3),
(73, 'Summer Collection', 69, 3),
(74, 'Chikankari Collection', 69, 3),
(75, 'Hand Block Print', 69, 3),
(76, 'Tweens Collection', 69, 3),
(77, 'Occassion Wear Collection', 37, 3),
(78, 'Occassion Wear Collection', 69, 3),
(79, 'Bed Linen', 0, 4),
(80, 'Bedcovers & Bedsheets', 79, 4),
(81, 'Pillow Covers', 79, 4),
(82, 'Cushion Covers', 79, 4),
(83, 'Dohars, Quilts & Throws', 79, 4),
(84, 'Table Linen', 0, 4),
(85, 'Mats & Napkins', 84, 4),
(86, 'Table Covers', 84, 4),
(87, 'Runners', 84, 4),
(88, 'Kitchen Linen', 84, 4),
(89, 'Curtains', 0, 4),
(90, 'Floor Coverings', 0, 4),
(91, 'Dhurries', 90, 4),
(92, 'Footmats', 90, 4),
(93, 'Bath Linen', 0, 4),
(94, 'Towels', 93, 4),
(95, 'Bathmats', 93, 4),
(96, 'Bath Accessories', 93, 4),
(97, 'Lookbook Sale! Collection', 0, 4),
(98, 'Indigo Collection', 97, 4),
(99, 'Festive Collection', 97, 4),
(100, 'Spring Collection', 97, 4),
(101, 'Summer Collection', 97, 4),
(102, 'Monsoon Collection', 97, 4),
(103, 'Hand Block Print', 97, 4),
(104, 'Ikat Collection', 97, 4),
(105, 'Kalamkari', 97, 4),
(106, 'Living', 0, 5),
(107, 'Sofa & Seating', 106, 5),
(108, 'Tables', 106, 5),
(109, 'Entertainment Units', 106, 5),
(110, 'Bars & Cabinets', 106, 5),
(111, 'Dining', 0, 5),
(112, 'Tables', 111, 5),
(113, 'Chairs & Benches', 111, 5),
(114, 'Cabinets', 111, 5),
(115, 'Trolleys', 111, 5),
(116, 'Bedroom', 0, 5),
(117, 'Beds', 116, 5),
(118, 'Wardrobes', 116, 5),
(119, 'Bedside Tables', 116, 5),
(120, 'Chest & Drawers', 116, 5),
(121, 'Studyroom', 0, 5),
(122, 'Desks', 121, 5),
(123, 'Accent & Accessories', 0, 5),
(124, 'Chairs', 123, 5),
(125, 'Ottomans & Stools', 123, 5),
(126, 'Consoles & Mirrors', 123, 5),
(127, 'Bar & Trolley', 123, 5),
(128, 'Blanket Box', 123, 5),
(129, 'Racks & Shelves', 123, 5),
(130, 'Others', 123, 5),
(131, 'Verandah Lookbook Sale! Collection', 0, 5),
(133, 'Akund Collection', 131, 5),
(134, 'Amer collection', 131, 5),
(135, 'Domino collection', 131, 5),
(136, 'Obra Collection', 131, 5),
(137, 'Agastya Collection', 131, 5),
(138, 'Irang Collection', 131, 5),
(139, 'Kaveri Collection', 131, 5),
(141, 'Esagona Collection', 131, 5),
(142, 'Gifts', 0, 7),
(143, 'Fragrances & Candles', 142, 7),
(144, 'Stationery', 142, 7),
(145, 'Games & Toys', 142, 7),
(146, 'Frames', 142, 7),
(147, 'Others', 142, 7),
(148, 'Tableware', 0, 7),
(149, 'Dinnerware', 148, 7),
(151, 'Drinkware', 148, 7),
(152, 'Flatware', 148, 7),
(153, 'Serveware', 148, 7),
(154, 'Others', 148, 7),
(155, 'Decor', 0, 7),
(156, 'Vase', 155, 7),
(157, 'Wall Art', 155, 7),
(158, 'T-Lites & Lanterns', 155, 7),
(159, 'Others', 155, 7),
(160, 'Lighting', 0, 7),
(161, 'Lamp', 160, 7),
(162, 'Lamp Shades', 160, 7),
(163, 'Hanging & String Lights', 160, 7),
(164, 'Basketry', 0, 7),
(165, 'Lookbook Sale! Collection', 0, 7),
(166, 'Indigo Collection', 165, 7),
(167, 'Spring Collection', 165, 7),
(168, 'Summer Collection', 165, 7);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `author` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `image`) VALUES
(11, 'slider2.jpg'),
(12, 'slider3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `subcategorie` varchar(255) NOT NULL,
  `categorie` varchar(222) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategorie`, `categorie`, `image`) VALUES
(3, 'Shirt', '10', 'shirts.jpg'),
(4, 'Casual Pants', '10', 'pants2.jpg'),
(5, 'T-Shirts', '10', 't-shirts2.jpg'),
(6, 'Track Pants', '10', 'track%20pant2.jpg'),
(8, 'Jeans', '10', 'jackets2.jpg'),
(9, 'Footwear', '10', 'jeans2.jpg'),
(10, 'Accessories', '10', 'mensformal-shoes2.jpg'),
(18, 'Kurties', '11', 'kurties2.jpg'),
(19, 'Sarees', '11', 'saree2.jpg'),
(20, 'Gawns', '11', 'gawns2.jpg'),
(21, 'Dress-Material', '11', 'Koala.jpg'),
(22, 'Bottoms', '11', 'dress-material2.jpg'),
(23, 'Night Wear', '11', 'bottom2.jpg'),
(24, 'Footware', '11', 'nightwear2.jpg'),
(25, 'Accessories', '11', 'women-sandles2.jpg'),
(26, 'Boys', '12', 'kid-boys2.jpg'),
(27, 'Girls', '12', 'kids-girls2.jpg'),
(28, 'Watches', '14', 'Hydrangeas.jpg'),
(29, 'Phones', '14', 'Desert.jpg'),
(30, 'utensils', '1015', 'Jellyfish.jpg'),
(31, 'footware', '12', 'Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  `lname` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `mobile`, `lname`, `country`, `city`, `state`, `zipcode`, `address`) VALUES
(1, 'VGS', 'sumithra@gmail.com', 'vgs', '111111111111', '1111111', 'India', 'Nellore', 'AP', '123456', '111111111'),
(25, 'Mahesh', 'maheshkumarvgs@gmail.com', '202cb962ac59075b964b07152d234b70', '7878787878', 'kumar', '', '', '', '', ''),
(4, 'a', 'aa@gmail.com', 'a', 'a', 'a', '', '', '', '', ''),
(5, 'Mahesh', 'a@gmail.coma', '89e6d2b383471fc370d828e552c19e65', 'aaa', 'a', '', '', '', '', ''),
(6, 'Mahesh', 'ma@gmail.com', '523af537946b79c4f8369ed39ba78605', '123', 'kumar', '', '', '', '', ''),
(7, 'aa', 'a@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '123212', 'a', '', '', '', '', ''),
(8, 'a', 'a@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', '123', 'a', '', '', '', '', ''),
(9, 'aa', 'aa@gmail.com', '838ece1033bf7c7468e873e79ba2a3ec', '12d', 'a', '', '', '', '', ''),
(10, 'aa', 'a@gmail.coma', 'c4ca4238a0b923820dcc509a6f75849b', 'a212112', 'a', '', '', '', '', ''),
(11, 'mas', 'ma@gmail.com', '8ce87b8ec346ff4c80635f667d1592ae', '12', 'Kumar', '', '', '', '', ''),
(12, 'king', 'kingjames@gmail.com', 'e9021738b111afd09a7561fab261a9a2', '8989898989', 'james', '', '', '', '', ''),
(24, 'Mahesh', 'maheshkumarvgs@gmail.com', '202cb962ac59075b964b07152d234b70', '4545454545', 'Kumar', '', '', '', '', ''),
(29, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', ''),
(27, 'Arif', 'arif@gamil.com', '0ff6c3ace16359e41e37d40b8301d67f', '1111111', 'Ali', '', '', '', '', ''),
(28, 'Mahesh', 'maheshkumarvgs@gmail.com', '49bb197bec17b7d20b2df6b1f3c3434a', '2121212121', 'Kumar', '', '', '', '', ''),
(26, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '7878787878', 'test', '', '', '', '', ''),
(30, 'ronaldo', 'ronaldo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1212121212', 'cris', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `wish_img` text NOT NULL,
  `wish_title` text NOT NULL,
  `wish_price` int(11) NOT NULL,
  `usd_price` int(11) NOT NULL,
  `gbp_price` int(11) NOT NULL,
  `eur_price` int(11) NOT NULL,
  `aud_price` int(11) NOT NULL,
  `cad_price` int(11) NOT NULL,
  `sgd_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers_orders`
--
ALTER TABLE `customers_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `paymentspay`
--
ALTER TABLE `paymentspay`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `customers_orders`
--
ALTER TABLE `customers_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
