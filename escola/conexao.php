<?php// mysqli procedural 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "bdescola";

$con = mysqli_connect($servidor,$usuario,$senha,$bd);

if ($con) {
    echo "<h1>conectou</h1>";
} else {
    echo "<h1>não conectou</h1>";
}
