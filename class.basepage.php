<?php
require_once("Forte.php");
	class BasePage{

		public $opening_html_tag   = "<html lang='en-US'>";
		private $closing_html_tag   = "</html>" ;
		   private $opening_header_tag = "<head>";
		   private $closing_header_tag = "</head>" ;
		private $opening_body_tag   = "<head>";
		private   $closing_body_tag   = "</head>" ;
		private   $head               = "";
		private   $body               = "";
		private   $scripts            = null;
		private   $links              = null;
		private   $meta_data          = null;
		
		private  $full_page          = null; 
		public    $name               = null;
		private $page_header      = null;
	protected $page_body_header = "";
	protected $page_body_body   = "";
	
	protected $s                = null;
	protected $l                = null;
	protected $m                = null;
		public function __construct($scripts , $links , $meta_data , $body_content){
			$this->scripts = array($scripts);
			$this->links = array($links);
			$this->meta_data = array($meta_data);
			$this->head .= ("<!DOCTYPE html> 
			" .$this->opening_html_tag);
			$this->head .= $this->opening_header_tag;
			$this->head .= "<meta name='description' content='Benny Dorlisme Portfolio Website'>";
            $this->head .= "<meta name='author' content='Benny Dorlisme , me@BennyDorlisme.com'>";
            $this->head .= "<meta name='keywords' content='BennyDorlisme , Benny , Dorlisme'>";
            $this->head .= "<meta name='viewport' content='width=device-width'>";
            $this->head .= "<meta charset='utf-8'>";

			foreach($meta_data as $md){
				$this->head .= $md;
			}
            $this->head .="<script src='jquery/jquery-3.2.1.js'></script>";
			foreach($scripts as $s){
				$this->head .= $s;
			}
            $this->head .= "<link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>";
            $this->head .= "<link type='text/css' rel='stylesheet' href='css/bootstrap.css'>";
			foreach($links as $l){
				$this->head .= $l;
			}
				$this->head .="<link type='text/css' rel='stylesheet' href='css/index.css'>";


			$this->head .= $this->closing_header_tag;
			$this->body .= $this->opening_body_tag;
			$this->setHeader();
			$this->body .= $body_content;
			$this->setFooter();
			$this->body .= $this->closing_body_tag;
			$this->body .= $this->closing_html_tag;
			$this->full_page = ($this->head . $this->body);
			
		}
		public function setHeader(){
			
			$this->body .= "<div id='page'>
			 <section id='page_header' >
    	<header id='page_header_header' >
            <div>
        	<span >Welcome</span>
        	
        	 <nav id='social_network_buttons' >
                        	<li >
                        	<a href='https://www.facebook.com/benny.dorlisme.5'  target='_blank' title='FaceBook' >
                        	    <img src='img/fb.png' alt='FaceBook icon' />
                        	</a>
                        	</li>
                            <li >
                            <a href='http://www.youtube.com/channel/UCvHC0wCKLHfH3ZSF62_83pA' target='_blank' title='YouTube' >
                                <img src='img/yt.png' alt='YouTube icon' />
                                </a>
                                </li>
                            <li >
                            <a href='http://www.linkedin.com/pub/benny-dorlisme/24/2/890' target='_blank' title='LinkedIn' >
                            <img src='img/ln.png'alt='LinkedIn icon'/>
                            </a>
                            </li>
                            <li  >
                            <a href='https://plus.google.com/101507021089750723973/posts' target='_blank' title='Google Plus'>
                            <img src='img/gplus.png' alt='Google Plus icon' />
                            </a>
                            </li>
                            <li>
                            <a href='https://twitter.com/bennydorlisme ' target='_blank' title='Twitter' >
                            <img src='img/tw.png' alt='Twitter icon' />
                            </a>
                            </li>
                       
             </nav>
          </div>
        </header>
            
            <footer id='page_header_footer' >
            <div>
        <nav id='header_nav' >
            <li class='col-xs-offset-0'>
                <a href='index.php?page=' rel='Benny Dorlisme home page'>
                    Home 
                </a>
            </li>
        	<li>
        	    <a href='index.php?page=bio' rel='Benny Dorlisme biography page'>
        	        About Me 
        	     </a>
        	</li>
        	<li>
        	    <a href='index.php?page=contact' rel='Get in contact with Benny Dorlisme'>
        	        Contact
        	    </a>
        	</li>
            <li>
                <a href='index.php?page=consulting' rel='Let Benny Dorlisme be your computer consultant'>
                    Consulting
                </a>
             </li>
            <li>
                <a href='index.php?page=othersites' rel='Other websites made by Benny Dorlisme'>
                    Other Sites
                </a>
            </li>
           
        </nav>
            
</div>
           
        	</footer>
       </section>";
		}
		public function setFooter(){

          //  $connection = "mysql:host=192.168.1.15;dbname=portfolio;port=3306";
						$pdo = new PDO(DB_CONNECTION,DB_USERNAME,DB_PASSWORD);
          //  $pdo = new PDO($connection,"root","");
						$stmt = $pdo->prepare("select * from comments");
						
						$stmt->execute(array_values(array()));
			 			$array = $stmt->fetchAll(PDO::FETCH_BOTH);
			 		    $result = $array;
					$stmt = null;
				        $pdo = null;
				        $connection = null;
			$this->body .= " <section id='feedback'>
            	<div id='comment_container'>
            		<form action='' id='comment_form' >
        
            			<fieldset>
            				<legend ><h1>Feedback</h1></legend>
                			<p>
                            	Leave a comment.
                            </p> 
               				<label for='fname' >First Name:</label>
           					<input type='text' id='fname' name='fname' placeholder=' Your first name'/>
           
           					<br>
           
           					<label for='lname' >Last Name:</label>
           					<input type='text' id='lname' name='lname' placeholder='Your last name'/>
           
           					<br>
           
          		 			<label for='comment' > Comment:</label>
          		 			<textarea rows='5' id='comment_box'  placeholder='Your comment' ></textarea>
           					<input type='hidden' size='70'  name='comment' placeholder='Your comment' >
                            
							<input type='button' id='submit_button' value='Comment' onClick='makeComment();'  >
           
           				</fieldset>
                        
           		</form>
           		
                
                ";
                			
					
							foreach($result as $row){
								$first_name =$row['firstname'];
							$last_name =$row['lastname'];
							$comment =$row['comment'];
							$time =$row['time'];
                                $this->body .="<div class='comment'>";
							$this->body .= "<h4 style='margin-left:30px; padding: 0px; display:inline;'>" ;
							$this->body .=  strtoupper(substr($first_name,0,1)) ;
							$this->body .= strtolower(substr($first_name,1,strlen($first_name)));
							$this->body .=  " ";
							$this->body .=  strtoupper(substr($last_name,0,1)); 
							$this->body .= strtolower(substr($last_name,1,strlen($last_name)));
							$this->body .= "</h4>" ;
							$this->body .= "<span>";
							$this->body .= " ";
							$this->body .= $time ;
							$this->body .= "</span>";
							$this->body .="<br/>";
							$this->body .= "<p style='margin-left:30px; padding:0px; width: 75%;'>";
							$this->body .= "<b>Said...</b>";
							$this->body .= $comment;
							$this->body .= "</p>";
                                $this->body .="</div>";
							$first_name = null;
							$last_name = null;
							$comment = null;
							$time = null;
							}
           $this->body .="</div></div>
            </section></div></section>";
		}
		public function printPage(){
			
			echo($this->full_page);
		}
	}
?>