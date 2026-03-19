<?php

class Animal{
    public function makeSound(){
        echo "these is the general animal as a whole";
    }
}
class Dog extends Animal{
    public function makeSound(){
        echo "the dog barks";
    }
}

class Cat extends Animal{
    public function makeSound() {
        echo "the cat meows";
        
    }
}
$dog=new Dog();
$dog->makeSound();
$cat=new Cat();
$cat->makeSound();
$animal=new Animal();
$animal->makeSound();
?>