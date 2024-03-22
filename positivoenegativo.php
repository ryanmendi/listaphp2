<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numero positivo ou negativo</title>
</head>
<body>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="num">Digite um número:</label>
    <br>
    <input type="number" name="n1">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];

        if ($n1 >= 1) {
            echo "$n1 é positivo";
        }
        elseif ($n1 <= -1) {
            echo "$n1 é negativo";
        }
        else {
            echo "$n1 é zero";
        }
    }
?>