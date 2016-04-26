var Resume= {
		
		current_section : null,
		education_section :{
			
			visible : 0,
			current_option: null
		},
		technical_skills_section :{
			
			visible : 0,
			current_option: null
		},
		toggleSectionVisiblity: function(section){
			
			if($(section).css("visibility") == "hidden"){
				
				$(section).css("visibility","visible");
			}else{
				
				$(section).css("visibility","visible");
			}
		}
		
};
