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
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $dataAg=$_POST['dataAgendamento'];
    $hora=$_POST['horaAgendamento'];
    $servicos=$_POST['servicos'];
    $profissional=$_POST['profissional'];

    $sql="INSERT INTO clientes(nome, sobrenome, telefone, email, dataAg, hora, servicos, profissional) VALUES ('$nome', '$sobrenome', $telefone, '$email', $dataAg, $hora, $servicos, $profissional)";

    if(mysqli_query($conexao, $sql)){
        echo"Usuário cadastrado com sucesso.";
    }
    else{
        echo"Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>

</body>
</html>