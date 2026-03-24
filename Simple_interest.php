<!DOCTYPE html>
<html>

<head>
    <title>Simple Interest Calculator</title>
</head>

<body>

    <h2>Simple Interest Calculator</h2>

    <form method="POST">
        <label> Enter principle amount</label>
        Principal: <input type="number" name="principal" value=" "><br><br>
        <label> Enter Time</label>
        Time (in years): <input type="number" name="time" value=" "><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $principal = $_POST['principal'];
        $time = $_POST['time'];
        define("RATE", 5);
        $simple_interest = ($principal * $time * RATE) / 100;
        echo "<h3>Rate of Interest: " . RATE . "%</h3>";
        echo "<h3>Simple Interest: " . $simple_interest . "</h3>";
    }
    ?>
</body>

</html>