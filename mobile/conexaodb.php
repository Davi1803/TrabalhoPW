<?php

// Abre uma conexao com o BD.

$host        = "host = db4free.net;";
$port        = "port = 3306;";
$dbname      = "dbname = teachhelp;";
$dbuser 	 = "teachhelp";
$dbpassword	 = "d4pnw-d3@*ZRNkF";



// dados de conexao com o b4app. Usar somente caso esteja usando b4app
//$host        = "host = " . getenv("BD_HOST") . ";";
//$port        = "port = " . getenv("BD_PORT") . ";";
//$dbname      = "dbname = " . getenv("BD_DATABASE") . ";";
//$dbuser 	 = getenv("BD_USER");
//$dbpassword	 = getenv("BD_PASSWORD");

// para conectar ao mysql, substitua pgsql por mysql
$db_con= new PDO("mysql:" . $host . $dbname, $dbuser, $dbpassword);

//alguns atributos de performance.
$db_con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
