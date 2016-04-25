<?php
include("includes/header.php");
include("svg/contactinfo.svg.php");
include("svg/technicalskills.svg.php");
echo("
	<section id='page_content'>
	<header>
		<div>
		<div>
			{$contactinfo_image}
			<p>
				251 Osborn St Brooklyn, NY 11212
				<br/>
				BennyDorlisme@gmail.com
				<a href='Benny_Dorlisme_resume.docx'>Download Resume</a>
			</p>
		<div>
		
	<div>
	</header>
	<div>
		<div>
			{$technicalskills_image}
		<div>
	<div>
	<footer>
	</footer>

       <article id='resume' style='border:solid 2px;padding:0 100px 0 100px; margin:0 30px 0 30px;'>

<p style=' width:300px;font-weight:bold; margin:0 auto;'>TECHNICAL and PROFESSIONAL SKILLS</p>

<p style=' width:300px;font-weight:bold; margin:0 auto;'>Computer Skills</p>

 <p><b>Hardware:</b> Troubleshoot Windows PCs and Laptops, Install and configure network devices (routers, switches , modems).</p>

 <p><b>Software:</b> Develop websites and web apps with HMTL, CSS, and Javascript, CRUD databasess with phpMyAdmin, software tsting(White-Box, Black-Box testing,automation testing) Web applications. 
</p>
 <p><b>Certifications:</b> CompTia A+, and Network+.</p>
<p style=' width:90px;font-weight:bold; margin:0 auto;'>EDUCATION</p>

<span style='font-weight:bold;'>Year Up </span>								  	<span style='float:right;'>New York, NY</span><br/>
<span>Major: Quality Assurance</span>				        	                            <span style='float:right;'> Expected Graduation: 1/2014	</span>
<br/>
<br/>
<span style='font-weight:bold;'>Perscholas Institute of Technology</span>										     		<span style='float:right;'>Bronx, NY</span><br/>
Major:	Information Technology	                                                                               <span style='float:right;'>10/2010</span>	
<br/>                	
<br/>

<span style='font-weight:bold;'>South Brooklyn Community High School</span>	 						<span style='float:right;'>Brooklyn, NY</span>
<br/>
<span>Obtained Regents Diploma</span> 																<span style='float:right;'> 6/2009</span>
<br/>
<br/>


<p style=' width:140px;font-weight:bold; margin:0 auto;'>WORK EXPERIENCE</p>

<span style='font-weight:bold;'>Remdemtech</span>						          		<span style='float:right'>Bronx, New York</span>
<br/>
<span><em>Production Technician</em></span> 	                                                                 <span style='float:right;'>10/2010 to 1/2011</span>

	<li>Built and refurbished over 1,000 Computers (Desktops, Laptops and Servers).</li>
	<li>Worked with proprietary software to wipe and test HDDs over an intranet.</li>
   <li> Recycled obsolete and unwanted computers and peripheral parts.</li>
<br/>
<span style='font-weight:bold;'>Corporate Computers	</span>								 <span style='float:right'>New York, New York</span>
<br/>

<span><em>Field Technician 	</em></span>				                                                   <span style='float:right'> 4/2012 to 6/2012</span>
<br/>
	<li>Provided over 100 PC set ups, repairing and installing hardware parts for Desktops, Laptops and HP Printers.</li>
	<li>Troubleshot multiple HP Printers: Replaced parts, toners, fuser, belts and formatters.</li>
<li> proprietary software upgrades in different business settings: Corporate, Medical and Private practices.</li>
	<li>Configured routers.</li>
<br/>
<span style='font-weight:bold'>WNET New York Public Media	</span>							<span style='float:right;'>New York, New York</span>
<br/>
<span><em>Help Desk Technician</em></span> 													<span style='float:right;'>10/2012 to 2/2013</span>
<br/>

	<li>Helped users with various computer problems(hardware and software)</li>
	<li>Assisted managing windows users passwords</li> 
	<li>Imaged 20 desktop computers a week</li>
	<li>Setup new users desktop computers</li>

     </article>
     <p style=' width:130px; margin: 0 auto;'><a href='Benny_Dorlisme_resume.docx'>Download Resume</a></p>		
          
            
            
            
            
            <section id='feedback'>
            	<article>
            		<form action='' id='comment_form' >
        
            			<fieldset>
            				<legend ><h1>Feedback</h1></legend>
                			<p>
                            	Like the Site? Leave a Comment.
                            </p> 
               				<label for='fname' >First Name:</label>
           					<input type='text' id='fname' name='fname' placeholder=' Your first name'/>
           
           					<br>
           
           					<label for='lname' >Last Name:</label>
           					<input type='text' id='lname' name='lname' placeholder='Your last name'/>
           
           					<br>
           
          		 			<label for='comment' > Comment:</label>
           					<input type='text' id='comment' name='comment' placeholder='Your comment' >
                            
							<input type='button' id='submit_button' value='Comment' onClick='makeComment();'  >
           
           				</fieldset>
                        
           		</form>
                
                
           </article>
       </section>
     </section>
");
?>
