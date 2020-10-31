<?php
session_start();
require 'config/db.php';
require_once'emailController.php';
$errors=array();
$username="";
$email="";


//if user clicks on sign up button

if(isset($_POST['signup-btn']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$passwordConf=$_POST['passwordConf'];

	//Validation of fields

	if(empty($username))
		{
			$errors['username']="username required";
		}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$errors['email']="The email address is invalid";
	}

	if(empty($email))
		{
			$errors['email']="Email required";
		}
	if(empty($password))
		{
			$errors['password']="password required";
		}
	if($password !== $passwordConf)
	{
		$errors['password']="The passwords do not match";
	}
	//Creating prepred SQL query.
	//Checking if email id already exists within database.

	$emailQuery= "SELECT * FROM users where email=? LIMIT 1";
	$stmt=$conn->prepare($emailQuery);
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$result=$stmt->get_result();
	$userCount=$result->num_rows;
	$stmt->close();
	//Checking if the above prepared statement has retrieved a query
	if($userCount >0)
	{
		$errors['email']="Email already exists";
	}


	if(count($errors)===0)
	{
		//encrypts password entered and stores it in password variable
		$password=password_hash($password, PASSWORD_DEFAULT);
		//bin2hex creates a random string between 100 characters and stores the value in token
		$token=bin2hex(random_bytes(50));
		$verified=false;

		//again using prepared SQL command

		$sql= "INSERT INTO users(username,email,verified,token,password) VALUES(?,?,?,?,?)";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ssbss',$username,$email,$verified,$token,$password);

		if($stmt->execute())
		{
			//login user
			$user_id=$conn->insert_id;
			$_SESSION['id']=$user_id;
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
			$_SESSION['verified']=$verified;

			//send verification email

				//sendVerificationEmail($email,$token);


			//Set Fash message

			$_SESSION['message']="You are now logged in";
			$_SESSION['alert-class']="alert-success";
			header('location: ../header2.php');
			exit();
		}
		else
		{
			$errors['db_error']="Database ERROR";
		}
		

	}

}

//if the user clicks on the login button

 if(isset($_POST['login-btn']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	//Validation of fields

	if(empty($username))
		{
			$errors['username']="username required";
		}
	
	if(empty($password))
		{
			$errors['password']="password required";
		}
	if(count($errors)===0)
	{
		 //Using prepared SQL statements
		$sql="SELECT * FROM users where email=? OR username=? LIMIT 1";
		$stmt=$conn->prepare($sql);
		$stmt->bind_param('ss',$username,$username);
		$stmt->execute();
		$result=$stmt->get_result();
		$user=$result->fetch_assoc();

		if(password_verify($password,$user['password']))
		{
			//login successful
	
			
			$_SESSION['id']=$user['id'];
			$_SESSION['username']=$user['username'];
			$_SESSION['email']=$user['email'];
			$_SESSION['verified']=$user['verified'];

			
			//Set Fash message

			$_SESSION['message']="You are now logged in";
			$_SESSION['alert-class']="alert-success";
			header('location: ../header2.php');
			exit();
		
		}

		else
		{
			$errors['login_fail']="Wrong credentials";
		}
	}
		
}

//logout functionality

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['verified']);
	header('location:login.php');
	exit();
}