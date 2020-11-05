<?php
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id = '$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>

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

</head>
<body>

    <div class="container">
        <h1 class="title-crud">
            Form Edit Data
        </h1>
        <hr>

        <form action="update_data.php" method="POST" class="form-tambah">

            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <div class="form-group row mt-4">
                <div class="col-md-2">
                    <label for="nama_barang">Nama Barang</label>
                </div>
                <div class="col">
                    <input type="text" class="form-control mb-2" id="nama_barang" placeholder="Masukkan Nama Barang" name="nama_barang" value="<?= $data['nama_barang'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori" class="col-md-2">Kategori</label>
                <div class="col">
                    <select class="custom-select mb-2 " name="kategori" id="kategori">
                        <option value="">-Pilih Kategori-</option>

                        <?php
                            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                            while($k = mysqli_fetch_array($kategori)){
                                echo "<option value='$k[id_kategori]'";
                                if($k['id_kategori'] == $data['kategori_id']) 
                                    echo " selected";
                                    echo ">$k[nama_kategori]</option>";
                            }
                        ?>

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="jumlah_stock" class="col-md-2">Jumlah Stock</label>
                <div class="col">
                    <input type="text" class="form-control mb-2" id="jumlah_stock" placeholder="Masukkan Jumlah Stock Barang" name="jumlah_stock" value="<?= $data['jumlah_stock'] ?>"  maxlength="3" onkeypress="return hanyaAngka(event)">
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_satuan" class="col-md-2">Harga Satuan</label>
                <div class="col">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" class="form-control" id="harga_satuan" placeholder="Masukkan Harga Satuan" name="harga_satuan" value="<?= $data['harga_satuan'] ?>" maxlength="20" onkeypress="return hanyaAngka(event)">
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="offset-md-2 col-md-4">
                    <button type="submit" class="btn btn-info btn-block"><i class="oi oi-task"></i> Simpan</button>
                </div>
                <div class="col-md-4">
                    <button type="reset" class="btn btn-warning btn-block"><i class="oi oi-circle-x"></i> Batal</button>
                </div>
            </div>
            
            

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Data Tables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    

    <script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }

    </script>

</body>
</html>