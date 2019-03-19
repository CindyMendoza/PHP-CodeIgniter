<?php

class Person  extends CI_Controller {

    public function index()
    {
        echo "Controlador Person";
    }

    public function isMarried($id_person)
    {
        $people[] = ['name' => 'Bernardo', 'married' => false];
        $people[] = ['name' => 'Arturo', 'married' => true];
        $people[] = ['name' => 'Gabriela', 'married' => true];

        $is_married =  $people[$id_person]['married'] ? ' is ' : ' is not ';
        echo $people[$id_person]['name'] . $is_married . 'married';
    }

}