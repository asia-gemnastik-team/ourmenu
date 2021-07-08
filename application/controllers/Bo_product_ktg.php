<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bo_product_ktg extends CI_Controller
{
	private $_template = "bo_index";

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data['page'] = "bo_product_ktg";
		$this->load->view($this->_template, $data);
	}
}