<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = 'SIGN IN - BERSIHNESIA';
		$this->load->view('Auth/index', $data);
	}
}
