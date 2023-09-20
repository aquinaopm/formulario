<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
}
?>
<h1>Logado com sucesso!!</h1>
<a href="index.php">Voltar ao menu</a>