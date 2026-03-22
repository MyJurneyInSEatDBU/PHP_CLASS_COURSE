<?php

echo "<h2>Q3: Sum of Array Elements</h2>";
$num1 = [13, 5, 7, 2];

$sum = 0;
foreach ($num1 as $num) {
    $sum += $num;
}
echo "Sum: " . $sum; // 27

echo "<hr>";



echo "<h2>Q4: Min and Max in Array</h2>";
$nums = [12, 5, 78, -3, 42];

$min = $nums[0];
$max = $nums[0];

foreach ($nums as $n) {
    if ($n < $min) {
        $min = $n;
    }
    if ($n > $max) {
        $max = $n;
    }
}

echo "Minimum: " . $min . "<br>";
echo "Maximum: " . $max;

echo "<hr>";



echo "<h2>Q5: Person Info</h2>";

$person = [
    "name" => "Gech",
    "age" => 22,
    "email" => "gech@example.com"
];

echo "My name is " . $person["name"] . 
     ", I am " . $person["age"] . 
     " years old, and my email is " . $person["email"] . ".";

echo "<hr>";



echo "<h2>Q6: Multiply until >= 30 (do-while)</h2>";

$num = 2;

do {
    echo $num . " ";
    $num *= 2;
} while ($num < 30);

echo "<hr>";



echo "<h2>Q7: Students Average & Pass/Fail</h2>";

$students = [
    ["name" => "Kalab", "scores" => [70, 80, 90]],
    ["name" => "Sara", "scores" => [50, 40, 55]],
    ["name" => "John", "scores" => [60, 65, 70]]
];

foreach ($students as $student) {
    $scores = $student["scores"];
    $sum = 0;

    foreach ($scores as $score) {
        $sum += $score;
    }

    $average = $sum / count($scores);

    if ($average >= 60) {
        $status = "Pass";
    } else {
        $status = "Fail";
    }

    echo $student["name"] . 
         " - Average: " . $average . 
         " - " . $status . "<br>";
}

?>