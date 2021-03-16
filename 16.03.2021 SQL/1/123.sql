phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2021 г., 18:36
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bases`
--
CREATE DATABASE IF NOT EXISTS `bases` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bases`;

-- --------------------------------------------------------

--
-- Структура таблицы `vedomost`
--

CREATE TABLE `vedomost` (
                            `nomer` int NOT NULL,
                            `fio` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
                            `otdel` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
                            `zp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `vedomost`
--

INSERT INTO `vedomost` (`nomer`, `fio`, `otdel`, `zp`) VALUES
(1, 'Иванов Иван Иванович', 'бухгалтерия', 1000),
(2, 'Петров Петр Петрович', 'склад', 440),
(3, 'Зайцев Рустам Петрович', 'компьютеризация', 1000000),
(4, 'Солодуха Виктор Геннадьевич', 'бухгалтерия', 100),
(5, 'Распутин Григорий Иванович', 'склад', 770);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vedomost`
--
ALTER TABLE `vedomost`
    ADD PRIMARY KEY (`nomer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2021 г., 18:36
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bases`
--
CREATE DATABASE IF NOT EXISTS `bases` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bases`;

-- --------------------------------------------------------

--
-- Структура таблицы `vedomost`
--

CREATE TABLE `vedomost` (
                            `nomer` int NOT NULL,
                            `fio` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
                            `otdel` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
                            `zp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `vedomost`
--

INSERT INTO `vedomost` (`nomer`, `fio`, `otdel`, `zp`) VALUES
(1, 'Иванов Иван Иванович', 'бухгалтерия', 1000),
(2, 'Петров Петр Петрович', 'склад', 440),
(3, 'Зайцев Рустам Петрович', 'компьютеризация', 1000000),
(4, 'Солодуха Виктор Геннадьевич', 'бухгалтерия', 100),
(5, 'Распутин Григорий Иванович', 'склад', 770);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vedomost`
--
ALTER TABLE `vedomost`
    ADD PRIMARY KEY (`nomer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;