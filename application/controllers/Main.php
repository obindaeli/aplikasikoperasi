<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');      
	}

	public function index(){
		$this->load->view('auth/login');
	}

}
