<?php

class SmartFarm {

    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "smart_farm");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    /* Insert sensor data */
    public function insertData($plot, $temp, $hum, $soil) {
        $sql = "INSERT INTO sensor_data (plot_id, temperature, humidity, soil_moisture)
                VALUES ('$plot', $temp, $hum, $soil)";
        $this->conn->query($sql);
    }

    /* Get latest 10 readings */
    public function getLatest() {
        return $this->conn->query("SELECT * FROM sensor_data ORDER BY timestamp DESC LIMIT 10");
    }

    /* Get averages per plot */
    public function getAverages() {
        return $this->conn->query("
            SELECT plot_id,
                   AVG(temperature) AS avg_temp,
                   AVG(humidity) AS avg_humidity,
                   AVG(soil_moisture) AS avg_soil
            FROM sensor_data
            GROUP BY plot_id
        ");
    }
}

/* Usage */
$farm = new SmartFarm();

/* Insert sample */
$farm->insertData("P1", 27.2, 60, 45);

/* Latest data */
echo "<h2>Latest Readings</h2>";
$result = $farm->getLatest();

echo "<table border='1'>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['plot_id']}</td>
        <td>{$row['temperature']}</td>
        <td>{$row['humidity']}</td>
        <td>{$row['soil_moisture']}</td>
    </tr>";
}
echo "</table>";

/* Averages */
echo "<h2>Averages per Plot</h2>";
$avg = $farm->getAverages();

echo "<table border='1'>";
while ($row = $avg->fetch_assoc()) {
    echo "<tr>
        <td>{$row['plot_id']}</td>
        <td>{$row['avg_temp']}</td>
        <td>{$row['avg_humidity']}</td>
        <td>{$row['avg_soil']}</td>
    </tr>";
}
echo "</table>";

?>