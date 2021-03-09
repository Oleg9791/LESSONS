1. Cоздать таблицу
CREATE TABLE `ved` (
                       `id` int NOT NULL,
                       `fio` varchar(50) COLLATE utf8_bin DEFAULT NULL,
                       `zp` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ved`
--
ALTER TABLE `ved`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ved`
--
ALTER TABLE `ved`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;




INSERT INTO `ved`(`fio`, `zp`)
VALUES ('Жуков Сергей Антонович',300);
2.Увеличить зарплату id=5(5-й позиции)

UPDATE ved SET zp=900
WHERE id=5;

3.Всем у кого з.п. < 500 руб увеличить з-п на 10%

UPDATE ved set zp=zp*10/100 +zp
WHERE zp<500;

4. Удалить строку

SELECT * FROM `ved` WHERE id=6


5.Удалить таблицу

DROP table ved;
6.Найти по первой букве в фамилии ( Буква П )

SELECT *
FROM `vedomost`
WHERE `fio` LIKE 'П%'

7. % - любое количество любых символов

_ - один любой символ
8. Найти всех у кого отчество Петович

SELECT *
FROM `vedomost`
WHERE `fio` LIKE '%Петрович'

9. Чтоб в фамилии оканчание было на 'ов'
SELECT *
FROM `vedomost`
WHERE `fio` LIKE '%ов% % %'

10. Вывести список у кого з-п от 300 до 800

SELECT *
FROM `vedomost`
WHERE zp BETWEEN 300 and 800
 2 -й вариант
SELECT *
FROM `vedomost`
WHERE `zp`>=300 and `zp`<=800

11. Вывести работников с табельным номером 2,4,5

SELECT *
FROM `vedomost`
WHERE nomer=2 or nomer=4 or nomer=6

или

SELECT *
FROM `vedomost`
WHERE `nomer` IN (2,4,5);

12. Вывести работников склада и бухгалтерии
SELECT *
FROM `vedomost`
WHERE `otdel` IN ('склад','бухгалтерия');
13. з-п д б ровно  400 и ровно 100







15. Общая зарплата

SELECT sum(`zp`)  as 'Общая зарплата'
FROM `vedomost`
16 .Минимальная зарплата

SELECT sum(`zp`), MIN(`zp`),MAX(`zp`),AVG(`zp`),COUNT(`zp`)
или
SELECT
    SUM(`zp`) AS "Вся ЗП",
    MIN(`zp`) AS "Мин ЗП",
    MAX(`zp`) AS "Макс ЗП",
    AVG(`zp`) AS "Средняя ЗП",
    COUNT(`zp`) AS "К-во ЗП"
FROM
    `vedomost`

    или

FROM `vedomost`

или для count

SELECT
    COUNT(*) AS 'Кол-во зарплат'
FROM
    `vedomost`
17.



