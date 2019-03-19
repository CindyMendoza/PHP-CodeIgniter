<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
    }

    public function index()
    {

        $this->benchmark->mark('1');
        $this->_waste_process();
        $this->benchmark->mark('2');
        $this->_bogus_process();
        $this->benchmark->mark('3');

        //echo $this->benchmark->elapsed_time('1','3');

        $process_timer[] = ['1-3', $this->benchmark->elapsed_time('1','3')];
        $process_timer[] = ['1-2', $this->benchmark->elapsed_time('1','2')];
        $process_timer[] = ['2-3', $this->benchmark->elapsed_time('2','3')];

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