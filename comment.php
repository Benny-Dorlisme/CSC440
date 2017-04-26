<?php


$d = new PDO("mysql:host=db679312378.db.1and1.com;dbname=db679312378","dbo679312378","Real_numbers101!");






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

$params = array("firstname" => $first_name,"lastname"=>$last_name,"comment"=>$comment,"time"=>$date);
$insert = "INSERT INTO comments(firstname,lastname,comment,time) VALUES(?,?,?,?)";
$s = $d->prepare($insert);
$s->execute(array_values($params));
$d= null;
$s = null;

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