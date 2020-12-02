<?php

    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];

    // echo "Nama Barang : " . $nama_barang . "<br>";
    // echo "Kategori : " . $kategori . "<br>";
    // echo "Jumlah Stock : " . $jumlah_stock . "<br>";
    // echo "Harga Satuan : " . $harga_satuan;

    $query = "INSERT INTO media SET id='$id',nama='$nama'";
    $ex = mysqli_query($koneksi, $query);

    if($ex){
        header("location:tugas5.php?input_success");
    }else{
        echo "Data gagal di input." . mysqli_error($ex);
    }

?>