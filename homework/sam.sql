CREATE DATABASE smart_farm;

USE smart_farm;

CREATE TABLE sensor_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plot_id VARCHAR(10) NOT NULL,
    temperature FLOAT NOT NULL,
    humidity FLOAT NOT NULL,
    soil_moisture FLOAT NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);