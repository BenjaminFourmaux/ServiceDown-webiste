<?php
	/* Index Controller */
	
	/** Import **/
	require_once('core/modules/dotEnv/DotEnv.php');
	(new DotEnv('.env'))->load();
	require_once("core/translate/translate.php");
	require_once("core/seo/seo_manager.php");
	
	
	/*** Cookies management ***/
	if (isset($_COOKIE['lang'])){$translate = new Translate($_COOKIE['lang']);}else{
		if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
			$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		}else{$lang="en";}
		$translate = new Translate($lang);
		setcookie('lang', $lang, time() + (10 * 365 * 24 * 60 * 60));
	}
	
	
	/*
		url path : index?controller={controller_name}
		url display : service-down.com/{controller_name}
	*/
	
	// get controller name
	if(!isset($_GET['controller'])) { $controller = ""; } else { $controller = $_GET['controller']; }
	
	
	/*** Super global variables ***/
	$seo_manager = new SEO_manager();
	
	
	
	// Choose controller
	switch($controller){
		case 'services':
			require('controllers/c_services.php');
			break;
		case 'about':
			require('controllers/c_about.php');
			break;
		case 'search':
			require('controllers/c_search.php');
			break;
		case 'login':
			require('controllers/c_login.php');
			break;
		case !"": // 404 not found
			http_response_code(404);
			include('views/error-404.html');
			break;
		default: // index
			require('controllers/c_home.php');
			break;
	}

?>