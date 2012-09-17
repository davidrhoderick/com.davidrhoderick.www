<?php

class Home extends CI_Controller {

	public function index()
	{

		$data['title'] = "";
		
		$data['meta'] = array(
		        array('name' => 'description', 'content' => ''),
		        array('name' => 'keywords', 'content' => '')
		    );

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer', $data);
	}

}