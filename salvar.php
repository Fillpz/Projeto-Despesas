<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $descricao_despesa = $_POST["descricao_despesa"];
            $tipo_despesa = $_POST["tipo_despesa"];
            $valor_despesa = $_POST["valor_despesa"];
            $data_limite = $_POST["data_limite"];

            $sql = "INSERT INTO controle_orcamento (nome,descricao_despesa,tipo_despesa,valor_despesa) VALUES ('{$nome}, '{$descricao_despesa}', '{$tipo_despesa}', '{$valor_despesa}', '{$data_limite}')";

            $res = $conn->query($sql);
            break;

        case 'editar':
            break;
        case 'excluir':
            break;
        default:
            # code...
            break;
    }
?>