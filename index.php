<?php
include_once "lib/classes/Tovar.php";

$test_product = new Tovar(0,"Мышка",250,"так себе мышь",1,time());
echo $test_product->getinfo();
//phpinfo();

//Вопрос 5
class A {
    public function foo() {
    static $x = 0;
    echo "<br>".++$x;
    }
    }
    $a1 = new A();//x=0 
    $a2 = new A();//x=0
    //Переменная x статическая, то есть общая для всех потомков класса
    $a1->foo();//Общая переменная класса x увеличена на 1,x=1
    $a2->foo();//После предыдущего вызова x увеличилась еще на 1, x=2
    $a1->foo();//После предыдущего вызова x увеличилась еще на 1, x=3
    $a2->foo();//После предыдущего вызова x увеличилась еще на 1, x=4

//Вопрос 6

//Вопрос 7