-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.50 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных restaurant
CREATE DATABASE IF NOT EXISTS `restaurant` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `restaurant`;


-- Дамп структуры для таблица restaurant.eat
CREATE TABLE IF NOT EXISTS `eat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `food` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `time_id` varchar(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `time_id` (`time_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы restaurant.eat: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `eat` DISABLE KEYS */;
INSERT INTO `eat` (`id`, `food`, `weight`, `price`, `time_id`) VALUES
	(1, 'Пиццац', '200', '555', '1'),
	(2, 'Пицца с томатами', '700', '400', '1'),
	(3, 'Мясо по-французки', '300', '340', '1'),
	(4, 'Филе куриное с овощами', '300', '200', '1'),
	(5, 'Суп с курицей', '350', '270', '3'),
	(6, 'Рис с говядиной', '290', '350', '2');
/*!40000 ALTER TABLE `eat` ENABLE KEYS */;


-- Дамп структуры для таблица restaurant.season
CREATE TABLE IF NOT EXISTS `season` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `time` (`time`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы restaurant.season: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `season` DISABLE KEYS */;
INSERT INTO `season` (`id`, `time`) VALUES
	(1, 'Завтрак'),
	(2, 'Обед'),
	(3, 'Ужин');
/*!40000 ALTER TABLE `season` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
