<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id'])) {
          //query SQL
          $k_propinsi = $_GET['id'];
          $query = "SELECT * FROM media WHERE id = '$id'"; 

          //eksekusi query
          $media = mysqli_query(connection(),$query);

          while($data = mysqli_fetch_array($media)){
            echo "<option value='".$data['id']."'>".$data['nama']."</option>";
          }
      }  
  }