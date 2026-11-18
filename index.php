<!DOCTYPE html>
<html>
<head>
    <title>Race Day Sign-Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Race Day Sign-Up</h1>
    <p class="links"><a href="index.php">Sign Up</a> | <a href="drivers.php">See Drivers</a></p>

    <form action="save.php" method="post">
        <label>Driver Name</label>
        <input type="text" name="driver_name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Car</label>
        <input type="text" name="car" required>

        <label>Car Number</label>
        <input type="number" name="car_number" min="1" max="99" required>

        <label>Race Class</label>
        <select name="race_class" required>
            <option value="">Pick one</option>
            <option value="Street">Street</option>
            <option value="Drift">Drift</option>
            <option value="Drag">Drag</option>
            <option value="Track">Track</option>
        </select>

        <button type="submit">Sign Me Up!</button>
    </form>
</body>
</html>
