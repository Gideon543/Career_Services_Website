<?php

	require __DIR__."/../controllers/login_controllers.php";

	$loginDetails = new LoginController();
?>
<?php
		$errors=array('email'=>'','password'=>'','display'=>'');
		$email=$password=$display="";

		
		if(isset($_POST['submit'])){

			

			// Grab form inputs
			//The htmlspecialchars is being used for security reasons
			$email = htmlspecialchars($_POST['email']);
			$password=htmlspecialchars($_POST['password']);

			if(!preg_match('/"^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$"/',$email)){
				$errors['email'] = "Not a valid email";
			}
			if(!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/",$password)){
				$errors['password']= "Password length must be more than 8.";
			}
			

			//Backend Check
			if($loginDetails -> checkDetails($email, $password)){
				// $errors['emaildb'] = " a valid email";
				// $errors['passworddb']= "Incorrect Password";
				header('location:../views/dashboard.php');
			}else{
				$errors['display']="Incorrect username or password";
			}
			// if(count($errors)===0){
			// 	header('location:dashboard.php');
			// }
			
		}

	?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="./style.css" />
		<title>Login</title>
	</head>

	<body>
		<div class="login-main">
			<div class="column login-wrapper">
			</div>

			<div class="column col">
				<form action="" method="POST">
					<h3 class="mb-5">Great to see you again</h3>
					<small style="color:red;"><?=$errors['display'] ?></small>
					<div class="mb-3">
						<label for="name" class="form-label">Email</label>
						<input
							type="email"
							class="form-control"
							id="email"
							name="email"
							required
						/>
						
							
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" required/>
						
					</div>
					<div class="login mb-3">
						<button type="submit" class="btn btn-primary" name="submit">Login</button>
					</div>
					<div class="form-text">
					 <a href="">Forgot Password?</a>	
					</div>
				</form>
			</div>
		</div>
		
	</body>
	<footer class="footer-main p-2 d-flex justify-content-center ">
		Career Services department @2021
	</footer>

	
</html>