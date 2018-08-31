<?php  

if (!empty($_SERVER["SCRIPT_FILENAME"]) && "global.php" == basename($_SERVER["SCRIPT_FILENAME"])) {
	header("Location: ../");
	exit();
}

define("DB_SERVER", "localhost");

define("DB_USER", "root");

define("DB_PASS", "");

define("DB_NAME", "tiresearch");

define("HOME_URL", "http://localhost/tiresearch/");

?>