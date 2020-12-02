<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id'])) {
          //query SQL
          $k_negara = $_GET['SMP'];
          $query = "SELECT * FROM sekolah WHERE id = '$id'"; 

          //eksekusi query
          $sekolah = mysqli_query(connection(),$query);

          while($data = mysqli_fetch_array($propinsi)){
            echo "<option value='".$data['id']."'>".$data['nama']."</option>";
          }
      }  
  }
