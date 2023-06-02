<!DOCTYPE html>
<html>
<head>
    <title>Médias Bimestrais</title>
</head>
<body style="background-color: violet;">
    <h2>Avaliação das Médias Bimestrais</h2>
    <form method="post" action="">
        <label for="nota1">Nota 1: </label>
        <input type="number" step="0.01" name="nota1" required><br><br>

        <label for="nota2">Nota 2: </label>
        <input type="number" step="0.01" name="nota2" required><br><br>

        <label for="nota3">Nota 3: </label>
        <input type="number" step="0.01" name="nota3" required><br><br>

        <label for="nota4">Nota 4: </label>
        <input type="number" step="0.01" name="nota4" required><br><br>

        <input type="submit" value="Calcular Média e Status">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        echo "<h3>A média bimestral é: " . number_format($media, 2) . "</h3>";

        if ($media >= 7.5) {
            echo "<h3>Status do estudante: Aprovado</h3>";
        } elseif ($media >= 3 && $media < 7.5) {
            echo "<h3>Status do estudante: Em recuperação</h3>";
        } else {
            echo "<h3>Status do estudante: Reprovado</h3>";
        }
    }
    ?>

        <img src="tirinha.jpg" alt="Imagem">
   

</body>
</html>
