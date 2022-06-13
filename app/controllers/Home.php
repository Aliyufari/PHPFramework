<?php 
	class Home extends Controller{
		
		public function __construct()
		{
			
		}

		public function index(){
			echo "Index Method";
		}

		public function about(){
			$this->view('home');
		}
	}