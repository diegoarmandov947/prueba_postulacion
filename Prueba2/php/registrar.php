<?php 

//atributos
$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "turing";

//verificar la conexion al servidor
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos");

//verificar la conexion con la base de datos
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Empresa = $_POST['Empresa'];
$Mensaje = $_POST['Mensaje'];


//insertar datos del contacto 
$sql = "INSERT INTO contactos VALUES ('$Nombre','$Correo','$Telefono','$Empresa','$Mensaje')";


    $ejecutar=mysqli_query($conexion, $sql);

   if(!$ejecutar){
    	 echo '<script>alert("Hubo Algun Error")</script> ';
         echo "<script>location.href='../index.html'</script>";	
    }else{
        echo '<script>alert("Datos Guardados Correctamente")</script> ';
        
        echo "<script>location.href='../index.html'</script>";	
    }



?>