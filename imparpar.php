<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou Par</title>
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

        if ($n1 % 2 == 0) {
            echo "Número par";
        }
        else {
            echo "Número impar";
        }
    }
?>