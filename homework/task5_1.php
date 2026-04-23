<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_farm";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* 2. Insert sample sensor data */
$plot_id = "P1";
$temp = 26.5;
$humidity = 65;
$soil = 42;

$sql = "INSERT INTO sensor_data (plot_id, temperature, humidity, soil_moisture)
VALUES ('$plot_id', $temp, $humidity, $soil)";

mysqli_query($conn, $sql);

/* 3. Latest 10 readings */
echo "<h2>Latest 10 Sensor Readings</h2>";

$result = mysqli_query($conn, "SELECT * FROM sensor_data ORDER BY timestamp DESC LIMIT 10");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Plot</th>
<th>Temperature</th>
<th>Humidity</th>
<th>Soil Moisture</th>
<th>Time</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['plot_id']}</td>
        <td>{$row['temperature']}</td>
        <td>{$row['humidity']}</td>
        <td>{$row['soil_moisture']}</td>
        <td>{$row['timestamp']}</td>
    </tr>";
}

echo "</table>";

/* 4. Average values per plot */
echo "<h2>Average Values per Plot</h2>";

$avg = mysqli_query($conn, "
    SELECT plot_id,
           AVG(temperature) AS avg_temp,
           AVG(humidity) AS avg_humidity,
           AVG(soil_moisture) AS avg_soil
    FROM sensor_data
    GROUP BY plot_id
");

echo "<table border='1'>
<tr>
<th>Plot</th>
<th>Avg Temperature</th>
<th>Avg Humidity</th>
<th>Avg Soil Moisture</th>
</tr>";

while ($row = mysqli_fetch_assoc($avg)) {
    echo "<tr>
        <td>{$row['plot_id']}</td>
        <td>{$row['avg_temp']}</td>
        <td>{$row['avg_humidity']}</td>
        <td>{$row['avg_soil']}</td>
    </tr>";
}

echo "</table>";

mysqli_close($conn);

?>