<?php
// a+ = Open file for reading and writing; appends to end of file.

$file = fopen("append_plus.txt", "a+") or die("Unable to open file.");
fwrite($file, "Line added using a+ mode\n");
rewind($file);
echo fread($file, filesize("append_plus.txt"));
fclose($file);
?>