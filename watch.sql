-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2018 lúc 10:39 AM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `watch`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product-type`
--

CREATE TABLE `product-type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product-type`
--

INSERT INTO `product-type` (`type_id`, `type_name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `type_id` int(11) NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT '0',
  `img1` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `type_id`, `feature`, `img1`, `img2`, `img3`, `xem`) VALUES
(1, 'Casio Digital World Time Stopwatch 100m Water Resistant Watch', 'Imported\r\nBlack watch featuring silver-tone pushers and multifunction dial with stopwatch, countdown timer, and world time indicator\r\nFeatures five daily alarms and LED light with afterglow\r\n39.5 mm resin case with mineral dial window\r\nJapanese quartz movement with digital display\r\nRibbed resin band with buckle closure\r\nWater resistant to 100 m (330 ft): In general, suitable for swimming and snorkeling, but not scuba diving', 25.95, 1, 1, 's-1.jpg', 's-2.jpg', 's-3.jpg', 14),
(2, 'Calendrier Eco-Drive White Dial Men\'s Watch', 'Stainless steel case with a dark blue leather strap.Stainless steel case with a dark blue leather strap. Fixed stainless steel bezel. Rotating inner ring bezel. White dial with luminous blue hands and index hour markers. Minute markers. World time cities. 24 hour markers around the outer rim. Dial Type: Analog. Luminescent hands and markers. Date display at the 3 o\'clock position. Three multi-function sub-dials displaying: 24 hour, date and day of the week. Eco-Drive 8729 eco-drive movement. Scratch resistant mineral crystal. Pull / push crown. Solid case back. Case size: 44 mm. Case thickness: 13 mm. Round case shape. Band width: 22 mm. Band length: 8 inches. Deployment clasp. Water resistant at 100 meters / 330 feet. Functions: date, day, hour, minute, second. Additional Info: citizen eco-drive is powered by light, a watch that never needs a battery. Casual watch style. Watch label: Japan Movt. Item Variations: BU2020 02A, BU2020.02A, BU202002A. Citizen Calendrier Eco-Drive White Dial Mens Watch BU2020-02A.', 202.49, 1, 1, 'citizen-calendrier-eco-drive-white-dial-men_s-watch-bu2020-02a.jpg', 'citizen-calendrier-eco-drive-white-dial-men_s-watch-bu2020-02a_2.jpg', 'citizen-calendrier-eco-drive-white-dial-men_s-watch-bu2020-02a_3.jpg', NULL),
(3, 'T-Navigator Automatic Black Dial Men\'s Watch T0624301705700', 'Stainless steel case with a black rubber strap. Uni-directional rotating black PVD bezel showing compass markings. Black dial with black hands and stick hour markers. Arabic numerals at the 3, 6, 9, and 12 o\'clock positions. Arabic numeral minute markers (at 5 minute intervals). Minute markers around the outer rim. Dial Type: Analog. Luminescent hands and markers. Day of the week and date display appears at the 3 o\'clock position. Automatic movement with a 40-hour power reserve. Scratch resistant sapphire crystal. See through case back. Case diameter: 44 mm. Case thickness: 12.5 mm. Band width: 21.5 mm. Band length: 8 inches. Deployment clasp with a push button release. Water resistant at 100 meters / 330 feet. Functions: date, day, hour, minute, second, compass. Sport watch style. Watch label: Swiss Made. Tissot T-Navigator Automatic Black Dial Stainless Steel Mens Watch T0624301705700', 202.49, 1, 1, 'tissot-t-navigator-automatic-black-dial-men_s-watch-t0624301705700.jpg', 'tissot-t-navigator-automatic-black-dial-men_s-watch-t0624301705700_2.jpg', 'tissot-t-navigator-automatic-black-dial-men_s-watch-t0624301705700_3.jpg', NULL),
(4, 'Casio Women\'s LW200-7AV', 'Imported\r\nRound sport watch featuring pink dial with day, date, and month functions\r\nAdditional functions include: alarm, stopwatch, dual time, and LED light\r\n34.9 mm resin and stainless steel case with mineral dial window\r\nQuartz movement with digital display\r\nWhite resin band with buckle closure\r\nWater resistant to 50 m (165 ft): In general, suitable for short periods of recreational swimming, but not diving or snorkeling', 14.23, 3, 1, '81IfWZMJiPL._UY445_.jpg', '61gh4Xk7bBL._UX679_.jpg', '81IfWZMJiPL._UY445_3.jpg', NULL),
(5, 'Casio W213 Digital Multi-Function Sports Watch w/ 10 Year Battery Life', 'Imported\r\nCase Diameter : 40 mm\r\nReliable quartz movement\r\nCasual watch with best size and value design\r\n5 Daily Alarms, Countdown Timer\r\nEL backlight with Afterglow, Dual Time\r\nWater resistant to 165 feet (50 M): suitable for swimming and showering', 13.97, 3, 1, '914jnDCVhuL._UY445_.jpg', '612bWC3GW9L._UX679_.jpg', '914jnDCVhuL._UY445_.jpg', NULL),
(6, 'Flamingo Ladies Watch T0942101611101', 'Stainless steel case with a white leather strap. Fixed stainless steel bezel. White mother of pearl dial with silver-tone hands and diamond hour markers. Dial Type: Analog. Date display at the 6 o\'clock position. ETA F03.111 quartz movement. Scratch resistant sapphire crystal. Pull / push crown. Solid case back. Case size: 26 mm. Case thickness: 6.35 mm. Round case shape. Strap width: 7 mm. Butterfly clasp. Water resistant at 50 meters / 165 feet. Functions: date, hour, minute, second. Dress watch style. Watch label: Swiss Made. Tissot Flamingo Ladies Watch T0942101611101.', 179.99, 2, 1, 'tissot-flamingo-ladies-watch-t0942101611101.jpg', 'tissot-flamingo-ladies-watch-t0942101611101_2.jpg', 'tissot-flamingo-ladies-watch-t0942101611101_3.jpg', NULL),
(8, 'Multifort Brown Dial Unisex Watch', 'Rose gold PVD stainless steel case with a brown leather strap. Fixed brown PVD bezel. Brown dial with luminous rose gold-tone hands and Arabic numeral hour markers. Minute markers around the outer rim. Dial Type: Analog. Luminescent hands and markers. Day of the week and date display at the 3 o\'clock position. ETA Caliber 2836-2 automatic movement with a 40-hour power reserve. Scratch resistant sapphire crystal. Screw down crown. Transparent case back. Round case shape, case size: 38 mm, case thickness: 11.05 mm. Band width: 20 mm. Deployment clasp. Water resistant at 100 meters / 330 feet. Functions: date, day, hour, minute, second. Luxury watch style. Watch label: Swiss Made. Mido Multifort Brown Dial Unisex Watch M018.830.36.292.00.', 445, 2, 1, 'mido-multifort-brown-dial-ladies-watch-m018.830.36.292.00.jpg', 'ttyaaosw3ynxczaqs-l1600_grande.jpg', 'mido-multifort-brown-dial-ladies-watch-m018.830.36.292.00_3.jpg', NULL),
(9, 'Classic Fusion Black Carbon Fiber Dial Black Rubber Ladies Watch', 'Black ceramic case with a black rubber strap. Fixed black ceramic bezel. Black carbon fiber dial with skeleton hands and index hour markers. Dial Type: Analog. Date display at the 3 o\'clock position. Quartz movement. Scratch resistant sapphire crystal. Solid case back. Case diameter: 33 mm. Round case shape. Band width: 20.3 mm. Band length: 8 inches. Water resistant at 50 meters / 165 feet. Functions: date, hour, minute, second. Luxury watch style. Watch label: Swiss Made. Item Variations: 581 CM 1770 RX, 581-CM-1770-RX, 581/CM/1770/RX, 581CM1770RX. Hublot Classic Fusion Black Carbon Fiber Dial Black Rubber Ladies Watch 581.CM.1770.RX', 4495, 2, 0, 'hublot-classic-fusion-black-ceramic-carbon-fiber-watch-p10901-25426_image.jpg', '320-Hublot-Men-s-Classic-Fusion-Black-Carbon-Fiber-Dial-Automatic-Black-Rubber-Watch-2.jpg', 'hublot-classic-fusion-black-carbon-fiber-dial-ladies-watch-581co1780rx_3.jpg', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product-type`
--
ALTER TABLE `product-type`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product-type`
--
ALTER TABLE `product-type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
