<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $users[] = ['Indice','Nombre', 'Apellido'];
        $users[] = [0, 'Bernardo', 'Navarrete'];
        $users[] = [1, 'Sergio' , 'Aguayo'];
        $users[] = [2, 'Francisco', 'Madero'];
        $users[] = [3, 'Daniel', 'Prieto'];
        $users[] = [4, 'Violeta', 'Morado'];
        $users[] = [5, 'Marco', 'De la Rosa'];
        $data['generated_table'] = '';
        $this->load->view('index', $data);
    }

    public function show_platforms()
    {
        $headers = ['Nombre', 'Creador', 'Popularidad'];
        $rows[] = ['Windows', 'Microsoft', 7];
        $rows[] = ['Mac', 'Apple', 8];

        $data['generated_table'] = '';
        $this->load->view('index', $data);

    }
}