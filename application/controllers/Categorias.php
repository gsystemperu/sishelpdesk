<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorias extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Registro');
        $this->load->helper('url');
    }


    public function listado()
    {
        if (isset($this->session->userdata['logged_in'])) {
            //Scripts
            $styles['modulecss']= "categoria/categoria.css";
            $scripts['modulejs']= "categoria_js/launcher.module.js";
            $this->load->view('layouts/header', $styles);
            $this->load->view('categoria/listado', $scripts);
            $this->load->view('layouts/footer');
        } else {
            header('Location: '.base_url());
        }
    }

    public function subcategorias()
    {
        if (isset($this->session->userdata['logged_in'])) {
            //Scripts
            $styles['modulecss']= "categoria/categoria.css";
            $scripts['modulejs']= "categoria_js/launcher.module.js";
            $this->load->view('layouts/header', $styles);
            $this->load->view('categoria/subcategorias', $scripts);
            $this->load->view('layouts/footer');
        } else {
            header('Location: '.base_url());
        }
    }
    
    public function crear()
    {
        if (isset($this->session->userdata['logged_in'])) {
            //Scripts
            $styles['modulecss']= "categoria/categoria.css";
            $scripts['modulejs']= "categoria_js/categoria.module.js";
            $this->load->view('layouts/header', $styles);
            $this->load->view('categoria/crear', $scripts);
            $this->load->view('layouts/footer');
        } else {
            header('Location: '.base_url());
        }
    }

    public function crearsubcategoria()
    {
        if (isset($this->session->userdata['logged_in'])) {
            //Scripts
            $styles['modulecss']= "categoria/categoria.css";
            $scripts['modulejs']= "categoria_js/launcher.module.js";
            $this->load->view('layouts/header', $styles);
            $this->load->view('categoria/crearsubcategoria', $scripts);
            $this->load->view('layouts/footer');
        } else {
            header('Location: '.base_url());
        }
    }
}
