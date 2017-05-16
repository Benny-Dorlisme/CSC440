<?php
require_once("class.page.php");
require_once("class.email.php");

	class ContactPage extends Page{
		
		public function __construct(){
			
			$this->s = array("<script type='text/javascript' src='javascript/date.js'></script>" ,"<script type='text/javascript' src='javascript/ajax.js'></script>");
		$this->l = array("<link type='text/css' rel='stylesheet' href='css/contact.css'>");
		$this->m = array();
	
		$this->setPageBodyHeader();
		$this->setPageBodyBody();
		parent::__construct($this->s,$this->m,$this->l , ($this->page_body_header . $this->page_body_body));
		}
		public function setPageBodyHeader(){
			
			$this->page_body_header = "<section id='page_content'>
		<header id='page_content_header'>
		<div id='page_content_header_container'>
		<div id=''>
		      	 <p>
                        	Benny Dorlisme
                            Technical Specialist
                           <a href='mailto:bennydorlisme@gmail.com'>BennyDorlisme@gmail.com</a>
                            (929)-377-3969 
                        </p>
		<p >
                    	Please feel free to contact me at anytime. Thank You!
                    </p>
				
			
		</div>
		
	</div>
	</header>";
			
		
		}
		public function setPageBodyBody(){

			$this->page_body_body = "<div id='page_content_body'>
				<hgroup>
					 <h1>Text Benny</h1>
						<h4>The fastest way to contact Benny is to send him a text straight to his phone.<h4>
						 
						 <h4>You can send Benny a text anonymously by sending your message via the text box below.<h4>			
				</hgroup>
				
                 <form action='' id='text_form' >
                 	<fieldset>
                		<input id='senders_name' type='text' name='name' placeholder='Your name'>
                		<br/>
                 		<textarea rows='5' cols='50' id='mess' placeholder=\"Your text message straight to Benny's phone\"></textarea>
                 		<input type='hidden' name='message' id='hidden_mess'/>
                 		<input type='button' value='text' onclick='sendText()' />
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


