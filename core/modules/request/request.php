<?php
	class Request {
		private $ch;
		public $url;
		
		function __construct($url){
			$this->ch = curl_init();
			$this->url = $url;
		}
		
		public function get(){
			$response = null;
			try {
				curl_setopt($this->ch, CURLOPT_URL, $this->url);
				curl_setopt($this->ch, CURLOPT_HEADER, false);
				curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
				curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
				
				$content = curl_exec($this->ch);
				
				if (curl_errno($this->ch)) {
					echo curl_error($this->ch);
					die();
				}

				$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
				if($http_code == intval(200)){
					$response = $content;
				}
				else{
					echo "Resource not Available : " . $http_code;
				}
				
			} catch (Exception $ex) {
				print_r($ex);
			} finally {
				curl_close($this->ch);
			}
			return $response;
		}

		public function post($fields){
			$response = null;
			try {
				//curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($this->ch, CURLOPT_URL, $this->url);
				curl_setopt($this->ch, CURLOPT_HEADER, false);
				curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'POST'); 
				curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($this->ch, CURLOPT_POSTFIELDS, $fields);
				
				$content = curl_exec($this->ch);
				
				if (curl_errno($this->ch)) {
					echo curl_error($this->ch);
					die();
				}

				$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
				if($http_code == intval(200) || $http_code == intval(201)){
					$response = $content;
				}
				else{
					echo "Resource not Available : " . $http_code;
				}
				
			} catch (Exception $ex) {
				print_r($ex);
			} finally {
				curl_close($this->ch);
			}
			return $response;
		}
	}
?>