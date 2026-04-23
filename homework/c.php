<?php
// c = Open file for writing; does not delete existing content.

$file = fopen("c_mode.txt", "c") or die("Unable to open file.");
fwrite($file, "Written using c mode\n");
fclose($file);
echo "Write completed using c mode";
?>