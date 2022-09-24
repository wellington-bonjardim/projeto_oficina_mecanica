<?php 
    require "../../../projeto_oficina_local/servico.model.php";
    require "../../../projeto_oficina_local/servico.service.php";
    require "../../../projeto_oficina_local/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir') {
       
        $servico = new Servico();
        $servico->__set('nome', $_POST['nome']);
        $servico->__set('contato', $_POST['contato']);
        $servico->__set('servico', $_POST['servico']);
        $servico->__set('valor', $_POST['valor']);
        $servico->__set('situacao', $_POST['situacao']);
                
        $conexao = new Conexao();
        
        $servicoService = new ServicoService($conexao, $servico);
        $servicoService->inserir();

        header('Location: index.php');

    } else if($acao == 'recuperar') {
        
        $servico = new Servico();
        
        $conexao = new Conexao();

        $servicoService = new ServicoService($conexao, $servico);
        $servicos = $servicoService->recuperar();

    } else if($acao == 'remover') {
        
        $servico = new Servico();
        $servico->__set('id', $_GET['id']);

        $conexao = new Conexao();

        $servicoService = new ServicoService($conexao, $servico);
        $servicoService->remover();

        header('Location: index.php');

    } else if($acao == 'servicoPago') {

        $servico = new Servico();
        $servico->__set('id', $_GET['id']);
        $servico->__set('situacao', 2);

        $conexao = new Conexao();

        $servicoService = new ServicoService($conexao, $servico);
        $servicoService->pagarServico();

        header('Location: index.php');
    }
?>
