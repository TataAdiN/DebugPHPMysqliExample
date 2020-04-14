<?php
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "debug-query";
    $konek = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    if(!$konek){
        die("Koneksi Error : ".mysqli_connect_error());
    }
?>