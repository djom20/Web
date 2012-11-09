<?php
	function youtube($url,$w,$h){
		if(isset($url)!=0){
			require('../clases/youtube_class.php');
			$youtube = new youtube($url);
			
			$y=array();
			$y[0]=$youtube->getTitle();
			$y[1]=$youtube->getDescription();
			$y[2]=$youtube->getEmbeb($w,$h); /*170,140*/
			return $y;
		}
	}
?>