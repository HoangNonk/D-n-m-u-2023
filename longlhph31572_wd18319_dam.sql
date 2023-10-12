-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 12:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `longlhph31572_wd18319_dam`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(58, 'haizz', 48, 89, '11:53:43pm 11/10/2023'),
(59, 'hi', 48, 107, '12:11:22am 12/10/2023');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(148, 'Iphone'),
(149, 'Watch'),
(150, 'iPad'),
(151, 'Mac'),
(152, 'AirPods'),
(153, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(86, 'Iphone 15 Pro', 999.00, 'iphone15pro-digitalmat-gallery-3-202309.png', 'Màn hình Super Retina XDR 6,1 inchChú thích¹ có ProMotion, Always-On và Dynamic Island\r\nThiết kế titan mạnh mẽ và nhẹ với nút Hành động — theo dõi nhanh tính năng yêu thích của bạn\r\nCamera chính 48MP cho ảnh độ phân giải siêu cao và camera tele 3x\r\nChip A17 Pro mang đến một bước nhảy vọt về hiệu suất đồ họa, biến đổi chơi game trên thiết bị di động\r\nĐầu nối USB-C với USB 3 cho tốc độ truyền nhanh hơn tới 20 lầnChú thích² và quy trình làm việc chuyên nghiệp mới', 0, 148),
(87, 'Iphone 15', 799.00, 'iphone15-digitalmat-gallery-4-202309.png', 'Thiết kế nhôm và kính màu bền bỉ 6,1 inchChú thích◊ với mặt trước Ceramic Shield\r\nDynamic Island tạo bong bóng cảnh báo và Hoạt động trực tiếp - vì vậy bạn không bỏ lỡ chúng trong khi bạn đang làm việc khác\r\nCamera chính 48MP với 2x Tele chụp chi tiết ngoạn mục ở gần hoặc xa\r\nA16 Bionic hỗ trợ khả năng chụp ảnh tính toán và hiệu suất chơi game mượt mà với hiệu quả tuyệt vời cho thời lượng pin cả ngày\r\nKết nối và sạc bằng USB-C', 1, 148),
(88, 'Iphone 14', 699.00, 'iphone14-digitalmat-gallery-3-202209.png', 'Thiết kế nhôm và kính màu bền bỉ 6,1 inchChú thích◊ với mặt trước Ceramic Shield\r\nDynamic Island tạo bong bóng cảnh báo và Hoạt động trực tiếp - vì vậy bạn không bỏ lỡ chúng trong khi bạn đang làm việc khác\r\nCamera chính 48MP với 2x Tele chụp chi tiết ngoạn mục ở gần hoặc xa\r\nA16 Bionic hỗ trợ khả năng chụp ảnh tính toán và hiệu suất chơi game mượt mà với hiệu quả tuyệt vời cho thời lượng pin cả ngày\r\nKết nối và sạc bằng USB-C', 1, 148),
(89, 'Iphone 13', 599.00, 'iphone13-digitalmat-gallery-3-202203.png', 'Màn hình Super Retina XDR 6,1 inchChú thích¹\r\nHệ thống camera kép cho hình ảnh và video ánh sáng yếu đáng kinh ngạc\r\nA15 Bionic với GPU 4 lõi cho hiệu suất nhanh như chớp\r\nLá chắn gốm, và khả năng chống nước và bụiChú thích²\r\n5G để tải xuống siêu nhanh và phát trực tuyến chất lượng caoChú thích³', 10, 148),
(90, 'Iphone SE', 429.00, 'iphonese-digitalmat-gallery-3-202203.png', 'Màn hình Retina HD 4,7 inchChú thích¹ tươi sáng, đầy màu sắc và sắc nét\r\nA15 Bionic, con chip siêu mạnh tương tự có trong iPhone 13\r\n5G để tải xuống nhanh và phát trực tuyến chất lượng caoChú thích²\r\nMáy ảnh thông minh hơn giúp điều chỉnh tự động để khuôn mặt, địa điểm, mọi thứ trông tuyệt vời\r\nNút Home với Touch ID — mở khóa an toàn, đăng nhập vào ứng dụng và sử dụng Apple Pay', 1, 148),
(91, 'Apple Watch Series 9', 399.00, 'watch-s9-digitalmat-gallery-5-202309.png', 'Màn hình Retina Always-On sáng hơn với tinh thể phía trước bền, chống nứt\r\nNhận thông tin chi tiết sâu sắc về sức khỏe thể chất và tinh thần của bạn bao gồm nhịp tim,Chú thích1 nồng độ oxy trong máu,Chú thích2 tâm trạng và hơn thế nữa\r\nVới số liệu và chế độ xem tập luyện nâng cao\r\nS9 SiP hoàn toàn mới cung cấp năng lượng cho một cách mới kỳ diệu để sử dụng đồng hồ của bạn mà không cần chạm vào màn hình\r\nCác tính năng an toàn sáng tạo bao gồm SOS khẩn cấp,Chú thích3 Phát hiện ngã và phát hiện va chạm', 1, 149),
(92, 'Apple Watch Ultra 2', 799.00, 'watch-ultra2-digitalmat-gallery-3-202309.png', 'Vỏ titan 49mm cứng cáp với nút Hành động có thể tùy chỉnh tạo ra sự cân bằng với trọng lượng, độ chắc chắn và khả năng chống ăn mòn\r\nS9 SiP hoàn toàn mới cung cấp năng lượng cho màn hình sáng nhất của chúng tôi từ trước đến nay và một cách mới kỳ diệu để sử dụng đồng hồ của bạn mà không cần chạm vào màn hình\r\nGPS chính xác nhất trong đồng hồ thể thao trong môi trường đô thị dày đặcChú thích1\r\nThời lượng pin lên đến 36 giờ, lên đến 72 giờ ở cài đặt năng lượng thấp,Chú thích2 và lên đến 17 giờ sử dụng tập luyện ở Chế độ nguồn điện thấpChú thích3\r\nKết hợp với ba phong cách ban nhạc chuyên biệt cho cuộc phiêu lưu ngoài trời, thể thao dưới nước và tất cả các loại tập luyện', 0, 149),
(93, 'Apple Watch SE', 249.00, 'watch-se-digitalmat-gallery-1-202309.png', 'Gọi và nhắn tin ngay cả khi bạn không có iPhone ở gần với các kiểu máy GPS + CellularChú thích1\r\nNhận số liệu và lượt xem bài tập nâng cao\r\nTheo dõi các giai đoạn giấc ngủ của bạn với ứng dụng Ngủ và kiểm tra nhịp tim của bạn bất cứ lúc nào\r\nCác tính năng an toàn sáng tạo bao gồm SOS khẩn cấp,Chú thích2 Phát hiện ngã và phát hiện va chạm\r\nThiết lập gia đình cho phép bạn ghép nối đồng hồ cho các thành viên gia đình mà không cần iPhoneChú thích3', 1, 149),
(94, 'Apple Hermès Watch', 1249.00, 'watch-card-40-hermes-202309.jpg', 'Dây đeo và mặt đồng hồ độc quyền của Hermès\r\nMàn hình Retina Always-On sáng hơn với tinh thể phía trước bền, chống nứt\r\nNhận thông tin chi tiết sâu sắc về sức khỏe thể chất và tinh thần của bạn bao gồm nhịp tim,Chú thích1 nồng độ oxy trong máu,Chú thích2 tâm trạng và hơn thế nữa\r\nS9 SiP hoàn toàn mới cung cấp năng lượng cho một cách mới kỳ diệu để sử dụng đồng hồ của bạn mà không cần chạm vào màn hình\r\nCác tính năng an toàn sáng tạo bao gồm SOS khẩn cấp,Chú thích3 Phát hiện ngã và phát hiện va chạm', 95, 149),
(95, 'iPad Pro 11 inch', 799.00, 'ipadpro11-digitalmat-gallery-1-202210.png', 'Chip Apple M2 mang lại bước nhảy vọt lớn về hiệu suất cho quy trình làm việc chuyên nghiệp và thời lượng pin cả ngày¹\r\nMàn hình Liquid Retina 11 inchChú thích² với ProMotion, True Tone và màu rộng P3\r\nMáy ảnh chuyên nghiệp với Máy quét LiDAR và camera trước Ultra Wide với Sân khấu trung tâm\r\nWi-Fi 6E cho kết nối Wi-Fi nhanh nhất. Và 5G để tải xuống siêu nhanh và phát trực tuyến chất lượng cao.³\r\nTương thích với Apple Pencil (thế hệ 2), Magic Keyboard và Smart Keyboard FolioChú thích⁴', 0, 150),
(96, 'iPad Pro 12.9 inch', 1099.00, 'ipadpro12-digitalmat-gallery-3-202210.png', 'Chip Apple M2 mang lại bước nhảy vọt lớn về hiệu suất cho quy trình làm việc chuyên nghiệp và thời lượng pin cả ngày¹\r\nMàn hình Liquid Retina XDR 12,9 inchChú thích² với ProMotion, True Tone và màu rộng P3\r\nMáy ảnh chuyên nghiệp với Máy quét LiDAR và camera trước Ultra Wide với Sân khấu trung tâm\r\nWi-Fi 6E cho kết nối Wi-Fi nhanh nhất. Và 5G để tải xuống siêu nhanh và phát trực tuyến chất lượng cao.³\r\nTương thích với Apple Pencil (thế hệ 2), Magic Keyboard và Smart Keyboard FolioChú thích⁴', 0, 150),
(97, 'iPad Air', 599.00, 'ipadair-digitalmat-gallery-2-202203_GEO_US.png', 'Chip Apple M1 cung cấp hiệu suất cấp độ tiếp theo và thời lượng pin cả ngàyChú thích¹\r\nMàn hình Liquid Retina 10,9 inch mang đến trải nghiệm xem đắm chìmChú thích²\r\nCamera trước siêu rộng 12MP với Center Stage cho các cuộc gọi video tự nhiên hơn\r\nNhận 5G cực nhanh trên các kiểu máy di động và Wi-Fi siêu nhanh với Wi-Fi 6Chú thích³\r\nTương thích với Apple Pencil (thế hệ 2), Magic Keyboard và Smart Keyboard FolioChú thích⁴', 1, 150),
(98, 'iPad Gen 10', 449.00, 'ipad-digitalmat-gallery-3-202210.png', 'Chip A14 Bionic cho phép bạn chạy nhiều ứng dụng và hoạt động trơn tru giữa chúng\r\nThiết kế toàn màn hình với màn hình Liquid Retina 10,9 inch¹ mang đến trải nghiệm xem tuyệt vời\r\nCamera trước Landscape 12MP Ultra Wide với Center Stage cho trải nghiệm gọi điện video tuyệt vời\r\nDuy trì kết nối với Wi-Fi 6 và 5G không dây siêu nhanh²\r\nTương thích với Apple Pencil (thế hệ 1), ³ Magic Keyboard Folio và Smart Folio⁴', 10, 150),
(99, 'iPad Gen 9', 329.00, 'ipad-digitalmat-gallery-1-202111.png', 'Chip A13 Bionic với Neural Engine giúp mọi thứ bạn làm trở nên cực kỳ nhạy\r\nMàn hình Retina 10,2 inch với True Tone cho chi tiết đáng kinh ngạc và màu sắc sống động\r\nCamera trước siêu rộng 12MP với Center Stage cho các cuộc gọi video tuyệt vời\r\nKết nối nhanh với Wi-Fi 802.11ac và dữ liệu di động LTE lớp GigabitChú thích¹\r\nTương thích với Apple Pencil (thế hệ 1) và Bàn phím thông minh²', 0, 150),
(100, 'iPad Mini', 499.00, 'ipad-mini-digitalmat-gallery-1-202111.png', 'Chip A15 Bionic cho hiệu suất đáng kinh ngạc và thời lượng pin cả ngàyChú thích¹\r\nMàn hình Liquid Retina 8,3 inch tuyệt đẹp với True Tone và màu rộng P3Chú thích²\r\nCamera trước siêu rộng 12MP với Center Stage cho các cuộc gọi video tuyệt vời\r\n5G và Wi-Fi 6 cho kết nối cực nhanhChú thích³\r\nTouch ID được tích hợp vào nút trên cùng để xác thực an toàn và Apple Pay', 0, 150),
(101, 'Macbook Air 13 inch', 999.00, 'mac11_13inch.png', 'Chip Apple M1 mang lại hiệu suất CPU, GPU và máy học mạnh mẽ\r\nThời lượng pin lên đến 18 giờ để bạn có thể sử dụng lâu hơn bao giờ hếtChú thích1\r\nMàn hình Retina với màu sắc rực rỡ và chi tiết đáng kinh ngạc\r\nBộ nhớ SSD siêu nhanh mở ứng dụng và tệp ngay lập tức\r\nThiết kế không quạt cho hoạt động im lặng', 0, 151),
(102, 'Macbook Pro 13 inch', 1299.00, 'mbp-digitalmat-gallery-1-202206.png', 'Hoàn thành nhiều việc nhanh hơn với chip Apple M2 thế hệ tiếp theo và hệ thống làm mát chủ động duy trì mức hiệu suất chuyên nghiệp\r\nĐi cả ngày lẫn đêm với thời lượng pin lên đến 20 giờChú thích¹\r\nMàn hình Retina với độ sáng 500 nits mang lại màu sắc rực rỡ và chi tiết đáng kinh ngạc\r\nHai cổng Thunderbolt cho phép bạn kết nối và cấp nguồn cho các phụ kiện tốc độ cao', 0, 151),
(103, 'Macbook Pro 14 inch', 1999.00, 'mbp-14-digitalmat-gallery-1-202301.png', 'M2 Pro hoặc M2 Max - chip mạnh mẽ và hiệu quả nhất từng có trong máy tính xách tay chuyên nghiệp - giúp bạn đảm nhận các dự án đòi hỏi khắt khe nhất\r\nSử dụng cả ngày với thời lượng pin lên đến 18 giờ,¹ nhờ hiệu quả của Apple silicon\r\nMàn hình Liquid Retina XDR là màn hình tốt nhất từ trước đến nay trong máy tính xách tay, với Dải động cực cao, độ tương phản đáng kinh ngạc và màu sắc chân thực\r\nNhìn sắc nét và âm thanh rõ ràng - ở bất cứ đâu - với camera FaceTime HD 1080p, ba micrô chất lượng phòng thu và sáu loa với Âm thanh không gian\r\nKết nối mọi thứ bạn cần với ba cổng Thunderbolt 4, khe cắm thẻ SDXC, cổng HDMI và cổng MagSafe 3', 0, 151),
(104, 'iMac 24 inch', 1299.00, 'imac24-digitalmat-gallery-2-202111.png', 'Chip Apple M1 mang lại hiệu suất CPU, GPU và máy học mạnh mẽ\r\nMàn hình Retina 4.5K sống độngChú thích¹\r\nThiết kế mỏng 11,5 mm nổi bật với bảy màu sắc rực rỡ\r\nCamera FaceTime HD 1080p, hệ thống âm thanh sáu loa có độ trung thực cao và dãy micrô chất lượng phòng thu\r\nMagic Mouse và Magic Keyboard phù hợp với màu sắc', 2, 151),
(105, 'AirPod Gen 2', 129.00, 'og__bz8g5g9sbyoi_specs.png', 'Cảm biến AirPods (mỗi):\r\nMicrô tạo chùm tia kép\r\n\r\nCảm biến quang học kép\r\n\r\nGia tốc kế phát hiện chuyển động\r\n\r\nGia tốc kế phát hiện giọng nói\r\n\r\nChip\r\nChip tai nghe H1\r\n\r\nĐiều khiển\r\nNhấn đúp để phát, chuyển tiếp hoặc trả lời cuộc gọi điện thoại\r\n\r\nNói \"Hey Siri\" để thực hiện những việc như phát bài hát, thực hiện cuộc gọi hoặc nhận chỉ đường\r\n\r\nKích thước và trọng lượng\r\nAirPods (mỗi chiếc): 0,65 x 0,71 x 1,59 inch (16,5 x 18,0 x 40,5 mm)⁷\r\n\r\nHộp sạc Lightning: 1.74 x 0.84 x 2.11 inch (44.3 x 21.3 x 53.5 mm)⁷\r\n\r\nAirPods (mỗi): 0,14 ounce (4 g)⁷\r\n\r\nHộp sạc Lightning: 1,35 ounce (38,2 g)⁷\r\n\r\nHộp sạc\r\nHoạt động với đầu nối Lightning\r\n', 8, 152),
(106, 'AirPod Gen 3', 169.00, 'airpods3-e1634579735355.png', 'Cập nhật thiết kế\r\nAirPods có trọng lượng nhẹ và có thiết kế đường viền. Chúng nằm ở góc vừa phải để tạo sự thoải mái và hướng âm thanh đến tai bạn tốt hơn. Thân máy ngắn hơn 33% so với AirPods (thế hệ 2) và bao gồm cảm biến lực để dễ dàng điều khiển nhạc và cuộc gọi.', 1, 152),
(107, 'AirPod Max', 549.00, 'airpods-max-select-pink-202011.png', 'Chế độ trong suốt và khử tiếng ồn chủ động\r\n\r\n—\r\n\r\n\r\nÂm thanh không gian được cá nhân hóa với tính năng theo dõi chuyển động đầu chủ độngᴼ\r\n\r\n—\r\n\r\n\r\nỐp lưng thông minh\r\n\r\n20 giờ\r\n\r\nThời gian nghe lên đến 20 giờ với một lần sạcOOO', 3, 152),
(108, 'Ốp lưng MagSafe', 69.00, 'MT4J3.png', 'Được làm từ microtwill, chất liệu bền bỉ đem lại cảm giác mềm mại, giống như da lộn. Chất liệu Vải Tinh Dệt cũng được thiết kế thân thiện với môi trường. Chất liệu này làm từ 68% thành phần được tái chế sau tiêu dùng và giảm đáng kể lượng khí thải carbon so với chất liệu da. Ốp lưng nhanh chóng hút vào đúng vị trí và vừa khít với iPhone mà không bị cộm.\r\n\r\nVới các nam châm tích hợp có thể căn chuẩn vị trí sạc của iPhone 15 Pro, bạn luôn có thể tháo và gắn ốp lưng này vào điện thoại một cách hết sức dễ dàng, thuận tiện và sạc không dây nhanh hơn. Đến lúc cần sạc, cứ gắn cả iPhone đang có ốp lưng vào bộ sạc MagSafe hoặc đặt lên bộ sạc chuẩn Qi.', 0, 153),
(109, 'Ốp trong suốt MagSafe', 55.00, 'MT223.png', 'Mỏng, nhẹ và dễ cầm, ốp lưng do Apple thiết kế này phô diễn được màu sắc tuyệt vời của iPhone 15 Pro, đồng thời còn là lớp bảo vệ tăng cường.\r\n\r\nĐược chế tạo từ hỗn hợp chất liệu polycarbonate trong suốt và chất liệu dẻo, ốp lưng vừa khít với các nút bấm của điện thoại, vô cùng tiện dụng. Bề mặt bên ngoài và cả bên trong đều được phủ một lớp chống trầy. Toàn bộ vật liệu và lớp phủ được tối ưu hóa để không ngả vàng theo thời gian.', 0, 153),
(110, 'Bộ sạc MagSafe', 51.00, 'MHXH3.png', 'Bộ Sạc MagSafe khiến cho việc sạc không dây trở nên cực kỳ dễ dàng. Các nam châm cân chỉnh vị trí sạc này gắn với iPhone 12 trở lên, giúp sạc không dây nhanh hơn với công suất lên đến 15W.\r\n\r\nBộ sạc MagSafe tương thích với bộ sạc Qi, vì vậy bộ sạc này có thể được dùng để sạc không dây iPhone 8 hoặc các phiên bản cao hơn cũng như các phiên bản AirPods có hộp sạc không dây, tương tự như cách sử dụng các bộ sạc không dây chuẩn Qi.', 0, 153),
(111, 'Dây đồng hồ Nike', 60.00, 'MTL53.png', '\r\nDây Quấn Thể Thao Nike được thiết kế lại để tận dụng sợi dư từ các mùa trước để tạo ra một loại dây đeo mềm, nhẹ và thoáng khí cùng họa tiết táo bạo. Nút cài băng dính dán và một vấu kéo bện hình Nike Swoosh giúp bạn dễ dàng điều chỉnh khi di chuyển. Kiểu bện nylon 2 lớp tạo ra các đường vòng kín ở mặt tiếp xúc với da, tạo nên lớp đệm êm ái nhưng vẫn có thể thoát ẩm.\r\n\r\nDây Quấn Thể Thao Nike chứa ít nhất 68% sợi dư từ các mùa trước, giúp tiết kiệm hơn 3 tấn sợi sơ cấp.', 0, 153);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(48, 'admin', '123', 'longlhph31572@fpt.edu.vn', 'hà nội', '0346540479', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_binhluan_sanpham` (`idpro`),
  ADD KEY `FK_binhluan_taikhoan` (`iduser`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_binhluan_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_binhluan_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `Fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
