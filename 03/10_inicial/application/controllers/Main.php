<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
    }

    public function index()
    {
        $agent[] = [
            'Plataforma',
            'Navegador',
            'Versi&oacute;n',
            'Es Robot'
        ];

        $data['generated_table'] = $this->table->generate($agent);
        $this->load->view('index', $data);
    }

}