<?php
	include("pageclass.php");
	if(isset($_GET["page"]))
	{
				
	if($_GET["page"] == "Bio" || $_GET["page"] == "IT" || $_GET["page"] == "QA" || $_GET["page"] == "programming" || $_GET	["page"] == "contact" || $_GET["page"] == "consulting" || $_GET["page"] == "hobbies" || $_GET["page"] == "othersites" )
	{
		
		
		$page = new MyPage($_GET["page"]);
		$current_page = $page->location;
		
	}
	else
	{
		header("HTTP 1.1 302 Redirect");
		header("Location: 404.php");
	}
	
	}
	else if(!isset($_GET["page"]))
	{
		$_GET["page"] = "Bio";
		
		$page = new MyPage( $_GET["page"]);
		$current_page = $page->location;
	}
?>