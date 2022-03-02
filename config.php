<?php
$servername = "remotemysql.com";
$username = "uL1ayWPKOh";
$password = "TurxFpmYcr";
$database = "uL1ayWPKOh";
$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
