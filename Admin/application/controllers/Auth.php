<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	public function index()
	{
		$data['title'] = 'SIGN IN - BERSIHNESIA';
		$this->load->view('Auth/index', $data);
	}
}
