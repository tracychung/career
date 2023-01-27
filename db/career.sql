-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023-01-27 09:41:40
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `career`
--

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `readed` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `top` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `subject`, `content`, `readed`, `top`, `created_at`, `updated_at`) VALUES
(1, '2/14（二）【工作坊】從機械工程師，到影像製作自由工作者', '在新媒體時代，\r\n影像製作成了討論度越來越高的職涯選擇。\r\n \r\n特別邀請到\r\n一隻羊影像製作的主理人－李翊暘老師\r\n不只曾為誠品、SONY音樂、為台灣而教、台積電…進行影像操刀\r\n拍攝範疇更廣涵了人物故事、MV、到品牌形象廣告。\r\n這次他將不藏私地分享「影像製作」全攻略，\r\n從影片製成的前期、中期、後期，\r\n一步步帶你了解影像製作的過程，\r\n曾是科技業工程師的他，也將分享自己跨領域轉職一路走來的心路歷程。\r\n \r\n如果你也對影像產業躍躍欲試，\r\n如果妳也對於轉職感到徬徨，\r\n絕對不能錯過本次的工作坊！\r\n現在就來報名活動！\r\n\r\n活動內容:\r\n1. 從機械工程師到影像製作者（講師職涯轉變經歷分享）\r\n2. 影像製作的每一站（產製會經歷的過程、流程）\r\n3. 前期—企劃：客戶溝通、腳本撰寫技巧\r\n4. 中期—拍攝：拍攝場合的不同種類、直擊現場分工模樣\r\n5. 後期—剪輯：後製包含了哪些元素\r\n6. 過去 & 現在 & 未來（關於影像的一些未來思考）\r\n7. 提問 & 交流分享', 10, 0, '2023-01-09 16:02:07', '2023-01-12 13:55:28'),
(2, '2/10（五）【職場參訪體驗】Q Burger(饗樂餐飲實業股份有限公司)', '參訪單位：Q Burger(饗樂餐飲實業股份有限公司)\r\n活動時間：2/10（五）13:00-16:30\r\n單位介紹：\r\nQ Burger饗樂餐飲實業股份有限公司\r\n定調自身為賣早餐的「智慧餐飲」\r\n在2013年便成立至今\r\n2021年營收數額接近25億元\r\n除了員工數量超過100人以上\r\n更是全台展店超過280間\r\n有別於單純以中央餐廚為主的經營\r\nQ Burger更加著重於APP與數據管理\r\n打造更加便利加盟的早餐型態\r\n除了展店迅速更有近2/3為加盟店\r\n可見Q Burger的獨特魅力所在\r\n一起前進Q Burger體驗早餐的魅力吧！', 9, 1, '2023-01-09 16:02:51', '2023-01-12 13:56:21');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_log`
--

CREATE TABLE `survey_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` int(11) NOT NULL,
  `ip` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_log`
--

INSERT INTO `survey_log` (`id`, `user`, `ip`, `subject_id`, `option_id`, `created_at`) VALUES
(1, 2, '::1', 7, 3, '2023-01-19 07:52:32'),
(2, 2, '::1', 8, 8, '2023-01-19 07:52:40'),
(3, 2, '::1', 8, 6, '2023-01-19 07:52:43'),
(4, 2, '::1', 9, 10, '2023-01-19 07:52:52'),
(5, 2, '::1', 9, 12, '2023-01-19 07:52:55'),
(6, 2, '::1', 9, 11, '2023-01-19 07:53:00'),
(7, 0, '::1', 9, 10, '2023-01-25 03:00:07'),
(8, 0, '::1', 7, 3, '2023-01-25 03:00:16'),
(9, 0, '::1', 7, 14, '2023-01-25 03:00:23'),
(10, 0, '::1', 7, 13, '2023-01-27 07:27:49');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_options`
--

CREATE TABLE `survey_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `opt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `vote` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_options`
--

INSERT INTO `survey_options` (`id`, `subject_id`, `opt`, `vote`, `created_at`, `updated_at`) VALUES
(3, 7, '講座', 2, '2023-01-19 05:50:46', '2023-01-19 05:50:46'),
(6, 8, '104', 1, '2023-01-19 05:52:45', '2023-01-19 05:52:45'),
(7, 8, '1111', 0, '2023-01-19 05:52:45', '2023-01-19 05:52:45'),
(8, 8, 'LinkedIn', 1, '2023-01-19 05:52:45', '2023-01-19 05:52:45'),
(9, 8, '其他', 0, '2023-01-19 05:52:45', '2023-01-19 05:52:45'),
(10, 9, '薪資', 2, '2023-01-19 05:54:08', '2023-01-19 05:54:08'),
(11, 9, '交通距離', 1, '2023-01-19 05:54:08', '2023-01-19 05:54:08'),
(12, 9, '公司品牌知名度', 1, '2023-01-19 05:54:08', '2023-01-19 05:54:08'),
(13, 7, '影片', 1, '2023-01-19 05:58:59', '2023-01-19 05:59:13'),
(14, 7, '書籍', 1, '2023-01-19 06:03:55', '2023-01-19 06:03:55');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_subject`
--

CREATE TABLE `survey_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` tinyint(1) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL,
  `vote` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_subject`
--

INSERT INTO `survey_subject` (`id`, `subject`, `type`, `active`, `vote`, `created_at`, `updated_at`) VALUES
(7, '喜歡什麼類型的職涯分享?', 1, 1, 4, '2023-01-19 05:50:46', '2023-01-19 05:50:46'),
(8, '習慣從哪個平台搜尋工作職缺?', 1, 1, 2, '2023-01-19 05:52:45', '2023-01-19 05:52:45'),
(9, '找工作首要條件為?', 1, 1, 4, '2023-01-19 05:54:08', '2023-01-19 05:54:08');

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--

CREATE TABLE `test` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `q1` int(1) NOT NULL,
  `q2` int(1) NOT NULL,
  `q3` int(1) NOT NULL,
  `q4` int(1) NOT NULL,
  `q5` int(1) NOT NULL,
  `q6` int(1) NOT NULL,
  `q7` int(1) NOT NULL,
  `q8` int(1) NOT NULL,
  `q9` int(1) NOT NULL,
  `q10` int(1) NOT NULL,
  `total` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `test`
--

INSERT INTO `test` (`id`, `user_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `total`, `created_at`) VALUES
(1, 2, 2, 6, 4, 4, 6, 6, 6, 6, 7, 4, 51, '2023-01-22 09:46:42');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(255) UNSIGNED NOT NULL,
  `account` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(24) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sex` varchar(1) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` date NOT NULL,
  `age` float NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `account`, `password`, `name`, `sex`, `birthday`, `age`, `created_time`, `updated_time`, `last_login`) VALUES
(1, 'admin', '1110', 'admin', '1', '2022-09-19', 0, '2023-01-19 07:41:42', '2023-01-19 07:42:23', '2023-01-19 07:41:42'),
(2, 'coeur1110@gmail.com', '1110', 'tracy', '0', '1988-11-10', 0, '2023-01-19 07:42:01', '2023-01-19 07:42:01', '2023-01-19 07:42:01');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_log`
--
ALTER TABLE `survey_log`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_options`
--
ALTER TABLE `survey_options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_subject`
--
ALTER TABLE `survey_subject`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_log`
--
ALTER TABLE `survey_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options`
--
ALTER TABLE `survey_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject`
--
ALTER TABLE `survey_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
