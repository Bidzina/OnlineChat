$(document).ready(function(){
	 $("#ajaxform").submit(function(){
	 	var text = $("#usermsg").val();
	 	
	 	$.post("chatmessages.php", $("#ajaxform").serialize(), function(data){
	 		console.log(data);
	 		$("#chatbox").append(data+'<br />');

	 	});


	 

	 	$("#usermsg").val("");
	 	return false;


	 });

});



