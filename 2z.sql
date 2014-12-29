-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 29 2014 г., 15:17
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `2z`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `description` varchar(500) NOT NULL,
  `parent_id` tinyint(5) NOT NULL DEFAULT '0',
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `parent_id`, `data`) VALUES
(1, 'Test', 'Description', 0, '2014-12-27 13:44:28'),
(2, 'Test2', 'Test 2', 0, '2014-12-27 18:16:00');

-- --------------------------------------------------------

--
-- Структура таблицы `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `page` char(15) NOT NULL,
  `parent_id` tinyint(4) NOT NULL DEFAULT '0',
  `controller` char(10) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `page`, `parent_id`, `controller`, `data`) VALUES
(1, 'Главная', 0, 'index', '2014-12-17 00:00:00'),
(2, 'О нас', 0, 'index', '2014-12-18 00:00:00'),
(3, 'Контакты', 2, 'contact', '2014-12-19 00:00:00'),
(4, 'Портфолио', 5, 'list', '2014-12-20 00:00:00'),
(5, 'User1', 1, 'index', '2014-12-21 00:00:00'),
(6, 'User2', 1, 'index', '2014-12-22 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `pass` char(20) NOT NULL,
  `mail` char(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `status` char(10) NOT NULL DEFAULT 'user',
  `role` int(1) NOT NULL DEFAULT '0',
  `token` char(50) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `mail`, `tel`, `status`, `role`, `token`, `data`) VALUES
(1, 'admin', '111111', '', '0', 'admin', 5, 'cdd0500dc0ef6682fa6ec6d2e6b577c4', '2014-12-29 00:00:00'),
(2, 'User2', '0', '', '0', 'user', 0, 'cdd0500dc0ef6682fa6ec6d2e6b58892', '2014-12-26 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
