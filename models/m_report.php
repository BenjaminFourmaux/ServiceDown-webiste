<?php
	class Report {
		static $endpoint = 'report';
		private $path = null;
		
		function __construct(){
			$this->path = getenv('API_URI').Report::$endpoint;
		}
		
		public function send_report($country_id, $service_id){
			return $response = (new Request($this->path))->post(array("country" => $country_id, "service" => $service_id));
		}
	}
?>