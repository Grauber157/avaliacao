<?php
    include('conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1>Alteração do Fluxo de Caixa</h1><br>";

    echo "<p>Data: $data</p>";
    echo "<p>Tipo: $tipo</p>";
    echo "<p>Valor: $valor</p>";
    echo "<p>Histórico: $historico</p>";
    echo "<p>Cheque: $cheque</p>";

    //query SQL
    $sql = "UPDATE fluxo_caixa SET data='$data', tipo='$tipo', valor='$valor', historico='$historico', cheque='$cheque' WHERE id='$id'";
    //função pra mandar a query
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "Dados Atualizados\n";
    }
    else
    {
        echo "Erro ao Atualizar dados!\n".mysqli_error($con);
    }
?>