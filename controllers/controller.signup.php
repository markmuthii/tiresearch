<?php 
session_start();

if (isset($_POST["signup"])) {

	require_once "../config/db.php";

	$firstname = $db->real_escape_string($_POST["firstname"]);
	$lastname = $db->real_escape_string($_POST["lastname"]);
	$email = $db->real_escape_string($_POST["email"]);
	$phonenumber = $db->real_escape_string($_POST["phonenumber"]);
	$username = $db->real_escape_string($_POST["username"]);
	$password = $db->real_escape_string($_POST["password"]);

	$check_email = $db->query("SELECT * FROM users WHERE email = '$email'");

	if ($check_email->num_rows > 0) {

		$_SESSION["signup_error"] = "Please use a different email";

		header("Location: ../signup.php");

		exit();

	}else{

		$check_username = $db->query("SELECT * FROM users WHERE username = '$username'");

		if ($check_username->num_rows > 0) {

			$_SESSION["signup_error"] = "Please use a different username";

			header("Location: ../signup.php");

			exit();

		}else{

			$hashPass = password_hash($password, PASSWORD_DEFAULT);

			$signup_query = "INSERT INTO users (
                        first_name, last_name, email, phonenumber, username, password, role) 
                      VALUES (
                        '$firstname', '$lastname', '$email', '$phonenumber', '$username', '$hashPass', 'member')"; 

			$signup = $db->query($signup_query);

			if ($signup) {

				$_SESSION["signup_success"] = "Signup Success";

				header("Location: ./");

				exit();

			}else{

				$_SESSION["signup_error"] = "There was an error signing you up. Please try again.";

				header("Location: ../signup.php");

				exit();
			}
		}
	}
} else {
	$_SESSION["signup_error"] = "There was an error signing you up. Please try again.";

	header("Location: ../signup.php?post");

	exit();
}


?>