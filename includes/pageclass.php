<?php
include("connection.php");
class MyPage 
{
	public $location;
	
	public $main_header;
	
	public $sub_header;
	
	public $content;
	
	private $hits;
	
	
	
	public function __construct($name)
	{
	
		$this->location = $name;
		
	}
	
	public function setMainHeader($name)
	{
		global $connection;
		
		if($name == "Bio")
		{
			$this->main_header = $connection->query("SELECT * FROM pages WHERE name = '$name'");
			$row = mysqli_fetch_array($this->main_header);
			return $row['header'];
		}
		elseif($name == "IT")
		{
			$this->main_header = "Information Technology";
			
			return $this->main_header;
		}
		if($name == "QA")
		{
			$this->main_header = "Quality Assurance";
			
			return $this->main_header;
		} 
		
	}
	
	public  function setContent($name,$content_number)
	{
		global $connection;
		
			 $query = $connection->query("SELECT * FROM pages WHERE name = '$name'");
			 
			 $row = mysqli_fetch_array($query);
			 
			 if($content_number == 1)
			 {
			 $this->content = $row['section1'];
			  $this->setImage();
			 }
			 
			 else if($content_number == 2)
			 $this->content = $row['section2'];
			 
			 else if($content_number == 3)
			 $this->content = $row['section3'];
			 
			 else if($content_number == 4)
			 $this->content = $row['section4'];
			 
			
			 
			 return  $this->content;
		
	
	
	}
	
	public function setSubHeader($name, $sub_header_number)
	{
		global $connection;
		
		$query = $connection->query("SELECT * FROM pages WHERE name = '$name'");
			 
			 $row = mysqli_fetch_array($query);
			 
			 if($sub_header_number == 1)
			 $this->sub_header = $row['sub_header1'];
			 
			 else if($sub_header_number == 2)
			 $this->sub_header = $row['sub_header2'];
			 
			 else if($sub_header_number == 3)
			 $this->sub_header = $row['sub_header3'];
			 
			 else if($sub_header_number == 4)
			 $this->sub_header = $row['sub_header4'];
			 
			 return  $this->sub_header;
	}
   
   public function setImage()
   {
	if($this->location == "Bio")
	 echo("<img src='img/benny.jpg' class='body_image'/>");
	 else if($this->location == "IT")
	 echo("<img src='img/motherboard3.jpg' class='header_image'/>");
	 
   }
}
?>