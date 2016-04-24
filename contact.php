<?php
include("includes/header.php");
?>
       <div id="page_content">
       	 <section id="contact">
            	<article>
                	<header style="margin-top:20px;">
                    	<h2 style="margin:0 0 0 20px;">Contact</h2>
                    </header>
                    <article >
                    <p style="padding-right:20px; padding-left:20px;margin-bottom:10px;">
                    	Please feel free to leave me your contact information so I can get in touch with you. Thank You!
                    </p>
                  
                    	 <p style="padding-right:20px; padding-left:20px;margin-bottom:10px;">
                        	Benny Dorlisme<br/>
                            Technical Specialist<br/>
                           <a href="mailto:bennydorlisme@gmail.com">BennyDorlisme@gmail.com</a><br/>
                            (347)369-6540 / (347)360-1343  
                        </p>
                   
                    
                    <form id="contact_form" action="contact.php" method="post">
                    	<fieldset>
                    		<legend>Your Contact Information</legend>
                    		<label for="first_name">
                            	First Name:
                            </label>
                    		<input type="text" name="first_name" id="first_name"/>
                    		<br/>
                     		<label for="last_name">Last Name:</label>
                    		<input type="text" name="last_name" id="last_name"/>
                            <br/>
                            <label for="email" style="margin-right:33px;">Email:</label>
                            
                    		<input type="email" name="email" id="email"/>
                            
                     
                            <input type="submit" value ="Send"/>
                    	</fieldset>
                    </form>
               
            
                </article>
            </section>
          
       </div>
<?php
include("includes/footer.php");
?>