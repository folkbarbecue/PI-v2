<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];
    $hora = $_POST['hora'];

    $sql = "INSERT INTO lembretes (texto, hora) VALUES ('$texto', '$hora')";
    if (mysqli_query($conexao, $sql)) {
        echo "Lembrete adicionado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>