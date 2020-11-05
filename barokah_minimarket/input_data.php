<?php

    include 'koneksi.php';

    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $jumlah_stock = $_POST['jumlah_stock'];
    $harga_satuan = $_POST['harga_satuan'];

    // echo "Nama Barang : " . $nama_barang . "<br>";
    // echo "Kategori : " . $kategori . "<br>";
    // echo "Jumlah Stock : " . $jumlah_stock . "<br>";
    // echo "Harga Satuan : " . $harga_satuan;

    $query = "INSERT INTO barang SET nama_barang='$nama_barang',kategori_id='$kategori',jumlah_stock='$jumlah_stock',harga_satuan='$harga_satuan'";
    $ex = mysqli_query($koneksi, $query);

    if($ex){
        header("location:index.php?input_success");
    }else{
        echo "Data gagal di input." . mysqli_error($ex);
    }

?>