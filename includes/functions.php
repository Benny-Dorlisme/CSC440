<?php



function showDay()
{
		$time = localtime();

	        if($time[6] == 6)
		{
			
			echo("Saturday");
		}
		else if($time[6] == 0)
		{

			echo("Sunday");

		}

 		if($time[6] == 1)
		{
			
			echo("Monday");
		}
		else if($time[6] == 2)
		{

			echo("Tuesday");

		}
		 if($time[6] == 3)
		{
			
			echo("wensday");
		}
		else if($time[6] == 4)
		{

			echo("Thursday");

		}
		 if($time[6] == 5)
		{
			echo("Friday");
		
		}

}

function showDayOfTheMonth()
{
			$time = localtime();

			if($time[3] == 1)
			{
				echo("1st");
			}
			if($time[3] == 2)
			{
				echo("2nd");
			}
			if($time[3] == 3)
			{
				echo("3rd");
			}

			if($time[3] == 4)
			{
				echo("4th");
			}
			if($time[3] == 5)
			{
				echo("5th");
			}
			if($time[3] == 6)
			{
				echo("6th");
			}

			if($time[3] == 7)
			{
				echo("7th");
			}
			if($time[3] == 8)
			{
				echo("8th");
			}
			if($time[3] == 9)
			{
				echo("9th");
			}

			if($time[3] == 10)
			{
				echo("10th");
			}
			if($time[3] == 11)
			{
				echo("11th");
			}
			if($time[3] == 12)
			{
				echo("12th");
			}
			

			if($time[3] == 13)
			{
				echo("13th");
			}
			if($time[3] == 12)
			{
				echo("12th");
			}
			if($time[3] == 13)
			{
				echo("13th");
			}

			if($time[3] == 14)
			{
				echo("14th");
			}
			if($time[3] == 15)
			{
				echo("15th");
			}
			if($time[3] == 16)
			{
				echo("16th");
			}

			if($time[3] == 17)
			{
				echo("17th");
			}
			if($time[3] == 18)
			{
				echo("18th");
			}
			if($time[3] == 19)
			{
				echo("19th");
			}

			if($time[3] == 20)
			{
				echo("20th");
			}
			if($time[3] == 21)
			{
				echo("21st");
			}
			if($time[3] == 22)
			{
				echo("22nd");
			}
			if($time[3] == 23)
			{
				echo("23rd");
			}
			if($time[3] == 24)
			{
				echo("24th");
			}
			if($time[3] == 25)
			{
				echo("25th");
			}
			if($time[3] == 26)
			{
				echo("26th");
			}
			if($time[3] == 27)
			{
				echo("27th");
			}
			if($time[3] == 28)
			{
				echo("28th");
			}
			if($time[3] == 29)
			{
				echo("29th");
			}
			if($time[3] == 30)
			{
				echo("30th");
			}
			if($time[3] == 31)
			{
				echo("31st");
			}

			
}
function showMonth()
{
			$time = localtime();

			if($time[4] == 0)
			{
				echo("January");
			}
			if($time[4] == 1)
			{
				echo("Febuary");
			}
			if($time[4] == 2)
			{
				echo("March");
			}

			if($time[4] == 3)
			{
				echo("April");
			}
			if($time[4] == 4)
			{
				echo("May");
			}
			if($time[4] == 5)
			{
				echo("June");
			}

			if($time[4] == 6)
			{
				echo("July");
			}
			if($time[4] == 7)
			{
				echo("August");
			}
			if($time[4] == 8)
			{
				echo("September");
			}

			if($time[4] == 9)
			{
				echo("October");
			}
			if($time[4] == 10)
			{
				echo("November");
			}
			if($time[4] == 11)
			{
				echo("December");
			}
	
}

function showYear()
{
	$time = localtime();
	$year = $time[5] + 1900;
	echo($year);
	
}
function showTime()
{

	$time = localtime();
	$second = $time[0];
	$minute = $time[1];
	$hour = $time[2];
	echo($second . ":" . $hour . ":" . $minute);
}
function showDailyExpression()
{
	$time = localtime();
	$second = $time[0];
	$minute = $time[1];
	$hour = $time[2];
	if($hour > 0 && $hour < 10)
	{
		echo("Good Morning.");
	}
	else if($hour >10  && $hour < 12)
	{
		echo("I hope you're enjoying your morning today.");
	}
	
	if($hour > 12 && $hour < 17)
	{
		echo("Good Afternoon");
	}
	
	if($hour > 17 && $hour < 20)
	{
		echo("Good evening to you! ");
	}
	else if($hour > 20 && $hour <= 24)
	{
		echo("Have a good night!");
	}
}


	
	

	
?>