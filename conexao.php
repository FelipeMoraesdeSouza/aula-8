<?php
//criar variaveis de conexão

$sevidor ="127.0.0.1";
$usuario = "root";
$senha = "";
$bd = "bdcurso";

//criar a conexão
// mysqli_connect(servidor,usuario,senha,bd)
//mysqli_connect retorna true o false


$con = mysqli_connect($sevidor,$usuario,$senha,$bd);
//var_dump($con);
if ($con){ //verifica se $con retorna TRUE
    echo "conectou ao BD";
} else {
    echo "falha de coneção com o BD";
}
/*
<?php   //conexão procedural



//criar variáveis de conexão

$servidor = "localhost"; 

$usuario = "root";

$senha = "";

$bd = "bdcurso";



//criar a conexão

//mysqli_connect(SERVIDOR,USUARIO,SENHA,BD);

//o mysqli_connect retorna TRUE ou FALSE



$con = mysqli_connect($servidor,$usuario,$senha,$bd); 

//var_dump($con);

if ($con) { //verifica se a $conn tem TRUE

  echo "Conectou ao BD";

} else {

    echo "<h1>Falha de conexão com o BD - Contacte o juan</h1>";

}
*/