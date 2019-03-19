<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
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
        $data['generated_table'] = $this->table->generate($users);
        $this->load->view('index', $data);
    }

    public function show_platforms()
    {
        $headers = ['Nombre', 'Creador', 'Popularidad'];
        $rows[] = ['Windows', 'Microsoft', 7];
        $rows[] = ['Mac', 'Apple', 8];
        $rows[] = ['Linux', 'Linus Torvalds', 10];

        $this->table->set_heading($headers);

        foreach( $rows as $row )
            $this->table->add_row($row);
        $data['generated_table'] = $this->table->generate();
        $this->load->view('index', $data);

    }
}