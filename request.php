<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit;
    }
require_once("Forte.php");
    $fname= $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $request = $_POST['request'];

//$connection = "mysql:host=192.168.1.15;dbname=portfolio";
	$pdo = new PDO(DB_CONNECTION,DB_USERNAME,DB_PASSWORD);


$params = array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"type"=>$request,"comment"=>$comment);
//$pdo = new PDO($connection,"root","");

$stmt = $pdo->prepare("INSERT INTO request(firstname,lastname,email,type,comment,requesttime) VALUES(?,?,?,?,?,now())");

$t = $stmt->execute(array_values($params));
print_r($stmt->errorInfo());

$stmt = null;
$pdo = null;
$connection = null;
exit;

?>