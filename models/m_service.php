<?php
	class Service {
		static $endpoint = 'service';
		private $path = null;
		
		function __construct(){
			$this->path = getenv('API_URI').Service::$endpoint;
		}
		
		public function get_services_by_country_with_status($country, $pageIndex){
			$uri = $this->path."/country/".$country."/with_status";
			if($pageIndex != null){ $uri = $uri."?page=".$pageIndex; }
			
			return $response = (new Request($uri))->get();
		}
	}
?>