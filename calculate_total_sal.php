<!DOCTYPE html>
<html>

<head>
    <title>XCalculate total salart</title>
</head>

<body>

    <h2>Calculate total salary</h2>
    <form method="POST">
        <label> Enter basic Salary</label>
        <input type="number" name="basic" value=" "><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $basic = $_POST["basic"];
        define("HRA", 0.20);
        define("DA", 0.10);
        $hra_amount = $basic * HRA;
        $da_amount = $basic * DA;
        $total_salary = $basic + $hra_amount + $da_amount;
    }
    ?>
</body>

</html>