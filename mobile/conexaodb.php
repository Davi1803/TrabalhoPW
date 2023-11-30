<?php
/*
//Conexão com banco de dados infinity free
$servername = "sql303.infinityfree.com"; //endereço do servidor
$username="if0_35400743";
$password="46fZd3izCXd";
$db_name="if0_35400743_Teachhelp";*/

//Conexão com banco de dados infinity free
$servername = "db4free.net"; //endereço do servidor
$username="teachhelp";
$password="d4pnw-d3@*ZRNkF";
$db_name="teachhelp";

//pdo - somente orientado objeto
$connect =mysqli_connect($servername,$username,$password,$db_name);

//codifica com o caracteres ao manipular dados do banco de dados
//mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Falha na conexão: ". mysqli_connect_error();
endif;
?>
