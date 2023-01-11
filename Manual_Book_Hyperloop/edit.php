<?php

session_start();
include('koneksi.php');

  $id_buku = $_GET['id_buku'];
  $sql = "SELECT * FROM tb_buku where id_buku = '$id_buku'";
  $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

  while($manualbook = mysqli_fetch_array($query))
{
  $nama_buku = $manualbook['nama_buku'];
  $modul = $manualbook['modul'];
  $role = $manualbook['role'];
  $gambar_modul = $manualbook['gambar_modul'];
  $link = $manualbook['link'];
}
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>MANUAL BOOK HYPERLOOP EDU PRO</title>
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand fixed-top bg-white shadow-sm">
      <div class="container">
        <h4 class="mt-2 fw-bold" style="color: #153462;">Hyperloop Edu Pro</h4>
      </div>
  </nav>

<section class="pt-4">
  <div class="container bg-light shadow-lg rounded-3 pt-3 mt-5" style="width: 700px;">
          <h4 class="text-center" style="color: #153462;">Edit Manual Book Hyperloop Edu Pro</h4><hr>
          <div class="card-body text-center">
  <form action="prosesEdit.php" method="POST">
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">ID Buku</label>
    <div class="col-sm-5">
      <input type="text" name="id_buku" class="form-control" value="<?php echo $id_buku; ?>" readonly>
    </div>
  </div>
<div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Nama Manual Book</label>
    <div class="col-sm-5">
      <input type="text" name="nama_buku" class="form-control" value="<?php echo $nama_buku; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Modul</label>
    <div class="col-sm-5">
      <input type="text" name="modul" class="form-control" value="<?php echo $modul; ?>">
    </div>
  </div>    
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Role</label>
    <div class="col-sm-5">
      <select class="form-select" name="role" id="role">
          <option><?php echo $role; ?></option>
          <option value="admin">Admin</option>
          <option value="academic ">Academic</option>
          <option value="parent ">Parent</option>
          <option value="principal ">Principal</option>
          <option value="registrant ">Registrant</option>
          <option value="staff ">Staff</option>
          <option value="student ">Student</option>
          <option value="studentship ">Studentship</option>
          <option value="teacher ">Teacher</option>
              </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Choose a Picture</label>
    <div class="col-sm-5">
      <input class="form-control" type="file" name="gambar_modul" accept="image/png, image/jpeg" <?php echo $gambar_modul?>>
    </div>
  </div>  
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Link Drive</label>
    <div class="col-sm-5">
      <textarea name="link" class="form-control"><?php echo $link; ?></textarea>
    </div>
  </div> 

  <div class="mb-3 row">
    <div class="col-12 mb-3">
      <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
      <a href="home_superadmin.php#manualbook" class="btn btn-success">BATAL</a>
    </div>
  </div>   
        </form>
    </div>
</div>
</section>
</body>
</html>