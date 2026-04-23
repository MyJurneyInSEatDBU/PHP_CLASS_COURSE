<?php

$file = "employees.json";
$data = [
    "employees" => [
        ["firstName" => "Getabalew", "lastName" => "Kemaw"],
        ["firstName" => "Habtamu", "lastName" => "Shewamene"],
        ["firstName" => "Peter", "lastName" => "Jones"]
    ]
];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);


if ($jsonData === false) {
    die("Error: JSON encoding failed.");
}
echo $jsonData;
$result = file_put_contents($file, $jsonData, LOCK_EX);

if ($result === false) {
    die("Error: Failed to write file.");
}
echo "Data successfully written to $file";
?>