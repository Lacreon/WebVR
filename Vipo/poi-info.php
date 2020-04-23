<?php
	header('Content-Type: application/json');
	
	if (empty($_GET['id']) || !is_numeric($_GET['id'])){
		http_response_code(400);
		die();
	}

	if (file_exists("data/poi-".$_GET['id'].".json")){
		include "data/poi-".$_GET['id'].".json";
	}
	else{
		http_response_code(422);
	}