<?php
require_once("class.page.php");

	class BioPage extends Page{
		
		public function __construct(){
			
			$this->s = array("<script src='jquery/jquery-1.10.1.js'></script>" , "<script type='text/javascript' src='javascript/date.js'></script>" ,"<script type='text/javascript' src='javascript/ajax.js'></script>");		
		$this->l = array("<link type='text/css' rel='stylesheet' href='css/index.css'>","<link type='text/css' rel='stylesheet' href='css/bio.css'>");
		$this->m = array("<meta charset='utf-8'>","<meta name='description' content='Benny Dorlisme Portfolio Website'>","<meta name='keywords' content='Benny Dorlisme'>","<meta name='keywords' content='Dorlisme'","<meta name='keywords' content='computer programmer'");
	
		$this->setPageBodyHeader();
		$this->setPageBodyBody();
		parent::__construct($this->s,$this->m,$this->l , ($this->page_body_header . $this->page_body_body));
		}
		public function setPageBodyHeader(){
			
			$this->page_body_header = "<section id='page_content'>
		<header id='page_content_header'>
		<div id='page_content_header_container'>
		<div id='portfolio_picture_container'>
		
			<img id='portfolio_picture' src='img/benny.jpg' title='Picture of Benny Dorlisme' alt='Picture of Benny Dorlisme'/>
				
			
		</div>
		
	</div>
	</header>";
			
		
		}
		public function setPageBodyBody(){
			$this->page_body_body = "<div id='page_content_body'>
			<p id='bio' >
			Benny Dorlisme was born in Queens NY, and raised in Brooklyn, NY. He’s very talented, inheriting the brains of his Haitian native father and heart of his African-American mother Benny has made many of his life goals come to fruition. Although he wasn’t raised by his biological parents; growing in the foster care system up in he’s lived with at least 7 different families in his life. Despite the constant changes in his life the influence computer technology had on him stayed the same. Since the age of five Benny has been a wiz at using computer technology utilizing video games and other electronic devices with precision. He built his first computer at the age of 13 demonstrating a real talent for the occupation. In 2010 Benny graduated from PerScholas Institute of Technology becoming a certified computer technician and has been working in the field ever since. Benny is very proud of the short but prominent career he has interpolated into. Although He would consider himself successful growing up predominantly in Red Hook a neighborhood in Brooklyn, NY he has personally felt the effects a low socioeconomic status can have on a person’s life. Losing family and friends to unnecessary circumstances resulting in incarceration and death is a part of the spur driving Benny to create change in his community.
			</p>
			</div>
			";
		}
		public function setPageBodyFooter(){
			
		}
	}
	
	$page = new BioPage();
$page->printPage();
?>
