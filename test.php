<?php
	
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$database = "first_db";
	$db_found = mysqli_select_db($db_handle, $database);
	if ($db_found) {
		$sql = "SELECT username, fullname from users";
		$result = mysqli_query($db_handle, $sql);
		while ($db_field = mysqli_fetch_assoc($result)) {
			print $db_field['username'] . "<br>";
			print $db_field['fullname'] . "<br>";
		}

	}
	else {
		print "Database not found";
	}
	//mysql_close($db_handle);
?>