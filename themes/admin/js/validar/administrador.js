<!-- Validador de formularios -->
$(document).ready(function () {
	var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	$("#bttadmin").click(function (){
		$(".error_form").remove();

		if( $("#admin_nom").val() == "" ){
			$("#admin_nom").focus().after("<span class='error_form'>Ingrese su Nombre</span>");
			return false;
		}else if( $("#admin_ape").val() == "" ){
			$("#admin_ape").focus().after("<span class='error_form'>Ingrese su Apellido</span>");
			return false;
		}else if( $("#admin_mail").val() == "" ){
			$("#admin_mail").focus().after("<span class='error_form'>Ingrese su Correo</span>");
			return false;
		}else if( $("#admin_cel").val() == "" ){
			$("#admin_cel").focus().after("<span class='error_form'>Ingrese su Celular</span>");
			return false;
		}else if( $("#admin_user").val() == "" ){
			$("#admin_user").focus().after("<span class='error_form'>Ingrese su Usuario</span>");
			return false;
		}else if( $("#admin_pass").val() == "" ){
			$("#admin_pass").focus().after("<span class='error_form'>Ingrese su Password</span>");
			return false;
		}
	});
	$("#admin_nom, #admin_ape, #admin_mail, #admin_cel, #admin_user, #admin_pass").keyup(function(){
		if( $(this).val() != "" ){
			$(".error").fadeOut();			
			return false;
		}		
	});
	$("#admin_mail").keyup(function(){
			if( $(this).val() != "" && emailreg.test($(this).val())){
				$(".error").fadeOut();			
				return false;
			}		
		});
});