<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="mt-5 mb-5">
    	<div class="container">
    		<div class="col-lg-5 col-md col-sm-5" style="margin: 80px auto;">
        		<div class="card">
        			<div class="card-header text-center">
          			<img src="img/loginn.png" width="200px">
          			<h4>LOGIN</h4>
        			</div>
        				<div class="card-body">
        				<form action="cek_login.php" method="POST">
            			<div class="col">
              				<label class="fw-semibold">Username</label>
              				<input type="text" name="username" class="form-control">
            			</div>

			            <div class="col">
			              	<label class="fw-semibold">Password</label>
			              	<input type="password" name="password" class="form-control">
			            </div>

			            <div class="col">
			             	<label for="level" class="fw-semibold">Level</label>
			                	<select name="level" class="form-select">
			                 		<option value="Superadmin">Super Admin</option>
				                 	<option value="Admin">Admin</option>
				                 	<option value="Academic">Academic</option>
				                 	<option value="Parent">Parent</option>
				                 	<option value="Principal">Principal</option>
				                 	<option value="Registrant">Registrant</option>
				                 	<option value="Staff">Staff</option>
				                 	<option value="Student">Student</option>
				                 	<option value="Studentship">Studentship</option>
				                 	<option value="Teacher">Teacher</option> 
			          			</select>
			            </div>

			            <div class="col d-grid mt-3">
			              	<button class="btn btn-primary" type="submit">Login</button>
			            </div>
        				</form>
      					</div>
      			</div>
      		</div>
    	</div>
  	</div>
<style>
    body{
  		background-color: #FD841F;
  	}
  	</style>
</body>
</html>