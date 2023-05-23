<?php
require_once("../config/conn.php");

$nome_receita = $_POST ['nome-receita'];
$quantidades = $_POST ['quantidades'];
$ingredientes = $_POST ['ingredientes'];
$modo_preparo = $_POST ['modo-preparo'];

$sql = "INSERT INTO receitas (nome, quantidades, ingredientes, modo_preparo) VALUES (:nome, :quantidades, :ingredientes, :modo_preparo)";
$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $nome_receita);
$statement->bindParam(':quantidades', $quantidades);
$statement->bindParam(':ingredientes', $ingredientes);
$statement->bindParam(':modo_preparo', $modo_preparo);
$statement->execute();

include_once('homeSistema.php');
?>

