<?php  




if (isset($_POST["search"])) {

	include "../config/db.php";

	$make = $db->real_escape_string($_POST["make"]);
	$model = $db->real_escape_string($_POST["model"]);

	$execQuery = $db->query("SELECT * FROM car_information WHERE make = '$make' AND model = '$model'");

	if ($execQuery->num_rows > 0) {
		
		$isCarFound = true;
		$cars = $execQuery->fetch_array();
		
		echo json_encode($cars);

	} 

}

?>