<?php
//1 temporary casting
$val=123.5666;
echo (int)$val;
//permanent casting
echo settype($val,"integer");
echo $val;
echo gettype($val);
?>