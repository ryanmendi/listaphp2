<!DOCTYPE html>
<html>
<head>
    <title>Jokenpô</title>
</head>
<body>
    <h1>Jokenpô</h1>
    <form method="post" action="">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="choice">Escolha:</label>
        <select id="choice" name="choice" required>
            <option value="pedra">Pedra</option>
            <option value="papel">Papel</option>
            <option value="tesoura">Tesoura</option>
        </select><br><br>
        <input type="submit" value="Jogar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userChoice = $_POST["choice"];
        $userName = $_POST["name"];
        $computerChoices = ["pedra", "papel", "tesoura"];
        $computerChoice = $computerChoices[array_rand($computerChoices)];
        $result = "";

        if ($userChoice == $computerChoice) {
            $result = "Empate!";
        } elseif (($userChoice == "pedra" && $computerChoice == "tesoura") ||
            ($userChoice == "papel" && $computerChoice == "pedra") ||
            ($userChoice == "tesoura" && $computerChoice == "papel")) {
            $result = "Você ganhou!";
        } else {
            $result = "Você perdeu!";
        }

        echo "<h2>Resultado:</h2>";
        echo "<p>$userName escolheu $userChoice</p>";
        echo "<p>O computador escolheu $computerChoice</p>";
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>