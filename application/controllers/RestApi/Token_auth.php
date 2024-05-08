<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
use chriskacerguis\RestServer\RestController;
class Token_auth extends RestController {
	function __construct() { 
		parent::__construct();
		$this->load->model('gen_model');
		//$this->load->helper('security');
	}

	public function index_get(){
		echo "rest full api";
	}

}