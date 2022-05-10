<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tbl_datadiri','mself');
	}

	public function index()
	{
	
		$data=[
			'data'=>$this->mself->getdatadiri(),
			'dataorganisasi'=>$this->mself->getdataorganisasi()->result(),
			'datakeahlian'=>$this->mself->getdatakeahlian()->result()
		];
		$this->load->view('index',$data);
	
	}
}
