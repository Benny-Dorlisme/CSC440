<?php
include("constants.php");

			$connection = new mysqli(SERVER,USER,PASS);
	if($connection->errno > 0)
	{
		echo($connection->error . "Error number " . $connection->errno);
		exit();
	}
	
	$database = $connection->select_db(DATABASE);
	if($connection->errno >0)
	{
		echo($connection->error . "Error number " . $connection->errno);
		exit();
	}
	
?>