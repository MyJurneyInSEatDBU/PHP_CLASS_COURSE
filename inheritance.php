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

class Car{
    public $speed;
    protected $color;
    private $engine;
    public function __construct($speed,$color,$engine){
        $this->speed=$speed;
        $this->color=$color;
        $this->engine=$engine;
    }
    public function getEngine(){
        return $this->engine;
    }

    public function info()  {
        echo "Speed: $this->speed, Color: $this->color, Engine: $this->getEngine()";

        
    }
}

class Volvo extends Car{
    private $eng1;
  public function __construct($speed,$color,$engine){
    parent::__construct($speed,$color,$engine);
    $this->eng1=$this->getEngine();
  }
  public function showinfo()  {
    echo "Speed: $this->speed, Color: $this->color, Engine: $this->eng1";
  }
}
// $strawberry = new Strawberry("Strawberry", "red", 2.99);
// $strawberry->message();
// $strawberry->intro(); 
$volvo=new Volvo(200,"Red","V8");
$volvo->showinfo();

?>

