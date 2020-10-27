include ('conn.php'); 
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
				<ul>
					<li><a href="https://www.instagram.com/nadaistt/"> Instagram</a></li>
					<li><a href="https://web.facebook.com/nadaistighfariana?_rdc=1&_rdr"> facebook</a></li>
					<li><a href="https://myaccount.google.com/personal-info?gar=1"> gmail</a></li>
					<li><a href="https://www.youtube.com/channel/UCYxjhATGyZSJXQvC8A8Gf9Q?view_as=subscriber"> youtube</a></li>
				</ul>
			</div>
			<div class="FORMAL-EDUCATION">
							<h4> FORMAL EDUCATION </h4>
							<ul>
								<li><a href="https://www.google.com/search?q=sdn+karanganyar+1&oq=sdnkaranganya&aqs=chrome.2.69i57j0i13l7.9040j0j7&sourceid=chrome&ie=UTF-8"> SD Negeri Karang Anyar 1 Bangkalan Madura</a></li>
								<li><a href="https://mtsn2jombang.sch.id/"> MTsN 2 Rejoso Peterongan Jombang 1</a></li>
								<li><a href="https://smadu1-jbg.sch.id/"> SMA DU 1 BPP-Teknologi Jombang</a></li>
								<li><a href="https://www.upnjatim.ac.id/"> UPN Veteran Jawa Timur</a></li>
							</ul>
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
								<?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM pemweb";
                  $result = mysqli_query(connection(),$query);
                 ?>
							</ul>
						</div>
						<div class="FORMAL-EDUCATION">
							<h4> FORMAL EDUCATION </h4>
							<ul>
								<?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM pemweb";
                  $result = mysqli_query(connection(),$query);
                 ?>
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