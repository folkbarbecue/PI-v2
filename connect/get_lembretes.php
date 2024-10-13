<?php
include("conexao.php");

$sql = "SELECT * FROM lembretes";
$result = mysqli_query($conexao, $sql);

$lembretes = array();

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $lembretes[] = $row;
    }
}

mysqli_close($conexao);

echo json_encode($lembretes);
?>