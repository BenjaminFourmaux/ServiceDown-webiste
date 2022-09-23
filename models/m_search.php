<?php
	class Search {
		static $endpoint = 'search';
		private $path = null;
		
		function __construct(){
			$this->path = getenv('API_URI').Search::$endpoint;
		}
		
		public function search_service($query){
			$urlencodeQuery = urlencode($query);
			
			return $response = (new Request($this->path."/service?q=".$urlencodeQuery))->get();
		}
		
	}
?>