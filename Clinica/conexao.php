<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "clinica";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conn) {
  die("Falah na conexão: " . mysqli_connect_error());
}

echo "Conectado com sucesso";
