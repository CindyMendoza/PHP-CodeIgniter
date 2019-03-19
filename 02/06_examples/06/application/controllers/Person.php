<?php

class Person  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //$this->output->delete_cache();
        $this->output->cache(1);
        $this->load->helper('date');
        $this->idle();   
        $this->load->view('index', $data);
    }

    function idle() 
    { 

        sleep(2);
        return 'Hanging';

    }

    public function delete()
    {
        $this->output->delete_cache();
    }

    public function error_example()
    {
        
        show_error('Ha sucedido algo inesperado', 500, 'Titulo');
        log_message('error', 'Se ha perdido la conexión a la base de datos.');
        #Es importante denotar que la ejecución se termina con show error así que si queremos
        # guardar un mensaje en la bitacora, dicho guardado debe de ocurrir antes de
        # mandar a llamar show error

    }

    public function alert()
    {
        $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_error_delimiters('', '');
                
                $config = array(
                    array(
                            'field' => 'username',
                            'label' => 'Username',
                            'rules' => 'required',
                            'errors' => array(
                                    'required' => 'El %s es requerido',
                            ),
                    ),
                    array(
                            'field' => 'password',
                            'label' => 'Password',
                            'rules' => 'required',
                            'errors' => array(
                                    'required' => 'El %s es requerido',
                            ),
                    )
        
                );

                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('alert');
                }
                else
                {
                    $data['msg'] = "Validating";   
                    $this->load->view('index');
                }
        //$this->load->view('alert');
    }

    

}