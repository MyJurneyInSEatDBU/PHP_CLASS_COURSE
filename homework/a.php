<?php
// a = Open file for writing only; appends data to end of file.

$file = fopen("append.txt", "a") or die("Unable to open file.");
fwrite($file, "New line using a mode\n");
fclose($file);
echo "Data appended successfully";
?>