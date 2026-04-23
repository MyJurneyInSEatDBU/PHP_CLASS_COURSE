<?php
// w+ = Open file for reading and writing; truncates existing content.
$file = fopen("wplus.txt", "w+") or die("Unable to open file.");
fwrite($file, "Created using w+ mode");
rewind($file);
echo fread($file, filesize("wplus.txt"));
fclose($file);
?>