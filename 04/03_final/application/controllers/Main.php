<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->language = $this->session->language ? $this->session->language : 'english';

        $this->languages = [];
        $this->languages[] = 'elija una opci&oacute;n';
        $this->languages[] = 'english';
        $this->languages[] = 'spanish';
        $this->languages[] = 'french';
        $this->languages[] = 'arabic';

        $this->changes_log = [];
        $this->changes_log['from'] = $this->session->changes_from ? $this->session->changes_from : '';
        $this->changes_log['date'] = $this->session->changes_log ? $this->session->changes_log : '';

    }

    public function language_select()
    {
        $data['languages'] = $this->languages;
        $data['login_failed'] = FALSE;
        $table_arr[] = ['&Uacute;ltimo cambio', 'Or&iacute;gen'];
        $table_arr[] = ["<span id='spnDate'>".$this->changes_log['date']."</span>", "<span id='spnFrom'>".$this->changes_log['from']."</span>"];
        $data['log_table'] = $this->table->generate($table_arr);
        $this->_load_layout('language_select', $data);
    }

    public function set_language()
    {
        $id_language = $this->input->post('lang');
        $this->session->language = ($id_language == 0)? 'english' : $this->languages[$id_language];
        $datestring = '%d.%m.%Y %h:%i:%s %a';
        $time = time();
        $this->session->changes_log = mdate($datestring, $time);
        $this->session->changes_from = $_SERVER['REMOTE_ADDR'];
        $this->lang->load('calendar', $this->session->language);

        echo $this->calendar->generate(2006,6);

    }

    public function get_last_change()
    {

        $data['from'] = $this->changes_log['from'];
        $data['date'] = $this->changes_log['date'];
        $this->output
            ->set_content_type('application/json')
            ->set_output( json_encode($data) );

    }

    function _load_layout($template, $data = '')
    {

        $this->load->view('layout/header');
        $this->load->view($template,$data);
        $this->load->view('layout/footer');

    }

}