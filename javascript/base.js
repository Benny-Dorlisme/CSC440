
	$(document).ready(function()
	{
		$("textarea").active(function(){
			$(this).setProperty("selectionStart",0);
		});
	});