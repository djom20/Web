<!-- Validador de formularios -->
$(document).ready(function () {
	$("#bttsession").click(function (){
		$(".error_form").remove();

		if( $("#session_user").val() == "" ){
			$("#session_user").focus().after("<span class='error_form'>Ingrese su Nombre</span>");
			return false;
		}else if( $("#session_pass").val() == "" ){
			$("#session_pass").focus().after("<span class='error_form'>Ingrese su Password</span>");
			return false;
		}
	});
	$("#session_user, #session_pass").keyup(function(){
		if( $(this).val() != "" ){
			$(".error").fadeOut();			
			return false;
		}		
	});
});