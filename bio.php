<?php
     include("includes/header.php");
?>
        <div id="page_content">
       		<section class="information">
            	<article id="bio">
        			<header style="margin-top:20px;">
                		<h2 style="margin:0 0 0 20px;">Biography</h2>
        			</header>
                    <p style="padding-right:20px; padding-left:20px; "> <img src="img/benny.jpg" style="border-radius:5px; float:right; margin:0px;" title="Picture of Benny Dorlisme" alt="Picture of Benny Dorlisme"/>
                    	My name is Benny Dorlisme. I'm a 22 year old computer technician working to become a computer scientist.
                        I've been interested in computer technology ever since I was a child. At the age of 13 I got the opportunity                         to build my very first computer in an after school program and I've been fixing computers ever since. When I                         graduated from high school I started my career as a computer technologist and I've been 
                        in the field ever since. I now own a computer repair business and design websites for fun.
                    </p>
                    
                    <h4 style="padding:0px; margin:0 0 0 20px;">Education</h4>
                     <p style="padding-right:20px; padding-left:20px;margin-top:0px;">
                     	
                    	I graduated from <a href="http://www.goodshepherds.org/programs/community/transfer-schools/schools/sbchs.html"                        >South Brooklyn Community High School</a> in 2009. Immediately after graduating I enrolled in <a href=                        "http://www.bmcc.cuny.edu/">Borough of Manhattan Community College</a> to study computer science. After a                         couple of semesters I was academically dismissed. Once I get enough money I'm going back to raise my GPA and                         finish my associates degree in computer science. In 2010 I attended a non-profit organization called <a href=                        "http://www.perscholas.org">Perscholas.</a>I attend the organization for 3 months 
                        and I obtained an A+ and Network+ certification. I now attend a non-profit organization call 
                        <a href="http://www.yearup.org">Year Up</a> where I am currently studying quality assurance for computer                         software.
                    </p>
                       <h4 style="padding:0px; margin:0 0 0 20px;">Work Experience</h4>
                    <p style="padding-right:20px; padding-left:20px; margin-top:0px; ">
                 
                     	I started working in my last year of high school. I was one of Ikeas first employees at its store in Brooklyn.                        Working there for half a year I left and started to pursue my career as a computer technician. I got my first                        job as a computer technician in October of 2010. I was a Production Technician at <a href=                  "http://www.redemtech.com">Remdemtech.</a> I worked there for three months before I was layed off due to the company                         downsizing. I then went from job to job as an consultant for many different companies such as <a href="http://www.insourcenow.com">Insource Inc</a>,<a href="http://www.apexsystemsinc.com">Apex Systems Inc</a>, and <a href="http://www.wnet.org/" >WNET New York Public Media</a>, and many others. You can view and download my <a href="resume.html" target="_blank">resume here.</a> 
                    </p>
                </article>
        	</section>
            <section id="feedback">
            	<article>
            		<form action="" id="comment_form" >
        
            			<fieldset>
            				<legend ><h1>Feedback</h1></legend>
                			<p>
                            	Like the Site? Leave a Comment.
                            </p> 
               				<label for="fname" >First Name:</label>
           					<input type="text" id="fname" name="fname" placeholder=" Your first name"/>
           
           					<br>
           
           					<label for="lname" >Last Name:</label>
           					<input type="text" id="lname" name="lname" placeholder="Your last name"/>
           
           					<br>
           
          		 			<label for="comment" > Comment:</label>
           					<input type="text" id="comment" name="comment" placeholder="Your comment" >
                            
							<input type="button" id="submit_button" value="Comment" onClick="makeComment();"  >
           
           				</fieldset>
                        
           		</form>
                
                
           </article>
   <?php
     include("includes/footer.php");
?>