<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bo_dashboard extends CI_Controller
{
	private $_template = "bo_index";

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data['page'] = "bo_dashboard";
		$this->load->view($this->_template, $data);
	}
}
