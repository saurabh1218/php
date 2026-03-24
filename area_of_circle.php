<!DOCTYPE html>
<html>

<head>
    <title>Area of circle</title>
</head>

<body>

    <h2>Area of circle</h2>
    <form method="post">
        <label>Enter Radius</label>
        <input type="number" name="r" value=" "><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $r = $_POST["r"];
        define("PI", 3.14);
        $area = PI * $r * $r;
        echo "<h3>Area of Circle = $area</h3>";
    }
    ?>
</body>

</html>