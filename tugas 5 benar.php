<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Tugas 3 </title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="960_16_col.css">
	</head>
	<body>
		<div class="container_16" style="margin-top: -9px;">
			<div class="grid_16">
				<div class="header">
					<center><h1 class="desc">Profile & Portofolio</h1></center>
					<img src="img/bg.jpeg" class="bg" style="width: 100%;">
				</div>
			</div>
			<div class="grid_16">
				<div class="nav-bar">
						<ul class="menu">
							<li><a href="">Home</a></li>
							<li><a href="">About</a></li>
							<li><a href="">Contact Me</a></li>
							<li><a href="">Education</a></li>
							<li><a href="">My Gallery</a></li>
							<li>
								<form method="POST">
									<input class="search" type="text" name="" value="" placeholder="Cari Artikel"></input>
								</form>
							</li>
						</ul>
				</div>
			</div>
		</div>

		<div class="content">
			<img src="img/profil.png" class="image-article" style="width: 200px"> </img>
			<div class="title"> About Me </div>
			<div class="identity"> 5 comments | 50 like | Published by Nadaist | 05 Agustus 2020 </div>
			<div class="articles">
				<?php
					$nama =" Nada Istighfariana";
					$alamat ="Bangkalan, Madura";
					$tanggal ="05 Agustus 1999";
					$pendidikan="S1 Jurusan Informatika";
					$kampus="UPN 'Veteran' Jawa Timur";
					$alkam="Jl. Raya Rungkut Madya Gunung Anyar, Surabaya, Jawa Timur – 60294";

					echo "Perkenalkan nama saya,".$nama."<br>"; 
					echo "Panggil saja saya Nada, saya berasal dari".$alamat."<br>"; 
					echo "Saya lahir di Bangkalan pada tanggal".$tanggal."<br>"; 
					echo"Sekarang saya menempuh pendidikan".$pendidikan."<br>"; 
					echo"di Kampus".$kampus."<br>";
					echo "yang beralamat di".$alkam."<br>";
				?>
			</div>
		</div>

		<div class="sidebar">
			<div class="sosial-media">
				<h4> CONTACT ME </h4>
				<?php 
				                  //proses menampilkan data dari database:
				                  //siapkan query SQL
				                  $query = mysqli_query($connect, "SELECT * FROM media");
				                  $no=0;
			                    while($data = mysqli_fetch_array($query)){
			                		?>
			                    <tr>
			                        <td><?= $data['ig'] ?></td><br>
			                        <td><?= $data['fb'] ?></td><br>
			                        <td><?= $data['gm'] ?></td><br>
			                        <td><?= $data['yt'] ?></td><br>
			                    </tr>
				                 <?php } ?>
			</div>
			<div class="FORMAL-EDUCATION">
							<h4> FORMAL EDUCATION </h4>
							<?php 
				                  //proses menampilkan data dari database:
				                  //siapkan query SQL
				                  $query = mysqli_query($connect, "SELECT * FROM sekolah");
				                  $no=0;
			                    while($data = mysqli_fetch_array($query)){
			                		?>
			                    <tr>
			                        <td><?= $data['SD'] ?></td><br>
			                        <td><?= $data['SMP'] ?></td><br>
			                        <td><?= $data['SMA'] ?></td><br>
			                        <td><?= $data['S1'] ?></td><br>
			                    </tr>
				                 <?php } ?>
						</div>
		</div>

		<div class="clear"></div>

		<div class="container_16" style="margin-top: 20px;">
			<div class="grid_16">
				<div class="footer">
					<center>2020&copy; All right reserved | This template is made with love by Nadaist </center>
				</div>
			</div>
		</div>

		<!-- <div class="container_16">
			<div class="content">
				<div class="grid_4">
					<img src="img/profil.png" class="image-article" style="width: 200px"> </img>
						<div class="grid_8">
							<div class="title"> About Me </div>
							<div class="identity"> 5 comments | 50 like | Published by Nadaist | 05 Agustus 2020 </div>
							<div class="articles">
								<?php
								// $nama =" Nada Istighfariana";
								// $alamat ="Bangkalan, Madura";
								// $tanggal ="05 Agustus 1999";
								// $pendidikan="S1 Jurusan Informatika";
								// $kampus="UPN 'Veteran' Jawa Timur";
								// $alkam="Jl. Raya Rungkut Madya Gunung Anyar, Surabaya, Jawa Timur – 60294";
								// echo "Perkenalkan nama saya,".$nama."<br>"; 
								// echo "Panggil saja saya Nada, saya berasal dari".$alamat."<br>"; 
								// echo "Saya lahir di Bangkalan pada tanggal".$tanggal."<br>"; 
								// echo"Sekarang saya menempuh pendidikan".$pendidikan."<br>"; 
								// echo"di Kampus".$kampus."<br>";
								// echo "yang beralamat di".$alkam."<br>";
								?>
							</div>
						</div>
				</div>
			</div>
			<div class="grid_4">
				<div class="side-bar">
						<div class="sosial-media">
							<h4> CONTACT ME </h4>
							<ul>
								
							</ul>
						</div>
						<div class="FORMAL-EDUCATION">
							<h4> FORMAL EDUCATION </h4>
							<ul>
								
							</ul>
						</div>
				</div>
			</div>
					
		<div class="container_16" style="margin-top: 20px;">
			<div class="grid_16">
				<div class="footer">
					<center>2020&copy; All right reserved | This template is made with love by Nadaist </center>
				</div>
			</div>
		</div> -->
	</body>
</html>