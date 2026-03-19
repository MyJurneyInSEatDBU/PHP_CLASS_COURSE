<?php

function sayHello($name){
    echo "Hello $name";
}
sayHello("Getbalew kemaw");
function add($num1,$num2){
    return $num1+$num2;
}
// echo add(10,20);

//  pass by value and pass by references
function passByRefs(& $num){
    $num+=10;
    return $num;

}
$num=10;
echo passByRefs($num);
echo $num; 



function mulTwo($a,$b){
    return $a*$b;
}
$val= mulTwo(5,10);
echo "The returened value is : $val"
?>



