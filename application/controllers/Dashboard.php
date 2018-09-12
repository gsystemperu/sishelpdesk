<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/dashboard.php');
	}
	
	public function get_sidebar()
	{
		$this->load->view('dashboard/sidebar.php');
	}
}
