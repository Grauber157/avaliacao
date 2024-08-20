<?php
    include('conexao.php');
    $id = $_GET['id'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alterar Fluxo de Caixa</h1><br>
    <form action="cadastro_fluxo_caixa.php" method="post">

        <label for="">Data:</label>
        <input type="date" name="data">
        
        <br>

        <label for="">Tipo:</label>
        <input type="radio" name="tipo" value="entrada">
        <label for="">Entrada</label>
        <input type="radio" name="tipo" value="saida">
        <label for="">Saida</label>
        
        <br>

        <label for="">Valor:</label>
        <input type="number" step="0.01" name="valor">

        <br>

        <label for="">Histórico:</label>
        <input type="text" name="historico">

        <br>

        <label for="">Cheque:</label>
        <select name="cheque">
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select>

        <br><br>

        <input type="submit" value="Alterar">
    </form>

    
</body>
</html>