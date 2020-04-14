<?php
    include 'koneksi.php';
    $nama = "Tata Adi N";
    $nim = "123123";
    $query = "INSERTz INTO user VALUES('','$nama','$nim')";
    $result = mysqli_query($konek, $query);
    if($result){
        echo "Sukses";
    }else{
        die("Query Error : ".mysqli_error($konek));
    }
?>