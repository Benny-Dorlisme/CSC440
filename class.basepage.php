<?php
ini_set('display_errors',1);
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
			foreach($meta_data as $md){
				$this->head .= $md;
			}
			foreach($scripts as $s){
				$this->head .= $s;
			}
			foreach($links as $l){
				$this->head .= $l;
			}
				
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
			 <section id='page_header'>
    	<header id='page_header_header'>
         
        	<span>Welcome</span>
        	 <nav id='social_network_buttons'>
                        	<li><a href='https://www.facebook.com/benny.dorlisme.5'  target='_blank' title='FaceBook'><img src='img/fb.png'alt='FaceBook icon'/></a></li>
                            <li><a href='http://www.youtube.com/channel/UCvHC0wCKLHfH3ZSF62_83pA' target='_blank' title='YouTube'><img src='img/yt.png' alt='YouTube icon'/></a></li>
                            <li><a href='http://www.linkedin.com/pub/benny-dorlisme/24/2/890' target='_blank' title='LinkedIn'><img src='img/ln.png'alt='LinkedIn icon'/></a></li>
                            <li><a href='https://plus.google.com/101507021089750723973/posts' target='_blank' title='Google Plus'><img src='img/gplus.png' alt='Google Plus icon'/></a></li>
                            <li><a href='https://twitter.com/bennydorlisme ' target='_blank' title='Twitter'><img src='img/tw.png' alt='Twitter icon'/></a></li>
                       
                    </nav>
        </header>
            <br/>
            <footer id='page_header_footer'>
        <nav id='header_nav'>
            <li><a href='index.php?page=' rel='Benny Dorlisme home page'>Home </a></li>
        	<li><a href='index.php?page=bio' rel='Benny Dorlisme biography page'>About Me </a></li>
        	<li><a href='index.php?page=contact' rel='Get in contact with Benny Dorlisme'>Contact</a></li>
            <li><a href='index.php?page=consulting' rel='Let Benny Dorlisme be your computer consultant'>Consulting</a></li>
            <li><a href='index.php?page=othersites' rel='Other websites made by Benny Dorlisme'>Other Sites</a></li>
           
            </nav>
            

           
        	</footer>
       </section>";
		}
		public function setFooter(){
		//	$connection = "mysql:host=db679312378.db.1and1.com;dbname=db679312378";
            $connection = "mysql:host=192.168.1.15;dbname=portfolio;port=3306";
						//$pdo = new PDO($connection,"dbo679312378","Real_numbers101!");
            $pdo = new PDO($connection,"root","");
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
           					<input type='text' size='70' id='comment' name='comment' placeholder='Your comment' >
                            
							<input type='button' id='submit_button' value='Comment' onClick='makeComment();'  >
           
           				</fieldset>
                        
           		</form>
                
                ";
                			
					
							foreach($result as $row){
								$first_name =$row['firstname'];
							$last_name =$row['lastname'];
							$comment =$row['comment'];
							$time =$row['time'];
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
							$first_name = null;
							$last_name = null;
							$comment = null;
							$time = null;
							}
           $this->body .="</div>
            </section></div></section>";
		}
		public function printPage(){
			
			echo($this->full_page);
		}
	}
?>