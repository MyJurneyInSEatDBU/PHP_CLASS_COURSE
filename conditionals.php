<?php
$day="A";
switch($day){
    case "A" ;
        echo "monday";
        break;
    case "B";
        echo "TuesDAY";
    default;
       echo "Just another DAY";
    
}
for ($i=0;$i<=5;$i++){
    if($i==2){
        echo "2 is skipped";
        continue;
    }
    echo "Number:$i <br>";
}
// while($i<=3){
//     echo $i;
// }
// do{
//     echo "Number.$x";
//     $x++;

// }while($x<=3);
$arr=["C","C++","PHP"];
foreach($arr as $arrs){
    echo $arrs;
}
$ages=["john"=>35,"kebe"=>"60"];
foreach($ages as $name=>$age){
    echo "$name is $age years old .";
}
$colors=array("green","yellow");
echo $colors[0];
$d=date('m:d:h:t:s');
echo $d;


?>