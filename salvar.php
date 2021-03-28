<?php
require_once("conecta.php");
$localidade = $_POST['localidade'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$logradouro = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$search = mysqli_query($conn, "SELECT * FROM endereco WHERE cep = '$cep'");
$num_rows = mysqli_num_rows($search);

if(!$num_rows > 0){
$sql = "INSERT INTO endereco (localidade, cep, uf, logradouro, bairro, complemento) VALUES('$localidade', '$cep', '$uf', '$logradouro', '$bairro', '$complemento')";
$result = mysqli_query($conn, $sql);

if(!$result) {
	echo("Ocorreu um erro durante a inserção na tabela!");
} else {
	header("Location: tb.php");
}
} else {
	echo("CEP já cadastrado!");
}

mysqli_close($conn);
?>