<?php
$host = "localhost";
$basededatos = "pagina_caninos";
$usuario = "root";
$clave = "";
$tabla = "consultas";

//$con = new mysqli($host, $usuario, $clave, $basededatos);

$con = mysqli_connect(
    'localhost',
    'root',
    '',
    'pagina_caninos'
);


if($con->connect_errno){
    echo 'DB faild';
}else{
    //echo 'DB conected';
}

?>