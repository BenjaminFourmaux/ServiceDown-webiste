<?php
/**
* DotEnv is a module to set env var from .env files
* Author: Benjamin Fourmaux
**/
class DotEnv {
	
	/**
	* List of .env files
	* @var string[]
	**/
	private $files_name = [".env", ".env.production", ".env.prod", 
							".env.development", ".env.dev", ".env.local",
							".env.test"];
							
	/**
	* Directory to the .env files folder
	* @var string
	**/
	protected $path;
	
    public function __construct($path = "./") {
		$this->path = $path;
		
		// Browse .env files name
		foreach($this->files_name as $file_name) {
			$filepath = $this->path . $file_name;
			
			// Open file, if false = the file doesn't exist
			if (file_exists($filepath)) {
				$file = fopen($filepath, "r");
				
				if ($file) {
					$content = stream_get_contents($file);
					
					// String into line string array
					$varEnvArray = explode("\n", $content);
					
					// Browse env var and add him to the env context
					foreach($varEnvArray as $varEnv) {
						// Clean var 
						$cleanVar = trim($varEnv);
						
						putenv($cleanVar);
					}
				}
			}
		}
    }
}
