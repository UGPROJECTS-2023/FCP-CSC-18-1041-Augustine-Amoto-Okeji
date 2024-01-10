<?php 
	/*access denied in for logging straight into config.php folder*/
	// if direct access to this page cannot directly affect this file
if(preg_match("/config.php/",$_SERVER['SCRIPT_FILENAME'])){
	die("Access denied: Please stay away from here.");
}

	$connection = mysqli_connect('localhost','root','','exceptional') or die("Database Not connected".mysqli_connect_error());
	session_start();
 ?>