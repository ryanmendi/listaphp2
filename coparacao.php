<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparação de números</title>
</head>
<body>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="num">Digite o primeiro número:</label>
    <br>
    <input type="number" name="n1">
    <br>
    <label for="num">Digite o segundo número:</label>
    <br>
    <input type="number" name="n2">
    <input type="submit">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        if ($n1 > $n2) {
            echo "$n1 é maior que $n2";
        }
        elseif ($n2 > $n1) {
            echo "$n2 é maior que $n1";
        }
        else {
            echo "os valores são iguais";
        }
    }
?>