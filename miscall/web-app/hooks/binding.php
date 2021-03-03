<?php
	
	$json_str=file_get_contents(dirname(__DIR__).'/view/template.json');
	$json_arr=json_decode($json_str,true);
	#$page_key= basename($_SERVER['PHP_SELF'],'.php');	
	$page_key= basename(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
	$page_key=Request::get()."/".$page_key;
		
	if(array_key_exists($page_key, $json_arr)){
		@$json_data_1=$json_arr[$page_key];
		foreach (@$json_data_1 as $key => $value) {
		@$$key = $value;
		
		}
	}

?>