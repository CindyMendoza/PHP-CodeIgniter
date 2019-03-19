<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');

    }

    public function index()
    {
        log_message('info', 'Carga correcta de datos');
        $data['generated_table'] = '';
        $this->load->view('index', $data);
    }

}