-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Хост: 10.0.0.5:3306
-- Время создания: Фев 09 2019 г., 14:29
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `9085097564_testphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `number_employees` int(11) NOT NULL,
  `max_sal` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `number_employees` (`number_employees`),
  KEY `number_employees_2` (`number_employees`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id`, `title`, `number_employees`, `max_sal`) VALUES
(1, 'закупки', 0, 20000),
(2, 'продажи', 2, 35000),
(3, 'маркетинг', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `family` varchar(32) NOT NULL,
  `patronymic` varchar(32) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `salary` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `department` (`department`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `family`, `patronymic`, `gender`, `salary`, `department`) VALUES
(2, 'Барак', 'Йода', 'Трампович', 'муж', 25000, 1),
(4, 'Алибаба', 'Алибабаев', 'Алибабаевич', 'муж', 22000, 2),
(6, 'Анатолий', 'Скайуокуер', 'Эникенович', 'муж', 13400, 3),
(7, 'Иванов', 'Иван ', 'Иванович', 'муж', 25000, 1);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
