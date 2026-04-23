<?php

$fileName = "user.json";

$data = [
    "id" => 1,
    "name" => "Aster",
    "role" => "Developer"
];

/* Step 1: Encode JSON safely */
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
if ($jsonData === false) {
    die("JSON encoding failed.");
}

/* Step 2: Open file safely */
$file = fopen($fileName, "w");
if ($file === false) {
    die("Unable to open file.");
}


/* Step 3: Write data */
$result = fwrite($file, $jsonData);
if ($result === false) {
    die("Failed to write data.");
}

fclose($file);

echo "Data written successfully.";
?>