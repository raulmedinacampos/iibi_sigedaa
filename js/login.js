function validar() {
	$('#formLogin').validate({
		rules :{
			password : {
				required : true},
				
			usuario : {
				required : true,
 				minlength : 6}
		},
		 messages : {
			 password : {
				required : "Por favor, ingrese su contraseña."},
				
			usuario : {
				required : "Por favor, ingrese su usuario.",
				minlength : "El usuario debe tener al menos 6 caracteres."}
		}
	});
}

$(function() {
	validar();
});