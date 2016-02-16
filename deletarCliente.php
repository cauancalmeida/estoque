<?php
include_once ('conecta/conecta.php');

$id=$_REQUEST['id'];

$sql="DELETE FROM Cliente WHERE idCliente=$id";
$result= mysql_query($sql);

if($result){
echo '<script> alert("Cliente deletado com sucesso"); window.location.href="cllientes.php";</script>';
}else{
echo '<script> alert("Algo deu errado!"); window.location.href="cllientes.php";</script>';
}
