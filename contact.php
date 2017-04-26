<?php
require_once("class.page.php");

	class ContactPage extends Page{
		
		public function __construct(){
			
			$this->s = array("<script src='jquery/jquery-1.10.1.js'></script>" , "<script type='text/javascript' src='javascript/date.js'></script>" ,"<script type='text/javascript' src='javascript/ajax.js'></script>");		
		$this->l = array("<link type='text/css' rel='stylesheet' href='css/index.css'>","<link type='text/css' rel='stylesheet' href='css/contact.css'>");
		$this->m = array("<meta charset='utf-8'>","<meta name='description' content='Benny Dorlisme Portfolio Website'>","<meta name='keywords' content='Benny Dorlisme'>","<meta name='keywords' content='Dorlisme'","<meta name='keywords' content='computer programmer'");
	
		$this->setPageBodyHeader();
		$this->setPageBodyBody();
		parent::__construct($this->s,$this->m,$this->l , ($this->page_body_header . $this->page_body_body));
		}
		public function setPageBodyHeader(){
			
			$this->page_body_header = "<section id='page_content'>
		<header id='page_content_header'>
		<div id='page_content_header_container'>
		<div id=''>
		      	 <p style='padding-right:20px; padding-left:20px;margin-bottom:10px;'>
                        	Benny Dorlisme<br/>
                            Technical Specialist<br/>
                           <a href='mailto:bennydorlisme@gmail.com'>BennyDorlisme@gmail.com</a><br/>
                            (929)-377-3969 
                        </p>
		<p style='padding-right:20px; padding-left:20px;margin-bottom:10px;'>
                    	Please feel free to leave me your contact information so I can get in touch with you. Thank You!
                    </p>
				
			
		</div>
		
	</div>
	</header>";
			
		
		}
		public function setPageBodyBody(){
			$this->page_body_body = "<div id='page_content_body'>

                    <form id='contact_form' action='contact.php' method='post'>
                    	<fieldset>
                    		<legend>Your Contact Information</legend>
                    		<label for='first_name'>
                            	First Name:
                            </label>
                    		<input type='text' name='first_name' id='first_name'/>
                    		<br/>
                     		<label for='last_name'>Last Name:</label>
                    		<input type='text' name='last_name' id='last_name'/>
                            <br/>
                            <label for='email' style='margin-right:33px;'>Email:</label>
                            
                    		<input type='email' name='email' id='email'/>
                            
                     
                            <input type='submit' value ='Send'/>
                    	</fieldset>
                    </form>
               
			</div>
			";
		}
		public function setPageBodyFooter(){
			
		}
	}
	
	$page = new ContactPage();
$page->printPage();
?>


