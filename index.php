<?php 
  $acao = 'recuperar';
  require 'servico_controller.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Oficina</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/438b2365a2.js" crossorigin="anonymous"></script>

    <!-- STYLES -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <header>
        <h2>Oficina Mecânica</h2>
      </header>

      <div class="container menu">
        <div class="row">
          <div class="col d-flex justify-content-center mb-4">
            <a href="novo_servico.php">
              <button class="btn btn-lg mr-2">Novo serviço</button>
            </a>
            <a href="index.php">
              <button class="btn btn-lg">Todos os serviços</button>
            </a>
          </div>
        </div>
      </div>

      <div class="container conteudo">
        <div class="row">
          <div class="col-md-12 text-center">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th scope="col">NOME</th>
                  <th scope="col">CONTATO</th>
                  <th scope="col">SERVIÇO</th>
                  <th scope="col">VALOR</th>
                  <th scope="col">SITUAÇÃO</th>
                  <th scope="col">AÇÃO</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Wellington</td>
                  <td>(21) 91234-5678</td>
                  <td>Troca dos amortecedores</td>
                  <td>250</td>
                  <td>PAGO</td>
                  <td>
                    <i class="fa-solid fa-trash fa-xl"></i>
                    <i class="fa-solid fa-square-check fa-xl"></i>
                  </td>
                </tr>
                <tr>
                  <td>Nelson</td>
                  <td>(21) 91234-5678</td>
                  <td>Troca de Óleo</td>
                  <td>150</td>
                  <td>PAGO</td>
                  <td>
                    <i class="fa-solid fa-trash fa-xl"></i>
                    <i class="fa-solid fa-square-check fa-xl"></i>
                  </td>
                </tr>
                <tr>
                  <td>Edinho</td>
                  <td>(21) 91234-5678</td>
                  <td>Cabeçote</td>
                  <td>700</td>
                  <td>PENDENTE</td>
                  <td>
                    <i class="fa-solid fa-trash fa-xl"></i>
                    <i class="fa-solid fa-square-check fa-xl"></i>
                  </td>
                </tr>
              </tbody>

            </table>
          </div>
        </div>
      </div>


      

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>