<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $agent[] = [
            'Plataforma',
            'Navegador',
            'Versi&oacute;n',
            'Es Robot',
            'Es M&oacute;vil',
            'Es iPhone'
        ];

        $is_robot = $this->agent->is_robot() ? 'Si' : 'No';
        $is_mobile = $this->agent->is_mobile() ? 'Si' : 'No';
        $is_iphone = $this->agent->is_mobile('iphone') ? 'Si' : 'No';
        $agent[] = [
            $this->agent->platform(),
            $this->agent->browser(),
            $this->agent->version(),
            $is_robot,
            $is_mobile,
            $is_iphone
        ];

        $data['generated_table'] = $this->table->generate($agent);
        $this->load->view('index', $data);
    }

}