<?php
	/** Status controller **/
	
	require_once('core/modules/request/request.php');
	
	include('controllers/embed_gateway.php');
	
	// Check if service exist 
	$response = get_service_id_by_path($_COOKIE['country'], "/status/".$urlArgs[0]);

	// If service not found raise 404 error
	if($response == "Resource not Available : 404" || $response == "Resource not Available : 403"){
		http_response_code(404);
		include('views/error-404.html');
		exit();
	}
	$service = json_decode($response, true);
	
	$page_title = str_replace("{{name}}", $service['name'], $translate->t("pages.service.hTitle"));
	
	// SEO
	$seo = $SEO_MANAGER->create(
		"service",
		str_replace("{{name}}", $service['name'], $translate->t("pages.service.seo.description")),
		str_replace("{{name}}", $service['name'], $translate->t("pages.service.seo.keywords")),
		str_replace("{{name}}", $service['name'], $translate->t("pages.service.seo.title")),
		$WEBSITE_URI.$service['path'],
		"https://cdn.service-down.net/images/generated?service_name=".strtolower($service['slug'])
	);
	
?>
<!DOCTYPE html>
<html lang="<?=$translate->currentLang?>">
	<?php
		// Include html head
		include "views/head.php";
		
		// Include JS lib for chart
		echo '<script src="'.getenv('CDN_URI').'js/chart-js/v3.9.1/package/dist/chart.min.js"></script>';
	?>
	<body class="dark">
		<?php
			// Include loading
			include "views/loader.html";
		
			// Include header (menubar)
			include "views/header.php";
			
			// Include body
			include "views/v_status.php";
			
			// Include footer
			include "views/footer.php";
		?>
	</body>
</html>
