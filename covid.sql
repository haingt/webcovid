-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 27, 2022 lúc 06:40 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `covid`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_code` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `role` varchar(10) NOT NULL,
  `user_hash` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`user_id`, `user_name`, `user_code`, `full_name`, `password`, `email`, `date_of_birth`, `role`, `user_hash`) VALUES
(1, 'B18DCAT028', 'B18DCAT028', 'Nguyễn Chung Chính', '$2y$10$DwXfJ78oNTHYV00/ANQcCuA2JlhTNpqwdvCfi/R6OfjwZOulAQofa', 'chinhnguyen11032000@gmail.com', '2000-11-03', 'admin', '$2y$10$3fmlJJf3zSoevkRptg4DmO7JCe3FR/H/7/ivYrLbq49aG6ruHEfhK'),
(10, 'B18DCAT072', 'B18DCAT072', 'Nguyễn Thanh Hải', '$2y$10$7/J4ou11s0FWKemcPyqzEOHcEVsPT.PdMPQy775uLHwvx1rsg3juK', 'hai@gmail.com', '2022-07-06', 'user', '$2y$10$Se2U1yCLsEH14ep5QHKWGOpFyPkXB7dcWE85xY1LO35zjCRYQ.5ja');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `injection_1`
--

CREATE TABLE `injection_1` (
  `injection_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `user_code` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `indentity_card` varchar(15) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `register_date` date NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `account_id` int(11) NOT NULL,
  `vaccine_name` varchar(20) DEFAULT NULL,
  `injection_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `injection_1`
--

INSERT INTO `injection_1` (`injection_id`, `full_name`, `user_code`, `date_of_birth`, `gender`, `indentity_card`, `phone_number`, `address`, `register_date`, `status`, `account_id`, `vaccine_name`, `injection_date`) VALUES
(2, 'Nguyễn Chung Chính', 'B18DCAT028', '2022-07-13', 'nam', '234023342092390', '0423524334', 'HANOI', '2022-07-18', 1, 1, 'asstrta', '2022-07-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `injection_2`
--

CREATE TABLE `injection_2` (
  `injection_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `user_code` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `indentity_card` varchar(15) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `register_date` date NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `account_id` int(11) NOT NULL,
  `vaccine_name` varchar(20) DEFAULT NULL,
  `injection_date` date DEFAULT NULL,
  `vaccine_1_name` varchar(20) DEFAULT NULL,
  `injection_1_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `injection_2`
--

INSERT INTO `injection_2` (`injection_id`, `full_name`, `user_code`, `date_of_birth`, `gender`, `indentity_card`, `phone_number`, `address`, `register_date`, `status`, `account_id`, `vaccine_name`, `injection_date`, `vaccine_1_name`, `injection_1_date`) VALUES
(1, 'Nguyễn Chung Chính', 'B18DCAT028', '2022-07-06', 'nam', '234023342092390', '0423524334', 'Thai Binh', '2022-07-18', 1, 1, 'asstrtaa', '2022-07-13', 'fifzer', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `sub_thumbnail` varchar(150) DEFAULT NULL,
  `text_top` text NOT NULL,
  `text_bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `thumbnail`, `sub_thumbnail`, `text_top`, `text_bottom`) VALUES
(1, 'HỌC VIỆNN  BƯU CHÍNH VIỄN THÔNG – CƠ SỞ HÀ NỘI HỖ TRỢ SINH VIÊN KÝ TÚC XÁ TRONG THỜI GIAN HÀ NỘI GIÃN CÁCH XÃ HỘI', 'TiemChung.jpg', 'PGS.TS. Vũ Văn San, Giám đốc Học viện gặp gỡ và trao quà đại diện cho sinh viên Lào tại KTX', 'Ngày 24/7 vừa qua, Thành phố Hà Nội đã ban hành Chỉ thị số 17/CĐ-UBND, theo đó Hà Nội thực hiện giãn cách xã hội theo Chỉ thị 16/CT-TTg của Thủ tướng Chính phủ trong vòng 15 ngày kể từ 06h00 ngày 24/7 trên phạm vi toàn Thành phố. Theo đó, 64 sinh viên Việt nam và 34 sinh viên Lào không thể trở về địa phương do điều kiện học tập, thực tập.\r\n\r\nĐồng thời, theo công văn số 2314/UBND-YT của Ủy ban nhân dân Quận Hà đông ngày 27/7/2021, Ký túc xá tại Cơ sở Đào tạo Hà Nội của Học viện cũng đươc huy động để chuẩn bị làm khu cách ly tập trung cho các trường hợp tiếp xúc gần F1 với tổng năng lực cách ly tối đa được khoảng 420 người. Theo đó, ký túc xá B1, B5 và một số khu vực trong khuôn viên Học viện được sử dụng cho mục đích này.', 'Học việnn đã triển khai công tác chuẩn bị để sẵn sàng cơ sở vật chất cho việc trưng dụng ký túc xá làm khu cách ly bao gồm quy hoạch, phân luồng di chuyển, dọn dẹp, chỉnh trang các khu nhà ở, kiểm kê, bàn giao đồ dùng của sinh viên … và đặc biệt là lên phương án di chuyển, bố trí nơi sinh hoạt cho các sinh viên hiện đang ở ký túc xá từ nhà B1, B5 sang khu ký túc xá B2. Để đảm bảo giãn cách trong mùa dịch tại Ký túc xá, Học viện sẽ bố trí 2 sinh viên/phòng thay vì 8 sinh viên/phòng như quy định. Ký túc xá B2 cũng có khu vực riêng làm bếp dã chiến dành cho sinh viên nấu ăn.\r\n\r\nĐể hỗ trợ sinh viên tại Ký túc xá gặp nhiều khó khăn trong thời điểm giãn cách xã hội và trong thời gian ký túc xá được trưng dụng làm khu vực cách ly, ngày 28/7, Lãnh đạo Học viện đã gặp mặt đại diện sinh viên tại ký túc xá và trao 98 phần quà là các nhu yếu phẩm hàng ngày trị giá 500.000 đ/xuất cho các sinh viên tại KTX.  Thay mặt sinh viên tại KTX, sinh viên Lê Đình Bằng, lớp B17QT6 đã bày tỏ lời cám ơn tới sự quan tâm của Học viện dành cho sinh viên tại ký túc xá. Bên cạnh gói hỗ trợ này, Học viện đã trích hơn 6 tỷ đồng từ Quỹ học bổng hỗ trợ cho tất cả sinh viên Học viện với mức 500.000 đ/sinh viên.'),
(2, 'HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG – CƠ SỞ HÀ NỘI HỖ TRỢ SINH VIÊN KÝ TÚC XÁ TRONG THỜI GIAN HÀ NỘI GIÃN CÁCH XÃ HỘI', 'TiemChung.jpg', 'PGS.TS. Vũ Văn San, Giám đốc Học viện gặp gỡ và trao quà đại diện cho sinh viên Lào tại KTX', 'Ngày 23/7 vừa qua, Thành phố Hà Nội đã ban hành Chỉ thị số 17/CĐ-UBND, theo đó Hà Nội thực hiện giãn cách xã hội theo Chỉ thị 16/CT-TTg của Thủ tướng Chính phủ trong vòng 15 ngày kể từ 06h00 ngày 24/7 trên phạm vi toàn Thành phố. Theo đó, 64 sinh viên Việt nam và 34 sinh viên Lào không thể trở về địa phương do điều kiện học tập, thực tập.\r\n\r\nĐồng thời, theo công văn số 2314/UBND-YT của Ủy ban nhân dân Quận Hà đông ngày 27/7/2021, Ký túc xá tại Cơ sở Đào tạo Hà Nội của Học viện cũng đươc huy động để chuẩn bị làm khu cách ly tập trung cho các trường hợp tiếp xúc gần F1 với tổng năng lực cách ly tối đa được khoảng 420 người. Theo đó, ký túc xá B1, B5 và một số khu vực trong khuôn viên Học viện được sử dụng cho mục đích này.', 'Học viện đã triển khai công tác chuẩn bị để sẵn sàng cơ sở vật chất cho việc trưng dụng ký túc xá làm khu cách ly bao gồm quy hoạch, phân luồng di chuyển, dọn dẹp, chỉnh trang các khu nhà ở, kiểm kê, bàn giao đồ dùng của sinh viên … và đặc biệt là lên phương án di chuyển, bố trí nơi sinh hoạt cho các sinh viên hiện đang ở ký túc xá từ nhà B1, B5 sang khu ký túc xá B2. Để đảm bảo giãn cách trong mùa dịch tại Ký túc xá, Học viện sẽ bố trí 2 sinh viên/phòng thay vì 8 sinh viên/phòng như quy định. Ký túc xá B2 cũng có khu vực riêng làm bếp dã chiến dành cho sinh viên nấu ăn.\r\n\r\nĐể hỗ trợ sinh viên tại Ký túc xá gặp nhiều khó khăn trong thời điểm giãn cách xã hội và trong thời gian ký túc xá được trưng dụng làm khu vực cách ly, ngày 28/7, Lãnh đạo Học viện đã gặp mặt đại diện sinh viên tại ký túc xá và trao 98 phần quà là các nhu yếu phẩm hàng ngày trị giá 500.000 đ/xuất cho các sinh viên tại KTX.  Thay mặt sinh viên tại KTX, sinh viên Lê Đình Bằng, lớp B17QT6 đã bày tỏ lời cám ơn tới sự quan tâm của Học viện dành cho sinh viên tại ký túc xá. Bên cạnh gói hỗ trợ này, Học viện đã trích hơn 6 tỷ đồng từ Quỹ học bổng hỗ trợ cho tất cả sinh viên Học viện với mức 500.000 đ/sinh viên.'),
(3, 'HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG THÔNG BÁO THỰC HIỆN CHỈ THỊ 17/CT-UBND CỦA UBND THÀNH PHỐ HÀ NỘI VỀ VIỆC THỰC HIỆN GIÃN CÁCH XÃ HỘI TRÊN ĐỊA BÀN THÀNH PHỐ', 'tiemvaccine.jpg', '', 'Thực hiện chỉ thị 17/CT-UBND ngày 23/7/2021 của Chủ tịch UBND thành phố Hà Nội về việc thực hiện giãn cách xã hội trên địa bàn Thành phố để phòng chống dịch COVID-19; Thực hiện công văn số 1112/BTTTT-VP ngày 31/3/2020 của Bộ Thông tin và Truyền thông về việc thực hiện chỉ thị 16/CT-Tg của Thủ tướng Chính phủ. Căn cứ tình hình diễn biến phức tạp của dịch COVID-19 và tình hình công tác của Học viện, Học viện yêu cầu: \r\n                            ', ' Cán bộ, giảng viên, sinh viên Học viện nghiêm túc thực hiện Chỉ thị 17/CT-UBND ngày 23/7/2021 của Chủ tịch UBND thành phố Hà Nội trong đó hướng dẫn việc thực hiện giãn cách xã hội toàn TP.Hà Nội theo tinh thần của Chỉ thị 16/CT-TTg ngày 31/3/2020 của Thủ tướng Chính phủ từ 6h00 ngày 24/7/2021. (Chi tiết Chỉ thị 17/CT-UBND kèm theo).\r\nTrưởng các đơn vị có trách nhiệm quán triệt đầy đủ nội dung và tinh thần nghiêm túc thực hiện Chỉ thị này tới toàn thể cán bộ trong đơn vị; Trung tâm Dịch vụ có trách nhiệm quán triệt và giám sát việc thực hiện Chỉ thị này với sinh viên nội trú trong KTX Học viện tại CSĐT Hà Nội; Phòng CT&CTSV phổ. biến nội dung Chỉ thị qua các kênh truyền thông của Học viện.\r\nTrong thời gian 15 ngày kể từ 6h00 ngày 24/7/2021, viên chức, người lao động trong Học viện thực hiện làm viêc bằng hình thức online tại nhà; riêng các bộ phận có nhiệm vụ trực (trực lãnh đạo, bảo vệ, an ninh, KTX, điện, nước, y tế – phòng dịch) bố trí theo tình hình thực tế. Trưởng các đơn vị thuộc Học viện tổ chức cho cán bộ làm việc online tại nhà trên nguyên tắc đảm bảo thực hiện tốt các nhiệm vụ được giao.\r\nTrong trường hợp phải giải quyết các công việc thực sự cấp thiết, trưởng đơn vị có thể bố trí cán bộ đến Học viện làm việc nhưng không quá 20% số lao động của đơn vị và thực hiện nghiêm việc giãn cách trong khi làm việc. Đơn vị có cán bộ đến cơ quan làm việc lập danh sách và lịch làm việc cụ thể gửi Văn phòng Học viện để tổng hợp trước 26/7/2021 qua địa email vanphong@ptit.edu.vn .\r\nVăn phòng Học viện tiếp tục làm đầu mối theo dõi, bám sát tình hình dịch bệnh, hàng ngày cập nhật và báo cáo Lãnh đạo Học viện các thông tin về dịch tễ (F0, F1, F2) trong Học viện; tổ chức các cuộc họp làm việc theo hình thức trực tuyến 100%, thông báo lịch trực tại Học viện của Lãnh đạo Học viện trên lịch tuần; thắt chặt công tác an ninh trật tự trong thời gian giãn cách, tuyệt đối không cho khách vào Học viện, cán bộ đến Học viện làm việc phải có trong danh sách đăng ký.\r\nPhòng Giáo vụ, Trung tâm Khảo thí và ĐBCLGD, Khoa Đào tạo Sau đại học tạm dừng các hoạt động đào tạo, thi, bảo vệ khóa luận nếu cán bộ phải tới Học viện làm việc, ưu tiên chuyển các hoạt động này theo hình thức trực tuyến 100% tại nhà.\r\nPhòng CT&CTSV, Trung tâm Dịch vụ khẩn trương đề xuất các hoạt động hỗ trợ kịp thời cho sinh viên Học viện trong thời gian giãn cách xã hội, đặc biệt là đối tượng sinh viên đang lưu trú trong Ký túc xá Học viện.\r\nCác đơn vị trong Học viện, cán bộ, giảng viên, sinh viên Học viện tuyệt đối nghiêm túc trong thực hiện các quy định về phòng chống dịch của nhà nước và của Học viện. Trưởng đơn vị chịu trách nhiệm nếu để xảy ra vi phạm trong đơn vị. Mỗi cá nhân chịu trách nhiệm trước pháp luật và Học viện nếu vi phạm các quy định về phòng dịch.\r\nHọc viện thông báo để các đơn vị, cá nhân có liên quan biết và nghiêm túc thực hiện./.\r\n                            '),
(4, 'HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG THÔNG BÁO THỰC HIỆN CHỈ THỊ 17/CT-UBND CỦA UBND THÀNH PHỐ HÀ NỘI VỀ VIỆC THỰC HIỆN GIÃN CÁCH XÃ HỘI TRÊN ĐỊA BÀN THÀNH PHỐ', 'tiemvaccine.jpg', NULL, 'Thực hiện chỉ thị 17/CT-UBND ngày 23/7/2021 của Chủ tịch UBND thành phố Hà Nội về việc thực hiện giãn cách xã hội trên địa bàn Thành phố để phòng chống dịch COVID-19; Thực hiện công văn số 1112/BTTTT-VP ngày 31/3/2020 của Bộ Thông tin và Truyền thông về việc thực hiện chỉ thị 16/CT-Tg của Thủ tướng Chính phủ. Căn cứ tình hình diễn biến phức tạp của dịch COVID-19 và tình hình công tác của Học viện, Học viện yêu cầu: \r\n                            ', ' Cán bộ, giảng viên, sinh viên Học viện nghiêm túc thực hiện Chỉ thị 17/CT-UBND ngày 23/7/2021 của Chủ tịch UBND thành phố Hà Nội trong đó hướng dẫn việc thực hiện giãn cách xã hội toàn TP.Hà Nội theo tinh thần của Chỉ thị 16/CT-TTg ngày 31/3/2020 của Thủ tướng Chính phủ từ 6h00 ngày 24/7/2021. (Chi tiết Chỉ thị 17/CT-UBND kèm theo).\r\nTrưởng các đơn vị có trách nhiệm quán triệt đầy đủ nội dung và tinh thần nghiêm túc thực hiện Chỉ thị này tới toàn thể cán bộ trong đơn vị; Trung tâm Dịch vụ có trách nhiệm quán triệt và giám sát việc thực hiện Chỉ thị này với sinh viên nội trú trong KTX Học viện tại CSĐT Hà Nội; Phòng CT&CTSV phổ. biến nội dung Chỉ thị qua các kênh truyền thông của Học viện.\r\nTrong thời gian 15 ngày kể từ 6h00 ngày 24/7/2021, viên chức, người lao động trong Học viện thực hiện làm viêc bằng hình thức online tại nhà; riêng các bộ phận có nhiệm vụ trực (trực lãnh đạo, bảo vệ, an ninh, KTX, điện, nước, y tế – phòng dịch) bố trí theo tình hình thực tế. Trưởng các đơn vị thuộc Học viện tổ chức cho cán bộ làm việc online tại nhà trên nguyên tắc đảm bảo thực hiện tốt các nhiệm vụ được giao.\r\nTrong trường hợp phải giải quyết các công việc thực sự cấp thiết, trưởng đơn vị có thể bố trí cán bộ đến Học viện làm việc nhưng không quá 20% số lao động của đơn vị và thực hiện nghiêm việc giãn cách trong khi làm việc. Đơn vị có cán bộ đến cơ quan làm việc lập danh sách và lịch làm việc cụ thể gửi Văn phòng Học viện để tổng hợp trước 26/7/2021 qua địa email vanphong@ptit.edu.vn .\r\nVăn phòng Học viện tiếp tục làm đầu mối theo dõi, bám sát tình hình dịch bệnh, hàng ngày cập nhật và báo cáo Lãnh đạo Học viện các thông tin về dịch tễ (F0, F1, F2) trong Học viện; tổ chức các cuộc họp làm việc theo hình thức trực tuyến 100%, thông báo lịch trực tại Học viện của Lãnh đạo Học viện trên lịch tuần; thắt chặt công tác an ninh trật tự trong thời gian giãn cách, tuyệt đối không cho khách vào Học viện, cán bộ đến Học viện làm việc phải có trong danh sách đăng ký.\r\nPhòng Giáo vụ, Trung tâm Khảo thí và ĐBCLGD, Khoa Đào tạo Sau đại học tạm dừng các hoạt động đào tạo, thi, bảo vệ khóa luận nếu cán bộ phải tới Học viện làm việc, ưu tiên chuyển các hoạt động này theo hình thức trực tuyến 100% tại nhà.\r\nPhòng CT&CTSV, Trung tâm Dịch vụ khẩn trương đề xuất các hoạt động hỗ trợ kịp thời cho sinh viên Học viện trong thời gian giãn cách xã hội, đặc biệt là đối tượng sinh viên đang lưu trú trong Ký túc xá Học viện.\r\nCác đơn vị trong Học viện, cán bộ, giảng viên, sinh viên Học viện tuyệt đối nghiêm túc trong thực hiện các quy định về phòng chống dịch của nhà nước và của Học viện. Trưởng đơn vị chịu trách nhiệm nếu để xảy ra vi phạm trong đơn vị. Mỗi cá nhân chịu trách nhiệm trước pháp luật và Học viện nếu vi phạm các quy định về phòng dịch.\r\nHọc viện thông báo để các đơn vị, cá nhân có liên quan biết và nghiêm túc thực hiện./.\r\n                            ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Chỉ mục cho bảng `injection_1`
--
ALTER TABLE `injection_1`
  ADD PRIMARY KEY (`injection_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `injection_2`
--
ALTER TABLE `injection_2`
  ADD PRIMARY KEY (`injection_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `injection_1`
--
ALTER TABLE `injection_1`
  MODIFY `injection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `injection_2`
--
ALTER TABLE `injection_2`
  MODIFY `injection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `injection_1`
--
ALTER TABLE `injection_1`
  ADD CONSTRAINT `injection_1_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`user_id`);

--
-- Các ràng buộc cho bảng `injection_2`
--
ALTER TABLE `injection_2`
  ADD CONSTRAINT `injection_2_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
