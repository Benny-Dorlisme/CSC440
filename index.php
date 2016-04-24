<?php 

if($_SERVER["REQUEST_METHOD"] != "GET" ){
	exit;
}

	 switch($_GET["page"]){
         
    case "Bio": include("bio.php");
    break;
    case "IT" : include("IT.php");
    break;
    case "QA" : include("QA.php");
    break;
    case "programming" : include("programming.php");
    break;
    case "contact": include("contact.php");
    break;
    case "consulting" : include("consulting.php");
    break;
    case "hobbies" : include("hobbies.php");
    break;
    case "othersites" : include("othersites.php");
    break;
    default : include("resume.php");
    break;
  }
?>
       
         
          
  
   
