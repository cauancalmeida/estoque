<?php
include_once ('conecta/conecta.php');

if (isset($_POST['nome'])){
	$nome=$_POST['nome'];
}

if (isset($_POST['preco'])){
	$preco=$_POST['preco'];
}

if (isset($_POST['descricao'])){
	$desc=$_POST['descricao'];
}

$inserir="INSERT INTO Produto (nome, preco, descricao) VALUES ('$nome', $preco, '$desc')";
$result= mysql_query($inserir);

if($result){
	echo'<script> alert("Produto cadastrado com sucesso");window.location.href="produtos.php";</script>'; 
}else{
	echo '<script> alert("Algo deu errado");window.location.href="incluiProdutos.php";';
}

