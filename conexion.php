
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Root12345678";
$dbname = "mydb";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}else{
    echo"conecto compa no se preocupe";
}
?>