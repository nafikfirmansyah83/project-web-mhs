<?php
session_start();
if(isset($_SESSION['email'])) 
{
	echo '<script>window.location.replace("./dashboard.html");</script>';
} 
else 
{
?>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/hal-login.css"/>
</head>
	<div class="global-container" >
		<div class="card login-form">
			<div class="card-body">
				<h1 class="card-title text-center">
					L O G I N
				</h1>
				<div class="card-text">
					<form  action="./data-login.php" method="post">
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input placeholder="Masukkan email anda" type="email" class="form-control" id="email" aria-describedby="email" name="email">
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input placeholder="Masukkan password anda" type="password" class="form-control" id="password" name="password">
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
						</div>
						<button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php 
} 
?>