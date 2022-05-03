<?php

include_once("conexao.php");

$data = [
    'nome' => $nome,
    'email' => $email,
    'endereco' => $endereco,
];
$sql = "INSERT INTO empresas (nome, email, endereco) VALUES ($nome, $email, $endereco)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);

mysqli_close($conexao);