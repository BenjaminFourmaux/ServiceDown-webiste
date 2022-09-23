<?php
	class Translate {
		public $langAvailable = ['fr'];
		public $currentLang;
		private $jsonReadFile;
		
		function __construct($lang){
			$lang = strtoLower($lang);
			if(in_array($lang, $this->langAvailable)){
				$file = file_get_contents("core/translate/".$lang.".json", true);
				$this->jsonReadFile = json_decode($file, true);
				$this->currentLang = $lang;
			} else {
				// By default use english
				$file = file_get_contents("core/translate/fr.json", true);
				$this->jsonReadFile = json_decode($file, true);
				$this->currentLang = "en";
			}
		}
		
		/**
		* Function to get the translation
		* @Param string, JSON path of the translate
		* @Return Translated text or the path if the translate not found
		**/
		public function t($path){
			try {
				$research = $this->jsonReadFile;
				$jsonNode = explode('.', $path);
				
				foreach($jsonNode as $key => $value) {
					if(isset( $research[$value])) {
						$research = $research[$value];
					} else {
						$research = $path;
						break;
					}
				}
				
				return $research;
			} catch (Exception $ex) {
				return $path;
			}
		}
		
		/**
		* Function to get translate and add component instead of component mark
		* @Param string, JSON path of the translate
		* @Param array(string), Array of component to put instead of component mark 
		* {{<0>}} & {{</0>}} for end HTML tag
		* @Return Translated text with HTML component
		**/
		public function tc($path, $component) {
			try {
				if($component != null) {
					// Get translated text
					$text = $this->t($path);
					
					// Find insert component mark
					for($i=0; $i < count($component); $i++){
						$endBalise = "</".$this->getStringBetween($component[$i],"<", " ").">";
						
						// Replace mark by HTML Balise
						$text = str_replace("{{<".$i.">}}", $component[$i], $text);
						$text = str_replace("{{</".$i.">}}", $endBalise, $text);
					}
					
					return $text;
				} else {return $this->t($path);}
			} catch (Exception $ex){
				return $path;
			}
			
		}
		
		
		private function getStringBetween($str, $start, $end){
			$pos1 = strpos($str, $start);
			$pos2 = strpos($str, $end);
			return substr($str, $pos1+1, $pos2-($pos1+1));
		}
		
	}
?>