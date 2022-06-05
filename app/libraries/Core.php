<?php 
	class Core{
		private $currentController = "Home";
		private $currentMethod = "index";
		private $params = [];

		private function getUrl(){
			var_dump($_SERVER);
			// if (isset($_SERVER['REQUEST_URL'])) {
			// 	var_dump($_SERVER['REQUEST_URL']);
			// }
		}
	}