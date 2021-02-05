<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function _construct()
	{
		parent::_construct();
		if(!$this->session->userdata('logged_in'))
		{
			redirect('user/login');
		}

	}
	public function index()
	{
		$data['title'] = 'Home';

		$this->load->view('template/header', $data);
		$this->load->view('template/navigation');
		$this->load->view('home');
		$this->load->view('template/footer');

	}
}
 