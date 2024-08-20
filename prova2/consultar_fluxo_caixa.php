<?php
    include('conexao.php');
    $tipo = $_POST['consulta'];

    //SELECIONA TIPO DE CONSULTA
    switch($tipo)
    {
        case 'entrada':
            $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'entrada'";
            $texto = "Valor Total Entrada";
        break;

        case 'saida':
            $sql = "SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'saida'";
            $texto = "Valor Total Saída";
        break;

        case 'saldo':
            $sql = "SELECT SUM(CASE WHEN tipo = 'entrada' THEN valor ELSE 0 END) - SUM(CASE WHEN tipo = 'saida' THEN valor ELSE 0 END) AS valor FROM fluxo_caixa";
            $texto = "Valor Saldo Total";
        break;
    }

    //CARREGA A QUERY
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Dados Atualizados\n";
    }
    else
    {
        echo "Erro ao Atualizar dados!\n".mysqli_error($con);
    }

    //CALCULA OS VALORES
    $row = mysqli_fetch_array($result);
    echo "<br>";
    echo "<h4>$texto: $row[valor]";
?>