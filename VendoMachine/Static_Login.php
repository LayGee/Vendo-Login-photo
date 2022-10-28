<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jyfjgkgk</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<br><br><br>
		<div class="container">
		<div class="d-flex justify-content-center">
			<div class="card mt-5 text-center">
				<div class="card-body">
					<br><br>
					<i class="fa fa-user-circle fa-5x"></i>

					<br><br>

					<form method="post">
						<!--------------dropdown----------------->
						<select class="form-select" aria-label="userStatus" name="userType">
							<option value="Admin" selected>Admin</option>
							<option value="Content Manager">Content Manager</option>
							<option value="System User">System User</option>
						</select>

						<br><br>

						<!--------------Username----------------->
						<input type="text" class="form-control" name="userName" placeholder="Username">

						<br><br>

						<!--------------Password----------------->
						<input type="password" class="form-control" name="userPass" placeholder="Password">

						<br><br> 

						<button type="submit" class="btn btn-danger" name="signIn">Sign In</button>
					</form>
				</div>
			</div>

			<?php
				$users = array(
					array(
						'type' => 'Admin',
						'username' => 'admin',
						'password' => 'pass123',
					),

					array(
						'type' => 'Content Manager',
						'username' => 'juan',
						'password' => 'cruz123',
					),

					array(
						'type' => 'Content Manager',
						'username' => 'pepito',
						'password' => '12345',
					),

					array(
						'type' => 'System User',
						'username' => 'antonio',
						'password' => 'luna123',
					)
				);

				//print_r($user);

				if (isset($_POST['signIn'])) {
					$status = $_POST['userType'];
					$name = $_POST['userName'];
					$pass = $_POST['userPass'];

					if ($status === $users[0]['type']) {
						if ($name === $users[0]['username']) {
							if ($pass === $users[0]['password']) {
								echo
								'<div class="alert alert-success" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo
									'<div class="alert alert-success" role="alert">
										Invalid Username/ Password
									</div>';
							}
						}
						else{
							echo
								'<div class="alert alert-success" role="alert">
									Invalid Username/ Password
								</div>';
						}

					}
					else{
						echo
							'<div class="alert alert-success" role="alert">
								Invalid Username/ Password
							</div>';

					}
				}	
			?>
		</div>
	</div>
	</center>
</body>
</html>