<?php
// x = Create new file for writing; fails if file already exists.

$file = fopen("newfile.txt", "x") or die("File already exists.");
fwrite($file, "Created using x mode");
fclose($file);
echo "New file created";
?>