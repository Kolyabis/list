-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 25 2014 г., 15:10
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
-- Структура таблицы `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `page` char(15) NOT NULL,
  `parent_id` tinyint(4) NOT NULL DEFAULT '0',
  `controller` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `page`, `parent_id`, `controller`) VALUES
(1, 'Главная', 0, 'index'),
(2, 'О нас', 0, 'index'),
(3, 'Контакты', 2, 'contact'),
(4, 'Портфолио', 5, 'list'),
(5, 'User1', 1, 'index'),
(6, 'User2', 1, 'index');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `pass` int(10) NOT NULL DEFAULT '0',
  `mail` char(20) NOT NULL,
  `tel` int(10) NOT NULL DEFAULT '0',
  `status` char(10) NOT NULL DEFAULT 'user',
  `role` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `mail`, `tel`, `status`, `role`) VALUES
(1, 'admin', 111111, '', 0, 'admin', 5),
(2, 'User2', 0, '', 0, 'user', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
