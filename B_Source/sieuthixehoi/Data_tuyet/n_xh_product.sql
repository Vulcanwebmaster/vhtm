-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2012 at 05:46 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sieuthixehoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `n_xh_product`
--

CREATE TABLE IF NOT EXISTS `n_xh_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namev` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `n_xh_product`
--

INSERT INTO `n_xh_product` (`id`, `namev`, `alias`, `category_id`, `price`, `image`, `hangsx`, `mota`, `parent_id`) VALUES
(13, 'CHEVROLET - SPARK LS 1.0 MT', 'CHEVROLET---SPARK-LS-1.0-MT', 37, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/spark-lt-1-2-mt-2011-123456.jpg" style="width: 592px; height: 396px;" /></p>\r\n', 'Chevrolet', '<p>\n	<br />\n	<span style="font-family: Times New Roman;"><span style="font-size: medium;">Chevrolet 343\n Spark 2011 c&oacute; nhiều đường n&eacute;t mềm mại hơn d&ugrave; về cơ bản ngoại thất xe kh&ocirc;ng thay đổi nhiều. Phần đầu xe được l&agrave;m mới cho hợp vớ<span style="color: black;">i logo C</span>hevrolet.</span></span><span style="font-family: Times New Roman;"><span style="font-size: medium;"> Nội thất xe kh&aacute; ấn tượng với thiết kế hiện đại v&agrave; thể thao. Mẫu xe n&agrave;y d&agrave;i 3.640 mm v&agrave; c&oacute; chiều d&agrave;i cơ sở 2.375 mm. D&ugrave; l&agrave; một mẫu xe cỡ nhỏ nhưng cabin của Spark đủ sức chứa 5 h&agrave;nh kh&aacute;ch.</span></span></p>\n', 1),
(14, 'concept LF-Gh hybrid', 'concept-LF-Gh-hybrid', 43, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Hyundai-Veloster-12.jpg" style="width: 592px; height: 408px;" /></p>\r\n', 'Chevrolet', '<div style="margin: 0px; padding: 0px; outline-style: none">\r\n	Theo nguồn tin từ<span class="Apple-converted-space">&nbsp;</span><span style="margin: 0px; padding: 0px; outline-style: none; font-style: italic">Detroit News</span>, h&atilde;ng Lexus dự kiến sẽ mất thị phần trong năm 2011 do t&igrave;nh trạng thiếu linh phụ kiện sản xuất tại Nhật Bản như một phần hậu quả sau vụ động đất v&agrave; s&oacute;ng thần h&ocirc;m 11/3. &ldquo;Trong suốt 11 năm qua, ch&uacute;ng t&ocirc;i đ&atilde; khẳng định với mọi người vị tr&iacute; số 1 kh&ocirc;ng phải l&agrave; mục ti&ecirc;u m&agrave; ch&uacute;ng t&ocirc;i hướng tới&rdquo;, &ocirc;ng Mark Templin, tổng gi&aacute;m đốc nh&atilde;n hiệu Lexus, khẳng định với ph&oacute;ng vi&ecirc;n<span class="Apple-converted-space">&nbsp;</span><span style="margin: 0px; padding: 0px; outline-style: none; font-style: italic">Detroit News</span><span class="Apple-converted-space">&nbsp;</span>sau sự kiện ra mắt bản concept LF-Gh hybrid. &ldquo;Đ&oacute; kh&ocirc;ng phải l&agrave; kế hoạch m&agrave; ch&uacute;ng t&ocirc;i vạch ra. Ch&uacute;ng t&ocirc;i chỉ muốn tập trung v&agrave;o chất lượng sản phẩm m&agrave; th&ocirc;i&rdquo;.</div>\r\n', 1),
(16, 'CHEVROLET - SPARK LS 1.0 MTaaddd', 'CHEVROLET---SPARK-LS-1.0-MTaaddd', 37, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Sparkvan1-1%20(1).jpg" style="width: 550px; height: 412px;" /></p>\r\n', 'Chevrolet', '<p>\r\n	&nbsp;</p>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	Lời Tựa Của T&aacute;c giả:</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	- Tại sao phải phơi đầu ra giữa trời nắng n&oacute;ng với những chiếc xe m&aacute;y ga đắt tiền như SH, trong khi đ&atilde; c&oacute; Matiz Van: trẻ trung, đẹp, ăn xăng như xe m&aacute;y, rẻ như xe m&aacute;y...thương hiệu mỹ...tham khảo đi c&aacute;c b&aacute;c</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	- Mong muốn của t&ocirc;i l&agrave;: th&agrave;nh lập 1 hội chơi Spark Van v&agrave; hi vọng n&oacute; cũng nổi tiếng như c&aacute;c hội Vespa, Fx...</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	- Mọi chiếc xe đắt tiền đều sẽ lỗi thời, chỉ c&oacute; những chiếc xe độc đ&aacute;o mới ko bao giờ hết mốt</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	<br />\r\n	<br />\r\n	<span style="font-family: ''Times New Roman'';"><span style="font-size: 14pt;">Một c&aacute;ch tổng thể,&nbsp;</span></span><span style="font-family: ''Times New Roman'';"><span style="font-size: 14pt;"><span style="font-size: 14pt;">Matiz Van</span>&nbsp;tạo n&ecirc;n những n&eacute;t mới, thể thao v&agrave; năng động hơn hẳn so với Matiz cũ.&nbsp;</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n', 1),
(17, 'CHEVROLET - SPARK LS 1.0 MTaaddd', 'CHEVROLET---SPARK-LS-1.0-MTaaddd', 37, '500.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/lexus222.jpg" style="width: 550px; height: 367px;" /></p>\r\n', 'Chevrolet', '<p>    che2</p>', 1),
(18, 'Xe Chất lượng cao', 'Xe-Chat-luong-cao', 37, '600.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/banerorlandogif%20(2).gif" style="width: 679px; height: 487px;" /></p>\r\n', 'Chevrolet', '<p>\n	<span style="color: rgb(4, 4, 4); font-family: Arial; font-size: 13px; line-height: 16px; text-align: justify; background-color: rgb(203, 217, 230);">Renault Wind Gordini tại Việt Nam được trang bị động cơ 1.6 l&iacute;t, c&ocirc;ng suất cực đại 133 m&atilde; lực/6750 v&ograve;ng/ph&uacute;t, momen xoắn 160 Nm tại 4.400 v&ograve;ng/ph&uacute;t, nhờ đ&oacute; xe c&oacute; khả năng tăng tốc từ 0 &ndash; 96km/h trong khoảng 9,2 gi&acirc;y, sử dụng hộp số s&agrave;n 5 cấp. So với một chiếc xe cỡ nhỏ th&igrave; sức mạnh của xe kh&aacute; tốt.</span></p>\n', 1),
(19, 'Hyundai Xe Chất lượng cao Hyundai', 'Xe-Chat-luong-cao', 37, '600000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/wind-2.jpg" style="width: 500px; height: 297px;" /></p>\r\n', 'Hyundai', '<p>HH21\n\n	<span style="color: rgb(4, 4, 4); font-family: Arial; font-size: 13px; line-height: 16px; text-align: justify; background-color: rgb(203, 217, 230);">Renault Wind Gordini tại Việt Nam được trang bị động cơ 1.6 l&iacute;t, c&ocirc;ng suất cực đại 133 m&atilde; lực/6750 v&ograve;ng/ph&uacute;t, momen xoắn 160 Nm tại 4.400 v&ograve;ng/ph&uacute;t, nhờ đ&oacute; xe c&oacute; khả năng tăng tốc từ 0 &ndash; 96km/h trong khoảng 9,2 gi&acirc;y, sử dụng hộp số s&agrave;n 5 cấp. So với một chiếc xe cỡ nhỏ th&igrave; sức mạnh của xe kh&aacute; tốt.</span></p>\n', 2),
(20, ' Hyundai xe đa dụng KIA Carens 2013 HyunHyundaidai', 'xe-da-dung-KIA-Carens-2013', 37, '750.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Kia_carens.jpg" style="width: 480px; height: 339px;" /></p>\r\n', 'Hyundai', '<p>\n	<span style="color: rgb(4, 4, 4); font-family: Arial; font-size: 13px; line-height: 16px; text-align: justify; background-color: rgb(203, 217, 230);">HHHH2\nnhư Mazda h&eacute; lộ dần h&igrave;nh ảnh của Mazda6 ho&agrave;n to&agrave;n mới 2014 trước thềm triển l&atilde;m &ocirc; t&ocirc; Moscow, KIA đang tiết lộ từng phần h&igrave;nh ảnh của Carens mới trước khi giới thiệu đầy đủ mẫu xe mới tại triển l&atilde;m &ocirc; t&ocirc; Paris (diễn ra từ 29/9 tới 14/10/2012).</span></p>\n', 2),
(21, 'Mondeo 2.3 AT', 'Mondeo-2.3-AT', 4, '480.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/focus-sd-trang-1.jpg" style="width: 200px; height: 100px;" /></p>\r\n', 'Toyota Fortuner', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 16px;">HYUNDAI EON 0.8 MT ( xe 5 chỗ, số s&agrave;n) GI&Aacute; THAM KHẢO: 345.000.000 VND Li&ecirc;n hệ: Mr. Mạnh: 0988.693.163</span></p>\r\n', 0),
(22, 'Hyundai Elantra 1.6 MT', 'Hyundai-Elantra-1.6-MT', 4, '600.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/hyundai-eon-123.jpg" style="width: 692px; height: 412px;" /></p>\r\n', 'Hyundai ', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: medium; line-height: 16px;">Hyundai Eon hiện l&agrave; mẫu xe c&oacute; gi&aacute; b&aacute;n rẻ nhất của nh&agrave; sản xuất &ocirc; t&ocirc; H&agrave;n Quốc, được lắp r&aacute;p tại Ấn Độ v&agrave; thu h&uacute;t được sự quan t&acirc;m của nhiều thị trường đang ph&aacute;t triển như Việt Nam. Với sự c&oacute; mặt của Hyundai Eon, người ti&ecirc;u d&ugrave;ng Việt sẽ c&oacute; th&ecirc;m nhiều sự lựa chọn xe đ&ocirc; thị b&ecirc;n cạnh Chevrolet Spark, Hyundai i10, Kia Morning, BYD F0, ,&hellip;</span></p>\r\n', 0),
(23, 'Hyundai Elantra', 'Hyundai-Elantra', 4, '480.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/Xe-Ford-Mondeo-trang-1.jpg" style="width: 200px; height: 100px;" /></p>\r\n', 'Hyundai ', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: medium; line-height: 16px;">Hyundai Eon hiện l&agrave; mẫu xe c&oacute; gi&aacute; b&aacute;n rẻ nhất của nh&agrave; sản xuất &ocirc; t&ocirc; H&agrave;n Quốc, được lắp r&aacute;p tại Ấn Độ v&agrave; thu h&uacute;t được sự quan t&acirc;m của nhiều thị trường đang ph&aacute;t triển như Việt Nam. Với sự c&oacute; mặt của Hyundai Eon, người ti&ecirc;u d&ugrave;ng Việt sẽ c&oacute; th&ecirc;m nhiều sự lựa chọn xe đ&ocirc; thị b&ecirc;n cạnh Chevrolet Spark, Hyundai i10, Kia Morning, BYD F0, ,&hellip;</span></p>\r\n', 0),
(24, 'Hyundai Veloster 1.6 AT', 'Hyundai-Veloster-1.6-AT', 4, '840.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/wind-2.jpg" style="width: 500px; height: 297px;" /></p>\r\n', 'Hyundai ', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: medium; line-height: 16px;">Giữa th&aacute;ng 6, Hyundai Th&agrave;nh C&ocirc;ng dự kiến tung ra chiếc Veloster c&oacute; thiết kế kh&aacute; đặc biệt nhờ trộn lẫn giữa d&ograve;ng coupe, sedan v&agrave; hatchback. Veloster lạ mắt bởi n&oacute; c&oacute; thiết kế chỉ c&oacute; một cửa b&ecirc;n t&agrave;i xế. B&ecirc;n phụ c&oacute; 2 cửa như b&igrave;nh thường. Ph&iacute;a sau c&oacute; th&ecirc;m cửa giống như d&ograve;ng hatchback. Nh&igrave;n ở mỗi g&oacute;c, mẫu xe n&agrave;y lại c&oacute; h&igrave;nh dạng kh&aacute;c nhau. Brandon Ramirez, Gi&aacute;m đốc sản phẩm của Hyundai giải th&iacute;ch: &quot;Ch&uacute;ng t&ocirc;i phỏng vấn rất nhiều người, đặc biệt l&agrave; kh&aacute;ch h&agrave;ng mua coupe compact. Nhu cầu của họ rất đa dạng. V&igrave; thế, Veloster l&agrave; một xe 4 chỗ với 3 cửa ch&iacute;nh&quot;.</span></p>\r\n', 0),
(25, 'CHEVROLET - VIVANT CDX 2.0 AT', 'CHEVROLET---VIVANT-CDX-2.0-AT', 37, '700.000.000', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/vivant1.jpg" style="width: 550px; height: 366px;" /></p>\r\n', 'Chevrolet', '<p>\r\n	&nbsp;</p>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: center;">\r\n	<div style="text-align: justify;">\r\n		Vivant là dòng sản ph&acirc;̉m có c&ocirc;ng ngh&ecirc;̣ t&acirc;n ti&ecirc;́n, được trang bị h&ecirc;̣ th&ocirc;́ng ch&ocirc;́ng bó cứng phanh (ABS), túi khí cho lái xe. Xe Vivant đạt ti&ecirc;u chu&acirc;̉n ch&acirc;u &Acirc;u và Vi&ecirc;̣t Nam v&ecirc;̀ n&ocirc;̀ng đ&ocirc;̣ khí thải &ndash; đạt ti&ecirc;u chu&acirc;̉n khí thải Euro II.</div>\r\n</div>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	<span style="font-family: ''Times New Roman'';"><span style="font-size: 12pt;">Vivant được thi&ecirc;́t k&ecirc;́ sinh đ&ocirc;̣ng bởi hãng thi&ecirc;́ k&ecirc;́ n&ocirc;́i ti&ecirc;́ng Pininfarina đ&ecirc;́n từ nước Ý, mang đ&acirc;̣m phong cách NĂNG Đ&Ocirc;̣NG, SANG TRỌNG, TH&Ecirc;̉ THAO và TI&Ecirc;̣N NGHI, tạo cảm giác r&acirc;́t ri&ecirc;ng cho người ng&ocirc;̀i tr&ecirc;n xe</span></span></div>\r\n', 0),
(26, 'Chevrolet Lacetti 1.6 MT 2012', 'Chevrolet-Lacetti-1.6-MT-2012', 37, '20.000 USD', '<p>\r\n	<span style="font-family:arial,helvetica,sans-serif;"><img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/chevrolet-lacetti-1.jpg" style="width: 592px; height: 417px;" /></span></p>\r\n', 'Chevrolet', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">Du nhập v&agrave;o Việt Nam từ th&aacute;ng 4 năm 2004, Lacetti đ&atilde; đ&oacute;n nhận được sự quan t&acirc;m v&agrave; tin d&ugrave;ng của đ&ocirc;ng đảo kh&aacute;ch h&agrave;ng Việt Nam.&nbsp;</span><span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">Lacetti l&agrave; sự kết hợp h&agrave;i h&ograve;a giữa kiểu d&aacute;ng hiện đại, c&ocirc;ng nghệ tối ưu v&agrave; nội thất tiện nghi ho&agrave;n hảo. Chắc chắn rằng New Lacetti sẽ đem đến cho bạn những niềm vui lớn tr&ecirc;n mọi h&agrave;nh tr&igrave;nh.</span></p>\r\n<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">An to&agrave;n tuyệt đối, nội thất rộng r&atilde;i nhất so với c&aacute;c xe c&ugrave;ng d&ograve;ng.</span><span style="color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: small; line-height: 16px; text-align: justify;">Động cơ v&agrave; hệ thống truyền động mới với t&iacute;nh năng ho&agrave;n hảo.&nbsp;Mặt calăng mới, tạo d&aacute;ng thể thao mạnh mẽ cho xe.&nbsp;Kiểu d&aacute;ng sang trọng với những đường n&eacute;t trang nh&atilde;, tinh tế.&nbsp;Tiện nghi ho&agrave;n hảo. Tất cả những yếu tố tr&ecirc;n đ&atilde; biến Lacetti trở th&agrave;nh sự lựa chọn số một của kh&aacute;ch h&agrave;ng với tầm xe khoảng tr&ecirc;n 20.000$</span></p>\r\n', 0),
(27, 'Daewoo - GENTRA', 'Daewoo---GENTRA', 37, '', '<p>\r\n	<img alt="" src="/sieuthixehoi/assets/sieuthixehoi/upload/images/chevrolet-lacetti-2.jpg" style="width: 592px; height: 396px;" /></p>\r\n', 'Chevrolet', '<p>\r\n	<span style="color: rgb(64, 60, 58); font-family: ''Times New Roman''; font-size: 16px; line-height: 16px; text-align: justify;">Gentra khắc phục được những điểm yếu của d&ograve;ng xe hạng nhỏ. N&oacute; duy tr&igrave; được mức gi&aacute; cạnh tranh v&agrave; t&iacute;nh kinh tế nhi&ecirc;n liệu nhưng lại c&oacute; thiết kế hiện đại v&agrave; kiểu d&aacute;ng thể thao rất ấn tượng, nội thất rộng r&atilde;i c&ugrave;ng với những t&iacute;nh năng ti&ecirc;n tiến thường thấy ở những d&ograve;ng xe sang trọng. Với những ưu điểm đ&oacute;, Gentra được coi l&agrave; sự lựa chọn tối ưu về gi&aacute; trị sử dụng của d&ograve;ng xe hạng nhỏ.</span></p>\r\n<p>\r\n	<span style="color: rgb(64, 60, 58); line-height: 16px; text-align: justify; font-size: 12pt; font-family: ''Times New Roman'';">Với chiều d&agrave;i cơ sở l&agrave; 2.480 mm, v&agrave; chiều cao l&agrave; 1.505 mm, chiều rộng l&agrave; 1.710 mm, chiều d&agrave;i tổng l&agrave; 4.310 mm, Gentra c&oacute; một kh&ocirc;ng gian rộng lớn b&ecirc;n trong. Lưới tản nhiệt mạ cr&ocirc;m rộng kết hợp với đường g&acirc;n sắc, nổi chạy từ nắp ca b&ocirc; đến ba đờ sốc trước, cụm đ&egrave;n pha lớn thấu k&iacute;nh đa điểm, đ&egrave;n sương m&ugrave; tr&ograve;n tạo cho ph&iacute;a trước của Gentra vẻ đẹp thu h&uacute;t đặc biệt. V&ograve;m b&aacute;nh xe trước v&agrave; sau được dập nổi c&ugrave;ng với v&agrave;nh b&aacute;nh xe 15 inch tạo cho Gentra kiểu d&aacute;ng rất thể thao</span><span style="color: rgb(64, 60, 58); line-height: 16px; text-align: justify; font-size: 12pt; font-family: ''Times New Roman'';">&nbsp;chắc chắn.</span></p>\r\n<p style="margin: 15px 0px; padding: 0px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 16px;">\r\n	&nbsp;</p>\r\n<div style="font-size: 11px; color: rgb(64, 60, 58); font-family: Tahoma, Arial, Helvetica, sans-serif; line-height: 16px; text-align: justify;">\r\n	<span style="font-family: ''Times New Roman'';"><span style="font-size: 14pt;"><span style="font-size: 12pt;">Một số đặc điểm nổi bật kh&aacute;c của Gentra m&agrave; c&aacute;c d&ograve;ng xe c&ugrave;ng đẳng cấp kh&aacute;c kh&ocirc;ng c&oacute; bao gồm: tay nắm cửa mạ Cr&ocirc;m, gương chiếu hậu hai t&ocirc;ng m&agrave;u b&ecirc;n ngo&agrave;i, đ&egrave;n đu&ocirc;i được thiết kế dạng ống, v&agrave; nắp cốp sau được dập nổi kiểu Spoiler c&ugrave;ng với tay mở cốp sau d&agrave;i mạ cr&ocirc;m tạo ấn tượng nổi bật cho Gentra khi nh&igrave;n từ ph&iacute;a sau.</span></span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
