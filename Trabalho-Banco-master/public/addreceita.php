<?php
require_once("../config/conn.php");

$nome_receita = $_POST ['nome-receita'];
$quantidades = $_POST ['quantidades'];
$ingredientes = $_POST ['ingredientes'];
$modo_preparo = $_POST ['modo-preparo'];

$sql = "INSERT INTO receitas (nome,modo_preparo) VALUES (:nome,:modo_preparo)";
$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $nome_receita);
$statement->bindParam(':modo_preparo', $modo_preparo);
$statement->execute();

$sql = "INSERT INTO ingredientes (nome) VALUES (:nome)";
$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $ingredientes);
$statement->execute();

$sql = "INSERT INTO quantidades (quantidade, unidade_de_medida) VALUES (:quantidade, :unidade_de_medida)";
$statement = $conn->prepare($sql);
$statement->bindParam(':quantidade', $quantidades);
$statement->bindParam(':unidade_de_medida', $quantidades);
$statement->bindParam(':unidade_de_medida', $quantidades);
$statement->execute();


include_once('homeSistema.php');
?>
