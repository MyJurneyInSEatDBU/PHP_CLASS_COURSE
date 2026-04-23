<?php
$file = "data.json";
// check if the file exists or not
if (!file_exists($file)) {
    die("Error: json file not found.");
}
// read the content of the file
$jsonData = file_get_contents($file);
// check if the file was read successfully
if ($jsonData === false) {
    die("Error: Error occurred while reading file.");
}
// decode the json data in to an associative array );and the true->to get an assocative array istead of object
$dataArray = json_decode($jsonData, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error: Invalid JSON format.");
}
// safely access the data and handle missing keys
$name = htmlspecialchars($dataArray['name'] ?? "Not provided");
$age  = htmlspecialchars($dataArray['age'] ?? "Not provided");
$city = htmlspecialchars($dataArray['city'] ?? "Not provided");
// display the data
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "City: $city";
?>