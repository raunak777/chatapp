<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<?php include_once 'bootconfig.php'; ?>
</head>
<body>
	<div class="col-md col-xl-6 reg">
		<div class="card">
			<div class="card-header msg_head">
				<div class="d-flex bd-highlight">
					<h1 class="text-white">Registartion Form</h1>
				</div>
			</div>
			<div class="card-body p-4">
					<div class="form-group">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Name</div>
							</div>
							<input type="text" class="form-control" id="name" placeholder="ex: xyz">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Email</div>
							</div>
							<input type="email" class="form-control" id="email" placeholder="ex: example@domain.com">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Mobile</div>
							</div>
							<input type="number" class="form-control" id="number" placeholder="ex: 9999999999">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Password</div>
							</div>
							<input type="password" class="form-control" id="password" placeholder="ex: 12345">
						</div></div>
						<div class="form-group">
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text">Confirm Password</div>
							</div>
							<input type="password" class="form-control" id="cnfpassword" placeholder="ex: 12345">
						</div></div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Term & Conditions</label>
						</div>
						<button type="button" id="submitbtn" class="btn btn-primary btn-lg">Submit</button><br>
					<label>Already have accoutn?</label><a href="login.php">Signin</a>
				</div>
			</div>
		</div>
	</body>
	</html>