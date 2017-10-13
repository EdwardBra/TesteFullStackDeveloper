<?php

if ( isset($_POST) && !empty)($_POST) ) ) {
	
	$id = $_POST['id'];
	$email = $_POST['email'];
	$session = $_POST['session'];
	
	$url = "https://api.georanker.com/v1/monitor/" . $id . ".json?email=" . $email . ."&session=" . $session;
	
	
	
	
	echo $url;
}


?>
