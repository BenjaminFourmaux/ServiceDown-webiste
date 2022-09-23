<?php
	class Country {
		static $endpoint = 'country';
		private $path = null;
		
		function __construct(){
			$this->path = getenv('API_URI').Country::$endpoint;
		}
		
		public function get_all() {
			return $response = (new Request($this->path))->get();
		}
	}
?>