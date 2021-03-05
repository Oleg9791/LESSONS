-- находит тех у кого  зарплата больше 100 и меньше 420
SELECT *
FROM `vedomost`
WHERE zp >100 and zp <420
-- найти бухгалтерии получают зарплата больше 300
SELECT *
FROM `vedomost`
WHERE  otdel = 'бухгалтерия' and zp>500

--найти всех работников склада и бухгалтерии
SELECT *
FROM `vedomost`
WHERE otdel= 'бухгалтерия' or otdel= 'склад'

--найти зарплата >500 и работает не в бухгалтерии
SELECT *
FROM `vedomost`
WHERE  not otdel= 'бухгалтерия' and zp>500


-- отсортировать по размеру заработной платы
SELECT *
FROM `vedomost`
ORDER BY zp

-- отсортировать по размеру заработной платы в обратном порядке
SELECT *
FROM `vedomost`
ORDER BY zp DESC

-- вывести список работников отсортированный по алфавиту
SELECT *
FROM `vedomost`
ORDER BY fio

-- отсортировать таблицу по отделам и зарплате
SELECT *
FROM `vedomost`
ORDER by otdel,zp

-- по отделам в прямом направлении и по фио в обратном напрвлении
SELECT *
FROM `vedomost`
ORDER by  otdel,fio DESC

-- переименовать поле
SELECT `fio` AS 'name',`zp`
FROM `vedomost`

-- столбец это 'поле' или 'атрибут' ,  а строка называется 'запись' или 'кортеж'

-- все поля таблицы должны называться по русски
SELECT `fio` AS 'фио',`zp` AS 'зп', `otdel` as 'отдел', `nomer` AS 'номер'
FROM `vedomost`

-- зарплата в долларах
SELECT  `fio`,`zp`/ 2.6 AS 'usd'
FROM `vedomost`

-- вывести список работников бухгалтерии и их зарплаты в российских рублях
SELECT`fio`,`otdel`,round (`zp`/.0035,2) AS 'rub'
FROM `vedomost`
WHERE `otdel`='бухгалтерия'



-- вывести список работников  в долларах рублях

SELECT  `fio`,round (`zp`/2.6,2) AS 'usd'
FROM `vedomost`
-- вывести список работников отдел бухгалтерия  в долларах, рублях, евро, белорусские рубли
SELECT `fio`,round(zp/2.6,2) AS 'usd',round(zp/3.1,2) AS 'eur',round(zp/0.035,2) AS 'rur',zp AS `bel`
FROM `vedomost`
WHERE otdel='бухгалтерия'