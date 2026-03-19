<?php
// class Person{
//     public $name;
//     public $age;
//     public function __construct($name, $age){
//         $this->name=$name;
//         $this->age=$age;
//     }
//     public function showInfo(){
//         echo "Name: $this->name, Age: $this->age";

//     }


// }
// class Gech{
//     public $field;
//     public function __construct($field){
//         $this->field=$field;

//     }
//     public function showGetch(){
//         echo "Field: $this->field";
//     }
    
// }


// $gech=new Gech("software engineering");
// $gech->showGetch();


// // $person1=new Person("Getbalew", 20);
// // $person1->showInfo();
class Student{
    public $name;
    public $dept;
    public function __construct($name,$dept){
        $this->name=$name;
        $this->dept=$dept;
    }
    public function __destruct(){
        echo "These is called when tehe objects re destroyed as well";
    }
   
    public function showStudent(){
        echo "Name:$this->name,Dept:$this->dept";

    }
}
$student1= new Student("Getabalew kemaw","Software Engineering");
$student1->showStudent();
?>
