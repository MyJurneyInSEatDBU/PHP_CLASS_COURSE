<?php
class Fruit {
  public $name;   public $color;
  public function __construct($name, $color) {
    $this->name = $name;     $this->color = $color;  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.  the price is ." ;   } }
// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
   private $price;
//   public function __construct($name, $color, $price) {
//     parent::__construct($name, $color);
//     $this->price = $price;
//   }
public function __construct($name,$color,$price){
    parent::__construct($name,$color);
    $this->price=$price;
       }
  public function message() {
    echo "Am I a fruit or a berry?and my price is $this->price";
  } }

$strawberry = new Strawberry("Strawberry", "red", 2.99);
$strawberry->message();
// $strawberry->intro(); 
?>

