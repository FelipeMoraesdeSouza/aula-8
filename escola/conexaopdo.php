<?php
/*
$server = "localhost";

$user   = "root";

$pass   = "";

$bd     = "bdcurso";



try {

    $con = new PDO("mysql:host=$server;dbname=$bd",$user,$pass);



    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado ao BD";

} catch(PDOException $e) {

    echo "Deu ruim: ".$e->getMessage();

}
*/
$server  = "localhost";
$user    = "root";
$pass    = "";
$bd      = "bdcurso";

//$con = mysqli_connect() ;

try {
    $con = new PDO ("mysql:host=$server;dbname = $bd",$user.$pass);
    $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "conectado ao BD";
}   catch (PDOException $e) {
    echo "Deu ruim".$e->getMenssege();
}

