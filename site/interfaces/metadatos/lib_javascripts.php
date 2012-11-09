<script type="text/javascript" src="../themes/cliente/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../themes/cliente/js/jquery.validate.js"></script>
<script type='text/javascript' src='../themes/cliente/js/google-analyticator.js?ver=6.2'></script>
<script type="text/javascript" src="../themes/cliente/js/facebook_jssdk.js"></script>
<script type="text/javascript" src="../themes/cliente/js/coin-slider.min.js"></script>
<script type="text/javascript" src="../themes/cliente/js/disable select text.js"></script>
<script type="text/javascript" src="../themes/cliente/js/js_query.js"></script>
<script type="text/javascript" src="../themes/cliente/js/js_-query.js"></script>

<!--[if IE]>
<script type="text/javascript">
	var e = ("abbr,article,aside,audio,canvas,datalist,details,figure,footer,header,hgroup,mark,menu,meter,nav,output,progress,section,time,video").split(',');
	for (var i=0; i<e.length; i++) {
		document.createElement(e[i]);
	}
</script>
<![endif]-->

<script type="text/javascript"> /* MI JQUERY */
	$(function(){
	   $("#mostrar").click(function(){
	    	if ($("#inicio_session").css("display")=="block"){
	       		$("#inicio_session").fadeOut('slow');
	       	}else{
	       		$("#inicio_session").fadeIn('slow');
	   		}
	   });
	});

	$(function(){
	   $("#buscador").click(function(){
	    	if ($("#google-search-form").css("display")=="none"){
	       		$("#google-search-form").slideDown('fast');
	       	}
	   });
	});

	$(function(){
	    $(".bordes").mouseover(function(e){
			e.preventDefault();
			$(this).css("border-color", "#fff589");
			$(this).css("border-radius", "45px");
			if ($("#imagen1").css("border-radius")=="0px"){$("#imagen1").css("border-radius", "35px"); } 
			if ($("#imagen2").css("border-radius")=="0px"){$("#imagen2").css("border-radius", "35px"); }
		})

		$(".bordes").mouseout(function(e){
			e.preventDefault();
			$(this).css("border-color", "#ccc9ce");
			$(this).css("border-radius", "10px");
			$("#imagen1").css("border-radius", "0px");
			$("#imagen2").css("border-radius", "0px");
		})
	});
</script>

<!-- LIBRERIA DE SLIDER -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#games').coinslider({ hoverPause: false });
	});
</script>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<!-- SLIDER DE CONTENIDO -->
<script type="text/javascript">
    (function($){	
      $(function(){
        // assign the slider to a variable
        var slider = $('#slider1').bxSlider({
          controls: false
        });
      
        // assign a click event to the external thumbnails
        $('.thumbs a').click(function(){
          var thumbIndex = $('.thumbs a').index(this);
          // call the "goToSlide" public function
          slider.goToSlide(thumbIndex);
        
          // remove all active classes
          $('.thumbs a').removeClass('pager-active');
          // assisgn "pager-active" to clicked thumb
          $(this).addClass('pager-active');
          // very important! you must kill the links default behavior
          return false;
        });
      
        // assign "pager-active" class to the first thumb
        $('.thumbs a:first').addClass('pager-active');
        
    });}(jQuery))
</script>

<!-- MENU -->
<script type="text/javascript">
	$(function() {
	    $(window).scroll(function(){
	        var scrollTop = $(window).scrollTop();
	        if(scrollTop != 0)
	            $('#nav').stop().animate({'opacity':'0.1'},400);
	        else
	            $('#nav').stop().animate({'opacity':'1'},400);
	    });
	 
	    $('#nav').hover(
	        function (e) {
	            var scrollTop = $(window).scrollTop();
	            if(scrollTop != 0){
	                $('#nav').stop().animate({'opacity':'1'},400);
	            }
	        },
	        function (e) {
	            var scrollTop = $(window).scrollTop();
	            if(scrollTop != 0){
	                $('#nav').stop().animate({'opacity':'0.1'},400);
	            }
	        }
	    );
	});
</script>
<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-11860629-1");
		pageTracker._trackPageview();
	} catch(err) {}
</script>


<!-- Validador de formularios -->
<script type="text/javascript">
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
</script>
<script type="text/javascript">
	$(document).ready(function () {
		var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
		$("#bttcontacto").click(function (){
			$(".error_form").remove();

			if( $("#email_nombre").val() == "" ){
				$("#email_nombre").focus().after("<span class='error_form'>Ingrese su Nombre</span>");
				return false;
			}else if( $("#email_dir").val() == "" || !emailreg.test($("#email_dir").val()) ){
				$("#email_dir").focus().after("<span class='error_form'>Ingrese un Email correcto</span>");
				return false;
			}else if( $("#email_msn").val() == "" ){
				$("#email_msn").focus().after("<span class='error_form'>Ingrese un Mensaje</span>");
				return false;
			}
		});
		$("#email_nombre, #email_dir, #email_msn").keyup(function(){
			if( $(this).val() != "" ){
				$(".error").fadeOut();			
				return false;
			}		
		});
		$("#email_dir").keyup(function(){
			if( $(this).val() != "" && emailreg.test($(this).val())){
				$(".error").fadeOut();			
				return false;
			}		
		});
	});
</script>

<script type="text/javascript"> if(self == top) { document.getElementsByTagName("body")[0].style.display = 'block'; }else { top.location = self.location; }</script>