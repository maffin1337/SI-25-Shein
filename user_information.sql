-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 08 2022 г., 13:53
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `user_information`
--

-- --------------------------------------------------------

--
-- Структура таблицы `e-mail`
--

CREATE TABLE `e-mail` (
  `example@test.ru` text NOT NULL,
  `test@test.com` text NOT NULL,
  `mail@example.net` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password`
--

CREATE TABLE `password` (
  `$2y$10$HkuSqjjICyKVPd.RYWBMaeaFESwl5RVpJdRFExtXG.DTLyI8P3QdK ---` text NOT NULL,
  `$2y$10$SZgQClgnq1kvOBCv./1D2.cEPjoi7nkVpAyTRo4RRWghLQ5sUPtA.` text NOT NULL,
  `$2y$10$FaJsfCvGx.Yy.oxfRWqWEeXzCS8/7wYpTdJTutfl62Aa2qiIifF7a` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
