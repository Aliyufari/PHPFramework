<?php 
	class Pages extends Controller{
		
		public function __construct(){
			$this->userModel = $this->model("User");
		}

		public function index(){
			echo "Index Method";
		}

		public function about(){
			$users = $this->userModel->getUser();
			$data = [
				'users' => $users
			];
			$this->view('about', $data);
		}
	}