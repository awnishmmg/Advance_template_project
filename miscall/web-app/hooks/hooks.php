<?php
	
return [
	
		'prepend_keys'=>['header','request','session','config','binding'],
		'append_keys'=>['footer'],
		
		'disallow_keys'=>[

		'ajax'=>
			[
				'template_header',
				'binding',
				'template_footer',
			],
		],

		'config'=>dirname(__DIR__).'/config/autoloader.php',
		'request'=>dirname(__DIR__).'/config/request_handler.php',
		'binding'=>dirname(__DIR__).'/hooks/binding.php',
		'header'=>dirname(__DIR__).'/view/template_header.php',
		'session'=>dirname(__DIR__).'/config/session_handler.php',
		'footer'=>dirname(__DIR__).'/view/template_footer.php',

];




