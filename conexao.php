
<?php
    $servidor="localhost";
    $usuario="root";
    $senha="92300766";
    $dbname="agendamentobarber";


    $conexao= new mysqli($servidor, $usuario, $senha, $dbname);
    if($mysqli->connect_errno){
        echo "Falha ao conectar: (". $mysqli->connect_errno.") ".$mysqli->connect_error;
    }
    
?>

