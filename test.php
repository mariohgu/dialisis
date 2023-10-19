<?php
// Declaramos las variables de conexi車n
$ServerName = "localhost";
$Username = "dialisi1_peru";
$Password = "d14l1s1s123";
$NameBD = "dialisi1_dbsistema";



//ip de la pc del servidor de la base de datos
define("DB_HOST", "localhost");

//Nombre de la base de datos
define("DB_NAME", "dialisi1_dbsistema");

//Usuario de la base de datos
define("DB_USERNAME","dialisi1_peru");

//Contraseña del usuario de la ase de datos
define("DB_PASSWORD","d14l1s1s12344");

//Definimos la codificación de los caracteres
define("DB_ENCODE","utf8");

//Definimos una constante como nombre del proyecto
define("PRO_NOMBRE","ITVentas");



// Creamos la conexi車n con MySQL
$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Revisamos la Conexi車n MySQL
if ($conexion->connect_error) {
    die("Ha fallado la conexi8888n: " . $conexion->connect_error);
}
else {
// Enviamos un mensaje de conexi車n correcta
echo "Conectado correctamenteeeeee";}
?>