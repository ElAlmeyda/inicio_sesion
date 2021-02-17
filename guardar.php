<?php
	
	//Conectar con el server
    $conectar=mysqli_connect('localhost', 'root','', "form");
    
    
    //variables del form
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $password = $_POST['pass'];

    $sql="INSERT INTO datos VALUES ('$nombre', '$email', '$password')";
    //ejecutamos la sentencia
    $query = mysqli_query($conectar, $sql);
    if(!$query){
        echo "Algun error";
    } else {
        echo "Todo correcto gracias por subscribirte";
    }

?>