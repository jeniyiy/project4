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
          <h4 class="text-center" style="color: #153462;">Input Manual Book Hyperloop Edu Pro</h4><hr>
          <div class="card-body text-center">
  <form action="aksiInputBuku.php" method="POST">
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">ID Buku</label>
    <div class="col-sm-5">
      <input type="text" name="id_buku" class="form-control">
    </div>
  </div>
<div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Nama Manual Book</label>
    <div class="col-sm-5">
      <input type="text" name="nama_buku" class="form-control">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Modul</label>
    <div class="col-sm-5">
      <input type="text" name="modul" class="form-control">
    </div>
  </div>    
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Role</label>
    <div class="col-sm-5">
      <select class="form-select" name="role" id="role">
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
      <input class="form-control" type="file" name="gambar_modul" accept="image/png, image/jpeg">
    </div>
  </div>  
  <div class="mb-3 row">
    <label class="col-sm-5 col-form-label">Link Drive</label>
    <div class="col-sm-5">
      <textarea rows="5" name="link" class="form-control"></textarea>
    </div>
  </div> 

  <div class="mb-3 row">
    <div class="col-12 mb-3">
      <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
      <a href="home_superadmin.php#manualbook" class="btn btn-success">KEMBALI</a>
    </div>
  </div>   
        </form>
    </div>
</div>
</section>
</body>
</html>