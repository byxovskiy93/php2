<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A {

}

$a1 = new A; //Можно вызывать экземпляр класса без(), но только в том случае если у нас не определен метод __construct и мы не передаем в него переменные;
$b1 = new B; //Можно вызывать экземпляр класса без(), но только в том случае если у нас не определен метод __construct и мы не передаем в него переменные;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

//Получем результат 1,1,2,2 так как статические методы и свойства принадлежат классу, а не его экземплярам.
//Тут тоже самое только у нас теперь 2 класса один наследует другой соответственно у нас теперь и 2 статических свойства $x каждый из которых пренадлежит своему классу которые увеличиваются при вызове метода foo;