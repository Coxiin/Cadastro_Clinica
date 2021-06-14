<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link type="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Cadastro de Pacientes</title>
</head>

<body>

  <section class="text-center">
    <h3>
      <i i class="fa fa-users"></i><span>Lista de pacientes</span>
    </h3>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <div class="rox margin-botton-20">
          <div class="col-md-12 text-right">
            <a href="formulario.php" title="Novo cadastro" class="btn btn-success"><i class="fa fa-user-plus"></i> Novo</a>
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead class="thead">
          <th>Nome</th>
          <th class="text-center">E-mail</th>
          <th class="text-center">R.G</th>
          <th class="text-center">C.P.F</th>
          <th class="text-center">Telefone</th>
          <th class="text-center">Doença</th>
          <th colspan="3">Opções</th>
        </thead>

        <tbody>
          <td></td>
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td>
            <form method="POST" action="">
              <button class="btn btn-warning btn-xs">
                <i class="fa fa-user-edit"></i>
              </button>
            </form>
          </td>
          <td>
            <form method="POST" action="">
              <button class="btn btn-danger btn-xs">
                <i class="fa fa-trash"></i>
              </button>
            </form>
          </td>
        </tbody>
      </table>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>