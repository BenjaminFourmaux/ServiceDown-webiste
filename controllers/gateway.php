<?php
	/***********************
	* Controler Gateway *
	***********************/
	
	/* Require */
	require_once('../core/modules/dotEnv/DotEnv.php');
	(new DotEnv('../.env'))->load();
	require_once('../core/modules/request/request.php');
	/** Require : Models **/
	require_once('../models/m_country.php'); $CountryClass = new Country();
	require_once('../models/m_service.php'); $ServiceClass = new Service();
	require_once('../models/m_search.php'); $SearchClass = new Search();
	require_once('../models/m_status.php'); $StatusClass = new Status();
	require_once('../models/m_report.php'); $ReportClass = new Report();
	
	
	/* Action GET parameter */
	if(isset($_GET['action'])){ $action = $_GET['action'];}else{http_response_code(500);exit();}
	
	/* Chose action */
	switch($action){
		case 'current_outage':
			if(isset($_GET['country']) && isset($_GET['count'])){
				get_services_current_outage($StatusClass, $_GET['country'], $_GET['count']);
			}
			break;
		case 'services':
			if(isset($_GET['country'])) {
				get_services_with_status($ServiceClass, $_GET['country'], $_GET['pageIndex']);
			}
			break;
		case 'service_id_by_path':
			if(isset($_GET['q']) && isset($_GET['country'])){
				// Convert var GET in to int or get country_id by cname
				$country = intval($_GET['country']);
				if($country == 0) {
					$country = $CountryClass->get_id_by_cname($_GET['country']);
				}
				
				get_service_id_by_path($ServiceClass, $country, $_GET['q']);
			}
			break;
		case 'current_status':
			if(isset($_GET['country']) && isset($_GET['service'])){
				get_current_status($StatusClass, $_GET['country'], $_GET['service']);
			}
			break;
		case 'search':
			if(isset($_GET['q'])){
				get_result_research($SearchClass, $_GET['q']);
			}
			break;
		case 'country_list':
			get_country_list($CountryClass);
			break;
		case 'send_report':
			if(isset($_POST['country']) && isset($_POST['service'])) {
				send_report($ReportClass, $_POST['country'], $_POST['service']);
			}
			break;
		default:
			http_response_code(404);
			exit();
			break;
	}
	
	/* Functions */
	function get_services_current_outage($Class, $country, $count){
		echo $Class->get_current_outage($country, $count);
	}
	
	function get_services_with_status($Class, $country, $pageIndex){
		echo $Class->get_services_by_country_with_status($country, $pageIndex);
	}
	
	function get_service_id_by_path($Class, $country, $q){
		echo $Class->get_service_id_by_path($country, $q);
	}
	
	function get_current_status($Class, $country, $service) {
		echo $Class->get_current_status($country, $service);
	}
	
	function get_country_list($Class) {
		echo $Class->get_all();
	}
	
	function get_result_research($Class, $researchText){
		echo $Class->search_service($researchText);
	}
	
	function send_report($Class, $country, $service){
		echo $Class->send_report($country, $service);
	}
	
?>