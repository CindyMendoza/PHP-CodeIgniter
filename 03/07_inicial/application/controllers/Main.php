<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
    }

    public function index()
    {

        $this->_waste_process();
        $this->_bogus_process();


        $process_timer[] = ['Sin datos'];
        $data['generated_table'] = $this->table->generate($process_timer);
        $this->load->view('index', $data);
    }













    function _waste_process()
    {

        $i = 0;
        while($i++ < 10000)
            echo '<!-- -->';
    }




    function _bogus_process()
    {
        sleep(2);
    }

}