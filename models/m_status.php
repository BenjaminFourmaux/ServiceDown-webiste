<?php
	class Status {
		static $endpoint = 'status';
		private $path = null;
		
		function __construct(){
			$this->path = getenv('API_URI').Status::$endpoint;
		}
		
		public function get_current_outage($country_id, $count) {
			return $response = (new Request($this->path.'/current_outage?country='.$country_id.'&count='.$count))->get();
		}
		
		public function get_current_status($country_id, $service_id) {
			return $response = (new Request($this->path.'/service/'.$service_id.'/country/'.$country_id))->get();
		}
	}
?>