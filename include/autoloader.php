<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className){

	$url =$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if (strpos($url, 'include')!== false) {
		$path='../classes/';
	}else{
		$path='classes/';
	}
	$extension='.php';
	$fullPath= $path.$className.$extension;


	include_once $fullPath;
}

// echo myAutoloader('address');