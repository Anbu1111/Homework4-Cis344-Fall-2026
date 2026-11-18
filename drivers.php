<?php
require "db.php";

$stmt = $conn->query("SELECT * FROM drivers ORDER BY car_number");
$drivers = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Drivers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Drivers Signed Up</h1>
    <p class="links"><a href="index.php">Sign Up</a> | <a href="drivers.php">See Drivers</a></p>

    <table>
        <tr>
            <th>#</th>
            <th>Driver</th>
            <th>Car</th>
            <th>Class</th>
        </tr>
        <?php foreach ($drivers as $d) { ?>
        <tr>
            <td><?php echo htmlspecialchars($d["car_number"]); ?></td>
            <td><?php echo htmlspecialchars($d["driver_name"]); ?></td>
            <td><?php echo htmlspecialchars($d["car"]); ?></td>
            <td><?php echo htmlspecialchars($d["race_class"]); ?></td>
        </tr>
        <?php } ?>
    </table>

    <p>Total drivers: <?php echo count($drivers); ?></p>
</body>
</html>
