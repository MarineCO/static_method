<?php 
	
require 'vendor/autoload.php';


class Armoire {
	
	private $db;

	public function __construct() {

		ORM::configure('mysql:host=localhost;dbname=mon_armoire');
		ORM::configure('username', 'root');
		ORM::configure('password', 'root');

		$this->db = ORM::for_table('mes_chaussettes');
	}

	public function getInstance() {
		return $this->db;
	}

}

?>