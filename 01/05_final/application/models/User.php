<?php

/**
 * Created by PhpStorm.
 * User: trainer
 * Date: 03/11/2015
 * Time: 17:50
 */
class User extends CI_Model
{
    function get_user_details($id_user)
    {
    	$where['id'] = $id_user;
        return $this->db->get_where('user', $where);
    }
}