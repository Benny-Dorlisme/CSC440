 
var date = new Date();


	 date.year = date.getFullYear();
	 date.day = date.getDate();
	 date.month = date.getMonth();
	 

		 date.displayDate = function()
	 {
	    var time_section = document.getElementById("time_section");	
		

	 	var month_e = document.createElement("span");
	  	month_e.style.color = "silver";
	  	time_section.appendChild(month_e);
	   	month_e.innerHTML = this.month + 1 + "/";
	
	  	var day_e = document.createElement("span");
	  	day_e.style.color = "silver";
	  	time_section.appendChild(day_e);
	  	day_e.innerHTML = this.day + "/";
		
		var year_e = document.createElement("span");
	    year_e.style.color = "silver";
	    time_section.appendChild(year_e);
	    year_e.innerHTML = this.year; 
	 };
 
	
