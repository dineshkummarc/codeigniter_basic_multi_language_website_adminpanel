-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 29 2017 г., 18:56
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sample`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutgallery`
--

CREATE TABLE `aboutgallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aboutgallery`
--

INSERT INTO `aboutgallery` (`id`, `image`, `alt`) VALUES
(9, '5795-images.jpg', 'Դիպլոմ'),
(10, '627-yarny-sad.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(110) NOT NULL,
  `arm_title` varchar(255) NOT NULL,
  `rus_title` varchar(255) NOT NULL,
  `eng_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `arm_title`, `rus_title`, `eng_title`, `image`, `alt`) VALUES
(51, '', '', '', '5133-images.jpg', ''),
(52, '', '', '', '5005-yarny-sad.jpg', 'pic2');

-- --------------------------------------------------------

--
-- Структура таблицы `homeblogfirst`
--

CREATE TABLE `homeblogfirst` (
  `id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `arm_title` varchar(255) NOT NULL,
  `rus_title` varchar(255) NOT NULL,
  `eng_title` varchar(255) NOT NULL,
  `arm_text` text NOT NULL,
  `rus_text` text NOT NULL,
  `eng_text` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `homeblogfirst`
--

INSERT INTO `homeblogfirst` (`id`, `image`, `alt`, `arm_title`, `rus_title`, `eng_title`, `arm_text`, `rus_text`, `eng_text`, `link`) VALUES
(1, '6753-aboutus.png', 'about', 'Մանչեսթեր Յունայթեդը ', 'В России с 2018 года объявлен запрет на анонимов в мессенджерах', 'Why do we use it?', '<h1>Մանչեսթեր Յունայթեդը գոլառատ խաղում հաղթեց Ուոթֆորդին. Մխիթարյանը հայտավորված չէր (տեսանյութ)</h1>', '<p>Генеральный прокурор Юрий Чайка заявил о необходимости разработки нового международного правового акта на базе ООН для борьбы с киберпреступностью.</p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', 'aboutus');

-- --------------------------------------------------------

--
-- Структура таблицы `homeblogsecond`
--

CREATE TABLE `homeblogsecond` (
  `id` int(10) NOT NULL,
  `arm_title` varchar(255) NOT NULL,
  `rus_title` varchar(255) NOT NULL,
  `eng_title` varchar(255) NOT NULL,
  `arm_text` text NOT NULL,
  `rus_text` text NOT NULL,
  `eng_text` text NOT NULL,
  `image_first` varchar(255) NOT NULL,
  `image_first_title_arm` varchar(255) NOT NULL,
  `image_first_title_rus` varchar(255) NOT NULL,
  `image_first_title_eng` varchar(255) NOT NULL,
  `alt_first` varchar(255) NOT NULL,
  `image_second` varchar(255) NOT NULL,
  `image_second_title_arm` varchar(255) NOT NULL,
  `image_second_title_rus` varchar(255) NOT NULL,
  `image_second_title_eng` varchar(255) NOT NULL,
  `alt_second` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `homeblogsecond`
--

INSERT INTO `homeblogsecond` (`id`, `arm_title`, `rus_title`, `eng_title`, `arm_text`, `rus_text`, `eng_text`, `image_first`, `image_first_title_arm`, `image_first_title_rus`, `image_first_title_eng`, `alt_first`, `image_second`, `image_second_title_arm`, `image_second_title_rus`, `image_second_title_eng`, `alt_second`) VALUES
(1, 'ՇԱՏՈ-ԱՌՆՈ', 'В России с 2018 года объявлен запрет на анонимов в мессенджерах', 'Henrik Mkhitaryan', '<p>Հայկական տարբերակ</p>', '<h1 class=\"b-material-head__title\">В России с 2018 года объявлен запрет на анонимов в мессенджерах</h1>\r\n<p><em>.</em></p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '9889-yarny-sad.jpg', 'Ի՞նչ ծագում ունի այն', 'Откуда он появился?', ' Where does it come from?', 'Cognac', '1284-yarny-sad.jpg', 'Ի՞նչ ծագում ունի այն', 'Откуда он появился?', ' Where does it come from?', 'Wine');

-- --------------------------------------------------------

--
-- Структура таблицы `homeblogthird`
--

CREATE TABLE `homeblogthird` (
  `id` int(10) NOT NULL,
  `image_first` varchar(255) NOT NULL,
  `image_second` varchar(255) NOT NULL,
  `image_third` varchar(255) NOT NULL,
  `image_fourth` varchar(255) NOT NULL,
  `arm_title` varchar(255) NOT NULL,
  `rus_title` varchar(255) NOT NULL,
  `eng_title` varchar(255) NOT NULL,
  `arm_text` text NOT NULL,
  `rus_text` text NOT NULL,
  `eng_text` text NOT NULL,
  `arm_text_img` text NOT NULL,
  `rus_text_img` text NOT NULL,
  `eng_text_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `homeblogthird`
--

INSERT INTO `homeblogthird` (`id`, `image_first`, `image_second`, `image_third`, `image_fourth`, `arm_title`, `rus_title`, `eng_title`, `arm_text`, `rus_text`, `eng_text`, `arm_text_img`, `rus_text_img`, `eng_text_img`) VALUES
(1, '874-images.jpg', '1889-yarny-sad.jpg', '4018-barrel-wine-grapes.png', '3564-wine-pour.png', 'WHAT WE DO', 'ЧТО МЫ ДЕЛАЕМ', 'WHAT WE DO', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa accusamus excepturi nulla vero illo, minima laborum laboriosam necessitatibus expedita non, labore accusantium aperiam a temporibus incidunt quisquam impedit? Esse, aliquid.</p>', '<p><span style=\"font-size: 12pt;\">Винно-коньячный завод ООО “Шато-Арно” занимается производством вина и коньяка в Армении. Компания раскрывает секреты истинного армянского коньяка  и делает его доступным для всех, кто ценит волшебный вкус и уникальный аромат этого легендарного напитка.</span></p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '<p>Կան Lorem Ipsum-ի շատ տարբերակներ, սակայն շատերը աղավաղվել են տարաբնույթ, երբեմն նույնիսկ լատիներենից շատ հեռու և անհավանական բառերի և հումորի ավելացման արդյունքում: Եթե ուզում եք օգտագործել Lorem Ipsum, ապա երևի չեք ցանկանա, որ այն պարունակի ինչ-որ թաքնված հումոր տեքստի միջնամասում: Ինտերնետում բոլոր Lorem Ipsum արտադրիչները հակված են կրկնել նույն տեքստը մինչև ցանկալի ծավալի լրացումը. այնինչ իսկականը այս արտադրիչն է:</p>', '<p>Винно-коньячный завод ООО “Шато-Арно” занимается производством вина и коньяка в Армении. Компания раскрывает секреты истинного армянского коньяка  и делает его доступным для всех, кто ценит волшебный вкус и уникальный аромат этого легендарного напитка. Напитки производят по классической технологии с использованием сортов белого винограда ГаранДмак, Ркацители, Мсхали, Кангун. Выдержка осуществляется в дубовых бочках. Купажирование проводится только чистой родниковой водой. Производство и бутилирование проходят на территории Республики Армения, при этом контроль качества осуществляется на каждом этапе производства.</p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom..</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `user` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'AdminVz', 'adminVz83');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `arm_title` varchar(50) NOT NULL,
  `rus_title` varchar(50) NOT NULL,
  `eng_title` varchar(50) NOT NULL,
  `arm_text` text NOT NULL,
  `rus_text` text NOT NULL,
  `eng_text` text NOT NULL,
  `menuImg` varchar(255) NOT NULL,
  `parent_id` int(5) NOT NULL,
  `number` int(11) NOT NULL,
  `url` varchar(225) NOT NULL,
  `arm_meta_title` varchar(255) NOT NULL,
  `rus_meta_title` varchar(255) NOT NULL,
  `eng_meta_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `arm_title`, `rus_title`, `eng_title`, `arm_text`, `rus_text`, `eng_text`, `menuImg`, `parent_id`, `number`, `url`, `arm_meta_title`, `rus_meta_title`, `eng_meta_title`, `meta_description`) VALUES
(1, 'Home', 'Главная', 'Home', '<p>11</p>', '<p>11</p>', '<p>11</p>', '2966lll.jpg', 0, 0, 'home', 'կոնյակի գործարան', 'В аналогичном поведении подозревают более ', 'brendy-company', 'В аналогичном поведении подозревают более десятка членов местных легислатур, в том числе спикера Конгресса Кентукки и председателей комитетов в законодательных собраниях Флориды и Миннесоты'),
(2, 'Մեր մասին', 'О нас', 'About', '<p>Անգլիայի Պրեմիեր լիգայի 14-րդ տուրում<strong>«Մանչեսթեր Յունայթեդը»</strong> «Վիկարեյջ Ռոուդ» ստադիոնում հյուրընկալվեց<strong> «Ուոթֆորդին»:</strong></p>', '<h2 style=\"text-align: center;\"><strong><span style=\"font-size: 18pt;\">О нас</span></strong></h2>\r\n<p><span style=\"font-size: 14pt;\">ВГенеральный прокурор Юрий Чайка заявил о необходимости разработки нового международного правового акта на базе ООН для борьбы с киберпреступностью.</span></p>', '<h2 style=\"text-align: center;\"><span style=\"font-size: 18pt;\">About us</span></h2>\r\n<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '8128images.jpg', 0, 1, 'aboutus', 'Մանչեսթեր Յունայթեդը', 'О нас', 'About', ''),
(3, 'Խմիչքներ', 'Напитки', 'Drinks', '<h1>Մանչեսթեր Յունայթեդը գոլառատ խաղում հաղթեց Ուոթֆորդին. Մխիթարյանը հայտավորված չէր (տեսանյութ)</h1>', '<p>Генеральный прокурор Юрий Чайка заявил о необходимости разработки нового международного правового акта на базе ООН для борьбы с киберпреступностью.</p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '6157images.jpg', 0, 2, 'drinks', 'Մանչեսթեր Յունայթեդը', 'Генеральный прокурор', 'Sam Allardyce', ''),
(4, 'Պատկերասրահ', 'Галерея', 'Gallery', '<h1>Մանչեսթեր Յունայթեդը գոլառատ խաղում հաղթեց Ուոթֆորդին. Մխիթարյանը հայտավորված չէր (տեսանյութ)</h1>', '<p style=\"text-align: center;\"><span style=\"font-size: 14pt;\"> Генеральный прокурор Юрий Чайка заявил о необходимости разработки нового международного правового акта на базе ООН для борьбы с киберпреступностью.</span></p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '8847ww.gif', 0, 3, 'gallery', 'Պատկերասրահ', 'Галерея', 'Gallery', ''),
(5, 'Գործընկերներ', 'Партнёры', 'Partners', '<h1>Մանչեսթեր Յունայթեդը գոլառատ խաղում հաղթեց Ուոթֆորդին. Մխիթարյանը հայտավորված չէր (տեսանյութ)</h1>', '<p><span style=\"font-size: 14pt;\">   Генеральный прокурор Юрий Чайка заявил о необходимости разработки нового международного правового акта на базе ООН для борьбы с киберпреступностью.</span></p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '8062vv.jpg', 0, 4, 'partners', 'Գործընկերներ', 'Партнёры', 'Partners', ''),
(6, ' Կապ', 'Контакты', 'Contact', '<h1>Մանչեսթեր Յունայթեդը գոլառատ խաղում հաղթեց Ուոթֆորդին. Մխիթարյանը հայտավորված չէր (տեսանյութ)</h1>', '<p>Генеральный прокурор Юрий Чайка заявил о необходимости разработки нового международного правового акта на базе ООН для борьбы с киберпреступностью.</p>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '641depositphotos_49520271-Map-of-tavush-armenia.jpg', 0, 5, 'contact', '', '', '', ''),
(7, 'Կոնյակ', 'Коньяк', 'Cognac', '<p><span style=\"font-size: 12pt;\">Չնայած, որ Հայաստանում գինեգործությամբ զբաղվում են արդեն ավելի քան 6000 տարի, ամբողջ աշխարհում հայտնի է հայկական կոնյակը, իսկ գինին զիջում է նրան: Եվ որպեսզի ուղղվի դա, <<Շատո-Առնո>> ընկերությունը զբաղվում է բարձրորակ գինու արտադրությամբ: Գինին մարդկանց հայտնի ամենահին խմիչքն է: Այն տարածված է ամբողջ աշխարհում, և տարբեր ազգերին հայտնի է տարբեր անուններով:</span></p>', '<p><span style=\"font-size: 12pt;\"> <span style=\"font-size: 14pt;\">  </span></span></p>\r\n<h1 class=\"b-material-head__title\">В России с 2018 года объявлен запрет на анонимов в мессенджерах</h1>', '<p>Live updates as Sam Allardyce prepares to finalise terms to become new Everton boss, plus news of Alan Pardew\'s appointment at West Brom.</p>', '3803yarny-sad.jpg', 3, 0, 'cognac', 'Կոնյակ', 'Коньяк', 'Cognac', ''),
(8, 'Գինի', 'Вино', 'Wine', '', '<p>   <span style=\"font-size: 14pt;\">Несмотря на то, что виноделием в Армении занимаются более 6000 лет, во всем мире известен армянский коньяк, а вино уступает ему. И чтобы исправить это, компания «Шато-Арно» занимается производством высококачественного вина. Вино самый древний напиток, который известен людям. Оно распространено по всему свету, и разным народам известно под разными именами.</span></p>', '<p>ENGLISH ipsum dolor sit amet, consectetur adipisicing elit. Culpa accusamus excepturi nulla vero illo, minima laborum laboriosam necessitatibus expedita non, labore accusantium aperiam a temporibus incidunt quisquam impedit? Esse, aliquid.</p>', '', 3, 0, 'wine', 'Գինի', 'Вино', 'Wine', ''),
(9, 'Օղի', 'Водка', 'Vodka', '<p>ARMENIAN ipsum dolor sit amet, consectetur adipisicing elit. Culpa accusamus excepturi nulla vero illo, minima laborum laboriosam necessitatibus expedita non, labore accusantium aperiam a temporibus incidunt quisquam impedit? Esse, aliquid.</p>', '<p><span style=\"font-size: 14pt;\">   Несмотря на то, что виноделием в Армении занимаются более 6000 лет, во всем мире известен армянский коньяк, а вино уступает ему. И чтобы исправить это, компания «Шато-Арно» занимается производством высококачественного вина. Вино самый древний напиток, который известен людям. Оно распространено по всему свету, и разным народам известно под разными именами.</span></p>', '<p>ENGLISH ipsum dolor sit amet, consectetur adipisicing elit. Culpa accusamus excepturi nulla vero illo, minima laborum laboriosam necessitatibus expedita non, labore accusantium aperiam a temporibus incidunt quisquam impedit? Esse, aliquid.</p>', '1021yarny-sad.jpg', 3, 0, 'vodka', 'Օղի', 'Водка', 'Vodka', '');

-- --------------------------------------------------------

--
-- Структура таблицы `menuslide`
--

CREATE TABLE `menuslide` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `arm_paragraph` varchar(255) NOT NULL,
  `rus_paragraph` varchar(255) NOT NULL,
  `eng_paragraph` varchar(255) NOT NULL,
  `arm_text` text NOT NULL,
  `rus_text` text NOT NULL,
  `eng_text` text NOT NULL,
  `alt` varchar(255) NOT NULL,
  `parent_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menuslide`
--

INSERT INTO `menuslide` (`id`, `image`, `arm_paragraph`, `rus_paragraph`, `eng_paragraph`, `arm_text`, `rus_text`, `eng_text`, `alt`, `parent_id`) VALUES
(53, '9256images.jpg', '', '', '', '<p>sdfsdfsdfsdfsdd</p>', '', '', '', '7');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(110) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `link`, `image`, `alt`) VALUES
(21, 'http://example.com/', '8715-images.jpg', 'partners');

-- --------------------------------------------------------

--
-- Структура таблицы `slide`
--

CREATE TABLE `slide` (
  `id` int(110) NOT NULL,
  `image` varchar(255) NOT NULL,
  `arm_paragraph` varchar(255) NOT NULL,
  `rus_paragraph` varchar(255) NOT NULL,
  `eng_paragraph` varchar(255) NOT NULL,
  `arm_text` text NOT NULL,
  `rus_text` text NOT NULL,
  `eng_text` text NOT NULL,
  `alt` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slide`
--

INSERT INTO `slide` (`id`, `image`, `arm_paragraph`, `rus_paragraph`, `eng_paragraph`, `arm_text`, `rus_text`, `eng_text`, `alt`, `link`, `video`) VALUES
(1, '661-yarny-sad.jpg', 'ԲԱՐԻ ԳԱԼՈՒՍՏ ՄԵՐ ԸՆԿԵՐՈՒԹՅՈՒՆ', 'Добро пожаловать в нашу компанию', 'WELCOME TO OUR COMPANY ', '<p>՛՛Շատո-Առնո՛՛ գինու և կոնյակի գործարանը զբաղվում է Հայաստանում գինու և կոնյակի արտադրությամբ: </p>\r\n<p>Ընկերության արտադրանքը համարավում է յուրահատուկ և ՛՛հայկական կոնյակ՛՛ բրենդի իմիջի կրող:</p>', '<h1 class=\"b-material-head__title\">В России с 2018 года объявлен запрет на анонимов в мессенджерах</h1>\r\n<p>к».</p>', '<p>http://www.skysports.com/football</p>', 'Lorem Ipsum', '', ''),
(2, '9103-yarny-sad.jpg', 'ԲԱՐԻ ԳԱԼՈՒՍՏ ՄԵՐ ԸՆԿԵՐՈՒԹՅՈՒՆ', 'Добро пожаловать в нашу компанию', 'WELCOME TO OUR COMPANY', '<p>՛՛Շատո-Առնո՛՛ գինու և կոնյակի գործարանը զբաղվում է Հայաստանում գինու և կոնյակի արտադրությամբ: </p>\r\n<p>Ընկերության արտադրանքը համարավում է յուրահատուկ և ՛՛հայկական կոնյակ՛՛ բրենդի իմիջի կրող:</p>', '<p>Винно-коньячный завод ООО “Шато-Арно” занимается производством вина и коньяка в Армении.</p>\r\n<p>Коньяки компании ООО «Шато-Арно»  являются аутентичными и поддерживают имидж бренда «армянский коньяк».</p>', '<p>http://www.skysports.com/football</p>', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboutgallery`
--
ALTER TABLE `aboutgallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `homeblogfirst`
--
ALTER TABLE `homeblogfirst`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `homeblogsecond`
--
ALTER TABLE `homeblogsecond`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `homeblogthird`
--
ALTER TABLE `homeblogthird`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menuslide`
--
ALTER TABLE `menuslide`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboutgallery`
--
ALTER TABLE `aboutgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT для таблицы `homeblogfirst`
--
ALTER TABLE `homeblogfirst`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `homeblogsecond`
--
ALTER TABLE `homeblogsecond`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `homeblogthird`
--
ALTER TABLE `homeblogthird`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `menuslide`
--
ALTER TABLE `menuslide`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
