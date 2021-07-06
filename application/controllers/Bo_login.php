<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bo_login extends CI_Controller {
	public function index()
	{
		$this->load->view('bo_login');
	}
}
