<?php
require "db.php";

$driver_name = $_POST["driver_name"];
$email = $_POST["email"];
$car = $_POST["car"];
$car_number = $_POST["car_number"];
$race_class = $_POST["race_class"];

if ($driver_name == "" || $email == "" || $car == "" || $car_number == "" || $race_class == "") {
    echo "Please fill out every box. <a href='index.php'>Go back</a>";
    exit;
}

$sql = "INSERT INTO drivers (driver_name, email, car, car_number, race_class) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$driver_name, $email, $car, $car_number, $race_class]);

header("Location: drivers.php");
?>
