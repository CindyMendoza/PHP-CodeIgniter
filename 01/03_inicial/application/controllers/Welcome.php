<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('index' );
	}

	public function greet_person($name)
	{
		$this->load->view('greet_person' );
	}

	public function greet_everyone($person_hosting)
	{
		$this->load->helper('url');
		$this->load->view('greet_everyone' );
	}

}
