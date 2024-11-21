<?php

$conn = mysqli_connect("localhost","root","root","solicitacoes");

if (!$conn){
    die("Não deu certo meu chapa a conexão". mysqli_connect_error());
} else{
    echo "Conexão deu boa!:)";
}
?>