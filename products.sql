-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 10 2022 г., 21:00
-- Версия сервера: 8.0.29-0ubuntu0.20.04.3
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pizzas`
--

CREATE TABLE `pizzas` (
  `name` varchar(16) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `pizzas`
--

INSERT INTO `pizzas` (`name`, `price`) VALUES
('Пепперони', 2),
('Деревенская', 3),
('Гавайская', 4),
('Грибная', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `sauces`
--

CREATE TABLE `sauces` (
  `name` varchar(16) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sauces`
--

INSERT INTO `sauces` (`name`, `price`) VALUES
('сырный', 1),
('кисло-сладкий', 1),
('чесночный', 2),
('барбекю', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `size` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`size`, `price`) VALUES
(21, 4),
(26, 5),
(31, 6),
(45, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
