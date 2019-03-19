<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['name'] = "Bernardo";
		$data['version'] = 1.5;
		$this->load->view('index', $data );
	}

	public function greet_person($name)
	{
		$data['name'] = $name;
		$this->load->view('greet_person', $data );
	}

	public function greet_everyone($person_hosting)
	{
		$data['person'] = $person_hosting;
		$data['guests'] = ['Marco', 'Sergio', 'Daniel'];
		$this->load->helper('url');
		$this->load->view('greet_everyone', $data );
	}

}
