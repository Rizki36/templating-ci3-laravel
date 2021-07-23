<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('slice');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->slice->with('name', 'John Doe');

		view('page');
	}
}
