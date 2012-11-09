<?php
function feeds($id){
	if(isset($id)){
		if(ini_get('allow_url_fopen') ) {
			$datos = json_decode(file_get_contents("https://graph.facebook.com/".$id));
			//$datos = json_decode(fopen("https://graph.facebook.com/".$id.", "r")));
		
			$d=array();
			$d[0]=$datos->id;
			$d[1]=$datos->name;
			$d[2]=$datos->link;
			/*$d[3]=$datos->first_name;
			$d[4]=$datos->last_name;
			$d[5]=$datos->gender;
			$d[6]=$datos->locale;*/
			return $d;
		}
	}
}
?>