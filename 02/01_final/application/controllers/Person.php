<?php

class Person  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('form');
        $data['people'] = ['Sergio','Francisco','Daniel'];
        $this->load->helper('number');
        $data['disk_size'] = 1024*1024*1024*1024;
        $this->load->helper('text');
        $data['languages'] = 'Java y .NET son grandes lenguajes para programar.';
        $this->load->view('index', $data);
    }

}