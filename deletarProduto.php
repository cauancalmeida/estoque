<?php
include_once ('conecta/conecta.php');
$id=$_REQUEST['id'];
$delete="DELETE FROM Produto WHERE idProd=$id";
$result= mysql_query($delete);
if($result){
echo '<script> alert("Produto deletado com sucesso"); window.location.href="produtos.php";</script>';
}else{
echo '<script> alert("Algo deu errado!"); window.location.href="produtos.php";</script>';
}
