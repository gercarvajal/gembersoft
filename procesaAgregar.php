<?php

include("functions/setup.php");


$sql="insert into Producto values('hola','".$_POST['tipo']."','".$_POST['name']."',".$_POST['Pre'].",".$_POST['estado'].",'".$_POST['Des']."')";

echo $sql;

$result=mysqli_query(conexion(),$sql);


$sql9="SELECT  max(idProducto)as id2 from Producto ";//para obtener el ultimo id insertado
        
$result=mysqli_query(conexion(),$sql9);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);
//echo $datos['id2']; 

$cont =1;
foreach ($_FILES['imagenes']['tmp_name'] as $key =>$tmp_name){
    
    $filename=$_FILES['imagenes']['name'][$key];
    $temporal=$_FILES['imagenes']['tmp_name'][$key];
    $directorio ="resource/imgproductos";

    if(!file_exists($directorio)){
        mkdir($directorio, 0777);
    }
    
    $ruta= $directorio.'/'.$filename;
    move_uploaded_file($temporal,$ruta);

   
    $sql2="insert into Fotos values('hola','".$filename."',".$datos['id2'].")";// guardarla con solo el  nombre
    echo $sql2;
    //die;
    //$sql2="insert into Fotos values('hola',".$datos['id2'].",'".$filename."',".$cont.")";
    $result=mysqli_query(conexion(),$sql2);
    echo "Insertada foto :".$ruta;
    $cont++;
    
}

header('Location:AgregarProducto.php');




?>