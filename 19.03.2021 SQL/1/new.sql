1.Запрос на обьединение двух таблиц
SELECT
    *
FROM
    `orders`,
    `salespeople`
WHERE `orders`.`SNUM`=`salespeople`.SNUM



SELECT
    *
FROM
    `orders`,
    `salespeople`
WHERE `orders`.`SNUM`=`salespeople`.SNUM AND `alespeople`.City='London'

2.Вывести данные о клиентах и их заказах
SELECT
    *
FROM
    `orders`,
    `salespeople`
WHERE `ustomers`SNUM=`orders`.`SNUM`
3. Клиент по фамилии Клеменс
SELECT
    *
FROM
    `orders`, `customers`
WHERE orders.CNUM = `customers`.CNUM AND `customers`.CNAME = 'Clemens'

4. Общая сумма заказов по каждому продавцу
SELECT
    salespeople.SNAME,sum(orders.AMT)
FROM
    `orders`,
    `salespeople`
WHERE
        orders.SNUM = salespeople.SNUM
GROUP BY
    salespeople.SNAME

5.Найти общую сумму заказов для каждого клиента
SELECT
    customers.CNAME,
    SUM(orders.AMT)
FROM
    orders,
    customers
WHERE
        orders.CNUM = customers.CNUM
GROUP BY
    customers.CNAME

6. Отсортировать пофамильно еще с предыдущего
SELECT
    `customers`.CNAME,
    SUM(orders.`AMT`)
FROM
    `orders`,
    `customers`
WHERE
        `orders`.`CNUM` = `customers`.`CNUM`
GROUP BY
    `customers`.CNAME
ORDER BY
    `customers`.CNAME

7. Найти среднюю сумму заказов клиентов из каждого города

SELECT
    customers.CITY,
    AVG(orders.AMT)
FROM
    `orders`,
    `customers`
WHERE
        orders.CNUM = customers.CNUM
GROUP BY
    customers.CITY

8. Отсортировать по сумме заказов еще

SELECT
    customers.CITY,
    AVG(orders.AMT)
FROM
    `orders`,
    `customers`
WHERE
        orders.CNUM = customers.CNUM
GROUP BY
    customers.CITY
ORDER BY
    2

9. Связать три таблицы
SELECT
    *
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM` AND `customers`.`CNUM` = `orders`.`CNUM`

10. Средний рейтинг покупателей для каждого продавца

SELECT
    salespeople.SNAME,
    AVG(customers.RATING)
FROM
    `orders`,
    `customers`,
    `salespeople`
WHERE
        orders.CNUM = customers.CNUM AND orders.SNUM = salespeople.SNUM
GROUP BY
    salespeople.SNAME

11. Количество заказов у каждого продавца

SELECT
    salespeople.SNAME,
    COUNT(orders.AMT)
FROM
    `orders`,
    `salespeople`
WHERE
        orders.SNUM = salespeople.SNUM
GROUP BY
    salespeople.SNAME

12. Найти продавцов у которых сумма заказов больше или равна средней сумме заказов из Лондона

--Средняя сумма заказов в Лондоне(первая часть)
SELECT

    AVG(orders.AMT)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM `= `salespeople`.`SNUM` AND CITY='London'

GROUP BY
    `CITY`
Решение задачи 12

SELECT
    SNAME,
    SUM(AMT)
FROM
    `orders`,
    `salespeople`
WHERE
        `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY
    `salespeople`.`SNAME`
HAVING
        SUM(amt) >=(
        SELECT
            AVG(AMT)
        FROM
            `orders`,
            `salespeople`
        WHERE
                `orders`.`SNUM` = `salespeople`.`SNUM` AND `CITY` = "London"
        GROUP BY
            `CITY`
    )


13. Найти общую сумму заказов на каждую дату

SELECT
    `ODATE`,
    SUM(AMT)
FROM
    `orders`
GROUP BY
    `ODATE`

14. Найти доход каждого продавца

SELECT
    salespeople.SNAME,
    SUM(orders.AMT *salespeople.`COMM`)
FROM
    `orders`,
    `salespeople`
WHERE
        orders.SNUM = salespeople.SNUM
GROUP BY
    salespeople.SNAME
ORDER BY
    2


 15. Подсчитать количество клиентов у каждого продавца

SELECT
    salespeople.SNUM AS 'Имя продавца',
    COUNT(customers.CNUM) AS 'Кол-во клиентов'
FROM
    `customers`,
    `salespeople`,
    `orders`
WHERE
        orders.CNUM = customers.CNUM AND orders.SNUM = salespeople.SNUM
GROUP BY
    salespeople.SNUM

16. Сколько дал заработать продавцам каждый клиент?

SELECT
    `orders`.CNUM,
    CNAME,
    SUM(AMT * `COMM`) AS "SUMM"
FROM
    `orders`,
    `salespeople`,
    `customers`
WHERE
        orders.CNUM = customers.CNUM AND orders.SNUM = salespeople.SNUM
GROUP BY
    `orders`.`CNum`,
    `CNAME`

17. Вывести список продавцов обслуживших заказ у клиентов с самым высоким рейтингом

SELECT DISTINCT
    `salespeople`.SNAME
FROM
    `orders`,
    `customers`,
    `salespeople`
WHERE
        orders.CNUM = customers.CNUM AND orders.SNUM = salespeople.SNUM AND rating =(
    SELECT
        MAX(`RATING`)
    FROM
        `customers`
)

