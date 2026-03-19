<?php
require('namespace.php');
$student1=new School\Stud();
$student1->message();

// method 3 of accessing these as well
use School\Stud;
$stud1=new Stud();
$stud1->message();

// method 3 of accesing another files as well
use School\Stud as S;
$st=new S();
$st->message();

?>