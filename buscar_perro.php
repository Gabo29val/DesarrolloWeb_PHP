<?php

if(isset($_POST['buscar_perro'])){
    $nombre = $_POST['Nombre'];

    //echo "datos capturados en la variable global POST:<br><br>";
    //echo $nombre."<br>";

    $query = "SELECT * FROM perro WHERE Nombre like '$nombre';";

    //echo $query;
    
    include("db.php");
    $res = mysqli_query($con, $query);
    $num_resultados = mysqli_num_rows($res);
    echo "RESULTADOS DE LA BUSQUEDA<br>";
    echo "La selección devolvió ".$num_resultados." filas";
    

    for ($i=0; $i <$num_resultados; $i++) { 

        $row = mysqli_fetch_array($res); 
        echo "</br>".($i+1);
        echo "</br>DNI : ".$row['DNI'];
        echo "</br>Nombre : ".$row['Nombre'];
        echo "</br>Raza : ".$row['Raza'];
        echo "</br>Genero : ".$row['Genero']; 
        echo "</br>Nacio en : ".$row['FechaNacimiento']; 
        echo '</br><img src="archivos/'.$row['Foto'].'" width="250px">';
        echo"</p>"; 
    }

    if(!$res){
        die("Query faileeed");
    }
}
?>