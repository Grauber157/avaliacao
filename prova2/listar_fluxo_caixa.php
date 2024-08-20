<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexao.php");

        $sql = "SELECT * FROM fluxo_caixa";

        $result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_array($result);

    ?>
    <h1>Consulta de Fluxo de Caixa</h1>
   
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>data</th>
            <th>tipo</th>
            <th>valor</th>
            <th>historico</th>
            <th>cheque</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['data']."</td>";
            echo "<td>".$row['tipo']."</td>";
            echo "<td>".$row['valor']."</td>";
            echo "<td>".$row['historico']."</td>";
            echo "<td>".$row['cheque']."</td>";
            echo "<td><a href='alterar_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='deletar_fluxo_caixa.php?id=".$row['id']."'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
    <tfoot>
        <td><a href="index.html">Voltar</a></td>
    </tfoot>
    </table>
</body>
</html>