<?php 


   // membuat konekesi ke database system
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = "ajax";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

   if(! $conn) {
	   echo "Koneksi gagal" . mysqli_error($conn);
   }
   
	
   
