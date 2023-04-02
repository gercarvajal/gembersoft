<?php
    function conexion()
    {
        $con=mysqli_connect("localhost","root","root12345678","mydb");
        mysqli_set_charset($con, 'utf8');
        return $con;
    }

?>