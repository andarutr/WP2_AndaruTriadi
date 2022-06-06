<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = 'Homepage';
		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_index');
		$this->load->view('template/v_footer');
	}

	public function about()
	{
		$data['judul'] = 'About';
		$this->load->view('template/v_header', $data);
		$this->load->view('template/v_about');
		$this->load->view('template/v_footer');
	}
}
