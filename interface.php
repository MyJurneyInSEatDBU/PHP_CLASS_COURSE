<?php
// interafce in php
//  here is the details about what is interface in php
//  it is a blueprint of a class that defines a set of methods that a class must implement.
interface Shape{
    public function area();
    public function perimeter();
 
}
class Buddy{
    public function display(){
        echo "This is the display method from the Buddy class";
    }
}
class Circle   extends  Buddy implements Shape{

    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function area(){
        return pi()*pow($this->radius,2);
    }
     public function perimeter(){
        return 2*pi()*$this->radius;
    } 

}
$circle=new Circle(5);
echo "Area of the circle: ".$circle->area()."<br>";
echo "Perimeter of the circle: ".$circle->perimeter()."<br>";
$circle->display();


?>