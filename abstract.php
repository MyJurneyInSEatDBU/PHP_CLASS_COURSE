<?php
abstract class Animal{
    abstract public function eat();
    public function sleep(){
        echo "these is not the abtract one is is called by the childcalls it is not the abstract one and the child  can leave with out the detail implementatiins";
    }  
    }

class Cat extends Animal{
    public function eat() : void {
        echo "The cat is eating.";
        
    }

}

abstract class Shape{
    abstract public function area();
    public function display(){
        echo "Notice These is not abstract method:";

    }

}

class Circle extends Shape{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function area(){
        return pi()*pow($this->radius,2);
    }
}
$cir=new Circle(1);
echo "The area of the circle is: ".$cir->area();
$car=new Cat();
$car->eat();



?>