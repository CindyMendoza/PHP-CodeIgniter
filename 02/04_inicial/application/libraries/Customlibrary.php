<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: trainer
 * Date: 04/11/2015
 * Time: 17:16
 */
class Customlibrary
{
    public function course_home_url()
    {
        $CI =& get_instance();
        $CI->load->helper('url');
        $home_url = site_url();
        return "<a href='{$home_url}'>Curso CodeIgniter</a>";
    }
}