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
	if(!isset($_GET['controller'])) { $controller = ""; $urlArgs = ""; } else { 
		$params = explode("/", $_GET['controller']);
		$controller = $params[0]; 
		array_shift($params);
		$urlArgs = $params;
	}
	
	
	/*** Super global variables ***/
	$WEBSITE_URI = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'];
	$SEO_MANAGER = new SEO_manager();
	
	
	
	// Choose controller
	switch($controller){
		case 'services':
			require('controllers/c_services.php');
			break;
		case 'status':
			require('controllers/c_status.php');
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
		case 'contact':
			require('controllers/c_contact.php');
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