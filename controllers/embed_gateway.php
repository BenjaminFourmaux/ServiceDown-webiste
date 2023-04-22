<?php
	/***********************
	* 	Embed Gateway  	   *
	***********************/
	
	// Implicits require
	# DotEnv from core/modules/dotenv/DotEnv.php
	# Request from core/modules/request/request.php
	
	// Usage
	# include('embed_gateway.php');
	
	// > Notes : Require_once on functions for reduce RAM usage
	
	function get_service_id_by_path($country, $q) {
		require_once('models/m_service.php');
		require_once('models/m_country.php');
		
		$ServiceClass = new Service();
		$CountryClass = new Country();
		
		// Convert var GET in to int or get country_id by cname
		$countryId = intval($country);
		if($countryId == 0) {
			$countryId = $CountryClass->get_id_by_cname($country);
		}
		
		return $ServiceClass->get_service_id_by_path($countryId, $q);
	}
?>