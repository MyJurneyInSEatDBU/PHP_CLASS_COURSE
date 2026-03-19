<?php
class Fruit{
    public $name;
    protected $color;
    private $price;

    public function showInfo(){
        echo "Name: $this->name, Color: $this->color, Price: $this->price";
    }

}
class Banana extends Fruit{
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }
}
$fruit1= new Fruit();
$fruit1->name="Apple";
$ban= new Banana();
$ban->setColor("Yellow");

$ban->showInfo();
//  $fruit1->color="Red";
//   // this will give an error because color is protected
// $fruit1->price=10;

// $fruit1->showInfo();


?>