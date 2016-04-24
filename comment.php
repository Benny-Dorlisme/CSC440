<?php
include("includes/constants.php");

$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connection)
{
	die("Failed to connect MYSQL") . mysql_error();
}
$commentsdb = mysql_select_db(DB_COMMENTS, $connection);
if(!$commentsdb)
{
	die("Failed to connect database") . mysql_error();
}




$first_name = $_GET['fname'];
$last_name = $_GET['lname'];
$comment = $_GET['comment'];
$year = $_GET['year'];
$day = $_GET['date'];
$month = $_GET['month'];
$minute = $_GET['minute'];
$hour = $_GET['hour'];
$second = $_GET['second'];

$date =  $year . "-" . "0". ($month + 1) . "-"  .$day . date(" H:i:s" , mktime($hour, $minute, $second));


$insert = "INSERT INTO comment(FirstName,LastName,Comment,Time) VALUES('$first_name','$last_name','$comment','$date')";

mysql_query($insert);


	echo "<h4 style='margin-left:30px; padding: 0px; display:inline;'>" ;
	
echo strtoupper(substr($first_name,0,1)), strtolower(substr($first_name,1,strlen($first_name)));
echo " ";
echo strtoupper(substr($last_name,0,1)), strtolower(substr($last_name,1,strlen($last_name)));
echo "</h4>" ;
echo "<span>";
echo " ";
echo $date ;
echo "</span>";
echo "<br/>";
echo "<p style='margin-left:30px; padding:0px; width: 75%;'>";
echo $comment;
echo "</p>";

?>