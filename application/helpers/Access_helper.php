<?php
if (! function_exists('CHECK_USER_LOGIN')) {
    function CHECK_USER_LOGIN()
    {
        $CI =& get_instance();
        $CI->load->library('session');
        if (!isset($CI->session->userdata['logged_in'])) { // Si el usuario no esta logeado. Redireccionar a la página principal
            header('Location: '.base_url() . 'login');
        }
    }
}