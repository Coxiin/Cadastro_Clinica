<?php
  session_start();
  include_once("conexao.php");
  $nome = $_POST['nome'];
  $rg = $_POST['rg'];
  $cpf = $_POST['cpf'];
  $telefone = $_POST['telefone'];
  $cep = $_POST['cep'];
  $endereco = $_POST['endereco'];
  $numero = $_POST['numero'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $uf = $_POST['uf'];
  $doenca = $_POST['doenca'];
  $tratamento = $_POST['tratamento'];
  $remedio = $_POST['remedio'];
  $dosagem = $_POST['dosagem'];
  $comentario = $_POST['comentario'];
/* Filter_imput para especificar o que será obtido da variável */
/* Sanitize para limpara variável que retorna do formulárioSTRING (texto) ou próprio para EMAIL */
  $result_dados_form = "INSERT INTO paciente(nome, rg, cpf, telefone, cep, endereco, numero, bairro, cidade, uf, doenca, tratamento, remedio, dosagem, comentario) 
  VALUES ('$nome', '$rg', '$cpf', '$telefone', '$cep', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$doenca', 
  '$tratamento', '$remedio', '$dosagem', '$comentario')";

  $resultado_dados_form = mysqli_query($conn, $result_dados_form);

  if(mysqli_insert_id($conn)){$_SESSION['msg']="<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location:index.php");
}else{$_SESSION['msg']= "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location:index.php");
}
?>


?>