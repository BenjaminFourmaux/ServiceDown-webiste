<?php
	class Country {
		static $endpoint = 'countries';
		private $path = null;
		
		function __construct(){
			$this->path = getenv('API_URI').Country::$endpoint;
		}
		
		public function get_all() {
			return $response = (new Request($this->path))->get();
		}
		
		public function get_id_by_cname($cname){
			$countries = array(
				"fr" => 74,
			);
			return $countries[$cname];
		}
	}
?>