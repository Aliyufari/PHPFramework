<?php 
	class Core{
		private $currentController = "Pages";
		private $currentMethod = "index";
		private $params = [];

		public function __construct(){
			$url = $this->getUrl();

			if(isset($url[0])) {
				if (file_exists('..controllers/'. ucwords($url[0]) . '.php')) {
					$this->currentController = ucwords($url[0]);
					unset($url[0]);
				}
			}

			require_once '../app/controllers/'. $this->currentController .'.php';
			$this->currentController = new $this->currentController;

			if (isset($url[1])) {
				if (method_exists($this->currentController, $url[1])) {
					$this->currentMethod = $url[1];
					unset($url[1]);
				}
			}

			$this->params = $url ? array_values($url) : [];
			
			call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
		}

		private function getUrl(){
			if (isset($_GET['url'])) {

				$url = trim($_GET['url'], '/');

				$url = filter_var($url, FILTER_SANITIZE_URL);

				$url = explode('/', $url);

				return $url;
			}
		}
	}
