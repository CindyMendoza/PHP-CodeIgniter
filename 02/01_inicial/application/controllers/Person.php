<?php

class Person  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['people'] = ['Sergio','Francisco','Daniel'];
        $data['disk_size'] = 1024*1024;
        $data['languages'] = 'Java y .NET son grandes lenguajes para programar.';
        $this->load->view('index', $data);
    }

}