<div class="section-separator"></div>
<div id="noticias"><!--- IMPORTANTE EL TAMAÑO DE EL DIV CON RESPECTO A LOS ANUNCIOS -->
	<div style="display: table;">
		<div style="display: table-row;">
			<div id="colum_der">
				<?php if(file_exists('interfaces/twitter/tweets.php')){ include('interfaces/twitter/tweets.php'); echo '<div class="section-separator"></div>'; }  ?>
				<div class="section-separator"></div>
				<?php if(file_exists('interfaces/noticias/new_videos.php')){ include('interfaces/noticias/new_videos.php'); echo '<div class="section-separator"></div>'; }  ?>
				<!-- <div class="section-separator"></div> -->
			</div>
			<div id="colum_izq">
				<?php if(file_exists('interfaces/noticias/google_earth.php')){ include('interfaces/noticias/google_earth.php'); echo '<div class="section-separator"></div>'; }  ?>
				<div class="section-separator"></div>
				<?php /*if(file_exists('interfaces/noticias/facebook_user_online2.php')){ include('interfaces/noticias/facebook_user_online.php'); echo '<div class="section-separator"></div>'; }*/ ?>
				<?php if(file_exists('interfaces/noticias/facebook_registration.php')){ include('interfaces/noticias/facebook_registration.php'); echo '<div class="section-separator"></div>'; } /*else { echo '<fb:login-button registration-url="https://developers.facebook.com/docs/plugins/registration" />'; }*/ ?>
			</div>
			<div class="section-separator"></div>
		</div>
	</div>
</div>