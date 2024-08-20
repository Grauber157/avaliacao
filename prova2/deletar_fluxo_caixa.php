<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM fluxo_caixa WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        echo "<h2>Dados deletados!</h2>";
    }
    else
    {
        echo "<h2>Erro ao deletar</h2>";
        echo "<h2>".mysqli_error($con)."</h2>";
    }
?>