
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Do you realy want to logout?");
		if(exit==true){window.location = 'logout.php';}		
	});
});
