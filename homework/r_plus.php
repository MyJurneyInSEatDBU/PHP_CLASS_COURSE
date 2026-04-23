<?php
// r+ = Open file for reading and writing; file must exist.

$file = fopen("sample.txt", "r+") or die("File does not exist.");
fwrite($file, "\nAdded using r+ mode");
fclose($file);
echo "Updated using r+ mode";
?>