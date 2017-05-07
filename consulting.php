
<?php

include("class.page.php");

class ConsultingPage extends Page{

    public function __construct(){

        $this->s = array("<script src='jquery/jquery-1.10.1.js'></script>" , "<script type='text/javascript' src='javascript/date.js'></script>" ,"<script type='text/javascript' src='javascript/ajax.js'></script>","<script type='text/javascript' src='javascript/base.js'></script>");
        $this->l = array("<link type='text/css' rel='stylesheet' href='css/index.css'>","<link type='text/css' rel='stylesheet' href='css/consulting.css'>");
        $this->m = array("<meta charset='utf-8'>","<meta content='https://www.bennydorlisme.com/' property='og:site_name'>"."<meta name='description' content='Benny Dorlisme Portfolio Website'>","<meta name='keywords' content='Benny Dorlisme'>","<meta name='keywords' content='Dorlisme'","<meta name='keywords' content='Benny Dorlisme Consutling'>","<meta name='keywords' content='Benny Dorlisme Tech'>");
        $this->setPageBodyHeader();
        $this->setPageBodyBody();
        $this->setPageBodyFooter();
        parent::__construct($this->s,$this->m,$this->l , ($this->page_body_header . $this->page_body_body));

    }
    public function setPageBodyBody(){
        $this->page_body_body = "  
  <div id='page_content_body'>
      
                
                	<div  id='container_for_all_forms'>
                    	
                       <div id='container_for_comp_break_fix_form' class='form_container'> 
                        	<form action='request.php' method='post' id='comp_break_fix_form' class='customer_form'>
                            <fieldset>
                            <legend>
                            <header>
                        	<h4>
                            	Computer Break-Fix
                            </h4>
                        	</header>
                            </legend>
                        		<label for='first_name'>
                        			First Name:
                        		</label>
                        		<input type='text' id='first_name' placeholder='Enter your first name'name='first_name_for_comp_break_fix'>
                           
                        		<br/>
                        			<label for='last_name_for_comp_break_fix'>
                        			Last Name:
                        		</label>
                        		<input type='text' id='last_name_for_comp_break_fix' placeholder='Enter your last name'name='last_name_for_for_comp_break_fix'>
                        		<br/>
                          		<label for='email_for_comp_break_fix'>
                        			Email:
                        		</label>
                        		<input type='email' id='email_for_comp_break_fix'placeholder='ex. someone@somewhere.com' name='email_for_comp_break_fix'>
                       
                        		<br/>
                        		<br/>
                         		<label for='request_comment'>
                        			Request:
                        		</label>
                                <textarea>
                                
                                </textarea>
                                <input type='hidden' id='request_comment' name='request_comment' placeholder='' />
                                <input type='submit' id='comp_break_fix_buttont' name='request_comment' placeholder='' />
                     
                       	</fieldset>
    
                       		</form >
                       		</div>
                       		<div id='container_for_dev_form' class='form_container'>
                        <form action='request.php' method='post' id='dev_form'  class='customer_form'>
                         <fieldset >
                            <legend>
                            <header>
                        	<h4>
                            	Web App / Standalone App Dev 
                            </h4>
                        	</header>
                            </legend>
                        		<label for='first_name_for_dev'>
                        			First Name:
                        		</label>
                        		<input type='text' id='first_name_for_dev' placeholder='Enter your first name'name='first_name_for_dev'>
                           
                        		<br/>
                        		<label for='last_name_for_dev'>
                        			Last Name:
                        		</label>
                        		<input type='text' id='last_name_for_dev' placeholder='Enter your last name'name='last_name_for_dev'>
                           
                        		<br/>
                          		<label for='email_for_dev'>
                        			Email:
                        		</label>
                        		<input type='email' id='email_for_dev'placeholder='ex. someone@somewhere.com'name='email_for_dev'>
                       
                        		<br/>
                        	
                         		<label for='issue_for_consulting'>
                        			Request:
                        		</label>
                                <textarea> 
                                
                                </textarea>
                        	 <input type='hidden' id='inqury_for_consulting' name='request_comment_for_dev' placeholder='' />
                                </fieldset>
                            </form>
                            <div id='container_for_graphics_form' class='form_container'>
                        <form action='request.php' method='post'  id='graphics_form' class='customer_form'>
                         <fieldset >
                            <legend>
                            <header>
                        	<h4>
                            	Graphic Request
                            </h4>
                        	</header>
                            </legend>
                        		<label for='first_name_for_graphics'>
                        			First Name:
                        		</label>
                        		<input type='text' id='first_name_for_graphics' placeholder='Enter your first name' name='first_name_for_graphics'>
                           
                        		<br/>
                        		<label for='last_name_for_graphics'>
                        			Last Name:
                        		</label>
                        		<input type='text' id='last_name_for_graphics' placeholder='Enter your last name' name='last_name_for_graphics'>
                           
                        		<br/>
                          		<label for='email_for_graphics>
                        			Email:
                        		</label>
                        		<input type='email' id='email_for_dev'placeholder='ex. someone@somewhere.com'name='email_for_graphics'>
                       
                        		<br/>
                        		<br/>
                         		<label for='request_for_graphics'>
                        			Request:
                        		</label>
                                <textarea> 
                                
                                </textarea>
                        	 <input type='hidden' id='request_for_graphics' name='request_comment_for_graphics' placeholder='' />
                                </fieldset>
                            </form>
                        </div>";
    }
    public function setPageBodyHeader(){
        $this->page_body_header = " <section id='page_content'>
            <header id='page_content_header'>
            	<h2>Consulting</h2>
            	 <p >
            	Here you can make a request for consultation. You will recieve a quote via email once request has been made.<br/>You can request a free diagnostic for a technical problem. 
                
            </p>  
        	</header>
            
            ";
    }
    public function setPageBodyFooter(){
    $this->page_body_body .= "
      <script>
        alert('Making a request is not possible at the moment. Sorry for the inconvenience.');
</script>
    ";
    }
}
$p = new ConsultingPage();
$p->printPage();
?>



