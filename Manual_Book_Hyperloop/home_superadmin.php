<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>MANUAL BOOK HYPERLOOP EDU PRO</title>
	<link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/12d28e295b.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand fixed-top bg-white shadow-sm">
  		<div class="container">
    		<h4 class="mt-2 fw-bold" style="color: #153462;">Hyperloop Edu Pro</h4>
    	<div class="justify-content-end">
      		<ul class="navbar-nav">
        		<li class="nav-item">
          			<a class="nav-link fw-semibold" href="#home" style="color: #153462;">Home</a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link fw-semibold" href="#user" style="color: #153462;">Users</a>
		        </li>
		        <li class="nav-item">
		          	<a class="nav-link fw-semibold" href="#manualbook" style="color: #153462;">Manual Book</a>
		        </li>
		        <li class="dropdown user user-menu">
          			<a class="nav-link dropdown-toggle fw-semibold" href="#" data-bs-toggle="dropdown" style="color: #153462;" role="button" aria-expanded="false"><i class="fa-solid fa-user"></i> <?= $_SESSION['nama_lengkap'] ?>
        		 	</a>
			          	<ul class="dropdown-menu p-5">
			          		<p class="text-center fw-bold">Profile</p>
			          		<li class="user-header">
			          			<img src="img/cewe.png" class="img-circle">
			          		</li>
			          		<li class="user-body">
			          			<div class="row">
			          				<div class="col-xs-4 text-center fw-bold">
			          					<p><?= $_SESSION['nama_lengkap'] ?></p>
			          				</div>
			          			</div>
			          			<div class="row">
			          				<div class="col-xs-4 text-left fw-semibold">
			          					<p>Username : <?= $_SESSION['username'] ?></p>
			          					<p>Level : <?= $_SESSION['level'] ?></p>
			          				</div>
			          			</div>
			          		</li>
			            	<li><hr class="dropdown-divider"></li>
			            	<li><a class="nav-link fw-semibold dropdown-item text-center" href="login.php" style="color: #153462;">Logout</a></li>
			          	</ul>
			    </li>
		    </ul>
    	</div>
  		</div>
	</nav>

	<div class="container">
		<!-- untuk home -->
		<section id="home" class="mb-5 d-flex">
			<img src="img/manual logo.jpg" class="mt-5 pt-5">
			<div class="my-5">
				<h2 class="mt-5 pt-5 text-center fw-bold fs-1">Manual Book</h2>
				<p class="text-center mt-3">Manual book adalah buku panduan yang dibuat untuk menyampaikan beberapa informasi kepada calon konsumen. Buku panduan sering digunakan pada produk baru, untuk memberikan informasi mengenai produk tersebut. Namun saat ini sebagian besar produk menggunakan inovasi teknologi baru. Kecanggihan teknologi mempengaruhi kinerja produk yang semakin sulit, oleh karena itu buku panduan dapat membantu konsumen dalam memahami kinerja produk.</p>
				<div class="text-center">
				<a href="#manualbook" class="btn btn-primary">Lihat Manual Book</a>
				</div>
			</div>
		</section>

		<!-- untuk user -->
		<section id="user" class="mb-5 d-flex">
			<div class="col-md-12">
			<div class="text-center mt-5">
				<h2 class="fw-bold fs-1">Users</h2>
				<a href="input_user.php" class="btn btn-info">[+] Tambah User</a>
				<table class="table table-hover table-bordered mt-3 text-center" align="center">
				  	<thead>
				    <tr>
				      	<th scope="col">ID</th>
		                <th scope="col">Username</th>
		                <th scope="col">Nama Lengkap</th>
		                <th scope="col">Password</th>
		                <th scope="col">Level</th>
		                <th scope="col">Opsi</th>
				    </tr>
				  	</thead>
				  	<tbody>
							<?php
			                $sql = "SELECT * FROM tb_user";
			                $query = mysqli_query($koneksi, $sql);
			                while($manualbook = mysqli_fetch_array($query)){
				                echo "<tr>";
				                echo "<td>".$manualbook['id']."</td>";
				                echo "<td>".$manualbook['username']."</td>";
				                echo "<td>".$manualbook['nama_lengkap']."</td>";
				                echo "<td>".$manualbook['password']."</td>";
				                echo "<td>".$manualbook['level']."</td>";

				                echo "<td>";
				                echo "<a
						                href='edit_user.php?id=".$manualbook['id']."' class='btn btn-warning'>Edit</a>";
				                echo "<a href='hapusUser.php?id=".$manualbook['id']."' class='btn btn-danger m-1'>Hapus</a>";
				                echo "</td>";
				                echo "</tr>";
			                }
			                ?>
				  	</tbody>
				</table>
			</div>
			</div>
		</section>

				<!-- untuk manual book -->
				<section id="manualbook" class="mb-5 d-flex">
				<div class="col-md-12">
				<div class="text-center mt-5">
				<h2 class="fw-bold fs-1 mt-5">Manual Book Hyperloop Edu Pro</h2>
				<a href="input_manualbook.php" class="btn btn-info">[+] Tambah Manual Book</a>
				<table class="table table-hover table-bordered mt-3 text-center" align="center">
				  	<thead>
				    <tr>
				      	<th scope="col">ID Buku</th>
						<th scope="col">Nama Buku</th>
						<th scope="col">Modul</th>
						<th scope="col">Role</th>
						<th scope="col">Gambar</th>
						<th scope="col">Link</th>
						<th scope="col">Opsi</th>
				    </tr>
				  	</thead>
				  	<tbody>
							<?php
								$sql = "SELECT * FROM tb_buku";
								$query = mysqli_query($koneksi, $sql);
								while($manualbook = mysqli_fetch_array($query)){
									echo "<tr>";
									echo "<td>".$manualbook['id_buku']."</td>";
									echo "<td>".$manualbook['nama_buku']."</td>";
									echo "<td>".$manualbook['modul']."</td>";
									echo "<td>".$manualbook['role']."</td>";
									echo "<td>".$manualbook['gambar_modul']."</td>";
									echo "<td>".$manualbook['link']."</td>";

									echo "<td>";
									echo "<a
											href='edit.php?id_buku=".$manualbook['id_buku']."' class='btn btn-warning'>Edit</a>";
									echo "<a
											href='hapus.php?id_buku=".$manualbook['id_buku']."' class='btn btn-danger m-1'>Hapus</a>";
									echo "</td>";
									echo "</tr>";
								}
								?>
				  	</tbody>
				</table>
			</div>
			</div>
		</section>
	</div>
	<section id="contact">
		<div class="container">
			<div class="d-flex">
				<div class="footer-section m-auto">
					<h3 class="fw-bold fs-3">Manual Book <br> Hyperloop Edu Pro</h3>
					<p >Aplikasi Manual Book Hyperloop Edu Pro berbasis website ini bertujuan untuk menyampaikan beberapa informasi tentang cara penggunaan Aplikasi Hyperloop Edu Pro.</p>
				</div>
				<div class="footer-section m-auto">
					<h3 class="fw-bold fs-3 my-3">Contact</h3>
	          	<div class="container">
	            	<div class="box">
	          		<div class="text">
	          			<p class="fs-5 fw-semibold"><i class="fa-solid fa-phone"></i> Phone</p>
	            		<h5 class="fs-6">+62 896-7113-9789</h5>
	          	</div>
	         	</div>
	          	<div class="box">
	          	<div class="text">
	          		<p class="fs-5 fw-semibold"><i class="fa-solid fa-location-dot"></i> Address</p>
	            	<h5 class="fs-6">Ruko Citayam Center, Jl. Raya Citayam No. 41 
	            	<br>Kec. Cipayung, Kota Depok, Jawa Barat 16438.</h5>
	          	</div>
	          	</div>
	          	<div class="box">
	          	<div class="text">
	          		<p class="fs-5 fw-semibold"><i class="fa-solid fa-envelope"></i> Email</p>
	            	<h5 class="fs-6 mb-4">jennywidiastutiwd@gmail.com</h5>
	          	</div>
	          	</div>
	          	</div>

				</div>
				</div>
			</div>
	</section>
	<div class="text-center mt-5 mb-5">
			&copy; 2022 <b>Manual Book</b> All Rights Reserved.
	</div>
<style>
body{
	margin: 0px;
	padding: 0px;
}

h2 {
	color: #153462;
}

.kartu-modul{
	width: 20%;
}

.kartu-modul p{
	color: #153462;
}

h3{
	color: #153462;
}

h5{
	color: #FD841F;
	width: 100%;
}

#contact {
	background: #dedede;
}

.footer-section{
	width: 40%;
}

.container .box .text h5{
	width: 100%;

}

.container .box .text p{
	color: #153462;
}
</style>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>