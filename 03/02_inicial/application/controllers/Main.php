<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
    }

    public function page()
    {


        /*
        $config['full_tag_open'] = '';
        $config['full_tag_close'] = '';
        $config['cur_tag_open'] = '';
        $config['cur_tag_close'] = '';

        $config['first_tag_open'] = '';
        $config['first_tag_close'] = '';

        $config['num_tag_open'] = '';
        $config['num_tag_close'] = '';

        $config['last_tag_open'] = '';
        $config['last_tag_close'] = '';

        $config['next_link'] = '';
        $config['next_tag_open'] = '';
        $config['next_tag_close'] = '';

        $config['prev_link'] = '';
        $config['prev_tag_open'] = '';
        $config['prev_tag_close'] = '';
        */


        $users[] = ['Indice','Nombre', 'Apellido'];
        $users[] = [0, 'Bernardo', 'Navarrete'];
        $users[] = [1, 'Sergio' , 'Aguayo'];
        $users[] = [2, 'Francisco', 'Madero'];
        $users[] = [3, 'Daniel', 'Prieto'];
        $users[] = [4, 'Violeta', 'Morado'];
        $users[] = [5, 'Marco', 'De la Rosa'];
        $data['generated_table'] = $this->table->generate($users);
        $this->load->view('index', $data);
    }

}