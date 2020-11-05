<?php

    include 'koneksi.php';

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $jumlah_stock = $_POST['jumlah_stock'];
    $harga_satuan = $_POST['harga_satuan'];

    // echo "ID : " . $id . "<br>";
    // echo "Nama Barang : " . $nama_barang . "<br>";
    // echo "Kategori : " . $kategori . "<br>";
    // echo "Jumlah Stock : " . $jumlah_stock . "<br>";
    // echo "Harga Satuan : " . $harga_satuan;

    $query = "UPDATE barang SET nama_barang='$nama_barang',kategori_id='$kategori',jumlah_stock='$jumlah_stock',harga_satuan='$harga_satuan' WHERE id = '$id'";
    $ex = mysqli_query($koneksi, $query);

    if($ex){
        header("location:index.php?edit_success");
    }else{
        echo "Data gagal di input." . mysqli_error($ex);
    }

?>