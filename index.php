<?php
    $values[0] = "UTC";
    $dt = new DateTime();
    if (isset($_POST['submit'])) {
        $place_timezone = $_POST['time'];
        $values = explode("|", $place_timezone);
        $dt = new DateTime("now", new DateTimeZone($values[1]));
    }



?>

<!doctype html>
<html lang="en">
    <head>

    </head>
    <body>
        <h1 style="text-align: center; size: 50px; font-weight: 700;">WORLD CITY TIMES</h1>
        <h2>Select a City</h2>
        <form action="index.php" method="POST">
            <input type="radio" name="time" value="San Francisco|America/Los_Angeles">
            <label>San Francisco</label><br>

            <input type="radio" name="time" value="Los Angeles|America/Los_Angeles">
            <label> Los Angeles</label><br>

            <input type="radio" name="time" value="New York|America/New_York">
            <label>New York</label><br>

            <input type="radio" name="time" value="Miami|America/New_York">
            <label>Miami</label><br>

            <input type="radio" name="time" value="Denver|America/Denver">
            <label>Denver</label><br>

            <input type="submit" name="submit">
        </form>

<!--    echo "The time in " . $values[0] . " is " . $dt->format('H:i:s') . " on " . $dt->format('m/d/Y');-->

        <h1>The time in <?php echo $values[0];?> is <?php echo $dt->format('H:i:s'); ?> on <?php echo $dt->format('m/d/Y'); ?></h1>

    </body>
</html>
