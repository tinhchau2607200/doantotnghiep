-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 30, 2016 lúc 04:05 SA
-- Phiên bản máy phục vụ: 5.7.10-log
-- Phiên bản PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `haisan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `idbaiviet` int(11) NOT NULL,
  `tenbaiviet` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vitri` int(1) NOT NULL,
  `idloaitin` int(11) NOT NULL,
  `trangthai` int(1) NOT NULL,
  `anhminhhoa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`idbaiviet`, `tenbaiviet`, `tieude`, `tomtat`, `noidung`, `vitri`, `idloaitin`, `trangthai`, `anhminhhoa`) VALUES
(1, 'Món hấp: tốt cả đôi đường!.', 'mon-hap-tot-ca-doi-duong', 'Hiểu rõ được lợi ích vượt trội của các món hấp đối với sức khỏe gia đình, nhiều bà nội trợ đang cố gắng “tập” cho cả nhà làm quen dần với cách thức chế biến này.\r\n', 'Ưu tiên các món hấp\r\n\r\nVới các bà nội trợ, vấn đề được quan tâm nhất khi đi chợ là vấn đề vệ sinh an toàn thực phẩm: làm sao chọn được bó rau sạch, không thuốc trừ sâu, miếng thịt, con cá thật tươi… Chưa dừng lại ở đó, chuyện chế biến thực phẩm như thế nào để đảm bảo bữa ăn đủ dưỡng chất và tốt cho sức khỏe cho cả nhà cũng là cả một vấn đề với các bà mẹ. Chị Hải Anh (Q.Phú Nhuận, TPHCM) chia sẻ: “Ông xã mình bị mỡ trong máu cao hơn mức cho phép. Thành thử khi nấu ăn phải hạn chế dùng dầu ăn tức là cũng phải ít nấu các món chiên xào mà ưu tiên các món hấp”.', 0, 5, 0, 'images/uploads/monhap.jpg'),
(2, '360 độ món ăn từ khoai tây cho mâm cơm tết đậm đà.', '360-do-mon-an-tu-khoai-tay...', 'Không chỉ là nguyên liệu trong các bữa ăn đơn giản hàng ngày, chỉ cần một chút biến tấu đơn giản là bạn đã có thể khiến cho mâm cơm ngày tết của mình trở nên ngon miệng, đẹp mắt và mới lạ với 360 độ món ăn tuyệt vời từ khoai tây đấy.', 'Với màu sắc vàng ươm bắt mắt cùng nguồn dưỡng chất tuyệt vời protein, chất xơ, vitamin C, vitamin B6 và các khoáng chất kali, sắt, natri… rất tốt cho sức khỏe con người, trong bữa cơm tết, khoai tây có thể dùng để chế biến nên những món ăn từ đơn giản đến phức tạp, khiến cho mâm cơm tết dù trong bất cứ hoàn cảnh nào cũng trở nên hấp dẫn, thơm ngon đầy mới lạ.\r\n\r\nHãy cùng tham khảo nhé!', 0, 5, 0, 'images/uploads/khoaitay.jpg'),
(3, 'Tự làm bánh flan mềm mượt, thơm ngậy', 'tu-lam-banh-flan-mem-muot', 'Đảm bảo ai cũng khó lòng mà cưỡng lại được hương vị thơm ngon của món bánh flan caramel mềm mượt, thơm ngậy và thanh mát này.', 'Cách làm:\r\n\r\nBước 1: Trứng đập ra một bát to và đánh thật đều tay trong khoảng 3 phút, sau đó dùng rổ rây bột và đổ trứng đã đánh vào lọc nếu có lớp màng của lòng trắng thừa trên rây bỏ đi.\r\nBước 2: Cho vani vào rồi khuấy đều, cho vani vào trứng trước để khi ra thành phẩm bánh flan sẽ thơm mùi vani mà không bị mùi trứng. Tiếp tục, cho sữa tươi và cho đường vào (đường cho ít hay nhiều theo khẩu vị) và dùng dụng cụ khuấy thật đều trong 3 phút.\r\n', 0, 5, 0, 'images/uploads/banh.jpg'),
(4, 'Nhà Hàng Hải Sản San Hô Đà Nẵng', 'gioi-thieu-nha-hang', 'Nhà hàng San Hô tự hào có một vị trí địa lý lý tưởng, một không gian rộng rãi thoáng đãng,một môi trường chuyên nghiệp tận tình chu đáo sang trọng và lịch sự.\r\nĐứng tại nhà hàng San Hô này bạn có thể bao quát được toàn bộ Bãi Biển Đà Nẵng, một trong những Bãi biển đẹp nhất thế giới.\r\nNhà hàng nổi tiếng với những món hải sản tươi sống, tươi ngon , đa dạng và được chế biến một cách tinh tế, đặc sắc.Cùng với khung cảnh thoáng mát và đội ngũ nhân viên tháo vát sẽ phục vụ quý khách với một phong cách chuyên nghiệp nhất cũng như chu đáo nhất có thể.', '<p style="text-align: justify;"><img alt="" src="/uploads/images/logo%20(1).png" style="width: 217px; height: 90px; float: left; padding-right:20px;" />Nhà hàng <strong>San Hô</strong> tự hào có một vị trí địa lý lý tưởng, một không gian rộng rãi thoáng đãng,một môi trường chuyên nghiệp tận tình chu đáo sang trọng và lịch sự.</p>\r\n\r\n<p style="text-align: justify;">Đứng tại nhà hàng <strong>San Hô</strong> này bạn có thể bao quát được toàn bộ Bãi Biển Đà Nẵng, một trong những Bãi biển đẹp nhất thế giới.</p>\r\n\r\n<p style="text-align: justify;">Nhà hàng nổi tiếng với những món hải sản tươi sống, tươi ngon , đa dạng và được chế biến một cách tinh tế, đặc sắc.Cùng với khung cảnh thoáng mát và đội ngũ nhân viên tháo vát sẽ phục vụ quý khách với một phong cách chuyên nghiệp nhất cũng như chu đáo nhất có thể.</p>\r\n\r\n<p style="text-align: justify;"><strong>San Hô</strong>&nbsp;là nhà hàng hải sản mang phong cách đặc trưng của Biển. Với hàng trăm món ăn độc đáo, và mỗi món ăn là một hương vị riêng biệt. Từ những món ăn có từ ngàn năm xưa, tới những món ăn hiên đại luôn mang đến hương vị thơm ngon quyến rũ thực khách.</p>\r\n\r\n<p style="text-align: justify;">Sáng tạo trong cách chế biến để có những món ăn thơm ngon nhất là điều luôn được vị bếp trưởng quan tâm. Với mong muốn mang đến cho thực khách hương vị thơm ngon và mới lạ.Cuốn thực đơn của <strong style="line-height: 18.5714px; text-align: justify;">San Hô</strong> sẽ mang đến cho thực khách hương vị kì diệu của nền ẩm thực Việt Nam.</p>\r\n', 0, 1, 0, 'images/uploads/Nhahangsh.jpg'),
(5, 'Tổ chức tiệc cưới - sinh nhật', 'tiec-cuoi-sinh-nhat', 'Một không gian đảng cấp, một phong cách ẩm thực tinh tế cho mỗi sự kiện thành công tại San Hô.', 'Một không gian đảng cấp, một phong cách ẩm thực tinh tế và một phong cách phục vụ ân cần là sự kết hợp hoàn hảo cho mỗi sự kiện thành công tại San Hô Với nhiều dịch vụ hấp dẫn và đội ngũ nhân viên chuyên nghiệp, giàu kinh nghiệm... \r\n\r\n\r\nNhà hàng San Hô sẽ đáp ứng tất cả các yêu cầu về ẩm thực cũng như về phong cách phục vụ - một phong cách hoàn hảo nhất\r\n\r\nTrang trọng hay nhẹ nhàng, hoành tráng hay ấm cúng, mỗi sự kiện dù lớn hay nhỏ đều là niềm vinh dự của chúng tôi.\r\n\r\n\r\nHãy trao niềm vinh dự đó cho chúng tôi!', 0, 2, 0, 'images/uploads/dichvu1.jpg'),
(7, 'Tiệc nướng sân vườn', 'tiec-nuong-san-vuon', 'Trải nghiệm ẩm thực độc đáo, tự tay trổ tài nướng những món nướng mình yêu thích.', 'Khi bạn đã quá quen với nhà hàng máy lạnh, với các món chiên, xào, nấu sẵn chỉ việc dọn ra bàn để dùng thì đã  đến lúc bạn tìm cho mình những địa chỉ ẩm thực với phong cách hoàn toàn mới. Thuyền Buồm quán nướng sân vườn, nơi bạn và gia đình không chỉ thưởng thức món nướng thơm ngon mà còn khám phá những trải nghiệm ẩm thực độc đáo, nơi bạn có thể hít thở khí trời, sum vầy cùng gia đình, bạn bè và tự tay trổ tài nướng những món nướng mình yêu thích.', 0, 2, 0, 'images/uploads/rung.jpg'),
(8, 'Tổ chức hội nghị -sự kiện', 'to-chu-hoi-nghi', 'Tổ chức biểu diễn cho các Doanh nghiệp - Tập thể - Cá nhân', '<p>Nhà hàng <strong>Hải sản</strong>&nbsp;được thiết kế thành nhiều không gian riêng biệt đáp ứng các nhu cầu tổ chức hội họp, liên hoan ..tiêc chiêu đãi khách hàng.</p>\r\n\r\n<ul>\r\n	<li>Tổ chức tiệc hội nghị, liên hoan chiêu đãi khách hàng.</li>\r\n	<li>Đầy đủ thiết bị âm thanh, ánh sáng theo yêu cầu của quý khách.</li>\r\n	<li>Các set menu được thiết kế phù hợp với nhiều phong cách ẩm thực.</li>\r\n	<li>Có chiết khấu đăc biệt cho khách hàng đặt tiệc công ty</li>\r\n</ul>\r\n', 0, 2, 0, 'images/uploads/20160323095538_1-kg-cua-thit-tuoi-song-tai-Nha-hang-Bien-Duong (9).jpg'),
(9, 'Trang trí hoa tươi', 'trang-tri-hoa-tuoi', 'Nếu bạn muốn sảnh tiệc của mình tràn ngập hoa tươi và một không gian lãng mạn.', '<p>Trang trí cho ngày trọng đại là không thể thiếu dù theo phong cách nào, tại tư gia hay tại nhà hàng.</p>\r\n\r\n<p>Tùy theo mỗi nhà hàng trong việc trang trí, có nơi là hoa tươi, nơi khác hoa nhựa, nơi thì tràn ngập bong bóng và vải lụa...</p>\r\n\r\n<p>Thông thường, tùy theo số lượng bàn tiệc của bạn mà chương trình khuyến mãi bao gồm, nhưng hầu hết đều đã bao gồm phần hoa trang trí trên mỗi bàn tiệc, sân khấu hoặc lối dẫn lên sân khấu, cổng hoa...</p>\r\n\r\n<p>Nhưng tùy theo nhu cầu mỗi người, nếu bạn muốn sảnh tiệc của mình tràn ngập hoa tươi hay đơn giản là toàn bong bóng ngộ nghĩnh vui tươi, hãy báo chúng tôi biết và chúng tôi sẽ thực hiện theo ý của các bạn với chi phí phụ trội, chỉ cần bạn đồng ý mẫu hoặc ý tưởng và chí phí.</p>\r\n', 0, 2, 0, 'images/uploads/20160323095835_hoa.jpeg'),
(10, 'Phương pháp chế biến tinh tế', 'phuong-phap-che-bien-tinh-te', ' Ở đây, San Hô không chỉ cung cấp nhiều loại hải sản khác nhau,mà còn có đội ngũ nhân viên rất chuyên nghiệp, được đào tạo một cách bài bản và có chuyên môn cao trong việc chế biến.', '<p style="text-align: justify;">Từ khâu bảo quản hải sản, các kỹ sư hải sản tại nhà hàng luôn tạo ra môi trường sống tốt nhất cho “những món ăn biết bơi” này.Mỗi món ăn đều mang hương vị mặn mà khó quên, Nhà hang hải sản <strong>San Hô</strong> là một trong những nhà hàng hải sản Đà Nẵng có &nbsp;thể dễ dàng kết nối cảm xúc &nbsp;với những khách hàng am hiểu văn hoá ẩm thực cùng gu thưởng thức tinh tế. Với hi vọng khôi phục và giữ gìn những tinh tế của ẩm thực truyền thống, những món ăn được chế biến với công thức “chuẩn” và dưới bàn tay của những đầu bếp lâu năm.<br />\r\nNguyên liệu được chế biến tại biển nhà, đặc biệt là hải sản được đặt từ vùng biển Miền Trung và vận chuyển trong ngày luôn tươi ngon. Nhiều món hải sản tuy không cần chế biến quá cầu kì, nhưng món ăn luôn “chất” và đặc biệt ngon như: tôm càng xanh nướng mộc, hàu nướng mơ hành, cua thịt sốt tiêu đen, lẩu hải sản chua cay, lẩu cua bào ngư…<br />\r\nMỗi món ăn là một biến tấu đều mang sự trân trọng nâng niu đối với sản vật quý giá của biển khơi..<br />\r\nNhững món ăn hải sản tại nhà hàng San Hô không lạm dụng quá nhiều gia vị mà chú trọng làm nổi bật hương vị tươi ngon, tinh khiết tự nhiên của món ăn. Hương vị món ăn &nbsp;thanh tao, nhẹ nhàng và phù hợp với thiên nhiên từng mùa.</p>\r\n', 0, 5, 0, 'images/uploads/20160323100303_LaBrasserie-D_0022.jpg'),
(11, 'Sản phẩm từ bàn tay khéo léo của nhà hàng San Hô', 'san-pham-tu-ban-tay-kheo-leo', 'Kỷ niệm 85 năm ngày thành lập Hội liên hiệp phụ nữ Việt Nam 20/10/1930- 20/10/2015, Nhà hàng San Hô tổ chức Hội thi Khéo Tay nấu ăn với chủ đề “Ngày hội ẩm thực 2015”. ', '<p style="text-align: justify;">Tham dự hội thi có 34 đội thi với gần 200 hội viên phụ nữ đến từ Chi hội phụ nữ các tiểu khu trên địa bàn.</p>\r\n\r\n<p style="text-align: justify;">Buổi lễ diễn ra rất vui vẻ và nhộn nhịp</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<p style="line-height: 18.5714px; text-align: justify;">Tham dự hội thi có 34 đội thi với gần 200 hội viên phụ nữ đến từ Chi hội phụ nữ các tiểu khu trên địa bàn.</p>\r\n\r\n<p style="line-height: 18.5714px; text-align: justify;">Buổi lễ diễn ra rất vui vẻ và nhộn nhịp</p>\r\n', 0, 5, 0, 'images/uploads/20160323101835_10506868_10202968618149401_834879241609351919_o.jpg'),
(12, 'Hải sản tươi sống', 'hai-san-tuoi-song', 'Hải sản tươi sống là một trong những loại thực phẩm có giá trị dinh dưỡng cao, đặc biêt hơn là sự đa dạng của các loại hải sản...', '<p style="text-align: justify;">Hải sản tươi ngon luôn là những món ăn được rất nhiều thực khách yêu thích, từ em bé đến những cụ già đều ưa chuộng. Không chỉ vì hàm lượng dĩnh dưỡng cao trong hải sản, Tại Nhà hàng San Hô, chúng tôi thường xuyên cung cấp các loại hải sản tươi sống. Chúng tôi tự hào là nhà hàng có nhiều chủng loại hải sản nhất tại Đà Nẵng như cá, mực, sò – ngêu, tôm- cua- ghẹ, bào ngư,..Với số lượng hải sản tại đây đã khiến khách hàng thực sự choáng ngợp. Chất lượng hải sản luôn ở mức tốt nhất và mang lai nhiều món ăn chất lượng, giá trị dinh dưỡng cao . Thế nhưng điều làm nên sự nổi tiếng tại nhà hàng hải sản này chính là nhờ vào phương châm phục vụ và đây chính là điểm đặc biệt tại Thế giới hải sản mà rất ít nhà hàng kahsc tại Đà Nẵngcó thể làm được “Con gì đang bơi chúng tôi mới nấu“.<br />\r\nTheo cảm nhận cá nhân của tôi thì đây quả thực là một nhà hàng rất phù hợp cho những bừa tiệc chiêu đãi khách quý hay tiếp những đoàn khách cấp cao để chuẩn bị ký kết những hợp đồng quan trọng. Hơn nữa, Quý khách có thể lựa chọn chính những loại hải sản mà mình yêu thích và được tận mắt chứng kiến những người đầu bếp chuyên nghiệp của chúng tôi chế biến chính những loại hải sản mà quý khách lựa chọn. Cảm giác “tai nghe mắt thấy” luôn tạo nên sự tò mò trong lòng thực khách, từ cách chế biến cho đến cách sơ chế các loại hải sản, quý khách đều có thể tận mắt chiêm ngưỡng. Đây cũng chính là một trong những điểm đặc biệt mà rất ít nhà hàng khác có được như nhà hàng hải sản San Hô.</p>\r\n', 0, 5, 0, 'images/uploads/20160323102908_Seafood-mix-a.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datban`
--

CREATE TABLE `datban` (
  `iddatban` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `giodat` time NOT NULL,
  `songuoi` int(11) NOT NULL,
  `idphong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datban`
--

INSERT INTO `datban` (`iddatban`, `ten`, `sdt`, `email`, `ngaydat`, `giodat`, `songuoi`, `idphong`) VALUES
(112, 'Thịnh Còi', '01656799559', '', '02/06/2016', '16:30:00', 10, 2),
(113, 'thịnh ', '01217475746', '', '30/03/2016', '11:45:00', 12, 2),
(114, 'Win T', '01217475745', '', '31/03/2016', '16:00:00', 5, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhminhhoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuthich` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `idloaitin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`idimages`, `ten`, `tieude`, `anhminhhoa`, `chuthich`, `trangthai`, `idloaitin`) VALUES
(1, 'Bao quát nhà hàng', '', 'images/uploads/hinh4.jpg', '', 0, 4),
(2, 'Đám cưới', '', 'images/uploads/dichvu2.jpg', '', 0, 4),
(3, 'Hội nghị', '', 'images/uploads/dichvu1.jpg', '', 0, 4),
(4, 'Không gian', '', 'images/uploads/kg.jpg', '', 0, 4),
(5, 'San Hô', '', 'images/uploads/sanho1.jpg', '', 0, 4),
(6, 'Khách', '', 'images/uploads/image.jpg', '', 0, 4),
(7, 'Hoa', '', 'images/uploads/hinh4.jpg', '', 0, 4),
(8, 'Nhân viên', '', 'images/uploads/anh.jpg', '', 0, 4),
(9, 'Bờ biển', '', 'images/uploads/anh1.jpg', '', 0, 4),
(10, 'Không gian đẹp', '', 'images/uploads/gioithieu.jpg', '', 0, 4),
(11, 'Tiệc', '', 'images/uploads/anh2.jpg', '', 0, 4),
(12, 'Sảnh', '', 'images/uploads/anh4.jpg', '', 0, 4),
(13, 'Tiệc', '', 'images/uploads/anh5.jpg', '', 0, 4),
(15, 'Slides', 'Slides ', 'images/uploads/', '', 1, 1),
(17, 'Slides', 'slide', 'images/uploads/congtruoc.png', '', 1, 0),
(18, 'Slide 2', '', 'images/uploads/slide.png', '', 1, 0),
(19, 'Slide 3', '', 'images/uploads/slide2.jpg', '', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `idlienhe` int(11) NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`idlienhe`, `hovaten`, `diachi`, `sdt`, `email`, `noidung`) VALUES
(1, 'Trần Hữu Thịnh', 'Da nang', '01656799559', 'tranhuuthinh555@gmail.com', 'ko có chi hết'),
(36, 'Nguyễn Văn A', 'Liên chiểu, Đà Nẵng', '0999112864', 'vana95@gmail.com', 'Mục đích .....'),
(37, 'Nguyễn Văn C', 'Đà Nẵng', '0123354545', 'abc@yahoo.com', 'khiến nghị đến nhà hàng về vấn đề .....'),
(38, 'Nguyễn Văn C', 'Đà Nẵng', '0123354545', 'abc@yahoo.com', 'khiến nghị đến nhà hàng về vấn đề .....'),
(39, 'Nguyễn Văn C', 'Hà Nội', '0905225552', 'nghuyenvana@gmail.com', 'an toàn vệ sinh thực phẩm chưa tốt cần ....');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `idloaitin` int(11) NOT NULL,
  `tenloaitin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(2) NOT NULL,
  `vitri` int(1) NOT NULL,
  `trangthai` int(1) NOT NULL,
  `chuthich` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`idloaitin`, `tenloaitin`, `tenkodau`, `thutu`, `vitri`, `trangthai`, `chuthich`) VALUES
(1, 'GIỚI THIỆU', 'gioi-thieu', 1, 0, 0, ''),
(2, 'DỊCH VỤ', 'dich-vu', 2, 0, 0, ''),
(3, 'THỰC ĐƠN', 'thuc-don', 3, 0, 0, ''),
(4, 'KHO ẢNH', 'kho-anh', 4, 0, 0, ''),
(5, 'TIN TỨC - SỰ KIỆN', 'tin-tuc-su-kien', 5, 0, 0, ''),
(6, 'ĐẶT BÀN', 'dat-ban', 6, 0, 0, ''),
(7, 'LIÊN HỆ', 'lien-he', 7, 0, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `idnguoidung` int(11) NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuthich` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendangnhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`idnguoidung`, `ten`, `chuthich`, `tendangnhap`, `matkhau`) VALUES
(1, 'Administrator', 'ko', 'admin', 'admin'),
(2, 'Trần Hữu Thịnh', 'ko', 'thinhcoi', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `idphong` int(11) NOT NULL,
  `loaiphong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuthich` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`idphong`, `loaiphong`, `chuthich`, `trangthai`) VALUES
(1, 'Phòng Thường', '', 0),
(2, 'Phòng Víp', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucdon`
--

CREATE TABLE `thucdon` (
  `idthucdon` int(11) NOT NULL,
  `tenthucdon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhminhhoa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloaitin` int(11) NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thucdon`
--

INSERT INTO `thucdon` (`idthucdon`, `tenthucdon`, `tenkodau`, `tomtat`, `noidung`, `anhminhhoa`, `idloaitin`, `noibat`) VALUES
(1, 'Các món khai vị', 'mon-khai-vi', 'Món khai vị giúp cho bữa ăn của bạn thêm hoàn hảo.', '<p style="text-align: justify; margin-left: 40px;"><strong>CÁC MÓN SÚP</strong></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify; margin-left: 40px;">Súp Bóng Cá Cua&nbsp;</li>\r\n	<li style="text-align: justify; margin-left: 40px;">Súp Rong Biển Hải Sâm</li>\r\n	<li style="text-align: justify; margin-left: 40px;">Súp Trúc Xinh Hải Sản&nbsp;</li>\r\n	<li style="text-align: justify; margin-left: 40px;">Súp Cua Hải Sản&nbsp;</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px; line-height: 18.5714px; text-align: justify;"><strong>CHẢ GIÒ</strong></p>\r\n\r\n<ul style="line-height: 18.5714px;">\r\n	<li style="margin-left: 40px; text-align: justify;">Chả giò San Hô&nbsp;</li>\r\n	<li style="margin-left: 40px; text-align: justify;">Chả giò Triều Châu</li>\r\n	<li style="margin-left: 40px; text-align: justify;">Chả giò Hồng</li>\r\n</ul>\r\n\r\n<p style="line-height: 18.5714px; text-align: justify; margin-left: 40px;"><strong>BAO TỬ XÀO NGŨ SẮC</strong></p>\r\n', 'images/uploads/khaivi.jpg', 3, 1),
(2, 'Hải sản', 'hai-san', 'Các món hải sản giữ được nguyên vẹn hương vị biển cùng sự mới lạ trong chế biến.', '<p style="margin-left: 40px;"><strong>MỰC MỘT NẮNG</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Nướng mọi</li>\r\n	<li style="margin-left: 40px;">Nướng muối ớt</li>\r\n	<li style="margin-left: 40px;">Chiên nước mắm</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong style="line-height: 1.42857;">MỰC TƯƠI</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Nướng Thái</li>\r\n	<li style="margin-left: 40px;">Nướng ngũ vị</li>\r\n	<li style="margin-left: 40px;">Nướng muối ớt</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>CUA</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Cua cốm miến tay cầm Hong Kong</li>\r\n	<li style="margin-left: 40px;">Cua cốm xào kiểu Thái</li>\r\n	<li style="margin-left: 40px;">Cua cốm nướng nguyên thủy</li>\r\n</ul>\r\n', 'images/uploads/cua.jpg', 3, 1),
(3, 'Các món cá', 'cac-mon-ca', 'Cá là nguyên liệu thực phẩm chứa nhiều chất dinh dưỡng thiết yếu có lợi cho sức khỏe', '<p style="margin-left: 40px;"><strong>CÁ THÁC LÁT</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Chiên giòn</li>\r\n	<li style="margin-left: 40px;">Chiên cốm xanh</li>\r\n	<li style="margin-left: 40px;">Thì là cuốn cải xanh</li>\r\n	<li style="margin-left: 40px;">Lẩu khổ qua cá thác lát</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>CÁ MAO ẾCH SỐNG</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Nướng muối ớt</li>\r\n	<li style="margin-left: 40px;">Chiên nước tương Hồng Kông</li>\r\n	<li style="margin-left: 40px;">Chiên sốt chua ngọt</li>\r\n	<li style="margin-left: 40px;">Hấp tàu xí - Chưng tương</li>\r\n	<li style="margin-left: 40px;">Hấp Hồng Kông</li>\r\n	<li style="margin-left: 40px;">Nấu mẻ - Nấu chua</li>\r\n	<li style="margin-left: 40px;">Nấu lá giang - Nấu lẩu Thái</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>CÁ TRỨNG</strong></p>\r\n', 'images/uploads/fish.jpg', 3, 1),
(4, 'Món đặc biệt', 'mon-dac-biet', 'Móc đặc sản với tay nghề tuyệt vời của các đầu bếp thượng hạng.', '<p style="margin-left: 40px;"><strong>HẢI SÂM</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Hải sâm xào cải thìa</li>\r\n	<li style="margin-left: 40px;">Cơm cháy hải sâm</li>\r\n	<li style="margin-left: 40px;">Hải sâm xào nấm bào ngư</li>\r\n	<li style="margin-left: 40px;">Hải sâm xào đông cô</li>\r\n	<li style="margin-left: 40px;">Hải sâm xào gân nai</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>GIÒ HEO</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Hầm xíu nấm Đông cô</li>\r\n	<li style="margin-left: 40px;">Giò heo phát tài</li>\r\n	<li style="margin-left: 40px;">Chiên kiểu Đức</li>\r\n	<li style="margin-left: 40px;">Giò heo Tóc tiên</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>SƯỜN HEO</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Nướng mắm nhỉ</li>\r\n	<li style="margin-left: 40px;">Nướng mật ong</li>\r\n</ul>\r\n', 'images/uploads/dacbiet.jpg', 3, 1),
(5, 'Nghêu, Sò, Ốc', 'ngheu-so-oc', 'Nếu bạn là một " FAN" của ẩm thực hải sản, chắc chắn bạn sẽ không bỏ qua được.', '<p style="margin-left: 40px;"><strong>ỐC HƯƠNG</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Ốc hương miến tay cầm</li>\r\n	<li style="margin-left: 40px;">Ốc hương nấu rượu cay</li>\r\n	<li style="margin-left: 40px;">Ốc hương xào lá tía tô</li>\r\n	<li style="margin-left: 40px;">Ốc hương nướng</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>NGHÊU</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Nghêu hấp Thái</li>\r\n	<li style="margin-left: 40px;">Nghêu hấp xả</li>\r\n	<li style="margin-left: 40px;">Nghêu xào tàu xì</li>\r\n	<li style="margin-left: 40px;">Nghêu xào X.O</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>HÀO</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Hào nướng mỡ hàng</li>\r\n	<li style="margin-left: 40px;">Hào nướng bơ tỏi</li>\r\n	<li style="margin-left: 40px;">Hào đút lò phô mai</li>\r\n	<li style="margin-left: 40px;">Hào ăn sống</li>\r\n</ul>\r\n', 'images/uploads/ngheu.png', 3, 1),
(6, 'Món ăn nhanh', 'mon-an-nhanh', 'Nhanh chóng, và cũng thật ngon lành với các món ăn nhẹ.', '<p style="margin-left: 40px;"><strong>ĐẬU HŨ</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Đậu hũ Tứ Xuyên</li>\r\n	<li style="margin-left: 40px;">Rang trứng muối</li>\r\n	<li style="margin-left: 40px;">Đậu hũ hồng xíu</li>\r\n	<li style="margin-left: 40px;">Đậu hũ hải sản tay cầm</li>\r\n	<li style="margin-left: 40px;">Đậu hũ nhất phẩm</li>\r\n	<li style="margin-left: 40px;">Đậu hũ sò điệp tàu xí</li>\r\n	<li style="margin-left: 40px;">Chiên muối sả</li>\r\n	<li style="margin-left: 40px;">Chiên giòn</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>BÒ</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Khô bò Campuchia</li>\r\n	<li style="margin-left: 40px;">Bò lúc lắc khoai tây</li>\r\n	<li style="margin-left: 40px;">Bò xào Trung Hoa</li>\r\n	<li style="margin-left: 40px;">Bò xào X.O</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>DỒI TRƯỜNG</strong></p>\r\n', 'images/uploads/nhanh.jpg', 3, 1),
(7, 'Món lẩu', 'mon-lau', 'Món lẩu cực thơm ngon, hấp dẫn với rau xanh ngát.', '<p style="margin-left: 40px;"><strong>RAU THÊM LẦU</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Cơm trắng</li>\r\n	<li style="margin-left: 40px;">Râu thêm lầu</li>\r\n	<li style="margin-left: 40px;">Bún tươi</li>\r\n	<li style="margin-left: 40px;">Mì</li>\r\n	<li style="margin-left: 40px;">Thịt thêm</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>MÓN LẨU</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Lẩu Thái</li>\r\n	<li style="margin-left: 40px;">Lẩu Hải sản</li>\r\n	<li style="margin-left: 40px;">Lẩu Hồng Kông</li>\r\n	<li style="margin-left: 40px;">Lầu Thuyền Buồm</li>\r\n	<li style="margin-left: 40px;">Nước lẩu cua rào</li>\r\n	<li style="margin-left: 40px;">Lâu cua thịt</li>\r\n</ul>\r\n', 'images/uploads/lau.jpg', 3, 1),
(8, 'Các món đồng quê', 'mon-dong-que', 'Một không gian lý tưởng cho những người thích không gian riêng để thưởng thức. ', '<p style="margin-left: 40px;"><strong>ẾCH</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Ếch nấu lá giang</li>\r\n	<li style="margin-left: 40px;">Ếch nấu chuối đậu</li>\r\n	<li style="margin-left: 40px;">Ếch quay than hồng</li>\r\n	<li style="margin-left: 40px;">Ếch xào xả ớt</li>\r\n	<li style="margin-left: 40px;">Ếch xào lăn</li>\r\n	<li style="margin-left: 40px;">Ếch nướng muối ớt</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>LƯƠN</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Lươn nấu mẻ bắp chuối</li>\r\n	<li style="margin-left: 40px;">Lươn um nước dừa</li>\r\n	<li style="margin-left: 40px;">Lươn xào xả ớt</li>\r\n	<li style="margin-left: 40px;">Lươn bằm xúc bánh đa</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>VỊT XIÊM</strong><br />\r\n<strong>BỒ CÂU RA RÀNG</strong></p>\r\n', 'images/uploads/ech.jpg', 3, 1),
(9, 'Đặc sản rừng', 'dac-san-rung', 'Đặc sản rừng rất được mọi người ưa chuộng vì thịt ăn thơm, ngon, ngọt.', '<p style="margin-left: 40px;"><strong>HEO TỘC</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Nướng giả chồn</li>\r\n	<li style="margin-left: 40px;">Nướng giả cày</li>\r\n	<li style="margin-left: 40px;">Nướng giềng mẻ</li>\r\n	<li style="margin-left: 40px;">Nhựa mận</li>\r\n	<li style="margin-left: 40px;">Xáo măng</li>\r\n	<li style="margin-left: 40px;">Lòng xào Tiết canh</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>HEO RỪNG</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Nướng giả cày</li>\r\n	<li style="margin-left: 40px;">Nướng chao</li>\r\n	<li style="margin-left: 40px;">Xào lá lốt</li>\r\n	<li style="margin-left: 40px;">Nấu rượu mận</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>CÁNH ĐÀ ĐIỂU</strong></p>\r\n', 'images/uploads/rung.jpg', 3, 0),
(10, 'Các món xào và rau', 'mon-xao-rau', 'Ăn rau rất ngon và tốt cho sức khoẻ của bạn.', '<p style="margin-left: 40px;"><strong>RAU MUỐNG XÀO TỎI<br />\r\nĐẬU BẮP LUỘC + CHAO<br />\r\nBÔNG BÍ XÀO TỎI<br />\r\nRAU LUỘC + KHO QUẸT</strong></p>\r\n', 'images/uploads/rau.jpg', 3, 0),
(11, 'Cơm, Hủ tiếu', 'Com-hutieu', 'Cũng món cơm thường ngày nhưng khi kết hợp với nhiều loại thực phẩm khác nhau.', '<p style="margin-left: 40px;"><strong>CƠM CÁC LOẠI</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Cơm chiên gà xé</li>\r\n	<li style="margin-left: 40px;">Cơm chiên cá mặn</li>\r\n	<li style="margin-left: 40px;">Cơm chiên hải sản</li>\r\n	<li style="margin-left: 40px;">Cơm chiên dương châu</li>\r\n	<li style="margin-left: 40px;">Cơm chiên thịt cua</li>\r\n	<li style="margin-left: 40px;">Cơm chiên Mã Lai Bò bằm</li>\r\n	<li style="margin-left: 40px;">Cơm cháy tỏi</li>\r\n	<li style="margin-left: 40px;">Cơm chiên trứng</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>HỦ TIẾU XÀO CHAY</strong><br />\r\n<strong>HỦ TIẾU XÀO HẢI SẢN THẬP CẨM</strong><br />\r\n<strong>HỦ TIẾU XÀO TƯƠNG HONG KONG</strong></p>\r\n', 'images/uploads/com-van-phong-hu-tieu-suon.jpg', 3, 0),
(12, 'Đồ uống', 'do-uong', 'Các loại đồ uống đa dạng và phong phú cho thực khách.', '<p style="margin-left: 40px;"><strong>THỨC UỐNG CÓ CỒN</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Heineken chai</li>\r\n	<li style="margin-left: 40px;">Heineken lon</li>\r\n	<li style="margin-left: 40px;">Heineken chai lùn</li>\r\n	<li style="margin-left: 40px;">Sài gòn đỏ</li>\r\n	<li style="margin-left: 40px;">Tiger</li>\r\n	<li style="margin-left: 40px;">Bia Sapporo</li>\r\n</ul>\r\n\r\n<p style="margin-left: 40px;"><strong>NƯỚC UỐNG CÁC LOẠI</strong></p>\r\n\r\n<ul>\r\n	<li style="margin-left: 40px;">Bí Dao Bò cụng</li>\r\n	<li style="margin-left: 40px;">Cam vàng sô đa</li>\r\n	<li style="margin-left: 40px;">Cam vắt</li>\r\n	<li style="margin-left: 40px;">Nước yến</li>\r\n	<li style="margin-left: 40px;">Dừa tươi</li>\r\n	<li style="margin-left: 40px;">Trà xanh</li>\r\n	<li style="margin-left: 40px;">Nước suối</li>\r\n</ul>\r\n', 'images/uploads/douong.jpg', 3, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`idbaiviet`);

--
-- Chỉ mục cho bảng `datban`
--
ALTER TABLE `datban`
  ADD PRIMARY KEY (`iddatban`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idimages`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`idlienhe`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`idloaitin`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`idnguoidung`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`idphong`);

--
-- Chỉ mục cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`idthucdon`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `idbaiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `datban`
--
ALTER TABLE `datban`
  MODIFY `iddatban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `idimages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `idlienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `idloaitin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `idnguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `idphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `idthucdon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
