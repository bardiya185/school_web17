-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2025 at 04:14 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scidata`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_hidden_name` text NOT NULL,
  `product_view` int(100) NOT NULL,
  `product_mode` varchar(60) NOT NULL,
  `product_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_hidden_name`, `product_view`, `product_mode`, `product_img`) VALUES
(1, 'icdl', 'icdl , آی سی دی ال', 0, 'دوره مقدماتی', 'logosciAsset 9.svg'),
(2, 'الگوریتم / فلوچارت', 'الگوریتم / فلوچارت , algoritm\r\n, flochart', 0, 'دوره مقدماتی', 'logosciAsset 17.svg'),
(3, 'مونتاژ و اسمبل کامپیوتر', 'مونتاژ و اسمبل کامپیوتر,\r\ncomputer,\r\n, asembel', 0, 'دوره مقدماتی', 'logosciAsset 18.svg'),
(4, 'شهروند الکترونیک', 'شهروند الکترونیک ,\r\nelectronic', 0, 'دوره مقدماتی', 'logosciAsset 12.svg'),
(5, 'ارتقاع کامپیوتر شخصی', 'ارتقاع کامپیوتر شخصی\r\n, computer , upgreat', 0, 'دوره مقدماتی', 'logosciAsset 3.svg'),
(6, 'مبانی هوش مصنوعی', 'مبانی هوش مصنوعی\r\n, ai', 0, 'هوش مصنوعی', 'logosciAsset 16.svg'),
(7, 'کاربرد هوش مصنوعی در بازار کار آینده', 'کاربرد هوش مصنوعی در بازار کار آینده\r\n, ai', 0, 'هوش مصنوعی', 'logosciAsset 14.svg'),
(8, 'شغل متخصص هوش مصنوعی', 'شغل متخصص هوش مصنوعی\r\n, ai', 0, 'هوش مصنوعی', 'logosciAsset 15.svg'),
(9, 'آموزش کاربردی هوش مصنوعی', 'آموزش کاربردی هوش مصنوعی\r\n, ai', 0, 'هوش مصنوعی', 'logosciAsset 13.svg'),
(10, 'html', 'html , اچ تی ام ال', 10, 'طراحی وب', 'logosciAsset 5.svg'),
(11, 'css', 'css , سی اس اس', 20, 'طراحی وب', 'logosciAsset 7.svg'),
(12, 'javascript', 'javascript , js , جاوا اسکریپت', 30, 'طراحی وب', 'logosciAsset 4.svg'),
(13, 'wordpress', 'wordpress , وردپرس', 0, 'طراحی وب', 'logosciAsset 11.svg'),
(14, 'php', 'php ,پی اچ پی  ', 0, 'طراحی وب', 'logosciAsset 8.svg'),
(15, 'python ', 'python , پایتون ', 0, 'برنامه نویسی', 'logosciAsset 6.svg'),
(16, 'c#', 'c# , csharp , سی شارپ', 0, 'برنامه نویسی', 'ICON8Asset 10@4x.png'),
(17, 'حسابداری مقدماتی', 'حسابداری مقدماتی , Basic Accounting', 0, 'حسابداری', 'Asset 1193x.svg'),
(18, 'حسابداری تکمیلی', 'حسابداری تکمیلی , Supplementary Accounting', 0, 'حسابداری', 'Asset 1183x.svg'),
(19, 'حسابداری حقوق و دستمزد', 'حسابداری حقوق و دستمزد , Payroll accounting', 0, 'حسابداری', 'Asset 1173x.svg'),
(20, 'حسابداری صنعتی', 'حسابداری صنعتی , Industrial Accounting', 0, 'حسابداری', 'Asset 1163x.svg'),
(21, 'کمک حسابداری', 'کمک حسابداری , Accounting assistance', 0, 'حسابداری', 'Asset 1153x.svg'),
(22, 'مسئول سفارشات', 'مسئول سفارشات , Orders Manager', 0, 'حسابداری', 'Asset 1143x.svg'),
(23, 'انباردار', 'انباردار , Storekeeper', 0, 'حسابداری', 'Asset 1133x.svg'),
(24, 'کاربر نرم افزار مالی', 'کاربر نرم افزار مالی , Financial software user', 0, 'حسابداری', 'Asset 1123x.svg'),
(25, 'حسابداری بهای تمام شده', 'حسابداری بهای تمام شده , Cost accounting', 0, 'حسابداری', 'Asset 1113x.svg'),
(26, 'نرم افزار هلو', 'نرم افزار هلو , Peach software', 0, 'حسابداری', 'logosciAsset 1203x.svg'),
(27, 'رایانه کار مالی', 'رایانه کار مالی , Financial work computer', 0, 'حسابداری', 'Asset 1093x.svg'),
(28, 'ساختمان داده ها', 'ساختمان داده ها , Data structure', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1323x.svg'),
(29, 'طراحی الگوریتم', 'طراحی الگوریتم , Algorithm design', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1313x.svg'),
(30, 'سیستم های عامل', 'سیستم های عامل , Operating systems', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1303x.svg'),
(31, 'ذخیره و بازیابی', 'ذخیره و بازیابی', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1293x.svg'),
(32, 'مدارهای منطقی', 'مدارهای منطقی', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1283x.svg'),
(33, 'زبان ماشین و اسمبلی', 'زبان ماشین و اسمبلی', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1273x.svg'),
(34, 'طراحی وب', 'طراحی وب', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1263x.svg'),
(35, 'معماری کامپیوتر', 'معماری کامپیوتر', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1253x.svg'),
(36, 'میکروپروسسور', 'میکروپروسسور', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1243x.svg'),
(37, 'سخت افزار', 'سخت افزار', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1233x.svg'),
(38, 'شبکه ', 'شبکه ', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1223x.svg'),
(39, 'امنیت', 'امنیت', 0, 'تدریس دروس دانشگاهی از کاردانی تا ارشد', 'Asset 1213x.svg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `rowid` int(11) NOT NULL COMMENT 'شماره سطر',
  `fandlname` varchar(50) DEFAULT NULL COMMENT 'نام و نام خانوادگی',
  `username` varchar(10) DEFAULT NULL COMMENT 'نام کاربری',
  `phone` varchar(11) DEFAULT NULL COMMENT 'شماره تلفن',
  `password` varchar(9) DEFAULT NULL COMMENT 'رمز عبور',
  `color_profile` varchar(20) DEFAULT '#4C5D7EFF'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`rowid`, `fandlname`, `username`, `phone`, `password`, `color_profile`) VALUES
(1, 'سیدرضا ', 'seyed', '09334274077', 'R4274074m', '#4C5D7EFF'),
(2, 'غلامعلی صائمی ', 'saemi', '09113388015', 'g1234567s', '#4C5D7EFF'),
(3, 'بردیا ', 'bardiya', '09371967353', 'B1234567v', '#4C5D7EFF'),
(7, 'بردیا ', 'bardiya56', '09371967352', 'bardiya166', 'rgb(255, 181, 98)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`rowid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'شماره سطر', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
