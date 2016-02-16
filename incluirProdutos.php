<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>clientes</title>
</head>
<body>
<?php
include('menu.html');
?>
<div class="container">
<table>
<form role="form" action="insereProduto.php" method="POST">
<div calss="form-group">
<tr>
<td><label for="nome">Nome: </label></td>
<td><input type="text" class="form-control" name="nome"/></td>
</tr>
</div>
<div class="form-group">
<tr>
<td><label for="preco">Preço: </label></td>
<td><input type="number" class="form-control" name="preco"/></td>
</tr>
</div>
<div class="form-group">
<tr>
<td><label for="descricao">Descrição: </label></td>
<td><textarea rows="5" class="form-control" name="descricao"></textarea>/></td>
</tr>
</div>
<input type="submit" class="btn btn-default" value="Enviar"/>
</form>
</table>
</div>
