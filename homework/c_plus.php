<?php
// c+ = Open file for reading and writing without truncating the file.

$file = fopen("cplus.txt", "c+") or die("Unable to open file.");
fwrite($file, "Written using c+ mode\n");
rewind($file);
echo fread($file, filesize("cplus.txt"));
fclose($file);
?>