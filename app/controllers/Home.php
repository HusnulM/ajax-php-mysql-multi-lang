<?php

class Home extends Controller {

	public function index()
	{
		$data['title'] = 'Ajax | PHP | MySQL - Multi Language';
		$this->view('home/index', $data);
	}

	public function changelanguage($page, $lang){
		$data = $this->model('Home_model')->changelanguage($page, $lang);
		echo json_encode($data);
	}
	
}