<?php

class Home  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('Customlibrary');
    }

    public function index()
    {

        $this->load->view('index');
    }

    public function about($person="")
    {
        $people[] = ['Web Dev Pato','Somos un grupo de desarrolladores Freelance'];
        $people[] = ['Sergio','Desarrollador Frontend'];
        $people[] = ['Marco','Desarrollador Backend'];

        $person = empty($person) ? 0 : $person;
        $data['entity'] = $people[$person];
        $this->load->helper('date');
        $this->load->view('about', $data);
    }

    public function edit()
    {
        $this->load->view('edit');
    }

    public function modify()
    {
        log_message('error', 'Se ha perdido la conexión a la BD');
        show_error('Ha sucedido algo inesperado', 500, 'Error');
        echo 'Acci&oacute;n para modificar';
    }

}