<?php 

// Criando um servidor de socket
$socket = stream_socket_server("tcp://localhost:8009"); 

$con = stream_socket_accept($socket);

$espera = rand(1,5);
sleep($espera);

fwrite($con, "Resposta do socket após {$espera} segundos \n");

fclose($con);