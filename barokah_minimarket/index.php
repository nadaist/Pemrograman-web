<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barokah Minimarket</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Sweet Alert 2 -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

    <?php
        if(isset($_GET['input_success'])){
            echo '<script>swal("Berhasil !!", "Data Berhasil ditambahkan", "success");</script>';
        }else if(isset($_GET['edit_success'])){
            echo '<script>swal("Berhasil !!", "Data Berhasil diedit", "info");</script>';
        }else if(isset($_GET['hapus_success'])){
            echo '<script>swal("Berhasil !!", "Data Berhasil dihapus", "success");</script>';
        }
    ?>
    
    <h1 class="title text-center">
        Barokah Minimarket
    </h1>

    <div class="container">
        <a href="form_tambah_data.php" class="btn btn-primary mt-3 mb-3"><i class="fas fa-plus"></i>Tambah</a>
        <div class="table-responsive-md">
            <table class="table table-striped  data">
                <thead class="bg-primary text-white text-center">
                    <tr>			
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Jumlah Stok</th>
                        <th>Harga Satuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php 
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"SELECT * FROM barang LEFT JOIN kategori ON barang.kategori_id = kategori.id_kategori ORDER BY barang.id ASC");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_barang']; ?></td>
                        <td><?php echo $d['nama_kategori']; ?></td>
                        <td><?php echo $d['jumlah_stock']; ?></td>
                        <td><?php echo "Rp " . number_format($d['harga_satuan'], 0, ".", "."); ?></td>
                        <td>
                            <a href="form_edit_data.php?id=<?php echo $d['id']; ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i> EDIT</a>
                            <a href="hapus_data.php?id=<?php echo $d['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> HAPUS</a>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Data Tables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script> 

    <script>
        $(document).ready(function(){
		    $('.data').DataTable();
	    });
    </script>

</body>
</html>