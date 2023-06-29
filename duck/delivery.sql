-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июн 29 2023 г., 07:57
-- Версия сервера: 5.7.34
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `delivery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `calculate`
--

CREATE TABLE `calculate` (
  `id_calculate` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sending_city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distination_city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_box` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `calculate`
--

INSERT INTO `calculate` (`id_calculate`, `id_user`, `sending_city`, `distination_city`, `size_box`, `price`) VALUES
(3, 2, 'Одинцово', 'Москва', 'Короб S, 23x19x10 см, до 2 кг', 100),
(4, 2, 'Кастрома', 'Санкт-Петербург', 'Короб XL, 60x35x30 см, до 18 кг', 350),
(5, 3, 'Иваново', 'Москва', 'Конверт, 42x36x5 см, до 2 кг', 30),
(6, 7, 'Орел', 'Магадан', 'Короб S, 23x19x10 см, до 2 кг', 254),
(7, 4, 'Тула', 'Тверь', 'Большой короб, ящик, 60x60x30 см, до 20 кг', 1499);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `photo_company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `comment` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comment`, `photo_company`, `name`, `link`, `created_at`, `comment`, `id_user`) VALUES
(2, '4.png', 'Доставка цветов', 'bloomenu.ru', '2023-05-20', '\"Регулярно пользуемся сервисом и курьеры бывают разные, но однажды к нам за заказом приехал курьер Марат, просто супер ответственный, пунктуальный, презентабельный хотелось бы что бы все курьеры были такими! Огромное спасибо Марату за работу!\"', 2),
(3, '2.png', 'Вук Принт', 'wooc.ru', '2023-02-11', '\"Курьеры есть всегда. Заказываем доставку часто, никогда не подводили. Стоимость очень лояльная. Удобно, быстро и надежно. Рекомендуем\".', 1),
(4, '1.jpg', 'О', 'ceramomosaic.com', '2023-05-07', 'Заказали курьера забрать документы, через час уже приехал и забрал, отвезли быстро, цена за услугу очень порадовала. Курьер очень приятная, приветливая женщина. Поблагодарила, что хорошо прописали как найти компанию.', 4),
(6, '1', 'awe', 'wer', '2023-11-11', 'awe', NULL),
(7, '6.png', 'awe', 'awe', '2023-11-11', 'qwsd', NULL),
(8, '3.png', 'fdghgh', 'fight', '2023-10-10', 'dxgcfhghj', NULL),
(9, '4.png', 'wqerfgf', 'dsfgh', '2022-12-12', 'ewrgrh', NULL),
(10, '2.png', 'wasedfghjlk', 'dcfghj', '2022-10-23', 'fvyguhij', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `courier`
--

CREATE TABLE `courier` (
  `id_courier` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courier`
--

INSERT INTO `courier` (`id_courier`, `name`, `lastname`, `rating`) VALUES
(1, 'Гурзуф', 'Мамаев', 5),
(2, 'Жанна', 'Городецкая', 5),
(3, 'Олег', 'Мукуслим', 4),
(4, 'Вера', 'Нежданова', 5),
(5, 'Серафима', 'Вяткина', 3),
(6, 'Дмитрий', 'Раскольник', 4),
(7, 'Савелий', 'Рыбалов', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `gender`
--

CREATE TABLE `gender` (
  `id_gender` int(11) NOT NULL,
  `gender` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gender`
--

INSERT INTO `gender` (`id_gender`, `gender`) VALUES
(1, 'женский'),
(2, 'мужской');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `sending_city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distination_city` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_box` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `id_courier` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `id_status` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `sending_city`, `distination_city`, `size_box`, `order_date`, `id_courier`, `delivery_date`, `id_status`, `price`) VALUES
(4, 2, 'Москва', 'Тверь', 'Конверт, 42x36x5 см, до 2 кг', '2023-04-30', 1, '2023-05-01', 1, 20),
(5, 1, 'Иваново', 'Подольск', 'Короб M, 33x25x15 см, до 5 кг', '2023-06-12', 4, '2023-06-13', 2, 300),
(6, 6, 'Геленджик', 'Анапа', 'Короб L, 31x25x38 см, до 12 кг', '2023-06-20', 5, '2023-06-21', 2, 45),
(7, 6, 'Ярославль', 'Смоленск', 'Большой короб, ящик, 60x60x30 см, до 20 кг', '2023-06-19', 5, '2023-06-20', 1, 257),
(8, 2, 'Одинцово', 'Рязань', 'Конверт, 42x36x5 см, до 2 кг', '2023-06-20', 5, '2023-06-21', 2, 400),
(9, 21, 'москва', 'ногинск', '1', '2023-06-07', 1, '2023-06-15', 1, 100);

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id_service`, `title`, `service`, `price`) VALUES
(3, 'Скидки и надбавки.', 'Ожидание на адресе более 15 мин', 2000),
(12, 'описание', 'услуга', 100),
(13, 'qwerty', 'qwerty', 1200);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'доставлен'),
(2, 'не доставлен');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patronymic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscript` int(11) DEFAULT NULL,
  `id_gender` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `lastname`, `patronymic`, `password`, `phone`, `email`, `subscript`, `id_gender`, `age`) VALUES
(1, 'Ан', 'Романова', 'awe', '12345678', '9687678607', 'asdfgty@gmail.com', 12348, 1, 20),
(2, 'Александр', 'Чиченов', 'Максимович', '13246587', '9687645461', 'werrtyr@yandex.ru', 13479, 2, 26),
(3, 'Иван', 'Блинов', 'Андреевич', '1', '9333945674', 'gywuieood@gmail.com', 12348, 2, 52),
(4, 'Мария', 'Артемова', 'Сергееевна', '7654321', '9057071453', 'qqwerty@gmail.com', 12348, 1, 39),
(6, 'Андрей', 'Выдров', 'Витальевич', '123455987654', '9034043284', 'qwertyijn@gmail.com', 12447, 2, 48),
(7, 'марина', 'игнатова', 'сергеевна', '456789898765', '687645490', 'mnbvcx@yandex.ru', 13479, 1, 30),
(11, NULL, NULL, NULL, '$2y$10$IUtA.6/qMidcZjFiLZ7TdeRESMiCY63K102WSYlfB/epZ.rMB/Ahm', '12345', '12345', NULL, NULL, NULL),
(12, NULL, NULL, NULL, '$2y$10$0eyw2/4OT77w9NsaN7qVfe7ydmSOW8efvaf/XxnQnXYuXZoylT/Uu', '0987', '0987', NULL, NULL, NULL),
(14, NULL, NULL, NULL, '$2y$10$XjQ/fa1u9UsXCcOgjQzeuuv53zAskCTVWYyT1K.dZJcw5bU2L5mzq', '123', '123', NULL, NULL, NULL),
(16, '1', '1', '1', '1', '1', '1', 1, 1, 1),
(17, NULL, NULL, NULL, '1235', '889898989', 'dfghj', NULL, NULL, NULL),
(18, NULL, NULL, NULL, '$2y$10$bmyHrFel.pUju4ivf0X7bu/xiQmdthZf8y5kthZ0AVRdpHEw3rbpa', '8968', '1@qwe.ru', NULL, NULL, NULL),
(19, NULL, NULL, NULL, '$2y$10$hxtJ3tPI6AJjXY633MTqU.LvCJdasHPYKwMGV8ZgJAnmz9FABt6Q6', '999', 'qwert@qwefc.ru', NULL, NULL, NULL),
(20, NULL, NULL, NULL, '$2y$10$tL5SYTyG5bUTKd4T2g671e06TQdQ3IyqFlGinD2aPhrBPL8.G2Vj.', '8999999999', 'qwertyt@admin.ru', NULL, NULL, NULL),
(21, NULL, NULL, NULL, '$2y$10$i0LOFS8tXXFRlQGYenbOUu2RcjGb7qKeEbFacIFc93ruDhU8vi2..', '9687678600', 'admin@root.ru', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления ` курьеров с наибольшим рейтингом (7)`
-- (См. Ниже фактическое представление)
--
CREATE TABLE ` курьеров с наибольшим рейтингом (7)` (
`id_courier` int(11)
,`name` varchar(100)
,`lastname` varchar(100)
,`rating` int(11)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `определенным курьером (3)`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `определенным курьером (3)` (
`id_order` int(11)
,`id_user` int(11)
,`sending_city` varchar(150)
,`distination_city` varchar(150)
,`size_box` varchar(100)
,`order_date` date
,`id_courier` int(11)
,`delivery_date` date
,`id_status` int(11)
,`price` int(11)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления ` список всех заказов определенного клиента (2)`
-- (См. Ниже фактическое представление)
--
CREATE TABLE ` список всех заказов определенного клиента (2)` (
`id_order` int(11)
,`id_user` int(11)
,`sending_city` varchar(150)
,`distination_city` varchar(150)
,`size_box` varchar(100)
,`order_date` date
,`id_courier` int(11)
,`delivery_date` date
,`id_status` int(11)
,`price` int(11)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `список всех клиентов с указанием заказа, даты и времени (6)`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `список всех клиентов с указанием заказа, даты и времени (6)` (
`id_user` int(11)
,`name` varchar(100)
,`lastname` varchar(100)
,`order_date` date
,`delivery_date` date
,`id_status` int(11)
,`price` int(11)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `список заказов, которые еще не были доставлены (4)`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `список заказов, которые еще не были доставлены (4)` (
`id_order` int(11)
,`id_user` int(11)
,`sending_city` varchar(150)
,`distination_city` varchar(150)
,`size_box` varchar(100)
,`order_date` date
,`id_courier` int(11)
,`delivery_date` date
,`id_status` int(11)
,`price` int(11)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `сумма доставки превышает заданное значение (5)`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `сумма доставки превышает заданное значение (5)` (
`id_order` int(11)
,`id_user` int(11)
,`sending_city` varchar(150)
,`distination_city` varchar(150)
,`size_box` varchar(100)
,`order_date` date
,`id_courier` int(11)
,`delivery_date` date
,`id_status` int(11)
,`price` int(11)
);

-- --------------------------------------------------------

--
-- Структура для представления ` курьеров с наибольшим рейтингом (7)`
--
DROP TABLE IF EXISTS ` курьеров с наибольшим рейтингом (7)`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW ` курьеров с наибольшим рейтингом (7)`  AS SELECT `courier`.`id_courier` AS `id_courier`, `courier`.`name` AS `name`, `courier`.`lastname` AS `lastname`, `courier`.`rating` AS `rating` FROM `courier` ORDER BY `courier`.`rating` DESC LIMIT 0, 5 ;

-- --------------------------------------------------------

--
-- Структура для представления `определенным курьером (3)`
--
DROP TABLE IF EXISTS `определенным курьером (3)`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `определенным курьером (3)`  AS SELECT `orders`.`id_order` AS `id_order`, `orders`.`id_user` AS `id_user`, `orders`.`sending_city` AS `sending_city`, `orders`.`distination_city` AS `distination_city`, `orders`.`size_box` AS `size_box`, `orders`.`order_date` AS `order_date`, `orders`.`id_courier` AS `id_courier`, `orders`.`delivery_date` AS `delivery_date`, `orders`.`id_status` AS `id_status`, `orders`.`price` AS `price` FROM `orders` WHERE (`orders`.`id_courier` = 1) ;

-- --------------------------------------------------------

--
-- Структура для представления ` список всех заказов определенного клиента (2)`
--
DROP TABLE IF EXISTS ` список всех заказов определенного клиента (2)`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW ` список всех заказов определенного клиента (2)`  AS SELECT `orders`.`id_order` AS `id_order`, `orders`.`id_user` AS `id_user`, `orders`.`sending_city` AS `sending_city`, `orders`.`distination_city` AS `distination_city`, `orders`.`size_box` AS `size_box`, `orders`.`order_date` AS `order_date`, `orders`.`id_courier` AS `id_courier`, `orders`.`delivery_date` AS `delivery_date`, `orders`.`id_status` AS `id_status`, `orders`.`price` AS `price` FROM `orders` WHERE (`orders`.`id_user` = 2) ;

-- --------------------------------------------------------

--
-- Структура для представления `список всех клиентов с указанием заказа, даты и времени (6)`
--
DROP TABLE IF EXISTS `список всех клиентов с указанием заказа, даты и времени (6)`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `список всех клиентов с указанием заказа, даты и времени (6)`  AS SELECT `user`.`id_user` AS `id_user`, `user`.`name` AS `name`, `user`.`lastname` AS `lastname`, `orders`.`order_date` AS `order_date`, `orders`.`delivery_date` AS `delivery_date`, `orders`.`id_status` AS `id_status`, `orders`.`price` AS `price` FROM (`user` join `orders` on((`user`.`id_user` = `orders`.`id_user`))) ;

-- --------------------------------------------------------

--
-- Структура для представления `список заказов, которые еще не были доставлены (4)`
--
DROP TABLE IF EXISTS `список заказов, которые еще не были доставлены (4)`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `список заказов, которые еще не были доставлены (4)`  AS SELECT `orders`.`id_order` AS `id_order`, `orders`.`id_user` AS `id_user`, `orders`.`sending_city` AS `sending_city`, `orders`.`distination_city` AS `distination_city`, `orders`.`size_box` AS `size_box`, `orders`.`order_date` AS `order_date`, `orders`.`id_courier` AS `id_courier`, `orders`.`delivery_date` AS `delivery_date`, `orders`.`id_status` AS `id_status`, `orders`.`price` AS `price` FROM `orders` WHERE (`orders`.`id_status` = 2) ;

-- --------------------------------------------------------

--
-- Структура для представления `сумма доставки превышает заданное значение (5)`
--
DROP TABLE IF EXISTS `сумма доставки превышает заданное значение (5)`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `сумма доставки превышает заданное значение (5)`  AS SELECT `orders`.`id_order` AS `id_order`, `orders`.`id_user` AS `id_user`, `orders`.`sending_city` AS `sending_city`, `orders`.`distination_city` AS `distination_city`, `orders`.`size_box` AS `size_box`, `orders`.`order_date` AS `order_date`, `orders`.`id_courier` AS `id_courier`, `orders`.`delivery_date` AS `delivery_date`, `orders`.`id_status` AS `id_status`, `orders`.`price` AS `price` FROM `orders` WHERE (`orders`.`price` > 100) ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Индексы таблицы `calculate`
--
ALTER TABLE `calculate`
  ADD PRIMARY KEY (`id_calculate`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`id_courier`);

--
-- Индексы таблицы `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_courier` (`id_courier`),
  ADD KEY `id_status` (`id_status`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_gender` (`id_gender`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `calculate`
--
ALTER TABLE `calculate`
  MODIFY `id_calculate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `courier`
--
ALTER TABLE `courier`
  MODIFY `id_courier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `gender`
--
ALTER TABLE `gender`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `calculate`
--
ALTER TABLE `calculate`
  ADD CONSTRAINT `calculate_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_courier`) REFERENCES `courier` (`id_courier`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_gender`) REFERENCES `gender` (`id_gender`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
