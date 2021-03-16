1. Вложенный запрос
SELECT
    `fio`
FROM
    `vedomost`
WHERE
        `zp` =(
        SELECT
            MAX(`zp`)
        FROM
            `vedomost`
    )
2.Найти человека укоторого самая малая з-п

SELECT
    `fio`
FROM
    `vedomost`
WHERE
        `zp` =(
        SELECT
            MIN(`zp`)
        FROM
            `vedomost`
    )
3. Найти человека у кого з-п выше среднего


SELECT
    `fio`
FROM
    `vedomost`
WHERE
        `zp` >(
        SELECT
            AVG(`zp`)
        FROM
            `vedomost`
    )

4. Кол-во людей в каждом отделе
SELECT `otdel`,COUNT(*)
FROM vedomost
GROUP BY `otdel`

5. Кол-во людей в отделе бухгалтерия
SELECT
    `otdel`,
    COUNT(*)
FROM
    vedomost

WHERE
        `otdel` = `бухгалтерия`
GROUP BY
    `otdel`

6. Выводит кол-во человек в каждом отделе, если в отделе работает два и более человека
SELECT
    `otdel`,
    COUNT(*)
FROM
    vedomost
GROUP BY
    `otdel`
HAVING COUNT(*)>=2
7.Найти среднюю з-п в каждом отделе

SELECT
    `otdel`,
    AVG(`zp`)
FROM
    vedomost
GROUP BY
    `otdel`


8.
SELECT
    `otdel` AS `отдел`,
    AVG(`zp`) AS `зарплата`
FROM
    vedomost
GROUP BY
    `otdel`
9. Min  Max в каждом отделе найти
SELECT
    `otdel` AS `отдел`,
    MIN(`zp`)  AS `Минимальная зарплата`,MAX(`zp`) AS `Максимальная зарплата`
FROM
    vedomost
GROUP BY
    `otdel`
10. Найти максимальную з-п в отделах где работает больше одного человека
SELECT
    `otdel` AS `отдел`,
    MAX(`zp`) AS `Максимальная зарплата`
FROM
    vedomost
GROUP BY
    `otdel`
HAVING COUNT(*)>=1

11. Cколько продавцов в каждом городе

12 . Сколько продавцов вкаждом городе
SELECT
    `CITY`,COUNT(*)
FROM
    `salespeople`
GROUP BY
    `CITY`

    13** . Сколько клиентов вкаждом городе
SELECT
    `CITY`,
    сount(*)
FROM
    `customers`
GROUP BY
    `CITY`
    14 . Продавец у которого самые маленькие комиссионные



    15 . Найти покупателя с самым высоким рейтингом
SELECT *
FROM `customers`
WHERE `RATING`=(SELECT MAX(`RATING`) FROM customers)


    16 . Найти клиента у которого фамилия заканчивается на букву s


SELECT *
FROM customers
WHERE CNAME LIKE "%s"

    17 . Вывести клиентов с номерами 2002 2006 2008
SELECT
    *
FROM
    `customers`
WHERE
        `CNUM` IN (2002,2006,2008)
    16 . Найти клиента из городов берлин лондон рим


SELECT
    *
FROM
    `customers`
WHERE
        `CITY` IN ("London", "Berlin", "Rome")

    17 . Найти клиента c рейтингом от 150 до 250

SELECT
    *
FROM
    `customers`
WHERE
    `RATING` BETWEEN 150 and 250

    18 . Найти продавца который обслужил самый большой заказ


SELECT
    SNAME
FROM
    salespeople
WHERE
        SNUM =(
        SELECT
            `SNUM`
        FROM
            orders
        WHERE
                `AMT` =(
                SELECT
                    MAX(`AMT`)
                FROM
                    orders
            )
    )

    19 . Найти все заказы клиента по имени Grass


SELECT
    *
FROM
    `orders`
WHERE
        CNUM =(
        SELECT
            CNUM
        FROM
            `customers`
        WHERE
                cname = "Grass"
    )