jQuery(document).ready(function($){

	// hide messages 
	$("#error").hide();
	$("#sent-form-msg").hide();
	
	// on submit ingreso sistema...
	$("#loginForm #submit").click(function() {
		$("#error").hide();
		
		//required:
		
		//name
		var name = $("input#name").val();
		if(name == ""){
			$("#error").fadeIn().text("Nombre Requerido.");
			$("input#name").focus();
			return false;
		}
		
		
		// clave
		var clave = $("input#clave").val();
		if(clave == ""){
			$("#error").fadeIn().text("Clave requerida");
			$("input#clave").focus();
			return false;
		}
		
	});  
	
	// on submit formulario Registro...
	$("#registroForm #submit").click(function() {
		$("#error").hide();
		
		//required:
		
		//name
		var name = $("input#name").val();
		if(name == ""){
			$("#error").fadeIn().text("Nombre Requerido.");
			$("input#name").focus();
			return false;
		}
		
		// email
		var email = $("input#email").val();
		if(email == ""){
			$("#error").fadeIn().text("Email requerido");
			$("input#email").focus();
			return false;
		}
		
		// reemail
		var reemail = $("input#reemail").val();
		if(reemail == ""){
			$("#error").fadeIn().text("Vuelva a ingresar su Email");
			$("input#reemail").focus();
			return false;
		}
		
		if (email != reemail)
		{
			$("#error").fadeIn().text("Los Correos electrónicos ingresados no coinciden. Por favor verifique los valores ingresados");
			$("input#email").focus();
			return false;
		}
		
		// clave
		var clave = $("input#clave").val();
		if(clave == ""){
			$("#error").fadeIn().text("Clave requerida");
			$("input#clave").focus();
			return false;
		}
		
		// reclave
		var reclave = $("input#reclave").val();
		if(reclave == ""){
			$("#error").fadeIn().text("Vuelva a introducir su Clave");
			$("input#reclave").focus();
			return false;
		}
		
		if (clave != reclave)
		{
			$("#error").fadeIn().text("Las contraseñas ingresadas no coinciden. Por favor verifique los valores ingresados");
			$("input#clave").focus();
			return false;
		}
	});  
		
		
	// on success...
	 function success(){
	 	$("#sent-form-msg").fadeIn();
	 	$("#contactForm").fadeOut();
	 }
	
    return false;
	
	
	// on submit...
	$("#contactForm #submit").click(function() {
		$("#error").hide();
		
		//required:
		
		//name
		var name = $("input#name").val();
		if(name == ""){
			$("#error").fadeIn().text("Nombre Requerido.");
			$("input#name").focus();
			return false;
		}
		
		// email
		var email = $("input#email").val();
		if(email == ""){
			$("#error").fadeIn().text("Email requerido");
			$("input#email").focus();
			return false;
		}
		
		// web
		var web = $("input#web").val();
		if(web == ""){
			$("#error").fadeIn().text("Web requerida");
			$("input#web").focus();
			return false;
		}
		
		// comments
		var comments = $("#comments").val();
		
		// send mail php
		var sendMailUrl = $("#sendMailUrl").val();
		
		//to, from & subject
		var to = $("#to").val();
		var from = $("#from").val();
		var subject = $("#subject").val();
		
		// data string
		var dataString = 'name='+ name
						+ '&email=' + email        
						+ '&web=' + web
						+ '&comments=' + comments
						+ '&to=' + to
						+ '&from=' + from
						+ '&subject=' + subject;						         
		// ajax
		$.ajax({
			type:"POST",
			url: sendMailUrl,
			data: dataString,
			success: success()
		});
	});  
		
		
	// on success...
	 function success(){
	 	$("#sent-form-msg").fadeIn();
	 	$("#contactForm").fadeOut();
	 }
	
    return false;
});

