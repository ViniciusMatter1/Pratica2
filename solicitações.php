<?php
require_once 'db.php';
function solicitacões() {
if (
    isset($_POST['']) &&
    isset($_POST['']) &&
    isset($_POST['']) &&
    isset($_POST[''])) {
}
}
?>

<!DOCTYPE html>
<html lang="Pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Solicitação</title>
</head>
<body>
    <h1>Criar Solicitação</h1>
    <form action="solicitacões.php">
        <label for="titulo" name="titulo">Coloque o titulo da solicitação:</label><br>
        <input type="text" name="titulo" required><br><br>
        <label for="descricão" name="descricão">Coloque a descricao:</label><br>
        <input type="text" name="descricão" required><br><br>
        <label for="urgência" name="urgência">Coloque a urgência:</label><br> <!--fazer paranaue para conseguir pegar por id  -->
        <input type="text" name="urgência" required><br><br>
        <label for="status" name="status">Coloque o status da solicitação:</label><br>
        <input type="text" name="status" required><br><br>
        <label for="data_de_abertura" name="data_de_abertura">Coloque a data de abertura:</label><br>
        <input type="text" name="data_de_abertura" required><br><br>
        <input type="submit" >

    </form>
</body>
</html>