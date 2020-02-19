<?php
defined('BASEPATH') OR exit('No direct script access allowed');




/**
* 
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('GcseModel');
	}


	public function index()
	{
		//Load GCSE model
		$data['gcse_results'] = $this->GcseModel->getAllGcseResults();
		//print_r($data['gcse_results']);exit;

		$this->load->view('header');
		$this->load->view('home_view', $data);
		$this->load->view('footer');
	}

	// public function graphs(){
	// 	$this->load->view('charts.html');
	// }

	// public function explore(){
	// 	$this->load->view('header');
	// 	$this->load->view('explore_view');
	// 	$this->load->view('footer');
	// }
}
