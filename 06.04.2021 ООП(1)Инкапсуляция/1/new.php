<?php
// метод==функция
// поле==переменная

//строгая проверка типов данных
declare(strict_types=1);

//чертеж по которому будет создаваться экземпляр класса - (объект)
class Person
{
    private float $age; //публичное - область видимости
    private string $name;// private означает что доступ к этому свойству возможен только из методов класса

//функция которая выполняется при создании экземпляра класса
    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;

    }

    public function intro()
    {
        return "Меня зовут $this->name, мне  $this->age лет.";
    }
}

//создается экземпляр класса(объект) - Person с помощью ключевого слова new
$man = new Person(45.5, "Vasiliy");
//var_dump($man);
//print_r($man);
//echo $man->age;// обращение к объекту
//echo $man->name;
echo $man->intro();
