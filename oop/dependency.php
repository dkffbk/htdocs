<?php

interface Animal
{
    public function hello();
}

class Dog implements Animal
{
    public function hello() {
        echo "Dog says woof woof...<br>";
    }
}

class Cat implements Animal
{
    public function hello() {
        echo "Cat says meow meow...<br>";
    }
}

function app(Animal $obj) {
    $obj->hello();
}

app(new Dog);
app(new Cat);