<!DOCTYPE html>
<html>
<head>
    <title>Verificar Triângulo</title>
</head>
<body>
    <h1>Verificar Triângulo</h1>
    <form method="post" action="">
        <label for="side1">Lado 1:</label>
        <input type="number" id="side1" name="side1" required><br><br>
        <label for="side2">Lado 2:</label>
        <input type="number" id="side2" name="side2" required><br><br>
        <label for="side3">Lado 3:</label>
        <input type="number" id="side3" name="side3" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = $_POST["side1"];
        $side2 = $_POST["side2"];
        $side3 = $_POST["side3"];

        if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
            echo "<h2>Resultado:</h2>";
            echo "<p>Os lados formam um triângulo.</p>";
            
            if ($side1 == $side2 && $side1 == $side3) {
                echo "<img src='equilatero.jpg' alt='Triângulo Equilátero'>";
                echo "<p>Triângulo Equilátero</p>";
            } elseif ($side1 == $side2 || $side1 == $side3 || $side2 == $side3) {
                echo "<img src='isosceles.jpg' alt='Triângulo Isósceles'>";
                echo "<p>Triângulo Isósceles</p>";
            } else {
                echo "<img src='escaleno.jpg' alt='Triângulo Escaleno'>";
                echo "<p>Triângulo Escaleno</p>";
            }
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>Os lados não formam um triângulo.</p>";
        }
    }
    ?>
</body>
</html>
