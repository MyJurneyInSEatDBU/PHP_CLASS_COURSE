<?php

// references in php are like giving a  secound name (alias)
$name="Gech";
$antName=&$name;
$antName="Kebe";
echo $antName;
echo $name;
?>