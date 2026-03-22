<?php

use Vtiful\Kernel\Excel;
function divide($a,$b){
    if($b==0){
        throw new Exception("Division by Zero is not allowed");
    }
    return $a/$b;

}
try{
    echo divide(10,"0");
}catch(Exception $e){
    echo "Error while dividing ".$e->getMessage().$e->getCode().$e->getLine().$e->getFile();
}
finally{
    echo "By the way getch is  LIKE  senior Dev";
}




?>