<?php 
	class Core{
		private $currentController = "Home";
		private $currentMethod = "index";
		private $params = [];

		public function __construct(){
			echo "<pre>";
			var_dump($_SERVER);
		}

		private function getUrl(){
			var_dump($_SERVER);
			// if (isset($_SERVER['REQUEST_URL'])) {
			// 	var_dump($_SERVER['REQUEST_URL']);
			// }
		}
	}