<?php
	class Service {
		static $endpoint = 'services';
		private $path = null;
		
		function __construct(){
			$this->path = getenv('API_URI').Service::$endpoint;
		}
		
		public function get_services_by_country_with_status($country, $pageIndex){
			$uri = $this->path."/country/".$country."/with_status";
			if($pageIndex != null){ $uri = $uri."?page=".$pageIndex; }
			
			return $response = (new Request($uri))->get();
		}
		
		public function get_service_id_by_path($country, $path){
			return (new Request($this->path."/by_path?country=".$country."&path=".$path))->get();
		}
	}
?>