<?php
class Calculator{
    public function __call($method, $args){
        if($method=="mul"){
            if(count($args)==2){
                return $args[0]* $args[1];
            }
            else if(count($args)==3){
                return $args[0]* $args[1]* $args[2];
            }
            else{
                return  "Invalid number if arguments ";
            }
        }
        else {
            return "$method is not allowd for now as well stay safe 🙌";
        }
    }

    // simulation of method oveloading using the default arguments
    public function subs($a,$b=3,$c=4){
        return $a-$b-$c;

    }
}

$cal=new Calculator();
echo $cal->mul(2,3)."<br>";
echo $cal->mul(2,3,4)."<br>";
echo $cal->subs(10)."<br>";
echo $cal->subs(10,5)."<br>";
echo $cal->subs(10,5,2)."<br>";

?>