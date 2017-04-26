Resume= {
		sections : ['#technical_skills_section', '#education_section','#work_section'],
		current_section : '#technical_skills_section',
		education_section :{
			
			visible : 0,
			current_option: null
		},
		TechnicalSkillsSection :{
			
			visible : 0,
			current_option: null,
			
			
			toggleMenuVisibility:function(menu){
				
				
				if($(menu).css("visibility") == "hidden"){
				
					$(menu).css("visibility","visible");
				
				}else {
				
					$(menu).css("visibility","hidden");
				
				}
			}
		},
		toggleSectionVisibility: function(arrow_direction){
			if(arrow_direction == 1){
				
					switch(Resume.current_section){
					
					case Resume.sections[0] : $(Resume.current_section).attr("data-active_section","off");Resume.current_section = Resume.sections[2];$(Resume.current_section).attr("data-active_section","on");
					break
					case Resume.sections[1] : $(Resume.current_section).attr("data-active_section","off");Resume.current_section = Resume.sections[0];$(Resume.current_section).attr("data-active_section","on");
					break
					case Resume.sections[2] : $(Resume.current_section).attr("data-active_section","off");Resume.current_section = Resume.sections[1];$(Resume.current_section).attr("data-active_section","on");
					break
				}
					
			}else if(arrow_direction == 0){
				
					switch(Resume.current_section){
					
					case Resume.sections[0] : $(Resume.current_section).attr("data-active_section","off");Resume.current_section = Resume.sections[1];$(Resume.current_section).attr("data-active_section","on");
					break
					case Resume.sections[1] : $(Resume.current_section).attr("data-active_section","off");Resume.current_section = Resume.sections[2];$(Resume.current_section).attr("data-active_section","on");
					break
					case Resume.sections[2] : $(Resume.current_section).attr("data-active_section","off");Resume.current_section = Resume.sections[0];$(Resume.current_section).attr("data-active_section","on");
					break
				}
					
			}else {
				//do something
			}
			
		}
		
}

