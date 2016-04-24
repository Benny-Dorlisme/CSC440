  <section id="comment_section">
           		<article>
           			<h2>Comments</h2>
                    <?php
	
						$query = 'SELECT * FROM comment ';


						$query = mysql_query($query);


						while($rows = mysql_fetch_array($query))
						{
							
							$first_name =$rows['FirstName'];
							$last_name =$rows['LastName'];
							$comment =$rows['Comment'];
							$time =$rows['Time'];
	
	
							echo "<h4 style='margin-left:30px; padding: 0px; display:inline;'>" ;
							echo strtoupper(substr($first_name,0,1)), strtolower(substr($first_name,1,strlen($first_name)));
							echo " ";
							echo strtoupper(substr($last_name,0,1)), strtolower(substr($last_name,1,strlen($last_name)));
							echo "</h4>" ;
							echo "<span>";
							echo " ";
							echo $time ;
							echo "</span>";
							echo "<br/>";
							echo "<p style='margin-left:30px; padding:0px; width: 75%;'>";
							echo $comment;
							echo "</p>";
						}
	
					?>
           		</article>
           </section>