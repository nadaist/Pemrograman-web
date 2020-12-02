<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    // echo "ID = " . $id;

    $query = "DELETE FROM media WHERE id = '$_GET[id]'";
    $ex = mysqli_query($koneksi, $query);

    if($ex){
        header("location:tugas5.php?hapus_success");
    }else{
        echo "Data gagal di input." . mysqli_error($ex);
    }

?>