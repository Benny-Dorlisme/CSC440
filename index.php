<?php 

if($_SERVER["REQUEST_METHOD"] != "GET" ){
	exit;
}else if(!$_GET["page"]){
    header("Location:resume.php");
    exit;
}

	 switch($_GET["page"]){
         
    case "bio"        : header("Location:bio.php");
        exit;
    break;
    case "IT"         : header("Location:IT.php");
    exit;
    break;
    case "contact"    : header("Location:contact.php");
    exit;
    break;
    case "consulting" : header("Location:consulting.php");
        exit;
    break;
    case "hobbies"    : header("Location:hobbies.php");
    exit;
    break;
    case "othersites" : header("Location:othersites.php");
    exit;
    break;
    default           : header("Location:resume.php");
    exit;
    break;
  }
?>
       
         
          
  
   
