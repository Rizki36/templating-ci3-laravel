<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminlte extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('slice');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->slice->with('nama', 'Rizki Fitra Rahman');

		view('adminlte');
	}
}
