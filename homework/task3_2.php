<?php
// r = Open file for reading only; file must exist.

$file = fopen("sample.txt", "r") or die("File does not exist.");
echo fread($file, filesize("sample.txt"));
fclose($file);
?>