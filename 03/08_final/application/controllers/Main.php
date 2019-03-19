<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');

        if( $this->config->item('language') != 'spanish' )
            show_error('Es necesario establecer el idioma a Espa&ntilde;ol', 500, 'Error');

    }

    public function index()
    {

        $log_config_level = $this->config->item('log_threshold');
        if( $log_config_level == 4 || $log_config_level == 3 )
        log_message('info', 'Carga correcta de datos');

        $system_email = $this->config->item('system_email');
        $data['generated_table'] = $system_email;
        $this->load->view('index', $data);
    }

}