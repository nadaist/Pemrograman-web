<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    // echo "ID = " . $id;

    $query = "DELETE FROM barang WHERE id = '$_GET[id]'";
    $ex = mysqli_query($koneksi, $query);

    if($ex){
        header("location:index.php?hapus_success");
    }else{
        echo "Data gagal di input." . mysqli_error($ex);
    }

?>