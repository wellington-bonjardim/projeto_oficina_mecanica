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
    <link rel="stylesheet" href="style.css">

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

      <div class="container formulario border border-secondary p-4 d-flex justify-content-center">
        <form method="POST" action="index.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
              <label for="contato">Contato</label>
              <input type="text" class="form-control" name="contato" id="contato" placeholder="Ex: (21)91234-5678">
            </div>
            <div class="form-group col-md-10">
              <label for="servico">Serviço</label>
              <input type="text" class="form-control" name="servico" id="servico" placeholder="Serviço">
            </div>
            <div class="form-group col-md-2">
              <label for="valor">Valor</label>
              <input type="text" class="form-control" name="valor" id="valor" placeholder="Ex: 150.50">
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <div class="form-group col-md-2">
                <label for="situacao">Situação</label>
                <select name="situacao" id="situacao" class="form-control text-center  mb-3">
                    <option value="1">PAGO</option>
                    <option value="2">PENDENTE</option>
                </select>
              </div>
            </div>
            <div class="form-group col-md-12 d-flex justify-content-center align-items-center text-center">
              <button class= "btn btn-cadastrar btn-lg">Cadastrar</button>
            </div>
            
          </div>
        </form>
      </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!-- 
      Na criação da tabela, fazer o seguinte para que as informações ocupem os lugares corretos:

        nome.value = <?= $servico -> nome ?>
        contato.value = <?= $servico -> contato ?>
        serviço.value = <?= $servico -> servico ?>
        valor.value = <?= $servico -> valor ?>
        situacao.value = <?= $servico -> status ?> 
        acao.value = <?= $servico -> acao ?> 
      -->