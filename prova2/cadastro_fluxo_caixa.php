<?php
    include('conexao.php');

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    $sql = "INSERT INTO fluxo_caixa(data, tipo, valor, historico, cheque) 
    VALUES ('$data', '$tipo', '$valor', '$historico', '$cheque')";
    
        echo $sql;
        $result = mysqli_query($con, $sql);
        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!</h2>";
            mysqli_error($con);
        }

?>