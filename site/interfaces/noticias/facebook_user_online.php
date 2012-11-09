<?php require_once('../php/facebook_feed.php'); ?>
<div class="sidebar3">
	<div class="head">&nbsp;</div>
	<div class="cabecera"><b>&nbsp;&nbsp;Usuarios Online</b></div>
	<div class="conten" style="padding:0px 0px 0px 10px;">
		<div class="section-separator"></div>
		<p style="font: message-box; margin: 0px 0px;"></p>
		<table style="padding:0px 0px 0px 30px;">
			<?php
				$f = array('0' => '100001116516776', /*Fabiin Andree Moreno C*/
					'1' => '100000229578122', /*Zayalehy Venuz*/
					'2' => '100003397498839', /*Altivia Ot*/
					'3' => '1091890640', /*Armando De Jesus Santoya*/
					'4' => '1279866302', /*Eydi Angelica Machacon Garces*/
					'5' => '1019502183', /*Tyfany Ramos*/
					'6' => '1246883020', /*Tati Sanchez G*/
					'7' => '671346664', /*Katina Charris*/
					'8' => '733958977', /*Juan Carlos Calabria Sarmiento*/
					'9' => '1183625811', /*Cesar Andron Julio*/
					'10' => '1156980463', /*Ed Alvarez*/
					'11' => '570549806', /*Norman Jesus Henriquez*/
					'12' => '746938600', /*Ing Alvaro Jose Polo*/
					'13' => '1125787342' /*Juliette Rodriguez*/
				);
			?>
			<tr>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[1]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[2]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[5]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[9]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[13]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[6]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[0]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[8]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
				<td>
					<div style="width: 112px; height: 120px; text-align:left;">
						<a href="<?php $var=feeds($f[12]); echo $var[0]; ?>" style="text-decoration: none;">
							<div class="bordes" style="border-color: #ccc9ce;">
								<?php 
				        			if(file_exists('http://graph.facebook.com/DJom20/picture?type=large')){ 
				        				echo '<img alt="" src="http://graph.facebook.com/<?php echo $var[0]; ?>/picture?type=large" width="100" height="100">'; 
				        			}
				        		?>
							</div>
							<?php echo $var[1]; ?>
						</a>
					</div>
				</td>
			</tr>
			<tr><td colspan="3">&nbsp;</td></tr>
			<tr><td colspan="3">&nbsp;</td></tr>
			<?php
				$sql='SELECT  COUNT( `usuario`.`id`) FROM `usuario` WHERE  `usuario`.`estado`=1 AND  `usuario`.`online`=1';
			?>
			<tr><td colspan="3" style="text-align:center; color:#FFF;">Y 4 invitados!</td></tr>
		</table>
		<div class="section-separator"></div>
	</div>
	<div class="foter">&nbsp;</div>
</div><!-- end .sidebar3 -->