
<?php

include("class.page.php");

class ConsultingPage extends Page{

    public function __construct(){

        $this->s = array("<script type='text/javascript' src='javascript/date.js'></script>" ,"<script type='text/javascript' src='javascript/ajax.js'></script>","<script type='text/javascript' src='javascript/base.js'></script>","<script type='text/javascript' src='javascript/consulting.js'></script>");
        $this->l = array("<link type='text/css' rel='stylesheet' href='css/index.css'>","<link type='text/css' rel='stylesheet' href='css/consulting.css'>");
        $this->m = array();
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
                        		<label for='firstname'>
                        			First Name:
                        		</label>
                        		<input type='text' id='first_name' placeholder='Enter your first name'name='firstname'>
                           
                        		
                        			<label for='lastname'>
                        			Last Name:
                        		</label>
                        		<input type='text' id='last_name_for_comp_break_fix' placeholder='Enter your last name'name='lastname'>
                        		
                          		<label for='email'>
                        			Email:
                        		</label>
                        		<input type='email' id='email_for_comp_break_fix' placeholder='someone@somewhere.com' name='email'>
                       
                        		
                         		<label for='comment'>
                        			Request:
                        		</label>
                                <textarea name='comment'></textarea>
           
                                   <input type='hidden' name='request' value='breakfix' />
                                <input type='submit' id='breakfix_button' value='Request'/>
                              
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
                        		<label for='firstname'>
                        			First Name:
                        		</label>
                        		<input type='text' id='first_name_for_dev' placeholder='Enter your first name'name='firstname'>
                           
                        		
                        		<label for='lastname'>
                        			Last Name:
                        		</label>
                        		<input type='text' id='last_name_for_dev' placeholder='Enter your last name'name='lastname'>
                           
                        	
                          		<label for='email'>
                        			Email:
                        		</label>
                        		<input type='email' id='email_for_dev'placeholder='someone@somewhere.com'name='email'>
                       
                        	
                        	
                         		<label for='comment'>
                        			Request:
                        		</label>
                                <textarea name='comment'></textarea>
                        	
                        	  <input type='hidden' id='dev_request' name='request' value='dev'/>
                        	  <input type='submit' id='dev_button' value='Request'/>
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
                        		<label for='firstname'>
                        			First Name:
                        		</label>
                        		<input type='text' id='first_name_for_graphics' placeholder='Enter your first name' name='firstname'/>
                           
                        	
                        		<label for='lastname'>
                        			Last Name:
                        		</label>
                        		<input type='text' id='last_name_for_graphics' placeholder='Enter your last name' name='lastname'/>
                           
                        		
                          		<label for='email'>
                        			Email:
                        		</label>
                        		<input type='email' id='email_for_dev'placeholder='someone@somewhere.com'name='email'>
                       
                        	
                         		<label for='comment'>
                        			Request:
                        		</label>
                                <textarea name='comment'></textarea>
                        	
                        	 <input type='hidden' id='graphics_request' name='request' value='graphics' />
                        	 <input type='submit' id='graphics_button' value='Request'/>
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

    }
}
$p = new ConsultingPage();
$p->printPage();
?>



