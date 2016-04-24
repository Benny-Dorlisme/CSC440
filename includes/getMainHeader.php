<?php 
include("pageObject.php");

$page->location = $_GET["page"];
$main_header = $page->setMainHeader($page->location);
echo($main_header);	

?>