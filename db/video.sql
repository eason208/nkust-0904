-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bbs`
--

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `vid` varchar(20) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `video`
--

INSERT INTO `video` (`id`, `title`, `vid`, `pid`) VALUES
(1, '【ON AIR】TVBS新聞 55 頻道 24 小時直播', 'A4FbB8UhNRs', 1),
(2, '民視新聞直播 | Taiwan Formosa live news HD ', 'XxJKnDLYZz4', 1),
(3, 'EBC 東森財經新聞 24小時線上直播', '68lLQ7hkdzU', 1),
(4, '台視新聞台HD 24 小時線上直播', 'NbjI0cARzjQ', 1),
(5, '三立LIVE新聞HD直播│SET Live NEWS', '4ZVUmEUFwaY', 1),
(6, '老高講電影，這是一部豆瓣評分9.3分的好片 ', 'KefYmjM0E7g', 2),
(7, '世界是虛擬的，但有一個東西是真實的', 'B-I2guiXzRA', 2),
(8, '錯覺，你的選擇可能並不是你的真實選擇', '5S8jvUaqg-Q', 2),
(9, '十天之內三個國家發射火星探測器，火星移民開始', 'cpWRUoEB5VQ', 2),
(10, 'KFK預言，目前爲止最可信的一個未來人', 'ZTxc1YY64cM', 2),
(14, '傳說中的東瀛戰神！Nissan GT-R', 'WqLNBvffN8k', 4);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
