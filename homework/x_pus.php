<?php
// x+ = Create new file for reading and writing; fails if file exists.

$file = fopen("newfile_plus.txt", "x+") or die("File already exists.");
fwrite($file, "Created using x+ mode");
rewind($file);
echo fread($file, filesize("newfile_plus.txt"));
fclose($file);
?>