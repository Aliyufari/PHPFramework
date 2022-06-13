<?php 
	class Controller{
		public function model($file){

			require_once '../app/models/'. $file . '.php';

			return new $file();
		}

		public function view($file,  $data = []){

			if (file_exists('../app/views/'. $file . '.php')) {

				require_once '../app/views/'. $file . '.php';
			}
			else{

				die('Error 404, No such file in the directory!');
			}
			
		}
	}