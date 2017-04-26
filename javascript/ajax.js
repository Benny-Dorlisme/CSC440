var  http_request;

if(window.XMLHttpRequest)
{
	http_request = new XMLHttpRequest();
}
else
{
	http_request = new ActiveXObject("Microsoft.XMLHTTP");
}



function makeComment()
{	
	var fname = document.getElementById("fname").value;
	
	
	var lname = document.getElementById("lname").value;
	
	var comment = document.getElementById("comment").value;
	var year = date.year;
	var month = date.month
	var day = date.day
	var hour = date.getHours()
	var minute = date.getMinutes()
	var second = date.getSeconds()
	if(!fname && !lname && !comment)
	{
		alert("You did not enter your first name, last name or comment.\n Please enter your first name, last name and comment.");
		return false;
	}
	else if(!fname && !comment)
	{
		alert("You did not enter your first name or your comment.\n Please enter your first name and your comment.");
		return false;
	}
	else if(!fname && !lname)
	{
		alert("your did not enter your first name or your last name.\n Please enter your first name and your last name.");
		return false;
	}
	else if(!fname)
	{
		alert("You did not enter your first name.\n Please enter your first name.");
		return false;
	}
	else if(!lname && !comment)
	{
		alert("You did not enter your last name or your comment.\n Please enter your last name and your comment.");
		return false;
	}
	else if(!lname)
	{
		alert("You did not enter your last name.\n Please enter your last name.");
		return false;
	}
	else if(!comment)
	{
		alert("You did not enter your comment.\n Please enter your comment.");
		return false;
	}
		
	
	
	var p = document.createElement("p");
	
	var parent = document.getElementById('comment_container');
	console.log(parent)
	http_request.open("GET","comment.php?fname=" + fname + "&lname=" + lname + "&comment=" + comment +"&year="+ year +"&date=" + day + "&month=" + month + "&second=" + second + "&hour=" + hour + "&minute=" + minute,true);
		http_request.send();
	 
	
	http_request.onreadystatechange = function()
	{
	
	if(http_request.readyState == 4 && http_request.status == 200)
	{
		parent.appendChild(p);
		

	
		
	p.innerHTML = http_request.responseText;
	
	alert("Thank you " + fname + " " + lname + " for you're feedback. \n Scroll down to see your comment below.");
	
	
	}
	};


}

