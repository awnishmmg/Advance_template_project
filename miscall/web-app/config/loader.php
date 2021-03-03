<?php

class Load{

	//Model Folder
	public static function model($file){

		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_model.php";
		if(file_exists($path)):
			$value=basename($path,'_model.php');
			include_once $path;
		else:	
			die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}

	// Helper Folder
	public static function helper($file){
		
		$path=include dirname(__DIR__)."/".__FUNCTION__."/{$file}_helper.php";
		if(file_exists($path)):
			$value=basename($path,'_helper.php');
			include_once $path;
		else:
			die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}

	// Library Folder
	public static function library($file){
		
		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}.class.php";
		if(file_exists($path)):
				$value=basename($path,'.class.php');
				include_once $path;
		else:
				die('<b> Such '.__FUNCTION__.' File does not exist </b>');	
		endif;
	}

	//Config Folder
	public static function config($file){
		
		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_config.php";
		if(file_exists($path)):
				$value=basename($path,'_config.php');
				include_once $path;
		else:
				die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}

	//package Folder
	public static function package($file){
		
		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_package.php";
		if(file_exists($path)):
				$value=basename($path,'_package.php');
				include_once $path;
		else:
				die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}

	//Any General PHP File
	public static function php($file,$from){
		
		$path=dirname(__DIR__)."/".$from."/{$file}.php";
		if(file_exists($path)):
				$value=basename($path,'.php');
				include_once $path;
		else:
				die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}


	//Any General PHP File with Folder Name
	public static function php_file($file,$tmp_data=[]){
		
		$path=dirname(__DIR__)."/{$file}.php";
		if(file_exists($path)):

			//define the values
			
			if(count($tmp_data)>0):
				foreach ($tmp_data as $key => $value) {
					$$key = $value;		
				}
			endif;

				include_once $path;
		else:
				die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}

	//Any File with Root Folder and File name with Any Extension
	public static function file($file){
		
		$path=dirname(__DIR__)."/{$file}";
		if(file_exists($path)):
				$value=basename($path);
				include_once $path;
		else:
				die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}

	public static function view($file,$tmp_data=[]){

		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_view.php";
		if(file_exists($path)){
			
			//define the values
			if(count($tmp_data)>0):
				foreach ($tmp_data as $key => $value) {
					$$key = $value;		
				}
			endif;
			include_once $path;
		}else{

			die('<b> Such '.__FUNCTION__.' File does not exist </b>');

		}//end if-else


}//end of Views Functions

}
