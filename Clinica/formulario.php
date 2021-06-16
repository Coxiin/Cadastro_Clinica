<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link type="stylesheet" href="css/style.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Cadastro de Pacientes</title>
</head>
<body>
 
<section class="container border border-light">
  <div class="box">
    <div class="box-header">
      <div class="box-title">
        <h2 class="text-center">Cadastrar Paciente</h2>
      </div><hr />
      <div class="box-body">
        <form action="dbForm.php" method="POST" enctype="multipart/form-data"> 
          <div class="row">
            <div class="col-md-12">
              <label for="nome">Nome Completo</label>
              <input class="form-control" id="nome" name="nome" type="text" require placeholder="Digite seu nome completo" autofocus>
            </div>
            <div class="col-md-4">
              <label for="rg">R.G</label>
              <input class="form-control" id="rg" name="rg" type="text" require placeholder="Digite seu R.G" autofocus>
            </div>
            <div class="col-md-4">
              <label for="cpf">C.P.F</label>
              <input class="form-control" id="cpf" name="cpf" type="text" require placeholder="Digite seu C.P.F" autofocus>
            </div>
            <div class="col-md-4">
              <label for="telefone">Telefone</label>
              <input class="form-control" id="telefone" name="telefone" type="text" require placeholder="Digite seu Telefone" autofocus>
            </div>
            <div class="col-md-2">
              <label for="cep">CEP</label>
              <input class="form-control" id="cep" name="cep" type="text" require placeholder="Digite seu CEP" autofocus>
            </div>
            <div class="col-md-5">
              <label for="endereco">Endereço</label>
              <input class="form-control" id="endereco" name="endereco" type="text" require placeholder="Digite seu Endereço" autofocus>
            </div>
            <div class="col-md-2">
              <label for="numero">Número</label>
              <input class="form-control" id="numero" name="numero" type="text" require placeholder="Número" autofocus>
            </div>
            <div class="col-md-3">
              <label for="bairro">Bairro</label>
              <input class="form-control" id="bairro" name="bairro" type="text" require placeholder="Bairro" autofocus>
            </div>
            <div class="col-md-4">
              <label for="cidade">Cidade</label>
              <input class="form-control" id="cidade" name="cidade" type="text" require placeholder="Cidade" autofocus>
            </div>
            <div class="col-md-2">
              <label for="uf">Estado</label>
              <input class="form-control" id="uf" name="uf" type="text" require placeholder="Estado" autofocus>
            </div>
          </div>

            <h2 class="text-center">Avaliação farmacoterapêutica</h2>

            <div class="row">
              <div class="col-md-12">
                <label for="doenca">Doença</label>
                <input class="form-control" id="doenca" name="doenca" type="text" require placeholder="Digite o nome da doença" autofocus>
              </div>
              <div class="col-md-4">
                <label for="tratamento">Inicio do Tratamento</label>
                <input class="form-control" id="tratamento" name="tratamento" type="date" autofocus>
              </div>
              <div class="col-md-4">
                <label for="remedio">Medicamento</label>
                <input class="form-control" id="remedio" name="remedio" type="text" require placeholder="Digite o medicamento" autofocus>
              </div>
              <div class="col-md-4">
                <label for="dosagem">Dosagem</label>
                <input class="form-control" id="dosagem" name="dosagem" type="text" require placeholder="Sua dosagem  " autofocus>
              </div>

              <h3 class="text-left">Comentario Médico</h3>
              <div class="form-floating">
                <textarea class="form-control" name="comentario" id="comentario" placeholder="Deixe um Comentario aqui" id="floatingTextarea2" style="height:100px;"></textarea>
                <label for="floatingTextarea">Deixe um comentário aqui...</label><br>
              </div>
            </div>
          <div class="row">
              <div class="col text-end">
                <a href="index.php" type="reset" class="btn btn-danger">Cancelar</a>
                <button href="formulario.php" type="submit" name="confirm" class="btn btn-success" >Confirmar</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  
</section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      $('#cpf').mask('000.000.000-00');
      $('#telefone').mask('(00) 00000-0000');
      $('#rg').mask('00.000.000.0');
      $('#cep').mask('00000-000')
    })
  </script>

</body>
</html>
