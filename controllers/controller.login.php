<?php 

if (isset($_POST["login"])) {

	session_start();

	require_once "../config/db.php";

	$username = $db->real_escape_string($_POST["username"]);
	$password = $db->real_escape_string($_POST["password"]);

  // if username for users
	$user = $db->query("SELECT * FROM users WHERE username = '$username'");

	if ($user->num_rows > 0) {

		$user = $user->fetch_array();

		if (password_verify($password, $user["password"])) {

			$_SESSION["firstname"] = $user["first_name"];
			$_SESSION["lastname"] = $user["last_name"];
			$_SESSION["user_id"] = $user["id"];
			$_SESSION["username"] = $user["username"];
			$_SESSION["email"] = $user["email"];
			$_SESSION["phonenumber"] = $user["phonenumber"];
			$_SESSION["role"] = $user["role"];
			
			$_SESSION["login_success"] = "Successfully logged in.";

      header("Location: ../search.php");

      exit();

		}else{

			$_SESSION["login_error"] = "Invalid credentials.";

      header("Location: ../");

      exit();
      
		}
		
  } else {
    $_SESSION["login_error"] = "Invalid credentials.";

    header("Location: ../");

    exit();

	}

} else {

    header("Location: ../login.php");

    exit();
}

?>