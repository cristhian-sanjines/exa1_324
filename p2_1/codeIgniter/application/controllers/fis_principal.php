<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fis_principal extends CI_Controller {

	public function index()
	{
		$this->load->view('fis/principal');
	}
}
