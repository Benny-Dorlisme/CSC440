<!Doctype HTML>
<html lang="en">
	<head>
    <meta name="keywords" content="Benny, Dorlisme">
    <meta name="description" content="Benny Dorlisme WebSite">
    <meta name="author" content="Benny Dorlisme">
    <meta charset="UTF-8">
    
    
    
    	<script src="jquery/jquery-1.10.1.js">
	    </script>
        <script type="text/javascript" src="javascript/date.js"></script>
        
        
        <link type="text/css" rel="stylesheet" href="css/index.css">
    </head>
  
    <body>
    
    <section id="page_header">
    	<header style="margin:0 0 0 0px; padding:0 0 0 0px;" name="header">
         
        	<h1 style="margin: 0 0 0 0px; padding:0px; letter-spacing:10px; margin-left:10%; font-family:Century; color:silver;">Benny Dorlisme</h1>
            <br/>
        	<nav id="header_nav">
            	<li><a href="index.php">Bio</a></li>
                <li><a href="IT.html">Information Technology</a></li>
                <li><a href="QA.html">Quality Assurance</a></li>
                <li><a href="programming.html">Programming</a></li>
                <p style = "float:right; display:inline; margin:0 130px 0 0px; padding:0px;" id="time_section">
                Today's date is:
            </p>
            </nav>
           
        </header>
       </section>
       <div id="page_content">
       			<section class="information">
            <header style="margin-top:20px;">
            	<h2 style="margin:0 0 0 20px;">Consulting</h2>
        	</header>
            
            <p style="padding-right:20px; padding-left:20px; ">
            	Here you can request computer break-fix, and web development consulting .
            </p>    
                
                	<div style="width:378; display:inline-block; margin-left:20px">
                    	
                       
                        	<form action="#" method="post" style="height:500px;">
                            <fieldset style="width:300px; height:400px; display:inline-block;">
                            <legend>
                            <header>
                        	<h4>
                            	Computer Break-Fix
                            </h4>
                        	</header>
                            </legend>
                        		<label for="name_for_consulting">
                        			Name:
                        		</label>
                        		<input type="text" id="name_for_consulting" placeholder="Enter your name">
                           
                        		<br/>
                          		<label for="email_for_consulting">
                        			Email:
                        		</label>
                        		<input type="email" id="email_for_consulting"placeholder="ex. someone@somewhere.com">
                       
                        		<br/>
                        		<br/>
                         		<label for="issue_for_consulting">
                        			Problem:
                        		</label>
                              
                                <input type="text" id="problem_for consulting" name="issue_for consulting" placeholder="" />
                     
                       	</fieldset>
                        

                            <fieldset style="width:300px;height:inherit; display:inline-block;" >
                            <legend>
                            <header>
                        	<h4>
                            	Web Development
                            </h4>
                        	</header>
                            </legend>
                        		<label for="name_for_consulting">
                        			Name:
                        		</label>
                        		<input type="text" id="name_for_consulting" placeholder="Enter your name">
                           
                        		<br/>
                          		<label for="email_for_consulting">
                        			Email:
                        		</label>
                        		<input type="email" id="email_for_consulting"placeholder="ex. someone@somewhere.com">
                       
                        		<br/>
                        		<br/>
                         		<label for="issue_for_consulting">
                        			Request:
                        		</label>
                            
                        	 <input type="text" id="inqury_for_consulting" name="request_for consulting" placeholder="" />
                                </fieldset>
                       		</form>
                        
                        
                        </div>
                  
                
                
          
            
          
       </div>
	
<?php
     include("includes/footer.php");
?>

