<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);


    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Senha: (senha criptografada)<br>";

}
?>
<h1>Cadastrado com sucesso!!!</h1>
<a href="index.php">Voltar ao menu</a>