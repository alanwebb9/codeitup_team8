<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sql extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->helper('print_r2');

		$this->load->model('DAL');
	}

	public function index()
	{
		$this->load->view('editor');
	}

	public function submitQuery()
	{
		//handle input
		$data = array();
		 //$this->benchmark->elapsed_time('code_start', 'code_end');
		if ($this->input->post('query')){
			$queryText = $this->input->post('query');
			$result = $this->DAL->query($queryText);
			$data['result'] = $result['query'];
			$data['elapsed_time'] = $result['elapsed_time'];
			$data['queryText'] = $queryText;
		}
		$this->load->view('editor',$data);
	}
}
