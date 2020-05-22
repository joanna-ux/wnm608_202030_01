-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-05-11 13:40:50
-- 服务器版本： 5.6.46-cll-lve
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `dreamproducts`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `main_image` varchar(256) NOT NULL,
  `amount` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `category`, `title`, `description`, `images`, `main_image`, `amount`, `price`, `total`) VALUES
(11, '2020-05-01 00:01:00', '2021-05-01 00:01:00', 'Bonsai', 'Peace Lily ', 'Peace lilies (spathiphyllum) add a tropical flourish to your home, porch, or office. Grows best in a bright spot (but out of direct sunlight), but it will also tolerate lower light situations. ', '11.png', '11.png', 10, '32.00', '0'),
(12, '2020-05-01 00:02:00', '2021-05-01 00:02:00', 'Succulent', 'Snake Plant', 'Snake Plant, also known as mother-in-law\'s tongue, is a classic beauty that grows slowly and steadily and looks terrific in any setting. It is an ideal houseplant for any home, apartment, or office. ', '12.png', '12.png', 10, '31.00', '0'),
(10, '2020-05-01 00:03:00', '2021-05-01 00:03:00', 'Bonsai', 'Pinus Parviflora', 'Pinus Parviflora grow in medium moisture, well-drained soils in full sun. Plants prefer cool summer climates and dislike the heat and humidity of the deep South. \r\nPlants are generally tolerant of urban conditions.', '10.png', '10.png', 10, '68.00', '0'),
(9, '2020-05-01 00:04:00', '2021-05-01 00:04:00', 'Succulent', 'Cactus', 'Cactus is great houseplants for beginners, requiring very little maintenance to survive - water only when the soil has dried completely, and place where they\'ll receive bright indirect to direct light. Ideal collection for do-it-yourself projects, gifts and party decor.', '9.png', '9.png', 10, '17.00', '0'),
(8, '2020-05-01 00:05:00', '2021-05-01 00:05:00', 'Succulent', 'Burro\'s Tail', 'This has to be our favorite name for a succulent ever. Burro’s Tail is an easy-to-grow perennial succulent. It has rounded and fleshy silver-green leaves that are densely packed on hanging stems.', '8.png', '8.png', 10, '12.00', '0'),
(7, '2020-05-01 00:06:00', '2021-05-01 00:06:00', 'Succulent', 'Aloe Vera', 'Aloe Vera is not only a go-to for gotta-soothe-my-sunburn-stat moments but is also an aesthetically calming addition to any room. ', '7.png', '7.png', 10, '10.00', '0'),
(6, '2020-05-01 00:07:00', '2021-05-01 00:07:00', 'Succulent', 'Lucky Bambo', 'Lucky Bamboo requires protection from excessive sun and wind; it prefers areas of rich, well-watered, well-drained soil; nor a dryland or beach plant.', '6.png', '6.png', 10, '32.00', '0'),
(5, '2020-05-01 00:08:00', '2021-05-01 00:08:00', 'Bonsai', 'Monstera', 'The Monstera is incredibly forgiving and will tolerate all kinds of neglect including low light, poor soil, and incosistent watering. This is a great first-time houseplant or gift for anyone who wants to enjoy the natural beauty of plants.', '5.png', '5.png', 10, '36.00', '0'),
(4, '2020-05-01 00:09:00', '2021-05-01 00:09:00', 'Succulent', 'Sweetheart Hoya', 'This adorable sweetheart hoya arrangement in the pot is simple and timeless. It also requires absolutely no care. This arrangement will stay green and beautiful for your home and office for months and months.', '4.png', '4.png', 10, '18.00', '0'),
(3, '2020-05-01 00:10:00', '2021-05-01 00:10:00', 'Bonsai', 'Ficus Lyrata', 'One of the most popular plants here at the Garden Center. Commonly known as a Fiddle Leaf Fig, these beauties will do best with a high light spot in your home.', '3.png', '3.png', 10, '25.00', '0'),
(2, '2020-05-01 00:11:00', '2021-05-01 00:11:00', 'Bonsai', 'Money Tree', 'Money Tree (pachira macrocarpa) make fantastic houseplants! Known to be lucky, this plant can survive just fine in artificial lighting, or bright indirect light.', '2.png', '2.png', 10, '28.00', '0'),
(1, '2020-05-01 00:12:00', '2021-05-01 00:12:00', 'Succulent', 'Jade', 'One of the more popular succulents, jade is easy to care for and blooms small pink or white flowers.Because of its coin-shaped leaves, the crassula jade is sometimes nicknamed “lucky” or “money” plant. ', '1.png', '1.png', 10, '15.00', '0');

--
-- 转储表的索引
--

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
