<?php

define('DOCUMENT_ROOT',dirname(__DIR__));
define('SITE_PATH','http://localhost:8000/myproject/miscall/web-app/');
//Save All the Setting
return [

		'constants'=>[

			'APPSESSION_NAME' => 'zwave_session',

			'TIME_ZONE'=>'Asia/Kolkata',

			//Note System Path is for File System or File Handling Stuff
			'SYSTEM_PATH'=>DOCUMENT_ROOT,

			'APP_PATH'=>SITE_PATH,
			'API_PATH'=>'',
			
			'WEB_APP'=>'web-app',

			'ADMIN_PATH'=>SITE_PATH.'admin/',
			'AJAX_PATH'=>SITE_PATH.'ajax/',
			'USER_ASSETS'=>SITE_PATH.'user-assets/',

			//File Uploading Setting
			'FILE_UPLOAD_PATH'=>dirname(__DIR__).'/resources/uploads/',
			'FILE_MAX_SIZE' =>'5',
		],

		'database'=>[

			'dbname'=>'miscallapp',
			'host'=>'127.0.0.1',
			'db_driver'=>'sqli',
			'username'=>'root',
			'password'=>'',
		],

	'assets'=>[
			    'js'=>[
					'jquery.js',
					'myscript.js',
		],
		'css'=>[
			'mystyle.css',
		],
	],

	'app_key'=>'secret_key',
	'app_password'=>'1234', 
	'pass_encrypt' => 'md5',
	'salt_hash' => '!!test^&*#2002@',
];




