<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	private $meta_title;
		
	public function __construct()
	{
		parent::__construct();
		$this->meta_title = 'Vattenfall Energie';
		$this->view = "";
	}

	public function index()
	{
		$data = array();
		$data['meta_title'] = $this->meta_title;

		$this->view .= $this->load->view('layout/header', $data, false);
		$this->view .= $this->load->view('home_index', $data , false);
		$this->view .= $this->load->view('layout/footer', $data, false);

		echo $this->view;
	}

}