<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<div>
    <h1>Calculator</h1>
</div>

<p>
    <form method="get" action="calculator.php">
        <input name="value1">
        <select name="action">
            <option value="plus">+</option>
            <option value="minus">-</option>
        </select>
        <input name="value2">
        <input type="submit" name="submit" value="Submit">
    </form>
</p>

<p>
    <?php
        if(isset($_GET["submit"])) {
            $v1 = $_GET["value1"];
            $v2 = $_GET["value2"];

            if($_GET["action"] == "plus") {
                $result = $v1 + $v2;
                echo "<h1>$result</h1>";
            }

            else if($_GET["action"] == "minus") {
                $result = $v1 - $v2;
                echo "<h1>$result</h1>";
            }
        }
    ?>
</p>

</body>
</html>