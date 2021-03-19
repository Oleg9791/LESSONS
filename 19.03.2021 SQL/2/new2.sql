SELECT
    *
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`

-- Объединили три таблицы через справочную целостность
SELECT
    *
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM` AND `customers`.`CNUM` = `orders`.`CNUM`

--Данные о продовцах и заказах из Лондона
SELECT
    *
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM` AND `salespeople`.`CITY` = 'London'

--Выводит данные клиента по фамилии 'Clemens'
SELECT
    *
FROM
    `customers`,
    `orders`
WHERE
        `customers`.`SNUM` = `orders`.`SNUM` AND `customers`.`CNAME` = 'Clemens'

--Общая сумма заказов для каждого продавца
SELECT
    `salespeople`.`SNAME`,
    SUM(`orders`.`AMT`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`

--Общая сумма заказов для каждого клиента
SELECT
    `customers`.`CNAME`,
    SUM(`orders`.`AMT`)
FROM
    `orders`,
    `customers`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM`
GROUP BY
    `customers`.`CNAME`
ORDER BY
    `customers`.`CNAME`

--Найти среднюю сумму заказов клиентов из каждого города
SELECT
    `customers`.`CITY`,
    AVG(`orders`.`AMT`)
FROM
    `orders`,
    `customers`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM`
GROUP BY
    `customers`.`CITY`
ORDER BY
    `customers`.`CITY`

--2-это сортировка по orders.`AMT`
SELECT
    `customers`.`CITY`,
    AVG(`orders`.`AMT`)
FROM
    `orders`,
    `customers`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM`
GROUP BY
    `customers`.`CITY`
ORDER BY
    2
--Средний рейтинг покупателей для каждого продавца
SELECT
    `salespeople`.`SNAME`,
    AVG(`customers`.`RATING`)
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`

--Количество заказов у каждого продавца
SELECT
    `salespeople`.`SNAME`,
    COUNT(`orders`.`AMT`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`

--Средняя сумма заказов из Лондона
SELECT
    AVG(`AMT`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM` AND `CITY` = "London"
GROUP BY
    `CITY`

--Найти продавцов у которых сумма заказов больше или равна средней сумме заказов из Лондона
SELECT
    `SNAME`,
    SUM(`AMT`)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`
HAVING
        SUM(`AMT`) >=(
        SELECT
            AVG(`AMT`)
        FROM
            `orders`,
            `salespeople`
        WHERE
                `orders`.`SNUM` = `salespeople`.`SNUM` AND `CITY` = "London"
        GROUP BY
            `CITY`
    )

--Найти общую сумму заказов на каждую дату
SELECT
    `ODATE`,
    SUM(`AMT`)
FROM
    `orders`
GROUP BY
    `ODATE`

--Найти доход каждого продавца
SELECT
    `salespeople`.`SNAME` as "Имя продавца",
    SUM(`AMT` * `COMM`) as "Доход"
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`
ORDER BY
    `SUM`(`AMT` * `COMM`)
    DESC
--Подсчитать количество клиентов у каждого продавца
SELECT
    `salespeople`.`SNUM` AS 'Номер продавца',
    COUNT(`customers`.`CNUM`) AS 'Кол-во клиентов'
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM` AND `customers`.`CNUM` = `orders`.`CNUM`
GROUP BY
    `salespeople`.`SNUM`

--Сколько дал заработать продавцам каждый клиент?
SELECT
    `orders`.`CNUM`,
    `CNAME`,
    SUM(`AMT` * `COMM`) AS "SUMM"
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `orders`.`CNUM`,
    `CNAME`

--Вывести список продавцов обслуживших заказ у клиентов с самым высоким рейтингом
SELECT DISTINCT
    `salespeople`.`SNAME`
FROM
    `orders`,
    `customers`,
    `salespeople`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM` AND `orders`.`SNUM` = `salespeople`.`SNUM` AND `RATING` =(
    SELECT
        MAX(`RATING`)
    FROM
        `customers`
)