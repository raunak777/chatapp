<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<?php include_once 'bootconfig.php'; ?>
</head>
<body>
	<div class="col-md col-xl-6 reg">
		<div class="card">
			<div class="card-header msg_head">
				<div class="d-flex bd-highlight">
					<h1 class="text-white">SignIn Form</h1>
				</div>
			</div>
			<div class="card-body p-4">
					<div class="form-group">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Email</div>
							</div>
							<input type="email" class="form-control" id="emailid" placeholder="ex: example@domain.com">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Password</div>
							</div>
							<input type="password" class="form-control" id="passwordd" placeholder="ex: 12345">
						</div></div>
						<button type="button" id="loginbtn" class="btn btn-primary btn-lg">Login</button><br>
					<label>Not account, create an account?</label><a href="registration.php">SignUp</a>
				</div>
			</div>
		</div>
	</body>
	</html>