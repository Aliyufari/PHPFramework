<?php
	class User{

		private $db;
		private $table = "users";

		public function __construct(){
			$this->db = new Database();
		}

		public function getUser(){
			$users = $this->db->query("SELECT * FROM {$this->table}");
			return $this->db->result();
		}
	}