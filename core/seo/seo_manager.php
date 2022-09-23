<?php
	class SEO_manager {
		private $jsonReadFile;
		
		function __construct(){
			$file = file_get_contents("core/seo/seo_strat.json", true);
			$this->jsonReadFile = json_decode($file, true);
		}
		
		/**
		* Function to get the SEO properties for a page
		* Call him in controller
		* @Param string, Page name
		* @Return Null
		**/
		public function for_page($pageName){
			try {
				foreach($this->jsonReadFile['pages'] as $row) {
					if ($row['name'] === $pageName){
						return new SEO_page($row);
					}
				}
				return null;
			} catch (Exception $ex) {
				return null;
			}
		}
	}
	
	class SEO_page {
		private $name = null;
		private $description = null;
		private $keywords = null;
		private $generator = null;
		private $theme_color = null;
		// Open Graph properties
		private $og_title = null;
		private $og_description = null;
		private $og_type = null;
		private $og_url = null;
		private $og_image = null;
		
		function __construct($json){
			$this->name = $json['name'];
			$this->description = $json['description'];
			$this->keywords = $json['keywords'];
			$this->generator = $json['generator'];
			$this->theme_color = $json['theme_color'];
			// Open Graph
			$this->og_title = $json['og-title'];
			$this->og_description = $json['og-description'];
			$this->og_type = $json['og-type'];
			$this->og_url = $json['og-url'];
			$this->og_image = $json['og-image'];
		}
		
		/* Getteur and Setteur */
		public function __get($name){
			return $this->$name ?? null;
		}
		
	}
?>