<?php require_once 'controller/authController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login </title>
</head>
<body>
	<div class="container">
		<div class="row"> 
			<div class="col-md-4 offset-md-4 login">
				<form action="login.php" method="post">
					<h3 class="text-center">Login</h3>

					<?php if(count($errors)>0): ?>
						<div class="alert alert-danger">
						<?php foreach($errors as $error): ?>
							<li> <?php echo $error; ?> </li>
						<?php endforeach; ?>
						</div>
						<?php endif; ?> 

					<!--JS authentication for forms can also be implemented here-->

						<!--<div class="alert alert-danger">

							<li> Username required</li>
						</div>-->

					<div class="form-group">
						<label for="username"> Username or Email id</label>
						<input type="text" name="username" value= "<?php echo $username;?>" class="form-control form-control-lg">
					</div>
					
					<div class="form-group">
						<label for="password"> Password</label>
						<input type="password" name="password" class="form-control form-control-lg">
					</div>
					
					<div class="form-group">
						<button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Log in</button>
					</div>
					<p class="text-center">Not a member? <a href="signup.php">Sign up</a></p>
				</form>
			</div>
		</div>
	</div>

</body>
</html 