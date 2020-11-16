<?php

class Home_model{

	private $db;
	private $table = '';

	public function __construct()
	{
		$this->db = new Database;
	}

	public function changelanguage($page, $lang){
		$this->db->query("SELECT * FROM t_element WHERE page = '$page' and language = '$lang'");
        return $this->db->resultSet();
	}
}